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
    <main class="main-login_c">
     <h2>会員情報確認画面</h2>
     <?php
       check();
       function check(){
           $a[0]=$_POST['name2'];
           $a[1]=$_POST['email'];
           $a[2]=$_POST['tel1'];
           $a[3]=$_POST['password'];

        echo '<div  class="contact">';
        echo '<table>';
        echo '<tbody>';
            echo '<tr>';
              echo '<th><label for="name">name</label></th>';
              echo '<td>'.htmlspecialchars($a[0]) .'</td>';
           echo '</tr>';
           echo '<tr>';
              echo '<th><label for="email">email</label></th>';
              echo '<td>'.htmlspecialchars($a[1]) .'</td>';
            echo '</tr>';
            echo '<tr>';
               echo '<th><label for="tel1">tel</label></th>';
               echo '<td>'.htmlspecialchars($a[2]) .'</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th><label for="email">password</label></th>';
              echo '<td>'.htmlspecialchars($a[3]) .'</td>';
            echo '</tr>';
            echo '<tr>';
               echo'<th></th>';
               echo '<td class="button-login">';
                echo '<form method="post" action="registration.php">';
                echo '<input type="hidden" name="name01" value='.$a[0].'>';
                echo '<input type="hidden" name="email01" value='.$a[1].'>';
                echo '<input type="hidden" name="tel01" value='.$a[2].'>';
                echo '<input type="hidden" name="pass01" value='.$a[3].'>';
              echo '<input type="submit" value="登録" style="margin-left:50px;">';
                echo '</form>';
              echo '</td>';
            echo '</tr>';
           echo '</tbody>';
         echo '</table>';
         echo '</div>';

        echo '<form method="post" action="login.php" class="contact">';
        echo '<input type="hidden" name="name01" value='.$a[0].'>';
        echo '<input type="hidden" name="email01" value='.$a[1].'>';
        echo '<input type="hidden" name="tel01" value='.$a[2].'>';
        echo '<input type="hidden" name="pass01" value='.$a[3].'>';
        echo '<table>';
        echo '<tbody>';
            echo '<tr>';
               echo'<th></th>';
               echo '<td class="button-login"><input type="submit" value="修正" style="margin-left: 250px; margin-top: -185px;"></td>';
            echo '</tr>';
           echo '</tbody>';
         echo '</table>';
       echo '</form>';

    }
      ?>
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
