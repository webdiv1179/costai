<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Costai Accounting and Management Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f9f9f9;
        }

        .top-bar {
            background-color: #0d6efd;
            color: #fff;
            font-size: 14px;
            position: fixed;
            /* make it sticky */
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1050;
            /* high enough to be above other content */
        }

        .navbar {
            margin-top: 56px;
            /* adjust if needed to push content down */
        }


        .navbar-brand img {
            height: 45px;
        }

        .navbar-nav .nav-link {
            font-weight: bold;
        }

        /* Slider */
        .carousel-inner img {
            height: 500px;
            object-fit: cover;
        }

        /* Services */
        .services {
            padding: 60px 0;
            background-color: #fff;
        }

        .service-box {
            padding: 30px;
            border-radius: 12px;
            background-color: #f1f1f1;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .service-box:hover {
            background-color: #0d6efd;
            color: white;
            transform: translateY(-5px);
        }

        .service-box i {
            font-size: 40px;
            margin-bottom: 15px;
        }

        footer {
            background-color: #0d6efd;
            color: #fff;
            padding: 40px 0 20px;
        }

        footer h5 {
            font-weight: bold;
            margin-bottom: 15px;
        }

        footer ul {
            padding-left: 0;
            list-style: none;
        }

        footer ul li {
            margin-bottom: 10px;
        }

        footer ul li i {
            margin-left: 5px;
        }

        footer a:hover {
            text-decoration: underline;
            color: #ffc107;
        }

    </style>
</head>
<body>

    <!-- Header-->
    <div class="top-bar py-2">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
            <!-- شعار -->
            <a class="navbar-brand d-flex align-items-center gap-2 m-0" href="#">
                {{-- <span class="fw-bold fs-4 text-white">Costai</span> --}}
                <img src="{{asset('costlogo.png')}}" alt="Logo" style="height: 40px;">
            </a>

            <!-- زر تسجيل الدخول و لغة -->
            <div class="d-flex align-items-center gap-2">
                <!-- Language Dropdown -->
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        🌐 اللغة
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="">العربية</a></li>
                        <li><a class="dropdown-item" href="">English</a></li>
                        <!-- Add more languages here -->
                    </ul>
                </div>

                <!-- زر تسجيل الدخول / إنشاء حساب -->
                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#authModal">
                    <i class="fa fa-user"></i> تسجيل الدخول
                </button>
            </div>
        </div>
    </div>
    <br>

    <br>

    <br>

    <!-- Slider -->
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif


    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://png.pngtree.com/background/20210711/original/pngtree-simple-business-office-supplies-banner-poster-background-picture-image_1112821.jpg" class="d-block w-100" alt="Slider 1">
                <div class="carousel-caption d-none d-md-block">
                    <h3>مرحبًا بكم</h3>
                    <p>نبذة عن موقع كوست</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://doyleassociates.ie/wp-content/uploads/banner-4.jpg" class="d-block w-100" alt="Slider 2">
                <div class="carousel-caption d-none d-md-block">
                    <h3>خدماتنا</h3>
                    <p>تعرف على ما نقدمه في كوست من حلول تقنية</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>


    <!-- Services Section -->
    <section class="services text-center">
        <div class="container">
            <h2 class="mb-5">خدماتنا</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-globe"></i>
                        <h5>تصميم المواقع</h5>
                        <p>نقدّم أفضل خدمات تصميم مواقع احترافية بأحدث التقنيات.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-mobile-alt"></i>
                        <h5>تطبيقات الجوال</h5>
                        <p>نطور تطبيقات Android و iOS بجودة عالية وتجربة مستخدم ممتازة.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-chart-line"></i>
                        <h5>التسويق الرقمي</h5>
                        <p>نساعدك على الوصول لجمهورك وتحقيق النجاح عبر الإنترنت.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal تسجيل الدخول / إنشاء حساب -->
    <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="authModalLabel">حساب المستخدم</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                    <div class="tab-content" id="authTabsContent">
                        <!-- Login Form -->
                        <div class="tab-pane fade show active" id="login" role="tabpanel">
                            <form method="POST" action="{{ route('admin.login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input type="text" class="form-control" name="phone" placeholder="05xxxxxxxx" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">كلمة المرور</label>
                                    <input type="password" class="form-control" name="password" placeholder="********" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">تسجيل الدخول</button>
                            </form>

                            <div class="text-center mt-3">
                                <small>ليس لديك حساب؟ <a href="#" onclick="switchToRegister()">أنشئ حسابًا</a></small>
                            </div>
                        </div>

                        <!-- Register Form -->
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <form method="POST" action="{{ route('admin.register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="05xxxxxxxx">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">كلمة المرور</label>
                                    <input type="password" name="password" class="form-control" placeholder="********">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">تأكيد كلمة المرور</label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="********">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">الجنس</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                        <label class="form-check-label" for="male">ذكر</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">أنثى</label>
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="termsCheck" name="terms">
                                    <label class="form-check-label" for="termsCheck">أوافق على الشروط والأحكام</label>
                                </div>
                                <button type="submit" class="btn btn-success w-100">إنشاء حساب</button>
                            </form>


                            <div class="text-center mt-3">
                                <small>لديك حساب بالفعل؟ <a href="#" onclick="switchToLogin()">قم بتسجيل الدخول</a></small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function switchToRegister() {
            document.getElementById('login').classList.remove('show', 'active');
            document.getElementById('register').classList.add('show', 'active');
        }

        function switchToLogin() {
            document.getElementById('register').classList.remove('show', 'active');
            document.getElementById('login').classList.add('show', 'active');
        }

        const authModal = document.getElementById('authModal');
        authModal.addEventListener('show.bs.modal', () => {
            switchToLogin();
        });

    </script>


    <!-- Footer -->
    <footer class="mt-5">
        <div class="container py-4">
            <div class="row text-white">

                <!-- معلومات عن الشركة -->
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">من نحن</h5>
                    <p>
                        نحن شركة رائدة في تقديم الحلول التقنية والخدمات الرقمية، نهدف إلى تطوير أعمالك وتسهيل حياتك.
                    </p>
                </div>

                <!-- روابط مفيدة -->
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">روابط مفيدة</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">الرئيسية</a></li>
                        <li><a href="#" class="text-white text-decoration-none">الخدمات</a></li>
                        <li><a href="#" class="text-white text-decoration-none">المدونة</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">اتصل بنا</a></li>
                    </ul>
                </div>

                <!-- تواصل معنا -->
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">تواصل معنا</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope me-2"></i> info@yourcompany.com</li>
                        <li><i class="fa fa-phone me-2"></i> +966 1234 56789</li>
                        <li><i class="fa fa-map-marker me-2"></i> تركيا اسطنبول</li>
                    </ul>
                </div>

            </div>

            <hr class="bg-white">
            <div class="text-center text-white">
                <p class="mb-0">© 2025 جميع الحقوق محفوظة - شركتنا</p>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
