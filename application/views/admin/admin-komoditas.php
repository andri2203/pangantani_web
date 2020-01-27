<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Komoditas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                        <li class="breadcrumb-item active">Komoditas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Form -->
                <div class="col-md-6 col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Form Komoditas</h4>
                        </div>

                        <form action="" role="form" method="POST" class="m-0 p-0" id="form">
                            <!-- Field -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Komoditas</label>
                                    <input type="text" class="form-control" placeholder="Nama Komoditas" name="komoditas" id="komoditas">
                                </div>
                            </div>
                            <!-- button -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right" id="btn-submit-<?= $uri_ajax ?>">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Table -->
                <div class="col-md-6 col-sm-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h4 class="card-title">Table Komoditas</h4>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Komoditas</th>
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
            <form action="" role="form" method="POST" class="m-0 p-0" id="form-edit">
                <!-- Field -->
                <div class="modal-body">
                    <div class="form-group">
                        <label>Komoditas</label>
                        <input type="hidden" name="id_komoditas" id="id-e">
                        <input type="text" class="form-control" placeholder="Nama Komoditas" name="komoditas" id="komoditas-e">
                    </div>
                </div>
                <!-- button -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-edit-<?= $uri_ajax ?>">Ubah</button>
                </div>
            </form>
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
                        <input type="hidden" name="id_komoditas" id="id-h">
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