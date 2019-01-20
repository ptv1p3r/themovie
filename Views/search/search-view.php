<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 19/01/2019
 * Time: 14:09
 */
?>

<?php
$movieCategories = $modelo->getCategories();
$movieYears = $modelo->getYears();
?>

<!-- Search -->
<div class="container" style="margin-top:30px">
    <div class="row justify-content-center">
        <div class="col-auto">
            <input style="width: 485px" type="text" class="form-control" id="" placeholder="Search">
        </div>
    </div>
</div>

<!-- Filters -->
<div class="container" style="margin-top:30px">
    <div class="row justify-content-center">
        <!-- Video Quality -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Quality</button>
                <div class="dropdown-menu">
                    <span class="dropdown-item" >480p</span>
                    <span class="dropdown-item" >720p</span>
                    <span class="dropdown-item" >1080p</span>
                </div>
            </div>
        </div>

        <!-- Video Genere -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Genere</button>
                <div class="dropdown-menu">

                    <?php foreach ($movieCategories as $category) { ?>
                        <span class="dropdown-item" ><?php echo $category["name"]?></span>
                    <?php }?>

                </div>
            </div>
        </div>

        <!-- Video Rating -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Rating</button>
                <div class="dropdown-menu">
                    <?php for ($i = 0 ; $i < 5 ; $i++) { ?>
                        <span class="dropdown-item" ><?php echo $i . " - " . ($i+1);?></span>
                    <?php }?>
                </div>
            </div>
        </div>

        <!-- Video Year -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Year</button>
                <div class="dropdown-menu">
                    <?php foreach ($movieYears as $year) { ?>
                        <span class="dropdown-item" ><?php echo $year["year"]?></span>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Movies -->
<div class="container" style="margin-top:30px">
    <!-- Upper Pagination -->
    <div class="row justify-content-center">
        <ul class="pagination justify-content-center" style="margin:30px">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>

    <!-- Movies -->
    <div class="row justify-content-center border-0">
        <table border="1" cellpadding="5" cellspacing="5" style=" width: 500px">
            <tr>
                <?php for ($i = 0 ; $i < 6 ; $i++) { ?>
                    <td align="center">
                        <img src="../../Images/movie1.PNG" height="256" width="192">
                        <p style="margin: 0" align="left">Title<br>2018</p>
                        <a href="#">Detail</a>
                    </td>
                <?php } ?>
            </tr>

            <tr>
                <?php for ($i = 0 ; $i < 6 ; $i++) { ?>
                    <td align="center">
                        <img src="../../Images/movie1.PNG" height="256" width="192">
                        <p style="margin: 0" align="left">Title<br>2018</p>
                        <a href="#">Detail</a>
                    </td>
                <?php } ?>
            </tr>
        </table>
    </div>

    <!-- Lower Pagination -->
    <div class="row justify-content-center">
        <ul class="pagination justify-content-center" style="margin:30px">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
</div>

<br>