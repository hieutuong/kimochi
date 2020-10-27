
{{-- <div class="navbar-collapse collapse">
<!-- Left nav -->
  <ul class="nav navbar-nav">
    <li><a href="{!! url('/') !!}" style="font: 18px tahoma, sans-serif;">Trang chủ</a></li>
    <?php 
      $nhom =  DB::table('nhom')->get();
     ?>
    @foreach ($nhom as $menu_1)
    <li><a href="{!! url('nhom-thuc-pham',$menu_1->nhom_url) !!}" style="font: 18px tahoma, sans-serif;">{!! $menu_1->nhom_ten !!}</a>
      <?php 
          $loaisp = DB::table('loaisanpham')->where('nhom_id',$menu_1->id)->get();
       ?>
      <ul class="dropdown-menu">
      @foreach ($loaisp as $menu_2)
         <li><a href="{!! url('loai-san-pham',$menu_2->loaisanpham_url) !!}" style="font: 18px tahoma, sans-serif;">{!! $menu_2->loaisanpham_ten !!}</a></li>             
      @endforeach                             
      </ul>
    </li>
    @endforeach
    <li><a href="{!! url('khuyen-mai') !!}" style="font: 18px tahoma, sans-serif;">Khuyến mãi</a></li>
    <li><a href="{!! url('mon-ngon') !!}" style="font: 18px tahoma, sans-serif;">Món ngon</a></li>            
    <li><a href="{!! url('gioi-thieu') !!}" style="font: 18px tahoma, sans-serif;">Tuyển dụng</a></li>
    <li><a href="{!! url('lien-he') !!}" style="font: 18px tahoma, sans-serif;">Liên hệ</a></li>
  </ul>
</div> --}}


<div class="toggle-wrapper black"><em class="fa fa-align-left"></em><span>Danh mục sản phẩm</span>
  <ul class="semi hidden-wrapper">
    <?php 
        $nhom =  DB::table('nhom')->get();
      ?>
    @foreach ($nhom as $menu_1)
    <li class="has-drop"><a href="{!! url('nhom-thuc-pham',$menu_1->nhom_url) !!}" style="font: 18px tahoma, sans-serif;">{!! $menu_1->nhom_ten !!}</a>
      <?php 
          $loaisp = DB::table('loaisanpham')->where('nhom_id',$menu_1->id)->get();
       ?>
      <ul class="dropdown-menu">
      @foreach ($loaisp as $menu_2)
         <li><a href="{!! url('loai-san-pham',$menu_2->loaisanpham_url) !!}" style="font: 18px tahoma, sans-serif;">{!! $menu_2->loaisanpham_ten !!}</a></li>             
      @endforeach                             
      </ul>
    </li>
    @endforeach
    </li>
  </ul>
</div>
<div class="main-list-wrapper black">
  <ul>
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li><a href="{!! url('gioi-thieu') !!}">Thông tin công ty</a></li>
    <li><a href="{{ route('get.news') }}">Blog làm đẹp</a></li>
    <li><a href="{!! url('lien-he') !!}">Hỗ trợ khách hàng</a></li>
  </ul>
</div>
<div class="phone-wrapper"><a href="#"><em class="mdi mdi-phone"></em>0915 948 855 - 0961 324 950</a></div>