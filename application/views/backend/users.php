<?php include('header.php') ?>
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
                <tbody>
                    <tr style="">
                        <th>Id</th>
                        <th>User Details</th>
                        <th>Assigned Tasks</th>
                        <th>Completed Tasks</th>
                        
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>#ITL0001</td>
                        <td>
                            <div class="row">
                                <div style="width: 100%;">
                                    <h5 style="color: blue; font-weight: 600;">Mritunjay Kumar</h5>
                                    <b>Mobile: </b>909090990<br/>
                                    <b>Email: </b>Mritunjay@gmail.com<br/>
                                </div>
                            </div>
                        </td>                        
                        <td>30</td>
                        <td>20</td>
                        <td>
                            <small class="badge badge-danger"><i class="far fa-check-Ban"></i> Not Approved</small>
                        </td>
                        <td style="width: 15%;">
                          <a href="#" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>            
            <!-- /.card-body -->
            
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>
</section>

<?php include('footer.php') ?>