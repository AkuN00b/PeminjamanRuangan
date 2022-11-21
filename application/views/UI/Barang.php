<?php ob_start();?>

<!-- HEADER -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active">Data</li>
              <li class="breadcrumb-item active">Barang</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- END HEADER -->
  
<!-- TABLE -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                     <!-- <h3 class="card-title">Daftar Lemari</h3> -->
                  </div>
                  <button class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#tambahData"><a href="#" class="text-white">Tambah Data</a></button>
           		</div>
			

				<div class="card-body">
          <table id="dataTable" class="display nowrap table-striped table" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Ruangan</th>
                    <th>Nama Barang</th>
                    <th>Total Barang</th>
                    <th>Jumlah Tersedia</th>
                    <th>Jumlah Rusak</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>ruangan1</td>
                    <td>barang1</td>
                    <td>8</td>
                    <td>5</td>
                    <td>3</td>
                    <td>
                      <a href="javascript:void(0);" class="mr-2 fas fa-pencil-square-o" data-toggle="modal" data-target="#editData">
                      <a href="javascript:void(0);" data-toggle="modal" data-target="#detailData" class="fas fa-tasks">
                    </td>
                  </tr>
                </tbody>
              </table>
		        </div>

		        <br/><br/><br/>
		    </div>
		</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- END TABLE -->

<!-- MODAL -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
          
          <!-- tambahData Modal -->
              <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Data Barang</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="ruanganBarang">Ruangan</label>
                        <select class="custom-select form-control-border" id="ruanganBarang">
                          <option holder>Pilih Ruangan</option>
                          <option>Ruangan 101</option>
                          <option>Ruangan 102</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="namaBarang">Nama Barang</label>
                        <input type="text" class="form-control" id="namaBarang" placeholder="Enter Nama Barang" />
                      </div>
                      <div class="form-group">
                        <label for="totalBarang">Total Barang</label>
                        <input type="number" class="form-control" id="totalBarang" placeholder="Enter Total Barang" />
                      </div>
                      <div class="form-group">
                        <label for="jumlahTersedia">Jumlah Tersedia</label>
                        <input type="number" class="form-control" id="jumlahTersedia" placeholder="Enter Jumlah Tersedia" />
                      </div>
                      <div class="form-group">
                        <label for="jumlahRusak">Jumlah Rusak</label>
                        <input type="number" class="form-control" id="jumlahRusak" placeholder="Enter Jumlah Rusak" />
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <button id="submit" name="submit" Text="Create" class="btn btn-primary shadow-sm">Tambah</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.tambahData Modal -->

              <!-- editData Modal -->
          <div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Data Barang</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="ruanganBarangE">Ruangan</label>
                    <select class="custom-select form-control-border" id="ruanganBarangE">
                      <option holder>Pilih Ruangan</option>
                      <option selected>Ruangan 101</option>
                      <option>Ruangan 102</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="namaBarangE">Nama Barang</label>
                    <input type="text" class="form-control" id="namaBarangE" placeholder="Enter Nama Barang" value="barang1" />
                  </div>
                  <div class="form-group">
                    <label for="totalBarangE">Total Barang</label>
                    <input type="number" class="form-control" id="totalBarangE" placeholder="Enter Total Barang" value="8" />
                  </div>
                  <div class="form-group">
                    <label for="jumlahTersediaE">Jumlah Tersedia</label>
                    <input type="number" class="form-control" id="jumlahTersediaE" placeholder="Enter Jumlah Tersedia" value="5" />
                  </div>
                  <div class="form-group">
                    <label for="jumlahRusakE">Jumlah Rusak</label>
                    <input type="number" class="form-control" id="jumlahRusakE" placeholder="Enter Jumlah Rusak" value="3" />
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button ID="submit" Text="Edit" class="btn btn-primary shadow-sm">Ubah</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.editData Modal -->

          <!-- detailData Modal -->
          <div class="modal fade" id="detailData" tabindex="-1" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Detail Data Barang</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="ruanganBarangE">Ruangan</label>
                    <select class="custom-select form-control-border" id="ruanganBarangE" disabled>
                      <option holder>Pilih Ruangan</option>
                      <option selected>Ruangan 101</option>
                      <option>Ruangan 102</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="namaBarangE">Nama Barang</label>
                    <input type="text" class="form-control" id="namaBarangE" placeholder="Enter Nama Barang" value="barang1" readonly />
                  </div>
                  <div class="form-group">
                    <label for="totalBarangE">Total Barang</label>
                    <input type="number" class="form-control" id="totalBarangE" placeholder="Enter Total Barang" value="8" readonly />
                  </div>
                  <div class="form-group">
                    <label for="jumlahTersediaE">Jumlah Tersedia</label>
                    <input type="number" class="form-control" id="jumlahTersediaE" placeholder="Enter Jumlah Tersedia" value="5" readonly />
                  </div>
                  <div class="form-group">
                    <label for="jumlahRusakE">Jumlah Rusak</label>
                    <input type="number" class="form-control" id="jumlahRusakE" placeholder="Enter Jumlah Rusak" value="3" readonly />
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.detailData Modal -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- END MODAL -->

      </div>
  </div>
  </section>
 </div>

<?php
$data = ob_get_clean();
?>

<?php ob_start();?>

<?php
$script = ob_get_clean();
include('master_page.php');
ob_flush();
?>