@extends('welcome2')
@section('contenido')
<div class="breadcrumbs ">
    <div class="container">
        <div class="current-name">
            {{$alimentos[0]->nombre_categoria}}
        </div>
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="/productos_categoria?categoria={{$alimentos[0]->id_categoria}}">{{$alimentos[0]->nombre_categoria}}</a></li>
        </ul>
    </div>
</div>
<div class="container product-listing content-main ">

    <div class="row">

        <div id="content" class="col-md-9 col-sm-12 col-xs-12 fluid-sidebar">


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
                                                                    <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=116">
                                                                        <img class="lazyautosizes lazyloaded" data-sizes="auto" src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/2-270x270.jpg" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/2-270x270.jpg" alt="Buffalo cornedbee" sizes="119px">
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
                                                <div class="col col-sm-4 col-xs-6">
                                                    <div class="form-box">
                                                        <div class="item">
                                                            <div class="product-thumb transition">
                                                                <div class="image">
                                                                    <span class="bt-sale">-15%</span>
                                                                    <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;product_id=137">
                                                                        <img class="lazyautosizes lazyloaded" data-sizes="auto" src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/12-270x270.jpg" data-src="https://opencart.opencartworks.com/themes/so_megastore/layout2/image/cache/catalog/demo/product/digital/12-270x270.jpg" alt="Apple Cinema HD" sizes="119px">
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


            <div class="products-category clearfix">


                <h3 class="title-category ">{{$alimentos[0]->nombre_categoria}}</h3>




                <div class="products-list row nopadding-xs so-filter-gird">

    

                    @foreach($alimentos as $alimento)


                    <div class="product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item-container">
                            <div class="left-block">

                                <div class="product-image-container">

                                    <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=product/product&amp;path=25&amp;product_id=69 " title="Yutculpa ullamco ">

                                        <img src="{{$alimento->fotografia_miniatura}}" title="Yutculpa ullamco" class="img-responsive" id="product-image-69">

                                    </a>
                                </div>

                                <div class="button-group cartinfo--left">

                                    <a href="/detalle_producto?producto={{$alimento->id_alimento}}" class="addToCart btn-button"  title="Agregar al carrito" ><i class="fa fa-shopping-basket"></i></a>

                                    <a href="/detalle_producto?producto={{$alimento->id_alimento}}" class="wishlist btn-button"  title="Agregar a favoritos" ><i class="fa fa-heart"></i></a>

                                </div>
                            </div>

                            <div class="right-block">


                                <h4><a href="/detalle_producto?producto={{$alimento->id_alimento}}">{{$alimento->nombre_alimento}} </a></h4>
                                <div class="rate-history">

                                </div>



                                <div class="price">

                                    <span class="price-new">${{$alimento->precio}} </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

                <div class="product-filter product-filter-bottom filters-panel">
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">Showing 1 to 13 of 13 (1 Pages)</div>
                    </div>
                </div>

                <script type="text/javascript">
                    <!--
                    reinitView();

                    function reinitView() {

                        $('.product-card__gallery .item-img').hover(function() {
                            $(this).addClass('thumb-active').siblings().removeClass('thumb-active');
                            var thumb_src = $(this).attr("data-src");
                            $(this).closest('.product-item-container').find('img.img-responsive').attr("src", thumb_src);
                        });

                        $('.view-mode .list-view button').bind("click", function() {
                            $(this).parent().find('button').removeClass('active');
                            $(this).addClass('active');
                        });
                        // Product List
                        $('#list-view').click(function() {
                            $('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');
                            localStorage.setItem('listview', 'list');
                        });

                        // Product Grid
                        $('#grid-view').click(function() {
                            var cols = $('.left_column , .right_column ').length;


                            $('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');

                            localStorage.setItem('listview', 'grid');
                        });

                        // Product Grid 2
                        $('#grid-view-2').click(function() {
                            $('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');
                            localStorage.setItem('listview', 'grid-2');
                        });

                        // Product Grid 3
                        $('#grid-view-3').click(function() {
                            $('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');
                            localStorage.setItem('listview', 'grid-3');
                        });

                        // Product Grid 4
                        $('#grid-view-4').click(function() {
                            $('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');
                            localStorage.setItem('listview', 'grid-4');
                        });

                        // Product Grid 5
                        $('#grid-view-5').click(function() {
                            $('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');
                            localStorage.setItem('listview', 'grid-5');
                        });

                        // Product Table
                        $('#table-view').click(function() {
                            $('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');
                            localStorage.setItem('listview', 'table');
                        })


                        if (localStorage.getItem('listview') == null) localStorage.setItem('listview', 'grid-4');

                        if (localStorage.getItem('listview') == 'table') {
                            $('#table-view').trigger('click');
                        } else if (localStorage.getItem('listview') == 'grid-2') {
                            $('#grid-view-2').trigger('click');
                        } else if (localStorage.getItem('listview') == 'grid-3') {
                            $('#grid-view-3').trigger('click');
                        } else if (localStorage.getItem('listview') == 'grid-4') {
                            $('#grid-view-4').trigger('click');
                        } else if (localStorage.getItem('listview') == 'grid-5') {
                            $('#grid-view-5').trigger('click');
                        } else {
                            $('#list-view').trigger('click');
                        }


                    }

                    //

                    -->
                </script>




            </div>
        </div>

        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module so_filter_wrap block-shopby">
                <h3 class="modtitle">SHOP BY</h3>

                <div class="modcontent">
                    <ul data-product_id="137,80,114,84,120,116,73,59,52,82,78,75,69">
                        <li class="so-filter-options" data-option="search">
                            <div class="so-filter-heading">
                                <div class="so-filter-heading-text">
                                    <span>Search</span>
                                </div>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="so-filter-content-opts">
                                <div class="so-filter-content-opts-container">
                                    <div class="so-filter-option" data-type="search">
                                        <div class="so-option-container">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="text_search" id="text_search" value="">
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


        <script type="text/javascript">
            <!--
            $(window).load(sidebar_sticky_update);
            $(window).resize(sidebar_sticky_update);

            function sidebar_sticky_update() {
                var viewportWidth = $(window).width();
                if (viewportWidth > 1200) {
                    // Initialize the sticky scrolling on an item 
                    sidebar_sticky = 'disable';

                    if (sidebar_sticky == 'left') {
                        $(".left_column").stick_in_parent({
                            offset_top: 10,
                            bottoming: true
                        });
                    } else if (sidebar_sticky == 'right') {
                        $(".right_column").stick_in_parent({
                            offset_top: 10,
                            bottoming: true
                        });
                    } else if (sidebar_sticky == 'all') {
                        $(".content-aside").stick_in_parent({
                            offset_top: 10,
                            bottoming: true
                        });
                    }
                }
            }


            //

            -->
        </script>

    </div>
</div>
@stop
