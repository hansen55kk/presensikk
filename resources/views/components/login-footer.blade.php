<footer class="footer position-absolute bottom-2 py-2 w-100">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
                <div class="copyright text-center text-sm text-white text-lg-start">
                    © Copyright
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <b>Sekolah Kristen Kalam Kudus</b>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    {{-- <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative
                            Tim</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="/absen{{ Route::current()->uri == 'absen' ? '/manual' : '' }}"
                            class="nav-link text-white">{{ Route::current()->uri == 'absen' ? 'Input Manual' : 'RFID Scan' }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link text-white">Login
                            Admin</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white"
                            target="_blank">License</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</footer>
