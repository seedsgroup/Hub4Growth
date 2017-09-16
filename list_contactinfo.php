
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php';?>
<?php include 'inc/header.php'; ?>
<?php
         include 'inc/function.php'; 
        include 'security_inside.php';
?>
<?php include 'datatable_css.php';?>

    <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Hesading -->
                <div class="row">
                   
                    <div class="col-lg-12">
                      <?php include 'inc/notification.php'; ?>
                        <h1 class="page-header">
                          Positions List <small><a href="position" style="text-decoration: none;"><i class="fa fa-fw fa-undo"></i> Go back</a></small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <?php $getPositions = getPositionofOrg();?>
                      <table id="listPositions" class="table table-bordered">
                        <thead>
                          <th>S.No.</th>
                          <th>Position Title</th>
<!--                           <th>Postion Description</th> -->
                        </thead>   
                         <tbody>
                          <?php $i=1;
                          foreach ($getPositions as $getPosition){ ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><?php echo $getPosition['pos_title'];?></td>
                               <!--   <td><?php //echo $getPosition['pos_description'];?></td>  -->
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
  