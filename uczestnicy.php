<?php require("modules/head.php"); ?>

<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:80px;">

<div class="frame-rozdzial" style="margin-bottom:60px">
<div class="rozdzial" style="height:16px; padding-left:4px">Uczestnicy</div>

<?php
$sql = 'SELECT * FROM `katalog`; ';
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

$wynik = mysqli_query($conn, "select * from users ORDER BY user_id");
while($dane = mysqli_fetch_assoc($wynik)){

echo '<div class="frame-box">';
echo '<div class="tekst" style="width:771px">';
echo '<div style="width:14px; height:14px; float:left;">'.$dane['status'].'</div>';
echo '<div style="width:186px; float:left;">'.$dane['nazwa'].'</div>';
echo '<div style="width:470px; float:left;">'.$dane['opis'].'</div>';
echo '<div style="width:100px;  float:left; text-align:center;">'.$dane['poziom'].'</div></div></div>';
}


if($_SESSION["zalogowany"]==1 && $_SESSION["poziom"]==admin ){
echo "<a href='rejestracja.php'><div class='button3' style='cursor:pointer; padding-top:4px; height:16px; float:left'>rejestracja</div></a>";
}
echo '</div>';
?>

<?php include("modules/foot.php"); ?>

</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36535807-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>