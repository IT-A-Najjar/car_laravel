@extends('welcome')
@section('content')
    <h2>MY SERVICES</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div id="aaa" class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center  bg-gradient fs-2 mb-3" >
                <img id="aaa" src="/img/10.jpg"style="width: 100%">
            </div>
            <h2>BMW</h2>
            <p>الوكيل الحصري لشركة bmw </p>
            <p>تم التعاقد مع الشركة الالمانية الكبرى في استيراد السيارات الالمانية الي المنطقة</p>
            <a href="#" class="icon-link d-inline-flex align-items-center">
                Call to action
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>
        <div id="aaa" class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
                <img id="aaa" src="/img/3.jpg"style="width: 100%">
            </div>
            <h2>MERCEDES</h2>
            <p>شركو مرسيدس من اكبر واضخم الشركات العالمية والتي تعتبر المنافس الاقوى على المركز الاول بالقوة والجودة </p>
            <p>اي سيارة تخطر على بالك من المرسيدس تجدها عندنا</p>
            <a href="#" class="icon-link d-inline-flex align-items-center">
                Call to action
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>
        <div id="aaa" class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
                <img id="aaa" src="/img/4.jpg"style="width: 100%">
            </div>
            <h2>FERRARI</h2>
            <p>لعشاق السرعة والزخم السيارات الرياضية القوية الفيراري </p>
            <p>لدينا المزيد واكثر </p>
            <a href="#" class="icon-link d-inline-flex align-items-center">
                Call to action
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>
    </div>
@endsection
