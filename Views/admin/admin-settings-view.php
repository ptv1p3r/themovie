<?php
/**
 * Created by PhpStorm.
 * User: lmore
 * Date: 26/01/2019
 * Time: 15:28
 */
?>


<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo HOME_URI . '/admin/login';?>"> <img src="<?php echo HOME_URI . '/Images/logo_black.png';?>" alt="" width="48">The Real Movie Database</a>

    <!-- Spacing -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></a>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../../Images/user.png" alt="" height="48">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo HOME_URI . '/admin/settings';?>">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>
    </ul>
</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/login';?>"><span>Tabela CRUD Fimes</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/comment';?>"><span>Tabela CRUD Comment</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/category';?>"><span>Tabela CRUD Categorias</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/rating';?>"><span>Tabela CRUD Rating</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/quality';?>"><span>Tabela CRUD Qualidade</span></a></li>
    </ul>

    <div id="content-wrapper">

        <div class="row">
            <div class="col-md-6">
                <h1 align="center">Edit Profile</h1>
            </div>
        </div>

        <hr>

        <div class="row">

            <div class="col-md-2"></div>

            <!-- left column -->
            <div class="col-md-2">
                <div class="text-center">
                    <img src="//placehold.it/100" class="rounded-circle" alt="avatar">
                    <h6><br>Upload a different photo...</h6>
                    <br>
                    <input type="file" class="form-control" style="line-height: 18px;">
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-6 personal-info">
                <div class="col-md-8">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>
                        <i class="fa fa-coffee"></i>This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                </div>

                <h3>Personal info</h3>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="Jane">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="Bishop">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="janesemail@gmail.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" value="11111122333">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" value="11111122333">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8" align="right">
                            <input type="button" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
