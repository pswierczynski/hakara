<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<!-- XT:1BMn0rYAeZZLPnfsfg9xqqGOFjFGmzpFR1LWZGU6ovLrAtvQ2GC4C3LqhYyBTZCy -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>hakara - interaktywne opowiadanie</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.js"></script>
<script type="text/javascript" src="js/slimScroll.min.js"></script>

<?php $conn = mysql_connect("mysql.60free.ovh.org","hakara","przemek123");
mysql_select_db("hakara"); 

?>

</head>
<body>
<div>


<div class="logo"><a href="."><img src="images/top.jpg"></a></div>


<div style="height:44px; text-align:left; width:783px; margin-top:10px; padding-bottom:2px; padding-top:2px; margin-bottom:0px; background-color:#eaeaea;">

<div class="menu-ramka">
<a href="teksty.php"><div class="box-small">teksty</div></a>
<a href="uczestnicy.php"><div class="box-small">uczestnicy</div></a>
<a href="rekrutacja.php"><div class="box-small">rekrutacja</div></a>
<a href="zasady.php"><div class="box-small">zasady</div></a>
<a href="fabula.php"><div class="box-small">fabuła</div></a>
<a href="http://www.hakara.fora.pl/" target="_blank"><div class="box-small">forum</div></a>
<a href="inne.php"><div class="box-small">inne</div></a>
<a href="kontakt.php"><div class="box-small">kontakt</div></a>
</div>
<a href="."><div class="box-small-home"></div></a>
</div>

<div style=" width:783px; height:35px;">
<div class="menu-login">

<?php

$pole1 = trim($_POST['pole1']);  


if(empty($pole1) and empty($pole2)) { 


echo '<form action="" method="POST">
<form action="" method="post">
<input type="password" name="pole1" class="input2">
<input type="submit" value="ZALOGUJ" class="button2">
</form>'; 
} 

else {
     
 
$haslo = $pole1;
$kod = hakaraadministrator;

if($haslo == $kod){
 
echo '<div style="padding-top:3px; width:252px;">logowanie powiodło się!</div><META HTTP-EQUIV="Refresh" Content="3; URL=panel2.php">';    

} else {
echo '<div style="padding-top:3px; width:252px;">hasło nieprawidłowe!</div><META HTTP-EQUIV="Refresh" Content="3; URL=javascript:history.go(-1)">';

}
} 

?>

</div>
</div>

<div style="text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:20px;">

<div class="head-box">
informacje/nowości
</div>

<div style="height:102px; background-color:#eaeaea; padding:2px; margin-bottom:20px;">

<div style="float:left; width:257px;">
<div class="info">
<?php 
$zapytanie = mysql_query("SELECT * FROM katalog");
$ilosc_wierszy = mysql_num_rows($zapytanie);
echo $ilosc_wierszy;
?>
</div>
<div class="info-text">rozdziałów</div>
<div class="info">
<?php 
$zapytanie = mysql_query("SELECT * FROM tekst");
$ilosc_wierszy = mysql_num_rows($zapytanie);
echo $ilosc_wierszy;
?>
</div>
<div class="info-text">tekstów</div>
<div class="info">
<?php 
$zapytanie = mysql_query("SELECT * FROM kom");
$ilosc_wierszy = mysql_num_rows($zapytanie);
echo $ilosc_wierszy;
?>
</div>
<div class="info-text">komentarzy</div>
<div class="info">
<?php 
$q = mysql_query("SELECT SUM(wyswietlen) AS razem FROM tekst");
$a = mysql_fetch_array($q, MYSQL_ASSOC);
echo $a['razem'];
?>
</div>
<div class="info-text">odczytań</div>
</div>


<div style="float:left; margin-left:2px; width:257px;">
<div class="info-grey">6</div>
<div class="info-text-grey">uczestników ogółem</div>
<div class="info-grey">3</div>
<div class="info-text-grey">aktywnych uczestników</div>
<div class="info-grey">2</div>
<div class="info-text-grey">organizatorów</div>
<div class="info-grey">14</div>
<div class="info-text-grey">dostępnych miejsc</div>
</div>

<div style="float:left; margin-left:2px;">
<div class="nowy-tekst">P.J Goose - "Wskazówki się kręcą"</div>
<div class="nowy-tekst">Brian Calman - "Spotkanie"</div>
<div class="nowy-tekst">Kimu Mishima - "Herbata"</div>
<div class="nowy-tekst">Brian Calman - "Chwila radości"</div>
</div>

