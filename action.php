<?php
mysql_connect("localhost","root","root") or die("Maaf Koneksi Gagal!");
mysql_select_db("paring")or die ("Database Tidak Ditemukan!");



$action = strtolower($_POST['action']);
$id = $_REQUEST['id'];

if ($action == "delete")
{
echo "Anda memilih aksi delete pada record $id... <br/>";
$delete = "delete from th where id_no = '$id'";
$delete_query = mysql_query($delete);
if ($delete_query) echo "Record $id berhasil dihapus!<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
else echo "Gagal menghapus record<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
}

else 
{
$select = "select * from th where id_no = '$id'";
$select_query = mysql_query($select);

while($select_result = mysql_fetch_array($select_query))
    {
        $id = $select_result['id_no'] ;
        $id_getway = $select_result['id_getway'] ;
        $id_paring = $select_result['id_paring'] ;
        $Jenis = $select_result['jenis'] ;

?>

<form action="update.php" method="POST">
<table border='1' width='35%' cellpadding='2'  cellspacing='2' align='center' bgcolor="#FFFFF">
<caption>
<h2>data paring</h2>
</caption>
<input type="hidden" name="id_no" size="30" value="<?php echo $id ; ?>" maxlength="50"/>
<tr><td>Id_getway</td><td><input type="text" name="id_getway" value="<?php echo $id_getway ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Id_paring</td><td><input type="text" name="id_paring" value="<?php echo $id_paring ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td><b>Jenis</b></td><td>
<select name="jenis">
<option value="Pilih jenis">--Pilih jenis--</option>
<option value="TH">TH</option>
<option value="KWH">KWH</option>
</select>

<tr><td></td><td><input type="submit" name="kirim" value="Update!"/></td></tr>
</table>
</form>

<?php
    }
}
?>

