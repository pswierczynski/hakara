<?php require("modules/head.php"); ?>

<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:80px; text-align:left">

<?php
$sql = 'SELECT * FROM `katalog`; ';
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

if($_SESSION["zalogowany"]==1){


function ShowForm($komunikat=""){
$edycja = 'SELECT * FROM `users` WHERE user_id = '.$_SESSION['id'].'';
$wykonaj = mysqli_query($conn, $edycja);
while($dane = mysqli_fetch_array($wykonaj)) {

echo '<form action="profil.php" method="POST">';
echo '<div class="frame-rozdzial"><div class="rozdzial" style="height:16px; padding-left:4px">Dane użytkownika</div>';
echo '<div class="frame-box"><div class="tekst" style="width:771px; color:#ababab"><div style="width:200px; font-weight:bold; float:left">id</div> '.$dane['user_id'].'</div></div>';
echo '<div class="frame-box"><div class="tekst" style="width:771px; color:#ababab"><div style="width:200px; font-weight:bold; float:left">status</div> '.$dane['poziom'].'</div></div>';
echo '<div class="frame-box"><div class="tekst" style="width:771px; color:#ababab"><div style="width:200px; font-weight:bold; float:left">login</div> '.$dane['user_login'].'</div></div></div>';

echo '<div style="margin-top:10px; padding:3px; padding-left:6px; color:#686868; font-size:x-small">dane poniżej możesz edytować</div>';
echo '<div class="frame-rozdzial">';
echo '<div class="frame-box"><div class="tekst" style="width:771px"><div style="width:200px; font-weight:bold; float:left">nazwa</div><input type=text name=nazwa class="input-komentarz" style="margin-bottom:-2px; padding:0px; height:16px; border:0px; width:570px" value = "'.$dane['nazwa'].'"></div></div>';
echo '<div class="frame-box"><div class="tekst" style="width:771px"><div style="width:200px; font-weight:bold; float:left">hasło</div><input type=text name=haslo class="input-komentarz" style="margin-bottom:-2px; padding:0px; height:16px; border:0px; width:570px" value = "'.$dane['user_haslo'].'"></div></div>';
echo '<div class="frame-box"><div class="tekst" style="width:771px"><div style="width:200px; font-weight:bold; float:left">e-mail</div><input type=text name=email class="input-komentarz" style="margin-bottom:-2px; padding:0px; height:16px; border:0px; width:570px" value = "'.$dane['email'].'"></div></div>';
echo '<div class="frame-box"><div class="tekst" style="width:771px"><div style="width:200px; font-weight:bold; float:left">opis</div><input type=text name=opis class="input-komentarz" style="margin-bottom:-2px; padding:0px; height:16px; border:0px; width:570px" value = "'.htmlspecialchars($dane['opis']).'"></div></div></div>';
echo '<input type="submit" class="button3" style="float:right" value="zapisz"><div style="float:right; padding-right:5px; padding-top:6px; color:#ff0000">'.$komunikat.'</div>';
echo '<input type=hidden value="1" name=send class="button3"></form>';
}
}
}
?>

<?php
if($_POST["send"]==1){
	if(!empty($_POST["nazwa"]) && !empty($_POST["haslo"]) && !empty($_POST["email"]) && !empty($_POST["opis"])){
			mysqli_query($conn, "UPDATE users SET nazwa = '".$_POST['nazwa']."', user_haslo = '".$_POST['haslo']."', email = '".$_POST['email']."', opis = '".$_POST['opis']."' WHERE user_id = '".$_SESSION['id']."'"); 
			$_SESSION['nazwa'] = $_POST['nazwa'];
			echo ShowForm("dane zmieniono");
			}
	else ShowForm("uzupełnij pola");
}
else ShowForm();
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