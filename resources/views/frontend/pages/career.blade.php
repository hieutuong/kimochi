@extends('frontend.master')
@section('content')
  <!-- catg header banner section -->
  {{-- <section id="aa-catg-head-banner">
   <img src="{!! url('public/images/careerpanel.jpg') !!}" alt="fashion img" style="width: 1920px; height: 300px;" >
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Tuyển dụng</h2>
        <ol class="breadcrumb">
          <li><a href="{!! url('/') !!}">Home</a></li>         
          <li class="active">Tuyển dụng</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  </section>
  <!-- / product category -->
   <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-12">
                <div class="aa-myaccount-login">
                <h4>Thông tin tuyển dụng</h4>
                 @if (!is_null($tuyendung))
                 <article class="aa-blog-content-single" >                     
                     <div class="aa-article-bottom">
                  </div>
                  <?php 
                    $ngaybd =  date("Y-m-d", strtotime("$tuyendung->created_at")); // Năm/Tháng/Ngày
                    $ngaykt = date("Y-m-d",strtotime($ngaybd . "+ $tuyendung->tuyendung_thoi_gian  day"));
                  ?>

                    <p>
                    Thời gian khuyến mãi:
                    <button type="button" class="btn btn-danger">{{date('d-m-Y',strtotime($ngaybd))}}</button>
                    đến
                    <button type="button" class="btn btn-danger">{{date('d-m-Y',strtotime($ngaykt))}}</button>
                    </p>
                    <p><b><i>Yêu cầu và Mô tả công việc: </i></b></p>
                    <br>
                    <p>{!! $tuyendung->tuyendung_mo_ta !!}</p>
                    <hr>
                    <p><b><i>Liên hệ: </i></b></p>
                    <br>
                    <p>{!! $tuyendung->tuyendung_lien_he !!}</p>
                  </article>
                 @else
                 <p><i>Hiện tại chúng tôi chưa có nhu cầu tuyển dụng!</i></p>
                 @endif
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section> --}}
 <section class="main-section about-1">
  <div class="container">
    <h2 class="main-title">Giới thiệu</h2>
    <div class="row">
      <div class="col-lg-6">
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, delectus ut. Nostrum aliquam voluptates, expedita impedit accusamus facere. Voluptatibus ratione temporibus inventore iusto et aut necessitatibus voluptas dolorem cupiditate dignissimos!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, tempore reiciendis tenetur porro dolorem repellendus dicta. Perferendis, nemo explicabo recusandae aspernatur dolor debitis suscipit ratione porro animi vel voluptatum magni.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="image"><img src="{{asset ('images/img/banner-1.png') }}" alt=""></div>
      </div>
    </div>
  </div>
</section>
<section class="main-section about-2">
  <div class="container">
    <h2 class="main-title">Tầm nhìn và sứ mệnh</h2>
    <div class="row">
      <div class="col-lg-6">
        <h3 class="main-child">Tầm nhìn</h3>
        <div class="content-wrapper">
          <div class="icon"><img src="./img/icon/1.png" alt=""></div>
          <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet consequuntur repellat tempore dolore, numquam sunt quibusdam sapiente temporibus ut, commodi iste assumenda sequi sed ad error vero sit hic a?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis nulla vero officiis qui dolore eum sunt, quam vitae quia laboriosam reprehenderit ad veniam a consectetur quos mollitia minima quas nemo?</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h3 class="main-child">Sứ mệnh</h3>
        <div class="content-wrapper">
          <div class="icon"><img src="./img/icon/2.png" alt=""></div>
          <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem autem ut voluptate quaerat, dignissimos vero aspernatur est ab nisi! Eius similique laudantium error exercitationem aliquid iure quae? Eum, ipsa odit.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta necessitatibus obcaecati tenetur animi, mollitia error totam quaerat voluptates ullam, enim accusamus ea, tempora placeat? Voluptatem ut esse illo ad repellendus?</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Footer -->
@stop