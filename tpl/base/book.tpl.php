<?php

//Render header
include("header.tpl.php");
//Render navbar
include("navbar.tpl.php");

?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-center"><?=$book_data["book_title"]?></h1>
        <hr>
        <h5 class="text-muted text-center">
        หมวดหมู่: 
        <?php
        $i = 0;
        while($data = mysqli_fetch_array($tag)){
            if($i==0){
                echo $data["tag_name"];
                $i++;
            }
            else{
                echo ','.$data["tag_name"];
            }
        }
        ?>
        </h5>
    </div>
</div>
<div class="container search">
    <div class="row">
        <?php
        while($data = mysqli_fetch_array($novel)){
        ?>
            <div class="col-md-3">
                <a href="?module=novel&novel=<?=$data["novel_id"]?>" class="shadow m-2 block">
                    <img src="<?=$data["novel_cover"]?>" class="img-fluid">
                    <div class="p-2">
                        <h4 class="text-point"><?=$data["novel_title"]?></h4>
                        <h5 class="text-muted text-point font-14">นิยาย Sci-fi</h5>
                    </div>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php

include("footer.tpl.php");
?>