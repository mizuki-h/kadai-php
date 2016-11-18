<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP最終課題</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
  <script type="text/javascript" src="js/mootools.js"></script>
  <script type="text/javascript" src="js/calendar.js"></script>
  <link rel="stylesheet" type="text/css" href="css/iframe.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/calendar.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/dashboard.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/i-heart-ny.css" media="screen" />
  <script type="text/javascript">
  //<![CDATA[
    window.addEvent('domready', function() {
      myCal3 = new Calendar({ date: 'd/m/Y' }, { classes: ['i-heart-ny'], direction: 1, tweak: {x: 3, y: 0} });
    });
  //]]>
  </script>
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
    <?php
       error_reporting(E_ALL & ~E_NOTICE)
       ?>
       <?php
          $b[0]=$_POST['name01'];
          $b[1]=$_POST['stylist-name01'];
          $b[2]=$_POST['date01'];
          $b[3]=$_POST['time01'];
          $b[4]=$_POST['requist01'];
        ?>
     <main class="main-contact">
     <h2>フォーム</h2>
     <form method="post" action="confirmation.php" class="contact">
        <table>
          <tbody>
            <tr>
              <th><label for="name">name</label></th>
              <?php
              echo '<td><input type="text" name="name" id="name" size="50" placeholder="name" value='.htmlspecialchars($b[0]).'></td>';
              ?>
            </tr>
            <tr>
              <th><label for="stylist-name">stylist name</label></th>
              <?php
              echo '<td><input type="text" name="stylist-name" id="stylist-name" size="50" placeholder="いない場合は無記入" value='.htmlspecialchars($b[1]).'></td>';
              ?>
           </tr>
           <tr>
              <th><label for="date">date</label></th>
              <?php
              echo '<td><input type="text" name="date" id="date" size="50" placeholder="####/##/##" value='.htmlspecialchars($b[2]).'></td>';
              ?>
           </tr>
           <tr>
              <th><label for="time">time</label></th>
              <?php
              echo '<td><input type="time" name="time" id="date" size="50" placeholder="00:00" value='.htmlspecialchars($b[3]).'></td>';
              ?>
           </tr>

           <tr>
              <th><label for="request">request</label></th>
              <?php
              echo '<td><input type="text" name="requist" id="request" size="50" placeholder="髪型や悩みなど" value='.htmlspecialchars($b[4]).'></td>';
              ?>
           </tr>
           <tr>
              <th></th>
              <td class="button-login"><input type="submit" value="予約"></td>
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
