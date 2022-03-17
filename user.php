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
                <h2 class="py-2 mb-4 d-flex align-items-center">Add User</h2>

                <div class="form-group row">
                    <label for="Name" class="form-label col-sm-2">User Name :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="Name" />
                </div>
                <div class="form-group row">
                    <label for="email" class="form-label col-sm-2">Email :</label>
                    <input class="form-control col-sm-10 mb-2" type="email" id="email" />
                </div>
                <div class="form-group row">
                    <label for="password" class="form-label col-sm-2">Password :</label>
                    <input class="form-control col-sm-10 mb-2" type="password" id="password" />
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