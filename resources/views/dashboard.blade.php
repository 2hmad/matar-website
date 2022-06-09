<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>لوحة تحكم المسوقين | تطبيق مطر</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="/assets/dashboard.css" rel="stylesheet">
</head>

<body>

    <div class="dashboard-page">
        @include('layouts.dashNav')
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-25 font-weight-bolder" style="color:#5e5873">
                        0$
                    </h2>
                    <span>اجمالي الايرادات</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-25 font-weight-bolder" style="color:#5e5873">
                                0$
                            </h2>
                            <span>عدد المسجلين</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-25 font-weight-bolder" style="color:#5e5873">
                                0$
                            </h2>
                            <span>اجمالي عمولة التسجيل</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-25 font-weight-bolder" style="color:#5e5873">
                                0$
                            </h2>
                            <span>اجمالي عمولة الاشتراك</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>
