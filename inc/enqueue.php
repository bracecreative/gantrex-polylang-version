<?php

use Brace\DocumentDirectoryController;

if (!function_exists('custom_scripts')) {

	function custom_scripts()
	{
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get('Version');
		$current_env = brace_get_current_env();

		if ($current_env === 'production' && file_exists(get_template_directory() . '/dist/css/bundle.css')) {
			$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/dist/css/bundle.css');
			wp_enqueue_style('custom-styles', get_template_directory_uri() . '/dist/css/bundle.css', array(), $css_version);
		}

		if ($current_env === 'production' && file_exists(get_template_directory() . '/dist/js/bundle.js')) {
			$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/dist/js/bundle.js');
			wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array(), $js_version, true);
		}

		if ($current_env === 'development') {
			wp_enqueue_script('custom-scripts', 'http://localhost:3000/js/bundle.js', array(), false, true);
		}

		wp_enqueue_script('alpinejs', get_template_directory_uri() . '/alpine.min.js', array('swiper'), false, true);
		wp_enqueue_script('swiper', get_template_directory_uri() . '/swiper.min.js', array(), false, false);
		wp_enqueue_style('swiper-style', get_template_directory_uri() . '/swiper-style.min.css', array());
		
		$categories = get_terms('country', array(
			'hide_empty' => 1
		));
		wp_localize_script( 'custom-scripts', 'ajax_posts', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	}
}

add_action('wp_enqueue_scripts', 'custom_scripts');

function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
        'paged'    => $page,
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post(); ?>

	<div class="news-card <?php print (str_replace(' ', '-', strtolower(get_the_category(get_the_ID())[0]->name))); ?> bg-primary <?php echo the_category_ID(); ?> w-[32%] basis-[32.5%]">
		<a class="post-card news-cat" href="<?php the_permalink(); ?>">
			<div class="featured-image">
				<?php
				if (has_post_thumbnail() ) {
					$image = get_the_post_thumbnail( $post_id, 'small' );
					echo $image;
				} else {
				?>  <img src="<?php bloginfo('template_directory'); ?>/images/placeholder-1.jpg" width="1200" height="800" alt="<?php the_title(); ?>" /> 
				<?php  } ?>
			</div>
			<div class="news-text min-h-[253px] p-10 pb-[50px] flex flex-col text-white">
				<h3 class="news-title uppercase sen-bold tracking-widest leading-[20px] text-[23px] text-left py-2"><?php the_title(); ?></h3>
				<div class="extra-info flex items-center">
					<div class="flex items-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
						<path id="noun-calendar-4619829" d="M118.393,36.072H116.25v-.536a.536.536,0,1,0-1.071,0v.536h-5.357v-.536a.536.536,0,1,0-1.071,0v.536h-2.143A1.607,1.607,0,0,0,105,37.679V48.393A1.607,1.607,0,0,0,106.607,50h11.786A1.607,1.607,0,0,0,120,48.393V37.679a1.607,1.607,0,0,0-1.607-1.607Zm-11.786,1.071h2.143v.536a.536.536,0,1,0,1.071,0v-.536h5.357v.536a.536.536,0,1,0,1.071,0v-.536h2.143a.536.536,0,0,1,.536.536v2.679H106.071V37.679a.536.536,0,0,1,.536-.536Zm11.786,11.786H106.607a.536.536,0,0,1-.536-.536V41.429h12.857v6.964a.536.536,0,0,1-.536.536Z" transform="translate(-105 -35)" fill="#e96500"/>
					</svg>
					<p class="pl-[10px] text-[13px] tracking-[2px] text-left pb-[0.25rem] pt-[0.35rem] gothic-medium"><?php echo get_the_date('Y/m/d'); ?></p>
					</div>
					
				<div class="cat--<?php print (str_replace(' ', '-', strtolower(get_the_category(get_the_ID())[0]->name))); ?> <?php echo the_category_ID(); ?> pl-[5px] flex items-center gothic-medium uppercase text-[13px] tracking-[2px]"><?php the_category(); ?></div>
				</div>

				<article class="leading-[15px] mt-[5px] gothic-book text-left text-[13px]"><?php echo wp_trim_words(get_the_excerpt(), 55) . "…"; ?></article>
				<a href="<?php the_permalink(); ?>" class="flex space-x-4 bold gtx-btn font-bold uppercase tracking-widest self-start"><span class="read-more sen-bold mt-2"><?php echo __('Read More', 'brace-starter-theme') ?></span></a>
			</div>  
		</a>
	</div>
<?php endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

function enqueue_global_wp_ajax_url()
{
?>
	<script type="text/javascript">
		window.ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
		window.popupCloseClass = "<?php echo DocumentDirectoryController::getInstance()->classes['data_capture_close']; ?>"
	</script>
<?php
}
add_action('wp_head', 'enqueue_global_wp_ajax_url');