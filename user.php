<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="button.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			}

		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 10px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  text-transform:uppercase;
		}

		.nav-li a:hover:not(.active) {
		  background-color: #00ccff;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			background-color:white;
			}
		th{
			color:black;
			font-size:24px;
			padding:16px;
		}
		
		td{
			font-size:22px;
			color: white;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		body{
			background-image:url("images/background2.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover;
		}
		.flat-table-1 {
			background:grey;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
			margin-left:550px;
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

		.btn:hover {
			background-color:green;
		}
	</style>
</head>
    <body>
	<ul class="nav-ul" style="height:53px;">
	<a href="index.php">
		<li class="nav-li"><button class="home_btn btn "><i class="fa fa-home" style="font-size:24px"></i></button></li>
	</a>
		<li class="nav-li" style="float:right;height:53px;text-align:center;font-size:20px;color:white;background-color:lightgreen" ><a class="nav-link"><?php echo $name?></a></li>
	</ul>
	<br><br><br>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Email</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th> Credits</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="transfer_to.php">
		<button class="home_btn"> Transfer To</button>
	</a>
	</div>
	<br>
	<br>

               
    <div class="buttons">
		<a href="ministatement.php">
		<button class="home_btn">Mini Statement</button>
		</a>
	</div>
               


    </body>
</html>