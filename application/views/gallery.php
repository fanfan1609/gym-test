<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Gallery</h2>
                    <div class="bt-option">
                        <a href="./index.html">Home</a>
                        <a href="#">Pages</a>
                        <span>Gallery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Gallery Section Begin -->
<div class="gallery-section gallery-page">
    <div class="gallery">
        <div class="grid-sizer"></div>
        <?php for($i = 1; $i <= 20; $i++):?>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-<?=$i?>.webp">
                <a href="img/gallery/gallery-<?=$i?>.webp" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        <?php endfor?>
    </div>
</div>
<!-- Gallery Section End -->

<?php
$this->load->view('templates/in_touch');
?>