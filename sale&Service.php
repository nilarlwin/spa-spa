<?php require "./partials/heading.php"; ?>
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
<div class="container-fluid" style="background-color:silver">
    <div class="mt-2 me-2">
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
                    <ul class="list-group" style="height: 450px;
    overflow-y: auto;">
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
            <div class="col-10">
                <div class="p-2">
                    <h5>
                        Voucher Id - 1013102203
                    </h5>
                </div>
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-3">
                        <h6>Customer name</h6>
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control form-control-sm col-3">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-5">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-start">
                                <div class="form-check me-2">
                                    <input class="form-check-input" type="radio" name="item_or_sevice" id="item"
                                        value="item">
                                    <label for="item" class="form-check-label">Item</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="item_or_sevice" id="service"
                                        value="service">
                                    <label for="service" class="form-check-label">Service</label>
                                </div>
                            </div>
                            <div class="card-body" style="height: 450px;
    overflow-y: auto;">
                                <!-- <select class="form-select">
                                    <option value="">select here ..</option>
                                </select> -->
                                <div class="item-box row d-none">
                                    <div class="col-4 item-btn-wapper mb-2">
                                        <button class="item-button btn btn-secondary">
                                            item
                                        </button>
                                    </div>
                                    <div class="col-4 item-btn-wapper mb-2">
                                        <button class="item-button btn btn-secondary">
                                            item
                                        </button>
                                    </div>
                                    <div class="col-4 item-btn-wapper mb-2">
                                        <button class="item-button btn btn-secondary">
                                            item
                                        </button>
                                    </div>
                                    <div class="col-4 item-btn-wapper mb-2">
                                        <button class="item-button btn btn-secondary">
                                            item
                                        </button>
                                    </div>
                                    <div class="col-4 item-btn-wapper mb-2">
                                        <button class="item-button btn btn-secondary">
                                            item
                                        </button>
                                    </div>
                                    <div class="col-4 item-btn-wapper mb-2">
                                        <button class="item-button btn btn-secondary">
                                            item
                                        </button>
                                    </div>
                                </div>
                                <div class="service-box row d-none">
                                    <div class="col-4 service-btn-wapper mb-2">
                                        <button class="service-button btn btn-secondary">
                                            service
                                        </button>
                                    </div>
                                    <div class="col-4 service-btn-wapper mb-2">
                                        <button class="service-button btn btn-secondary">
                                            service
                                        </button>
                                    </div>
                                    <div class="col-4 service-btn-wapper mb-2">
                                        <button class="service-button btn btn-secondary">
                                            service
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card mb-2">
                            <div class="card-body s_item_card">
                                <table align="center" class="table table-bordered mx-auto text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-dark">No.</th>
                                            <th class="text-dark">Item Name</th>
                                            <th class="text-dark">Quantity</th>
                                            <th class="text-dark">Price</th>
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
                                                <input name="" id="" type="number" class="form-control form-control-sm"
                                                    required>
                                            </td>
                                            <td>
                                                <input name="" id="" type="text" class="form-control form-control-sm"
                                                    readonly>
                                            </td>
                                            <!-- <td>
                                            <input name="" id="" type=""
                                                class="form-control form-control-sm discount">

                                            </td> -->
                                            <td>
                                                <input name="" id="" type="text" class="form-control form-control-sm "
                                                    readonly>
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
                        <div class="card mb-2">
                            <div class="card-body s_service_card">
                                <table align="center" class="table table-bordered mx-auto text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-dark">No.</th>
                                            <th class="text-dark">Service</th>
                                            <th class="text-dark">Qty</th>
                                            <th class="text-dark">Unit Price</th>
                                            <!-- <th style="text-align:center;" class="text-dark">Source</th> -->
                                            <!-- <th style="text-align:center;">Stock Price</th> -->
                                            <th class="text-dark">Staff</th>
                                            <th class="text-dark">Amount</th>
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
                                                <input name="" id="" type="number" class="form-control form-control-sm"
                                                    required>
                                            </td>
                                            <td>
                                                <input name="" id="" type="text" class="form-control form-control-sm"
                                                    readonly>
                                            </td>
                                            <!-- <td>
                                            <input name="" id="" type=""
                                                class="form-control form-control-sm discount">

                                            </td> -->
                                            <td>
                                                <input type="button" name="" id="" type="text"
                                                    class="btn btn-info btn-sm form-control form-control-sm addStaff"
                                                    value="Stuff">
                                            </td>
                                            <td>
                                                <input name="" id="" type="text" class="form-control form-control-sm"
                                                    readonly>
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
                        <div class="card s_invoice mb-2">
                            <div class="card-body row">
                                <div class="col-5">
                                    <label for="remark">Remark</label>
                                    <textarea name="" id="remark" cols="30" rows="10" style="resize: none;"></textarea>
                                </div>
                                <div class="col-7 row">
                                    <div class="col-12 mt-auto">
                                        <div class="form-group w-100 mb-2 d-flex align-items-center">
                                            <label for="" class="form-label me-3">Total </label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group w-100 mb-2 d-flex align-items-center">
                                            <label for="" class="form-label me-3">Paid </label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group w-100 mb-2 d-flex align-items-center">
                                            <label for="" class="form-label me-3">Discount </label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group d-flex justify-content-between row">
                                            <button class="btn btn-secondary col-4" style="height: 80px;">print</button>
                                            <button class="btn btn-secondary col-7" style="height: 80px;">print</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- suffmodal -->
<!-- Modal -->
<div class="modal fade" id="suffAddModal" tabindex="-1" role="dialog" aria-labelledby="suffAddModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="suffAddModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <select name="" id="" class="form-select form-select-sm">
                        <option value="">soe soe</option>
                    </select>
                    <input type="button" class="btn btn-sm btn-info" value="add">
                </div>
                <table class="table text-center">
                    <thead>
                        <!-- <th> -->
                        <td>#</td>
                        <td>name</td>
                        <!-- <td>name</td> -->
                        <!-- </th> -->
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>soe soe</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- suffmodal -->
<?php require "./partials/footer.php"; ?>