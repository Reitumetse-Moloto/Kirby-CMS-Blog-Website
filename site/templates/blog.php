<?php snippet('header') ?>
 <main class="main">
  <article>

  <div class="blog-layout">
  <div class="blog-gallery">
    <ul>
      <?php foreach ($page->images() as $image): ?>
      <li>
        <a href="<?= $image->url() ?>">
          <?= $image->resize(1000, 1000)?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
    </div>
    <h1 class="blog-title"><?= $page->title() ?></h1>
    <div class="blog-info">
    <?php if ($page->text()->isNotEmpty()): ?>
      <div class="blog-text">
      <?= $page->text() ?>
      </div>
      <?php endif ?>

      <div class="blog-paragraphs">
  <p><?= $page->blog() ?></p>
</div>

    <dl>
    <?php if ($page->date()->isNotEmpty()): ?>
      <dt>Author:</dt>
      <dd><?= $page->author() ?></dd>
      <?php endif ?>

    </dl>
    <button class="button" id="goBackButton" >
  <
 </button>
    </div>
  </div>
  
</article>

 </main>

 <?php snippet('footer') ?>

 <script>
  document.getElementById('goBackButton').addEventListener('click', function() {
    window.history.back(); 
  });
</script>