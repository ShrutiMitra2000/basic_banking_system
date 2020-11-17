
<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/background2.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#0086b3;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
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
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a===""){
				 var arr=["Shruti","Sachin","Anirudh","Karna","Urvi","Ram","Vibha","Vidyut","Anand"];
				 }
				 else if(a==="Shruti"){
					var arr=["Siya","Sachin","Anirudh","Karna","Urvi","Ram","Vibha","Vidyut","Anand"];
				}
				else if(a==="Sachin"){
					var arr=["Siya","Shruti","Anirudh","Karna","Urvi","Ram","Vibha","Vidyut","Anand"];
				}
				else if(a==="Anirudh"){
					var arr=["Siya","Shruti","Sachin","Karna","Urvi","Ram","Vibha","Vidyut","Anand"];
				 }
				 else if(a==="Karna"){
					var arr=["Siya","Shruti","Sachin","Anirudh","Urvi","Ram","Vibha","Vidyut","Anand"];
				 }
				 else if(a==="Urvi"){
					var arr=["Siya","Shruti","Sachin","Anirudh","Karna","Ram","Vibha","Vidyut","Anand"];
				 }
				 else if(a==="Ram"){
					var arr=["Siya","Shruti","Sachin","Anirudh","Karna","Urvi","Vibha","Vidyut","Anand"];
				 }
				 else if(a==="Vibha"){
					var arr=["Siya","Shruti","Sachin","Anirudh","Karna","Urvi","Ram","Vidyut","Anand"];
				 }
				 else if(a==="Vidyut"){
					var arr=["Siya","Shruti","Sachin","Anirudh","Karna","Urvi","Ram","Vibha","Anand"];
				 }
				 else if(a==="Anand"){
				 var arr=["Siya","Shruti","Sachin","Anirudh","Karna","Urvi","Ram","Vibha","Vidyut"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Siya">Siya</option>
			<option value="Shruti">Shruti</option>
			<option value="Sachin">Sachin</option>
			<option value="Anirudh">Anirudh</option>
			<option value="Karna">Karna</option>
			<option value="Urvi">Urvi</option>
			<option value="Ram">Ram</option>
			<option value="Vibha">Vibha</option>
			<option value="Vidyut">Vidyut</option>
			<option value="Anand">Anand</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="home_btn">HOME</button>
	</a>
</div>
</body>
</html>