■リンク系
<?php get_header(); ?>
<?php get_footer(); ?>

<?php wp_head(); ?>
<?php wp_footer(); ?>


ディレクトリ取得
<?php echo get_template_directory_uri() ?>

ドメイン取得
<?php echo esc_url(home_url('/')); ?>

カスタムフィールド
<?php the_field('ct-rabel'); ?>

固定ページへリンク
<?php echo home_url('/about'); ?>

タイトル
<?php the_title(); ?>

日付
<?php the_time('Y.m.d'); ?>

ページャー
<nav class=pagination>
  <ul class=page-numbers><?php wp_pagenavi(); ?></ul>
</nav>


■メインループ
<?php
//ループ開始
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 1,
  'category_name' => 'news',
  'post__not_in' => get_option('sticky_posts'),//固定投稿は含めない
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
  while ($the_query->have_posts()) : $the_query->the_post();
?>
ここにコンテンツ
<?php
//ループ終了
  endwhile;
endif;
wp_reset_postdata();
?>

■固定投稿を取得するループ
<?php
//ループ開始
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 1,
  'category_name' => 'news',
  'post__in' => get_option('sticky_posts'),//固定投稿は含めない
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
  while ($the_query->have_posts()) : $the_query->the_post();
?>
ここにコンテンツ
<?php
//ループ終了
  endwhile;
endif;
wp_reset_postdata();
?>