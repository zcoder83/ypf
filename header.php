<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Roboto+Slab|Sanchez" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class($class); ?> onload="myFunction()">
    <!-- <div id="loader"></div> -->
    <div class="loader-position">
    <div class="lds-ellipsis" id="loaders"><div></div><div></div><div></div><div></div></div>
    </div>
    
    <div style="display:none;" id="myDiv" class="animate-bottom">

