<?php include('admin_header.php');?>
<br>
<br>
<br>

<br>
<div class="site-section">
        <div class="container">
            <br>
            
            <h2>Assign New Project</h2>
 <br>
 

  <form method="post" action='<?php echo base_url()."index.php/admin_controll/assign_new_proj"?>'>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                       
                        <div class="col-md-12 form-group">
                            <label for="project name">Project Name</label>
                            <input type="text" id="project name" class="form-control form-control-lg" name="project" required>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label for="sel1" >Choose Team Head</label>
                            
                              <select class="form-control" id="sel1" name="project_head">
                              <?php                                     
                                                        
                                            
                            foreach($data as $row)
                            {
                                ?>
                               
                              <?php echo "<option>".$row->name."</option>";?>
                              <?php
                            }
                              ?>
                             </select>
                              
                            
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label for="time">Time bound(days)</label>
                            <input type="text" id="dead line" class="form-control form-control-lg" name="time" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="description">Description if any</label>
                            <input type="text" id="description" class="form-control form-control-lg" name="description" required>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Assign" name="submit" class="btn btn-primary btn-lg px-3">
                            <br>
                        </div>
                      
                    </div>
                </div>
            </div>
            
         </form>
          
        </div>
    </div>

<?php include('admin_footer.php');?>