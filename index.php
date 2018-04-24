<?php
include 'header.php';
?>


<!-- banner -->
<div class="col-xs-12">
    <p><?php echo $_SESSION['kullanici_mail']?></p>
</div>
<div class="banner">
    <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
        <!-- Wrapper-for-Slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active"><!-- First-Slide -->
                <img src="images/5.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated flipInX">%50  <span> </span></h3>
                    <h4 data-animation="animated flipInX">Hemen Sipariş ver ve İndirimi Kap</h4>
                </div>
            </div>
            <div class="item"> <!-- Second-Slide -->
                <img src="images/8.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated fadeInDown">En son fırsatlar</h3>
                    <h4 data-animation="animated fadeInUp">Burada</h4>
                </div>
            </div>
            <div class="item"><!-- Third-Slide -->
                <img src="images/3.jpg" alt="" class="img-responsive"/>
                <div class="carousel-caption kb_caption kb_caption_center">
                    <h3 data-animation="animated fadeInLeft">LIMOS ayrıcalığı</h3>
                    <h4 data-animation="animated flipInX">Burada</h4>
                </div>
            </div>
        </div>
        <!-- Left-Button -->
        <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
            <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <!-- Right-Button -->
        <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
            <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <script src="js/custom.js"></script>
</div>
<!-- //banner -->
<!-- welcome -->
<div class="welcome" >
    <div class="container">
        <div class="welcome-info">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class=" nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" >
                            <img src="images/corba.png" aria-hidden="true">
                            <h5>Çorba</h5>
                        </a></li>
                    <li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab">
                            <img src="images/aperatif.png" aria-hidden="true">
                            <h5>Aperatif</h5>
                        </a></li>
                    <li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab">
                            <img src="images/anayemek.png" aria-hidden="true">
                            <h5>Ana Yemek</h5>
                        </a></li>
                    <li role="presentation"><a href="#decor" role="tab" id="decor-tab" data-toggle="tab">
                            <img src="images/pilav.png" aria-hidden="true">
                            <h5>Yan</h5>
                        </a></li>
                    <li role="presentation"><a href="#sports" role="tab" id="sports-tab" data-toggle="tab">
                            <img src="images/tatli.png" aria-hidden="true">
                            <h5>Tatlı</h5>
                        </a></li>
                    <li role="presentation"><a href="#sports" role="tab" id="sports-tab" data-toggle="tab">
                            <img src="images/tatli.png" aria-hidden="true">
                            <h5>İçecek</h5>
                        </a></li>
                </ul>
                <div class="clearfix"> </div>
                <h3 class="w3ls-title" style="margin-top: 30px;">Önerilen Ürünler</h3>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="tabcontent-grids">
                            <div id="owl-demo" class="owl-carousel">
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">

                                        <a href="urunDetay.php"><img src="images/e1.png" alt="img"></a>
                                        <div class="agileits-w3layouts">
                                            <h4><a href="urunDetay.php">Mercimek Çorba</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$100</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Audio speaker" />
                                                <input type="hidden" name="amount" value="100.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>Sale</h6></div>
                                        <a href="products.html"><img src="images/e2.png" alt="img"></a>
                                        <div class="agileits-w3layouts">
                                            <h4><a href="urunDetay.php">Tarhana Çorba</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$300</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Refrigerator" />
                                                <input type="hidden" name="amount" value="300.00"/>
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="products.html"><img src="images/e3.png" alt="img"></a>
                                        <div class="agileits-w3layouts">
                                            <h4><a href="urunDetay.php">Domates Çorba</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$70</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                                <input type="hidden" name="amount" value="70.00"/>
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products.html"><img src="images/e4.png" alt="img"></a>
                                        <div class="agileits-w3layouts">
                                            <h4><a href="urunDetay.php">Domates Çorba</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$80</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Digital Camera"/>
                                                <input type="hidden" name="amount" value="80.00"/>
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products.html"><img src="images/e1.png" alt="img"></a>
                                        <div class="agileits-w3layouts">
                                            <h4><a href="urunDetay.php">Patates Çorba</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$100</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Audio speaker" />
                                                <input type="hidden" name="amount" value="100.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>Sale</h6></div>
                                        <a href="products.html"><img src="images/e2.png" alt="img"></a>
                                        <div class="agileits-w3layouts">
                                            <h4><a href="urunDetay.php">Mantı Çorba</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$300</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Refrigerator" />
                                                <input type="hidden" name="amount" value="300.00"/>
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="products.html"><img src="images/e3.png" alt="img"></a>
                                        <div class="agileits-w3layouts">
                                            <h4><a href="urunDetay.php">Ezo çorba</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$70</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                                <input type="hidden" name="amount" value="70.00"/>
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products.html"><img src="images/e4.png" alt="img"></a>
                                        <div class="agileits-w3layouts">
                                            <h4><a href="urunDetay.php">Çorba çorbası</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$80</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Digital Camera"/>
                                                <input type="hidden" name="amount" value="80.00"/>
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
                        <div class="tabcontent-grids">
                            <script>
                                $(document).ready(function() {
                                    $("#owl-demo1").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items :4,
                                        itemsDesktop : [640,5],
                                        itemsDesktopSmall : [414,4],
                                        navigation : true

                                    });

                                });
                            </script>
                            <div id="owl-demo1" class="owl-carousel">
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products1.html"><img src="images/f1.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products1.html">T Shirt</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$10</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="T Shirt" />
                                                <input type="hidden" name="amount" value="10.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>20% <br> Off</h6></div>
                                        <a href="products1.html"><img src="images/f2.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products1.html">Women Sandal</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$20</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                                <input type="hidden" name="amount" value="20.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products1.html"><img src="images/f3.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products1.html">Jewellery</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$60</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Jewellery" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="products1.html"><img src="images/f4.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products1.html">Party dress</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$15</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Party dress" />
                                                <input type="hidden" name="amount" value="15.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products1.html"><img src="images/f1.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products1.html">T Shirt</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$10</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="T Shirt" />
                                                <input type="hidden" name="amount" value="10.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>20% <br> Off</h6></div>
                                        <a href="products1.html"><img src="images/f2.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products1.html">Women Sandal</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$20</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                                <input type="hidden" name="amount" value="20.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products1.html"><img src="images/f3.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products1.html">Jewellery</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$60</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Jewellery" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="products1.html"><img src="images/f4.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products1.html">Party dress</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$15</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Party dress" />
                                                <input type="hidden" name="amount" value="15.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
                        <div class="tabcontent-grids">
                            <script>
                                $(document).ready(function() {
                                    $("#owl-demo2").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items :4,
                                        itemsDesktop : [640,5],
                                        itemsDesktopSmall : [414,4],
                                        navigation : true

                                    });

                                });
                            </script>
                            <div id="owl-demo2" class="owl-carousel">
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="products6.html"><img src="images/p1.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products6.html">Coffee Mug</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$14</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                                <input type="hidden" name="amount" value="14.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>20% <br> Off</h6></div>
                                        <a href="products6.html"><img src="images/p2.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products6.html">Teddy bear</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$20</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                                <input type="hidden" name="amount" value="20.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>Sale</h6></div>
                                        <a href="products6.html"><img src="images/p3.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products6.html">Chocolates</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$60</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Chocolates" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products6.html"><img src="images/p4.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products6.html">Gift Card</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$22</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Gift Card" />
                                                <input type="hidden" name="amount" value="22.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="products6.html"><img src="images/p1.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products6.html">Coffee Mug</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$14</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                                <input type="hidden" name="amount" value="14.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>20% <br> Off</h6></div>
                                        <a href="products6.html"><img src="images/p2.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products6.html">Teddy bear</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$20</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                                <input type="hidden" name="amount" value="20.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>Sale</h6></div>
                                        <a href="products6.html"><img src="images/p3.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products6.html">Chocolates</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$60</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Chocolates" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products6.html"><img src="images/p4.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products6.html">Gift Card</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$22</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Gift Card" />
                                                <input type="hidden" name="amount" value="22.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="decor" aria-labelledby="decor-tab">
                        <div class="tabcontent-grids">
                            <script>
                                $(document).ready(function() {
                                    $("#owl-demo3").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items :4,
                                        itemsDesktop : [640,5],
                                        itemsDesktopSmall : [414,4],
                                        navigation : true

                                    });

                                });
                            </script>
                            <div id="owl-demo3" class="owl-carousel">
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>Sale</h6></div>
                                        <a href="products3.html"><img src="images/h1.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products3.html">Wall Clock</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$80</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                <input type="hidden" name="amount" value="80.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>10%<br>Off</h6></div>
                                        <a href="products3.html"><img src="images/h2.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products3.html">Plants & Vases</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$40</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                <input type="hidden" name="amount" value="40.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products3.html"><img src="images/h3.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products3.html">Queen Size Bed</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$250</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                <input type="hidden" name="amount" value="250.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products3.html"><img src="images/h4.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products3.html">flower pot</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$30</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="flower pot" />
                                                <input type="hidden" name="amount" value="30.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>Sale</h6></div>
                                        <a href="products3.html"><img src="images/h1.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products3.html">Wall Clock</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$80</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                <input type="hidden" name="amount" value="80.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>10%<br>Off</h6></div>
                                        <a href="products3.html"><img src="images/h2.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products3.html">Plants & Vases</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$40</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                <input type="hidden" name="amount" value="40.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products3.html"><img src="images/h3.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products3.html">Queen Size Bed</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$250</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                <input type="hidden" name="amount" value="250.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products3.html"><img src="images/h4.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products3.html">flower pot</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$30</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="flower pot" />
                                                <input type="hidden" name="amount" value="30.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="sports" aria-labelledby="sports-tab">
                        <div class="tabcontent-grids">
                            <script>
                                $(document).ready(function() {
                                    $("#owl-demo4").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items :4,
                                        itemsDesktop : [640,5],
                                        itemsDesktopSmall : [414,4],
                                        navigation : true

                                    });
                                });
                            </script>
                            <div id="owl-demo4" class="owl-carousel">
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="products4.html"><img src="images/s1.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products4.html">Roller Skates</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$180</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Roller Skates"/>
                                                <input type="hidden" name="amount" value="180.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products4.html"><img src="images/s2.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products4.html">Football</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$70</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Football"/>
                                                <input type="hidden" name="amount" value="70.00"/>
                                                <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>20% <br>Off</h6></div>
                                        <a href="products4.html"><img src="images/s3.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products4.html">Nylon Shuttle</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$56</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                <input type="hidden" name="amount" value="56.00"/>
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products4.html"><img src="images/s4.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products4.html">Cricket Kit</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$80</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                <input type="hidden" name="amount" value="80.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="products4.html"><img src="images/s1.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products4.html">Roller Skates</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$180</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Roller Skates"/>
                                                <input type="hidden" name="amount" value="180.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products4.html"><img src="images/s2.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products4.html">Football</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$70</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Football"/>
                                                <input type="hidden" name="amount" value="70.00"/>
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>20% <br>Off</h6></div>
                                        <a href="products4.html"><img src="images/s3.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products4.html">Nylon Shuttle</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$56</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                <input type="hidden" name="amount" value="56.00"/>
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <a href="products4.html"><img src="images/s4.png" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="products4.html">Cricket Kit</a></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                            <h5>$80</h5>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                <input type="hidden" name="amount" value="80.00" />
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
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
<!-- //welcome -->
<!-- add-products -->
<div class="add-products">
    <div class="container">
        <div class="add-products-row">
            <div class="w3ls-add-grids">
                <a href="profil.php">
                    <h4>PROFİLİM</h4>
                    <h6><i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="w3ls-add-grids w3ls-add-grids-mdl">
                <a href="kategoriler.php">
                    <h4>KATEGORİLER</h4>
                    <h6><i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="w3ls-add-grids w3ls-add-grids-mdl1">
                <a href="valeCagir.php">
                    <h4>VALE ÇAĞIR <span> Hemen !</span></h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //add-products -->

