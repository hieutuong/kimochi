@extends('frontend.master')
@section('content')

  <!-- catg header banner section -->
  {{-- <section id="aa-catg-head-banner">
   <img src="{!! asset('resources/upload/sanpham/'.$sanpham->sanpham_anh) !!}" alt="fashion img" style="width: 1920px; height: 300px;">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>{!! $sanpham->sanpham_ten !!}</h2>
        <ol class="breadcrumb">
          <li><a href="{!! url('/') !!}">Home</a></li>
          <li><a href="{!! url('nhom-thuc-pham',$nhom->nhom_url) !!}">{!! $nhom->nhom_ten !!}</a></li>
          <li><a href="{!! url('loai-san-pham',$loaisanpham->loaisanpham_url) !!}">{!! $loaisanpham->loaisanpham_ten !!}</a></li>    
          <li class="active">{!! $sanpham->sanpham_ten !!}</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
  <!-- product category -->
<section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-product-details-area">
        <div class="aa-product-details-content">
          <div class="row">
          <!-- Modal view slider -->
          <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="aa-product-view-slider">
            <a href="{!! asset('resources/upload/sanpham/'.$sanpham->sanpham_anh) !!}" class="MagicZoom" id="jeans" data-options="selectorTrigger: hover; transitionEffect: false;">
            <img src="{!! asset('resources/upload/sanpham/'.$sanpham->sanpham_anh) !!}" style="width: 250px; height: 300px;"></a> 
             @foreach ($hinhsanpham as $hinh)
                <a data-zoom-id="jeans" href="{!! asset('resources/upload/chitietsanpham/'.$hinh->hinhsanpham_ten) !!}" data-image="{!! asset('resources/upload/chitietsanpham/'.$hinh->hinhsanpham_ten) !!}">
                <img src="{!! asset('resources/upload/chitietsanpham/'.$hinh->hinhsanpham_ten) !!}" style="width: 45px; height: 55px;">
                </a>
              @endforeach                              
          </div>
          </div>
          <!-- Modal view content -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="aa-product-view-content">
            <h1>{!! $sanpham->sanpham_ten !!}</h1>
            <div class="aa-price-block">
              <h3>
              Giá: 
              <span class="aa-product-view-price">{!! number_format("$sanpham->lohang_gia_ban_ra",0,",",".") !!}vnđ</span>
              <p class="aa-product-avilability">Đơn vị tính: <span>{!! $sanpham->donvitinh_ten !!}</span></p>
              </h3>
            </div>
            
            <div class="aa-prod-quantity">
              <p class="aa-prod-category">
              Loại sản phẩm: <a href="{!! url('loai-san-pham',$loaisanpham->loaisanpham_url) !!}">{!! $sanpham->loaisanpham_ten !!}</a>
              </p>
            </div>
            <div class="aa-prod-view-bottom">
              <a class="aa-add-to-cart-btn" href="{!! url('mua-hang',[$sanpham->id,$sanpham->sanpham_url]) !!}"><span class="fa fa-shopping-cart">Mua hàng</a>
            </div>
            </div>
          </div>
          
        </div>
        <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Mô tả sản phẩm</a></li>
                <li><a href="#review" data-toggle="tab">Nhận xét</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p>{!! $sanpham->sanpham_mo_ta !!}</p>
                  
                </div>
                <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4> Nhận xét</h4> 
                   <ul class="aa-review-nav">
                    @if ($binhluan != null)
                      @foreach ($binhluan as $item)
                        <li>
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img src="{!! url('public/images/avatar.jpg') !!}" alt="fashion img" style="width: 50px; height: 50px;" >
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><strong>{!! $item->binhluan_ten !!}</strong> - <span>{!! date("d-m-Y",strtotime($item->created_at)) !!}</span></h4>
                              ************************************
                              <p>{!! $item->binhluan_noi_dung !!}</p>
                            </div>
                          </div>
                        </li>
                      @endforeach
                    @endif
                   </ul>


                   <h4>Thêm bình luận</h4>

                   <!-- review form -->
                   <form action="{!! url('binh-luan') !!}"  class="aa-review-form" method="POST">
                   <p class="comment-notes">
                        Địa chỉ mail của các bạn sẽ không hiện lên và nội dung bình luận sẽ được kiểm tra trước khi phát hành <span class="required">*</span>
                      </p>
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                    <input type="hidden" name="txtID" value="{!! $sanpham->id !!}" />
                      <div class="form-group">
                        <label for="message">Nội dung<span class="required">*</span></label>
                        <textarea class="form-control" name="txtContent" rows="3" id="message" required="required"></textarea>
                        <div>
                            {!! $errors->first('txtContent') !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name">Tên<span class="required">*</span></label>
                        <input type="text" class="form-control" name="txtName"  id="name" required="required" placeholder="Name" />
                        <div>
                            {!! $errors->first('txtName') !!}
                        </div>
                      </div>  
                      <div class="form-group">
                        <label for="email">Email<span class="required">*</span></label>
                        <input type="email" class="form-control"  name="txtEmail" id="email" placeholder="example@gmail.com" required="required" />
                        <div>
                            {!! $errors->first('txtEmail') !!}
                        </div>
                      </div>
                      <button type="submit" class="btn btn-default aa-review-submit">Gửi</button>
                   </form>
                 </div>
                </div>            
              </div>
            </div>
            <!-- Related product -->
            <!-- <div class="aa-product-related-item">
              <h3>Related Products</h3>
              <ul class="aa-product-catg aa-related-item-slider">
                                                                                  
              </ul>
            </div> -->
          </div>
         </div>   
    </div>
        </div>
        </div>
  </section> --}}
  <section class="main-breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{!! url('/') !!}">Trang chủ</a></li>
        <li><a href="{!! url('nhom-thuc-pham',$nhom->nhom_url) !!}">{!! $nhom->nhom_ten !!}</a></li>
        <li><a href="{!! url('loai-san-pham',$loaisanpham->loaisanpham_url) !!}">{!! $loaisanpham->loaisanpham_ten !!}</a></li>
        <li class="active"><a href="">{!! $sanpham->sanpham_ten !!}</a></li>
      </ul>
    </div>
  </section>
  <section class="product-detail py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-wrapper">
            <div class="sale">-20%</div>
            <div class="image-top">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  @foreach ($hinhsanpham as $hinh)
                  <div class="swiper-slide">
                    <div class="image"><img src="{!! asset('resources/upload/chitietsanpham/'.$hinh->hinhsanpham_ten) !!}" alt=""></div>
                  </div>
                  @endforeach  
                </div>
              </div>
            </div>
            <div class="image-thumb">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  @foreach ($hinhsanpham as $hinh)
                  <div class="swiper-slide">
                    <div class="image"><img src="{!! asset('resources/upload/chitietsanpham/'.$hinh->hinhsanpham_ten) !!}" alt=""></div>
                  </div>
                  @endforeach  
                </div>
              </div>
              <div class="swiper-navigation">
                <div class="swiper-prev"><em class="lnr lnr-chevron-left"></em></div>
                <div class="swiper-next"><em class="lnr lnr-chevron-right"></em></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-wrapper">
            <h1 class="shine-title">{!! $sanpham->sanpham_ten !!}</h1>
            <p class="status">Còn hàng</p>
            <div class="table-wrap">
              <div class="table-row">
                <div class="title">Giá</div>
                <div class="old">420.000 đ</div>
              </div>
              <div class="table-row">
                <div class="title">Giá khuyến mãi</div>
                <div class="new">{!! number_format("$sanpham->lohang_gia_ban_ra",0,",",".") !!} đ</div>
              </div>
              <div class="table-row">
                <div class="title">Số lượng</div>
                <div class="quantity-box">
                  <button>-</button>
                  <input type="text" value="1">
                  <button>+</button>
                </div>
              </div>
              <div class="table-row">
                <div class="title">Màu sắc</div>
                <div class="color-options">
                  <div class="color-item active"><a href="javascript:void(0)" style="background: #e08271"></a></div>
                  <div class="color-item"><a href="javascript:void(0)" style="background: #000"></a></div>
                  <div class="color-item"><a href="javascript:void(0)" style="background: #b3b3b3"></a></div>
                </div>
              </div>
              <div class="table-row">
                <div class="title">Chia sẻ</div>
                <ul class="social">
                  <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                  <li><a href="#"><em class="fa fa-youtube-play"></em></a></li>
                  <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                  <li><a href="#"><em class="fa fa-instagram"></em></a></li>
                </ul>
              </div>
            </div>
            <div class="add-cart"><a href="{!! url('mua-hang',[$sanpham->id,$sanpham->sanpham_url]) !!}"><em class="fa fa-shopping-basket"></em>Đặt hàng ngay</a></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="product-detail-wrapper">
            <div class="heading">
              <h3>Chi tiết sản phẩm</h3>
            </div>
            <div class="content">
              {!! $sanpham->sanpham_mo_ta !!}
              <div class="view-more"><a href="javascript:void(0)"><span>Xem thêm</span><em class="lnr lnr-chevron-down"></em></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="viewed-products-wrapper other-wrapper">
            <div class="heading">
              <h3 class="shine-title">SẢN PHẨM đã xem</h3>
              <div class="swiper-navigation">
                <div class="swiper-navigation">
                  <div class="swiper-prev"><em class="lnr lnr-chevron-left"></em></div>
                  <div class="swiper-next"><em class="lnr lnr-chevron-right"></em></div>
                </div>
              </div>
            </div>
            <div class="list-item">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="product-item">
                      <div class="top-item">
                        <div class="image"><a href="#"><img src="./img/pro-3.png" alt=""></a></div>
                        <div class="sale">-10%</div>
                        <div class="hidden-wrap"><a class="add-cart" href="#"><em class="fa fa-shopping-basket"></em><span>Thêm vào giỏ hàng</span></a><a class="view-detail" href="#"><em class="fa fa-eye"></em><span>Xem chi tiết</span></a></div>
                      </div>
                      <div class="bottom-item">
                        <h5 class="title"> <a href="#">Bộ Kem Trị Nám Giori</a></h5>
                        <div class="price"><span class="new black">350.000 ₫</span><span class="old">700.000 ₫</span></div>
                        <div class="flex">
                          <div class="rate" data-rate="4"><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em></div>
                          <div class="cart-button"><a href="#"><em class="fa fa-shopping-basket"></em></a></div>
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
      <div class="row">
        <div class="col-12">
          <div class="related-products-wrapper other-wrapper">
            <div class="heading">
              <h3 class="shine-title">SẢN PHẨM tương tự</h3>
              <div class="swiper-navigation">
                <div class="swiper-navigation">
                  <div class="swiper-prev"><em class="lnr lnr-chevron-left"></em></div>
                  <div class="swiper-next"><em class="lnr lnr-chevron-right"></em></div>
                </div>
              </div>
            </div>
            <div class="list-item">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="product-item">
                      <div class="top-item">
                        <div class="image"><a href="#"><img src="./img/pro-3.png" alt=""></a></div>
                        <div class="sale">-10%</div>
                        <div class="hidden-wrap"><a class="add-cart" href="#"><em class="fa fa-shopping-basket"></em><span>Thêm vào giỏ hàng</span></a><a class="view-detail" href="#"><em class="fa fa-eye"></em><span>Xem chi tiết</span></a></div>
                      </div>
                      <div class="bottom-item">
                        <h5 class="title"> <a href="#">Bộ Kem Trị Nám Giori</a></h5>
                        <div class="price"><span class="new black">350.000 ₫</span><span class="old">700.000 ₫</span></div>
                        <div class="flex">
                          <div class="rate" data-rate="5"><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em></div>
                          <div class="cart-button"><a href="#"><em class="fa fa-shopping-basket"></em></a></div>
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
      <div class="row">
        <div class="col-12">
          <div class="product-reviews-wrapper other-wrapper">
            <div class="heading">
              <h3 class="shine-title">Đánh giá sản phẩm</h3>
              <div class="swiper-navigation">
                <div class="swiper-navigation">
                  <div class="swiper-prev"><em class="lnr lnr-chevron-left"></em></div>
                  <div class="swiper-next"><em class="lnr lnr-chevron-right"></em></div>
                </div>
              </div>
            </div>
            <div class="list-item">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="review-item">
                      <figure>
                        <div class="image"><img src="./img/index.jpg" alt=""></div>
                        <figcaption>
                          <div class="rate" data-rate="3"><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em></div>
                          <h5>Nguyễn Ngọc Băng Tâm</h5>
                          <p>Ngay từ lần đầu sử dụng, loại kem này để lại ấn tượng khá tốt với mình, khi thoa kem cảm giác là da hơi bóng tuy nhiên vài phút sau </p>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop