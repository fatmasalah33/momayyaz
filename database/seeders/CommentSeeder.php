<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'name' =>'ريان عبد الله عسيري',
            'country' =>' سعودي',
            'comment' =>'لصراحه الشكر لكم قليل في حقكم من جد كنتم في محل الثقه وكنتم معنا بكل وقت وماحتجنا لشي الا وفرتموه السواقين ذو اخلاق عاليه جداً جداً كانت الرحله بشكل عام من اجمل الرحلات اللي صارتلي في حياتي ...
            ',
        ]); 
        Comment::create([
            'name' =>'بلال قاسم ادريس',
            'country' =>'الاردن',
            'comment' =>'
            بداية لازم اشكركم على معاملتكم المميزة واللي ساعدتنا نشوف باريس اكثر جمالا ... برنامج رائع وسائقين مميزين 🌹 وبخصوص الغد حابين نلغي الرحلة لانه حابين نعمل شوية تسوق ونرتاح لانه الفترة الماضية كتير تعبنا وحابين نرتاح شوي ..
            ',
        ]); 
        Comment::create([
            'name' =>'سلطان دهيران الشلوي',
            'country' =>'سعودي',
            'comment' =>'استودعناكم الله ونشوفكم على خير الى لقاء اخر باذن الله الله يطول بعمرك
             ماقصرت ابد والله وانا لو برجع المالديف او احد راح يجي المالديف راح ع طول اقول له عن شركتكم الرائعه ...',
        ]); 
    }
}
