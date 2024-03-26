<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Data Tables</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                <li class="breadcrumb-item active">Data Tables</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <h4 class="card-title">Default Datatable</h4>
              <div class="button-items my-2 text-end">
                <a href="index.php?action=user&act=user_action" type="button" class="btn btn-primary waves-effect waves-light">
                  AddUser <i class="ri-arrow-right-line align-middle ms-2"></i>
                </a>
              </div>
              <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Adress</th>
                    <th>Phone number</th>
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                  <?php
                  $hh = new user();
                  $hang = $hh->getUser();
                  while ($set = $hang->fetch()) :
                  ?>
                    <tr>
                      <td><?php echo $set['makh']; ?></td>
                      <td><?php echo $set['tenkh']; ?></td>
                      <td><?php echo $set['username']; ?></td>
                      <td><?php echo $set['email']; ?></td>
                      <td><?php echo $set['diachi']; ?></td>
                      <td><?php echo $set['sodienthoai']; ?></td>

                      <td style="width: 100px">
                        <a href="index.php?action=user&act=update_user&id=<?php echo $set['makh']; ?>" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                          <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="index.php?action=user&act=delete_user&id=<?php echo $set['makh']; ?>" class="btn btn-outline-secondary btn-sm " >
                          <i class="ri-delete-bin-6-fill"></i>
                        </a>
                      </td>
                    </tr>
                  <?php
                  endwhile;
                  ?>
                </tbody>
              </table>

            </div>
          </div>
        </div> <!-- end col -->
      </div> <!-- end row -->

    </div> <!-- container-fluid -->
  </div>
  <!-- End Page-content -->



</div>