@extends('welcome2')
@section('contenido')
<div class="breadcrumbs ">
	<div class="container">
       <div class="current-name">	  
	    		  	</div>
      <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="/productos_categoria?categoria={{$cates[0]->id_categoria}}">{{$cates[0]->nombre_categoria}}</a></li>
              </ul>
    </div>
</div>

<div class="container product-listing content-main ">

    <div class="row">

        <div id="content" class="col-md-9 col-sm-12 col-xs-12 fluid-sidebar">


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
                                                            <input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25">
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
                                                            <input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/category&amp;path=25">
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

            </div>


            <div class="products-category clearfix">


                <h3 class="title-category ">{{$cates[0]->nombre_categoria}}</h3>
                <div class="form-group category-info">

                </div>

                <div class="product-filter product-filter-top filters-panel">
                    <div class="row">
                        <div class="col-sm-5 view-mode">

                            <a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
                            <div class="sidebar-overlay "></div>
                        </div>

                    </div>
                </div>
<!---------------------------------------------------------------------------------AQUI VAN LOS PRODUCTOS--->
                <div class="products-list row nopadding-xs so-filter-gird">
                    <?php
                    if(empty($alimentos))
                    {
                        echo 'No se encontro nungun producto';
                    }
                    else
                    {
                    foreach($alimentos as $alimento)
                    {
                    echo '<div class="product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item-container">
                            <div class="left-block">

                                <div class="product-image-container">
                                        <img src="'.$alimento->fotografia_miniatura.'" alt="'.$alimento->nombre_alimento.'" title="'.$alimento->nombre_alimento.'" class="img-responsive" id="product-image-120">

                                    
                                </div>


                                <div class="button-group cartinfo--left">

                                    <a  href="/detalle_producto?producto='.$alimento->id_alimento.'" class="addToCart btn-button" type="button" title="Add to Cart" ><i class="fa fa-shopping-basket"></i><span>Agregar a carrito</span></a>

                                    <a href="/detalle_producto?producto='.$alimento->id_alimento.'" class="wishlist btn-button" type="button" title="Add to Wish List" ><i class="fa fa-heart"></i><span>Agregar a lista de deseos</span></a>


                                </div>
                            </div>

                            <div class="right-block">


                                <h4><a href="/detalle_producto?producto='.$alimento->id_alimento.'">'.$alimento->nombre_alimento.'</a></h4>
                                <div class="rate-history">

                                    <div class="ratings">
                                        <div class="rating-box">

                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>


                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>


                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>


                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>


                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>


                                        </div>
                                       
                                    </div>

                                    

                                </div>



                                <div class="price">

                                    <span class="price-new">
                                        $'.$alimento->precio.'
                                    </span>

                                </div>

                                <div class="description">
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and de.. </p>
                                </div>
                            </div>



                        </div>
                    </div>';
                        }
                    }
                    ?>
                </div>

                <div class="product-filter product-filter-bottom filters-panel">
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <!--<div class="col-sm-6 text-right">Showing 1 to 13 of 13 (1 Pages)</div>-->
                        <div class="col-sm-6 text-right">Productos encontrados: <?php  echo count($alimentos);   ?></div>
                    </div>
                </div>


            </div>
        </div>
<!------------------------------------------------SON LOS BANNERS EN EL LADO DERECHO -->
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module so_filter_wrap block-shopby">
                <h3 class="modtitle">Buscar producto</h3>

                <div class="modcontent">
                    <ul data-product_id="137,80,114,84,120,116,73,59,52,82,78,75,69">
                        <li class="so-filter-options" data-option="search">
                            <div class="so-filter-heading">
                                <div class="so-filter-heading-text">
                                    <span>Buscar</span>
                                </div>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="so-filter-content-opts">
                                <div class="so-filter-content-opts-container">
                                    <div class="so-filter-option" data-type="search">
                                        <div class="so-option-container">
                                            <div class="input-group">
                                                <input type="search" class="form-control" placeholder="Buscar producto …" value="" id="buscar" name="buscar" onkeypress="pulsar(event)">
                                                
                                                <input type="hidden" id="id_categoria" name="idcategoria" value="{{$cates[0]->id_categoria}}">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="button" id="submit_text_search"><i class="icon-search1"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

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
<script type="text/javascript">
    function pulsar(e) {
        if (e.keyCode === 13 && !e.shiftKey) {
            e.preventDefault();
            var cod = document.getElementById("buscar").value;
            var cate = document.getElementById("id_categoria").value;
            //alert(cod);
            var url = "/productos_categoria/" + cod+"?categoria="+cate;
            //alert(url);
            location.href = url;
            /*$.ajax({
                method: "GET",
                url: url,
                dataType: "json",
                success: function(data) {
                  alert(data);

                }
            });*/

        }
    }

</script>
@stop
@stop
