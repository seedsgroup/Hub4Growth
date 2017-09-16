<?php include "inc/config.php"; ?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
 

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="width: 100% !important; max-height: 700px !important; ">
    <div class="item active">
      <img src="<?php echo IMAGE_URL; ?>3.jpg" style="width: 100%; height: 90% !important;" alt="...">
      <div class="carousel-caption">
        LONDON BRIDGE 
      </div>
    </div>
    <div class="item">
      <img src="<?php echo IMAGE_URL; ?>1.jpg" alt="..." style="width: 100%; height: 90% !important;" >
      <div class="carousel-caption">
        HUB4GROWTH ko project ko lagi aayeka manche haru
      </div>
    </div>
    <div class="item">
      <img src="<?php echo IMAGE_URL; ?>2.jpg" alt="..." style="width: 100%; height: 90% !important;">
      <div class="carousel-caption">
        radio karyekram
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>