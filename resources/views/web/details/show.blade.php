@extends('web.layout')
@section('title')
{{$country->name}}
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
 <!--sidenav-->

 <div class="about">
    <img src="{{ asset("web/img/$country->img")}}" alt="">
</div>

<!--=====================================================================-->
<div class="programs-details p-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="col-md-12 col-xs-12">
                    <div class="tab-content">
                        <div id="home">
                            <div class="details-of-prog">
                                <h4>المنيا خمس نجوم</h4>
                                <hr>
                                <h4>تفاصيل البرنامج السياحي</h4>

                                <h5><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-left-circle-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                        </svg></i> اليوم الاول </h5>

                                <span>
                                    @if(count($trip) > 0)
                                    {{$trip[0]->first_day}}
                                @endif
                            </span>


                                <h5><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-left-circle-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                        </svg></i> اليوم الثانى </h5>

                                <span>     
                                     @if(count($trip) > 0)
                                    {{$trip[0]->second_day}}
                                @endif
                            </span>


                                <h5><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-left-circle-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                        </svg></i> اليوم الثالث </h5>

                                <span>   
                                       @if(count($trip) > 0)
                                    {{$trip[0]->third_day}}
                                @endif</span>


                                <h5><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-left-circle-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                        </svg></i> اليوم الرابع </h5>

                                <span>
                                    @if(count($trip) > 0)
                                    {{$trip[0]->fourth_day}}
                                @endif
                                </span>


                                <h5><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-left-circle-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                        </svg></i> اليوم الخامس </h5>

                                <span>
                                    @if(count($trip) > 0)
                                    {{$trip[0]->fifth_day}}
                                @endif
                                </span>
                            </div>
                            <!--details-of-prog-->
                        </div>
                        <!--home-->

                        <div id="menu2">
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <div class="head">
                                    <h4>مشتملات الرحلة</h4>
                                    <hr>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <div class="including-prog">
                                    <h5>الرحلة تشمل</h5>
                                    <ul>


                                        <li> <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                    <path
                                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                                </svg></i> 
                                                @if(count($trip) > 0)
                                                {{$trip[0]->trip_includes}}
                                            @endif
                                        </li>
                                

                                    </ul>
                                    <h5>الرحلة لا تشمل</h5>
                                    <ul class="none">


                                        <li> <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                    <path
                                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                                </svg></i>
                                                @if(count($trip) > 0)
                                                {{$trip[0]->trip_does_not_include}}
                                            @endif </li>
                                                


                                   

                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <!--=====================================================================-->
            <!--=====================================================================-->
            <!--=====================================================================-->

                        <div class="container">
        <div class="static-content row ">
            <div class="row section-title">
                <div class="col col-md-12">
                    <h2 style="color: #123a54;" class="text-center">طلب الحجز</h2>
                </div>
            </div>
            <div class="static-data-content">
                <section class="d-flex justify-content-center ">
                    <div class="col-md-8 col-md-push-2">
                        <div class="col-md-12">
                            <div id="result"></div>
                            <form class="contact_us_form row bg-dark rounded-3 py-lg-4 ">
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">الإسم</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="الإسم كاملا">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">الجنسية</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality"
                                        placeholder="الجنسية">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">الاقامة فى دولة</label>
                                    <input type="text" class="form-control" id="country" name="country"
                                        placeholder="الاقامة فى دولة">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">رقم الهاتف</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        placeholder="رقم الهاتف">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">الإيميل الحقيقي</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="الإيميل">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">تاريخ الوصول المتوقع</label>
                                    <input type="text" class="form-control hasDatepicker" id="arrive_date"
                                        name="arrive_date" placeholder="تاريخ الوصول" autocomplete="off">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">تاريخ المغادرة المتوقع</label>
                                    <input type="text" class="form-control hasDatepicker" id="departure_date"
                                        name="departure_date" placeholder="تاريخ المغادرة" autocomplete="off">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace"> نوع الحجز</label>
                                    <select name="booking_type" class="form-control valid">
                                        <option> نوع الحجز </option>
                                        <option value="برنامج سياحي كامل">برنامج سياحي كامل</option>
                                        <option value="برنامج سياحي فنادق فقط">برنامج سياحي فنادق فقط</option>
                                        <option value="برنامج سياحي مواصلات و جولات فقط">برنامج سياحي مواصلات و
                                            جولات فقط</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">عدد البالغين</label>
                                    <input type="text" class="form-control" id="adults" name="adults"
                                        placeholder="عدد البالغين">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">عدد الأطفال</label>
                                    <input type="text" class="form-control" id="childs" name="childs"
                                        placeholder="عدد الأطفال">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">تفاصيل اخرى</label>
                                    <textarea name="notes" placeholder="تفاصيل اخرى"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit"
                                        class="btn submit_btn_black btn-primary form-control mt-3 ">إحجز الأن</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>

            <!--=====================================================================-->
            <!--=====================================================================-->
            <!--=====================================================================-->
        </div>
    </div>
</div>

<!--=====================================================================-->
<div class="newest-programs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="head">
                    <h3> برامج مشابهة</h3>
                </div>
            </div>
            <!--col-sm-12-->

           
            @foreach ($Countries as $country)
            @if($country->id<7)
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
      
           @endif
            @endforeach
         
        </div>



    </div>
</div>
<!--=====================================================================-->
@endsection