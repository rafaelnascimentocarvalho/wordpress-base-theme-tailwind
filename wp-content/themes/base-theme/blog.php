<?php

/*
Template Name: Blog
*/

get_header();

?>
<section class="pt-10">
  <div class="container-medium py-24">
    <div class="text-center pb-10">
      <div>
        Home > Blog
      </div>
      <h1 class="text-slate-900 font-bold text-5xl">
        Blog
      </h1>
    </div>
    <div class="w-full mx-auto max-w-[56rem] flex gap-3">
      <div class="w-fit pr-3">
        <button class="h-full p-2 whitespace-nowrap">Categorias #</button>
      </div>
      <div class="w-full">
        <input class="w-full border rounded p-4 form-control" placeholder="Ex: Lorem, ipsum, vitae" />
      </div>
      <div class="w-fit">
        <button class="bg-slate-200 h-full px-4">Buscar</button>
      </div>
    </div>
  </div>
</section>

<section class="pb-24">
  <div class="container-medium">
    <div class="grid gap-x-4 gap-y-24 grid-cols-3">
      <?php foreach([1,2,3,4,5,6,7,8,9,10,11,12] as $post): ?>
        <div class="">
          <a href="#">
            <div class="aspect-[4/3] bg-slate-400"></div>
          </a>
          <div class="grid gap-1 pt-2">
            <div class="text-slate-400">
              <a>consectetur</a> / <a>adipiscing</a>
            </div>
            <a href="#">
              <h3 class="font-semibold text-slate-900 text-xl pr-4">
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

get_footer();

?>