<?php include('admin_header.php');?>
<br>
<br>
<div class="container">
<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <br>
                                <br>
                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    <h3 class="title-5 m-b-35">Employees</h3>  
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Add New Employee</button>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Sl.No</th>
                                                
                                             
                                                <th>Name</th>
                                                <th>Email</th>
                                                
                                                <th>Designation</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i=1;
                                               foreach($data as $row)
                                               {
                                                   ?>
                                            <tr class="tr-shadow">
                                                <?php echo "<td>".$i."</td>";?>
                                                <?php echo "<td>".$row->name."</td>";?>
                                                <span class="block-email"> <?php echo "<td>".$row->email."</td>";?></span>
                                                <?php echo "<td>".$row->designation."</td>";?>
                                                <?php echo "<td>".$row->status."</td>";?>
                                               
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send Message">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                       <a href='<?php echo base_url()."index.php/admin_controll/approve/".$row->user_id ?>'> <button class="item" data-toggle="tooltip" data-placement="top" title="Approve" >
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></a>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Remove">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                            $i++;
                                                 }
                                                    ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
</div>
  <br>                         
</div>

<?php include('admin_footer.php');?>