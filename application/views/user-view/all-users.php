<?php include APPPATH.'views/admin-view/common-files/header.php'; ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <?php include APPPATH.'views/admin-view/common-files/navbar.php'; ?>

  <?php include APPPATH.'views/admin-view/common-files/sidebar.php'; ?>


  <?php include APPPATH.'views/admin-view/common-files/breadcurmb.php'; ?>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SrNo.</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>User Role</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach($users_data as $userdata){?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $userdata->full_name ?></td>
                    <td><?php echo $userdata->email ?></td>
                    <td><?php echo $userdata->password ?></td>
                    <td><?php if($userdata->status=='200'){?>
                      <span class="right badge badge-success">Active</span> 
                      <?php }?> 
                      <?php if($userdata->status=='500'){?> 
                      <span class="right badge badge-danger">Block</span> 
                      <?php }?>
                      <?php if($userdata->status=='404'){ ?>
                        <span class="right badge badge-warning">Inactive</span> 
                      <?php }  ?></td>
                    <td><?php echo $userdata->user_role ?></td>
                  </tr>
                  <?php $i++;}?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>SrNo.</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>User Role</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  
<!-- REQUIRED SCRIPTS -->
<?php include APPPATH.'views/admin-view/common-files/footer.php'; ?>


<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
