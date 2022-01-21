<div class="page-header">
  <h3>Dashboard</h3>
</div>
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="glyphicon glyphiconfolder-open"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge">
            <font size="18"><b><?php echo $this->M_kursus->get_data('pengajar')->num_rows(); ?></b></font>
          </div>
              <div><b>Jumlah Pengajar yang terdaftar</b></div>
            </div>
          </div>
        </div>
        <a href="">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="glyphicon glyphiconuser"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <font size="18"><b><?php echo $this->M_kursus->get_data('anggota')->num_rows(); ?></b></font>
              </div>
                  <div><b>Jumlah Member yang terdaftar</b></div>
                </div>
              </div>
            </div>
            <a href="<?php echo base_url().'admin/anggota' ?>">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
 <div class="col-lg-3 col-md-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="glyphicon glyphiconuser"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <font size="18"><b><?php echo $this->M_kursus->get_data('transaksi')->num_rows(); ?></b></font>
              </div>
                  <div><b>Jumlah Transaksi yang masuk</b></div>
                </div>
              </div>
            </div>
            <a href="<?php echo base_url().'admin/transaksi' ?>">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
   
 <div class="col-lg-3 col-md-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="glyphicon glyphiconuser"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <font size="18"><b><?php echo $this->M_kursus->get_data('admin')->num_rows(); ?></b></font>
              </div>
                  <div><b>Jumlah Admin yang terdaftar</b></div>
                </div>
              </div>
            </div>
            <a href="">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
   
       
              </div>

              <hr>

              <div class="row">
              


                                </div>
