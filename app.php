<?php

require __DIR__ . '/vendor/autoload.php';

use MessagePack\MessagePack;
require_once 'src/tool.php';

$getList = new getList();
$list = $getList->get_list();

$file = fopen("https://td-assets.bn765.com/".$list[0]."/production/2018/Android/".$list[1],"rb");
$content = "";

while (!feof($file)) {
    $content .= fread($file, 500000);
}
fclose($file);
$text = MessagePack::unpack($content);
foreach($text[0] as $filename => $f){
    $getList->show($filename);
    $getList->download_assets($list[0],$f[1]);
}