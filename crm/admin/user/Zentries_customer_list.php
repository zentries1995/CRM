<br>
<h5 class="">Customers</h5>
<hr>
<style>
    .img-avatar{
        width:50px;
        height:50px;
        object-fit: cover;
        border:1px solid;
        border-radius: 50%;
    }
</style>
<div class="row">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title">List of Customers</h5>
                <!-- <div class="card-tools">
                        <button class="btn btn-flat btn-primary btn-sm" type="button" id="new_data"><span class="fa fa-plus"></span> New User</button>
                </div> -->
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <table class="table table-striped table-bordered">
                        <colgroup>
                            <col width="5%">
                            <col width="15%">
                            <col width="25%">
                            <col width="35%">
                            <col width="20%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>CustID</th>
                                <th>Name</th>
                                <th>Req_Service</th>
                                <th>Message</th>
                                <th>Mobile</th>
                                 <th>Email</th>
                                <th>Requested_Date</th>
                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php
                            $query = mysqli_query($conn, "select * from zentries_customers");
                            $cnt = 1;
                            while ($row = mysqli_fetch_object($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $cnt; ?></td>
                                    <td><?php echo $row->CustID; ?></td>
                                    <td><?php echo $row->Name; ?></td>
                                    <td><?php echo $row->Req_Service; ?></td>
                                    <td><?php echo $row->Message; ?></td>
                                    <td><?php echo $row->Mobile; ?></td>
                                    <td><?php echo $row->Email; ?></td>
                                    <td><?php echo $row->Req_Date; ?></td>
                                    <td><a href="user/delete-script.php?id=<?php echo $row->id; ?>" onclick="return checkDelete()" class="btn btn-danger btn-sm">Delete</a></td>

                                </tr>
                                <?php
                                $cnt = $cnt + 1;
                            }
                            ?>
                        <script language="JavaScript" type="text/javascript">
                            function checkDelete() {
                                return confirm('Are you sure want to delete?');
                                
                            }
                        </script>                                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

