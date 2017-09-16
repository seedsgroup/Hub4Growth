
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php';?>
<?php include 'inc/header.php'; ?>
<?php 
      include 'security_inside.php'; 
?>

    <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   
                    <div class="col-lg-12">

                      <?php include 'inc/notification.php';?>
                        <h1 class="page-header">
                         <?php 
                            if($act['edit']){ 
                              echo "User Edit";
                            } 
                            else {
                                echo "User Registration";
                              }
                           ?>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <!-- <?php 
                        // if(isset($act['edit'])){
                        //   echo "user_update.php?id=".$user_info['id'];
                        // } else{
                        //   echo "user_process.php";
                       // }?> -->
                <div class="row">
                        <form class="form-horizontal" method="POST" action="detail-form-process.php">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Fullname</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="fullname" placeholder="Govinda" value="<?php if($act['edit']){ echo $user_info['fullname'];} ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" placeholder="Pokharel" value="">
                            </div>
                          </div>
                          
                           <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Position
                            </label>
                            <div class="col-sm-10">
                              <?php $getPositions = getPositionofOrg();?>
                                <select class="form-control" name="role_id">
                                    <option disabled="" selected=""><b>--Select type--</b></option>
                                    <?php $i=1;
                                      foreach ($getPositions as $getPosition){ ?>
                                    <option value="<?php echo $getPosition['id'];?>"><?php echo $getPosition['pos_title'];?></option>
                                   <?php } ?>  
                                  </select>

                            </div>
                        </div>  
                        
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" disabled name="username" placeholder="oz" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" disabled id="inputPassword3" name="password" placeholder="Password">
                            </div>
                          </div>                 
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="address" placeholder="oz" value="<?php if($act['edit']){ echo $user_info['address'];} ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Gender</label>
                            <div class="col-sm-10">
                                    <label class="radio-inline">
                                          <input type="radio" name="gender" id="inlineRadio1" <?php echo(isset($act['edit']) && $user_info['gender'] == "Male")? 'checked' : '' ?> value="Male"> Male
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="gender" id="inlineRadio2" <?php echo(isset($act['edit']) && $user_info['gender'] == "Female")? 'checked' : '' ?> value="Female"> Female
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="gender" id="inlineRadio3" <?php echo(isset($act['edit']) && $user_info['gender'] == "Others")? 'checked' : '' ?> value="Others"> Others
                                        </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Nationality</label>
                            <div class="col-sm-10">
                               <input type="text" name="nationality" id="nationality" class="form-control" value="<?php if(isset($act['edit'])){ echo $user_info['nationality'];} ?>">
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone number</label>
                            <div class="col-sm-10">
                               <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" value="<?php if(isset($act['edit'])){ echo $user_info['phone-number'];} ?>">
                                   
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                             <textarea name="message" id="message" class="form-control" rows="6" style="resize:vertical;"></textarea>
                            </div>
                          </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Role
                            </label>
                            <div class="col-sm-10">
                                <select class="form-control" name="role_id">
                                    <option disabled="" selected=""><b>--Select type--</b></option>
                                    <option <?php echo (isset($user_info['role_id']) && $user_info['role_id'] == 1) ? 'selected' : '';?> value="1">Admin</option>
                                    <option <?php echo (isset($user_info['role_id']) && $user_info['role_id'] == 2) ? 'selected' : '';?> value="2">Editor</option>
                                    <option <?php echo (isset($user_info['role_id']) && $user_info['role_id'] == 3) ? 'selected' : '';?> value="3">User</option>
                                  </select>

                            </div>
                        </div>  

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status">
                                    <option disabled="" selected=""><b>--Select type--</b></option>
                                    <option <?php echo (isset($user_info['status']) && $user_info['status'] == 1) ? 'selected' : '';?> value="1">Active</option>
                                    <option <?php echo (isset($user_info['status']) && $user_info['status'] == 0) ? 'selected' : '';?> value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-success" value="1"?>Register 
                              </button>
                              <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        
                        </form>
                  </div>
               
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'inc/footer.php';?>

