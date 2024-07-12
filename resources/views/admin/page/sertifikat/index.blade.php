@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-between mt-3 mb-3">
            <div class="col-6">
                <h3 class="card-title">Sertifikat</h3>
            </div>
            <div class="col-auto text-right">
                <a href="{{ route('certificate.create') }}" class="btn btn-primary">Tambah Sertifikat</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Score</th>
                                    <th>Tanda Tangan</th>
                                    <th>QR</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificates as $certificate)
                                    <tr>
                                        <td>{{ $certificate->name }}</td>
                                        <td>{{ $certificate->status }}</td>
                                        <td>{{ $certificate->score }}</td>
                                        <td><img src="{{ asset('signatures/' . $certificate->signature) }}" width="100">
                                        </td>
                                        <td><img src="{{ asset('qrcodes/' . $certificate->qrcode) }}" width="100"></td>
                                        <td>

                                            <a href="{{ route('generate-pdf', $certificate->id) }}"
                                                class="btn btn-info">PDF</a>
                                            <a href="{{ route('certificate.edit', $certificate->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('certificate.destroy', $certificate->id) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
