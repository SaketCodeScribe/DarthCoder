<!DOCTYPE html>
<html>
<head>
	<title>Problems</title>
	<link rel="stylesheet" type="text/css" href="css/problems.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<header>
		<nav>
			<div class="main">
				<div class="logo">
					<a href="Index.html"><img src="images/darth_logo.png" alt='logo'></a></li>
				</div>
				<input type="checkbox" id="check">
				<label for="check" class="checkbtn">
					<i class="fas fa-bars"></i>
				</label>
				<ul>
					<li><a href="Index.html">Home</a></li>
					<li class="active"><a href="Problems.php">Problems</a></li>
					<li><a href="About.html">About</a></li>
					<li><a href="Contact.html">Contact</a></li>
				</ul>
			</div>
		</nav>
		<div class="algo">
			<a href="Problems.php"><img src="images/rounded-rectangle.png" alt="Algorithms" style="width:10%;"></a>
			<div class="text-head"><a href="Problems.php">Algorithms</a></div>
		</div>
		<table class="content-table">
			<thead>
			    <tr>
			    	<th>#</th>
			        <th>Title</th>
			        <th>Difficulty</th>
			        <th>Solution</th>
			    </tr>
			</thead>
			<?php 
				$conn = mysqli_connect("localhost", "id15826699_root", "B%143AvsK83T", "id15826699_dsa");
				if(!$conn){
					echo "Not Connected";
				}
				$sql = "SELECT * FROM dsa";
				$result = $conn-> query($sql);
				if($result-> num_rows>0){
					while($row = $result-> fetch_assoc()){
						if($row["diff"]=='Easy'){
							echo "<tr><td>".$row["id"]."</td><td><a href='".$row["link"]."' target='_blank'>".$row["title"]."</a></td><td><img src='images/easy.png' alt='Difficulty' style='width:30%;'>"."</td><td><a href='".$row["sol"]."' target='_blank'><img src='images/solution.png' alt='Solution' style='width:30%;'></a></td></tr>";
						}
						else if($row["diff"]=='Medium'){
							echo "<tr><td>".$row["id"]."</td><td><a href='".$row["link"]."' target='_blank'>".$row["title"]."</a></td><td><img src='images/medium.png' alt='Difficulty' style='width:30%;'>"."</td><td><a href='".$row["sol"]."' target='_blank'><img src='images/solution.png' alt='Solution' style='width:30%;'></a></td></tr>";
						}
						else if($row["diff"]=='Hard'){
							echo "<tr><td>".$row["id"]."</td><td><a href='".$row["link"]."' target='_blank'>".$row["title"]."</a></td><td><img src='images/hard.png' alt='Difficulty' style='width:30%;'>"."</td><td><a href='".$row["sol"]."' target='_blank'><img src='images/solution.png' alt='Solution' style='width:30%;'></a></td></tr>";
						}
						else{
							echo "<tr><td>".$row["id"]."</td><td><a href='".$row["link"]."' target='_blank'>".$row["title"]."</a></td><td>".$row["diff"]."</td><td><a href='".$row["sol"]."' target='_blank'><img src='images/solution.png' alt='Solution' style='width:20%;'></a></td></tr>";
						}
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
				$conn-> close();
			?>
		</table>
	</header>
</body>
</html>