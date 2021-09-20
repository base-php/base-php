function app () {
	return {
		showUserMenu: false,

		showMainMenu: (window.innerWidth > 800) ? true : false,

		photo: '',

		search (input) {
            var input, filter, table, tr, td, i, j, visible;
            filter = input.value.toUpperCase();
            table = document.getElementById('table');
            tr = table.getElementsByTagName('tr');

            for (i = 1; i < tr.length; i++) {
                visible = false;
                td = tr[i].getElementsByTagName('td');

                for (j = 0; j < td.length; j++) {
                    if (td[j] && td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        visible = true;
                    }
                }

                if (!tr[0]) {
                    tr[0].style.display = '';
                }

                if (visible === true) {
                    tr[i].style.display = '';
                } else {
                    tr[i].style.display = 'none';
                }
            }
        },

        confirmDelete (event, element) {
            event.preventDefault();

            Swal.fire({
                title: '¿Estás seguro que desea eliminar este elemento?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Aceptar',
                confirmButtonColor: 'black',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = element.href;
                }
            });
        },

        preview (value) {
			input = document.getElementById('photo');

		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        reader.onload = function (event) {
		            document.getElementById('photo-preview').setAttribute('src', event.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}
	}
}