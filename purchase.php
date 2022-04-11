<?php require "./partials/heading.php" ?>
<div class="page-container">
    <?php require "./components/slidermenu.php" ?>
    <!-- <div class="main-content"> -->
    <?php require "./components/headerArea.php" ?>
    <!-- <div class="main-content-inner"> -->
    <div class="card bg-light">
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body col-md-10">
                <h2 class="py-2 mb-4 d-flex align-items-center">Purchase</h2>

                <div class="form-group row">
                    <label for="purchase_item" class="form-label col-sm-2">Purchase Item :</label>
                    <!-- <input class="form-control col-sm-10 mb-2" type="text" id="purchase_item" /> -->
                    <select name="" id="" class="form-control col-sm-10 mb-2">
                        <option value="" class="">Select Item</option>
                        <option value="" class="">item1</option>
                        <option value="" class="">item2</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="items_type" class="form-label col-sm-2">Purchase Date :</label>
                    <input class="form-control col-sm-10 mb-2" type="date" id="items_type" />
                </div>
                <!-- <div class="form-group row">
                    <label for="items code" class="form-label col-sm-2">Source :</label>
                    <select name="" id="" class="form-control col-sm-10 mb-2">
                        <option value="" selected>Select Source</option>
                        <option value="" class="">Counter</option>
                        <option value="" class="">Default</option>
                    </select>
                </div> -->
                <div class="form-group row">
                    <label for="quantity" class="form-label col-sm-2">Quantity :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="quantity" />
                </div>
                <div class="form-group row">
                    <label for="cost" class="form-label col-sm-2">Purchase Price :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="cost" />
                </div>
                <div class="form-group row">
                    <label for="remark" class="form-label col-sm-2">Remark:</label>
                    <textarea style="resize: none; padding-top: 35px; height:200px;" class="form-control col-sm-10 mb-2"
                        type="tel" id="remark"></textarea>
                </div>
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
<?php require "./partials/footer.php" ?>