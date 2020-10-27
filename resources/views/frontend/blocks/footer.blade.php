  {{-- <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
                    <?php 
                      $nhom =  DB::table('nhom')->get();
                     ?>
                     @foreach ($nhom as $menu_1)
                      <li><a href="{!! url('nhom-thuc-pham',$menu_1->nhom_url) !!}">{!! $menu_1->nhom_ten !!}</a>
                      </li>
                      @endforeach
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Trang liên quan</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="{!! url('khuyen-mai') !!}">Khuyến mãi</a></li>
                      <li><a href="{!! url('mon-ngon') !!}">Món ngon</a></li>            
                      <li><a href="{!! url('tuyen-dung') !!}">Tuyển dụng</a></li>
                      <li><a href="{!! url('lien-he') !!}">Liên hệ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <!-- <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div> -->
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Liên hệ</h3>
                    <address>
                      <p>Ninh Kiều-Cần Thơ</p>
                      <p><span class="fa fa-phone"></span>0167.899.12.81</p>
                      <p><span class="fa fa-envelope"></span>nongsancantho@gmail.com</p>
                    </address>
                    <!-- <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Design by <a href="#">HanTrinh</a></p>
            <div class="aa-footer-payment">
              <!-- <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span> -->
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer> --}}

  <!-- / footer -->
  <section class="newsletter py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="heading-wrapper">
            <div class="ic"><img src="{{asset ('images/img/img-3.png') }}" alt=""></div>
            <div class="text">
              <h3>Đăng ký nhận bản tin</h3>
              <p>Đăng ký ngay để nhận thông tin khuyến mãi mới nhất</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-wrapper">
            <input type="text" placeholder="Nhập địa chỉ email">
            <button type="submit">Đăng ký</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="top-wrapper">
        <div class="row">
          <div class="col-lg-3 col-md-6 ft-col">
            <div class="text-wrap">
              <h4>Liên hệ</h4>
              <p><em class="mdi mdi-map-marker"></em>198 Hoàng Văn Thụ, Phường 9, Quận Phú Nhuận, Thành phố Hồ Chí Minh
              </p>
              <p><em class="mdi mdi-phone"></em>0915 948 855 - 0961 324 950</p>
              <p><em class="mdi mdi-email"></em>cskh@khakim.com</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 ft-col">
            <div class="text-wrap">
              <h4>Liên kết nhanh</h4>
              <ul>
                <li><a href="#">Thông tin công ty</a></li>
                <li><a href="#">Blog làm đẹp</a></li>
                <li><a href="#">Hỗ trợ khách hàng</a></li>
                <li><a href="#">Tuyển dụng</a></li>
                <li><a href="#">Liên hệ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 ft-col">
            <div class="text-wrap">
              <h4>hỗ trợ khách hàng</h4>
              <ul>
                <li><a href="#">Theo dõi đơn hàng</a></li>
                <li><a href="#">Hướng dẫn mua hàng</a></li>
                <li><a href="#">Chính sách mua hàng</a></li>
                <li><a href="#">Chính sách đổi trả, hoàn tiền</a></li>
                <li><a href="#">Chính sách bảo mật</a></li>
                <li><a href="#">Quy chế hoạt động</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 ft-col">
            <div class="text-wrap social">
              <h4>Kết nối với chúng tôi</h4>
              <ul>
                <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                <li><a href="#"><em class="fa fa-youtube-play"></em></a></li>
                <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                <li><a href="#"><em class="fa fa-instagram"></em></a></li>
              </ul>
              <div class="certification"><img src="{{asset ('images/img/certification.png') }}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-wrapper">
        <div class="copyright">
          <p>2019 © The Shine Shop.<a href="https://www.canhcam.vn/thiet-ke-website" target="_blank"> Thiết kế website
            </a>bởi<a href="https://www.canhcam.vn" target="_blank"> Cánh Cam.</a></p>
        </div>
        <div class="sub-list">
          <ul>
            <li><a href="#">Điều khoản sử dụng</a></li>
            <li><a href="#">Chính sách bảo mật</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>