<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- alert -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Menyembunyikan alert setelah 5 detik
        setTimeout(function() {
            $(".alert").slideUp();
        }, 5000); // 5000 milidetik = 5 detik
    });
</script>
<!-- script modal confirmation -->
<script>
    function confirmDelete(userId) {
        if (confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) {
            // Jika pengguna menekan "OK", arahkan ke rute penghapusan
            window.location.href = "{{ route('delete-users', '') }}/" + userId;
        }
    }
</script>

<script>
    function confirmDelete(websiteId) {
        if (confirm('Are you sure you want to delete this website?')) {
            // If the user clicks "OK", redirect to the delete route for websites
            window.location.href = "{{ route('delete-website', '') }}/" + websiteId;
        }
    }
</script>


