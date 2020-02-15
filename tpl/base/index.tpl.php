<?php

//Render header
include("header.tpl.php");
//Render navbar
include("navbar.tpl.php");
?>

<div class="owl-carousel owl-theme" id="banner">
    <img src="./@test/img/1.jpg" class="img-fluid">
    <img src="./@test/img/2.jpg" class="img-fluid">
    <img src="./@test/img/3.jpg" class="img-fluid">
</div>

<div class="container">
    <h3 class="mt-3 inline-flex">นิยาย Top vote</h3>
    <div class="btn-group mt-3 float-right" role="group">
        <button type="button" class="btn btn-secondary" id="voteprev1"><</button>
        <button type="button" class="btn btn-secondary" id="votenext1">></button>
    </div>
    <div class="owl-carousel owl-theme listtype1" id="list1">
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
    </div>

    <h3 class="mt-5 inline-flex">นิยาย Top vote</h3>
    <div class="btn-group mt-5 float-right" role="group">
        <button type="button" class="btn btn-secondary" id="voteprev2"><</button>
        <button type="button" class="btn btn-secondary" id="votenext2">></button>
    </div>
    <div class="owl-carousel owl-theme listtype1" id="list2">
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
        <a class="shadow" href="#">
            <div>
                <img src="./@test/img/Cover.png">
                <h4 class="text-point">Seishun buta yarou series</h4>
                <h5 class="text-muted text-point">นิยาย Sci-fi</h5>
            </div>
        </a>
    </div>

    <h3 class="mt-5">นิยาย Update ล่าสุด</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped listtype2">
            <thead>
                <tr>
                <th>ปก</th>
                <th col="3">ชื่อตอน</th>
                <th col="2">วันที่ลง</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="./@test/img/Cover.png">
                    </td>
                    <td>
                        <p>
                            Seishun buta yarou series <br>
                            <a href="#">ตอนที่ 1</a>
                        </p>
                    </td>
                    <td>วันที่ 15 กุมพาพันธ์ 2563</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<?php
$extra .= '
<link rel="stylesheet" href="tpl/base/resources/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="tpl/base/resources/owlcarousel/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="tpl/base/resources/owlcarousel/owl.carousel.min.js"></script>
<script>
$("#banner").owlCarousel({
    loop:true,
    margin:10,
    center:true,
    lazyLoad:true,
    items: 2,
})
$("#list1").owlCarousel({
    margin:10,
    nav:true,
    lazyLoad:true,
    items: 5,
    autoHeight:true
})
var owl = $(\'#list1\');
$(\'#votenext1\').click(function() {
    owl.trigger(\'next.owl.carousel\');
})
// Go to the previous item
$(\'#voteprev1\').click(function() {
    // With optional speed parameter
    owl.trigger(\'prev.owl.carousel\', [300]);
})
$("#list2").owlCarousel({
    margin:10,
    nav:true,
    lazyLoad:true,
    items: 5,
    autoHeight:true
})
var owl2 = $(\'#list2\');
$(\'#votenext2\').click(function() {
    owl2.trigger(\'next.owl.carousel\');
})
// Go to the previous item
$(\'#voteprev2\').click(function() {
    // With optional speed parameter
    owl2.trigger(\'prev.owl.carousel\', [300]);
})
</script>
';
include("footer.tpl.php");
?>