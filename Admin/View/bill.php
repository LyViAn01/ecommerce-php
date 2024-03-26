<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            

                            <h4 class="card-title mb-4">Billing</h4>

                            <div class="table-responsive">
                                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>User</th>
                                            <th>Product</th>
                                            <th>quantity purchased</th>
                                            <th>booking date</th>
                                            <th style="width: 120px;">Subtotal</th>
                                        </tr>
                                    </thead><!-- end thead -->
                                    <?php
                $hh = new bill();
                $result = $hh->getBill();
                while ($set = $result->fetch()) :
                ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0"><?php echo $set['masohd']; ?></h6>
                                            </td>
                                            <td><?php echo $set['tenkh']; ?></td>
                                            <td>
                                                <div class="font-size-13"><?php echo $set['tenhh']; ?></div>
                                            </td>
                                            <td>
                                            <?php echo $set['soluongmua']; ?>
                                            </td>
                                            <td>
                                            <?php echo $set['ngaydat']; ?>
                                            </td>
                                            <td><?php echo $set['tongtien']; ?></td>
                                        </tr>
                                        
                                    </tbody><!-- end tbody -->
                                    <?php
                                    endwhile;
                                    ?>
                                </table> <!-- end table -->
                            </div>
                        </div><!-- end card -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->

            </div>
        </div>
    </div>
</div>