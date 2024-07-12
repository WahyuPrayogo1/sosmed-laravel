<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use PDF;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.page.sertifikat.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page.sertifikat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'score' => 'required',
            'signature' => 'required',
        ]);

        // Decode base64 data
        $signatureData = $request->input('signature');
        list($type, $data) = explode(';', $signatureData);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);

        // Buat nama file unik untuk tanda tangan
        $imageName = uniqid() . '.png';
        $path = public_path('signatures/' . $imageName);

        // Pastikan direktori 'signatures' ada di folder 'public'
        if (!file_exists(public_path('signatures'))) {
            mkdir(public_path('signatures'), 0777, true);
        }

        // Simpan gambar tanda tangan ke direktori 'public/signatures'
        file_put_contents($path, $data);

        // Buat QR code
        $qrCode = QrCode::create('Name: ' . $request->name . ', Score: ' . $request->score);
        $writer = new PngWriter();
        $qrCodeImageName = uniqid() . '.png';
        $qrCodePath = public_path('qrcodes/' . $qrCodeImageName);

        // Pastikan direktori 'qrcodes' ada di folder 'public'
        if (!file_exists(public_path('qrcodes'))) {
            mkdir(public_path('qrcodes'), 0777, true);
        }

        // Simpan QR code ke direktori 'public/qrcodes'
        $writer->write($qrCode)->saveToFile($qrCodePath);

        // Simpan data sertifikat ke database
        $certificate = new Certificate();
        $certificate->name = $request->name;
        $certificate->status = $request->status;
        $certificate->score = $request->score;
        $certificate->signature = $imageName; // Simpan path gambar
        $certificate->qrcode = $qrCodeImageName; // Simpan path gambar QR code
        $certificate->save();

        return redirect()->route('certificate.index')->with('success', 'Certificate created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        return view('admin.page.sertifikat.show', compact('certificate'));
    }

    public function viewPDF($id)
    {

        $certificate = Certificate::findOrFail($id);

        // Load view 'pdf' dengan data sertifikat
        $pdf = PDF::loadView('admin.page.sertifikat.pdf', compact('certificate'));

        // Unduh PDF dengan nama file 'itsolutionstuff.pdf'
        return $pdf->download('itsolutionstuff.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.page.sertifikat.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'score' => 'required',
            'signature' => 'required',
        ]);

        $certificate = Certificate::find($id);

        // Decode base64 data
        $signatureData = $request->input('signature');
        list($type, $data) = explode(';', $signatureData);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);

        // Hapus gambar tanda tangan lama jika ada
        if ($certificate->signature && file_exists(public_path('signatures/' . $certificate->signature))) {
            unlink(public_path('signatures/' . $certificate->signature));
        }

        // Buat nama file unik untuk tanda tangan baru
        $imageName = uniqid() . '.png';
        $path = public_path('signatures/' . $imageName);

        // Pastikan direktori 'signatures' ada di folder 'public'
        if (!file_exists(public_path('signatures'))) {
            mkdir(public_path('signatures'), 0777, true);
        }

        // Simpan gambar tanda tangan baru ke direktori 'public/signatures'
        file_put_contents($path, $data);

        // Buat QR code baru
        $qrCode = QrCode::create('Name: ' . $request->name . ', Score: ' . $request->score);
        $writer = new PngWriter();
        $qrCodeImageName = uniqid() . '.png';
        $qrCodePath = public_path('qrcodes/' . $qrCodeImageName);

        // Hapus QR code lama jika ada
        if ($certificate->qrcode && file_exists(public_path('qrcodes/' . $certificate->qrcode))) {
            unlink(public_path('qrcodes/' . $certificate->qrcode));
        }

        // Pastikan direktori 'qrcodes' ada di folder 'public'
        if (!file_exists(public_path('qrcodes'))) {
            mkdir(public_path('qrcodes'), 0777, true);
        }

        // Simpan QR code baru ke direktori 'public/qrcodes'
        $writer->write($qrCode)->saveToFile($qrCodePath);

        // Update data sertifikat
        $certificate->name = $request->name;
        $certificate->status = $request->status;
        $certificate->score = $request->score;
        $certificate->signature = $imageName; // Simpan path gambar baru
        $certificate->qrcode = $qrCodeImageName; // Simpan path gambar QR code baru
        $certificate->save();

        return redirect()->route('certificate.index')->with('success', 'Certificate updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $certificate = Certificate::find($id);

        // Hapus gambar tanda tangan dari direktori 'public/signatures'
        if ($certificate->signature && file_exists(public_path('signatures/' . $certificate->signature))) {
            unlink(public_path('signatures/' . $certificate->signature));
        }

        // Hapus gambar QR code dari direktori 'public/qrcodes'
    if ($certificate->qrcode && file_exists(public_path('qrcodes/' . $certificate->qrcode))) {
        unlink(public_path('qrcodes/' . $certificate->qrcode));
    }

        // Hapus entri sertifikat dari database
        $certificate->delete();

        return redirect()->route('certificate.index')->with('success', 'Certificate deleted successfully.');
    }
}
