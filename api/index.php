<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>影视TV*内测版</title>
    <link rel="icon" type="image/png" href="http://raw.lytv.gq/影视/img/ys.jpg">
    <link href="http://raw.lytv.gq/影视/css/sweetalert2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://raw.lytv.gq/影视/css/tailwind.min.css">
    <link rel="stylesheet" href="http://raw.lytv.gq/影视/css/swiper-bundle.min.css" />
    <script src="http://raw.lytv.gq/影视/js/swiper-bundle.min.js"></script>
    <script src="http://raw.lytv.gq/影视/js/sweetalert2.all.min.js"></script>
</head>
<body class="bg-gray-200 text-gray-800">
    <!-- 导航栏 -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto flex justify-between py-4 px-8">
            <!-- 左边首页链接 -->
            <a href="/" title="正式版">
    <img src="http://raw.lytv.gq/影视/img/ys.jpg" alt="logo" class="h-6 sm:h-12 lg:h-16">
  </a>
         
            <!-- 右边导航 -->
            <div class="space-x-4">
                <a href="https://nite07.com" class="text-xl font-bold" target="_blank" title="夜哥博客*分享方便你我他">网页技术总监</a>
                <a href="https://t.me/fongmi_release" class="transition-all duration-150 text-gray-700 hover:text-blue-500" target="_blank" title="蜂蜜的影视APP与爬虫jar包发布频道">频道</a>
                
                <a href="https://t.me/fongmi_offical" class="transition-all duration-150 text-gray-700 hover:text-blue-500" target="_blank" title="蜂蜜的影视APP官方交流群">TG群</a>
                <a href="https://github.com/fongmi/tv" class="transition-all duration-150 text-gray-700 hover:text-blue-500" target="_blank" title="蜂蜜的影視APP开源仓库">仓库</a>
                <a href="http://lytv.gq" class="transition-all duration-150 text-gray-700 hover:text-blue-500" target="_blank" title="𝓛𝔂创建的短链4位随机服务">短链</a>
                <a href="https://t.me/tvb_ys" class="transition-all duration-150 text-gray-700 hover:text-blue-500" target="_blank" title="𝓛𝔂创建的影视&TVB相关频道">本站频道</a>
              <a href="http://blog.lytv.cf" class="transition-all duration-150 text-gray-700 hover:text-blue-500" target="_blank" title="𝓛𝔂的博客">博客</a>
            </div>
        </div>
    </nav>

    <!-- 容器 
        p_1="https://gh-proxy.com/https://raw.githubusercontent.com/FongMi/TV/dev/release/mobile-python-armeabi_v7a.apk"
        p_2="https://gh-proxy.com/https://raw.githubusercontent.com/FongMi/TV/dev/release/mobile-python-armeabi_v7a.apk"
        p_3="https://gh-proxy.com/https://raw.githubusercontent.com/FongMi/TV/dev/release/leanback-python-armeabi_v7a.apk"
        p_4="https://gh-proxy.com/https://raw.githubusercontent.com/FongMi/TV/dev/release/leanback-python-armeabi_v7a.apk"
        p_5="https://gh-proxy.com/https://raw.githubusercontent.com/FongMi/TV/kitkat/release/leanback.apk"
    -->
    
    <div class="container mx-auto mt-8">
        <div class="flex flex-col md:flex-row">
            <!-- 左边文字 -->
            <div class="w-full md:w-1/3 p-8 flex flex-col justify-center">
                <h2 class="text-center text-4xl font-bold mb-4">影视TV</h2>
                <p class="text-center">软件永久免费使用</p>
                <p class="text-center">支持直播视频投屏</p>
                <p class="text-center" style="font-size:17px;">
                  随机一言：<?php
$sj="https://tenapi.cn/v2/yiyan";
$xs=`curl $sj`;
echo $xs;
?>
                </p>
