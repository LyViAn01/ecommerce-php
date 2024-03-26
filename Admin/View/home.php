<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                <li class="breadcrumb-item active">Horizontal Preloader Layout</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <?php
            $hh = new hanghoa();
            $set = $hh->getSubHoaDon();
            ?>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                                    <h4 class="mb-2"><?php echo $set['masohd']; ?></h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-shopping-cart-2-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <?php
                $hh = new hanghoa();
                $set = $hh->getHoaDonToday();
                ?>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">New Orders Today</p>
                                    <h4 class="mb-2"><?php echo $set['total']; ?></h4>
                                    <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="mdi mdi-currency-usd font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <?php
                $hh = new user();
                $set = $hh->getSubUser();
                ?>

                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Users</p>
                                    <h4 class="mb-2"><?php echo $set['makh']; ?></h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-user-3-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->

            </div><!-- end row -->

            <div class="row">
                <div class="col-xl-12">

                    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                    <script type="text/javascript">
                        google.load('visualization', '1.0', {
                            'packages': ['corechart']
                        });
                        google.setOnLoadCallback(drawVisualization);

                        function drawVisualization() {
                            var rows = new Array();
                            var hang = new Array();
                            var soluongban = new Array();
                            var dataten = 0;
                            var slb = 0;
                            var data = new google.visualization.DataTable();

                            <?php
                            $hh = new hanghoa();
                            $result = $hh->getThongKe();
                            while ($set = $result->fetch()) {
                                $hang = $set['hang'];
                                $soluong = $set['soluong'];
                                echo "hang.push('" . $hang . "');";
                                echo "soluongban.push('" . $soluong . "');";
                            }
                            ?>

                            for (var i = 0; i < hang.length; i++) {
                                dataten = hang[i];
                                slb = parseInt(soluongban[i]);
                                rows.push([dataten, slb]);
                            }

                            data.addColumn('string', 'Goods name');
                            data.addColumn('number', 'Sell ​​number');
                            data.addRows(rows);

                            var options = {
                                colors: ['#FF5733', '#3498DB', '#27AE60'],
                                title: 'Statistical',
                                'width': 1032,
                                'height': 500,
                                'backgroundColor': '#ffffff',
                                'color': '',
                                is3D: true,
                                hAxis: {
                                    title: 'Sell ​​number'
                                },
                                vAxis: {
                                    title: 'Goods name'
                                },
                                orientation: 'horizontal'
                            };

                            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                            chart.draw(data, options);
                        }
                    </script>

                    <div class="thongke">
                        <div style=" width:100%;" id="chart_div">dfsf</div>
                        <select name="" id="" hidden>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>


                </div>

            </div>
            <!-- end row -->

            <div class="row mt-3">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Latest Transactions</h4>

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
                                    $count = 0; // Thêm biến đếm
                                    while ($set = $result->fetch()) :
                                        if ($count >= 10) break; // Nếu đã lặp 10 lần thì dừng lại
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
                                        $count++; // Tăng biến đếm sau mỗi lần lặp
                                    endwhile;
                                    ?>

                                </table> <!-- end table -->
                            </div>
                        </div><!-- end card -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end">
                                <select class="form-select shadow-none form-select-sm">
                                    <option selected>Apr</option>
                                    <option value="1">Mar</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Jan</option>
                                </select>
                            </div>
                            <h4 class="card-title mb-4">Monthly Earnings</h4>

                            <div class="row">
                                <div class="col-4">
                                    <div class="text-center mt-4">
                                        <h5>3475</h5>
                                        <p class="mb-2 text-truncate">Market Place</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-4">
                                    <div class="text-center mt-4">
                                        <h5>458</h5>
                                        <p class="mb-2 text-truncate">Last Week</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-4">
                                    <div class="text-center mt-4">
                                        <h5>9062</h5>
                                        <p class="mb-2 text-truncate">Last Month</p>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="mt-4">
                                <div id="donut-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div>

    </div>
    <!-- End Page-content -->

</div>