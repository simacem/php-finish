    <html>
    <head>
     <title>form</title>
    </head>
    <body>
<?php
for($i=1; $i<=7; $i++){

?>
     <form method="post" action="insert.php">
    
<form action="insert.php" method="POST">
<table border='1' width='35%' cellpadding='2'  cellspacing='2' align='center' bgcolor="#FFFFF">
<tr><td><b>id_getway</b></td><td><input type="text" placeholder="id_getway" name="id_getway[]" size="30" maxlength="50"/>
</td></tr>
<tr><td><b>id_paring</b></td><td><input type="text" placeholder="id_paring" name="id_paring[]" size="30" maxlength="50"/>
</td></tr>
<tr><td><b>Jenis</b></td><td>
<select name="jenis[]">
<option value="Pilih jenis">--Pilih jenis--</option>
<option value="TH">TH</option>
<option value="KWH">KWH</option>
</select>
</td></tr>
<?php
}
if($i>0)
?>
<tr><td></td><td><input type="submit" name="kirim" value="Kirim"/>
  <label>
  <input type="reset" name="Reset" id="button" value="Batal">
  </label></td></tr>
</table>
<p align="center"><a href="lihatdata.php"><strong>Lihat Data </strong></a></p>
</form>
</body>
</html>

