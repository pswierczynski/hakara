<?php require("modules/head.php"); ?>

<div style="text-align:center; width:783px; margin-top:10px; padding-top:120px; margin-bottom:20px; height:200px;">

<?php
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

$ocena = brak;
$status = oczekuje;
$date = date("d-m-Y H:i:s");

$sql = "INSERT INTO rekrutacja VALUES('".$_GET['id']."', '".$_POST['tytul']."', '".$_POST['tekst']."', '".$_POST['kontakt']."', '".$ocena."', '".$status."', '".$date."');";
$wykonaj = mysqli_query($conn, $sql);

if($wykonaj){
echo '<META HTTP-EQUIV="Refresh" Content="3; URL=rekrutacja.php"><b>tekst rekrutacyjny dodano pomyślnie</b><p>za 3 sekundy nastąpi przekierowanie lub <a href="rekrutacja.php" class="blue">kliknij by przyśpieszyć.</a></p>';
} else {
echo '<META HTTP-EQUIV="Refresh" Content="3; URL=rekrutacja.php"><b>niestety nie udało się dodać - spróbuj ponownie</b><p>za 3 sekundy nastąpi przekierowanie lub <a href="rekrutacja.php" class="blue">klikij by przyśpieszyć.</a></p>';
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