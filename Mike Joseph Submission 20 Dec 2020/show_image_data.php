<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1); 
    
    include_once('./includes/database_config.php');
    include_once('./includes/Exhibit.php');
    
    if(isset($_GET['dbID']) && $_GET['dbID']!= ' '){
	                $exhibits = Exhibit::load_by_id($_GET['dbID']);

	     }  else{
	    
    
    $exhibits = Exhibit::load();}
    

    for($i=0; $i<count($exhibits); $i++){ $k=0;
               $k=$i+1;
        print_r("<p>");

        $exhibits[$i]->getData();

        print_r('</p>');
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>The list of all Images</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <h1>Here are all the Images in the database</h1>
    <?php
        if(!$dbID){
            print_r('Something went wrong. Either you did not specify an Image ID or the ID was not found.');
        } else {
            print_r("<p>");
            $Image->getData();
            print_r('</p>');
        }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>