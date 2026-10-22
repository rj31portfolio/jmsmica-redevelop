<?php
// Page-specific SEO: edit these values for this page.
$pageTitle = 'Photo Gallery | JMSMICA';
$metaDescription = 'Browse the JMSMICA Enterprises photo gallery for a closer look at our industrial minerals and operations.';
$metaKeywords = 'Photo Gallery, JMSMICA Enterprises, industrial minerals';
require __DIR__ . '/include/header.php';
?>
<section class="page-title" style="background-image:url(images/blog1.jpg)">
  <div class="auto-container">
    <ul class="page-breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Photo Gallery</li>
    </ul>
    <h1>Photo Gallery</h1>
  </div>
</section>
<section class="gallery1 photo-gallery" aria-labelledby="gallery-heading">
  <div class="auto-container">
    <div class="section-heading">
      <span class="section-eyebrow">A closer look</span>
      <h2 id="gallery-heading">Our Photo Gallery</h2>
      <p>Explore our minerals and facilities. Select any photo to view it in full.</p>
    </div>
    <div class="photo-gallery-grid zoom-gallery">
      <?php
      $galleryImages = [
          '1696834749.jpg',
          '1696834755.jpg',
          '1696834762.jpg',
          '1696834769.jpg',
          '1696834775.jpg',
          '1696834782.jpg',
          '1696834788.jpg',
          '1696834797.jpg',
          '1734349613.jpg',
          '1734349641.jpg',
          '1734349650.jpg',
          '1734349660.jpg',
          '1734349938.jpg',
          '1734349962.jpg',
          '1734349979.jpg',
          '1734350333.jpg',
          '1734350400.jpg',
          '1734350423.jpg'
      ];
      foreach ($galleryImages as $index => $filename):
          $imagePath = 'images/upload/gallery/banner/' . $filename;
          $caption = $index < 8 ? 'Mineral sample ' . ($index + 1) : 'At our facilities ' . ($index - 7);
      ?>
      <figure class="gallery-item">
        <a class="popup_image" href="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8') ?>"
           aria-label="View <?= htmlspecialchars($caption, ENT_QUOTES, 'UTF-8') ?> in full size">
          <img src="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8') ?>"
               alt="<?= htmlspecialchars($caption, ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async">
          <span class="gallery-zoom" aria-hidden="true"><span class="fa fa-search-plus"></span></span>
        </a>
        <figcaption><?= htmlspecialchars($caption, ENT_QUOTES, 'UTF-8') ?></figcaption>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/include/footer.php'; ?>