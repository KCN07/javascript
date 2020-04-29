<html>
<head>
<style>
.submit{
	background-color : lime;
	cursor: pointer;
}
.val{
	background-color : lightblue;
}
.res{
	background-color : yellow;
}
</style>
</head>
<body>
<script>
	function calculate()
	{
		value1 = document.getElementById("value1").value; // 44
		symbol = document.getElementById("symbol").value; // +
		value2 = document.getElementById("value2").value; // 22
		
		result = eval(value1 + symbol + value2); // eval("44+22") = 66
		
		document.getElementById("result").value = result;
	}
</script>

<div>
	<label>Put a Number : </label>
		<input type="text" class="val" id="value1" value="" placeholder="Any Number 1" />
	<select id="symbol">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<label>Put a Number : </label>
		<input type="text" class="val"  id="value2" value="" placeholder="Any Number 2" />
	
		<input type="submit" class="submit" onClick="calculate()" value="Click Here" />
</div>
</br>
</br>
<div>
	Result: <input type="text" class = "res" id="result" value="" placeholder="result" />
</div>
</body>
</html>