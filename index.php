<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones= new Clases\PublicFunction();
$template->set("title", "Admin");
$template->set("description", "Admin");
$template->set("keywords", "Inicio");
$template->set("favicon", LOGO);
$template->themeInit();
//
$productos = new Clases\Productos();
$imagenes = new Clases\Imagenes();
$categorias = new Clases\Categorias();
$banners = new Clases\Banner();
//
$categoriasData = $categorias->list('');
$banDataSide = $banners->list("Side");
//
?>
 <!-- CONTENT -->
 <div id="sns_content" class="wrap layout-m">
                <div class="container">
                    <div class="row">
                        <!-- sns_left -->
                        <div id="sns_left" class="col-md-3">
                            <div class="wrap-in">
                                <div class="block block-blog-inner">
                                    <div class="block-content">
                                        <div class="menu-categories">
                                            <div class="block-title">
                                                <strong>Todas las categorias</strong>
                                            </div>
                                            <ul>
                                                <?php
                                                $nro = 1;
                                                foreach ($categoriasData as $catList) {
                                                ?>
                                                    <li><span><?=$nro?></span><a href="#"><?=$catList['titulo']?></a></li>
                                                <?php
                                                    $nro++;
                                                } 
                                                //<li><span>1</span><a href="#">Sofas & Couches</a></li>
                                                //<li><span>2</span><a href="#">Living Room Furniture</a></li>
                                                //<li><span>3</span><a href="#">Television Stands</a></li>
                                                //<li><span>4</span><a href="#">Bedroom Furniture</a></li>
                                                //<li><span>5</span><a href="#">Coffee Tables</a></li>
                                                //<li><span>6</span><a href="#">Kitchen & Dining Room</a></li>
                                                //<li><span>7</span><a href="#">Chests of Drawers</a></li>
                                                //<li><span>8</span><a href="#">Ottomans</a></li>
                                                //<li><span>9</span><a href="#">Kids' Furniture & Decor</a></li>
                                                //<li><span>10</span><a href="#">Media Storage</a></li>
                                                ?>
                                                
                                            </ul>
                                            <p>
                                                <span class="title">more categories</span>
                                                <i class="fa fa-angle-down"></i>
                                            </p>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div id="sns_lider1143" class="block sns-slider sns-deals">
                                    <div class="slider-inner">
                                        <div class="module-title">
                                            <div class="block-title">
                                                <strong>Deal of day</strong>
                                            </div>
                                        </div>
                                        <div class="deals_content">
                                            <div id="pproducts_deals" class="products-grid owl-carousel owl-theme owl-responsive--1 owl-loaded">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a href="detail.html" title="Simple product 05" class="product-image have-additional">
                                                                    <img src="<?=URL?>/assets/images/products/4.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="click_count">
                                                                <div class="deals-time">365 DAYS : 24: 60 : 25</div>
                                                                <a href="#">Click Here</a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="custom-info">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Simple product 05">Modular Modern</a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <p class="old-price">
                                                                                    <span class="price">$ 540.00</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>  

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a href="detail.html" title="Simple product 05" class="product-image have-additional">
                                                                    <img src="<?=URL?>/assets/images/products/6.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="click_count">
                                                                <div class="deals-time">365 DAYS : 24: 60 : 25</div>
                                                                <a href="#">Click Here</a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="custom-info">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Simple product 05">Modular Modern</a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <p class="old-price">
                                                                                    <span class="price">$ 540.00</span>
                                                                                </p>
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

                                <!-- Banner 270x350 -->
                                <?php
                                if (count($banDataSide)!=''){
                                    $banRandSide = $banDataSide[array_rand($banDataSide)];
                                    $imagenes->set("codigo",$banRandSide['cod']);
                                    $imgRandSide = $imagenes->view();
                                    $banners->set("id",$banRandSide['id']);
                                    $value=$banRandSide['vistas']+1;
                                    $banners->set("vistas",$value);
                                    $banners->increaseViews();
                                ?>
                                    <div class="block banner_left2 block_cat">
                                    <a class="banner5" href="<?= $banRandSide['link'] ?>">
                                        <img src="<?=URL. '/' . $imgRandSide['ruta'] ?>" alt="<?= $banRandSide['nombre']?>">
                                    </a>
                                </div>
                                <?php
                                }
                                ?>
                                <!-- EndBanner -->

                                <div class="block bestsale">
                                    <div class="title">
                                        <h3>best sell</h3>
                                    </div>
                                    <div class="content">
                                        <div id="products_slider12" class="products-slider12 owl-carousel owl-theme" style="display: inline-block">
                                            <div class="item-row">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/10.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/12.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/13.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-row">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/14.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/15.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/16.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-row">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/20.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/21.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
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

                                <div class="block sns-latestblog">
                                    <div class="block-title">
                                        <h3>LATEST POSTS</h3>
                                    </div>
                                    <div class="content">
                                        <div id="latestblog1333" class=" slider-left9  latestblog-content owl-carousel owl-theme owl-loaded" style="display: inline-block">
                                            <div class="item banner5">
                                                <img alt="" src="<?=URL?>/assets/images/page2/blog-page2.jpg">
                                                <div class="blog-page">
                                                    <div class="blog-left">
                                                        <p class="text1">08</p>
                                                        <p class="text2">JAN</p>
                                                    </div>
                                                    <div class="blog-right">
                                                        <p class="style1">
                                                            <a href="blog-detail.html">Chair furnitured</a>
                                                        </p>
                                                        <p class="style2">Lorem Ipsum has been the industry's </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item banner5">
                                                <img alt="" src="<?=URL?>/assets/images/blog/blog5.jpg">
                                                <div class="blog-page">
                                                    <div class="blog-left">
                                                        <p class="text1">08</p>
                                                        <p class="text2">JAN</p>
                                                    </div>
                                                    <div class="blog-right">
                                                        <p class="style1">
                                                            <a href="blog-detail.html">Chair furnitured</a>
                                                        </p>
                                                        <p class="style2">Lorem Ipsum has been the industry's </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="sns_testimonial" class="block sns_testimonial style_v2">
                                    <div class="block-title">
                                        <strong>testimonial</strong>
                                    </div>
                                    <div class="block_content">
                                        <div class="testimonials_slider_in">
                                            <div id="our_testimonials1" class="slider-left9 our_testimonials owl-carousel owl-theme owl-center owl-loaded">
                                                <div class="wrap">
                                                    <div class="content">
                                                        <div class="info">
                                                            <p>“ Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard ”</p>
                                                        </div>

                                                        <div class="tes-info">
                                                            <div class="name">
                                                                <span class="user">Tommy</span>
                                                                <span class="position">- SEO of asintech</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap">
                                                    <div class="content">
                                                        <div class="info">
                                                            <p>“ Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard ”</p>
                                                        </div>

                                                        <div class="tes-info">
                                                            <div class="name">
                                                                <span class="user">Tommy</span>
                                                                <span class="position">- SEO of asintech</span>
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
                        <!-- sns_main -->
                        <div id="sns_main" class="col-md-9 col-main">
                            <div id="sns_mainmidle">
                                <div id="sns_slideshow2">
                                    <div id="header-slideshow">
                                        <div class="row">
                                            <div class="slideshows col-md-8 col-sm-8">
                                                <div id="slider123" class="owl-carousel owl-theme" style="overflow: hidden;">
                                                    <div class="item style1">
                                                        <img src="<?=URL?>/assets/images/sildeshow/slideshow1.jpg" alt="">
                                                    </div>
                                                    <div class="item style2">
                                                        <img src="<?=URL?>/assets/images/sildeshow/slideshow2.jpg" alt="">
                                                    </div>
                                                    <div class="item style3">
                                                        <img src="<?=URL?>/assets/images/sildeshow/slideshow3.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Banner -->
                                            <?php 
                                            if (count($banDataSide)!='') {
                                                if (($key = array_search($banRandSide, $banDataSide)) !== false) {
                                                    unset($banDataSide[$key]);
                                                }
                                                if (count($banDataSide)!='') {
                                                    $banRand2Side = $banDataSide[array_rand($banDataSide)];
                                                    if (($key = array_search($banRand2Side, $banDataSide)) !== false) {
                                                        unset($banDataSide[$key]);
                                                    }
                                                    $imagenes->set("codigo",$banRand2Side['cod']);
                                                    $imgRand2Side = $imagenes->view();
                                                    $banners->set("id",$banRand2Side['id']);
                                                    $value2=$banRand2Side['vistas']+1;
                                                    $banners->set("vistas",$value2);
                                                    $banners->increaseViews(); 
                                                ?>
                                                <div class="banner-right col-md-4 col-sm-4">
                                                 <div class="banner6 pdno col-md-12 col-sm-12">
                                                        <!-- 270x257 -->
                                                        <div class="banner7 banner6  banner5 col-md-12 col-sm-12">
                                                            <a href="<?= $banRand2Side['link'] ?>">
                                                                <img src="<?=URL. '/' . $imgRand2Side['ruta'] ?>" alt="<?= $banRand2Side['nombre']?>">
                                                            </a>
                                                        </div>
                                                        <?php
                                                         if (count($banDataSide)!='') {
                                                            $banRand3Side = $banDataSide[array_rand($banDataSide)];
                                                            $imagenes->set("codigo",$banRand3Side['cod']);
                                                            $imgRand3Side = $imagenes->view();
                                                            $banners->set("id",$banRand3Side['id']);
                                                            $value3=$banRand3Side['vistas']+1;
                                                            $banners->set("vistas",$value3);
                                                            $banners->increaseViews(); 
                                                        ?><!-- 270x257 -->
                                                            <div class="banner8 banner6  banner5 col-md-12 col-sm-12">
                                                            <a href="<?= $banRand3Side['link'] ?>">
                                                                <img src="<?=URL. '/' . $imgRand3Side['ruta'] ?>" alt="<?= $banRand3Side['nombre']?>">
                                                            </a>
                                                        </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <?php 
                                                }
                                                ?>
                                                <?php   
                                            }
                                            ?>
                                            <?php /* <div class="banner-right col-md-4 col-sm-4">
                                                 <div class="banner6 pdno col-md-12 col-sm-12">
                                                         <!-- 270x257 -->
                                                         <div class="banner7 banner6  banner5 col-md-12 col-sm-12">
                                                             <a href="#">
                                                                 <img src="<?=URL?>/assets/images/sildeshow/banner3.jpg" alt="">
                                                             </a>
                                                         </div>
                                                         <!-- 270x257 -->
                                                         <div class="banner8 banner6  banner5 col-md-12 col-sm-12">
                                                             <a href="#">
                                                                 <img src="<?=URL?>/assets/images/page2/slideshow222.jpg" alt="">
                                                             </a>
                                                         </div>
                                                     </div>
                                                </div>*/?>
                                            <!-- End Banner -->
                                        </div>
                                    </div>
                                </div>



                                <div id="sns_producttaps1" class="sns_producttaps_wraps">
                                    <h3 class="precar">SOFAS</h3>
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#chair" aria-controls="chair" role="tab" data-toggle="tab">Chair</a></li>
                                    <li role="presentation"><a href="#table" aria-controls="table" role="tab" data-toggle="tab">table</a></li>
                                    <li role="presentation"><a href="#ourdoor" aria-controls="ourdoor" role="tab" data-toggle="tab">our door</a></li>
                                    <li role="presentation"><a href="#furniture" aria-controls="furniture" role="tab" data-toggle="tab">furniture</a></li>
                                    <li role="presentation"><a href="#kitchen" aria-controls="kitchen" role="tab" data-toggle="tab">kitchen</a></li>
                                    <li role="presentation"><a href="#livingroom" aria-controls="livingroom" role="tab" data-toggle="tab">living room</a></li>
                                  </ul>

                                      <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div class="content-loading"></div>
                                    <div role="tabpanel" class="tab-pane active" id="chair">
                                        <div  class="taps-slider1 products-grid row style_grid owl-carousel owl-theme owl-loaded">
                                            <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="table">
                                        <div  class="taps-slider1 products-grid row style_grid owl-carousel owl-theme owl-loaded">
                                            <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/30.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/29.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/28.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/26.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/25.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/24.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/23.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/21.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/30.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/29.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/28.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/26.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/25.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/24.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/23.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/21.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="ourdoor">
                                        <div  class="taps-slider1 products-grid row style_grid owl-carousel owl-theme owl-loaded">
                                            <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="furniture">
                                        <div  class="taps-slider1 products-grid row style_grid owl-carousel owl-theme owl-loaded">
                                            <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="kitchen">
                                        <div  class="taps-slider1 products-grid row style_grid owl-carousel owl-theme owl-loaded">
                                            <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="livingroom">
                                        <div  class="taps-slider1 products-grid row style_grid owl-carousel owl-theme owl-loaded">
                                            <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="taps-slider">
                                                <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/7.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/8.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/9.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/20.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                            <span class="price2">$ 600.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/32.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                                     <div class="item-inner">
                                                         <div class="prd">
                                                             <div class="item-img clearfix">
                                                                 <div class="ico-label"></div>
                                                                 <a class="product-image have-additional"
                                                                    title="Modular Modern"
                                                                    href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="<?=URL?>/assets/images/products/33.jpg" alt="">
                                                                    </span>
                                                                 </a>
                                                             </div>
                                                             <div class="item-info">
                                                                 <div class="info-inner">
                                                                     <div class="item-title">
                                                                         <a title="Modular Modern"
                                                                            href="detail.html">
                                                                             Modular Modern </a>
                                                                     </div>
                                                                     <div class="item-price">
                                                                         <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="action-bot">
                                                                 <div class="wrap-addtocart">
                                                                     <button class="btn-cart"
                                                                             title="Add to Cart">
                                                                         <i class="fa fa-shopping-cart"></i>
                                                                         <span>Add to Cart</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="actions">
                                                                     <ul class="add-to-links">
                                                                         <li>
                                                                             <a class="link-wishlist"
                                                                                href="#"
                                                                                title="Add to Wishlist">
                                                                                 <i class="fa fa-heart"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li>
                                                                             <a class="link-compare"
                                                                                href="#"
                                                                                title="Add to Compare">
                                                                                 <i class="fa fa-random"></i>
                                                                             </a>
                                                                         </li>
                                                                         <li class="wrap-quickview" data-id="qv_item_7">
                                                                             <div class="quickview-wrap">
                                                                                 <a class="sns-btn-quickview qv_btn"
                                                                                    href="#">
                                                                                     <i class="fa fa-eye"></i>
                                                                                 </a>
                                                                             </div>
                                                                         </li>
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

                                <!-- Banner 870x110 -->
                                <div class="sns_banner_page2">
                                    <div class="banner5">
                                        <a href="#">
                                            <img src="<?=URL?>/assets/images/page2/banner1-page2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                 <!-- EndBanner -->


                                <div id="sns_slider1_page2" class="sns-slider-wraps sns_producttaps_wraps">
                                    <h3 class="precar">office chair</h3>
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#chair1" aria-controls="chair1" role="tab" data-toggle="tab">furniture</a></li>
                                    <li role="presentation"><a href="#table1" aria-controls="table1" role="tab" data-toggle="tab">kitchen</a></li>
                                    <li role="presentation"><a href="#ourdoor1" aria-controls="ourdoor1" role="tab" data-toggle="tab">living room</a></li>
                                  </ul>

                                      <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div class="content-loading"></div>
                                    <div role="tabpanel" class="tab-pane active" id="chair1">
                                          <div class="detai-products1">
                                            <div class="products-grid">
                                                <div  class="sns-slider-page1 item-row owl-carousel owl-theme" style="display: inline-block">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/16.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
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

                                    <div role="tabpanel" class="tab-pane" id="table1">
                                       <div class="detai-products1">
                                            <div class="products-grid">
                                                <div  class="sns-slider-page1 item-row owl-carousel owl-theme" style="display: inline-block">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/29.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
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

                                    <div role="tabpanel" class="tab-pane" id="ourdoor1">
                                        <div class="detai-products1">
                                            <div class="products-grid">
                                                <div  class="sns-slider-page1 item-row owl-carousel owl-theme" style="display: inline-block">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/9.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
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

                                <!-- Banner 425x110 -->
                                <div class="sns_banner1">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="banner-content banner5">
                                                <a href="#">
                                                    <img src="<?=URL?>/assets/images/page2/banner2-page2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                             <div class="banner-content banner5 style-banner2">
                                                <a href="#">
                                                    <img src="<?=URL?>/assets/images/page2/banner3-page2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Banner 870x110 -->


                                <div id="sns_slider2_page2" class="sns-slider-wraps sns_producttaps_wraps">
                                    <h3 class="precar">office chair</h3>
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#chair2" aria-controls="chair2" role="tab" data-toggle="tab">furniture</a></li>
                                    <li role="presentation"><a href="#table2" aria-controls="table2" role="tab" data-toggle="tab">kitchen</a></li>
                                    <li role="presentation"><a href="#ourdoor2" aria-controls="ourdoor2" role="tab" data-toggle="tab">living room</a></li>
                                  </ul>

                                      <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div class="content-loading"></div>
                                    <div role="tabpanel" class="tab-pane active" id="chair2">
                                          <div class="detai-products1">
                                            <div class="products-grid">
                                                <div  class="sns-slider-page1 item-row owl-carousel owl-theme" style="display: inline-block">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/16.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
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

                                    <div role="tabpanel" class="tab-pane" id="table2">
                                       <div class="detai-products1">
                                            <div class="products-grid">
                                                <div  class="sns-slider-page1 item-row owl-carousel owl-theme" style="display: inline-block">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/29.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
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

                                    <div role="tabpanel" class="tab-pane" id="ourdoor2">
                                        <div class="detai-products1">
                                            <div class="products-grid">
                                                <div  class=" sns-slider-page1 item-row owl-carousel owl-theme" style="display: inline-block">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/9.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
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

                                <!-- Banner 425x110 -->
                                <div class="sns_banner2">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="banner-content banner5">
                                                <a href="#">
                                                    <img src="<?=URL?>/assets/images/page2/banner4-page2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                             <div class="banner-content banner5 style-banner2">
                                                <a href="#">
                                                    <img src="<?=URL?>/assets/images/page2/banner5-page2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Banner 425x110 -->
                                <div id="sns_slider3_page2" class="sns-slider-wraps sns_producttaps_wraps">
                                    <h3 class="precar">office chair</h3>
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#chair3" aria-controls="chair3" role="tab" data-toggle="tab">furniture</a></li>
                                    <li role="presentation"><a href="#table3" aria-controls="table3" role="tab" data-toggle="tab">kitchen</a></li>
                                    <li role="presentation"><a href="#ourdoor3" aria-controls="ourdoor3" role="tab" data-toggle="tab">living room</a></li>
                                  </ul>

                                      <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div class="content-loading"></div>
                                    <div role="tabpanel" class="tab-pane active" id="chair3">
                                          <div class="detai-products1">
                                            <div class="products-grid">
                                                <div  class="sns-slider-page1 item-row owl-carousel owl-theme" style="display: inline-block">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/16.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
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

                                    <div role="tabpanel" class="tab-pane" id="table3">
                                       <div class="detai-products1">
                                            <div class="products-grid">
                                                <div  class="sns-slider-page1 item-row owl-carousel owl-theme" style="display: inline-block">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/29.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
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

                                    <div role="tabpanel" class="tab-pane" id="ourdoor3">
                                        <div class="detai-products1">
                                            <div class="products-grid">
                                                <div  class=" sns-slider-page1 item-row owl-carousel owl-theme" style="display: inline-block">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/9.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                        <span class="ico-product ico-sale">Sale</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <div class="ico-label">
                                                                        <span class="ico-product ico-new">New</span>
                                                                    </div>
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="prd">
                                                                <div class="item-img clearfix">
                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                        <span class="img-main">
                                                                            <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <span class="regular-price">
                                                                                    <span class="price">
                                                                                        <span class="price1">$ 540.00</span>
                                                                                        <span class="price2">$ 600.00</span>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="action-bot">
                                                                    <div class="wrap-addtocart">
                                                                        <button class="btn-cart" title="Add to Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <ul class="add-to-links">
                                                                            <li>
                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                    <i class="fa fa-heart"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link-compare" title="Add to Compare" href="#">
                                                                                    <i class="fa fa-random"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                                <div class="quickview-wrap">
                                                                                    <a class="sns-btn-quickview qv_btn" href="#">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
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
                        </div>
                    </div>

                    <div class="row bottom">

                        <div class="col-md-12"> 
                            <!-- Banner 570x110 -->
                            <div class="sns_banner3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="banner-content banner5">
                                            <a href="#">
                                                <img src="<?=URL?>/assets/images/page2/banner6-page2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                         <div class="banner-content banner5 style-banner2">
                                            <a href="#">
                                                <img src="<?=URL?>/assets/images/page2/banner6-page7.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <!-- Banner 570x110 -->
                            <div id="sns_suggest12" class="sns_suggest">
                                <div class="block-title">
                                    <h3>suggest collection</h3>
                                    <i class="fa fa-align-justify"></i>
                                </div>
                                <div class="suggest-content">
                                    <div class="suggest-item">
                                        <img src="<?=URL?>/assets/images/products/21.jpg" alt="">
                                        <div class="title"><a href="#">Office chair</a></div>
                                    </div>
                                    <div class="suggest-item">
                                        <img src="<?=URL?>/assets/images/products/22.jpg" alt="">
                                        <div class="title"><a href="#">Lorem Ipsum is</a></div>
                                    </div>
                                    <div class="suggest-item">
                                        <img src="<?=URL?>/assets/images/products/23.jpg" alt="">
                                        <div class="title"><a href="#">Outdoor table</a></div>
                                    </div>
                                    <div class="suggest-item">
                                        <img src="<?=URL?>/assets/images/products/24.jpg" alt="">
                                        <div class="title"><a href="#">Coffee chair</a></div>
                                    </div>
                                    <div class="suggest-item">
                                        <img src="<?=URL?>/assets/images/products/25.jpg" alt="">
                                        <div class="title"><a href="#">Good chair</a></div>
                                    </div>
                                    <div class="suggest-item">
                                        <img src="<?=URL?>/assets/images/products/26.jpg" alt="">
                                        <div class="title"><a href="#">Leather Sofa</a></div>
                                    </div>
                                    <div class="suggest-item">
                                        <img src="<?=URL?>/assets/images/products/27.jpg" alt="">
                                        <div class="title"><a href="#">Office chair</a></div>
                                    </div>
                                    <div class="suggest-item">
                                        <img src="<?=URL?>/assets/images/products/28.jpg" alt="">
                                        <div class="title"><a href="#">Computer chair</a></div>
                                    </div>
                                    <div class="suggest-item">
                                        <img src="<?=URL?>/assets/images/products/29.jpg" alt="">
                                        <div class="title"><a href="#">Office chair</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="products-upsell products-index">
                                    <div class="detai-products1">
                                        <div class="products-grid">
                                            <div id="product_index" class="item-row owl-carousel owl-theme" style="display: inline-block">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <div class="ico-label">
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/16.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-bot">
                                                                <div class="wrap-addtocart">
                                                                    <button class="btn-cart" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </div>
                                                                <div class="actions">
                                                                    <ul class="add-to-links">
                                                                        <li>
                                                                            <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                <i class="fa fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="link-compare" title="Add to Compare" href="#">
                                                                                <i class="fa fa-random"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="wrap-quickview" data-id="qv_item_7">
                                                                            <div class="quickview-wrap">
                                                                                <a class="sns-btn-quickview qv_btn" href="#">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                    <span class="ico-product ico-sale">Sale</span>
                                                                </div>
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/17.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-bot">
                                                                <div class="wrap-addtocart">
                                                                    <button class="btn-cart" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </div>
                                                                <div class="actions">
                                                                    <ul class="add-to-links">
                                                                        <li>
                                                                            <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                <i class="fa fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="link-compare" title="Add to Compare" href="#">
                                                                                <i class="fa fa-random"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="wrap-quickview" data-id="qv_item_7">
                                                                            <div class="quickview-wrap">
                                                                                <a class="sns-btn-quickview qv_btn" href="#">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/18.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                    <span class="price2">$ 600.00</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-bot">
                                                                <div class="wrap-addtocart">
                                                                    <button class="btn-cart" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </div>
                                                                <div class="actions">
                                                                    <ul class="add-to-links">
                                                                        <li>
                                                                            <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                <i class="fa fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="link-compare" title="Add to Compare" href="#">
                                                                                <i class="fa fa-random"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="wrap-quickview" data-id="qv_item_7">
                                                                            <div class="quickview-wrap">
                                                                                <a class="sns-btn-quickview qv_btn" href="#">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <div class="ico-label">
                                                                    <span class="ico-product ico-new">New</span>
                                                                </div>
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/19.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-bot">
                                                                <div class="wrap-addtocart">
                                                                    <button class="btn-cart" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </div>
                                                                <div class="actions">
                                                                    <ul class="add-to-links">
                                                                        <li>
                                                                            <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                <i class="fa fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="link-compare" title="Add to Compare" href="#">
                                                                                <i class="fa fa-random"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="wrap-quickview" data-id="qv_item_7">
                                                                            <div class="quickview-wrap">
                                                                                <a class="sns-btn-quickview qv_btn" href="#">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="prd">
                                                            <div class="item-img clearfix">
                                                                <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="<?=URL?>/assets/images/products/11.jpg">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-bot">
                                                                <div class="wrap-addtocart">
                                                                    <button class="btn-cart" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </div>
                                                                <div class="actions">
                                                                    <ul class="add-to-links">
                                                                        <li>
                                                                            <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                                <i class="fa fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="link-compare" title="Add to Compare" href="#">
                                                                                <i class="fa fa-random"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="wrap-quickview" data-id="qv_item_7">
                                                                            <div class="quickview-wrap">
                                                                                <a class="sns-btn-quickview qv_btn" href="#">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </a>
                                                                            </div>
                                                                        </li>
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
            </div>
            <!-- AND CONTENT -->

<?php
$template->themeEnd();
?>