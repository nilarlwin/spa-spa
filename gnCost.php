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
                <h2 class="py-2 mb-4 d-flex align-items-center">General Cost</h2>
                <div class="form-group row">
                    <label for="type" class="form-label col-sm-2">Cost Type :</label>
                    <select class="form-control col-sm-10 mb-2" id="type">
                        <option selected>Select Cost Type</option>
                        <option value="">General Cost1</option>
                        <option value="">General Cost2</option>
                        <option value="">General Cost3</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="reason" class="form-label col-sm-2">Reason :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="reason" />
                </div>
                <div class="form-group row">
                    <label for="cost" class="form-label col-sm-2">Cost :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="cost" />
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