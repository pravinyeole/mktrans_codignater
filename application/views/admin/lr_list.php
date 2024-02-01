<?= include("head.php") ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="margin-top:26px;">
                <div class="card-header">Quotation List</div>
                    <div class="card-body">
                        <table class="table table-bordered data-table display" id="myTable">
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Invoice Date</th>
                                    <th style="text-align:center;">Consignor Name</th>
                                    <th style="text-align:center;">Mobile Number</th>
                                    <th style="text-align:center;">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            <?php
                            foreach($data as $key => $val)
                            {
                            ?>
                                <tr style="text-align:center;">
                                    <td><?= $val->invoice_date; ?></td>
                                    <td><?= $val->consignor_name; ?></td>
                                    <td><?= $val->consignor_no; ?></td>
                                    <td><a href="<?= site_url('index.php/Admin/view_lr/').'/'.$val->id ?>" class="btn btn-primary">Download</a></td>
                                </tr>
                                
                            <?php
                            }

                            ?>
                            
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<?php include("footer.php"); ?>