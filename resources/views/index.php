  <h1>FizzBuzz問題</h1>
  <form action="" method="get">
    <p>FizzNum:<input type="text" name='fizznum' placeholder='整数値を入力してください'></p>
    <p>BuzzNum:<input type="text" name='buzznum' placeholder='整数値を入力してください'></p>
    <input type="submit" name='submit' value="実行">
  </form>
  <p>【出力】</p>
  <?php 
    if (isset($_GET['submit'])) {
      $fizznum = $_GET['fizznum'];
      $buzznum = $_GET['buzznum'];
      $messeage = '整数値を入力してください';

      if (ctype_digit($fizznum) || ctype_digit($buzznum)) {
        for($i=1; $i < 100; $i++) {
          if($i % $fizznum === 0 && $i % $buzznum === 0 ) {
            echo '<br>' . "FizzBuzz " . $i . PHP_EOL;
          } elseif($i % $fizznum === 0) {
            echo '<br>' . "Fizz " . $i . PHP_EOL;
          } elseif($i % $buzznum === 0) {
            echo '<br>' . "Buzz " .$i . PHP_EOL;
          }
        }
      } else {
        echo $messeage . PHP_EOL;
      }
    } 
  ?>