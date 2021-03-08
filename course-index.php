<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>松毬</title>
  <link rel="stylesheet" href="assets/css/course-index.css" />
</head>
<body>
  <body id="body">

    <div class="wrapper">

      <main>
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
          <h2 class="header__pagetitle">もんじゃコース</h2>
        </header>
        <!-- contents -->

        <section class="course">
        <div class="swiper-container">
          <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="assets/img/okonomi.jpg" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/okonomi.jpg" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/okonomi.jpg" alt=""></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
          <!-- <div class="course__slide">
            <div class="course__slide--img"><img src="assets/img/okonomi.jpg" alt=""></div>
            <div class="course__slide--img"><img src="assets/img/okonomi.jpg" alt=""></div>
            <div class="course__slide--img"><img src="assets/img/okonomi.jpg" alt=""></div>
          </div>
          <div class="course__btn-prev"></div>
          <div class="course__btn-next"></div> -->
        </section>

        <section class="coursetext">
          <h3 class="coursetext__title">もんじゃコース</h3>
          <table class="coursetext__info">
            <tbody>
              <tr class="coursetext__info--box">
                <th class="coursetext__info--bold">コース料金</th>
                <td class="coursetext__info--data">1.480円</td>
              </tr>
              <tr class="coursetext__info--box">
                <th class="coursetext__info--bold">品数</th>
                <td class="coursetext__info--data">5品</td>
              </tr>
              <tr class="coursetext__info--box">
                <th class="coursetext__info--bold">利用可能人数</th>
                <td class="coursetext__info--data">2名から</td>
              </tr>
              <tr class="coursetext__info--box">
                <th class="coursetext__info--bold">滞在可能時間</th>
                <td class="coursetext__info--data">2時間</td>
              </tr>
              <tr class="coursetext__info--box">
                <th class="coursetext__info--bold">飲み放題</th>
                <td class="coursetext__info--data">あり</td>
              </tr>
              <tr class="coursetext__info--box">
                <th class="coursetext__info--bold">コース内容</th>
                <td class="coursetext__info--data">
                  <span>・一品料理1品</span>
                  <span>・鉄板料理1品</span>
                  <span>・セイロ蒸し</span>
                  <span>・もんじゃ（どれでも1品）</span>
                  <span>・さつまいも</span>
                </td>
              </tr>
              <tr class="coursetext__info--box">
                <th class="coursetext__info--bold">注意事項</th>
                <td class="coursetext__info--data">
                  <span>※2～16名様まで</span>
                  <span>※お時間は2時間制となっております。</span>
                  <span>※2時間飲み放題（L.O90分）</span>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="coursetext__btn">
            <a href="#">TOPへ戻る</a>
          </div>
        </section>

        <footer class="footer">
          <img class="footer__logopc" src="assets/img/footerlogo.png" alt="松毬">
          <div class="footnav">
            <img class="footnav__logo" src="assets/img/footerlogo.png" alt="松毬">
            <nav class="footnav__box">
              <ul>
                <li><a href="recipe.php">松毬のこだわり</a></li>
                <li><a href="news.php">ニュース</a></li>
                <li><a href="menu-course.php">メニュー</a></li>
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
    <script src="assets/js/swiper.js"></script>

    </body>
</html>