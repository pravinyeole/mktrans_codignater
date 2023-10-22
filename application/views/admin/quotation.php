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
<div class="col-sm-12">
    <div class="jumbotron text-center">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('img/logo.png')}}" rel="logo" style="width:25%">
            </div>
            <div class="col-sm-6">
                <span><h1 style="color:#ef7f1a;">Quotation</h1></span>
            </div>
        </div> 
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="col-sm-6">
                <span style="text-align:left;"> 
                    <h3><b>From Address :</b></h3>
                    <p>464/B/2 , NEAR ESSAR PETROL PUMP 
                    AMBAD LINK ROAD SATPUR
                    NASHIK,422012
                    <br>
                    Mo.No. 7588554482
                    <br>
                    Email ID : tidke.mayur@gmail.com</p>
                </span>
            </div>
            <div class="col-sm-6">
                <span style="float:right;"> 
                    <b>Date : {{date('d-m-Y')}}</b>
                </span>
            </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                <span style="text-align:left;">    
                    <h3><b>Quotation For :</b></h3>
                    <p>464/B/2 , NEAR ESSAR PETROL PUMP 
                    AMBAD LINK ROAD SATPUR
                    NASHIK,422012
                    <br>
                    Mo.No. 7588554482
                    <br>
                    Email ID : tidke.mayur@gmail.com</p>
                </span>
                </div>
            </div>
            
            <div class="col-sm-12" style="text-align: center;margin: 20px;">
                <span><h3><b>QUOTE SUPPLY OF TRANSPORT SERVICES</b></h3></span>
            </div>
            <div class="col-sm-12" style="text-align: center;">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                    </tr>
                    <tr>
                        <td>LR Charge</td>
                        <td>50</td>
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
</div>
</body>
</html>

