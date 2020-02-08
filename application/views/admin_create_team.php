<?php include('admin_header.php');?>
<br>
<br>

<br>
<div class="site-section">
        <div class="container">
            <br>
            
            <h2>Create New Project Team</h2>
 <br>
 

  <form method="post" action='<?php echo base_url()."index.php/admin_controll/assign_new_proj"?>'>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
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
                            <label for="sel1" >Choose Front End Developer</label>
                            
                              <select class="form-control" id="sel1" name="ui_developer">
                              <?php                                     
                                                        
                                            
                            foreach($data1 as $row)
                            {
                                ?>
                               
                              <?php echo "<option>".$row->name."</option>";?>
                              <?php
                            }
                              ?>
                             </select>  
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="sel1" >Choose Back End Developer</label>
                            
                              <select class="form-control" id="sel1" name="back_end">
                              <?php                                     
                                                        
                                            
                            foreach($data2 as $row)
                            {
                                ?>
                               
                              <?php echo "<option>".$row->name."</option>";?>
                              <?php
                            }
                              ?>
                             </select>  
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="sel1" >Choose Tester</label>
                            
                              <select class="form-control" id="sel1" name="tester">
                              <?php                                     
                                                        
                                            
                            foreach($data3 as $row)
                            {
                                ?>
                               
                              <?php echo "<option>".$row->name."</option>";?>
                              <?php
                            }
                              ?>
                             </select>  
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="sel1" >Choose Quality Tester</label>
                            
                              <select class="form-control" id="sel1" name="Quality_tester">
                              <?php                                     
                                                        
                                            
                            foreach($data4 as $row)
                            {
                                ?>
                               
                              <?php echo "<option>".$row->name."</option>";?>
                              <?php
                            }
                              ?>
                             </select>  
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Create" name="submit" class="btn btn-primary btn-lg px-3">
                            <br>
                        </div>
                      
                    </div>
                </div>
            </div>
            
         </form>
          
        </div>
    </div>


<?php include('admin_footer.php');?>