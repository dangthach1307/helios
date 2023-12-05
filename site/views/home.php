  <!-- Revslider -->
  <?php require_once 'modules/slider.php' ?>
  <!-- Support Policy Box -->
  <div class="container">
      <div class="support-policy-box">
          <div class="row">
              <div class="col-md-3 col-sm-4 col-xs-12">
                  <div class="support-policy"> <i class="fa fa-money"></i>
                      <div class="content">Tiết kiệm chi tiêu</div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12">
                  <div class="support-policy"> <i class="fa fa-truck"></i>
                      <div class="content">Miễn phí vận chuyển</div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12">
                  <div class="support-policy"> <i class="fa fa-phone"></i>
                      <div class="content">Hotline 24/7</div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12">
                  <div class="support-policy"> <i class="fa fa-refresh"></i>
                      <div class="content">Hoàn trả sau 30 ngày</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Main Container -->
  <section class="main-container">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                  <div class="col-main">
                      <div class="jtv-featured-products">
                          <div class="slider-items-products">
                              <div class="jtv-new-title">
                                  <h2>Sản phẩm mới</h2>
                              </div>
                              <div id="featured-slider" class="product-flexslider hidden-buttons">
                                  <div class="slider-items slider-width-col4 products-grid">
                                      <?php foreach ($product_list_newest as $item) : ?>
                                          <div class="item">
                                              <div class="item-inner">
                                                  <div class="item-img">
                                                      <div class="item-img-info">
                                                          <a class="product-image" title="<?= $item['slug'] ?>" href="?option=page&act=product-detail&slug=<?= $item['slug'] ?>">
                                                              <img alt="<?= $item['slug'] ?>" src="../public/images/product/<?= $item['img'] ?>" height="250px">
                                                          </a>
                                                          <div class="new-label new-top-left">new</div>
                                                          <!-- <a class="quickview-btn" href="quick-view.html">
                                                              <span>Quick View</span>
                                                          </a> -->
                                                          <a href="index.php?option=cart&act=add-wishlist&pid=<?= $item['id'] ?>" data-toggle="tooltip" title="Yêu thích">
                                                              <div class="mask-left-shop">
                                                                  <i class="fa fa-heart"></i>
                                                              </div>
                                                          </a>
                                                          <a href="index.php?option=cart&act=add-cart&pid=<?= $item['id'] ?>" data-toggle="tooltip" title="Thêm giỏ hàng">
                                                              <div class="mask-right-shop">
                                                                  <i class="fa fa-shopping-cart"></i>
                                                              </div>
                                                          </a>
                                                      </div>
                                                  </div>
                                                  <div class="item-info">
                                                      <div class="info-inner">
                                                          <div class="item-title">
                                                              <a title="<?= $item['slug'] ?>" href="?option=page&act=product-detail&slug=<?= $item['slug'] ?>">
                                                                  <?= $item['name'] ?>
                                                              </a>
                                                          </div>
                                                          <div class="item-content">
                                                              <div class="item-price">
                                                                  <div class="price-box">
                                                                      <?php
                                                                        $firstSizePrinted = false;
                                                                        foreach ($size_list_newest as $row) :
                                                                            if (!$firstSizePrinted) :
                                                                                $firstSizePrinted = true; // Đánh dấu là đã in ra giá tiền kích thước đầu tiên
                                                                                $calculated_price = $item['promotion'] > 0 ? $row['temp_price'] - ($row['temp_price'] * $item['promotion'] / 100) : $row['temp_price'];
                                                                        ?>
                                                                              <p class="regular-price">
                                                                                  <span class="price" id="displayedPrice">
                                                                                      <?= number_format($calculated_price) ?> VNĐ
                                                                                  </span>
                                                                              </p>
                                                                              <?php if ($item['promotion'] > 0) : ?>
                                                                                  <p class="old-price">
                                                                                      <span class="price">
                                                                                          <span id="originalPrice"><?= number_format($row['temp_price']) ?></span> VNĐ
                                                                                      </span>
                                                                                  </p>
                                                                              <?php endif; ?>
                                                                          <?php endif; ?>
                                                                      <?php endforeach; ?>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      <?php endforeach; ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Trending Products Slider -->
                  <div class="jtv-featured-products">
                      <div class="slider-items-products">
                          <div class="jtv-new-title">
                              <h2>Sản phẩm thịnh hành</h2>
                          </div>
                          <div id="featured-slider" class="product-flexslider hidden-buttons">
                              <div class="slider-items slider-width-col4 products-grid">
                                  <?php foreach ($product_list_topview as $item) : ?>
                                      <div class="item">
                                          <div class="item-inner">
                                              <div class="item-img">
                                                  <div class="item-img-info">
                                                      <a class="product-image" title="<?= $item['slug'] ?>" href="?option=page&act=product-detail&slug=<?= $item['slug'] ?>">
                                                          <img alt="<?= $item['slug'] ?>" src="../public/images/product/<?= $item['img'] ?>" height="250px">
                                                      </a>
                                                      <?php if ($item['promotion'] > 0) : ?>
                                                          <div class="sale-label sale-top-right">Sale</div>
                                                      <?php endif; ?>
                                                      <!-- <a class="quickview-btn" href="quick-view.html">
                                                              <span>Quick View</span>
                                                          </a> -->
                                                      <a href="index.php?option=cart&act=add-wishlist&pid=<?= $item['id'] ?>" data-toggle="tooltip" title="Yêu thích">
                                                          <div class="mask-left-shop">
                                                              <i class="fa fa-heart"></i>
                                                          </div>
                                                      </a>
                                                      <a href="index.php?option=cart&act=add-cart&pid=<?= $item['id'] ?>" data-toggle="tooltip" title="Thêm giỏ hàng">
                                                          <div class="mask-right-shop">
                                                              <i class="fa fa-shopping-cart"></i>
                                                          </div>
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="item-info">
                                                  <div class="info-inner">
                                                      <div class="item-title">
                                                          <a title="<?= $item['slug'] ?>" href="?option=page&act=product-detail&slug=<?= $item['slug'] ?>">
                                                              <?= $item['name'] ?>
                                                          </a>
                                                      </div>
                                                      <div class="item-content">
                                                          <div class="item-price">
                                                              <div class="price-box">
                                                                  <?php
                                                                    $firstSizePrinted = false;
                                                                    foreach ($size_list_topview as $row) :
                                                                        if (!$firstSizePrinted) :
                                                                            $firstSizePrinted = true; // Đánh dấu là đã in ra giá tiền kích thước đầu tiên
                                                                            $calculated_price = $item['promotion'] > 0 ? $row['temp_price'] - ($row['temp_price'] * $item['promotion'] / 100) : $row['temp_price'];
                                                                    ?>
                                                                          <?php if ($item['promotion'] > 0) : ?>
                                                                              <span class="regular-price" id="displayedPrice">
                                                                                  <span class="price">
                                                                                      <?= number_format($calculated_price) ?> VNĐ
                                                                                  </span>
                                                                              </span>
                                                                              <p class="old-price">
                                                                                  <span class="price-label">Giá gốc:</span>
                                                                                  <span class="price"> <?= number_format($calculated_price) ?> Vnđ </span>
                                                                              </p>
                                                                          <?php else : ?>
                                                                              <span class="regular-price">
                                                                                  <span class="price">
                                                                                      <?= number_format($row['temp_price']) ?> Vnđ
                                                                                  </span>
                                                                              </span>
                                                                          <?php endif; ?>
                                                                      <?php endif; ?>
                                                                  <?php endforeach; ?>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endforeach; ?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Trending Products Slider -->
                  <?php require_once 'modules/collection_area.php' ?>
                  <!-- Latest Blog -->
                  <div class="jtv-latest-blog">
                      <div class="jtv-new-title">
                          <h2>Tin tức mới nhất</h2>
                      </div>
                      <div class="row">
                          <div class="blog-outer-container">
                              <div class="blog-inner">
                                  <div class="col-xs-12 col-sm-4 blog-preview_item">
                                      <div class="entry-thumb jtv-blog-img-hover"> <a href="blog_single_post.html"> <img alt="Blog" src="../public/images/blog-img1.jpg"> </a> </div>
                                      <h4 class="blog-preview_title"><a href="blog_single_post.html">Neque porro quisquam est qui</a></h4>
                                      <div class="blog-preview_info">
                                          <ul class="post-meta">
                                              <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                                              <li><i class="fa fa-comments"></i><a href="#">8 comments</a></li>
                                              <li><i class="fa fa-clock-o"></i><span class="day">12</span><span class="month">Feb</span></li>
                                          </ul>
                                          <div class="blog-preview_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a class="read_btn" href="blog_single_post.html">Read More</a></div>
                                      </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-4 blog-preview_item">
                                      <div class="entry-thumb jtv-blog-img-hover"> <a href="blog_single_post.html"> <img alt="Blog" src="../public/images/blog-img1.jpg"> </a> </div>
                                      <h4 class="blog-preview_title"><a href="blog_single_post.html">Neque porro quisquam est qui</a></h4>
                                      <div class="blog-preview_info">
                                          <ul class="post-meta">
                                              <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                                              <li><i class="fa fa-comments"></i><a href="#">20 comments</a></li>
                                              <li><i class="fa fa-clock-o"></i><span class="day">25</span><span class="month">Feb</span></li>
                                          </ul>
                                          <div class="blog-preview_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a class="read_btn" href="blog_single_post.html">Read More</a></div>
                                      </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-4 blog-preview_item">
                                      <div class="entry-thumb jtv-blog-img-hover"> <a href="blog_single_post.html"> <img alt="Blog" src="../public/images/blog-img1.jpg"> </a> </div>
                                      <h4 class="blog-preview_title"><a href="blog_single_post.html">Dolorem ipsum quia dolor sit amet</a></h4>
                                      <div class="blog-preview_info">
                                          <ul class="post-meta">
                                              <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                                              <li><i class="fa fa-comments"></i><a href="#">8 comments</a></li>
                                              <li><i class="fa fa-clock-o"></i><span class="day">15</span><span class="month">Jan</span></li>
                                          </ul>
                                          <div class="blog-preview_desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem dolore lauda. <a class="read_btn" href="blog_single_post.html">Read More</a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Latest Blog -->
              </div>
          </div>
      </div>
  </section>

  <!-- Brand Logo -->
  <?php require_once 'modules/brand_logo.php' ?>
  <!-- Collection Banner -->
  <?php require_once 'modules/collection_banner.php' ?>
  <!-- collection area end -->
  <?php
    $message = get_flash('message');
    if ($message && isset($message['type']) && $message['type'] === 'success') {
        // Hiển thị modal
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    $("#successModal").modal("show");'; // Chỉ định ID của modal của bạn
        echo '});';
        echo '</script>';
    }
    ?>
  <!-- Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="successModalLabel">Đặt hàng thành công
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </h5>
              </div>
              <div class="modal-body">
                  <?= $message['msg'] ?>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              </div>
          </div>
      </div>
  </div>