<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="logos.css" type="text/css" rel="stylesheet">
    <title>Diamond Tm.</title>
</head>
<body>
	   <form action="login-process.php" method="post">
			
        <div class="container"> 
			<h1>Login</h1>
            <?php if(isset($_GET['error'])){ ?>
	        <p class = "error"><?php echo $_GET['error']; ?></p>
	        <?php } ?>
            <label>Felhasználónév : </label>   
            <input type="text" name="name" placeholder="Név" >  
            <label>Jelszó : </label>   
            <input type="password" name="password" placeholder="Jelszó" >  
            <button>Log in</button>  
            <a href="index.html">Kezdőlap</a>	 
            <a href="signup.html">Regisztráció</a>
           </div>
    </form>    
    
    
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>