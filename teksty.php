<?php require("modules/head.php"); ?>

<?php

mysqli_set_charset($conn, "utf8");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");

if ($_SESSION["zalogowany"] == 0) {
    echo '<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:20px;">';
    $sql = 'SELECT * FROM `katalog`';
    $wykonaj = mysqli_query($conn, $sql);
    while ($wiersz = mysqli_fetch_assoc($wykonaj)) {
        echo '<div class="frame-rozdzial"><div class="rozdzial" style="height:16px; padding-left:4px;"><div style="float:left">' . $wiersz['nazwa'] . '</div></div>';
        $sql1 = "SELECT * FROM `tekst` WHERE kat = '" . $wiersz['id'] . "' ORDER BY id";
        $wykonaj1 = mysqli_query($conn, $sql1);
        while ($wiersz1 = mysqli_fetch_assoc($wykonaj1)) {
            $query = "SELECT id FROM kom WHERE tek = '" . $wiersz1['id'] . "'";
            $sql3 = mysqli_num_rows(mysqli_query($conn, $query));
            echo '<div class="frame-box"><div class="tekst"><a href="strona-teksty.php?id=' . $wiersz1['id'] . '" class="blue">' . $wiersz1['tytul'] . ' </a></div>
	            <div class="odwiedziny">' . $wiersz1['wyswietlen'] . '</div>
	            <div class="komentarz">' . $sql3 . '</div></div>';
        }
        echo '</div><br>';
    }
    mysqli_close($conn);
}


if ($_SESSION["zalogowany"] == 1 && $_SESSION["poziom"] == "admin") {
    echo '<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:40px;">';
    $sql = 'SELECT * FROM `katalog`';
    $wykonaj = mysqli_query($conn, $sql);
    while ($wiersz = mysqli_fetch_assoc($wykonaj)) {
        echo '<div class="frame-rozdzial" style="padding-bottom:30px;"><div class="rozdzial" style="padding-left:4px">' . $wiersz['nazwa'] . '</div>';
        $sql1 = "SELECT * FROM `tekst` WHERE kat = '" . $wiersz['id'] . "' ORDER BY id";
        $wykonaj1 = mysqli_query($conn, $sql1);
        while ($wiersz1 = mysqli_fetch_assoc($wykonaj1)) {
            echo '<div class="frame-box"><div class="tekst"><a href="strona-teksty.php?id=' . $wiersz1['id'] . '" class="blue">' . $wiersz1['tytul'] . ' </a></div>
                  <div class="odwiedziny" style="width:32px; height:16px;"><a href="strona-edycja.php?id=' . $wiersz1['id'] . '" title="edytuj"><img src="images/edit.jpg"></a></div>
                  <div class="komentarz" style="width:28px; height:16px;"><img src="images/delete.jpg"></div></div>';
        }
        echo '<a href="wpis.php?id=' . $wiersz['id'] . '" class="dodaj"><div style="padding-top:6px; width:130px; float:left; padding-left:8px; display:inline; cursor:pointer;">
        <div style="padding-top:3px; padding-right:4px; float:left;"><img src="images/add.png"></div> nowe opowiadanie</div></a></div><br>';
    }
    mysqli_close($conn);
    echo '<a href="dodaj.php" class="dodaj"><div style="margin-top:-6px; padding:8px; float:left; width:100px; background-color:#eaeaea; display:block; font-size:small; cursor:pointer;">
    <div style="padding-top:3px; padding-right:4px; float:left;"><img src="images/add.png"></div> nowy rozdział</div></a>
    <input type="text" name="imie" class="input-komentarz">
    </div>';
}


if ($_SESSION["zalogowany"] == 1 && $_SESSION["poziom"] == "user") {
    echo '<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:20px;">';
    $sql = 'SELECT * FROM `katalog`';
    $wykonaj = mysqli_query($conn, $sql);
    while ($wiersz = mysqli_fetch_assoc($wykonaj)) {
        echo '<div class="frame-rozdzial" style="padding-bottom:30px;"><div class="rozdzial" style="padding-left:4px">' . $wiersz['nazwa'] . '</div>';
        $sql1 = "SELECT * FROM `tekst` WHERE kat = '" . $wiersz['id'] . "' ORDER BY id";
        $wykonaj1 = mysqli_query($conn, $sql1);
        while ($wiersz1 = mysqli_fetch_assoc($wykonaj1)) {
            $query = "SELECT id FROM kom WHERE tek = '" . $wiersz1['id'] . "'";
            $sql3 = mysqli_num_rows(mysqli_query($conn, $query));
            echo '<div class="frame-box"><div class="tekst"><a href="strona-teksty.php?id=' . $wiersz1['id'] . '" class="blue">' . $wiersz1['tytul'] . ' </a></div>
	            <div class="odwiedziny">' . $wiersz1['wyswietlen'] . '</div>
	            <div class="komentarz">' . $sql3 . '</div></div>';
        }
        echo '<a href="wpis.php?id=' . $wiersz['id'] . '" class="dodaj"><div style="padding-top:6px; width:130px; float:left; padding-left:8px; display:inline; cursor:pointer;">
        <div style="padding-top:3px; padding-right:4px; float:left;"><img src="images/add.png"></div> nowe opowiadanie</div></a></div><br>';
    }
    mysqli_close($conn);
}
?>

<?php include("modules/foot.php"); ?>