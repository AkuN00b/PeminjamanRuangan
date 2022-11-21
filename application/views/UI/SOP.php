<?php ob_start();?>

<!-- HEADER -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jenis Ruangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active">Data</li>
              <li class="breadcrumb-item active">Jenis Ruangan</li>
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
          <table id="dataTable1" class="display nowrap table-striped table" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th hidden="true">ID</th>
                    <th>Nama SOP</th>
                    <th hidden>Foto</th>
                    <th hidden>Foto</th>
                    <th>Foto</th>
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
                               <td hidden><?php echo $data->idSop?></td> 
                               <td><?php echo $data->deskripsi?></td>   
                               <td hidden><?php echo $data->foto?></td>
                               <td hidden><?php echo $data->foto?></td>
                                <td><img src="<?php echo base_url(); ?>assets/foto/sop/<?php echo $data->foto; ?>" width="70"></td>                       
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
                <form action="<?php echo base_url('Functions/savesop')?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Data SOP</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="deskripsi">Deskripsi SOP</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Enter Deskripsi SOP" />
                      </div>
                      <div class="form-group">
                        <label for="foto">Foto SOP</label>
                        <input type="file" id="foto" class="form-control" name="foto"  />
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button id="submit" name="submit" Text="Create" class="btn btn-primary shadow-sm">Tambah</button>
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
            <form action="<?php echo base_url('Functions/editsop')?>" method="POST" enctype="multipart/form-data">  
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Data SOP</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="idsop">ID</label>
                    <input type="text" id="idsopE" name="idsopE" class="form-control form-control-user" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="deskripsiE">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsiE" name="deskripsiE" placeholder="Enter Nama SOP" />
                  </div>
                  <div class="form-group">
                    <label for="fotoE">Foto SOP</label>
                    <input type="hidden" class="form-control" id="fotoO" name="fotoO" />
                    <input type="file" name="fotoE" id="fotoE" class="form-control" />
                    <img id="image" class="mt-2" width="70%">
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                  <h4 class="modal-title">Detail SOP</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="deskripsiD">Nama Deskripsi</label>
                    <input id="deskripsiD" type="text" class="form-control" name="deskripsiD" value="<?= $data->deskripsi ?>" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="fotoD">Foto SOP</label><br />
                    <img id="fotoD" class="mt-2" width="70%">
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

                var link = "<?php echo base_url() ?>assets/foto/sop/";

                $('#idsopE').val(data[1]);
                $('#deskripsiE').val(data[2]);       
                $('#fotoO').val(data[3]);
                $("#image").attr("src", link+data[4]);
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

                var link = "<?php echo base_url() ?>assets/foto/sop/";

                $('#idsopD').val(data[1]);
                $('#deskripsiD').val(data[2]); 
                $("#fotoD").attr("src", link+data[4]);
            });
        });
    </script>
    
    <script type="text/javascript">
  $(document).ready( function () {
    $('#dataTable1').DataTable();
  } );
</script>

<?php
$script = ob_get_clean();
include('master_page.php');
ob_flush();
?>