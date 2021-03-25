<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Kasir</title>
    <?php 
        $this->load->view('admin/admin');
   ?>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">

    


</head>

<body>
    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>

    <!-- Page Content -->
    
            
        </div>
        <!-- /.row -->
	<div class="mainbody-section text-center">
     <?php $h=$this->session->userdata('akses'); ?>
     <?php $u=$this->session->userdata('user'); ?>

        <!-- Projects Row -->
        <div class="row">
         <?php if($h=='1'){ ?>
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#0000a0;">Selamat datang
                    <small style="color:#80001c;">Administrator</small>
                </h1>
            </div>
            <div class="col-md-4 portfolio-item">
            <div class="thumbnail">
                  <img src="<?php echo base_url().'assets/img/stokbarang.png'?>" alt="...">
                  <div class="caption">
                  <h3>Laporan Barang</h3>
                  <p><a href="http://localhost/programkkp/admin/laporan/lap_data_barang" target="_blank" class="btn btn-primary" role="button">LIHAT</a></p>
                  </div>
            </div>
            </div>
            <div class="col-md-4 portfolio-item">
            <div class="thumbnail">
                  <img src="<?php echo base_url().'assets/img/sales.png'?>" alt="...">
                  <div class="caption">
                  <h3>Laporan Penjualan</h3>
                  <p><a href="http://localhost/programkkp/admin/laporan/lap_data_penjualan" target="_blank" class="btn btn-primary" role="button">LIHAT</a></p>
                  </div>
            </div>
            </div>
            <?php }?>
            <?php if($h=='2'){ ?> 
                  <div class="col-lg-12">
                <h1 class="page-header" style="color:#0000a0;">Selamat datang
                    <small style="color:#80001c;">Kasir</small>
                </h1>
            </div>
            <div class="col-md-4 portfolio-item">
            <div class="thumbnail">
                  <img src="<?php echo base_url().'assets/img/sales.png'?>" alt="...">
                  <div class="caption">
                  <h3>Laporan Penjualan</h3>
                  <p><a href="http://localhost/programkkp/admin/laporan/lap_data_penjualan" target="_blank" class="btn btn-primary" role="button">LIHAT</a></p>
                  </div>
            </div>
            </div>
            <?php }?>
        </div>
        
        <!-- /.row -->

        <!-- Projects Row -->
        
		
        <!-- /.row -->
	
    <!-- /.container -->

    <?php 
        $this->load->view('admin/kasir');
   ?>
</body>

</html>
