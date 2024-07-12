@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Show Certificate</h1>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $certificate->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" class="form-control" value="{{ $certificate->status }}" readonly>
                </div>
                <div class="form-group">
                    <label for="score">Score</label>
                    <input type="number" name="score" class="form-control" value="{{ $certificate->score }}" readonly>
                </div>
                <div class="form-group">
                    <label for="signature">Signature</label>
                    {{-- <img src="{{ Storage::url($certificate->signature) }}" alt="Signature" class="img-fluid"> --}}
                </div>
                <a href="{{ route('certificate.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
