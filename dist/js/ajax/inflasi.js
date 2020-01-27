var dataInflasi = [];

function create(uri, control) {
	$('#btn-submit-' + control).on('click', function (params) {
		params.preventDefault();
		if ($('#inflasi').val() != "") {
			if ($('#persen').val() != "") {
				$.ajax({
					async: false,
					url: uri + control + '/create',
					type: "post",
					data: {
						inflasi: $('#inflasi').val(),
						persen: $('#persen').val(),
					},
					dataType: "json",
					success: function (rst) {
						toastr.success('Data Berhasil Ditambahkan');

						$('.msg-inflasi').remove();
						$('.msg-persen').remove();
						$('#persen').removeClass('is-invalid');

						$('#inflasi').val("");
						$('#persen').val("");
						$('#inflasi').addClass('is-valid');
						$('#persen').addClass('is-valid');

						read(uri, control);
					},
					error: function (jqXHR, textStatus, errorThrown) {
						alert('Error: ' + textStatus + ' ' + errorThrown + ' ' + jqXHR);
					}
				});
			} else {
				$('.msg-inflasi').remove();
				$('#inflasi').removeClass('is-invalid');
				$('.msg-persen').remove();
				$('#persen').removeClass('is-valid');
				$('#persen').addClass('is-invalid');
				$('#input-persen').append('<span class="text-danger msg-persen">Data Harus di Isi</span>');
			}
		} else {
			$('.msg-inflasi').remove();
			$('#inflasi').removeClass('is-valid');
			$('#inflasi').addClass('is-invalid');
			$('#input-inflasi').append('<span class="text-danger msg-inflasi">Data Harus di Isi</span>');
		}

		return false;
	});
}

function read(uri, control) {
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
					'<td>' + element['inflasi'] + '</td>' +
					'<td>' + element['persen'] + '</td>' +
					'<td>' +
					'<button type="button" class="btn btn-success mr-2 edit" data-index="' + i + '" data-toggle="modal" data-target="#moddal-edit">' +
					'<i class="fas fa-pencil-alt"></i>' + '</button>' +
					'<button type="button" class="btn btn-danger hapus" data-index="' + i + '" data-toggle="modal" data-target="#modadl-hapus">' +
					'<i class="fas fa-trash-alt"></i>' + '</button>' +
					'</td>' +
					'</tr>';

			}

			dataInflasi = result;
			$('#dataTable').html(html);
		}
	});
}

function action() {
	$('.edit').click(function (e) {
		e.preventDefault();
		$('#modal-edit').modal('show');

		var index = $(this).data('index');
		console.log(index);
		$('#id-e').val(dataInflasi[index]['id_inflasi']);
		$('#inflasi-e').val(dataInflasi[index]['inflasi']);
		$('#persen-e').val(dataInflasi[index]['persen']);
	});

	$('.hapus').click(function (e) {
		e.preventDefault();
		$('#modal-hapus').modal('show');

		var index = $(this).data('index');
		console.log(index);
		$('#id-h').val(dataInflasi[index]['id_inflasi']);
	});
}

function update(uri, control) {
	$('#btn-edit-' + control).on('click', function (params) {
		var id = $('#id-e').val();
		var inflasi_edit = $('#inflasi-e').val();
		var persen_edit = $('#persen-e').val();
		params.preventDefault();

		// params.preventDefault();
		if (inflasi_edit != "") {
			$.ajax({
				async: false,
				url: uri + control + '/update',
				type: "post",
				data: {
					id_inflasi: id,
					inflasi: inflasi_edit,
					persen: persen_edit,
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
			$('#inflasi-e').removeClass('is-valid');
			$('#inflasi-e').addClass('is-invalid');
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
				id_inflasi: id,
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
