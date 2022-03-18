<?php require "./partials/heading.php";?>
<style>
.addStaff-wapper,
.staff-table-wapper {
    height: 150px;
    overflow-y: auto;
    margin: 0;
    padding: 0;
}

body,
html,
.main-area,
.card>.row {
    height: calc(100vh - 150px);
}
</style>
<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-sm-6">

            <div class=" d-flex justify-content-start align-items-center">
                <div class="my-auto m-1">
                    <a href="./index.php">
                        <i class="fa fa-arrow-left fw-bolder" style="color:#7801ff;"></i>
                    </a>
                </div>
                <h4 class="page-title pull-left">Customer appointment</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Dashboard</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix row d-flex justify-content-end align-items-center">
            <div class="user-profile  pull-right col-sm-11 d-flex justify-content-end pr-2">
                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                <h4 class="user-name text-dark dropdown-toggle" data-toggle="dropdown">minkhant <i
                        class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </div>
            <ul class="notification-area pull-right col-sm-1 pr-0">
                <li id="full-view"><i class="fa fa-expand"></i></li>
                <li id="full-view-exit"><i class="fa fa-compress"></i></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid main-area">
    <div class="card mt-2 me-2">
        <div class="row">
            <div class="col-2 add-customer-content">
                <div class="add-customer my-2">
                    <div class="btn-group w-100">
                        <!-- <input type="text" class="form-control form-control-sm"> -->
                        <select name="" id="" class="form-select form-select-sm">
                            <option value="">select customer ...</option>
                        </select>
                        <button class="btn btn-sm btn-info">Add</button>
                    </div>
                </div>
                <hr>
                <div class="customer-app">
                    <ul class="list-group">
                        <li
                            class="check_customer_name list-group-item d-flex justify-content-between align-items-center pe-0 py-0">
                            customer
                            1
                            <button class="btn btn-sm text-info cus_check_btn" data-cus_id="Customer-1">Check</button>
                        </li>
                        <li
                            class="check_customer_name list-group-item d-flex justify-content-between align-items-center pe-0 py-0">
                            customer
                            3
                            <button class="btn btn-sm text-info cus_check_btn" data-cus_id="Customer-3">Check</button>
                        </li>
                        <li
                            class="check_customer_name list-group-item d-flex justify-content-between align-items-center pe-0 py-0">
                            customer
                            4
                            <button class="btn btn-sm text-info cus_check_btn" data-cus_id="Customer-4">Check</button>
                        </li>
                        <li
                            class="check_customer_name list-group-item d-flex justify-content-between align-items-center pe-0 py-0">
                            customer
                            5
                            <button class="btn btn-sm text-info cus_check_btn" data-cus_id="Customer-5">Check</button>
                        </li>
                        <li
                            class="check_customer_name list-group-item d-flex justify-content-between align-items-center pe-0 py-0">
                            customer
                            6
                            <button class="btn btn-sm text-info cus_check_btn" data-cus_id="Customer-6">Check</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-10 border-start border-1 border-dark mt-2">
                <div class="d-flex justify-content-between">
                    <div class="col-3">
                        <h5 class="p-2">
                            Sale & Service
                        </h5>
                    </div>
                    <h5 class="p-2 sale_service_header">
                        Customer-1
                    </h5>
                    <div class="row col-3">
                        <label class="form-label col-3 my-auto" for="">Date:</label>
                        <input type="type" class="form-control form-control-sm col" value="<?=date('d-m-y')?>" readonly>
                    </div>
                </div>
                <hr class="mb-0">
                <div>
                    <div class="addStaff row mb-2 border-bottom border-1 border-dark">
                        <div
                            class="col-3 row d-flex align-items-center border-end border-1 border-dark addStaff-wapper">
                            <div class="btn-group btn-group-sm w-100 ">
                                <!-- <input type="text" class="form-control form-control-sm" placeholder="Search Item"> -->
                                <select class="form-select form-select-sm">
                                    <option value="" selected>select staff ...</option>
                                    <option value="">soe soe</option>
                                    <option value="">soe soe</option>
                                    <option value="">soe soe</option>
                                </select>
                                <button class="btn btn-sm btn-secondary">Add</button>
                            </div>
                            <div class="btn-group btn-group-sm">
                                <select name="" id="" class="form-select form-select-sm">
                                    <option value="">Select Source</option>
                                    <option value="">Default</option>
                                    <option value="">Counter</option>
                                </select>
                                <input type="text" class="form-control form-control-sm" placeholder="Search Item">
                                <button class="btn btn-sm btn-secondary">Add</button>
                            </div>
                            <div class="btn-group btn-group-sm">
                                <input type="text" class="form-control form-control-sm" placeholder="Search Service">
                                <button class="btn btn-sm btn-secondary">Add</button>
                            </div>
                        </div>
                        <div class="col-9 row px-0 staff-table-wapper">
                            <table class="table table-bordered text-center" align="center">
                                <thead>
                                    <th>#</th>
                                    <th>Staff Name</th>
                                    <th>Bonus</th>
                                    <th>By name</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" value="Soe Soe"
                                                readonly>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm" placeholder="%">
                                        </td>
                                        <td>
                                            <input type="checkbox" class="form-check mx-auto">
                                        </td>
                                        <td>
                                            <a class="btn btn-sm text-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" value="Soe Soe"
                                                readonly>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm" placeholder="%">
                                        </td>
                                        <td>
                                            <input type="checkbox" class="form-check mx-auto">
                                        </td>
                                        <td>
                                            <a class="btn btn-sm text-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" value="Soe Soe"
                                                readonly>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm" placeholder="%">
                                        </td>
                                        <td>
                                            <input type="checkbox" class="form-check mx-auto">
                                        </td>
                                        <td>
                                            <a class="btn btn-sm text-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row my-3">
                        <!-- <div class="col-2">

                        </div> -->
                        <div class="px-0">
                            <table align="center" class="table table-bordered mx-auto">
                                <thead>
                                    <tr>
                                        <th class="text-dark">No.</th>
                                        <th style="text-align:center;" class="text-dark">Item/Service Name</th>
                                        <th style="text-align:center;" class="text-dark">Quantity</th>
                                        <th style="text-align:center;" class="text-dark">Price</th>
                                        <!-- <th style="text-align:center;" class="text-dark">Source</th> -->
                                        <!-- <th style="text-align:center;">Stock Price</th> -->
                                        <th class="text-dark">Total</th>
                                        <th>
                                            <!-- <a class="btn btn-sm btn-success add_more rounded-circle">
                                            <i class="fa fa-plus"></i>
                                        </a> -->
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="addMoreItem">
                                    <tr>
                                        <td class="text-dark"><b>1</b></td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" readonly>
                                        </td>
                                        <td>
                                            <input name="quantity[]" id="quantity" type="number"
                                                class="form-control form-control-sm quantity" required>
                                        </td>
                                        <td>
                                            <input name="price[]" id="price" type="text"
                                                class="form-control form-control-sm price" readonly>
                                        </td>
                                        <!-- <td>
                                            <input name="" id="" type=""
                                                class="form-control form-control-sm discount">

                                        </td> -->
                                        <td>
                                            <input name="total_amount[]" id="total_amount" type="text"
                                                class="form-control form-control-sm total_amount" readonly>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm text-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="fixed-bottom m-0 w-100" style="height: 140px; background-color:gainsboro;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 my-auto d-flex justify-content-center align-items-center">
                <textarea name="" id="" rows="5" class="form-control" placeholder="Remark"
                    style="resize: none;"></textarea>
            </div>
            <div class="col-10 d-flex justify-content-between align-items-center">
                <div class="row col-6">
                    <div class="col-4">
                        <label class="form-label col my-auto" for="">Total:</label>
                        <input type="type" class="form-control form-control-sm col" readonly>
                    </div>
                    <div class="col-4">
                        <label class="form-label col my-auto" for="">Paid:</label>
                        <input type="type" class="form-control form-control-sm col">
                    </div>
                    <div class="col-4">
                        <label class="form-label col my-auto" for="">Discount:</label>
                        <input type="type" class="form-control form-control-sm col-2">
                    </div>
                </div>
                <div class="col-2 row">
                    <div style="height: 90px; width: 110px; background-color:whitesmoke; cursor: pointer;"
                        class="col d-flex justify-content-center align-items-center border border-1 border-dark me-2">
                        Print
                    </div>
                    <div style="height: 90px; width: 110px; background-color:whitesmoke; cursor: pointer;"
                        class="col d-flex justify-content-center align-items-center border border-1 border-dark me-2">
                        Save
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php require "./partials/footer.php";?>