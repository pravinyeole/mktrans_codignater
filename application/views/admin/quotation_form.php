<?php include("head.php"); ?> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<div class="container-fluid py-4">
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quotation Form </div>
                <div class="card-body">
                        <form method="post" action="<?= site_url('index.php/Admin/submit_quotation_form') ?>" style="margin:20px;">
                            <div class="row">
                                <div class="col">
                                    <label for="companyname">Quotation Date</label>
                                    <div class="input-group date datepicker" data-provide="datepicker">
                                        <input type="text" class="form-control" name="date" placeholder="Please Select Date" required>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="companyname">Company Name</label>
                                    <input type="text" class="form-control" name="companyname" placeholder="Please Enter Company Name" required>
                                </div>
                                <div class="col">
                                    <label for="mobilenumber">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobilenumber" placeholder="Please Enter Mobile Number" required>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlTextarea1">Address  </label>
                                    <textarea class="form-control" name="address" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="route1">Route From</label>
                                    <input type="text" class="form-control" name="route1[]" placeholder="Please Enter Route From" required>
                                </div>

                                <div class="col">
                                    <label for="route2">Route To</label>
                                    <input type="text" class="form-control" name="route2[]" placeholder="Please Enter Route To" required>
                                </div>

                                <div class="col">
                                    <label for="exampleFormControlSelect2">Vehicle Type</label>
                                    <select class="form-control" name="vehical_type[]">
                                        <?php foreach($data as $key=>$value)
                                        {
                                        ?>
                                            <option value="<?= $value->id; ?>"><?= $value->name; ?> (<?= $value->material_weight; ?> Ton)</option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="loading">Loading Point</label>
                                    <input type="text" class="form-control" name="loading[]" placeholder="Please Enter Loading Point" required>
                                </div>

                                <div class="col">
                                    <label for="unloading">Unloading Point</label>
                                    <input type="text" class="form-control" name="unloading[]" placeholder="Please Enter Material Weight" required>
                                </div>
                                 
                                <div class="col">
                                    <label for="unloading">Amount</label>
                                    <input type="text" class="form-control" name="amount[]" placeholder="Please Enter Material Weight" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="route1">Route From</label>
                                    <input type="text" class="form-control" name="route1[]" placeholder="Please Enter Route From">
                                </div>

                                <div class="col">
                                    <label for="route2">Route To</label>
                                    <input type="text" class="form-control" name="route2[]" placeholder="Please Enter Route To">
                                </div>

                                <div class="col">
                                    <label for="exampleFormControlSelect2">Vehicle Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="vehical_type[]">
                                        <?php foreach($data as $key=>$value)
                                        {
                                        ?>
                                            <option value="<?= $value->id; ?>"><?= $value->name; ?> (<?= $value->material_weight; ?> Ton)</option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="loading">Loading Point</label>
                                    <input type="text" class="form-control" name="loading[]" placeholder="Please Enter Loading Point">
                                </div>

                                <div class="col">
                                    <label for="unloading">Unloading Point</label>
                                    <input type="text" class="form-control" name="unloading[]" placeholder="Please Enter Material Weight">
                                </div>
                                <div class="col">
                                    <label for="unloading">Amount</label>
                                    <input type="text" class="form-control" name="amount[]" placeholder="Please Enter Material Weight">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="route1">Route From</label>
                                    <input type="text" class="form-control" name="route1[]" placeholder="Please Enter Route From">
                                </div>

                                <div class="col">
                                    <label for="route2">Route To</label>
                                    <input type="text" class="form-control" name="route2[]" placeholder="Please Enter Route To">
                                </div>

                                <div class="col">
                                    <label for="exampleFormControlSelect2">Vehicle Type</label>
                                    <select class="form-control" name="vehical_type[]">
                                        <?php foreach($data as $key=>$value)
                                        {
                                        ?>
                                            <option value="<?= $value->id; ?>"><?= $value->name; ?> (<?= $value->material_weight; ?> Ton)</option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="loading">Loading Point</label>
                                    <input type="text" class="form-control" name="loading[]" placeholder="Please Enter Loading Point">
                                </div>

                                <div class="col">
                                    <label for="unloading">Unloading Point</label>
                                    <input type="text" class="form-control" name="unloading[]" placeholder="Please Enter Material Weight">
                                </div>
                                <div class="col">
                                    <label for="unloading">Amount</label>
                                    <input type="text" class="form-control" name="amount[]" placeholder="Please Enter Material Weight">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="route1">Route From</label>
                                    <input type="text" class="form-control" name="route1[]" placeholder="Please Enter Route From">
                                </div>

                                <div class="col">
                                    <label for="route2">Route To</label>
                                    <input type="text" class="form-control" name="route2[]" placeholder="Please Enter Route To">
                                </div>

                                <div class="col">
                                    <label for="exampleFormControlSelect2">Vehicle Type</label>
                                    <select class="form-control" name="vehical_type[]">
                                        <?php foreach($data as $key=>$value)
                                        {
                                        ?>
                                            <option value="<?= $value->id; ?>"><?= $value->name; ?> (<?= $value->material_weight; ?> Ton)</option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="loading">Loading Point</label>
                                    <input type="text" class="form-control" name="loading[]" placeholder="Please Enter Loading Point">
                                </div>

                                <div class="col">
                                    <label for="unloading">Unloading Point</label>
                                    <input type="text" class="form-control" name="unloading[]" placeholder="Please Enter Material Weight">
                                </div>
                                <div class="col">
                                    <label for="unloading">Amount</label>
                                    <input type="text" class="form-control" name="amount[]" placeholder="Please Enter Material Weight">
                                </div>
                            </div>
                            <div style="float:right;margin:5px;">
                                <input type="submit" class="btn btn-primary">
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