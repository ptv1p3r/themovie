<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 19/01/2019
 * Time: 14:09
 */
?>
<form>
<!-- Search -->
<div class="container-fluid" style="margin-top:30px">
    <div class="row justify-content-center">
        <div class="form-group">
            <div class="col-auto">
                <input style="width: 485px" type="text" class="form-control" id="Search" name="Search" placeholder="Search">
            </div>
            <div class="col-auto">
                <button type="submit" id="btnSearch" class="btn btn-success" ">Search</button>
            </div>
        </div>
    </div>
</div>
</form>

<!-- Filters -->
<div class="container-fluid" style="margin-top:30px">
    <div class="row justify-content-center">
        <!-- Video Genere -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Genere</button>
                <div class="dropdown-menu">
                    <?php echo $categories;?>
                </div>
            </div>
        </div>

        <!-- Video Rating -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Rating</button>
                <div class="dropdown-menu">
                    <?php echo $ratings;?>
                </div>
            </div>
        </div>

        <!-- Video Year -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Year</button>
                <div class="dropdown-menu">
                    <?php echo $years;?>
                </div>
            </div>
        </div>
    </div>
</div>

<br>


<!-- Movies -->
<div class="container-fluid" style="margin-top:30px">
    <!-- Upper Pagination -->
    <div class="row justify-content-center">
        <ul class="pagination">
            <?php for ($i = 1; $i <= ceil($movieCount / 8); $i++) { ?>
                    <li class="page-item <?php if ($parametros[0] == $i) {
                        echo "active";
                    } else if ($parametros[0] == null && $i==1) {
                        echo "active";
                    } ?>">
                        <a href="<?php echo HOME_URI . '/search/' . $i; ?>" class="page-link"><?php echo $i ?></a></li>
            <?php }?>
        </ul>
    </div>

    <br>
    <br>

    <!-- Movies -->
    <div class="container-fluid">
<!--        <div class="row justify-content-center border-0">-->
            <div class="row " style="margin-bottom: 10%">
                <?php if (count($moviesTable) <= 4) {
                    for ($i = 0; $i < count($moviesTable); $i++) { ?>
                        <div class="card" style="margin:10px auto;width: 200px;height: 300px">
                            <a href="<?php echo HOME_URI . '/detail/view/' . $moviesTable[$i]["movid"]; ?>">
                                <img class="card-img-top" src="<?php echo $moviesTable[$i]["poster"]; ?>"
                                     alt="<?php echo $moviesTable[$i]["title"]; ?>">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-white"><?php echo $moviesTable[$i]["title"]; ?></h5>
                                <p class="card-text text-muted"><?php echo $moviesTable[$i]["year"]; ?></p>
                                <a href="<?php echo HOME_URI . '/detail/view/' . $moviesTable[$i]["movid"]; ?>"
                                    class="btn btn-success">Detail</a>
                            </div>
                        </div>
                    <?php } ?>

                <?php } else {
                    for ($i = 0; $i < count($moviesTable); $i++) { ?>
                            <div class="card" style="margin:10px auto;width: 200px;height: 300px">
                                <a href="<?php echo HOME_URI . '/detail/view/' . $moviesTable[$i]["movid"]; ?>">
                                    <img class="card-img-top" src="<?php echo $moviesTable[$i]["poster"]; ?>"
                                         alt="<?php echo $moviesTable[$i]["title"]; ?>">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-white"><?php echo $moviesTable[$i]["title"]; ?></h5>
                                    <p class="card-text text-muted"><?php echo $moviesTable[$i]["year"]; ?></p>
                                    <a href="<?php echo HOME_URI . '/detail/view/' . $moviesTable[$i]["movid"]; ?>"
                                       class="btn btn-success">Detail</a>
                                </div>
                            </div>

                        <?php if (($i + 1) % 4 == 0) { ?>
                            </div>
                            </div>
                            <div class="container-fluid">
                            <div class="row" style="margin-bottom: 10%;">
                        <?php }
                    }
                }?>
            </div>
<!--        </div>-->
    </div>

    <!-- Lower Pagination -->
<!--    <div class="row justify-content-center">-->
<!--        <ul class="pagination">-->
<!--            --><?php //for ($i = 1; $i <= ceil($movieCount / 8); $i++) { ?>
<!--                <li class="page-item --><?php //if ($parametros[0] == $i) {
//                    echo "active";
//                } else if ($parametros[0] == null && $i==1) {
//                    echo "active";
//                } ?><!--">-->
<!--                    <a href="--><?php //echo HOME_URI . '/search/' . $i; ?><!--" class="page-link">--><?php //echo $i ?><!--</a></li>-->
<!--            --><?php //}?>
<!---->
<!--        </ul>-->
<!--    </div>-->
</div>