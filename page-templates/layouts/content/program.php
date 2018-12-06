<?php // Body paragraph content ?>
<div class="o-bodyContent">
  <div class="o-bodyContent__contentimage">
    <img class="o-bodyContent__image" src="<?php echo get_acf_image( get_field('program_content_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="o-bodyContent__content">
    <h3 class="o-bodyContent__subtitle">
    </h3>
    <h1 class="o-bodyContent__title">
      <?php the_field('program_content_title'); ?>
    </h1>
    <div class="o-bodyContent__paragraph">
      <?php the_field('program_content_text'); ?>      
    </div>
  </div>
  <div class="o-bodyContent__contentcallout">
    <div class="o-bodyContent__callouttext">
    </div>
    <div class="o-bodyContent__calloutname">
    </div>
    <div class="o-bodyContent__calloutsource">
    </div>
  </div>  
</div>
