  <div class="slick-image-slide">  		<?php$sliderurl = get_post_meta( get_the_ID(),'wpsisac_slide_link', true );		echo ($sliderurl !='' ? '<a href="'.$sliderurl.'">' : '');		if($sliderimage_size == '' || $sliderimage_size == 'medium')  { 				 the_post_thumbnail('medium'); 			 			} elseif ($sliderimage_size == 'large') {							the_post_thumbnail('large'); 			} elseif ( $sliderimage_size == 'original') {				the_post_thumbnail('url'); 			} elseif ( $sliderimage_size == 'thumbnail') {				the_post_thumbnail('thumbnail'); 			}  else {				 the_post_thumbnail('medium'); 						}		echo ($sliderurl !='' ? '</a>' : '');	 ?>	</div>