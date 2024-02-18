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
                                    
                                    <th style="text-align:center;">Company Name</th>
                                    <th style="text-align:center;">Customer Name</th>
                                    <th style="text-align:center;">Email Add.</th>
                                    <th style="text-align:center;">Mobile No.</th>
                                    <th style="text-align:center;">Location</th>
                                    <th style="text-align:center;">Desc</th>
                                    <th style="text-align:center;">Date</th>

                                </tr>
                            </thead>
                            <tbody>
                               
                            <?php
                            foreach($data as $key => $val)
                            {
                            ?>
                                <tr style="text-align:center;">
                                    <td><?= $val->company_name; ?></td>
                                    <td><?= $val->name; ?></td>
                                    <td><?= $val->email; ?></td>
                                    <td><?= $val->mobile_number; ?></td>
                                    <td><?= $val->to_location; ?> To <?= $val->from_location; ?></td>
                                    <td><?= $val->desc; ?></td>
                                    <td><?= $val->created_at; ?></td>
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