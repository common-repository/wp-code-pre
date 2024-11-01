<?php
/*
Plugin Name: WP Code Pre
Plugin URI: http://www.zdatatech.com/wp-code-pre
Description: Highlight code surrounded by html pre tags
Version: 1.0
Author: Zeshan
Author URI: http://zdatatech.com/about
Text Domain: WP-Code-Pre
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

//function get content text
function wp_code_pre_filter($posts){
	
	foreach($posts as $post){
		
		//filter content text and locate <pre>
		
		$thePostContent = $post->post_content;
		
		//pattern to match 
	    $matchpre = "/<pre\b>(.*?)<.pre\b>/s";
		
		$thePostContent = preg_replace_callback(
			$matchpre,
			function($m){
				
				//use highlight function to highlight text inside pre
				return '<pre>'.highlight_string($m[1],true).'</pre>';
				
			},
	
			$thePostContent
		);
		
		$post->post_content = $thePostContent;
	    
	}
	
	return $posts;
}

add_filter('the_posts', 'wp_code_pre_filter');

if(is_admin()){
	
	/*Add Menu option in Admin*/
	add_action('admin_menu', 'wp_code_pre_intro_menu');

	function wp_code_pre_intro_menu(){
		add_options_page('WP Code Pre', 'About WP Code Pre' ,'manage_options', 'wp-code-pre-info-page','wp_code_pre_config_page');
	}
	
	function wp_code_pre_config_page(){
?>
	<h2>About WP Code Pre</h2>
	
	<p>This simple plugin was created because of security concerns related to using PHP preg_replace directly. With transition to PHP7, it's advised to us preg_replace_callback instead.</p>

	<p>This plugin uses built-in supported feature of PHP-"highlight_string". This plugin filters post content for &#8804pre&#8805 &#8804/pre&#8805 and helps display html and other source code.</p> 
	
	<p>To display source code in your post, surround source code with pre tags. Plugin will filter for pre tags and add inline styles that may be modified using your wordpress theme's css stylesheet.</p>

<?php
	}
}
?>