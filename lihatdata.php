<?php
mysql_connect("localhost","root","root") or die("Maaf Koneksi Gagal!");
mysql_select_db("paring")or die ("Database Tidak Ditemukan!");


$select = "select * FROM th ";
$select_query = mysql_query($select);
?>


<html>
<head>
<title>Lihat Data</title>
</head>
<body>

<table style="font-size:11px;font-family:'arial';text-align:center;" border='1' width="80%" align='center' >
<caption><h1>Data paring</h1></caption>
<tr><th>id_getway</th><th>id_paring</th><th>Jenis</th><th>status</th>
</tr>

<?php

while($select_result = mysql_fetch_array($select_query))
{

$id= $select_result[0];
$id_getway= $select_result[1];
$id_paring = $select_result[2];
$Jenis = $select_result[3] ;
$status = $select_result[4] ;


echo "<tr><td>$id_getway</td><td>$id_paring</td><td>$Jenis</td><td>$status</td>
<td>
<form method=\"POST\" action=\"action.php?id=$id\"><input type=\"hidden\" value=\"$id\" name=\"id_no\">
<input type=\"submit\" name=\"action\" value=\"Update\"><br />
<input type=\"submit\" name=\"action\" value=\"Delete\">
</form>

</td>
</tr>";
}

?>

</table>
<center>
  <p>
    <input type="button" value="Input Data" onClick="window.location.href='form.php'">
  </p>


</center></p>
</body>
</html>
