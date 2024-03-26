<?php
if (isset($_GET['id'])) {
    $mahh = $_GET['id'];
    // thực hiện lấy thông tin của mã hh
    $hh = new hanghoa();
    $kq = $hh->getHangHoaId($mahh);
    $tenhh = $kq['tenhh'];
    $maloai = $kq['maloai'];
    $dacbiet = $kq['dacbiet'];
    $slx = $kq['soluotxem'];
    $ngaylap = $kq['ngaylap'];
    $mota = $kq['mota'];
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
                        <form class="" action="index.php?action=hanghoa&act=update_action" method="post" enctype="multipart/form-data">;

                        <div class="card-body">
                            <h4 class="card-title">Validation type</h4>



                            <div class="mb-3">
                                <label>Id</label>
                                <input type="text" class="form-control" name="mahh" value="<?php if (isset($mahh)) echo $mahh; ?>" readonly placeholder="enter Id" />
                            </div>

                            <div class="mb-3">
                                <label>Name Product</label>
                                <div>
                                    <input type="text" id="" class="form-control" name="tenhh" value="<?php if (isset($tenhh)) echo $tenhh; ?>" placeholder="name product" />
                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">State</label>
                                <select name="maloai" class="form-select" id="">
                                    <?php
                                    $selectedLoai = -1;
                                    if (isset($maloai) && $maloai != -1) {
                                        $selectedLoai = $maloai;
                                    }
                                    $loai = new loai();
                                    $kq = $loai->getLoai();
                                    while ($set = $kq->fetch()) :
                                    ?>
                                        <option value="<?php echo $set['maloai']; ?>" <?php if ($selectedLoai == $set['maloai']) echo 'selected' ?>><?php echo $set['tenloai']; ?></option>
                                    <?php
                                    endwhile;
                                    ?>
                                </select>

                            </div>

                            <div class="mb-3">
                                <label>Special</label>
                                <div>
                                    <input type="text" class="form-control" name="dacbiet" value="<?php if (isset($dacbiet)) echo $dacbiet; ?>" placeholder="Special" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>View</label>
                                <div>
                                    <input type="text" class="form-control" value="<?php if (isset($slx)) echo $slx; ?>" name="slx" placeholder="View" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Date founded</label>
                                <div>
                                    <input type="date" class="form-control" name="ngaylap" value="<?php if (isset($ngaylap)) echo $ngaylap; ?>" placeholder="Date founded" />
                                </div>
                            </div>


                            <div class="mb-3">
                                <label>Describe</label>
                                <div>
                                    <input name="mota" value="<?php if (isset($mota)) echo $mota; ?>" class="form-control" placeholder="Describe"></input>
                                </div>
                            </div>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" value="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Submit
                                    </button>
                                    <a type="reset" href="index.php?action=hanghoa" class="btn btn-secondary waves-effect">
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