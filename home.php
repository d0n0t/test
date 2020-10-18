<?php

$data=https://bitdash-a.akamaihd.net/content/MI201109210084_1/m3u8s/f08e80da-bf1d-4e3d-8899-f0f6155f6efa.m3u8;
  
$encrypt_a=(($data*3245336234*473647)/945787);
 
$link = "player.php?vid=".urlencode(base64_encode($encrypt_a);
  
foreach (_$GET as $key=> $data)

$data2=$_GET[$key] = base64_decode(urldecode($data)) ;

echo $encrypt_b=((($data2*945787)/473647)/3245336234);
}
?>
<html>
<a href="<?=$link?>" target="_blank">Episode 3</a>

</html>


