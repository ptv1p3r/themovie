<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 19/01/2019
 * Time: 14:09
 */
?>

<!-- Search -->
<div class="container" style="margin-top:30px">
    <div class="row justify-content-center">
        <div class="col-auto">
            <input style="width: 485px" type="text" class="form-control" id="" placeholder="Search">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-success" ">Search</button>
        </div>

    </div>
</div>

<!-- Filters -->
<div class="container-fluid" style="margin-top:30px">
    <div class="row justify-content-center">
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
<div class="container-fluid" style="margin-top:30px">
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
                <?php for ($i = 0 ; $i < 5 ; $i++) { ?> <!-- passar para 6 -->
                    <td align="center">
                        <img src="<?php echo $movies[$i]["poster"]; ?>" height="256" width="192">
                        <p style="margin: 0" align="left"><?php echo $movies[$i]["title"] . "<br>" . $movies[$i]["year"]; ?></p>
                        <a href="<?php echo HOME_URI . '/detail/view/' . $movies[$i]["movid"];?>">Detail</a>
                    </td>
                <?php } ?>
            </tr>

            <tr>
                <?php for ($i = 0 ; $i < 5 ; $i++) { ?> <!-- passar para 6 -->
                    <td align="center">
                        <img src="<?php echo $movies[$i]["poster"]; ?>" height="256" width="192">
                        <p style="margin: 0" align="left"><?php echo $movies[$i]["title"] . "<br>" . $movies[$i]["year"]; ?></p>
                        <a href="<?php echo HOME_URI . '/detail/view/' . $movies[$i]["movid"];?>">Detail</a>
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