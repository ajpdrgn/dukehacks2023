<?php
	$link=mysqli_connect("localhost", "root", "", "HackDuke 2023");
	
	if($link === false){
	    die("ERROR: Could not connect." . mysqli_connect_error());
	}
	
	// Escape user inputs for security
	$IncidentReportTitle = $_POST['IncidentReportTitle'];
	$Name = $_POST['Name'];
	$Location = $_POST['Location'];
	$Description = $_POST['Description'];
	
	// attempt insert query executino
	$sql = "INSERT INTO Incident Report(IncidentReportTitle, Name, Location, Description) VALUES ('IncidentReportTitle', 'Name', 'Location', 'Description')";
	if(mysqli_query($link, $sql)){
	    echo "Report Added Succesfully.";
	} else {
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	
	mysqli_close($link);
	?>