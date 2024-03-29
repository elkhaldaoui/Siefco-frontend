<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>SIEFCO</title>
</head>
<body>
    <div class="row" id="sign">
        <div class="col-6 d-md-flex d-none justify-content-center align-items-center" id="home-logo">
            <img src="../Assets/logo.png">
        </div>
        <div class="col-md-6 p-0" id="sign-form">
            <!---------------------- Menu Sign ---------------------->
            <div class="w-100 d-flex" id="menu-sign">
                <a href="#signup" type="button" class="nav-link w-50 h4 text-dark text-center" id="btn_signup">انشاء حساب</a>
                <a href="#signin" type="button" class="nav-link w-50 h4 text-dark text-center" id="btn_signin">تسجيل الدخول</a>
            </div>
            <!---------------------- Sign In ---------------------->
            <div id="signin">
                <div class="d-flex flex-column justify-content-center gap-2" style="width: 80%; height: 85vh; margin-left: 10%;">
                    <h1 class="text-center">تسجيل الدخول</h1>
                    <p class="text-center" id="error_signin">ادخل بريدك الالكتروني و القن السري لتسجيل الدخول</p>
                    <p id="error_signin"></p>
                    <form class="d-flex flex-column gap-2" method="POST" action="" id="form_signin">
                        <input type="text" name="email" id="email_signin" placeholder="البريد الالكتروني" class="border-0 col-form-label">
                        <p class="text-danger float-end me-4" id="error_email"></p>
                        <input type="password" name="password" id="password_signin" placeholder="القن السري" class="border-0 col-form-label">
                        <p class="text-danger float-end me-4" id="error_password"></p>
                        <div class="form-check form-switch d-flex justify-content-end">
                            <label for="checked" class="form-check-label h6">تذكرني</label>
                            <input type="checkbox" class="form-check-input mx-1" name="checked" id="checked">
                        </div>
                        <input type="submit" name="signin" value="تسجيل الدخول"></input>
                    </form>
                </div>
            </div>
            <!---------------------- Sign Up ---------------------->
            <div id="signup">
                <div class="d-flex flex-column justify-content-center" style="width: 80%; height: 85vh; margin-left: 10%;">
                    <h1 class="text-center">انشاء حساب</h1>
                    <p class="text-center" id="error_signup">املأ معلوماتك لانشاء حسابك</p>
                    <p id="error_signup"></p>
                    <form class="d-flex flex-column gap-1" method="POST" action="" id="form_signup">
                        <div class="d-flex flex-sm-row-reverse justify-content-between align-items-center">
                            <input type="text" name="last_name" id="last_name" placeholder="الاسم" class="border-0 col-form-label" style="width: 48%;">
                            <input type="text" name="first_name" id="first_name" placeholder="النسب" class="border-0 col-form-label" style="width: 48%;">
                        </div>
                        <p class="text-danger float-end me-4" id="error_name"></p>
                        <input type="text" name="email" id="email_signup" placeholder="البريد الالكتروني" class="border-0 col-form-label">
                        <p class="text-danger float-end me-4" id="error_email_signup"></p>
                        <input type="text" name="email" id="phone_signup" placeholder="رقم الهاتف" class="border-0 col-form-label">
                        <p class="text-danger float-end me-4" id="error_phone_signup"></p>
                        <input type="password" name="password" id="password_signup" placeholder="القن السري" class="border-0 col-form-label">
                        <p class="text-danger float-end me-4" id="error_password_signup"></p>
                        <input type="password" name="conf_password" id="conf_password_signup" placeholder=" تأكيد القن السري" class="border-0 col-form-label">
                        <p class="text-danger float-end me-4" id="error_conf_password_signup"></p>
                        <div>
                            <label for="2" class="h6">زبون</label>
                            <input type="radio" id="2" required>
                            <label for="1" class="h6">مستخدم</label>
                            <input type="radio" id="1" required>
                        </div>
                        <input type="submit" name="signin" value="انشاء حساب"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!-- index.js -->
<script src="index.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
