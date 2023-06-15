<!DOCTYPE html>
<html lang="ja" data-loaded="false" data-scrolled="false" data-spmenu="closed">

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, viewport-fit=cover">
    <meta name="robots" content="max-image-preview:large">
    <title><?php echo $title ?? "" ?></title>
    <link rel="canonical" href="http://buzzlifegym.main.jp/">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/1-1.png">
    <meta property="og:title" content="<?php echo $title ?? "" ?>">
    <meta property="og:description" content="<?php echo $description ?? "" ?>">
    <meta property="og:url" content="http://buzzlifegym.main.jp/">
    <meta property="og:site_name" content="<?php echo $title ?? "Buzz" ?>">
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
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a href="/concept/">CONCEPT<span class="c-smallNavTitle desc">SHINEについて</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-431">
                                <a href="#service">SERVICE<span class="c-smallNavTitle desc">SHINEの特徴</span></a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-432">
                                <a href="/price/" aria-current="page">PRICE MENU<span class="c-smallNavTitle desc">料金・メニュー</span></a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-433">
                                <a href="/#bf">VOICE<span class="c-smallNavTitle desc">お客様の声</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-443"><a href="/beforeafter/">ビフォーアフター</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-442"><a href="/kuchikomi/">ご利用者様の声</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-435">
                                <a href="/#locations">LOCATIONS<span class="c-smallNavTitle desc">店舗情報</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-444"><a href="/kashiwa/">SHINE柏店</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-445"><a href="/h-ushiku/">SHINE牛久店</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-434">
                                <a href="/#qa">Q&A<span class="c-smallNavTitle desc">よくある質問</span></a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-436"><a href="/contact/">TRIAL<span class="c-smallNavTitle desc">体験申し込み</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-spMenu__overlay c-overlay" data-onclick="toggleMenu"></div>
        </div>
        <header id="header" class="l-header -series -series-right" data-spfix="1">
            <div class="l-header__inner l-container">
                <div class="l-header__logo">
                    <div class="c-headLogo -img"><a href="/" title="SHINE（シャイン）" class="c-headLogo__link" rel="home"><img width="600" height="266" src="images/shinerogo.png" alt="SHINE（シャイン）" class="c-headLogo__img" srcset="images/shinerogo.png 600w, images/shinerogo-300x133.png 300w" sizes="(max-width: 959px) 50vw, 800px" decoding="async" loading="eager"></a></div>
                </div>
                <nav id="gnav" class="l-header__gnav c-gnavWrap">
                    <ul class="c-gnav">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a href="/concept/"><span class="ttl">CONCEPT</span><span class="c-smallNavTitle desc">SHINEについて</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-431">
                            <a href="#service"><span class="ttl">SERVICE</span><span class="c-smallNavTitle desc">SHINEの特徴</span></a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-432">
                            <a href="/price/" aria-current="page"><span class="ttl">PRICE
                                    MENU</span><span class="c-smallNavTitle desc">料金・メニュー</span></a>
                        </li>
                        
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-436"><a href="/contact/"><span class="ttl">TRIAL</span><span class="c-smallNavTitle desc">体験申し込み</span></a></li>
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
        <div id="fix_header" class="l-fixHeader -series -series-right">
            <div class="l-fixHeader__inner l-container">
                <div class="l-fixHeader__logo">
                    <div class="c-headLogo -img"><a href="/" title="BuzzLife" class="c-headLogo__link" rel="home"><img width="600" height="266" src="images/shinerogo.png" alt="SHINE（シャイン）" class="c-headLogo__img" srcset="images/shinerogo.png 600w, images/shinerogo-300x133.png 300w" sizes="(max-width: 959px) 50vw, 800px" decoding="async" loading="eager"></a></div>
                </div>
                <div class="l-fixHeader__gnav c-gnavWrap">
                    <ul class="c-gnav">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a href="/concept/"><span class="ttl">CONCEPT</span><span class="c-smallNavTitle desc">SHINEについて</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-431">
                            <a href="#service"><span class="ttl">SERVICE</span><span class="c-smallNavTitle desc">SHINEの特徴</span></a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-432">
                            <a href="/price/" aria-current="page"><span class="ttl">PRICE
                                    MENU</span><span class="c-smallNavTitle desc">料金・メニュー</span></a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-433">
                            <a href="/#bf"><span class="ttl">VOICE</span><span class="c-smallNavTitle desc">お客様の声</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-443"><a href="/beforeafter/"><span class="ttl">ビフォーアフター</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-442"><a href="/kuchikomi/"><span class="ttl">ご利用者様の声</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-435">
                            <a href="/#locations"><span class="ttl">LOCATIONS</span><span class="c-smallNavTitle desc">店舗情報</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-444"><a href="/kashiwa/"><span class="ttl">SHINE柏店</span></a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-445"><a href="/h-ushiku/"><span class="ttl">SHINE牛久店</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-434">
                            <a href="/#qa"><span class="ttl">Q&A</span><span class="c-smallNavTitle desc">よくある質問</span></a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-436"><a href="/contact/"><span class="ttl">TRIAL</span><span class="c-smallNavTitle desc">体験申し込み</span></a></li>
                    </ul>
                </div>
            </div>
        </div>