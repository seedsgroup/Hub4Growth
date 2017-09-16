
<?php session_start(); include 'inc/config.php';?>
<?php include 'inc/header.php'; ?>
<?php
         include 'inc/function.php'; include 'inc/dbconnect.php';
        include 'security_inside.php';
// if(isset($_GET['id']) && !empty($_GET['id'])){
//   $id = sanitize($_GET['id']);

//   $del = deleteData('user_registration', 'id', $id);
  
//   if($del == 1){
//     $_SESSION['SUCCESS'] = "User has been deleted successfully";
//      @header('location: usr_list.php');
//    exit;
//    }else{
//     $_SESSION['ERROR'] = "User couldn't be deleted at this moment.";   
//      @header('location: usr_list.php');
//    exit;
//    }
// }
        
    ?>


    <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Hesading -->
                <div class="row">
                   
                    <div class="col-lg-12">
                      <?php include 'inc/notification.php'; ?>
                        <h1 class="page-header">
                          User List
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <?php $listUser = getAllUserlist();
                 ?>
                      <table id="listUser" class="table table-bordered">
                        <thead>
                          <th>S.No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Nationality</th>
                          <th>Address</th>
                          <th>Phone number</th>
                          <th>Position</th>
                          <th>Action</th>
                        </thead>   
                         <tbody>
                          <?php $i=1;
                            foreach ($listUser as $insideArr) { ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><?php echo $insideArr['fullname'];?></td>
                                 <td><?php echo $insideArr['email'];?></td>
                                  <td><?php echo $insideArr['gender'];?></td>
                                   <td><?php echo $insideArr['nationality'];?></td>
                                   <td><?php echo $insideArr['address'];?></td>
                                    <td><?php echo $insideArr['phone_number'];?></td>
                                   <td><?php $position = getUserPostion($insideArr['position']); 
                                   if($position == ""){ echo "unknown";}?></td>
                                    
                                  
                              <td><a href="user_reg.php?id=<?php echo $insideArr['id']; ?>&act=<?php echo substr(sha1('edit-'.$insideArr['id']), 4,9); ?>" class="btn btn-success btn-circle-edit"><i class="glyphicon glyphicon-pencil" aria-hidden="true" style="top: 3px;"></i></a>
                                <a onclick="return confirm('Are you sure you want to delete this user?')" href="usr_list.php?id=<?php echo $insideArr['id']; ?>" class="btn btn-danger btn-circle-delete"><i class="glyphicon glyphicon-trash" style="top: 3px;"></i></a>
                              </td> 
                              </tr>
                              <?php
                              }
                            
                          ?>
                            
                           
                           
                         </tbody>                    
                      </table>
                  </div>
               
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'inc/footer.php';?>
<?php include 'inc/dataTables.php';?>
  