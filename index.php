<?php include __DIR__ . '/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <?php include __DIR__ . '/partials/header.php'; ?>
  <main>
    <div class="container">
      <form action="api.php">
        <select name="songs" id="select">
          <?php $song_types = [] ?>
          <?php foreach($database as $song) { ?>           
            <?php if(!in_array($song['genre'],$song_types)) { ?>
              <?php $song_types[] = $song['genre'] ?>
              <option value="<?php echo $song['genre'] ?>"><?php echo $song['genre'] ?></option>        
            <?php } ?>
          <?php } ?>
        </select>
      </form>     
      <div class="row">
        <?php foreach($database as $song) { ?>
          <div class="col">
            <div class="card-content">
              <img src="<?php echo $song['poster']; ?>" alt="<?php echo $song['poster']; ?>">
              <span class="text-tile"><?php echo $song['title']; ?></span>           
              <div class="cont-subtitle">
                <span class="subtitle"><?php echo $song['author']; ?></span>
                <span class="subtitle"><?php echo $song['year']; ?></span>
              </div>          
            </div>
          </div>     
        <?php } ?>
      </div>
    </div>
  </main>
</body>
</html>