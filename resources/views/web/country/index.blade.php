@extends('web.layout')
@section('title')
العروض السياحية
@endsection

@section('styles')
<style>
    lable {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
    }

</style>
@endsection
@section('main')
<div class="newest-programs" id="programme">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="head flex-sm-column">
                    <div class="d-flex justify-content-center">
                        <lottie-player
                            src="https://assets10.lottiefiles.com/temp_editor_files/lf30_editor_6swkyjrl.json"
                            background="transparent" speed="0.7" style="width: 300px; height: 300px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h3>أحدث البرامج السياحية</h3>
                </div>
            </div>
    
             @foreach ($Countries as $country)
             @if($country->id<11)
                     <!--col-sm-12-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="the-program ">
                    <img src="{{ asset("web/img/$country->img")}}" alt="">
                    <div class="links p-2 mt-5">
                        <a href="{{url("/details/show/$country->id")}}">تفاصيل العرض</a>
                        <a href="{{url("/ticket")}}">حجز العرض</a>
                    </div>
                </div>
            </div>
            <script>
                function ditails() {
                    location.href = "./details/index.html"
                }
                function offer() {
                    location.href = "./tickt/index.html"
                }
            </script>
            @endif
             @endforeach
             @foreach ($Countries as $country)
             @if($country->id>10)
                     <!--col-sm-12-->
            <div class="col-md-4 col-sm-6 col-xs-12 more">
                <div class="the-program ">
                    <img src="{{ asset("web/img/$country->img")}}" alt="">
                    <div class="links p-2 mt-5">
                        <a href="{{url("/details/show/$country->id")}}">تفاصيل العرض</a>
                        <a href="{{url("/ticket")}}">حجز العرض</a>
                    </div>
                </div>
            </div>
            <script>
                // function ditails() {
                //     location.href = "./details/index.html"
                // }
                // function offer() {
                //     location.href = "./tickt/index.html"
                // }
                function seemore() {
                    var morecountry=document.getElementsByClassName('more');
                
                    for (let index = 0; index < morecountry.length; index++) {
                        morecountry[index].style.display='inline-block';
                        
                    }
                    var btnseemorecountry=document.getElementsByClassName('btnseemore')[0];
                    btnseemorecountry.style.display='none';
                 
                }
            </script>
            @endif
             @endforeach
            <!--more brn-->
            <div class="col-sm-12 col-md-12 col-xs-12">
                {{-- <div class="see-more btnseemore">
                    <a onclick="seemore()">المزيد</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection