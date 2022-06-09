<div class="container">
    <nav class="navbar-mobile">
        <button class="toggle" onclick="openNav()"><img src="/assets/images/bar.svg"></button>
        <div class="overlay">
            <button class="close" onclick="closeNav()"><img src="/assets/images/close.svg"></button>
            <ul>
                <li>
                    <a href="/">الرئيسية</a>
                </li>
                <li>
                    <a href="/contact">
                        تواصل معنا
                    </a>
                </li>
                <li>
                    <a href="https://www.gheym.com/">موقع غيم</a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.izzedineeita.ghym">تطبيق غيم</a>
                </li>
                <li>
                    <a href="/register" class="button">تسجيل حساب</a>
                </li>
                <li><a href="/login" class="button">تسجيل الدخول</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navbar-desktop">
        <ul>
            <li>
                <a href="/">الرئيسية</a>
            </li>
            <li>
                <a href="/contact">
                    تواصل معنا
                </a>
            </li>
            <li>
                <a href="https://www.gheym.com/">موقع غيم</a>
            </li>
            <li>
                <a href="https://play.google.com/store/apps/details?id=com.izzedineeita.ghym">تطبيق غيم</a>
            </li>
            <li>
                <a href="/register" class="button">تسجيل حساب</a>
            </li>
            <li><a href="/login" class="button">تسجيل الدخول</a></li>
        </ul>
    </nav>
</div>
<script>
    function openNav() {
        document.querySelector('.navbar-mobile .overlay').style.display = 'block';
    }

    function closeNav() {
        document.querySelector('.navbar-mobile .overlay').style.display = 'none';
    }
</script>
