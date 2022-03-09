<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Task">
    <link rel="shortcut icon" href="images/logo.png"> 
    
    <?php wp_head(); ?>
</head> 

<body>
    
    <header class="nav-bar">	    
	    <a class=" ml-5" href="index.php">        
            <img width='180' src="https://reasondigital.com/wp-content/uploads/2020/08/rd-test-3.png" />
        </a>
	    <nav >

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
        <?php
        wp_nav_menu( 
            array( 
               'menu' => 'header-menu',
               'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'theme_location' => 'header-menu',
            )
        );
        ?>
			</button>			
		</nav>
    </header>
 
    </div>
    
    <?php wp_footer(); ?>

</body>
</html> 