@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-between mt-3 mb-3">
            <div class="col-6">
                <h3 class="card-title">Postingan</h3>
            </div>
            <div class="col-auto text-right">
                <a href="{{ route('postingans.create') }}" class="btn btn-primary">Tambah Postingan</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable-buttons-tugas" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Body</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($postingans as $key => $postingan)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $postingan->body }}</td>
                                        <td><img src="{{ asset('storage/' . $postingan->image) }}" alt="Image"
                                                width="100"></td>
                                        <td>
                                            <a href="{{ route('postingans.show', $postingan->id) }}"
                                                class="btn btn-info">Show</a>
                                            <a href="{{ route('postingans.edit', $postingan->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('postingans.destroy', $postingan->id) }}" method="POST"
                                                style="display:inline;">
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

@push('js')
    <script>
        $(document).ready(function() {
            $('#datatable-buttons-tugas').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        exportOptions: {
                            columns: [0, 1, 2] // Hanya cetak kolom No, Body, dan Image
                        }
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        exportOptions: {
                            columns: [0, 1, 2] // Hanya cetak kolom No, Body, dan Image
                        },
                        customize: function(win) {
                            $(win.document.body).find('h1').remove();
                            $(win.document.body).find('title').remove();
                            $(win.document.body).find('div.dt-print-view').remove();
                            $(win.document.body).find('div.dt-print').remove();
                            $(win.document.body).find('div.footer').remove();

                            $(win.document.body)
                                .css('font-size', '10pt')
                                .prepend('<h2>Daftar Postingan</h2>');

                            $(win.document.body).find('table')
                                .addClass('display')
                                .css('font-size', 'inherit');

                            $(win.document.body).find('img').css({
                                width: '100px',
                                height: 'auto'
                            });

                            var css = '@page { size: auto;  margin: 10mm; } ' +
                                'img { width: 100px; height: auto; }',
                                head = win.document.head || win.document.getElementsByTagName(
                                    'head')[0],
                                style = win.document.createElement('style');

                            style.type = 'text/css';
                            style.media = 'print';

                            if (style.styleSheet) {
                                style.styleSheet.cssText = css;
                            } else {
                                style.appendChild(win.document.createTextNode(css));
                            }

                            head.appendChild(style);
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        exportOptions: {
                            columns: [0, 1, 2] // Hanya cetak kolom No, Body, dan Image
                        }
                    }
                ]
            });
        });
    </script>
@endpush
