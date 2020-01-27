<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ketentuan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                        <li class="breadcrumb-item active">Ketentuan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- Form -->
                <div class="col-md-8 col-sm-12">
                    <form action="" role="form" method="POST" class="m-0 p-0">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">Form Ketentuan</h4>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>

                            <!-- Field -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Komoditas</label>
                                    <select class="form-control" name="komoditas" id="komoditas">
                                        <option value="0">-- Tambahkan Komoditas --</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Ketentuan</label>
                                    <input type="date" class="form-control" placeholder="Enter ..." name="tanggal" id="tanggal">
                                </div>

                                <div class="form-group">
                                    <label>Nama Ketentuan</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="nm_ketentuan" id="nm_ketentuan">
                                </div>

                                <div class="form-group">
                                    <label>Harga Satuan</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="harga_satuan" id="harga_satuan">
                                </div>

                                <div class="form-group">
                                    <label>Selisih Satuan</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="selisih_satuan" id="selisih_satuan">
                                </div>

                                <div class="form-group inflasi">
                                    <label>Inflasi</label>
                                    <select class="form-control" name="inflasi" id="inflasi">
                                        <option value="0">-- Tambahkan Inflasi --</option>
                                    </select>
                                </div>
                            </div>
                            <!-- button -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right" id="btn-submit-<?= $uri_ajax ?>">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Table -->
                <div class="col-md-12 col-sm-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h4 class="card-title">Table Ketentuan</h4>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Komoditas</th>
                                        <th>Nama Ketentuan</th>
                                        <th>Harga Satuan</th>
                                        <th>Selisih Satuan</th>
                                        <th>Inflasi</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="dataTable">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Field -->
                <div class="form-group">
                    <label>Komoditas</label>
                    <select class="form-control" name="komoditas" id="komoditas-e">
                        <option value="0">-- Tambahkan Komoditas --</option>
                    </select>
                    <input type="hidden" name="id_ketentuan" id="id-e">
                </div>

                <div class="form-group">
                    <label>Tanggal Ketentuan</label>
                    <input type="date" class="form-control" placeholder="Enter ..." name="tanggal" id="tanggal-e">
                </div>

                <div class="form-group">
                    <label>Nama Ketentuan</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="nm_ketentuan" id="nm_ketentuan-e">
                </div>

                <div class="form-group">
                    <label>Harga Satuan</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="harga_satuan" id="harga_satuan-e">
                </div>

                <div class="form-group">
                    <label>Selisih Satuan</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="selisih_satuan" id="selisih_satuan-e">
                </div>

                <div class="form-group inflasi">
                    <label>Inflasi</label>
                    <select class="form-control" name="inflasi" id="inflasi-e">
                        <option value="0">-- Tambahkan Inflasi --</option>
                    </select>
                </div>
            </div>
            <!-- button -->
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn-edit-<?= $uri_ajax ?>">Ubah</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-hapus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Peringatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" role="form" method="POST" class="m-0 p-0" id="form-hapus">
                <!-- Field -->
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Hapus Data ini?</p>
                    <div class="form-group">
                        <input type="hidden" name="id_ketentuan" id="id-h">
                    </div>
                </div>
                <!-- button -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-primary" id="btn-hapus-<?= $uri_ajax ?>">Ya</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->