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
                    <th>Nama Jenis Ruangan</th>
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
                               <td hidden="true"><?php echo $data->idJenisRuangan?></td> 
                               <td><?php echo $data->namaJenisRuangan?></td>                          
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
                <form action="<?php echo base_url('Functions/savejenisruangan')?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Data Jenis Ruangan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="namaJenisRuangan">Nama Jenis Ruangan</label>
                        <input type="text" class="form-control" id="namaJenisRuangan" name="namaJenisRuangan" placeholder="Enter Nama Jenis Ruangan" />
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
            <form action="<?php echo base_url('Functions/editjenisruangan')?>" method="POST" enctype="multipart/form-data">  
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Data Jenis Ruangan</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="idJenisRuanganE">ID</label>
                    <input type="text" id="idJenisRuanganE" name="idJenisRuanganE" class="form-control form-control-user" readonly required></input>
                  </div>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="namaJenisRuanganE">Nama Jenis Ruangan</label>
                    <input type="text" class="form-control" id="namaJenisRuanganE" name="namaJenisRuanganE" placeholder="Enter Nama Jenis Ruangan" value="jenisRuangan1" />
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
                  <h4 class="modal-title">Detail Data Jenis Ruangan</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="namaJenisRuanganD">Nama Jenis Ruangan</label>
                    <input id="namaJenisRuanganD" type="text" class="form-control" name="namaJenisRuanganD" value="<?= $data->namaJenisRuangan ?>" readonly required>
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
                $('#idJenisRuanganE').val(data[0]);
                $('#namaJenisRuanganE').val(data[1]);       
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
                $('#idJenisRuanganD').val(data[1]);
                $('#namaJenisRuanganD').val(data[2]); 
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