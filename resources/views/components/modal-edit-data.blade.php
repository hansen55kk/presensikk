<div class="modal fade" id="editModal{{ $table->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editModalLabel{{ $table->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $table->id }}">Edit Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pegawai/edit/{{ $table->id }}" method="post" name="editData"
                onkeydown="return event.key != 'Enter';">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg col-md">
                            <div class="input-group input-group-static my-1">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $table->name }}"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-static my-1">
                                <label for="uuid">UUID</label>
                                <input type="text" name="uuid" class="form-control" value="{{ $table->uuid }}"
                                    required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-static my-1">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" class="form-control" value="{{ $table->email }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg col-md">
                            <div class="input-group input-group-static my-1">
                                <label for="address">Alamat</label>
                                <input type="text" name="address" class="form-control"
                                    value="{{ $table->address }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-static my-1">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control"
                                    value="{{ $table->status }}" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-static my-1">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ $table->phone }}" />
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
