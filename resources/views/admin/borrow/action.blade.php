<button href="{{ route('admin.borrow.return', $model) }}" class="btn btn-xs btn-info" id="return">Pengembalian</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#return').on('click', function(e) {
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Anda yakin mau update data pengembalian?',
            text: "Data yg sudah diupdate tidak dapat di-Undo",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, kembalikan!'
        }).then((result) => {
            if (result.value) {

                    document.getElementById('returnForm').action = href;
                    document.getElementById('returnForm').submit();

                    Swal.fire(
                    'Diupdate!',
                    'Data berhasil diupdate.',
                    'success'
                )
            }
        })

        
    });
</script>
