<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:14
 */

include "../_includes/header.php"
?>

<div class="container">

    <div class="row  justify-content-center align-items-center" style="margin-top: 100px">
        <img src="../../Images/logo_black.png" alt="">
        <h1 class="text-light">The Real Movie Database</h1>
    </div>

    <div class="row  justify-content-center align-items-center">
        <div class="col-lg-4">
            <div class="jumbotron" style="margin-top: 150px">

                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-success form-control">Login</button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include "../_includes/footer.php"?>