@extends('welcome2')
@section('contenido')
<div class="breadcrumbs ">
    <div class="container">
        <div class="current-name">

            {{$info[0]->nombre_alimento}}

        </div>
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="productos_categoria?categoria={{$info[0]->id_categoria}}">{{$info[0]->nombre_categoria}}</a></li>
            <li><a href="detalle_producto?producto={{$info[0]->id_alimento}}">{{$info[0]->nombre_alimento}}</a></li>
        </ul>
    </div>
</div>

<div class="content-main container product-detail  ">
    <div class="row">





        <div id="content" class="product-view col-md-9 col-sm-12 col-xs-12 fluid-sidebar">


            <a href="javascript:void(0)" class=" open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
            <div class="sidebar-overlay "></div>


            <div class="content-product-mainheader clearfix">
                <div class="row">
                    <div class="content-product-left  col-md-5 col-sm-12 col-xs-12">
                        <div class="so-loadeding"></div>

                        <div class="large-image  ">
                            <img itemprop="image" class="product-image-zoom lazyautosizes lazyloaded" data-sizes="auto" src="{{$info[0]->fotografia_miniatura}}" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/12-1000x1000.jpg" data-zoom-image="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/12-1000x1000.jpg" title="Apple Cinema HD" alt="Apple Cinema HD" sizes="718px">
                        </div>

                        <div id="thumb-slider" class="full_slider  contentslider--default" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="4" data-items_column1="3" data-items_column2="5" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                            
                            <?php 
                            $i=0;
                            foreach($imagenes as $imagen)
                            {
                                
                                echo ' <div class="image-additional">
                                <a data-index="'.$i.'" class="img thumbnail" data-image="'.$imagen->imagen_muestra.'" title="Apple Cinema HD">
                                    <img class="lazyautosizes lazyloaded" data-sizes="auto" src="'.$imagen->imagen_muestra.'" data-src="'.$imagen->imagen_muestra.'" title="img" alt="img HD" sizes="134px">
                                </a>
                            </div>';
                                $i++;
                            }
                           

                            ?>

                        </div>

                    </div>

                    <div class="content-product-right col-md-7 col-sm-12 col-xs-12" itemprop="offerDetails" itemscope="" itemtype="http://schema.org/Product">

                        <div class="title-product">
                            <h1 itemprop="name">{{$info[0]->nombre_alimento}}</h1>
                        </div>

                        <div class="product_page_price price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

                            <span class="price-new">
                                <span itemprop="price" content="55.0000" id="price-special">${{$info[0]->precio}}</span>
                                <meta itemprop="priceCurrency" content="USD">
                            </span>
                            <span class="price-old" id="price-old">

                            </span>

                        </div>



                        <div id="product">


                            <div class="box-cart clearfix form-group">

                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
                                            <span class="input-group-addon product_quantity_down fa fa-minus"></span>
                                            <input class="form-control" type="text" name="quantity" value="1">
                                            <input type="hidden" name="product_id" value="137">
                                            <span class="input-group-addon product_quantity_up fa fa-plus"></span>
                                        </div>
                                    </div>
                                    <div class="detail-action">
                                        <div class="cart">
                                            <input type="button" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg">
                                        </div>
                                        <div class="add-to-links wish_comp">
                                            <ul class="blank">
                                                <li class="wishlist">
                                                    <a onclick="wishlist.add(137);"><i class="fa fa-heart"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group social-share clearfix">
                                <div class="title-share">Share This</div>
                                <div class="title-share"></div>
                                <div class="wrap-content">
                                    <div class="addthis_inline_share_toolbox" data-url="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=137" data-title="Apple Cinema HD" style="clear: both;">
                                        <div id="atstbx" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show at-mobile" aria-labelledby="at-e31c79b7-426b-4088-8f61-9d524b95e912" role="region"><span id="at-e31c79b7-426b-4088-8f61-9d524b95e912" class="at4-visually-hidden">AddThis Sharing Buttons</span>
                                            <div class="at-share-btn-elements"><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 0px;"><span class="at4-visually-hidden">Share to Facebook</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                                            <title id="at-svg-facebook-1">Facebook</title>
                                                            <g>
                                                                <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                                                            </g>
                                                        </svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 0px;"><span class="at4-visually-hidden">Share to Twitter</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                                            <title id="at-svg-twitter-2">Twitter</title>
                                                            <g>
                                                                <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                                                            </g>
                                                        </svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-pinterest_share" style="background-color: rgb(203, 32, 39); border-radius: 0px;"><span class="at4-visually-hidden">Share to Pinterest</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-pinterest_share-3" class="at-icon at-icon-pinterest_share" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                                            <title id="at-svg-pinterest_share-3">Pinterest</title>
                                                            <g>
                                                                <path d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z" fill-rule="evenodd"></path>
                                                            </g>
                                                        </svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-compact" style="background-color: rgb(255, 101, 80); border-radius: 0px;"><span class="at4-visually-hidden">Share to More</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-4" class="at-icon at-icon-addthis" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                                            <title id="at-svg-addthis-4">AddThis</title>
                                                            <g>
                                                                <path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path>
                                                            </g>
                                                        </svg></span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group social-share clearfix">
                                    <img alt="payment" src="image/catalog/demo/payment/payment.png"></div>
                            </div>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5"></script>

                        </div>

                    </div>
                </div>
            </div>

            <div class="content-product-maintop form-group clearfix">

                <div id="so-groups" class="right so-groups-sticky hidden-xs" style="top: 196px">
                    <a class="sticky-categories" data-target="popup" data-popup="#popup-categories"><span>Categories</span><i class="fa fa-align-justify"></i></a>
                    <a class="sticky-mycart" data-target="popup" data-popup="#popup-mycart"><span>Cart</span><i class="fa fa-shopping-cart"></i></a>
                    <a class="sticky-myaccount" data-target="popup" data-popup="#popup-myaccount"><span>Account</span><i class="fa fa-user"></i></a>
                    <a class="sticky-mysearch" data-target="popup" data-popup="#popup-mysearch"><span>Search</span><i class="fa fa-search"></i></a>
                    <a class="sticky-recent" data-target="popup" data-popup="#popup-recent"><span>Recent View</span><i class="fa fa-recent"></i></a>
                    <a class="sticky-backtop" data-target="scroll" data-scroll="html"><span>Go to Top</span><i class="fa fa-angle-double-up"></i></a>

                    <div class="popup popup-categories popup-hidden" id="popup-categories">
                        <div class="popup-screen">
                            <div class="popup-position">
                                <div class="popup-container popup-small">
                                    <div class="popup-header">
                                        <span><i class="fa fa-align-justify"></i>All Categories</span>
                                        <a class="popup-close" data-target="popup-close" data-popup-close="#popup-categories">×</a>
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

                    <div class="popup popup-mycart popup-hidden" id="popup-mycart">
                        <div class="popup-screen">
                            <div class="popup-position">
                                <div class="popup-container popup-small">
                                    <div class="popup-html">
                                        <div class="popup-header">
                                            <span><i class="fa fa-shopping-cart"></i>Shopping Cart</span>
                                            <a class="popup-close" data-target="popup-close" data-popup-close="#popup-mycart">×</a>
                                        </div>
                                        <div class="popup-content">
                                            <div class="cart-header">
                                                <div class="notification gray">
                                                    <i class="fa fa-shopping-cart info-icon"></i>
                                                    <p>Your shopping cart is empty!</p>
                                                </div>
                                            </div>
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
                                            <a class="popup-close" data-target="popup-close" data-popup-close="#popup-myaccount">×</a>
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
                                                                <input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;path=177&amp;product_id=137">
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
                                                                <input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;path=177&amp;product_id=137">
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

                    <div class="popup popup-mysearch popup-hidden" id="popup-mysearch">
                        <div class="popup-screen">
                            <div class="popup-position">
                                <div class="popup-container popup-small">
                                    <div class="popup-html">
                                        <div class="popup-header">
                                            <span><i class="fa fa-search"></i>Search</span>
                                            <a class="popup-close" data-target="popup-close" data-popup-close="#popup-mysearch">×</a>
                                        </div>
                                        <div class="popup-content">
                                            <div class="form-content">
                                                <div class="row space">
                                                    <div class="col">
                                                        <div class="form-box">
                                                            <input type="text" name="search" value="" placeholder="Search" id="input-search" class="field">
                                                            <i class="fa fa-search sbmsearch"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-box">
                                                            <button type="button" id="button-search" class="btn button-search">Search</button>
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
                                            <a class="popup-close" data-target="popup-close" data-popup-close="#popup-recent">×</a>
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
                                                                            <img class="lazyautosizes lazyloaded" data-sizes="auto" src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/12-270x270.jpg" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/12-270x270.jpg" alt="Apple Cinema HD" sizes="131px">
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
                                                    <div class="col col-sm-4 col-xs-6">
                                                        <div class="form-box">
                                                            <div class="item">
                                                                <div class="product-thumb transition">
                                                                    <div class="image">
                                                                        <span class="bt-sale">-12%</span>
                                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=135">
                                                                            <img class="lazyautosizes lazyloaded" data-sizes="auto" src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/10-270x270.jpg" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/10-270x270.jpg" alt="Replacement Rod Adjusting" sizes="131px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="caption">
                                                                        <h4 class="font-ct"><a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=135" title="Replacement Rod Adjusting">Replacement Rod Adjusting</a></h4>
                                                                        <p class="price">
                                                                            <span class="price-new">$45.00</span>
                                                                            <span class="price-old">$51.00</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <button type="button" onclick="cart.add('135');">
                                                                            <span class="">Add To Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-4 col-xs-6">
                                                        <div class="form-box">
                                                            <div class="item">
                                                                <div class="product-thumb transition">
                                                                    <div class="image">
                                                                        <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=116">
                                                                            <img class="lazyautosizes lazyloaded" data-sizes="auto" src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/2-270x270.jpg" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/2-270x270.jpg" alt="Buffalo cornedbee" sizes="131px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="caption">
                                                                        <h4 class="font-ct"><a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=116" title="Buffalo cornedbee">Buffalo cornedbee</a></h4>
                                                                        <p class="price">
                                                                            <span class="price-new">$51.00</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <button type="button" onclick="cart.add('116');">
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

            </div>
            <div class="content-product-mainbody clearfix row">


                <div class="content-product-content col-sm-12">
                    <div class="content-product-midde clearfix">

                        <div class="producttab ">
                            <div class="tabsslider   horizontal-tabs  col-xs-12">
                                <ul class="nav nav-tabs font-sn">
                                    <li class="active"><a data-toggle="tab">Descripción</a></li>
                                </ul>


                                <div class="tab-content  col-xs-12">
                                    <div class="tab-pane active" id="tab-description">

                                        <h3 class="product-property-title">Especificaciones</h3>
                                        <ul class="product-property-list util-clearfix">

                                            @foreach($especificaciones as $especificacion)
                                            <li class="property-item">
                                                <span class="propery-title">{{$especificacion->ingrediente}}</span>
                                                <span class="propery-des">{{$especificacion->descripcion_especificacion}}</span>
                                            </li>
                                            @endforeach
                                        </ul>

                                        <h3 class="product-property-title"> Descripción</h3>
                                        <div id="collapse-description" >
                                            <p>
                                            {{$info[0]->descripcion}}
                                            </p>
                                          
                                        </div>

                                    </div>


                                    <div class="tab-pane" id="tab-review">
                                        <form class="form-horizontal" id="form-review">
                                            <div id="review">
                                                <p>There are no reviews for this product.</p>
                                            </div>
                                            <h3>Write a review</h3>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="input-name">Your Name</label>
                                                    <input type="text" name="name" value="" id="input-name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="input-review">Your Review</label>
                                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label">Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" name="rating" value="1">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="2">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="3">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="4">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="5">
                                                    &nbsp;Good</div>
                                            </div>


                                            <div class="pull-right">
                                                <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                            </div>

                                        </form>
                                    </div>

                                    <div class="tab-pane" id="tab-contentshipping">
                                        <div class="shipping_methods_info">
                                            <!-- shipping method -->
                                            <p><span style="font-size: small;">When you order, you will receive a confirmation email. Once your order is shipped, you will be emailed the tracking information for your order's shipment. You can choose your preferred shipping method on the Order Information page during the checkout process.</span></p>
                                            <p><span style="font-size: small;">The total time it takes to receive your order is shown below:</span></p>
                                            <p style="text-align:center;">
                                                <img src="//css.banggood.com/images/shipping_method_new_intro.jpg" data-original="//css.banggood.com/images/shipping_method_new_intro.jpg" class="bg_lazy" style="display: inline;">
                                            </p>
                                            <p><span style="font-size: small;">The total delivery time is calculated from the time your order is placed until the time it is delivered to you. Total delivery time is broken down into processing time and shipping time.</span></p>
                                            <p><span style="font-size: small;"><strong>Processing time:</strong> The time it takes to prepare your item(s) to ship from our warehouse. This includes preparing your items, performing quality checks, and packing for shipment.</span></p>
                                            <p><span style="font-size: small;"><strong>Shipping time:</strong> The time for your item(s) to tarvel from our warehouse to your destination.</span></p>


                                            <p><span style="font-size: small;">Shipping from your local warehouse is significantly faster. Some charges may apply.<br></span></p>
                                            <p><span style="font-size: small;">In addition, the transit time depends on where you're located and where your package comes from. If you want to know more information, please contact the customer service. We will settle your problem as soon as possible. Enjoy shopping!<br></span></p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-product-bottom clearfix">
                       
                        <div class="tab-content">

                            <div id="product-upsell" class="tab-pane fade">
                                <!-- default Grid  -->
                                <div class="module so-extraslider-ltr upsell-product">


                                    <div class="modcontent">





                                        <div id="so_extra_slider_11774888091593925373" class="so-extraslider buttom-type1 preset00-4 preset01-3 preset02-3 preset03-2 preset04-1 button-type1">
                                            <!-- Begin extraslider-inner -->
                                            <div class="owl2-controls">
                                                <div class="owl2-nav">
                                                    <div class="owl2-prev" style="">« </div>
                                                    <div class="owl2-next" style="">» </div>
                                                </div>
                                                <div class="owl2-dots" style="display: none;"></div>
                                            </div>
                                            <div class="extraslider-inner products-list  owl2-carousel owl2-theme owl2-loaded extra-animate" data-effect="none">










                                                <div class="owl2-stage-outer">
                                                    <div class="owl2-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1500px;">
                                                        <div class="owl2-item active" style="width: 220px; margin-right: 30px; animation: 800ms ease 500ms 1 normal none running both;">
                                                            <div class="item ">


                                                                <div class="product-layout product-grid style1 ">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container 	">
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=105" target="_self" title="Andouille bresaolav ">
                                                                                    <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/funiture/2-270x270.jpg" alt="Andouille bresaolav" class="lazyload">
                                                                                </a>
                                                                            </div>
                                                                            <div class="box-label">

                                                                                <span class="label-product label-sale"> -39% </span>



                                                                            </div>

                                                                            <div class="button-group so-quickview cartinfo--static">


                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('105');"><i class="fa fa-heart"></i><span>Add to Wish List</span></button>


                                                                                <button type="button" class="compare btn-button" title="Compare this Product" onclick="compare.add('105');"><i class="fa fa-refresh"></i><span>Compare this Product</span></button>


                                                                                <a class="hidden" data-product="105" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=105" target="_self"></a>

                                                                                <a class="visible-lg btn-button quickview quickview_handler" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/soconfig/quickview&amp;product_id=105" title="Quick view" data-title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a></div>


                                                                        </div>

                                                                        <div class="right-block">


                                                                            <h4>
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=105" target="_self" title="Andouille bresaolav ">
                                                                                    Andouille bresaolav
                                                                                </a>
                                                                            </h4>

                                                                            <div class="caption">

                                                                                <div class="price">

                                                                                    <span class="price-new">$40.00 </span>&nbsp;&nbsp;
                                                                                    <span class="price-old">$66.00 </span>&nbsp;


                                                                                </div>







                                                                                <button type="button" class="addToCart btn-button" title="Add to Cart" onclick="cart.add('105');">

                                                                                    <span>Add to Cart </span>

                                                                                </button>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->


                                                            </div>
                                                        </div>
                                                        <div class="owl2-item active" style="width: 220px; margin-right: 30px; animation: 800ms ease 1000ms 1 normal none running both;">
                                                            <div class="item ">


                                                                <div class="product-layout product-grid style1 ">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container 	">
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=123" target="_self" title="Backpacks ">
                                                                                    <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/fashion/1-270x270.jpg" alt="Backpacks" class="lazyload">
                                                                                </a>
                                                                            </div>
                                                                            <div class="box-label">

                                                                                <span class="label-product label-sale"> -2% </span>



                                                                            </div>

                                                                            <div class="button-group so-quickview cartinfo--static">


                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('123');"><i class="fa fa-heart"></i><span>Add to Wish List</span></button>


                                                                                <button type="button" class="compare btn-button" title="Compare this Product" onclick="compare.add('123');"><i class="fa fa-refresh"></i><span>Compare this Product</span></button>


                                                                                <a class="hidden" data-product="123" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=123" target="_self"></a>

                                                                                <a class="visible-lg btn-button quickview quickview_handler" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/soconfig/quickview&amp;product_id=123" title="Quick view" data-title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a></div>


                                                                        </div>

                                                                        <div class="right-block">


                                                                            <h4>
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=123" target="_self" title="Backpacks ">
                                                                                    Backpacks
                                                                                </a>
                                                                            </h4>

                                                                            <div class="caption">

                                                                                <div class="price">

                                                                                    <span class="price-new">$45.00 </span>&nbsp;&nbsp;
                                                                                    <span class="price-old">$46.00 </span>&nbsp;


                                                                                </div>







                                                                                <button type="button" class="addToCart btn-button" title="Add to Cart" onclick="cart.add('123');">

                                                                                    <span>Add to Cart </span>

                                                                                </button>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->


                                                            </div>
                                                        </div>
                                                        <div class="owl2-item active" style="width: 220px; margin-right: 30px; animation: 800ms ease 1500ms 1 normal none running both;">
                                                            <div class="item ">


                                                                <div class="product-layout product-grid style1 ">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container 	">
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=80" target="_self" title="Balltip nullaelit ">
                                                                                    <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/fashion/2-270x270.jpg" alt="Balltip nullaelit" class="lazyload">
                                                                                </a>
                                                                            </div>
                                                                            <div class="box-label">

                                                                                <span class="label-product label-sale"> -15% </span>



                                                                            </div>

                                                                            <div class="button-group so-quickview cartinfo--static">


                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('80');"><i class="fa fa-heart"></i><span>Add to Wish List</span></button>


                                                                                <button type="button" class="compare btn-button" title="Compare this Product" onclick="compare.add('80');"><i class="fa fa-refresh"></i><span>Compare this Product</span></button>


                                                                                <a class="hidden" data-product="80" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=80" target="_self"></a>

                                                                                <a class="visible-lg btn-button quickview quickview_handler" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/soconfig/quickview&amp;product_id=80" title="Quick view" data-title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a></div>


                                                                        </div>

                                                                        <div class="right-block">


                                                                            <h4>
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=80" target="_self" title="Balltip nullaelit ">
                                                                                    Balltip nullaelit
                                                                                </a>
                                                                            </h4>

                                                                            <div class="caption">

                                                                                <div class="price">

                                                                                    <span class="price-new">$55.00 </span>&nbsp;&nbsp;
                                                                                    <span class="price-old">$65.00 </span>&nbsp;


                                                                                </div>







                                                                                <button type="button" class="addToCart btn-button" title="Add to Cart" onclick="cart.add('80');">

                                                                                    <span>Add to Cart </span>

                                                                                </button>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->


                                                            </div>
                                                        </div>
                                                        <div class="owl2-item" style="width: 220px; margin-right: 30px; animation: 800ms ease 2000ms 1 normal none running both;">
                                                            <div class="item ">


                                                                <div class="product-layout product-grid style1 ">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container 	">
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=114" target="_self" title="Beefribs tenderloin ">
                                                                                    <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/fashion/3-270x270.jpg" alt="Beefribs tenderloin" class="lazyload">
                                                                                </a>
                                                                            </div>
                                                                            <div class="box-label">

                                                                                <span class="label-product label-sale"> -33% </span>



                                                                            </div>

                                                                            <div class="button-group so-quickview cartinfo--static">


                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('114');"><i class="fa fa-heart"></i><span>Add to Wish List</span></button>


                                                                                <button type="button" class="compare btn-button" title="Compare this Product" onclick="compare.add('114');"><i class="fa fa-refresh"></i><span>Compare this Product</span></button>


                                                                                <a class="hidden" data-product="114" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=114" target="_self"></a>

                                                                                <a class="visible-lg btn-button quickview quickview_handler" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/soconfig/quickview&amp;product_id=114" title="Quick view" data-title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a></div>


                                                                        </div>

                                                                        <div class="right-block">


                                                                            <h4>
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=114" target="_self" title="Beefribs tenderloin ">
                                                                                    Beefribs tenderloin
                                                                                </a>
                                                                            </h4>

                                                                            <div class="caption">

                                                                                <div class="price">

                                                                                    <span class="price-new">$60.00 </span>&nbsp;&nbsp;
                                                                                    <span class="price-old">$90.00 </span>&nbsp;


                                                                                </div>







                                                                                <button type="button" class="addToCart btn-button" title="Add to Cart" onclick="cart.add('114');">

                                                                                    <span>Add to Cart </span>

                                                                                </button>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->


                                                            </div>
                                                        </div>
                                                        <div class="owl2-item" style="width: 220px; margin-right: 30px;">
                                                            <div class="item ">


                                                                <div class="product-layout product-grid style1 ">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container 	">
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=84" target="_self" title="Benderloin officia ">
                                                                                    <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/fashion/5-270x270.jpg" alt="Benderloin officia" class="lazyload">
                                                                                </a>
                                                                            </div>
                                                                            <div class="box-label">

                                                                                <span class="label-product label-sale"> -31% </span>



                                                                            </div>

                                                                            <div class="button-group so-quickview cartinfo--static">


                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('84');"><i class="fa fa-heart"></i><span>Add to Wish List</span></button>


                                                                                <button type="button" class="compare btn-button" title="Compare this Product" onclick="compare.add('84');"><i class="fa fa-refresh"></i><span>Compare this Product</span></button>


                                                                                <a class="hidden" data-product="84" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=84" target="_self"></a>

                                                                                <a class="visible-lg btn-button quickview quickview_handler" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/soconfig/quickview&amp;product_id=84" title="Quick view" data-title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a></div>


                                                                        </div>

                                                                        <div class="right-block">


                                                                            <h4>
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=84" target="_self" title="Benderloin officia ">
                                                                                    Benderloin officia
                                                                                </a>
                                                                            </h4>

                                                                            <div class="caption">

                                                                                <div class="price">

                                                                                    <span class="price-new">$25.00 </span>&nbsp;&nbsp;
                                                                                    <span class="price-old">$36.00 </span>&nbsp;


                                                                                </div>







                                                                                <button type="button" class="addToCart btn-button" title="Add to Cart" onclick="cart.add('84');">

                                                                                    <span>Add to Cart </span>

                                                                                </button>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->


                                                            </div>
                                                        </div>
                                                        <div class="owl2-item" style="width: 220px; margin-right: 30px;">
                                                            <div class="item ">


                                                                <div class="product-layout product-grid style1 ">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container 	">
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=122" target="_self" title="Bottomwear ">
                                                                                    <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/fashion/7-270x270.jpg" alt="Bottomwear" class="lazyload">
                                                                                </a>
                                                                            </div>
                                                                            <div class="box-label">



                                                                            </div>

                                                                            <div class="button-group so-quickview cartinfo--static">


                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('122');"><i class="fa fa-heart"></i><span>Add to Wish List</span></button>


                                                                                <button type="button" class="compare btn-button" title="Compare this Product" onclick="compare.add('122');"><i class="fa fa-refresh"></i><span>Compare this Product</span></button>


                                                                                <a class="hidden" data-product="122" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=122" target="_self"></a>

                                                                                <a class="visible-lg btn-button quickview quickview_handler" href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/soconfig/quickview&amp;product_id=122" title="Quick view" data-title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a></div>


                                                                        </div>

                                                                        <div class="right-block">


                                                                            <h4>
                                                                                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=122" target="_self" title="Bottomwear ">
                                                                                    Bottomwear
                                                                                </a>
                                                                            </h4>

                                                                            <div class="caption">

                                                                                <div class="price">

                                                                                    <span class="price-new">
                                                                                        $62.00
                                                                                    </span>


                                                                                </div>







                                                                                <button type="button" class="addToCart btn-button" title="Add to Cart" onclick="cart.add('122');">

                                                                                    <span>Add to Cart </span>

                                                                                </button>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End extraslider-inner -->

                                            <script type="text/javascript">
                                                //<![CDATA[
                                                jQuery(document).ready(function($) {
                                                    (function(element) {
                                                        var $element = $(element),
                                                            $extraslider = $(".extraslider-inner", $element),
                                                            _delay = 500,
                                                            _duration = 800,
                                                            _effect = 'none ';

                                                        $extraslider.on("initialized.owl.carousel2", function() {
                                                            var $item_active = $(".owl2-item.active", $element);
                                                            if ($item_active.length > 1 && _effect != "none") {
                                                                _getAnimate($item_active);
                                                            } else {
                                                                var $item = $(".owl2-item", $element);
                                                                $item.css({
                                                                    "opacity": 1,
                                                                    "filter": "alpha(opacity = 100)"
                                                                });
                                                            }


                                                            $(".owl2-controls", $element).insertBefore($extraslider);
                                                            $(".owl2-dots", $element).insertAfter($(".owl2-nav", $element));

                                                        });

                                                        $extraslider.owlCarousel2({
                                                            rtl: false,
                                                            margin: 30,
                                                            slideBy: 1,
                                                            autoplay: 0,
                                                            autoplayHoverPause: 0,
                                                            autoplayTimeout: 0,
                                                            autoplaySpeed: 1000,
                                                            startPosition: 0,
                                                            mouseDrag: 1,
                                                            touchDrag: 1,
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
                                                            dotClass: "owl2-dot",
                                                            dotsClass: "owl2-dots",
                                                            dots: false,
                                                            dotsSpeed: 500,
                                                            nav: true,
                                                            loop: false,
                                                            navSpeed: 500,
                                                            navText: ["&#171 ", "&#187 "],
                                                            navClass: ["owl2-prev", "owl2-next"]

                                                        });

                                                        $extraslider.on("translate.owl.carousel2", function(e) {

                                                            var $item_active = $(".owl2-item.active", $element);
                                                            _UngetAnimate($item_active);
                                                            _getAnimate($item_active);
                                                        });
                                                        $extraslider.on("translated.owl.carousel2", function(e) {

                                                            var $item_active = $(".owl2-item.active", $element);
                                                            var $item = $(".owl2-item", $element);
                                                            _UngetAnimate($item);
                                                            if ($item_active.length > 1 && _effect != "none") {
                                                                _getAnimate($item_active);
                                                            } else {
                                                                $item.css({
                                                                    "opacity": 1,
                                                                    "filter": "alpha(opacity = 100)"
                                                                });
                                                            }
                                                        });

                                                        function _getAnimate($el) {
                                                            if (_effect == "none") return;
                                                            //if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                                                            $extraslider.removeClass("extra-animate");
                                                            $el.each(function(i) {
                                                                var $_el = $(this);
                                                                var i = i + 1;
                                                                $(this).css({
                                                                    "-webkit-animation": _effect + " " + _duration + "ms ease both",
                                                                    "-moz-animation": _effect + " " + _duration + "ms ease both",
                                                                    "-o-animation": _effect + " " + _duration + "ms ease both",
                                                                    "animation": _effect + " " + _duration + "ms ease both",
                                                                    "-webkit-animation-delay": +i * _delay + "ms",
                                                                    "-moz-animation-delay": +i * _delay + "ms",
                                                                    "-o-animation-delay": +i * _delay + "ms",
                                                                    "animation-delay": +i * _delay + "ms",

                                                                }).animate({

                                                                });
                                                                if (i == $el.size() - 1) {
                                                                    $extraslider.addClass("extra-animate");
                                                                }
                                                            });
                                                        }

                                                        function _UngetAnimate($el) {
                                                            $el.each(function(i) {
                                                                $(this).css({
                                                                    "animation": "",
                                                                    "-webkit-animation": "",
                                                                    "-moz-animation": "",
                                                                    "-o-animation": "",
                                                                });
                                                            });
                                                        }
                                                    })("#so_extra_slider_11774888091593925373 ");
                                                });
                                                //]]>

                                            </script>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>


        </div>
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>

            <div class="module category-style">
                <h3 class="modtitle"><span>Categories </span></h3>
                <div class="mod-content box-category">
                    <ul class="accordion" id="accordion-category">
                        @foreach($categorias as $categoria)
                        <li class="panel">

                            <a href="/productos_categoria?categoria={{$categoria->id_categoria}}">{{$categoria->nombre_categoria}} </a>
                        </li>

                        @endforeach
            
                    </ul>
                </div>
            </div>

            <div class="module banner-left hidden-xs ">


                <div class="banner-sidebar banners">
                    <div>
                        <a title="Banner Image" href="#">
                            <img src="image/catalog/banners/banner-sidebar.jpg" alt="Banner Image">
                        </a>
                    </div>
                </div>

            </div>
        </aside>
    </div>
</div>
@stop
