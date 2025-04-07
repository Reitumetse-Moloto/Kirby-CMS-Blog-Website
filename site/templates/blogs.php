<?php snippet('header') ?>

<?php 

$filterBy = get('filter');

$blogs = $page
 ->children()
 ->listed()
 ->when($filterBy, function($filterBy){
  return $this->$filterBy('author', 'Revive');
 })
 ->paginate(3);

 $pagination = $blogs->pagination();
 ?>

 <main class="main">

    <h1 class="blogs-title"><?= $page->title() ?></h1>

    <ul class="blogs">
      <?php foreach ($blogs as $blog): ?>
        <li>
          <a href="<?= $blog->url() ?>">
          <figure class="blog-section">
           <?= $blog->image()->crop(500) ?>

            <figcaption class="blog-title"><?= $blog->title() ?><br>
            <small><?= $blog->author() ?></small>
            </figcaption>
            <figcaption class="blog-date"><?= $blog->date() ?></figcaption>
            <figcaption class="blog-text"><?= $blog->text() ?></figcaption>
      </figure>
          
       </a></li>
        <?php endforeach ?>
      </ul>

      <nav class="pagination">
        <?php if($pagination->hasPrevPage()): ?>
        <a href="<?= $pagination->prevPageUrl() ?>" class="prevPage">&larr;</a>
        <?php else: ?>
        <span>&larr;</span>
        <?php endif ?>

        <span>Page <?= $pagination->page() ?> of <?= $pagination->pages() ?></span>

        <?php if($pagination->hasNextPage()): ?>
        <a href="<?= $pagination->nextPageUrl() ?>" aria-label="Go to next page" class="nextPage">&rarr;</a>
        <?php else: ?>
          <span>&rarr;</span>
        <?php endif ?>
      </nav>

 </main>

 <?php snippet('footer') ?>