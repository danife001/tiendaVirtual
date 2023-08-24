<?php
require_once('../../controller/verPerfiladmin.php')

?>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
<div class="nano">
    <div class="nano-content">
        <div class="logo">
            <a href="../admin/homeAdmin.php">
<img class="w-100" src="../dashboard/images/logo-fondo.png" alt="" /></a>
                <!-- <span>Focus</span> -->
            
        </div>
        <ul>
            <?php
            cargarperfil();
            ?>
            <!-- <li class="text-center"><h5 styke="color=#ffffff" >angie quiroga</h5><br><p>administrador</p></li> -->
            <li class="label">Menu Principal </li>
            <li>
                <a class="sidebar-sub-toggle">
                    <i class="ti-user"></i> admin
                    <!-- <span class="badge badge-primary">2</span> -->
                    <span class="sidebar-collapse-icon ti-angle-down"></span>
                </a>
                <ul>
                    <li>
                        <a href="../admin/registrarUser.php"><i class="ti-pencil-alt"></i>Registrar usuario</a>
                    </li>
                    <li>
                        <a href="../admin/verUser.php"><i class="ti-search"></i> Consultar ususarios</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-sub-toggle">
                    <i class="ti-bookmark-alt"></i> productos 
                    <!-- <span class="badge badge-primary">2</span> -->
                    <span class="sidebar-collapse-icon ti-angle-down"></span>
                </a>
                <ul>
                    <li>
                        <a href="../prod/registrarProd.php"><i class="ti-write"></i>Registrar producto</a>
                    </li>
                    <li>
                        <a href="../prod/verProd.php"><i class="ti-bar-chart-alt"></i> Consultar producto</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-sub-toggle">
                    <i class="ti-id-badge"></i> usuarios
                    <!-- <span class="badge badge-primary">2</span> -->
                    <span class="sidebar-collapse-icon ti-angle-down"></span>
                </a>
                <ul>
                    <li>
                        <a href="registrarUser.php"><i class="ti-credit-card"></i>Hacer compras </a>
                    </li>
                    <li>
                        <a href="verUser.php"><i class="ti-receipt"></i> Consultar compras </a>
                    </li>
                </ul>
            </li>

            
            <li>
                <a>
                    <a href="../../controller/cerrarsesion.php">
                        
                    <i class="ti-power-off"></i> Cerrar Sesion</a>
            </li>
        </ul>
    </div>
</div>
</div>
<!-- /# sidebar -->


<div class="header">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <div class="hamburger sidebar-toggle">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="float-right">
                <div class="dropdown dib">
                    <div class="header-icon" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                        <div class="drop-down dropdown-menu dropdown-menu-right">
                            <div class="dropdown-content-heading">
                                <span class="text-left">Recent Notifications</span>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Mr. John</div>
                                                <div class="notification-text">5 members joined today </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Mariam</div>
                                                <div class="notification-text">likes a photo of you</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Tasnim</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Mr. John</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#" class="more-link">See All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown dib">
                    <div class="header-icon" data-toggle="dropdown">
                        <i class="ti-email"></i>
                        <div class="drop-down dropdown-menu dropdown-menu-right">
                            <div class="dropdown-content-heading">
                                <span class="text-left">2 New Messages</span>
                                <a href="email.html">
                                    <i class="ti-pencil-alt pull-right"></i>
                                </a>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li class="notification-unread">
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="images/avatar/1.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Michael Qin</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-unread">
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="images/avatar/2.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Mr. John</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Michael Qin</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="images/avatar/2.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Mr. John</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#" class="more-link">See All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="dropdown dib">
                    <div class="header-icon" data-toggle="dropdown">
                        <span class="user-avatar">daniel
                            <i class="ti-angle-down f-s-10"></i>
                        </span>
                        <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                            <div class="dropdown-content-heading">
                                <span class="text-left">Upgrade Now</span>
                                <p class="trial-day">30 Days Trail</p>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i>
                                            <span>Inbox</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-settings"></i>
                                            <span>Setting</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i>
                                            <span>Lock Screen</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-power-off"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
