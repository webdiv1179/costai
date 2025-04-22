<div class="app-sidebar">
    @php
    use Illuminate\Support\Facades\Auth;
    @endphp
    <div class="logo">
        <a href="index.html" class="logo-icon">CostAi<span class="logo-text"></span></a>
        {{-- <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="{{asset('costlogo.png')}}">
        <span class="activity-indicator"></span>
        <span class="user-info-text"> @if(Auth::check())
            {{ Auth::user()->name }}
            @else
            ضيف
            @endif</span>
        </a>
    </div> --}}
</div>
<div class="app-menu">
    <ul class="accordion-menu">
        <li class="sidebar-title">
            Apps
        </li>
        <li class="active-page">
            <a href="{{route('Cms.index')}}" class="active"><i class="material-icons-two-tone">dashboard</i>الصفحة الرئيسية</a>
        </li>

        @if(auth()->user() && auth()->user()->role == 'admin')
        <li class="{{ request()->routeIs('Users.*', 'ActivityLog.*') ? 'open' : '' }}">
            <a href="#"><i class="material-icons-two-tone">view_day</i>المستخدمين والإدارة
                <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
            </a>
            <ul class="sub-menu" style="{{ request()->routeIs('Users.*', 'ActivityLog.*') ? 'display: block;' : '' }}">
                <li>
                    <a href="{{ route('Users.index') }}" class="{{ request()->routeIs('Users.index') ? 'active' : '' }}">
                        جميع المستخدمين
                    </a>
                </li>
                <li>
                    <a href="{{ route('ActivityLog.index') }}" class="{{ request()->routeIs('ActivityLog.index') ? 'active' : '' }}">
                        سجل النشاطات
                    </a>
                </li>
            </ul>
        </li>
        @endif


        <li class="{{ request()->routeIs('accountss.*', 'accounts.*') ? 'open' : '' }}">
            <a href="#"><i class="material-icons-two-tone">view_day</i>المحاسبة<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('accountss.index')}}" class="{{ request()->routeIs('accountss.index') ? 'active' : '' }}">فهرسة الحسابات</a>
                </li>
                <li>
                    <a href="header-full-width.html">قيود يومية</a>
                </li>

            </ul>
        </li>




        <li>
            <a href="#"><i class="material-icons-two-tone">view_day</i>الفواتير<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="header-basic.html">فواتير بيع</a>
                </li>
                <li>
                    <a href="header-full-width.html">فواتير شراء</a>
                </li>
                <li>
                    <a href="header-full-width.html">فواتير الكاشير</a>
                </li>

            </ul>
        </li>




        <li>
            <a href="#"><i class="material-icons-two-tone">view_day</i>المستودعات<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="header-basic.html">الاصناف</a>
                </li>
                <li>
                    <a href="header-full-width.html">المستودعات</a>
                </li>

                <li>
                    <a href="header-full-width.html">تصنيع المنتجات</a>
                </li>

            </ul>
        </li>




        <li>
            <a href="#"><i class="material-icons-two-tone">view_day</i>خدمات اخري<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="header-basic.html">أجندة مواعيد</a>
                </li>
                <li>
                    <a href="header-full-width.html">تقارير</a>
                </li>

            </ul>
        </li>

        <!-- Company Branding / Logo Section -->
        <div class="sidebar-footer text-center p-3 mt-4">
            <div class="branding-box rounded bg-light p-3 shadow-sm">
                <img src="{{ asset('Costai V-12.png') }}" alt="Logo" class="img-fluid mb-2" style="max-height: 50px;">
                <div class="fw-bold">شركة كوست </div>
                <small class="text-muted">لخدمات المحاسبة والإدارة </small>
            </div>
        </div>



    </ul>



</div>
</div>
