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
            <div class="col-md-12">
                <div class="card mb-12">
               
                  <div class="card-header"><h3 class="card-title">Bordered Table</h3> <a href="productadd" class="btn btn-primary ms-5"> Add </a></div>
                  <!-- /.card-header -->
                   
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Image</th>
                          <th colspan="2" style="text-align:center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        foreach($products as $key){
                            ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $key->pname;?></td>
                                    <td><?php echo $key->price;?></td>
                                    <td><?php echo $key->description;?></td>
                                    <td><?php echo $key->cname;?></td>
                                    <td><img src="<?php echo $GLOBALS['baseurl']."Uploads/products".$key->pimage?>" alt="" width="80px" height="80px"></td>
                                    <td><a href="deleteproduct/<?php echo $key->pid?>" class="btn btn-danger">Delete</a></td>
                                    <td>
                                        <a href="editproduct/<?php echo $key->pid?>" class="btn btn-success">Edit</a>
                                    </td>
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