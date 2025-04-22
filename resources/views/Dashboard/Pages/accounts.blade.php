@extends('Dashboard.Layouts.master')


@section('content')

<div class="app-content">
    <div class="content-wrapper">

        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>دليل الحسابات</h1>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div class="d-flex gap-2">
                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#accountIndexModal"> اضافة حساب</button>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#accountIndexModaldemo"> اضافة حساب تجريبي </button>
            </div>
        </div>



        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <a href="#" type="button" class="btn btn-secondary"> إجمالي عدد الحسابات: 0
                </a>

            </div>
         

            <div class="card-body">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>رقم الحساب</th>
                            <th>اسم الحساب</th>
                            <th>عملة الحساب</th>
                            <th>يتبع للحساب</th>
                            <th>نوع الحساب</th>
                            <th>طبيعة الحساب</th>
                            <th>قائمة التدفق</th>
                            <th>اجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                
                        <!-- صف 1 -->
                        <tr>
                            <td>1</td>
                            <td>ACC-2024-001</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary toggle-details" data-target="details-1">
                                    <i class="material-icons-two-tone">add</i>
                                </button>
                                <span class="ms-2">الأصول</span>
                            </td>
                            <td>دولار</td>
                            <td>ACC-2024-001</td>
                            <td>أصول</td>
                            <td>مدين</td>
                            <td>الأصول</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-style-light">تعديل</button>
                                <button type="button" class="btn btn-danger btn-style-light">حذف</button>
                            </td>
                        </tr>
                        <tr class="details-row d-none" id="details-1">
                            <td colspan="9">
                                <div class="p-3 bg-light rounded border">
                                    <strong>تفاصيل إضافية:</strong>
                                    <ul>
                                        <li>ملاحظات أو وصف الحساب</li>
                                        <li>تاريخ الإنشاء: 2024-04-19</li>
                                        <li>مسؤول الحساب: أحمد</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                
                        <!-- صف 2 -->
                        <tr>
                            <td>2</td>
                            <td>ACC-2024-002</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary toggle-details" data-target="details-2">
                                    <i class="material-icons-two-tone">add</i>
                                </button>
                                <span class="ms-2">حقوق الملكية</span>
                            </td>
                            <td>دولار</td>
                            <td>ACC-2024-002</td>
                            <td>أصول</td>
                            <td>مدين</td>
                            <td>حقوق الملكية</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-style-light">تعديل</button>
                                <button type="button" class="btn btn-danger btn-style-light">حذف</button>
                            </td>
                        </tr>
                        <tr class="details-row d-none" id="details-2">
                            <td colspan="9">
                                <div class="p-3 bg-light rounded border">
                                    <strong>تفاصيل إضافية:</strong>
                                    <ul>
                                        <li>معلومات عن حقوق الملكية</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                
                        <!-- صف 3 -->
                        <tr>
                            <td>3</td>
                            <td>ACC-2024-003</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary toggle-details" data-target="details-3">
                                    <i class="material-icons-two-tone">add</i>
                                </button>
                                <span class="ms-2">الإيرادات</span>
                            </td>
                            <td>دولار</td>
                            <td>ACC-2024-003</td>
                            <td>أصول</td>
                            <td>مدين</td>
                            <td>الإيرادات</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-style-light">تعديل</button>
                                <button type="button" class="btn btn-danger btn-style-light">حذف</button>
                            </td>
                        </tr>
                        <tr class="details-row d-none" id="details-3">
                            <td colspan="9">
                                <div class="p-3 bg-light rounded border">
                                    <strong>تفاصيل الإيرادات</strong>
                                    <p>الإيرادات المتوقعة لهذا الحساب...</p>
                                </div>
                            </td>
                        </tr>
                
                        <!-- صف 4 -->
                        <tr>
                            <td>4</td>
                            <td>ACC-2024-004</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary toggle-details" data-target="details-4">
                                    <i class="material-icons-two-tone">add</i>
                                </button>
                                <span class="ms-2">الخصوم</span>
                            </td>
                            <td>دولار</td>
                            <td>ACC-2024-004</td>
                            <td>أصول</td>
                            <td>مدين</td>
                            <td>الخصوم</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-style-light">تعديل</button>
                                <button type="button" class="btn btn-danger btn-style-light">حذف</button>
                            </td>
                        </tr>
                        <tr class="details-row d-none" id="details-4">
                            <td colspan="9">
                                <div class="p-3 bg-light rounded border">
                                    <strong>تفاصيل الخصوم</strong>
                                    <p>تفاصيل مرتبطة بالالتزامات المالية.</p>
                                </div>
                            </td>
                        </tr>
                
                        <!-- صف 5 -->
                        <tr>
                            <td>5</td>
                            <td>ACC-2024-005</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary toggle-details" data-target="details-5">
                                    <i class="material-icons-two-tone">add</i>
                                </button>
                                <span class="ms-2">المصروفات</span>
                            </td>
                            <td>دولار</td>
                            <td>ACC-2024-005</td>
                            <td>أصول</td>
                            <td>مدين</td>
                            <td>المصروفات</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-style-light">تعديل</button>
                                <button type="button" class="btn btn-danger btn-style-light">حذف</button>
                            </td>
                        </tr>
                        <tr class="details-row d-none" id="details-5">
                            <td colspan="9">
                                <div class="p-3 bg-light rounded border">
                                    <strong>تفاصيل المصروفات</strong>
                                    <p>شرح تفصيلي للمصروفات المتوقعة.</p>
                                </div>
                            </td>
                        </tr>
                
                    </tbody>
                </table>
                
            </div>
        </div>



        <!--model demo -->
        <div class="modal fade" id="accountIndexModaldemo" tabindex="-1" aria-labelledby="accountIndexModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="accountIndexModalLabel"> اضافة حساب جديد</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="full_name"> رقم الحساب:</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="أدخل  رقم الحساب" required>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="address">اسم الحساب:
                                    </label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="أدخل اسم الحساب" required>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="address"> عملة الحساب :
                                    </label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="أدخل   عملة الحساب:" required>
                                </div>


                                <div class="col-md-3 mb-3">
                                    <label for="gender">يتبع للحساب: </label>
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="" disabled selected>اختر الحساب </option>
                                        <option value="اصول">اصول</option>
                                        <option value="خصوم">خصوم</option>
                                        <option value="حقوق ملكية">حقوق ملكية</option>
                                        <option value="الإيرادات">الإيرادات</option>
                                        <option value="المصروفات">المصروفات</option>
                                    </select>
                                </div>



                                <div class="col-md-3 mb-3">
                                    <label for="phone_number"> نوع الحساب:</label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="أدخل  نوع الحساب:" required>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="bank_account"> طبيعة الحساب: </label>
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="" disabled selected>اختر الحساب </option>
                                        <option value="مدين">مدين</option>
                                        <option value="دائن">دائن</option>

                                    </select> </div>

                                <div class="col-md-3 mb-3">
                                    <label for="sales_account"> قائمة التدفق النقدي:
                                    </label>
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="" disabled selected>اختر الحساب </option>
                                        <option value="لا ينطبق">لا ينطبق</option>
                                        <option value="تشغيلي">تشغيلي</option>
                                        <option value="استثماري"> استثماري</option>
                                        <option value="تمويلي">تمويلي</option>

                                    </select> </div>



                            </div>


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">إنشاء الحساب</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- model -->

        <div class="modal fade" id="accountIndexModal" tabindex="-1" aria-labelledby="accountIndexModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="accountIndexModalLabel"> اضافة حساب</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                    </div>
                    <div class="modal-body">




                        <div class="col-12 mb-4">
                            <div class="card shadow" style="height: auto;">

                                <div class="card-body">




                                    <form action="" method="POST">

                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label for="account_number">رقم الحساب</label>
                                                <input type="text" name="account_number" id="account_number" class="form-control" placeholder="ACC-2024-001" required>
                                            </div>

                                            <div class="col-md-3 mb-3">
                                                <label for="account_name">اسم الحساب</label>
                                                <input type="text" name="account_name" id="account_name" class="form-control" placeholder="ادخل اسم الحساب" required>
                                            </div>

                                            <div class="col-md-3 mb-3">
                                                <label for="account_date">التاريخ</label>
                                                <input type="date" name="account_date" id="account_date" class="form-control" required>
                                            </div>

                                            <div class="col-md-3 mb-3">
                                                <label for="account_details">بيانات الحساب</label>
                                                <input type="text" name="account_details" id="account_details" class="form-control" placeholder="أدخل بيانات الحساب" required>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title"> اضافة حساب</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <p class="card-description">Take that same HTML, but use <code>.nav-pills</code> instead:</p> --}}
                                    <div class="example-container">
                                        <div class="example-content">


                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">تفاصيل الحساب</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">الموارد البشرية</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ملاحظات /SMS</button>
                                                </li>
                                            </ul>


                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                    <form action="" method="POST">
                                                        <div class="row">
                                                            <div class="col-md-3 mb-3">
                                                                <label for="account_type">نوع الحساب</label>
                                                                <select name="account_type" id="account_type" class="form-control" required>
                                                                    <option value="" disabled selected>اختر نوع الحساب</option>
                                                                    <option value="ميزانية عمومية">ميزانية عمومية</option>
                                                                    <option value="حساب المتاجرة">حساب المتاجرة</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="parent_account">يتبع من الحساب</label>
                                                                <select name="parent_account" id="parent_account" class="form-control" required>
                                                                    <option value="" disabled selected>اختر من القائمة</option>
                                                                    <!-- يمكنك ملء الخيارات ديناميكيًا من قاعدة البيانات -->
                                                                    <option value="1">حساب رئيسي 1</option>
                                                                    <option value="2">حساب رئيسي 2</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="currency">عملة الحساب</label>
                                                                <select name="currency" id="currency" class="form-control" required>
                                                                    <option value="" disabled selected>اختر العملة</option>
                                                                    <option value="USD">دولار أمريكي</option>
                                                                    <option value="SAR">ريال سعودي</option>
                                                                    <option value="KWD">دينار كويتي</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="tax">الضريبة (ض.ق.م)</label>
                                                                <input type="text" name="tax" id="tax" class="form-control" placeholder="مثال: 15%" required>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                    <form action="" method="POST">
                                                        <div class="row">
                                                            <div class="col-md-3 mb-3">
                                                                <label for="full_name">الاسم الكامل</label>
                                                                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="أدخل الاسم الكامل" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="address">العنوان</label>
                                                                <input type="text" name="address" id="address" class="form-control" placeholder="أدخل العنوان" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="gender">الجنس</label>
                                                                <select name="gender" id="gender" class="form-control" required>
                                                                    <option value="" disabled selected>اختر الجنس</option>
                                                                    <option value="ذكر">ذكر</option>
                                                                    <option value="أنثى">أنثى</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="birth_date">تاريخ الميلاد</label>
                                                                <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="phone_number">رقم الهاتف</label>
                                                                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="أدخل رقم الهاتف" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="bank_account">رقم حساب البنك</label>
                                                                <input type="text" name="bank_account" id="bank_account" class="form-control" placeholder="أدخل رقم الحساب البنكي" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="sales_account">حساب المبيعات</label>
                                                                <input type="text" name="sales_account" id="sales_account" class="form-control" placeholder="أدخل حساب المبيعات" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="allowed_discount">حساب الخصم المسموح</label>
                                                                <input type="text" name="allowed_discount" id="allowed_discount" class="form-control" placeholder="أدخل حساب الخصم" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="purchase_account">حساب المشتريات</label>
                                                                <input type="text" name="purchase_account" id="purchase_account" class="form-control" placeholder="أدخل حساب المشتريات" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="earned_discount">حساب الخصم المكتسب</label>
                                                                <input type="text" name="earned_discount" id="earned_discount" class="form-control" placeholder="أدخل حساب الخصم المكتسب" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="salary_account">حساب الرواتب</label>
                                                                <input type="text" name="salary_account" id="salary_account" class="form-control" placeholder="أدخل حساب الرواتب" required>
                                                            </div>
                                                        </div>

                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">إنشاء الحساب</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                    <form action="" method="POST">
                                                        <div class="row">
                                                            <div class="col-md-3 mb-3">
                                                                <label for="external_phone1">رقم هاتف خارجي</label>
                                                                <input type="text" name="external_phone1" id="external_phone1" class="form-control" placeholder="مثال: +90XXXXXXXXXX" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="external_phone2">رقم هاتف خارجي (مدخل آخر)</label>
                                                                <input type="text" name="external_phone2" id="external_phone2" class="form-control" placeholder="مثال: +90XXXXXXXXXX">
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="gender">الجنس</label>
                                                                <select name="gender" id="gender" class="form-control" required>
                                                                    <option value="" disabled selected>اختر الجنس</option>
                                                                    <option value="ذكر">ذكر</option>
                                                                    <option value="أنثى">أنثى</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="external_phone3">رقم هاتف خارجي (آخر)</label>
                                                                <input type="text" name="external_phone3" id="external_phone3" class="form-control" placeholder="مثال: +90XXXXXXXXXX">
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label for="birth_date">تاريخ الميلاد</label>
                                                                <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label for="notes">اكتب ملاحظاتك هنا</label>
                                                                <textarea name="notes" id="notes" class="form-control" rows="3" placeholder="اكتب ملاحظاتك هنا..."></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-success">حفظ البيانات</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>





                            </div>
                        </div>






                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.querySelectorAll('.toggle-details').forEach(button => {
                button.addEventListener('click', function () {
                    const targetId = this.dataset.target;
                    const targetRow = document.getElementById(targetId);
                    const icon = this.querySelector('i');
        
                    if (targetRow.classList.contains('d-none')) {
                        targetRow.classList.remove('d-none');
                        icon.textContent = 'remove';
                    } else {
                        targetRow.classList.add('d-none');
                        icon.textContent = 'add';
                    }
                });
            });
        </script>
        

        @endsection
