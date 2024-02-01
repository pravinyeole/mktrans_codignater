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
                                    <th style="text-align:center;">Date</th>
                                    <th style="text-align:center;">Company Name</th>
                                    <th style="text-align:center;">Mobile Number</th>
                                    <th style="text-align:center;">Address</th>
                                    <th style="text-align:center;">Download</th>
                                    <?php 
                                    if($status == 'active')
                                    {
                                        echo '<th style="text-align:center;">Delete</th>';
                                    }
                                    ?>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               
                            <?php
                            foreach($data as $key => $val)
                            {
                            ?>
                                <tr style="text-align:center;">
                                    <td><?= $val->date; ?></td>
                                    <td><?= $val->company_name; ?></td>
                                    <td><?= $val->mobile; ?></td>
                                    <td><?= $val->address; ?></td>
                                    <td><a href="<?= site_url('index.php/Admin/view_invoice/').'/'.$val->id ?>" class="btn btn-primary">Download</a></td>
                                    
                                    <?php 
                                    if($status == 'active')
                                    {?>
                                        <td><a href="<?= site_url('index.php/Admin/delete_invoice/').'/'.$val->id ?>" class="btn btn-danger">Delete</a></td>
                                    <?php }
                                    ?>
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