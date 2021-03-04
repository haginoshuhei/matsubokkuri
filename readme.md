■Gulp処理
画像圧縮、SASSコンパイル、EJSコンパイル、ブラウザ同期

■HTML,CSS設計
基本的なCSS設計はBEMに準ずるが、CSSファイルはページごとに作成し、
最終的に一つに結合する。

■画像命名規則
Blockを想定し、Blockもしくはelementと同じ名前にする。
imgをdivで囲ってCSSでdivにサイズ指定する。
下記例を参考
<div class="head__logo"><img src="./assets/img/head__logo.png"></div>

■クラス命名規則
BEMは
Block
Element
Modifier
の3つで構成する。

1. BlockとElementをつなぐ場合は、アンダースコア2つでつなぐ
2. Modifierにつなぐ場合は、ハイフン2つでつなぐ
下記例を参考
<nav class='HeaderNav'>
 <ul class='Menu'>
   <li class='Menu__list'>TOP</li>
   <li class='Menu__list'>CONTACT</li>
   <li class='Menu__list Menu__list--backBlack'>ABOUT US</li>
   <li class='Menu__list'>SERVICE</li>
  </ul>
</nav>

CSSを書く際は下記のようにBlockのクラス名からネストして繋いで書く
.Menu {
  list-style: none;
  &__list {
    background-color: #3BD1EC;
    color: #FFF;
    float: left;
    font-size: 30px;
    padding: 2% 1%;
    text-align: center;
    width: 23%;
    &--backBlack {
      background-color: black;
      color: #3BD1EC;
    }
  }
}

■リリース時のコメント処理
リリース時はコメントを残したり解読させたくないので、下記対応の後リリースする。
EJSは%=でコメントアウト
SASSはcompressでコンパイル
JSはwebpackでバンドル

■単位の設定
font-size: rem（pxではフォントサイズ変更に対応できない）
Margin,padding: rem（フォントサイズ変更時に比率を維持するため）
Border: px（拡大縮小すると見えなくなったり太くなったりするため）
Width,height: px,%（フォントサイズ変更時に比率を維持）
Mediaquery: em（pxではブラウザ設定に適応できず、remはsafariでバグる）

remはhtmlにはfontsizeを記述せず、下記functionを使い適用する。
----------------------------------------------
$baseFontSize: 16;
@function rem($pixels) {
  @return $pixels / $baseFontSize * 1rem;
}

font-size: rem(16);
----------------------------------------------

レスポンシブ650以下ではcalcでvwを使用する。
----------------------------------------------
@function v($vw) {
  @return calc($vw + "vw" / 750);
}

margin: v(100);

font-size: rem(16);
----------------------------------------------

CSS条件
・最小文字サイズ変更に対応
・ブラウザの文字サイズ変更に対応
・ブラウザのズームに対応

ズームイン/アウト正解例
・Chrome
PC1920以上：通常ズーム
1920以下：通常ズーム
フォントサイズ縮小：縮小される
フォントサイズ拡大：拡大される

・MAC safari
PC1920以上：通常ズーム
1920以下：通常ズーム