<?php
error_reporting(0);
// Sample示范
// 简单过滤量子非凡广告

$url = $_GET['url'];

// 这里可以做分类
$m3u8Pattern = "/RESOLUTION=1080x608\r*\n*(.*\.m3u8)/";
$tsPattern = "/(.*\.ts)/";

// 开始
if ($url <> null) {
    $content = curl_get($url);
    $p = dirname($url);
    if (preg_match($m3u8Pattern, $content, $match)) {
        $url = $p . "/" . $match[1];
        $content = curl_get($url);
    }
    $content = preg_replace("/#EXT-X-DISCONTINUITY\r*\n*#EXTINF:6.666667,[\s\S]*?#EXT-X-DISCONTINUITY/", "", $content);
    $content = preg_replace("/#EXT-X-DISCONTINUITY\r*\n*#EXTINF:6.433333,[\s\S]*?#EXT-X-DISCONTINUITY/", "", $content);
    $p = dirname($url);
    if (preg_match_all($tsPattern, $content, $matches)) {
        foreach ($matches[0] as $t) {
            $content = str_replace($t, $p . "/" . $t, $content);
        }
    }
    echo $content;
} else {
    echo "404";
}
exit();



// function
function curl_get($url)
{
    $header = [
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.54 Safari/537.36",
    ];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_ENCODING, '');
    $data = curl_exec($curl);
    if (curl_error($curl)) {
        return "Error: " . curl_error($curl);
    } else {
        curl_close($curl);
        return $data;
    }
}
