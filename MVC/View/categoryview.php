<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <?php  include('head.php');?>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <?php  include('navbar.php');?>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <?php  include('sidebar.php');?>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
           
         <!-- Main Contenet start  -->
         
            <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Bordered Table</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Catgory</th>
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        foreach($catdata as $key){
                            ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $key->cname;?></td>
                                    <td><img src="<?php echo $GLOBALS['baseurl']."Uploads/".$key->cimage?>" alt="" width="80px" height="80px"></td>
                                </tr>
                            <?php
                            $i++;
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                   
                  </div>
                </div>
                <!-- /.card -->
                
                <!-- /.card -->
              </div>
        <!-- Main Contenet End  -->


          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
    <?php include('footer.php')?>