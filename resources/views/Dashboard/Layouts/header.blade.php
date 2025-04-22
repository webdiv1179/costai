<div class="search">
    <form>
        <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
    </form>
    <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
</div>
<style>
    .dropdown-menu {
    animation: fadeIn 0.3s ease-in-out;
    border-radius: 10px;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

</style>
<div class="app-header">
    <nav class="navbar navbar-light navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-nav" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                    </li>


                </ul>

            </div>
            <div class="d-flex">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                    </li>
                    <li class="nav-item hidden-on-mobile">
                        <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown" data-bs-toggle="dropdown"><img src="../../assets/images/flags/us.png" alt=""></a>
                        <ul class="dropdown-menu dropdown-menu-end language-dropdown" aria-labelledby="languageDropDown">
                            <li><a class="dropdown-item" href="#"><img src="../../assets/images/flags/germany.png" alt="">German</a></li>
                            <li><a class="dropdown-item" href="#"><img src="../../assets/images/flags/italy.png" alt="">Italian</a></li>
                            <li><a class="dropdown-item" href="#"><img src="../../assets/images/flags/china.png" alt="">Chinese</a></li>
                        </ul>
                    </li>
                    <!-- User Dropdown -->
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('acccount.png')}}" class="rounded-circle" width="40" height="40" alt="صورة المستخدم">
                            <span class="fw-bold">{{ Auth::guard('web')->user()->name ?? 'لا يوجد' }}</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end text-end shadow animated fadeIn mt-2" aria-labelledby="userDropdown" style="min-width: 250px;">
                            <li class="px-3 py-2 border-bottom text-center">
                                <img src="{{asset('acccount.png')}}" class="rounded-circle mb-2" width="60" height="60" alt="صورة المستخدم">
                                <div class="fw-bold">{{ Auth::guard('web')->user()->name ?? 'لا يوجد' }}</div>
                                <small class="text-muted">{{ Auth::guard('web')->user()->phone ?? '-' }}</small>
                            </li>
                            <li><a class="dropdown-item" href="">👤 بروفايلي</a></li>
                            <li><a class="dropdown-item" href="">⚙️ إعداداتي</a></li>
                            <li><a class="dropdown-item" href="">✏️ تعديل الحساب</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="dropdown-item text-danger" type="submit">🚪 تسجيل الخروج</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
