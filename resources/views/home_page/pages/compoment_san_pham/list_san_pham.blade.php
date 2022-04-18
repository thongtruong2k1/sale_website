<div id="grid-view" class="tab-pane fade show active">
    <div class="row">
        <!-- Single Product Start -->
        @foreach ($sanPham as $key => $value)
        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
            <div class="single-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="product.html">
                        <img class="primary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                        <img class="secondary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                    </a>
                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="product.html">{{ $value->ten_san_pham }}</a></h4>
                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                    </div>
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
                <!-- Product Content End -->
            </div>
        </div>
        @endforeach

        <!-- Single Product End -->

    </div>
    <!-- Row End -->
</div>
