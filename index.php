<!--
  gdocs-cms by mikey ray-von
  mexico city 2015
  https://github.com/mikeyrayvon/gdocs-cms
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Example</title><!-- replace Example with your title -->
    <meta name="description" content="Example"><!-- replace Example with your description -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- open graph for facebook and stuff -->
    <meta property="og:title" content="Example" /><!-- replace Example with your title -->
    <meta property="og:url" content="http://example.com" /><!-- replace http://example.com with your url -->
    <meta property="og:description" content="Example" /><!-- replace Example with your description -->
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://example.com/image.jpg" /><!-- replace http://example.com/image.jpg with a link to an image-->

    <style type="text/css"> html, body {margin: 0; padding: 0; width: 100%;height: 100%;} #result {width: 1100px;margin: 50px auto;} img {max-width: 100%} @media screen and (max-width: 1000px) { #result {width: 90%;margin: 5%;} } @media screen and (max-width: 700px) { span, img, iframe { max-width: 100% !important;width: auto !important;height: auto !important;}} </style>
  </head>
  <body>
    <!-- the important part -->
    <div id="result">
<?php
      include 'simple_html_dom.php';
      /* 
      replace https://docs.google.com/document/d/XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/pub 
      with the link to yr published google doc 
      */
      $publishedDocUrl = 'https://docs.google.com/document/d/1FRxUNqNpB1ntesqVsYNwooo2SCQVVm-A0l6LrMBYyM0/pub';
      $html = file_get_html($publishedDocUrl);
      echo $html->find("#contents", 0)
?>
    </div>
    <!-- Google Analytics: change UA-XXXXX-X to be yr site's ID. -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-XXXXXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>