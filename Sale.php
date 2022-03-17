<?php require "./partials/heading.php"?>
<div class="page-container bg-light">
    <?php require "./components/slidermenu.php"?>
    <!-- <div class="main-content"> -->
    <?php require "./components/headerArea.php"?>
    <!-- <div class="main-content-inner"> -->
    <!-- <div class="card bg-light"> -->
    <!-- /.card-header -->
    <!-- form start -->

    <div class="card p-0  col-md-10">
        <!-- <div class="card-header"> -->
        <!-- </div> -->
        <div class="card-body bg-light p-0 px-3">
            <h2 class="py-4">Sale</h2>
            <form id="get_order_data">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sale Date</label>
                    <div class="col-sm-10">
                        <input type="text" id="order_date" name="order_date" readonly
                            class="form-control form-control-sm" value="<?php echo date('Y-d-m'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Customer Name*</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-sm">
                            <option selected>Select Customer</option>
                            <option value="">U Mya</option>
                            <option value="">Ma Hla</option>
                            <option value="">U Moe</option>
                            <option value="">Ma Aye</option>
                            <option value="">Daw Win</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Source*</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-sm">
                            <option selected>Select Source</option>
                            <option value="">Counter</option>
                            <option value="">Default</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Remark</label>
                    <div class="col-sm-10">
                        <textarea id="remark" name="phone" class="form-control form-control-sm"
                            placeholder="Enter Remark" required></textarea>
                    </div>
                </div>


                <div class="card  bg-light" style="box-shadow:0 0 5px 0 lightgrey;">
                    <div class="card-body  text-center">
                        <div class="text-center">
                            <h3 class="text-dark">New Sale List</h3>
                        </div>
                        <br>

                        <table align="center" style="width:800px;" class="table table-bordered mx-auto">
                            <thead>
                                <tr>
                                    <th class="text-dark">No.</th>
                                    <th style="text-align:center;" class="text-dark">Item Name</th>
                                    <th style="text-align:center;" class="text-dark">Quantity</th>
                                    <th style="text-align:center;" class="text-dark">Price</th>
                                    <th style="text-align:center;" class="text-dark">Discount</th>
                                    <!-- <th style="text-align:center;">Stock Price</th> -->
                                    <th class="text-dark">Total</th>
                                    <th><a class="btn btn-sm btn-success add_more rounded-circle"><i
                                                class="fa fa-plus"></a></th>
                                </tr>
                            </thead>
                            <tbody class="addMoreItem">
                                <tr>
                                    <td class="text-dark"><b>1</b></td>
                                    <td>
                                        <select name="item_id[]" class="form-control form-control-sm item_id"
                                            id="item_id">
                                            <option selected>Select Item</option>
                                            <option>Item1</option>
                                            <option>Item2</option>
                                            <option>Item3</option>
                                            <option>Item4</option>
                                            <option>Item5</option>
                                        </select>
                                    </td>
                                    <td><input name="quantity[]" id="quantity" type="number"
                                            class="form-control form-control-sm quantity" required></td>
                                    <td><input name="price[]" id="price" type="text"
                                            class="form-control form-control-sm price" readonly></td>
                                    <td><input name="discount[]" id="discount" type="number"
                                            class="form-control form-control-sm discount"></td>
                                    <td><input name="total_amount[]" id="total_amount" type="text"
                                            class="form-control form-control-sm total_amount" readonly></td>
                                    <td><a class="btn btn-sm btn-danger rounded-circle"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--Table Ends-->
                        <!-- <center style="padding:10px;">
                                        <button id="add" style="width:150px;" class="btn btn-success">Add</button>
                                        <button id="remove" style="width:150px;" class="btn btn-danger">Remove</button>
                                    </center> -->
                    </div>
                    <!--Crad Body Ends-->
                </div> <!-- Order List Crad Ends-->

                <p></p>
                <div class="form-group row">
                    <label for="sub_total" class="col-sm-2 col-form-label">Sub Total</label>
                    <div class="col-sm-10">
                        <input type="text" readonly name="sub_total" class="form-control form-control-sm sub_total"
                            id="sub_total" required />
                    </div>
                </div>
                <!-- <div class="form-group row">
                                <label for="gst" class="col-sm-2 col-form-label">Revenue%</label>
                                <div class="col-sm-10">
                                    <input type="text" name="profit" class="form-control form-control-sm" id="profit" required />
                                </div>
                            </div> -->

                <div class="form-group row">
                    <label for="discount" class="col-sm-2 col-form-label">Revenue%</label>
                    <div class="col-sm-10">
                        <input type="text" name="discount" class="form-control form-control-sm" id="discount" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="net_total" class="col-sm-2 col-form-label">Net Total</label>
                    <div class="col-sm-10">
                        <input type="text" readonly name="net_total" class="form-control form-control-sm" id="net_total"
                            required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="paid" class="col-sm-2 col-form-label">Paid</label>
                    <div class="col-sm-10">
                        <input type="text" name="paid" class="form-control form-control-sm" id="paid">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gst" class="col-sm-2 col-form-label">Total Profit</label>
                    <div class="col-sm-10">
                        <input type="text" readonly name="t_profit" class="form-control form-control-sm" id="t_profit"
                            required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="due" class="col-sm-2 col-form-label">Due</label>
                    <div class="col-sm-10">
                        <input type="text" readonly name="due" class="form-control form-control-sm" id="due" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="payment_type" class="col-sm-2 col-form-label">Payment
                        Method</label>
                    <div class="col-sm-10">
                        <select name="payment_type" class="form-control form-control-sm" id="payment_type" required />
                        <option>Cash</option>
                        <option>Bkash</option>
                        <option>Card</option>

                        </select>
                    </div>
                </div>

                <center>
                    <input type="submit" id="order_form" style="width:150px;" class="btn btn-success" value="Submit">
                    <input type="submit" id="print_invoice" style="width:150px;" class="btn btn-success d-none"
                        value="Print Invoice">
                </center>


            </form>

        </div>
    </div>


    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
