<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN - Asyka Stir</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4" style="margin-top:50px">

    <br>
    <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan']=="gagal"){
        echo "<div class='alert alert-danger alert-danger'>";
        echo $this->session->flashdata('alaert');
        echo "</div>";
      } else if($_GET['pesan']=='logout'){
          if($this->session->flashdata())
          {
            echo "<div class='alert alert-danger alert-success'>";
            echo $this->session->flashdata('Anda telah logout');
            echo "</div>";
          }
        }else if($_GET['pesan']=='Belum Login'){
          if($this->session->flashdata())
          {
            echo "<div class='alert alert-danger alert-primary'>";
            echo $this->session->flashdata('alert');
            echo "</div>";
          }
        }
        }else{
          if($this->session->flashdata())
          {
            echo "<div class='alert alert-danger alert-message'>";
            echo $this->session->flashdata('alert');
            echo "</div>";
          }
        }
        ?>
        <br>
        <div class="panel panel-default">
          <div class="panel-body">
           <center>
            <h2>ASYKA STIR</h2>
            <h3>LOGIN</h2>
            </center>
            <br><br>
            <form method="post" action="<?php echo base_url().'login/login' ?>">
              <div class="form-group">
                <input type="text" name="username" placeholder="username" class="form-control">
                <?php echo form_error('username'); ?>
              </div>
                <div class="form-group">
                <input type="password" name="password" placeholder="password" class="form-control">
                <?php echo form_error('password'); ?>
              </div>
              <div class="form-group">
                <input type="submit" value="Login"  class="btn btn-primary">
              </div>
            </form>
            <br><br>
          </div>
        </div>
      <a href="<?php echo base_url().'regis/regis_anggota'; ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span>Registrasi Member</a>
      </div>
      <script type="text/javascript">
      $('.alert-message').alert().delay(3000).slideUp('slow');
      </script>
  </body>
</html>
