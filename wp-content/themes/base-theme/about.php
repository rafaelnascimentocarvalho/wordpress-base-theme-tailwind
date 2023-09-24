<?php

/*
Template Name: About
*/

get_header();

?>
<section class="bg-slate-300 pt-10">
  <div class="container-medium py-24">
    <div class="text-center">
      <div>
        Home > about
      </div>
      <h1 class="text-slate-900 font-bold text-5xl">
        About
      </h1>
    </div>
  </div>
</section>

<section class="my-32">
  <div class="container-medium">
    <div class="grid md:flex gap-20 items-start justify-center">
      <div class="w-full grid gap-6">
        <h2 class="text-slate-900 font-bold text-5xl">
          Lorem ipsum dolor sit amet, consectetur adipiscing
        </h2>
        <div>
          <a href="#" class="btn bg-slate-200">dolore magna</a>
        </div>
      </div>
      <div class="w-full pt-2">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <br/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </div>
  </div>
</section>

<section class="relative overflow-hidden my-32">
  <div class="container-medium flex">
    <div class="flex gap-4 flex-nowrap">
      <div class="w-[32rem]">
        <div class="aspect-[4/3] bg-slate-200"></div>
      </div>
      <div class="w-[32rem]">
        <div class="aspect-[4/3] bg-slate-200"></div>
      </div>
      <div class="w-[32rem]">
        <div class="aspect-[4/3] bg-slate-200"></div>
      </div>
      <div class="w-[32rem]">
        <div class="aspect-[4/3] bg-slate-200"></div>
      </div>
    </div>
  </div>
</section>

<section class="my-32">
  <div class="container-medium">
    <div class="mx-auto max-w-[32rem]">
      <h2 class="text-slate-900 font-bold text-5xl">
        Lorem ipsum dolor sit amet, consectetur adipiscing
      </h2>
      <br />
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <br/>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
  </div>
</section>

<section class="py-32 bg-slate-900">
  <div class="container-medium">
    <div class="mx-auto max-w-[32rem]  grid text-center gap-6">
      <h2 class="text-white font-bold text-4xl">
        Lorem ipsum dolor sit amet, consectetur adipiscing
      </h2>
      <div class="text-white">
        Lorem ipsum dolor sit amet, consectetur adipiscing.
      </div>
      <div>
        <a href="#" class="btn bg-slate-200">dolore magna</a>
      </div>
    </div>
  </div>
</section>

<section class="my-32">
  <div class="container-medium grid gap-8">
    <div class="grid gap-2 text-center">
      <div>
        Lorem ipsum dolor
      </div>
      <h4 class="text-slate-900 font-bold text-4xl">
        Consectetur adipiscing
      </h4>
    </div>
    <div class="grid grid-cols-4 gap-4 pt-4">
      <?php foreach ([1,2,3,4] as $key => $value): ?>
        <div class="">
          <a href="#">
            <div class="aspect-[3/4] bg-slate-400"></div>
          </a>
          <div class="grid gap-1 pt-2">
            <div class="text-slate-400">
              UX designer
            </div>
            <a href="#">
              <h3 class="font-semibold text-slate-900 text-xl">
                Rafael Nascimento
              </h3>
            </a>
            <div class="text-sm text-slate-400">
              instagram / behance / github
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="my-32">
  <div class="container-medium">
    <div class="max-w-[48rem] grid gap-6">
      <h3 class="text-slate-900 font-bold text-5xl">
        Lorem ipsum dolor sit amet, consectetur adipiscing
      </h3>
      <div>
        <a href="#" class="btn bg-slate-200">dolore magna</a>
      </div>
    </div>  
    <div class="grid grid-cols-5 gap-4 pt-16">
      <?php foreach ([1,2,3,4,5] as $key => $value): ?>
        <div class="">
          <a href="#">
            <div class="aspect-[4/3] bg-slate-400"></div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-32 bg-slate-900">
  <div class="container-medium">
    <div class="mx-auto max-w-[56rem]">
      <div class="text-white">
        Lorem ipsum dolor sit amet
      </div>
      <h4 class="text-white font-bold pb-8 text-[5rem] leading-none">
        Lorem ipsum dolor sit amet, consectetur adipiscing
      </h4>
      <div>
        <a href="#" class="btn bg-slate-200">dolore magna</a>
      </div>
    </div>
  </div>
</section>

<?php

get_footer();

?>