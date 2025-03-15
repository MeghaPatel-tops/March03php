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
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quick Example</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="post" enctype="multipart/form-data">
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="Category Name"
                          name="cname"
                          required
                          value="<?php echo $catdata->cname?>"
                        />
                      </div>
                      
                      <div class="input-group mb-3">
                       <img src="<?php echo $GLOBALS['baseurl']."Uploads/".$catdata->cimage?>" alt="" height="50px" width="50x">
                        <input type="file" class="form-control" id="inputGroupFile02" name="cimage" />
                        <label class="input-group-text" for="inputGroupFile02">Upload Thumnail Image</label>
                      </div>
                     
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
           
              </div>
            </div>
        <!-- Main Contenet End  -->


          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
    <?php include('footer.php')?>