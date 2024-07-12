@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Edit Certificate</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('certificate.update', $certificate->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $certificate->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control" value="{{ $certificate->status }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="score">Score</label>
                        <input type="text" name="score" class="form-control" value="{{ $certificate->score }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="signature">Signature</label>
                        <canvas id="signature-pad" class="signature-pad" width=400 height=200
                            style="border:1px solid #000;"></canvas>
                        <input type="hidden" name="signature" id="signature">
                        <button type="button" id="clear" class="btn btn-warning">Clear</button>
                        <div>
                            @if ($certificate->signature)
                                <img src="{{ asset('signatures/' . $certificate->signature) }}" width="100">
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@5.0.2/dist/signature_pad.umd.min.js"></script>
    @push('js')
        <script>
            $(document).ready(function() {
                var canvas = document.getElementById('signature-pad');
                var signaturePad = new SignaturePad(canvas);

                $('#clear').on('click', function() {
                    signaturePad.clear();
                });

                $('form').on('submit', function(e) {
                    if (signaturePad.isEmpty()) {
                        alert('Please provide a signature first.');
                        e.preventDefault();
                        return false;
                    }

                    var dataUrl = signaturePad.toDataURL('image/png');
                    console.log(dataUrl); // Tambahkan log ini untuk memeriksa nilai dataUrl
                    $('#signature').val(dataUrl);
                });
            });
        </script>
    @endpush

@endsection
