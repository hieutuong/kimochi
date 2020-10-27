@extends('frontend.master')
@section('content')
  <!-- catg header banner section -->
  {{-- <section id="aa-catg-head-banner">
   <img src="{!! url('public/images/cartpannel.jpg') !!}" alt="fashion img" style="width: 1920px; height: 300px;" >
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Giỏ hàng</h2>
        <ol class="breadcrumb">
          <li><a href="{!! url('/') !!}">Trang chủ</a></li>         
          <li class="active">Giỏ hàng</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / product category -->

  <!-- Support section -->

  <!-- / Support section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                      </tr>
                    </thead>
                    <tbody>
                    <form action="" method="POST" accept-charset="utf-8">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                    @foreach ($content as $item)
                      <?php 
                          $sanpham = DB::table('sanpham')->where('id',$item->id)->first();
                       ?>
                      <tr>
                        <td><a class="updatecart edit" id="{{ $item->rowid }}" href='#'><fa class=" fa fa-edit"></fa></a></td>
                        <td><a class="remove" href="{{ route('xoasanpham', ['id'=> '.$item->rowid.']) }}" ><fa class="fa fa-close"></fa></a></td>
                        <td><a href="{!! url('san-pham',$sanpham->sanpham_url) !!}"><img src="{!! asset('resources/upload/sanpham/'.$sanpham->sanpham_anh) !!}"  style="width: 45px; height: 50px;"></a></td>
                        <td><a class="aa-cart-title" href="{!! url('san-pham',$sanpham->sanpham_url) !!}">{!!  $item->name !!}</a></td>
                        <td>{!! number_format("$item->price",0,",",".") !!}vnđ</td>
                        <td><input class="qty aa-cart-quantity" type="number" value="{!!  $item->qty !!}"></td>
                        <td>{!! number_format($item->price*$item->qty,0,",",".") !!}vnđ</td>
                      </tr>
                    @endforeach
                    </form>
                      </tbody>
                      
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <!-- <h4>Tổng tiền</h4> -->
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Tổng tiền</th>
                     <td> {!! number_format("$total",0,",",".") !!}vnđ</td>
                   </tr>
                 </tbody>
               </table>
               @if (Auth::check())
                  <a href="{!! url('/') !!}" class="aa-cart-view-btn"> Mua tiếp</a>
                  <a href="{!! URL::route('getThanhtoan') !!}" class="aa-cart-view-btn">Thanh Toán</a>
                  
               @else
                  <a href="{!! url('/') !!}" class="aa-cart-view-btn">Mua tiếp</a>
                  <a href="{!! url('login') !!}" class="aa-cart-view-btn">Thanh Toán</a>
               @endif
               
             </div>
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
      <li><a href="#">Giỏ hàng</a></li>
    </ul>
  </div>
</section>
<section class="the-shine-shop-cart py-5">
  <div class="container">
    <h1 class="shine-title">Giỏ hàng</h1>
    <div class="main-table">
      <table>
        <thead>
          <tr> 
            <th>Sản Phẩm</th>
            <th>Số lượng </th>
            <th>Giảm giá</th>
            <th>Giá</th>
            <th>Thành tiền</th>
          </tr>
        </thead>
        <tbody>
          <form action="" method="POST" accept-charset="utf-8">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            @foreach ($content as $item)
            <?php 
              $sanpham = DB::table('sanpham')->where('id',$item->id)->first();
            ?>
            <tr> 
              <td class="name">
                <div class="image"><img src="{!! asset('resources/upload/sanpham/'.$sanpham->sanpham_anh) !!}" alt=""></div>
                <div class="name-product">
                  <h3 href="{!! url('san-pham',$sanpham->sanpham_url) !!}">{!!  $item->name !!}</h3>
                  <div class="delete-product"><a href="{{ route('xoasanpham', ['id'=> '.$item->rowid.']) }}"> <em class="mdi mdi-plus-circle-outline"></em><span>Xoá</span></a></div>
                </div>
              </td>
              <td class="amount">
                <div class="quantity-box">
                  <button>-</button>
                  <input type="text" value="{!!  $item->qty !!}">
                  <button>+</button>
                </div>
              </td>
              <td class="discount">{!! number_format("$item->price",0,",",".") !!} ₫</td>
              <td class="total">{!! number_format("$item->price",0,",",".") !!} ₫</td>
              <td class="total">{!! number_format($item->price*$item->qty,0,",",".") !!}</td>
            </tr>
            @endforeach
          </form>
        </tbody>
      </table>
    </div>
    <div class="main-total-amount">
      <div class="box-amount">
        <div class="totalamount">
          <p>Tạm tính</p><span class="price">{!! number_format("$total",0,",",".") !!} ₫</span>
        </div>
        <div class="totalamount">
          <p>Phí vận chuyển</p><span class="price">0 ₫</span>
        </div>
        <div class="totalamount">
          <p>Cần thanh toán</p><span class="total">{!! number_format("$total",0,",",".") !!} ₫</span>
        </div>
      </div>
    </div>
    <div class="main-discount">
      <div class="box-discount">
        <div class="title">
          <h5>Sử dụng mã giảm giá</h5>
        </div>
        <div class="form-group">
          <input placeholder="Nhập mã khuyến mãi">
          <button>ÁP DỤNG</button>
        </div>
      </div>
    </div>
    @if (Auth::check())
    <div class="order-now">
      <button><em class="fa fa-shopping-basket"></em>tiến hành đặt hàng</button>
      <button><em class="fa fa-shopping-basket"></em><a href="{!! URL::route('getThanhtoan') !!}">tiến hành đặt hàng</a>
        </button>
    </div>
    @else
    <div class="order-now">
      <a href="{!! url('/') !!}">
        <button><em class="fa fa-shopping-basket"></em>Mua tiếp</button>
      </a>
      <a href="{!! URL::route('getThanhtoan') !!}">
        <button><em class="fa fa-shopping-basket"></em>tiến hành đặt hàng</button>
      </a>
    </div>
      @endif
  </div>
</section>
<section class="the-shine-shop-cart-2 pb-5">
  <div class="related-products-wrapper other-wrapper">
    <div class="container">
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
                  <div class="image"><a href="#"><img src="{{asset ('images/img/pro-3.png') }}" alt=""></a></div>
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
</section>
@stop