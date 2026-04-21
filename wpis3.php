<?php require("modules/head.php"); ?>

<div style="text-align:center; width:783px; margin-top:10px; padding-top:120px; margin-bottom:20px; height:200px;">

<?php
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

$id = $_POST['tresc_id'];
$tekst = addslashes($_POST['tekst']);
$tytul = $_POST['tytul'];
$sql = "UPDATE tekst SET tytul = '$tytul', tekst = '$tekst' WHERE id = '$id'";

if(empty($tekst)) {
mysqli_close($conn);
echo '<META HTTP-EQUIV="Refresh" Content="3; URL=teksty.php"><b>nie można kasować tekstów w ten sposób</b><p>za 3 sekundy nastąpi przekierowanie lub <a href="teksty.php" class="blue">kliknij by przyśpieszyć.</a></p>';

} else {


$wykonaj3 = mysqli_query($conn, $sql);

if($wykonaj3){
echo '<META HTTP-EQUIV="Refresh" Content="3; URL=teksty.php"><b>tekst zmieniono pomyślnie</b><p>za 3 sekundy nastąpi przekierowanie lub <a href="teksty.php" class="blue">kliknij by przyśpieszyć.</a></p>';
} else {
echo '<META HTTP-EQUIV="Refresh" Content="3; URL=teksty.php"><b>nie udało się zmienić tekstu</b><p>za 3 sekundy nastąpi przekierowanie lub <a href="teksty.php" class="blue">klikij by przyśpieszyć.</a></p>';
}
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