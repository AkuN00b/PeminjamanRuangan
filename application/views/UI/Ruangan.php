<?php ob_start();?>

<!-- HEADER -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ruangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active">Data</li>
              <li class="breadcrumb-item active">Ruangan</li>
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
          <table id="dataTable2" class="display nowrap table-striped table" style="width:100%">
          <thead>
                  <tr>
                  <th>ID Ruangan</th>

                    <th>Jenis Ruangan</th>
                    <th>SOP</th>
                    <th>PIC</th>
                    <th>Nama Ruangan</th>
                    <th>Status pinjaman</th>
                    <th>Kapasitas</th>
                    <th hidden>Foto</th>
                    <th>Foto Ruangan</th>
                    <th hidden>Foto</th>
                    <th>Status Ruangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 0; ?>
                    <?php
                            foreach($getData as $data){
                        ?>
                        <tr>        
                        <td>
                             <?php echo $data->idRuangan?>
                               </td>                   
                            <td><?php echo $data->namaJenisRuangan?></td>
                            <td><?php echo $data->idSop?></td>
                            <td><?php echo $data->username?></td>
                            <td><?php echo $data->namaRuangan?></td>
                            <td><?php echo $data->statusPinjam?></td>
                            <td><?php echo $data->kapasitas?></td>
                            <td hidden><?php echo $data->foto?></td>
                            <td><img src="<?php echo base_url(); ?>assets/foto/ruangan/<?php echo $data->foto; ?>" width="70"></td>
                            <td hidden><?php echo $data->foto?></td>
                            <td>
                  <?php if($data->status == 0) {
                    echo "Tidak Aktif";
                  }else{
                    echo "Aktif";
                  } ?>
                </td>
                            <td>
                                <a href="javascript:void(0);" class="fa fa-pencil-square-o color-muted editbtn"></a>
                                <a href="javascript:void(0);" class="fa fa-tasks color-muted detailbtn" style="margin-left: 25px;"></a>
                            </td>
                          </tr>
                          <?php } ?>
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
                      <h4 class="modal-title">Tambah Data Ruangan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <?php echo form_open_multipart('Functions/saveruangan'); ?>
                      <div class="form-group">
                      <label for="idRuangan ">ID</label>
                      <input type="text" id="idRuangan " name="idRuangan" class="form-control form-control-user" readonly required></input>
                    </div>
                      <div class="form-group">
                        <label for="jenisRuangan">Jenis Ruangan</label>
                        <select class="custom-select form-control-border" name="jenisRuangan" required="">
                                                <option value="" selected="selected">Pilih Jenis Ruangan</option>
                                                <?php
                                                foreach ($getDataJenisRuangan  as $row) {
                                                    echo '<option value="' . $row->idJenisRuangan. '">' . $row->namaJenisRuangan    . '</option>';
                                                }
                                                ?>
                                            </select>
                      </div>
                      <div class="form-group">
                      <label for="sop">SOP</label>
                        <select class="custom-select form-control-border" name="sop" required="">
                                                <option value="" selected="selected">Pilih SOP</option>
                                                <?php
                                                foreach ($getDataSOP as $row) {
                                                    echo '<option value="' . $row->idSop. '">' . $row->deskripsi  . '</option>';
                                                }
                                                ?>
                                            </select>
                      </div>
                      <div class="form-group">
                        <label for="username">PIC</label>
                        <select class="custom-select form-control-border" id="username" name="username" >
                        <option value="" selected="selected">Pilih PIC</option>
                                                <?php
                                                foreach ($getDatausername as $row) {
                                                    echo '<option value="' . $row->username. '">' . $row->nama  . '</option>';
                                                }
                                                ?>
                                            </select>
                      </div>
                      <div class="form-group">
                        <label for="namaRuangan">Nama Ruangan</label>
                        <input type="text" class="form-control" id="namaRuangan" placeholder="Enter Nama Ruangan" name="namaRuangan"  />
                      </div>
                      <div class="form-group">
                        <label for="statusPinjam">Status Pinjam</label>
                        <input type="text" class="form-control" id="statusPinjam" placeholder="Enter Nama Ruangan" name="statusPinjam"  />
                      </div>
                      <div class="form-group">
                        <label for="kapasitas">Kapasitas</label>
                        <input type="number" class="form-control" id="kapasitas" placeholder="Enter Total Kapasitas" name="kapasitas" />
                      </div>
                      <div class="form-group">
                        <label for="fotoRuangan">Foto Ruangan</label>
                        <input type="file" id="fotoRuangan" class="form-control" name="fotoRuangan"  />
                      </div>
                      <!-- Status Ruangan bukan Status Pinjam -->
                      <div class="form-group">
                        <label for="status">Status Ruangan</label>
                        <select class="custom-select form-control-border" id="status"  name="status">
                        <option holder>Pilih Status</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                  </select>
                </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button id="submit" name="submit" value="upload" class="btn btn-primary shadow-sm">Tambah</button>
                    </div>
                    <?php echo form_close() ?>
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
                  <h4 class="modal-title">Edit Data Ruangan</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url('Functions/editruangan')?>" method="POST" enctype="multipart/form-data"> 
                  <div class="form-group">
                      <label for="idRuanganE">ID Ruangan</label>
                      <input type="text" class="form-control" name="idRuanganE" value="<?= $data->idRuangan ?>" id="idRuanganE" readonly >
                  </div>
                  <div class="form-group">
                    <label for="jenisRuanganE">Jenis Ruangan</label>
                    <select class="custom-select form-control-border" id="jenisRuanganE" name="jenisRuanganE" required="">
                                                <option value="" selected="selected">Pilih Jenis Ruangan</option>
                                                <?php
                                                foreach ($getDataJenisRuangan as $row) {
                                                    echo '<option value="' . $row->idJenisRuangan. '">' . $row->namaJenisRuangan  . '</option>';
                                                }
                                                ?>
                                            </select>
                  </div>
                  <div class="form-group">
                    <label for="sopE">SOP</label>
                    <select class="custom-select form-control-border" id="sopE" name="sopE" required="">
                                                <option value="" selected="selected">Pilih SOP</option>
                                                <?php
                                                foreach ($getDataSOP as $row) {
                                                    echo '<option value="' . $row->idSop. '">' . $row->deskripsi  . '</option>';
                                                }
                                                ?>
                                            </select>
                  </div>
                  <div class="form-group">
                    <label for="picE">PIC</label>
                    <select class="custom-select form-control-border" id="picE" name="picE" >
                        <option value="" selected="selected">Pilih PIC</option>
                                                <?php
                                                foreach ($getDatausername as $row) {
                                                    echo '<option value="' . $row->username. '">' . $row->nama  . '</option>';
                                                }
                                                ?>
                                            </select>
                  </div>
                  <div class="form-group">
                    <label for="namaRuanganE">Nama Ruangan</label>
                    <input type="text" class="form-control" id="namaRuanganE"  name="namaRuanganE" placeholder="Enter Nama Ruangan" value="namaRuangan" />
                  </div>
                  <div class="form-group">
                        <label for="statusPinjam">Status Pinjam</label>
                        <input type="text" class="form-control" id="statusPinjamE" placeholder="Enter Nama Ruangan" name="statusPinjamE"  />
                      </div>
                  <div class="form-group">
                    <label for="kapasitasE">Kapasitas</label>
                    <input type="number" class="form-control" id="kapasitasE" name= "kapasitasE" placeholder="Enter Total Kapasitas" value="30" />
                  </div>
                  <div class="form-group">
                    <label for="fotoRuanganE">Foto Ruangan</label>
                    <input type="hidden" class="form-control" id="fotoRuanganO" name="fotoRuanganO"/>
                    <input type="file" name="fotoRuanganE" id="fotoRuanganE" class="form-control" />
                    <img id="image" class="mt-2" width="70%">
                  </div>
                  <!-- Status Ruangan bukan Status Pinjam -->
                  <div class="form-group">
                <label for="status">Status</label>
                <select class="custom-select form-control-border" name="statusE" required>
                  <option value="1" <?= ($data->status == 1) ? 'selected' : '' ?>>Aktif</option>
                  <option value="0" <?= ($data->status == 0) ? 'selected' : '' ?>>Tidak Aktif</option>
                </select>
              </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button ID="submit" Text="Edit" class="btn btn-primary shadow-sm">Ubah</button>
                </div>
                <form action="<?php echo base_url('Functions/editjenisruangan')?>" method="POST" enctype="multipart/form-data"> 
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
                  <h4 class="modal-title">Detail Data Ruangan</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                  <div class="form-group">
                    <label for="jenisRuanganD">Jenis Ruangan</label>
                    <input type="text" class="form-control" id="jenisRuanganD" name="jenisRuanganD"   readonly />
                  </div>

                  <div class="form-group">
                    <label for="sopD">SOP</label>
                    <input type="text" class="form-control" id="sopD" name="sopD"   readonly />
                  </div>

                   <div class="form-group">
                    <label for="usernameD">PIC</label>
                    <input type="text" class="form-control" id="usernameD" name="usernameD"   readonly />
                  </div>

                  <div class="form-group">
                    <label for="namaRuanganD">Nama Ruangan</label>
                    <input type="text" class="form-control" id="namaRuanganD" name="namaRuanganD"   readonly />
                  </div>

                  <div class="form-group">
                    <label for="statusPinjamD">Status Pinjam</label>
                    <input type="text" class="form-control" id="statusPinjamD" name="statusPinjamD"   readonly />
                  </div>
                  <div class="form-group">
                    <label for="kapasitas">Kapasitas</label>
                    <input type="number" class="form-control" id="kapasitasD" placeholder="Enter Total Kapasitas" value="30" readonly />
                  </div>
                  <div class="form-group">
                    <label for="fotoE">Foto Ruangan</label>
                    <br />
                    <img id="imageD" width="70%">
                  </div>
                  <!-- Status Ruangan bukan Status Pinjam -->
                  <div class="form-group">
                    <label for="status">Status Ruangan</label>
                    <select class="custom-select form-control-border" id="status" disabled>
                      <option holder>Pilih Status Ruangan</option>
                      <option selected>Aktif</option>
                      <option>Tidak Aktif</option>
                    </select>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
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

