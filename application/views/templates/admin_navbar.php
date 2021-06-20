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

            <img class="navbar-brand" src="<?php echo base_url()?>assests/img/logo.png" >
           
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php  echo $log_user->admin_firstname .' '.$log_user->admin_lastname; ?> <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('admin/logout')?>"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="<?php echo base_url('admin/dashboard')?>"><i class="fa fa-fw fa fa-question-circle"></i>HOME</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-paper-plane-o"></i> NOTICE <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li ><a href="<?php echo base_url('admin/newnotice')?>" ><i class="fa fa-angle-double-right "></i> New Notice </a></li>
                        <li><a href="<?php echo base_url('admin/noticelist')?>"><i class="fa fa-angle-double-right"></i> Notice List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> STUDENT<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="<?php echo base_url('super/manage_student')?>"><i class="fa fa-angle-double-right"></i> MANAGE </a></li>
                        <li><a href="<?php echo base_url('super/feedback')?>"><i class="fa fa-angle-double-right"></i> FEEDBACK</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('super/manage_admins')?>"><i class="fa fa-fw fa-user-plus"></i>  MANAGE ADMINS</a>
                </li>
                <li>
                    <a href="<?php echo base_url('super/system_maintenance')?>"><i class="fa fa-fw fa fa-question-circle"></i> SYSTEM MAINTENANCE</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>