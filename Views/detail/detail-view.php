<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 19/01/2019
 * Time: 12:47
 */
?>
<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="container-fluid" style="margin-top:30px">
    <div class="row">
        <!-- Movie Picture -->
        <div class="card" style="margin:10px auto;width: 200px;height: 300px">
                <img class="card-img-top" src="<?php echo $movieData[0]["poster"]; ?>" alt="<?php echo $movieData[0]["title"]; ?>">
        </div>

        <!-- Movie Info -->
        <div class="col-sm-3">
            <br>
            <div class="text-light">In: <i>720p.BlueRay, 1080p.Web</i></div>

            <br style="line-height: 160px">

            <p class="text-muted"><i>Downloaded <?php echo $movieData[0]["download_count"];?> times</i></p>
            <p class="text-muted"><i><?php echo $movieData[0]["update_timestamp"];?></i></p>
        </div>

        <!-- Synopsis-->
        <div class="col-sm-6">
            <div class="text-light"><h1><?php echo $movieData[0]["title"];?></h1></div>
            <div class="text-light"><h2><?php echo $movieData[0]["year"];?></h2></div>
            <div class="text-light"><h3><?php echo $categories;?></h3></div>
            <br>
            <div class="text-light"><h5>Synopsis</h5></div>
            <div><p class="text-justify text-muted"><?php echo $movieData[0]["description"];?></p></div>
        </div>

    </div>
</div>
<div class="container-fluid" style="margin-top:30px">
    <div class="row">
        <!-- Trailer -->
        <div class="col-sm-3 embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item"
                  src="<?php echo $movieData[0]["media"];?>"
                  frameborder="0"
                  allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  <!--allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"-->
           </iframe>
        </div>

        <!-- Picture 1 -->
        <div class="col-sm-3" >
            <img src="<?php echo $movieData[0]["image_1"];?>" alt=""  height="200" width="320">
        </div>

        <!-- Picture 2 -->
        <div class="col-sm-3">
            <img src="<?php echo $movieData[0]["image_2"];?>" alt=""  height="200" width="320">
        </div>

    </div>
</div>

<div class="container" style="margin-top:30px">

    <div class="row justify-content-md-center">
        <!-- Video Quality -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Quality</button>
                <div class="dropdown-menu">
                    <span class="dropdown-item" href="#">Link 1</span>
                    <span class="dropdown-item" href="#">Link 2</span>
                    <span class="dropdown-item" href="#">Link 3</span>
                </div>
            </div>
        </div>

        <!-- Download Link -->
        <div class="form col-md-6">
            <a href="<?php echo HOME_URI ;?>">
                <input class="form-control" type="text" placeholder="Link" readonly>
            </a>
        </div>

    </div>
</div>

<div class="container" style="margin-top:30px">
    <div class="row">
        <!-- Comment Section -->
        <div class="col-md-6">
            <div class="card text-black-50 bg-black post panel-shadow">
                <!-- Comment -->
                <div class="card-header">
                    <!-- User Pic -->
                    <div class="float-left image">
                        <img src="../../Images/user.png" alt="" width="48"
                             height="48">
                    </div>

                    <!-- Username & Post time -->
                    <div class="float-left meta" style="margin-left: 10px">
                        <div class="title h5"><b>Ryan Haywood</b>
                            made a post.</div>
                        <h6 class="text-muted time">1 minute ago</h6>
                    </div>
                </div>

                <!-- Comment -->
                <div class="card-body">
                    <p style="margin: 0">Barton waited twenty always repair in within we do.
                        An delighted offending curiosity my is dashwoods at.
                        Boy prosperous increasing surrounded companions her nor advantages sufficient put.
                        John on time down give meet help as of.</p>
                </div>
            </div>
        </div>

        <!-- Upvote -->
        <div class="col-md-3">
            <img src="../../Images/up.png" class="" alt="" width="256" height="256">
        </div>

        <!-- Downvote -->
        <div class="col-md-3">
            <img src="../../Images/down.png" class="" alt="" width="256" height="256">
        </div>
    </div>

</div>

<br>
