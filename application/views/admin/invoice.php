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
                    <span><h1 style="color:#ef7f1a;float:right;">INVOICE</h1></span>
                    <span><label style="color:black;float:right;">Date : <?= $data[0]->date;?> </label></span>
                </div>
            </div>    
        </div> 
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-3" style="float:right;text-align:right;">
                <label>INVOICE NUMBER </label><br>
                <label><?= $data[0]->id; ?></label> 
            </div>
        </div>    
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-3" class="text-left " style="word-wrap: break-word;width:170px;">
                <h4><b>Bill To :</b></h4>
                <p><b><?= $data[0]->company_name; ?></b></p>
                <p><?= $data[0]->address; ?></p>
                Mo.No. :<?= $data[0]->mobile; ?><br>
                GSTIN :<?= $data[0]->gstno; ?>
            </div>
        </div>    
    </div>


    <div class="container">
        <div class="row">    
            <div class="col-sm-12" style="text-align: center; margin-top:5%;">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Consignor</th>
                        <th>Consignee</th>
                        <th>Invoice No.</th>
                        <th>Bilty No.</th>
                        <th>Vehicle No.</th>
                        <th>Route</th>
                        <th>Vehicle Type</th>
                        <th>Material Type</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $data[0]->consignor; ?></td>
                            <td><?= $data[0]->consignee; ?></td>
                            <td><?= $data[0]->invoice_no; ?></td>
                            <td><?= $data[0]->bilty_no; ?></td>
                            <td><?= $data[0]->vehicle_no; ?></td>
                            <td><?= $data[0]->route1; ?> TO <?= $data[0]->route2; ?></td>
                            <td><?= $data[0]->name; ?>(<?= $data[0]->material_weight; ?>)</td>
                            <td><?= $data[0]->material_type; ?></td>
                            <td><?= $data[0]->amount; ?></td>
                        </tr>
                    <tr>
                        <td colspan="8" style="text-align: right;"><b>LR Charge</b></td>
                        <td style="text-align: left;"><b><?= $data[0]->lr_charge; ?></b></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="7"><b>Thank you for your business!</b></td>
                        <td  style="text-align: right;"><b>Total (Rs)</b></td>
                        <td style="text-align: left;"><b><?= $data[0]->amount + $data[0]->lr_charge; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="5"><b>Bank Details :</b><br>BANK OF BARODA<br>Pimpalgao Bahula Branch<br><b>A/C NO.</b> 11360200000774 <br>
                                    <b>IFSC CODE :</b> BARB0PIMPAL <br>
                                    <b>PAN No.:</b> ASMPT1360J <br>
                                    <b>GSTIN NO.:</b> 27ASMPT1360J1ZB<br></td>
                        <td colspan="4" style="width:50%;"><img src="assets/sign.png" /></td>
                    </tr>
                    </tbody>
                </table>
                <div class="col-sm-12">
                    <div class="col-sm-3" style="text-align:left;">

                    </div>
                    <div class="col-sm-3" style="text-align:right;">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="col-sm-12" style="text-align:left;">
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

        
    </body>
</html>

