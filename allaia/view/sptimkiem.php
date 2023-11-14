<div class="container margin_60_35">
    <div class="main_title">
        <h2>Sản phẩm tìm kiếm</h2>
        <span>Products</span>
    </div>
    <div class="row small-gutters">

        <?php
        foreach ($dssp as $sp) {
            extract($sp);
            $linksp = "index.php?act=chitietsp&idsp=" . $id;
			$hinhpath = $img_path.$img;
            echo '
							<div class="col-6 col-md-4 col-xl-3">
							<div class="grid_item">
								<figure>
									<span class="ribbon off">New</span>
									<a href="product-detail-1.html">
										<img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
											data-src="'.$hinhpath.'" alt="" width="400" height="400">
									</a>
									<div data-countdown="2019/05/15" class="countdown"></div>
								</figure>
								<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
										class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
								<a href="'.$linksp.'">
									<h3>' . $title . '</h3>
								</a>
								<div class="price_box">
									<span class="new_price">' . $price . '$ </span>
								</div>
								<ul>
									<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Thêm vào giỏ hàng"><i class="ti-shopping-cart"></i><span>Thêm vào giỏ hàng</span></a></li>
								</ul>
							</div>
							<!-- /grid_item -->
						</div>
						';
        }
        ?>
        <!-- /col -->
    </div>
    <!-- /row -->
</div>