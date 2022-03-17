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

            <table class="table table-hover progress-table text-center" id="myTable">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">NRC</th>
                        <th scope="col">Img</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Position</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Moe Moe</td>
                        <td>5/mkn(n)123456</td>
                        <td>....</td>
                        <td>mandalay</td>
                        <td>132456789</td>
                        <td>eg@gmail.com</td>
                        <td>sale staff</td>
                        <td>-----</td>
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
                        <td>Soe Soe</td>
                        <td>5/rabana(n)123456</td>
                        <td>....</td>
                        <td>shwebo</td>
                        <td>77777777</td>
                        <td>aa@gmail.com</td>
                        <td>hair cutter</td>
                        <td>-----</td>
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
                        <td>Aye Aye</td>
                        <td>5/mkn(n)123456</td>
                        <td>....</td>
                        <td>mandalay</td>
                        <td>132456789</td>
                        <td>eg@gmail.com</td>
                        <td>admin</td>
                        <td>-----</td>
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
                <a href="staff.php"
                    class="btn mt-auto btn-info ml-auto mb-2 col-sm-1 d-flex justify-content-center align-items-center">
                    <i class="ti-plus mr-2 fw-bold"></i> Add
                </a>
            </div>
        </div>
        <!-- main content area end -->
    </div>
    <!-- footer area start-->

    <?php require "./partials/footer.php"?>