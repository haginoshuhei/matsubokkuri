<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>松毬</title>
  <link rel="stylesheet" href="assets/css/contact.css" />
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
                  <li class="container-nav__list"><a href="#">松毬のこだわり</a></li>
                  <li class="container-nav__list"><a href="#">ニュース</a></li>
                  <li class="container-nav__list"><a href="#">メニュー</a></li>
                  <li class="container-nav__list"><a href="#">もんじゃ焼きの焼き方</a></li>
                </div>
                <div class="flex">
                  <li class="container-nav__list"><a href="#">ネットショップ</a></li>
                  <li class="container-nav__list"><a href="#">店舗紹介</a></li>
                  <li class="container-nav__list"><a href="#">会社概要</a></li>
                  <li class="container-nav__list"><a href="#">ご予約お問い合わせ</a></li>
                  <li class="container-nav__list"><a href="#"><img src="assets/img/instagram.png" alt=""></a></li>
                </div>
              </ul>
            </nav>
          </div>
          <h2 class="header__pagetitle">問い合わせ</h2>
        </header>
        <!-- contents -->
        <nav>
          <ul class="breadcrumbs">
            <li class="breadcrumbs__list"><a  class="breadcrumbs__list" href="index.php">Top</a></li>
            <li class="breadcrumbs__list">問い合わせ</li>
          </ul>
        </nav>

        <section>
          <form class="contact" action="" method="post" name="form">
            <div class="contact__item">
                <label class="contact__item--label">お問い合わせ内容</label>
                <input class="contact__item--radio" type="radio" name="inquiry" value="ご予約"> ご予約
                <input class="contact__item--radio" type="radio" name="inquiry" value="問い合わせ" checked> 問い合わせ
            </div>
            <div class="contact__item">
                <label class="contact__item--label">お名前</label>
                <input type="text" name="name" value="" class="contact__item--input">
            </div>
            <div class="contact__item">
                <label class="contact__item--label">ふりがな</label>
                <input type="text" name="furigana" value="" class="contact__item--input">
            </div>
            <div class="contact__item">
                <label class="contact__item--label">メールアドレス</label>
                <input type="text" name="email" value="" class="contact__item--input">
            </div>
            <div class="contact__item">
                <label class="contact__item--label">お問い合わせ内容<span>必須</span></label>
                <textarea name="content" rows="5"  class="contact__item--textarea"></textarea>
            </div>
          <button type="submit" class="contact__item--btn">確認画面へ</button>
        </form>
        </section>

        <footer class="footer">
          <img class="footer__logopc" src="assets/img/footerlogo.png" alt="松毬">
          <div class="footnav">
            <img class="footnav__logo" src="assets/img/footerlogo.png" alt="松毬">
            <nav class="footnav__box">
              <ul>
                <li><a href="#">松毬のこだわり</a></li>
                <li><a href="#">ニュース</a></li>
                <li><a href="#">メニュー</a></li>
                <li><a href="#">もんじゃ焼きの焼き方</a></li>
              </ul>
            </nav>
            <nav class="footnav__box">
              <ul>
                <li><a href="#">ネットショップ</a></li>
                <li><a href="#">店舗紹介</a></li>
                <li><a href="#">会社概要</a></li>
                <li><a href="#">ご予約・問い合わせ</a></li>
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