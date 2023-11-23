<html>

<head>
  <title>php練習</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <style>
    td {
      width: 100;
      height: 100;
    }
  </style>
</head>

<body>
  <?php
  // 7或9整除
  // for ($i = 1; $i <= 200; $i++) {
  // 	if ($i % 7 == 0 && $i % 9 == 0) {
  // 		echo "{$i}<br>";
  // 	}
  // }


  // 九九乘法表
  // for ($i = 1; $i <= 9; $i++) {
  // 	for ($j = 1; $j <= 10; $j++) {
  // 		// echo "{$i}x{$j}=" . $i * $j;
  // 		echo sprintf("%dx%d=%d&nbsp", $i, $j, $i * $j);
  // 		if ($i * $j < 10) {
  // 			echo "&nbsp&nbsp&nbsp&nbsp";
  // 		} else {
  // 			echo "&nbsp&nbsp";
  // 		}
  // 	}
  // 	echo "<br>";
  // }


  // do...while迴圈
  // $cnt = 0;
  // do {
  // 	$i = rand(0, 10);
  // 	$cnt = $cnt + $i;
  // 	echo "中{$i}元，累積{$cnt}<br>";
  // } while ($i != 0)



  // while迴圈
  // $i=1;
  // while($i!=0){
  // 	$i=rand(0,10);
  // 	$cnt=$cnt+$i;
  // 	echo "中{$i}元，累積{$cnt}<br>";
  // }

  // 陣列
  // $color = array('red', 'yellow', 'blue', 'green', 'pink');
  // echo "<body bgcolor='{$color[rand(0,4)]}'></body>";

  // $rand_keys = array_rand($color, 1);
  // echo $rand_keys;
  // echo "<body bgcolor='{$color[$rand_keys]}'></body>"

  // session

  // session_start();
  // $_SESSION['cnt']+=1;
  // echo "歡迎你第{$_SESSION['cnt']}次造訪";
  // echo gettype($_SESSION['cnt'])
  // session_destroy();

  // form表單

  $name = $_POST['name'];
  $sex = $_POST['sex'];
  $birthday = $_POST['birthday'];
  $interest = $_POST['interest'];
  ?>
  <table border=1 align=center>
    <tr>
      <td><?php
          if ($sex == "男") {
            echo "<img src='male.jpg'>";
          } elseif ($sex == "女") {
            echo "<img src='female.jpg'>";
          } else {
            echo "<img src='' alt='性別未輸入'>";
          }
          ?></td>

      <td>姓名:<br><?php
                  echo $name;
                  ?></td>
    </tr>
    <tr>
      <td>生日:<br><?php
                  echo $birthday;
                  ?></td>
      <td>興趣:<br><?php
                  foreach ($interest as $i) {
                    echo "$i<br>";
                  }
                  ?></td>
    </tr>
  </table>
</body>

</html>