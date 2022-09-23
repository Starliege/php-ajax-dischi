<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="master.css">
    <title>php-ajax-dischi</title>
    <?php
      require "db.php";

      $albums = $data["response"];
     ?>
  </head>
  <body>
      <header>
        <img src="img/logo.png" alt="logo">
      </header>
      <main id="albums-container">
        <?php
        foreach ($albums as $album) {
          ?>
          <div class="card">
            <div class="card-img-wrapper">
              <?php
              echo '<img src="' . $album["poster"] . '" alt="poster">'
               ?>
            </div>
            <div class="card-txt">
              <?php
              echo "<span class=title>" . $album["title"] . "</span>";
              echo "<span>" . $album["author"] . "</span>";
              echo "<span>" . $album["year"] . "</span>";

               ?>
            </div>
          </div>
          <?php
        }
        ?>
      </main>
  </body>
</html>
