<?php 
/** Task 1: Create a deck of cards
 * Create two arrays: Ranks and suits
 * Loop over suits
 * Loop over ranks
 */

 $suits =['clubs', 'hearts', 'spades', 'diamonds'];
 $ranks = [2,3,4,5,6,7,8,9,10,'J','Q','K','A'];

/** Task 2: Creating 52 random cards
 * use arrays from task 1
 * Loop that loops 52 times 
 * Use rand() to get a number to 0 to count(suits)-1
 * Use random number to retreive value from ranks array
 */

//$random = rand(0, 3);
//echo $random;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deck</title>
  <link href="https://fonts.googleapis.com/css?family=BioRhyme:300" rel="stylesheet">
  <link rel="stylesheet" href="deck.css">
</head>
<body>
  <div id="deck" class="deck">
    <?php foreach ($suits as $suit) { ?>
    <?php foreach ($ranks as $rank) { ?>
    <div class="card">
      <div class="number <?php echo $suit; ?> ">
       <?php echo $rank; ?> 
      </div>
      <div class="suit">
        <img src="images/<?php echo $suit; ?> .png">
      </div>
      <div class="number <?php echo $suit; ?> ">
       <?php echo $rank; ?> 
      </div>
    </div>
    <?php } /* closes ranks */  ?>
    <?php }  //closes suits ?>

  </div>

  <div id="deck" class="deck">
    <?php for ($i = 0; $i < 52; $i++) : ?>
      <?php 
      $suit = rand(0, count($suits) - 1);
      $rank = rand(0, count($ranks) - 1);
      ?>
      <div class="card">
      <div class="number <?php echo $suit; ?>">
   <?php echo $rank; ?> 
  </div>
  <div class="suit">
    <img src="images/<?php echo $suit;?>.png">
  </div>
  <div class="number <?php echo $suit;?>">
   <?php echo $rank; ?> 
  </div>
</div>

    <?php endfor; ?>

  </div>
</body>
</html>
