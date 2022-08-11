@extends('components.login-template')
@section('alert')
    @if ($errors->any())
        <div class="alert {{ $errors->first() == 'Data not found' ? 'alert-danger' : ($errors->first() == 'Failed to insert data' ? 'alert-danger' : ($errors->first() == 'Data already present' ? 'alert-warning' : 'alert-success')) }} alert-dismissible text-white position-absolute my-7 start-0 end-0 mx-4"
            role="alert" id="alert">
            <span class="text-sm">{{ $errors->first() }}</span>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>
            setTimeout(function() {
                $('#alert').fadeOut('slow');
            }, 3000);
        </script>
    @endif
@endsection
@section('content')
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-0 mb-0">Tap Card</h4>
                            {{-- <div class="row mt-3">
                                        <div class="col-2 text-center ms-auto">
                                            <a class="btn btn-link px-3" href="javascript:;">
                                                <i class="fa fa-facebook text-white text-lg"></i>
                                            </a>
                                        </div>
                                        <div class="col-2 text-center px-1">
                                            <a class="btn btn-link px-3" href="javascript:;">
                                                <i class="fa fa-github text-white text-lg"></i>
                                            </a>
                                        </div>
                                        <div class="col-2 text-center me-auto">
                                            <a class="btn btn-link px-3" href="javascript:;">
                                                <i class="fa fa-google text-white text-lg"></i>
                                            </a>
                                        </div>
                                    </div> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" class="text-start" id="input_uuid" action="/absen" method="post">
                            @csrf
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">UUID</label>
                                <input name="uuid" type="text" class="form-control" autofocus required>
                            </div>
                            {{-- <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                                        <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                                    </div> --}}
                            {{-- <div class="text-center">
                                        <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign
                                            in</button>
                                    </div> --}}
                            {{-- <p class="mt-4 text-sm text-center">
                                        Don't have an account?
                                        <a href="../pages/sign-up.html"
                                            class="text-primary text-gradient font-weight-bold">Sign up</a>
                                    </p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div> --}}
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
