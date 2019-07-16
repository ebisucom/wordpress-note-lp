<?php
/*
Template Name: LP CUSTOM
*/
?>
<?php get_header(); ?>

<main class="mymain">

<section class="myhero">
	<h1>SPECIAL WORKING SPACE</h1>
	<p>楽しくなる滞在型ワーキングスペース</p>
	<a href="#">体験してみたい</a>
</section>

<section class="mycon">
	<h2 class="sec-title">CONCEPTS</h2>
	<p>すべてが揃う。そんな場所を目指しています。</p>

	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/lp-custom/img/con1.png" alt="">
		<h3>かんたん設定</h3>
		<p>面倒な受付手続きはスキップ。オンラインで簡単スピーディに設定できます。</p>
	</div>

	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/lp-custom/img/con2.png" alt="">
		<h3>全天候型</h3>
		<p>天気に左右されない全天候型の施設を完備。明日の天気の心配はありません。</p>
	</div>

	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/lp-custom/img/con3.png" alt="">
		<h3>飲食フリー</h3>
		<p>あちこちに飲食スペースが設けてあって一息つけます。持ち込みフードもOKです。</p>
	</div>

	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/lp-custom/img/con4.png" alt="">
		<h3>いつでも睡眠</h3>
		<p>滞在型だからこそできるのが、いつでもベッドルームに戻って寝ることです。</p>
	</div>
</section>

<section class="mypoint1">
	<p>集中的に仕事を進めることができる、<br>
	そんな環境が整っています。</p>
</section>

<section class="mynews">
	<h2 class="sec-title">LATEST NEWS</h2>
	<p>最新情報です</p>

	<?php $myposts = get_posts( array(
		'post_type' => 'post',
		'posts_per_page' => '6'
	) ); ?>
	<?php if( $myposts ):
	foreach($myposts as $post):
	setup_postdata($post); ?>

	<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">

	<?php if( has_post_thumbnail() ): ?>
	<figure>
	<?php the_post_thumbnail(); ?>
	</figure>
	<?php endif; ?>

	<h3><?php the_title(); ?></h3>

	</a>
	</article>

	<?php endforeach;
	wp_reset_postdata();
	endif; ?>

</section>

<section class="mypoint2">
	<figure>
	<img src="<?php echo get_template_directory_uri(); ?>/lp-custom/img/point2.jpg" alt="">
	</figure>
	<div>
		<p>集中的に仕事を進めて<br>オフを楽しむ</p>
		<p>近くにショッピングモールがあるのもポイントです。</p>
	</div>
</section>

<section class="mytest">
	<h2 class="sec-title">TESTIMONIALS</h2>
	<p>たくさんの方にご利用いただいています</p>

	<div class="mytest1">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/lp-custom/img/test1.jpg" alt="">
		</figure>
		<div>
			<p>その日の気分に合わせてワークスペースを選ぶことができたのでとても便利でした。</p>
			<p><strong>TANAKA HANAKO</strong>
			<br>Designer</p>
		</div>
	</div>

	<div class="mytest2">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/lp-custom/img/test2.jpg" alt="">
		</figure>
		<div>
			<p>わからないことがあっても、テクニカルアドバイザーに質問できるので安心です。</p>
			<p><strong>SUZUKI TARO</strong>
			<br>Front-end Engineer</p>
		</div>
	</div>
</section>

<section class="myaction">
	<p>日常のその先へ</p>
	<p>いつでも、お越しをお待ちしております。</p>
	<a href="#">ワークスペースを申し込む</a>
</section>

</main>

<?php get_footer(); ?>
