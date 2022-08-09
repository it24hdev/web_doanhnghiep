

<div{{--  class="background_header" --}} style="max-width: 1350px; padding: 0px; margin-left: auto; margin-right: auto;">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @php
            $t=-1;
        @endphp
        @foreach ($sliders as $slider)
            @php
                $t++;
            @endphp
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$t}}" class="{{($t==0) ? 'active' : ''}}" aria-current="{{($t==0) ? 'true' : ''}}" aria-label="Slide {{$t+1}}"></button>
        @endforeach
    </div>
  <div class="carousel-inner rounded-2">
    @foreach ($sliders as $slider)
    <div class="carousel-item active {{($slider->position == 1) ? 'active' : ''}}" style="background-image:url({{asset('upload/images/slider/'.$slider->image)}}); ">
    {{-- <img src="upload/background6.jpg" class="d-block w-100"> --}}
    {{-- <P class = "pheader">Trung tâm Ngoại ngữ</P><br>
    <strong class="pheader2">Phương Đông VMA</strong>
    <p class = "pheader3">Chuyên đào tạo</p>
    <i class = "pheader4 ph1" style=" transform: translate(120px, 440px);">- Ngôn ngữ Trung Quốc</i>
    <i class = "pheader4 ph2" style=" transform: translate(120px, 480px);">- Kĩ năng từ vựng chuyên ngành cơ bản</i>
    <i class = "pheader4 ph3" style=" transform: translate(120px, 520px);">- Kĩ năng Vi tính văn phòng cơ bản</i>
    <i class = "pheader4 ph4" style=" transform: translate(120px, 560px);">- Kĩ năng trong giao tiếp văn phòng</i> --}}
    </div>
    @endforeach
{{--     <div class="carousel-item">
    <img src="upload/background7.jpg" class="d-block w-100">
    <strong class="pheader2 ph7"  style=" transform: translate(120px, 200px);">Cam kết</strong>
    <P class = "pheader ph8"  style=" transform: translate(120px, 250px); font-size: 40px;">Mức lương khởi điểm hấp dẫn</P>
    <i class = "pheader4 ph9" style=" transform: translate(120px, 300px); font-size: 30px;">30 ~ 60 Triệu</i>
    <P class = "pheader ph10"  style=" transform: translate(120px, 350px); font-size: 30px;">Chi phí xuất ngoại</P>
    <i class = "pheader4 ph11" style=" transform: translate(120px, 400px);  font-size: 30px;">0 Đồng</i>
    </div> --}}
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
   <div class="background_header_shadow"></div>
<div class="header_phone">
    <a  href="tel:800-555-6789">Đăng ký ngay!</a>
</div>
</div>
</div>

@section('js')
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4500,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
            },
        });


    });
</script>
@endsection