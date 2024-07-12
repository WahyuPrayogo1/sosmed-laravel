@extends('admin.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="page-title-box">

                <h4 class="page-title">Tambahh Sertifikat</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('certificate.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Status</label>
                            <input type="text" name="status" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="score" class="form-label">Score</label>
                            <input type="text" name="score" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <canvas id="signature-pad" class="signature-pad" width=400 height=200
                                style="border:1px solid #000;"></canvas><br>
                            <input type="hidden" name="signature" id="signature">
                            <button type="button" id="clear" class="btn btn-warning">Clear</button>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success mt-4 btn-large">Save</button>
                        </div>
                    </form>
                </div>
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
