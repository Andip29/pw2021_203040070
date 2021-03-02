<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      .bulat {
          width: 50px;
          height: 50px;
          background-color: salmon;
          text-align: center;
          line-height: 50px;
          margin: 3px;
          border-radius: 100%;
          display: inline-block;
      } 

  </style>
</head>
<body>
  
<?php for( $i = 1; $i <= 3; $i++ ) : ?>
      <?php for($j =1; $j <= $i; $j++) : ?>
        <div class="bulat"><?=  $i ; ?></div>
      <?php endfor; ?>
      <br>
  <?php endfor; ?>
</body>
</html>
