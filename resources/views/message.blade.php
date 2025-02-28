@if (session('success'))
    <div id="successAlert" class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3" role="alert" style="z-index: 1050;">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('error'))
    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-3" role="alert" style="z-index: 1050;">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<script>
    // Auto-dismiss alerts after 5 seconds
    window.onload = function() {
        setTimeout(function() {
            let successAlert = document.getElementById('successAlert');
            let errorAlert = document.getElementById('errorAlert');
            
            // Dismiss success alert if it exists
            if (successAlert) {
                successAlert.classList.remove('show');
                successAlert.classList.add('fade');
            }
            
            // Dismiss error alert if it exists
            if (errorAlert) {
                errorAlert.classList.remove('show');
                errorAlert.classList.add('fade');
            }
        }, 5000);  // 5000 milliseconds = 5 seconds
    };
</script>
