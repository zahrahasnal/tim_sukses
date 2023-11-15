<script>
    Swal.fire({
        title: 'Konfirmasi Hapus',
        text: "Apakah Anda yakin ingin menghapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna menekan "Hapus", maka arahkan ke metode penghapusan yang sesungguhnya
            window.location.href = "{{ route('delete-website', $website->id) }}";
        } else {
            // Jika pengguna membatalkan, arahkan kembali ke halaman sebelumnya
            window.history.back();
        }
    });
</script>