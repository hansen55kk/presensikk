<div class="modal fade" id="deleteModal{{ $table->id }}" tabindex="-1" role="dialog"
    aria-labelledby="deleteModalLabel{{ $table->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $table->id }}">Hapus Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pegawai/delete/{{ $table->id }}" method="post" name="deleteData">
                <div class="modal-body text-wrap">
                    <p style="text-align: left">
                        Apakah Anda yakin ingin menghapus data {{ $table->name }}? <b class="text-strong text-danger">
                            Anda tidak dapat mengurungkan
                            tindakan ini.
                        </b>
                    </p>
                </div>
                @csrf
                @method('delete')
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-gradient-danger">Delete Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
