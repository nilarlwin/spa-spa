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
                <h2 class="py-2 mb-4 d-flex align-items-center">Service Schedule</h2>
                <div class="form-group row">
                    <label for="C_name" class="form-label col-sm-2">Customer Name :</label>
                    <div class="input-group col-md-10 mb-2 px-0">
                        <select class="form-control p-0 h-100" name="" id="C_name">
                            <option value="">name...</option>
                        </select>
                        <button class="btn btn-info">Add</button>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Name" class="form-label col-sm-2">Service Name :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="Name" />
                </div>
                <div class="form-group row">
                    <label for="Price" class="form-label col-sm-2">Price :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="Price" />
                </div>
                <div class="form-group row">
                    <label for="Staff_name" class="form-label col-sm-2">Staff Name :</label>
                    <!-- <input class="form-control col-sm-10 mb-2" type="text" id="phone" /> -->
                    <div class="input-group col-sm-10 mb-2 px-0">
                        <select name="" class="form-control p-0 h-100" id="Staff_name">
                            <option value="" class="text-light" selected>Select...</option>
                        </select>
                        <button class="btn">Select</button>
                    </div>
                    <!-- <link rel="stylesheet" href="assets/css/bootstrap-3.css"> -->
                    <input readonly type="text" class="form-control col-sm-10 ml-auto">
                </div>
                <div class="form-group row">
                    <label for="Bonus" class="form-label col-sm-2">Bonus % :</label>
                    <input class="form-control col-sm-10 mb-2" type="index" id="Bonus" />
                </div>
                <div class="form-group row">
                    <label for="By_name" class="form-label col-sm-2">By Name/Not :</label>
                    <select name="" class="form-control col-sm-10 mb-2" id="By_name">
                        <option value="" class="text-light" selected>Select...</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="remark" class="form-label col-sm-2">Remark</label>
                    <textarea style="resize: none; padding-top: 35px; height:200px;" class="form-control col-sm-10 mb-2"
                        type="tel" id="remark"></textarea>
                </div>

                <!-- /.card-body -->
                <div class="mt-3 form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10 ml-0">
                        <button type="submit" class="btn btn-lg btn-default mr-3">Cancel</button>
                        <button type="submit" class="btn btn-lg text btn-info "> <i class="mr-1 fa fa-plus"></i> Add
                        </button>
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