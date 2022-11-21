<?php ob_start();?>

<!-- HEADER -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active">Data</li>
              <li class="breadcrumb-item active">Admin</li>
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
                        <th>Username</th>
                        <th hidden="true">Password</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th hidden>Foto</th>
                        <th>Foto</th>
                        <th hidden>Foto</th>
                        <th>Status</th>
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
                             <?php $i++; ?>
                               <?= $i; ?>
                               </td>                     
                            <td><?php echo $data->username?></td>
                            <td hidden="true"><?php echo $data->password?></td>
                            <td><?php echo $data->nama?></td>
                            <td><?php echo $data->nohp?></td>
                            <td><?php echo $data->email?></td>
                            <td hidden><?php echo $data->foto?></td>
                            <td><img src="<?php echo base_url(); ?>assets/foto/admin/<?php echo $data->foto; ?>" width="70"></td>
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
                 <form action="<?php echo base_url('Functions/saveadmin')?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Data Admin</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="usernameAdmin">Username</label>
                        <input type="text" class="form-control" id="usernameAdmin" name="usernameAdmin" placeholder="Enter Admin Username" />
                      </div>
                      <div class="form-group">
                        <label for="passwordAdmin">Password</label>
                        <div class="input-group" id="show_hide_password">
                          <input type="password" class="form-control" id="passwordAdmin" name="passwordAdmin" placeholder="Enter Admin Password"/>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-eye-slash" aria-hidden="true"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaAdmin">Nama</label>
                        <input type="text" class="form-control" id="namaAdmin" name="namaAdmin" placeholder="Enter Nama Admin" />
                      </div>
                      <div class="form-group">
                        <label for="noTelpAdmin">Nomor Telepon</label>
                        <input type="number" class="form-control" id="noTelpAdmin" name="noTelpAdmin" placeholder="Enter Nomor Telepon Admin"/>
                      </div>
                      <div class="form-group">
                        <label for="emailAdmin">Email</label>
                        <input type="email" class="form-control" id="emailAdmin" name="emailAdmin" placeholder="Enter Admin Email"/>
                      </div>
                      <div class="form-group">
                        <label for="foto">Foto PIC</label>
                        <input type="file" id="foto" class="form-control" name="foto" />
                      </div>
                      <div class="form-group">
                        <label for="statusAdmin">Status</label>
                        <select class="custom-select form-control-border" id="statusAdmin" name="statusAdmin">
                          <option holder>Pilih Status</option>
                          <option value="1">Aktif</option>
                          <option value="0">Tidak Aktif</option>
                        </select>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button id="submit" name="submit" Text="Create" class="btn btn-primary shadow-sm">Tambah</button>
                      </div>
                    </div>
                  </div>
                </form>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.tambahData Modal -->

              <!-- editData Modal -->
          <div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <form action="<?php echo base_url('Functions/editadmin')?>" method="POST" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Data Admin</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="usernameAdminE">Username</label>
                    <input type="text" class="form-control" id="usernameAdminE" name="usernameAdminE" placeholder="Enter Admin Username"  readonly="" />
                  </div>
                  <div class="form-group">
                    <label for="passwordAdminE">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" class="form-control" id="passwordAdminE"  name="passwordAdminE" placeholder="Enter Admin Password"  />
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-eye-slash" aria-hidden="true"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="namaAdminE">Nama</label>
                    <input type="text" class="form-control" id="namaAdminE" name="namaAdminE" placeholder="Enter Nama Admin"  />
                  </div>
                  <div class="form-group">
                    <label for="noTelpAdminE">Nomor Telepon</label>
                    <input type="number" class="form-control" id="noTelpAdminE" name="noTelpAdminE" placeholder="Enter Nomor Telepon Admin"  />
                  </div>
                  <div class="form-group">
                    <label for="emailAdminE">Email</label>
                    <input type="email" class="form-control" id="emailAdminE"  name="emailAdminE" placeholder="Enter Admin Email"  />
                  </div>
                  <div class="form-group">
                    <label for="fotoE">Foto PIC</label>
                    <input type="hidden" class="form-control" id="fotoO" name="fotoO" />
                    <input type="file" name="fotoE" id="fotoE" class="form-control" />
                    <img id="image" class="mt-2" width="70%">
                  </div>
                  <div class="form-group">
                <label for="status">Status</label>
                <select class="custom-select form-control-border" name="statusAdminE" required>
                  <option value="1" <?= ($data->status == 1) ? 'selected' : '' ?>>Aktif</option>
                  <option value="0" <?= ($data->status == 0) ? 'selected' : '' ?>>Tidak Aktif</option>
                </select>
              </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button ID="submit" Text="Edit" class="btn btn-primary shadow-sm">Ubah</button>
                </div>
              </div>
             </form>
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
                  <h4 class="modal-title">Detail Data Admin</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="usernameAdmin">Username</label>
                    <input type="text" class="form-control" id="usernameAdminD" name="usernameAdminD" readonly />
                  </div>

                  <div class="form-group">
                    <label for="passwordAdmin">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" class="form-control" id="passwordAdminD" name="passwordAdmin"  readonly />
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-eye-slash" aria-hidden="true"></i></span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="namaAdmin">Nama</label>
                    <input type="text" class="form-control" id="namaAdminD" name="namaAdminD"   readonly />
                  </div>
                  <div class="form-group">
                    <label for="noTelpAdmin">Nomor Telepon</label>
                    <input type="number" class="form-control" id="noTelpAdminD"  name="noTelpAdminD"   readonly />
                  </div>
                  <div class="form-group">
                    <label for="emailAdmin">Email</label>
                    <input type="email" class="form-control" id="emailAdminD"  name="emailAdminD"   readonly />
                  </div>
                  <div class="form-group">
                    <label for="fotoE">Foto PIC</label>
                    <br />
                    <img id="imageD" width="70%">
                  </div>
                  <div class="form-group">
                    <label for="statusAdmin">Status</label>
                    <input type="text" class="form-control" id="statusAdminD" name="statusAdminD" readonly />
                  </div>
                </div>
                <div class="modal-footer">
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

