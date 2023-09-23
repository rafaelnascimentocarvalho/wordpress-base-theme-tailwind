<header class="fixed w-full top-0 left-0 bg-slate-200">
  <div class="container-medium py-3">
    <div class="flex justify-between gap-2 items-center">
      <div class="w-full max-w-[10rem] bg-slate-600">
        <div class="aspect-[21/9]"></div>
      </div>
      <div class="flex gap-8 items-center">
        <?php foreach (["Início", "Nossos trabalhos", "O que fazemos", "Ideias", "Contato"] as $item): ?>
          <div class="">
            <?= $item; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</header>





