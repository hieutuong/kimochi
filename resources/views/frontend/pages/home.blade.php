@extends('frontend.master')
@section('content')
<!-- Start slider -->
@include('frontend.blocks.slide')
<!-- / slider -->
  <!-- Products section -->
  {{-- <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <ul class="nav nav-tabs aa-products-tab">
                      <li class="active"><a href="#men" data-toggle="tab">Sản phẩm mới</a></li>
                    </ul>
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" >
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @foreach ($sanpham as $item)
                        <?php 
                          $sanphamkhuyenmai = DB::select('select* from sanpham as sp, sanphamkhuyenmai as spkm, khuyenmai as km where sp.id = spkm.sanpham_id and spkm.khuyenmai_id = km.id and sp.sanpham_khuyenmai = 1 and km.khuyenmai_tinh_trang = 1');
                        ?>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="{!! url('san-pham',$item->sanpham_url) !!}"><img src="{!! asset('resources/upload/sanpham/'.$item->sanpham_anh) !!}"  style="width: 250px; height: 300px;"></a>
                            <a class="aa-add-card-btn" href="{!! url('mua-hang',[$item->id,$item->sanpham_url]) !!}"><span class="fa fa-shopping-cart"></span>Mua ngay</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="{!! url('san-pham',$item->sanpham_url) !!}">{!! $item->sanpham_ten !!}</a></h4>
                              <input type="hidden" name="txtqty" value="1" />
                              @if ($item->sanpham_khuyenmai == 1) 
                               <!-- product badge -->

                            <span class="aa-badge aa-sold-out" >Khuyến mãi!</span>
                            <span class="aa-product-price">
                             <?php 
                              $tylegia = DB::select('select khuyenmai_phan_tram from sanpham as sp, sanphamkhuyenmai as spkm, khuyenmai as km where sp.id = spkm.sanpham_id and spkm.khuyenmai_id = km.id and sp.sanpham_khuyenmai = 1 and km.khuyenmai_tinh_trang = 1 ');
                              $giakm = ($item->lohang_gia_ban_ra - ($tylegia[0]->khuyenmai_phan_tram*$item->lohang_gia_ban_ra * 0.01));
                              $tyle = $tylegia[0]->khuyenmai_phan_tram*0.01;
                              ?> 
                                {!! number_format($giakm,0,",",".") !!} vnđ
                            </span>
                            <span class="aa-product-price">
                              <del>{!! number_format("$item->lohang_gia_ban_ra",0,",",".") !!} vnđ</del>
                            </span> 
                             <input type="hidden" name="txtopt" value="{!! $tyle !!}" /> 
                             @else
                                 <span class="aa-product-price">
                                 {!! number_format("$item->lohang_gia_ban_ra",0,",",".") !!} vnđ
                                 </span>
                                 <input type="hidden" name="txtopt" value="1" /> 
                            @endif
                              </figcaption>
                          </figure>
                        </li> 
                        @endforeach
                      </ul>
                    </div>
                    <!-- / men product category -->
                  </div>            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <div class="home-1 py-5 pb-2">
    <div class="container">
      <div class="heading-wrapper mb-3">
        <div class="ic"><img src="{{asset ('images/img/home/sale.png') }}" alt=""></div>
        <h2 class="shine-title">KHUYẾN MÃI MỖI NGÀY</h2>
        <div class="button"><a class="view-more-button" href="#">Xem thêm</a></div>
      </div>
      <div class="list-item-wrapper">
        <div class="row">
          @foreach ($sanpham as $item)
          <?php 
            $sanphamkhuyenmai = DB::select('select * from sanpham as sp, sanphamkhuyenmai as spkm, khuyenmai as km where sp.id = spkm.sanpham_id and spkm.khuyenmai_id = km.id and sp.sanpham_khuyenmai = 1 and km.khuyenmai_tinh_trang = 1');
          ?>
          <div class="col-lg-3 col-md-4 col-6 col-xxl-2">
            <div class="product-item border">
              <div class="top-item">
                <div class="image"><a href="{!! url('san-pham',$item->sanpham_url) !!}"><img src="{!! asset('resources/upload/sanpham/'.$item->sanpham_anh) !!}" alt=""></a></div>
                @if ($item->sanpham_khuyenmai == 1) 
                <?php 
                  $tylegia = DB::select('select khuyenmai_phan_tram from sanpham as sp, sanphamkhuyenmai as spkm, khuyenmai as km where sp.id = spkm.sanpham_id and spkm.khuyenmai_id = km.id and sp.sanpham_khuyenmai = 1 and km.khuyenmai_tinh_trang = 1 ');
                  $giakm = ($item->lohang_gia_ban_ra - ($tylegia[0]->khuyenmai_phan_tram*$item->lohang_gia_ban_ra * 0.01));
                  $tyle = $tylegia[0]->khuyenmai_phan_tram*0.01;
                      ?> 
                {{-- Chưa lấy được phần trăm khuyến mãi --}}
                  <div class="sale"> </div>     
                @else
                  <div class="sale"></div> 
                @endif
                <div class="hidden-wrap"><a class="add-cart" href="{!! url('mua-hang',[$item->id,$item->sanpham_url]) !!}"><em
                      class="fa fa-shopping-basket"></em><span>Thêm vào giỏ hàng</span></a><a class="view-detail"
                    href="#"><em class="fa fa-eye"></em><span>Xem chi tiết</span></a></div>
              </div>
              <div class="bottom-item">
                <h5 class="title"> <a href="{!! url('san-pham',$item->sanpham_url) !!}">{!! $item->sanpham_ten !!}</a></h5>
                @if ($item->sanpham_khuyenmai == 1) 
                <?php 
                        $tylegia = DB::select('select khuyenmai_phan_tram from sanpham as sp, sanphamkhuyenmai as spkm, khuyenmai as km where sp.id = spkm.sanpham_id and spkm.khuyenmai_id = km.id and sp.sanpham_khuyenmai = 1 and km.khuyenmai_tinh_trang = 1 ');
                       $giakm = ($item->lohang_gia_ban_ra - ($tylegia[0]->khuyenmai_phan_tram*$item->lohang_gia_ban_ra * 0.01));
                       $tyle = $tylegia[0]->khuyenmai_phan_tram*0.01;
                      ?> 
                <div class="price"><span class="new black"> {!! number_format($giakm,0,",",".") !!} ₫</span>
                  <span class="old">{!! number_format("$item->lohang_gia_ban_ra",0,",",".") !!} ₫</span></div>
                @else
                <div class="price"><span class="new black"> {!! number_format("$item->lohang_gia_ban_ra",0,",",".") !!} vnđ</span></div>
                @endif
                <div class="flex">
                  <div class="rate" data-rate="3"><em class="fa fa-star"></em><em class="fa fa-star"></em><em
                      class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em></div>
                  <div class="cart-button"><a href="{!! url('mua-hang',[$item->id,$item->sanpham_url]) !!}"><em class="fa fa-shopping-basket"></em></a></div>
                </div>
              </div>
            </div>
          </div>
          @endforeach 
        </div>
      </div>
    </div>
  </div>
  <div class="home-2 py-5 pb-2">
    <div class="container">
      <div class="heading-wrapper mb-3">
        <h2 class="shine-title">Sản phẩm tốt nhất</h2>
        <div class="button"><a class="view-more-button" href="#">Xem thêm</a></div>
      </div>
      <div class="list-item-wrapper">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-6 col-xxl-2">
            <div class="product-item">
              <div class="top-item">
                <div class="image"><a href="#"><img src="{{asset ('images/img/pro-1.png') }}" alt=""></a></div>
                <div class="sale">-20%</div>
                <div class="hidden-wrap"><a class="add-cart" href="#"><em
                      class="fa fa-shopping-basket"></em><span>Thêm vào giỏ hàng</span></a><a class="view-detail"
                    href="#"><em class="fa fa-eye"></em><span>Xem chi tiết</span></a></div>
              </div>
              <div class="bottom-item">
                <h5 class="title"> <a href="#">Bộ Kem Trị Nám Giori Nhật Bản</a></h5>
                <div class="price"><span class="new black">350.000 ₫</span><span class="old">700.000 ₫</span></div>
                <div class="flex">
                  <div class="rate" data-rate="3"><em class="fa fa-star"></em><em class="fa fa-star"></em><em
                      class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em></div>
                  <div class="cart-button"><a href="#"><em class="fa fa-shopping-basket"></em></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="home-3 py-5">
    <div class="container">
      <div class="main-wrapper">
        <div class="heading-wrapper">
          <h2 class="shine-title">SẢN PHẨM CHĂM SÓC DA</h2>
          <div class="button"><a class="view-more-button" href="#">Xem thêm</a></div>
        </div>
        <div class="list-item-wrapper">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-6 col-xxl-2">
              <div class="product-item">
                <div class="top-item">
                  <div class="image"><a href="#"><img src="{{asset ('images/img/pro-1.png') }}" alt=""></a></div>
                  <div class="sale">-20%</div>
                  <div class="hidden-wrap"><a class="add-cart" href="#"><em
                        class="fa fa-shopping-basket"></em><span>Thêm vào giỏ hàng</span></a><a class="view-detail"
                      href="#"><em class="fa fa-eye"></em><span>Xem chi tiết</span></a></div>
                </div>
                <div class="bottom-item">
                  <h5 class="title"> <a href="#">Bộ Kem Trị Nám Giori Nhật Bản</a></h5>
                  <div class="price"><span class="new black">350.000 ₫</span><span class="old">700.000 ₫</span></div>
                  <div class="flex">
                    <div class="rate" data-rate="3"><em class="fa fa-star"></em><em class="fa fa-star"></em><em
                        class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em></div>
                    <div class="cart-button"><a href="#"><em class="fa fa-shopping-basket"></em></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-wrapper">
        <div class="heading-wrapper">
          <h2 class="shine-title">SẢN PHẨM CHĂM SÓC tóc</h2>
          <div class="button"><a class="view-more-button" href="#">Xem thêm</a></div>
        </div>
        <div class="list-item-wrapper">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-6 col-xxl-2">
              <div class="product-item">
                <div class="top-item">
                  <div class="image"><a href="#"><img src="{{asset ('images/img/pro-1.png') }}" alt=""></a></div>
                  <div class="sale">-20%</div>
                  <div class="hidden-wrap"><a class="add-cart" href="#"><em
                        class="fa fa-shopping-basket"></em><span>Thêm vào giỏ hàng</span></a><a class="view-detail"
                      href="#"><em class="fa fa-eye"></em><span>Xem chi tiết</span></a></div>
                </div>
                <div class="bottom-item">
                  <h5 class="title"> <a href="#">Bộ Kem Trị Nám Giori Nhật Bản</a></h5>
                  <div class="price"><span class="new black">350.000 ₫</span><span class="old">700.000 ₫</span></div>
                  <div class="flex">
                    <div class="rate" data-rate="3"><em class="fa fa-star"></em><em class="fa fa-star"></em><em
                        class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em></div>
                    <div class="cart-button"><a href="#"><em class="fa fa-shopping-basket"></em></a></div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="main-wrapper">
        <div class="heading-wrapper">
          <h2 class="shine-title">SẢN PHẨM CHĂM SÓC Body</h2>
          <div class="button"><a class="view-more-button" href="#">Xem thêm</a></div>
        </div>
        <div class="list-item-wrapper">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-6 col-xxl-2">
              <div class="product-item">
                <div class="top-item">
                  <div class="image"><a href="#"><img src="{{asset ('images/img/pro-1.png') }}" alt=""></a></div>
                  <div class="sale">-20%</div>
                  <div class="hidden-wrap"><a class="add-cart" href="#"><em
                        class="fa fa-shopping-basket"></em><span>Thêm vào giỏ hàng</span></a><a class="view-detail"
                      href="#"><em class="fa fa-eye"></em><span>Xem chi tiết</span></a></div>
                </div>
                <div class="bottom-item">
                  <h5 class="title"> <a href="#">Bộ Kem Trị Nám Giori Nhật Bản</a></h5>
                  <div class="price"><span class="new black">350.000 ₫</span><span class="old">700.000 ₫</span></div>
                  <div class="flex">
                    <div class="rate" data-rate="3"><em class="fa fa-star"></em><em class="fa fa-star"></em><em
                        class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em></div>
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

<!-- Latest Blog -->
@include('frontend.blocks.news')
<!-- / Latest Blog -->
{{-- Đăng ký nhận tin --}}
@include('frontend.blocks.trans')
<!-- Footer -->


<!-- / Footer -->
@stop