<div class="grid grid-cols-2 md:grid-cols-2 gap-3 mt-3">
                        
                        <a button class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="https://gh-proxy.com/https://raw.githubusercontent.com/FongMi/TV/dev/release/mobile-python-arm64_v8a.apk" target="_blank" title="64位手机python版">📱py-v8a</a>
                        
                        <a button class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="https://gh-proxy.com/https://raw.githubusercontent.com/FongMi/TV/dev/release/leanback-python-armeabi_v7a.apk" target="_blank" title="32位5.1++电视python版">📺py-v7a</a>
                    
                        <a button class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="https://gh-proxy.com/https://raw.githubusercontent.com/FongMi/TV/kitkat/release/leanback.apk" target="_blank" title="32位4.1-4.4电视python版">4.1📺py-v7a</a>
                                              <a button class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="#download" target="_blank" title="更多版本下载">更多</a>
                </div>
            </div>
          <!-- 右边展示图 -->
    <div class="w-full md:w-2/3 p-8 relative">
      <div class="swiper-container overflow-hidden">
        <div class="swiper-wrapper">
          
          <div class="swiper-slide">
            <img src="https://xhdwc.tk/fm/img/01.webp" alt="Image 3" class="w-full rounded-lg">
            <div class="carousel-caption">
              <h3 style="font-size: 17px;">这是首页</h3>
              <!-- 注释
              <p>这是一张首页图</p>
              <a href="./">Learn More</a>
              -->
            </div>
          </div>
          <div class="swiper-slide">
            <img src="https://xhdwc.tk/fm/img/02.webp" alt="Image 2" class="w-full rounded-lg">
            <div class="carousel-caption">
              <h3 style="font-size: 17px;">这是点播页</h3>
              <!-- 注释
              <p>这是一张首页图</p>
              <a href="./">Learn More</a>
              -->
            </div>
          </div>
          <div class="swiper-slide">
            <img src="https://xhdwc.tk/fm/img/03.webp" alt="Image 1" class="w-full rounded-lg">
            <div class="carousel-caption">
              <h3 style="font-size: 17px;">这是设置页</h3>
              <!-- 注释
              <p>这是一张首页图</p>
              <a href="./">Learn More</a>
              -->
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination absolute bottom-4 left-1/2 transform -translate-x-1/2"></div>
      </div>
    </div>
  </div>
