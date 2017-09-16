
<?php session_start(); include 'inc/config.php'; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/function.php';
      include 'security_inside.php'; 
      include 'inc/dbconnect.php';
      
      if(isset($_GET) && !empty($_GET['id']) && isset($_GET['act'])){
        $id = sanitize($_GET['id']);
          $check  = substr(sha1('edit-'.$id), 4,9);
            if($check == $_GET['act']){
                $user_info = getAllInfoById($id);
                if($user_info){
                  $act['edit'] = "for edit";
                }else{
                  $_SESSION['ERROR'] = "User doesn't exist or already deleted!!";
                  $header('location: usr_list.php');
                  exit;
                }

              }else{
              $_SESSION['ERROR'] = "Invalid action!";
              @header('location: usr_list.php');
              exit;
            }

          }else{
          $act['register'] = "to register";
      }

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
                <div class="row">
                        <form class="form-horizontal" method="POST" action="<?php 
                        if(isset($act['edit'])){
                          echo "user_update.php?id=".$user_info['id'];
                        } else{
                          echo "user_process.php";
                        }?>">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Firstname</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="firstname" placeholder="Govinda" value="<?php if($act['edit']){ echo $user_info['firstname'];} ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Last name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="lastname" placeholder="Pokharel" value="<?php if($act['edit']){ echo $user_info['lastname'];} ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" value="<?php if($user_info){ echo $user_info['email'];} ?>">
                            </div>
                          </div>
                          <?php if(!isset($act['edit']) && empty($act['edit'])){?> 
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="username" placeholder="oz" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                            </div>
                          </div>

                          <?php } ?>

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
                                          <input type="radio" name="gender" id="inlineRadio2" <?php echo(isset($act['edit']) && $user_info['gender'] == "Female")? 'checked' : '' ?> value="Female> Female
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
                            <label class="col-sm-2 control-label">
                                Role
                            </label>
                            <div class="col-sm-10">
                                <select class="form-control" name="role_id">
                                    <option disabled="" selected=""><b>--Select type--</b></option>
                                    <option <?php echo (isset($user_info['role_id']) && $user_info['role_id'] == 1) ? 'selected' : '';?> value="1">Admin</option>
                                      <option <?php echo (isset($user_info['role_id']) && $user_info['role_id'] == 0) ? 'selected' : '';?> value="0">User</option>
                                        <option <?php echo (isset($user_info['role_id']) && $user_info['role_id'] == 2) ? 'selected' : '';?> value="2">Editor</option>
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
                              <button type="submit" class="btn btn-success" value="<?php if($act['edit']){ echo "Update";}else{echo "Register";} ?>"> <?php if($act['edit']){ echo "Update";}else{echo "Register";} ?> 
                              </button>
                              <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                          </div><i style="float:right;"><?php debugger($_POST);?></i>
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

