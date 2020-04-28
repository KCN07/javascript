<html>

<head>
	<script>
		function myFunction()
		{
			var msg = "";
			
			var currentHour = new Date().getHours(); // Date is a "Built-in Object" that Returns Today's Date //
											  /* getHours() Function is a "Built-in Function" of "Date() Object"
												 that gives us the current Hour */
			 
			if (currentHour < 11 && currentHour>=6)
			{
				msg = "Good Morning";
			}
			
			else if (currentHour >11 && currentHour < 17)
			{
				msg = "Good Afternoon";
			}
			else if( currentHour > 17 && currentHour <= 18)
			{
				msg = "Good Evening";
			}
			else{
				msg = "Good night";
			}
			
			document.getElementById("demo").innerHTML = msg;
		}
	</script>
</head>

<body>

<p>Click the button to get a time-based greeting:</p>

<input type="submit" onClick="myFunction()" value="CLICK ME" />

<p id="demo"> </p>

</body>
</html>
