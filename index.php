<?php include "includes/start.php"; $title="🕹️🎮👾"; include "includes/header.php" ?>
    <div>
      <?php include "db.php";$num=count($games);$a=0;
  while($a+1 <= $num){
    echo '<a href="info.php?id='.$games[$a][0].'"><span class="mini" title="'.$games[$a][2].'"><img src="'.$games[$a][5].'" /></span></a>';
    $a++;
  } ?><a href="random.php"><span class="mini" title="Random"><img src="<?php echo $img ?>random.jpg" /></span></a>
    </div>
  </body>
</html>