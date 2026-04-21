<?php require("modules/head.php"); ?>

<div style="text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:40px;">


<?php
// --- Pomięto fragment połączenia z bazą danych ---

mysqli_set_charset($conn, "utf8");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

mysqli_query($conn, 'UPDATE `tekst` SET `wyswietlen` = wyswietlen + 1 WHERE id = "' . $_GET['id'] . '"');

$sql = 'SELECT * FROM `tekst` WHERE id = ' . $_GET['id'];
$wykonaj = mysqli_query($conn, $sql);
while ($wiersz = mysqli_fetch_array($wykonaj)) {
    echo "<div style=\"font-weight:bold; margin-bottom:40px\">" . $wiersz['tytul'] . " </div><div style=\"margin-bottom:40px\">" . nl2br($wiersz['tekst']) . "</div>";
}

function ShowForm($komunikat = "") {
    echo '<form action="strona-teksty.php?id=' . $_GET['id'] . '" method="POST">';
    echo '<input type="text" name="pole2" class="input-komentarz" style="display:none" value="hakara"><br>';

    if ($_SESSION["zalogowany"] == 0) {
        echo '<input type="text" name="imie" class="input-komentarz" value="pseudonim" onfocus="clearArea2(this)" onblur="resetArea2(this)"><br>';
    }
    echo '<textarea name="tresc" class="textarea" onfocus="clearArea(this)" onblur="resetArea(this)">komentarz</textarea>';
    echo '<div style="float:right; padding-right:5px; padding-top:6px; color:#ff0000">' . $komunikat . '</div><input type="submit" value="Wyslij" class="button3"><br>';
    echo '<input type=hidden value="1" name=send></form><br>';
}
?>

<?php
if ($_SESSION["zalogowany"] == 1) {
    $imie = $_SESSION['nazwa'];
    if ($_POST["send"] == 1) {
        if ($_POST["tresc"] == komentarz) {
            echo ShowForm("uzupełnij pola");
        } else {
            mysqli_query($conn, "INSERT INTO kom VALUES (0, '" . $imie . "', '" . $_POST['tresc'] . "', '" . $_GET['id'] . "')");
            echo ShowForm("komentarz dodano");
        }
    } else ShowForm();
}

if ($_SESSION["zalogowany"] == 0) {
    if ($_POST["send"] == 1) {
        if ($_POST["imie"] == pseudonim && $_POST["tresc"] == komentarz) {
            echo ShowForm("uzupełnij pola");
        } else {
            if (!empty($_POST["imie"]) && !empty($_POST["tresc"])) {
                mysqli_query($conn, "INSERT INTO kom VALUES (0, '" . $_POST["imie"] . "', '" . $_POST['tresc'] . "', '" . $_GET['id'] . "')");
                echo ShowForm("komentarz dodano");
            } else ShowForm("uzupełnij pola");
        }
    } else ShowForm();
}
?>

<?php
$sql1 = 'SELECT * FROM `kom` WHERE tek = ' . $_GET['id'] . ' ORDER BY id';
$wykonaj1 = mysqli_query($conn, $sql1);
while ($wiersz1 = mysqli_fetch_array($wykonaj1)) {
    echo "<div class=box-pseudonim  />" . "<b>" . $wiersz1['imie'] . "</b></div><div class=box-komentarz />" . $wiersz1['tresc'] . "</div>";
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

<script type='text/javascript'>
  var first_time = true;
  function clearArea(textarea)
  {
    if(!first_time)
      return;
    textarea.value = "";
    first_time = false;
  }
  function resetArea(textarea)
  {
    if(textarea.value == "")
    {
      first_time = true;
      textarea.value = "komentarz";
    }
  }
</script>

<script type='text/javascript'>
  var first_time = true;
  function clearArea2(textarea)
  {
    if(!first_time)
      return;
    textarea.value = "";
    first_time = false;
  }
  function resetArea2(textarea)
  {
    if(textarea.value == "")
    {
      first_time = true;
      textarea.value = "pseudonim";
    }
  }
</script>

</body>
</html>