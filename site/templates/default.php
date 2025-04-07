<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php snippet('header') ?>
 <main class="main">

 <div class="home-gallery">
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

  <h2 class="home-welcome">
  Welcome to the Mental Health Blog – a safe space where mental health matters.
  </h2>

 <p class="home-welcome-paragraph">We’re so glad you're here. Whether you’re seeking guidance, inspiration, or just a moment of understanding, this blog is a place where we prioritize mental well-being in all its forms. Here, you'll find practical tips, personal stories, resources, and tools to help you navigate life’s challenges with more ease and confidence.

Take a deep breath, you’re not alone in this journey. Let’s explore together how we can care for our minds as much as we care for our bodies.</p>

<h2 class="mission">
        Mission
      </h2>
  <div class="section-div">
  
    <section class="section-1">
    <h3 class="h3">
        1. Destigmatize
      </h3>
      <p class="p">We aim to destigmatize conversations around mental health and provide accessible, reliable, and practical resources to empower individuals on their journey toward healing and happiness.</p>
    </section>

    <section class="section-2">
      <h3 class="h3">
        2. Support
      </h3>
      <p class="p">We believe that mental health is just as important as physical health, and everyone deserves the support and tools to thrive. </p>
    </section>

    <section class="section-3">
      <h3 class="h3">
        3. kindness
      </h3>
      <p class="p">Our goal is to foster an environment of kindness, where you can explore your mental health at your own pace, share experiences, and find hope and connection along the way.</p>
    </section>
  </div>
 </main>

 <?php snippet('footer') ?>
</body>
</html>