<!-- son-hareketler -->
<hr>
<div id="exTab2" class="container col-lg-12 col-md-12 col-sm-12 " style="border: 4px solid #cccccc;">
    <ul class="nav nav-tabs" style="margin-bottom: 10px;">
        <li class="active">
            <a  href="#1" data-toggle="tab">Son Hareketler</a>
        </li>
        <li>
            <a href="#2" data-toggle="tab">Puan Durumu</a>
        </li>
        <li>
            <a href="#3" data-toggle="tab">Ne Yedim</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="1" ">
        <li style="list-style-type: none;">
            <div class="col-xs-12" style="border-bottom:1px solid #f1f1f1; margin-bottom: 10px; margin-top:10px; padding-bottom: 10px;">
                <div class="col-xs-4">
                    <img src="images/adam.jpg" width="88px;">

                </div>
                <div class="col-xs-6" >
                    <a href="profil.html">Mehmet Acar</a><br>
                    Sipariş verdi : Mercimek Çorbası <br>
                    2 dk önce

                </div>
            </div>
        </li>
        <li style="list-style-type: none;">
            <div class="col-xs-12" style="border-bottom:1px solid #f1f1f1; margin-bottom: 10px; margin-top: 10px; padding-bottom: 10px;">
                <div class="col-xs-4">
                    <img src="images/adam.jpg" width="88px;">

                </div>
                <div class="col-xs-6" >
                    <a href="profil.html">Mehmet Acar</a><br>
                    Sipariş verdi : Mercimek Çorbası <br>
                    2 dk önce

                </div>
            </div>
        </li>
        <li style="list-style-type: none;">
            <div class="col-xs-12" style="border-bottom:1px solid #f1f1f1; margin-bottom: 10px; margin-top: 10px; padding-bottom: 10px;">
                <div class="col-xs-4">
                    <img src="images/adam.jpg" width="88px;">

                </div>
                <div class="col-xs-6" >
                    <a href="profil.html">Mehmet Acar</a><br>
                    Sipariş verdi : Mercimek Çorbası <br>
                    2 dk önce

                </div>
            </div>
        </li>
    </div>

    <div class="tab-pane" id="2">
        <li style="list-style-type: none;">
            <div class="col-xs-12" style="border-bottom:1px solid #f1f1f1; margin-bottom: 10px; margin-top:10px; padding-bottom: 10px;">
                <div class="col-xs-2 ">
                    <p class="text-center" style="margin-top: 30px; background-color: #4dff03; color: black;">240</p>
                </div>
                <div class="col-xs-4">
                    <img src="images/adam.jpg" width="88px;">

                </div>
                <div class="col-xs-6" >
                    <a href="profil.html">Mehmet Acar</a><br>
                    Sipariş verdi : Mercimek Çorbası <br>
                    2 dk önce

                </div>
            </div>
        </li>
        <li style="list-style-type: none;">
            <div class="col-xs-12" style="border-bottom:1px solid #f1f1f1; margin-bottom: 10px; margin-top:10px; padding-bottom: 10px;">
                <div class="col-xs-2 ">
                    <p class="text-center" style="margin-top: 30px; background-color: #4dff03; color: black;">240</p>
                </div>
                <div class="col-xs-4">
                    <img src="images/adam.jpg" width="88px;">

                </div>
                <div class="col-xs-6" >
                    <a href="profil.html">Mehmet Acar</a><br>
                    Sipariş verdi : Mercimek Çorbası <br>
                    2 dk önce

                </div>
            </div>
        </li>
        <li style="list-style-type: none;">
            <div class="col-xs-12" style="border-bottom:1px solid #f1f1f1; margin-bottom: 10px; margin-top:10px; padding-bottom: 10px;">
                <div class="col-xs-2 ">
                    <p class="text-center" style="margin-top: 30px; background-color: #4dff03; color: black;">240</p>
                </div>
                <div class="col-xs-4">
                    <img src="images/adam.jpg" width="88px;">

                </div>
                <div class="col-xs-6" >
                    <a href="profil.html">Mehmet Acar</a><br>
                    Sipariş verdi : Mercimek Çorbası <br>
                    2 dk önce

                </div>
            </div>
        </li>
    </div>
    <div class="tab-pane" id="3">
        <li style="list-style-type: none;">
            <div class="col-xs-12" style="border-bottom:1px solid #f1f1f1; margin-bottom: 10px; margin-top:10px; padding-bottom: 10px;">
                <div class="col-xs-2 ">
                    <p class="text-center" style="margin-top: 30px; background-color: #4dff03; color: black;">240</p>
                </div>
                <div class="col-xs-4">
                    <img src="images/adam.jpg" width="88px;">

                </div>
                <div class="col-xs-6" >
                    <a href="profil.html">Mercimek Çorbası</a><br>
                    5 defa <br>
                </div>
            </div>
        </li>
        <li style="list-style-type: none;">
            <div class="col-xs-12" style="border-bottom:1px solid #f1f1f1; margin-bottom: 10px; margin-top:10px; padding-bottom: 10px;">
                <div class="col-xs-2 ">
                    <p class="text-center" style="margin-top: 30px; background-color: #4dff03; color: black;">240</p>
                </div>
                <div class="col-xs-4">
                    <img src="images/adam.jpg" width="88px;">

                </div>
                <div class="col-xs-6" >
                    <a href="profil.html">Mercimek Çorbası</a><br>
                    5 defa <br>
                </div>
            </div>
        </li>
        <li style="list-style-type: none;">
            <div class="col-xs-12" style="border-bottom:1px solid #f1f1f1; margin-bottom: 10px; margin-top:10px; padding-bottom: 10px;">
                <div class="col-xs-2 ">
                    <p class="text-center" style="margin-top: 30px; background-color: #4dff03; color: black;">240</p>
                </div>
                <div class="col-xs-4">
                    <img src="images/adam.jpg" width="88px;">

                </div>
                <div class="col-xs-6" >
                    <a href="profil.html">Mercimek Çorbası</a><br>
                    5 defa <br>
                </div>
            </div>
        </li>
    </div>
</div>
<hr></hr>

<!-- //son-hareketler -->

<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
                items[i].set('shipping', 0);
                items[i].set('shipping2', 0);
            }
        }
    });
</script>
<!-- //cart-js -->
<!-- countdown.js -->
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.throttle.js"></script>
<script src="js/jquery.classycountdown.js"></script>
<script>
    $(document).ready(function() {
        $('#countdown1').ClassyCountdown({
            end: '1388268325',
            now: '1387999995',
            labels: true,
            style: {
                element: "",
                textResponsive: .5,
                days: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#1abc9c",
                        lineCap: 'round'
                    },
                    textCSS: 'font-weight:300; color:#fff;'
                },
                hours: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#05BEF6",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                },
                minutes: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#8e44ad",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                },
                seconds: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#f39c12",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                }

            },
            onEndCallback: function() {
                console.log("Time out!");
            }
        });
    });
</script>
<!-- //countdown.js -->
<!-- menu js aim -->
<script src="js/jquery.menu-aim.js"> </script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<!-- //menu js aim -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>