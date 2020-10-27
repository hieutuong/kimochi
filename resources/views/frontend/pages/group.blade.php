@extends('frontend.master')
@section('content')
  <!-- catg header banner section -->
  {{-- <section id="aa-catg-head-banner">
   <img src="{!! asset('resources/upload/nhom/'.$nhom->nhom_anh) !!}" alt="fashion img" style="width: 1920px; height: 300px;">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>{!! $nhom->nhom_ten !!}</h2>
        <ol class="breadcrumb">
          <li><a href="{!! url('/') !!}">Home</a></li>         
          <li class="active">{!! $nhom->nhom_ten !!}</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            @include('frontend.blocks.head')
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                @foreach ($sanpham as $item)
                <?php 
                  $sanphamkhuyenmai = DB::select('select * from sanpham as sp, sanphamkhuyenmai as spkm, khuyenmai as km where sp.id = spkm.sanpham_id and spkm.khuyenmai_id = km.id and sp.sanpham_khuyenmai = 1 and km.khuyenmai_tinh_trang = 1');
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
            <!-- pagination -->

            @include('frontend.blocks.pagination')

            <!-- /pagination -->
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
             <!-- sidebar  1 -->
            
            @include('frontend.blocks.spbanchay')
             <!-- sidebar 2 -->
          
          </aside>
        </div>
       
      </div>
    </div>
  </section> --}}
  <section class="main-banner">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="image"><img src="{!! asset('resources/upload/nhom/'.$nhom->nhom_anh) !!}" alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <section class="main-breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{!! url('/') !!}">Trang chủ</a></li>         
        <li><a href="">{!! $nhom->nhom_ten !!}</a></li>
      </ul>
    </div>
  </section>
  <section class="product-list">
    <div class="container">
      <p class="description"></p>
      <div class="main-wrapper py-4">
        <div class="row">
          <div class="col-lg-3">
            <div class="product-filter-button"><em class="mdi mdi-filter"></em></div>
            <div class="product-filter-wrapper">
              <div class="product-filter-close"><em class="mdi mdi-close"></em></div>
              <div class="item">
                <div class="heading">
                  <h4>Giá tiền</h4>
                </div>
                <div class="options">
                  <div class="form-group">
                    <input id="cb-1" type="radio" name="price">
                    <label for="cb-1">Dưới 500.000 đ</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-2" type="radio" name="price">
                    <label for="cb-2">Từ 500.000 đ - 1.000.000 đ</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-3" type="radio" name="price">
                    <label for="cb-3">Từ 100.000 đ - 1.500.000 đ</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-4" type="radio" name="price">
                    <label for="cb-4">Từ 200.000 đ - 5.000.000 đ</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-5" type="radio" name="price">
                    <label for="cb-5">Trên 5.000.000 đ</label>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="heading">
                  <h4>Xuất xứ</h4>
                </div>
                <div class="options">
                  <div class="form-group">
                    <input id="cb-6" type="radio" name="orgin">
                    <label for="cb-6">Hàn Quốc</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-7" type="radio" name="orgin">
                    <label for="cb-7">Nhật Bản</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-8" type="radio" name="orgin">
                    <label for="cb-8">Trung Quốc nội địa</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-9" type="radio" name="orgin">
                    <label for="cb-9">Nga</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-10" type="radio" name="orgin">
                    <label for="cb-10">Ukraina</label>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="heading">
                  <h4>Làn da</h4>
                </div>
                <div class="options">
                  <div class="form-group">
                    <input id="cb-11" type="radio" name="skin">
                    <label for="cb-11">Da nhờn</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-12" type="radio" name="skin">
                    <label for="cb-12">Da mụn</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-13" type="radio" name="skin">
                    <label for="cb-13">Da dầu</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-14" type="radio" name="skin">
                    <label for="cb-14">Da hỗn hợp</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-15" type="radio" name="skin">
                    <label for="cb-15">Da nhạy cảm</label>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="heading">
                  <h4>Thương hiệu</h4>
                </div>
                <div class="options">
                  <div class="form-group">
                    <input id="cb-16" type="radio" name="brand">
                    <label for="cb-16">Thương hiệu 1</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-17" type="radio" name="brand">
                    <label for="cb-17">Thương hiệu 2</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-18" type="radio" name="brand">
                    <label for="cb-18">Thương hiệu 3</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-19" type="radio" name="brand">
                    <label for="cb-19">Thương hiệu 4</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-20" type="radio" name="brand">
                    <label for="cb-20">Thương hiệu 5</label>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="heading">
                  <h4>Giới tính</h4>
                </div>
                <div class="options">
                  <div class="form-group">
                    <input id="cb-21" type="radio" name="sex">
                    <label for="cb-21">Nam</label>
                  </div>
                  <div class="form-group">
                    <input id="cb-22" type="radio" name="sex">
                    <label for="cb-22">Nữ</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="product-list-wrapper">
              <div class="heading-wrapper">
                <h1 class="shine-title">{!! $nhom->nhom_ten !!}</h1>
                <div class="sort-by">
                  <select>
                    <option>Giá giảm dần</option>
                    <option>Giá tăng dần</option>
                    <option>Mới nhất</option>
                  </select>
                </div>
                @include('frontend.blocks.head')
              </div>
              <div class="list-item-wrapper">
                <div class="row">
                  @foreach ($sanpham as $item)
                  <?php 
                    $sanphamkhuyenmai = DB::select('select * from sanpham as sp, sanphamkhuyenmai as spkm, khuyenmai as km where sp.id = spkm.sanpham_id and spkm.khuyenmai_id = km.id and sp.sanpham_khuyenmai = 1 and km.khuyenmai_tinh_trang = 1');
                  ?>
                  <div class="col-md-4 col-6 col-xl-3 display">
                    <div class="product-item">
                      <div class="top-item">
                        <div class="image"><a href="{!! url('san-pham',$item->sanpham_url) !!}"><img src="{!! asset('resources/upload/sanpham/'.$item->sanpham_anh) !!}" alt=""></a></div>
                        <div class="sale">-10%</div>
                        <div class="hidden-wrap"><a class="add-cart" href="{!! url('mua-hang',[$item->id,$item->sanpham_url]) !!}"><em class="fa fa-shopping-basket"></em><span>Thêm vào giỏ hàng</span></a><a class="view-detail" href="{!! url('san-pham',$item->sanpham_url) !!}"><em class="fa fa-eye"></em><span>Xem chi tiết</span></a></div>
                      </div>
                      <div class="bottom-item">
                        <h5 class="title"> <a href="{!! url('san-pham',$item->sanpham_url) !!}">{!! $item->sanpham_ten !!}</a></h5>
                        @if ($item->sanpham_khuyenmai == 1) 
                        <?php 
                          $tylegia = DB::select('select khuyenmai_phan_tram from sanpham as sp, sanphamkhuyenmai as spkm, khuyenmai as km where sp.id = spkm.sanpham_id and spkm.khuyenmai_id = km.id and sp.sanpham_khuyenmai = 1 and km.khuyenmai_tinh_trang = 1 ');
                          $giakm = ($item->lohang_gia_ban_ra - ($tylegia[0]->khuyenmai_phan_tram*$item->lohang_gia_ban_ra * 0.01));
                          $tyle = $tylegia[0]->khuyenmai_phan_tram*0.01;
                        ?> 
                        <div class="price">
                          <span class="new black">{!! number_format("$item->lohang_gia_ban_ra",0,",",".") !!} ₫</span>
                          <span class="old">{!! number_format($giakm,0,",",".") !!} vnđ</span>
                        </div>
                        @else
                        <div class="price"><span class="new black">{!! number_format("$item->lohang_gia_ban_ra",0,",",".") !!} vnđ</span></div>
                        <input type="hidden" name="txtopt" value="1" /> 
                        @endif
                        
                        <div class="flex">
                          <div class="rate" data-rate="5"><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em><em class="fa fa-star"></em></div>
                          <div class="cart-button"><a href="#"><em class="fa fa-shopping-basket"></em></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="button mt-1"><a class="view-more-button" href="#">Xem thêm sản phẩm</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
