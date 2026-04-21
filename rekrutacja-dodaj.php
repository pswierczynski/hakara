<?php require("modules/head.php"); ?>

<div style="border-style: solid; border-width:0px; border-color:#d9d9d9; text-align:left; width:783px; margin-top:10px; padding-top:3px; margin-bottom:80px;">



<form action="rekrutacja-wpis.php?id=<?php echo $_GET['id']; ?>" method="POST">
<input type='text' name='tytul' value='pseudonim' style='' class="input-komentarz" onBlur="if(this.value=='') this.value='pseudonim'" onFocus="if(this.value=='pseudonim') this.value=''"><br>
<input type='text' name='kontakt' value='adres e-mail' style='' class="input-komentarz" onBlur="if(this.value=='') this.value='adres e-mail'" onFocus="if(this.value=='adres e-mail') this.value=''"><br>
<textarea name="tekst" class="textarea2" onfocus="clearArea(this)" onblur="resetArea(this)">
tekst dodawaj ostrożnie ponieważ nie można samodzielnie edytować wpisów</textarea>
<br>
<input type="submit" class="button3" value="Wyślij">
</form>

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
      textarea.value = "tekst dodawaj ostrożnie ponieważ nie można samodzielnie edytować wpisów";
    }
  }
</script>

</body>
</html>