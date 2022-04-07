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
<div class="container-fluid main-area">
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
                            <div class="card-body">
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
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>item</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <footer class="fixed-bottom m-0 w-100" style="height: 140px; background-color:gainsboro;">
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
</footer> -->
<?php require "./partials/footer.php"; ?>