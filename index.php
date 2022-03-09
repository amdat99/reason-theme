<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Task">

    <?php wp_head(); ?>

</head> 

<body>
    
<?php require_once('navbar.php'); ?>
    <div class="app">
	  		
	<h1 class="title">My portfolio</h1>
	<span>
        My everyday work is presented here,
        <br /> for more check out my portfolio on behance
      </span>
	  	
		<div  class='menu-container'>

		</div>
	    <?php
		$categories = get_categories();

		?>
		<script>
			const categories = <?php echo json_encode($categories); ?>;			
			const addCategories = (category) => {
				const categoryElement = document.createElement('div');
				categoryElement.classList.add('title');
				categoryElement.classList.add('m-1');
				categoryElement.innerHTML = `<a href="?category=${category.slug}">${category.name}</a>`;
				document.querySelector('.menu-container').appendChild(categoryElement);
			}
			
			 categories.forEach(category => {
				return addCategories(category);
			});

		</script>
		
		<div class='images-container'>
		<?php
		$args;
		  	
		if(isset($_GET['category']) && !empty($_GET['category'])) {
		$args = array(
			'orderby' => 'date',
			'order' => 'DESC',
			'category_name' => htmlspecialchars($_GET['category']),
			);
		}else{
		$args =	array(
			'orderby' => 'date',
			'order' => 'DESC',
			);
		}
			$loop = new WP_Query( $args );

		while($loop->have_posts()) {
			the_post();
			$categories = get_the_category();
			$category_name = $categories[0]->name;
			echo `<div class="image-container">`;
			echo the_post_thumbnail( array(500, 500) );
			echo '<div class="image-title">'.the_title() . '</div>';
			echo '<div class="category">' . $category_name . '</div>';
			echo '</div>';
		}
		?>
		</div>
	</div>
    </div>
	<?php wp_footer(); ?>

</body>
</html> 