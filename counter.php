<?php require "./partials/heading.php"?>
<style>
 .resultContainer {
  background-color: #fff;
  position: absolute;
  z-index: 100;
  top:150px;
  right:40px;
  /* transform: translate-Y(-50%); */

}
.productItemContainer {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding: 0 10px;
  height: 50px;
  border-bottom: 1px solid lightgray;
}
.productName{
  font-size: 14px;
  width: 80%;
}
.productImage{
  height:80%;
}
</style>
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
                <h2 class="py-2 mb-4 d-flex align-items-center">Add Counter</h2>

                <div class="form-group row">
                    <label for="Name" class="form-label col-sm-2">Item Name :</label>
                    <input class="form-control col-sm-10 mb-2 autoCompleteInput" type="text" id="Name" placeholder="search..."/>
                    <div class="resultContainer"></div>
                </div>
                <div class="form-group row">
                    <label for="Price" class="form-label col-sm-2">Price :</label>
                    <input class="form-control col-sm-10 mb-2" type="text" id="Price" />
                </div>
                <div class="form-group row">
                    <label for="quantity" class="form-label col-sm-2">Quantity :</label>
                    <input class="form-control col-sm-10 mb-2" type="number" id="quantity" />
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