(function($) {
	"use strict";

	$('.sidebar .collapse').collapse('hide');

	// Toggle the side navigation
	$("#sidebarToggle, #sidebarToggleTop").on('click', function (event) {
		$("body").toggleClass("sidebar-toggled");
		$(".sidebar").toggleClass("toggled");
		if ($(".sidebar").hasClass("toggled")) {
			$('.sidebar .collapse').collapse('hide');
		};
	});

	// Close any open menu accordions when window is resized below 768px
	$(window).resize(function() {
		if ($(window).width() < 768) {
			$('.sidebar .collapse').collapse('hide');
		};
	});

	// Prevent the content wrapper from scrolling when the fixed side navigation hovered over
	$('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function (event) {
		if ($(window).width() > 768) {
			var e0 = e.originalEvent, delta = e0.wheelDelta || -e0.detail;
			this.scrollTop += (delta < 0 ? 1 : -1) * 30;
			event.preventDefault();
		}
	});

	// Scroll to top button appear
	$(document).on('scroll', function () {
		var scrollDistance = $(this).scrollTop();
		if (scrollDistance > 100) {
			$('.scroll-to-top').fadeIn();
		} else {
			$('.scroll-to-top').fadeOut();
		}
	});

	// Smooth scrolling using jQuery easing
	$(document).on('click', 'a.scroll-to-top', function (event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: ($($anchor.attr('href')).offset().top)
		}, 1000, 'easeInOutExpo');
		event.preventDefault();
	});

	if ($('#datatables').length) {
		var datatable = $('#datatables').DataTable({
			"responsive": true,
			"order": [[0, 'desc']],
			"language": {
				"decimal":        "",
			    "emptyTable":     "No hay datos",
			    "info":           "Mostrando del _START_ al _END_ de _TOTAL_",
			    "infoEmpty":      "Mostrando del 0 al 0 de 0",
			    "infoFiltered":   "(filtrado de un total de _MAX_)",
			    "infoPostFix":    "",
			    "thousands":      ",",
			    "lengthMenu":     "Mostrar _MENU_",
			    "loadingRecords": "Cargando...",
			    "processing":     "Procesando...",
			    "search":         "Buscar:",
			    "zeroRecords":    "No hay resultados",
			    "paginate": {
			        "first":      "Primero",
			        "last":       "Último",
			        "next":       "Siguiente",
			        "previous":   "Anterior"
			    }
			}
		});

		if (typeof dt !== 'undefined') {
			new $.fn.dataTable.FixedHeader(datatable);
		}
	}

	$('#user').change(function () {
		var input = this;
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (event) {
				$('.user_photo').attr('src', event.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	});

	$('.password').click(function () {
		var type = ($(this).parent().parent().find('input').attr('type') == 'password') ? 'text' : 'password';
		$(this).parent().parent().find('input').attr('type', type);
	});

	$('.delete').click(function (event) {
		event.preventDefault();

		var route = $(this).attr('href');

		Swal.fire({
			title: '¿Está seguro?',
			text: '¡Luego no podrás revertir esto!',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: 'black',
			confirmButtonText: 'Eliminar',
			cancelButtonColor: '#858796',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					type: 'GET',
					url: route,
					success: function (response) {
						window.location.href = window.location.href;
					},
					error: function (error) {
						$('.content').html(error.responseText);
					}
				});
			}
		});
	});
})(jQuery);