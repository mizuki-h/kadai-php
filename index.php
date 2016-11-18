<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP最終課題</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="header">
    <h1 class="logo">
      <a href="index.php">PHP HAIRSALON</a>
    </h1>
    <nav class="global-nav">
      <ul>
        <li class="nav-item active"><a href="#">HOME</a></li>
        <li class="nav-item"><a href="#">MENU</a></li>
        <li class="nav-item"><a href="#">STYLIST</a></li>
        <li class="nav-item"><a href="#">BLOG</a></li>
        <li class="nav-item"><a href="#">ACCESS</a></li>
<!--         <li class="nav-item"><a href="contact.html">CONTACT</a></li> -->
      </ul>
    </nav>
  </header>
  <div class="wrapper clearfix">
    <main class="main">
    <div class="main-img">
        <img src="images/main.jpg" alt="メインビジュアル">
    </div>
      <h2 class="heading">NEWS</h2>
      <ul class="scroll-list">
        <li class="scroll-item">
          <a href="#">
            <time class="date" datetime="2016-07-24">2016.07.24 SUN</time>
            <span class="category news">NEWS</span>
            <span class="title">スタイリストが増えました！</span>
          </a>
        </li>
        <li class="scroll-item">
          <a href="#">
            <time class="date" datetime="2016.07.20">2016.07.20 WED</time>
            <span class="category">TOPIC</span>
            <span class="title">夏のオススメコースのご紹介</span>
          </a>
        </li>
        <li class="scroll-item">
          <a href="#">
            <time class="date" datetime="2016-07-12">2016.07.12 TUE</time>
            <span class="category news">NEWS</span>
            <span class="title">臨時休業のお知らせ</span>
          </a>
        </li>
        <li class="scroll-item">
          <a href="#">
            <time class="date" datetime="2016-07-09">2016.07.09 SUN</time>
            <span class="category">TOPIC</span>
            <span class="title">新店長のご挨拶</span>
          </a>
        </li>
        <li class="scroll-item">
          <a href="#">
            <time class="date" datetime="2016-07-8">2016.07.8 SAT</time>
            <span class="category">TOPIC</span>
            <span class="title">ヘアアレンジ講座開講のお知らせ</span>
          </a>
        </li>
        <li class="scroll-item">
          <a href="#">
            <time class="date" datetime="2016-06-30">2016.06.30 TUE</time>
            <span class="category news">NEWS</span>
            <span class="title">料金改正のお知らせ</span>
          </a>
        </li>
      </ul>
      <h2 class="hidden">ARTICLES</h2>
      <div class="clearfix">
        <a href="#" class="article-box">
          <h3 class="title">美容師オススメ！ヘアケア商品</h3>
          <p class="desc">紫外線の強い夏にオススメの<br />ヘアケア商品のご紹介！</p>
          <img class="image" src="./images/article1.jpg" alt="コーディング画面">
        </a>
        <a href="#" class="article-box">
          <h3 class="title">夏のスキンケア方法のご紹介！</h3>
          <p class="desc">紫外線の強い夏にオススメの<br />スキンケア商品のご紹介！</p>
          <img class="image" src="./images/article2.jpg" alt="コーディング画面">
        </a>
        <a href="#" class="article-box">
          <h3 class="title">ウェディング特集</h3>
          <p class="desc">結婚式当日のヘアアレンジからスキンケア方法などのご相談など承ります！</p>
          <img class="image" src="./images/article3.jpg" alt="コーディング画面">
        </a>
        <a href="#" class="article-box">
          <h3 class="title">ダメージヘアを美しく！キャンペーン中</h3>
          <p class="desc">大切な髪のダメージを少しでも良くしていけるよう、キャンペーンを行っております。詳細はスタイリストまで</p>
          <img class="image" src="./images/article4.jpg" alt="コーディング画面">
        </a>
      </div>
    </main>
    <div class="sidemenu">
      <h2 class="heading">STYLIST RANKING</h2>
        <ol class="ranking">
          <li class="ranking-item">
            <a href="#">
              <img class="image" src="./images/ranking.jpg" alt="グラフの画像">
              <span class="order"></span>
              <p class="text">スタイリスト名</p>
            </a>
          </li>
          <li class="ranking-item">
            <a href="#">
              <img class="image" src="./images/ranking.jpg" alt="グラフの画像">
              <span class="order"></span>
              <p class="text">スタイリスト名</p>
            </a>
          </li>
          <li class="ranking-item">
            <a href="#">
              <img class="image" src="./images/ranking.jpg" alt="グラフの画像">
              <span class="order"></span>
              <p class="text">スタイリスト名</p>
            </a>
          </li>
          <li class="ranking-item">
            <a href="#">
              <img class="image" src="./images/ranking.jpg" alt="グラフの画像">
              <span class="order"></span>
              <p class="text">スタイリスト名</p>
            </a>
          </li>
          <li class="ranking-item">
            <a href="#">
              <img class="image" src="./images/ranking.jpg" alt="グラフの画像">
              <span class="order"></span>
              <p class="text">スタイリスト名</p>
            </a>
        </ol>

      <h2 class="hidden">SEARCH</h2>
      <form class="search-box">
        <input class="search-input" type="text" name="search" placeholder="SEARCH">
        <input class="search-button" type="submit" value="検索">
      </form>
<!-- ログイン -->
      <div class="login">
        <h2>ログイン</h2>
           <div>
           <!-- ログインボタンが押された場合 -->
             <?php
                  error_reporting(E_ALL & ~E_NOTICE)
            ?>
              <table border="0">
              <?php
                  if($_GET[login]==failed)

                    echo '<p>ログインできませんでした</p>';
              ?>
                  <form method="post" id="loginform" action="index-after.php">
                    <tr>
                        <th>userName</th>
                        <td><input type="text" name="name01" value="" size="24"></td>
                    </tr>
                    <tr>
                        <th>password</th>
                        <td><input type="password" name="pass01" value="" size="24"></td>
                    </tr>
                    <tr>
                         <td colspan="2" id="login_btn"><input class="login_btn" name="login_btn" type="submit" value="ログイン"></td>
                    </tr>
                  </form>
               </table>
           </div>
       </div>
<!-- ここまで -->
      <a href="login.php">
        <div class="sub-btn">
            <p>まだ会員では<br />ない方はこちら</p>
        </div>
      </a>
        <div class="sub-btn">
            <p>ご予約は会員登録後に<br />お願い致します。</p>
        </div>
    </div>
  </div>
  <footer class="footer">
    <ul class="horizontal-list">
      <li class="horizontal-item"><a href="#">ABOUT ME</a></li>
      <li class="horizontal-item"><a href="#">SITE MAP</a></li>
      <li class="horizontal-item"><a href="#">SNS</a></li>
    </ul>
    <p class="copyright">Copyright © 2016 PHP kadai</p>
  </footer>
</body>
</html>
