<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Costai Accounting and Management Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        form .form-label {
            font-weight: bold;
        }

        .card {
            border-radius: 12px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

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


    <!-- Slider -->
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
    <!-- Contact Us Page -->
    <div class="container-fluid p-0">

        <!-- Slider Section -->
        <div id="contactSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://doyleassociates.ie/wp-content/uploads/banner-4.jpg" class="d-block w-100" alt="صورة 1" style="height: 400px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>مرحبًا بكم</h3>
                        <p> تواصل معنا</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>مرحبًا بكم</h3>
                        <p> تواصل معنا</p>
                    </div>
                    <img src="https://png.pngtree.com/background/20210711/original/pngtree-simple-business-office-supplies-banner-poster-background-picture-image_1112821.jpg" class="d-block w-100" alt="صورة 2" style="height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>

        <!-- Intro Text -->
        <section class="text-center py-5 bg-light">
            <div class="container">
                <h2 class="mb-3 text-primary">نحن هنا من أجلك</h2>
                <p class="lead">يسعدنا تواصلك معنا لأي استفسارات، اقتراحات أو ملاحظات. فريقنا جاهز للرد عليك في أقرب وقت ممكن.</p>
            </div>
        </section>

        <!-- Contact Form & Map -->
        <div class="container py-5">
            <div class="row g-5">
                <!-- Form -->
                <div class="col-lg-6">
                    <div class="card shadow-sm p-4">
                        <h4 class="mb-4 text-primary text-center">أرسل لنا رسالة</h4>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">الاسم الكامل</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">البريد الإلكتروني</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">الموضوع</label>
                                <input type="text" name="subject" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">الرسالة</label>
                                <textarea name="message" rows="5" class="form-control" required></textarea>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">إرسال</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Map -->
                <div class="col-lg-6">
                    <div class="ratio ratio-4x3 rounded shadow-sm">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.740057564229!2d46.67529541500226!3d24.713551184111565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f038130d0042f%3A0x5b1f63e2b3e2e0b3!2z2YXYr9mK2YUg2KfZhNmF2K3YqSDYp9mE2YbYt9mK2YUg2KfZhNmF2LXYp9mF!5e0!3m2!1sar!2ssa!4v1619702345678" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
