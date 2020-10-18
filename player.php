<?php

$data=34;

$encrypt_a=(($data*3245336234*473647)/945787);

$link = "player.php?vid=".urlencode(base64_encode($encrypt_a);

foreach (_$GET as $key=> $data)

$data2=$_GET[$key] = base64_decode(urldecode($data)) ;

echo $encrypt_b=((($data2*945787)/473647)/3245336234);
}
?>
<title>PHOTOCALL.TV - Streaming</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body style="margin:0">
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<div id="player"></div>
<script>var player = new Clappr.Player({
source: "<?php echo $_GET['vid'] ?>",
mimeType: "application/x-mpegURL",
plugins: [LevelSelector, ChromecastPlugin],
parentId: "#player",
height: "100%",
width: "100%",
autoPlay: true,
});
</script>
</body>
