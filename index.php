<!DOCTYPE html>
<html lang="ja">
<!-- SNSマーケティング OGP の導入-->
<head
    prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"
>
    <!-- 文字エンコードを指定 -->
    <meta charset="utf-8">
    <!-- IEブラウザの互換対応 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- スマホやタブレットの表示領域を設定 -->
    <meta name="viewport" content="width=device-width, initial-scale=1 minimum-scale=1 maximum-scale=1 user-scalable=yes"/>
    <!-- SNS関連 -->
    <!-- ページがトップページ(website)か否か(article) -->
    <meta property="og:type" content="website"/>
    <!-- ページのURL -->
    <meta property="og:url" content="https://suinan0803f.github.io/"/>
    <!-- シェア時の画像 -->
    <meta property="og:image" content="https://suinan0803f.github.io/asset/img/main_thema.png"/>
    <!-- タイトルを指定する -->
    <meta property="og:title" content="SNSタイトルテスト"/>
    <!-- 説明文を記載する -->
    <meta property="og:description" content="SNS説明文テスト"/>
    <!-- 言語を指定する(日本語: ja_JP、英語: en_US) -->
    <meta property="og:locale" content="ja_JP"/>
    <!-- サイト名を表示する -->
    <meta property="og:site_name" content="SNSサイト名テスト"/>
    <!-- facebookの連携 -->
    <!-- <meta property="fb:app_id" content="(facebookのアプリID)" /> -->
    <!-- twitterの場合 -->
    <!-- twitterカードの種類(小さめ: summary、大型画像付き: summary_large_image) -->
    <!-- <meta name="twitter:card" content="summary_large_image"/>            -->
    <!-- twitterのユーザー名 -->
    <!-- <meta name="twitter:site" content="(twitterのユーザー名)" /> -->
    <!-- twitterのタイトル名 -->
    <!-- <meta name="twitter:title" content="(3)ページのタイトル" />  -->
    <!-- twitterの説明文 -->
    <!-- <meta name="twitter:description" content="(4)ページの説明文" /> -->
    <!-- twitterの画像URL -->
    <!-- <meta name="twitter:image" content="(5)画像のURL" /> -->

    <!-- タブのタイトルをつける -->
    <title>ニシ自動車鈑金ホームページ</title>

    <!-- SEO対策 -->

    <!-- 同じコンテンツをPC版やスマホ版、多言語対応などにより別URLで構成する場合、検索エンジンに「同じものだよ」と教えてあげる。 -->
    <!-- 同じようなサイトを複数作った場合は、その数だけかく -->
    <!-- 今回はPC/スマホ両対応で日本語版しか作らないからいらない -->
    <!-- スマホ版を作った場合 -->
    <!-- <link rel=”alternate” media=”only screen and (max-width: 640px)” href="https://suinan0803f.github.io/en/" /> -->
    <!-- 英語版を作った際には以下の用にかく -->
    <!-- <link rel="alternate" href="https://suinan0803f.github.io/en/" hreflang="en">  -->
    <!-- 逆に派生のサイト(スマホ版や英語版)のHTMLには下記のように記す -->
    <!-- <link rel=”canonical” href=”https://suinan0803f.github.io/” /> -->

    <!-- 検索時の標準的な説明文を設定 -->
    <meta name="description" content="ニシ自動車鈑金のホームページです。唐津市でのお車の修理ならおまかせください"/>
    
    <!-- 検索時のキーワードを作成 -->
    <!-- 現在は形骸化しているため、記載不要だが、勉強のために残しておく -->
    <meta name="keywords" content="ニシ, 車, 唐津, 鈑金, 塗装, 修理" />

    <!-- アイコン -->
    <link rel="shortcut icon" href="./asset/img/westAutumnlogo_16x16.png" type="image/png"/>

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="./asset/materialize/css/materialize.min.css"/> -->

    <link rel="stylesheet" href="./asset/aos-master/dist/aos.css"/>
    <link rel="stylesheet" href="./asset/css/g_style.css"/>
    <link rel="stylesheet" href="./asset/css/style.css" type="text/css" media="screen"/>
    <!-- <link rel="stylesheet" href="./asset/bxslider/css/jquery.bxslider.css"> -->

    <!-- フォント --> <!-- font-family: 'Noto Serif JP', serif; -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet"/>

    <!-- アイコンツール -->
    <link href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script>
        const theme = localStorage.getItem('theme');
        if (theme) document.documentElement.setAttribute('theme', theme);
    </script>
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav role="navigation" class="">
                <div class="nav-wrapper">
                    <a href="./index.php" id="logo-container" class="brand-logo" aria-label="Link to ns_autumn.com">
                        <img src="./asset/IMG/ニシ自動車鈑金ロゴ_short01.png" alt="logo" class="main-logo">
                    </a>
                    <!-- <a href="#" data-target="slide-out" id="sidenav-trigger" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a> -->
                    <button id="sidenav-trigger" type="button" class="sidenav-trigger" aria-controls="sidenav" aria-expanded="false">
                        <span class="sidenav-trigger-line"></span>
                        <span class="sidenav-trigger-text"></span>
                    </button>

                    <!-- PCブラウザ用 -->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#" class="scroll-to-top-li">トップ</a></li>
                        <li><a href="" >お知らせ</a></li>
                        <li class="dropdown">
                            <a class="dropdown-trigger" href="">サービス内容</a>
                            <ul class="dropdown-list ">
                                <li><a href="">鈑金/塗装</a></li>
                                <li><a href="">溶接</a></li>
                                <li><a href="">塗料販売</a></li>
                                <li><a href="">代車無料</a></li>
                            </ul>
                        </li>
                        <li><a href="">塗料の販売</a></li>
                        <li><a href="">アクセス</a></li>
                        <li><a href="">会社概要</a></li>
                        <li><a href="">お問い合わせ</a></li>
                        <li><a href="#" name="theme-switch" onclick="changeTheme();"><i class="material-icons">dark_mode</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- スマホ・タブレット用 -->
        <div class="sidenav-area js-nav-area" id="navigation">
            <nav id="sidenav" class="sidenav">
                <ul id="slide-out" class="sidenav-list">
                    <li><a href="#" class="sidenav-link">トップ</a></li>
                    <li><a href="#" class="sidenav-link">お知らせ</a></li>
                    <li>           
                        <button type="button" class="sidenav-link -accordion sidenav-accordion-trigger" aria-expanded = 'false' aria-controls="accordion1">
                            サービス内容
                        </button>
                        <div id="accordion1" class="accordion sidenav-link">
                            <ul class="sidenav-accordion-list">
                                <li><a href="#" class="sidenav-accordion-link">鈑金/塗装</a></li>
                                <li><a href="#" class="sidenav-accordion-link">溶接</a></li>
                                <li><a href="#" class="sidenav-accordion-link">塗料販売</a></li>
                                <li><a href="#" class="sidenav-accordion-link">代車無料</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" class="sidenav-link">塗料の販売</a></li>
                    <li><a href="#" class="sidenav-link">アクセス</a></li>
                    <li><a href="#" class="sidenav-link">会社概要</a></li>
                    <li><a href="#" class="sidenav-link">お問い合わせ</a></li>
                    <li><a href="#" class="sidenav-link" name="theme-switch" onclick="changeTheme();"><i class="material-icons">dark_mode</i></a></li>
                </ul>
            </nav>
        </div>
        <div id="focus-trap" tabindex="0"></div>
    </header>
    <main>
        <div class="slider">
            <ul class="slides">
                <li name="slide-name">
                    <img src="./asset/img/ニシ自動車鈑金ロゴ.png"  alt="">
                    <div class="caption left-align">
                        <h3 class="top-text">Car Painter<br>
                            Nishi Automobile Sheet Metal</h3>
                        <h5 class="lignt grey-text text-lighten-3">愛車との旅を終わらせない</h5>
                    </div>
                </li>
                <li name="slide-name">
                    <img src="./asset/img/test02.png" alt="">
                    <div class="caption center-align">
                        <h3>これはテストです</h3>
                        <h5 class="lignt grey-text text-lighten-3">てすてす</h5>
                    </div>
                </li>
                <li name="slide-name">
                    <img src="./asset/img/test03.png" alt="">
                    <div class="caption right-align">
                        <h3>これはテストです</h3>
                        <h5 class="lignt grey-text text-lighten-3">てすてす</h5>
                    </div>
                </li>
            </ul>
            <a href="#" id="prev" class="prev"><i class="fas fa-chevron-left"></i></a>
            <a href="#" id="next" class="next"><i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="info-block container">
            <section id="information" class="information" data-aos="fade-right">
                <h5>お知らせ</h5>
                <ul>
                    <li>
                        <a href="">テスト</a>
                    </li>
                    <li>
                        <a href="">テスト</a>
                    </li>
                    <li>
                        <a href="">テスト</a>
                    </li>
                </ul>
            </section>
        </div>
        <div class="what-block container">
            <section id="what-is" class="what-is" >
                <div class="what-title">
                    <h4>ニシ自動車鈑金ってどんなお店？</h4>
                    <div class="what-title-flex">
                        <img src="./asset/img/23301420_s.jpg" alt="人">
                        <img src="./asset/img/23452.png" alt="？">
                    </div>
                </div>
                <ul>
                    <li>
                        <div class="what-text">
                            <h5>鈑金</h5>
                            <p>自動車の曲がりや凹みを矯正し、きれいにする</p>
                        </div>
                        <img src="" alt="鈑金写真">
                    </li>
                    <li class="flex-reverse">
                        <div>
                            <h5>塗装</h5>
                            <p>自動車に塗料を吹きかけ、元の綺麗な状態にもどす</p>
                        </div>
                        <img src="" alt="塗装写真">
                    </li>
                    <li>
                        <div>
                            <h5>塗料の販売</h5>
                            <p>作成した塗料の予備を販売しております</p>
                        </div>
                        <img src="" alt="塗料の写真">
                    </li>
                </ul>
            </section>
        </div>
        <div class="how-block container">
            <section id="how-is" class="how-is" >
                <h4>How's car painting?</h4>
                <img src="" alt="人">
                <ul>
                    <li></li>
                </ul>
            </section>
        </div>
        <div class="where-block container">
            <section id="where-is" class="where-is" >
                <h4>Where's ニシ自動車鈑金?</h4>
                <img src="" alt="人">
                <ul>
                    <li></li>
                </ul>
            </section>
        </div>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="footer_left">
                <h5 class="bold">ニシ自動車鈑金</h1>
                <p class="bold">
                    〒847-0833 佐賀県唐津市畑島5341-1<br>
                    TEL：0955-78-1488<br>
                    営業時間：9:00-17:00<br>
                    定休日：毎週日曜日、毎月第二土曜日
                </p>
                <div class="sns">
                    <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-square size site-color"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram size site-color"></i>
                    </a>
                </div>
            </div>
            <div class="footer_right">
                <p class="footer_line">CATEGORY</p>
                <div class="footer_right_box">
                    <div class="footer_right_l">
                        <p><a href="#news" class=""><i class="fas fa-chevron-right"></i> お知らせ</a></p>
                        <p><a href="#menu" class=""><i class="fas fa-chevron-right"></i> メニュー</a></p>
                        <p><a href="#paintshop" class=""><i class="fas fa-chevron-right"></i>塗料の販売</a></p>
                    </div>
                    <div class="footer_right_r">
                        <p><a href="#event" class=""><i class="fas fa-chevron-right"></i> イベント</a></p>
                        <p><a href="#access" class=""><i class="fas fa-chevron-right"></i> アクセス</a></p>
                        <p><a href="#reservation" class=""><i class="fas fa-chevron-right"></i> ご予約</a></p>
                        <p><a href="#contact" class=""><i class="fas fa-chevron-right"></i> お問い合わせ</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <p>&copy; 2023 ニシ自動車鈑金 All rights reserved.</p>
            </div>
        </div>
        <div class="pagetop">
            <a href="#"></a>
        </div>
      </footer>
    <!-- script読み込み -->
    <script 
        src="https://code.jquery.com/jquery-3.7.0.min.js" 
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" 
        crossorigin="anonymous"
    ></script>
    
    <script 
        src="https://code.jquery.com/color/jquery.color-2.2.0.min.js" 
        integrity="sha256-aSe2ZC5QeunlL/w/7PsVKmV+fa0eDbmybn/ptsKHR6I=" 
        crossorigin="anonymous"
    ></script>
    <!-- <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js" 
        integrity="sha512-mlz/Fs1VtBou2TrUkGzX4VoGvybkD9nkeXWJm3rle0DPHssYYx4j+8kIS15T78ttGfmOjH0lLaBXGcShaVkdkg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"
    ></script> -->
    <!-- <script src="./asset/bxslider/js/jquery.bxslider.js"></script> -->
    <script src="./asset/aos-master/dist/aos.js"></script>
    <!-- <script src="./asset/materialize/js/materialize.js"></script> -->
    <script src="./asset/js/custom.js"></script>

    <!-- [TASKS] ドメインを取得した後にやる -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script 
        async 
        src="https://www.googletagmanager.com/gtag/js?id=MEASUREMENT_ID"
    ></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){
            dataLayer.push(arguments);
    }
        gtag('js', new Date());

        gtag('config', 'MEASUREMENT_ID');
    </script> -->
</body>
</html>