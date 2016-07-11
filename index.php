<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="author" content="Sam Kauffman">
    <meta name="description" content="Let's go metal detecting.">
    <meta name="theme-color" content="#FDC401">

	<title>The Treasure Hunter</title>

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#000000">

	<!-- Custom Fonts -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	
	<!-- Custom CSS -->
	<link href="css/style.css"  rel="stylesheet">

</head>

<body>
	
	<header>
		<p class="title"><a href="../" title="Find all 6?">The Treasure Hunter</a></p>
		<a class="back-button" href="../" title="Find all 6?"><span class="fa fa-reply"></span></a>
	</header>

	<section class="sandbox">
		<div class="cursor"></div>
		<div class="treasures">
            <img class="treasure" data-treasure="bottlecap" src="img/treasure/bottlecap.png" alt=""/>
            <img class="treasure" data-treasure="nail" src="img/treasure/nail.png" alt=""/>
			<img class="treasure" data-treasure="penny" src="img/treasure/penny.png" alt=""/>
            <img class="treasure" data-treasure="coil" src="img/treasure/coil.png" alt=""/>
			<img class="treasure" data-treasure="hook" src="img/treasure/hook.png" alt=""/>
            <img class="treasure" data-treasure="ring" src="img/treasure/ring.png" alt=""/>

		</div>  
	</section>
    
    <section class="parchment is-minimized">
        <div class="parchment-list__container">
            <ul class="parchment-list">
                <span class="fa fa-times-circle parchment__close-icon"></span>
                <li data-treasure-item="bottlecap">A bottlecap</li>
                <li data-treasure-item="nail">A rusty nail</li>
                <li data-treasure-item="penny">A wheat penny</li>
                <li data-treasure-item="coil">A metal coil</li>
                <li data-treasure-item="hook">A hook weight</li>
                <li data-treasure-item="ring">A diamond ring</li>
            </ul>
        </div>
    </section>

<!--**************************************************-->

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='../js/jquery.min.js'><\/script>")</script>

	<!-- Javascript -->
	<script src="js/script.js"></script>

</body>

</html>