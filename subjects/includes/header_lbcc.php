<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php print $page_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Description" content="<?php if (isset($description)) {print $description;} ?>" />
<meta name="Keywords" content="<?php if (isset($keywords)) {print $keywords;} ?>" />
<meta name="Author" content="" />

<link type="text/css" media="screen" rel="stylesheet" href="<?php print $AssetPath; ?>css/shared/pure-min.css">
<link type="text/css" media="screen" rel="stylesheet" href="<?php print $AssetPath; ?>css/shared/grids-responsive-min.css">
<?php 
// see if we need to override the css; you, too, can do this via the Admin > Config Site page
if (isset($css_override)  && $css_override != "") { 
    // trim off .css in case someone included it
    $css_override = explode(".css", $css_override);
    $our_base_css = $css_override[0] . ".css"; 
} else {
    $our_base_css = "cleanwhite.css";
}
?>
<link type="text/css" media="screen" rel="stylesheet" href="<?php print $AssetPath; ?>css/public/<?php print $our_base_css; ?>">
<link type="text/css" media="print" rel="stylesheet" href="<?php print $AssetPath; ?>css/public/print.css">
<link type="text/css" media="screen" rel="stylesheet" href="<?php print $AssetPath; ?>css/shared/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<?php 
// Load our jQuery libraries + some css
if (isset($use_jquery)) { print generatejQuery($use_jquery);
}

if (!isset ($noheadersearch)) { 
    
    $search_form = '
            <div class="autoC" id="autoC">
                <form id="sp_admin_search" class="pure-form" method="post" action="' . getSubjectsURL() . 'search.php">
                <input type="text" placeholder="Search" autocomplete="off" name="searchterm" size="" id="sp_search" class="ui-autocomplete-input autoC"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                <input type="submit" alt="Search" name="submitsearch" id="topsearch_button" class="pure-button pure-button-topsearch" value="Go">
                </form>
            </div>    ';
} else {
    $search_form = '';
}

?>



</head>

<body>


<div id="wrap">

<div id="header"> 
    <div id="header_inner_wrap">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-4">
                <a href="<?php print $PublicPath; ?>"><img class="main_logo" src="<?php print $AssetPath; ?>images/public/logo.png" alt="Home Page" /></a>
            </div>
            <a class="pure-u-1 pure-u-md-1-8 header-link" href="https://library.linnbenton.edu/hours">Hours</a>
            <a class="pure-u-1 pure-u-md-1-8 header-link" href="databases.php">Databases</a>
            <a class="pure-u-1 pure-u-md-1-8 header-link" href="https://library.linnbenton.edu/contact">Research Help</a>
            <a class="pure-u-1 pure-u-md-1-8 header-link" href="http://library.linnbenton.edu/c.php?g=13287&p=70894">For faculty</a>
	    <form class="pure-u-1 pure-u-md-1-4" action="https://libfind.linnbenton.edu:4430">
                <label for="header-findit">Search library resources</label>
                <input name="q" id="header-findit" type="text" aria-label="Search query">
		<button class="pure-button header-findit-search" type="submit" aria-label="Search">
                    <span class="fa fa-search" aria-hidden="true"></span></button>
            </form>
	    <a href="https://identity.linnbenton.edu" class="pure-button button-top">
                <span class="fa fa-user" aria-hidden="true"></span>
                My LB</a>
        </div>
    </div>
</div> <!--end #header-->

<div class="wrapper-full">
    <div class="pure-g">
        <div class="pure-u-1-5" id="sidebar">
          <a href="https://library.linnbenton.edu/contact" class="pure-button pure-button-topsearch">Get research help</a>
          <a href="https://libcat.linnbenton.edu/eg/opac/myopac/main?redirect_to=%2Feg%2Fopac%2Fmyopac%2Fmain" class="pure-button pure-button-topsearch">Check my Library Account</a>
        </div>
        <div class="pure-u-4-5" id="not-sidebar">
          <h1><?php print $page_title ?></h1>
            <div id="content_roof"></div> <!-- end #content_roof -->
            <div id="shadowkiller"></div> <!--end #shadowkiller-->
        
            <div id="body_inner_wrap">

<?php $v2styles = 1; ?>
