<?php require("modules/head.php"); ?>

<div style="text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:20px;">

<div class="head-box">
Czym jest Hakara?
</div>
<div style="margin-bottom:20px; background-color:#eaeaea; padding:10px;">
<strong>Projekt Hakara</strong> to interaktywne opowiadanie, które wspólnymi siłami tworzyć będzie grupa utalentowanych pisarzy amatorów.
Aby wziąć udział w projekcie należy zapoznać się z <a href="zasady.php" class="blue"> zasadami</a> oraz złożyć przykładową prace w dziale <a href="rekrutacja.php" class="blue"> rekrutacja</a> gdzie nasi administratorzy ocenią umiejętnośći pisarskie kandydata.
</div>

<div class="head-box">
informacje/nowości
</div>

<div style="height:102px; background-color:#eaeaea; padding:2px; margin-bottom:20px;">

<div style="float:left; width:257px;">
<div class="info">
<?php 
$zapytanie = mysqli_query($conn, "SELECT * FROM katalog");
$ilosc_wierszy = mysqli_num_rows($zapytanie);
echo $ilosc_wierszy;
?>
</div>
<div class="info-text">rozdziałów</div>
<div class="info">
<?php 
$zapytanie = mysqli_query($conn, "SELECT * FROM tekst");
$ilosc_wierszy = mysqli_num_rows($zapytanie);
echo $ilosc_wierszy;
?>
</div>
<div class="info-text">tekstów</div>
<div class="info">
<?php 
$zapytanie = mysqli_query($conn, "SELECT * FROM kom");
$ilosc_wierszy = mysqli_num_rows($zapytanie);
echo $ilosc_wierszy;
?>
</div>
<div class="info-text">komentarzy</div>
<div class="info">
<?php 
$q = mysqli_query($conn, "SELECT SUM(wyswietlen) AS razem FROM tekst");
$a = mysqli_fetch_assoc($q);
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
co nowego w ogłoszeniach
</div>

<div style="margin-bottom:40px; background-color:#eaeaea; padding:10px;">
<div id="test1">
<p><div style="color:#36a5eb; display:inline;">[10/11/2012] </div> <div style="font-weight:bold; display:inline;">Nowy, odświeżony wygląd strony.</div></p>
<p><div style="color:#36a5eb; display:inline;">[09/11/2008] </div> Obecnie dostępnych jest 20 tekstów w 5 rozdziałach.</p>
<p><div style="color:#36a5eb; display:inline;">[20/03/2008] </div> Pojawiły się trzy nowe prace w dziale "teksty".</p>
<p><div style="color:#36a5eb; display:inline;">[26/08/2007] </div> Zaszły zmiany w organizacji dotyczące rekrutacji.</p>
<p><div style="color:#36a5eb; display:inline;">[16/05/2007] </div> Obecnie dostępnych jest 10 tekstów w 3 rozdziałach.</p>
<p><div style="color:#36a5eb; display:inline;">[02/02/2006] </div> Po długiej przerwie wracamy.</p>
<p><div style="color:#36a5eb; display:inline;">[15/09/2007] </div> Pojawiły się dwie pierwsze prace w dziale "teksty".</p>
<p><div style="color:#36a5eb; display:inline;">[04/09/2006] </div> Do tej pory otrzymaliśmy dużo zróżnicowanych prac.</p>
<p><div style="color:#36a5eb; display:inline;">[05/08/2006] </div> Projekt Hakara został rozpoczęty.</p>
</div>
</div>

<?php include("modules/foot.php"); ?>

</div>

<script type="text/javascript">
		  $(function(){
			  $('#test1').slimScroll({
				  height: '84px',
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