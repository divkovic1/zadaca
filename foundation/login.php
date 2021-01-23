<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/foundation.css" />
  </head>
  <body>
      <?php
      require_once 'izbornik.php';
      ?>
     <div class="grid-container">
        <div class="grid-x grid-padding-x">



            <div class="medium-4 cell">
                 
                     <label>Username
                    <input type="text" placeholder="username">
                    </label>   

   
                    <label>Password
                    <input type="password" aria-describedby="passwordHelpText" placeholder="password">
                    </label>

                    <button type="button" class="success button" onclick="location.href='nadzornaploca.php'">Log In</button>
                   
                </div>
            </div>
        </div>

        
    
        <?php
    include_once 'skripte.php';
    ?>    

  </body>
</html>
