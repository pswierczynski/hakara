<?php require("modules/head.php"); ?>

<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:80px;">


<?php

mysqli_set_charset($conn, "utf8");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

function ShowForm($conn, $komunikat=""){
    $user_id = intval($_SESSION['id']);
    $edycja = "SELECT * FROM `users` WHERE user_id = $user_id";
    $wykonaj = mysqli_query($conn, $edycja);
    while($dane = mysqli_fetch_array($wykonaj)) {
        echo "<form action='notatnik.php' method='POST'>
        <textarea name='notatnik' class='textarea2'>".htmlspecialchars($dane['notatnik'])."</textarea><br>
        <input type='submit' class='button3' style='float:left' value='Wyślij'>
        <input type='submit' class='button3' style='float:right' value='Zapisz'>
        <div style='float:right; padding-right:5px; padding-top:6px; color:#ff0000'>".$komunikat."</div>
        <input type='hidden' value='1' name='send' class='button3'>
        </form>";
    }
}
?>



<?php
if (isset($_POST["send"]) && $_POST["send"] == 1) {
    $notatnik = mysqli_real_escape_string($conn, $_POST['notatnik']);
    $user_id = intval($_SESSION['id']);
    mysqli_query($conn, "UPDATE users SET notatnik = '$notatnik' WHERE user_id = '$user_id'");
    ShowForm($conn, "zapisano");
} else {
    ShowForm($conn);
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