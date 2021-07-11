<head>
	<link rel="stylesheet" type="text/css" href="style.css">  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>ToDo Application</title>
	
	<style type="text/css">
		.brand{

			background: #cbb09c !important;
		}
		.brand-text{

			background: #cbb09c !important;
		}

		form{
			max-width: 460px;
			padding:20px;
			margin:20px auto;

		}
		.wrapper{
			width: 750px;
			margin: 0 auto;

		}
	</style>
</head>
<body class="grey lighten-4">
	<nav class = "blue z-depth-0">
		<div class ="container">
			<a href ="#">		</a>
			<ul>
				<li>Total List: 10 <?php  ?></li>
			</ul>
			<ul id ="nav-mobile" class="right hide-on-small-and-down">
				<li><a href="AddList.php" class="btn brand z-depth-0 fa fa-plus"> Create a Task</a>  </li>
				<li><a href="Landing.php" class="btn brand z-depth-0"> Home</a>  </li>
			</ul>
		</div>	

	</nav>