@extends('components.template')
@section('content')
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">people</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Jumlah Pegawai</p>
                        <h4 class="mb-0">{{ $pegawai }}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3 d-flex">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm">last added {{ $lastAdded }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">today</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Jumlah Kunjungan</p>
                        <h4 class="mb-0"><b>Belum ada kunjungan, silakan TapAbsensi <a href="absen">di sini</a>.</b>
                        </h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3 d-flex">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm">last added: no data available</p>
                </div>
            </div>
        </div>
    </div>
@endsection
