<footer id="footer" class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__foot">
            <div class="l-container">
                <ul class="l-footer__nav">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1401"><a href="https://shine-yoshiki.com/contact2/">お問い合わせ</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-639"><a href="https://shine-yoshiki.com/privacy/">プライバシーポリシー</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-882"><a href="https://shine-yoshiki.com/company/">会社概要</a></li>
                </ul>
                <p class="copyright">
                    <span lang="en">©</span>
                    SHINE（シャイン）.
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="p-fixBtnWrap">

    <button id="pagetop" class="c-fixBtn c-plainBtn hov-bg-main" data-onclick="pageTop" aria-label="ページトップボタン" data-has-text>
        <i class="c-fixBtn__icon icon-chevron-up" role="presentation"></i>
    </button>
</div>

<div id="search_modal" class="c-modal p-searchModal">
    <div class="c-overlay" data-onclick="toggleSearch"></div>
    <div class="p-searchModal__inner">
        <form role="search" method="get" class="c-searchForm" action="https://shine-yoshiki.com/">
            <input type="text" value name="s" class="c-searchForm__s s" placeholder="検索" aria-label="検索ワード">
            <button type="submit" class="c-searchForm__submit icon-search hov-opacity u-bg-main" value="search" aria-label="検索を実行する"></button>
        </form>
        <button class="c-modal__close c-plainBtn" data-onclick="toggleSearch">
            <i class="icon-batsu"></i> 閉じる </button>
    </div>
</div>
</div> <!--/ #all_wrapp-->
<div class="l-scrollObserver" aria-hidden="true"></div>
<?php $this->load->view('templates/js') ?>
</body>

</html>