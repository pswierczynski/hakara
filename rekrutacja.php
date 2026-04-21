<?php require("modules/head.php"); ?>

<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:40px;">



<div style="margin-bottom:20px;">

Aby wziąć udział w projekcie należy dokładnie zapoznać się z ogólnymi <a href="zasady.php" class="blue">zasadami</a> oraz wymaganami przedstawionymi poniżej. Każda praca niespełniająca warunków nie będzie brana pod uwagę i usuwana. Tekst rekrutacyjny
należy dodać poprzez moduł umiejscowiony poniżej. Decyzja o kandydaturze zostanie podjęta przez organizatorów w przeciągu 7 dni.

</div>


<div style="font-weight:bold; margin-bottom:20px;">Wymagania</div>

<div style="margin-bottom:20px;">
Aby móc uczestniczyc w projekcie „Hakara” należy wysłać do organizatorów własny tekst. Praca ma na celu określenie literackich zdolności kandydata, umiejętność prowadzenia fabuły oraz wczucie się w atmosferę. Ilość miejsc dla chcących wziąć udział w projekcie jest ograniczona, dla tych dla których miejsc nie starczy przewidziane są miejsca autorów epizodycznych. 
</div>
<div style="margin-bottom:20px;">
Praca musi spełniać następujące warunki: 
<ul type="square">
<li><strong>temat pracy:</strong> "Dzień w nowym świecie".</li>
<li>tekst posiadać ma od 400 do 600 słów. Ważna jest jakość a nie ilość.</li>
<li>akcja tekstu umiejscowiona ma być w niedalekiej przyszłości więc realia mają nie odbiegać znacznie od dzisiejszych.</li>
<li>praca powinna być napisana łatwym w odbiorze językiem w formie opowiadania.</li>
<li>prosze dbać o przejrzystość pracy ponieważ dodanego tekstu nie można samodzielnie zmienić lub usunąć.</li>
</ul>
</div>

<p>Jeśli nie chcesz aby twoja praca była opublikowana wyślij ją na adres: <a href="mailto:hakara.kontakt@gmail.com" class="blue">hakara.kontakt@gmail.com</a></p>
<p>O więcej informacji proszę pytać na <a href="http://www.hakara.fora.pl" class="blue"> forum</a> lub pod numerem gadu-gadu: 3164888</p>


<?php
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

$sql1 = "SELECT * FROM `rekrutacja` ORDER BY id";
$wykonaj1 = mysqli_query($conn, $sql1);

echo '<a href="rekrutacja-dodaj.php"><div class="button-long">dodaj tekst rekrutacyjny</div></a>';
echo '<div style="background-color:#eaeaea; padding-top:20px;">';
echo '<div class="rozdzial" style="height:16px; padding-left:3px">Teksty rekrutacyjne</div>';

while($wiersz1 = mysqli_fetch_assoc($wykonaj1)) {

echo '<div class="frame-box"><div class="tekst" style="width:771px;">
<div style="width:240px; float:left;">
<a href="strona-rekrutacja.php?id='.$wiersz1['id'].'" class="blue">'.$wiersz1['tytul'].'</a></div>
<div style="width:250px; float:left;">'.$wiersz1['kontakt'].'</div></a>
<div style="width:40px; float:left;">'.$wiersz1['ocena'].'</div>
<div style="width:130px; float:left; text-align:center">'.$wiersz1['status'].'</div>
<div style="width:110px; float:left; text-align:center; color: #686868; font-size:x-small; padding-top:3px;">'.$wiersz1['date'].'</div>

</div></div>';
}

echo '<br>';

mysqli_close($conn);
?>

</div>
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
