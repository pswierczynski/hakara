<?php require("modules/head.php"); ?>

<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:380px; margin-top:40px; padding-top:3px; margin-bottom:80px;">


<?php
$sql = 'SELECT * FROM `katalog`; ';
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

if($_SESSION["zalogowany"]==1 && $_SESSION["poziom"]==admin ){
function ShowForm($komunikat=""){	//funkcja wyświetlająca formularz rejestracyjny
	echo "<form action='rejestracja.php' method=post>";
	echo "<div style='width:50px; float:left; padding-top:3px'>login</div><input type=text name=login class='input-komentarz' style='width:309px'><br>";
	echo "<div style='width:50px; float:left; padding-top:3px'>hasło</div><input type=text name=haslo class='input-komentarz' style='width:309px'><br>";
	echo "<div style='width:50px; float:left; padding-top:3px'>e-mail</div><input type=text name=email class='input-komentarz' style='width:309px'><br><br>";
	echo "<div style='width:50px; float:left; padding-top:3px'>nazwa</div><input type=text name=nazwa class='input-komentarz' style='width:309px'><br>";
	echo "<div style='width:50px; float:left; padding-top:3px'>opis</div><textarea name=opis class='textarea' style='width:307px; height:50px; resize: none;'></textarea><br>";
	echo "<input type=hidden value='1' name=send class='button3'>";
	echo "<div style='width:50px; height:16px; float:left; padding-top:3px'></div><input type=submit value='zarejestruj' class='button3' style='float:left'>
	<a href='uczestnicy.php'><div class='button3' style='cursor:pointer; padding-top:4px; height:16px; margin-left:3px; margin-top:4px; float:left'>powrót</div></a>";
	echo "<div style='padding-left:10px; padding-top:6px; float:left; color:#ff0000'>".$komunikat."</div>";
	echo "</form>";
}
?>

<?php
$status = '<img src="images/green.png">';
$poziom = user;
if($_POST["send"]==1){
	if(!empty($_POST["login"]) && !empty($_POST["haslo"]) && !empty($_POST["nazwa"]) && !empty($_POST["email"]) && !empty($_POST["opis"])){
		if(mysqli_num_rows(mysqli_query($conn, "select * from users where user_login='".htmlspecialchars($_POST["login"]."'")))) { echo ShowForm("użytkownik istnieje").'<META HTTP-EQUIV="Refresh" Content="1">'; }
		else {
			mysqli_query($conn, "insert into users values(NULL, '".htmlspecialchars($_POST["login"])."', '".htmlspecialchars($_POST["haslo"])."', '".$status."', '".htmlspecialchars($_POST["nazwa"])."', '".htmlspecialchars($_POST["email"])."', '".htmlspecialchars($_POST["opis"])."', '".$poziom."') "); 
			echo ShowForm("dodano użytkownika");
			}
	} else ShowForm("uzupełnij pola");
}
else ShowForm();
}
?>

</div> 

<?php include("modules/foot.php"); ?>

</div> 

<script type="text/javascript">

function zliczaj_znaki()
{
    if(document.ksiega.komentarz.value.length<501)
   {
       a=document.ksiega.komentarz.value.length;
       b=500;
       c=b-a;
       document.ksiega.znak.value=c;
    }
    else
    {
       alert('Przekroczono dozwoloną ilość znaków !');
    }
	
}</script>


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