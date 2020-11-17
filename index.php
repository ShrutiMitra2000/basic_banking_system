<html>
<head>
    <title>Basic Banking System</title>
	<link rel="shortcut icon" href="images/banklogo.jpg">

   
	 
	 <script src="https://kit.fontawesome.com/b45d84f94c.js" crossorigin="anonymous"></script>
	<style>
	button{
		background-color:black;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:url("images/background.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.primary_btn {
	width: 250px;
  height:50px;
  display: inline-block;
 background-color:black;
 font-weight:bold;
  padding: 0px 50px;
  color: white;
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  font-weight: 500;
  line-height: 48px;
  border: 2px solid orange;
  border-radius: 15px;
  text-align: center;
  text-transform: uppercase;
  cursor: pointer;
   }
  .primary_btn:hover {
     background: white;
	 color:black;
     }
  .primary_btn.yellow_btn {
    background: #fdbb00 !important;
    border: 1px solid #fdbb00 !important;
    color: #000000; }
    .primary_btn.yellow_btn:hover {
      background: transparent !important; }
	</style>
</head>
<body >

	<div id="header">
       <br>
       <h1 style=" font-family:Helvetica; font-size: 60px; color:coral;text-shadow: 2px 2px black;"> The SPARK Internship(grip)  </h1>
       <h2 style=" font-family:Agency FB; font-size: 45px;color:maroon;text-shadow: 2px 2px black; text-decoration:underline;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Basic Banking System </h2>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="primary_btn" id="button "type="button" href="getdetail.php">View users</button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="primary_btn" id="button" type="button">Credit Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="primary_btn" id="button" type="button">All Transaction</button>
               </a>

            </table>
    </div>
	           
</body>
</html>