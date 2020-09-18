<header>
  <?php
  if (is_singular()) {
    the_title('<h1 class="entry-title">', '</h1>');
  } else {
    the_title('<h2 class="entry-title">', '</h2>');
  }
  ?>
</header>
