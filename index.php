<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PENYEBARAN CORONA INDONESIA</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid bg-danger text-white">
        <div class="container text-center">
            <h1 class="display-4" >INFO COVID INDONESIA</h1>
            <p class="lead" >Memberikan informasi tentang covid di indonesia</p>
        </div>
    </div>
    <style type="text/css">
        .row-centered {
            text-align:center;
        }
        .col-centered {
            display:inline-block;
            float:none;
            text-align:left;
            margin-right:-4px:
        }
        .box{
            padding: 30px 40px;
            border-radius: 5px;
            }
    </style>
    <div class="container">
        <div class=" row-centered"> 
            <div class="col-md-4 col-centered">
                <div class="card-header bg-danger text-white">
                                    Login
                </div>
                <div class="card-body ">
     <form action="login.php" method="post" onSubmit="return validasi()">
        <div>
            <div class="col-md-4 col-centered">
                <label>Username:</label>
            </div>
                    <input type="text" name="username" id="username" />
        </div>
        <div>
            <div class="col-md-4 col-centered">
                    <label>Password:</label>
            </div>
                <input type="password" name="password" id="password" />
            </div>			
                <input type="submit" value="Login" class="tombol">
        </div>
    </form>
            </div>
        </div>
    </div>
</div>
                <footer class="bg-danger text-white text-center mt-3 bt-2 pb-2 box">
                            Hanya Ingin Melihat Merkembangan Covid
                <a href="gaklogin.php">  Data Live </a>
                </footer>
   
    <script src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
    <script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
  </body>
</html>

