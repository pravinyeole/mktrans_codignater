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
    <!-- <div class="jumbotron text-right">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <img src="<?= site_url('assets/img/logo.png') ?>" rel="logo" style="width:20%;float:left;">
                </div>
                <div class="col-sm-6">
                    <span><h1 style="color:#ef7f1a;float:right;">INVOICE</h1></span>
                </div>
            </div>    
        </div> 
    </div> -->
    <div class="container">
    <div class="row">    
        <div class="col-sm-12" style="text-align: center;">
            <table class="table" style="margin:0px;background-color:#a5a3a38c;">
                <tbody>
                    <tr>
                        <td style="width:20%;float:left;"><img src="assets/logo.png" rel="logo"></td>
                        <td style="width:20%;text-align:center;">
                            <small><b>Shree Swami Samarth</b></small>
                            <h4><b style="color:#ef7f1a;">MK TRANSPORT COMPANY</b></h4>
                            <small style="text-align:center;"><b>Ambad Link Road, Satpur, Nashlk, Maharashtra Mob. No: 7588554482, Email :tidke.mayur@gmail.com </b> </small>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Bill To :</th>
                        <th>Date : <?= $data[0]->date;?></th>
                    </tr>
                    <tr>
                        <td><?= $data[0]->company_name; ?><br>
                        <?= $data[0]->address; ?><br>
                        Mo.No. :<?= $data[0]->mobile; ?><br>
                        GSTIN :<?= $data[0]->gstno; ?>
                    </td>
                        <td><b>INVOICE : <?= $data[0]->mk_invoice_no; ?></b></td>
                    </tr>
                </tbody>
            </tabel>


            <div class="col-sm-12" style="text-align: center;">
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
                        <td colspan="4" style="width:50%;text-align:center;"><img src="assets/sign.png" style="margin-top:40px;"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>