<script type="text/javascript">

      $(document).ready(function () {
        $("#show_hide_password span").on("click", function (event) {
          event.preventDefault();
          if ($("#show_hide_password input").attr("type") == "text") {
            $("#show_hide_password input").attr("type", "password");
            $("#show_hide_password i").addClass("fa-eye-slash");
            $("#show_hide_password i").removeClass("fa-eye");
          } else if ($("#show_hide_password input").attr("type") == "password") {
            $("#show_hide_password input").attr("type", "text");
            $("#show_hide_password i").removeClass("fa-eye-slash");
            $("#show_hide_password i").addClass("fa-eye");
          }
        });
      });
    </script>

<script>
        $(document).ready(function(){
            $('.editbtn').on('click', function(){
                $('#editData').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
                console.log(data);

                var link = "<?php echo base_url() ?>assets/foto/admin/";

                $('#usernameAdminE').val(data[1]);
                $('#passwordAdminE').val(data[2]);
                $('#namaAdminE').val(data[3]);
                $('#noTelpAdminE').val(data[4]);
                $('#emailAdminE').val(data[5]);
                $('#fotoO').val(data[6]);
                $('#statusAdminE').val(data[7]);
                $("#image").attr("src", link+data[8]);
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

                var link = "<?php echo base_url() ?>assets/foto/admin/";

                $('#usernameAdminD').val(data[1]);
                $('#passwordAdminD').val(data[2]);
                $('#namaAdminD').val(data[3]);
                $('#noTelpAdminD').val(data[4]);
                $('#emailAdminD').val(data[5]);
                $("#imageD").attr("src", link+data[6]);
                $('#statusAdminD').val(data[9]);  
            });
        });
    </script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#dataTable').DataTable();
  } );
</script>

<?php
$script = ob_get_clean();
include('master_page.php');
ob_flush();
?>