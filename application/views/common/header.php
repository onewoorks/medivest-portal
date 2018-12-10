<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Medivest | TRUST Project | POC</title>
        <meta name="description" content="">
        <meta name="author" content="Onewoorks Solutions Web Development - https://www.onewoorks.com">

        <!-- Favicon -->

        <!-- Bootstrap CSS -->
        <link href="<?= SITE_ROOT; ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- Font Awesome CSS -->
        <link href="<?= SITE_ROOT; ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Custom CSS -->
        <link href="<?= SITE_ROOT; ?>assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- BEGIN CSS for this page -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
        <!-- END CSS for this page -->

        <script src="<?= SITE_ROOT; ?>assets/js/moment.min.js"></script>

        <script src="<?= SITE_ROOT; ?>assets/js/modernizr.min.js"></script>
        <script src="<?= SITE_ROOT; ?>assets/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    </head>

    <body class="adminbody">

        <div id="main">

            <!-- top bar navigation -->
            <div class="headerbar">

                <!-- LOGO -->
                <div class="headerbar-left">
                    <a href="index.html" class="logo"><span>MEDIVEST | POC</span></a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item dropdown notif d-none">
                            <a class="nav-link dropdown-toggle arrow-none hide" 
                               data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small>Help and Support</small></h5>
                                </div>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want custom development to integrate this theme?</b>
                                        <span>Contact Us</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                        <span>Try Pike Admin PRO</span>
                                    </p>
                                </a>                               

                                <!-- All-->
                                <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">
                                    <i class="fa fa-link"></i> Visit Pike Admin Website
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif d-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Jokn Doe</b>
                                        <span>New message received</span>
                                        <small class="text-muted">2 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Michael Jackson</b>
                                        <span>New message received</span>
                                        <small class="text-muted">15 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Foxy Johnes</b>
                                        <span>New message received</span>
                                        <small class="text-muted">Yesterday, 13:30</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif d-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="<?= SITE_ROOT; ?>assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>John Doe</b>
                                        <span>User registration</span>
                                        <small class="text-muted">3 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michael Cox</b>
                                        <span>Task 2 completed</span>
                                        <small class="text-muted">12 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michelle Dolores</b>
                                        <span>New job completed</span>
                                        <small class="text-muted">35 minutes ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All Allerts
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= SITE_ROOT; ?>assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0 d-none">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

                </nav>


            </div>
            <!-- End Navigation -->

            <!-- Left Sidebar -->
            <div class="left main-sidebar">

                <div class="sidebar-inner leftscroll">

                    <div id="sidebar-menu">

                        <ul>

                            <li class="submenu">
                                <a href="<?= SITE_ROOT; ?>"
                                   class='<?= (isset($data['sb_dashboard'])) ? 'active' : ''; ?>'
                                   ><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                            </li>

                            <li class="submenu">
                                <a href="#"><i class="fa fa-fw fa-table"></i> <span> Site </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="submenu">
                                        <a href="#"><span>Negeri Sembilan</span> <span class="menu-arrow"></span> </a>
                                        <ul style="">
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="tables-datatable.html">Perak</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                
                                <a href="#" id='sb-maintenance' class='<?= (isset($data['sb_maintenance'])) ? 'active' : ''; ?>' >
                                    <i class="fa fa-fw fa-table"></i> <span> Maintenance Services </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="submenu">
                                        <a href='<?= SITE_ROOT;?>maintenance' ><span>Tengku Jaafar</span> <span class="menu-arrow"></span> </a>
                                    </li> 
                                    <li class="submenu">
                                        <a class='' href='<?= SITE_ROOT;?>maintenance' ><span>Negeri Sembilan</span> <span class="menu-arrow"></span> </a>
                                    </li> 
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#"><i class="fa fa-fw fa-table"></i> <span> CRM </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="submenu">
                                        <a href="#"><span>Negeri Sembilan</span> <span class="menu-arrow"></span> </a>
                                        <ul style="">
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="tables-datatable.html">Perak</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#"><i class="fa fa-fw fa-table"></i> <span> Spare Part </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="submenu">
                                        <a href="#"><span>Negeri Sembilan</span> <span class="menu-arrow"></span> </a>
                                        <ul style="">
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="tables-datatable.html">Perak</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#"><i class="fa fa-fw fa-table"></i> <span> Asset Tracking </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="submenu">
                                        <a href="#"><span>Negeri Sembilan</span> <span class="menu-arrow"></span> </a>
                                        <ul style="">
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="tables-datatable.html">Perak</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#" 
                                   class='<?= (isset($data['sb_inventory'])) ? 'active' : ''; ?>'
                                   ><i class="fa fa-fw fa-table"></i> <span> Inventory </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="submenu">
                                        <a href="<?= SITE_ROOT;?>inventory/site"><span>Tengku Jaafar</span> <span class="menu-arrow"></span> </a>
                                        <ul style="">
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="tables-datatable.html">Perak</a></li>
                                </ul>
                            </li>

                            <ul class="list-unstyled">
                                <li class="submenu">
                                    <a href="#"><span>Negeri Sembilan</span> <span class="menu-arrow"></span> </a>
                                    <ul style="">
                                        <li><a href="#"><span>Third Level Item</span></a></li>
                                        <li><a href="#"><span>Third Level Item</span></a></li>
                                    </ul>
                                </li> 
                                <li><a href="tables-datatable.html">Perak</a></li>
                            </ul>

                            <li class="submenu d-none">
                                <a href="#"><i class="fa fa-fw fa-table"></i> <span> Maintenance Activity </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="submenu">
                                        <a href="#"><span>Tengku Jaafar</span> <span class="menu-arrow"></span> </a>
                                    </li> 
                                    <li><a href="#">Perak</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#"><i class="fa fa-fw fa-table"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="submenu">
                                        <a href="#"><span>Negeri Sembilan</span> <span class="menu-arrow"></span> </a>
                                        <ul style="">
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="tables-datatable.html">Perak</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="clearfix"></div>


                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- End Sidebar -->

            <div class="content-page">

                <!-- Start content -->
                <div class="content">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb-holder">
                                    <h1 class="main-title float-left"><?= $data['title']; ?></h1>

                                    <ol class="breadcrumb float-right">
                                        <?php foreach ($data['breadcrumbs'] as $breadcrumb): ?>
                                            <li class="breadcrumb-item"><?= $breadcrumb['title']; ?></li>
                                        <?php endforeach; ?>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
