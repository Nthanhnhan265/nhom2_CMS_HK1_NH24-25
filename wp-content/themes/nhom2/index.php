<?php
get_header('header.php');
?>
<h1 class="bg-red-500">page content2</h1>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
  <?php endwhile; ?>
<?php else : ?>
  <p>No posts found.</p>
<?php endif; ?>

<?php
get_footer();
?>
<?php
get_footer()

?>