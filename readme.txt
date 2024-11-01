=== WP Code Pre === 
Contributors: zeshanb
Tags: code highlight, filter content 
Requires at least: 4.0
Tested up to: 5.8
Requires PHP: 7.0
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


=== Description ===
 
This simple plugin was created because of security concerns related to using PHP preg_replace directly. With transition to PHP7, it's advised to use preg_replace_callback instead.

This plugin uses built-in supported feature of PHP-"highlight_string". This plugin filters post content inside custom html block for <pre> </pre> and helps display html and other source code. 
	
To display source code in your posts, surround source code with pre tags. Plugin will filter for pre tags and add inline styles that may be modified using your wordpress theme's css stylesheet.

For Wordpress versions 5.0 and above, HTML pre tags can be used within html block or, classic block. Use the three dot menu to convert to html when there is a invalid content error while post editing.
 
=== Installation ===
 
1. Download the plugin 
1. Upload the wp-code-pre.zip folder to your site's wp-content/plugins directory 
1. Activate the plugin in the WordPress Admin Panel 
1. Surround source code with <code><pre> </pre></code> tags, when writing in blog posts using Gutenberg with classic block and "Edit as HTML" or, html block

== Changelog == 
 
= 1.0 = 
* First version of the plugin. 

= 1.0.1 =
* Updated readme to reflect updates to version 5.0
 
== Frequently Asked Questions == 
 
Why there aren't any options to modify in admin?
This plugin simply filters for pre tags.
 
== Screenshots == 
 
1. Code preview on blog post or page
2. Typing code in text tab of WordPress Admin area when writing Post.
3. Convert block to html while editing to make modifications to existing source code display