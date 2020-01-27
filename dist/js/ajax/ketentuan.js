var dataKetentuan = [];
var dtInflasi = [];
var url;

function create(uri, control) {
	$('#tanggal').attr('disabled', true);
	$('#nm_ketentuan').attr('disabled', true);
	$('#harga_satuan').attr('disabled', true);
	$('#selisih_satuan').attr('disabled', true);
	$('#inflasi').attr('disabled', true);

	$('#komoditas').on('change', function () {
		$('#tanggal').attr('disabled', false);
	});

	$('#tanggal').on('change', function () {
		$('#nm_ketentuan').attr('disabled', false);
	});

	$('#nm_ketentuan').on('change', function () {
		$('#harga_satuan').attr('disabled', false);
	});

	$('#harga_satuan').on('change', function () {
		$('#selisih_satuan').attr('disabled', false);
	});

	$('#selisih_satuan').on('change', function () {
		$('#inflasi').attr('disabled', false);
		$('.inflasi').append('<span class="text-info msg-inflasi">Kolom ini boleh kosong</span>');
	});

	$('#btn-submit-' + control).on('click', function (params) {
		params.preventDefault();

		$.ajax({
			async: false,
			url: uri + control + '/create',
			type: "post",
			data: {
				komoditas: $('#komoditas').val(),
				tanggal: $('#tanggal').val(),
				nm_ketentuan: $('#nm_ketentuan').val(),
				harga_satuan: $('#harga_satuan').val(),
				selisih_satuan: $('#selisih_satuan').val(),
				inflasi: $('#inflasi').val(),
			},
			dataType: "json",
			success: function (rst) {
				toastr.success('Data Berhasil Ditambahkan');

				$('#komoditas').val("");
				$('#tanggal').val("");
				$('#nm_ketentuan').val("");
				$('#harga_satuan').val("");
				$('#selisih_satuan').val("");
				$('#inflasi').val("");

				$('.msg-inflasi').remove();
				$('#komoditas').addClass('is-valid');
				$('#tanggal').addClass('is-valid');
				$('#nm_ketentuan').addClass('is-valid');
				$('#harga_satuan').addClass('is-valid');
				$('#selisih_satuan').addClass('is-valid');
				$('#inflasi').addClass('is-valid');

				read(uri, control);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('Error: ' + textStatus + ' ' + errorThrown + ' ' + jqXHR);
			}
		});

		return false;
	});
}

function read(uri, control) {

	$.ajax({
		type: "ajax",
		url: uri + 'komoditas/show',
		async: false,
		dataType: 'json',
		success: function (result) {
			var html = '';
			for (let i = 0; i < result.length; i++) {
				const element = result[i];
				html += '<option value="' + element['id_komoditas'] + '">' + element['komoditas'] + '</option>';
			}
			$('#komoditas').html('<option value="0">-- Tambahkan Komoditas --</option>' + html);
		}
	});

	$.ajax({
		type: "ajax",
		url: uri + 'inflasi/show',
		async: false,
		dataType: 'json',
		success: function (result) {
			var html = '';
			for (let i = 0; i < result.length; i++) {
				const element = result[i];
				html += '<option value="' + element['id_inflasi'] + '">' + element['inflasi'] + '</option>';
			}
			dtInflasi = result;
			$('#inflasi').html('<option value="0">-- Tambahkan Inflasi --</option>' + html);
		}
	});

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

				for (let j = 0; j < dtInflasi.length; j++) {
					const element1 = dtInflasi[j];
					var str = '<td> - </td>';
					if (element1['id_inflasi'] == element['id_inflasi']) {
						str = '<td>' + element1['inflasi'] + '</td>';
					}
					html += '<tr>' +
						'<td>' + number + '</td>' +
						'<td>' + element['tanggal'] + '</td>' +
						'<td>' + element['komoditas'] + '</td>' +
						'<td>' + element['nm_ketentuan'] + '</td>' +
						'<td>' + element['harga_satuan'] + '</td>' +
						'<td>' + element['selisih_satuan'] + '</td>' +
						str +
						'<td>' +
						'<button type="button" class="btn btn-success mr-2 edit" data-index="' + i + '" data-toggle="modal" data-target="#moddal-edit">' +
						'<i class="fas fa-pencil-alt"></i>' + '</button>' +
						'<button type="button" class="btn btn-danger hapus" data-index="' + i + '" data-toggle="modal" data-target="#modadl-hapus">' +
						'<i class="fas fa-trash-alt"></i>' + '</button>' +
						'</td>' +
						'</tr>';
				}
			}

			dataKetentuan = result;
			$('#dataTable').html(html);
		}
	});
}

