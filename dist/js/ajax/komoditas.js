var dataKomoditas = [];

function create(uri, control) {
	$('#btn-submit-' + control).on('click', function (params) {
		params.preventDefault();
		if ($('#komoditas').val() != "") {
			$.ajax({
				async: false,
				url: uri + control + '/create',
				type: "post",
				data: {
					komoditas: $('#komoditas').val(),
				},
				dataType: "json",
				success: function (rst) {
					toastr.success('Data Berhasil Ditambahkan');

					$('.text-danger').remove();
					$('.text-success').remove();
					$('#komoditas').removeClass('is-invalid');

					$('#komoditas').val("");
					$('#komoditas').addClass('is-valid');

					read(uri, control);
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert('Error: ' + textStatus + ' ' + errorThrown + ' ' + jqXHR);
				}
			});

		} else {
			$('.text-danger').remove();
			$('.text-success').remove();
			$('#komoditas').removeClass('is-valid');
			$('#komoditas').addClass('is-invalid');
			$('.form-group').append('<span class="text-danger">Data Harus di Isi</span>');

		}

		return false;
	});
}

function read(uri, control) {
	if (control == "komoditas") {
		$.ajax({
			type: "ajax",
			url: uri + control + '/show',
			async: false,
			dataType: 'json',
			success: function (result) {
				var html = '';

				for (let i = 0; i < result.length; i++) {
					const element = result[i];
					var number = i + 1;

					html += '<tr>' +
						'<td>' + number + '</td>' +
						'<td>' + element['komoditas'] + '</td>' +
						'<td>' +
						'<button type="button" class="btn btn-success mr-2 edit" data-index="' + i + '" data-toggle="modal" data-target="#moddal-edit">' +
						'<i class="fas fa-pencil-alt"></i>' + '</button>' +
						'<button type="button" class="btn btn-danger hapus" data-index="' + i + '" data-toggle="modal" data-target="#modadl-hapus">' +
						'<i class="fas fa-trash-alt"></i>' + '</button>' +
						'</td>' +
						'</tr>';

				}

				dataKomoditas = result;
				$('#dataTable').html(html);
			}
		});
	}
}

function action() {
	$('.edit').click(function (e) {
		e.preventDefault();
		$('#modal-edit').modal('show');

		var index = $(this).data('index');
		console.log(index);
		$('#id-e').val(dataKomoditas[index]['id_komoditas']);
		$('#komoditas-e').val(dataKomoditas[index]['komoditas']);
	});

	$('.hapus').click(function (e) {
		e.preventDefault();
		$('#modal-hapus').modal('show');

		var index = $(this).data('index');
		console.log(index);
		$('#id-h').val(dataKomoditas[index]['id_komoditas']);
	});
}

function update(uri, control) {
	$('#btn-edit-' + control).on('click', function (params) {
		var id = $('#id-e').val();
		var komoditas_edit = $('#komoditas-e').val();
		params.preventDefault();

		// params.preventDefault();
		if (komoditas_edit != "") {
			$.ajax({
				async: false,
				url: uri + control + '/update',
				type: "post",
				data: {
					id_komoditas: id,
					komoditas: komoditas_edit,
				},
				dataType: "json",
				success: function (rst) {
					$('#modal-edit').modal('hide');
					toastr.success('Data Berhasil Diubah');
					read(uri, control);
					action();
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert('Error: ' + textStatus + ' ' + errorThrown + ' ' + jqXHR);
				}
			});
		} else {
			$('.text-danger').remove();
			$('.text-success').remove();
			$('#komoditas-e').removeClass('is-valid');
			$('#komoditas-e').addClass('is-invalid');
			$('.form-group').append('<span class="text-danger">Data Harus di Isi</span>');

		}

		return false;
	});
}

function drop(uri, control) {
	$('#btn-hapus-' + control).on('click', function (params) {
		var id = $('#id-h').val();
		params.preventDefault();

		$.ajax({
			async: false,
			url: uri + control + '/delete',
			type: "post",
			data: {
				id_komoditas: id,
			},
			dataType: "json",
			success: function (rst) {
				$('#modal-hapus').modal('hide');
				toastr.success('Data Berhasil Dihapus');
				read(uri, control);
				action();
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('Error: ' + textStatus + ' ' + errorThrown + ' ' + jqXHR);
			}
		});

		return false;
	});

}
