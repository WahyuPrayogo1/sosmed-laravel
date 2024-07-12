<!DOCTYPE html>
<html>

<head>
    <title>Hi</title>
    <style>
        body {
            background-image: url('{{ public_path('template.jpg') }}');
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .judul {
            text-align: center;
            font-size: 60px;
            margin-bottom: 10px;
            /* Jarak antara judul dengan deskripsi */
        }

        .judulDesk {
            text-align: center;
            font-size: 20px;
            margin-top: -20px;
            /* Atur margin atas negatif untuk mendekatkan dengan judul */
            margin-bottom: 20px;
            /* Jarak bawah dari deskripsi */
        }

        .nama {
            text-align: center;
            font-size: 50px;
            margin-bottom: 10px;
            /* Jarak antara nama dengan deskripsi berikutnya */
        }

        .skor {
            text-align: center;
            font-size: 30px;
            margin-bottom: 20px;
            /* Jarak antara skor dengan detail sertifikat berikutnya */
        }

        .deskripsi {
            text-align: center;
            margin-bottom: -50px;
            /* Jarak antara deskripsi dengan nama */
        }

        .content {
            text-align: center;
        }

        #upp {
            width: 100%;
            /*background:red;*/
        }

        .alignleft,
        .alignright {
            display: inline-block;
        }

        .alignleft {
            padding-left: 100px;
        }

        .alignright {
            padding-right: 100px;
        }
    </style>

</head>

<body>
    <br><br><br>
    <div>
        <br><br><br>
        <h1 class="judul">SERTIFIKAT</h1>
        <h2 class="judulDesk">KELULUSAN {{ $certificate->status }}</h2>
        <p class="deskripsi">Sertifikat ini dengan bangga diberikan kepada:</p>
        <h1 class="nama">{{ $certificate->name }}</h1>
        <p class="content">Karena telah menyelesaikan masa magang di perusahaan CurhatBang selama periode enam bulan,
            dengan hasil yang
            memuaskan, dengan predikat nilai</p>
        <h1 class="skor">{{ $certificate->score }}</h1>


        <br><br><br> <br>
        <table id="upp">
            <tr>
                <td>
                    <p class="alignleft">
                        <img src="{{ public_path('qrcodes/' . $certificate->qrcode) }}" alt="Tanda Tangan" width="150px"
                            height="150px">
                    </p>
                </td>
                <td></td>
                <td align="right">
                    <p class="alignright">Tanda Tangan <br>
                        <img src="{{ public_path('signatures/' . $certificate->signature) }}" alt="Tanda Tangan"
                            width="150px" height="150px">

                    </p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
