<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>プロジェクト学習演習05(作成者：曽)</title>
    <link rel="stylesheet" type="text/css" href="enshu05.css">

</head>

<body>

    <?php
  $ja_yobi = array("日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日");
  //日本語曜日の配列を作成。$ja_yobi[0]が"日曜日"など

  $en_to_ja_yobi = array("Sunday"=>"日曜日", "Monday"=>"月曜日", "Tuesday"=>"火曜日", 
  		       "Wednesday"=>"水曜日", "Thursday"=>"木曜日", "Friday"=>"金曜日", 
  		       "Saturday"=>"土曜日");
  //英語曜日を添字として日本語曜日への連想配列を作成。$en_to_ja_yobi["Sunday"]が"日曜日"など

  $today = getdate();
  //時間を取得する

  $y = $today['year'];      //西暦年
  $m = $today['mon'];       //月
  $d = $today['mday'];      //日
  $h = $today['hours'];     //時
  $min = $today['minutes']; //分
  $sec = $today['seconds']; //秒
  $wday = $today['wday'];   //数字の曜日、0：日曜日 1：月曜日
  $weekday = $today['weekday'];   //英語の曜日、"Sunday","Monday"
  $month = $today['month'];   //英語の月、"January"
  //連想配列から日付と時刻を取り出す

  print "<h1>現在は$y 年$m 月$d 日$h 時$min 分$sec 秒</h1>";
  print "<h1>数字の曜日：$wday 英語の曜日：$weekday 英語の月：$month</h1>";
  print "<h1>日本語の曜日(配列)：<span class=\"blue\">$ja_yobi[$wday]</span></h1>";
  //$wdayを添字にし、配列$ja_yobiの要素を出力
  print "<h1>日本語の曜日(連想配列)：<span class=\"blue\">$en_to_ja_yobi[$weekday]</span></h1>";
  //$weekdayを添字にし、連想配列$en_to_ja_yobiの要素を出力

  ?>

    <h3>for文を使って日本語曜日配列を出力し、今日の曜日だけ文字色を黄色にする</h3>
    <table border="2">
        <?php
  print "<tr>";
  for($i=0; $i<count($ja_yobi); $i++){
    print "<td>$i</td>";
  }
  print "</tr>\n";

  print "<tr>";
  for($i=0; $i<count($ja_yobi); $i++){
    if($i == $wday){
      print "<td class=\"gold\">$ja_yobi[$i]</td>";
    }else{
      print "<td>$ja_yobi[$i]</td>";
    }
  }
  print "</tr>\n";
  ?>
    </table>
    <br />

    <h3>foreach文を使って、英語と日本語曜日連想配列を出力し、今日の曜日だけ文字色を黄色にする</h3>
    <table border="2">

        <?php
  foreach($en_to_ja_yobi as $en => $ja){
    print "<tr>";
    if($en == $weekday){
      print "<td class=\"gold\">$en</td><td class=\"gold\">$ja</td>";
   }else{
   print "<td>$en</td><td>$ja</td>";
}
print "</tr>\n";
}
?>

    </table>
</body>

</html>
