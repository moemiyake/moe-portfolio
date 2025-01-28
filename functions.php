<?php 
add_action('wp_body_open', function(){
?>
<!-- (WP 教科書p.52) ここに挿入したいソースコードなどを記載 -->
<?php
}) ?>

<?php 
// <titleタグを出力する>
add_theme_support('title-tag');
?>

<?php 
// カスタムメニューを使えるようにする
 add_theme_support('menus');
 ?>

<?php 
// アイキャッチ画像を使えるようにする
 add_theme_support('post-thumbnails');
?>