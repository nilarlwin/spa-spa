<?php require "./partials/heading.php"?>

<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
    <!-- sidebar menu area start -->
    <?php require "./components/slidermenu.php"?>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <!-- header area start -->
        <?php require "./components/headerArea.php"?>

        <!-- header area end -->

        <div class="main-content-inner">
          <div class="mt-3 mb-2 d-flex align-items-end">
             <div class="form-group row">
                <label class="col-form-label">From Date:</label>
                <div class="col-sm-8">
                   <input type="date" class="form-control form-control-sm" />
                 </div>
             </div>
             <div class="form-group row">
                <label class="col-form-label">To Date:</label>
                <div class="col-sm-8">
                   <input type="date" class="form-control form-control-sm" />
                 </div>
             </div>
             <div class="form-group row">
                <div class="col-sm-12">
                   <input type="submit" class="form-control form-control-sm btn btn-primary" value="Search"/>
                 </div>
             </div>
            </div>
            <table class="table table-hover progress-table text-center" id="myTable">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</th>
                        <td>Item One</td>
                        <td>50000</td>
                        <td>50</td>
                        <td>-------</td>
                        <td>
                            <ul class="d-flex justify-content-center">
                                <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                </li>
                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2</th>
                        <td>Item Two</td>
                        <td>50000</td>
                        <td>50</td>
                        <td>-------</td>
                        <td>
                            <ul class="d-flex justify-content-center">
                                <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                </li>
                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>3</th>
                        <td>Item Three</td>
                        <td>50000</td>
                        <td>50</td>
                        <td>-------</td>
                        <td>
                            <ul class="d-flex justify-content-center">
                                <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                </li>
                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-3">
                <a href="counter.php"
                    class="btn mt-auto btn-info ml-auto mb-2 col-sm-1 d-flex justify-content-center align-items-center">
                    <i class="ti-plus mr-2 fw-bold"></i> Add
                </a>
            </div>
        </div>
        <!-- main content area end -->
    </div>
    <!-- footer area start-->

    <?php require "./partials/footer.php"?>