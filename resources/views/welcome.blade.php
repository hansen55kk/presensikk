@extends('components.login-template')
@section('content')
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-0 mb-0">Welcome to PresensiKK</h4>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-center flex-row justify-content-center">
                        <a href="/absen" class="btn btn-primary text-uppercase">TapAbsensi</a>
                        <a href="/absen/manual" class="btn btn-primary text-uppercase mx-4">Absensi Manual</a>
                        <a href="/login" class="btn btn-primary text-uppercase">Login Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_script')
    <script>
        var loading = false;
        $(document).ready(function() {
            $('input_uuid').keyup(function(event) {
                if (event.which === 13) {
                    loading = true;
                    event.preventDefault();
                    $('form').submit();
                }
            });
        });
    </script>
@endsection
