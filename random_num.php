

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Random Number Generator</title>
    <link rel="stylesheet" href="rand_num_styles.css" />
  </head>
  <body>
    <form name="dice" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    Number of dice:<input type="text" name="number">
      <select name="rand_limit">
        <option value="98">Side 1</option>
        <option value="54">Side 2</option>
        <option value="32">Side 3</option>
        <option value="578">Side 4</option>
        <option value="12">Side 5</option>
        <option value="64">Side 6</option>
      </select>
        <div class="buttons">
          <br />
          <input type="submit" name="submit" value="Calculate" />
          <input type="submit" name="reset"  value="Reset" />
        </div>
      <br /><br /><br /><br />

      <h2>Results</h2>
      <?php
      date_default_timezone_set('America/Chicago');

        $RAND_ARR = array();

        if(isset($_POST['number']) && isset($_POST['rand_limit'])){
          $NUMBER = $_POST['number'];
          $RAND_LIMIT = $_POST['rand_limit'];

          // create array of random numbers
          for($i = 0; $i <= $NUMBER; $i++){
            $RAND_NUM = rand(1, $RAND_LIMIT);
            array_push($RAND_ARR, $RAND_NUM);
          }

          print('Number of dice rolled: '.'<b>'.$NUMBER.'</b>'.'<br />');

          // print out random dice rolls
          foreach($RAND_ARR as $ROLL){
            print('This roll resulted in: '.$ROLL.'<br />');
            $TOTAL += $ROLL;
          }
          print('Total numbers: '.$TOTAL.'<br />');
        }
        print('Date ran: '.date('d-m-Y').' at '.date('h:i:sa'));
       ?>
  </form>
  </body>
</html>
