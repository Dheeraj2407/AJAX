<html>
<head>
	<title>Database Display</title>
	<style>
		body{
			font-size:6vw;
			text-align:center;		
		}
		input{
			padding:15px 32px;
			font-size:5vw;
		}	
	</style>
	<script>
		function loadDoc() {
  			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
					document.getElementById("uname").innerHTML =this.responseText;
				}
			};
		  xhttp.open("GET", "get.php", true);
		  xhttp.send();	
		}
		/*setInterval(loadDoc,1000);*/
	</script>
</head>
<body>
	<p>Current user:</p>
	<p id='uname'>Click button to fetch data...</p>
	<p><input type="button" onClick="loadDoc()" value="Fetch"></p>		
</body>
</html>
