<?php

function tumblr($tag) {
    return json_decode(str_replace("var tumblr_api_read = {","{",str_replace("};","}",
    file_get_contents("http://amelie-olivier-fine-art.tumblr.com/tagged/".$tag."/json")
    )));
}

$artist = tumblr("artist");


?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Amélie Olivier Fine Art</title>

    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/navbar-static-top.css" />
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" type="text/css" href="fonts/zapfino/zapfino-1.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>

    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Amélie Olivier</a>
        </div>
        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right" style="margin-right:80px;">
            <li class="active"><a href="./">Home</a></li>
            <li class="dropdown">
                <a href="/" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="./still-life">Still Life</a></li>
                  <li><a href="./portrait">Portrait</a></li>
              </ul>
            </li>
            <li class="dropdown">
                <a href="/" class="dropdown-toggle" data-toggle="dropdown">The Artist <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="./bio">Bio</a></li>
                  <li><a href="./research">Artistic Research</a></li>
                  <li><a href="./formation">Formation</a></li>
                  <li><a href="./contact">Contact</a></li>
                  <li><a href="./gallery">Gallery</a></li>
              </ul>
            </li>
            <li><a target="_blank" href="http://amelie-fineart.tumblr.com/">Blog</a></li>
            <li><a href="#" data-toggle="modal" data-target="#commission">Commission</a></li>
          </ul>

        </div>
      </div>
    </div>

    <div class="container">
    
        <iframe style="position:relative;width:640px;height:360px;float:right" src="//www.youtube.com/embed/nuif3BiXxZM?controls=2&amp;showinfo=0&amp;theme=light" frameborder="0" allowfullscreen></iframe>
    
    </div>


    <div class="modal fade" id="commission" tabindex="-1" role="dialog" aria-labelledby="commissionLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h2 class="modal-title" id="commissionLabel">Commissions</h4>
          </div>
          <div class="modal-body">
            If you are interested in a personalized portrait or still life commission,
            <br />please contact the artist by e-mail:
            <br /><br />
            <a href="mailto:olivier.amelie@gmail.com">olivier.amelie@gmail.com</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-42202324-2', 'amelie-olivier.com'); ga('send', 'pageview'); </script>

  </body>
</html>