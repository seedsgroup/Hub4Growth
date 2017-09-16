<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; ?>
<?php 
	include 'inc/header.php';	 
	include 'security_inside.php';
	include 'inc/navigation.php';
?>

 <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                  <?php $contact=getContact();
                  foreach($contact as $listContact){
                    ?>

                   
                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>

                        <h1 class="page-header">Update Contact Info </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <form class="form-horizontal" method="POST" action="inc/contact_process">
                 
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Contact Description</label>
                            <div class="col-sm-6">
                             <textarea name="description" id="description" class="form-control" rows="6" style="resize:vertical;" ><?php echo $listContact['description']; ?></textarea>
                            </div>
                          </div>
                         
                         
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-6">
                              <input type="email" required class="form-control" name="email" value="<?php echo $listContact['email']; ?>" >
                            </div>
                          </div>


                      
                        
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-6">
                              <input type="text" required class="form-control" name="phone" value="<?php echo $listContact['phone']; ?>">
                            </div>
                          </div>
                          
                         
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Fax</label>
                            <div class="col-sm-6">
                              <input type="text" required class="form-control" name="fax" value="<?php echo $listContact['fax']; ?>">
                            </div>
                          </div>

                        
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-6">
                              <input type="text" required class="form-control" name="address" value="<?php echo $listContact['address']; ?>">
                            </div>
                          </div>

                        
                            <div class="form-group">
                            <label class="col-sm-2 control-label">PO Box</label>
                            <div class="col-sm-6">
                              <input type="text" required class="form-control" name="pobox" value="<?php echo $listContact['pobox']; ?>">
                            </div>
                          </div>

                        
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Facebook link</label>
                            <div class="col-sm-6">
                              <input type="link" class="form-control" name="link" value="<?php echo $listContact['link']; ?>">
                            </div>
                          </div>



                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                              <button type="submit" class="btn btn-success">Update</button>
                             
                          
                            </div>
                          </div>
                        </form>
                  </div>
               <?php
                  }
                   ?>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'inc/footer.php'; ?>