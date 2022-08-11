<div class="alert alert-danger alert-dismissible text-white position-absolute mt-0 py-1 px-3 start-0 end-0 mx-6"
    role="alert" id="dangerAlert">
    <span class="text-sm text-bold">{{ $errors->first() }}</span>
    <button type="button" class="btn-close text-lg py-1 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<script>
    setTimeout(function() {
        $('#dangerAlert').fadeOut('slow');
    }, 3000);
</script>
