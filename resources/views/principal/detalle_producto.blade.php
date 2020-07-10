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

                        <div class="box-review" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">

                            <div class="rating">
                                <div class="rating-box">
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> </div>
                            </div>


                        </div>

                        <div class="product_page_price price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

                            <span class="price-new">
                                <span itemprop="price" content="55.0000" id="price-special">${{$info[0]->precio}}</span>
                                <meta itemprop="priceCurrency" content="USD">
                            </span>

                        </div>




                        <div class="product-box-desc">
                            <div class="inner-box-desc">


                                <?php
                            if($info[0]->disponible==1)
                            {
                                echo '<div class="stock"><span>Disponible:</span> <i class="fa fa-check"></i> Hay disponibles</div>';
                               
                            }
                        else
                        {
                            echo '<div class="stock"><span>No disponible:</span> <i class="fa fa-close"></i> No hay disponibles</div>';
                        }
						
                            ?>
                            </div>



                        </div>

                        <div class="short_description form-group" itemprop="description">
                            <h3>Descripción</h3>
                            {{$info[0]->descripcion}}
                        </div>


                        <div id="product">



                            <div class="box-cart clearfix form-group">

                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
                                            <span class="input-group-addon product_quantity_down fa fa-minus"></span>
                                            <input class="form-control" type="text" name="cantidad" id="cantidad" value="1">
                                            <input  type="hidden" id="id_alimento" name="id_alimento" value="{{$info[0]->id_alimento}}"> 
                                            <span class="input-group-addon product_quantity_up fa fa-plus"></span>
                                        </div>
                                    </div>
                                    <div class="detail-action">
                                        <div class="cart">
                                            <?php
                            if($info[0]->disponible==1)
                            {
                                    echo '<input type="button" value="Add to Cart" data-loading-text="Añadir a l carrito" id="button-cart" class="btn btn-mega btn-lg" onclick="agregar()">';
                                    
                            }
                             else
                             {
                                 echo 'No se puede comprar';
                                 
                             }
                             ?>
                                        </div>
                                        <div class="add-to-links wish_comp">
                                            <ul class="blank">
                                                <li class="wishlist">
                                                    <a onclick="favoritos();"><i class="fa fa-heart"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group social-share clearfix">
                                <!--<div class="title-share">Share This</div><div class="title-share"></div>
<div class="wrap-content"><div class="addthis_inline_share_toolbox" data-url="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=137" data-title="Apple Cinema HD" style="clear: both;"><div id="atstbx" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-d25d86cb-9316-4dd3-a60e-6a605bb63ef1" role="region"><span id="at-d25d86cb-9316-4dd3-a60e-6a605bb63ef1" class="at4-visually-hidden">AddThis Sharing Buttons</span><div class="at-share-btn-elements"><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 0px;"><span class="at4-visually-hidden">Share to Facebook</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;"><title id="at-svg-facebook-1">Facebook</title><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 0px;"><span class="at4-visually-hidden">Share to Twitter</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;"><title id="at-svg-twitter-2">Twitter</title><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-pinterest_share" style="background-color: rgb(203, 32, 39); border-radius: 0px;"><span class="at4-visually-hidden">Share to Pinterest</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-pinterest_share-3" class="at-icon at-icon-pinterest_share" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;"><title id="at-svg-pinterest_share-3">Pinterest</title><g><path d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-compact" style="background-color: rgb(255, 101, 80); border-radius: 0px;"><span class="at4-visually-hidden">Share to More</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-4" class="at-icon at-icon-addthis" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;"><title id="at-svg-addthis-4">AddThis</title><g><path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path></g></svg></span></a></div></div></div></div>-->
                                <div class="form-group social-share clearfix">
                                    <img alt="payment" src="/images/metodos_de_pago.png"></div>
                            </div>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5"></script>


                        </div>

                    </div>
                </div>
            </div>

            <div class="content-product-maintop form-group clearfix">

                <div id="so-groups" class="right so-groups-sticky hidden-xs" style="top: 196px">

                    <a class="sticky-myaccount" data-target="popup" data-popup="#popup-myaccount"><span>Account</span><i class="fa fa-user"></i></a>

                    <a class="sticky-backtop" data-target="scroll" data-scroll="html"><span>Go to Top</span><i class="fa fa-angle-double-up"></i></a>



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


                </div>


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
                                        <div id="collapse-description">
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
@section('scripts')
<script>
    function agregar() {
        //alert("ENTRO AL METODO");
        var cantidad = document.getElementById("cantidad").value;
        var id_alimento = document.getElementById("id_alimento").value;

        /*OBTENER EL USUARIO*/
        var id_usuario = 13;
        var token = '{{csrf_token()}}';
        var data = {
            id_usuario: id_usuario,
            id_alimento: id_alimento,
            cantidad: cantidad,
            _token: token
        };

        $.ajax({
            type: "POST",
            url: "/insertar_carrito",
            data: data,
            success: function(msg) {
                var datos = JSON.parse(msg);
                //alert(datos);
                alert("El producto se agrego al carrito de compra!!");
            }
        });

    }

</script>
<script>
    function favoritos() {
        //document.getElementById('direccion').innerHTML = ''
        var mensaje = "";

        var id_alimento = document.getElementById("id_alimento").value;
        //alert(id_alimento);
        var token = '{{csrf_token()}}';
        var data = {
            id_alimento: id_alimento,
            _token: token
        };

        $.ajax({
            type: "POST",
            url: "/insertar_eliminar_favorito",
            data: data,
            success: function(msg) {
                var datos = JSON.parse(msg);
                alert(datos);
            }
        });

    }

</script>
@stop
@stop
