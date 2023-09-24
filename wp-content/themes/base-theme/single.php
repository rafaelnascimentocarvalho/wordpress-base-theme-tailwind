<?php

get_header();

  if (have_posts()) :
      while (have_posts()) :
          the_post();
          ?>
            <section class="pt-10">
                <div class="container-medium grid gap-16 py-24">
                    <div class="text-center">
                        <div>
                            Home > Blog
                        </div>
                        <h1 class="text-slate-900 font-bold text-5xl mb-4">
                            <?= the_title() ?>
                        </h1>
                        <div class="flex gap-2 justify-center text-slate-400">
                            <div class="">
                                10 de outubro de 2023,
                            </div>
                            <div class="">
                                por Rafael Nascimento | 
                            </div>
                            <div class="">
                                <a>consectetur</a> / <a>adipiscing</a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-[72rem] mx-auto w-full">
                        <div class="aspect-[21/9] bg-slate-100"></div>
                    </div>
                    <div class="max-w-[48rem] mx-auto md:text-lg">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
            <div class="container-medium">
                <hr clss="bg-slate-900" />
            </div>
            <section class="my-32">
                <div class="container-medium grid gap-8">
                    <div class="grid md:flex gap-20 items-end justify-center">
                    <div class="w-full grid gap-6">
                        <h2 class="text-slate-900 font-bold text-3xl">
                            Consectetur adipiscing
                        </h2>
                    </div>
                    <div class="w-fit">
                        <a href="#" class="font-semibold whitespace-nowrap">dolore magna</a>
                    </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                    <?php foreach ([1,2,3,4] as $key => $value): ?>
                        <div class="">
                        <a href="#">
                            <div class="aspect-[4/3] bg-slate-400"></div>
                        </a>
                        <div class="grid gap-1 pt-2">
                            <div class="text-slate-400">
                            <a>consectetur</a> / <a>adipiscing</a>
                            </div>
                            <a href="#">
                            <h3 class="font-semibold text-slate-900 text-xl">
                                Lorem ipsum dolor sit amet, consectetur adipiscing.
                            </h3>
                            </a>
                            <div class="text-sm text-slate-400">
                            10 de outubro de 2023
                            </div>
                        </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
                </section>
          <?php
      endwhile;
  else :
      echo "";
  endif;
      
get_footer();

?>
