<?php include("head.php"); ?> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<div class="container-fluid py-4">
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">LR Form </div>
                <div class="card-body">
                        <form method="post" action="<?= site_url('index.php/Admin/submit_lr_form') ?>" style="margin:20px;">
                            <div class="row">
                                <div class="col">
                                    <label for="companyname">Invoice No.</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="invoice_no" placeholder="Please Enter Invoice no" autocomplete="off" required>
                                        
                                </div>
                                <div class="col">
                                    <label for="companyname">Invoice Date</label><spam class="imp">*</span>
                                    <div class="input-group date datepicker" data-provide="datepicker">
                                        <input type="text" class="form-control" name="invoice_date" placeholder="Please Select Date" autocomplete="off" required>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="companyname">E Way Bill No.</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="bill_no" placeholder="Please Enter Bill No." autocomplete="off" required>    
                                </div>

                                <div class="col">
                                    <label for="companyname">Lorry Receipt No.</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="lorry_no" placeholder="Please Enter Receipt No." autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="companyname">Lorry Receipt Date</label><spam class="imp">*</span>
                                    <div class="input-group date datepicker" data-provide="datepicker">
                                        <input type="text" class="form-control" name="lorry_date" placeholder="Please Select Date" autocomplete="off" required>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="companyname">Vehicle No.</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="vehicle_no" placeholder="Please Enter Vehicle Number" autocomplete="off" required>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="companyname">Consignor Name</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="Consignorname" placeholder="Please Enter Consignor Name" autocomplete="off" required>
                                </div>

                                <div class="col">
                                    <label for="exampleFormControlTextarea1">Consignor Address  </label><spam class="imp">*</span>
                                    <textarea class="form-control" name="Consignor_address" rows="1" Placeholder="Please Enter Address"></textarea>
                                </div>
                                <div class="col">
                                    <label for="mobilenumber">Consignor Contact Number</label>
                                    <input type="text" class="form-control" name="Consignor_mobilenumber" placeholder="Please Enter Mobile Number" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="mobilenumber">Consignor Gst Number</label>
                                    <input type="text" class="form-control" name="Consignor_gst" placeholder="Please Enter Gst Number" autocomplete="off">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="companyname">Consignee Name</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="Consigneename" placeholder="Please Enter Consignee Name" autocomplete="off" required>
                                </div>

                                <div class="col">
                                    <label for="exampleFormControlTextarea1">Consignee Address  </label><spam class="imp">*</span>
                                    <textarea class="form-control" name="consignee_address" rows="1" Placeholder="Please Enter Address"></textarea>
                                </div>
                                <div class="col">
                                    <label for="mobilenumber">Consignee Contact Number</label>
                                    <input type="text" class="form-control" name="Consigneemobilenumber" placeholder="Please Enter Mobile Number" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="mobilenumber">Consignee Gst Number</label>
                                    <input type="text" class="form-control" name="Consignee_gst" placeholder="Please Enter Mobile Number" autocomplete="off">
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col">
                                    <label for="route1">Loading Or Unloading Charge</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="load_charge" placeholder="Please Enter Loading Charge" value="0" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="route1">Other Charge</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="other_charge" placeholder="Please Enter Other Charge" value="0" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="route1">Bilty Charge</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="bilti_charge" placeholder="Please Enter Bilty Charge" value="0" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="route1">Advance Amount</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="advance_amount" placeholder="Please Enter Advance Amount" value="0" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="route1">Balance Amount</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="balance_amount" placeholder="Please Enter Balance Amount" value="0" autocomplete="off" required>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="route1">Insurance Company Name</label>
                                    <input type="text" class="form-control" name="insurance_name" placeholder="Please Enter Insurance Company Name" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="route1">Policy Number</label>
                                    <input type="text" class="form-control" name="insurance_no" placeholder="Please Enter Insurance Policy Number" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="route1">Insurance Amount</label>
                                    <input type="text" class="form-control" name="insurance_amount" placeholder="Please Enter Insurance Amount" value="0" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="companyname">Insurance Date</label>
                                    <div class="input-group date datepicker" data-provide="datepicker">
                                        <input type="text" class="form-control" name="insurance_date" placeholder="Please Select Date" autocomplete="off">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="route1">Route From</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="route1" placeholder="Please Enter Route From" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="route2">Route To</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="route2" placeholder="Please Enter Route To" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="route1">Jurisdiction Place</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="jurisdiction_place" placeholder="Please Enter Jurisdiction Place" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="route1">Freight Amount</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="freight_amount" placeholder="Please Enter Freight Amount" value="0" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="unloading">Material Type</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="material_type[]" placeholder="Please Enter Material Type" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="unloading">HSN Code</label>
                                    <input type="text" class="form-control" name="hsn[]" placeholder="Please Enter Hsn Code" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlSelect2">Weight/Quantity</label><spam class="imp">*</span>
                                    <input type="text" class="form-control" name="weight[]" placeholder="Please Enter Weight" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label for="unloading">Rate/Ton</label>
                                    <input type="text" class="form-control" name="rate[]" placeholder="Please Enter Rate" autocomplete="off">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="unloading">Material Type</label>
                                    <input type="text" class="form-control" name="material_type[]" placeholder="Please Enter Material Type" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="unloading">HSN Code</label>
                                    <input type="text" class="form-control" name="hsn[]" placeholder="Please Enter Hsn Code" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlSelect2">Weight/Quantity</label>
                                    <input type="text" class="form-control" name="weight[]" placeholder="Please Enter Weight" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="unloading">Rate/Ton</label>
                                    <input type="text" class="form-control" name="rate[]" placeholder="Please Enter Rate" autocomplete="off">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="unloading">Material Type</label>
                                    <input type="text" class="form-control" name="material_type[]" placeholder="Please Enter Material Type" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="unloading">HSN Code</label>
                                    <input type="text" class="form-control" name="hsn[]" placeholder="Please Enter Hsn Code" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlSelect2">Weight/Quantity</label>
                                    <input type="text" class="form-control" name="weight[]" placeholder="Please Enter Weight" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="unloading">Rate/Ton</label>
                                    <input type="text" class="form-control" name="rate[]" placeholder="Please Enter Rate" autocomplete="off">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="unloading">Material Type</label>
                                    <input type="text" class="form-control" name="material_type[]" placeholder="Please Enter Material Type" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="unloading">HSN Code</label>
                                    <input type="text" class="form-control" name="hsn[]" placeholder="Please Enter Hsn Code" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlSelect2">Weight/Quantity</label>
                                    <input type="text" class="form-control" name="weight[]" placeholder="Please Enter Weight" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="unloading">Rate/Ton</label>
                                    <input type="text" class="form-control" name="rate[]" placeholder="Please Enter Rate" autocomplete="off">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input type="submit" class="btn btn-primary" style="margin-top:10px;float:right;">    
                                    <input type="reset" class="btn btn-info" value="Reset" style="margin-top:10px;float:right;">
                                    
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