</div>
   
   <div class="container mx-auto mt-8 bg-white rounded-lg border border-gray-300 p-4">
        <p>
        <h2 style="font-size:20px;font-weight: bold;">影视APP简介：</h2>
        <?php
            $tvb="http://doy.lytv.gq/影视/ysjs.txt";
            $text = `curl $tvb`; // 读取文本文件的内容
            $text = nl2br($text); // 将文本中的换行符替换为 <br> 标签
            echo $text; // 使用 echo 输出带有 <br> 标签的文本内容
            ?>  
            </p>
    </div>
   
        <!-- 接口配置卡片列表 开始-->
    <div class="container mx-auto mt-8">
    <h2 style="font-size:25px;font-weight: bold;">接口配置点击复制</h2>
        <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-5 gap-8">
             <!-- 卡片 1 -->
             <div data-config="http://饭太硬.ga/tv"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">飯總</p>
            </div>
            <!-- 卡片 2 -->
            <div data-config="https://gh.t4tv.hz.cz/newtang.bmp"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">長老</p>
            </div>
            <!-- 卡片 3 -->
            <div data-config="https://xhdwc.tk/0"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">騷零</p>
            </div>
            <!-- 卡片 4 -->
            <div data-config="http://我不是.肥猫.love:63/接口禁止贩卖"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">肥貓</p>
            </div>
            <!-- 卡片 5 -->
            <div data-config="https://ghproxy.com/raw.githubusercontent.com/gaotianliuyun/gao/master/js.json"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">高天JS</p>
            </div>
            <!-- 卡片 6 -->
            <div data-config="https://ghproxy.com/raw.githubusercontent.com/lm317379829/PyramidStore/pyramid/py.json"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">月佬</p>
            </div>
            <!-- 卡片 7 
            <div data-config="http://蜂蜜.eu.org"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">蜂蜜(国内1)</p>
                </div>
                -->
            <div data-config="https://ts--ly23.repl.co/fmtv"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">蜂蜜</p>
            </div>
            <!--
            <div data-config="https://raw.githubusercontent.com/FongMi/CatVodSpider/main/json/config.json"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://doy.lytv.gq/img/fm.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">蜂蜜(海外)</p>
            </div>
            -->
            <!-- 卡片 8 -->
            <div data-config="https://tvbox.cainisi.cf"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">菜尼絲XBPQ</p>
            </div>
            <!-- 卡片 9 -->
            <div data-config="https://ghproxy.com/raw.githubusercontent.com/gaotianliuyun/gao/master/XYQ.json"
                class="hover:bg-gray-200 transition-all duration-150 bg-white shadow rounded-lg p-4 cursor-pointer flex flex-col justify-center items-center">
                <img class="w-1/3 mx-auto rounded-lg" src="http://raw.lytv.gq/影视/img/ys.jpg" alt="Card Image" class="w-full">
                <p class="text-center mt-2">高天XYQ</p>
            </div> 
        </div>
    </div>
    <!-- 接口配置卡片列表 结束-->
    <!-- 更新日志 开始-->
    <div class="container mx-auto mt-8">
    <h2 class="text-center text-3xl font-bold my-4">最新版本更新日誌</h2>
        <div class="container mx-auto mt-8 grid grid-cols-1 md:grid-cols-5 gap-4">
    
        <p class="bg-white rounded-lg border border-gray-300 p-4">
        <?php
$tvb="https://tvb.vv67.repl.co/影视/";
$rz=$tvb . "1.json";
$js="https://raw.githubusercontent.com/fongmi/tv/release/release/mobile.json";
$str=`curl $js`;
if (json_decode($str) != null) {
    // 字符串是一个合法的JSON字符串
    $str=`curl $rz`;
    $obj = json_decode($str);
    echo '影视*手機正式版: ' . $obj->name . '<br>';
    echo nl2br($obj->desc);
} else {
    // 字符串不是一个合法的JSON字符串
    echo '蜂蜜刪庫跑路了';
}
?>
        </p>
        <p class="bg-white rounded-lg border border-gray-300 p-4">
         <?php
$tvb="https://tvb.vv67.repl.co/影视/";
$rz=$tvb . "2.json";
$js="https://raw.githubusercontent.com/fongmi/tv/dev/release/mobile.json";
$str=`curl $js`;
if (json_decode($str) != null) {
    // 字符串是一个合法的JSON字符串
    $str=`curl $rz`;
    $obj = json_decode($str);
    echo '影视*手機內測版: ' . $obj->name . '<br>';
    echo nl2br($obj->desc);
    echo "<br><br>* (当内测版版本号和正式版的一样 日志则不跟更)";
} else {
    // 字符串不是一个合法的JSON字符串
    echo '蜂蜜刪庫跑路了';
}
?>
        </p>
         <p class="bg-white rounded-lg border border-gray-300 p-4">
        <?php
$tvb="https://tvb.vv67.repl.co/影视/";
$rz=$tvb . "3.json";
$js="https://raw.githubusercontent.com/fongmi/tv/release/release/leanback.json";
$str=`curl $js`;
if (json_decode($str) != null) {
    // 字符串是一个合法的JSON字符串
    $str=`curl $rz`;
    $obj = json_decode($str);
    echo '影视*5.1++電視正式版: ' . $obj->name . '<br>';
    echo nl2br($obj->desc);
} else {
    // 字符串不是一个合法的JSON字符串
    echo '蜂蜜刪庫跑路了';
}
?>
        </p>
        <p class="bg-white rounded-lg border border-gray-300 p-4">
         <?php
