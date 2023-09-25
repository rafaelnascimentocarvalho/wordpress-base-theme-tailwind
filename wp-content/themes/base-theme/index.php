<?php

get_header();

?>
<section class="">
  <div class="container-medium py-24">
    <div class="text-center py-10">
      <div>
        Home > Blog
      </div>
      <h1 class="text-slate-900 font-bold text-5xl">
        Blog
      </h1>
    </div>
    <form class="w-full mx-auto max-w-[56rem] flex gap-3" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="w-fit pr-3">
        <button type="button" class="h-full p-2 whitespace-nowrap">Categorias #</button>
      </div>
      <div class="w-full">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="w-full border rounded p-4 form-control" placeholder="Ex: Lorem, ipsum, vitae" >
      </div>
      <div class="w-fit">
        <button class="bg-slate-200 h-full px-4">Buscar</button>
      </div>
    </form>
  </div>
</section>

<section class="pb-24">
    <div class="container-medium">
        <div class="grid gap-x-4 gap-y-24 grid-cols-3">
            <?php

                if (have_posts()) :
                    while (have_posts()) :
                        the_post();

                        render('components/layout/post-item');
                    endwhile;
                else :
                    echo "";
                endif;

            ?>
        </div>
    </div>
</section>
<?php

get_footer();

?>
