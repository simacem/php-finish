<?php
require( 'koneksi.php' );
 
if( !isset( $_POST['id_getway'] ) )
{
 header('location:lihatdata.php');
 exit();
}
 
$id_getway  = $_POST['id_getway'];
$id_paring = $_POST['id_paring'];
$jenis =$_POST['jenis'];
$count = count($id_getway);
 
$sql   = "INSERT INTO th(id_getway,id_paring,jenis,status) VALUES ";
 
for( $i=0; $i < $count; $i++ )
{
 $sql .= "('{$id_getway[$i]}','{$id_paring[$i]}','{$jenis[$i]}',1)";
 $sql .= ",";
}
 
$sql = rtrim($sql,",");
 
$insert = $koneksi->query($sql);
 
if($insert)
    {
    include("lihatdata.php");
    }

else
    {
    echo "Gagal update ... ";
    echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
    }
?>
