<?php
if($_GET["wyloguj"]=="tak"){$_SESSION["zalogowany"]=0;}
if($_SESSION["zalogowany"]==1){
echo '<div style="position: fixed; text-align:right; width:100%; display:block; bottom:0px; z-index:2;
                  border-top-style: solid; border-width:0px; border-color:#d0d0d0;">
<div style="margin-bottom:10px; margin-right:20px; padding-top:10px">
<a href="profil.php" style="border-bottom: 0px; margin-top:5px;"><img src="images/profile.png"" title="panel"></a>
<a href="notatnik.php" style="border-bottom: 0px; margin-top:5px;"><img src="images/note.png"" title="notatnik"></a>
<a href="#" style="border-bottom: 0px; margin-top:5px;"><img src="images/msg.png"" title="wiadomości"></a>
</div></div>';
}
?>