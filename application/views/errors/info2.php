<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stuck With You - SenNovel</title>
    <link href="<?= base_url('templates/css/bootstrap.min.css');?>" rel="stylesheet">
    <style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="https://manhuadex.com/wp-includes/css/dist/block-library/style.min.css?ver=5.8.1" type="text/css" media="all">
    <style id="wp-block-library-theme-inline-css" type="text/css">
    #start-resizable-editor-section{
        display:none;
    }
    .wp-block-audio figcaption{
        color:#555;
        font-size:13px;
        text-align:center;
    }
    .is-dark-theme .wp-block-audio figcaption{
        color:hsla(0,0%,100%,.65);
    }
    .wp-block-code{
        font-family:Menlo,Consolas,monaco,monospace;
        color:#1e1e1e;
        padding:.8em 1em;
        border:1px solid #ddd;
        border-radius:4px;
    }
    .wp-block-embed figcaption{
        color:#555;
        font-size:13px;
        text-align:center;
    }
    .is-dark-theme .wp-block-embed figcaption{
        color:hsla(0,0%,100%,.65);
    }
    .blocks-gallery-caption{
        color:#555;
        font-size:13px;
        text-align:center;
    }
    .is-dark-theme .blocks-gallery-caption{
        color:hsla(0,0%,100%,.65);
    }
    .wp-block-image figcaption{
        color:#555;
        font-size:13px;
        text-align:center;
    }
    .is-dark-theme .wp-block-image figcaption{
        color:hsla(0,0%,100%,.65);
    }
    .wp-block-pullquote{
        border-top:4px solid;
        border-bottom:4px solid;
        margin-bottom:1.75em;
        color:currentColor;
    }
    .wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{
        color:currentColor;
        text-transform:uppercase;
        font-size:.8125em;
        font-style:normal;
    }
    .wp-block-quote{
        border-left:.25em solid;
        margin:0 0 1.75em;
        padding-left:1em;
    }
    .wp-block-quote cite,.wp-block-quote footer{
        color:currentColor;
        font-size:.8125em;
        position:relative;
        font-style:normal;
    }
    .wp-block-quote.has-text-align-right{
        border-left:none;
        border-right:.25em solid;
        padding-left:0;
        padding-right:1em;
    }
    .wp-block-quote.has-text-align-center{
        border:none;
        padding-left:0;
    }
    .wp-block-quote.is-large,.wp-block-quote.is-style-large{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-group.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto;opacity:.4}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{padding:.5em;border:1px solid;word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}#end-resizable-editor-section{display:none}
    </style>
    <link rel="stylesheet" id="ct-shortcode-css" href="https://manhuadex.com/wp-content/plugins/madara-shortcodes/shortcodes/css/shortcodes.css?ver=5.8.1" type="text/css" media="all">
    <link rel="stylesheet" id="fontawesome-css" href="https://manhuadex.com/wp-content/themes/madara/app/lib/fontawesome/web-fonts-with-css/css/all.min.css?ver=5.2.0" type="text/css" media="all">
    <link rel="stylesheet" id="ionicons-css" href="https://manhuadex.com/wp-content/themes/madara/css/fonts/ionicons/css/ionicons.min.css?ver=4.3.3" type="text/css" media="all">
    <link rel="stylesheet" id="madara-icons-css" href="https://manhuadex.com/wp-content/themes/madara/css/fonts/ct-icon/ct-icon.css?ver=5.8.1" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="https://manhuadex.com/wp-content/themes/madara/css/bootstrap.min.css?ver=4.3.1" type="text/css" media="all">
    <link rel="stylesheet" id="slick-css" href="https://manhuadex.com/wp-content/themes/madara/js/slick/slick.css?ver=5.8.1" type="text/css" media="all">
    <link rel="stylesheet" id="slick-theme-css" href="https://manhuadex.com/wp-content/themes/madara/js/slick/slick-theme.css?ver=5.8.1" type="text/css" media="all">
    <link rel="stylesheet" id="loaders-css" href="https://manhuadex.com/wp-content/themes/madara/css/loaders.min.css?ver=5.8.1" type="text/css" media="all">
    <link rel="stylesheet" id="madara-css-css" href="https://manhuadex.com/wp-content/themes/madara/style.css?ver=5.8.1" type="text/css" media="all">
    <style id="madara-css-inline-css" type="text/css">
    .c-blog__heading.style-2 i {
                            background: -webkit-linear-gradient(left, #000000 40%,#000000);
                            background: -o-linear-gradient(right, #000000 40%,#000000);
                            background: -moz-linear-gradient(right, #000000 40%,#000000);
                            background: linear-gradient(to right, #000000 40%,#000000);
                        ;}.c-blog__heading.style-2 i:after, .settings-page .nav-tabs-wrap ul.nav-tabs li.active:after { border-left-color: #000000 ; }.site-header .main-navigation.style-1, .widget-heading, .widget.background:after, .c-blog__heading.style-2 i, .tab-wrap .c-nav-tabs ul.c-tabs-content li.active a:after, .tab-wrap .c-nav-tabs ul.c-tabs-content li:hover a:after, .tab-wrap .c-nav-tabs ul.c-tabs-content li a:after, .related-heading.font-nav, .c-blog__heading.style-3, .settings-page .nav-tabs-wrap ul.nav-tabs li.active a, .off-canvas {
                            background: -webkit-linear-gradient(left, #000000 40%,#000000);
                            background: -o-linear-gradient(right, #000000 40%,#000000);
                            background: -moz-linear-gradient(right, #000000 40%,#000000);
                            background: linear-gradient(to right, #000000 40%,#000000);
                        ;}.widget-heading:after, .related-heading.font-nav:after, .genres_wrap .c-blog__heading.style-3.active:after { border-top-color: #000000 ;}body.modal-open .modal .modal-content a:hover, .tab-wrap .c-nav-tabs ul.c-tabs-content li.active a, .tab-wrap .c-nav-tabs ul.c-tabs-content li:hover a, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item .summary-content:not(.release-year) a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item .summary-content.release-year a:hover, .c-blog-post .entry-header .entry-meta .post-on:before, .manga-slider .slider__container .slick-dots li.slick-active button:before, .manga-slider .slider__container .slick-dots li button:hover:before, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .count-comment .action_icon a i, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .add-bookmark .action_icon a i, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .count-comment .action_detail a i, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .add-bookmark .action_detail a i, body.manga-page .profile-manga .post-title a, body.manga-page .content-readmore:hover, body.text-ui-light.manga-page .content-readmore:hover, .genres_wrap .genres__collapse .genres ul li a:hover, .genres_wrap .genres__collapse .genres ul li a:hover:before, .c-blog-post .entry-header .entry-meta .post-on .posted-on a:hover, body.search .c-search-header__wrapper #search-advanced .search-advanced-form .form-group.checkbox-group .checkbox label:hover, .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu, .c-btn.c-btn_style-2, body.search .c-search-header__wrapper .search-content .btn-search-adv, body.reading-manga .entry-header .entry-header_wrap .action-icon ul li a, body.reading-manga .c-select-bottom .entry-header_wrap .action-icon ul li a, .widget.c-released .released-item-wrap ul.list-released li a:hover, body.manga-page .profile-manga .post-title h1, .genres_wrap .genres__collapse #genres ul li:hover a, .genres_wrap .genres__collapse #genres ul li:hover a:before, input[type=checkbox]:checked + label:before, input[type=radio]:checked + label:before, .genres_wrap a.btn-genres, .c-breadcrumb .breadcrumb li a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item.mg_genres .summary-content, body.page .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .vol a:hover, #hover-infor .item_thumb .post-title a, body.manga-page .version-chap:before, body.manga-page .content-readmore:hover, body.manga-page .chapter-readmore:hover, .icon-load-info, .c-blog-post .entry-header .entry-meta .post-on .c-blog__date .post-category a:hover, .woocommerce ul.products li.product .price, .woocommerce div.entry-summary p.price, .woocommerce div.entry-summary form.cart .variations .label, .woocommerce div.entry-summary form.cart .quantity-text, .widget_product_categories .product-categories li a:hover, .woocommerce ul.products li.product h2:hover, .woocommerce .c-woo-breadcrumb a:hover, .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item .c-user_menu a:hover, .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li:hover > a, .settings-page .action i.ion-ios-close:hover:before, .settings-page .list-chapter .chapter-item a:hover, .settings-page .tabs-content-wrap .tab-group-item .tab-item .history-content .item-infor .chapter span a, .settings-page .nav-tabs-wrap ul.nav-tabs li:not(.active):hover a, .main-color,
    .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li.menu-item-has-children.active > a,.woocommerce .woocommerce-ordering:after,.text-ui-light .widget.c-popular .popular-item-wrap .popular-content .chapter-item .chapter a:hover, body.text-ui-light .settings-page .list-chapter .chapter-item .chapter a:hover,body.search.text-ui-light .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-meta .latest-chap .chapter a:hover			{ color: #000000 ;}.c-blog__heading.style-2 i:after{border-right-color:#000000 !important}body.page.text-ui-light .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .chapter a:hover, .text-ui-light .widget.c-popular .popular-item-wrap .popular-content .chapter-item .chapter a:hover,#hover-infor .item_thumb .post-title a{color: #FFFFFF}.navigation-ajax .load-ajax:not(.show-loading):hover, .listing-chapters_wrap .has-child .wp-manga-chapter:before, .c-wg-button-wrap .btn:hover, body.manga-page .page-content-listing.single-page .listing-chapters_wrap ul.main.version-chap .wp-manga-chapter:before, .site-header .search-main-menu form input[type=submit], .form-submit input[type=submit], #comments.comments-area #respond.comment-respond .comment-form .form-submit #submit, .c-btn.c-btn_style-1, .settings-page input[type="submit"], .settings-page .remove-all #delete-bookmark-manga, body.manga-page .page-content-listing.single-page .listing-chapters_wrap > ul.main.version-chap li .wp-manga-chapter:before, .woocommerce ul.products li.product .button, .woocommerce span.onsale, .woocommerce .widget_price_filter .price_slider_amount .button:not(:hover), .woocommerce .woocommerce-pagination .page-numbers li span.current, .woocommerce .woocommerce-pagination .page-numbers li .prev:hover, .woocommerce .woocommerce-pagination .page-numbers li .next:hover, .woocommerce div.entry-summary form.cart .single_add_to_cart_button { background: #000000 ;}.navigation-ajax .load-ajax:not(.show-loading):hover, .popular-slider .slider__container .slider__item .slider__content .slider__content_item .chapter-item .chapter a:hover, body.search .c-search-header__wrapper .search-content .btn-search-adv.collapsed, .c-btn.c-btn_style-2, body.search .c-search-header__wrapper .search-content .btn-search-adv, .genres_wrap a.btn-genres, .wpcf7-validation-errors, .text-ui-light.woocommerce-page input[type="text"]:focus, .text-ui-light.woocommerce-page input[type="email"]:focus, .text-ui-light.woocommerce-page input[type="search"]:focus, .text-ui-light.woocommerce-page input[type="url"]:focus, .text-ui-light.woocommerce-page input[type="password"]:focus, .text-ui-light.woocommerce-page input[type="tel"]:focus, .text-ui-light.woocommerce-page .input-text:focus, .text-ui-light.woocommerce-page input[type="text"]:active, .text-ui-light.woocommerce-page input[type="email"]:active, .text-ui-light.woocommerce-page input[type="search"]:active, .text-ui-light.woocommerce-page input[type="url"]:active, .text-ui-light.woocommerce-page input[type="password"]:active, .text-ui-light.woocommerce-page input[type="tel"]:active, .text-ui-light.woocommerce-page .input-text:active, .text-ui-light.woocommerce-page input[type="text"]:hover, .text-ui-light.woocommerce-page input[type="email"]:hover, .text-ui-light.woocommerce-page input[type="search"]:hover, .text-ui-light.woocommerce-page input[type="url"]:hover, .text-ui-light.woocommerce-page input[type="password"]:hover, .text-ui-light.woocommerce-page input[type="tel"]:hover, .text-ui-light.woocommerce-page .input-text:hover, .text-ui-light.woocommerce-page select.orderby:hover  { border-color: #000000 ;}.site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list > li.menu-item-has-children > ul.sub-menu, .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item .c-user_menu { border-bottom-color: #000000 ;}.widget.widget_tag_cloud .tag-cloud-link:hover, body.page .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .chapter:hover, .popular-slider .slider__container .slider__item .slider__content .slider__content_item .chapter-item .chapter a:hover, .widget.c-popular .popular-item-wrap .popular-content .chapter-item .chapter:hover, .site-footer .top-footer .wrap_social_account ul.social_account__item li a, .site-content .main-col .item-tags ul li a:hover, .popular-slider .slider__container .slick-arrow:hover, .widget.background.widget_tag_cloud .tag-cloud-link:hover, .wp-pagenavi a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-meta .latest-chap .chapter:hover, .go-to-top:hover, .widget.c-popular .widget-view-more, body.search .c-search-header__wrapper .search-content .search-form .search-submit, body.reading-manga .entry-header .select-pagination .nav-links .nav-next a:not(:hover), body.reading-manga .c-select-bottom .select-pagination .nav-links .nav-next a:not(:hover), body.reading-manga .entry-header .entry-header_wrap .action-icon ul li:hover a, body.reading-manga .c-select-bottom .entry-header_wrap .action-icon ul li:hover a, .widget.c-released .released-search form [type="submit"], body.manga-page .profile-manga .tab-summary .loader-inner > div, .wpcf7-submit, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .woocommerce-cart-form .cart button.button, .woocommerce .cart input.button:not(:hover), #adult_modal .modal-footer .btn.btn-primary:not(:hover), body.reading-manga .entry-header .select-pagination .nav-links > * a, body.reading-manga .c-select-bottom .select-pagination .nav-links > * a, .settings-page .list-chapter .chapter-item .chapter:hover, body.modal-open .modal .modal-content .modal-body .login .submit .wp-submit:not(:hover), .settings-page .tabs-content-wrap .my_account_orders a.button.view, .main-bg, #madara-comments.comments-area #respond.comment-respond .comment-form .form-submit #submit, body.search .c-search-header__wrapper .search-content .btn-search-adv { background-color: #000000 ;}:root{ --madara-main-color: #000000}body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-meta .latest-chap .chapter:hover a, .wp-pagenavi a:hover{color:#FFF !important}
                #pageloader.spinners{
                    position:fixed;
                    top:0;
                    left:0;
                    width:100%;
                    height:100%;
                    z-index:99999;
                    background:#222
                }
            
                p.madara-unyson{
                    color: #FF0000;
                }
            
                .table.table-hover.list-bookmark tr:last-child td{
                    text-align: center;
                }
            #adminmenu .wp-submenu li.current { display: none !important;}.show_tgmpa_version{ float: right; padding: 0em 1.5em 0.5em 0; }.tgmpa > h2{ font-size: 23px; font-weight: 400; line-height: 29px; margin: 0; padding: 9px 15px 4px 0;}.update-php{ width: 100%; height: 98%; min-height: 850px; padding-top: 1px; }.c-blog-post .entry-content .entry-content_wrap .read-container img.alignleft { margin: 10px 30px 10px 0 !important; } .c-blog-post .entry-content .entry-content_wrap .read-container img.alignright { margin: 10px 0px 10px 30px !important; } .read-container i.fas.fa-spinner.fa-spin{ font-size: 31px; color: #888; }.c-blog-post .entry-content .entry-content_wrap .read-container img{ cursor : pointer; }.choose-avatar .loading-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(255, 255, 255, 0.72);
                z-index: 1;
                display: none;
            }

            .choose-avatar .loading-overlay i.fas.fa-spinner {
                font-size: 40px;
                color: #ec3348;
            }

            .choose-avatar .loading-overlay .loading-icon {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
            }

            .choose-avatar.uploading .loading-overlay {
                display: block;
            }.site-header .c-sub-header-nav .entry-header {
                display: none;
                margin-bottom: 15px;
            }

            .site-header .c-sub-header-nav.sticky .entry-header {
                display: block;
            }

            .site-header .c-sub-header-nav.hide-sticky-menu.sticky .c-sub-nav_wrap{
                display:none;
            }
            .site-header .c-sub-header-nav.hide-sticky-menu .entry-header{
                margin-top:15px;
            }
            @media (max-width: 480px) {.c-blog-post .entry-content .entry-content_wrap .reading-content{margin-left:-15px;margin-right:-15px}}
    </style>
    <style id="madara-css-inline-css" type="text/css">
    .c-blog__heading.style-2 i {
                            background: -webkit-linear-gradient(left, #000000 40%,#000000);
                            background: -o-linear-gradient(right, #000000 40%,#000000);
                            background: -moz-linear-gradient(right, #000000 40%,#000000);
                            background: linear-gradient(to right, #000000 40%,#000000);
                        ;}.c-blog__heading.style-2 i:after, .settings-page .nav-tabs-wrap ul.nav-tabs li.active:after { border-left-color: #000000 ; }.site-header .main-navigation.style-1, .widget-heading, .widget.background:after, .c-blog__heading.style-2 i, .tab-wrap .c-nav-tabs ul.c-tabs-content li.active a:after, .tab-wrap .c-nav-tabs ul.c-tabs-content li:hover a:after, .tab-wrap .c-nav-tabs ul.c-tabs-content li a:after, .related-heading.font-nav, .c-blog__heading.style-3, .settings-page .nav-tabs-wrap ul.nav-tabs li.active a, .off-canvas {
                            background: -webkit-linear-gradient(left, #000000 40%,#000000);
                            background: -o-linear-gradient(right, #000000 40%,#000000);
                            background: -moz-linear-gradient(right, #000000 40%,#000000);
                            background: linear-gradient(to right, #000000 40%,#000000);
                        ;}.widget-heading:after, .related-heading.font-nav:after, .genres_wrap .c-blog__heading.style-3.active:after { border-top-color: #000000 ;}body.modal-open .modal .modal-content a:hover, .tab-wrap .c-nav-tabs ul.c-tabs-content li.active a, .tab-wrap .c-nav-tabs ul.c-tabs-content li:hover a, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item .summary-content:not(.release-year) a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item .summary-content.release-year a:hover, .c-blog-post .entry-header .entry-meta .post-on:before, .manga-slider .slider__container .slick-dots li.slick-active button:before, .manga-slider .slider__container .slick-dots li button:hover:before, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .count-comment .action_icon a i, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .add-bookmark .action_icon a i, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .count-comment .action_detail a i, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .add-bookmark .action_detail a i, body.manga-page .profile-manga .post-title a, body.manga-page .content-readmore:hover, body.text-ui-light.manga-page .content-readmore:hover, .genres_wrap .genres__collapse .genres ul li a:hover, .genres_wrap .genres__collapse .genres ul li a:hover:before, .c-blog-post .entry-header .entry-meta .post-on .posted-on a:hover, body.search .c-search-header__wrapper #search-advanced .search-advanced-form .form-group.checkbox-group .checkbox label:hover, .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu, .c-btn.c-btn_style-2, body.search .c-search-header__wrapper .search-content .btn-search-adv, body.reading-manga .entry-header .entry-header_wrap .action-icon ul li a, body.reading-manga .c-select-bottom .entry-header_wrap .action-icon ul li a, .widget.c-released .released-item-wrap ul.list-released li a:hover, body.manga-page .profile-manga .post-title h1, .genres_wrap .genres__collapse #genres ul li:hover a, .genres_wrap .genres__collapse #genres ul li:hover a:before, input[type=checkbox]:checked + label:before, input[type=radio]:checked + label:before, .genres_wrap a.btn-genres, .c-breadcrumb .breadcrumb li a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item.mg_genres .summary-content, body.page .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .vol a:hover, #hover-infor .item_thumb .post-title a, body.manga-page .version-chap:before, body.manga-page .content-readmore:hover, body.manga-page .chapter-readmore:hover, .icon-load-info, .c-blog-post .entry-header .entry-meta .post-on .c-blog__date .post-category a:hover, .woocommerce ul.products li.product .price, .woocommerce div.entry-summary p.price, .woocommerce div.entry-summary form.cart .variations .label, .woocommerce div.entry-summary form.cart .quantity-text, .widget_product_categories .product-categories li a:hover, .woocommerce ul.products li.product h2:hover, .woocommerce .c-woo-breadcrumb a:hover, .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item .c-user_menu a:hover, .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li:hover > a, .settings-page .action i.ion-ios-close:hover:before, .settings-page .list-chapter .chapter-item a:hover, .settings-page .tabs-content-wrap .tab-group-item .tab-item .history-content .item-infor .chapter span a, .settings-page .nav-tabs-wrap ul.nav-tabs li:not(.active):hover a, .main-color,
    .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li.menu-item-has-children.active > a,.woocommerce .woocommerce-ordering:after,.text-ui-light .widget.c-popular .popular-item-wrap .popular-content .chapter-item .chapter a:hover, body.text-ui-light .settings-page .list-chapter .chapter-item .chapter a:hover,body.search.text-ui-light .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-meta .latest-chap .chapter a:hover			{ color: #000000 ;}.c-blog__heading.style-2 i:after{border-right-color:#000000 !important}body.page.text-ui-light .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .chapter a:hover, .text-ui-light .widget.c-popular .popular-item-wrap .popular-content .chapter-item .chapter a:hover,#hover-infor .item_thumb .post-title a{color: #FFFFFF}.navigation-ajax .load-ajax:not(.show-loading):hover, .listing-chapters_wrap .has-child .wp-manga-chapter:before, .c-wg-button-wrap .btn:hover, body.manga-page .page-content-listing.single-page .listing-chapters_wrap ul.main.version-chap .wp-manga-chapter:before, .site-header .search-main-menu form input[type=submit], .form-submit input[type=submit], #comments.comments-area #respond.comment-respond .comment-form .form-submit #submit, .c-btn.c-btn_style-1, .settings-page input[type="submit"], .settings-page .remove-all #delete-bookmark-manga, body.manga-page .page-content-listing.single-page .listing-chapters_wrap > ul.main.version-chap li .wp-manga-chapter:before, .woocommerce ul.products li.product .button, .woocommerce span.onsale, .woocommerce .widget_price_filter .price_slider_amount .button:not(:hover), .woocommerce .woocommerce-pagination .page-numbers li span.current, .woocommerce .woocommerce-pagination .page-numbers li .prev:hover, .woocommerce .woocommerce-pagination .page-numbers li .next:hover, .woocommerce div.entry-summary form.cart .single_add_to_cart_button { background: #000000 ;}.navigation-ajax .load-ajax:not(.show-loading):hover, .popular-slider .slider__container .slider__item .slider__content .slider__content_item .chapter-item .chapter a:hover, body.search .c-search-header__wrapper .search-content .btn-search-adv.collapsed, .c-btn.c-btn_style-2, body.search .c-search-header__wrapper .search-content .btn-search-adv, .genres_wrap a.btn-genres, .wpcf7-validation-errors, .text-ui-light.woocommerce-page input[type="text"]:focus, .text-ui-light.woocommerce-page input[type="email"]:focus, .text-ui-light.woocommerce-page input[type="search"]:focus, .text-ui-light.woocommerce-page input[type="url"]:focus, .text-ui-light.woocommerce-page input[type="password"]:focus, .text-ui-light.woocommerce-page input[type="tel"]:focus, .text-ui-light.woocommerce-page .input-text:focus, .text-ui-light.woocommerce-page input[type="text"]:active, .text-ui-light.woocommerce-page input[type="email"]:active, .text-ui-light.woocommerce-page input[type="search"]:active, .text-ui-light.woocommerce-page input[type="url"]:active, .text-ui-light.woocommerce-page input[type="password"]:active, .text-ui-light.woocommerce-page input[type="tel"]:active, .text-ui-light.woocommerce-page .input-text:active, .text-ui-light.woocommerce-page input[type="text"]:hover, .text-ui-light.woocommerce-page input[type="email"]:hover, .text-ui-light.woocommerce-page input[type="search"]:hover, .text-ui-light.woocommerce-page input[type="url"]:hover, .text-ui-light.woocommerce-page input[type="password"]:hover, .text-ui-light.woocommerce-page input[type="tel"]:hover, .text-ui-light.woocommerce-page .input-text:hover, .text-ui-light.woocommerce-page select.orderby:hover  { border-color: #000000 ;}.site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list > li.menu-item-has-children > ul.sub-menu, .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item .c-user_menu { border-bottom-color: #000000 ;}.widget.widget_tag_cloud .tag-cloud-link:hover, body.page .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .chapter:hover, .popular-slider .slider__container .slider__item .slider__content .slider__content_item .chapter-item .chapter a:hover, .widget.c-popular .popular-item-wrap .popular-content .chapter-item .chapter:hover, .site-footer .top-footer .wrap_social_account ul.social_account__item li a, .site-content .main-col .item-tags ul li a:hover, .popular-slider .slider__container .slick-arrow:hover, .widget.background.widget_tag_cloud .tag-cloud-link:hover, .wp-pagenavi a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-meta .latest-chap .chapter:hover, .go-to-top:hover, .widget.c-popular .widget-view-more, body.search .c-search-header__wrapper .search-content .search-form .search-submit, body.reading-manga .entry-header .select-pagination .nav-links .nav-next a:not(:hover), body.reading-manga .c-select-bottom .select-pagination .nav-links .nav-next a:not(:hover), body.reading-manga .entry-header .entry-header_wrap .action-icon ul li:hover a, body.reading-manga .c-select-bottom .entry-header_wrap .action-icon ul li:hover a, .widget.c-released .released-search form [type="submit"], body.manga-page .profile-manga .tab-summary .loader-inner > div, .wpcf7-submit, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .woocommerce-cart-form .cart button.button, .woocommerce .cart input.button:not(:hover), #adult_modal .modal-footer .btn.btn-primary:not(:hover), body.reading-manga .entry-header .select-pagination .nav-links > * a, body.reading-manga .c-select-bottom .select-pagination .nav-links > * a, .settings-page .list-chapter .chapter-item .chapter:hover, body.modal-open .modal .modal-content .modal-body .login .submit .wp-submit:not(:hover), .settings-page .tabs-content-wrap .my_account_orders a.button.view, .main-bg, #madara-comments.comments-area #respond.comment-respond .comment-form .form-submit #submit, body.search .c-search-header__wrapper .search-content .btn-search-adv { background-color: #000000 ;}:root{ --madara-main-color: #000000}body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-meta .latest-chap .chapter:hover a, .wp-pagenavi a:hover{color:#FFF !important}
                #pageloader.spinners{
                    position:fixed;
                    top:0;
                    left:0;
                    width:100%;
                    height:100%;
                    z-index:99999;
                    background:#222
                }
            
                p.madara-unyson{
                    color: #FF0000;
                }
            
                .table.table-hover.list-bookmark tr:last-child td{
                    text-align: center;
                }
            #adminmenu .wp-submenu li.current { display: none !important;}.show_tgmpa_version{ float: right; padding: 0em 1.5em 0.5em 0; }.tgmpa > h2{ font-size: 23px; font-weight: 400; line-height: 29px; margin: 0; padding: 9px 15px 4px 0;}.update-php{ width: 100%; height: 98%; min-height: 850px; padding-top: 1px; }.c-blog-post .entry-content .entry-content_wrap .read-container img.alignleft { margin: 10px 30px 10px 0 !important; } .c-blog-post .entry-content .entry-content_wrap .read-container img.alignright { margin: 10px 0px 10px 30px !important; } .read-container i.fas.fa-spinner.fa-spin{ font-size: 31px; color: #888; }.c-blog-post .entry-content .entry-content_wrap .read-container img{ cursor : pointer; }.choose-avatar .loading-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(255, 255, 255, 0.72);
                z-index: 1;
                display: none;
            }

            .choose-avatar .loading-overlay i.fas.fa-spinner {
                font-size: 40px;
                color: #ec3348;
            }

            .choose-avatar .loading-overlay .loading-icon {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
            }

            .choose-avatar.uploading .loading-overlay {
                display: block;
            }.site-header .c-sub-header-nav .entry-header {
                display: none;
                margin-bottom: 15px;
            }

            .site-header .c-sub-header-nav.sticky .entry-header {
                display: block;
            }

            .site-header .c-sub-header-nav.hide-sticky-menu.sticky .c-sub-nav_wrap{
                display:none;
            }
            .site-header .c-sub-header-nav.hide-sticky-menu .entry-header{
                margin-top:15px;
            }
            @media (max-width: 480px) {.c-blog-post .entry-content .entry-content_wrap .reading-content{margin-left:-15px;margin-right:-15px}}
    </style>
    
</head>

<body class="wp-manga-template-default single single-wp-manga postid-1953 wp-embed-responsive wp-manga-page manga-page page header-style-1 is-sidebar text-ul-light">
    <div class="wrap">
        <div class="body-wrap">
            <header class="site-header">
                <div class="c-header_top">
                    <div class="main-navigation style-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12" >
                                    <div class="main-navitagation_wrap" >
                                        <div class="wrap_branding" >
                                            <a class="logo" href="<?php echo site_url('welcome'); ?>" title="SenNovel">
                                                <img class="image-responsive" src="https://manhuadex.com/wp-content/uploads/2017/10/coollogo_com-1039314-1.png" alt="SenNovel">
                                            </a>
                                        </div>
                                        <div class="main_menu">
                                            <ul class="nav navbar-nav main-navbar">
                                                <li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27" >
                                                    <a href="#">
                                                        HOME
                                                    </a>
                                                </li>
                                                <li id="menu-item-2458" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2458">
                                                    <a href="#">
                                                        NOVEL LIST
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clone-header"></div>
                <div class="c-sub-header-nav with-border  hide-sticky-menu">
                    <div class="container">
                        <div class="c-sub-nav_wrap">
                            <div class="sub-nav_content">
                                <ul class="sub-nav_list list-inline second-menu">
                                    <li id="" class="menu-item" >
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>
                                    
                                    <li id="" class="menu-item" >
                                        <a href="#">
                                            More
                                        </a>
                                        <ul class="sub-menu">

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="site-content">
                <div class="">
                    <div class="profile-novel">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="c-breadcrumb">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-page-content style-1">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>