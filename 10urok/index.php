<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Кинопоиск</title>
    <style type="text/css">
    	body {
    		background-color: #e6e6e6
    	}
    	.main {
    		background-color: white;
    		
    		margin-top: 50px;
    	}
    	.main h3 {
    		color: #f60;;
    	}
    </style>	
  </head>
  <body>
    <div class="" style="height: 100px; background-color: #444444">
    	<div class="container">
    		<div class="row">
	    		<div class="col-2">
	    			<img src="img\logo.png" class="w-100">
	    		</div>
	    		<div class="col-6 pt-4">
	    			<input type="" name="" placeholder="поиск на сайте" class="w-100">
	    		</div>
	    		<div class="col-4 pt-4 text-right" style="color: #c7c7c7">
	    			<h3>Войти</h3>
	    		</div>
    		</div>
    	</div>
    	<div class="col-6 mx-auto shadow-lg main px-0">
    		<h3 class="text-center bg-success p-2">5 лучших фильмов</h3>
    		
    		<div class="text-center"> <!-- Див для списка фильмов -->
                <?php 
                    $movie = [
                        ["id" => "1", "name" => "Конец Евангелиона", "img" => "img/1.jpg"],
                        ["id" => "2", "name" => "Гарри Поттер и Орден Феникса", "img" => "img/2.jpg"],
                        ["id" => "3", "name" => "Вайолет Эвергарден: Вечность и призрак пера", "img" => "img/3.jpg"],
                        ["id" => "4", "name" => "Щегол", "img" => "img/4.jpg"],
                        ["id" => "5", "name" => "Промар", "img" => "img/5.jpg"],
                    ];

                    for ($i=0; $i < 5; $i++) { 
                        echo "<h1>" . $movie[$i]["id"] . " " . $movie[$i]["name"]. "</h1>";
                        echo "<img src='". $movie[$i]["img"] ."' class='w-50'>";
                    }
                 ?>
    			 
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>