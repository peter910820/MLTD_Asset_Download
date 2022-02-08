<?php
class getList{

    function get_list(){
        
        $file = fopen("https://api.matsurihi.me/mltd/v1/version/assets","rb");
        $content = "";

        while (!feof($file)) {
            $content .= fread($file, 500000);
        }

        fclose($file);
        $list = array();
        $content = json_decode($content,true);
        $version = $content[count($content)-1]['version'];
        $indexName = $content[count($content)-1]['indexName'];
        array_push($list, $version, $indexName);
        return $list;
    }

    function download_assets($fileroute){
        $url = "https://td-assets.bn765.com/296340/production/2018/Android/$fileroute";
        $file = fopen($url, "rb");
        $unity3D = "";
        while (!feof($file)) {
            $unity3D .= fread($file, 10000);
        }
        fclose($file);
        $path = "./file";
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $fileD = fopen("file/$fileroute", "ab");  
        fwrite($fileD, $unity3D);
        fclose($fileD);
    }

    function show($filename){
        echo "download... $filename\n";
    }
}