<footer class="bg-slate-200 py-20">
  <div class="container-medium grid grid-cols-2 gap-10">
    <div class="">
      <h2 class="text-slate-900 font-bold text-5xl">
        Lorem ipsum dolor sit amet, consectetur adipiscing
      </h2> 
    </div>
    <div class="grid grid-cols-2 gap-4 md:gap-8 pt-2">
      <?php dynamic_sidebar('FooterWidget'); ?>
    </div>
  </div>
</footer>
<?php

  wp_footer();

?>
</body>
</html>
