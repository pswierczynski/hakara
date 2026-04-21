<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
?>

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

<?php
$host = 'localhost';      // lub inny adres serwera bazy danych
$dbname = 'przemeks_hakara';   // nazwa twojej bazy danych
$username = 'przemeks_hakara'; // nazwa użytkownika bazy danych
$password = 'Przemek123!';      // hasło użytkownika

// Tworzenie połączenia
$conn = new mysqli($host, $username, $password, $dbname);
$conn->set_charset("utf8");

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>

</head>
<body>
<?php include("modules/icons.php"); ?>

<div>


<div class="logo"><a href="."><img src="images/top.jpg"></a></div>


<div style="height:44px; text-align:left; width:783px; margin-top:10px; padding-bottom:2px; padding-top:2px; margin-bottom:0px; background-color:#eaeaea;">

<div class="menu-ramka">
<a href="teksty.php"><div class="box-small">teksty</div></a>
<a href="uczestnicy.php"><div class="box-small">uczestnicy</div></a>
<a href="rekrutacja.php"><div class="box-small">rekrutacja</div></a>
<a href="zasady.php"><div class="box-small">zasady</div></a>
<a href="fabula.php"><div class="box-small">fabuła</div></a>
<a href="inne.php"><div class="box-small">inne</div></a>
<a href="kontakt.php"><div class="box-small">kontakt</div></a>
<a href="http://www.hakara.fora.pl/" target="_blank"><div class="box-small">forum</div></a>
</div>
<a href="."><div class="box-small-home"></div></a>
</div>

<div style=" width:783px; height:35px;">
<div class="menu-login" style="width:404px;">

<?php
if (empty($_SESSION["zalogowany"])) $_SESSION["zalogowany"] = 0;

function ShowLogin($komunikat = "") {
    echo "$komunikat";
    echo "<form action='' method='post'>";
    echo "<input type='text' name='login' class='input2'>";
    echo "<input type='password' name='haslo' class='input2' style='margin-left:3px;'>";
    echo "<input type='submit' value='ZALOGUJ' class='button2'>";
    echo "</form>";
}
?>

<?php
if (isset($_GET["wyloguj"]) && $_GET["wyloguj"] == "tak") {
    $_SESSION["zalogowany"] = 0;
    session_destroy();
}

if ($_SESSION["zalogowany"] != 1) {
    if (!empty($_POST["login"]) && !empty($_POST["haslo"])) {
        $login = htmlspecialchars($_POST["login"]);
        $haslo = htmlspecialchars($_POST["haslo"]);

        $stmt = $conn->prepare("SELECT * FROM users WHERE user_login = ? AND user_haslo = ?");
        $stmt->bind_param("ss", $login, $haslo);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $dane = $result->fetch_assoc();
            $_SESSION['poziom'] = $dane['poziom'];
            $_SESSION['id'] = $dane['user_id'];
            $_SESSION['nazwa'] = $dane['nazwa'];
            $_SESSION["zalogowany"] = 1;

            echo "<div style='padding-top:3px'><a href='profil.php' class='dodaj'><b>" . htmlspecialchars($_SESSION['nazwa']) . "</b></a> (" . htmlspecialchars($_SESSION['poziom']) . ") / <a href='index.php?wyloguj=tak' class='dodaj'> wyloguj</a></div>";
        } else {
            ShowLogin("<div style='color:red;'>Nieprawidłowy login lub hasło</div>");
        }

        $stmt->close();
    } else {
        ShowLogin();
    }
} else {
    echo "<div style='padding-top:3px'><a href='profil.php' class='dodaj'><b>" . htmlspecialchars($_SESSION['nazwa']) . "</b></a> (" . htmlspecialchars($_SESSION['poziom']) . ") / <a href='index.php?wyloguj=tak' class='dodaj'> wyloguj</a></div>";
}
?>
</div>
</div>
