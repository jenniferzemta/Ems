  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Project Management</a></li>
        <li class="active">Add project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <?php echo validation_errors('<div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>', '</div>
          </div>'); ?>

        <?php if($this->session->flashdata('success')): ?>
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  <?php echo $this->session->flashdata('success'); ?>
            </div>
          </div>
        <?php elseif($this->session->flashdata('error')):?>
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>
                  <?php echo $this->session->flashdata('error'); ?>
            </div>
          </div>
        <?php endif;?>

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add project</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>insert-project" method="POST">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Name Project</label>
                    <input type="text" name="txtname" class="form-control" placeholder=" Name project">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Staff</label>
                    <select class="form-control" name="slcstaff">
                      <option value="">Select</option>
                      <?php
                      if(isset($staff))
                      {
                        foreach($staff as $cnt)
                        {
                          print "<option value='".$cnt['id']."'>".$cnt['staff_name']."</option>";
                        }
                      } 
                      ?>
                    </select>
                  </div>
                </div>

    
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Date_deb</label>
                    <input type="date" name="txtdob" class="form-control" placeholder="Start">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Date_fin</label>
                    <input type="date" name="txtdob" class="form-control" placeholder="End">
                  </div>
                </div>
                
              
               
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Statut</label>
                    <select class="form-control" name="slcstatut">
                      <option value="">Select</option>
                      <option value="Encour">Initie</option>
                      <option value="">En cours</option>
                      <option value="Others">termine</option>
                      <option value="Others">bloque</option>
                      <option value="Others">abandonne</option>
                    </select>
                  </div>
                </div>
                
            
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->