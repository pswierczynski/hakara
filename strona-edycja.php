<?php require("modules/head.php"); ?>

<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:80px;">


<?php
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

$sql = 'SELECT * FROM `tekst` WHERE id = '.$_GET['id'].'';
$wykonaj = mysqli_query($conn, $sql);

$id = $_GET['id'];

while($wiersz = mysqli_fetch_array($wykonaj)) {

echo "<form action=\"wpis3.php?id=".$_GET['id']."\" method=\"POST\">

<input type=\"text\" name=\"tytul\" class=\"input-komentarz\" value = '".$wiersz['tytul']."'  />

<input type='hidden' name='tresc_id' value = '".$_GET['id']."'  />

<textarea name=\"tekst\" class='textarea2'>".$wiersz['tekst']."</textarea><br>

<input type=\"submit\" class='button3' style='float:left' value=\"Wyslij\">
<a href='teksty.php'><div class='button3' style='float:left; cursor:pointer; margin-left:3px; padding-top:4px; height:16px'>powrót</div></a>
</form>";

}

?>

</div> 

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