 <?php
include 'inc/header.php';

echo '<h1>Welcome to our<br />Treehouse Story Game</h1>';
echo '<p>Enter the requested words and create your story.</p>';
echo '<p><a class="btn btn-default btn-lg" href="play.php" role="button">Play</a></p>';

echo '<h2>Reread Your Saved Stories</h2>';
if (isset($_COOKIE)) {
    foreach ($_COOKIE as $key => $value){
      if ($key != 'PHPSESSID') {
        echo '<div class="form-group">';
        
        echo $key . '<br />';
        echo '</div>';
         }
    }
}
include 'inc/footer.php';