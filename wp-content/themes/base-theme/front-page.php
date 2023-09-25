<?php

/*
Template Name: Home
*/

get_header();

$page = get_fields(get_option('page_on_front'));

?>
<section class="bg-slate-300">
  <div class="container-medium relative h-[32rem]">
    <div class="absolute left-0 bottom-0 px-4 pb-20">
      <h1 class="font-bold text-slate-900 text-[4rem]">
        <?= isset($page["main_banner"]) ? $page["main_banner"] : ""; ?>
      </h1>
    </div>
  </div>
</section>

<section class="my-32">
  <div class="container-medium">
    <div class="grid md:flex gap-20 items-center justify-center">
      <div class="w-full grid gap-6">
        <h2 class="text-slate-900 font-bold text-5xl">
          Lorem ipsum dolor sit amet, consectetur adipiscing
        </h2>
        <div>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div>
          <a href="#" class="btn bg-slate-200">dolore magna</a>
        </div>
      </div>
      <div class="w-full">
        <div class="aspect-[4/3] bg-slate-200"></div>
      </div>
    </div>
  </div>
</section>

<section class="my-32">
  <div class="container-medium">
    <div class="grid md:flex flex-row-reverse gap-20 items-center justify-center">
      <div class="w-full grid gap-6">
        <h2 class="text-slate-900 font-bold text-5xl">
          Lorem ipsum dolor sit amet, consectetur adipiscing
        </h2>
        <div>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div>
          <a href="#" class="btn bg-slate-200">dolore magna</a>
        </div>
      </div>
      <div class="w-full">
        <div class="aspect-[4/3] bg-slate-200"></div>
      </div>
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

<section class="py-14">
  <div class="container-medium">
    <div class="pb-6">
      <h3 class="text-slate-900 font-bold text-[5rem] leading-none">
        Lorem ipsum dolor sit amet, consectetur adipiscing
      </h3>
    </div>    
    <div class="grid md:flex gap-20 justify-center">
      <div class="w-full pt-4">
        <div class="pb-8 text-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
        <div>
          <a href="#" class="btn bg-slate-200">dolore magna</a>
        </div>
      </div>
      <div class="w-full grid">        
        <?php foreach ([1,2,3,4] as $key => $value): ?>        
          <div class="grid gap-1 border-b">
            <div class="flex py-4 gap-4">
              <div class="w-full">
                <h3 class="font-semibold text-slate-900 text-xl">
                  Lorem ipsum dolor sit amet, consectetur adipiscing.
                </h3>
              </div>
              <div class="w-fit font-semibold text-xl">
                +
              </div>
            </div>
            <?php if(!$key): ?>
            <div class="pb-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="my-32">
  <div class="container-medium">
    <div class="grid md:flex gap-20 justify-center">
      <div class="w-full grid gap-6">
        <h3 class="text-slate-900 font-bold text-5xl">
          Lorem ipsum dolor sit amet, consectetur adipiscing
        </h3>
        <div>
          <a href="#" class="btn bg-slate-200">dolore magna</a>
        </div>
      </div>
      <div class="w-full py-2">
        <div class="">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <br/>
        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
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