<script>
        $(document).ready(function(){
            $('.editbtn').on('click', function(){
                $('#editData').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
                console.log(data);

                var link = "<?php echo base_url() ?>assets/foto/ruangan/";

                $('#idRuanganE').val(data[0]);
                $('#jenisRuanganE').val(data[1]);
                $('#sopE').val(data[2]);
                $('#picE').val(data[3]);
                $('#namaRuanganE').val(data[4]);
                $('#statusPinjamE').val(data[5]);
                $('#kapasitasE').val(data[6]);
                $('#fotoRuanganO').val(data[7]);  
                $('#statusE').val(data[8]);    
                $("#image").attr("src", link+data[9]);
            });
        });

        $(document).ready(function(){
            $('.detailbtn').on('click', function(){
                $('#detailData').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
                console.log(data);

                var link = "<?php echo base_url() ?>assets/foto/ruangan/";

                $('#idRuanganD').val(data[0]);
                $('#jenisRuanganD').val(data[1]);
                $('#sopD').val(data[2]);
                $('#usernameD').val(data[3]);
                $('#namaRuanganD').val(data[4]);
                $('#statusPinjamD').val(data[5]);
                $('#kapasitasD').val(data[6]);
                $('#fotoRuanganD').val(data[7]);  
                $('#status').val(data[8]);  
                $("#imageD").attr("src", link+data[9]); 
            });
        });

    </script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#dataTable2').DataTable();
  } );
</script>

    

<?php
$script = ob_get_clean();
include('master_page.php');
ob_flush();
?>