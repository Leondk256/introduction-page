<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "portfolio_leon";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

function getAllCursussus($conn)
{
    $sql = "SELECT * FROM cursus";
    $result = mysqli_query($conn, $sql);

    // Fetch all
    $allCursusses = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $allCursusses;
}
