<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Silevestre Dongmo">
	<meta name="Description" content="COVID-19 impact estimation">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COVID-19 ESTIMATOR</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: 'Baloo Tammudu 2', 'Eras Medium ITC', 'Century Gothic', 'Comic sans MS', cursive;
			word-spacing: 2px;
			color: black;
		}
		.container{
			width: 40%;
			margin: auto;
			margin-bottom: 200px;
		}
		@media screen and (max-width: 720px){
			.container{
				width: 98%;
			}
			.form-button{
				width: 98%;
			}
		}
		.page-header{
			text-align: center !important;
			padding: 10px 20px;
			margin-bottom: 2px;
			border:solid 1px rgba(10, 200, 20, 0.5);;
			background-color: rgba(10, 200, 20, 0.4);
		}
		.column: {
			border: solid .1px; 
			position: relative;
			width: 49%;
			display: inline-block;
		}
		form label{
			text-align: left;
			font-size: 18px;
			padding: 2px 2px;
		}
		.form-input{
			display: block;
			background-color: rgba(50,10,10,.01);
			border: solid .5px rgba(10, 200, 20, 0.5);
			padding: 7px;
			font-size: 18px;
			width: 98%;
			border-radius: 5px; 
			color: rgba(10, 200, 20, 0.7);
			margin-bottom: 10px;
		}
		.form-input:focus{
			box-shadow: 1px 1px 1px 1px rgba(10, 200, 20, 1);
			background-color: white;
			color: black;
			transition: 1s;
			border: solid .5px rgba(10, 200, 20, 0.5);
		}
		.title{
			padding: 0px;
			margin: 0px;
		}
		.header-desc{
			margin: 0px;
			padding: 0px;
			text-decoration: underline;
			letter-spacing: 1px;
		}
		.form-button{
			padding: 10px;
			border-radius: 10px;
			font-size: 18px;
			width: 250px;
			background-color: rgba(10,200,20,.5);
			text-align: center;
			border: solid 1px rgba(10,200,20,.5);
		}
		.comment{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h3 class="title">COVID-19 ESTIMATOR</h3>
			<p class="header-desc">A simple estimator for COVID-19</p>
		</div>
		<div class="wrap-content">
			<h4 class="comment">Please fill the following fields</h4>
			<form method="post" action="estimations.php" name="cve" class="form">
				<div class="first-column column">
					<label for="region">Region name</label>
					<input type="text" name="region" id="region" class="form-input" required>
					<label for="avgAge">Average Age</label>
					<input type="number" name="avgAge" id="avgAge" class="form-input" required step="0.01">
					<label for="avgDailyIncomeInUSD">Average Daily Income In USD</label>
					<input type="number" name="avgDailyIncomeInUSD" id="avgDailyIncomeInUSD" class="form-input" required step="0.01">
					<label for="avgDailyIncomePopulation">Average Daily Income Population</label>
					<input type="number" name="avgDailyIncomePopulation" id="avgDailyIncomePopulation" class="form-input" required step="0.01">
				</div>
				<div class="second-column column">
					<legend></legend>
					<label for="periodType">Period Type</label>
					<select name="periodType" id="periodType" class="form-input" required data-period-type>
						<option value="">Choose</option>
						<option value="days">Days</option>
						<option value="weeks">Weeks</option>
						<option value="months">Months</option>
					</select>
					<label for="timeToElapse">Time To Elapse</label>
					<input type="number" name="timeToElapse" id="timeToElapse" class="form-input" required data-time-to-elapse>
					<label for="reportedCases">Reported Cases</label>
					<input type="number" name="reportedCases" id="reportedCases" class="form-input" required data-reported-cases>
					<label for="population">Population</label>
					<input type="number" name="population" id="population" class="form-input" required data-population>
					<label for="totalHospitalBeds">Total Hospital Beds</label>
					<input type="number" name="totalHospitalBeds" id="totalHospitalBeds" class="form-input" required data-total-hospital-beds>
				</div><br>
				<center><button type="submit" class="form-button" name="estimate" data-go-estimate>Estimate Now</button></center>
			</form>
		</div>
	</div>
</body>
</html>