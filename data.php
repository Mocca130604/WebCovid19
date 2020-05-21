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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="data.php">Pantau <span class="sr-only">(current)</span> </a>
      </li>
      </li>
    </ul>
  </div>
</nav>
</div>
    </div>
    <style type="text/css">
        .box{
            padding: 30px 40px;
            border-radius: 5px;
            }
    </style>
<div class="card mt-4">
    <div class="card-header bg-danger  text-white text-center">
     <b class="text">Data Kasus Corona Di Dunia </b>
        </div>
            <div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="bg-danger box text-white">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Positif</h5>
                        <h2 id="data-kasus">123456</h2>
                        <h5>Orang</h5>
                        </div>
                        <div class="col-md-4">
                        <img src="img/sad.svg" style="width: 90px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-info box text-white">
                <div class="row">
                    <div class="col-md-6">
                        <h5>meninggal</h5>
                        <h2 id="data-mati">123456</h2>
                        <h5>Orang</h5>
                        </div>
                        <div class="col-md-5">
                        <img src="img/cry.svg" style="width: 90px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-success box text-white">
                <div class="row">
                    <div class="col-md-6">
                        <h5>sembuh</h5>
                        <h2 id="data-sembuh">123456</h2>
                        <h5>Orang</h5>
                        </div>
                        <div class="col-md-5">
                        <img src="img/happy.svg" style="width: 90px">
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    <div class="card mt-4">
    <div class="card-header bg-danger  text-white text-center ">
     <b class="text">Total Kasus Corona Di indonesia </b>
        </div>
            <div class="card-body">
            <div class="col-md-12 mt-4">
                <div class="bg-primary box text-white">
                <div class="row">
                    <div class="col-md-4">
                        <h2>INDONESIA</h2>
                        <h5 id="data-idID">positif : 12 orang <br>
                                        meninggal : 13 orang <br>
                                        sembuh : 20 orang</h5>
                        </div>
                        <div>
                        <img src="img/indonesia.svg" style="width: 150px">
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="card mt-4">
    <div class="card-header bg-danger  text-white text-center">
     <b class="text"> Data Corona Di Indonesia </b>
        </div>
            <div class="card-body">
                <table class="table table-bordered">
                        <thead>
                            <th>No.</th>
                            <th>Provinsi</th>
                            <th>Positif</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                        </thead>
                        <tbody id="table-data"></tbody>
                </table>
            </div>  
        </div>
    </div>
    

    <footer class="bg-danger text-white text-center mt-3 bt-2 pb-2">
            dibuat oleh Firdaus Mochamad XR5/19
    </footer>
   
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  </body>
</html>

<script>
    $(document).ready(function(){

        semuaData();
        dataNegaraIndonesia();
        dataProvinsi();

        setInterval(function(){
            semuaData();
        dataNegaraIndonesia();
        dataProvinsi();
        },5000);

        function semuaData(){
            $.ajax({
                url: 'https://coronavirus-19-api.herokuapp.com/all',
                success : function(data){
                    try{
                        var json = data;
                        var kasus = data.cases;
                        var meninggal = data.deaths;
                        var sembuh = data.recovered;

                        $('#data-kasus').html(kasus);
                        $('#data-mati').html(meninggal);
                        $('#data-sembuh').html(sembuh);

                    }catch{
                        alert('error');
                    }
                }
            });
        }
        function dataNegaraIndonesia(){
            $.ajax({
                url: 'https://coronavirus-19-api.herokuapp.com/countries',
                success : function(data){
                    try{
                        var json = data;
                        var html = [];

                        if(json.length > 0){
                            var i;
                            for(i = 0; i <json.length; i++){
                                var dataNegara = json[i];
                                var namaNegara = dataNegara.country;

                                if(namaNegara === 'Indonesia'){
                                    var kasus = dataNegara.cases;
                                    var meninggal = dataNegara.deaths;
                                    var sembuh = dataNegara.recovered;
                                    $('#data-idID').html(
                                        '<img src="img/sad.svg" style="width: 25px"> Positif : ' +kasus+ ' orang <br> <img src="img/cry.svg" style="width: 25px"> Meninggal : ' +meninggal+ ' orang <br> <img src="img/happy.svg" style="width: 25px"> Sembuh : ' +sembuh+ ' orang')
                                }
                            }
                        }

                    }catch{
                        alert('error');
                    }
                }
            });
        }
        
        function dataProvinsi(){
            $.ajax({
                url: 'curl.php',
                type : 'GET',
                success : function(data){
                    try{
                        
                        $('#table-data').html(data)

                    }catch{
                        alert('error');
                    }
                }
            });
        }
    })
</script>