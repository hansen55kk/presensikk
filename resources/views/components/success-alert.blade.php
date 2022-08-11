<div class="alert alert-success alert-dismissible text-white position-absolute mt-0 py-1 px-3 start-0 end-0 mx-6"
    role="alert" id="successAlert">
    <span class="text-sm text-bold">{{ session()->get('message') }}</span>
    <button type="button" class="btn-close text-lg py-1 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    setTimeout(function() {
        $('#successAlert').fadeOut('slow');
    }, 3000);
</script>
