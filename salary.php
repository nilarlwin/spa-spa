<?php require "./partials/heading.php"?>
<div class="page-container">
    <?php require "./components/slidermenu.php"?>
    <!-- <div class="main-content"> -->
    <?php require "./components/headerArea.php"?>
    <!-- <div class="main-content-inner"> -->
    <div class="card bg-light">
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body col-md-10">
                <h2 class="py-2 mb-4 d-flex align-items-center">Salary</h2>

                <div class="form-group row">
                    <label for="staff_id" class="form-label col-sm-2">Staff Name :</label>
                    <select name="" id="" class="form-control col-sm-10 mb-2">
                        <option value="" selected>Select Name</option>
                        <option value="">Soe Soe</option>
                        <option value="">Moe Moe</option>
                        <option value="">Htwe Htwe</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="ammount" class="form-label col-sm-2">Amount :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="ammount"/>
                </div>
                <div class="form-group row">
                    <label for="service" class="form-label col-sm-2">Service% :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="service" readonly/>
                </div>
                <div class="form-group row">
                    <label for="total" class="form-label col-sm-2">Total Amount:</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="total" readonly/>
                </div>
                <div class="form-group row">
                    <label for="date" class="form-label col-sm-2">Date :</label>
                    <input class="form-control col-sm-10 mb-2" type="date" id="date" />
                </div>
                <div class="form-group row">
                    <label for="remark" class="form-label col-sm-2">Remark:</label>
                    <textarea style="resize: none; padding-top: 35px; height:200px;" class="form-control col-sm-10 mb-2"
                        type="tel" id="remark"></textarea>
                </div>

                <!-- /.card-body -->
                <div class="mt-3 form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10 ml-0">
                        <button type="submit" class="btn btn-lg btn-default mr-3">Cancel</button>
                        <button type="submit" class="btn btn-lg text btn-info "> Add <i
                                class="ml-1 fa fa-plus"></i></button>
                    </div>
                </div>
                <!-- /.card-footer -->
            </div>
        </form>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
<?php require "./partials/footer.php"?>