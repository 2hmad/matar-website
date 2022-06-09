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
    <title>تطبيق مطر | تطبيقك الأول لمتابعة الطقس</title>
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
        <header class="app__header container">
            <div class="app__logo-wrapper">
                <img class="app__logo" src="{{ url('/assets/images/logo.png') }}" alt="Matar Icon">
            </div>
            <div class="app__infos">
                <h1 class="app__name">مطر</h1>
                <p class="app__description">تطبيقك الأول لمتابعة كل جديد بالطقس</p>
                <div class="app__buttons app__buttons--desktop">
                    <a href="" class="app__button-play" target="_blank">
                        <img src="/assets/images/google-play-badge.png" alt="Get on Google Play">
                    </a>
                    <a href="" class="app__button-ios" target="_blank">
                        <img src="/assets/images/ios.svg" alt="Get on Appstore">
                    </a>
                </div>
            </div>
        </header>
        <div class="app__buttons app__buttons--mobile container">
            <a href="" class="app__button-play" target="_blank">
                <img src="/assets/images/google-play-badge.png" alt="Get on Google Play">
            </a>
            <a href="" class="app__button-ios" target="_blank">
                <img src="/assets/images/ios.svg" alt="Get on Appstore">
            </a>
        </div>
        <section class="app__screenshots app__section">
            <div class="app__screenshots-wrapper container-desktop">
                <div class="app__screenshots-list">
                    <a href="/assets/images/screenshots/screen_1.png" class="lightbox">
                        <img src="/assets/images/screenshots/screen_1.png" class="app__screenshot">
                    </a>
                    <a href="/assets/images/screenshots/screen_2.png" class="lightbox">
                        <img src="/assets/images/screenshots/screen_2.png" class="app__screenshot">
                    </a>
                    <a href="/assets/images/screenshots/screen_3.png" class="lightbox">
                        <img src="/assets/images/screenshots/screen_3.png" class="app__screenshot">
                    </a>
                    <a href="/assets/images/screenshots/screen_4.png" class="lightbox">
                        <img src="/assets/images/screenshots/screen_4.png" class="app__screenshot">
                    </a>
                    <a href="/assets/images/screenshots/screen_5.png" class="lightbox">
                        <img src="/assets/images/screenshots/screen_5.png" class="app__screenshot" lazy="true">
                    </a>
                    <a href="/assets/images/screenshots/screen_6.png" class="lightbox">
                        <img src="/assets/images/screenshots/screen_6.png" class="app__screenshot" lazy="true">
                    </a>
                    <a href="/assets/images/screenshots/screen_7.png" class="lightbox">
                        <img src="/assets/images/screenshots/screen_7.png" class="app__screenshot" lazy="true">
                    </a>
                </div>
            </div>
        </section>
        <section class="app__fulldescription app__section container">
            <h2 class="app__section-title">لماذا عليك استخدام تطبيق مطر ؟</h2>
            <div class="app__fulldescription-content">
                <p>
                    تطبيق مطر هو التطبيق الأول من نوعه لمتابعة كل جديد بالطقس , حيث يحتوي على

                <ul>
                    <li>توقعات كتابية لأحوال الطقس</li>
                    <li>خرائط طقس متنوعة (حركة السحب , رادار الأمطار , توقعات الأمطار , توقعات الرياح , توقعات درجات
                        الحرارة)</li>
                    <li>صور ومقاطع فيديو لطقس</li>
                </ul>
                </p>
            </div>
        </section>
        <section class="app__fulldescription app__section container">
            <h2 class="app__section-title">تابعنا من خلال</h2>
            <div class="app__fulldescription-content">
                <div class="follow-btns">
                    <a href="https://twitter.com/db5pp" class="twitter-follow">
                        <img src="/assets/images/icons8-twitter.svg" style="max-width:22px">
                        تابعنا علي تويتر
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=96890600780" class="whatsapp-follow">
                        <img src="/assets/images/icons8-whatsapp.svg" style="max-width:22px">
                        تواصل علي واتساب
                    </a>
                    <a href="https://www.instagram.com/db5pp" class="instagram-follow">
                        <img src="/assets/images/icons8-instagram.svg" style="max-width:22px">
                        تابعنا علي انستجرام
                    </a>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__container">
                <p class="footer__love">التصميم والبرمجة بواسطة <a href="https://digitwires.com" target="_blank">شركة
                        ديجيت وايرز</a></p>
            </div>
        </div>
    </footer>
</body>

</html>