function action(uri) {
	$('.edit').click(function (e) {
		e.preventDefault();
		$('#modal-edit').modal('show');

		var index = $(this).data('index');
		console.log(index);
		$('#id-e').val(dataKetentuan[index]['id_ketentuan']);
		$('#tanggal-e').val(dataKetentuan[index]['tanggal']);
		$('#nm_ketentuan-e').val(dataKetentuan[index]['nm_ketentuan']);
		$('#harga_satuan-e').val(dataKetentuan[index]['harga_satuan']);
		$('#selisih_satuan-e').val(dataKetentuan[index]['selisih_satuan']);

		$.ajax({
			type: "ajax",
			url: uri + 'komoditas/show',
			async: true,
			dataType: 'json',
			success: function (result) {
				var html = '';
				for (let i = 0; i < result.length; i++) {
					const element = result[i];
					if (dataKetentuan[index]['id_komoditas'] == element['id_komoditas']) {

						html += '<option value="' + element['id_komoditas'] + '"selected>' + element['komoditas'] + '</option>';
					} else {
						html += '<option value="' + element['id_komoditas'] + '">' + element['komoditas'] + '</option>';

					}
				}
				$('#komoditas-e').html('<option value="0">-- Tambahkan Komoditas --</option>' + html);
			}
		});

		$.ajax({
			type: "ajax",
			url: uri + 'inflasi/show',
			async: true,
			dataType: 'json',
			success: function (result) {
				var html = '';
				for (let i = 0; i < result.length; i++) {
					const element = result[i];
					if (dataKetentuan[index]['id_inflasi'] == element['id_inflasi']) {

						html += '<option value="' + element['id_inflasi'] + '" selected>' + element['inflasi'] + '</option>';
					} else {

						html += '<option value="' + element['id_inflasi'] + '">' + element['inflasi'] + '</option>';
					}
				}
				$('#inflasi-e').html('<option value="0">-- Tambahkan Inflasi --</option>' + dataKetentuan[index]['id_inflasi'] + html);
			}
		});
	});

	$('.hapus').click(function (e) {
		e.preventDefault();
		$('#modal-hapus').modal('show');

		var index = $(this).data('index');
		console.log(index);
		$('#id-h').val(dataKetentuan[index]['id_ketentuan']);
	});



}

function update(uri, control) {
	$('#btn-edit-' + control).on('click', function (params) {
		params.preventDefault();

		$.ajax({
			async: false,
			url: uri + control + '/update',
			type: "post",
			data: {
				id_ketentuan: $('#id-e').val(),
				komoditas: $('#komoditas-e').val(),
				inflasi: $('#inflasi-e').val(),
				tanggal: $('#tanggal-e').val(),
				nm_ketentuan: $('#nm_ketentuan-e').val(),
				harga_satuan: $('#harga_satuan-e').val(),
				selisih_satuan: $('#selisih_satuan-e').val(),
			},
			dataType: "json",
			success: function (rst) {
				$('#modal-edit').modal('hide');
				toastr.success('Data Berhasil Diubah');
				read(uri, control);
				action(uri);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('Error: ' + textStatus + ' ' + errorThrown + ' ' + jqXHR);
			}
		});

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
				id_ketentuan: id,
			},
			dataType: "json",
			success: function (rst) {
				$('#modal-hapus').modal('hide');
				toastr.success('Data Berhasil Dihapus');
				read(uri, control);
				action(uri);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('Error: ' + textStatus + ' ' + errorThrown + ' ' + jqXHR);
			}
		});

		return false;
	});

}
