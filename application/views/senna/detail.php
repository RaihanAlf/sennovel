<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <script src="https://js.stripe.com/v3" type="text/javascript"></script>             
        <script type="text/javascript">
            var stripe = Stripe("pk_live_51JeNLqHyor6uPr8qgYmH5D46ogggqqkHpfq6LRkWkEic8kLB8l3FvPvZrrDxGilgP6DwDNVmFYvq5uH9Y9Ml98Py00hO1OsKN5");
        </script> 
        <script data-cfasync="false" type="text/javascript">
            var ewww_webp_supported=!1;function check_webp_feature(A,e){if(e=void 0!==e?e:function(){},ewww_webp_supported)e(ewww_webp_supported);else{var w=new Image;w.onload=function(){ewww_webp_supported=0<w.width&&0<w.height,e&&e(ewww_webp_supported)},w.onerror=function(){e&&e(!1)},w.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA=="}[A]}}check_webp_feature("alpha");</script><script data-cfasync="false" type="text/javascript">var Arrive=function(c,e,w){"use strict";if(c.MutationObserver&&"undefined"!=typeof HTMLElement){var r,t,a=0,u=(r=HTMLElement.prototype.matches||HTMLElement.prototype.webkitMatchesSelector||HTMLElement.prototype.mozMatchesSelector||HTMLElement.prototype.msMatchesSelector,{matchesSelector:function(e,t){return e instanceof HTMLElement&&r.call(e,t)},addMethod:function(e,t,r){var a=e[t];e[t]=function(){return r.length==arguments.length?r.apply(this,arguments):"function"==typeof a?a.apply(this,arguments):void 0}},callCallbacks:function(e,t){t&&t.options.onceOnly&&1==t.firedElems.length&&(e=[e[0]]);for(var r,a=0;r=e[a];a++)r&&r.callback&&r.callback.call(r.elem,r.elem);t&&t.options.onceOnly&&1==t.firedElems.length&&t.me.unbindEventWithSelectorAndCallback.call(t.target,t.selector,t.callback)},checkChildNodesRecursively:function(e,t,r,a){for(var i,n=0;i=e[n];n++)r(i,t,a)&&a.push({callback:t.callback,elem:i}),0<i.childNodes.length&&u.checkChildNodesRecursively(i.childNodes,t,r,a)},mergeArrays:function(e,t){var r,a={};for(r in e)e.hasOwnProperty(r)&&(a[r]=e[r]);for(r in t)t.hasOwnProperty(r)&&(a[r]=t[r]);return a},toElementsArray:function(e){return void 0===e||"number"==typeof e.length&&e!==c||(e=[e]),e}}),d=((t=function(){this._eventsBucket=[],this._beforeAdding=null,this._beforeRemoving=null}).prototype.addEvent=function(e,t,r,a){var i={target:e,selector:t,options:r,callback:a,firedElems:[]};return this._beforeAdding&&this._beforeAdding(i),this._eventsBucket.push(i),i},t.prototype.removeEvent=function(e){for(var t,r=this._eventsBucket.length-1;t=this._eventsBucket[r];r--)if(e(t)){this._beforeRemoving&&this._beforeRemoving(t);var a=this._eventsBucket.splice(r,1);a&&a.length&&(a[0].callback=null)}},t.prototype.beforeAdding=function(e){this._beforeAdding=e},t.prototype.beforeRemoving=function(e){this._beforeRemoving=e},t),o=function(i,n){var o=new d,l=this,s={fireOnAttributesModification:!1};return o.beforeAdding(function(t){var e,r=t.target;r!==c.document&&r!==c||(r=document.getElementsByTagName("html")[0]),e=new MutationObserver(function(e){n.call(this,e,t)});var a=i(t.options);e.observe(r,a),t.observer=e,t.me=l}),o.beforeRemoving(function(e){e.observer.disconnect()}),this.bindEvent=function(e,t,r){t=u.mergeArrays(s,t);for(var a=u.toElementsArray(this),i=0;i<a.length;i++)o.addEvent(a[i],e,t,r)},this.unbindEvent=function(){var r=u.toElementsArray(this);o.removeEvent(function(e){for(var t=0;t<r.length;t++)if(this===w||e.target===r[t])return!0;return!1})},this.unbindEventWithSelectorOrCallback=function(r){var e,a=u.toElementsArray(this),i=r;e="function"==typeof r?function(e){for(var t=0;t<a.length;t++)if((this===w||e.target===a[t])&&e.callback===i)return!0;return!1}:function(e){for(var t=0;t<a.length;t++)if((this===w||e.target===a[t])&&e.selector===r)return!0;return!1},o.removeEvent(e)},this.unbindEventWithSelectorAndCallback=function(r,a){var i=u.toElementsArray(this);o.removeEvent(function(e){for(var t=0;t<i.length;t++)if((this===w||e.target===i[t])&&e.selector===r&&e.callback===a)return!0;return!1})},this},i=new function(){var s={fireOnAttributesModification:!1,onceOnly:!1,existing:!1};function n(e,t,r){return!(!u.matchesSelector(e,t.selector)||(e._id===w&&(e._id=a++),-1!=t.firedElems.indexOf(e._id))||(t.firedElems.push(e._id),0))}var c=(i=new o(function(e){var t={attributes:!1,childList:!0,subtree:!0};return e.fireOnAttributesModification&&(t.attributes=!0),t},function(e,i){e.forEach(function(e){var t=e.addedNodes,r=e.target,a=[];null!==t&&0<t.length?u.checkChildNodesRecursively(t,i,n,a):"attributes"===e.type&&n(r,i)&&a.push({callback:i.callback,elem:r}),u.callCallbacks(a,i)})})).bindEvent;return i.bindEvent=function(e,t,r){t=void 0===r?(r=t,s):u.mergeArrays(s,t);var a=u.toElementsArray(this);if(t.existing){for(var i=[],n=0;n<a.length;n++)for(var o=a[n].querySelectorAll(e),l=0;l<o.length;l++)i.push({callback:r,elem:o[l]});if(t.onceOnly&&i.length)return r.call(i[0].elem,i[0].elem);setTimeout(u.callCallbacks,1,i)}c.call(this,e,t,r)},i},l=new function(){var a={};function i(e,t){return u.matchesSelector(e,t.selector)}var n=(l=new o(function(){return{childList:!0,subtree:!0}},function(e,a){e.forEach(function(e){var t=e.removedNodes,r=[];null!==t&&0<t.length&&u.checkChildNodesRecursively(t,a,i,r),u.callCallbacks(r,a)})})).bindEvent;return l.bindEvent=function(e,t,r){t=void 0===r?(r=t,a):u.mergeArrays(a,t),n.call(this,e,t,r)},l};e&&g(e.fn),g(HTMLElement.prototype),g(NodeList.prototype),g(HTMLCollection.prototype),g(HTMLDocument.prototype),g(Window.prototype);var n={};return s(i,n,"unbindAllArrive"),s(l,n,"unbindAllLeave"),n}function s(e,t,r){u.addMethod(t,r,e.unbindEvent),u.addMethod(t,r,e.unbindEventWithSelectorOrCallback),u.addMethod(t,r,e.unbindEventWithSelectorAndCallback)}function g(e){e.arrive=i.bindEvent,s(i,e,"unbindArrive"),e.leave=l.bindEvent,s(l,e,"unbindLeave")}}(window,"undefined"==typeof jQuery?null:jQuery,void 0),ewww_webp_supported=!1;function check_webp_feature(e,t){if(ewww_webp_supported)t(ewww_webp_supported);else{var r=new Image;r.onload=function(){ewww_webp_supported=0<r.width&&0<r.height,t(ewww_webp_supported)},r.onerror=function(){t(!1)},r.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",animation:"UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"}[e]}}function ewwwLoadImages(e){if(e){for(var t=document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"),r=0,a=t.length;r<a;r++)ewwwAttr(t[r],"data-src",t[r].getAttribute("data-webp")),ewwwAttr(t[r],"data-thumbnail",t[r].getAttribute("data-webp-thumbnail"));for(r=0,a=(n=document.querySelectorAll(".rev_slider ul li")).length;r<a;r++){ewwwAttr(n[r],"data-thumb",n[r].getAttribute("data-webp-thumb"));for(var i=1;i<11;)ewwwAttr(n[r],"data-param"+i,n[r].getAttribute("data-webp-param"+i)),i++}var n;for(r=0,a=(n=document.querySelectorAll(".rev_slider img")).length;r<a;r++)ewwwAttr(n[r],"data-lazyload",n[r].getAttribute("data-webp-lazyload"));var o=document.querySelectorAll("div.woocommerce-product-gallery__image");for(r=0,a=o.length;r<a;r++)ewwwAttr(o[r],"data-thumb",o[r].getAttribute("data-webp-thumb"))}var l=document.querySelectorAll("video");for(r=0,a=l.length;r<a;r++)ewwwAttr(l[r],"poster",e?l[r].getAttribute("data-poster-webp"):l[r].getAttribute("data-poster-image"));var s=document.querySelectorAll("img.ewww_webp_lazy_load");for(r=0,a=s.length;r<a;r++){if(e){ewwwAttr(s[r],"data-lazy-srcset",s[r].getAttribute("data-lazy-srcset-webp")),ewwwAttr(s[r],"data-srcset",s[r].getAttribute("data-srcset-webp")),ewwwAttr(s[r],"data-lazy-src",s[r].getAttribute("data-lazy-src-webp")),ewwwAttr(s[r],"data-src",s[r].getAttribute("data-src-webp")),ewwwAttr(s[r],"data-orig-file",s[r].getAttribute("data-webp-orig-file")),ewwwAttr(s[r],"data-medium-file",s[r].getAttribute("data-webp-medium-file")),ewwwAttr(s[r],"data-large-file",s[r].getAttribute("data-webp-large-file"));var c=s[r].getAttribute("srcset");null!=c&&!1!==c&&c.includes("R0lGOD")&&ewwwAttr(s[r],"src",s[r].getAttribute("data-lazy-src-webp"))}s[r].className=s[r].className.replace(/\bewww_webp_lazy_load\b/,"")}var w=document.querySelectorAll(".ewww_webp");for(r=0,a=w.length;r<a;r++)e?(ewwwAttr(w[r],"srcset",w[r].getAttribute("data-srcset-webp")),ewwwAttr(w[r],"src",w[r].getAttribute("data-src-webp")),ewwwAttr(w[r],"data-orig-file",w[r].getAttribute("data-webp-orig-file")),ewwwAttr(w[r],"data-medium-file",w[r].getAttribute("data-webp-medium-file")),ewwwAttr(w[r],"data-large-file",w[r].getAttribute("data-webp-large-file")),ewwwAttr(w[r],"data-large_image",w[r].getAttribute("data-webp-large_image")),ewwwAttr(w[r],"data-src",w[r].getAttribute("data-webp-src"))):(ewwwAttr(w[r],"srcset",w[r].getAttribute("data-srcset-img")),ewwwAttr(w[r],"src",w[r].getAttribute("data-src-img"))),w[r].className=w[r].className.replace(/\bewww_webp\b/,"ewww_webp_loaded");window.jQuery&&jQuery.fn.isotope&&jQuery.fn.imagesLoaded&&(jQuery(".fusion-posts-container-infinite").imagesLoaded(function(){jQuery(".fusion-posts-container-infinite").hasClass("isotope")&&jQuery(".fusion-posts-container-infinite").isotope()}),jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function(){jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()}))}function ewwwWebPInit(e){ewwwLoadImages(e),ewwwNggLoadGalleries(e),document.arrive(".ewww_webp",function(){ewwwLoadImages(e)}),document.arrive(".ewww_webp_lazy_load",function(){ewwwLoadImages(e)}),document.arrive("videos",function(){ewwwLoadImages(e)}),"loading"==document.readyState?document.addEventListener("DOMContentLoaded",ewwwJSONParserInit):("undefined"!=typeof galleries&&ewwwNggParseGalleries(e),ewwwWooParseVariations(e))}function ewwwAttr(e,t,r){null!=r&&!1!==r&&e.setAttribute(t,r)}function ewwwJSONParserInit(){"undefined"!=typeof galleries&&check_webp_feature("alpha",ewwwNggParseGalleries),check_webp_feature("alpha",ewwwWooParseVariations)}function ewwwWooParseVariations(e){if(e)for(var t=document.querySelectorAll("form.variations_form"),r=0,a=t.length;r<a;r++){var i=t[r].getAttribute("data-product_variations"),n=!1;try{for(var o in i=JSON.parse(i))void 0!==i[o]&&void 0!==i[o].image&&(void 0!==i[o].image.src_webp&&(i[o].image.src=i[o].image.src_webp,n=!0),void 0!==i[o].image.srcset_webp&&(i[o].image.srcset=i[o].image.srcset_webp,n=!0),void 0!==i[o].image.full_src_webp&&(i[o].image.full_src=i[o].image.full_src_webp,n=!0),void 0!==i[o].image.gallery_thumbnail_src_webp&&(i[o].image.gallery_thumbnail_src=i[o].image.gallery_thumbnail_src_webp,n=!0),void 0!==i[o].image.thumb_src_webp&&(i[o].image.thumb_src=i[o].image.thumb_src_webp,n=!0));n&&ewwwAttr(t[r],"data-product_variations",JSON.stringify(i))}catch(e){}}}function ewwwNggParseGalleries(e){if(e)for(var t in galleries){var r=galleries[t];galleries[t].images_list=ewwwNggParseImageList(r.images_list)}}function ewwwNggLoadGalleries(e){e&&document.addEventListener("ngg.galleria.themeadded",function(e,t){window.ngg_galleria._create_backup=window.ngg_galleria.create,window.ngg_galleria.create=function(e,t){var r=$(e).data("id");return galleries["gallery_"+r].images_list=ewwwNggParseImageList(galleries["gallery_"+r].images_list),window.ngg_galleria._create_backup(e,t)}})}function ewwwNggParseImageList(e){for(var t in e){var r=e[t];if(void 0!==r["image-webp"]&&(e[t].image=r["image-webp"],delete e[t]["image-webp"]),void 0!==r["thumb-webp"]&&(e[t].thumb=r["thumb-webp"],delete e[t]["thumb-webp"]),void 0!==r.full_image_webp&&(e[t].full_image=r.full_image_webp,delete e[t].full_image_webp),void 0!==r.srcsets)for(var a in r.srcsets)nggSrcset=r.srcsets[a],void 0!==r.srcsets[a+"-webp"]&&(e[t].srcsets[a]=r.srcsets[a+"-webp"],delete e[t].srcsets[a+"-webp"]);if(void 0!==r.full_srcsets)for(var i in r.full_srcsets)nggFSrcset=r.full_srcsets[i],void 0!==r.full_srcsets[i+"-webp"]&&(e[t].full_srcsets[i]=r.full_srcsets[i+"-webp"],delete e[t].full_srcsets[i+"-webp"])}return e}check_webp_feature("alpha",ewwwWebPInit);
        </script>
        <title><?= $data[0]["judul"] ?> - SenNovel</title>
        <meta name="robots" content="max-image-preview:large">
        <link rel="dns-prefetch" href="//www.googletagmanager.com">
        <link rel="dns-prefetch" href="//s.w.org"> 
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/reaperscans.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.1"}};
            !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
        <link data-optimized="1" rel="stylesheet" id="mycred-front-css" href="https://reaperscans.com/wp-content/litespeed/css/2198a4d50c2323a5d4bdf7017328de2a.css?ver=eeca2" type="text/css" media="all">
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script> 
        <script async="" type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=UA-189039815-1" id="google_gtagjs-js"></script> 
        <script type="text/javascript" id="google_gtagjs-js-after">
            window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
            gtag('set', 'linker', {"domains":["reaperscans.com"]} );
            gtag("js", new Date());
            gtag("set", "developer_id.dZTNiMT", true);
            gtag("config", "UA-189039815-1", {"anonymize_ip":true});
            gtag("config", "G-GPHF8WRS7G");
        </script> 
        <link rel="https://api.w.org/" href="https://reaperscans.com/wp-json/">
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://reaperscans.com/xmlrpc.php?rsd">
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://reaperscans.com/wp-includes/wlwmanifest.xml">
        <meta name="generator" content="WordPress 5.8.1">
        <link rel="shortlink" href="https://reaperscans.com/?p=87">
        <link rel="alternate" type="application/json+oembed" href="https://reaperscans.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Freaperscans.com%2Fseries%2Fnano-machine%2F">
        <link rel="alternate" type="text/xml+oembed" href="https://reaperscans.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Freaperscans.com%2Fseries%2Fnano-machine%2F&amp;format=xml">
        <link href="<?php echo base_url('templates/img/favicon.jpg'); ?>" rel="icon">
        <link href="<?php echo base_url('templates/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url('templates/assets/aos/aos.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/remixicon/remixicon.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?php echo base_url('templates/css/main.css'); ?>" rel="stylesheet">
        <style type="text/css">
            img.wp-smiley,img.emoji {
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
        <link data-optimized="1" rel="stylesheet" id="wp-block-library-css" href="https://reaperscans.com/wp-content/litespeed/css/0fa6d63d85e1ab82d814b192d30741f9.css?ver=12ef1" type="text/css" media="all">
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
            }.blocks-gallery-caption{
                color:#555;
                font-size:13px;
                text-align:center;
            }.is-dark-theme .blocks-gallery-caption{
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
                border:none;padding-left:0;
            }
            .wp-block-quote.is-large,.wp-block-quote.is-style-large{
                border:none;
            }
            .wp-block-search .wp-block-search__label{
                font-weight:700;
            }
            .wp-block-group.has-background{
                padding:1.25em 2.375em;
                margin-top:0;
                margin-bottom:0
            }
            .wp-block-separator{
                border:none;
                border-bottom:2px solid;
                margin-left:auto;
                margin-right:auto;
                opacity:.4;
            }
            .wp-block-separator:not(.is-style-wide):not(.is-style-dots){
                width:100px;
            }
            .wp-block-separator.has-background:not(.is-style-dots){
                border-bottom:none;
                height:1px;
            }
            .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){
                height:2px;
            }
            .wp-block-table thead{
                border-bottom:3px solid;
            }
            .wp-block-table tfoot{
                border-top:3px solid;
            }
            .wp-block-table td,.wp-block-table th{
                padding:.5em;
                border:1px solid;
                word-break:normal;
            }
            .wp-block-table figcaption{
                color:#555;
                font-size:13px;
                text-align:center;
            }
            .is-dark-theme .wp-block-table figcaption{
                color:hsla(0,0%,100%,.65);
            }.wp-block-video figcaption{
                color:#555;
                font-size:13px;
                text-align:center;
            }
            .is-dark-theme .wp-block-video figcaption{
                color:hsla(0,0%,100%,.65);
            }
            .wp-block-template-part.has-background{
                padding:1.25em 2.375em;
                margin-top:0;
                margin-bottom:0;
            }
            #end-resizable-editor-section{
                display:none;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link data-optimized="1" rel="stylesheet" id="ct-shortcode-css" href="https://reaperscans.com/wp-content/litespeed/css/3e0c1de6ef24ed587013dadcd7916065.css?ver=94cee" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="widgetopts-styles-css" href="https://reaperscans.com/wp-content/litespeed/css/7383dfa753ea9639ea96b8041335f331.css?ver=5f331" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="chapter-report-css-css" href="https://reaperscans.com/wp-content/litespeed/css/d7c84b702b576e6557c87465194a5087.css?ver=eb3de" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="wp-manga-chapter-thumbnail-css" href="https://reaperscans.com/wp-content/litespeed/css/6b4eba844c363e97863b3f1a15acbacd.css?ver=47633" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="fontawesome-css" href="https://reaperscans.com/wp-content/litespeed/css/39939eaedfc0e05a434c8232f13435e9.css?ver=5a725" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="bootstrap-css" href="https://reaperscans.com/wp-content/litespeed/css/9077765de2eacc2a456152d8709585f4.css?ver=10262" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="slick-css" href="https://reaperscans.com/wp-content/litespeed/css/5df39f57e9a054d9c496d235f901b11c.css?ver=4b737" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="slick-theme-css" href="https://reaperscans.com/wp-content/litespeed/css/cbebd8731863e7006aa1ceac9477f111.css?ver=6a2da" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="madara-css-child-css" href="<?= base_url('templates/css/display.css');?>" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="ionicons-css" href="https://reaperscans.com/wp-content/litespeed/css/7d900728e1b77fb0fa508bc669fa891d.css?ver=98b76" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="loaders-css" href="https://reaperscans.com/wp-content/litespeed/css/b5e899f93b55cfe5bb53230a2fbe4523.css?ver=bb659" type="text/css" media="all">
        <link data-optimized="1" rel="stylesheet" id="madara-css-css" href="https://reaperscans.com/wp-content/litespeed/css/0e615a5679a8c2fbb9437e1a890db2c1.css?ver=0c811" type="text/css" media="all">
        <style id="madara-css-inline-css" type="text/css">
            .c-blog__heading.style-2 i {
                background: -webkit-linear-gradient(left, #0a0a0a 40%,#a3a3a3);
                background: -o-linear-gradient(right, #0a0a0a 40%,#a3a3a3);
                background: -moz-linear-gradient(right, #0a0a0a 40%,#a3a3a3);
                background: linear-gradient(to right, #0a0a0a 40%,#a3a3a3);
            }
            .c-blog__heading.style-2 i:after, .settings-page .nav-tabs-wrap ul.nav-tabs li.active:after { 
                border-left-color: #a3a3a3 ; 
            }
            .site-header .main-navigation.style-1, .widget-heading, .widget.background:after, .c-blog__heading.style-2 i, .tab-wrap .c-nav-tabs ul.c-tabs-content li.active a:after, .tab-wrap .c-nav-tabs ul.c-tabs-content li:hover a:after, .tab-wrap .c-nav-tabs ul.c-tabs-content li a:after, .related-heading.font-nav, .c-blog__heading.style-3, .settings-page .nav-tabs-wrap ul.nav-tabs li.active a, .off-canvas {
                background: -webkit-linear-gradient(left, #0a0a0a 40%,#a3a3a3);
                background: -o-linear-gradient(right, #0a0a0a 40%,#a3a3a3);
                background: -moz-linear-gradient(right, #0a0a0a 40%,#a3a3a3);
                background: linear-gradient(to right, #0a0a0a 40%,#a3a3a3);
            }
            .widget-heading:after, .related-heading.font-nav:after, .genres_wrap .c-blog__heading.style-3.active:after { 
                border-top-color: #0a0a0a ;
            }
            body.modal-open .modal .modal-content a:hover, .tab-wrap .c-nav-tabs ul.c-tabs-content li.active a, .tab-wrap .c-nav-tabs ul.c-tabs-content li:hover a, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item .summary-content:not(.release-year) a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item .summary-content.release-year a:hover, .c-blog-post .entry-header .entry-meta .post-on:before, .manga-slider .slider__container .slick-dots li.slick-active button:before, .manga-slider .slider__container .slick-dots li button:hover:before, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .count-comment .action_icon a i, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .add-bookmark .action_icon a i, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .count-comment .action_detail a i, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .add-bookmark .action_detail a i, body.manga-page .profile-manga .post-title a, body.manga-page .content-readmore:hover, body.text-ui-light.manga-page .content-readmore:hover, .genres_wrap .genres__collapse .genres ul li a:hover, .genres_wrap .genres__collapse .genres ul li a:hover:before, .c-blog-post .entry-header .entry-meta .post-on .posted-on a:hover, body.search .c-search-header__wrapper #search-advanced .search-advanced-form .form-group.checkbox-group .checkbox label:hover, .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu, .c-btn.c-btn_style-2, body.search .c-search-header__wrapper .search-content .btn-search-adv, body.reading-manga .entry-header .entry-header_wrap .action-icon ul li a, body.reading-manga .c-select-bottom .entry-header_wrap .action-icon ul li a, .widget.c-released .released-item-wrap ul.list-released li a:hover, body.manga-page .profile-manga .post-title h1, .genres_wrap .genres__collapse #genres ul li:hover a, .genres_wrap .genres__collapse #genres ul li:hover a:before, input[type=checkbox]:checked + label:before, input[type=radio]:checked + label:before, .genres_wrap a.btn-genres, .c-breadcrumb .breadcrumb li a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item.mg_genres .summary-content, body.page .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .vol a:hover, #hover-infor .item_thumb .post-title a, body.manga-page .version-chap:before, body.manga-page .content-readmore:hover, body.manga-page .chapter-readmore:hover, .icon-load-info, .c-blog-post .entry-header .entry-meta .post-on .c-blog__date .post-category a:hover, .woocommerce ul.products li.product .price, .woocommerce div.entry-summary p.price, .woocommerce div.entry-summary form.cart .variations .label, .woocommerce div.entry-summary form.cart .quantity-text, .widget_product_categories .product-categories li a:hover, .woocommerce ul.products li.product h2:hover, .woocommerce .c-woo-breadcrumb a:hover, .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item .c-user_menu a:hover, .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li:hover > a, .settings-page .action i.ion-ios-close:hover:before, .settings-page .list-chapter .chapter-item a:hover, .settings-page .tabs-content-wrap .tab-group-item .tab-item .history-content .item-infor .chapter span a, .settings-page .nav-tabs-wrap ul.nav-tabs li:not(.active):hover a, .main-color,
            .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li.menu-item-has-children.active > a,.woocommerce .woocommerce-ordering:after,.text-ui-light .widget.c-popular .popular-item-wrap .popular-content .chapter-item .chapter a:hover, body.text-ui-light .settings-page .list-chapter .chapter-item .chapter a:hover,body.search.text-ui-light .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-meta .latest-chap .chapter a:hover{
                color: #0a0a0a ;
            }
            .c-blog__heading.style-2 i:after{
                border-right-color:#0a0a0a !important;
            }
            body.page.text-ui-light .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .chapter a:hover, .text-ui-light .widget.c-popular .popular-item-wrap .popular-content .chapter-item .chapter a:hover,#hover-infor .item_thumb .post-title a{
                color: #FFFFFF;
            }
            .navigation-ajax .load-ajax:not(.show-loading):hover, body.manga-page .page-content-listing.single-page .listing-chapters_wrap > ul.main.version-chap .sub-chap > li:before, .shortcode-manga-chapters .listing-chapters_wrap > ul.main.version-chap .sub-chap > li:before, .c-wg-button-wrap .btn:hover, body.manga-page .page-content-listing.single-page .listing-chapters_wrap ul.main.version-chap .wp-manga-chapter:before, .site-header .search-main-menu form input[type=submit], .form-submit input[type=submit], #comments.comments-area #respond.comment-respond .comment-form .form-submit #submit, .c-btn.c-btn_style-1, .settings-page input[type="submit"], .settings-page .remove-all #delete-bookmark-manga, body.manga-page .page-content-listing.single-page .listing-chapters_wrap > ul.main.version-chap li .wp-manga-chapter:before, .woocommerce ul.products li.product .button, .woocommerce span.onsale, .woocommerce .widget_price_filter .price_slider_amount .button:not(:hover), .woocommerce .woocommerce-pagination .page-numbers li span.current, .woocommerce .woocommerce-pagination .page-numbers li .prev:hover, .woocommerce .woocommerce-pagination .page-numbers li .next:hover, .woocommerce div.entry-summary form.cart .single_add_to_cart_button,.post-password-form input[name="Submit"] { 
                background: #0a0a0a ;
            }
            .navigation-ajax .load-ajax:not(.show-loading):hover, .popular-slider .slider__container .slider__item .slider__content .slider__content_item .chapter-item .chapter a:hover, body.search .c-search-header__wrapper .search-content .btn-search-adv.collapsed, .c-btn.c-btn_style-2, body.search .c-search-header__wrapper .search-content .btn-search-adv, .genres_wrap a.btn-genres, .wpcf7-validation-errors, .text-ui-light.woocommerce-page input[type="text"]:focus, .text-ui-light.woocommerce-page input[type="email"]:focus, .text-ui-light.woocommerce-page input[type="search"]:focus, .text-ui-light.woocommerce-page input[type="url"]:focus, .text-ui-light.woocommerce-page input[type="password"]:focus, .text-ui-light.woocommerce-page input[type="tel"]:focus, .text-ui-light.woocommerce-page .input-text:focus, .text-ui-light.woocommerce-page input[type="text"]:active, .text-ui-light.woocommerce-page input[type="email"]:active, .text-ui-light.woocommerce-page input[type="search"]:active, .text-ui-light.woocommerce-page input[type="url"]:active, .text-ui-light.woocommerce-page input[type="password"]:active, .text-ui-light.woocommerce-page input[type="tel"]:active, .text-ui-light.woocommerce-page .input-text:active, .text-ui-light.woocommerce-page input[type="text"]:hover, .text-ui-light.woocommerce-page input[type="email"]:hover, .text-ui-light.woocommerce-page input[type="search"]:hover, .text-ui-light.woocommerce-page input[type="url"]:hover, .text-ui-light.woocommerce-page input[type="password"]:hover, .text-ui-light.woocommerce-page input[type="tel"]:hover, .text-ui-light.woocommerce-page .input-text:hover, .text-ui-light.woocommerce-page select.orderby:hover  { 
                border-color: #0a0a0a ;
            }
            .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list > li.menu-item-has-children > ul.sub-menu, .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item .c-user_menu {
                border-bottom-color: #0a0a0a ;
            }
            .widget.widget_tag_cloud .tag-cloud-link:hover, body.page .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .chapter:hover, .popular-slider .slider__container .slider__item .slider__content .slider__content_item .chapter-item .chapter a:hover, .widget.c-popular .popular-item-wrap .popular-content .chapter-item .chapter:hover, .site-footer .top-footer .wrap_social_account ul.social_account__item li a, .site-content .main-col .item-tags ul li a:hover, .popular-slider .slider__container .slick-arrow:hover, .widget.background.widget_tag_cloud .tag-cloud-link:hover, .wp-pagenavi a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-meta .latest-chap .chapter:hover, .go-to-top:hover, .widget.c-popular .widget-view-more, body.search .c-search-header__wrapper .search-content .search-form .search-submit, body.reading-manga .entry-header .select-pagination .nav-links .nav-next a:not(:hover), body.reading-manga .c-select-bottom .select-pagination .nav-links .nav-next a:not(:hover), body.reading-manga .entry-header .entry-header_wrap .action-icon ul li:hover a, body.reading-manga .c-select-bottom .entry-header_wrap .action-icon ul li:hover a, .widget.c-released .released-search form [type="submit"], body.manga-page .profile-manga .tab-summary .loader-inner > div, .wpcf7-submit, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .woocommerce-cart-form .cart button.button, .woocommerce .cart input.button:not(:hover), #adult_modal .modal-footer .btn.btn-primary:not(:hover), body.reading-manga .entry-header .select-pagination .nav-links > * a, body.reading-manga .c-select-bottom .select-pagination .nav-links > * a, .settings-page .list-chapter .chapter-item .chapter:hover, body.modal-open .modal .modal-content .modal-body .login .submit .wp-submit:not(:hover), .settings-page .tabs-content-wrap .my_account_orders a.button.view, .main-bg, #madara-comments.comments-area #respond.comment-respond .comment-form .form-submit #submit, body.search .c-search-header__wrapper .search-content .btn-search-adv { 
                background-color: #0a0a0a ;
            }
            :root{ 
                --madara-main-color: #0a0a0a;
            }
            body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-meta .latest-chap .chapter:hover a, .wp-pagenavi a:hover{
                color:#FFF !important;
            }
            .item-thumb .quick-chapter-link{
                background: #0a0a0a;
            }            
            .page-content-listing.single-page li.wp-manga-chapter.unread a{
                color:#0a0a0a;
            }
            a:not(.btn-link):hover, .c-breadcrumb .breadcrumb li a:hover, .tab-wrap .c-nav-tabs ul.c-tabs-content li.active a, .tab-wrap .c-nav-tabs ul.c-tabs-content li:hover a, .c-blog-post .entry-header .entry-meta .post-on .posted-on a:hover, .c-blog-post .entry-header .entry-meta .post-on .c-blog__date .post-category a:hover, body.manga-page .content-readmore:hover, body.text-ui-light.manga-page .content-readmore:hover, body.manga-page .chapter-readmore:hover, body.page .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .list-chapter .chapter-item .vol a:hover, .site-header .main-navigation.style-1 .search-navigation .search-navigation__wrap .link-adv-search a:hover, .woocommerce ul.products li.product h2:hover, .woocommerce .c-woo-breadcrumb a:hover, .genres_wrap .genres__collapse .genres ul li a:hover, .genres_wrap .genres__collapse .genres ul li a:hover:before ,.widget.c-released .released-item-wrap ul.list-released li a:hover,body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item .summary-content:not(.release-year) a:hover, body.search.search-results .search-wrap .tab-content-wrap .c-tabs-item .c-tabs-item__content .tab-summary .post-content .post-content_item .summary-content.release-year a:hover{ 
                color: #1e73be;
            }
            .tab-wrap .c-nav-tabs ul.c-tabs-content li.active a:after, .tab-wrap .c-nav-tabs ul.c-tabs-content li:hover a:after { 
                background: #1e73be;
            }
            .meta-item.rating .rating_current, .meta-item.rating .rating_current_half, body.manga-page .profile-manga .tab-summary .post-rating i.ion-ios-star, body.manga-page .profile-manga .tab-summary .post-rating i.ion-ios-star.rating_current, body.manga-page .profile-manga .tab-summary .post-rating i.ion-ios-star-half, body.manga-page .profile-manga .tab-summary .post-rating .user-rating i.ion-ios-star, body.manga-page .profile-manga .tab-summary .post-rating .post-total-rating i.ion-ios-star, body.manga-page .profile-manga .tab-summary .post-rating .post-total-rating i.ion-ios-star.rating_current, body.manga-page .profile-manga .tab-summary .post-rating .user-rating i.ion-ios-star, body.manga-page .profile-manga .tab-summary .post-rating .user-rating i.ion-ios-star.rating_current, .woocommerce .star-rating, .woocommerce .star-rating::before,
            body.manga-page .profile-manga .tab-summary .post-rating .post-total-rating i.ion-ios-star-half { 
                color: #eeee22 ;
            }
            #pageloader.spinners{
                position:fixed;
                top:0;
                left:0;
                width:100%;
                height:100%;
                z-index:99999;
                background:#222;
            }
            p.madara-unyson{
                color: #FF0000;
            }
                
            .table.table-hover.list-bookmark tr:last-child td{
                text-align: center;
            }
            #adminmenu .wp-submenu li.current { 
                display: none !important;
            }
            .show_tgmpa_version{
                float: right; 
                padding: 0em 1.5em 0.5em 0; 
            }
            .tgmpa > h2{ 
                font-size: 23px; 
                font-weight: 400; 
                line-height: 29px; 
                margin: 0; 
                padding: 9px 15px 4px 0;
            }
            .update-php{ 
                width: 100%; 
                height: 98%; 
                min-height: 850px; 
                padding-top: 1px; 
            }
            .c-blog-post .entry-content .entry-content_wrap .read-container img.alignleft { 
                margin: 10px 30px 10px 0 !important; 
            } 
            .c-blog-post .entry-content .entry-content_wrap .read-container img.alignright {
                margin: 10px 0px 10px 30px !important; 
            } 
            .read-container i.fas.fa-spinner.fa-spin{ 
                font-size: 31px; 
                color: #888; 
            }
            .c-blog-post .entry-content .entry-content_wrap .read-container img{
                cursor : pointer; 
            }
            .choose-avatar .loading-overlay {
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
            }
            .site-header .c-sub-header-nav .entry-header {
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
            body.modal-open .modal .modal-dialog, body.modal-open .modal .modal-content .modal-loading-screen{
                background-image:none;
                background-image:url(https://reaperscans.com/wp-content/uploads/2021/07/cover.webp); 
                background-size:cover; 
                background-position:center center; 
            }
            @media (max-width: 480px) {
                .c-blog-post .entry-content .entry-content_wrap .reading-content{
                    margin-left:-15px;margin-right:-15px
                }
            }
            .settings-page table.list-bookmark > tbody tr td > div.mange-name:before {
                content: "Manga Name";
            }
            .settings-page table.list-bookmark > tbody tr td > div.action:before {
                content: "Edit";
            }
            .settings-page table.list-bookmark > tbody tr td > div.post-on:before {            
                content: "Updated Time";
            }
        </style>
        <meta name="generator" content="Site Kit by Google 1.40.0">
        <script data-cfasync="false" type="text/javascript">
            (function(w, d) { var s = d.createElement("script"); s.src = "//delivery.adrecover.com/42610/adRecover.js"; s.type = "text/javascript"; s.async = true; (d.getElementsByTagName("head")[0] || d.getElementsByTagName("body")[0]).appendChild(s); })(window, document);
        </script>
        <script src="//delivery.adrecover.com/42610/adRecover.js" type="text/javascript" async=""></script> 
        <script async="" src="https://papayads.net/clnt/reaperscans/v1/adtags.js" type="text/javascript"></script> 
        <style type="text/css" id="simple-css-output">
            .wp-manga-chapter.free-chap .coin { 
                font-size: 0px !important;
            }
        </style>
        <style type="text/css" id="wp-custom-css">
            body.text-ui-light a{
                color:#ffffff;
            }
            body.manga-page .profile-manga .tab-summary .summary_image {
                width: 320px !important;
                padding: 15px;
                background: #fff;
                vertical-align: middle;
            }
            body.text-ui-light a{
                color:#fff;
            }
            body.text-ui-light .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item span {
                color:#fff;
            }
            body.text-ui-light .site-header .c-sub-header-nav.with-border {
                border-bottom: 1px solid #272727;
                background: #0000006b;
            }
            body.login div#login h1 a {
                background-size: contain;
            }
            .c-new-tag {
                display: inline-block;
                width: 30px;
                height: 16px;
                background: url(images/new.gif) center center no-repeat;
            }
            body {
                background-color:#fff;
            }
            body.text-ui-light .profile-manga{
                background-image: url("https://cdn.discordapp.com/attachments/849809165873446984/849811140552294491/bg-search-dark.jpg");
            }
            body.text-ui-light .c-search-header__wrapper{
                background-image: url("https://cdn.discordapp.com/attachments/849809165873446984/849811140552294491/bg-search-dark.jpg") !important;
            }
            body.text-ui-light.search .c-search-header__wrapper .search-content .btn-search-adv.collapsed, .c-btn.c-btn_style-2, body.search .c-search-header__wrapper .search-content .btn-search-adv{
                border-color: #fff;
            }
            body.text-ui-light.search .c-search-header__wrapper .search-content .search-form .search-submit:hover{
                background: #707070;
            }
            body.text-ui-light.search .c-search-header__wrapper .search-content .search-form .search-submit{
                background: #303030;
            }
            body.text-ui-light h1, body.text-ui-light h2, body.text-ui-light h3, body.text-ui-light h4, body.text-ui-light h5, body.text-ui-light .h1, body.text-ui-light .h2, body.text-ui-light .h3, body.text-ui-light .h4, body.text-ui-light .h5, body.text-ui-light h6, body.text-ui-light .h6{
                color: #fff;
            }
            /*body.text-ui-light .slider__content_item .post-title a {
                color: #fff;
            }*/
            body.text-ui-light .slider__content_item .post-title a:hover {
                opacity: 0.7;
            }
            body.text-ui-light .site-header .main-navigation.style-1 {
                background-image: url(https://cdn.discordapp.com/attachments/681899583529287698/861953996038078484/header-gradient.webp);
                background-size: cover;
            }
            body.text-ui-light .site-header .search-main-menu form input[type=submit]{
                background: #303030;
                border: 1px solid #d7d7d7;
            }
            body.text-ui-light .site-header .c-header__top form#blog-post-search.manga-search-form .loader-inner{
                background: #303030;
                border: 1px solid #d7d7d7;
                border-left: 0px solid #d7d7d7;
            }
            body.text-ui-light .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu {
                color: #303030;
                background: #808080;
            }
            body.text-ui-light .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu:hover {
                color: #ffffff;
                background: #fff;
            }
            body.text-ui-light .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item .c-user_menu {
                border-bottom-color: #303030;
            }
            body.text-ui-light a:hover {
                color: #fff;
            }
            body.text-ui-light .site-header .c-sub-header-nav.with-border {
                border-bottom: 1px solid #272727;
                background: #0000006b;
            }
            body.text-ui-light .slider__content_item .post-on{
                color: #fff;
            }
            body.text-ui-light .slider__content_item .chapter-item span a{
                color: #eee;
            }
            body.text-ui-light li.active::before{
                color: #888;
            }
            body.text-ui-light li.active:last-child{
                color: #ddd;
            }
            body.text-ui-light .c-sidebar {
                box-shadow: 0 0 20px 2px #000;
                background-position: center;
                background-size: cover !important;
            }
            /**
            * Hero Slide
            **/
            .profile-manga {
                background-image: url(https://cdn.discordapp.com/attachments/849809165873446984/849811140552294491/bg-search-dark.jpg);
            }
            img.lazyloaded {
            padding-top: 0px !important;
            background-color: #f5f5f5;
                background: rgba(245, 245, 245, 0.0)
            }
            /*
            * Manga page
            * */
            body.text-ui-light .manga-action .action_detail span{
                color: #ccc;
            }
            /*
            * Hamburger mobile menu
            */
            .menu_icon__open {
                margin: 4px 0;
            }
            .menu_icon__open > span {
                background-color: #ffffff;
                height: 3px
            }
            .sub-nav_list .mobile-icon{
                color: #fff;
            }
            /*
            * Mobile menu
            */
            .off-canvas{
                background:#034d63ed;
            }
            .mobile-menu.menu-collapse.off-canvas.active{
                background:#0a0a0a;
            }
            .mobile-menu.menu-collapse.off-canvas.active .off-menu ul li>a{
                color: #fff;
                font-weight: 500;
            }
            .mobile-menu.menu-collapse.off-canvas.active .off-menu ul li>a:hover{
                opacity: 0.5;
            }
            /*Fix to post-title*/
            body.text-ui-light body.manga-page .profile-manga .post-title h1{
                color:#ffffff;
            }
            body.text-ui-light .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu {
                color: #303030;
                background: #e2e2e2;
            }
            body.text-ui-light .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu:hover {
                color: #000;
                background: #fff;
            }
            body.page .c-page-content .c-page .c-page__content .page-content-listing.item-big_thumbnail .page-listing-item .page-item-detail .item-thumb {
                border-radius: 5px;
            }
            .site-header .main-navigation .main-navigation_wrap {
                padding: 18px 0;
            }
            .c-blog__heading.style-2 i{
                background: #000;
            }
            /* Auto-justify all the novels */
            .text-left{
                text-align: justify!important;
            }
            body.text-ui-light .site-footer {
                border-color: #363636;
            }
            .widget-heading{
                background: #000;
            }
            body.text-ui-light.manga-page .profile-manga .tab-summary .summary_image {
                background: none;
                width: 320px;
            }
            body.manga-page .profile-manga .tab-summary .summary_image {
                background: none;
                width:320px !important;
            }
            body.text-ui-light.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content {
                border-radius: 20px;
            }
            body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content {
                border-radius: 20px;
            }
            body.text-ui-light .c-breadcrumb .breadcrumb li a:hover {
                color:#fff;
            }
            .site-header .main-navigation.style-1 {
                background-image: url(https://cdn.discordapp.com/attachments/825099603547914241/856995777948024882/Untitled-1-Recovered_1.webp);
                background-size: cover !important;
            }
            body.text-ui-light.manga-page .profile-manga .post-title h1 {
                color:#fff;
            }
            body.text-ui-light{
                background-color: #363636;
            }
            body.text-ui-light .settings-page .nav-tabs-wrap ul.nav-tabs li.active a {
                background:#000000;
            }
            .c-blog__heading.style-2 i:after, .settings-page .nav-tabs-wrap ul.nav-tabs li.active:after {
                border-left-color: #000000;
            }
            body.text-ui-light .settings-page .nav-tabs-wrap ul.nav-tabs li:not(.active):hover a{
                color:#ffffff
            }
            body.manga-page .profile-manga {
                box-shadow: 1px 1px 20px 3px #000000;
            }
            body.modal-open #frm-wp-manga-report.modal h3 {
                padding-bottom: 20px;
                color: #fff;
            }
            body.modal-open #frm-wp-manga-report.modal label {
                font-weight: 700;
                color: #fff;
            }
            .c-new-tag {
                display: inline-block;
                width: 30px;
                height: 20px;
                background: url(https://novels.reaperscans.com/wp-content/themes/madara/images/new.gif) center center no-repeat;
            }
            .view{
                padding-left:20px;
            }
            .alert-frozenplayer{ color: #ffffff;
                text-shadow: -1px 0px 14px #00e7ff, -1px 0px 20px #00e7ff;
                text-align: center !important;
                box-sizing: content-box;
                width: fit-content;
                margin-left: auto;
                margin-right: auto;
                font-size: 25px;
                border-color: #feffd682;
                border: solid #00e7ffe3;
                box-shadow: 0 0 20px 3px #00c4ff70;
                /* border-top-right-radius: 15px; */
                /* border-bottom-left-radius: 15px; */
                background-color: #000;
                border-radius: 15px;
                    padding: 15px;
            }
            body.manga-page.text-ui-light .summary__content.show-more:after {
                background: transparent;
                background: -webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0)),to(#000));
                background: -webkit-linear-gradient(top,rgba(0,0,0,0),#0000005e);
                background: -moz-linear-gradient(top,rgba(0,0,0,0),#000);
                background: -ms-linear-gradient(top,rgba(0,0,0,0),#000);
                background: -o-linear-gradient(top,rgba(0,0,0,0),#000);
            }
            body.page .c-page-content .main-col-inner .c-blog__heading.no-icon {
                text-align: center;
            }
            body.page .c-page-content .main-col-inner .c-blog__heading.no-icon>h1 {
                font-size: 25px;
                letter-spacing: 5px;
            }
            .fa-patreon:hover{
                color: rgb(255 66 77)
            }
            .translator{
            display: inline;
                padding: .2em .6em .3em;
                font-size: 85%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
                    background-color:#5cb85c;
            }
            .wp-manga-chapter.premium .coin {
                background-color: #ff7100;
                color: #ffffff;
            }
            .fa-coins:before {
                content: "\f51e";
                    color:#fbff00;
            }
            .wp-manga-chapter.free-chap .coin {
                color: #130000;
                font-size: 18px;
            }
            .c-sidebar{
                background-image: url(https://reaperscans.com/wp-content/uploads/2021/07/cover-1-1.png.webp);
                box-shadow: 0 0 20px 2px #000;
                background-position: center;
                background-size: cover !important;
            }
            body.manga-page .profile-manga .tab-summary .post-content_item .summary-content, body.manga-page .profile-manga .post-status .post-content_item .summary-content {
                color: #000;
            }
            body.manga-page .profile-manga .tab-summary .post-content_item .summary-heading h5, body.manga-page .profile-manga .post-status .post-content_item .summary-heading h5 {
                color: #fff;
            }
            body.manga-page .profile-manga .tab-summary .post-rating span {
                color: #fff;
            }
            body.text-ui-light .c-breadcrumb .breadcrumb li a {
                color: #fff;
            }
            .c-breadcrumb .breadcrumb li a {
                color: #000;
            }
            body.manga-page .profile-manga .tab-summary .post-rating i {
                color: #fff;
            }
            body.manga-page .profile-manga .post-title h1 {
                text-align: center;
                color: #fff;
                font-size: 3.5em;
                text-shadow: 0 0 9px #000;
            }
            .profile-manga{
                background-position:center;
            }
            body.text-ui-light.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content {
                background-color: #2a2e31c2;
            }
            body.text-ui-light .summary__content {
                background-color: #2a2e31fa;
                color: #fff;
                padding: 20px;
                border-radius: 20px;
                text-align: justify;
            }
            .editor{
                display: inline;
                padding: .2em .6em .3em;
                font-size: 85%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
                background-color:#4054cc;
            }
            .release-rate{
                display: inline;
                padding: .2em .6em .3em;
                font-size: 85%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
                background-color:#ff3051;
            }
            .fa-discord:hover{
                color:#7359ff;
            }
            .fa-discord{
                padding:13px;
            }
            .fa-patreon{
                padding:13px;
            }
            #chapter-heading{
                text-align: center;
                font-size: 2.5em;
            }
            body.text-ui-light input[type=text]{
                color:#000
            }
            #buycred-checkout-page {
                background-color: #fff;
                border-radius: 80px;
            }
            .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li a:hover {
                color: #666;
            }
            .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li a{
                padding:0px;
            }
            /*Fix to admin login logo*/
            body.login div#login h1 a {
                background-size: contain;
            }
            .c-new-tag {
                display: inline-block;
                width: 30px;
                height: 16px;
                background: url(images/new.gif) center center no-repeat;
            }
            /* Fix for Dark theme */
            body {
                background-color:#fff;
            }
            body.text-ui-light .profile-manga{
                background-image: url("https://cdn.discordapp.com/attachments/849809165873446984/849811140552294491/bg-search-dark.jpg");
            }
            body.text-ui-light .c-search-header__wrapper{
                background-image: url("https://cdn.discordapp.com/attachments/849809165873446984/849811140552294491/bg-search-dark.jpg") !important;
            }
            body.text-ui-light.search .c-search-header__wrapper .search-content .btn-search-adv.collapsed, .c-btn.c-btn_style-2, body.search .c-search-header__wrapper .search-content .btn-search-adv{
                border-color: #fff;
            }
            body.text-ui-light.search .c-search-header__wrapper .search-content .search-form .search-submit:hover{
                background: #707070;
            }
            body.text-ui-light.search .c-search-header__wrapper .search-content .search-form .search-submit{
                background: #303030;
            }
            body.text-ui-light h1, body.text-ui-light h2, body.text-ui-light h3, body.text-ui-light h4, body.text-ui-light h5, body.text-ui-light .h1, body.text-ui-light .h2, body.text-ui-light .h3, body.text-ui-light .h4, body.text-ui-light .h5, body.text-ui-light h6, body.text-ui-light .h6{
                color: #fff;
            }
            body.text-ui-light .slider__content_item .post-title a {
                color: #fff;
            }
            body.text-ui-light .slider__content_item .post-title a:hover {
                opacity: 0.7;
            }
            body.text-ui-light .site-header .main-navigation.style-1 {
                background-image: url(https://cdn.discordapp.com/attachments/681899583529287698/861953996038078484/header-gradient.webp);
                background-size: cover;
            }
            body.text-ui-light .site-header .search-main-menu form input[type=submit]{
                background: #303030;
                border: 1px solid #d7d7d7;
            }
            body.text-ui-light .site-header .c-header__top form#blog-post-search.manga-search-form .loader-inner{
                    background: #303030;
                border: 1px solid #d7d7d7;
                border-left: 0px solid #d7d7d7;
            }
            body.text-ui-light .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu {
                color: #303030;
                background: #808080;
            }
            body.text-ui-light .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu:hover {
                color: #ffffff;
                background: #fff;
            }
            body.text-ui-light .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item .c-user_menu {
                border-bottom-color: #303030;
            }
            body.text-ui-light a:hover {
                color: #fff;
            }
            body.text-ui-light .site-header .c-sub-header-nav.with-border {
                border-bottom: 1px solid #272727;
                background: #0000006b;
            }
            body.text-ui-light .slider__content_item .post-on{
                color: #fff;
            }
            body.text-ui-light .slider__content_item .chapter-item span a{
                color: #eee;
            }
            body.text-ui-light li.active::before{
                color: #888;
            }
            body.text-ui-light li.active:last-child{
                color: #ddd;
            }
            body.text-ui-light .c-sidebar {
                box-shadow: 0 0 20px 2px #000;
                background-position: center;
                background-size: cover !important;
            }
            /**
            * Hero Slide
            **/
            .profile-manga {
                background-image: url(https://cdn.discordapp.com/attachments/849809165873446984/849811140552294491/bg-search-dark.jpg);
            }
            img.lazyloaded {
            padding-top: 0px !important;
            background-color: #f5f5f5;
                background: rgba(245, 245, 245, 0.0)
            }
            /*
            * Manga page
            * */
            body.text-ui-light .manga-action .action_detail span{
                color: #ccc;
            }
            /*
            * Hamburger mobile menu
            */
            .menu_icon__open {
                margin: 4px 0;
            }
            .menu_icon__open > span {
                background-color: #ffffff;
                height: 3px
            }
            .sub-nav_list .mobile-icon{
                color: #fff;
            }
            /*
            * Mobile menu
            */
            .off-canvas{
                background:#034d63ed;
            }
            .mobile-menu.menu-collapse.off-canvas.active{
                background:#0a0a0a;
            }
            .mobile-menu.menu-collapse.off-canvas.active .off-menu ul li>a{
                color: #fff;
                font-weight: 500;
            }
            .mobile-menu.menu-collapse.off-canvas.active .off-menu ul li>a:hover{
                opacity: 0.5;
            }
            /*Fix to post-title*/
            body.text-ui-light body.manga-page .profile-manga .post-title h1{
                color:#ffffff;
            }
            body.text-ui-light .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu {
                color: #303030;
                background: #e2e2e2;
            }
            body.text-ui-light .site-header .main-navigation .search-navigation .menu-search .open-search-main-menu:hover {
                color: #000;
                background: #fff;
            }
            body.page .c-page-content .c-page .c-page__content .page-content-listing.item-big_thumbnail .page-listing-item .page-item-detail .item-thumb {
                border-radius: 5px;
            }
            .site-header .main-navigation .main-navigation_wrap {
                padding: 18px 0;
            }
            .c-blog__heading.style-2 i{
                background: #000;
            }
            /* Auto-justify all the novels */
            .text-left{
                text-align: justify!important;
            }
            body.text-ui-light .site-footer {
                border-color: #363636;
            }
            .widget-heading{
                background: #000;
            }
            body.text-ui-light.manga-page .profile-manga .tab-summary .summary_image {
                background: none;
                width: 320px;
            }
            body.manga-page .profile-manga .tab-summary .summary_image {
                background: none;
                width: 320px;
            }
            body.text-ui-light.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content {
                border-radius: 20px;
            }
            body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content {
                border-radius: 20px;
            }
            body.text-ui-light .c-breadcrumb .breadcrumb li a:hover {
                color:#fff;
            }
            .site-header .main-navigation.style-1 {
                background-image: url(https://cdn.discordapp.com/attachments/825099603547914241/856995777948024882/Untitled-1-Recovered_1.webp);
                background-size: cover !important;
            }
            body.text-ui-light.manga-page .profile-manga .post-title h1 {
                color:#fff;
            }
            body.text-ui-light{
                background-color: #363636;
            }
            body.text-ui-light .settings-page .nav-tabs-wrap ul.nav-tabs li.active a {
                background:#000000;
            }
            .c-blog__heading.style-2 i:after, .settings-page .nav-tabs-wrap ul.nav-tabs li.active:after {
                border-left-color: #000000;
            }
            body.text-ui-light .settings-page .nav-tabs-wrap ul.nav-tabs li:not(.active):hover a{
                color:#ffffff
            }
            body.manga-page .profile-manga {
                box-shadow: 1px 1px 20px 3px #000000;
            }
            body.modal-open #frm-wp-manga-report.modal h3 {
                padding-bottom: 20px;
                color: #fff;
            }
            body.modal-open #frm-wp-manga-report.modal label {
                font-weight: 700;
                color: #fff;
            }
            .c-new-tag {
                display: inline-block;
                width: 30px;
                height: 20px;
                background: url(https://novels.reaperscans.com/wp-content/themes/madara/images/new.gif) center center no-repeat;
            }
            .alert-frozenplayer{ color: #ffffff;
                text-shadow: -1px 0px 14px #00e7ff, -1px 0px 20px #00e7ff;
                text-align: center !important;
                box-sizing: content-box;
                font-family: 'bebas-neue'!important;
                width: fit-content;
                margin-left: auto;
                margin-right: auto;
                font-size: 25px;
                border-color: #feffd682;
                border: solid #00e7ffe3;
                box-shadow: 0 0 20px 3px #00c4ff70;
                /* border-top-right-radius: 15px; */
                /* border-bottom-left-radius: 15px; */
                background-color: #000;
                border-radius: 15px;
                padding: 15px;
                margin-top: 15px;
            }
            body.manga-page.text-ui-light .summary__content.show-more:after {
                background: transparent;
                background: -webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0)),to(#000));
                background: -webkit-linear-gradient(top,rgba(0,0,0,0),#0000005e);
                background: -moz-linear-gradient(top,rgba(0,0,0,0),#000);
                background: -ms-linear-gradient(top,rgba(0,0,0,0),#000);
                background: -o-linear-gradient(top,rgba(0,0,0,0),#000);
            }
            body.page .c-page-content .main-col-inner .c-blog__heading.no-icon {
                text-align: center;
            }
            body.page .c-page-content .main-col-inner .c-blog__heading.no-icon>h1 {
                font-size: 25px;
                letter-spacing: 5px;
            }
            .fa-patreon:hover{
                color: rgb(255 66 77)
            }
            .translator{
                display: inline;
                padding: .2em .6em .3em;
                font-size: 85%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
                    background-color:#5cb85c;
            }
            .wp-manga-chapter.premium .coin {
                background-color: #ff7100;
                color: #ffffff;
            }
            .fa-coins:before {
                content: "\f51e";
                color:#fbff00;
            }
            .wp-manga-chapter.free-chap .coin {
                color: #130000;
                font-family: 'BebasNeue-Regular';
                font-size: 18px;
            }
            .c-sidebar{
                background-image: url(https://reaperscans.com/wp-content/uploads/2021/07/cover-1-1.png.webp);
                box-shadow: 0 0 20px 2px #000;
                background-position: center;
                background-size: cover !important;
            }
            body.manga-page .profile-manga .tab-summary .post-content_item .summary-heading h5, body.manga-page .profile-manga .post-status .post-content_item .summary-heading h5 {
                color: #fff;
            }
            body.manga-page .profile-manga .tab-summary .post-rating span {
                color: #fff;
            }
            .c-breadcrumb .breadcrumb li a {
                color: #000;
            }
            body.manga-page .profile-manga .tab-summary .post-rating i {
                color: #fff;
            }
            body.manga-page .profile-manga .post-title h1 {
                text-align: center;
                color: #fff;
                font-size: 3.5em;
                text-shadow: 0 0 9px #000;
            }
            .profile-manga{
                background-position:center;
            }
            body.text-ui-light.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content {
                background-color: #2a2e31c2;
            }
            body.text-ui-light .summary__content {
                background-color: #2a2e31fa;
                color: #fff;
                padding: 20px;
                border-radius: 20px;
                text-align: justify;
            }
            .editor{
                display: inline;
                padding: .2em .6em .3em;
                font-size: 85%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
                    background-color:#4054cc;
            }
            .release-rate{
                display: inline;
                padding: .2em .6em .3em;
                font-size: 85%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
                    background-color:#ff3051;
            }
            .fa-discord:hover{
                color:#7359ff;
            }
            .fa-discord{
                padding:13px;
            }
            .fa-patreon{
                padding:13px;
            }
            .fa-paypal{
                padding:13px;
            }
            .fa-paypal:hover{
                color:#0070ba
            }
            #chapter-heading{
                text-align: center;
                font-size: 2.5em;
            }
            body.text-ui-light input[type=text]{
                color:#000
            }
            #buycred-checkout-page {
                background-color: #fff;
                border-radius: 80px;
            }
            .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li a:hover {
                color: #666;
            }
            .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list li a{
                padding:0px;
            }
            body.modal-open .modal .modal-content .modal-body .login label {
                color: #fff;
            }
            body.text-ui-light #sign-up a:not(:hover), body.text-ui-light #login a:not(:hover){
                color:#fff
            }
            #sign-up > p.nav > a {
                margin:0 10px;
            }
            body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .count-comment .action_detail, body.manga-page .profile-manga .tab-summary .summary_content_wrap .summary_content .post-status .manga-action .add-bookmark .action_detail{
            color:#000
            }
            body.text-ui-light.manga-page .profile-manga .tab-summary .post-content_item .summary-content{
                color:#fff
            }
            .summary_content_wrap > div.summary_image {
                width: 266.67px !important;
                padding: 0px !important;
            }
            @media (min-width: 576px) and (max-width: 768px){
                .content-area .container {
                    max-width: 90%;
                }
            }
            .comic {
                display: inline;
                padding: .2em .6em .3em;
                font-size: 85%;
                font-weight: 700;
                line-height: 1;
                color: #f00;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
                background-color: #000000;
            }
            body.text-ui-light .comic a:not(:hover) {
                color: #ff0a0a;
            }
            body.text-ui-light .c-blog-post .entry-content {
                color: #fff;
            }
            .form.myCRED-buy-form input[name=amount] {
                margin-left: 1px;
            }
            .form.myCRED-buy-form {
                background-image: url(https://reaperscans.com/wp-content/uploads/2021/07/cover-1.png.webp);
                background-size: cover;
                background-position: center top;
                color: #fff;
                border-radius: 20px;
            }
            .form.myCRED-buy-form label{
                font-size: 40px;
                font-weight: 700;
                text-shadow: 0 0 8px #000;
            }
            .form.myCRED-buy-form input[name=amount] {
                color: #000;
            }
            body.page .c-page-content .main-col-inner .entry-header .entry-title .item-title {
                text-align: center;
            }
            button#checkout-action-button, .form.myCRED-buy-form input[type=submit] {
                background: #2b2b2b;
                color: #fff;
                font-size: 30px;
                letter-spacing: 5px;
            }
            #frm-wp-manga-buy-coin{
                z-index:1049
            }
            .btn-login {
                background-color: #0a0a0a;
            }
            #wf-onboarding-tour-overlay {
                position: none;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background-color: rgba(0,0,0,0.3);
                z-index: 9980;
                padding: 0;
                display: -webkit-flex;
                display: flex;
                -webkit-align-items: center;
                align-items: center;
                -webkit-justify-content: flex-start;
                justify-content: flex-start;
                -webkit-flex-direction: column;
                flex-direction: column;
            }
            .content-blocked.premium-block {
                padding: 100px 0;
                background: #f2f2f2;
                border: 1px solid #ccc;
                text-align: center;
                background-image: url(https://novels.reaperscans.com/wp-content/uploads/2021/06/reaperlogobuycgap.png);
                background-size: cover;
                font-family: 'Staatliches-Regular';
                font-size: 2em;
                text-shadow: 0 0 6px #fff;
                letter-spacing: 2px;
            }
            body.manga-page .profile-manga .tab-summary .post-content_item .summary-content, body.manga-page .profile-manga .post-status .post-content_item .summary-content {
                word-break: initial;
            }
            div#n2-ss-3 .n2-font-00c74bf3ec4b9ace5776533bdf9d0611-hover {
                color: #ffffff;
                font-size: 225%;
                text-shadow: none;
                line-height: normal;
                font-weight: normal;
                font-style: normal;
                text-decoration: none;
                text-align: center;
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
                font-weight: 400;
                text-shadow: 0 0 11px #000, 0 0 12px #000;
            }
            span.manga-title-badges.custom.manhua {
                background-color: #ff8600;
            }
            span.manga-title-badges.custom.web-novel {
                background-color: #1e7c00;
            }
            body.text-ui-light .settings-page .tabs-content-wrap .tab-group-item .tab-item .history-content .item-infor .chapter span a{
                color:#fff
            }
            body.text-ui-light .tabs-content-wrap {
                background-color: #000;
                padding: 20px;
                border-radius: 20px;
            }
            body.text-ui-light .history-content {
                width: auto;
                height: 120px;
                background-color: #2d2d2d;
                border-radius: 20px;
                box-shadow: 0 0 20px 0px #ffffff4a;
            }
            .genres_wrap .genres__collapse .genres ul li a:hover{
                color:#fff;
            }
            body.text-ui-light .history-content {
                height: auto; 
            }
            .site-header .c-sub-header-nav .c-sub-nav_wrap .c-modal_item .c-user_item .c-user_menu {
                opacity: 0;
                visibility: hidden;
                position: absolute;
                list-style: none;
                padding: 0;
                background-color: #f3f3f3;
                min-width: 150px;
                max-width: 250px;
                text-align: center;
                top: 100%;
                margin-top: 6px;
                right: 0;
                padding: 10px;
                z-index: 9999;
                border-top: 1px solid #ffffff;
                white-space: nowrap;
                text-transform: uppercase;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
                box-shadow: 12px 15px 20px 0px #0000005c;
            }
            .scan{
                display: inline;
                padding: .2em .6em .3em;
                font-size: 85%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
                background-color:#8c00ff;
            }
            .manga-title-badges.custom.manga{
                background-color: #7b7b7b;
            }
            body .body-wrap{
                background-color:#ebebeb7a
            }
            .main-navigation_wrap {
                display: inline;
            }
            .wrap_branding {
                padding-bottom: 5px;
                padding-top:5px;
            }
            .site-header .main-navigation.style-1 .main-menu {
                width: 50%;
                margin-left: 10%;
            }
            body.text-ui-light .popular-slider .slider__container .slider__item .item__wrap {
                background-color: rgba(235,235,235,.2);
                border-radius: 20px;
            }
            .slider__thumb_item.c-image-hover {
                border-radius: 20px;
            }
            .popular-slider .slider__thumb_item .manga-title-badges, .manga-slider .slider__thumb_item .manga-title-badges {
                position: absolute;
                z-index: 100;
                border-top-left-radius: 20px;
            }
            ss3-force-full-width {
                box-shadow: 0 0 20px 0px #000;
            }
            img.img-responsive.effect-fade.ls-is-cached.lazyloaded:hover {
                box-shadow: 0 0 20px #000;
                transition: all 0.3s ease-out !important;
            }
            .blur{
                filter:blur(20px);
            }
            body.reading-manga.text-ui-light .entry-header .c-selectpicker select.selectpicker, body.reading-manga.text-ui-light .c-select-bottom .c-selectpicker select.selectpicker {
                border-radius: 30px;
            }
            body.reading-manga .entry-header .select-pagination .nav-links .nav-previous a, body.reading-manga .c-select-bottom .select-pagination .nav-links .nav-previous a {
                border-radius: 30px;
            }
            body.reading-manga .entry-header .select-pagination .nav-links .nav-next a {
                border-radius: 30px;
            }
            body.text-ui-light .go-to-top {
                border-radius: 30px;
            }
            .go-to-top {
                border-radius: 30px;
                background-color: rgb(0 0 0 / 53%)!important;
            }
            .dark{
                background-color: rgb(0 0 0 / 53%)!important;
            }
            .c-blog__heading.style-2.font-heading {
                font-family: 'Tachyon Regular';
            }
            .c-page .description-summary .summary__content{ 
                white-space: pre-line;
            }
            body.text-ui-light .summary__content {
                text-align: justify;
                line-height: 2em;
            }
            .site-header .c-sub-header-nav .c-sub-nav_wrap .sub-nav_content .sub-nav_list {
                max-height: 40px;
            }
            a.btn.home {
                border-radius: 20px;
            }
            body.reading-manga .entry-header .wp-manga-nav .select-pagination {
                text-align: center;
                position: sticky !important;
                bottom: 5px;
                right: 0;
            }
            body.reading-manga .entry-header .wp-manga-nav c.select-bottom .select-pagination {
                text-align: center;
                position: sticky !important;
                bottom: 5px;
                right: 0;
            }
            @media screen and (max-width: 463px) {
                h3.h5{
                    font-size:3.2vw;
                }
            }
            @media screen and (min-width: 464px) and (max-width:767px) {
                h3.h5{
                    font-size:15px;
                }
            }
            @media screen and (min-width: 768px) and ( max-width:992px) {
                h3.h5{
                    font-size:1.36vw;
                }
            }
            @media screen and (min-width: 993px) {
                h3.h5{
                    font-size:16px;
                }
            }
            .post-title.font-title {
                height: 30px;
            }
            body.page .c-page-content .c-page .c-page__content .page-content-listing .page-listing-item .page-item-detail .item-summary .rating {
                margin-bottom: 0px;
            }
            body.reading-manga .entry-header .select-pagination, body.reading-manga .c-select-bottom .select-pagination {
                float: right;
                margin: 0 -5px;
            }
            .entry-header .wp-manga-nav .select-pagination .nav-links .mobile-nav-btn {
                left: -33px !important;
                right: auto !Important;
                top: 0px !important;
            }
            .summary_image {
                text-align: -webkit-center;
            }
            .nav-tabs {
                border-bottom: none;
            }
            .nav-tabs .nav-link {
                margin-bottom: 4px;
                margin-top:4px;
                border: 1px solid transparent;
                border-top-left-radius: .25rem;
                border-top-right-radius: .25rem;
                margin-right: 5px;
                border-radius: 20px;
                background-color: #16161699;
            }
            .video-thumb {
                border-bottom: solid;
            }
            .image-thumb{
                border-bottom:solid;
            }
            .series-image {
                border-radius: 20px;
                height: 100%;
                object-fit: cover;
                object-position: top;
                position: absolute;
                width: 100%;
            }
            .info{
                background-image: linear-gradient(to bottom,rgba(0,0,0,0) 0,black 100%,rgba(0,0,0,0.9) 100%);
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                padding-left: 9px;
                padding-right:7px;
                padding-bottom:10px;
                z-index: 2;
                margin-top:auto;
                padding-top: 50px;
            }
            .title-card{
                color:#fff;
            }
            a.link{
                display:contents;
            }
            .card {
                background-color: transparent;
            }
            body.text-ui-light .body-wrap {
                background-color: #171717;
            }
            body.manga-page .page-content-listing.single-page .listing-chapters_wrap > ul.main.version-chap li:after, .shortcode-manga-chapters .listing-chapters_wrap > ul.main.version-chap li:after {
                visibility: hidden;
            }
            span.badge.badge-md.text-uppercase.bg-darker-overlay {
                background: #252525;
                padding-right: 15px;
                padding-left: 15px;
                padding-top: 10px;
                padding-bottom: 10px;
                text-align:center
            }
            span.manga-title-badges.custom.release {
                -webkit-transform: rotate( 325deg );
                position: absolute;
                top: 15px;
                padding-right: 35px;
                padding-left: 35px;
                left: -35px;
            }
            @media screen and (max-width: 463px){
                .card.series{
                    height:250px;
                }
            }
            @media screen and (min-width: 464px){
                .card.series{
                    height:250px;
                }
            }
            .get-lost-fucker{
                padding: 12px 15px;
                text-overflow: unset;
                white-space: unset;
                overflow: hidden;
                border-bottom: 1px solid #383838;
                position: relative;
            }
            .posic{
                width: 25px;
                height: 25px;
                text-align: center;
                line-height: 25px;
                font-size: 1em;
                color: #888;
                position: absolute;
                top: 30px;
                left: 15px;
                border: .5px solid #888;
                border-radius: 3px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
            }
            .fotinhofofa{
                margin-left: 37px;
                float: left;
                overflow: hidden;
                width: 58px;
                max-height: 72px;
                margin-right: 10px;
                border-radius: 3px;
            }
            .title-and-infos{
                overflow: hidden;
                text-overflow: unset;
                white-space: unset;
            }
            .list-trending{
                width: 100%;
                height: auto;
                padding: 0;
                border: none;
                margin-bottom: 0;
                margin-right: 0;
                float: none;
            }
            .nav.nav-tabs.gu{
                padding-left: 15px;
                padding-right: 15px;
                border-radius: 5px;
                background-color: #000;
                padding-top: 5px;
                padding-bottom: 5px;
            }
            .gu.nav-item.nav-link{
                border: 1px solid transparent;
                margin-right: 5px;
                background-color: #171717;
                color: #fff;
                padding: 5px;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 5px;
                margin-left:5px;
            }
            .gu.nav-tabs .nav-item.show .nav-link, .gu.nav-tabs .nav-link.active {
                color: #ffffff;
                background-color: #5a5a5a;
                padding: 5px;
                /* border-color: #dee2e6 #dee2e6 #fff; */
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 5px;
            }
            .card.series.novel {
                height: 250px;
            }
            @media (min-width: 1200px){
                .container, .container-lg, .container-md, .container-sm, .container-xl {
                    max-width: 1220px;
                }
            }
            .time-published{
                font-size: 11px;
            }
            @media screen and (max-width: 400px){
                .time-published {
                    font-size: 10px;
                }
            }  
            .card.series {
                height: 200px;
            }
                span.manga-title-badges.custom.release {
                -webkit-transform: rotate(325deg);
                position: absolute;
                top: 15px;
                padding-right: 35px;
                padding-left: 35px;
                left: -35px;
                padding-top: 5px;
                padding-bottom: 5px;
            }
            span.manga-title-badges.custom {
                font-size: 9px;    
            }
            span.badge.badge-md.text-uppercase.bg-darker-overlay {
                font-size: 9px;
                background: #252525;
                padding-right: 12px;
                padding-left: 12px;
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: center;
            }
            .rating-prc .rtp .rtb {
                margin: 0;
                font-size: 12px;
                width: 67px;
                height: 14px;
            }
            .rating-prc .rtp .rtb {
                position: relative;
                overflow: hidden;
                color: #ffc700;
                height: 15px;
                line-height: 1;
                width: 85px;
                font-size: 15px;
                margin: 0 auto;
            }
            .rating-prc .rtp .rtb:before {
                content: "\f005\f005\f005\f005\f005";
                font-family: "font awesome 5 free";
                position: absolute;
                top: 0;
                left: 0;
                color: #686868;
                height: 15px;
            }
            .rating-prc .rtp .rtb span {
                margin: 0;
                font-size: inherit;
                color: inherit!important;
            }
            .rating-prc .rtp .rtb span {
                overflow: hidden;
                top: 0;
                left: 0;
                position: absolute;
                padding-top: 15px;
            }
            .rating-prc .rtp .rtb span:before {
                content: "\f005\f005\f005\f005\f005";
                font-family: "font awesome 5 free";
                font-weight: 900;
                top: 0;
                position: absolute;
                left: 0;
            }
            .rating-prc .rtp {
                overflow: hidden;
                display: inline-block;
                float: left;
            }
            .page-content-listing.single-page .cols-4 ul.version-chap.no-volumn li, .page-content-listing.single-page .cols-4 ul.version-chap.volumns .sub-chap .sub-chap-list li {
                flex: 1 0 25%;
                /* padding: 10px; */
                /* border: 1px solid #333; */
                padding: 5px 10px;
                border: 1px solid #333;
                font-size: 14px;
                margin: 0 5px;
                margin-bottom: 10px;
                /* position: relative; */
                border-radius: 5px;
                        transition: ease-out 0.4s; 
            }
            .page-content-listing.single-page .cols-4 ul.version-chap.no-volumn li:hover, .page-content-listing.single-page .cols-4 ul.version-chap.volumns .sub-chap .sub-chap-list li:hover {
                transform: scale3d(1.2, 1.2, 1.0);
                box-shadow: inset 0px -200px 0 0 #000000;
                border: 1px solid #ffffff;
            }
            .roi-table{
                height:400px;
                overflow:auto;
                margin-bottom:50px
                    
            }
            .roi-table::-webkit-scrollbar {
                width: 15px;
            }
            /* Track */
            .roi-table::-webkit-scrollbar-track {
                border-radius: 10px;
            }
            /* Handle */
            .roi-table::-webkit-scrollbar-thumb {
                background: #262626;
                border-radius: 10px;
            }
            body.manga-page .page-content-listing.single-page .listing-chapters_wrap > ul.main.version-chap li, .shortcode-manga-chapters .listing-chapters_wrap > ul.main.version-chap li {
                position: inherit;
            }
            .series-content{
                margin-bottom:20px;
            }
            body.manga-page .page-content-listing.single-page .listing-chapters_wrap > ul.main.version-chap li .chapter-release-date, .shortcode-manga-chapters .listing-chapters_wrap > ul.main.version-chap li .chapter-release-date {
                top: auto;
            }
            .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }
            /* Hide default HTML checkbox */
            .switch input {
            opacity: 0;
            width: 0;
            height: 0;
            }
            /* The slider */
            .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
            }
            .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            }
            input:checked + .slider {
            background-color: #2196F3;
            }
            input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
            }
            input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
            }
            /* Rounded sliders */
            .slider.round {
            border-radius: 34px;
            }
            .slider.round:before {
            border-radius: 50%;
            }
            .page-content-listing.single-page li.wp-manga-chapter.unread a {
                color: #001fff !important;
            }
            body.manga-page .page-content-listing.single-page .listing-chapters_wrap.cols-4 ul.main.version-chap.no-volumn li:last-child:after, .shortcode-manga-chapters .listing-chapters_wrap.cols-4 ul.main.version-chap.no-volumn li:last-child:after, body.manga-page .page-content-listing.single-page .listing-chapters_wrap.cols-4 ul.main.version-chap.no-volumn .sub-chap-list li:last-child:after, .shortcode-manga-chapters .listing-chapters_wrap.cols-4 ul.main.version-chap.no-volumn .sub-chap-list li:last-child:after, body.manga-page .page-content-listing.single-page .listing-chapters_wrap.cols-3 ul.main.version-chap.no-volumn li:last-child:after, .shortcode-manga-chapters .listing-chapters_wrap.cols-3 ul.main.version-chap.no-volumn li:last-child:after, body.manga-page .page-content-listing.single-page .listing-chapters_wrap.cols-3 ul.main.version-chap.no-volumn .sub-chap-list li:last-child:after, .shortcode-manga-chapters .listing-chapters_wrap.cols-3 ul.main.version-chap.no-volumn .sub-chap-list li:last-child:after, body.manga-page .page-content-listing.single-page .listing-chapters_wrap.cols-2 ul.main.version-chap.no-volumn li:last-child:after, .shortcode-manga-chapters .listing-chapters_wrap.cols-2 ul.main.version-chap.no-volumn li:last-child:after, body.manga-page .page-content-listing.single-page .listing-chapters_wrap.cols-2 ul.main.version-chap.no-volumn .sub-chap-list li:last-child:after, .shortcode-manga-chapters .listing-chapters_wrap.cols-2 ul.main.version-chap.no-volumn .sub-chap-list li:last-child:after {
                visibility: hidden;
                opacity: 1;
            }
            span.badge.badge-md.text-uppercase.bg-darker-overlay {
                width: 69px;
            }
            .StripeElement {
                box-sizing: border-box;
                height: 40px;
                padding: 10px 12px;
                border: 1px solid transparent;
                border-radius: 4px;
                background-color: white;
                box-shadow: 0 1px 3px 0 #e6ebf1;
                -webkit-transition: box-shadow 150ms ease;
                transition: box-shadow 150ms ease;
                width: 100%;
            }
            .blueimp-gallery,.blueimp-gallery>.slides>.slide>.slide-content,.blueimp-gallery>.slides>.slide>.slide-content>img{
                position:absolute;
                top:0;
                right:0;
                bottom:0;
                left:0;
                -webkit-transition:opacity .2s linear;
                -moz-transition:opacity .2s linear;
                -ms-transition:opacity .2s linear;
                -o-transition:opacity .2s linear;
                transition:opacity .2s linear;
                backface-visibility:hidden;
                -moz-backface-visibility:hidden;
            }
            .blueimp-gallery>.slides>.slide>.slide-content,.blueimp-gallery>.slides>.slide>.slide-content>img{
                margin:auto;
                width:auto;
                height:auto;
                max-width:100%;
                max-height:100%;
                opacity:1;
            }
            .blueimp-gallery{
                position:fixed;
                z-index:999999;
                overflow:hidden;
                background:#000;
                opacity:0;
                display:none;
                direction:ltr;
                -ms-touch-action:pinch-zoom;
                touch-action:pinch-zoom;
            }
            .blueimp-gallery-carousel{
                position:relative;
                z-index:auto;
                margin:1em auto;
                padding-bottom:56.25%;
                box-shadow:0 0 4px rgba(0,0,0,.1);
                -ms-touch-action:pan-y pinch-zoom;
                touch-action:pan-y pinch-zoom;
                display:block;
            }
            .blueimp-gallery-display{
                display:block;
                opacity:1;
            }
            .blueimp-gallery>.slides{
                position:relative;
                height:100%;
                overflow:hidden;
            }
            .blueimp-gallery-carousel>.slides{
                position:absolute;
            }
            .blueimp-gallery>.slides>.slide{
                visibility:hidden;
                position:relative;
                float:left;
                height:100%;
                text-align:center;
                -webkit-transition-timing-function:cubic-bezier(0.645,0.045,0.355,1);
                -moz-transition-timing-function:cubic-bezier(0.645,0.045,0.355,1);
                -ms-transition-timing-function:cubic-bezier(0.645,0.045,0.355,1);
                -o-transition-timing-function:cubic-bezier(0.645,0.045,0.355,1);
                transition-timing-function:cubic-bezier(0.645,0.045,0.355,1);
            }
            .blueimp-gallery>.slides>.slide-active,.blueimp-gallery>.slides>.slide-next,.blueimp-gallery>.slides>.slide-prev{
                visibility:visible;
            }
            .blueimp-gallery>.slides>.slide-loading{
                background:url(../img/loading.gif) center no-repeat;
                background-size:64px 64px;
            }
            .blueimp-gallery-smil>.slides>.slide-loading{
                background-image:url(../img/loading.svg);
            }.blueimp-gallery>.slides>.slide-loading>.slide-content{
                opacity:0;
            }
            .blueimp-gallery>.slides>.slide-error{
                background:url(../img/error.png) center no-repeat;
            }
            .blueimp-gallery-svgasimg>.slides>.slide-error{
                background-image:url(../img/error.svg);
            }
            .blueimp-gallery>.slides>.slide-error>.slide-content{
                display:none;
            }
            .blueimp-gallery-display>.next,.blueimp-gallery-display>.prev{
                position:absolute;
                top:50%;
                left:15px;
                width:8px;
                height:20px;
                padding:10px 14px 10px 18px;
                margin-top:-23px;
                -webkit-box-sizing:content-box;
                -moz-box-sizing:content-box;
                box-sizing:content-box;
                background:#222 url(../img/prev.png) center no-repeat;
                background-color:rgba(0,0,0,.5);
                border:3px solid #fff;
                -webkit-border-radius:30px;
                -moz-border-radius:30px;
                border-radius:30px;
                opacity:.5;
                cursor:pointer;
                display:none;
            }
            .blueimp-gallery-display>.next{
                right:15px;
                left:auto;
                background-image:url(../img/next.png);
            }
            .blueimp-gallery-svgasimg>.prev{
                background-image:url(../img/prev.svg);
            }
            .blueimp-gallery-svgasimg>.next{
                background-image:url(../img/next.svg);
            }
            .blueimp-gallery-display>.close{
                position:absolute;
                top:15px;
                right:15px;
                width:30px;
                height:30px;
                background:url(../img/close.png) center no-repeat;
                opacity:.8;
                cursor:pointer;
                display:none;
            }
            .blueimp-gallery-svgasimg>.close{
                background-image:url(../img/close.svg);
            }
            .blueimp-gallery>.title{
                position:absolute;
                top:15px;
                left:15px;
                margin:0 60px 0 0;
                font-size:20px;
                line-height:30px;
                color:#fff;
                text-shadow:0 0 2px #000;
                opacity:.8;
                display:none;
            }
            .blueimp-gallery-display>.play-pause{
                position:absolute;
                right:15px;
                bottom:15px;
                width:30px;
                height:30px;
                background:url(../img/play-pause.png) 0 0 no-repeat;
                cursor:pointer;
                opacity:.5;
                display:none;
            }
            .blueimp-gallery-svgasimg>.play-pause{
                background-image:url(../img/play-pause.svg);
            }
            .blueimp-gallery-playing>.play-pause{
                background-position:-30px 0;
            }
            .blueimp-gallery-controls>.close,.blueimp-gallery-controls>.next,.blueimp-gallery-controls>.play-pause,.blueimp-gallery-controls>.prev,.blueimp-gallery-controls>.title{
                display:block;
                -webkit-transform:translateZ(0);
                -moz-transform:translateZ(0);
                -ms-transform:translateZ(0);
                -o-transform:translateZ(0);
                transform:translateZ(0);
            }
            .blueimp-gallery-left>.prev,.blueimp-gallery-right>.next,.blueimp-gallery-single>.next,.blueimp-gallery-single>.play-pause,.blueimp-gallery-single>.prev{
                display:none;
            }
            .blueimp-gallery>.close,.blueimp-gallery>.next,.blueimp-gallery>.play-pause,.blueimp-gallery>.prev,.blueimp-gallery>.slides>.slide>.slide-content{
                -webkit-user-select:none;
                -khtml-user-select:none;
                -moz-user-select:none;
                -ms-user-select:none;
                user-select:none;
            }
            .blueimp-gallery>.close:hover,.blueimp-gallery>.next:hover,.blueimp-gallery>.play-pause:hover,.blueimp-gallery>.prev:hover,.blueimp-gallery>.title:hover{
                color:#fff;
                opacity:1;
            }
            *+html .blueimp-gallery>.slides>.slide{
                min-height:300px;
            }
            *+html .blueimp-gallery>.slides>.slide>.slide-content{
                position:relative;
            }
            *+html .blueimp-gallery>.slides>.slide>.slide-content>img{
                position:relative;
            }
            @supports (object-fit:contain){
                .blueimp-gallery-contain>.slides>.slide>.slide-content,.blueimp-gallery-contain>.slides>.slide>.slide-content>img{
                    width:100%;
                    height:100%;
                    object-fit:contain;
                }
            }
            @media (prefers-color-scheme:light){
                .blueimp-gallery-carousel{
                    background:#fff
                }
            }
            .blueimp-gallery>.indicator{
                position:absolute;
                top:auto;
                right:15px;
                bottom:15px;
                left:15px;
                margin:0 40px;
                padding:0;
                list-style:none;
                text-align:center;
                line-height:10px;
                display:none;
                -webkit-user-select:none;
                -khtml-user-select:none;
                -moz-user-select:none;
                -ms-user-select:none;
                user-select:none;
            }
            .blueimp-gallery>.indicator>li{
                display:inline-block;
                position:relative;
                width:9px;
                height:9px;
                margin:6px 3px 0 3px;
                -webkit-box-sizing:content-box;
                -moz-box-sizing:content-box;
                box-sizing:content-box;
                border:1px solid transparent;
                background:#ccc;
                background:rgba(255,255,255,.25) center no-repeat;
                border-radius:5px;
                box-shadow:0 0 2px #000;
                opacity:.5;
                cursor:pointer;
            }
            *+html .blueimp-gallery>.indicator>li{
                display:inline
            }
            .blueimp-gallery>.indicator>.active,.blueimp-gallery>.indicator>li:hover{
                background-color:#fff;
                border-color:#fff;
                opacity:1;
            }
            .blueimp-gallery>.indicator>li:after{
                opacity:0;
                display:block;
                position:absolute;
                content:'';
                top:-5em;
                left:4px;
                width:75px;
                height:75px;
                transition:transform .6s ease-out,opacity .4s ease-out;
                transform:translateX(-50%) translateY(0) translateZ(0);
                pointer-events:none;
            }
            .blueimp-gallery>.indicator>li:hover:after{
                opacity:1;
                border-radius:50%;
                background:inherit;
                transform:translateX(-50%) translateY(-5px) translateZ(0);
            }
            .blueimp-gallery>.indicator>.active:after{
                display:none;
            }
            .blueimp-gallery-controls>.indicator{
                display:block;
                -webkit-transform:translateZ(0);
                -moz-transform:translateZ(0);
                -ms-transform:translateZ(0);
                -o-transform:translateZ(0);
                transform:translateZ(0);
            }
            .blueimp-gallery-single>.indicator{
                display:none;
            }
            .blueimp-gallery>.slides>.slide>.video-content>.video-cover,.blueimp-gallery>.slides>.slide>.video-content>iframe,.blueimp-gallery>.slides>.slide>.video-content>video{
                position:absolute;
                top:0;
                left:0;
                width:100%;
                height:100%;
                border:none;
            }
            .blueimp-gallery>.slides>.slide>.video-content>.video-cover{
                background:center no-repeat;
                background-size:contain;
            }
            .blueimp-gallery>.slides>.slide>.video-iframe>.video-cover{
                background-color:#000;
                background-color:rgba(0,0,0,.7);
            }
            .blueimp-gallery>.slides>.slide>.video-content>.video-play{
                position:absolute;
                top:50%;
                right:0;
                left:0;
                margin:-64px auto 0;
                width:128px;
                height:128px;
                background:url(../img/video-play.png) center no-repeat;
                opacity:.8;
                cursor:pointer;
            }
            .blueimp-gallery-svgasimg>.slides>.slide>.video-content>.video-play{
                background-image:url(../img/video-play.svg);
            }
            .blueimp-gallery>.slides>.slide>.video-playing>.video-cover,.blueimp-gallery>.slides>.slide>.video-playing>.video-play{
                display:none;
            }
            .blueimp-gallery>.slides>.slide>.video-loading>.video-play{
                background:url(../img/loading.gif) center no-repeat;
                background-size:64px 64px;
            }
            .blueimp-gallery-smil>.slides>.slide>.video-loading>.video-play{
                background-image:url(../img/loading.svg);
            }
            *+html .blueimp-gallery>.slides>.slide>.video-content{
                height:100%;
            }
            *+html .blueimp-gallery>.slides>.slide>.video-content>.video-play{
                left:50%;
                margin-left:-64px;
            }
            .blueimp-gallery>.slides>.slide>.video-content>.video-play:hover{
                opacity:1;
            }
            /*# sourceMappingURL=blueimp-gallery.min.css.map */
        </style> 
        <script type="application/ld+json">{
                                    "@context": "http://schema.org",
                                    "@type": "Article",
                                    "mainEntityOfPage": {
                                        "@type": "WebPage",
                                        "@id": "https://google.com/article"
                                    },
                                    "headline": "Nano Machine",
                                    "image": {
                                        "@type": "ImageObject",
                                        "url": "https://reaperscans.com/wp-content/uploads/2021/07/NANO-1.jpg",
                                        "height": 391,
                                        "width": 696							},
                                    "datePublished": "2021-07-16 15:10:12",
                                    "dateModified": "2021-11-05 10:47:39",
                                    "author": {
                                        "@type": "Person",
                                        "name": "Han-Joong-Wueol-Ya"
                                    },
                                    "publisher": {
                                        "@type": "Organization",
                                        "name": "Reaper Scans",
                                        "logo": {
                                            "@type": "ImageObject",
                                            "url": "https://reaperscans.com/wp-content/uploads/2021/07/logo-reaper-2.png"
                                        }
                                    },
                                    "description": "After being held in disdain and having his life put in danger, an orphan from the Demonic Cult, Cheon Yeo-Woon, has an unexpected visit from his descendant from the "
                                }
        </script>
    </head>
    <body data-rsssl="1" class="wp-manga-template-default single single-wp-manga postid-87 wp-embed-responsive wp-manga-page manga-page page header-style-2 text-ui-light webp-support">
        <script data-cfasync="false">
            if(ewww_webp_supported){document.body.classList.add("webp-support");}
        </script>
        <div class="wrap">
            <div class="body-wrap">
                <header id="header" class="fixed-top d-flex align-items-center">
                    <div class="container d-flex align-items-center">
                        <h1 class="logo me-auto">
                            <a href="<?php echo site_url('senna/dashboard'); ?>"><span>Sen</span>Novel</a>
                        </h1>
                        <!-- Uncomment below if you prefer to use an image logo -->
                        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->
                        <nav id="navbar" class="navbar order-last order-lg-0">
                            <ul>
                                <li>
                                    <a class="nav-link scrollto active" href="<?php echo site_url('senna/dashboard'); ?>">Home</a>
                                </li>
                                <li class="dropdown"><a href="#"><span style="color: #000000;">Stories</span> <i class="bi bi-chevron-down" style="color: #000000;"></i></a>
                                    <ul>
                                        <li class="dropdown"><a href="#" style="color: #000000;">Fantasy <i class="bi bi-chevron-down" style="color: #000000;"></i></a>
                                            <ul>
                                                <li><a href="#" style="color: #000000;">I'll Live Until The End</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" style="color: #000000;">Fan Fiction <i class="bi bi-chevron-down" style="color: #000000;"></i></a>
                                            <ul>
                                                <li><a href="<?php echo site_url('Stories/third'); ?>" style="color: #000000;">Tensura FanFic</a></li>
                                                <li><a href="#" style="color: #000000;">The Cry of War</a></li>
                                                <li><a href="<?php echo site_url('Stories/first'); ?>" style="color: #000000;">Stuck With You</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" style="color: #000000;">Romance <i class="bi bi-chevron-down" style="color: #000000;"></i></a>
                                            <ul>
                                                <li><a href="#" style="color: #000000;">His Queen</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('welcome/action'); ?>" style="color: #000000;">Action</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <!-- <a href="<?php echo site_url('welcome/about'); ?>" style="color: #000000;">About Me</a> -->
                                </li>
                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
                        </nav><!-- .navbar -->

                            <!-- <a href="<?php echo site_url('stories/first'); ?>" class="get-started-btn scrollto">Start Reading</a> -->
                    </div>
                </header>
                <section id="service" class="services section-bg ">
                    <div class="site-content">
                        <div class="post-628 wp-manga type-wp-manga status-publish has-post-thumbnail hentry wp-manga-author-245 wp-manga-genre-action wp-manga-genre-adventure wp-manga-genre-fantasy wp-manga-genre-martial-arts wp-manga-genre-shounen wp-manga-genre-supernatural">
                            <div class="profile-manga summary-layout-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="post-title">
                                                <!-- <span class="manga-title-badges custom manhwa">manhwa</span> -->
                                                <h1 style="margin-bottom:5px;"><b><?= $data[0]["judul"] ?></b></h1>
                                            </div>
                                            <div class="tab-summary ">
                                                <div class="summary_image">
                                                    <a href="#">
                                                        <img width="290" height="395" data-src="<?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?>" data-srcset="<?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?> 290w, <?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?> 220w, <?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?> 110w, <?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?> 175w" data-sizes="(max-width: 290px) 100vw, 290px" class="img-responsive effect-fade ls-is-cached lazyloaded" src="<?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?>" style="padding-top:395px;" alt="NANO" data-src-webp="<?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?>" sizes="(max-width: 290px) 100vw, 290px" srcset="<?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?> 290w, <?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?> 220w, <?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?> 110w, <?php echo base_url(); ?>templates/img/books/<?php echo $data[0]["cover"] ?> 175w">	  
                                                    </a>
                                                </div>
                                                <div class="summary_content_wrap">
                                                    <nav>
                                                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="place-content:center;">
                                                            <a class="nav-item nav-link active" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-home" aria-selected="true">Info</a>
                                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sinopsis</a>
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content" id="nav-tabContent" style="height:90%;">
                                                        <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                                            <div class="summary_content">
                                                                <div class="post-content">
                                                                    <div class="loader-inner ball-pulse">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="post-rating">
                                                                        <div class="post-total-rating ">
                                                                            <i class="bi bi-star-fill ratings_stars rating_current"></i>
                                                                            <i class="bi bi-star-fill ratings_stars rating_current"></i>
                                                                            <i class="bi bi-star-fill ratings_stars rating_current"></i>
                                                                            <i class="bi bi-star-fill ratings_stars rating_current"></i>
                                                                            <i class="bi bi-star-half ratings_stars rating_current"></i>
                                                                            <span class="score font-meta total_votes">4.5</span>
                                                                        </div>
                                                                        <div class="user-rating ">
                                                                            <i class="bi bi-star-fill-outline ratings_stars"></i>
                                                                            <i class="bi bi-star-fill-outline ratings_stars"></i>
                                                                            <i class="bi bi-star-fill-outline ratings_stars"></i>
                                                                            <i class="bi bi-star-fill-outline ratings_stars"></i>
                                                                            <i class="bi bi-star-fill-outline ratings_stars"></i>
                                                                            <span class="score font-meta total_votes">Your Rating</span>
                                                                        </div>
                                                                        <input type="hidden" class="rating-post-id" value="87">
                                                                    </div>
                                                                    <div class="post-content_item">
                                                                        <div class="summary-heading">
                                                                            <h5>Rating</h5>
                                                                        </div>
                                                                        <div class="summary-content vote-details" vocab="https://schema.org/" typeof="AggregateRating">
                                                                            <span property="itemReviewed" typeof="Book">
                                                                                <span class="rate-title" property="name" title="<?= $data[0]["judul"] ?>"><?= $data[0]["judul"] ?></span>
                                                                            </span>
                                                                            <span> 
                                                                                <span> 
                                                                                    Average <span property="ratingValue" id="averagerate"> 4.8</span> / <span property="bestRating">5</span> 
                                                                                </span> 
                                                                            </span> 
                                                                            out of <span property="ratingCount" id="countrate">206</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-content_item">
                                                                        <div class="summary-heading">
                                                                            <h5>Rank</h5>
                                                                        </div>
                                                                        <div class="summary-content">4th in Comics</div>
                                                                    </div>
                                                                    <div class="post-content_item">
                                                                        <div class="summary-heading">
                                                                            <h5>Alternative</h5>
                                                                        </div>
                                                                        <div class="summary-content">
                                                                            <?= $data[0]["judul"] ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-content_item">
                                                                        <div class="summary-heading">
                                                                            <h5>Author(s)</h5>
                                                                        </div>
                                                                        <div class="summary-content">
                                                                            <div class="author-content">
                                                                                <a href="#" rel="tag"><?= $data[0]["author"] ?></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-content_item">
                                                                        <div class="summary-heading">
                                                                            <h5>Artist(s)</h5>
                                                                        </div>
                                                                        <div class="summary-content">
                                                                            <div class="artist-content">
                                                                                <a href="#" rel="tag"><?= $data[0]["author"] ?></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-content_item">
                                                                        <div class="summary-heading">
                                                                            <h5>Genre(s)</h5>
                                                                        </div>
                                                                        <div class="summary-content">
                                                                            <div class="genres-content">
                                                                                <a href="#" rel="tag"><?= $data[0]["genre"] ?></a>
                                                                                <!-- <a href="#" rel="tag">Shounen</a> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-content_item">
                                                                        <div class="summary-heading">
                                                                            <h5>Type</h5>
                                                                        </div>
                                                                        <div class="summary-content">Web Novel</div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-status">
                                                                    <div class="post-content_item">
                                                                        <div class="summary-heading">
                                                                            <h5>Release</h5>
                                                                        </div>
                                                                        <div class="summary-content">
                                                                            <a href="#" rel="tag">2021</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-content_item">
                                                                        <div class="summary-heading">
                                                                            <h5> Status</h5>
                                                                            </div>
                                                                            <div class="summary-content"><?= $data[0]["status"] ?></div>
                                                                    </div>
                                                                    <div class="manga-action">
                                                                        <div class="count-comment">
                                                                            <div class="action_icon">
                                                                                <a href="#manga-discussion"><i class="bi bi-chat-left-fill"></i></a>
                                                                            </div>
                                                                            <div class="action_detail">
                                                                                <span class="disqus-comment-count" data-disqus-url="#">166 Comments</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="add-bookmark">
                                                                            <div class="action_icon">
                                                                                <script type="text/javascript">
                                                                                    var requireLogin2BookMark = true;
                                                                                </script>
                                                                                <a href="#" class="wp-manga-action-button" data-action="bookmark" data-post="87" data-chapter="" data-page="1" title="Bookmark">
                                                                                    <i class="bi bi-bookmark-fill"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="action_detail"><span>57 Users bookmarked This</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="init-links" class="nav-links" style="text-align:center;">
                                                                        <a href="#" id="btn-read-last" class="c-btn c-btn_style-1">Read First</a>
                                                                        <a href="#" id="btn-read-first" class="c-btn c-btn_style-1">Read Last</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                            <div class="description-summary" style="margin-bottom:0px;">
                                                                <div class="summary__content " style="min-height:350px;">
                                                                    <?= $data[0]["sinopsis"] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-page-content style-1">
                                <div class="content-area" style="margin-top: -110px; padding-top: 40px; background-color: #171717;border-top-left-radius: 50px;  border-top-right-radius: 50px;box-shadow: 0 0 20px 0px #000;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="main-col col-md-12 col-sm-12 sidebar-hidden">
                                                <div class="main-col-inner">
                                                    <div class="c-page">
                                                        <div class="c-page__content">
                                                            <div class="c-blog__heading style-2 font-heading">
                                                                <h2 class="h4">LATEST RELEASES</h2>
                                                                <a href="#" title="Change Order" class="btn-reverse-order" style="float:right;"><i class="bi bi-arrow-down-up"></i></a>
                                                            </div>
                                                            <div class="page-content-listing single-page">
                                                                <div class="listing-chapters_wrap cols-4  ">
                                                                    <ul class="main version-chap no-volumn">
                                                                        <?php
                                                                            foreach($data as $key => $val) {
                                                                                echo '
                                                                                    <li class="wp-manga-chapter">
                                                                                        <a href="'.site_url('welcome/read').'" style="width:100%;">'.$val["judul_chapters"].'
                                                                                            <span class="chapter-release-date"><i>'.date("d F Y", strtotime($val["tanggal"])).'</i></span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="wp-manga-chapter">
                                                                                        <a href="'.site_url('senna/post/new_chapter').'" style="width:100%;"><i class="bi bi-plus-lg" style="margin-right: 10px;"></i> New Chapter
                                                                                            <span class="chapter-release-date"><i></i></span>
                                                                                        </a>
                                                                                    </li>
                                                                                ';
                                                                            }
                                                                        ?>
                                                                        <!-- <li class="wp-manga-chapter">
                                                                            <a href="#" style="width:100%;">Chapter 4
                                                                                <span class="chapter-release-date"><i>Nov 08, 2021</i></span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="wp-manga-chapter">
                                                                            <a href="#" style="width:100%;">Chapter 3	
                                                                                <span class="chapter-release-date"><i>Oct 26, 2021</i></span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="wp-manga-chapter">
                                                                            <a href="#" style="width:100%;">Chapter 2	
                                                                                <span class="chapter-release-date"><i>Oct 24, 2021</i></span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="wp-manga-chapter">
                                                                            <a href="#" style="width:100%;">Chapter 1
                                                                                <span class="chapter-release-date"><i>Oct 24, 2021</i></span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="wp-manga-chapter">
                                                                            <a href="<?= site_url('stories/flog');?>" style="width:100%;">Prolog
                                                                                <span class="chapter-release-date"><i>Oct 21, 2021</i></span>
                                                                            </a>
                                                                        </li> -->
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <link data-optimized="1" rel="stylesheet" id="wordfence-ls-login-css" href="https://reaperscans.com/wp-content/litespeed/css/e218c95afe4da75afc094a87239e58e0.css?ver=6722a" type="text/css" media="all"> 
        <script type="text/javascript" id="wp-manga-single-js-js-extra">/*  */
            var wpMangaSingle = {"ajax_url":"https:\/\/reaperscans.com\/wp-admin\/admin-ajax.php","home_url":"https:\/\/reaperscans.com"};
            /*  */
        </script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/madara-core/assets/js/manga-single.js?ver=5.8.1" id="wp-manga-single-js-js"></script> 
        <script type="text/javascript" id="disqus_count-js-extra">/*  */
            var countVars = {"disqusShortname":"reaperscans"};
            /*  */
        </script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/disqus-comment-system/public/js/comment_count.js?ver=3.0.22" id="disqus_count-js"></script> 
        <script type="text/javascript" id="manga_disqus_embed-js-extra">/*  */
            var embedVars = {"disqusConfig":{"integration":"wordpress 3.0.12"},"disqusIdentifier":"87 https:\/\/reaperscans.com\/?post_type=wp-manga&p=87","disqusShortname":"reaperscans","disqusTitle":"Nano Machine","disqusUrl":"https:\/\/reaperscans.com\/series\/nano-machine\/","postId":"87"};
            /*  */
        </script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/disqus-comment-system/public/js/comment_embed.js?ver=5.8.1" id="manga_disqus_embed-js"></script> 
        <script type="text/javascript" id="wp_manga_chapter_report_js-js-extra">/*  */
            var wp_chapter_report = {"are_you_sure":"Are you sure want to report this chapter?","thank_you":"You report has been sent. Thank you!"};
            /*  */
        </script> <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/wp-manga-chapter-report/assets/js/main.js?ver=1.1" id="wp_manga_chapter_report_js-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/wp-manga-chapter-thumbnail/assets/js/frontend.js?ver=5.8.1" id="wp-manga-chapter-thumbnail-frontend-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/comment-reply.min.js?ver=5.8.1" id="comment-reply-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/themes/madara/js/core.js?ver=5.8.1" id="madara-core-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/themes/madara/js/lazysizes/lazysizes.min.js?ver=5.3.2" id="lazysizes-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/themes/madara/js/bootstrap.min.js?ver=4.6.0" id="bootstrap-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/themes/madara/js/shuffle.min.js?ver=5.3.0" id="shuffle-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/imagesloaded.min.js?ver=4.1.4" id="imagesloaded-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/themes/madara/js/aos.js?ver=5.8.1" id="aos-js"></script> 
        <script type="text/javascript" id="madara-js-js-extra">/*  */
            var madara = {"ajaxurl":"https:\/\/reaperscans.com\/wp-admin\/admin-ajax.php","query_vars":{"page":0,"manga-core":"nano-machine","post_type":"wp-manga","name":"nano-machine","error":"","m":"","p":0,"post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"pagename":"","page_id":0,"second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"meta_key":"","meta_value":"","preview":"","s":"","sentence":"","title":"","fields":"","menu_order":"","embed":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"post_name__in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"ignore_sticky_posts":false,"suppress_filters":false,"cache_results":false,"update_post_term_cache":true,"lazy_load_term_meta":true,"update_post_meta_cache":true,"posts_per_page":12,"nopaging":false,"comments_per_page":"50","no_found_rows":false,"order":"DESC"},"current_url":"https:\/\/reaperscans.com\/series\/nano-machine"};
            var single_manga_show_more = {"show_more":"Show more  ","show_less":"Show less  "};
            /*  */
        </script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/themes/madara/js/template.js?ver=1.6.6" id="madara-js-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/themes/madara/js/ajax.js?ver=5.8.1" id="madara-ajax-js"></script> 
        <script type="text/javascript" id="wp-manga-login-ajax-js-extra">/*  */
            var wpMangaLogin = {"admin_ajax":"https:\/\/reaperscans.com\/wp-admin\/admin-ajax.php","home_url":"https:\/\/reaperscans.com","messages":{"please_enter_username":"Please enter username","please_enter_password":"Please enter password","invalid_username_or_password":"Invalid username or password","server_error":"Server Error!","username_or_email_cannot_be_empty":"Username or Email cannot be empty","please_fill_all_fields":"Please fill in all password fields.","password_cannot_less_than_12":"Password cannot has less than 12 characters","password_doesnot_match":"Password doesn&#039;t match. Please  try again.","username_cannot_empty":"Username cannot be empty","email_cannot_empty":"Email cannot be empty","password_cannot_empty":"Password cannot be empty"}};
            /*  */
        </script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/madara-core/assets/js/login.js?ver=5.8.1" id="wp-manga-login-ajax-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/madara-core/assets/slick/slick.min.js?ver=5.8.1" id="wp-manga-slick-js-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1" id="jquery-ui-core-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/jquery/ui/menu.min.js?ver=1.12.1" id="jquery-ui-menu-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7" id="regenerator-runtime-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/dist/dom-ready.min.js?ver=71883072590656bf22c74c7b887df3dd" id="wp-dom-ready-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/dist/hooks.min.js?ver=a7edae857aab69d69fa10d5aef23a5de" id="wp-hooks-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/dist/i18n.min.js?ver=5f1269854226b4dd90450db411a12b79" id="wp-i18n-js"></script> 
        <script type="text/javascript" id="wp-i18n-js-after">
            wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
        </script> 
        <script type="text/javascript" id="wp-a11y-js-translations">
            ( function( domain, translations ) {
            var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData( localeData, domain );
            } )
            ( "default", { "locale_data": { "messages": { "": {} } } } );
        </script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/dist/a11y.min.js?ver=0ac8327cc1c40dcfdf29716affd7ac63" id="wp-a11y-js"></script> 
        <script type="text/javascript" id="jquery-ui-autocomplete-js-extra">/*  */
            var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
            /*  */
        </script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.12.1" id="jquery-ui-autocomplete-js"></script> 
        <script type="text/javascript" id="wp-manga-js-extra">/*  */
            var manga = {"ajax_url":"https:\/\/reaperscans.com\/wp-admin\/admin-ajax.php","home_url":"https:\/\/reaperscans.com","base_url":"https:\/\/reaperscans.com\/series\/nano-machine\/","manga_paged_var":"manga-paged","enable_manga_view":"1","manga_id":"87"};
            /*  */
        </script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/madara-core/assets/js/script.js?ver=1.6.3" id="wp-manga-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/themes/madara/js/slick/slick.min.js?ver=1.9.0" id="slick-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/madara-shortcodes/shortcodes/js/ct-shortcodes.js?ver=1.5.2.1" id="ct-shortcode-js-js"></script> 
        <script type="text/javascript" id="wordfence-ls-login-js-extra">/*  */
            var WFLSVars = {"ajaxurl":"https:\/\/reaperscans.com\/wp-admin\/admin-ajax.php","nonce":"4801440fcd","recaptchasitekey":"6Lc24UIcAAAAAHIKfJ2Es2Wa3OpgLN47xRyWsd1X","useCAPTCHA":"","allowremember":"","verification":""};
            /*  */
        </script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/wordfence/modules/login-security/js/login.1623076348.js?ver=1.0.6" id="wordfence-ls-login-js"></script>
        <script src="https://reaperscans.com/wp-content/plugins/litespeed-cache/assets/js/lazyload.min.js" type="text/javascript"></script>
        <!-- Page optimized by LiteSpeed Cache @2021-11-09 05:29:25 -->
        <!-- Page generated by LiteSpeed Cache 4.3 on 2021-11-09 01:29:24 -->
        <iframe name="__privateStripeMetricsController6570" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/m-outer-f7902241893e7a497417843cb15dc858.html#url=https%3A%2F%2Freaperscans.com%2Fseries%2Fnano-machine%2F&amp;title=Nano%20Machine%20%E2%80%93%20Reaper%20Scans&amp;referrer=https%3A%2F%2Freaperscans.com%2F&amp;muid=63b9a7cb-175e-4c4f-90fa-4f3e69de5867fecc97&amp;sid=a5e8fc01-d23e-4ee2-adfe-e90e0e402d897cb368&amp;version=6&amp;preview=false" aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
        <p id="a11y-speak-intro-text" class="a11y-speak-intro-text" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" hidden="hidden">Notifications</p>
        <div id="a11y-speak-assertive" class="a11y-speak-region" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div>
        <div id="a11y-speak-polite" class="a11y-speak-region" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div>
        <div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
        <div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
        <iframe style="display: none;"></iframe>

        <!-- Vendor JS Files -->
        <script src="<?php echo base_url('templates/assets/aos/aos.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/glightbox/js/glightbox.min.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/php-email-form/validate.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/purecounter/purecounter.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Template Main JS File -->
        <script src="<?php echo base_url('templates/js/main.js'); ?>"></script>
    </body>
</html>