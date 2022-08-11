<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pegawai" method="post" name="addData" onkeydown="return event.key != 'Enter';">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg col-md">
                            <div class="input-group input-group-outline my-1">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-outline my-1">
                                <label for="uuid" class="form-label">UUID</label>
                                <input type="text" name="uuid" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-outline my-1">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg col-md">
                            <div class="input-group input-group-outline my-1">
                                <label for="address" class="form-label">Alamat</label>
                                <input type="text" name="address" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-outline my-1">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-outline my-1">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
