<?php
get_header('header.php');
?>
<h1 class="bg-red-500">page content</h1>
<?php while (have_posts()) {
  the_post();
?>

  <a href="<?php the_permalink() ?>" class="bg-red-500; "><?php the_title(); ?></a>

<?php
} ?>
<?php
get_footer()

?>