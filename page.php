
    <?php
	
	get_header();// function
	//Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
	?>

		<article class="content px-3 py-5 p-md-5">

		<?php

		if(have_posts()){

			while(have_posts()){
				the_post();
                get_template_part('template-parts/content', 'page');
			}
		}

		?>
	    
	    </article>
	    

	<?php
	get_footer();

	?>

