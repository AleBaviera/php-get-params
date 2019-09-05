<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>prova PHP</title>
    <?php
     //  $word= $_GET['word'];
     //  $par = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
     //
     // $num = strlen($par);
     // $replaced = str_replace($word,'***',$par);
     // $newnum = strlen($replaced);


     $alt = $_GET['alt'];
     $lun = $_GET['lun'];
     $lar = $_GET['lar'];

     $vol = $alt * $lun * $lar;

    ?>
  </head>
  <body>
    <!-- <p> <?php echo $par . ' (';  ?> <?php echo $num . ')'?></p>
     <p>
       <?php
          echo $replaced . ' (';
        ?>
        <?php echo $newnum . ')'?>

    </p> -->


    <!-- <p> <?php
          echo 'altezza :' . $alt . ' lunghezza : ' . $lun . ' larghezza : '. $lar;
        ?> <br> -->
        <?php echo 'altezza :' .$alt;
        ?> <br>
        <?php
          echo ' lunghezza : ' .$lun;
        ?> <br>
        <?php
          echo ' larghezza : '.$lar;
        ?> <br>
        <?php
         echo 'Il volume è : ' . $vol;
        ?>
    </p>


  </body>
</html>
