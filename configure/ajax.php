
<?php

//ajax load more posts add script	
add_action( 'wp_print_footer_scripts', 'loadmore', 99 );
function loadmore() { 	
	if ( is_page_template('template-blog.php') || is_archive() || is_category() || is_tag() ){		
			?>
		<script id="ajax-load-more" type="text/javascript">
			const ajaxurl = '<?php echo admin_url( "admin-ajax.php" ); ?>';
			let count = $('#loadmore-category').attr('data-counter')
			const category = $('#loadmore-category').attr('data-category')
			const categoryMax = $('#loadmore-category').attr('data-max')		

			$('#loadmore-category').on('click',(e)=>{
				e.preventDefault()
				//console.log(count)
				const data = {
					action: 'loadmore',
					count: count,
					category: category
				}
				$('#loadmore-category').parent('div').fadeOut()
				$.ajax({
					url: ajaxurl,
					type: 'POST',
					data: data,
					dataType: 'json',
					success: (response)=>{
						console.log(response)
						if(response.success){
							$('.ajax-container').append(response.data.result)
							count = response.data.newCount
							if(count < categoryMax){
								$('#loadmore-category').parent('div').fadeIn()
							}
						}
					},
					error: (err)=>{
						console.log(err)
					}
				})
			})
		</script>
	<?php }	
} 


//ajax load more posts for category
add_action( 'wp_ajax_loadmore', 'ajax_load_more_action' );
add_action( 'wp_ajax_nopriv_loadmore', 'ajax_load_more_action' );
function ajax_load_more_action() {
	$offset = $_POST['count'];
	$category_id = $_POST['category'];
	$result = '';

	$args_ajax_cat = new WP_Query(array(
		'posts_per_page' => 3,
		'post_type' => 'post',
		'orderby' => 'date',
		'order' => 'DESC',
		'category__in' => $category_id,
		'offset' => $offset
	));
	
	while($args_ajax_cat->have_posts()){
		$args_ajax_cat->the_post();
		$offset = $offset + 1;

		$result .= "<div class='col-12 col-md-6 col-lg-4 mb-5'>";
		$result .= load_template_part('template-parts/blog/article-loops/all-articles', null, array('aos-false'=>true));
		$result .= "</div>";
	};
	wp_reset_postdata(); 

	wp_send_json_success(array(
		'result' => $result,
		'newCount' => $offset
	));
}

