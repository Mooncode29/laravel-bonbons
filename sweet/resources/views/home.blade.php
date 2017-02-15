<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste bonbons</title>
	<link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<h1>Bienvenue sur votre site de gestion de stock de bonbons!</h1>
<body>
<div id="app"></div>
<form action="create" method="post">
	{{ csrf_field() }}
	<div>
		<label for="name">Nom du bonbon</label>
		<input type="text" name="name">
	</div>
	<div>
		<label for="quantity">Quantité</label>
		<input type="number" name="quantity">
	</div>
	<button action="submit">Envoyer</button>
</form>
<script> 
	window.Laravel = { csrfToken : "{{csrf_token()}}"}; 
</script>
<script src="{{mix('/js/app.js')}}"></script>

</body>
</html>