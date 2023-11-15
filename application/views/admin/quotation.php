<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron text-right">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <img src="<?= site_url('assets/img/logo.png') ?>" rel="logo" style="width:20%;float:left;">
                </div>
                <div class="col-sm-6">
                    <span><h1 style="color:#ef7f1a;float:right;">Quotation</h1></span>
                </div>
            </div>    
        </div> 
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6 text-right">
                    <span style="float:right;"> 
                        <b>Date : <?= $data[0]->date; ?></b>
                    </span>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <span style="text-align:left;">    
                        <h3><b>Quotation For :</b></h3>
                        <p><b><?= $data[0]->company_name; ?></b></p>
                        <p><?= $data[0]->address; ?>
                        </p>
                        Mo.No. <?= $data[0]->mobile; ?>
                        
                    </span>
                </div>
            </div>
            
            <div class="col-sm-12" style="text-align: center;margin: 20px;color:#ef7f1a;">
                <span><h3><b>QUOTE SUPPLY OF TRANSPORT SERVICES</b></h3></span>
            </div>
            <div class="col-sm-12" style="text-align: center;">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Vehicle Type</th>
                        <th>Description</th>
                        <th>Loading</th>
                        <th>Unloading</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($data1 as $key => $value)
                        {?>
                            <tr>
                                <th><?= $value->vehicle_type; ?> (<?= $value->material_weight; ?> Ton)</th>
                                <th><?= $value->root1; ?> To <?= $value->root2; ?></th>
                                <th><?= $value->loading; ?></th>
                                <th><?= $value->unloading; ?></th>
                                <th><?= $value->amount; ?></th>
                                
                            </tr>
                        <?php }?>
                        
                    <tr>
                        <td colspan="4" style="text-align: right;"><b>LR Charge</b></td>
                        <td style="text-align: left;"><b>50</b></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12" style="text-align: left;">
                If you have any questions concerning this quotation, contact on <b>7588554482</b>
            </div>
            <div class="col-sm-12" style="text-align: center;">
                <b><h3>THANK YOU FOR YOUR BUSINESS!</h3></b>
            </div>
        </div>
    </div>

    <div class="jumbotron text-left" style="margin-top:5%;">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <h4><b>Address :</b></h4>
                    <span>464/B/2 , NEAR ESSAR PETROL PUMP<br> 
                    AMBAD LINK ROAD SATPUR<br>
                    NASHIK,422012
                    <br>
                    Mo.No. <b>7588554482</b>
                    <br>
                    Email ID : <b>tidke.mayur@gmail.com</b></span>
                </div>
            </div>    
        </div> 
    </div>
</body>
</html>

