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
                  <div class="card-header"><div class="card-title">Product Add</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="post" enctype="multipart/form-data">
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="Category Name"
                          name="pname"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Price</label>
                        <input
                          type="text"
                          class="form-control"
                          id="Category Name"
                          name="price"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Description</label>
                        <input
                          type="text"
                          class="form-control"
                          id="Category Name"
                          name="description"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Select Category</label>
                       <select class="form-control" name="category">
                        <option value="">----category----</option>
                        <?php
                        foreach($catdata as $index){
                          ?>
                            <option value="<?php echo $index->cid ?>"><?php echo $index->cname ?></option>
                          <?php
                        }
                        ?>
                      </select>
                      </div>
                      <div class="input-group mb-3">
                      
                        <input type="file" class="form-control" id="inputGroupFile02" name="pimage" required/>
                        <label class="input-group-text" for="inputGroupFile02">Upload Product Image</label>
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