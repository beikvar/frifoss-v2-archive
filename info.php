<?php if(isset($_GET["id"])){
  include "db.php";
  $num=count($games);
  $a=0;
  while($a+1 <= $num){
    if($games[$a][0]==$_GET["id"]){ $displayed=1;include "includes/start.php";$title=$games[$a][2];include "includes/header.php"; ?>
    <div>
      <img id="preimg" src="<?php echo $games[$a][6] ?>" />
      <h1><?php echo $games[$a][2] ?></h1>
      <p>por <?php echo '<a style="text-decoration:none" href="https://github.com/'.$games[$a][1].'" target="_blank">'.$games[$a][1].'</a>' ?></p>
      <p><a href="play.php?id=<?php echo $games[$a][0]; ?>"><button style="font-size:15px"><i class="fa fa-play-circle" aria-hidden="true"></i> <?php echo L::buttons_play ?></button></a> <a href="<?php echo $games[$a][4] ?>"><button style="font-size:15px"><i class="fa fa-cloud-download" aria-hidden="true"></i> <?php echo L::buttons_download ?></button></a> <a href="https://github.com/<?php echo $games[$a][1]."/".$games[$a][0]; ?>"><button style="font-size:15px"><i class="fa fa-code-fork" aria-hidden="true"></i> <?php echo L::buttons_source ?></button></a></p>
      <p><?php echo $games[$a][3] ?></p>
    </div>
  </body>
</html>
<?php
    }
    $a++;
  }
  if(isset($displayed)!=true){header("location: /");}
}else{header("location: /");} ?>