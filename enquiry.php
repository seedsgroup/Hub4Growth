
<?php session_start(); include 'inc/config.php';?>
<?php 
      include 'inc/header.php'; 
      include 'datatable_css.php';
?>

<?php
         include 'inc/function.php'; include 'inc/dbconnect.php';
        include 'security_inside.php';
if(isset($_GET['id']) && !empty($_GET['id'])){
  $id = sanitize($_GET['id']);

  $del = deleteData('user_registration', 'id', $id);
  
  if($del == 1){
    $_SESSION['SUCCESS'] = "User has been deleted successfully";
     @header('location: usr_list.php');
   exit;
   }else{
    $_SESSION['ERROR'] = "User couldn't be deleted at this moment.";   
     @header('location: usr_list.php');
   exit;
   }
}
        
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
                          List Enquiries
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <?php $listEnquiries = getAllEnquiry();
                 ?>
                      <table id="listEnquiry" class="table table-bordered">
                        <thead>
                          <th>S.No.</th>
                          <th>Fullname</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Date</th>
                         
                        </thead>   
                         <tbody>
                          <?php $i=1;
                            foreach ($listEnquiries as $listEnquiry) { ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                <td><?php echo $listEnquiry['fullname'];?></td>
                                <td><?php echo $listEnquiry['email'];?></td>
                                <td><?php echo $listEnquiry['subject'];?></td>
                                <td><?php echo $listEnquiry['message'];?></td>
                                <td><?php echo $listEnquiry['added_date']; ?></td>
                                
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
  