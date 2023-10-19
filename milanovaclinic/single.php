			<?php

					if (in_category('Medycyna estetyczna')) {
						get_template_part('single-medycyna-estetyczna');
					} elseif (in_category('Stomatologia')) {
						get_template_part('single-stomatologia');
					} else {
						get_template_part('single-default');
					}
			
			?>
            
	