<a href="{{ route('admin.book.edit', $model) }}" class="btn btn-xs btn-warning">edit</a>
<button href="{{ route('admin.book.destroy', $model) }}" class="btn btn-xs btn-danger" id="delete">hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#delete').on('click', function(e) {
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Anda yakin mau hapus data?',
            text: "Data yg sudah dihapus tidak dapat dikembalikan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value) {

                    document.getElementById('deleteForm').action = href;
                    document.getElementById('deleteForm').submit();

                    Swal.fire(
                    'Terhapus!',
                    'Data sudah dihapus.',
                    'success'
                )
            }
        })

        
    });
</script>