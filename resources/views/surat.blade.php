<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <style>
        .barcode {
            width: 200px;
            height: auto;
        }

        .signature {
            margin-top: 50px;
            width: 100%;
            text-align: right;
        }

        .signature img {
            width: 200px;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>Date: {{ $date }}</p>
    <img src="{{ $barcode }}" alt="Barcode" class="barcode">

    <div class="signature">
        <img src="{{ $signature }}" alt="Signature">
    </div>
</body>

</html>
