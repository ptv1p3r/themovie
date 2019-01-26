<?php
/**
 * Created by PhpStorm.
 * User: lmore
 * Date: 22/01/2019
 * Time: 22:17
 */

include "../_includes/admin-header.php"
?>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="#"><span>Tabela CRUD Qualidade</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span>Tabela CRUD Coment</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span>Tabela CRUD Categorias</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span>Tabela CRUD Rating</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span>Tabela CRUD Qualidade</span></a></li>
    </ul>

    <div id="content-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<!-- Custom scripts for all pages-->
<script src="../../js/sb-admin.min.js"></script>

<?php include "../_includes/footer.php"?>
