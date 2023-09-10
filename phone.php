<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" sizes="32X32" href="">
		<title>EmerSAFE</title>
	</head>
	<body>
		<section>
			<form action="action.php" method="post">
				<div class="reportDiv">
					<label for="IncidentReportTitle">Incident Report Title</label><br>
					<input type="text" id="IncidentReportTitle" name="IncidentReportTitle" required><br>
					<label for="Name">Name</label><br>
					<input type="text" id="Name" name="Name" required><br>
					<label for="Location">Location</label><br>
					<input type="text" id="Location" name="Location" required><br>
					<label for="Description">Description</label><br>
					<input type="text" id="Description" name="Description" required><br>
				</div>
				<center>
					<input type="submit" value="submit">
				</center>
			</form>
		</section>
	</body>
	<script></script>
</html>