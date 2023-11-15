<?= include("head.php") ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Vehicle Type</div>
                    <div class="card-body">
                        <?php if($this->session->flashdata('msg')): ?>
                            <p style="color:green;"><?php echo $this->session->flashdata('msg'); ?></p>
                        <?php endif; ?>
                        <form method="post" action="<?= site_url('index.php/Admin/submit_vehical_type') ?>" class="form-inline">
                            <div class="col-md-4">
                                <label for="staticEmail2" class="sr-only">Vehicle Type</label>
                                <input type="text" name="name" class="form-control" Placeholder="Please Enter Vehicle Type" require/>
                            </div>
                            <div class="col-md-4">
                                <label for="staticEmail2" class="sr-only">Material Weight</label>
                                <input type="text" name="material_weight" class="form-control" Placeholder="Please Enter Material Weight" require/>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary mb-2" style="margin-left:5px;">Save</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
            <div class="card" style="margin-top:26px;">
                <div class="card-header">List Vehicle Type</div>
                    <div class="card-body">
                        <table class="table table-bordered data-table display" id="myTable">
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Weight (Ton)</th>
                                    <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            <?php
                            foreach($data as $key => $val)
                            {
                            ?>
                                <tr style="text-align:center;"><td><?= $val->name; ?></td><td><?= $val->material_weight; ?>
                                </td><td><a href="<?= site_url('index.php/Admin/vehical_type_delete/').'/'.$val->id ?>" class="btn btn-danger">Delete</a></td></tr>
                                
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