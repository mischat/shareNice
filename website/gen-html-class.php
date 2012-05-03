<?php

class GenericHTML {
        //Generate html headers 
        function html_header($title = "shareNice : unintrusive social sharing") {
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#">
  <head>
      <title>shareNice - Awesome URL Sharing Service</title>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
      <script src="/code.js" type="text/javascript"></script>    
      <link rel="shortcut icon" href="/images/icons/icon-share-orange16.png" />
      <meta name="keywords" content="shareNice sharing social ethical unintrusive opensource"/>
      <meta name="description" content="shareNice is an uninstrusive opensource social sharing widget which is pro user privacy" />
      <link rel="stylesheet" type="text/css" href="/website/style.css" />
      <!--[if IE 6]>
        <link type="text/css" rel="stylesheet" href="ie6.css" >  
      <![endif]-->      
  </head>
  <body> 
   <div class="logo">
    <a href="/"><img alt="ShareNice" src="/website/original_image.png"/></a>
   </div>

   <div rel="foaf:maker">
    <div typeof="foaf:Person" class="head"> 
	<a style="display:none" rel="foaf:weblog" href="http://mmt.me.uk/blog/">blog</a>
     <small>
      <a href="https://github.com/mischat/shareNice/commits/master.atom" title="git repo commit feed"><img src="/website/rss.png" alt="RSS feed"/></a> <span id="nav-header"><a href="/">home</a> | <a href="/website/technical">technical info</a> | <a href="/demo">demo</a> | <a href="http://github.com/mischat/shareNice">source-code</a> | <a href="/website/privacy">privacy policy</a></span>
     </small>
    </div>
   </div>
   <div class="main">
    <!-- The following div is needed if you want to use shareNice -->
    <div id="shareNice" share-label="share"></div>
    <div style="clear:right;"></div>
    <!-- plus some styling -->

    <h1>shareNice : unintrusive social sharing</h1>
<?php
	}

        function html_footer() {
?>
   </div> <!-- end main body -->

   <div class="foot">
    <p>
     <small>
    Hand-rolled in <a href="http://www.vim.org/">vi</a> 2011
     </small>
    </p>
   </div>

   </body>
</html>
<?php
	}

}
?>
