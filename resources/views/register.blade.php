<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="تطبيق مطر هو التطبيق الأول من نوعه لمتابعة كل جديد بالطقس">
    <meta name="theme-color" content="#efeeff">
    <meta name="msapplication-navbutton-color" content="#efeeff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#efeeff">
    <meta property="og:image" content="https://rain-app.com/assets/images/logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>تسجيل حساب مسوق | تطبيق مطر</title>
    <meta name="generator" content="Jekyll v3.5.0" />
    <meta property="og:title" content="تطبيق مطر" />
    <meta property="og:locale" content="ar_EG" />
    <meta name="description" content="تطبيق مطر هو التطبيق الأول من نوعه لمتابعة كل جديد بالطقس" />
    <meta property="og:description" content="تطبيق مطر هو التطبيق الأول من نوعه لمتابعة كل جديد بالطقس" />
    <link rel="canonical" href="https://rain-app.com/" />
    <meta property="og:url" content="https://rain-app.com/" />
    <meta property="og:site_name" content="تطبيق مطر" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@matar" />
    <meta name="twitter:creator" content="@matar" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#fff">
    <meta name="application-name" content="Matar-website">
    <meta name="theme-color" content="#efeeff" />
    <link href="/assets/app.css" rel="stylesheet">
    <link rel="icon" href="/assets/images/logo.ico">
</head>

<body>
    <main>
        @include('layouts.navbar')
        <div class="container" style="margin-top: 80px">
            <h3 style="text-align: center;margin-bottom: 0;">تسجيل حساب</h3>
            <p style="text-align: center;font-size: 15px;">انضم الي مجموعه مسوقين تطبيق مطر</p>
            <form class="login-form" method="POST" action="{{ route('createAccount') }}">
                @csrf
                <input type="text" name="name" class="name" placeholder="الاسم بالكامل" required>
                <input type="email" name="email" class="email" placeholder="البريد الالكتروني" required>
                <input type="text" name="phone" class="phone" placeholder="رقم الهاتف" required>
                <select name="country" class="country" required>
                    <option value="" hidden>اختر الدولة</option>
                    @include('layouts.countries')
                </select>
                <input type="password" name="password" class="password" placeholder="كلمة المرور" required>
                <input type="password" name="confirm-password" class="password" placeholder="تأكيد كلمة المرور"
                    required>
                <button class="button" type="submit">تسجيل حساب</button>
                @if (\Session::has('success'))
                    <div class="alert-success">
                        {!! \Session::get('success') !!}
                    </div>
                @endif
                @if (\Session::has('error'))
                    <div class="alert-danger">
                        {!! \Session::get('error') !!}
                    </div>
                @endif
            </form>
        </div>
</body>

</html>
