<?php

include_once '../config/connection.php';
// Getting all the tournament required fields

$email = $_POST['email'];
$teamName = $_POST['teamName'];
$leaderFBURL = $_POST['leaderFBURL'];
$leaderUID = $_POST['leaderUID'];
$playerTwoUID = $_POST['playerTwoUID'] ?? '';
$playerThreeUID = $_POST['playerThreeUID'] ?? '';
$playerFourUID = $_POST['playerFourUID'] ?? '';
$playerFiveUID = $_POST['playerFiveUID'] ?? '';
$tournamentType =  $_POST['solo'] ?? $_POST['duo'] ?? $_POST['squad'];

try {
    $sql = "
INSERT INTO `dairymilk` (`id`, `email`, `teamName`, `leaderFBURL`, `leaderUID`, `playerTwoUID`, 
`playerThreeUID`, `playerFourUID`, `playerFiveUID`, `tournamentType`) VALUES (NULL, '$email',
 '$teamName', '$leaderFBURL', '$leaderUID', '$playerTwoUID', '$playerThreeUID', '$playerFourUID', '$playerFiveUID', 
 '$tournamentType');
";

$result = mysqli_query($conn, $sql);

if ($result) {
    // Send mail
    
    header("Location: http://localhost/free-fire-tournament/payment/");
    exit();
}



} catch (Exception $error) {
    echo $error.message();
}



