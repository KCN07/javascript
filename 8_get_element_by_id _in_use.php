<html>
<body>
<script>
	function changeImage()
	{
		imgTag = document.getElementById('button');
		
		if (imgTag.src.match("btnon"))
		{
			imgTag.src = "imagesjs/btnoff.png";
		}
		else
		{
			imgTag.src = "imagesjs/btnon.png";
		}
	}
</script>

<img id="button" onclick="changeImage()" src="imagesjs/btnon.png" width="200" height="50" />

</body>
</html>

