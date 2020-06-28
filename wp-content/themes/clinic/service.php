<!--
Template Name: 業務内容
-->

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- ページタイトル ここから -->
		<title>診療案内｜Dental Clinic</title>
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
					<div class="panList"><a href="index.html">トップページ</a> &gt; 診療案内</div>
					<!-- パンくずリスト ここまで -->

					<div id="main">
						<!-- ページ見出し ここから -->
						<h2 class="pageTitle">診療案内</h2>
						<!-- ページ見出し ここまで -->

						<div class="inner">
							<!-- 診療案内見出し ここから -->
							<h3 class="subMidashi"><span class="midashiText">一般歯科</span></h3>
							<!-- 診療案内見出し ここまで -->

							<!-- 診療案内本文 ここから -->
							<div class="businessItem clearFix">
								<h3 id="menu01">虫歯治療</h3>

								<p>「削らない・抜かない」治療を基本としています。<br />虫歯の進行の度合いを見極め、歯を残すこと・虫歯の予防を第一に治療します。</p>
							</div>
							<!-- 診療案内本文 ここまで -->

							<div class="businessItem clearFix">
								<h3 id="menu02">歯周病治療</h3>

								<p>歯周病の治療は進行具合によって、歯石を除去する治療と、悪くなった歯茎・溶けた骨を改善する治療に分けられます。<br />治療が完了しても家庭でのケア（歯磨き等）と、歯科医院での継続的な治療、その両方が必要です。<br />治療内容によって保険治療が適応できる部分と、自由診療になる部分があります。</p>
							</div>

							<div class="businessItem clearFix">
								<h3 id="menu03">入れ歯</h3>

								<p>自然な見た目、違和感のない付け心地の入れ歯をお作りします。<br />総入れ歯・部分入れ歯のご相談承ります。</p>
							</div>

							<div class="businessItem clearFix">
								<h3 id="menu04">予防歯科</h3>

								<p>昔は「虫歯になったら歯医者さんにまかせておけばよい」といった考え方が主流でしたが、昨今は「予防」の時代に移行しつつあります。<br />虫歯は正しい知識を身に付け、きちんとした予防を行えば防ぐことができる病気です。<br />定期健診や普段の歯磨きのアドバイスなど、予防するという医療を推進しています。</p>
							</div>
						</div>

						<div class="inner">
							<h3 class="subMidashi"><span class="midashiText">審美歯科</span></h3>

							<div class="businessItem clearFix">
								<h3 id="menu05">ホワイトニング</h3>

								<p>週に1回20分程度専用トレーでホワイトニング剤を塗布し、歯を白くして行きます。<br />ご家庭でできる、ホームホワイトニングの指導も行っています。</p>
							</div>

							<div class="businessItem clearFix">
								<h3 id="menu06">オールセラミック</h3>

								<p>オールセラミックは、被せ物や差し歯の素材が全てセラミック材料（陶器材料）で出来ているものを使用する歯科治療です。<br />金属類を使用する治療法と違って、全て光を透すセラミック材料で出来ているので、天然の歯に近い透明感ある仕上がりになります。</p>
							</div>

							<div class="businessItem clearFix">
								<h3 id="menu07">セラミックインレー</h3>

								<p>保険診療で治療された銀歯が気になられる方や、むし歯や詰めものが取れたのを機に白い詰め物を希望される方への治療法です。</p>
							</div>

							<div class="businessItem clearFix">
								<h3 id="menu08">PMTC</h3>

								<p>PMTCとは、『Professional Mechanical Tooth Cleaning』の略で、歯科医師や歯科衛生士が特別な器具を使い、普段の歯磨きでは取りきれない歯の汚れを除去し、きれいにすることです。<br />歯の表面に付着したステイン（お茶やタバコなどの着色汚れ）も落とすことができますので、歯の着色が気になる方にもオススメです。</p>
							</div>
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
