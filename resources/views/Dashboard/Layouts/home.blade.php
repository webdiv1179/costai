@extends('Dashboard.Layouts.master')

@section('content')

<div class="app-content">
    <div class="content-wrapper">

        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif



        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>الصفحة الرئيسية</h1>
                    </div>
                </div>
            </div>

            @if(auth()->user() && auth()->user()->role == 'admin')
            <div class="row">
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-primary">
                                    <i class="material-icons-outlined">paid</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">عدد الزوار</span>
                                    <span class="widget-stats-amount">{{ $totalVisitors }}</span>
                                    <span class="widget-stats-info">عدد الـ IPs الفريدة</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-warning">
                                    <i class="material-icons-outlined">person</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">عدد المستخدمين</span>
                                    <span class="widget-stats-amount">{{ $totalUsers }}</span>
                                    <span class="widget-stats-info">إجمالي الحسابات</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                    <i class="material-icons">keyboard_arrow_up</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-danger">
                                    <i class="material-icons-outlined">location_on</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">المدينة الأكثر زيارة</span>
                                    <span class="widget-stats-amount">
                                        {{ $topCity ? $topCity->city : 'غير معروف' }}
                                    </span>
                                    <span class="widget-stats-info">
                                        عدد الزيارات: {{ $topCity ? $topCity->total : 0 }}
                                    </span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                    <i class="material-icons">keyboard_arrow_up</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endif

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <h2 class="fw-bold">مرحباً بك في <span class="text-primary">كوست</span> | لخدمات المحاسبة والإدارة</h2>
                            <p class="fs-5">الرجاء اختيار خدمة من القائمة الجانبية للبدء.</p>
                            <h4 class="mt-4">بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h4>
                            <p class="text-muted">“الحكمة ضالة المؤمن أنى وجدها فهو أولى بها”</p>
                            <img src="{{ asset('Costai V-12.png') }}" alt="Logo" class="img-fluid my-3" style="max-width: 300px;">
                            <img src="{{ asset('المعرفة الخبرة الابداع.jpg') }}" alt="Slogan" class="img-fluid mb-3" style="max-width: 300px;">
                        </div>

                        <h3 class="fw-bold">المالك والمؤسس</h3>
                        <p class="mb-1">السيد / أحمد سيد أبو مسامح</p>
                        <p class="mb-3">الموقع الرسمي: <a href="https://costai.net" target="_blank">costai.net</a></p>

                        <h3 class="fw-bold">معلومات التواصل</h3>
                        <ul class="list-unstyled">
                            <li><strong>واتس | تلجرام:</strong> 00905527407790</li>
                        </ul>

                        <h3 class="fw-bold mt-4">معلومات عامة</h3>
                        <ul>
                            <li>أي اتفاقيات أو عمل يتم تجديده سنوياً.</li>
                            <li>خدمة مجتمعية: 5% من كل مكتب في الدولة التابعة.</li>
                            <li>المكتب الرئيسي: غزة - فلسطين.</li>
                        </ul>

                        <h3 class="fw-bold mt-4">نبذة عن الموقع</h3>
                        <p>
                            موقع إلكتروني متعدد اللغات يقدم خدمات المحاسبة والإدارة، يدير موارد وأصول أي شركة أو مؤسسة أو جمعية مهما كان حجمها أو عدد فروعها، من أي مكان في العالم وضمن اشتراك واحد.
                        </p>

                        <h3 class="fw-bold mt-4">إدارات مجموعة كوست</h3>
                        <ul>
                            <li>إدارة الإنتاج</li>
                            <li>الإدارة المالية</li>
                            <li>إدارة الموارد البشرية</li>
                            <li>إدارة التسويق</li>
                            <li>مركز الأبحاث والذكاء الاصطناعي (تابع لمجلس الإدارة)</li>
                        </ul>

                        <h3 class="fw-bold mt-4">دخل ورواتب الفريق</h3>
                        <ul>
                            <li>راتب رمزي + نسبة من صافي الأرباح (في بعض الحالات راتب ثابت)</li>
                            <li>إمكانية امتلاك أسهم في المجموعة</li>
                        </ul>

                        <h3 class="fw-bold mt-4">مجالات عمل المجموعة</h3>
                        <ul>
                            <li>خدمات المحاسبة والإدارة عبر الموقع الرسمي</li>
                            <li>دورات (لغات - برمجة - ذكاء اصطناعي - محاسبة)</li>
                            <li>سياحة تعليمية في تركيا</li>
                            <li>تطوير ألعاب الذكاء والمحاسبة (ورقية ورقمية)</li>
                        </ul>

                        <h3 class="fw-bold mt-4">الاشتراكات والرسوم</h3>
                        <ul>
                            <li>اشتراك سنوي مع تجربة مجانية شهر واحد + 10 رسائل SMS</li>
                            <li>رسوم التسجيل: 390$ لأول سنة</li>
                            <li>اشتراك سنوي: 130$ يشمل 3 موظفين + 120 رسالة SMS</li>
                            <li>إضافة موظف: 39$ سنويًا</li>
                            <li>إضافة زبون: 29$ سنويًا</li>
                            <li>مُحاسب أونلاين: 990$ سنويًا (590$ لكل فرع إضافي)</li>
                            <li>مساحة تخزين: 70$ سنويًا لـ 50GB</li>
                        </ul>

                        <h3 class="fw-bold mt-4">إيرادات إضافية</h3>
                        <ul>
                            <li>بيع الرسائل SMS من داخل الموقع</li>
                            <li>رسوم على بعض الألعاب والمراحل المتقدمة داخلها</li>
                        </ul>

                        <h3 class="fw-bold mt-4">التطوير المستقبلي</h3>
                        <ul>
                            <li>تصنيع واستيراد منتجات مع المشتركين</li>
                            <li>دمج الذكاء الاصطناعي في كل الخدمات</li>
                            <li>حساسات ذكية لحساب الاستهلاك والتكلفة</li>
                            <li>محاسب ذكي متعدد اللغات (بوت آلي)</li>
                            <li>برمجة الإصدارات القادمة بالبلوك تشين والذكاء الاصطناعي</li>
                            <li>إصدار تعليمي خاص بالجامعات</li>
                        </ul>

                        <h3 class="fw-bold mt-4">التمويل</h3>
                        <ul>
                            <li>من المؤسس مباشرة</li>
                            <li>من خلال امتلاك أسهم وأرباح مجموعة كوست</li>
                        </ul>

                        <h3 class="fw-bold mt-4">الأسهم</h3>
                        <ul>
                            <li>عدد الأسهم: 250,000 سهم</li>
                            <li>قيمة السهم: 1$ دولار أمريكي</li>
                            <li>الأولوية في التملك: لفريق كوست والمشتركين</li>
                        </ul>

                        <h3 class="fw-bold mt-4">لماذا مجموعة كوست؟</h3>
                        <ul>
                            <li>أكثر من 25,000 منشأة مستهدفة في غزة فقط</li>
                            <li>80% من الشركات تفشل خلال أول 5 سنوات</li>
                            <li>البرامج المحاسبية عادةً معقدة للمستخدم العادي، كوست توفر حلول مبسطة</li>
                            <li>توفير تدريب عملي للخريجين الجدد</li>
                            <li>التركيز على الشركات الصغيرة والمتوسطة وحتى الأفراد</li>
                        </ul>

                        <blockquote class="blockquote border-start border-primary ps-3 my-4">
                            <p class="mb-1">“تخيل أن أغنى شركة في العالم ليست شركة تكنولوجيا، بل شركة محاسبة، وهم زبائنها.”</p>
                        </blockquote>

                        <div class="mt-5">
                            <h4 class="fw-bold">اسكتشات وتصاميم الموقع جاهزة</h4>
                            <p>تم تجهيز اسكتشات الموقع وبعض الألعاب والتطبيقات، والعمل جارٍ على الإطلاق الرسمي.</p>
                        </div>

                        <hr class="my-5" />
                        <div class="text-center">
                            <h4 class="fw-bold">هذا نموذج وليس الإصدار الكامل</h4>
                            <p class="mt-3">مع تحيات <strong>مجموعة كوست</strong></p>
                            <p class="fw-bold">المؤسس: أحمد سيد أبو مسامح</p>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>
@endsection
