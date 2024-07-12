<!DOCTYPE html>
<html>

<head>
    <title>Sign Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        canvas {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <canvas id="signature-pad" width="400" height="200"></canvas>
    <button id="clear">Clear</button>
    <button id="save">Save</button>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@5.0.2/dist/signature_pad.umd.min.js"></script>
    <script>
        $(document).ready(function() {
            var canvas = document.getElementById('signature-pad');
            var signaturePad = new SignaturePad(canvas);

            document.getElementById('clear').addEventListener('click', function() {
                signaturePad.clear();
            });

            document.getElementById('save').addEventListener('click', function() {
                if (signaturePad.isEmpty()) {
                    alert("Please provide a signature first.");
                    return;
                }

                var dataUrl = signaturePad.toDataURL('image/png');

                $.ajax({
                    url: '{{ route('save.signature') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        signature: dataUrl
                    },
                    success: function(response) {
                        alert("Signature saved successfully");
                    },
                    error: function(response) {
                        alert("An error occurred");
                    }
                });
            });
        });
    </script>
</body>

</html>
