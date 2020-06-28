<!DOCTYPE html>
<html lang="ja">
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- ページタイトル ここから -->
		<title>Dental Clinic</title>
		<!-- ページタイトル ここまで -->
		<meta name="description" content=""/>
		<meta name="keyword" content=""/>
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> 
        <?php wp_head(); ?>
	</head>
<body>
    
    <div id="headerWrapper">
        <div id="header">
            <!-- ロゴ画像 ここから -->
            <h1 class="siteTitle"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/siteTitle.png" alt="Dental Clinic" /></a></h1>
            <!-- ロゴ画像 ここまで -->

            <!-- キャッチコピー ここから -->
            <div class="description">“地域に根付いた歯科医院” デンタル クリニック</div>
            <!-- キャッチコピー ここまで -->

            <div class="headerAddress">
                <!-- 医院情報（ヘッダー） ここから -->
                <p class="tel">017-711-1111</p>
                <p class="time">予約受付時間 10:00～19:30 <span class="hot">日祝 休診</span></p>
                <!-- 医院情報（ヘッダー） ここまで -->
            </div>

            <div class="navi">
                <!-- ナビゲーション ここから -->
                <ul>
                    <li><a href="http://test.local/index.html" class="first"><span class="titleJa">トップページ</span><span class="titleEn">HOME</span></a></li>
                    <li><a href="http://test.local/clinic"><span class="titleJa">医院紹介</span><span class="titleEn">CLINIC</span></a></li>
                    <li><a href="http://test.local/service"><span class="titleJa">診療案内</span><span class="titleEn">SERVICE</span></a></li>
                    <li><a href="http://test.local/staff" ><span class="titleJa">院長・スタッフ紹介</span><span class="titleEn">STAFF</span></a></li>
                    <li><a href="http://test.local/access" class="last"><span class="titleJa">アクセス</span><span class="titleEn">ACCESS</span></a></li>
                </ul>
                <!-- ナビゲーション ここまで -->
            </div>
        </div>
    </div>
</body>
</html>