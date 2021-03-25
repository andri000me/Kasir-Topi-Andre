<!DOCTYPE html>
<html>
  <head>
    <title>Masuk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- styles -->
		<link href="<?php echo base_url().'assets/css/stylesl.css'?>" rel="stylesheet">
		<style>
		.masuk-bg {
			background-image: url(http://localhost/programkkp/assets/img/back.jpg);
		}
		</style>
   
  </head>
  <body class="masuk-bg">
  

	<div class="page-content container ">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box" style="margin-top:20%;">
			            <div class="content-wrap">
			                <img width="200px" src="<?php echo base_url().'assets/img/kasirputih.png'?>"/>
			                <p><?php echo $this->session->flashdata('msg');?></p>
	                        <hr/>
	                        <form action="<?php echo base_url().'administrator/cekuser'?>" method="post">
	                        	<input class="form-control" type="text" name="username" placeholder="Nama Pengguna" required>
				                <input class="form-control" type="password" name="password" placeholder="Kata Sandi" style="margin-bottom:1px;" required>
				                <div class="action">
				                    <button type="submit" class="btn btn-lg btn-danger " style="width:310px;margin-bottom:30px;">MASUK</button>
				                </div>
	                        </form>
			                                
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    
  </body>
</html>