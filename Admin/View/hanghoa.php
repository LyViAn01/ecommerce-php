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
                <a href="index.php?action=hanghoa&act=hanghoa_action" type="button" class="btn btn-primary waves-effect waves-light">
                  AddProduct <i class="ri-arrow-right-line align-middle ms-2"></i>
                </a>
              </div>
              <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Product type</th>
                    <th>Special</th>
                    <th>Number of views</th>
                    <th>Date founded</th>
                    <th>Describe</th>
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                  <?php
                  $hh = new hanghoa();
                  $hang = $hh->getHangHoa();
                  while ($set = $hang->fetch()) :
                  ?>
                    <tr>
                      <td><?php echo $set['mahh']; ?></td>
                      <td><?php echo $set['tenhh']; ?></td>
                      <td><?php echo $set['maloai']; ?></td>
                      <td><?php echo $set['dacbiet']; ?></td>
                      <td><?php echo $set['soluotxem']; ?></td>
                      <td><?php echo $set['ngaylap']; ?></td>
                      <td><?php echo $set['mota']; ?></td>
                      <td style="width: 100px">
                        <a href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['mahh']; ?>" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                          <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['mahh']; ?>" class="btn btn-outline-secondary btn-sm " >
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