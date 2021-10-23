<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Phát sinh mảng và tính toán </title>
</head>
<?php
function tao_mang($n)
{
for($i=0;$i<$n;$i++)
$mang[$i] = rand(0,20);
return $mang;
}

function xuat_mang($mang)
{
$n = count($mang);
$chuoi = "";
for($i=0;$i<$n;$i++)
$chuoi = $chuoi . $mang[$i] . ",";
return $chuoi;
}

function tinh_tong($mang)
{
$n = count($mang);
$tongm = 0;
for($i=0;$i<$n;$i++)
$tongm = $tongm + $mang[$i];
return $tongm;
}

function tim_max($mang)
{
$n = count($mang);
$max = $mang[0];
for($i=0;$i<$n;$i++)
{
if($max < $mang[$i])
$max = $mang[$i];
}
return $max;
}

function tim_min($mang)
{
$n = count($mang);
$min = $mang[0];
for($i=0;$i<$n;$i++)
{
if($min > $mang[$i])
$min = $mang[$i];
}
return $min;
}
if(isset($_POST["n"]))
{
$n = $_POST["n"];
$mang = tao_mang($n);
$mangkq = xuat_mang($mang);
$tongm = tinh_tong($mang);
$max = tim_max($mang);
$min = tim_min($mang);
}
?>
<body>
<form action="index1.php" method="POST">
<table width="530" border="0" align="center" bgcolor="">
<tr bgcolor="#CC99CC"><td align="center" colspan="2"> <font color="#FFFFFF"><b>PHÁT SINH MẢNG VÀ TÍNH TOÁN</b></font></td></tr>
<tr >
<td>Nhập số phần tử:</td>
<td><input name="n" type="text" value="<?php echo $_POST["n"]; ?>"/></td>
</tr>
<tr >
<td align="center" colspan="2"><input type="submit" value="Phát sinh và tính toán" style=""/></td>
</tr>
<tr>
<td>Mảng: </td>
<td><input name="mangkq" type="text" value="<?php echo $mangkq; ?>" size="40" style="" /></td>
</tr>
<tr>
<td>GTLN(Max)trong mảng: </td>
<td><input type="text" name="max" value="<?php echo $max; ?>" style="" /></td>
</tr>
<tr>
<td>GTNN(Min)trong mảng: </td>
<td><input type="text" name="min" value="<?php echo $min; ?>" style="" /></td>
</tr>
<tr>
<td>Tổng mảng: </td>
<td><input type="text" name="tongm" value="<?php echo $tongm; ?>" style="" /></td>
</tr>
<tr>
<td colspan=”2″ align=”center”>(Ghi chú: Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)</td>
</tr>
</table>
</form>
</body>
</html>