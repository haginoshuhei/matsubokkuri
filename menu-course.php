<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>松毬</title>
  <link rel="stylesheet" href="assets/css/menu-course.css" />
</head>
<body>
  <body id="body">

    <div class="wrapper">

      <main>
        <header>
          <!-- header -->
        <header class="header">
          <h1 class="header__logo"><img src="assets/img/logo-white.svg" alt="松毬"></h1>
          <!-- ハンバーガー -->
          <div class="drawer">
            <input type="checkbox" id="drawer-check" class="drawer-hidden" >
            <label for="drawer-check" class="drawer-open"><span></span></label>
            <nav class="nav">
              <ul class="container-nav">
                <div class="flex">
                  <li class="container-nav__list"><a href="recipe.php">松毬のこだわり</a></li>
                  <li class="container-nav__list"><a href="news.php">ニュース</a></li>
                  <li class="container-nav__list"><a href="menu-course.php">メニュー</a></li>
                  <li class="container-nav__list"><a href="recipe.php">もんじゃ焼きの焼き方</a></li>
                </div>
                <div class="flex">
                  <li class="container-nav__list"><a href="#">ネットショップ</a></li>
                  <li class="container-nav__list"><a href="#">店舗紹介</a></li>
                  <li class="container-nav__list"><a href="company.php">会社概要</a></li>
                  <li class="container-nav__list"><a href="reserve.php">ご予約お問い合わせ</a></li>
                  <li class="container-nav__list"><a href="#"><img src="assets/img/instagram.png" alt=""></a></li>
                </div>
              </ul>
            </nav>
          </div>
          <h2 class="header__pagetitle">メニュー・コース</h2>
        </header>
        <!-- contents -->

        <nav>
          <ul class="breadcrumbs">
            <li class="breadcrumbs__list"><a  class="breadcrumbs__list" href="index.php">Top</a></li>
            <li class="breadcrumbs__list">メニュー・コース</li>
          </ul>
        </nav>

        <section class="menu">
          <h2 class="menu__title">メニュー</h2>
          <ul class="menu__container">
            <a href="#">
              <li class="menu__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>［大阪流］もんじゃ焼</p>
              </li>
            </a>
            <a href="#">
              <li class="menu__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>ネギ焼き</p>
              </li>
            </a>
            <a href="#">
              <li class="menu__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>広島焼</p>
              </li>
            </a>
            <a href="#">
              <li class="menu__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>お好み焼き</p>
              </li>
            </a>
            <a href="#">
              <li class="menu__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>焼きそば・焼うどん</p>
              </li>
            </a>
            <a href="#">
              <li class="menu__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>一品・サラダ</p>
              </li>
            </a>
            <a href="#">
              <li class="menu__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>揚げ物・鉄板焼き・ご飯もの</p>
              </li>
            </a>
            <a href="#">
              <li class="menu__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>デザート</p>
              </li>
            </a>
            <a href="#">
              <li class="menu__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>期間限定</p>
              </li>
            </a>
          </ul><!-- .menu__containe -->
        </section>

        <section class="course">
          <h2 class="course__title">コース</h2>
          <ul class="course__container">
            <a href="#">
              <li class="course__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>もんじゃコース</p>
              </li>
            </a>
            <a href="#">
              <li class="course__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>鶏鍋コース</p>
              </li>
            </a>
            <a href="#">
              <li class="course__container--item">
                <img src="assets/img/okonomi.jpg" alt="">
                <p>チゲ鍋コース</p>
              </li>
            </a>
          </ul><!-- .menu__containe -->

        </section>

        <footer class="footer">
          <img class="footer__logopc" src="assets/img/footerlogo.png" alt="松毬">
          <div class="footnav">
            <img class="footnav__logo" src="assets/img/footerlogo.png" alt="松毬">
            <nav class="footnav__box">
              <ul>
                <li><a href="recipe.php">松毬のこだわり</a></li>
                <li><a href="news.php">ニュース</a></li>
                <li><a href="menu.php">メニュー</a></li>
                <li><a href="recipe.php">もんじゃ焼きの焼き方</a></li>
              </ul>
            </nav>
            <nav class="footnav__box">
              <ul>
                <li><a href="#">ネットショップ</a></li>
                <li><a href="#">店舗紹介</a></li>
                <li><a href="company.php">会社概要</a></li>
                <li><a href="reserve.php">ご予約・問い合わせ</a></li>
              </ul>
            </nav>
            <div class="footnav__info">
              <p class="footnav__info--medium">お電話でのご予約・お問い合わせはコチラ</p>
              <p class="footnav__info--large">050-5592-7350</p>
              <img class="footer__logotab" src="assets/img/footerlogo.png" alt="松毬">
              <p class="footnav__info--copyright"><small>Copyright (C) CHIBO Corporation All Rights Reserved.</small></p>
            </div>
          </div><!-- footnav -->
        </footer>
      </main>

    </div>

    <script src="assets/bundle.js"></script>

    </body>
</html>