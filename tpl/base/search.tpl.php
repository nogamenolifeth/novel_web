<?php

if(isset($_GET["ajax"])&&$_GET["ajax"]==1){

}
else{
    include("header.tpl.php");
    include("navbar.tpl.php");
}
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-center">ค้นหา</h1>
        <div class="input-group">
            <input type="text" class="form-control" value="<?=$keyword?>" placeholder="กรอกคำค้นหาที่นี่...">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">ค้นหา</button>
            </div>
        </div>
    </div>
</div>
<div class="container search">
    <div class="row">
        <div class="col-md-3">
            <a href="#" class="shadow m-2 block">
                <img src="./@test/img/Cover.png" class="img-fluid">
                <div class="p-2">
                    <h4 class="text-point">Seishun buta yarou series</h4>
                    <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="shadow m-2 block">
                <img src="./@test/img/Cover.png" class="img-fluid">
                <div class="p-2">
                    <h4 class="text-point">Seishun buta yarou series</h4>
                    <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="shadow m-2 block">
                <img src="./@test/img/Cover.png" class="img-fluid">
                <div class="p-2">
                    <h4 class="text-point">Seishun buta yarou series</h4>
                    <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="shadow m-2 block">
                <img src="./@test/img/Cover.png" class="img-fluid">
                <div class="p-2">
                    <h4 class="text-point">Seishun buta yarou series</h4>
                    <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="shadow m-2 block">
                <img src="./@test/img/Cover.png" class="img-fluid">
                <div class="p-2">
                    <h4 class="text-point">Seishun buta yarou series</h4>
                    <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="shadow m-2 block">
                <img src="./@test/img/Cover.png" class="img-fluid">
                <div class="p-2">
                    <h4 class="text-point">Seishun buta yarou series</h4>
                    <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="shadow m-2 block">
                <img src="./@test/img/Cover.png" class="img-fluid">
                <div class="p-2">
                    <h4 class="text-point">Seishun buta yarou series</h4>
                    <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
                </div>
            </a>
        </div>
    </div>
</div>
<?php
if(isset($_GET["ajax"])&&$_GET["ajax"]==1){

}
else{
    include("footer.tpl.php");
}
?>