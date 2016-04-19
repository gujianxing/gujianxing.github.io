<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<style type="text/css">
			#style1{width: 40%;height: 300px;background: red;margin: 0 auto;overflow: scroll;position: relative;}
			.photo{width: 100%;height: 300px;position: absolute;}
			
		</style>
		
		<script type="text/javascript">
		window.count = 0
		</script>
	</head>
	<body style="margin: 0px;">
		<div id="style1">
			<img src="img/phone1.jpg" class="photo" id="photo1"/>
			<img src="img/hudei.png" class="photo" id="photo2" style="left: 100%;"/>
		</div>
		<script type="text/javascript">
		function change () {
			count++
			var images = document.getElementById('photo1')
			if (count % 3 === 0) {
				images.src = "img/hudei.png"
			}else if (count % 3 === 1) {
				images.src = "img/web1.jpeg"
			}else {
				images.src = "img/phone1.jpg"
			}
		}
//		var time = setTimeout("change();",3000)
		var time2 = setInterval("change();",3000)


		</script>
	</body>
</html>
