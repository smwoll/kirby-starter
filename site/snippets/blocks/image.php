<?php

/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  Block snippets control the HTML for individual blocks
  in the blocks field. This image snippet overwrites
  Kirby's default image block to add custom classes
  and data attributes.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/

$src = null;

if ($block->location()->value() === 'web') {
    $alt = $block->alt();
    $src = $block->src();
} else if ($image = $block->image()->toFile()) {
    $alt = $block->alt()->or($image->alt());
    $src = $image->url();
    $contain = $block->crop()->isFalse();
    $srcset = $image->srcset();
    $sizes = '(min-width: 900px) 50vw, 100vw';
}

?>
<?php if ($src): ?>
<figure>
  <?php snippet('image', [
    'alt'      => $alt,
    'contain'  => $contain,
    'lightbox' => $block->link()->isEmpty(),
    'href'     => $block->link()->or($src),
    'src'      => $src,
    'ratio'    => $block->ratio()->or('auto'),
    'srcset'   => $srcset,
    'sizes'    => $sizes,
    'loading'  => 'lazy'
  ]) ?>

  <?php if ($block->caption()->isNotEmpty()): ?>
  <figcaption class="img-caption">
    <?= $block->caption() ?>
  </figcaption>
  <?php endif ?>
</figure>
<?php endif ?>
