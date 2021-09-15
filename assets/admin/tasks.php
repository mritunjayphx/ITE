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
                        <th>Task Details</th>
                        <th>Amount</th>
                        <th>Assigned Users</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>#ITL0001</td>
                        <td>
                            <div class="row">
                                <div style="width: 100%;">
                                    <h5 style="color: blue; font-weight: 600;">Mahindra Test Ride</h5>
                                    <b>Url: </b>https://mahindra.test.ride<br/>
                                    <b>Num Recordings: </b>100<br/>
                                </div>
                            </div>
                        </td>
                        <td>1030/-</td>
                        <td>430 users</td>
                        <td>
                            <small class="badge badge-primary"><i class="far fa-check-Ban"></i> Processing</small>
                        </td>
                        <td style="width: 15%;">
                            <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary   btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>#ITL0002</td>
                        <td>
                            <div class="row">
                                <div style="width: 100%;">
                                    <h5 style="color: blue; font-weight: 600;">Godrej</h5>
                                    <b>Url: </b>https://mahindra.test.ride<br/>
                                    <b>Num Recordings: </b>100<br/>
                                </div>
                            </div>
                        </td>
                        <td>1030/-</td>
                        <td>330 users</td>
                        <td>
                            <small class="badge badge-success"><i class="far fa-check-Ban"></i> Completed</small>
                        </td>
                        <td style="width: 15%;">
                            <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary   btn-sm"><i class="fas fa-edit"></i></a>
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