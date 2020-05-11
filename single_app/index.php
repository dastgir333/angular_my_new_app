

<!DOCTYPE html>
<html ng-app="myMod">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="angular.min.js"></script>
	<script src="module1.js"></script>
	<script src="angular-route.min.js"></script>
	
	

</head>
<body ng-controller="myController">
<div class="container">

	<div class="row">
		<div class="col-sm-12">

<h1 class="jumbotron bg-dark text-white text-center">ANGULAR JS ROUTING EXAMPLE</h1>
</div>

</div>

<div class="row" style="margin-top: -30px;">
	<div class="col-sm-3">
		<div class="bg-dark" style="height:100%;">
			<ul style="list-style: none ">
	<li><a href="#!page1">web Page1</a> </li>
	<li><a href="#!page2">web Page2</a> </li>
	<li><a href="#!page3">web Page3</a> </li>
	<li><a href="#!page4">web Page4</a> </li>
	
</ul>

	</div>
</div>


<div class="col-sm-9">
<div ng-view> </div>

</div>
</div>
<div class="row">

<div class="col-sm-12">


	<div class="card-body bg-dark text-white text-center">
		<h2> All Right Reserved to ABC Company &copy; 2020</h2>

</div>


</div>

</div>




</body>
</html>