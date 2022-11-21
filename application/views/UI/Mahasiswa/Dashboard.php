<?php ob_start();?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url() ?>assets/mahasiswa/img/classroom.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>SELAMAT DATANG MAHASISWA</h5>
              <p>Ketuk tombol di bawah untuk menuju form peminjaman</p>
              <p><a href="<?php echo site_url('Functions/PeminjamanRuangan'); ?>" class="btn btn-primary mt-3" style="background-color: #0089FF">Form Peminjaman</a></p>
            </div>
          </div>
        </div>
      </div>

      <!-- about section starts -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row mt-4">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="https://via.placeholder.com/700x365" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
                      <div class="about-text">
                            <h2>Ruang 101</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut...</p>
                            <a href="<?php echo site_url('Functions/DetailRuangan'); ?>" class="btn text-white" style="background-color: #0089FF">Learn More</a>
                      </div>
                  </div>
              </div>
              <div class="row mt-4">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="https://via.placeholder.com/700x365" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
                      <div class="about-text">
                            <h2>Ruang 101</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut...</p>
                            <a href="<?php echo site_url('Functions/DetailRuangan'); ?>" class="btn text-white" style="background-color: #0089FF">Learn More</a>
                      </div>
                  </div>
              </div>
              <div class="row mt-4">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="https://via.placeholder.com/700x365" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
                      <div class="about-text">
                            <h2>Ruang 101</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut...</p>
                            <a href="<?php echo site_url('Functions/DetailRuangan'); ?>" class="btn text-white" style="background-color: #0089FF">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- about section Ends -->

<?php
$data = ob_get_clean();
?>

<?php ob_start();?>

<?php
$script = ob_get_clean();
include('master_peminjaman.php');
ob_flush();
?>