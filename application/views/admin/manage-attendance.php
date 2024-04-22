
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Salary Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Salary Management</a></li>
        <li class="active">Manage Salary</li>
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
        <?php endif;?>

        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Manage Salary</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Staff Name</th>
                    <th>Date of Day</th>
                    <th>Sign In time</th>
                    <th>Sign out time</th>
                    <th>Working Hour</th>

                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if(isset($content)):
                    $i=1; 
                    foreach($content as $cnt): 
                  ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $cnt['staff_name']; ?></td>
                        
                    
                        <td><?php echo date('Y-m-d', strtotime($cnt['atten_date'])); ?></td>
                        
                        <td><?php echo date('H:i', strtotime($cnt['signin_time'])); ?></td>
                        <td><?php echo date('H:i', strtotime($cnt['signout_time'])); ?></td>
                        <td><?php echo $cnt['workout']; ?></td>

                        <td>
                          <a href="<?php echo base_url(); ?>edit-attendance/<?php echo $cnt['id']; ?>" class="btn btn-success">Edit</a>
                          <a href="<?php echo base_url(); ?>delete-attendance/<?php echo $cnt['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    <?php 
                      $i++;
                      endforeach;
                      endif; 
                    ?> 
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    $('#example1').DataTable({
        "aaSorting": [[2,'desc']],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>

    