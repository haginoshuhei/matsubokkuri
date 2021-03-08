<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>松毬</title>
  <link rel="stylesheet" href="assets/css/reserve.css" />
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
          <form class="reserve" action="" method="post" name="form">
            <div class="reserve__item">
                <label class="reserve__item--label">お問い合わせ内容</label>
                <input class="reserve__item--radio" type="radio" name="inquiry" value="ご予約" checked> ご予約
                <input class="reserve__item--radio" type="radio" name="inquiry" value="問い合わせ"> 問い合わせ
            </div>
            <div class="reserve__item">
                <label class="reserve__item--label">お名前</label>
                <input type="text" name="name" value="" class="reserve__item--input">
            </div>
            <div class="reserve__item">
                <label class="reserve__item--label">ふりがな</label>
                <input type="text" name="furigana" value="" class="reserve__item--input">
            </div>
            <div class="reserve__item">
                <label class="reserve__item--label">メールアドレス</label>
                <input type="text" name="email" value="" class="reserve__item--input">
            </div>
            <div class="reserve__item">
                <label class="reserve__item--label">来店日</label>
                <input type="text" name="date" value="" class="reserve__item--input">
            </div>
            <div class="reserve__item">
              <label class="reserve__item--label">利用人数</label>
              <select class="reserve__item--select" name="member">
                <option value="">-</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
              </select>
            </div>
            <div class="reserve__item">
              <label class="reserve__item--label">時間</label>
              <input type="text" name="time" value="" class="reserve__item--input">
            </div>
          <button type="submit" class="reserve__item--btn">確認画面へ</button>
        </form>
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

    </body>
</html>