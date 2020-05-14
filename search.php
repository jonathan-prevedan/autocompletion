<?php
    require_once('include/pokemon.php');
    $r = new Pokemon;
    $results = $r->search($_GET['q']);
    $r = null;
?>


<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Recherche - <?php echo $_GET['q']; ?></title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Kreon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charmonman&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png" />

  </head>

  <?php
      require_once('header.php');
  ?>


<body>

  <main id="mainsearch">

  <?php 
  
  if(!empty($results)){
  foreach($results as $result){ 
    ?>

    <div class="result">

        <div class="infos">
        
            <h3><a href="produit.php?p=<?php echo $result->id; ?>"><?php echo $result->namefrench; ?></a></h3>
                        
        </div>
    
    </div>


<?php } 
}

    else{ ?>

    <p>Aucun résultat pour <?php echo $_GET['q']; ?></p>
  <?php } ?>

  </main>


</body>

  <?php
      require_once('footer.php');
  ?>


</html>



<!-- 


<style>

body, html {
  /* min-height: 1200px; */
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    font-family: 'Sen', sans-serif;
}

main {
    width: 100%;
    height: 100%;
    padding-top: 20px;
    box-sizing: border-box;
    overflow: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.result{
    height: 150px;
    width: 30%;
    display: flex;
    border: 2px solid #422B0C;
    margin-bottom: 50px;
}
.result .image{
    width: 20%;
    height: 100%;

    box-sizing: border-box;
}
.result a{
    width: 100%;;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.result .image img{
    width: 80%;
    height: auto;
}

.result .infos{
    width: 80%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
}
.result .infos a{
    color: inherit;
    text-decoration: none;
}

</style> -->