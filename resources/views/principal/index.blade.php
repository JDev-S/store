@extends('welcome')
@section('contenido')
        <div id="socialLogin"></div>

        <div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog block-popup-login">
                <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
                <div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
                <div class="block-content">
                    <div class=" col-reg registered-account">
                        <div class="block-content">
                            <form class="form form-login" action="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/login" method="post" id="login-form">
                                <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                                    <div class="field email required email-input">
                                        <div class="control">
                                            <input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-mail Address" />
                                        </div>
                                    </div>
                                    <div class="field password required pass-input">
                                        <div class="control">
                                            <input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class=" form-group">
                                        <label class="control-label">Login with your social account</label>
                                        <div>
                                            <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=https%3A%2F%2Fopencart.opencartworks.com%2Fthemes%2Fso_megastore%2Flayout2%2Findex.php%3Froute%3Dextension%2Fmodule%2Fso_sociallogin%2FGoogleLogin&client_id=21690390667-tco9t3ca2o89d3sshkb2fmppoioq5mfq.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&approval_prompt=force" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>
                                            <a href="https://www.facebook.com/v2.4/dialog/oauth?client_id=442675926063537&state=7a0353fd060480e751dccdee8b59183a&response_type=code&sdk=php-sdk-5.5.0&redirect_uri=https%3A%2F%2Fopencart.opencartworks.com%2Fthemes%2Fso_megastore%2Flayout2%2Findex.php%3Froute%3Dextension%2Fmodule%2Fso_sociallogin%2FFacebookLogin&scope=public_profile%2Cemail" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>
                                            <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/module/so_sociallogin/TwitterLogin" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
                                            <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/module/so_sociallogin/LinkedinLogin" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="secondary ft-link-p"><a class="action remind" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/forgotten"><span>Forgot Your Password?</span></a></div>
                                    <div class="actions-toolbar">
                                        <div class="primary"><button type="submit" class="action login primary" name="send" id="send2"><span>Login</span></button></div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-reg login-customer">
                        <h2>NEW HERE?</h2>
                        <p class="note-reg">Registration is free and easy!</p>
                        <ul class="list-log">
                            <li>Faster checkout</li>
                            <li>Save multiple shipping addresses</li>
                            <li>View and track orders and more</li>
                        </ul>
                        <a class="btn-reg-popup" title="Register" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/register">Create an account</a>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                var $window = $(window);

                function checkWidth() {
                    var windowsize = $window.width();
                    if (windowsize > 767) {
                        $('a[href*="account/login"]').click(function(e) {
                            e.preventDefault();
                            $("#so_sociallogin").modal('show');
                        });
                    }
                }
                checkWidth();
                $(window).resize(checkWidth);
            });

        </script>




        <div id="content" class="">

            <div class="so-page-builder">
                <div class="container page-builder-ltr">
                    <div class="row row_grqf  row-style ">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_5gxb  col-style">

                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_b90z  col-style">

                            <div class="module sohomepage-slider ">



                                <div class="modcontent">

                                    <div id="sohomepage-slider1">
                                        <div class="so-homeslider sohomeslider-inner-1">

                                            <div class="item">

                                                <a href="#" title="slide 1" target="_self">
                                                    <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/slideshow/home2/slide_show_h2_01-870x495.jpg" alt="slide 1" />
                                                </a>
                                                <div class="sohomeslider-description">
                                                    <h2></h2>

                                                </div>
                                            </div>

                                            <div class="item">

                                                <a href="#" title="slide 2" target="_self">
                                                    <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/slideshow/home2/slide_show_h2_02-870x495.jpg" alt="slide 2" />
                                                </a>
                                                <div class="sohomeslider-description">
                                                    <h2></h2>

                                                </div>
                                            </div>

                                            <div class="item">

                                                <a href="#" title="slide 3" target="_self">
                                                    <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/slideshow/home2/slide_show_h2_03-870x495.jpg" alt="slide 3" />
                                                </a>
                                                <div class="sohomeslider-description">
                                                    <h2></h2>

                                                </div>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            var total_item = 3;
                                            $(".sohomeslider-inner-1").owlCarousel2({
                                                animateOut: 'fadeOut',
                                                animateIn: 'fadeIn',
                                                autoplay: true,
                                                autoplayTimeout: 5000,
                                                autoplaySpeed: 1000,
                                                smartSpeed: 500,
                                                autoplayHoverPause: true,
                                                startPosition: 0,
                                                mouseDrag: true,
                                                touchDrag: true,
                                                dots: true,
                                                autoWidth: false,
                                                dotClass: "owl2-dot",
                                                dotsClass: "owl2-dots",
                                                loop: true,
                                                navText: ["Next", "Prev"],
                                                navClass: ["owl2-prev", "owl2-next"],
                                                responsive: {
                                                    0: {
                                                        items: 1,
                                                        nav: total_item <= 1 ? false : ((true) ? true : false),
                                                    },
                                                    480: {
                                                        items: 1,
                                                        nav: total_item <= 1 ? false : ((true) ? true : false),
                                                    },
                                                    768: {
                                                        items: 1,
                                                        nav: total_item <= 1 ? false : ((true) ? true : false),
                                                    },
                                                    992: {
                                                        items: 1,
                                                        nav: total_item <= 1 ? false : ((true) ? true : false),
                                                    },
                                                    1200: {
                                                        items: 1,
                                                        nav: total_item <= 1 ? false : ((true) ? true : false),
                                                    }
                                                },
                                            });

                                        </script>
                                    </div>
                                </div>
                                <!--/.modcontent-->



                            </div>


                        </div>

                    </div>
                </div>



                <div class="container page-builder-ltr">
                    <div class="row row_muez  row-style ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_e8u7  col-style">
                            <div class="module so-listing-tabs-ltr dev-productab">
                                <h3 class="modtitle">
                                    <span>Nuevos productos</span> </h3>
                                <div class="modcontent">
                                    <!--[if lt IE 9]>
		<div id="so_listing_tabs_247" class="so-listing-tabs msie lt-ie9 first-load module"><![endif]-->
                                    <!--[if IE 9]>
		<div id="so_listing_tabs_247" class="so-listing-tabs msie first-load module"><![endif]-->
                                    <!--[if gt IE 9]><!-->
                                    <div id="so_listing_tabs_247" class="so-listing-tabs first-load module">
                                        <!--<![endif]-->
                                        <div class="ltabs-wrap ">
                                            <div class="ltabs-tabs-container" data-delay="500" data-duration="800" data-effect="none" data-ajaxurl="https://opencart.opencartworks.com/themes/so_megastore/layout2/" data-type_source="0" data-type_show="slider">

                                            </div>
                                            <div class="wap-listing-tabs products-list grid">
                                                <div class="ltabs-items-container">
                                                    <div class="products-list ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-129" data-total="9">
                                                        <div class="ltabs-items-inner owl2-carousel  ltabs-slider ">
                                                            @foreach($ultimos as $ultimo)
                                                            <div class="ltabs-item  first-line ">

                                                                <div class="item-inner product-layout transition">

                                                                    <div class="product-item-container">
                                                                        <div class="left-block">

                                                                            <div class="product-image-container">

                                                                                    <img data-sizes="auto" src="{{$ultimo->fotografia_miniatura}}" alt="{{$ultimo->nombre_alimento}}" class="lazyload">

                                                                               
                                                                            </div>

                                                                            <div class="box-label">
                                                                            </div>

                                                                        </div>
                                                                        <div class="right-block">

                                                                            <div class="caption">

                                                                                <h4><a href="/detalle_producto?producto={{$ultimo->id_alimento}}" target="_self">{{$ultimo->nombre_alimento}}</a></h4>
                                                                                <div class="price">

                                                                                    ${{$ultimo->precio}}

                                                                                </div>

                                                                            </div>


                                                                            <div class="button-group">

                                                                                <a href="/detalle_producto?producto={{$ultimo->id_alimento}}" class="addToCart btn-button" title="Agregar al carrito"><i class="fa fa-shopping-basket"></i>
                                                                                    <span>Agregar al carrito </span>
                                                                                </a>


                                                                                <a href="/detalle_producto?producto={{$ultimo->id_alimento}}" class="wishlist btn-button" title="Agregar a favoritos" > <i class="fa fa-heart"></i></a>


                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach

                                                        </div>

                                                        <script type="text/javascript">
                                                            jQuery(document).ready(function($) {
                                                                var $tag_id = $('#so_listing_tabs_247'),
                                                                    parent_active = $('.items-category-129', $tag_id),
                                                                    total_product = parent_active.data('total'),
                                                                    tab_active = $('.ltabs-items-inner', parent_active),
                                                                    nb_column0 = 4,
                                                                    nb_column1 = 3,
                                                                    nb_column2 = 3,
                                                                    nb_column3 = 2,
                                                                    nb_column4 = 1;
                                                                tab_active.owlCarousel2({
                                                                    rtl: false,
                                                                    nav: true,
                                                                    dots: false,
                                                                    margin: 0,
                                                                    loop: true,
                                                                    autoplay: false,
                                                                    autoplayHoverPause: false,
                                                                    autoplayTimeout: 5000,
                                                                    autoplaySpeed: 1000,
                                                                    mouseDrag: true,
                                                                    touchDrag: true,
                                                                    navRewind: true,
                                                                    navText: ['', ''],
                                                                    responsive: {
                                                                        0: {
                                                                            items: nb_column4,
                                                                            nav: total_product <= nb_column0 ? false : ((true) ? true : false),
                                                                        },
                                                                        480: {
                                                                            items: nb_column3,
                                                                            nav: total_product <= nb_column0 ? false : ((true) ? true : false),
                                                                        },
                                                                        768: {
                                                                            items: nb_column2,
                                                                            nav: total_product <= nb_column0 ? false : ((true) ? true : false),
                                                                        },
                                                                        992: {
                                                                            items: nb_column1,
                                                                            nav: total_product <= nb_column0 ? false : ((true) ? true : false),
                                                                        },
                                                                        1200: {
                                                                            items: nb_column0,

                                                                            nav: total_product <= nb_column0 ? false : ((true) ? true : false),
                                                                        }
                                                                    }
                                                                });
                                                            });

                                                        </script>


                                                    </div>
                                                    <div class="products-list ltabs-items  items-category-35" data-total="5">
                                                        <div class="ltabs-loading"></div>

                                                    </div>
                                                    <div class="products-list ltabs-items  items-category-18" data-total="7">
                                                        <div class="ltabs-loading"></div>

                                                    </div>
                                                    <div class="products-list ltabs-items  items-category-57" data-total="9">
                                                        <div class="ltabs-loading"></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            //<![CDATA[
                                            jQuery(document).ready(function($) {
                                                ;
                                                (function(element) {
                                                    var $element = $(element),
                                                        $tab = $('.ltabs-tab', $element),
                                                        $tab_label = $('.ltabs-tab-label', $tab),
                                                        $tabs = $('.ltabs-tabs', $element),
                                                        ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
                                                        effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
                                                        delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
                                                        duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
                                                        type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
                                                        $items_content = $('.ltabs-items', $element),
                                                        $items_inner = $('.ltabs-items-inner', $items_content),
                                                        $items_first_active = $('.ltabs-items-selected', $element),
                                                        $load_more = $('.ltabs-loadmore', $element),
                                                        $btn_loadmore = $('.ltabs-loadmore-btn', $load_more),
                                                        $select_box = $('.ltabs-selectbox', $element),
                                                        $tab_label_select = $('.ltabs-tab-selected', $element),
                                                        setting = 'a:73:{s:6:"action";s:9:"save_edit";s:4:"name";s:19:"Home 2 - Bestseller";s:18:"module_description";a:2:{i:2;a:1:{s:9:"head_name";s:10:"Bestselles";}i:1;a:1:{s:9:"head_name";s:10:"Bestselles";}}s:9:"head_name";s:10:"Bestselles";s:17:"disp_title_module";s:1:"1";s:6:"status";s:1:"1";s:12:"store_layout";s:8:"default3";s:12:"class_suffix";s:13:"dev-productab";s:16:"item_link_target";s:5:"_self";s:10:"nb_column0";s:1:"4";s:10:"nb_column1";s:1:"3";s:10:"nb_column2";s:1:"3";s:10:"nb_column3";s:1:"2";s:10:"nb_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:6:"nb_row";s:1:"1";s:11:"type_source";s:1:"0";s:8:"category";a:4:{i:0;s:2:"18";i:1;s:2:"35";i:2;s:3:"129";i:3;s:2:"57";}s:14:"child_category";s:1:"0";s:14:"category_depth";s:1:"1";s:12:"product_sort";s:7:"p.price";s:16:"product_ordering";s:3:"ASC";s:12:"source_limit";s:1:"4";s:13:"catid_preload";s:3:"129";s:17:"field_product_tab";s:0:"";s:15:"tab_all_display";s:1:"0";s:18:"tab_max_characters";s:2:"30";s:16:"tab_icon_display";s:1:"0";s:12:"cat_order_by";s:4:"name";s:15:"imgcfgcat_width";s:2:"30";s:16:"imgcfgcat_height";s:2:"30";s:13:"display_title";s:1:"1";s:15:"title_maxlength";s:2:"50";s:19:"display_description";s:1:"0";s:21:"description_maxlength";s:3:"100";s:13:"display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"1";s:14:"display_rating";s:1:"1";s:12:"display_sale";s:1:"1";s:11:"display_new";s:1:"1";s:8:"date_day";s:3:"227";s:17:"product_image_num";s:1:"1";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:5:"width";s:3:"450";s:6:"height";s:3:"450";s:24:"product_placeholder_path";s:11:"nophoto.png";s:20:"display_banner_image";s:1:"0";s:12:"banner_image";s:12:"no_image.png";s:12:"banner_width";s:3:"150";s:13:"banner_height";s:3:"250";s:16:"banner_image_url";s:0:"";s:6:"effect";s:4:"none";s:8:"duration";s:3:"800";s:5:"delay";s:3:"500";s:8:"autoplay";s:1:"0";s:11:"display_nav";s:1:"1";s:12:"display_loop";s:1:"1";s:9:"touchdrag";s:1:"1";s:9:"mousedrag";s:1:"1";s:10:"pausehover";s:1:"0";s:15:"autoplayTimeout";s:4:"5000";s:13:"autoplaySpeed";s:4:"1000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:3:"247";s:11:"cfp_setting";a:5:{s:43:"module_so_call_for_price_send_mail_customer";s:1:"1";s:37:"module_so_call_for_price_send_mail_to";s:14:"dulv@ytcvn.com";s:37:"module_so_call_for_price_replace_cart";s:1:"0";s:34:"module_so_call_for_price_hide_cart";s:1:"0";s:31:"module_so_call_for_price_status";s:1:"1";}s:5:"start";i:0;}',
                                                        type_show = 'slider';

                                                    enableSelectBoxes();

                                                    function enableSelectBoxes() {
                                                        $tab_wrap = $('.ltabs-tabs-wrap', $element),
                                                            $tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
                                                        if ($(window).innerWidth() <= 991) {
                                                            $tab_wrap.addClass('ltabs-selectbox');
                                                        } else {
                                                            $tab_wrap.removeClass('ltabs-selectbox');
                                                        }
                                                    }

                                                    $('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function() {
                                                        if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
                                                            $('.ltabs-tabs', $element).removeClass('ltabs-open');
                                                        } else {
                                                            $('.ltabs-tabs', $element).addClass('ltabs-open');
                                                        }
                                                    });

                                                    $(window).resize(function() {
                                                        if ($(window).innerWidth() <= 991) {
                                                            $('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
                                                        } else {
                                                            $('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
                                                        }
                                                    });

                                                    function showAnimateItems(el) {
                                                        var $_items = $('.new-ltabs-item', el),
                                                            nub = 0;
                                                        $('.ltabs-loadmore-btn', el).fadeOut('fast');
                                                        $_items.each(function(i) {
                                                            nub++;
                                                            switch (effect) {
                                                                case 'none':
                                                                    $(this).css({
                                                                        'opacity': '1',
                                                                        'filter': 'alpha(opacity = 100)'
                                                                    });
                                                                    break;
                                                                default:
                                                                    animatesItems($(this), nub * delay, i, el);
                                                            }
                                                            if (i == $_items.length - 1) {
                                                                $('.ltabs-loadmore-btn', el).fadeIn(3000);
                                                            }
                                                            $(this).removeClass('new-ltabs-item');
                                                        });
                                                    }

                                                    function animatesItems($this, fdelay, i, el) {
                                                        var $_items = $('.ltabs-item', el);
                                                        $this.stop(true, true).attr("style",
                                                            "-webkit-animation:" + effect + " " + duration + "ms;" +
                                                            "-moz-animation:" + effect + " " + duration + "ms;" +
                                                            "-o-animation:" + effect + " " + duration + "ms;" +
                                                            "-moz-animation-delay:" + fdelay + "ms;" +
                                                            "-webkit-animation-delay:" + fdelay + "ms;" +
                                                            "-o-animation-delay:" + fdelay + "ms;" +
                                                            "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
                                                            opacity: 1,
                                                            filter: 'alpha(opacity = 100)'
                                                        }, {
                                                            delay: 1000
                                                        });
                                                        if (i == ($_items.length - 1)) {
                                                            $(".ltabs-items-inner").addClass("play");
                                                        }
                                                    }
                                                    if (type_show == 'loadmore') {
                                                        showAnimateItems($items_first_active);
                                                    }
                                                    $tab.on('click.ltabs-tab', function() {
                                                        var $this = $(this);
                                                        if ($this.hasClass('tab-sel')) return false;
                                                        if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
                                                            $this.parents('.ltabs-tabs').removeClass('ltabs-open');
                                                        }
                                                        $tab.removeClass('tab-sel');
                                                        $this.addClass('tab-sel');
                                                        var items_active = $this.attr('data-active-content-l');
                                                        var _items_active = $(items_active, $element);
                                                        $items_content.removeClass('ltabs-items-selected');
                                                        _items_active.addClass('ltabs-items-selected');
                                                        $tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
                                                        var $loading = $('.ltabs-loading', _items_active);
                                                        var loaded = _items_active.hasClass('ltabs-items-loaded');
                                                        type_show = $tabs.parents('.ltabs-tabs-container').attr('data-type_show');
                                                        if (!loaded && !_items_active.hasClass('ltabs-process')) {
                                                            _items_active.addClass('ltabs-process');
                                                            var category_id = $this.attr('data-category-id');
                                                            $loading.show();
                                                            $.ajax({
                                                                type: 'POST',
                                                                url: ajax_url,
                                                                data: {
                                                                    is_ajax_listing_tabs: 1,
                                                                    ajax_reslisting_start: 0,
                                                                    categoryid: category_id,
                                                                    setting: setting,
                                                                    lbmoduleid: 247
                                                                },
                                                                success: function(data) {
                                                                    if (data.items_markup != '') {
                                                                        $('.ltabs-loading', _items_active).replaceWith(data.items_markup);
                                                                        _items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
                                                                        $loading.remove();
                                                                        if (type_show != 'slider') {
                                                                            showAnimateItems(_items_active);
                                                                        }
                                                                        updateStatus(_items_active);
                                                                    }
                                                                    if (typeof(_SoQuickView) != 'undefined') {
                                                                        _SoQuickView();
                                                                    }

                                                                },
                                                                dataType: 'json'
                                                            });

                                                        } else {
                                                            if (type_show == 'loadmore') {
                                                                $('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
                                                                showAnimateItems(_items_active);
                                                            } else {
                                                                var owl = $('.owl2-carousel', _items_active);
                                                                owl = owl.data('owlCarousel2');
                                                                if (typeof owl !== 'undefined') {
                                                                    owl.onResize();
                                                                }
                                                            }
                                                        }
                                                    });

                                                    function updateStatus($el) {
                                                        $('.ltabs-loadmore-btn', $el).removeClass('loading');
                                                        var countitem = $('.ltabs-item', $el).length;
                                                        $('.ltabs-image-loading', $el).css({
                                                            display: 'none'
                                                        });
                                                        $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
                                                        var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
                                                        var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
                                                        var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');

                                                        if (countitem >= rl_total) {
                                                            $('.ltabs-loadmore-btn', $el).addClass('loaded');
                                                            $('.ltabs-image-loading', $el).css({
                                                                display: 'none'
                                                            });
                                                            $('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
                                                            $('.ltabs-loadmore-btn', $el).removeClass('loading');
                                                        }
                                                    }

                                                    $btn_loadmore.on('click.loadmore', function() {
                                                        var $this = $(this);
                                                        if ($this.hasClass('loaded') || $this.hasClass('loading')) {
                                                            return false;
                                                        } else {
                                                            $this.addClass('loading');
                                                            $('.ltabs-image-loading', $this).css({
                                                                display: 'inline-block'
                                                            });
                                                            var rl_start = $this.parent().attr('data-rl_start'),
                                                                rl_ajaxurl = $this.parent().attr('data-ajaxurl'),
                                                                effect = $this.parent().attr('data-effect'),
                                                                category_id = $this.parent().attr('data-categoryid'),
                                                                items_active = $this.parent().attr('data-active-content');

                                                            var _items_active = $(items_active, $element);

                                                            $.ajax({
                                                                type: 'POST',
                                                                url: rl_ajaxurl,
                                                                data: {
                                                                    is_ajax_listing_tabs: 1,
                                                                    ajax_reslisting_start: rl_start,
                                                                    categoryid: category_id,
                                                                    setting: setting,
                                                                    lbmoduleid: 247
                                                                },
                                                                success: function(data) {
                                                                    if (data.items_markup != '') {
                                                                        $($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());
                                                                        $('.ltabs-image-loading', $this).css({
                                                                            display: 'none'
                                                                        });
                                                                        showAnimateItems(_items_active);
                                                                        updateStatus(_items_active);
                                                                    }
                                                                    if (typeof(_SoQuickView) != 'undefined') {
                                                                        _SoQuickView();
                                                                    }
                                                                },
                                                                dataType: 'json'
                                                            });
                                                        }
                                                        return false;
                                                    });
                                                })('#so_listing_tabs_247');
                                            });
                                            //]]>

                                        </script>
                                    </div>
                                </div> <!-- /.modcontent-->

                            </div>

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_01vd  col-style">
                            <script>
                                //<![CDATA[
                                var listdeal2 = [];
                                //]]>

                            </script>
                            <div class="module so-deals-ltr home2__deals-carousel">
                                <div class="head-title">

                                    <h2 class="modtitle font-ct"><span>Los más vendidos</span></h2>


                                </div>
                                <div class="modcontent">

                                    <div id="so_deals_186799907207042020182143" class="so-deal modcontent products-list grid clearfix preset00-4 preset01-3 preset02-3 preset03-2 preset04-1  button-type1  style2">
                                        <div class="extraslider-inner" data-effect="none">
                                            @foreach($vendidos as $vendido)
                                            <div class="item">
                                                <div class="transition product-layout">
                                                    <div class="product-item-container ">
                                                        <div class="left-block so-quickview">
                                                            <div class="image">

                                                               
                                                                    <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{$vendido->fotografia_miniatura}}" class="lazyload">
                                                               
                                                            </div>

                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">

                                                                <div class="item-timer product_time_135"></div>
                                                                <h4><a href="/detalle_producto?producto={{$vendido->id_alimento}}">{{$vendido->nombre_alimento}}</a></h4>

                                                                <div class="total-price clearfix">
                                                                    <div class="price">
                                                                        <span class="price-new">${{$vendido->precio}}</span>
                                                                        
                                                                    </div>

                                                                </div>

                                                                <div class="button-group cartinfo--static">
                                                                    <a href="/detalle_producto?producto={{$vendido->id_alimento}}" class="addToCart btn-button" type="button" data-toggle="tooltip" title="Agregar al carrito" > <i class="fa fa-shopping-basket"></i><span>Agregar al carrito</span></a>
                                                                    
                                                                    <a href="/detalle_producto?producto={{$vendido->id_alimento}}" class="wishlist btn-button" type="button" data-toggle="tooltip" title="Agregar a favoritos" ><i class="fa fa-heart"></i></a>

                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        jQuery(document).ready(function($) {
                                            ;
                                            (function(element) {
                                                var $element = $(element),
                                                    $extraslider = $('.extraslider-inner', $element),
                                                    $featureslider = $('.product-feature', $element),
                                                    _delay = 500,
                                                    _duration = 800,
                                                    _effect = 'none';

                                                $extraslider.on('initialized.owl.carousel2', function() {
                                                    var $item_active = $('.extraslider-inner .owl2-item.active', $element);
                                                    if ($item_active.length > 1 && _effect != 'none') {
                                                        _getAnimate($item_active);
                                                    } else {
                                                        var $item = $('.extraslider-inner .owl2-item', $element);
                                                        $item.css({
                                                            'opacity': 1,
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                    }
                                                    $('.extraslider-inner .owl2-dots', $element).insertAfter($('.extraslider-inner .owl2-prev', $element));
                                                    $('.extraslider-inner .owl2-controls', $element).insertBefore($extraslider).addClass('extraslider');
                                                });

                                                $extraslider.owlCarousel2({
                                                    rtl: false,
                                                    margin: 30,
                                                    slideBy: 1,
                                                    autoplay: false,
                                                    autoplayHoverPause: 0,
                                                    autoplayTimeout: 1000,
                                                    autoplaySpeed: 1000,
                                                    startPosition: 0,
                                                    mouseDrag: true,
                                                    touchDrag: true,
                                                    autoWidth: false,
                                                    responsive: {
                                                        0: {
                                                            items: 1
                                                        },
                                                        480: {
                                                            items: 2
                                                        },
                                                        768: {
                                                            items: 3
                                                        },
                                                        992: {
                                                            items: 3
                                                        },
                                                        1200: {
                                                            items: 4
                                                        }
                                                    },
                                                    dotClass: 'owl2-dot',
                                                    dotsClass: 'owl2-dots',
                                                    dots: false,
                                                    dotsSpeed: 500,
                                                    nav: true,
                                                    loop: true,
                                                    navSpeed: 500,
                                                    navText: ['&#171;', '&#187;'],
                                                    navClass: ['owl2-prev', 'owl2-next']
                                                });

                                                $extraslider.on('translated.owl.carousel2', function(e) {
                                                    var $item_active = $('.extraslider-inner .owl2-item.active', $element);
                                                    var $item = $('.extraslider-inner .owl2-item', $element);

                                                    _UngetAnimate($item);

                                                    if ($item_active.length > 1 && _effect != 'none') {
                                                        _getAnimate($item_active);
                                                    } else {
                                                        $item.css({
                                                            'opacity': 1,
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                    }
                                                });
                                                /*feature product*/
                                                $featureslider.on('initialized.owl.carousel2', function() {
                                                    var $item_active = $('.product-feature .owl2-item.active', $element);
                                                    if ($item_active.length > 1 && _effect != 'none') {
                                                        _getAnimate($item_active);
                                                    } else {
                                                        var $item = $('.owl2-item', $element);
                                                        $item.css({
                                                            'opacity': 1,
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                    }
                                                    $('.product-feature .owl2-dots', $element).insertAfter($('.product-feature .owl2-prev', $element));
                                                    $('.product-feature .owl2-controls', $element).insertBefore($featureslider).addClass('featureslider');
                                                });

                                                $featureslider.owlCarousel2({
                                                    rtl: false,
                                                    margin: 30,
                                                    slideBy: 1,
                                                    autoplay: false,
                                                    autoplayHoverPause: 0,
                                                    autoplayTimeout: 1000,
                                                    autoplaySpeed: 1000,
                                                    startPosition: 0,
                                                    mouseDrag: true,
                                                    touchDrag: true,
                                                    autoWidth: false,
                                                    responsive: {
                                                        0: {
                                                            items: 1
                                                        },
                                                        480: {
                                                            items: 1
                                                        },
                                                        768: {
                                                            items: 1
                                                        },
                                                        992: {
                                                            items: 1
                                                        },
                                                        1200: {
                                                            items: 1
                                                        }
                                                    },
                                                    dotClass: 'owl2-dot',
                                                    dotsClass: 'owl2-dots',
                                                    dots: false,
                                                    dotsSpeed: 500,
                                                    nav: true,
                                                    loop: true,
                                                    navSpeed: 500,
                                                    navText: ['&#171;', '&#187;'],
                                                    navClass: ['owl2-prev', 'owl2-next']
                                                });

                                                $featureslider.on('translated.owl.carousel2', function(e) {
                                                    var $item_active = $('.product-feature .owl2-item.active', $element);
                                                    var $item = $('.product-feature .owl2-item', $element);

                                                    _UngetAnimate($item);

                                                    if ($item_active.length > 1 && _effect != 'none') {
                                                        _getAnimate($item_active);
                                                    } else {
                                                        $item.css({
                                                            'opacity': 1,
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                    }
                                                });

                                                function _getAnimate($el) {
                                                    if (_effect == 'none') return;
                                                    $extraslider.removeClass('extra-animate');
                                                    $el.each(function(i) {
                                                        var $_el = $(this);
                                                        $(this).css({
                                                            '-webkit-animation': _effect + ' ' + _duration + "ms ease both",
                                                            '-moz-animation': _effect + ' ' + _duration + "ms ease both",
                                                            '-o-animation': _effect + ' ' + _duration + "ms ease both",
                                                            'animation': _effect + ' ' + _duration + "ms ease both",
                                                            '-webkit-animation-delay': +i * _delay + 'ms',
                                                            '-moz-animation-delay': +i * _delay + 'ms',
                                                            '-o-animation-delay': +i * _delay + 'ms',
                                                            'animation-delay': +i * _delay + 'ms',
                                                            'opacity': 1
                                                        }).animate({
                                                            opacity: 1
                                                        });

                                                        if (i == $el.size() - 1) {
                                                            $extraslider.addClass("extra-animate");
                                                        }
                                                    });
                                                }

                                                function _UngetAnimate($el) {
                                                    $el.each(function(i) {
                                                        $(this).css({
                                                            'animation': '',
                                                            '-webkit-animation': '',
                                                            '-moz-animation': '',
                                                            '-o-animation': '',
                                                            'opacity': 1
                                                        });
                                                    });
                                                }
                                                data = new Date(2013, 10, 26, 12, 00, 00);

                                                function CountDown(date, id) {
                                                    dateNow = new Date();
                                                    amount = date.getTime() - dateNow.getTime();
                                                    if (amount < 0 && $('#' + id).length) {
                                                        $('.' + id).html("Now!");
                                                    } else {
                                                        days = 0;
                                                        hours = 0;
                                                        mins = 0;
                                                        secs = 0;
                                                        out = "";
                                                        amount = Math.floor(amount / 1000);
                                                        days = Math.floor(amount / 86400);
                                                        amount = amount % 86400;
                                                        hours = Math.floor(amount / 3600);
                                                        amount = amount % 3600;
                                                        mins = Math.floor(amount / 60);
                                                        amount = amount % 60;
                                                        secs = Math.floor(amount);

                                                        if (days != 0) {
                                                            out += "<div class='time-item time-day'>" + "<div class='num-time'>" + days + "</div>" + " <div class='name-time'>" + ((days == 1) ? "" : "Days") + "</div>" + "</div> ";
                                                        }
                                                        if (days == 0 && hours != 0) {
                                                            out += "<div class='time-item time-hour' style='width:33.33%'>" + "<div class='num-time'>" + hours + "</div>" + " <div class='name-time'>" + ((hours == 1) ? "Hour" : "Hours") + "</div>" + "</div> ";
                                                        } else if (hours != 0) {
                                                            out += "<div class='time-item time-hour'>" + "<div class='num-time'>" + hours + "</div>" + " <div class='name-time'>" + ((hours == 1) ? "Hour" : "Hours") + "</div>" + "</div> ";
                                                        }
                                                        if (days == 0 && hours != 0) {
                                                            out += "<div class='time-item time-min' style='width:33.33%'>" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Min" : "Mins") + "</div>" + "</div> ";
                                                            out += "<div class='time-item time-sec' style='width:33.33%'>" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Sec" : "Secs") + "</div>" + "</div> ";
                                                            out = out.substr(0, out.length - 2);
                                                        } else if (days == 0 && hours == 0) {
                                                            out += "<div class='time-item time-min' style='width:50%'>" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Min" : "Mins") + "</div>" + "</div> ";
                                                            out += "<div class='time-item time-sec' style='width:50%'>" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Sec" : "Secs") + "</div>" + "</div> ";
                                                            out = out.substr(0, out.length - 2);
                                                        } else {
                                                            out += "<div class='time-item time-min'>" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Min" : "Mins") + "</div>" + "</div> ";
                                                            out += "<div class='time-item time-sec'>" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Sec" : "Secs") + "</div>" + "</div> ";
                                                            out = out.substr(0, out.length - 2);
                                                        }

                                                        $('.' + id).html(out);

                                                        setTimeout(function() {
                                                            CountDown(date, id);
                                                        }, 1000);
                                                    }
                                                }
                                                if (listdeal2.length > 0) {
                                                    for (var i = 0; i < listdeal2.length; i++) {
                                                        var arr = listdeal2[i].split("|");
                                                        if (arr[1].length) {
                                                            var data = new Date(arr[1]);
                                                            CountDown(data, arr[0]);
                                                        }
                                                    }
                                                }
                                            })('#so_deals_186799907207042020182143');
                                        });
                                        //]]>

                                    </script>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

            <script type="text/javascript">
                function _SoQuickView() {
                    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
                    if (windowWidth > 1200) {
                        var $item_class = $('.so-quickview');
                        if ($item_class.length > 0) {
                            for (var i = 0; i < $item_class.length; i++) {
                                if ($($item_class[i]).find('.quickview_handler').length <= 0) {
                                    var $product_id = $($item_class[i]).find('a', $(this)).attr('data-product');
                                    if ($.isNumeric($product_id)) {
                                        var _quickviewbutton = "<a class='visible-lg btn-button quickview quickview_handler' href='https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/soconfig/quickview&amp;product_id=" + $product_id + "' title=\"Quick view\" data-title =\"Quick view\" data-fancybox-type=\"iframe\" ><i class=\"fa fa-eye\"></i><span>Quick view</span></a>";
                                        $($item_class[i]).append(_quickviewbutton);
                                    }
                                }
                            }
                        }
                    }

                }

                jQuery(document).ready(function($) {
                    _SoQuickView();
                    // Hide tooltip when clicking on it
                    var hasTooltip = $("[data-toggle='tooltip']").tooltip({
                        container: 'body'
                    });
                    hasTooltip.on('click', function() {
                        $(this).tooltip('hide')
                    });
                });

            </script>


            <div id="so-groups" class="right so-groups-sticky hidden-xs" style="top: 196px">


                <a class="sticky-myaccount" data-target="popup" data-popup="#popup-myaccount"><span>Account</span><i class="fa fa-user"></i></a>


                <a class="sticky-backtop" data-target="scroll" data-scroll="html"><span>Go to Top</span><i class="fa fa-angle-double-up"></i></a>

                <div class="popup popup-categories popup-hidden" id="popup-categories">
                    <div class="popup-screen">
                        <div class="popup-position">
                            <div class="popup-container popup-small">
                                <div class="popup-header">
                                    <span><i class="fa fa-align-justify"></i>All Categories</span>
                                    <a class="popup-close" data-target="popup-close" data-popup-close="#popup-categories">&times;</a>
                                </div>
                                <div class="popup-content">
                                    <div class="nav-secondary">
                                        <ul>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=129"><i class="fa fa-chevron-down nav-arrow"></i>Automotive &amp; Motorcycle</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=129_145"><i class="fa fa-chevron-right flip nav-arrow"></i>Car Alarms and Security</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=129_146"><i class="fa fa-chevron-right flip nav-arrow"></i>Car Audio &amp; Speakers</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=129_147"><i class="fa fa-chevron-right flip nav-arrow"></i>Gadgets &amp; Auto Parts</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=129_144"><i class="fa fa-chevron-right flip nav-arrow"></i>More Car Accessories</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=182"><i class="fa fa-chevron-down nav-arrow"></i>Camera &amp; Photo</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=182_211"><i class="fa fa-chevron-right flip nav-arrow"></i>Camera &amp; Photo Cleaning Kits</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=182_209"><i class="fa fa-chevron-right flip nav-arrow"></i>Camera Cases</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=182_208"><i class="fa fa-chevron-right flip nav-arrow"></i>Digital Camera Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=182_210"><i class="fa fa-chevron-right flip nav-arrow"></i>Filter Sets</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=178"><i class="fa fa-chevron-down nav-arrow"></i>Computers</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=178_194"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories for Computer</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=178_217"><i class="fa fa-chevron-right flip nav-arrow"></i>All in One PC</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=178_216"><i class="fa fa-chevron-right flip nav-arrow"></i>Mini Computer</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=178_195"><i class="fa fa-chevron-right flip nav-arrow"></i>Synchronous Computer</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18"><i class="fa fa-chevron-down nav-arrow"></i>Digital &amp; Electronics</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18_124"><i class="fa fa-chevron-right flip nav-arrow"></i>Appliacces</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18_70"><i class="fa fa-chevron-right flip nav-arrow"></i>Computer</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18_45"><i class="fa fa-chevron-right flip nav-arrow"></i>Laptop</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18_101"><i class="fa fa-chevron-right flip nav-arrow"></i>Smartphones</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18_170"><i class="fa fa-chevron-right flip nav-arrow"></i>Sound &amp; Life</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18_69"><i class="fa fa-chevron-right flip nav-arrow"></i>Sound &amp; Life</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18_171"><i class="fa fa-chevron-right flip nav-arrow"></i>TV &amp; Sound</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18_71"><i class="fa fa-chevron-right flip nav-arrow"></i>TV &amp; Sound</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=18_172"><i class="fa fa-chevron-right flip nav-arrow"></i>Washing Machine</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=132"><i class="fa fa-chevron-down nav-arrow"></i>Electronics</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=132_148"><i class="fa fa-chevron-right flip nav-arrow"></i>Batteries &amp; Chargers</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=132_149"><i class="fa fa-chevron-right flip nav-arrow"></i>Headphones, Headsets</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=132_150"><i class="fa fa-chevron-right flip nav-arrow"></i>Home Audio</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=132_151"><i class="fa fa-chevron-right flip nav-arrow"></i>MP3 Players &amp; Accessories</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=179"><i class="fa fa-chevron-down nav-arrow"></i>Electronics</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=179_197"><i class="fa fa-chevron-right flip nav-arrow"></i>Blender &amp; Fruit Juicer</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=179_199"><i class="fa fa-chevron-right flip nav-arrow"></i>Fridge</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=179_198"><i class="fa fa-chevron-right flip nav-arrow"></i>Vacuum Cleaner</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=179_196"><i class="fa fa-chevron-right flip nav-arrow"></i>Washing Machine</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57"><i class="fa fa-chevron-down nav-arrow"></i>Furniture &amp; Decor</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57_27"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57_77"><i class="fa fa-chevron-right flip nav-arrow"></i>Bathroom</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57_78"><i class="fa fa-chevron-right flip nav-arrow"></i>Bedroom</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57_68"><i class="fa fa-chevron-right flip nav-arrow"></i>Handbags</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57_81"><i class="fa fa-chevron-right flip nav-arrow"></i>Living Room</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57_175"><i class="fa fa-chevron-right flip nav-arrow"></i>Shoes</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57_173"><i class="fa fa-chevron-right flip nav-arrow"></i>Sofa &amp; Chair</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57_80"><i class="fa fa-chevron-right flip nav-arrow"></i>Sofa &amp; Chair</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=57_174"><i class="fa fa-chevron-right flip nav-arrow"></i>Sport bikes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=180"><i class="fa fa-chevron-down nav-arrow"></i>Game &amp; Accessories</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=180_201"><i class="fa fa-chevron-right flip nav-arrow"></i>Gaming Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=180_200"><i class="fa fa-chevron-right flip nav-arrow"></i>Gaming Computer</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=180_202"><i class="fa fa-chevron-right flip nav-arrow"></i>Gaming Monitor</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=180_203"><i class="fa fa-chevron-right flip nav-arrow"></i>PlayStaytion</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=157"><i class="fa fa-chevron-down nav-arrow"></i>Health &amp; Beauty</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=157_158"><i class="fa fa-chevron-right flip nav-arrow"></i>Bath &amp; Body</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=157_160"><i class="fa fa-chevron-right flip nav-arrow"></i>Fragrances</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=157_161"><i class="fa fa-chevron-right flip nav-arrow"></i>Salon &amp; Spa Equipment</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=157_159"><i class="fa fa-chevron-right flip nav-arrow"></i>Shaving &amp; Hair Removal</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=152"><i class="fa fa-chevron-down nav-arrow"></i>Holiday Supplies &amp; Gifts</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=152_153"><i class="fa fa-chevron-right flip nav-arrow"></i>Gift &amp; Lifestyle Gadgets</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=152_154"><i class="fa fa-chevron-right flip nav-arrow"></i>Gift for Man</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=152_155"><i class="fa fa-chevron-right flip nav-arrow"></i>Gift for Woman</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=152_156"><i class="fa fa-chevron-right flip nav-arrow"></i>Lighter &amp; Cigar Supplies</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=181"><i class="fa fa-chevron-down nav-arrow"></i>Home Audio</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=181_204"><i class="fa fa-chevron-right flip nav-arrow"></i>Audio Cables</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=181_207"><i class="fa fa-chevron-right flip nav-arrow"></i>Headphones</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=181_205"><i class="fa fa-chevron-right flip nav-arrow"></i>Home Audio Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=181_206"><i class="fa fa-chevron-right flip nav-arrow"></i>Wireless &amp; Streaming Audio</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=162"><i class="fa fa-chevron-down nav-arrow"></i>Jewelry &amp; Watches</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=162_165"><i class="fa fa-chevron-right flip nav-arrow"></i>Earrings</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=162_163"><i class="fa fa-chevron-right flip nav-arrow"></i>Men Watches</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=162_166"><i class="fa fa-chevron-right flip nav-arrow"></i>Necklaces</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=162_164"><i class="fa fa-chevron-right flip nav-arrow"></i>Wedding Rings</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=177"><i class="fa fa-chevron-down nav-arrow"></i>Laptops</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=177_193"><i class="fa fa-chevron-right flip nav-arrow"></i>All in One PC</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=177_190"><i class="fa fa-chevron-right flip nav-arrow"></i>Laptop Build Configuration</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=177_191"><i class="fa fa-chevron-right flip nav-arrow"></i>Laptop Build Configuration</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=177_189"><i class="fa fa-chevron-right flip nav-arrow"></i>Laptop Workstation</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=177_192"><i class="fa fa-chevron-right flip nav-arrow"></i>Mini Computer</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=86"><i class="fa fa-chevron-down nav-arrow"></i>Shop</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=86_89"><i class="fa fa-chevron-right flip nav-arrow"></i>Bag &amp; backpacks</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=86_93"><i class="fa fa-chevron-right flip nav-arrow"></i>Decor</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=86_87"><i class="fa fa-chevron-right flip nav-arrow"></i>Fashion Kids</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=86_92"><i class="fa fa-chevron-right flip nav-arrow"></i>Food &amp; Organic</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=86_91"><i class="fa fa-chevron-right flip nav-arrow"></i>Furniture</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=86_90"><i class="fa fa-chevron-right flip nav-arrow"></i>Mom &amp; Baby</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=176"><i class="fa fa-chevron-down nav-arrow"></i>Smartphone &amp; Tablet</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=176_185"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories for iPad</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=176_184"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories for iPhone</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=176_186"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories for Tablet PC</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=176_188"><i class="fa fa-chevron-right flip nav-arrow"></i>Laptop Gaming</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=176_187"><i class="fa fa-chevron-right flip nav-arrow"></i>Tablet PC</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=123"><i class="fa fa-chevron-down nav-arrow"></i>Smartphones &amp; Tablets</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=123_137"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories For iPad</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=123_136"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories for iPhone</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=123_138"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories for Tablet PC</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=123_139"><i class="fa fa-chevron-right flip nav-arrow"></i>Tablet PC</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=126"><i class="fa fa-chevron-down nav-arrow"></i>Sports &amp; Outdoor</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=126_142"><i class="fa fa-chevron-right flip nav-arrow"></i>Camping &amp; Hiking</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=126_143"><i class="fa fa-chevron-right flip nav-arrow"></i>Fishing</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=126_140"><i class="fa fa-chevron-right flip nav-arrow"></i>Golf Supplies</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=126_141"><i class="fa fa-chevron-right flip nav-arrow"></i>Outdoor &amp; Traveling Supplies</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=183"><i class="fa fa-chevron-down nav-arrow"></i>Television &amp; Videos</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=183_215"><i class="fa fa-chevron-right flip nav-arrow"></i>Movies &amp; TV</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=183_214"><i class="fa fa-chevron-right flip nav-arrow"></i>Prime Video</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=183_212"><i class="fa fa-chevron-right flip nav-arrow"></i>Technical Video</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=183_213"><i class="fa fa-chevron-right flip nav-arrow"></i>Television &amp; Video Engineering</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110"><i class="fa fa-chevron-down nav-arrow"></i>Toys, Kids &amp; Baby</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110_168"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110_167"><i class="fa fa-chevron-right flip nav-arrow"></i>Bikini &amp; Underwear</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110_169"><i class="fa fa-chevron-right flip nav-arrow"></i>Handbags</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110_116"><i class="fa fa-chevron-right flip nav-arrow"></i>Kid’s Styles</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110_112"><i class="fa fa-chevron-right flip nav-arrow"></i>Men’s Clothings</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110_114"><i class="fa fa-chevron-right flip nav-arrow"></i>Trays</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110_115"><i class="fa fa-chevron-right flip nav-arrow"></i>Trunks &amp; Boxes</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110_113"><i class="fa fa-chevron-right flip nav-arrow"></i>Watches &amp; Jewelry</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=110_111"><i class="fa fa-chevron-right flip nav-arrow"></i>Women’s Clothings</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24"><i class="fa fa-chevron-down nav-arrow"></i>Women’s Fashion</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_107"><i class="fa fa-chevron-right flip nav-arrow"></i>Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_109"><i class="fa fa-chevron-right flip nav-arrow"></i>Bikini &amp; Underwear</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_83"><i class="fa fa-chevron-right flip nav-arrow"></i>Handbags</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_84"><i class="fa fa-chevron-right flip nav-arrow"></i>Jewelry</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_74"><i class="fa fa-chevron-right flip nav-arrow"></i>Kid’s Styles</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_76"><i class="fa fa-chevron-right flip nav-arrow"></i>Men’s Clothings</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_73"><i class="fa fa-chevron-right flip nav-arrow"></i>Shoes</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_128"><i class="fa fa-chevron-right flip nav-arrow"></i>Sport</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_75"><i class="fa fa-chevron-right flip nav-arrow"></i>Watches &amp; Jewelry</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=24_85"><i class="fa fa-chevron-right flip nav-arrow"></i>Women’s Clothings</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="nav-action">
                                                    <i class="fa fa-plus more"></i>
                                                    <i class="fa fa-minus less"></i>
                                                </span>
                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25"><i class="fa fa-chevron-down nav-arrow"></i>Men’s Clothing</a>
                                                <ul class="level-2">
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25_29"><i class="fa fa-chevron-right flip nav-arrow"></i>Asdipiscing</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25_95"><i class="fa fa-chevron-right flip nav-arrow"></i>Consectetur</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25_35"><i class="fa fa-chevron-right flip nav-arrow"></i>Diam sit</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25_36"><i class="fa fa-chevron-right flip nav-arrow"></i>Labore et</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25_96"><i class="fa fa-chevron-right flip nav-arrow"></i>Reprehenderit </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25_94"><i class="fa fa-chevron-right flip nav-arrow"></i>Sit amet</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25_28"><i class="fa fa-chevron-right flip nav-arrow"></i>Monitors</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="popup popup-myaccount popup-hidden" id="popup-myaccount">
                    <div class="popup-screen">
                        <div class="popup-position">
                            <div class="popup-container popup-small">
                                <div class="popup-html">
                                    <div class="popup-header">
                                        <span><i class="fa fa-user"></i>My Account</span>
                                        <a class="popup-close" data-target="popup-close" data-popup-close="#popup-myaccount">&times;</a>
                                    </div>
                                    <div class="popup-content">
                                        <div class="form-content">
                                            <div class="row space">
                                                <div class="col col-sm-6 col-xs-12">
                                                    <div class="form-box">
                                                        <form action="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="sticky-form-currency">
                                                            <label class="label-top" for="input-language"><span>Currency</span></label>
                                                            <select name="select-currency" id="input-currency" class="field icon dark arrow">
                                                                <option value="EUR">€ Euro</option>
                                                                <option value="GBP">£ Pound Sterling</option>
                                                                <option value="USD" selected="selected">$ US Dollar</option>

                                                            </select>
                                                            <input type="hidden" name="code" value="">
                                                            <input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=common/home">
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-6 col-xs-12">
                                                    <div class="form-box">
                                                        <form action="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="sticky-form-language">
                                                            <label class="label-top" for="input-language"><span>Language</span></label>
                                                            <select name="select-language" id="input-language" class="field icon dark arrow">
                                                                <option value="ar-ar">Arabic</option>
                                                                <option value="en-gb" selected="selected">English</option>
                                                            </select>
                                                            <input type="hidden" name="code" value="">
                                                            <input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=common/home">
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-12">
                                                    <div class="form-box">
                                                        <div class="hr show"></div>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-4 col-xs-6 txt-center">
                                                    <div class="form-box">
                                                        <a class="account-url" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/order">
                                                            <span class="ico ico-32 ico-sm"><i class="fa fa-history"></i></span><br>
                                                            <span class="account-txt">History</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-4 col-xs-6 txt-center">
                                                    <div class="form-box">
                                                        <a class="account-url" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=checkout/cart">
                                                            <span class="ico ico-32 ico-sm"><i class="fa fa-shoppingcart"></i></span><br>
                                                            <span class="account-txt">Shopping Cart</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-4 col-xs-6 txt-center">
                                                    <div class="form-box">
                                                        <a class="account-url" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/register">
                                                            <span class="ico ico-32 ico-sm"><i class="fa fa-register"></i></span><br>
                                                            <span class="account-txt">Register</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-4 col-xs-6 txt-center">
                                                    <div class="form-box">
                                                        <a class="account-url" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/account">
                                                            <span class="ico ico-32 ico-sm"><i class="fa fa-account"></i></span><br>
                                                            <span class="account-txt">Account</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-4 col-xs-6 txt-center">
                                                    <div class="form-box">
                                                        <a class="account-url" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/download">
                                                            <span class="ico ico-32 ico-sm"><i class="fa fa-download"></i></span><br>
                                                            <span class="account-txt">Download</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-4 col-xs-6 txt-center">
                                                    <div class="form-box">
                                                        <a class="account-url" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/login">
                                                            <span class="ico ico-32 ico-sm"><i class="fa fa-login"></i></span><br>
                                                            <span class="account-txt">Login</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="popup popup-recent popup-hidden" id="popup-recent">
                    <div class="popup-screen">
                        <div class="popup-position">
                            <div class="popup-container popup-small">
                                <div class="popup-html">
                                    <div class="popup-header">
                                        <span><i class="fa fa-recent"></i>Recent View Products</span>
                                        <a class="popup-close" data-target="popup-close" data-popup-close="#popup-recent">&times;</a>
                                    </div>
                                    <div class="popup-content">
                                        <div class="form-content">
                                            <div class="row space">
                                                <div class="col col-sm-4 col-xs-6">
                                                    <div class="form-box">
                                                        <div class="item">
                                                            <div class="product-thumb transition">
                                                                <div class="image">
                                                                    <span class="bt-sale">-15%</span>
                                                                    <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=137">
                                                                        <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/12-270x270.jpg" alt="Apple Cinema HD">
                                                                    </a>
                                                                </div>
                                                                <div class="caption">
                                                                    <h4 class="font-ct"><a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=137" title="Apple Cinema HD">Apple Cinema HD</a></h4>
                                                                    <p class="price">
                                                                        <span class="price-new">$55.00</span>
                                                                        <span class="price-old">$65.00</span>
                                                                    </p>
                                                                </div>
                                                                <div class="button-group">
                                                                    <button type="button" onclick="cart.add('137');">
                                                                        <span class="">Add To Cart</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop



       