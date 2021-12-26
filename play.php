<?php if(isset($_GET["id"])){
  include "db.php";
  $num=count($games);
  $a=0;
  while($a+1 <= $num){
    if($games[$a][0]==$_GET["id"]){ $displayed=1;include 'includes/start.php'; ?>
<!DOCTYPE html><html lang="<?php echo L::lang ?>" dir="ltr"><head><title><?php echo L::buttons_play." ".$games[$a][2] ?> | Frifoss</title><link rel="stylesheet" href="css/player.css" /><link rel="icon" href="<?php echo $img?>icon.png" /><meta name="viewport" content="width=device-width" /></head><body><p style="text-align:left" id="back"><a href="info.php?id=<?php echo $games[$a][0] ?>" style="text-decoration:none;color:black"><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo L::buttons_go_back ?></a></p><noscript>Hey! This player needs JS to work, please enable it to play the game</noscript><div><iframe id="player" src="https://fgcdn.7ortred.repl.co/<?php echo $games[$a][1]."/".$games[$a][0]; ?>/" allow="fullscreen" width="0" height="0"></iframe><script src="js/jquery-3.6.0.min.js"></script><script>
var x = setInterval(function() {
  document.getElementById("player").width = $(window).width()-40 + "px";
  document.getElementById("player").height = $(window).height()-70 + "px";
}, 1000);
/*https://stackoverflow.com/questions/3437786/get-the-size-of-the-screen-current-web-page-and-browser-window*/
</script></div></body></html>
<?php
    }
    $a++;
  }
  if(isset($displayed)!=true){header("location: /");}
}else{header("location: /");} ?>