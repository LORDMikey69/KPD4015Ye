<html>
<title> PHP-Timbangan </title>

<body>
<form action = "timbangan.php" method = "post"> <!--kesalahan panggil fail-->
	Masukkan berat anda <input type ="TEXT" name ="nilai" value ="0" /> <!--kesalahan pada "nilai"-->
<input type="submit" name="submit" value="Hasil"/>

<?PHP
if (isset($_GET['submit'])) {
if ($_POST['nilai'] >= 80) //Kesalahan
{
	$result = "Anda Berat";
}
	ELSE
{
	$result = "Berat Anda Adalah Normal";
}

}
?>			<!--Kesalahan pada penutup-->

Mesej Untuk Anda :
<?PHP
ECHO "$result";
?>

</body>
</html>