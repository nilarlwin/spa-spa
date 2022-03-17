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
                <h2 class="py-2 mb-4 d-flex align-items-center">Usage Items</h2>

                <div class="form-group row">
                    <label for="item_code" class="form-label col-sm-2">Items:</label>
                    <select class="form-control col-sm-10 mb-2">
                        <option selected>Select Item</option>
                        <option>Item1</option>
                        <option>Item2</option>
                        <option>Item3</option>
                        <option>Item4</option>
                        <option>Item5</option>
                    </select>
                </div>
                <!-- <div class="form-group row">
                    <label for="name" class="form-label col-sm-2">Name :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="name" />
                </div> -->
                <div class="form-group row">
                    <label for="cost" class="form-label col-sm-2">Quantity :</label>
                    <input class="form-control col-sm-10 mb-2" type="number" id="cost" />
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