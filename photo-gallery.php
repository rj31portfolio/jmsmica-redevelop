<?php
// Page-specific SEO: edit these values for this page.
$pageTitle = 'Photo & Video Gallery | JMSMICA';
$metaDescription = 'Browse photos and videos from JMSMICA Enterprises for a closer look at our industrial minerals and operations.';
$metaKeywords = 'Photo Gallery, Video Gallery, JMSMICA Enterprises, industrial minerals';
require __DIR__ . '/include/header.php';

// Include new uploads automatically while keeping the original gallery intact.
function galleryMediaFiles(string $directory, array $extensions): array
{
    $files = glob(__DIR__ . '/' . $directory . '/*') ?: [];
    $files = array_filter($files, static function ($file) use ($extensions) {
        return is_file($file) && in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), $extensions, true);
    });
    natsort($files);
    return array_map(static function ($file) use ($directory) {
        return $directory . '/' . rawurlencode(basename($file));
    }, array_values($files));
}
$additionalImages = galleryMediaFiles('images/Gallery', ['jpg', 'jpeg', 'png', 'webp', 'gif', 'avif']);
$galleryVideos = galleryMediaFiles('images/video', ['mp4', 'webm', 'ogv']);
?>
<section class="page-title" style="background-image:url(images/blog1.jpg)">
  <div class="auto-container">
    <ul class="page-breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Photo &amp; Video Gallery</li>
    </ul>
    <h1>Photo &amp; Video Gallery</h1>
        <?php require __DIR__ . '/include/page-intro.php'; ?>
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
      $originalImageCount = count($galleryImages);
      $galleryImages = array_merge(array_map(static function ($filename) {
          return 'images/upload/gallery/banner/' . $filename;
      }, $galleryImages), $additionalImages);
      foreach ($galleryImages as $index => $imagePath):
          $caption = $index < $originalImageCount
              ? ($index < 8 ? 'Mineral sample ' . ($index + 1) : 'At our facilities ' . ($index - 7))
              : 'JMSMICA gallery photo ' . ($index - $originalImageCount + 1);
      ?>
      <figure class="gallery-item">
        <a class="popup_image" href="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8') ?>"
           aria-label="View <?= htmlspecialchars($caption, ENT_QUOTES, 'UTF-8') ?> in full size">
          <img src="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8') ?>"
               alt="<?= htmlspecialchars($caption, ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async">
          <span class="gallery-zoom" aria-hidden="true"><span class="fa fa-search-plus"></span></span>
        </a>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if ($galleryVideos): ?>
<section class="gallery1 video-gallery" aria-labelledby="video-gallery-heading">
  <div class="auto-container">
    <div class="section-heading">
      <span class="section-eyebrow">Watch and explore</span>
      <h2 id="video-gallery-heading">Our Video Gallery</h2>
      <p>Take a closer look at JMSMICA. Use the player controls to watch any video.</p>
    </div>
    <div class="video-gallery-grid">
      <?php foreach ($galleryVideos as $index => $videoPath):
          $videoTitle = 'JMSMICA video ' . ($index + 1);
          $videoType = ['mp4' => 'video/mp4', 'webm' => 'video/webm', 'ogv' => 'video/ogg'][strtolower(pathinfo($videoPath, PATHINFO_EXTENSION))];
      ?>
      <figure class="video-gallery-item">
        <video controls playsinline preload="metadata" aria-label="<?= htmlspecialchars($videoTitle, ENT_QUOTES, 'UTF-8') ?>">
          <source src="<?= htmlspecialchars($videoPath, ENT_QUOTES, 'UTF-8') ?>" type="<?= $videoType ?>">
          Your browser does not support embedded video.
          <a href="<?= htmlspecialchars($videoPath, ENT_QUOTES, 'UTF-8') ?>">Download <?= htmlspecialchars($videoTitle, ENT_QUOTES, 'UTF-8') ?></a>.
        </video>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php require __DIR__ . '/include/footer.php'; ?>
