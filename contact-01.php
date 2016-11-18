<!DOCTYPE html>
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
        <li class="nav-item"><a href="contact.php">CONTACT</a></li>
      </ul>
    </nav>
  </header>

  <div class="wrapper clearfix">
     <?php
        $b[0]=$_POST['name01'];
        $b[1]=$_POST['stylist-name01'];
        $b[2]=$_POST['date01'];
        $b[3]=$_POST['time01'];
        $b[4]=$_POST['requist01'];

        $hostname='localhost';
        $username='root';
        $password='';

        $dbname='hearDB';
        $tablename='contact';

        $link = mysqli_connect($hostname,$username,$password);
        if(! $link){ exit("Connect error!"); }

         // $result=mysqli_query($link,"CREATE DATABASE $dbname CHARACTER SET utf8;");
         // if(!$result) { exit("create DB"); }

        $result=mysqli_query($link,"USE $dbname");
        if(!$result) { exit("USE failed!"); }

        // $result=mysqli_query($link,"CREATE TABLE $tablename (id INT NOT NULL AUTO_INCREMENT,name01 VARCHAR(30)BINARY, stylistname01 VARCHAR(30)BINARY, date01 VARCHAR(30)BINARY,time01 TIME,requist01 VARCHAR(50)BINARY,PRIMARY KEY(id)) CHARACTER SET utf8;");
        // if(!$result) { exit("create table"); }

        $result=mysqli_query($link,"INSERT INTO $tablename SET name01='$b[0]',stylistname01='$b[1]',date01='$b[2]',time01='$b[3]',requist01='$b[4]'");
        if(! $result){ exit("INSERT error(1)!"); }

        ?>
    <main class="main-after">
      <h2>登録完了</h2>
      <img src="images/thanks.jpg">
      <p>ご予約ありがとうございます。予約が完了しました！</p>
      <p style="margin-bottom: 90px;"><a href="index-after.php">TOPへ</a></p>
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
