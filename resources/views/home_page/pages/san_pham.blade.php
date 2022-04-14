@extends('home_page.master')

@section('content')
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="product.html">Shop</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<div class="main-shop-page pt-100 pb-100 ptb-sm-60">
    <div class="container">
        <!-- Row End -->
        <div class="row">
            <!-- Sidebar Shopping Option Start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="sidebar">
                    <!-- Sidebar Electronics Categorie Start -->
                    <div class="electronics mb-40">
                        <h3 class="sidebar-title">Electronics</h3>
                        <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                            <ul>
                                <li class="has-sub"><a href="#">Camera</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">Cords and Cables</a></li>
                                        <li><a href="shop.html">gps accessories</a></li>
                                        <li><a href="shop.html">Microphones</a></li>
                                        <li><a href="shop.html">Wireless Transmitters</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">gamepad</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">cube lifestyle hd</a></li>
                                        <li><a href="shop.html">gopro hero4</a></li>
                                        <li><a href="shop.html">bhandycam cx405ags</a></li>
                                        <li><a href="shop.html">vixia hf r600</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Digital Cameras</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">Gold eye</a></li>
                                        <li><a href="shop.html">Questek</a></li>
                                        <li><a href="shop.html">Snm</a></li>
                                        <li><a href="shop.html">vantech</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Virtual Reality</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">Samsung</a></li>
                                        <li><a href="shop.html">Toshiba</a></li>
                                        <li><a href="shop.html">Transcend</a></li>
                                        <li><a href="shop.html">Sandisk</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                            </ul>
                        </div>
                        <!-- category-menu-end -->
                    </div>
                    <!-- Sidebar Electronics Categorie End -->
                    <!-- Price Filter Options Start -->
                    <div class="search-filter mb-40">
                        <h3 class="sidebar-title">filter by price</h3>
                        <form action="#" class="sidbar-style">
                            <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 85%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 85%;"></span></div>
                            <input type="text" id="amount" class="amount-range" readonly="">
                        </form>
                    </div>
                    <!-- Price Filter Options End -->
                    <!-- Sidebar Categorie Start -->
                    <div class="sidebar-categorie mb-40">
                        <h3 class="sidebar-title">categories</h3>
                        <ul class="sidbar-style">
                            <li class="form-check">
                                <input class="form-check-input" value="#" id="camera" type="checkbox">
                                <label class="form-check-label" for="camera">Cameras (8)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="#" id="GamePad" type="checkbox">
                                <label class="form-check-label" for="GamePad">GamePad (8)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="#" id="Digital" type="checkbox">
                                <label class="form-check-label" for="Digital">Digital Cameras (8)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                <label class="form-check-label" for="Virtual"> Virtual Reality (8) </label>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar Categorie Start -->
                    <!-- Product Size Start -->
                    <div class="size mb-40">
                        <h3 class="sidebar-title">size</h3>
                        <ul class="size-list sidbar-style">
                            <li class="form-check">
                                <input class="form-check-input" value="" id="small" type="checkbox">
                                <label class="form-check-label" for="small">S (6)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="" id="medium" type="checkbox">
                                <label class="form-check-label" for="medium">M (9)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="" id="large" type="checkbox">
                                <label class="form-check-label" for="large">L (8)</label>
                            </li>
                        </ul>
                    </div>
                    <!-- Product Size End -->
                    <!-- Product Color Start -->
                    <div class="color mb-40">
                        <h3 class="sidebar-title">color</h3>
                        <ul class="color-option sidbar-style">
                            <li>
                                <span class="white"></span>
                                <a href="#">white (4)</a>
                            </li>
                            <li>
                                <span class="orange"></span>
                                <a href="#">Orange (2)</a>
                            </li>
                            <li>
                                <span class="blue"></span>
                                <a href="#">Blue (6)</a>
                            </li>
                            <li>
                                <span class="yellow"></span>
                                <a href="#">Yellow (8)</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Product Color End -->
                    <!-- Product Top Start -->
                    @include('home_page.pages.compoment_san_pham.top_new')
                    <!-- Product Top End -->
                </div>
            </div>
            <!-- Sidebar Shopping Option End -->
            <!-- Product Categorie List Start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Grid & List View Start -->
                <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                    <div class="grid-list-view  mb-sm-15">
                        <ul class="nav tabs-area d-flex align-items-center">
                            <li><a class="active" data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                            <li><a data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                        </ul>
                    </div>
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-flex align-items-center">
                            <label>Sort By:</label>
                            <select class="sorter wide" style="display: none;">
                                <option value="Position">Relevance</option>
                                <option value="Product Name">Neme, A to Z</option>
                                <option value="Product Name">Neme, Z to A</option>
                                <option value="Price">Price low to heigh</option>
                                <option value="Price" selected="">Price heigh to low</option>
                            </select><div class="nice-select sorter wide" tabindex="0"><span class="current">Price heigh to low</span><ul class="list"><li data-value="Position" class="option">Relevance</li><li data-value="Product Name" class="option">Neme, A to Z</li><li data-value="Product Name" class="option">Neme, Z to A</li><li data-value="Price" class="option">Price low to heigh</li><li data-value="Price" class="option selected">Price heigh to low</li></ul></div>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-flex align-items-center">
                            <label>Show:</label>
                            <select class="sorter wide" style="display: none;">
                                <option value="12">12</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select><div class="nice-select sorter wide" tabindex="0"><span class="current">12</span><ul class="list"><li data-value="12" class="option selected">12</li><li data-value="25" class="option">25</li><li data-value="50" class="option">50</li><li data-value="75" class="option">75</li><li data-value="100" class="option">100</li></ul></div>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                </div>
                <!-- Grid & List View End -->
                <div class="main-categorie mb-all-40">
                    <!-- Grid & List Main Area End -->
                    <div class="tab-content fix">
                        @include('home_page.pages.compoment_san_pham.list_san_pham')
                        <!-- #grid view End -->
                        <div id="list-view" class="tab-pane fade">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                                <img class="secondary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                             <span class="sticker-new">new</span>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Accessorize with a straw hat</a></h4>
                                            <p><span class="price">$15.19</span></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                                <img class="secondary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Tretchy Material Comfortable</a></h4>
                                            <p><span class="price">$199.19</span><del class="prev-price">$205.50</del></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                                <img class="secondary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Neckline Short Sleeves  Stretchy</a></h4>
                                            <p><span class="price">$58.19</span></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                                <img class="secondary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Accessorize with a straw hat</a></h4>
                                            <p><span class="price">$152.19</span><del class="prev-price">$160.50</del></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                                <img class="secondary-img" src="/assets_homepage/img/products/43.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Faded Short Sleeves T-shirt</a></h4>
                                            <p><span class="price">$15.19</span><del class="prev-price">$16.50</del></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- #list view End -->
                        <div class="pro-pagination">
                            <ul class="blog-pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                            <div class="product-pagination">
                                <span class="grid-item-list">Showing 1 to 12 of 51 (5 Pages)</span>
                            </div>
                        </div>
                        <!-- Product Pagination Info -->
                    </div>
                    <!-- Grid & List Main Area End -->
                </div>
            </div>
            <!-- product Categorie List End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
@endsection
