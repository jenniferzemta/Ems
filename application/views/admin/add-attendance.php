
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Presence
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Attendance Management</a></li>
        <li class="active">Add Attendance</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">


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
        <?php endif ?>

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Attendance</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('Attendance/insert');?>
              <div class="box-body">

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Staff</label>
                    <select class="form-control" required="required"name="slcstaff">
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
                    <label>Date of day</label>
                    <input type="date" name="txtdod" class="form-control" required="required"placeholder="DOB">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Sign in time</label>
                      <input type="time" name="txtsit" class="form-control" required="required" placeholder="Time (HH:MM)">  </div>
                        </div>

                        <div class="col-md-6">
                  <div class="form-group">
                    <label>Sign out time</label>
                      <input type="time" name="txtsot" class="form-control" required="required"placeholder="Time (HH:MM)">  </div>
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