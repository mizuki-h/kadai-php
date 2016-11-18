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
      <a href="index.php">PHP HAIRSALON</a>
    </h1>
    <nav class="global-nav">
      <ul>
        <li class="nav-item"><a href="index.php">HOME</a></li>
        <li class="nav-item"><a href="#">MENU</a></li>
        <li class="nav-item"><a href="#">STYLIST</a></li>
        <li class="nav-item"><a href="#">BLOG</a></li>
        <li class="nav-item"><a href="#">ACCESS</a></li>
      </ul>
    </nav>
  </header>
  <div class="wrapper clearfix">
  <?php
        error_reporting(E_ALL & ~E_NOTICE) ?>
  <?php
        $a[0]=$_POST['name01'];
        $a[1]=$_POST['email01'];
        $a[2]=$_POST['tel01'];
        $a[3]=$_POST['pass01'];
    echo '<main class="main-login">';
     echo '<h2>会員登録フォーム</h2>';
     echo '<form method="post" action="login-01.php" class="contact">';
        echo '<table>';
          echo '<tbody>';
            echo '<tr>';
              echo '<th><label for="name">name</label></th>';
          echo '<td><input type="text" name="name2" id="name" size="50" placeholder="name" value='.htmlspecialchars($a[0]).'></td>';
           echo '</tr>';
           echo '<tr>';
              echo '<th><label for="email">email</label></th>';
              echo '<td><input type="text" name="email" id="email" size="50" placeholder="aaa@tcu.com" value='.htmlspecialchars($a[1]).'></td>';
           echo '</tr>';
           echo '<tr>';
              echo '<th><label for="tel1">tel</label></th>';
              echo '<td><input type="tel" name="tel1" id="tel1" size="50" placeholder="111-111-1111(半角数字)" value='.htmlspecialchars($a[2]).'></td>';
           echo '</tr>';
           echo '<tr>';
              echo '<th><label for="pass">password</label></th>';
              echo '<td><input type="password" name="password" id="pass" size="50" placeholder="6文字以上" value='.htmlspecialchars($a[3]).'></td>';
           echo '</tr>';
           echo '<tr>';
            echo '<th></th>';
              echo '<td class="button-login"><input type="submit" value="登録"></td>';
           echo '</tr>';
          echo '</tbody>';
        echo '</table>';
      echo '</form>';
    echo '</main>';
    ?>
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
