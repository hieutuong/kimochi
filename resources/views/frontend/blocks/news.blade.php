<!-- Latest Blog -->
{{-- <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>Bài viết gần đây</h2>
            <div class="row">
              <!-- single latest blog -->
              <?php $monngon = DB::table('monngon')->orderBy('id','desc')->take(3)->get(); ?>
              @foreach ($monngon as $item)
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="{!! url('mon-ngon',$item->monngon_url) !!}"><img src="{!! asset('resources/upload/monngon/'.$item->monngon_anh) !!}" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <br>
                      <span href="#"><i class="fa fa-clock-o"></i><p>{!!date("d-m-Y", strtotime("$item->created_at"))!!}</p></span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="{!! url('mon-ngon',$item->monngon_url) !!}">{!! $item->monngon_tieu_de !!}</a></h3>
                    <p>{!! $item->monngon_tom_tat !!}</p> 
                    <a href="{!! url('mon-ngon',$item->monngon_url) !!}" class="aa-read-mor-btn">Xem tiếp <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              @endforeach 
              
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section> --}}
<!-- / Latest Blog -->
<div class="home-4 py-5">
  <div class="container">
    <div class="heading-wrapper">
      <h2 class="shine-title">blog làm đẹp</h2>
      <div class="button"><a class="view-more-button" href="#">Xem thêm</a></div>
    </div>
    <div class="list-item-wrapper">
      <div class="row">
        <div class="col-lg-6">
          <?php $monngon = DB::table('monngon')->orderBy('id','desc')->take(1)->get(); ?>
          @foreach ($monngon as $item)
          <div class="blog-item top-item"><a href="{!! url('mon-ngon',$item->monngon_url) !!}">
              <figure>
                <div class="image"><img src="{!! asset('resources/upload/monngon/'.$item->monngon_anh) !!}" alt=""></div>
                <figcaption>
                  <time>{!!date("d-m-Y", strtotime("$item->created_at"))!!}</time>
                  <h5 class="title">{!! $item->monngon_tom_tat !!}</span>
                </figcaption>
              </figure>
            </a></div>
          @endforeach 
        </div>
        <div class="col-lg-6">
          <?php $monngon = DB::table('monngon')->orderBy('id','desc')->take(4)->get(); ?>
          @foreach ($monngon as $item)
          <div class="blog-item part-item"><a href="{!! url('mon-ngon',$item->monngon_url) !!}">
              <figure>
                <div class="image"><img src="{!! asset('resources/upload/monngon/'.$item->monngon_anh) !!}" alt=""></div>
                <figcaption>
                  <time>{!!date("d-m-Y", strtotime("$item->created_at"))!!}</time>
                  <h5 class="title">{!! $item->monngon_tom_tat !!}</span>
                </figcaption>
              </figure>
            </a></div>
            @endforeach 
        </div>
      </div>
    </div>
  </div>
</div>