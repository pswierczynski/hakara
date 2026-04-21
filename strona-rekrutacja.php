<?php require("modules/head.php"); ?>

<div style="text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:20px;">


<?php
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");


$sql = 'SELECT * FROM `rekrutacja` WHERE id = '.$_GET['id'].'';
$wykonaj = mysqli_query($conn, $sql);
while($wiersz = mysqli_fetch_array($wykonaj)) {
echo "<div style=\"margin-bottom:40px\">autor: <b>".$wiersz['tytul']."</b><br>
kontakt: <a href=\"mailto: ".$wiersz['kontakt']."\" class=\"blue\">".$wiersz['kontakt']."</a>
<div style=\"font-size:x-small; padding-top:4px;\">".$wiersz['date']."</div></div>
<div style=\"margin-bottom:40px\">". nl2br($wiersz['tekst'])."</div>";
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