<div class="home-intro" id="home">
   <?php $home_intro=get_field('home_intro'); ?>
   <?php if ($home_intro) : ?>
   <?php imgnewR($home_intro['immagine'], null, 'home-intro__img' ); ?>
   <div class="_container">

      <div class="home-intro__content">
         <h1 class="home-intro__title"><span><?php echo $home_intro['titolo']; ?></span></h1>
         <div class="home-intro__subtitle">
            <?php echo $home_intro['sottotitolo']; ?>
         </div>
      </div>

   </div>
   <?php else : ?>
   <h3>Page Home</h3>
   <?php endif; ?>
</div>