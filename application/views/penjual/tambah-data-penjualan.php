<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Jumlah Stock Komoditas Di Penjual -->
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Padi</span>
              <span class="info-box-number">410,410 ton</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kopi</span>
              <span class="info-box-number">41,410 ton</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jagung</span>
              <span class="info-box-number">760.000 ton</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pala</span>
              <span class="info-box-number">2,000 ton</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Chart Data Komoditas -->

      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Tambah Data Penjualaan</h5>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-wrench"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Separated link</a>
                  </div>
                </div>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>

            <div class="card-body">
              <!-- general form elements -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" placeholder="Masukkan Nama Produk">
                  </div>
                  <div class="form-group">
                    <label for="jenis_produk">Jenis Produk</label>
                    <input type="text" class="form-control" id="jenis_produk" placeholder="Masukkan Jenis Produk">
                  </div>
                  <div class="form-group">
                    <label for="kuantitas_produk">Kuantitas Produk</label>
                    <input type="number" class="form-control" id="kuantitas_produk" placeholder="Masukkan Kuantitas Produk">
                  </div>
                  <div class="form-group">
                    <label for="harga_produk">Harga Produk</label>
                    <input type="number" class="form-control" id="harga_produk" placeholder="Masukkan Harga Produk">
                  </div>
                  <div class="form-group">
                    <label>Detail Produk</label>
                    <textarea class="form-control" rows="3" placeholder="MasukkanDetail Produk"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="input_file">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="input_file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.row -->

          <!-- row -->
          <div class="row">
            <div class="col-12">
              <!-- Table -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Ketentuan Komoditas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Komoditas</th>
                        <th>Tanggal</th>
                        <th>Ketentuan</th>
                        <th>Harga Satuan</th>
                        <th>Selisih Satuan (%)</th>
                        <th>Inflasi (%)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Padi</td>
                        <td>18 Januari 2020</td>
                        <td>Padi Basah</td>
                        <td>Rp. 5000</td>
                        <td>10%</td>
                        <td>1.04%</td>
                      </tr>
                      <tr>
                        <td>Padi</td>
                        <td>18 Januari 2020</td>
                        <td>Padi Basah</td>
                        <td>Rp. 5000</td>
                        <td>10%</td>
                        <td>1.04%</td>
                      </tr>
                      <tr>
                        <td>Padi</td>
                        <td>18 Januari 2020</td>
                        <td>Padi Basah</td>
                        <td>Rp. 5000</td>
                        <td>10%</td>
                        <td>1.04%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->


        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->