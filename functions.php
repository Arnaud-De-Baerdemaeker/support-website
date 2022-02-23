<?php

// ADD CUSTOM TAGS IN HEAD
function add_tags() {
?>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/style.css'; ?>">
	<!-- Development link -->
	<!-- <script src="https://unpkg.com/scrollreveal"></script> -->
	<!-- Production link -->
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<script src="<?php echo get_template_directory_uri().'/js/scrollreveal_scripts.js'; ?>" type="module"></script>
	<title><?php the_title(); ?></title>
<?php
}
add_action("wp_head", "add_tags");


// ALLOW SVG
add_filter("wp_check_filetype_and_ext", function($data, $file, $filename, $mimes) {
	global $wp_version;

	if ($wp_version !== "4.7.1") {
		return $data;
	}

	$filetype = wp_check_filetype($filename, $mimes);

	return [
		"ext" => $filetype["ext"],
		"type" => $filetype["type"],
		"proper_filename" => $data["proper_filename"]
	];
}, 10, 4 );

function cc_mime_types($mimes){
	$mimes["svg"] = "image/svg+xml";
	return $mimes;
}
add_filter("upload_mimes", "cc_mime_types");

function fix_svg() {
	echo "";
}
add_action("admin_head", "fix_svg");