<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>مرحبا بكم في صفحة الاستقبال</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/scout.png" rel="icon">
    {{-- <link href="assets/imgs/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500,600,600,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/landing.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <img src="img/scout.png" alt="">
                <span>
        الجامعة
                 الوطنية للكشفية المغربية</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">الرئيسية</a></li>
                    @guest
                        <li><a class="getstarted scrollto" href="{{ route('login') }}">تسجيل الدخول</a></li>
                    @else
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">لوحة التحكم</a></li>
                        <li>
                            <form id="log_out" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            <a class="getstarted scrollto" onclick="document.getElementById('log_out').submit()"
                                href="#">تسجيل الخروج</a>
                        </li>
                    @endguest
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <br>
    <br>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up"> أهلا وسهلا بك </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400"><bdi>!!!</bdi> اضغط على الزر لتسجيل الدخول </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{route("login")}}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            @guest

                                <span>تسجيل الدخول</span>
                                @else
                                <span>التنقل في التطبيق</span>
                                @endguest

                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/imgs/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">



        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8 col-md-12 footer-info">
                        <a href="" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                            <span>ASM</span>
                        </a>
                        <p> <b>
                            الجامعة الوطنية للكشفية المغربية <bdo>(ASM)</bdo> هي منظمة وطنية غير ربحية تهدف إلى تربية الشباب المغربي على القيم الأخلاقية والوطنية، وتنمية مهاراتهم و قدراتهم، وتشجيعهم على المشاركة في الحياة العامة
                            . تُقدم <bdo>ASM</bdo> برنامجًا شاملاً للنشاطات الكشفية، بما في ذلك المخيمات، والرحلات، والأنشطة الاجتماعية، والخدمة المجتمعية، التي تُساهم في تنمية شخصياتهم و قدراتهم، وتُنمي
                             فيهم روح العمل الجماعي والمسؤولية.
                       </b> </p>

                    </div>





                    <div class="col-lg-4 col-md-12 footer-contact items-end  ">
                        <div class=" text-end  text-md-start flex w-1/2 ">
                        <h4>اتصل بنا</h4>
                        <p>
                            الطابق الثاني رقم 6، مبنى صفوة، <br>
                            شارع، جادة الحسن الأول، <br>
                            أكادير 80000<br>
                        <bdi>05282-13045</bdi> <strong>: هاتف</strong>  <br>
                        </p>
                    </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
            <bdi>2024©  ASM </bdi>      جميع الحقوق محفوظة لموقع
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    <!-- Template Main JS File -->

</body>

</html>
