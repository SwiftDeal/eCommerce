<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo $dir_assets_images.'favicon.ico';?>">
	<meta name="description" content="<?php echo $meta_description;?>" />
	<meta name="keywords" content="<?php echo $meta_keywords;?>">
	<meta name="author" content="<?php echo $meta_author;?>">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="2 days">
	<meta name="copyright" content="SwiftDeal.in" />
	<meta name="googlebot" content="noodp">
	<meta name="language" content="English">
	<meta name="web_author" content="Faizan Ayubi">

	<title><?php echo $title;?></title>
	<link href="<?php echo $fbootstrap_css.'bootstrap.min.css'?>" rel="stylesheet">
	<style type="text/css">
    /* Override some defaults */
    html, body {
    	background-color: #eee;
   	}
   	body {
   		padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
   	}
   	.container > footer p {
   		text-align: center; /* center align it with the container */
   	}
   	.container {
   		width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
   	}

	/* The white background content wrapper */
	.container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

    /* Page header tweaks */
    .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
    }

    /* Styles you shouldn't keep as they are for displaying this base example only */
    .topbar .btn {
		margin-top: 12px;
    	padding-top: 3px;
        border: 0;
    }
	.xsPhoto{
		width: 50px;
	}
    </style>
</head>
<body>
