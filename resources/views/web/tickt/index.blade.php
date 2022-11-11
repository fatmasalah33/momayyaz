@extends('web.layout')
@section('title')
طلب الحجز
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


<div class="programs-details ">
    <div class="container">
        <div class="static-content row ">
            <div class="row section-title">
                <div class="col col-md-12">
                    <h2 style="color: #123a54;" class="text-center">طلب الحجز</h2>
                </div>
                <div class="d-flex justify-content-center">
                    <lottie-player src="https://assets9.lottiefiles.com/temp_editor_files/lf30_editor_wodapvej.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                        </div>
            </div>
            <div class="static-data-content">
                <section class="d-flex justify-content-center p-3">
                    <div class="col-md-8 col-md-push-2">
                        <div class="col-md-12">
                            <div id="result"></div>
                            <form  method="POST" action="{{url('/ticket/store')}}" class="contact_us_form row bg-dark rounded-3 py-lg-4 ">
                                @csrf
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">الإسم</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="الإسم كاملا">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">الجنسية</label>
                                    <input type="text" class="form-control" id="nationality"
                                     name="nationality"
                                        placeholder="الجنسية">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">الاقامة فى دولة</label>
                                    <input type="text" class="form-control" id="country" name="country"
                                        placeholder="الاقامة فى دولة">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">رقم الهاتف</label>
                                    <input type="text" class="form-control" id="mobile" name="phone"
                                        placeholder="رقم الهاتف">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">الإيميل الحقيقي</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="الإيميل">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">تاريخ الوصول المتوقع</label>
                                    <input type="date" class="form-control hasDatepicker" id="arrive_date"
                                        name="date_of_arrival" placeholder="تاريخ الوصول" autocomplete="off">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">تاريخ المغادرة المتوقع</label>
                                    <input type="date" class="form-control hasDatepicker" id="departure_date"
                                        name="departure_date" placeholder="تاريخ المغادرة" autocomplete="off">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace"> نوع الحجز</label>
                                    <select name="booking_type" class="form-control valid">
                                       
                                        <option value="Complete tour program">برنامج سياحي كامل</option>
                                        <option value="Hotel tourism program only">برنامج سياحي فنادق فقط</option>
                                        <option value="Transportation and tourism program Tours only">برنامج سياحي مواصلات و
                                            جولات فقط</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">عدد البالغين</label>
                                    <input type="text" class="form-control" id="adults" name="number_of_adults"
                                        placeholder="عدد البالغين">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">عدد الأطفال</label>
                                    <input type="text" class="form-control" id="childs" name="number_of_children"
                                        placeholder="عدد الأطفال">
                                </div>
                                <div class="form-group col-md-12 text-right">
                                    <label class="text-light font-monospace">تفاصيل اخرى</label>
                                    <textarea name="other_details" placeholder="تفاصيل اخرى"
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
    </div>
    <!--=====================================================================-->
    <!--=====================================================================-->
    <!--=====================================================================-->
</div>
</div>
</div>

@endsection