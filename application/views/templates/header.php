<!DOCTYPE html>
<html lang="ja" data-loaded="false" data-scrolled="false" data-spmenu="closed">

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, viewport-fit=cover">
    <meta name="robots" content="max-image-preview:large">
    <title><?php echo $title ?? "" ?></title>
    <link rel="canonical" href="https://shine-yoshiki.com/">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/1-1.png">
    <meta property="og:title" content="{{$title ?? config("web.title")}}">
    <meta property="og:description" content="{{$description ?? config('web.description')}}">
    <meta property="og:url" content="{{config('web.url')}}">
    <meta property="og:site_name" content="{{config('web.site_name')}}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="images/cropped-shinerogo2-2-32x32.png" sizes="32x32">
    <link rel="icon" href="images/cropped-shinerogo2-2-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="images/cropped-shinerogo2-2-180x180.png">
    <?php $this->load->view("templates/css") ?>
    <noscript>
        <link href="/css/noscript.css" rel="stylesheet">
    </noscript>
</head>

<body>
<?php $this->load->view("templates/svg") ?>

<div id="body_wrap" class="home page-template-default page -index-off -sidebar-off -frame-off top">
    <div id="sp_menu" class="p-spMenu -left">
        <div class="p-spMenu__inner">
            <div class="p-spMenu__closeBtn">
                <button class="c-iconBtn -menuBtn c-plainBtn" data-onclick="toggleMenu" aria-label="メニューを閉じる">
                    <i class="c-iconBtn__icon icon-close-thin"></i>
                </button>
            </div>
            <div class="p-spMenu__body">
                <div class="c-widget__title -spmenu">
                    MENU </div>
                <div class="p-spMenu__nav">
                    <ul class="c-spnav c-listMenu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a href="https://shine-yoshiki.com/concept/">CONCEPT<span class="c-smallNavTitle desc">SHINEについて</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-431">
                            <a href="https://shine-yoshiki.com#service" aria-current="page">SERVICE<span class="c-smallNavTitle desc">SHINEの特徴</span></a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-432"><a href="https://shine-yoshiki.com/price/">PRICE MENU<span class="c-smallNavTitle desc">料金・メニュー</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-433">
                            <a href="https://shine-yoshiki.com/#bf" aria-current="page">VOICE<span class="c-smallNavTitle desc">お客様の声</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-443"><a href="https://shine-yoshiki.com/beforeafter/">ビフォーアフター</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-442"><a href="https://shine-yoshiki.com/kuchikomi/">ご利用者様の声</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-435">
                            <a href="https://shine-yoshiki.com/#locations" aria-current="page">LOCATIONS<span class="c-smallNavTitle desc">店舗情報</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-444"><a href="https://shine-yoshiki.com/kashiwa/">SHINE柏店</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-445"><a href="https://shine-yoshiki.com/h-ushiku/">SHINE牛久店</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-434">
                            <a href="https://shine-yoshiki.com/#qa" aria-current="page">Q&A<span class="c-smallNavTitle desc">よくある質問</span></a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-436"><a href="https://shine-yoshiki.com/contact/">TRIAL<span class="c-smallNavTitle desc">体験申し込み</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="p-spMenu__overlay c-overlay" data-onclick="toggleMenu"></div>
    </div>
    <header id="header" class="l-header -series -series-right -transparent -t-000" data-spfix="1">
        <div class="l-header__inner l-container">
            <div class="l-header__logo">
                <h1 class="c-headLogo -img"><a href="https://shine-yoshiki.com/" title="SHINE（シャイン）" class="c-headLogo__link" rel="home"><img width="600" height="266" src="images/shinerogo.png" alt="SHINE（シャイン）" class="c-headLogo__img -top" srcset="images/shinerogo.png 600w, images/shinerogo-300x133.png 300w" sizes="(max-width: 959px) 50vw, 800px" decoding="async" loading="eager"><img aria-hidden="true" width="600" height="266" src="images/shinerogo.png" alt class="c-headLogo__img -common" srcset="images/shinerogo.png 600w, images/shinerogo-300x133.png 300w" sizes="(max-width: 959px) 50vw, 800px" loading="lazy"></a></h1>
            </div>
            <nav id="gnav" class="l-header__gnav c-gnavWrap">
                <ul class="c-gnav">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a href="https://shine-yoshiki.com/concept/"><span class="ttl">CONCEPT</span><span class="c-smallNavTitle desc">SHINEについて</span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-431">
                        <a href="https://shine-yoshiki.com#service" aria-current="page"><span class="ttl">SERVICE</span><span class="c-smallNavTitle desc">SHINEの特徴</span></a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-432"><a href="https://shine-yoshiki.com/price/"><span class="ttl">PRICE MENU</span><span class="c-smallNavTitle desc">料金・メニュー</span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-433">
                        <a href="https://shine-yoshiki.com/#bf" aria-current="page"><span class="ttl">VOICE</span><span class="c-smallNavTitle desc">お客様の声</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-443"><a href="https://shine-yoshiki.com/beforeafter/"><span class="ttl">ビフォーアフター</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-442"><a href="https://shine-yoshiki.com/kuchikomi/"><span class="ttl">ご利用者様の声</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-435">
                        <a href="https://shine-yoshiki.com/#locations" aria-current="page"><span class="ttl">LOCATIONS</span><span class="c-smallNavTitle desc">店舗情報</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-444"><a href="https://shine-yoshiki.com/kashiwa/"><span class="ttl">SHINE柏店</span></a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-445"><a href="https://shine-yoshiki.com/h-ushiku/"><span class="ttl">SHINE牛久店</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-434">
                        <a href="https://shine-yoshiki.com/#qa" aria-current="page"><span class="ttl">Q&A</span><span class="c-smallNavTitle desc">よくある質問</span></a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-436"><a href="https://shine-yoshiki.com/contact/"><span class="ttl">TRIAL</span><span class="c-smallNavTitle desc">体験申し込み</span></a></li>
                </ul>
            </nav>
            <div class="l-header__customBtn sp_">
            </div>
            <div class="l-header__menuBtn sp_">
                <button class="c-iconBtn -menuBtn c-plainBtn" data-onclick="toggleMenu" aria-label="メニューボタン">
                    <i class="c-iconBtn__icon icon-menu-thin"></i>
                </button>
            </div>
        </div>
    </header>
    <div id="main_visual" class="p-mainVisual -type-single -height-img">
        <div class="p-mainVisual__inner">

            <div class="p-mainVisual__slide c-filterLayer -nofilter">
                <picture class="p-mainVisual__imgLayer c-filterLayer__img">
                    <source width="1200" height="1240" media="(max-width: 959px)" sizes="100vw"
                        srcset="images/sp_kv_W1200-1.jpg 1200w, images/sp_kv_W1200-1-290x300.jpg 290w, images/sp_kv_W1200-1-991x1024.jpg 991w, images/sp_kv_W1200-1-768x794.jpg 768w">
                    <img width="1900" height="1120" src="images/pc_kv_W1900-1.jpg" alt class="p-mainVisual__img"
                        srcset="images/pc_kv_W1900-1.jpg 1900w, images/pc_kv_W1900-1-300x177.jpg 300w, images/pc_kv_W1900-1-1024x604.jpg 1024w, images/pc_kv_W1900-1-768x453.jpg 768w, images/pc_kv_W1900-1-1536x905.jpg 1536w"
                        sizes="(max-width: 1900px) 100vw, 1900px" decoding="async"> </picture>
                <div class="p-mainVisual__textLayer l-parent l-container u-ta-r"
                    style="color:#000000;text-shadow:1px 1px 0px rgba(0, 0, 0, 0.2 )">
                </div>
            </div>
        </div>
    </div>
    