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

<?php 
// 不要なliクラスを消す
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
 
function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var,  array( 'current-menu-item' , 'gnav-item') ) : '';
}
?>