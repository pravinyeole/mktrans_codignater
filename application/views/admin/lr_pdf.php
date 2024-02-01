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
<div class="container">
    <div class="row">    
        <div class="col-sm-12" style="text-align: center;">
            <table class="table" style="margin:0px;background-color:#a5a3a38c;">
                <tbody>
                    <tr style="background-color:#a5a3a38c;">
                        <td style="width:20%;float:left;background-color:#a5a3a38c;"><img src="assets/logo.png" rel="logo"></td>
                        <td style="width:20%;text-align:center;background-color:#a5a3a38c;">
                            <small><b>Shree Swami Samarth</b></small>
                            <h4><b style="color:#ef7f1a;">MK TRANSPORT COMPANY</b></h4>
                            <small style="text-align:center;"><b>Ambad Link Road, Satpur, Nashlk, Maharashtra Email :tidke.mayur@gmail.com</b> </small>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered" style="margin:0px;font-size: 12px;">
                <tbody>
                    <tr>
                        <td><b>Mobile No.:</b> 7588554482</td>
                        <td><b>Invoice / PO / WO No. </b><?=  $data[0]->invoice_no; ?></td>
                        <td><b>LR No.:</b><?=  $data[0]->lorry_receipt_no; ?></td>
                    </tr>
                    <tr>
                        <td><b>GST / Trans ID :</b>27ASMPT1360J1ZB </td>
                        <td><b>Invoice / PO / WO Date: </b><?=  $data[0]->invoice_date; ?> </td>
                        <td><b>Lorry Receipt Date: <?=  $data[0]->lorry_receipt_date; ?></td>
                    </tr>
                    <tr>
                        <td><b>PAN NO :</b> ASMPT1360J</td>
                        <td><small><b>E Way Bill No.:   </b><?=  $data[0]->invoice_bill_no; ?> </small></td>
                        <td><small><b>Vehicle Number: </b><?=  $data[0]->vehicle_no; ?></small></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered" style="text-align:left;margin:0px;font-size: 12px;">
                <tbody>
                    <tr>
                        <td colspan=2><small><b>CONSIGNOR'S DETAILS </b></small></td>
                        <td colspan=2><small><b>CONSIGNEE'S DETAILS </b></small></td>
                    </tr>
                    <tr>
                        <td><small><b>Name:</b> </td><td><?=  $data[0]->consignor_name; ?></small></td>
                        <td><small><b>Name:</b> </td><td><?=  $data[0]->consignee_name; ?></small></td>
                    </tr>
                    <tr>
                        <td><small><b>Address:</b> </td><td><?=  $data[0]->consignor_address; ?></small></td>
                        <td><small><b>Address:</b> </td><td><?=  $data[0]->consignee_address; ?></small></td>
                    </tr>
                    <tr>
                        <td><small><b>Contact No:</b></td><td><?=  $data[0]->consignor_no; ?></small></td>
                        <td><small><b>Contact No:</b></td><td><?=  $data[0]->consignee_no; ?></small></td>
                    </tr>
                    <tr>
                        <td><small><b>GSTIN:</b></td><td><?=  $data[0]->consignor_gst; ?></small></td>
                        <td><small><b>GSTIN:</b></td><td><?=  $data[0]->consignee_gst; ?></small></td>
                    </tr>

                </tbody>
            </table>
            <table class="table table-bordered" style="margin:0px;font-size: 12px;">
                <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Description Of Goods</th>
                    <th>HSN Code</th>
                    <th>Weight / Quantity</th>
                    <th>Rate/ Ton</th>
                </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <?php
                        foreach($data as $key => $value)
                        {?>
                            <tr>
                                <th><?= $value->material_type;?> </th>
                                <th><?= $value->hsn; ?></th>
                                <th><?= $value->weight; ?></th>
                                <th><?= $value->rate; ?></th>
                            </tr>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered" style="margin:0px;font-size: 12px;">
                <thead>
                    <tr style="text-align:center;"><td colspan="7" ><b>Freight Amount</b></td></tr>
                    <tr>
                        <th>Loading /Unloading Charge </th>
                        <th>Other Charge</th>
                        <th>Bilty Charge</th>
                        <th>Freight Amount</th>
                        <th>Advance Amount </th>
                        <th>Balance Amount</th>
                        <th>Total Freight Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=  $data[0]->loading_charge; ?></td>
                        <td><?=  $data[0]->other_charge; ?></td>
                        <td><?=  $data[0]->bilty_charge; ?></td>
                        <td><b><?=  $data[0]->freight_amount; ?></b></td>
                        <td><?=  $data[0]->advance_amount; ?></td>
                        <td><?=  $data[0]->balance_amount; ?></td>
                        <td><span style="margin-right:3px;">&#8377;</span>
                        <b><?=  ($data[0]->loading_charge + $data[0]->other_charge + $data[0]->bilty_charge + $data[0]->freight_amount) - $data[0]->advance_amount; ?></b></td>
                    </tr>
                    <tr style="text-align:left;">
                        <td colspan="7"><b>Insurance :</b> The Customer Has Stated That Status:- <b>INSURED / UNINSURED</b></td>
                    </tr>
                    <?php if(isset($data[0]->insurance_name)&& !empty($data[0]->insurance_name)){?>
                        <tr style="text-align:left;">
                            <td colspan="7"><b>Insured Company :</b>
                                <?php echo $data[0]->insurance_name .'<b> Policy No :</b>'.$data[0]->insurance_number.'<b> Amount :</b>'.$data[0]->insurance_amount.'<b> Date :</b>'.$data[0]->insurance_date?> <b>Risk :</b> At Owner Risk</td>
                        </tr>
                    <?php }else{?>
                        <tr style="text-align:left;">
                            <td colspan="7">Insured Company :______________ Policy No :_____________ Amount :__________ Date :__________ Risk : At Owner Risk</td>
                        </tr>
                    <?php }?>
                    
                    <tr>
                        <td colspan="7" style="font-size: 10px;"><small><b>NOTICE:</b> We are sending Truck no. <b><?=  $data[0]->vehicle_no; ?></b> as per your phonic order. Please arrange to load the same and check up yourself all the paper of
the truck before loading. You are requested to insure the goods otherwise <b> MK TRANSPORT COMPANY</b> is not liable for any loss or damages</small></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered" style="margin:0px;font-size: 12px;">
                <tbody>
                    <tr>
                        <td rows="3" style="text-align:left;">
                        <b>Bank Account Details:</b><br>
                        Bank Name : BANK OF BARODA<br> 
                        A/C Holder Name : MK TRANSPORT COMPANY<br>
                        Bank Account Number : 11360200000774<br>
                        IFSC Code : BARB0PIMPAL
                        </td>
                        <td><b>From :</b> <?=  $data[0]->route1; ?>    <b> to: </b><?=  $data[0]->route2; ?>  <br>
                            <small>
                                <b>AT CARRIER RISK CAUTION</b></br>
                                This consignment will not be Detainad, Rre-route, diverted or re-book
                                without consignees I consignor bank written permission
                                It will be delivered at the destination.
                            </small>
                            <br>
                            <small>Subject To <b><?=  $data[0]->jurisdiction_place; ?></b> Jurisdiction </small>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered" style="margin:0px;font-size: 8px;">
                <tbody>
                    <tr><td colspan="3"><small>Receiving Use Only Remark Status Authentication</td></tr>
                    <tr>
                        <td style="height: 5px;"><small>Receiver Name :    </small></td>                           
                        <td style="height: 5px;"><small>Receiver Number : </small></td>
                        <td rowspan="2" style="width:2%;height:40px;"><img src="assets/sign.png" /></td>
                    </tr>
                    <tr>
                        <td style="height: 5px;"><small>Remarks :    </small></td>                           
                        <td style="height: 5px;"><small>Receiver Sign : </small></td>
                    </tr>
                </tbody>
            </table>
            <div style="text-align:center;"><b>Terms & Condition</b></div>
            <div style="text-align:left;font-size: 5px;">
                <small>1) The transport operator hereby agrees to hold itself liable directly to the bank concerned, as if the Bank was a party, of the contract contained with right of
                endorsee or in any other capacity for the purpose of Providing advances and / or collection or discounting of bills of its t,Jstorner, before or after the Transport Operator has been entrusted the goods.
                <br> 2) The transport Operator undertakes to deliver the goods in the same order and condition as received. The lorry receipt being surrendered to the bank, to its Order, or to its assigns, has accepted it for lending and to the collection or discounting of bills of its customers or for collection or to its agents. Only the
                bank and the holder of the receipt entitled to the delivery as aforesaid shall have the right of recourse against the operator for any and all ctairns arfsing thereon.
                <br>3) The right to entrust goods to any other lorry or service for transport of goods shalt be with the Transport Operator. If the goods are entrusted by the transport operator to another entity, the other entity shall be considered the transport operators agent, and the transport operator, notwithstanding the
                delivery of goods, the operator will be responsible for the safety of the goods and for their delivery at the destination by the hands of the other carrier referred to as the Transport Operator's agent.
                <br>4) The consignor is the primary payer of all transport and incidental charges, if any payable to the Transport Operator at their agreed location
                <br>5) Perishable goods lying undelivered after 48 hours of arrival can be disposed of by the Transport Operator's discretion without prior notice of thereof.
                <br>6) Goods lying undelivered can be disposed off by the Transport Operator after 30 clays of arrival after delivery to the consignor, bank, and the holder interested with a 15eday notice of such disposal of goods
                <br>7) In either of the case mentioned above, the bank or the relevant authority shall be entitled to the proceeds and the Transtooft Operazor is o r accounts immediately after sale deducting freight and demurrage.
                <br>8) The Consignee' Bank accepting Lorry Receipt under clause 1 above will not be liable for payment of any charges arising out of any lien of the transport Operator against the consignor or the buyer. the Transport Operator shall deliver the goods unconditionany to the Bank on Payment of the normal freight and storage charges only in connection with the comp/7161m in question, without claiming any lien on the goods in respect of any monies due by the consignor or the consignee to the Transport Operator on any other account whatsoever
                <br>9) Any Statement made in this lorry receipt or at any time in a circumstance regarding this receipt, the Transport Operator shall observe its obligation to the Consignee bank mentioned and will be responsible for safe and duo delivery, and for any loss or damage to the goods or consignment, that arises as a result of negligence, default, failure to take reasonable precautions, maladies or criminal or fraudulent actions of the Transport. Operator or any of his tvlanagers, Agents, Employees, Partners, Directors, Business Associates, Branches etc.
                <br>10)The consignor is responsible for all consequences of any Incorrect or false declaration.
                <br>11) if the goods have been lost, destroyed, damaged or have deteriorated the compensation payable by the Trans
                declared.
                port operator
                be delivered at the destination. 
                operator shall not exceed the value
                <br>12) The consignment shall be detained, re-routed, re-booked without the consignee's written and explicit permission. Will be delivered at destination
                <br>13) In case any dispute or diffrence arises between the parties with regrads to the term and conditions of this agreement or to the interpretation there of and which
                could not be solved with mutual understanding then both parties require to approach the local jurisdiction selected by transporter to resolve the same with legal procedure. 
                </small>   
            </div>
            


        </div>
    </div>
</div>

</body>
</html>

