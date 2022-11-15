@extends('web.layout')
@section('title')
وكالة مميز للسفر والسياحة 
@endsection
@section('styles')
<style>
.more{
    display: none;

}

</style>
@endsection
@section('main')
  <!--sidenav-->
    <!--=====================================================================-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset("web/img/$banner->slide_1")}}" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset("web/img/$banner->slide_2")}}" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset("web/img/$banner->slide_3")}}" class="d-block w-100 h-100" alt="...">
            </div>
        </div>
    </div>
    <!--=====================================================================-->
    <div class="our-features mt-1 ">
        <div class="container p-3">
            <div class="row m-3 d-flex justify-content-center ">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="head">
                        <h3>ما يميزنا</h3>
                    </div>
                </div>
                <!--col-sm-12-->
                <div style="border: 1px solid #ffffffff;border-radius: 15px; margin-right: 10px;"
                    class=" col-12 col-md-6 col-lg-3 my-3">
                    <div class="the-one">
                        <img src="{{ asset('web/img/icon-1.png')}}">
                        <a> رؤيتنا</a>
                        <p> ان تصبح وكاله سفريات مميز من الشركات الرائده في مجال السفر والسياحه ومواكبه اخر تطورات
                            المجال لنصبح الخيار الاول للمسافر السعودي</p>
                    </div>
                </div>
                <!--==========================================-->
                <div style="border: 1px solid #ffffffff;border-radius: 15px; margin-right: 10px;"
                    class=" col-12 col-md-6 col-lg-3 my-3">
                    <div class="the-one">
                        <img src="{{ asset('web/img/icon-3.png')}}">
                        <a> ما يميزنا</a>
                        <p style="text-align: start;">
                        <ul>
                            <li style="color: #ffffffff; margin-top: 5px;">
                                <span> لدينا طاقم عمل زوي خبرة عالية جدا في هذا المجال</span>
                            </li>
                            <li style="color: #ffffffff; margin-top: 5px;">تقديم حلول السفر والسياحة بكافة انواعها </li>
                            <li style="color: #ffffffff; margin-top: 5px;">اعلى معاير الجودة والمصداقية والسرعة</li>
                        </ul>
                        </p>
                    </div>
                </div>




                <div style="border: 1px solid #ffffffff;border-radius: 15px; margin-right: 10px;"
                    class=" col-12 col-md-6 col-lg-3 my-3">
                    <div class="the-one">
                        <img src="{{ asset('web/img/icon-4.png')}}">

                        <a> مهمتنا</a>
                        <p> <strong>تقديم البرامج السياحية للعرسان والعوائل والأفراد علي أعلي مستوي من التنظيم واحترافية
                                التنفيذ مع سرعة الرد .</strong></p>
                    </div>
                </div>




                <div style="border: 1px solid #ffffffff;border-radius: 15px; margin-right: 10px;"
                    class=" col-12 col-md-6 col-lg-3 my-3">
                    <div class="the-one">
                        <img src="{{ asset('web/img/icon-2.png')}}">

                        <a> خدماتنا</a>
                        <p> <strong>البرامج السياحية وحجوزات الطيران و الاستشارات السياحية وتنظيم المؤتمرات وخدمات النقل
                                والمواصلات حول العالم واصدار التأشيرات&nbsp;</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================================================-->
    <!--=====================================================================-->

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
                    <div class="see-more btnseemore">
                        <a onclick="seemore()">المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="new-offers d-none">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="head">
                        <h3>أحدث العروض المميزة</h3>
                    </div>
                </div>
                <!--col-sm-12-->
                <!-- 
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="the-city">
                        <img src="" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!--=====================================================================-->

    <!--=====================================================================-->

    <div class="testmonials p-3">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-12 col-xs-12">

                    <div class="d-flex justify-content-center head flex-column">
                        <h3 class="fw-bolder fs-3">اراء عملائنا</h3>
                        <h4>بعض اراء العملاء فى شركة مميز للسياحة و السفر</h4>
                        <div dir="rtl" class="w-100 bg-dark text-light p-lg-5 d-flex justify-content-between mb-5 flex-column rounded-3">
                            <div class="fs-4 fw-bold  mb-2 p-3">هل ترغب بأضافة تعليق لشركة مميز للسياحة و السفر</div>
                            <button type="button" class="btn btn-outline-light fs-4 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                اضغط هنا.
                             
                              </button>
                        </div>
                    </div>
                </div>
                                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضف تعليق</h5>
                        <button type="button" class="btn-close mx-5" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" method="POST" action="{{url('store')}}" >
                                @csrf
                                <div class="col-md-6">
                                  <label for="inputEmail4" class="form-label">الاسم</label>
                                  <input type="text"  name="name" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputPassword4" class="form-label">البلد</label>
                                  <input type="text" name="country" class="form-control" id="inputPassword4">
                                </div>
                              
                            
                                <div class="col-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">تعليقك</label>
                                    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                               
                                </div>
                              
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">غلق</button>
                        <button type="submit" class="btn btn-primary">ارسال التعليق</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>


                <!--col-sm-12-->
                @foreach ($comments as $comment)
                <div style=' margin-top: 30px; padding:20px; border-radius: 5px; margin-bottom: 10px;'
                    class="col-sm-12 col-lg-3 col-md-6 mx-2 bg-dark text-light text-center">
                    <span style="font-size: 18px; font-weight: 600; ">{{$comment->name}} |{{$comment->country}}</span><br>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="121.031" height="19.665" viewBox="0 0 121.031 19.665">
                            <defs>
                                <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                    gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#ffd200" />
                                    <stop offset="1" stop-color="#f7971e" />
                                </linearGradient>
                            </defs>
                            <path id="Stars"
                                d="M7505.463-6577.7a1.049,1.049,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.057,1.057,0,0,1-.291-1.11,1.13,1.13,0,0,1,.91-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.114,1.114,0,0,1,.88-.589h.421l.17.068.109.04a.669.669,0,0,1,.161.128l.09.068a1,1,0,0,1,.2.266l2.192,4.41a1.115,1.115,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.05,1.05,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.889,4.833a1.092,1.092,0,0,1-.889,1.25,1.191,1.191,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.109,1.109,0,0,0-.5.128l-4.428,2.269a1.114,1.114,0,0,1-.521.128A1.116,1.116,0,0,1,7505.463-6577.7Zm-25,0a1.05,1.05,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.908-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.117,1.117,0,0,1,.879-.589h.421l.17.068.11.04a.667.667,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.051,1.051,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.115,1.115,0,0,0-.5.128l-4.429,2.269a1.1,1.1,0,0,1-.521.128A1.118,1.118,0,0,1,7480.462-6577.7Zm-25,0a1.049,1.049,0,0,1-.451-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.053,1.053,0,0,1-.289-1.11,1.126,1.126,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.421l.17.068.109.04a.633.633,0,0,1,.161.128l.09.068a1.052,1.052,0,0,1,.2.266l2.19,4.41a1.117,1.117,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.046,1.046,0,0,1-.268,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.115,1.115,0,0,0-.5.128l-4.426,2.269a1.116,1.116,0,0,1-.523.128A1.106,1.106,0,0,1,7455.464-6577.7Zm-25,0a1.05,1.05,0,0,1-.451-1.061l.889-4.832a1.07,1.07,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.113,1.113,0,0,0,.831-.6l2.218-4.391a1.116,1.116,0,0,1,.879-.589h.421l.17.068.11.04a.639.639,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.97.708a1.124,1.124,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.094,1.094,0,0,1-.891,1.25,1.2,1.2,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.12,1.12,0,0,0-.5.128l-4.427,2.269a1.115,1.115,0,0,1-.523.128A1.111,1.111,0,0,1,7430.464-6577.7Zm-25,0a1.049,1.049,0,0,1-.45-1.061l.887-4.832a1.063,1.063,0,0,0-.319-.954l-3.739-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.423l.17.068.107.04a.667.667,0,0,1,.162.128l.089.068a1.064,1.064,0,0,1,.2.266l2.189,4.41a1.119,1.119,0,0,0,.882.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.092,1.092,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.861.861,0,0,0-.27-.086h-.271a1.107,1.107,0,0,0-.5.128l-4.429,2.269a1.113,1.113,0,0,1-.522.128A1.111,1.111,0,0,1,7405.464-6577.7Z"
                                transform="translate(-7400.985 6596.656)" stroke="rgba(0,0,0,0)" stroke-width="1"
                                fill="url(#linear-gradient)" />
                        </svg><br>
                        <span style="font-size: 13px;  ">
                            {{$comment->comment}}
                        </span>
                    </div>
                </div>
                @endforeach
                <!-------------end commit 1-------------->
   

            </div>
        </div>
    </div>

    <!--=====================================================================-->
        <!--=====================================================================-->

        <div style="background-image: url({{asset('web/img/tour.png')}});
        background-size: cover;
        min-height: 200px;
        overflow: hidden;"
         class="col-md-12 d-flex justify-content-center tour-footer">
        </div>
    
        <!--=====================================================================-->

@endsection