$tvb="https://tvb.vv67.repl.co/影视/";
$rz=$tvb . "4.json";
$js="https://raw.githubusercontent.com/fongmi/tv/dev/release/leanback.json";
$str=`curl $js`;
if (json_decode($str) != null) {
    // 字符串是一个合法的JSON字符串
    $str=`curl $rz`;
    $obj = json_decode($str);
    echo '影视*5.1++電視內測版: ' . $obj->name . '<br>';
    echo nl2br($obj->desc);
    echo "<br><br>* (当内测版版本号和正式版的一样 日志则不跟更)";
} else {
    // 字符串不是一个合法的JSON字符串
    echo '蜂蜜刪庫跑路了';
}
?>
        </p>   
        <p class="bg-white rounded-lg border border-gray-300 p-4">
        <?php
$tvb="https://tvb.vv67.repl.co/影视/";
$rz=$tvb . "5.json";
$js="https://raw.githubusercontent.com/fongmi/tv/kitkat/release/leanback.json";
$str=`curl $js`;
if (json_decode($str) != null) {
    // 字符串是一个合法的JSON字符串
    $str=`curl $rz`;
    $obj = json_decode($str);
    echo '影视*4.1-4.4電視版: ' . $obj->name . '<br>';
    echo nl2br($obj->desc);
} else {
    // 字符串不是一个合法的JSON字符串
    echo '蜂蜜刪庫跑路了';
}
?>
        </p>
        </div>
    </div>
    <!-- 更新日志 结束-->
     <div class="container mx-auto mt-8 flex flex-col justify-center rounded-lg border-gray-300">
        <h2 class="text-center text-3xl font-bold my-4">APP功能介绍与操作说明</h2>
    </div>
    <div class="mx-auto mt-8 border bg-white rounded-lg px-4 py-5 container text-container max-h-40 overflow-y-auto">

        <?php
            $tvb="http://doy.lytv.gq/影视/ys.txt";
            $text = `curl $tvb`; // 读取文本文件的内容
            $text = nl2br($text); // 将文本中的换行符替换为 <br> 标签
            echo $text; // 使用 echo 输出带有 <br> 标签的文本内容
            ?>  
    </div>
    <!-- 下载列表 开始-->
    <div id="download" class="container mx-auto mt-8 bg-white border rounded-lg px-3 py-4">
     <div class="rounded-lg pl-2 pt-1 hover:bg-gray-200 mb-3 pb-1 border-b text-blue-400 hover:text-blue-800 transition-all duration-100 grid grid-cols-4">
    <span class="col-span-2">文件名&下载</span>
    <span class="mr-10">文件大小</span>
    <span class="col-span-1">Download</span>
     </div>
        <ul class="max-h-64 overflow-auto"></ul>
    </div>
    <!-- 下载列表 结束-->
    <footer class="mt-8 bg-white text-black p-4 text-center">
        <p>版权 @fongmi</p>
        <p>页面由 <a href="https://www.nite07.com">Nite07</a> 制作</p>
    </footer>

</body>
<!-- 音乐插件 开始-->
<script src="https://myhkw.cn/player/js/jquery.min.js" type="text/javascript"></script>
<script src="https://myhkw.cn/api/player/demo" id="myhk" key="demo" skin="player" au="1" lr="r" m="1"+></script>
<!-- 音乐插件 结束-->
<!-- 复制功能特效 -->
<script src="http://raw.lytv.gq/影视/js/copy.js"></script>
<!-- 图片轮播 -->
<script src="http://raw.lytv.gq/影视/js/img.js"></script>
<!-- 文字滚动框 -->
<script src="http://raw.lytv.gq/影视/js/gd.js"></script>
<!-- 下载列表 -->
<script src="http://raw.lytv.gq/影视/js/axios.min.js"></script>
<script src="http://raw.lytv.gq/影视/js/down.js"></script>
</html>
