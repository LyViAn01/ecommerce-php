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

                        <form class="" action="index.php?action=cthanghoa&act=cthanghoa_action" method="post" enctype="multipart/form-data">

                            <div class="card-body">
                                <h4 class="card-title">Validation type</h4>



                                <div class="mb-3">
                                    <label>Id</label>
                                    <select name="mahh" class="form-control" style="width:150px;">
                                        <?php
                                        $hh = new hanghoa();
                                        $hang = $hh->getHangHoa();
                                        while ($set = $hang->fetch()) :
                                        ?>
                                            <option value="<?php echo $set['mahh']; ?>"><?php echo $set['tenhh']; ?></option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label>Color</label>
                                    <select name="mamau" class="form-control" style="width:150px;">
                                        <?php
                                        $hh = new hanghoa();
                                        $hang = $hh->getMau();
                                        while ($set = $hang->fetch()) :
                                        ?>
                                            <option value="<?php echo $set['idmau'];?>"><?php echo $set['mausac']; ?></option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label>Price</label>
                                    <input type="text" id="" class="form-control" name="dongia" placeholder="price" />
                                </div>

                                <div class="mb-3">
                                    <label>Quantity in stock</label>
                                    <input type="text" id="" class="form-control" name="slt" placeholder="quantity in stock" />
                                </div>

                                <div class="mb-3">
                                    <label>Quantity purchased</label>
                                    <input type="text" id="" class="form-control" name="slm" placeholder="quantity purchased" />
                                </div>

                                <div class="mb-3">
                                    <label>Image</label>

                                    <input type="file" name="image" id="fileupload">
                                </div>

                                <div class="mb-3">
                                    <label>Discount</label>
                                    <input type="text" id="" class="form-control" name="giamgia" placeholder="discount" />
                                </div>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Submit
                            </button>
                        </form>
                    </div>
                </div> <!-- end col -->


            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>