<?php get_header(); ?>
    <section class="page-fv">
        <div class="page-fv__inner">
            <h2 class="page-fv__heading">
                <span class="page-fv__heading-main">Contact</span>
                <span class="page-fv__heading-sub">お問い合わせ</span>
            </h2>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/contact_fv.jpg")) ?>" alt="" class="page-fv__img">
        </div>
    </section>
    <?php get_template_part("breadcrumb");?>
    <div class="contact-confirm">
        <div class="contact-confirm__inner">
            <p class="contact-confirm__text">入力内容をご確認ください。</p>
			<?php if (have_posts()) : ?>
				<ul>
					<?php while (have_posts()) : the_post(); ?>
						<div class="content"><?php the_content(); ?></div>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>