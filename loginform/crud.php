<?php 
	session_start();
	$database = mysqli_connect('localhost', 'root', '', 'volvo_ocean_race');

	// initialize variables
	$team_navn = "";
	$points = "";
	$id = 0;
	$update = false;


if (isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($database, "SELECT * FROM ranking WHERE team_id=$id");

    if ($record->num_rows == 1)
    {
        $n = mysqli_fetch_array($record);
        $team_navn = $n['team_navn'];
        $points = $n['points'];
    }
}

	if (isset($_POST['save'])) {
		$team_navn = $_POST['team_navn'];
		$points = $_POST['points'];
		mysqli_query($database, "INSERT INTO ranking (team_navn, points) VALUES ('$team_navn', '$points')");
		$_SESSION['message'] = "Data saved"; 
		header('location: dashboard.php');
	}

if (isset($_POST['update'])) {
	$team_id = $_POST['team_id'];
	$team_navn = $_POST['team_navn'];
	$points = $_POST['points'];
	mysqli_query($database, "UPDATE ranking SET team_navn='$team_navn', points='$points' WHERE team_id=$team_id");
	$_SESSION['message'] = "Data updated!"; 
	header('location: dashboard.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($database, "DELETE FROM ranking WHERE team_id=$id");
	$_SESSION['message'] = "Data deleted!"; 
	header('location: dashboard.php');
}

if (isset($_POST['close'])) { 
	header('location: dashboard.php');
}

?>