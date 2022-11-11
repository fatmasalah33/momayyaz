<!--==========================================-->
<!--================MonoSPace================-->
<!--============www.MonoSpace.ga=============-->
<!--===============01028887119===============-->
<!--==========================================-->


<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <title> @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('web/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css')}}">
    @yield('styles')
</head>
<style>
    .tour-footer{
            background: url(./assest/img/tour.png);
    background-size: cover;
    min-height: 200px;
    overflow: hidden;
    }

</style>
<body style=" font-family: bein-normal, sans-serif;" class="rtl home blog">
    <!--=====================================================================-->
    <div class="the-after"></div>
    <!--=====================================================================-->
    <div class="up-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="social-media">
                        <!--twiter-->
                        <ul>
                            <li><a href=""> <img style="height: 15px;" src="{{ asset('web/img/tweter.webp')}}"> </a></li>
                            <!--insta-->
                            <li><a href=""> <img style="height: 15px;" src="{{ asset('web/img/insta.webp')}}"> </a></li>
                            <!--snap-->
                            <li><a href=""> <img style="height: 15px;" src="{{ asset('web/img/snap.webp')}}"> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 col-md-9 col-xs-12">
                    <div class="tel">
                        <ul>
                            <!--envelop-->
                            <li> <a style="text-decoration: none;" href="#">info@loerm <img style="height: 15px;"
                                        src="{{ asset('web/img/env.webp')}}"></a> </li>
                            <!--phone-->
                            <li><a style="text-decoration: none;" href=""> <i><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-telephone-fill"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg></i> 1000000000 </a> </li>
                            <!--phone-->
                            <li><a style="text-decoration: none;" href="tel: 0580422098"> <i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                                        </svg></i> 0580422098</a> </li>
                            <!--phone-->
                            <li><a style="text-decoration: none;" href="tel: 0580422098"> <i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                                        </svg></i> 0580422098</a> </li>
                            <!--mob-->
                            <li> <a style="text-decoration: none;" href="tel:0580422098">0580422098 <i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.885.511a1.7451.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg></i></a> </li>
                        </ul>
                    </div>
                    <!--tel-->
                </div>
                <!--col-sm-9-->
                <hr>
            </div>
        </div>
    </div>
    <!--=====================================================================-->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-xs-6">
                    <div class="logo">
                        <a href=""><img src="{{ asset('web/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-9 col-md-9 col-xs-6">
                    <div class="menu">
                        <ul class="main-menu">
                            <li id="menu-item-102">
                                <a href="{{url("/")}}">الرئيسية</a>
                            </li>
                            <li id="menu-item-153" class=" mx-5"><a href="#programme">العروض
                                    السياحية</a></li>
                            <li id="menu-item-111" class=" mx-5"><a href="{{url("ticket")}}">حجوزات
                                    الطيران</a></li>
                            <li id="menu-item-119" class=" mx-5"><a href="#">تواصل
                                    معنا</a></li>
                        </ul>
                    </div>
                    <div class="hidden-xx">
                        <i onclick="openNav()"><svg style="width: 50px;height: 100px;"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================================================-->
    <div id="mySidenav" class="sidenav">
        <div class="col-xs-12">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i aria-hidden="true">
                    <svg style="width: 50px;height: 50px;" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-arrow-right-short text-light" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                </i></a>
        </div>
        <div class="col-xs-12">
            <img style="width: 150px;" src="{{ asset('web/img/logo.png')}}" alt="">
        </div>

        <div class="sidenav-menu ">
            <ul class="menu-nav">
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li><a href="">العروض
                        السياحية</a></li>
                <li><a href="">العروض
                        المميزة</a></li>
                <li><a href="">حجوزات
                        الطيران</a></li>
                <li><a href="">تواصل
                        معنا</a></li>
            </ul>
        </div>

    </div>





	<!-- /Header -->
    @yield('main')
    <!-- Footer -->



    
    <!--=====================================================================-->

    <div class="col-md-12 d-flex justify-content-center tour-footer">
    </div>

    <!--=====================================================================-->
    <div class="footer bg-dark">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="logo-footer">
                        <h4> روابط المواقع </h4>
                        <hr>
                        <ul class="main-menu">
                            <li id="menu-item-102">
                                <a href="#">الرئيسية</a>
                            </li>
                            <li id="menu-item-153" class=" mx-5"><a href="#">العروض
                                    السياحية</a></li>
                            <li id="menu-item-111" class=" mx-5"><a href="#">حجوزات
                                    الطيران</a></li>
                            <li id="menu-item-119" class=" mx-5"><a href="#">تواصل
                                    معنا</a></li>
                        </ul>
                    </div>
                </div>
                <!--col-sm-3-->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="logo-footer">
                        <h4> أشهر الوجهات السياحية </h4>
                        <hr>

                        <ul>



                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></i><span style="cursor: pointer;" class="text-light me-3 ">ابو ظبي</span></li>


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></i><span style="cursor: pointer;" class="text-light me-3 ">ايطليا</span></li>


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></i><span style="cursor: pointer;" class="text-light me-3 ">ماليزيا</span></li>


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></i><span style="cursor: pointer;" class="text-light me-3 ">المنيا</span></li>


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></i><span style="cursor: pointer;" class="text-light me-3 ">سيرلانكا</span></li>


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></i><span style="cursor: pointer;" class="text-light me-3 ">روسيا</span></li>


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></i><span style="cursor: pointer;" class="text-light me-3 ">سيشل</span></li>


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></i><span style="cursor: pointer;" class="text-light me-3 ">اندونيسيا</span></li>


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left -circle-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></i><span style="cursor: pointer;" class="text-light me-3 ">البوسنة</span></li>
                        </ul>


                    </div>
                </div>
                <!--col-sm-3-->


                <!--col-sm-3-->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="logo-footer">
                        <h4> اتصل بنا </h4>
                        <hr>
                        <ul>
                            <!--envelop-->
                            <li> <a style="text-decoration: none;" href="#">info@loerm</a> </li>
                            <!--phone-->
                            <li><a style="text-decoration: none;" href=""> <i><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-telephone-fill"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg></i> 1000000000 </a> </li>
                            <!--phone-->
                            <li><a style="text-decoration: none;" href="tel: 0580422098"> <i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                                        </svg></i> 0580422098</a> </li>
                            <!--phone-->
                            <li><a style="text-decoration: none;" href="tel: 0580422098"> <i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                                        </svg></i> 0580422098</a> </li>
                            <!--mob-->
                            <li> <a style="text-decoration: none;" href="tel:0580422098">0580422098 <i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.885.511a1.7451.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg></i></a> </li>
                        </ul>
                    </div>
                </div>
                <!--col-sm-3-->

                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="copyright">
                        <p>جميع الحقوق محفوظة © سفريات مميز 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================================================-->
    <ul class="fixed-icons">

        <li><a href="https://wa.me/+" id="whatsapp"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg></i></a></li>
        <!--=====================================================================-->
        <li><a href="" id="twitter"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg></i></a></li>
        <!--=====================================================================-->
        <li><a href="" id="instagram"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg></i></a></li>
        <!--=====================================================================-->

        <li><a href="https://www.snapchat.com/add/alsafwa_travels?share_id=m5Nh8M7qDQQ&amp;locale=ar-sa"
                id="snapchat"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-snapchat text-dark" viewBox="0 0 16 16">
                        <path
                            d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1.416 1.416 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.387 3.387 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.338.338 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.397 1.397 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.829 1.829 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.294 4.294 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0c-.92 0-1.76.216-2.505.641-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.83 1.83 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.398 1.398 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.38.38 0 0 1 .109.11c.026.053.027.11-.012.217a3.363 3.363 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075.119.125.257.23.409.31a4.43 4.43 0 0 0 1 .4.66.66 0 0 1 .202.09c.118.104.102.26.259.488.079.118.18.22.296.3.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.625.625 0 0 1 .19-.087 4.446 4.446 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047Zm-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082-1.519 0-2.045-.801-2.904-1.084-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a.93.93 0 0 1 .197.022c.396.086.78.285 1.002.338.027.007.054.01.082.011.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.35.35 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a.912.912 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464Z" />
                    </svg></i></a></li>
        <!--=====================================================================-->

    </ul>
</body>
<script src="{{ asset('web/js/init.js')}}"></script>
<script src="{{ asset('web/js/script.js')}}"></script>
<script src="{{ asset('web/js/lf30_editor_6swkyjrl.json')}}"></script>
<script src="{{ asset('web/js/bootstrap.min.js')}}"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script>new WOW().init();</script>
@yield('scripts')
</html>