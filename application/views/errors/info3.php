<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="pingback" href="https://reaperscans.com/xmlrpc.php"> 
        <script src="https://js.stripe.com/v3" type="text/javascript"></script>             
        <script type="text/javascript">
            var stripe = Stripe("pk_live_51JeNLqHyor6uPr8qgYmH5D46ogggqqkHpfq6LRkWkEic8kLB8l3FvPvZrrDxGilgP6DwDNVmFYvq5uH9Y9Ml98Py00hO1OsKN5");
        </script> 
        <script data-cfasync="false" type="text/javascript">
            var ewww_webp_supported=!1;function check_webp_feature(A,e){if(e=void 0!==e?e:function(){},ewww_webp_supported)e(ewww_webp_supported);else{var w=new Image;w.onload=function(){ewww_webp_supported=0<w.width&&0<w.height,e&&e(ewww_webp_supported)},w.onerror=function(){e&&e(!1)},w.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA=="}[A]}}check_webp_feature("alpha");</script><script data-cfasync="false" type="text/javascript">var Arrive=function(c,e,w){"use strict";if(c.MutationObserver&&"undefined"!=typeof HTMLElement){var r,t,a=0,u=(r=HTMLElement.prototype.matches||HTMLElement.prototype.webkitMatchesSelector||HTMLElement.prototype.mozMatchesSelector||HTMLElement.prototype.msMatchesSelector,{matchesSelector:function(e,t){return e instanceof HTMLElement&&r.call(e,t)},addMethod:function(e,t,r){var a=e[t];e[t]=function(){return r.length==arguments.length?r.apply(this,arguments):"function"==typeof a?a.apply(this,arguments):void 0}},callCallbacks:function(e,t){t&&t.options.onceOnly&&1==t.firedElems.length&&(e=[e[0]]);for(var r,a=0;r=e[a];a++)r&&r.callback&&r.callback.call(r.elem,r.elem);t&&t.options.onceOnly&&1==t.firedElems.length&&t.me.unbindEventWithSelectorAndCallback.call(t.target,t.selector,t.callback)},checkChildNodesRecursively:function(e,t,r,a){for(var i,n=0;i=e[n];n++)r(i,t,a)&&a.push({callback:t.callback,elem:i}),0<i.childNodes.length&&u.checkChildNodesRecursively(i.childNodes,t,r,a)},mergeArrays:function(e,t){var r,a={};for(r in e)e.hasOwnProperty(r)&&(a[r]=e[r]);for(r in t)t.hasOwnProperty(r)&&(a[r]=t[r]);return a},toElementsArray:function(e){return void 0===e||"number"==typeof e.length&&e!==c||(e=[e]),e}}),d=((t=function(){this._eventsBucket=[],this._beforeAdding=null,this._beforeRemoving=null}).prototype.addEvent=function(e,t,r,a){var i={target:e,selector:t,options:r,callback:a,firedElems:[]};return this._beforeAdding&&this._beforeAdding(i),this._eventsBucket.push(i),i},t.prototype.removeEvent=function(e){for(var t,r=this._eventsBucket.length-1;t=this._eventsBucket[r];r--)if(e(t)){this._beforeRemoving&&this._beforeRemoving(t);var a=this._eventsBucket.splice(r,1);a&&a.length&&(a[0].callback=null)}},t.prototype.beforeAdding=function(e){this._beforeAdding=e},t.prototype.beforeRemoving=function(e){this._beforeRemoving=e},t),o=function(i,n){var o=new d,l=this,s={fireOnAttributesModification:!1};return o.beforeAdding(function(t){var e,r=t.target;r!==c.document&&r!==c||(r=document.getElementsByTagName("html")[0]),e=new MutationObserver(function(e){n.call(this,e,t)});var a=i(t.options);e.observe(r,a),t.observer=e,t.me=l}),o.beforeRemoving(function(e){e.observer.disconnect()}),this.bindEvent=function(e,t,r){t=u.mergeArrays(s,t);for(var a=u.toElementsArray(this),i=0;i<a.length;i++)o.addEvent(a[i],e,t,r)},this.unbindEvent=function(){var r=u.toElementsArray(this);o.removeEvent(function(e){for(var t=0;t<r.length;t++)if(this===w||e.target===r[t])return!0;return!1})},this.unbindEventWithSelectorOrCallback=function(r){var e,a=u.toElementsArray(this),i=r;e="function"==typeof r?function(e){for(var t=0;t<a.length;t++)if((this===w||e.target===a[t])&&e.callback===i)return!0;return!1}:function(e){for(var t=0;t<a.length;t++)if((this===w||e.target===a[t])&&e.selector===r)return!0;return!1},o.removeEvent(e)},this.unbindEventWithSelectorAndCallback=function(r,a){var i=u.toElementsArray(this);o.removeEvent(function(e){for(var t=0;t<i.length;t++)if((this===w||e.target===i[t])&&e.selector===r&&e.callback===a)return!0;return!1})},this},i=new function(){var s={fireOnAttributesModification:!1,onceOnly:!1,existing:!1};function n(e,t,r){return!(!u.matchesSelector(e,t.selector)||(e._id===w&&(e._id=a++),-1!=t.firedElems.indexOf(e._id))||(t.firedElems.push(e._id),0))}var c=(i=new o(function(e){var t={attributes:!1,childList:!0,subtree:!0};return e.fireOnAttributesModification&&(t.attributes=!0),t},function(e,i){e.forEach(function(e){var t=e.addedNodes,r=e.target,a=[];null!==t&&0<t.length?u.checkChildNodesRecursively(t,i,n,a):"attributes"===e.type&&n(r,i)&&a.push({callback:i.callback,elem:r}),u.callCallbacks(a,i)})})).bindEvent;return i.bindEvent=function(e,t,r){t=void 0===r?(r=t,s):u.mergeArrays(s,t);var a=u.toElementsArray(this);if(t.existing){for(var i=[],n=0;n<a.length;n++)for(var o=a[n].querySelectorAll(e),l=0;l<o.length;l++)i.push({callback:r,elem:o[l]});if(t.onceOnly&&i.length)return r.call(i[0].elem,i[0].elem);setTimeout(u.callCallbacks,1,i)}c.call(this,e,t,r)},i},l=new function(){var a={};function i(e,t){return u.matchesSelector(e,t.selector)}var n=(l=new o(function(){return{childList:!0,subtree:!0}},function(e,a){e.forEach(function(e){var t=e.removedNodes,r=[];null!==t&&0<t.length&&u.checkChildNodesRecursively(t,a,i,r),u.callCallbacks(r,a)})})).bindEvent;return l.bindEvent=function(e,t,r){t=void 0===r?(r=t,a):u.mergeArrays(a,t),n.call(this,e,t,r)},l};e&&g(e.fn),g(HTMLElement.prototype),g(NodeList.prototype),g(HTMLCollection.prototype),g(HTMLDocument.prototype),g(Window.prototype);var n={};return s(i,n,"unbindAllArrive"),s(l,n,"unbindAllLeave"),n}function s(e,t,r){u.addMethod(t,r,e.unbindEvent),u.addMethod(t,r,e.unbindEventWithSelectorOrCallback),u.addMethod(t,r,e.unbindEventWithSelectorAndCallback)}function g(e){e.arrive=i.bindEvent,s(i,e,"unbindArrive"),e.leave=l.bindEvent,s(l,e,"unbindLeave")}}(window,"undefined"==typeof jQuery?null:jQuery,void 0),ewww_webp_supported=!1;function check_webp_feature(e,t){if(ewww_webp_supported)t(ewww_webp_supported);else{var r=new Image;r.onload=function(){ewww_webp_supported=0<r.width&&0<r.height,t(ewww_webp_supported)},r.onerror=function(){t(!1)},r.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",animation:"UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"}[e]}}function ewwwLoadImages(e){if(e){for(var t=document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"),r=0,a=t.length;r<a;r++)ewwwAttr(t[r],"data-src",t[r].getAttribute("data-webp")),ewwwAttr(t[r],"data-thumbnail",t[r].getAttribute("data-webp-thumbnail"));for(r=0,a=(n=document.querySelectorAll(".rev_slider ul li")).length;r<a;r++){ewwwAttr(n[r],"data-thumb",n[r].getAttribute("data-webp-thumb"));for(var i=1;i<11;)ewwwAttr(n[r],"data-param"+i,n[r].getAttribute("data-webp-param"+i)),i++}var n;for(r=0,a=(n=document.querySelectorAll(".rev_slider img")).length;r<a;r++)ewwwAttr(n[r],"data-lazyload",n[r].getAttribute("data-webp-lazyload"));var o=document.querySelectorAll("div.woocommerce-product-gallery__image");for(r=0,a=o.length;r<a;r++)ewwwAttr(o[r],"data-thumb",o[r].getAttribute("data-webp-thumb"))}var l=document.querySelectorAll("video");for(r=0,a=l.length;r<a;r++)ewwwAttr(l[r],"poster",e?l[r].getAttribute("data-poster-webp"):l[r].getAttribute("data-poster-image"));var s=document.querySelectorAll("img.ewww_webp_lazy_load");for(r=0,a=s.length;r<a;r++){if(e){ewwwAttr(s[r],"data-lazy-srcset",s[r].getAttribute("data-lazy-srcset-webp")),ewwwAttr(s[r],"data-srcset",s[r].getAttribute("data-srcset-webp")),ewwwAttr(s[r],"data-lazy-src",s[r].getAttribute("data-lazy-src-webp")),ewwwAttr(s[r],"data-src",s[r].getAttribute("data-src-webp")),ewwwAttr(s[r],"data-orig-file",s[r].getAttribute("data-webp-orig-file")),ewwwAttr(s[r],"data-medium-file",s[r].getAttribute("data-webp-medium-file")),ewwwAttr(s[r],"data-large-file",s[r].getAttribute("data-webp-large-file"));var c=s[r].getAttribute("srcset");null!=c&&!1!==c&&c.includes("R0lGOD")&&ewwwAttr(s[r],"src",s[r].getAttribute("data-lazy-src-webp"))}s[r].className=s[r].className.replace(/\bewww_webp_lazy_load\b/,"")}var w=document.querySelectorAll(".ewww_webp");for(r=0,a=w.length;r<a;r++)e?(ewwwAttr(w[r],"srcset",w[r].getAttribute("data-srcset-webp")),ewwwAttr(w[r],"src",w[r].getAttribute("data-src-webp")),ewwwAttr(w[r],"data-orig-file",w[r].getAttribute("data-webp-orig-file")),ewwwAttr(w[r],"data-medium-file",w[r].getAttribute("data-webp-medium-file")),ewwwAttr(w[r],"data-large-file",w[r].getAttribute("data-webp-large-file")),ewwwAttr(w[r],"data-large_image",w[r].getAttribute("data-webp-large_image")),ewwwAttr(w[r],"data-src",w[r].getAttribute("data-webp-src"))):(ewwwAttr(w[r],"srcset",w[r].getAttribute("data-srcset-img")),ewwwAttr(w[r],"src",w[r].getAttribute("data-src-img"))),w[r].className=w[r].className.replace(/\bewww_webp\b/,"ewww_webp_loaded");window.jQuery&&jQuery.fn.isotope&&jQuery.fn.imagesLoaded&&(jQuery(".fusion-posts-container-infinite").imagesLoaded(function(){jQuery(".fusion-posts-container-infinite").hasClass("isotope")&&jQuery(".fusion-posts-container-infinite").isotope()}),jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function(){jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()}))}function ewwwWebPInit(e){ewwwLoadImages(e),ewwwNggLoadGalleries(e),document.arrive(".ewww_webp",function(){ewwwLoadImages(e)}),document.arrive(".ewww_webp_lazy_load",function(){ewwwLoadImages(e)}),document.arrive("videos",function(){ewwwLoadImages(e)}),"loading"==document.readyState?document.addEventListener("DOMContentLoaded",ewwwJSONParserInit):("undefined"!=typeof galleries&&ewwwNggParseGalleries(e),ewwwWooParseVariations(e))}function ewwwAttr(e,t,r){null!=r&&!1!==r&&e.setAttribute(t,r)}function ewwwJSONParserInit(){"undefined"!=typeof galleries&&check_webp_feature("alpha",ewwwNggParseGalleries),check_webp_feature("alpha",ewwwWooParseVariations)}function ewwwWooParseVariations(e){if(e)for(var t=document.querySelectorAll("form.variations_form"),r=0,a=t.length;r<a;r++){var i=t[r].getAttribute("data-product_variations"),n=!1;try{for(var o in i=JSON.parse(i))void 0!==i[o]&&void 0!==i[o].image&&(void 0!==i[o].image.src_webp&&(i[o].image.src=i[o].image.src_webp,n=!0),void 0!==i[o].image.srcset_webp&&(i[o].image.srcset=i[o].image.srcset_webp,n=!0),void 0!==i[o].image.full_src_webp&&(i[o].image.full_src=i[o].image.full_src_webp,n=!0),void 0!==i[o].image.gallery_thumbnail_src_webp&&(i[o].image.gallery_thumbnail_src=i[o].image.gallery_thumbnail_src_webp,n=!0),void 0!==i[o].image.thumb_src_webp&&(i[o].image.thumb_src=i[o].image.thumb_src_webp,n=!0));n&&ewwwAttr(t[r],"data-product_variations",JSON.stringify(i))}catch(e){}}}function ewwwNggParseGalleries(e){if(e)for(var t in galleries){var r=galleries[t];galleries[t].images_list=ewwwNggParseImageList(r.images_list)}}function ewwwNggLoadGalleries(e){e&&document.addEventListener("ngg.galleria.themeadded",function(e,t){window.ngg_galleria._create_backup=window.ngg_galleria.create,window.ngg_galleria.create=function(e,t){var r=$(e).data("id");return galleries["gallery_"+r].images_list=ewwwNggParseImageList(galleries["gallery_"+r].images_list),window.ngg_galleria._create_backup(e,t)}})}function ewwwNggParseImageList(e){for(var t in e){var r=e[t];if(void 0!==r["image-webp"]&&(e[t].image=r["image-webp"],delete e[t]["image-webp"]),void 0!==r["thumb-webp"]&&(e[t].thumb=r["thumb-webp"],delete e[t]["thumb-webp"]),void 0!==r.full_image_webp&&(e[t].full_image=r.full_image_webp,delete e[t].full_image_webp),void 0!==r.srcsets)for(var a in r.srcsets)nggSrcset=r.srcsets[a],void 0!==r.srcsets[a+"-webp"]&&(e[t].srcsets[a]=r.srcsets[a+"-webp"],delete e[t].srcsets[a+"-webp"]);if(void 0!==r.full_srcsets)for(var i in r.full_srcsets)nggFSrcset=r.full_srcsets[i],void 0!==r.full_srcsets[i+"-webp"]&&(e[t].full_srcsets[i]=r.full_srcsets[i+"-webp"],delete e[t].full_srcsets[i+"-webp"])}return e}check_webp_feature("alpha",ewwwWebPInit);
        </script>
        <title>Nano Machine – Reaper Scans</title>
        <meta name="robots" content="max-image-preview:large">
        <link rel="dns-prefetch" href="//www.googletagmanager.com">
        <link rel="dns-prefetch" href="//s.w.org">
        <link rel="alternate" type="application/rss+xml" title="Reaper Scans » Feed" href="https://reaperscans.com/feed/">
        <link rel="alternate" type="application/rss+xml" title="Reaper Scans » Comments Feed" href="https://reaperscans.com/comments/feed/">
        <link rel="alternate" type="application/rss+xml" title="Reaper Scans » Nano Machine Comments Feed" href="https://reaperscans.com/series/nano-machine/feed/"> 
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/reaperscans.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.1"}};
            !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
        </script> 
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
        <link data-optimized="1" rel="stylesheet" id="madara-css-child-css" href="https://reaperscans.com/wp-content/litespeed/css/ad0bea541895ac8f6e56e42dc12d1791.css?ver=5a1d6" type="text/css" media="all">
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
        <link rel="canonical" href="https://reaperscans.com/series/nano-machine/">
        <link rel="shortlink" href="https://reaperscans.com/?p=87">
        <link rel="alternate" type="application/json+oembed" href="https://reaperscans.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Freaperscans.com%2Fseries%2Fnano-machine%2F">
        <link rel="alternate" type="text/xml+oembed" href="https://reaperscans.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Freaperscans.com%2Fseries%2Fnano-machine%2F&amp;format=xml">
        <style type="text/css" id="custom_fonts">
            @font-face {
                font-family: bebas-neue;
                src: url(https://reaperscans.com/wp-content/uploads/custom_fonts/bebas-neue.ttf);
                font-weight: normal;
            }
            @font-face {
                font-family: Tachyon Regular;
                src: url(https://reaperscans.com/wp-content/uploads/custom_fonts/Tachyon/Regular.ttf);
                font-weight: normal;
            }
            @font-face {
                font-family: tachyon;
                src: url(https://reaperscans.com/wp-content/uploads/custom_fonts/tachyon.ttf);
                font-weight: normal;
            }
            @font-face {
                font-family: ComicSansMS3;
                src: url(https://reaperscans.com/wp-content/uploads/custom_fonts/ComicSansMS3.ttf);
                font-weight: normal;
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
        <link rel="icon" href="https://reaperscans.com/wp-content/uploads/2021/07/cropped-ms-icon-310x310-1-32x32.png" sizes="32x32">
        <link rel="icon" href="https://reaperscans.com/wp-content/uploads/2021/07/cropped-ms-icon-310x310-1-192x192.png" sizes="192x192">
        <link rel="apple-touch-icon" href="https://reaperscans.com/wp-content/uploads/2021/07/cropped-ms-icon-310x310-1-180x180.png">
        <meta name="msapplication-TileImage" content="https://reaperscans.com/wp-content/uploads/2021/07/cropped-ms-icon-310x310-1-270x270.png">
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
        <meta property="og:type" content="article">
        <meta property="og:image" content="https://reaperscans.com/wp-content/uploads/2021/07/NANO-1.jpg">
        <meta property="og:site_name" content="Reaper Scans"><meta property="fb:app_id" content="">
        <meta property="og:title" content="Nano Machine">
        <meta property="og:url" content="https://reaperscans.com/series/nano-machine/">
        <meta property="og:description" content="After being held in disdain and having his life put in danger, an orphan from the Demonic Cult, Cheon Yeo-Woon, has an unexpected visit from his descendant from the ">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Reaper Scans"><meta name="twitter:title" content="Nano Machine">
        <meta name="twitter:description" content="After being held in disdain and having his life put in danger, an orphan from the Demonic Cult, Cheon Yeo-Woon, has an unexpected visit from his descendant from the ">
        <meta name="twitter:url" content="https://reaperscans.com/series/nano-machine/">
        <meta name="twitter:image" content="https://reaperscans.com/wp-content/uploads/2021/07/NANO-1.jpg">
        <meta name="description" content="After being held in disdain and having his life put in danger, an orphan from the Demonic Cult, Cheon Yeo-Woon, has an unexpected visit from his descendant from the ">
        <meta name="generator" content="Powered by Madara - A powerful multi-purpose theme by Madara">
        <style type="text/css">
            :root topadblock, :root span[id^="ezoic-pub-ad-placeholder-"], 
            :root input[onclick^="window.open('http://www.FriendlyDuck.com/"], 
            :root img[alt^="Fuckbook"], 
            :root iframe[src*="mellowads.com"], 
            :root div[id^="zergnet-widget"], 
            :root div[id^="traffective-ad-"], 
            :root div[id^="taboola-stream-"], 
            :root div[id^="sticky_ad_"], 
            :root div[id^="rc-widget-"], 
            :root div[id^="q1-adset-"], 
            :root div[id^="proadszone-"], 
            :root div[id^="lazyad-"], 
            :root div[id^="gtm-ad-"], 
            :root div[id^="ezoic-pub-ad-"], 
            :root div[id^="dmRosAdWrapper"], 
            :root div[id^="div-adtech-ad-"], 
            :root div[id^="dfp-slot-"], 
            :root div[id^="dfp-ad-"], 
            :root div[id^="code_ads_"], 
            :root div[id^="block-views-topheader-ad-block-"], 
            :root div[id^="banner-ad-"], 
            :root div[id^="advt-"], 
            :root div[id^="advads_"], 
            :root div[id^="ads300_600-widget"], 
            :root input[onclick^="window.open('http://www.friendlyduck.com/"], 
            :root div[id^="ads300_250-widget"], 
            :root div[id^="ads300_100-widget"], 
            :root div[id^="ads120_600-widget"], 
            :root div[id^="adrotate_widgets-"], 
            :root div[id^="adfox_"], 
            :root div[id^="ad_script_"], 
            :root div[id^="ad_rect_"], 
            :root div[id^="ad_position_"], 
            :root div[id^="ad-server-"], 
            :root div[id^="ad-inserter-"], 
            :root div[id^="ad-cid-"], 
            :root div[id^="acm-ad-tag-"], 
            :root div[id^="YFBMSN"], 
            :root div[id^="ADV-SLOT-"], 
            :root div[data-test-id="AdDisplayWrapper"], 
            :root div[data-spotim-slot], 
            :root div[data-role="sidebarAd"], 
            :root div[data-native_ad], 
            :root div[data-mediatype="advertising"], 
            :root div[data-id-advertdfpconf], 
            :root div[data-content="Advertisement"], 
            :root div[data-adunit], 
            :root div[data-adunit-path], 
            :root div[data-adservice-param-tagid="contentad"], 
            :root div[data-adname], 
            :root div[data-ad-wrapper], 
            :root div[data-ad-underplayer], 
            :root div[data-ad-placeholder], 
            :root div[class^="zn-sponsored-outbrain-"], 
            :root div[class^="sp-adslot-"], 
            :root div[class^="proadszone-"], 
            :root div[class^="pane-google-admanager-"], 
            :root div[class^="native-ad-"], 
            :root div[class^="lifeOnwerAd"], 
            :root div[class^="largeRectangleAd_"], 
            :root div[class^="kiwiad-popup"], 
            :root div[class^="kiwiad-desktop"], 
            :root div[class^="index_adBeforeContent_"], 
            :root div[class^="index_adAfterContent_"], 
            :root div[class^="index__adWrapper"], 
            :root div[class^="block-openx-"], 
            :root div[class^="backfill-taboola-home-slot-"], 
            :root div[class^="articleAdUnitMPU_"], 
            :root div[class^="advertisement-desktop"], 
            :root div[class^="adsbutt_wrapper_"], 
            :root div[class^="ads-partner-"], 
            :root div[class^="adbanner_"], 
            :root div[class^="ad_position_"], 
            :root div[class^="SponsoredAds"], 
            :root div[class^="ResponsiveAd-"], 
            :root div[class^="PreAd_"], 
            :root div[class^="Display_displayAd"], 
            :root div[class^="Directory__footerAds"], 
            :root div[class^="BannerAd_"], 
            :root div[class^="AdhesionAd_"], 
            :root div[class^="Ad__bigBox"], 
            :root div[class^="Ad__adContainer"], 
            :root div[class^="AdSlot__container"], 
            :root div[id^="divAdvAD_"], 
            :root div[class^="ad_border_"], 
            :root div[class^="AdItem-"], 
            :root div[class^="AdEmbeded__AddWrapper"], 
            :root span[data-component-type="s-ads-metrics"], 
            :root div[class^="AdBannerWrapper-"], 
            :root div[class*="_AdInArticle_"], 
            :root div[class*="-storyBodyAd-"], 
            :root div[data-subscript="Advertising"], 
            :root div[class$="dealnews"] > .dealnews, 
            :root div > [class][onclick*=".updateAnalyticsEvents"], 
            :root display-ads, 
            :root display-ad-component, 
            :root bottomadblock, 
            :root aside[id^="tn_ads_widget-"], 
            :root aside[id^="adrotate_widgets-"], 
            :root amp-ad-custom, 
            :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], 
            :root a[target="_blank"][href^="http://api.taboola.com/"], 
            :root div[class^="BlockAdvert-"], 
            :root a[src^="https://www.utherverse.com/net/"], 
            :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, 
            :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], 
            :root a[onclick*="//m.economictimes.com/etmack/click.htm"], 
            :root a[href^="https://zononi.com/"], 
            :root a[href^="https://www.what-sexdating.com/"], 
            :root a[href^="https://www.vewwrmp.com/"], 
            :root a[href^="https://www.spyoff.com/"], 
            :root a[href^="https://www.sheetmusicplus.com/?aff_id="], 
            :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], 
            :root a[href^="https://www.share-online.biz/affiliate/"], 
            :root a[href^="https://www.securegfm.com/"], 
            :root a[href^="https://www.rabbits.webcam/?id="], 
            :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], 
            :root a[href^="https://www.privateinternetaccess.com/"] > img, 
            :root a[href^="https://www.porngamesxxx.com/"][href*="?campaign="], 
            :root a[href^="https://www.passeura.com/"], 
            :root div[id^="amzn-assoc-ad"], 
            :root a[href^="https://www.oboom.com/ref/"], 
            :root div[itemtype="http://schema.org/WPAdBlock"], 
            :root a[href^="https://www.nudeidols.com/cams/"], 
            :root a[href^="https://www.mypornstarcams.com/landing/click/"], 
            :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], 
            :root div[data-adzone], 
            :root a[href^="https://www.iyalc.com/"], 
            :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], 
            :root a[href^="https://www.get-express-vpn.com/offer/"], 
            :root a[href^="https://www.gambling-affiliation.com/cpc/"], 
            :root a[href^="https://www.dollps.com/?track="], 
            :root a[href^="https://www.clicktraceclick.com/"], 
            :root a[href^="https://www.camsoda.com/enter.php?id="], 
            :root a[href^="https://www.brazzersnetwork.com/landing/"], 
            :root a[href^="https://www.bebi.com"], 
            :root div[class^="pane-adsense-managed-"], 
            :root a[href^="https://www.bang.com/?aff="], 
            :root a[href^="https://www.awin1.com/cread.php?awinaffid="], 
            :root a[href^="https://www.arthrozene.com/"][href*="?tid="], 
            :root a[href^="https://weedzy.co.uk/"][href*="&utm_"], 
            :root a[href^="https://vod09197d7.club/"], 
            :root a[href^="https://vo2.qrlsx.com/"], 
            :root a[href^="https://vlnk.me/"], 
            :root a[href^="https://unreshiramor.com/"], 
            :root a[href^="https://uncensored.game/"], 
            :root a[href^="https://ttf.trmobc.com/"], 
            :root a[href^="https://trusted-click-host.com/"], 
            :root a[href^="https://trf.bannerator.com/"], 
            :root a[href^="http://go.247traffic.com/"], 
            :root a[href^="https://bestcond1tions.com/"], 
            :root a[href^="https://trappist-1d.com/"], 
            :root a[href^="https://tracking.truthfinder.com/?a="], 
            :root a[href^="https://tracking.gitads.io/"], 
            :root a[href^="https://go.xxxjmp.com/"], 
            :root a[href^="https://tracking.avapartner.com/"], 
            :root a[href^="https://track.wg-aff.com"], 
            :root a[href^="https://track.ultravpn.com/"], 
            :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], 
            :root a[href^="https://track.healthtrader.com/"], 
            :root a[href^="https://track.clickmoi.xyz/"], 
            :root a[href^="https://control.trafficfabrik.com/"], 
            :root a[href^="https://track.52zxzh.com/"], 
            :root a[href^="https://axdsz.pro/"], 
            :root a[href^="https://tour.mrskin.com/"], 
            :root a[href^="http://www.greenmangaming.com/?tap_a="], 
            :root a[href^="https://tm-offers.gamingadult.com/"], 
            :root a[href^="https://t.hrtyj.com/"], 
            :root a[href^="https://t.adating.link/"], 
            :root a[href^="https://syndication.optimizesrv.com/splash.php?"], 
            :root a[href^="https://squren.com/rotator/?atomid="], 
            :root a[href^="http://cdn3.adexprts.com/"], 
            :root a[href^="https://spygasm.com/track?"], 
            :root div[id^="ad-div-"], 
            :root a[href^="https://secure.eveonline.com/ft/?aid="], 
            :root a[href^="https://secure.bstlnk.com/"], 
            :root div[class^="kiwi-ad-wrapper"], 
            :root a[href^="https://rev.adsession.com/"], 
            :root [href*=".trackmstr.com"], 
            :root a[href^="https://refpasrasw.world/"], 
            :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], 
            :root a[href^="https://refpaexhil.top/"], 
            :root a[href^="https://reachtrgt.com/"], 
            :root AD-SLOT, 
            :root a[href^="https://pubads.g.doubleclick.net/"], 
            :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, 
            :root a[href^="http://www.my-dirty-hobby.com/?sub="], 
            :root a[href^="https://porndeals.com/?track="], 
            :root a[href^="//go.onclasrv.com/"], 
            :root a[href^="https://pcm.bannerator.com/"], 
            :root a[href^="https://offerforge.net/"], 
            :root a[href^="https://ndt5.net/"], 
            :root div[id^="ad_head_celtra_"], 
            :root a[href^="https://wittered-mainging.com/"], 
            :root a[href^="https://t.grtyi.com/"], 
            :root a[href^="https://myusenet.xyz/"], 
            :root a[href^="https://my-movie.club/"], 
            :root [href^="https://detachedbates.com/"],
            :root a[href^="https://mk-cdn.net/"], 
            :root a[href^="https://mk-ads.com/"], 
            :root a[href^="https://meet-sex-here.com/?u="], 
            :root a[href^="https://medleyads.com/"], 
            :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], 
            :root iframe[src^="https://tpc.googlesyndication.com/"], 
            :root a[href*=".approvallamp.club/"], 
            :root a[href^="https://a.bestcontentoperation.top/"], 
            :root a[href^="https://landing1.brazzersnetwork.com"], 
            :root a[href^="http://adrunnr.com/"], 
            :root a[href^="https://landing.brazzersplus.com/"], 
            :root a[href^="https://land.rk.com/landing/"], 
            :root a[href^="http://ad.au.doubleclick.net/"], 
            :root a[href^="https://k2s.cc/pr/"], 
            :root a[href^="https://juicyads.in/"], 
            :root a[href^="https://join.virtuallust3d.com/"], 
            :root a[href^="http://www.uniblue.com/cm/"], 
            :root a[href^="https://join.sexworld3d.com/track/"], 
            :root a[href^="https://join.dreamsexworld.com/"], 
            :root a[href^="https://track.effiliation.com/servlet/effi.redir?"], 
            :root a[href^="https://iqoption.com/lp/mobile-partner/"][href*="?aff="], 
            :root [href^="http://join.shemalepornstar.com/"], 
            :root a[href^="https://incisivetrk.cvtr.io/click?"], 
            :root a[href^="https://iactrivago.ampxdirect.com/"], 
            :root [href*="https://www.jmbullion.com/gold/"], 
            :root a[href^="https://iac.ampxdirect.com/"], 
            :root a[href^="https://horny-pussies.com/tds"], 
            :root a[href^="https://graizoah.com/"], 
            :root a[href^="http://feedads.g.doubleclick.net/"], 
            :root a[href^="https://redsittalvetoft.pro/"], 
            :root a[href^="https://googleads.g.doubleclick.net/pcs/click"], 
            :root a[href^="http://cdn.adstract.com/"], 
            :root a[href^="https://gogoman.me/"], 
            :root a[href^="https://go.xtbaffiliates.com/"], 
            :root a[href^="https://go.strpjmp.com/"], 
            :root a[href^="https://go.stripchat.com/"][href*="&campaignId="], 
            :root a[href^="https://go.markets.com/visit/?bta="], 
            :root a[href^="https://go.julrdr.com/"], 
            :root a[href^="https://landing.brazzersnetwork.com/"], 
            :root a[href^="https://go.hpyjmp.com/"], 
            :root a[href^="https://go.goasrv.com/"], 
            :root a[href^="https://adnetwrk.com/"], 
            :root a[href^="https://go.gldrdr.com/"], 
            :root a[href^="https://fleshlight.sjv.io/"], 
            :root a[href^="https://go.etoro.com/"] > img, 
            :root a[href^="https://go.currency.com/"], 
            :root a[href^="https://track.afftck.com/"], 
            :root a[href^="http://guideways.info/"], 
            :root a[href^="https://go.cmrdr.com/"], 
            :root a[href^="http://www.easydownloadnow.com/"], 
            :root a[href^="https://go.alxbgo.com/"], 
            :root a[href*=".inclk.com/"], 
            :root a[href^="https://go.ad2up.com/"], 
            :root a[href^="https://giftsale.co.uk/?utm_"], 
            :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, 
            :root a[href^="https://fonts.fontplace9.com/"], 
            :root a[href^="http://clkmon.com/adServe/"], 
            :root a[href^="https://flirtaescopa.com/"], 
            :root a[href^="https://fertilitycommand.com/"], 
            :root a[href^="https://fakelay.com/"], 
            :root a[href^="https://earandmarketing.com/"], 
            :root [lazy-ad="leftthin_banner"], 
            :root a[href^="https://dynamicadx.com/"], 
            :root a[href^="https://djtcollectorclub.org/"][href*="?affiliate_id="], 
            :root a[href^="https://tc.tradetracker.net/"] > img, 
            :root a[href^="//srv.buysellads.com/"], :root a[href^="https://dianches-inchor.com/"], 
            :root a[href^="https://creacdn.top-convert.com/"], 
            :root iframe[src^="https://pagead2.googlesyndication.com/"], 
            :root a[href^="https://retiremely.com/"], 
            :root a[href^="https://cpmspace.com/"], 
            :root a[href^="https://cpartner.bdswiss.com/"], 
            :root a[href^="https://clicks.pipaffiliates.com/"], 
            :root .commercial-unit-mobile-top > .v7hl4d, 
            :root a[href^="https://click.plista.com/pets"], 
            :root a[href^="https://chaturbate.xyz/"], 
            :root a[href^="http://look.djfiln.com/"], 
            :root a[href^="https://chaturbate.jjgirls.com/"][href*="?tour="], 
            :root a[href^="https://chaturbate.com/in/?track="], 
            :root a[href^="https://chaturbate.com/in/?tour="], 
            :root a[href^="https://chaturbate.com/affiliates/"], 
            :root [href*="wap4dollar.com/"], 
            :root a[href^="https://mcdlks.com/"], 
            :root a[href^="https://bs.serving-sys.com"], 
            :root a[href^="https://blackorange.go2cloud.org/"],
            :root a[href^="https://go.hpyrdr.com/"], 
            :root a[href^="https://billing.purevpn.com/aff.php"] > img, 
            :root a[href^="https://affiliates.bet-at-home.com/processing/"], 
            :root a[href^="https://ads.ad4game.com/"], 
            :root a[href^="https://betway.com/"][href*="&a="], 
            :root a[href^="http://www.linkbucks.com/referral/"], 
            :root a[href^="https://azpresearch.club/"], 
            :root a[href^="https://awptjmp.com/"], 
            :root a[href^="http://www.fleshlight.com/"], 
            :root a[href^="https://aweptjmp.com/"], :root a[href^="https://awentw.com/"], :root a[href^="https://albionsoftwares.com/"], :root a[href^="//postlnk.com/"], :root a[href^="https://affiliate.rusvpn.com/click.php?"], :root a[href^="https://affiliate.geekbuying.com/gkbaffiliate.php?"], :root a[href^="https://adultfriendfinder.com/go/page/landing"], :root a[href*="pussl3.com"], :root a[href^="https://adswick.com/"], :root ADS-RIGHT, :root a[href^="https://tracking.trackcasino.co/"], :root a[href^="https://adserver.adreactor.com/"], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://ads.leovegas.com/redirect.aspx?"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://ads.cdn.live/"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root a[href^="https://refpaano.host/"], :root a[href^="https://meet-to-fuck.com/tds"], :root a[href^="https://adhealers.com/"], :root a[href^="http://servicegetbook.net/"], :root a[href^="https://bngpt.com/"], :root a[href^="http://clickandjoinyourgirl.com/"], :root a[href^="https://ad13.adfarm1.adition.com/"], :root a[href^="https://misspkl.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root a[href^="https://static.fleshlight.com/images/banners/"], :root app-advertisement, :root a[href^="https://ad.doubleclick.net/"], :root a[href^="http://zevera.com/afi.html"], :root a[href^="http://go.oclaserver.com/"], :root a[href^="https://ad.atdmt.com/"], :root a[href^="https://cams.imagetwist.com/in/?track="], :root .trc_rbox .syndicatedItem, :root a[href^="https://aaucwbe.com/"], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="http://hyperlinksecure.com/go/"], :root a[href^="https://track.themadtrcker.com/"], :root a[href^="https://bullads.net/get/"], :root a[href^="http://down1oads.com/"], :root a[href^="http://yads.zedo.com/"], :root a[href^="http://xtgem.com/click?"], :root a[href^="https://ads.trafficpoizon.com/"], :root div[class^="local-feed-banner-ads"], :root a[href^="http://wxdownloadmanager.com/dl/"], :root a[href^="http://www.zergnet.com/i/"], :root a[href*=".clksite.com/"], :root a[href^="http://www.webtrackerplus.com/"], :root a[href^="http://www.usearchmedia.com/signup?"], :root a[href^="http://www.torntv-downloader.com/"], :root a[href^="http://www.tirerack.com/affiliates/"], :root a[href^="http://www.text-link-ads.com/"], :root a[href^="https://gghf.mobi/"], :root a[href^="http://www.terraclicks.com/"], :root a[href^="https://ads-for-free.com/click.php?"], :root a[href^="http://www.socialsex.com/"], :root a[href^="https://join.virtualtaboo.com/track/"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root [href^="https://awbbjmp.com/"], :root a[href^="http://www.sfippa.com/"], :root a[href^="http://www.xmediaserve.com/"], :root a[href^="http://www.sex.com/videos/?utm_"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root a[href^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://www.sex.com/?utm_"], :root a[href^="http://secure.signup-page.com/"], :root a[href^="http://www.quick-torrent.com/download.html?aff"], :root a[href^="http://www.plus500.com/?id="], :root [href*=".zlinkm.com/"], :root a[href^="http://www.pinkvisualgames.com/?revid="], :root a[href^="https://trklvs.com/"], :root a[href^="http://www.paddypower.com/?AFF_ID="], :root a[href^="https://go.247traffic.com/"], :root a[href^="http://www.freefilesdownloader.com/"], :root a[href^="http://www.mysuperpharm.com/"], :root .trc_rbox_border_elm .syndicatedItem, :root a[href^="http://www.myfreepaysite.com/sfw_int.php?aid"], :root a[href^="http://www.myfreepaysite.com/sfw.php?aid"], :root a[href^="http://www.mrskin.com/tour"], :root a[href^="http://bcntrack.com/"], :root a[href^="http://www.securegfm.com/"], :root a[href^="http://www.liversely.net/"], :root a[href^="https://partners.fxoro.com/click.php?"], :root [href*="//trackmstr.com"], :root [href*="prayuserparka.com/"], :root a[href^="http://www.idownloadplay.com/"], :root a[href^="http://www.hitcpm.com/"], :root a[href^="http://fusionads.net"], :root a[href^="http://www.hibids10.com/"], :root div[class^="awpcp-random-ads"], :root [href*="//securesafemembers.com"], :root a[href^="http://www.graboid.com/affiliates/"], :root a[href^="http://www.gamebookers.com/cgi-bin/intro.cgi?"], :root div[id^="div_openx_ad_"], :root a[href^="http://www.friendlyquacks.com/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href*=".tfaln.com/"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href^="https://content.oneindia.com/www/delivery/"], :root a[href^="http://www.fpcTraffic2.com/blind/in.cgi?"], :root a[href^="http://www.flashx.tv/downloadthis"], :root .trc_rbox_div a[target="_blank"][href^="http://tab"], :root a[href^="https://americafirstpolls.com/"], :root a[href^="http://clickserv.sitescout.com/"], :root a[href^="http://www.firstload.de/affiliate/"], :root a[href^="http://www.twinplan.com/AF_"], :root a[href^="http://www.fducks.com/"], :root a[href^="http://www.duckssolutions.com/"], :root a[href^="https://torrentsafeguard.com/?aid="], :root a[href^="https://offers.refchamp.com/"], :root a[href^="https://go.trkclick2.com/"], :root a[href^="https://www.mrskin.com/account/"], :root a[href^="http://www.duckcash.eu/"], :root a[href^="http://go.seomojo.com/tracking202/"], :root a[href^="http://www.downloadweb.org/"], :root a[href^="http://www.down1oads.com/"], :root a[href^="http://www.dealcent.com/register.php?affid="], :root a[href^="http://www.clkads.com/adServe/"], :root a[href^="https://track.interactivegf.com/"], :root div[class^="adpubs-"], :root a[href*="deliver.trafficfabrik.com"], :root a[href^="http://www.cash-duck.com/"], :root a[href^="https://aff-ads.stickywilds.com/"], :root a[href^="http://www.bitlord.me/share/"], :root .grid > .container > #aside-promotion, :root a[href^="http://www.babylon.com/welcome/index?affID"], :root a[onmousedown^="this.href='/wp-content/embed-ad-content/"], :root a[href^="http://popup.taboola.com/"], :root a[href^="//adbit.co/?a=Advertise&"], :root a[href^="https://fast-redirecting.com/"], :root a[href^="https://bluedelivery.pro/"], :root [href^="http://join.michelle-austin.com/"], :root a[href^="http://www.sexgangsters.com/?pid="], :root a[href^="http://www.amazon.co.uk/exec/obidos/external-search?"], :root a[href^="http://www.afgr2.com/"], :root a[href^="http://c.jumia.io/"], :root a[href^="http://www.affiliates1128.com/processing/"], :root a[href^="http://go.ad2up.com/"], :root a[href^="https://badoinkvr.com/"], :root a[href*="/adServe/banners?"], :root a[href^="http://www.adxpansion.com"], :root a[href^="http://www.ragazzeinvendita.com/?rcid="], :root .plistaList > .itemLinkPET, :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root a[href^="http://www.adbrite.com/mb/commerce/purchase_form.php?"], :root a[href^="http://www.TwinPlan.com/AF_"], :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="http://www.1clickdownloader.com/"], :root a[href^="http://www.123-reg.co.uk/affiliate2.cgi"], :root div[itemtype="http://www.schema.org/WPAdBlock"], :root a[href^="http://wopertific.info/"], :root a[href^="http://bodelen.com/"], :root a[href^="http://wgpartner.com/"], :root a[href^="http://web.adblade.com/"], :root a[href^="https://go.onclasrv.com/"], :root a[href^="http://wct.link/"], :root a[href^="http://us.marketgid.com"], :root a[href^="http://ul.to/ref/"], :root a[href^="http://ucam.xxx/?utm_"], :root a[href^="http://traffic.tc-clicks.com/"], :root a[href^="http://www.liutilities.com/"], :root a[href^="http://www.dl-provider.com/search/"], :root a[href^="http://tc.tradetracker.net/"] > img, :root a[href^="http://tracking.deltamediallc.com/"], :root div[aria-label="Ads"], :root a[href^="http://axdsz.pro/"], :root a[href^="https://go.ebrokerserve.com/"], :root a[href^="http://galleries.securewebsiteaccess.com/"], :root a[href^="http://stateresolver.link/"], :root a[href^="http://sharesuper.info/"], :root a[href^="https://awecrptjmp.com/"], :root a[href^="http://server.cpmstar.com/click.aspx?poolid="], :root a[href^="http://see.kmisln.com/"], :root a[href^="//db52cc91beabf7e8.com/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root a[href^="http://secure.vivid.com/track/"], :root a[href^="http://www.downloadthesefiles.com/"], :root a[href^="http://secure.cbdpure.com/aff/"], :root a[href*="?adlivk="][href*="&refer="], :root a[href^="//look.djfiln.com/"], :root a[href^="http://searchtabnew.com/"], :root aside[id^="advads_ad_widget-"], 
            :root a[href^="http://lp.ezdownloadpro.info/"], :root a[href^="http://uploaded.net/ref/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="http://s9kkremkr0.com/"], :root a[href^="http://azmobilestore.co/"], :root a[href^="http://s5prou7ulr.com/"], :root a[href^="http://rs-stripe.wsj.com/stripe/redirect"], :root a[href^="https://easygamepromo.com/ef/custom_affiliate/"], :root a[href^="http://record.betsafe.com/"], :root a[href*="a2g-secure.com"], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href^="http://buysellads.com/"], :root a[href^="http://reallygoodlink.freehookupaffair.com/"], :root a[href^="https://bnsjb1ab1e.com/"], :root a[href^="//oardilin.com/"], :root a[href^="http://pwrads.net/"], :root a[href^="http://promos.bwin.com/"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root a[href^="http://play4k.co/"], :root a[href*="//ezofferz.com/"], :root a[href^="https://dltags.com/"], :root a[href^="http://onclickads.net/"], :root a[href^="http://n.admagnet.net/"], :root a[href^="//awejmp.com/"], :root a[href^="http://mob1ledev1ces.com/"], :root a[href^="http://mmo123.co/"], :root a[href^="http://media.paddypower.com/redirect.aspx?"], :root a[href^="http://allaptair.club/"], :root [href*=".engine.adglare.net/"], :root a[href^="https://track.trkinator.com/"], :root div[id^="ad-position-"], :root a[data-redirect^="this.href='http://paid.outbrain.com/network/redir?"], :root a[href^="http://liversely.com/"], :root a[href^="http://keep2share.cc/pr/"], :root a[href^="https://gamescarousel.com/"], :root a[href^="http://istri.it/?"], :root a[href^="http://www.fbooksluts.com/"], :root a[href^="http://www.cdjapan.co.jp/aff/click.cgi/"], :root a[href*="//ridingintractable.com/"], :root a[href^="http://c.actiondesk.com/"], :root a[href^="http://intent.bingads.com/"], :root a[href^="https://intrev.co/"], :root a[href^="http://https://www.get-express-vpn.com/offer/"], :root a[href^="//voyeurhit.com/cs/"], :root [href*=".go2page.net"], :root a[href^="http://hd-plugins.com/download/"], :root a[href^="http://greensmoke.com/"], :root a[href^="https://look.utndln.com/"], :root a[href^="//5e1fcb75b6d662d.com/"], :root a[href^="http://googleads.g.doubleclick.net/pcs/click"], :root .nrelate .nr_partner, :root a[href^="http://go.xtbaffiliates.com/"], :root a[href*=".purple6401.com/"], :root a[href^="https://oackoubs.com/"], :root a[href^="http://install.securewebsiteaccess.com/"], :root a[href^="http://www.revenuehits.com/"], :root a[href^="http://go.mobisla.com/"], :root a[href^="https://ads.planetwin365affiliate.com/redirect.aspx?"], :root a[href^="http://g1.v.fwmrm.net/ad/"], :root a[href^="http://imads.integral-marketing.com/"], :root a[href^="http://freesoftwarelive.com/"], :root a[href^="http://adtrackone.eu/"], :root span[title="Ads by Google"], :root a[href^="http://finaljuyu.com/"], :root a[href^="https://www.im88trk.com/"], :root a[href^="http://ffxitrack.com/"], :root a[href^="http://t.wowtrk.com/"], :root a[href^="//syndication.dynsrvtbg.com/splash.php?"], :root a[href^="http://extra.bet365.com/"][href*="?affiliate="], :root a[href^="http://ethfw0370q.com/"], :root a[href^="https://tracking.comfortclick.eu/"], :root [id^="bunyad_ads_"], :root a[href^="http://elitefuckbook.com/"], :root a[href^="http://eclkmpsa.com/"], :root a[href^="http://earandmarketing.com/"], :root a[href*=".mfroute.com/"], :root #content > #center > .dose > .dosesingle, :root a[href^="http://campaign.bharatmatrimony.com/track/"], :root a[href*="3wr110.xyz/"], :root a[href^="http://d2.zedo.com/"], :root a[href^="http://codec.codecm.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="http://www.downloadplayer1.com/"], :root a[href^="http://clicks.binarypromos.com/"], :root a[href^="https://dediseedbox.com/clients/aff.php?"], :root [href^="/ucmini.php"], :root a[href^="http://www.wantstraffic.com/"], :root a[href^="http://track.afcpatrk.com/"], :root a[href^="http://databass.info/"], :root div[data-test-id="AdBannerWrapper"], :root div[class^="AdCard_"], :root a[href^="http://www.urmediazone.com/signup"], :root a[href^="http://click.plista.com/pets"], :root a[href^="http://chaturbate.com/affiliates/"], :root [href^="https://secure.bmtmicro.com/servlets/"], :root a[href^="http://amzn.to/"] > img[src^="data"], :root a[href^="http://bs.serving-sys.com/"], :root a[href^="http://cpaway.afftrack.com/"], :root a[href^="http://cdn.adsrvmedia.net/"], :root [lazy-ad="top_banner"], :root a[href^="http://360ads.go2cloud.org/"], :root a[href^="http://dftrck.com/"], :root a[href^="http://casino-x.com/?partner"], :root a[href^="https://meet-sexhere.com/"], :root a[href^="http://record.sportsbetaffiliates.com.au/"], :root a[href^="http://campeeks.com/"][href*="&utm_"], :root a[href^="http://download-performance.com/"], :root a[href^="http://www.on2url.com/app/adtrack.asp"], :root #\5f _nq__hh[style="display:block!important"], :root [href^="https://affect3dnetwork.com/track/"], :root div[class^="index_displayAd_"], :root a[href^="http://adultgames.xxx/"], :root a[href^="https://s.zlink2.com/"], :root a[href^="http://semi-cod.com/clicks/"], :root a[href*="//bongacams4.com/track?"], :root a[href^="http://campaign.bharatmatrimony.com/cbstrack/"], :root a[href^="http://www.seekbang.com/cs/"], :root a[href^="http://syndication.exoclick.com/"], :root a[href^="http://k2s.cc/pr/"], :root [src*="https://cdn.cloudimagesb.com/"], :root a[href^="http://bluehost.com/track/"], :root div[id^="vuukle-ad-"], :root a[href^="http://betahit.click/"], :root a[href^="https://torguard.net/aff.php"] > img, :root a[href^="http://bestorican.com/"], :root a[href^="http://bcp.crwdcntrl.net/"], :root a[href^="http://bc.vc/?r="], :root a[href^="https://windscribe.com/promo/"], :root a[href^="http://farm.plista.com/pets"], :root a[href^="https://leg.xyz/?track="], :root a[href^="http://affiliate.glbtracker.com/"], :root a[href^="https://transfer.xe.com/signup/track/redirect?"], :root a[href^="http://anonymous-net.com/"], :root aside[itemtype="https://schema.org/WPAdBlock"], :root a[href^="https://watchmygirlfriend.tv/"], :root a[href^="https://ovb.im/"], :root a[href^="http://hotcandyland.com/partner/"], :root a[href^="http://affiliates.thrixxx.com/"], :root #atvcap + #tvcap > .mnr-c > .commercial-unit-mobile-top, :root a[href*="/adrotate-out.php?"], :root a[href^="http://affiliates.lifeselector.com/"], :root a[href^="http://affiliate.coral.co.uk/processing/"], :root a[href^="http://aff.ironsocket.com/"], :root div[id^="drudge-column-ads-"], :root a[href*="//bongacams10.com/track?"], :root a[href^="http://tour.mrskin.com/"], :root [src^="/Redirect.a2b?"], :root a[href^="http://linksnappy.com/?ref="], :root ad-desktop-sidebar, :root [id*="MGWrap"], :root a[href^="http://9amq5z4y1y.com/"], :root a[href^="http://adtrack123.pl/"], :root a[href^="http://adsrv.keycaptcha.com"], :root a[href^="http://deloplen.com/afu.php?zoneid="], :root div[class^="StickyHeroAdWrapper-"], :root a[href^="http://cwcams.com/landing/click/"], :root a[href^="http://ads.betfair.com/redirect.aspx?"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="http://adserver.adtech.de/"], :root a[href^="http://adserver.adreactor.com/"], :root a[href^="http://ads.sprintrade.com/"], :root a[data-redirect^="http://click.plista.com/pets"], :root .section-subheader > .section-hotel-prices-header, :root a[href^="http://landingpagegenius.com/"], :root [href^="https://click2cvs.com/"], :root a[href^="http://ads.expekt.com/affiliates/"], :root a[href^="http://reallygoodlink.extremefreegames.com/"], :root a[href^="http://adlev.neodatagroup.com/"], :root [href*="//mclick.net"], :root a[href^="http://adclick.g.doubleclick.net/"], :root a[href^="http://www.sex.com/pics/?utm_"], :root a[href^="http://vo2.qrlsx.com/"], :root [href^="https://stvkr.com/"], :root a[href^="http://engine.newsmaxfeednetwork.com/"], :root a[href^="http://ad.yieldmanager.com/"], :root [href^="http://homemoviestube.com/"], :root a[href^="http://ad.doubleclick.net/"], :root a[href^="http://websitedhoome.com/"], :root a[href^="https://clickadilla.com/"], :root .ob_container .item-container-obpd, :root a[href*=".directtl.xyz/"], :root a[href^="http://www.adskeeper.co.uk/"], :root a[href^="http://ad-emea.doubleclick.net/"], :root a[href^="http://srvpub.com/"], :root [data-dynamic-ads], :root a[href^="http://a.adquantix.com/"], :root a[href^="http://NowDownloadAll.com"], :root a[href^="http://1phads.com/"], :root a[href^="https://ismlks.com/"], :root a[href^="//zenhppyad.com/"], :root a[href^="https://www.sugarinstant.com/?partner_id="], :root a[href^="//z6naousb.com/"], :root a[href^="//www.pd-news.com/"], :root div[id^="ads250_250-widget"], :root [href^="https://go.astutelinks.com/"], :root [href*=".doubleclick-net.com"], :root a[href^="//www.mgid.com/"], :root a[href^="http://lp.ncdownloader.com/"], :root a[href^="//pubads.g.doubleclick.net/"], :root a[href^="http://www.ducksnetwork.com/"], :root a[href^="http://3wr110.net/"], :root #topstuff > #tads, :root a[href*=".bang.com/"][href*="&aff="], :root .pubexchange_module .pe-external, :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://join3.bannedsextapes.com/track/"], :root [href^="http://join.shemalesfromhell.com/"], :root a[href^="https://www.travelzoo.com/oascampaignclick/"], :root a[href^="https://see.kmisln.com/"], :root [src^="//adtorio.com/"], :root a[href^="http://refer.webhostingbuzz.com/"], :root a[href^="//nlkdom.com/"], :root a[href^="//medleyads.com/spot/"], :root [href^="https://mylead.global/stl/"] > img, :root a[href^="https://ilovemyfreedoms.com/"][href*="?affiliate_id="], :root [href*=".afftracks.online/"], :root div[class^="Component-dfp-"], :root a[href^="//healthaffiliate.center/"], :root [onclick*="content.ad/"], :root a[href^="https://clixtrac.com/"], :root a[href^="//88d7b6aa44fb8eb.com/"], 
            :root a[href^="http://go.fpmarkets.com/"], :root a[href^="//00ae8b5a9c1d597.com/"], :root [href^="http://join.ts-dominopresley.com/"], :root a[href^=".vddfe.club/"], :root [href^="/ucdownloader.php"], :root a[href^="https://awejmp.com/"], :root [href*="//go2page.net"], :root a[href^=" http://www.sex.com/"][href*="&utm_"], :root a[href^="https://fileboom.me/pr/"], :root a[href^="http://marketgid.com"], :root [href^="https://mysbitl.com"], :root a[href*="onclkds."], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href*=".intab.fun/"], :root a[href*="get-express-vpn.xyz"], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href*="=adscript"], :root a[href*="=Adtracker"], :root a[href^="https://members.linkifier.com/public/affiliateLanding?refCode="], :root a[href^="https://jmp.awempire.com/"], :root [href^="https://wct.link/"], :root a[href^="https://track.totalav.com/"], :root a[href^="http://ad-apac.doubleclick.net/"], :root a[href*="/servlet/click/zone?"], :root a[href^="http://track.trkvluum.com/"], :root a[href^="https://www.chngtrack.com/"], :root a[href*="=exoclick"], :root a[href^="http://www.firstclass-download.com/"], :root a[href*="//bongacams7.com/track?"], :root FBS-AD, :root a[href*="//bongacams5.com/track?"], :root a[href^="http://k2s.cc/code/"], :root div[id^="tms-ad-dfp-"], :root a[href^="https://trust.zone/go/r.php?RID="], :root a[href^="http://c43a3cd8f99413891.com/"], :root a[href*="//bongacams2.com/track?"], :root a[href^="//4f6b2af479d337cf.com/"], :root [href*="//doubleclick-net.com"], :root div[id^="advads-"], :root a[href^="http://www.myfreecams.com/?co_id="][href*="&track="], :root a[href^="https://track.afcpatrk.com/"], :root a[href*=".ad-center.com/"], :root a[href*=".udncoeln.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root #ads > .dose > .dosesingle, :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > div > .vci, :root a[href*="delivery.trafficfabrik.com"], :root .trc_rbox_div .syndicatedItem, :root a[href^="http://www.streamate.com/exports/"], :root [href^="https://traffserve.com/"], :root [href*="maskip.co/"], :root div[class$="_b-ad-main"], :root a[href*=".trck5.com/"], :root a[href*=".qertewrt.com/"], :root .ob-widget > .ob-first.ob-widget-section, :root a[href*=".smartadserver.com"], :root a[href^="http://z1.zedo.com/"], :root a[href*=".irtyc.com/"], :root div[id^="div_ad_stack_"], :root a[href*=".ichlnk.com/"], :root a[href^="https://uncensored3d.com/"], :root a[href^="http://adf.ly/?id="], :root a[href^="https://usenetxs.website/"], :root a[href^="http://pokershibes.com/index.php?ref="], :root a[href^="http://api.content.ad/"], :root a[href*=".clkcln.com/"], :root [data-ad-manager-id], :root div[class^="adUnit_"], :root a[href^="https://deliver.tf2www.com/"], :root a[href^="http://spygasm.com/track?"], :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root [src*="//www.dianomi.com/smartads.epl"], :root a[href*=".adk2x.com/"], :root a[href^="http://www.friendlyadvertisements.com/"], :root a[href^="http://www.firstload.com/affiliate/"], :root a[href^="http://duckcash.eu/"], :root a[href^="http://www.mobileandinternetadvertising.com/"], :root [href^="https://join.playboyplus.com/track/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root [href^="https://www.reimageplus.com/"], :root div[id^="cns_ads_"], :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root a[href^="http://enter.anabolic.com/track/"], :root a[data-nvp*="'trafficUrl':'https://paid.outbrain.com/network/redir?"], :root a[href^="http://a63t9o1azf.com/"], :root a[href*=".axdsz.pro/"], :root a[href^="http://www.badoink.com/go.php?"], :root a[class="RBAd"], :root a[href^="http://banners.victor.com/processing/"], :root [href^="http://raboninco.com/"], :root a[href^="http://www.getyourguide.com/?partner_id="], :root [onclick^="window.open('https://www.brazzersnetwork.com/landing/"], :root [href^="http://join.rodneymoore.com/"], :root [id*="MarketGid"], :root a[href^="http://espn.zlbu.net/"], :root a[href^="http://admrotate.iplayer.org/"], :root a[href^="https://scurewall.co/"], :root div[class*="_browserAdOuterContainer_"], :root [name^="google_ads_iframe"], :root a[href^="http://fsoft4down.com/"], :root a[href*="ad2upapp.com/"], :root a[href*=".fwd28.com/"], :root [lazy-ad="leftbottom_banner"], :root dile-cookies-consent, :root [id^="div-gpt-ad"], :root a[href^="https://playuhd.host/"], :root [href^="https://go.affiliatexe.com/"], :root a[href^="http://mgid.com/"], :root a[href*=".adsrv.eacdn.com/"] > img, :root [href^="https://ptwmjmp.com/"], :root [href*="//etracking.pro"], :root a[href^="http://www.fonts.com/BannerScript/"], :root a[href^="http://c.ketads.com/"], :root a[href^="http://6kup12tgxx.com/"], :root [href^="https://freecourseweb.com/"] > .sitefriend, :root [href^="https://www.hostg.xyz/aff_c"] > img, :root [href*="//trackout.business"], :root [href^="https://veepn.g2afse.com/"], :root a[href^="https://syndication.exoclick.com/splash.php?"], :root a[data-oburl^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://refpa.top/"], :root a[href*="//bongacams.com/track?"], :root a[href^="https://servedbyadbutler.com/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root a[href^="https://mob1ledev1ces.com/"], :root a[data-redirect^="http://paid.outbrain.com/network/redir?"], :root a[href^="https://promo-bc.com/"], :root a[href^="https://explore.findanswersnow.net/"], :root [id^="adframe_wrap_"], :root div[jsdata*="CarouselPLA-"][data-id^="CarouselPLA-"], :root a[href^="https://go.trackitalltheway.com/"], :root [data-template-type="nativead"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://traffic.bannerator.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root a[href^="http://www.roboform.com/php/land.php"], :root div[id^="yandex_ad"], :root a[href^="https://www.pornhat.com/"][rel="nofollow"], :root a[href^="https://www.hotgirls4fuck.com/"], :root a[href*=".frtyl.com/"], :root a[href^="http://y1jxiqds7v.com/"], :root [href^="https://online-protection-now.com/"], :root a[href^="http://online.ladbrokes.com/promoRedirect?"], :root a[href^="//mob1ledev1ces.com/"], :root [href^="https://go.4rabettraff.com/"], :root a[href^="https://delivery.porn.com/"], :root a[href^="https://www.firstload.com/affiliate/"], :root .trc_related_container div[data-item-syndicated="true"], :root a[href^="https://freeadult.games/"], :root a[href^="http://liversely.net/"], :root a[href^="http://www.coiwqe.site/"], :root iframe[id^="google_ads_frame"], :root a[href^="http://www.bet365.com/"][href*="affiliate="], :root a[href^="http://www.bluehost.com/track/"] > img, :root a[data-url^="http://paid.outbrain.com/network/redir?"], :root a[href^="https://www.popads.net/users/"], :root a[href^="http://www.advcashpro.com/aff/"], :root a[href^="http://adultfriendfinder.com/p/register.cgi?pid="], :root a[href^="http://secure.hostgator.com/~affiliat/"], :root [onclick^="window.open('http://adultfriendfinder.com/search/"], :root [onclick^="window.open('window.open('//delivery.trafficfabrik.com/"], :root [href^="/admdownload.php"], :root iframe[src^="http://ad.yieldmanager.com/"], :root a[href^="http://pubads.g.doubleclick.net/"], :root a[href^="https://porntubemate.com/"], :root a[href^="http://www.gfrevenge.com/landing/"], :root a[href^="http://45eijvhgj2.com/"], :root a[href^="http://hpn.houzz.com/"], :root div[id^="ad_bigbox_"], :root #content > #right > .dose > .dosesingle, :root a[href^="http://9nl.es/"], :root a[href^="https://deliver.ptgncdn.com/"], :root a[href^="http://latestdownloads.net/download.php?"], :root [href^="https://www.targetingpartner.com/"], :root a[href^="http://see-work.info/"], :root a[href*=".orange2258.com/"], :root #taw > .med + div > #tvcap > .mnr-c:not(.qs-ic) > .commercial-unit-mobile-top, :root .plista_widget_belowArticleRelaunch_item[data-type="pet"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root a[href^="http://affiliates.score-affiliates.com/"], :root a[href^="https://wantopticalfreelance.com/"], :root [href^="/ucdownload.php"], :root [id^="ad-wrap-"], :root div[id^="ad-gpt-"], :root a[href^="http://pan.adraccoon.com?"], :root div[data-contentexchange-widget], :root [href^="http://www.star-clicks.com/"], :root [href^="http://join.hardcoreshemalevideo.com/"], :root a[href^="http://ads2.williamhill.com/redirect.aspx?"], :root a[href*=".xromp.com/landing/click/"], :root a[href^="https://click.hoolig.app/"], :root a[href^="http://www.download-provider.org/"], :root a[href^="https://10dfkuvbdkfv.club/"], :root AD-TRIPLE-BOX, :root [class^="Ad-adContainer"], :root a[href^="http://adserving.unibet.com/"], :root [id*="ScriptRoot"], :root a[href^="http://fileboom.me/pr/"], :root a[href*=".trust.zone"], :root a[href^="https://adsrv4k.com/"], :root a[href^="http://trk.mdrtrck.com/"], :root [href^="https://shrugartisticelder.com"], :root [href^="https://refpahrwzjlv.top/"], :root a[href^="http://czotra-32.com/"], :root a[href^="http://click.payserve.com/"], :root a[href^="http://serve.williamhill.com/promoRedirect?"], :root [class*="__adspot-title-container"], :root a[href*="n47adshostnet.com/"], :root a[href*=".cfm?fp="][href*="&prvtof="], :root [href*=".mclick.net"], :root [href*=".grtya.com/"], :root a[href^="http://refpaano.host/"], :root a[href*="/cmd.php?ad="], :root [href^="https://bulletprofitsmartlink.com/"], :root [href^="https://join3.bannedsextapes.com"], :root a[href^="http://tezfiles.com/pr/"], :root div[class^="Ad__container"], :root a[href^="http://adprovider.adlure.net/"], :root a[id^="ads_banner_"], :root a[href^="http://findersocket.com/"], :root a[href^="https://porngames.adult/?SID="], :root div[id^="adspot-"], 
            :root #\5f _admvnlb_modal_container, :root a[href^="http://www.streamtunerhd.com/signup?"], :root div[class^="hp-ad-rect-"], :root a[href^="http://dwn.pushtraffic.net/"], :root a[href$="/vghd.shtml"], :root div[id^="crt-"][style], :root a[href^="http://igromir.info/"], :root div[id^="div-ads-"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="http://at.atwola.com/"], :root a[href^="https://syndication.dynsrvtbg.com/splash.php?"], :root [href^="http://join.trannies-fuck.com/"], :root a[href^="http://get.slickvpn.com/"], :root [data-ad-module], :root a[href^="https://www.g4mz.com/"], :root a[href^="http://webgirlz.online/landing/"], :root [href*="cadsecs.com/"], :root a[href^="https://msecure117.com/"], :root [href^="http://stvkr.com/"], :root a[href^="https://keep2share.cc/pr/"], :root a[href*=".opskln.com/"], :root a[href^="http://xads.zedo.com/"], :root [class^="div-gpt-ad"], :root [class*="auto-bottom-advertising-"], :root a[href^="https://t.mobtya.com/"], :root a[href^="https://www.adxtro.com/"], :root [class*="__adv-block"], :root a[href^="https://farm.plista.com/pets"], :root a[href*=".red90121.com/"], :root a[href^="http://www.afgr3.com/"], :root [ad-id^="googlead"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root [href^="https://join.girlsoutwest.com/"], :root a[href^="http://taboola-"][href*="/redirect.php?app.type="], :root a[href^="http://www.menaon.com/installs/"], :root a[href^="https://financeads.net/tc.php?"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > .vci, :root a[href^="https://www.oneclickroot.com/?tap_a="] > img, :root a[href^="//porngames.adult/?SID="], :root DFP-AD, :root a[href^="https://mmwebhandler.aff-online.com/"], :root [href^="https://r.kraken.com/"], :root a[href^="http://www.pinkvisualpad.com/?revid="], :root a[href^="https://www.friendlyduck.com/AF_"], :root [href^="http://advertisesimple.info/"], :root [lazy-ad="lefttop_banner"], :root a[href^="https://a.adtng.com/"], :root a[href^="http://static.fleshlight.com/images/banners/"], :root a[href^="https://www.adskeeper.co.uk/"], :root [href^="https://www.highrevenuecpm.com"], :root a[href^="https://secure.cbdpure.com/aff/"], :root AMP-AD, :root a[href^="http://aflrm.com/"], :root div[id^="google_dfp_"], :root [href*="get-download.club/"], :root [href^="https://www.xvbelink.com/"], :root a[href^="http://affiliates.pinnaclesports.com/processing/"], :root #header + #content > #left > #rlblock_left, :root a[href^="http://partners.etoro.com/"], :root [id^="google_ads_iframe"], :root .vid-present > .van_vid_carousel__padding, :root a[href^="http://goldmoney.com/?gmrefcode="], :root a[href^="http://papi.mynativeplatform.com:80/pub2/"], :root LEADERBOARD-AD, :root .plistaList > .plista_widget_underArticle_item[data-type="pet"], :root [class*="-slot_ad-placements-"], :root [href^="http://join.shemale.xxx/"], :root a[href^="https://www.oboom.com/ad/"], :root [href*=".adcampo.com/"], :root [href^="https://pulsetrack.biz/"], :root a[href^="https://trackjs.com/?utm_source"], :root AFS-AD, :root a[href^="https://secure.starsaffiliateclub.com/C.ashx?"], :root .trc_rbox_div .syndicatedItemUB, :root [href*=".xiloy.site/"], :root [src^="http://api.lanistaads.com/ServeAd?"], :root a[href^="http://webtrackerplus.com/"], :root [href*=".jetx.info/"], :root [href*=".trackout.business"], :root a[href*=".allsports4you.club"] { display: none !important; }
            :root a[href^="https://track.bruceads.com/"], :root a[href^="https://m.do.co/c/"] > img, :root [href*=".ltroute.com/"], :root div[class*="margin-Advert"], :root a[href^="//jsmptjmp.com/"], :root a[href*=".adform.net/"], :root a[href^="http://www.onwebcam.com/random?t_link="], :root a[href*="//promo-bc.com/track?"], :root a[href^="https://sexsimulator.game/tab/?SID="], :root .rc-cta[data-target], :root a[href^="https://as.sexad.net/"], :root a[href^="//40ceexln7929.com/"], :root a[href$="/5-"][target="_blank"][rel="nofollow"], :root a[href*=".revimedia.com/"], :root [href*=".securesafemembers.com"], :root a[href^="https://secure.adnxs.com/clktrb?"], :root a[href^="http://adserver.adtechus.com/"], :root a[href^="https://topoffers.com/"][href*="/?pid="], :root a[href^="http://vinfdv6b4j.com/"], :root [href^="https://dooloust.net/"], :root a[href*=".surfmdia.com/"], :root .commercial-unit-mobile-top > div[data-pla="1"], :root [data-freestar-ad], :root [href*=".revrtb.com/"], :root a[href^="https://goraps.com/"], 
            :root [href*=".etracking.pro"] { 
                display: none !important; 
            }
        </style>
        <script src="https://reaperscans.com/wp-includes/js/wp-emoji-release.min.js?ver=5.8.1" type="text/javascript" defer=""></script><script async="" type="text/javascript" src="https://reaperscans.disqus.com/count.js"></script>
        <script type="text/javascript" async="" src="https://reaperscans.disqus.com/embed.js"></script>
        <script src="https://reaperscans.disqus.com/count-data.js?2=https%3A%2F%2Freaperscans.com%2Fseries%2Fnano-machine%2F"></script>
        <link rel="prefetch" as="style" href="https://c.disquscdn.com/next/embed/styles/lounge.45ce3ab7627dd20241bfd7e5b01d3737.css">
        <link rel="prefetch" as="script" href="https://c.disquscdn.com/next/embed/common.bundle.2f2f40d40785c9541a90e9086c8770a3.js">
        <link rel="prefetch" as="script" href="https://c.disquscdn.com/next/embed/lounge.bundle.ace98c1ec418cae085455f6914352928.js">
        <link rel="prefetch" as="script" href="https://disqus.com/next/config.js">
        <script src="https://c.disquscdn.com/next/embed/alfie_v4.63f1ab6d6b9d5807dc0c94ef3fe0b851.js" async="" charset="UTF-8"></script>
    </head>
    <body data-rsssl="1" class="wp-manga-template-default single single-wp-manga postid-87 wp-embed-responsive wp-manga-page manga-page page header-style-2 text-ui-light webp-support"> 
        <script data-cfasync="false">
            if(ewww_webp_supported){document.body.classList.add("webp-support");}
        </script> 
        <div class="wrap">
            <div class="body-wrap">
                <header class="site-header">
                    <div class="c-header__top">
                        <ul class="search-main-menu">
                            <li>
                                <form id="blog-post-search" class="ajax manga-search-form" action="https://reaperscans.com/" method="get">
                                    <input type="text" placeholder="Search..." name="s" value="" class="manga-search-field ui-autocomplete-input" autocomplete="off">
                                    <input type="submit" value="Search">
                                    <div class="loader-inner line-scale">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <input type="hidden" name="post_type" value="wp-manga">
                                    <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul>
                                </form>
                            </li>
                        </ul>
                        <div class="main-navigation style-1 ">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-navigation_wrap">
                                            <div class="wrap_branding">
                                                <a class="logo" href="https://reaperscans.com/" title="Reaper Scans">
                                                    <img class="img-responsive ewww_webp_loaded" src="https://reaperscans.com/wp-content/uploads/2021/07/logo-reaper-2.png.webp" alt="Reaper Scans" data-src-img="https://reaperscans.com/wp-content/uploads/2021/07/logo-reaper-2.png" data-src-webp="https://reaperscans.com/wp-content/uploads/2021/07/logo-reaper-2.png.webp" data-eio="j"><noscript><img class="img-responsive" src="https://reaperscans.com/wp-content/uploads/2021/07/logo-reaper-2.png.webp" alt="Reaper Scans"></noscript>
                                                </a>
                                            </div>
                                            <div class="main-menu">
                                                <ul class="nav navbar-nav main-navbar">
                                                    <li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-173">
                                                        <a href="https://reaperscans.com/">Homepage</a>
                                                    </li>
                                                    <li id="menu-item-2016" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2016">
                                                        <a href="https://reaperscans.com/home1/">Latest</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-1400" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1400">
                                                                <a href="https://reaperscans.com/home1/">Only comics</a>
                                                            </li>
                                                            <li id="menu-item-13309" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13309">
                                                                <a href="https://reaperscans.com/all-series/novels/">Only novels</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-174">
                                                        <a href="https://reaperscans.com/all-series/">All Series</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-1030" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1030">
                                                                <a href="https://reaperscans.com/all-series/comics/">Comics</a>
                                                                <ul class="sub-menu">
                                                                    <li id="menu-item-1036" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1036">
                                                                        <a href="https://reaperscans.com/all-series/comics/manhwas/">Manhwas</a>
                                                                    </li>
                                                                    <li id="menu-item-1041" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1041">
                                                                        <a href="https://reaperscans.com/all-series/comics/manhuas/">Manhuas</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li id="menu-item-1031" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1031">
                                                                <a href="https://reaperscans.com/all-series/novels/">Novels</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184">
                                                        <a href="https://reaperscans.com/reapcoins-shop/">ReapCoins Shop</a>
                                                    </li>
                                                    <li id="menu-item-1419" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-1419">
                                                        <a href="https://reaperscans.com">Languages</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-1420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1420">
                                                                <a href="https://reaperscans.fr">French</a>
                                                            </li>
                                                            <li id="menu-item-1961" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1961">
                                                                <a href="https://reaperscans.com.br/">Portuguese</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="search-navigation search-sidebar">
                                                <div id="manga-search-2" class="widget col-12 col-md-12   default  no-icon heading-style-1 manga-widget widget-manga-search">
                                                    <div class="widget__inner manga-widget widget-manga-search__inner c-widget-wrap">
                                                        <div class="widget-content">
                                                            <div class="search-navigation__wrap"> 
                                                                <script type="text/javascript">
                                                                    jQuery(document).ready(function ($) {
                                                                        if ($('.c-header__top .manga-search-form').length !== 0 && $('.c-header__top .manga-search-form.search-form').length !== 0) {

                                                                            $('form#blog-post-search').append('<input type="hidden" name="post_type" value="wp-manga">');

                                                                            $('form#blog-post-search').addClass("manga-search-form");

                                                                            $('form#blog-post-search input[name="s"]').addClass("manga-search-field");

                                                                            $('form.manga-search-form.ajax input.manga-search-field').each(function(){

                                                                            var searchIcon = $(this).parent().children('.ion-ios-search-strong');

                                                                            var append = $(this).parent();

                                                                            $(this).autocomplete({
                                                                                appendTo: append,
                                                                                source: function( request, resp ) {
                                                                                    $.ajax({
                                                                                        url: manga.ajax_url,
                                                                                        type: 'POST',
                                                                                        dataType: 'json',
                                                                                        data: {
                                                                                            action: 'wp-manga-search-manga',
                                                                                            title: request.term,
                                                                                        },
                                                                                        success: function( data ) {
                                                                                            resp( $.map( data.data, function( item ) {
                                                                                                if ( true == data.success ) {
                                                                                                    return {
                                                                                                        label: item.title,
                                                                                                        value: item.title,
                                                                                                        url: item.url,
                                                                                                        type: item.type
                                                                                                    }
                                                                                                } else {
                                                                                                    return {
                                                                                                        label: item.message,
                                                                                                        value: item.message,
                                                                                                        type: item.type,
                                                                                                        click: false
                                                                                                    }
                                                                                                }
                                                                                            }))
                                                                                        }
                                                                                    });
                                                                                },
                                                                                select: function( e, ui ) {
                                                                                    if ( ui.item.url ) {
                                                                                        window.location.href = ui.item.url;
                                                                                    } else {
                                                                                        if ( ui.item.click ) {
                                                                                            return true;
                                                                                        } else {
                                                                                            return false;
                                                                                        }
                                                                                    }
                                                                                },
                                                                                open: function( e, ui ) {
                                                                                    var acData = $(this).data( 'uiAutocomplete' );
                                                                                    acData.menu.element.addClass('manga-autocomplete').find('li div').each(function(){
                                                                                        var $self = $(this),
                                                                                            keyword = $.trim( acData.term ).split(' ').join('|');
                                                                                        $self.html( $self.text().replace( new RegExp( "(" + keyword + ")", "gi" ), '<span class="manga-text-highlight">$1</span>' ) );
                                                                                    });
                                                                                }
                                                                            }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                                                                                return $( "<li class='search-item'>" )
                                                                                    .append( "<div class='manga-type-" + item.type + "'>" + item.label + "</div>" )
                                                                                    .appendTo( ul );
                                                                            };
                                                                        });
                                                                        }
                                                                    });
                                                                </script> 
                                                                <ul class="main-menu-search nav-menu">
                                                                    <li class="menu-search">
                                                                        <a href="javascript:;" class="open-search-main-menu"> 
                                                                            <i class="icon bi bi-search"></i>
                                                                            <i class="icon ion-android-close"></i> 
                                                                        </a>
                                                                        <ul class="search-main-menu">
                                                                            <li>
                                                                                <form class="manga-search-form search-form ajax" action="https://reaperscans.com/" method="get">
                                                                                    <input class="manga-search-field ui-autocomplete-input" type="text" placeholder="Search..." name="s" value="" autocomplete="off">
                                                                                    <input type="hidden" name="post_type" value="wp-manga"> <i class="icon ion-ios-search"></i>
                                                                                    <div class="loader-inner ball-clip-rotate-multiple">
                                                                                        <div></div>
                                                                                        <div></div>
                                                                                    </div>
                                                                                    <input type="submit" value="Search">
                                                                                    <ul id="ui-id-2" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;">
                                                                                    </ul>
                                                                                </form>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c-togle__menu">
                                                <button type="button" class="menu_icon__open">
                                                    <span></span> 
                                                    <span></span> 
                                                    <span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu menu-collapse off-canvas">
                        <div class="close-nav">
                            <button class="menu_icon__close">
                                <span></span> 
                                <span></span>
                            </button>
                        </div>
                        <div class="c-modal_item">
                            <span class="c-modal_sign-in">
                                <a href="#" data-toggle="modal" data-target="#form-login" class="btn-active-modal">Sign in</a>
                            </span>
                            <span class="c-modal_sign-up">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#form-sign-up" class="btn-active-modal">Sign up</a>
                            </span>
                        </div>
                        <nav class="off-menu">
                            <ul id="menu-menu1-1" class="nav navbar-nav main-navbar">
                                <li id="nav-menu-item-173" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                                    <a href="https://reaperscans.com/" class="menu-link  main-menu-link">Homepage </a>
                                </li>
                                <li id="nav-menu-item-2016" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown hiden-sub-canvas">
                                    <a href="https://reaperscans.com/home1/" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">Latest </a>
                                    <ul class="dropdown-menu menu-depth-1">
                                        <li id="nav-menu-item-1400" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="https://reaperscans.com/home1/" class="menu-link  sub-menu-link">Only comics </a>
                                        </li>
                                        <li id="nav-menu-item-13309" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom">
                                            <a href="https://reaperscans.com/all-series/novels/" class="menu-link  sub-menu-link">Only novels </a>
                                        </li>
                                    </ul>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                </li>
                                <li id="nav-menu-item-174" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent dropdown hiden-sub-canvas">
                                    <a href="https://reaperscans.com/all-series/" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">All Series </a>
                                    <ul class="dropdown-menu menu-depth-1">
                                        <li id="nav-menu-item-1030" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent dropdown-submenu hiden-sub-canvas">
                                            <a href="https://reaperscans.com/all-series/comics/" class="menu-link  sub-menu-link">Comics </a>
                                            <ul class="dropdown-menu menu-depth-2">
                                                <li id="nav-menu-item-1036" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-post_type menu-item-object-page">
                                                    <a href="https://reaperscans.com/all-series/comics/manhwas/" class="menu-link  sub-menu-link">Manhwas </a>
                                                </li>
                                                <li id="nav-menu-item-1041" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-post_type menu-item-object-page">
                                                    <a href="https://reaperscans.com/all-series/comics/manhuas/" class="menu-link  sub-menu-link">Manhuas </a>
                                                </li>
                                            </ul>
                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        </li>
                                        <li id="nav-menu-item-1031" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="https://reaperscans.com/all-series/novels/" class="menu-link  sub-menu-link">Novels </a>
                                        </li>
                                    </ul>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                </li>
                                <li id="nav-menu-item-184" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="https://reaperscans.com/reapcoins-shop/" class="menu-link  main-menu-link">ReapCoins Shop </a>
                                </li>
                                <li id="nav-menu-item-1419" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children parent dropdown hiden-sub-canvas">
                                    <a href="https://reaperscans.com" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">Languages </a>
                                    <ul class="dropdown-menu menu-depth-1">
                                        <li id="nav-menu-item-1420" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom">
                                            <a href="https://reaperscans.fr" class="menu-link  sub-menu-link">French </a>
                                        </li>
                                        <li id="nav-menu-item-1961" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom">
                                            <a href="https://reaperscans.com.br/" class="menu-link  sub-menu-link">Portuguese </a>
                                        </li>
                                    </ul>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="clone-header"></div>
                    <div class=" c-sub-header-nav with-border  hide-sticky-menu">
                        <div class="container-fluid">
                            <div class="c-sub-nav_wrap">
                                <div class="sub-nav_content">
                                    <ul class="sub-nav_list list-inline second-menu">
                                        <li id="menu-item-172" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-172">
                                            <a href="https://www.patreon.com/reaperscans">
                                                <i class="fab fa-patreon"></i>
                                            </a>
                                        </li>
                                        <li id="menu-item-171" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-171">
                                            <a href="https://www.paypal.com/paypalme/dinoreapers"><i class="fab fa-paypal"></i></a>
                                        </li>
                                        <li id="menu-item-170" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-170">
                                            <a href="https://discord.gg/MaRegMFhRb"><i class="fab fa-discord"></i></a>
                                        </li>
                                        <li id="menu-item-1416" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1416">
                                            <a href="https://reaperscans.com/faq/">FAQ</a>
                                        </li>
                                        <i class="mobile-icon icon ion-md-more"></i>
                                    </ul>
                                </div>
                                <div class="c-modal_item">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#form-login" class="btn-active-modal">Sign in</a>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#form-sign-up" class="btn-active-modal">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="site-content">
                    <div class="post-87 wp-manga type-wp-manga status-publish has-post-thumbnail hentry wp-manga-tag-manhwa wp-manga-release-5 wp-manga-author-han-joong-wueol-ya wp-manga-artist-guem-gang-bul-gae wp-manga-genre-action wp-manga-genre-adventure wp-manga-genre-fantasy wp-manga-genre-martial-arts wp-manga-genre-sci-fi wp-manga-genre-shounen">
                        <div class="profile-manga summary-layout-1" style="background-image:url(https://reaperscans.com/wp-content/uploads/2021/08/cover.jpg); background-size:cover; background-position:center center;  ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12" style="padding-bottom:70px;">
                                        <div class="post-title">
                                            <!-- <span class="manga-title-badges custom manhwa">manhwa</span> -->
                                            <h1 style="margin-bottom:5px;">Nano Machine</h1>
                                        </div>
                                        <div class="tab-summary ">
                                            <div class="summary_image">
                                                <a href="https://reaperscans.com/series/nano-machine/">
                                                    <img width="290" height="395" data-src="https://reaperscans.com/wp-content/uploads/2021/07/NANO-1.jpg.webp" data-srcset="https://reaperscans.com/wp-content/uploads/2021/07/NANO-1.jpg.webp 290w, https://reaperscans.com/wp-content/uploads/2021/07/NANO-1-220x300.jpg.webp 220w, https://reaperscans.com/wp-content/uploads/2021/07/NANO-1-110x150.jpg.webp 110w, https://reaperscans.com/wp-content/uploads/2021/07/NANO-1-175x238.jpg.webp 175w" data-sizes="(max-width: 290px) 100vw, 290px" class="img-responsive effect-fade ls-is-cached lazyloaded" src="https://reaperscans.com/wp-content/uploads/2021/07/NANO-1.jpg.webp" style="padding-top:395px;" alt="NANO" data-src-webp="https://reaperscans.com/wp-content/uploads/2021/07/NANO-1.jpg.webp" sizes="(max-width: 290px) 100vw, 290px" srcset="https://reaperscans.com/wp-content/uploads/2021/07/NANO-1.jpg.webp 290w, https://reaperscans.com/wp-content/uploads/2021/07/NANO-1-220x300.jpg.webp 220w, https://reaperscans.com/wp-content/uploads/2021/07/NANO-1-110x150.jpg.webp 110w, https://reaperscans.com/wp-content/uploads/2021/07/NANO-1-175x238.jpg.webp 175w">	  
                                                </a>
                                            </div>
                                            <div class="summary_content_wrap">
                                                <nav>
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist" style="place-content:center;">
                                                        <a class="nav-item nav-link active" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-home" aria-selected="true">Info</a>
                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Summary</a>
                                                    </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent" style="height:90%;">
                                                    <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                                        <div class="summary_content" style="">
                                                            <div class="post-content">
                                                                <div class="loader-inner ball-pulse">
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="post-rating">
                                                                    <div class="post-total-rating ">
                                                                        <i class="ion-ios-star ratings_stars rating_current"></i>
                                                                        <i class="ion-ios-star ratings_stars rating_current"></i>
                                                                        <i class="ion-ios-star ratings_stars rating_current"></i>
                                                                        <i class="ion-ios-star ratings_stars rating_current"></i>
                                                                        <i class="ion-ios-star ratings_stars rating_current"></i>
                                                                        <span class="score font-meta total_votes">4.8</span>
                                                                    </div>
                                                                    <div class="user-rating ">
                                                                        <i class="ion-ios-star-outline ratings_stars"></i>
                                                                        <i class="ion-ios-star-outline ratings_stars"></i>
                                                                        <i class="ion-ios-star-outline ratings_stars"></i>
                                                                        <i class="ion-ios-star-outline ratings_stars"></i>
                                                                        <i class="ion-ios-star-outline ratings_stars"></i>
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
                                                                            <span class="rate-title" property="name" title="Nano Machine">Nano Machine</span>
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
                                                                        나노마신
                                                                    </div>
                                                                </div>
                                                                <div class="post-content_item">
                                                                    <div class="summary-heading">
                                                                        <h5>Author(s)</h5>
                                                                    </div>
                                                                    <div class="summary-content">
                                                                        <div class="author-content">
                                                                            <a href="https://reaperscans.com/author/han-joong-wueol-ya/" rel="tag">Han-Joong-Wueol-Ya</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content_item">
                                                                    <div class="summary-heading">
                                                                        <h5>Artist(s)</h5>
                                                                    </div>
                                                                    <div class="summary-content">
                                                                        <div class="artist-content">
                                                                            <a href="https://reaperscans.com/artist/guem-gang-bul-gae/" rel="tag">Guem-Gang-Bul-Gae</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content_item">
                                                                    <div class="summary-heading">
                                                                        <h5>Genre(s)</h5>
                                                                    </div>
                                                                    <div class="summary-content">
                                                                        <div class="genres-content">
                                                                            <a href="https://reaperscans.com/genre/action/" rel="tag">Action</a>, 
                                                                            <a href="https://reaperscans.com/genre/adventure/" rel="tag">Adventure</a>, 
                                                                            <a href="https://reaperscans.com/genre/fantasy/" rel="tag">Fantasy</a>, 
                                                                            <a href="https://reaperscans.com/genre/martial-arts/" rel="tag">Martial Arts</a>, 
                                                                            <a href="https://reaperscans.com/genre/sci-fi/" rel="tag">Sci-fi</a>, 
                                                                            <a href="https://reaperscans.com/genre/shounen/" rel="tag">Shounen</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content_item">
                                                                    <div class="summary-heading">
                                                                        <h5>Type</h5>
                                                                    </div>
                                                                    <div class="summary-content">Manhwa</div>
                                                                </div>
                                                            </div>
                                                            <div class="post-status">
                                                                <div class="post-content_item">
                                                                    <div class="summary-heading">
                                                                        <h5>Release</h5>
                                                                    </div>
                                                                    <div class="summary-content">
                                                                        <a href="https://reaperscans.com/release/2020/" rel="tag">2020</a>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content_item">
                                                                    <div class="summary-heading">
                                                                        <h5> Status</h5>
                                                                        </div>
                                                                        <div class="summary-content">OnGoing</div>
                                                                </div>
                                                                <div class="manga-action">
                                                                    <div class="count-comment">
                                                                        <div class="action_icon">
                                                                            <a href="#manga-discussion"><i class="icon ion-md-chatbubbles"></i></a>
                                                                        </div>
                                                                        <div class="action_detail">
                                                                            <span class="disqus-comment-count" data-disqus-url="https://reaperscans.com/series/nano-machine/">166 Comments</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="add-bookmark">
                                                                        <div class="action_icon">
                                                                            <script type="text/javascript">
                                                                                var requireLogin2BookMark = true;
                                                                            </script>
                                                                            <a href="#" class="wp-manga-action-button" data-action="bookmark" data-post="87" data-chapter="" data-page="1" title="Bookmark">
                                                                                <i class="icon ion-ios-bookmark"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="action_detail"><span>3.2K Users bookmarked This</span></div>
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
                                                                <p>After being held in disdain and having his life put in danger, an orphan from the Demonic Cult, Cheon Yeo-Woon, has an unexpected visit from his descendant from the future who inserts a nano machine into Cheon Yeo-Woon’s body, which drastically changes Cheon Yeo-Woon’s life after its activation. The story of Cheon Yeo-Woon’s journey of bypassing the Demonic Cult and rising to become the best martial artist has just begun.</p>
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
                                    <div class="row ">
                                        <div class="main-col col-md-12 col-sm-12 sidebar-hidden">
                                            <div class="main-col-inner">
                                                <div class="c-page">
                                                    <div class="c-page__content">
                                                        <div class="c-blog__heading style-2 font-heading">
                                                            <h2 class="h4">LATEST RELEASES</h2>
                                                            <a href="#" title="Change Order" class="btn-reverse-order" style="float:right;"><i class="icon ion-md-swap"></i></a>
                                                        </div>
                                                        <div class="page-content-listing single-page">
                                                            <div class="listing-chapters_wrap cols-4  ">
                                                                <ul class="main version-chap no-volumn">
                                                                    <li class="wp-manga-chapter">
                                                                        <a href="https://reaperscans.com/series/nano-machine/chapter-77/" style="width:100%;">Chapter 77
                                                                            <span class="chapter-release-date"><i>Nov 05, 2021</i></span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="wp-manga-chapter">
                                                                        <a href="https://reaperscans.com/series/nano-machine/chapter-76/" style="width:100%;">Chapter 76	
                                                                            <span class="chapter-release-date"><i>Nov 05, 2021</i></span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="wp-manga-chapter">
                                                                        <a href="https://reaperscans.com/series/nano-machine/chapter-75/" style="width:100%;">Chapter 75	
                                                                            <span class="chapter-release-date"><i>Oct 13, 2021</i></span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="wp-manga-chapter">
                                                                        <a href="https://reaperscans.com/series/nano-machine/chapter-74/" style="width:100%;">Chapter 74
                                                                            <span class="chapter-release-date"><i>Oct 07, 2021</i></span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="wp-manga-chapter">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-73/" style="width:100%;">
                                                                    Chapter 73																	<span class="chapter-release-date">
                                                                    <i>Oct 07, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-72/" style="width:100%;">
                                                                    Chapter 72																	<span class="chapter-release-date">
                                                                    <i>Oct 07, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-71/" style="width:100%;">
                                                                    Chapter 71																	<span class="chapter-release-date">
                                                                    <i>Oct 07, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-70/" style="width:100%;">
                                                                    Chapter 70																	<span class="chapter-release-date">
                                                                    <i>Oct 07, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-69/" style="width:100%;">
                                                                    Chapter 69																	<span class="chapter-release-date">
                                                                    <i>Oct 04, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-68/" style="width:100%;">
                                                                    Chapter 68																	<span class="chapter-release-date">
                                                                    <i>Sep 23, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-67/" style="width:100%;">
                                                                    Chapter 67																	<span class="chapter-release-date">
                                                                    <i>Sep 22, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-66/" style="width:100%;">
                                                                    Chapter 66																	<span class="chapter-release-date">
                                                                    <i>Sep 03, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-65/" style="width:100%;">
                                                                    Chapter 65																	<span class="chapter-release-date">
                                                                    <i>Sep 01, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-64/" style="width:100%;">
                                                                    Chapter 64																	<span class="chapter-release-date">
                                                                    <i>Aug 19, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-63/" style="width:100%;">
                                                                    Chapter 63																	<span class="chapter-release-date">
                                                                    <i>Aug 03, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-62/" style="width:100%;">
                                                                    Chapter 62																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-61/" style="width:100%;">
                                                                    Chapter 61																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-60/" style="width:100%;">
                                                                    Chapter 60																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-59/" style="width:100%;">
                                                                    Chapter 59																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-58/" style="width:100%;">
                                                                    Chapter 58																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-57/" style="width:100%;">
                                                                    Chapter 57																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-56/" style="width:100%;">
                                                                    Chapter 56																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-55/" style="width:100%;">
                                                                    Chapter 55																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-54/" style="width:100%;">
                                                                    Chapter 54																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-53/" style="width:100%;">
                                                                    Chapter 53																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-52/" style="width:100%;">
                                                                    Chapter 52																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-51/" style="width:100%;">
                                                                    Chapter 51																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-50/" style="width:100%;">
                                                                    Chapter 50																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-49/" style="width:100%;">
                                                                    Chapter 49																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-48/" style="width:100%;">
                                                                    Chapter 48																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-47/" style="width:100%;">
                                                                    Chapter 47																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-46/" style="width:100%;">
                                                                    Chapter 46																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-45/" style="width:100%;">
                                                                    Chapter 45																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-44/" style="width:100%;">
                                                                    Chapter 44																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-43/" style="width:100%;">
                                                                    Chapter 43																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-42/" style="width:100%;">
                                                                    Chapter 42																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-41/" style="width:100%;">
                                                                    Chapter 41																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-40/" style="width:100%;">
                                                                    Chapter 40																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-39/" style="width:100%;">
                                                                    Chapter 39																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-38/" style="width:100%;">
                                                                    Chapter 38																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-37/" style="width:100%;">
                                                                    Chapter 37																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-36/" style="width:100%;">
                                                                    Chapter 36																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-35/" style="width:100%;">
                                                                    Chapter 35																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-34/" style="width:100%;">
                                                                    Chapter 34																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-33/" style="width:100%;">
                                                                    Chapter 33																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-32/" style="width:100%;">
                                                                    Chapter 32																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-31/" style="width:100%;">
                                                                    Chapter 31																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-30/" style="width:100%;">
                                                                    Chapter 30																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-29/" style="width:100%;">
                                                                    Chapter 29																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-28/" style="width:100%;">
                                                                    Chapter 28																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-27/" style="width:100%;">
                                                                    Chapter 27																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-26/" style="width:100%;">
                                                                    Chapter 26																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-25/" style="width:100%;">
                                                                    Chapter 25																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-24/" style="width:100%;">
                                                                    Chapter 24																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-23/" style="width:100%;">
                                                                    Chapter 23																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-22/" style="width:100%;">
                                                                    Chapter 22																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-21/" style="width:100%;">
                                                                    Chapter 21																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-20/" style="width:100%;">
                                                                    Chapter 20																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-19/" style="width:100%;">
                                                                    Chapter 19																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-18/" style="width:100%;">
                                                                    Chapter 18																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-17/" style="width:100%;">
                                                                    Chapter 17																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-16/" style="width:100%;">
                                                                    Chapter 16																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-15/" style="width:100%;">
                                                                    Chapter 15																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-14/" style="width:100%;">
                                                                    Chapter 14																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-13/" style="width:100%;">
                                                                    Chapter 13																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-12/" style="width:100%;">
                                                                    Chapter 12																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-11/" style="width:100%;">
                                                                    Chapter 11																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-10/" style="width:100%;">
                                                                    Chapter 10																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-9/" style="width:100%;">
                                                                    Chapter 9																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-8/" style="width:100%;">
                                                                    Chapter 8																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-7/" style="width:100%;">
                                                                    Chapter 7																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-6/" style="width:100%;">
                                                                    Chapter 6																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-5/" style="width:100%;">
                                                                    Chapter 5																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-4/" style="width:100%;">
                                                                    Chapter 4																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-3/" style="width:100%;">
                                                                    Chapter 3																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-2/" style="width:100%;">
                                                                    Chapter 2																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li><li class="wp-manga-chapter    ">
                                                                    <a href="https://reaperscans.com/series/nano-machine/chapter-1/" style="width:100%;">
                                                                    Chapter 1																	<span class="chapter-release-date">
                                                                    <i>Jul 16, 2021</i>									</span>
                                                                    </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div id="manga-discussion" class="c-blog__heading style-2 font-heading" style="text-align:center; font-family:bebas-neue; letter-spacing:3px;">
                                                    <h4 style="font-size:30px;"> DISCUSSION</h4>
                                                </div>
                                                <div class="manga-discussion wrapper">
                                                    <div id="disqus_thread">
                                                        <iframe id="dsq-app10001" name="dsq-app10001" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" width="100%" src="https://disqus.com/embed/comments/?base=default&amp;f=reaperscans&amp;t_i=87%20https%3A%2F%2Freaperscans.com%2F%3Fpost_type%3Dwp-manga%26p%3D87&amp;t_u=https%3A%2F%2Freaperscans.com%2Fseries%2Fnano-machine%2F&amp;t_e=Nano%20Machine&amp;t_d=Nano%20Machine%20%E2%80%93%20Reaper%20Scans&amp;t_t=Nano%20Machine&amp;s_o=default#version=b8cc22d9c3be6916b2ef7fe9e57839bc" style="width: 1px !important; min-width: 100% !important; border: none !important; overflow: hidden !important; height: 10713px !important;" horizontalscrolling="no" verticalscrolling="no"></iframe>
                                                        <iframe id="indicator-north" name="indicator-north" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" style="width: 1190px !important; border: none !important; overflow: hidden !important; top: 0px !important; min-width: 1190px !important; max-width: 1190px !important; position: fixed !important; z-index: 2147483646 !important; height: 0px !important; min-height: 0px !important; max-height: 0px !important; display: none !important;"></iframe>
                                                        <iframe id="indicator-south" name="indicator-south" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" style="width: 1190px !important; border: none !important; overflow: hidden !important; bottom: 0px !important; min-width: 1190px !important; max-width: 1190px !important; position: fixed !important; z-index: 2147483646 !important; height: 0px !important; min-height: 0px !important; max-height: 0px !important; display: none !important;"></iframe>
                                                    </div>
                                                </div>
                                                <div class="row c-row related-manga">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="c-blog__heading style-2 font-heading">
                                                            <h4><i class="icon ion-ios-star"></i> YOU MAY ALSO LIKE</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-3">
                                                        <div class="related-reading-wrap related-style-1">
                                                            <div class="related-reading-img widget-thumbnail c-image-hover">
                                                                <a title="990k Ex-Life Hunter" href="https://reaperscans.com/series/990k-ex-life-hunter/">
                                                                    <img width="75" height="106" data-src="https://reaperscans.com/wp-content/uploads/2021/10/990K-75x106.jpg.webp" class="img-responsive effect-fade lazyloaded" src="https://reaperscans.com/wp-content/uploads/2021/10/990K-75x106.jpg.webp" style="padding-top:106px;" alt="990K" data-src-webp="https://reaperscans.com/wp-content/uploads/2021/10/990K-75x106.jpg.webp">
                                                                </a>
                                                            </div>
                                                            <div class="related-reading-content">
                                                                <h5 class="widget-title">
                                                                    <a href="https://reaperscans.com/series/990k-ex-life-hunter/" title="990k Ex-Life Hunter">990k Ex-Life Hunter</a>
                                                                </h5>
                                                            </div>
                                                            <div class="post-on font-meta">
                                                                <span>Oct 14, 2021</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-3">
                                                        <div class="related-reading-wrap related-style-1">
                                                            <div class="related-reading-img widget-thumbnail c-image-hover">
                                                                <a title="Leveling With The Gods – Manhwa" href="https://reaperscans.com/series/leveling-with-the-gods-manhwa/">
                                                                    <img width="75" height="106" data-src="https://reaperscans.com/wp-content/uploads/2021/07/cover-75x106.jpg.webp" class="img-responsive effect-fade lazyloaded" src="https://reaperscans.com/wp-content/uploads/2021/07/cover-75x106.jpg.webp" style="padding-top:106px;" alt="cover" data-src-webp="https://reaperscans.com/wp-content/uploads/2021/07/cover-75x106.jpg.webp">                                    
                                                                </a>
                                                            </div>
                                                            <div class="related-reading-content">
                                                                <h5 class="widget-title">
                                                                    <a href="https://reaperscans.com/series/leveling-with-the-gods-manhwa/" title="Leveling With The Gods – Manhwa">Leveling With The Gods – Manhwa</a>
                                                                    
                                                                </h5>
                                                            </div>
                                                            <div class="post-on font-meta">
                                                                <span>Nov 02, 2021</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-3">
                                                        <div class="related-reading-wrap related-style-1">
                                                            <div class="related-reading-img widget-thumbnail c-image-hover">
                                                                <a title="Limit Breaker" href="https://reaperscans.com/series/limit-breaker/">
                                                                    <img width="75" height="106" data-src="https://reaperscans.com/wp-content/uploads/2021/07/AnyConv.com__LB-75x106.webp" class="img-responsive effect-fade lazyloaded" src="https://reaperscans.com/wp-content/uploads/2021/07/AnyConv.com__LB-75x106.webp" style="padding-top:106px;" alt="AnyConv.com__LB">                                    
                                                                </a>
                                                            </div>
                                                            <div class="related-reading-content">
                                                                <h5 class="widget-title">
                                                                    <a href="https://reaperscans.com/series/limit-breaker/" title="Limit Breaker">Limit Breaker</a>
                                                                </h5>
                                                            </div>
                                                            <div class="post-on font-meta">
                                                                <span>Oct 09, 2021</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-3">
                                                        <div class="related-reading-wrap related-style-1">
                                                            <div class="related-reading-img widget-thumbnail c-image-hover">
                                                                <a title="Return of The Frozen Player – Manhwa" href="https://reaperscans.com/series/return-of-the-frozen-player-manhwa/">
                                                                    <img width="75" height="106" data-src="https://reaperscans.com/wp-content/uploads/2021/10/FP-75x106.jpg.webp" class="img-responsive effect-fade lazyloaded" src="https://reaperscans.com/wp-content/uploads/2021/10/FP-75x106.jpg.webp" style="padding-top:106px;" alt="FP" data-src-webp="https://reaperscans.com/wp-content/uploads/2021/10/FP-75x106.jpg.webp">                                    
                                                                </a>
                                                            </div>
                                                            <div class="related-reading-content">
                                                                <h5 class="widget-title">
                                                                    <a href="https://reaperscans.com/series/return-of-the-frozen-player-manhwa/" title="Return of The Frozen Player – Manhwa">Return of The Frozen Player – Manhwa</a>
                                                                </h5>
                                                            </div>
                                                            <div class="post-on font-meta">
                                                                    <span>Oct 14, 2021</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="wp-manga-tags-wrapper">
                                                    <div class="wp-manga-tags">
                                                        <h5>Tags:</h5>
                                                        <div class="wp-manga-tags-list">
                                                            <a href="https://reaperscans.com/tag/manhwa/" class="">Manhwa</a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="site-footer">
                    <div class="c-footer-sidebar">
                        <div class="container">
                            <div class="row c-row">
                                <div id="custom_html-13" class="widget_text widget col-12 col-md-12   default  no-icon heading-style-1 widget_custom_html">
                                    <div class="widget_text widget__inner widget_custom_html__inner c-widget-wrap">
                                        <div class="widget_text widget-content">
                                            <div class="textwidget custom-html-widget">
                                                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" aria-label="image gallery" aria-modal="true" role="dialog">
                                                    <div class="slides" aria-live="polite"></div>
                                                    <h3 class="title"></h3>
                                                    <a class="prev" aria-controls="blueimp-gallery" aria-label="previous slide" aria-keyshortcuts="ArrowLeft"></a>
                                                    <a class="next" aria-controls="blueimp-gallery" aria-label="next slide" aria-keyshortcuts="ArrowRight"></a>
                                                    <a class="close" aria-controls="blueimp-gallery" aria-label="close" aria-keyshortcuts="Escape"></a>
                                                    <a class="play-pause" aria-controls="blueimp-gallery" aria-label="play slideshow" aria-keyshortcuts="Space" aria-pressed="false" role="button"></a>
                                                    <ol class="indicator"></ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Dino, The DICKHEAD. 2019-2021. All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="wp-manga-section">
            <input type="hidden" name="bookmarking" value="0">
            <div class="modal fade" id="form-login" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="login" class="login">
                                <h3><a href="https://reaperscans.com/" title="Reaper Scans" tabindex="-1">Sign in</a></h3>
                                <p class="message login"></p>
                                <meta name="robots" content="max-image-preview:large">
                                <link rel="dns-prefetch" href="//www.googletagmanager.com">
                                <link rel="dns-prefetch" href="//s.w.org"> 
                                <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/wp-embed.min.js?ver=5.8.1" id="wp-embed-js"></script> 
                                <meta name="generator" content="Site Kit by Google 1.40.0">
                                <link rel="icon" href="https://reaperscans.com/wp-content/uploads/2021/07/cropped-ms-icon-310x310-1-32x32.png" sizes="32x32">
                                <link rel="icon" href="https://reaperscans.com/wp-content/uploads/2021/07/cropped-ms-icon-310x310-1-192x192.png" sizes="192x192">
                                <link rel="apple-touch-icon" href="https://reaperscans.com/wp-content/uploads/2021/07/cropped-ms-icon-310x310-1-180x180.png">
                                <meta name="msapplication-TileImage" content="https://reaperscans.com/wp-content/uploads/2021/07/cropped-ms-icon-310x310-1-270x270.png">
                                <form name="loginform" id="loginform" method="post">
                                    <p>
                                        <label>Username or Email Address * <br>              
                                            <input type="text" name="log" class="input user_login" value="" size="20">
                                            <input type="hidden" name="wfls-email-verification" id="wfls-email-verification" value="">
                                        </label>
                                    </p>
                                    <p>
                                        <label>Password * <br> 
                                            <input type="password" autocomplete="" name="pwd" class="input user_pass" value="" size="20">
                                        </label>
                                    </p>
                                    <p></p>
                                    <p class="forgetmenot">
                                        <label>
                                            <input name="rememberme" type="checkbox" id="rememberme" value="forever">Remember Me 
                                        </label>
                                    </p>
                                    <p class="submit">
                                        <input type="submit" name="wp-submit" class="button button-primary button-large wp-submit" value="Log In">                                
                                        <input type="hidden" name="redirect_to" value="https://reaperscans.com/wp-admin/">
                                        <input type="hidden" name="testcookie" value="1">
                                    </p>
                                </form>
                                <p class="nav">
                                    <a href="javascript:avoid(0)" class="to-reset">Lost your password?</a>
                                </p>
                                <p class="backtoblog">
                                    <a href="javascript:void(0)">← Back to Reaper Scans</a>
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="form-sign-up" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="sign-up" class="login">
                                <h3><a href="https://reaperscans.com/" title="Reaper Scans" tabindex="-1">Sign Up</a></h3>
                                <p class="message register">Register For This Site.</p>
                                <form name="registerform" id="registerform" novalidate="novalidate">
                                    <p>
                                        <label>Username * <br>
                                            <input type="text" name="user_sign-up" class="input user_login" value="" size="20">
                                        </label>
                                    </p>
                                    <p>
                                        <label>Email Address * <br>
                                            <input type="email" name="email_sign-up" class="input user_email" value="" size="20">
                                        </label>
                                    </p>
                                    <p>
                                        <label>Password *<br>
                                            <input type="password" name="pass_sign-up" autocomplete="" class="input user_pass" value="" size="25">
                                        </label>
                                    </p>
                                    <p></p>
                                    <input type="hidden" name="redirect_to" value="">
                                    <p class="submit">
                                        <input type="submit" name="wp-submit" class="button button-primary button-large wp-submit" value="Register">
                                    </p>
                                </form>
                                <p class="nav">
                                    <a href="javascript:void(0)" class="to-login">Log in</a>
                                    <a href="javascript:void(0)" class="to-reset">Lost your password?</a>
                                </p>
                                <p class="backtoblog">
                                    <a href="javascript:void(0)">← Back to Reaper Scans</a>
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="form-reset" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="reset" class="login">
                                <h3><a href="javascript:void(0)" class="to-reset">Lost your password?</a></h3>
                                <p class="message reset">Please enter your username or email address. You will receive a link to create a new password via email.</p>
                                <form name="resetform" id="resetform" method="post">
                                    <p>
                                        <label>Username or Email Address<br>
                                            <input type="text" name="user_reset" id="user_reset" class="input" value="" size="20">
                                        </label>
                                    </p>
                                    <p class="submit">
                                        <input type="submit" name="wp-submit" class="button button-primary button-large wp-submit" value="Get New Password">
                                        <input type="hidden" name="testcookie" value="1">
                                    </p>
                                </form>
                                <p>
                                    <a class="backtoblog" href="javascript:void(0)">← Back to  Reaper Scans</a>
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </div> 
        <script async="" id="dsq-count-scr" src="https://reaperscans.disqus.com/count.js" type="text/javascript"></script> 
        <div class="modal fade" id="frm-wp-manga-report" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="wp-manga-report-nonce" value="eb07985748">
                        <input type="hidden" name="wp-manga-chapter" value="">
                        <h3> Report Chapter</h3>
                        <p><label>Reason</label></p>
                        <div class="c-selectpicker">
                            <label>
                                <select class="selectpicker" id="wp_manga_chapter_report_errortype" name="wp-manga-report-errortype">
                                    <option value="0">Typos/misspell</option>
                                    <option value="1">Spacing/format errors</option>
                                    <option value="2">Punctuation errors</option>
                                    <option value="3">Continuity errors</option>
                                    <option value="4">Basic grammar errors</option>
                                </select>
                            </label>
                        </div>
                        <p></p>
                        <p>
                            <label>Your comment</label>
                            <br>
                            <textarea name="wp-manga-report-description" rows="7"></textarea>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="button button-primary button-large btn-submit">Submit <i class="fas fa-spinner fa-spin"></i></button>
                        <button class="button button-secondary button-large btn-cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="go-to-top">
            <i class="icon ion-md-arrow-up"></i>
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
        </script> <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/disqus-comment-system/public/js/comment_embed.js?ver=5.8.1" id="manga_disqus_embed-js"></script> 
        <script type="text/javascript" id="wp_manga_chapter_report_js-js-extra">/*  */
            var wp_chapter_report = {"are_you_sure":"Are you sure want to report this chapter?","thank_you":"You report has been sent. Thank you!"};
            /*  */
        </script> <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/wp-manga-chapter-report/assets/js/main.js?ver=1.1" id="wp_manga_chapter_report_js-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-content/plugins/wp-manga-chapter-thumbnail/assets/js/frontend.js?ver=5.8.1" id="wp-manga-chapter-thumbnail-frontend-js"></script> 
        <script type="text/javascript" src="https://reaperscans.com/wp-includes/js/comment-reply.min.js?ver=5.8.1" id="comment-reply-js"></script> <script type="text/javascript" src="https://reaperscans.com/wp-content/themes/madara/js/core.js?ver=5.8.1" id="madara-core-js"></script> 
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
    </body>
</html>