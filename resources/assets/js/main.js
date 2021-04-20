$(document).ready(function() {
    $('.btn-photo').click(function() {
        $('.input-file').click();
    });

    $('.input-file').change(function () {
        input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (event) {
                $('.img-profile').attr('src', event.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    });

    $('.confirm').click(function (event) {
        event.preventDefault();

        href = $(this).attr('data-href');
        text = $(this).attr('data-text');

        Swal.fire({
            title: text,
            text: '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'black',
            confirmButtonText: 'Eliminar',
            cancelButtonColor: '#858796',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = href;
            }
        });
    });

    if ($('.datatable').length) {
        datatable = $('.datatable').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "processing": "Procesando...",
                "zeroRecords": "No hay datos",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay datos",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
            }
        });
    }
});