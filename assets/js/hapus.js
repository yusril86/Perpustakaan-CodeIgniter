 $('.tombol-hapus').on('click',function (event) {
         event.preventDefault();
            const href = $(this).attr('href');
  
           Swal.fire({
              title: 'Apakah anda yakin?',
               text: "Selesaikan Peminjaman",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Peminjaman Selesai'
                }).then((result) => {
                 if (result.value) {
                document.location.href = href;
        }
        })
    });