<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
<h1>Belajar PHP</h1>
<h2>Form Input</h2>
<form action="#" method="post">
    <labe>Nama : </label>
    <input type="text" name="nama"><br>
    <labe>Tanggal Lahir : </label>
    <input type="date" name="age" />
    <br>
    <label>Pekerjaan : </label>
    <select name="Pekerjaan">
        <option value=""></option>
        <option value="Progammer">Progammer</option>
        <option value="Desainer">Desainer</option>
    </select>
    <input type="submit" name="submit" value="Kirim" />
</form><br>
<?php
echo "Hallo nama saya " .$_POST['nama'];

if(isset($_POST['age'])){
    $dob = $_POST['age'];
calculate_age($dob);
$year = calculate_Year($dob);
}
function calculate_age($birthday)
{
    $today = new DateTime();
    $diff = $today->diff(new DateTime($birthday));
    return printf(' umur %d tahun', $diff->y);
}
function calculate_Year($birthday)
{
    $today = new DateTime();
    $diff = $today->diff(new DateTime($birthday));
    return  $diff->y;
}

if(isset($_POST['submit'])){
    $selected_val = $_POST['Pekerjaan'];
    if($selected_val == "Progammer"){
        echo " pekerjaan saya " .$selected_val ." Gaji saya Rp. 7.000.000,-";
    }else{
        echo " pekerjaan saya " .$selected_val ." Gaji saya Rp. 5.000.000,-";}}
 ?>
</body>
</html>