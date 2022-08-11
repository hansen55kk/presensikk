<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/data_absensi" method="get" name="filterAbsensi">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-static my-1">
                                <label for="fromDate">Dari tanggal</label>
                                <input type="date" name="fromDate" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md">
                            <div class="input-group input-group-static my-1">
                                <label for="toDate">Sampai tanggal</label>
                                <input type="date" name="toDate" class="form-control" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-gradient-primary">Apply Filter</button>
                </div>
            </form>
        </div>
    </div>
</div>