</div>

<div class="head-box">
Czym jest Hakara?
</div>
<div style="margin-bottom:20px; background-color:#eaeaea; padding:10px;">
<strong>Projekt Hakara</strong> to interaktywne opowiadanie, które wspólnymi siłami tworzyć będzie grupa utalentowanych pisarzy amatorów.
Aby wziąć udział w projekcie należy zapoznać się z <a href="zasady.php" class="blue"> zasadami</a> oraz złożyć przykładową prace w dziale <a href="rekrutacja.php" class="blue"> rekrutacja</a> gdzie nasi administratorzy ocenią umiejętnośći pisarskie kandydata.
</div>

<div class="head-box">
co nowego w ogłoszeniach
</div>

<div style="margin-bottom:40px; background-color:#eaeaea; padding:10px;">
<div id="test1">
<p><div style="color:#36a5eb; display:inline;">[10/11/2012] </div> <div style="font-weight:bold; display:inline;">po długiej przerwie wracamy w nowej odsłonie</div></p>
<p><div style="color:#36a5eb; display:inline;">[09/11/2012] </div> obecnie dostępnych jest 20 tekstów w 5 rozdziałach</p>
<p><div style="color:#36a5eb; display:inline;">[20/03/2008] </div> pojawiły się trzy nowe prace w dziale "teksty"</p>
<p><div style="color:#36a5eb; display:inline;">[26/08/2007] </div> zawszy zmiany w organizacji dotyczące rekrutacji</p>
<p><div style="color:#36a5eb; display:inline;">[16/05/2007] </div> obecnie dostępnych jest 10 tekstów w 3 rozdziałach</p>
<p><div style="color:#36a5eb; display:inline;">[02/02/2006] </div> po długiej przerwie wracamy do życia</p>
<p><div style="color:#36a5eb; display:inline;">[15/09/2007] </div> pojawiły się dwie pierwsze prace w dziale "tekty"</p>
<p><div style="color:#36a5eb; display:inline;">[04/09/2006] </div> do tej pory otrzymaliśmy sporo zróżnicowanych prac</p>
<p><div style="color:#36a5eb; display:inline;">[05/08/2006] </div> projekt Hakara został rozpoczęty</p>
</div>
</div>



<div class="menu2">
<div style="float:left">
© 2006. HAKARA. All rights reserved
</div>
<a href="teksty.php" class="small">Teksty</a>
 - <a href="uczestnicy.php" class="small">Uczestnicy</a>
 - <a href="rekrutacja.php" class="small">Rekrutacja</a>
 - <a href="zasady.php" class="small">Zasady</a>
 - <a href="fabula.php" class="small">Fabuła</a>
 - <a href="http://www.hakara.fora.pl/" target="_blank" class="small">Forum</a>
 - <a href="inne.php" class="small">Inne</a>
 - <a href="kontakt.php" class="small">Kontakt</a>
 - <a href="." class="small">Home</a>
</div>

<div class="foot">
Każdy element interfejsu HAKARA oraz treści zawarte na stronie podlegają prawom autorskim. Hakara to rodzaj interaktywnego opowiadania prowadzonego wspólnie przez uczestników projektu od sierpnia 2006 roku. 
Kandydaci, którzy którzy zostali przyjęci do projektu automatycznie zostają jego współautorami. Stronę w całości opracował i wykonał <a href="mailto:przemyslaw.swierczynski@o2.pl" class="blue"> 
przemslaw.swierczynski@o2.pl</a>
</div>

</div>

<script type="text/javascript">
		  $(function(){
			  $('#test1').slimScroll({
				  height: '86px',
                                  width: '770px',
				  alwaysVisible: true,
				  start: 'top',
				  wheelStep: 10
			  })

			  $('#scrollDown').click(function(){
				  $('#testrailalwaysvisible').slimScroll({ scroll: '50px' });
			  });
			  $('#scrollUp').click(function(){
				  $('#testrailalwaysvisible').slimScroll({ scroll: '-50px' });
			  });

			  $('#noinitialcontent').slimScroll({ 
				  width: '300px',
				  alwaysVisible: true
			  });
			  $('#notlongenough').slimScroll({ width:'400px', height:'300px' });
			  
		  });
</script>

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