 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">HUB4GROWTH Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                       
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['fullname'];?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['fullname'];?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['fullname'];?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['fullname'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index" title="Dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <?php if($_SESSION['role'] != 2){ ?> 
                       <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#about"><i class="fa fa-fw fa-users"></i> About HUB4GROWTH<i class="fa fa-fw fa-caret-down"></i></a>
                         <ul class="collapse" id="about">   
                            <li>
                                <a href="about_vision.php" title='Vision & Mission'><i class="fa fa-fw fa-plus"></i> Vision & Mission</a>
                            </li>

                            <li>
                                <a href="about_contribution"><i class="fa fa-fw fa-list"></i>Contribution to National &nbsp &nbsp &nbsp Development</a>
                            </li>
                            <li>
                                <a href="about_collaboration"><i class="fa fa-fw fa-list"></i>Collaboration</a>
                            </li>
                            <li>
                                <a href="about_research" title="Research & Technology"><i class="fa fa-fw fa-list"></i>Research & Technology</a>
                            </li>
                        </ul>
                    </li>
                        <li>
                                <a href="list_position" title="Member's lists"><i class="fa fa-fw fa-bars"></i> List Members</a>
                        </li>

                    <?php } ?>
                    <li>
                                <a href="contact" title="Contact Info"><i class="fa fa-fw fa-plus"></i> Contact Info</a>
                        </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#events"><i class="fa fa-fw fa-calendar"></i> Events<i class="fa fa-fw fa-caret-down"></i></a>
                         <ul class="collapse" id="events">   
                            <li>
                                <a href="events"><i class="fa fa-fw fa-plus"></i> &nbsp;Add Events</a>
                            </li>
                             <li>
                                        <a href="#"><i class="fa fa-fw fa-table"></i> List Events</a>
                            </li>
                         </ul>
                    </li>
                     <li>
                                <a href="achievements"><i class="fa fa-fw fa-plus-circle"></i> Add Achievements</a>
                    </li>
                    <li>
                                <a href="banner_list"><i class="fa fa-fw fa-picture-o"></i> Banners</a>
                    </li>
                    <li>
                                <a href="enquiry"><i class="fa fa-fw fa-server"></i> List Enquries</a>
                    </li>
                    
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
