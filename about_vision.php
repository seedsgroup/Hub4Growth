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
                   
                   <?php $vision=getVision(); ?>

                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>

                        <h1 class="page-header">Update Vision and mission </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <form class="form-horizontal" method="POST" action="inc/about_process">
                 <?php foreach($vision as $getVisionList){ 
                  ?>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Summary</label>
                            <div class="col-sm-6">
                             <textarea name="summary" id="summary" class="form-control" rows="3" style="resize:vertical;" ><?php echo $getVisionList['summary']; ?></textarea>
                            </div>
                          </div>
                          
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                             <input type="hidden" name="page" id="page" value="Vision and mission" class="form-control">
                            </div>
                          </div>

                            <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-6">
                             <textarea name="description" id="description" class="form-control" rows="7" style="resize:vertical;" placeholder="Vision Description"><?php echo $getVisionList['description']; ?></textarea>
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