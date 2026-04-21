<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<STYLE TYPE="text/css"> 
<!-- 
A { color: black; text-decoration : none } 
A:visited { color: black; } 
A:hover { color: #666666; text-decoration : none } 
--> 
</STYLE> 
<title>HAKARA gra fabularna</title>
</head> 
<body bgcolor="#E4E4E4">
<font face=Sans-serif>
<div align="center">
  <center>
<table border="0" width="730" height="100%" valign="top">
    <tr>
      <td width="20%" height="100%" valign="top"></td>
      <td width="730" height="100%" bgcolor="#4B565A" valign="top">
        <table border="1" width="100%" height="622" bordercolor="#000000" valign="top">
          <tr>
            <td  colspan="2" valign="top"><img src="obraz.jpg"></td>
          </tr>
          <tr>
            <td width="20%" height="100%" valign="top" bgcolor="#7C8F96">
            <br>
            <br>
            <table border="0" width="100%" valign="top">
              <tr>
              <td width="100%" valign="top">&#160;<a href="strona.php">Ogoszenia</a></td>
              </tr>                  
              <tr>
                <td width="100%" valign="top">&#160;<a href=http://www.hakara.fora.pl>Forum</a></td>
              </tr>
              <tr>
                <td width="100%" valign="top">&#160;<a href="zasady.htm">Zasady</a></td>
              </tr>
              <tr>
                <td width="100%" valign="top">&#160;<a href="rekrutacja.htm">Rekrutacja</a></td>
              </tr>
              <tr>
                <td width="100%" valign="top">&#160;<a href="fabula.htm">Fabua</a></td>
              </tr>
            </table>
            <br>
              <table border="0" width="100%" valign="top">
              <tr>
                <td width="100%"><a href="gracze.html">&#160;Bohaterowie</a></td>
              </tr>
              <tr>
                <td width="100%">&#160;<a href="teksty.php">Teksty</a></td>
              </tr>
              <tr>
                <td width="100%">&#160;<a href="inne.htm">Inne</a></td>
              </tr>
            </table>
            &#160;
            <p>&#160;</p>
            <p>&#160;</p>
            <p>
            <br>
            </p>
            <hr color="#000000" size="1">
            &#160;
            </td>
            <td height="484" width="100%">
            </font>
            <table cellpadding="10" cellspacing="0" height="786" width="100%" bordercolor="#7C8F96" border="1">
            <tr>
            <td width="80%" height="100%" bgcolor="#A6B0B2" valign="top">
            <br>
            <br>
            <SPAN class=gensmall style="LINE-HEIGHT: 120%"><FONT face=Sans-serif color=black size=2>
<?php
$host = 'localhost';      // lub inny adres serwera bazy danych
$dbname = 'przemeks_hakara';   // nazwa twojej bazy danych
$username = 'przemeks_hakara'; // nazwa użytkownika bazy danych
$password = 'Przemek123!';      // hasło użytkownika

// Tworzenie połączenia
$conn = new mysqli($host, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>

<body>
<?php
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET collation_connection = 'utf8_polish_ci'");
$sql = "INSERT INTO katalog VALUES('', '".$_POST['kat']."');";
$wykonaj = mysqli_query($conn, $sql);

if($wykonaj){
echo '<center><table border="1" width="55%" height="17%" bordercolor="#4B565A" cellspacing="0" cellpadding="0"><tr><td bgcolor="#7C8F96" align="center"><a href="panel.php">Kategorie dodano pomylnie.</a><br><font size=1>Kliknij aby wrci.</td></tr></table></center>';
} else {
echo '<center><table border="1" width="55%" height="17%" bordercolor="#4B565A" cellspacing="0" cellpadding="0"><tr><td bgcolor="#7C8F96" align="center">Nie udao si doda.</tr></tr></table></cetner>';
}
?>
</body>
</html>

            </font>
            </span>
            <br>
            <br>
            <br>
            <br>
            </td>
            </tr>
            </table>      
          </tr>
        </table>
      <td width="20%" height="95%" valign="top">&#160;
        <p>&#160;</td>
    </tr>
  </table>
  </center>
</div>
</font>
<center>
<table width="886">
<tr>
<td align="center">
<p><font face="Verdana" size="1">Copyright &#169; 2006 Hakara</font></p>
</td>
</tr>
</table>
</center>