<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Model\User::class, function (Faker $faker) {
    
    return [
        'user_name' => $faker->name,
        'full_name' => $faker->name,
        'password' => '$2y$10$mXwEFI/nQub9PmCejn59zuozRujElm4bu5D01y.wXpciRnKjHRWNm', // admin
        'email' => Str::random(10). $faker->email,
        'role' => $faker->randomElement($array = range (0,1))
    ];
});
$factory->define(App\Model\Bref::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'title' => "صحتك",
        'description' =>" التكلفة الإجمالية للمجمع بجميع التجهيزات 50000000 جنيه مصري ( خمسون مليون جنيه مصري) وتشمل تكلفة شراء العقار الخاص بالمجمع وتكلفة كافة التجهيزات و شراء الأجهزة الطبية والمبلغ قابلة للزيادة والنقصان في حالة تغير أسعار التجهيزات الخاصة بالمجمع ",
        "descriptionPoint" => '<section class="bg-white">
        <div class="container">
            <div class="row wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
                <div class="col-12 text-center">
                    <h3 class="text-primary font-30  font-weight-bold">مساحة المشروع</h3>
                    <p class="font-25 mb-4"> 1840 متر مربع المستشفى (دورأرضي +أربع أدوار علوية) فى برج بدروم وأرضي و
                        11 دور علوي </p>
                    <h3 class="text-primary font-30  font-weight-bold"> تضم تخصصات طبية مختلفة بالإضافة إلي </h3>
                    <p class="font-25 mb-4">معمل تحاليل - مركز أشعة - حضانة أطفال
                        مركز غسيل كلوي وصيدلية
                        حضانة للأطفال المبتسرين بمقر بشارع الهلالي مساحته 286 متر مربع
                        تضم نخبة من الأطباء المتخصصين في جميع التخصصات الطبية المختلفة
                        وسيتم التعاقد مع أطباء و مستشفيات عالميين لإجراء الجراحات الطبية المعقدة</p>
                    <h3 class="text-primary font-30  font-weight-bold"> تكلفة المشروع</h3>
                    <p class="font-25 mb-4">التكلفة الإجمالية للمجمع بجميع التجهيزات جنيه مصري ( خمسون مليون جنيه
                        مصري ) قابلة للزيادة والنقصان في حالة تغير أسعار التجهيزات الخاصة بالمجمع .
                        تكلفة شراء العقار الخاص بالمجمع: 25000000 جنيه مصري
                        تكلفة ا التجهيزات و شراء الأجهزة الطبية 25000000 جنيه مصري قابلة للزيادة والنقصان وذلك بحسب
                        الإنتهاء من تجهيزات المجمع</p>
                    <h3 class="text-primary font-30  font-weight-bold">صناعة القرار وإدارة المشروع</h3>
                    <p class="font-25 mb-4 text-left">سوف يتم توزيع التكلفة الإجمالية للمجمع الطبي علي عدد من
                        المساهمين حيث يبلغ عدد المساهمين في المشروع 1000 مساهم ينبثق من المساهمين مجلس إدارة يضم كل
                        من يملك أو يفوض من 20 مساهم وبذلك يضم مجلس الإدارة عدد 50 عضو</p>
                    <h3 class="text-primary font-30  font-weight-bold">الأسهم والدفعات</h3>
                    <p class="font-25 mb-4 text-left">قيمة السهم وطريقة السداد
                        ثمن السهم 50000 جنيه ( خمسون ألف جنيه مصري لاغير ). يتم دفع مبلغ وقدره 26000 جنيه ( ست
                        وعشرون ألف جنيه مصري لاغير ) وذلك قيمة العقار وبداية التراخيص.
                        يتم دفع باق قيمة السهم وهي 24000 جنيه ( أربع وعشرون ألف جنيه مصري لاغير ) أقساط ثلث سنوية
                        قيمة القسط 8000 جنيه ( ثمانية ألاف جنيه مصري لاغير) وذلك قيمة التجهيزات الطبية المختلفة</p>
                </div>
            </div>
        </div>
    </section>',
        'phone' => $faker->e164PhoneNumber,
        'phone2' => $faker->e164PhoneNumber,
        'address' =>$faker->address ,
        'video' => "https://www.youtube.com/embed/AZ1tfR2HxfY",
        'facebook' => "www.facebook.com",
        'twitter' => "https://twitter.com/",
        'instagram' => "https://www.instagram.com/",
        
        
    ];
});
$factory->define(App\Model\Gallery::class, function (Faker $faker) {
    return [
        
      
        'user_id' =>$faker->randomElement($array = range (1,5)) ,
    ];
});
$factory->define(App\Model\News::class, function (Faker $faker) {
   
    return [
        'title' => $faker->name,
        'description' => " قبت بالولايات في حين. ان يقوم الدنمارك أخذ, الأمم وقامت المتّبعة ان وقد, كل دول واتّجه وبالتحديد،. قد إحكام الأولى وقوعها، قام, قد بين أواخر الصفحات, عل شيء لإعلان الأمور المتحدة. أعمال باستحداث عن حين, كل عدد لأداء أوروبا الفرنسية, بهيئة اليها لان قد. ومن كثيرة الشّعبين ثم, فصل ٣٠ أوسع الثالث. لان هو ويتّفق الأهداف. كل اتفاق أفريقيا لها, دفّة الإتحاد به، بـ, لإعادة مقاومة الشتوية مكن تم. ",
        'date' => $faker->date,
        'user_id' =>$faker->randomElement($array = range (1,5)) ,
    ];
});
$factory->define(App\Model\Question::class, function (Faker $faker) {
    
    return [
        'question' => substr($faker->text , 0 , 20) ,
        'answer' => $faker->text,
        'user_id' =>$faker->randomElement($array = range (1,5)) ,
    ];
});





