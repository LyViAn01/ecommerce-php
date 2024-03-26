<?php
if (isset($_GET['id'])) {
    $makh = $_GET['id'];
    // thực hiện lấy thông tin của mã hh
    $hh = new user();
    $kq = $hh->getuserId($makh);
    $tenkh = $kq['tenkh'];
    $username = $kq['username'];
    $email = $kq['email'];
    $diachi = $kq['diachi'];
    $sodienthoai = $kq['sodienthoai'];

}
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Form Validation</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Validation</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <form class="" action="index.php?action=user&act=update_action" method="post" enctype="multipart/form-data">;

                        <div class="card-body">
                            <h4 class="card-title">Validation type</h4>



                            <div class="mb-3">
                                <label>Id</label>
                                <input type="text" class="form-control" name="makh" value="<?php if (isset($makh)) echo $makh; ?>" readonly placeholder="enter Id" />
                            </div>

                            <div class="mb-3">
                                <label>Name</label>
                                <div>
                                    <input type="text" id="" class="form-control" name="tenkh" value="<?php if (isset($tenkh)) echo $tenkh; ?>" placeholder="name" />
                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php if (isset($username)) echo $username; ?>" placeholder="username" />

                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <div>
                                    <input type="text" class="form-control" name="email" value="<?php if (isset($email)) echo $email; ?>" placeholder="email" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Adress</label>
                                <div>
                                    <input type="text" class="form-control" value="<?php if (isset($diachi)) echo $diachi; ?>" name="diachi" placeholder="adress" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Phone number</label>
                                <div>
                                    <input type="text" class="form-control" name="sodienthoai" value="<?php if (isset($sodienthoai)) echo $sodienthoai; ?>" placeholder="Phone number" />
                                </div>
                            </div>

                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Submit
                                    </button>
                                    <a type="reset" href="index.php?action=user" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                    </div>
                </div> <!-- end col -->


            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>