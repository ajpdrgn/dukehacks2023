<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial scale=1">
		<style></style>
	</head>
	<body>
		<?php
			/*Attempt MySQL server connection. Running server with default setting (user 'root' with no password)*/
			$link = mysqli_connect("localhost", "root", "", "HackDuke 2023");
			
			//Check the connection
			if($link === false){
			    die("ERROR: Could not connect." . mysqli_connect_error());
			}
			
			//attempt select query execution
			$sql = "SELECT * FROM Incident Report";
			if($result = mysqli_query($link, $sql)){
			    if(mysqli_num_rows($result)>0){
			        echo "<table>";
			            echo "<tr>";
			                echo"<th>IncidentReportTitle</th>";
			                echo"<th>Name</th>";
			                echo"<th>Location</th>";
			                echo"<th>Description</th>";
			            echo "</tr>"
			        while($row = mysqli_fetch_array($result)){
			            echo "<tr>";
			                echo "<td>" . $row["IncidentReportTitle"] . "</td>";
			                echo "<td>" . $row["Name"] . "</td>";
			                echo "<td>" . $row["Location"] . "</td>";
			                echo "<td>" . $row["Description"] . "</td>";
			            echo "</tr>"
			        }
			        echo "</table>";
			        //Free result set
			        mysqli_free_result($result);
			    }
			    else{
			        echo "No records matching your query were found.";
			    }
			}
			else {
			    echo "ERROR: Could not able to execute $sqli. " . mysqli_error($link);
			}
			
			//Close connection
			mysqli_close($link);
			?>
	</body>
</html>