</div>
<?php require "./partials/footer.php"?>
<script>
// $(document).ready(function(){
//     alert(1);
$('.add_more').on('click', function() {
    //alert(1)
    var item = $('.item_id').html();
    var numberofrow = ($('.addMoreItem tr').length - 0) + 1;
    var tr = '<tr><td class="no">' + numberofrow + '</td>' +
        '<td><select class="form-control form-control-sm item_id" name="item_id[]">' + item +
        '</select></td>' +
        '<td><input type="number" name="quantity[]" class="form-control form-control-sm quantity"></td>' +
        '<td><input type="text" name="price[]" class="form-control form-control-sm price" readonly></td>' +
        '<td><input type="number" name="discount[]" class="form-control form-control-sm discount"></td>' +
        '<td><input type="text" name="total_amount[]" class="form-control form-control-sm total_amount" readonly></td>' +
        '<td><a class="btn btn-sm btn-danger delete"><i class="fa fa-times-circle"></a></td></tr>';
    $('.addMoreItem').append(tr);
});

//delete a row
$('.addMoreItem').delegate('.delete', 'click', function() {
    $(this).parent().parent().remove();
})

function TotalAmount() {
    var total = 0;
    $('.total_amount').each(function(i, e) {
        var amount = $(this).val() - 0;
        total += amount;
    });
    $('.sub_total').html('total');
}

$('.addMoreItem').delegate('.item_id', 'change', function() {
    var tr = $(this).parent().parent();
    var price = tr.find('.item_id option:selected').attr('data-price');
    tr.find('.price').val(price);
    var qty = tr.find('.quantity').val() - 0;
    var disc = tr.find('.discount').val() - 0;
    var price = tr.find('.price').val() - 0;
    var total_amount = (qty * price) - ((qty * price * disc) / 100);
    tr.find('.total_amount').val('total_amount');
})
</script>