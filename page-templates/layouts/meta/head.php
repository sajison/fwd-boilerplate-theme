<?php
/**
 * Metatags and other links for the <head> area of the page
 *
 * Includes basic meta markup as well as Google site certification, tag manager, and TypeKit before calling
 * the wp_head() function;
 */
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php // Typekit integration
    if( get_field('typekit_id', 'option') ):
      $typekit_id = get_field('typekit_id', 'option');
  ?>
    <script>
      (function(d) {
        var config = {
          kitId: '<?php echo $typekit_id; ?>',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
  <?php
    endif;
  ?>

  <?php // WordPress head() function
    wp_head();
  ?>
</head>