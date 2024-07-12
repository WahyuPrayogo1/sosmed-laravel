<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostinganController extends Controller
{
    public function index()
    {
        $postingans = Postingan::all();
        return view('admin.page.postingan.index', compact('postingans'));
    }

    public function create()
    {
        return view('admin.page.postingan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $postingan = new Postingan();
        $postingan->user_id = Auth::id();
        $postingan->body = $request->body;

        if ($request->hasFile('image')) {
            $postingan->image = $request->file('image')->store('postingans', 'public');
        }

        $postingan->save();

        return redirect()->route('postingans.index')->with('success', 'Postingan created successfully.');
    }

    public function show(Postingan $postingan)
    {
        return view('admin.page.postingan.show', compact('postingan'));
    }

    public function edit(Postingan $postingan)
    {
        return view('admin.page.postingan.edit', compact('postingan'));
    }

    public function update(Request $request, Postingan $postingan)
    {
        $request->validate([
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $postingan->body = $request->body;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($postingan->image) {
                Storage::disk('public')->delete($postingan->image);
            }

            // Simpan gambar baru
            $postingan->image = $request->file('image')->store('postingans', 'public');
        }

        $postingan->save();

        return redirect()->route('postingans.index')->with('success', 'Postingan updated successfully.');
    }

    public function destroy(Postingan $postingan)
    {
        if ($postingan->image) {
            Storage::disk('public')->delete($postingan->image);
        }

        $postingan->delete();
        return redirect()->route('postingans.index')->with('success', 'Postingan deleted successfully.');
    }
}
