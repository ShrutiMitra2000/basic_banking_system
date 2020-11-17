<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
	<style>
		.nav-ul {
			list-style-type: none;
			margin-left:200px;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-image:url("images/background2.jpg");
			
			background-repeat: no-repeat;
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:6px solid black;
			border-collapse:collapse;
			 background: white;
			}
		th{
			color:black;
			font-size:28px;
			padding:15px;
			font-family: Arial, Helvetica, sans-serif;
		}
		
		td{
			font-size:23px;
			color: ;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px solid black;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.btn {
			background-color:brown;
			border: none;
			color: white;
		
			font-size: 23px;
			cursor: pointer;
			margin-left: 450px;
             
             border: 3px solid green;
 
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}

		.btn:hover {
			background-color:green;
		}
		.home_btn{
		width: 250px;
		height:50px;
		background-color:black;
        font-weight:bold;
 	    padding: 0px 50px;
 	    color: white;
  	    font-family: "Roboto", sans-serif;
	    font-size: 14px;
 	    font-weight: 500;
  	    line-height: 48px;
	}
	.home_btn:hover {
         background: white;
	      color:black;
     }
	</style>
	</head>
	<body>
	<br><br><br><br><br><br>
		
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			<div class="buttons">
				<button class="home_btn" type="submit" name="name">BACK</button>
			</div>
		</form>
		<ul class="nav-ul">
	<a href="index.php">
		<li class="nav-li"><button class="btn"><i class="fa fa-home"></i></button></li>
	</a>
	</ul>
		
	</body>
</html>