<!--予約確認-->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP最終課題</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
</head>
<body>
  <header class="header">
    <h1 class="logo">
      <a href="index-after.php">PHP HAIRSALON</a>
    </h1>
    <nav class="global-nav">
      <ul>
        <li class="nav-item"><a href="index-after.php">HOME</a></li>
        <li class="nav-item"><a href="#">MENU</a></li>
        <li class="nav-item"><a href="#">STYLIST</a></li>
        <li class="nav-item"><a href="#">BLOG</a></li>
        <li class="nav-item"><a href="#">ACCESS</a></li>
        <li class="nav-item active"><a href="contact.php">CONTACT</a></li>
      </ul>
    </nav>
  </header>

  <div class="wrapper clearfix">
    <main class="main-conf">
      <h2>予約確認</h2>
           <form method="post" action="contact-01.php" class="contact">
        <table>
          <tbody>
            <tr>
              <th><label for="name">name</label></th>
              <td>テキストテキストテキスト</td>
            </tr>
            <tr>
              <th><label for="stylist-name">stylist name</label></th>
              <td>テキストテキストv</td>
           </tr>
           <tr>
              <th><label for="date">date</label></th>
              <td>テキストテキストテキスト</td>
           </tr>
           <tr>
              <th><label for="time">time</label></th>
              <td>テキストテキスト</td>
           </tr>

           <tr>
              <th><label for="request">request</label></th>
              <td>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</td>
           </tr>
           <tr>
              <th></th>
              <td class="button-login"><!-- <input type="submit" value="保存"> --></td>
           </tr>
          </tbody>
        </table>
      </form>

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
