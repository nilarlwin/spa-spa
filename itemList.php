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
         <!-- <div class="mt-3 mb-2 d-flex">
             <div class="form-group row mr-3">
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
            </div> -->
            <table class="table table-hover progress-table text-center" id="myTable">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Item Type</th>
                        <th scope="col">Item Code</th>
                        <th scope="col">Purchase Price</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>item one</td>
                        <td>item type one</td>
                        <td>000001</td>
                        <td>75500</td>
                        <td>Ku</td>
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
                        <th>2</th>
                        <td>item two</td>
                        <td>item type one</td>
                        <td>000002</td>
                        <td>55000</td>
                        <td>Ku</td>
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
                        <th>3</th>
                        <td>item three</td>
                        <td>item type two</td>
                        <td>000003</td>
                        <td>65000</td>
                        <td>Ku</td>
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
                <a href="items.php"
                    class="btn mt-auto btn-info ml-auto mb-2 col-sm-1 d-flex justify-content-center align-items-center">
                    <i class="ti-plus mr-2 fw-bold"></i> Add
                </a>
            </div>
        </div>
        <!-- main content area end -->
    </div>
    <!-- footer area start-->

    <?php require "./partials/footer.php"?>