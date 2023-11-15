<?php include("head.php"); ?> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<div class="container-fluid py-4">
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Invoice Form </div>
                <div class="card-body">
                        <form method="post" action="<?= site_url('index.php/Admin/submit_invoice_form') ?>" style="margin:20px;">
                            <div class="row">
                                <div class="col">
                                    <label for="companyname">Invoice Date</label>
                                    <div class="input-group date datepicker" data-provide="datepicker">
                                        <input type="text" class="form-control" name="date" placeholder="Please Select Date" autocomplete="off" required>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="companyname">Company Name</label>
                                    <input type="text" class="form-control" name="companyname" placeholder="Please Enter Company Name" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="mobilenumber">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobilenumber" placeholder="Please Enter Mobile Number" autocomplete="off" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleFormControlTextarea1">Address  </label>
                                    <textarea class="form-control" name="address" rows="2"></textarea>
                                </div>
                                <div class="col">
                                    <label for="loading">Consignor Name</label>
                                    <input type="text" class="form-control" name="consignor" placeholder="Please Enter Consignor Name" autocomplete="off" required>
                                </div>

                                <div class="col">
                                    <label for="unloading">Consignee Name</label>
                                    <input type="text" class="form-control" name="consignee" placeholder="Please Enter Consignee Name" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="unloading">Invoice No.</label>
                                    <input type="text" class="form-control" name="invoice_no" placeholder="Please Enter Invoice Number" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="loading">Bilty No.</label>
                                    <input type="text" class="form-control" name="bilty_no" placeholder="Please Enter Bilty Number" autocomplete="off">
                                </div>

                                <div class="col">
                                    <label for="unloading">Vehicle No.</label>
                                    <input type="text" class="form-control" name="vehicle_no" placeholder="Please Enter Vehicle Number" autocomplete="off">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="unloading">Material Type</label>
                                    <input type="text" class="form-control" name="material_type" placeholder="Please Enter Material Type" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="route1">Route From</label>
                                    <input type="text" class="form-control" name="route1" placeholder="Please Enter Route From" autocomplete="off" required>
                                </div>

                                <div class="col">
                                    <label for="route2">Route To</label>
                                    <input type="text" class="form-control" name="route2" placeholder="Please Enter Route To" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleFormControlSelect2">Vehicle Type</label>
                                    <select class="form-control" name="vehical_type">
                                        <?php foreach($data as $key=>$value)
                                        {
                                        ?>
                                            <option value="<?= $value->id; ?>"><?= $value->name; ?> (<?= $value->material_weight; ?> Ton)</option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="route1">Amount</label>
                                    <input type="text" class="form-control" name="amount" placeholder="Please Enter Amount" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="route1">Gst No.</label>
                                    <input type="text" class="form-control" name="gstno" placeholder="Please Enter GST Number" autocomplete="off" required>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="route1">LR Charge</label>
                                    <input type="text" class="form-control" name="lr_charge" placeholder="Please Enter LR Charge" value="50" autocomplete="off" required>
                                </div>
                                <div class="col-md-4" style="float:right;">
                                    <input type="reset" class="btn btn-info" value="Reset" style="margin-top:8%;">
                                    <input type="submit" class="btn btn-primary" style="margin-top:8%;">
                                </div>
                            </div>
                            


                        </form>
                </div>      
            </div>
        </div>
    </div>
</div>
</div>
<script>
$('.datepicker').datepicker({
    todayBtn: "linked",
    language: "it",
    autoclose: true,
    todayHighlight: true,
    format: 'dd/mm/yyyy'    
});
</script>
<?php include("footer.php"); ?>