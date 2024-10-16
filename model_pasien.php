<?php
function koneksi()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "briant";

    return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}

function getTabelpasien()
{
    $link = koneksi();
    $query = "SELECT * FROM pasien";
    $result = mysqli_query($link, $query);

    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}
?>