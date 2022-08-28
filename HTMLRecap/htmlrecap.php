<!DOCTYPE html>
<html>
<head>
<link href="html.css" rel="stylesheet" type="text/css" />
	<meta charset="utf-8">
	<title>HTML Recap</title>
</head>
<body>
	<div id="main-container">
		<div id="picture" class="tile"><b><span>W</span>eb <span> A</span>pplication <span>T</span>echnologies</b></div>
			<div id="link" class="tile">
				<h2>Links</h1>
				<ul>
					<li><b>Chubkins</b></a></li>
					<li><b>W3 Schools</b></a></li>
					<li><b>Learn Web Dev</b></a></li>
					<li><b>Colour Reference</b></a></li>
				</ul>
			</div>
			<div id="lecture" class="tile">
				<div><b>WAT Lecture<b></div>
				<div><b>&nbsp;	&nbsp;	&nbsp;	&nbsp; 	&nbsp; 	&nbsp;12:00-13:00 <i>LTB</i></b></div><br><br>
				<div><b>Every <span>WED</span></b></div>
			</div>
			<div id="table" class="tile">
				<h2>WAT Assessment</h2>
				<table id="users-table">
					<thead>
						<tr>
							<th>Title</th>
							<th>Weight</th>
							<th>Due</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Work in progress</td>
							<td>20%</td>
							<td>See VLE</td>
						</tr>
						<tr>
							<td>Portfolio</td>
							<td>50%</td>
							<td>See VLE</td>
						</tr>
						<tr>
							<td>Phase Exam</td>
							<td>30%</td>
							<td>See VLE</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="form" class="tile">
				<h2>Search for Property</h2>
				<form>
					<label><b>Location: </b></label><input type="text" placeholder="e.g this or that"><br>
					<label><b>Category: </b></label>
					<select>
						<option>Flat</option>
						<option>Thin</option>
					</select>
					<label><b>Beds: </b></label><input type="number" value=4><br>
					<input type="radio" value="Price" checked><label for="Price">Price</label>
					<input type="radio" value="Beds"> <label for="Beds">Beds</label>
					<input type="radio" value="Alpha"><label for="Alpha">Alpha</label><br>
					<button>Submit</button>
				</form>
			</div>
	</div>
</body>
</html>