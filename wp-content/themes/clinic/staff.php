<!--
Template Name: スタッフ
-->

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- ページタイトル ここから -->
		<title>院長・スタッフ紹介｜Dental Clinic</title>
		<!-- ページタイトル ここまで -->
		<meta name="description" content=""/>
		<meta name="keyword" content=""/>
		<link rel="stylesheet" href="./css/style.css">
        <?php wp_head(); ?>
	</head>
	<body>
		<div id="wrapper">
			<?php get_header(); ?>

			<div id="contentsWrapper">
				<div id="contents" class="clearFix">
					<!-- パンくずリスト ここから -->
					<div class="panList"><a href="index.html">トップページ</a> &gt; 院長・スタッフ紹介</div>
					<!-- パンくずリスト ここまで -->

					<div id="main">
						<!-- ページ見出し ここから -->
						<h2 class="pageTitle">院長・スタッフ紹介</h2>
						<!-- ページ見出し ここまで -->

						<div class="inner">
							<!-- 院長紹介 ここから -->
							<h3 class="subMidashi"><span class="midashiText">院長紹介</span></h3>

							<div class="doctorItem clearFix">
								<div class="doctorPhoto">
									<p><img src="<?php echo get_template_directory_uri(); ?>/img/st01.jpg" alt="院長　南 敬介" /></p>
									<p class="name">院長　南 敬介</p>
								</div>

								<div class="doctorProfile">
									<h3>院長略歴</h3>

									<p>
										1990年	神奈川県立医科歯科大学 卒業<br />
										1991年	きたデンタルオフィス 勤務<br />
										1993年	西野歯科医院 勤務<br />
										1999年	東山歯科医院 勤務<br />
										2002年	デンタルクリニック 勤務<br />
										2008年	デンタルクリニック 院長に就任<br />
									</p>
								</div>
							</div>

							<h3>ご挨拶</h3>

							<p>デンタルクリニック・院長の南敬介です。</p>
							<p>先代である父から続くこの医院は、2014年で40周年を迎えます。<br />父の代から目標として掲げていたのが、”地域に根付いた歯科医院”であること。<br />約5年前から始めた、小学生以下を対象とした「こどもデンタル教室」や、3ヶ月に一度行われる地域健康デーの無料診断など、少しでも地域に貢献できればと思い、スタッフやたくさんの方々の協力を得て続けることができています。</p>
							<p>歯科治療の技術は年々進歩し続けています。<br />ですが、患者さんの中にはそんなことを全くご存知ない方だって多くいらっしゃると思います。どんな技術や治療法も、来院してお話を聞いていただけないと知ってはもらえません。<br />まずは「来院してもらう」こと。そして「知ってもらう」こと。<br />これが当院のモットーです。</p>
							<!-- 院長紹介 ここまで -->

							<!-- スタッフ紹介 ここから -->
							<h3 class="subMidashi"><span class="midashiText">スタッフ紹介</span></h3>

							<div class="businessItem clearFix">
								<p><img src="<?php echo get_template_directory_uri(); ?>/img/st02.jpg" width="600" alt="当院スタッフ" /></p>
								
								<p>医師　近藤先生<br />衛生士　芹沢先生<br />衛生士　武田先生<br />受付　沖田<br />受付　山崎</p>
							</div>
							<!-- スタッフ紹介 ここまで -->
						</div>
					</div>

					<div id="menu">
						<h2 class="menuTitle01">一般歯科</h2>

						<div class="menuList01">
							<ul>
								<li><a href="service.html#menu01">虫歯治療</a></li>
								<li><a href="service.html#menu02">歯周病治療</a></li>
								<li><a href="service.html#menu03">入れ歯</a></li>
								<li><a href="service.html#menu04">予防歯科</a></li>
							</ul>
						</div>

						<h2 class="menuTitle02">審美歯科</h2>

						<div class="menuList02">
							<ul>
								<li><a href="service.html#menu05">ホワイトニング</a></li>
								<li><a href="service.html#menu06">オールセラミック</a></li>
								<li><a href="service.html#menu07">セラミックインレー</a></li>
								<li><a href="service.html#menu08">PMTC</a></li>
							</ul>
						</div>
					</div>
				</div> 
			</div>

			<?php get_footer(); ?>
		</div>
	</body>
</html>
