<?php 

require_once __DIR__."/Movie.php";
require_once __DIR__."/database.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php foreach($movies as $movie) : 

$new_movie = new Movie($movie ["title"], $movie["date"], $movie["genre"], $movie["vote"], $movie["description"])

?>
<div>
  <h3>Titolo: <?php echo $new_movie->title ?></h3>
  <h4>Data di uscita: <?php echo $new_movie->date ?></h4>
  <h4>Genere: <?php echo $new_movie->genre ?></h4>
  <h5>Voto: <?php echo $new_movie->vote ?></h5>
  <p>Descrizione: <?php echo $new_movie->getExcept() ?></p>
</div>
  
<?php endforeach; ?>

</body>
</html>