@extends('admin.dashboard')

@section('content')
    @push('css')
    @endpush
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card tilebox-one">
                    <div class="card-body">
                        <i class='uil uil-tear float-end'></i>
                        <h6 class="text-uppercase mt-0">Total Postingan</h6>
                        <h2 class="my-2" id="active-users-count">120</h2>
                    </div>
                </div>

                <div class="card tilebox-one">
                    <div class="card-body">
                        <i class='uil uil-clipboard-notes float-end'></i>
                        <h6 class="text-uppercase mt-0">User Terdaftar</h6>
                        <h2 class="my-2" id="active-views-count">1000</h2>
                    </div>
                </div>
                <div class="card tilebox-one">
                    <div class="card-body">
                        <i class='uil uil-check float-end'></i>
                        <h6 class="text-uppercase mt-0">User Online</h6>
                        <h2 class="my-2" id="active-views-count">100</h2>
                    </div>
                </div>


            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="card card-h-100">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Lokasi Mata Air</h4>
                        <div dir="ltr">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
