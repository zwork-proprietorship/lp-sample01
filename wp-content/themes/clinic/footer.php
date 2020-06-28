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
    <div id="footerWrapper">
        <div id="footer">
            <div id="footerMenu" class="clearFix">
                <!-- ナビゲーション ここから -->
                <ul>
                    <li><a href="index.html">トップページ</a></li>
                    <li><a href="clinic.html">医院紹介</a></li>
                    <li><a href="service.html">診療案内</a></li>
                    <li><a href="staff.html">院長・スタッフ紹介</a></li>
                    <li><a href="access.html">アクセス</a></li>
                </ul>
                <!-- ナビゲーション ここまで -->
            </div>

            <div class="footerAddress">
                <!-- 医院情報（フッター） ここから -->
                <strong>デンタル クリニック</strong>
                <span>青森県青森市架空町1-1-1</span>
                <span>TEL: 017-711-1111</span>
                <!-- 医院情報（フッター） ここまで -->
            </div>

            <!-- コピーライト ここから -->
            <p class="copyright">Copyright 2020 zworks,LTD All Rights Reserved.</p>
            <!-- コピーライト ここまで -->
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>