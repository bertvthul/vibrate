<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
	</head>
	<body>
		
		<h1>Trillen</h1>
		<p>Telefoon moet trillen bij klikken op de knop...</p>
		<p><button id="vibratebtn">Tril mijn telefoon</button></p>
		
		<script type="text/javascript">
			// enable vibration support
			navigator.vibrate = navigator.vibrate || navigator.webkitVibrate || navigator.mozVibrate || navigator.msVibrate;
			
			
			var vibratebtn = document.getElementById('vibratebtn');
				
			vibratebtn.addEventListener('click',function(){
				
				
				if (navigator.vibrate) {
					// vibration API supported
					console.log('Trillen!');
					// vibrate for one second
					navigator.vibrate([500, 300, 100]);
				} else {
					alert('Trillen niet ondersteund op je telefoon... :(');
				}
			});
			
		</script>
		
	</body>
	
</html>