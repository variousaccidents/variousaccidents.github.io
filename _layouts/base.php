<?php
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}
?>

<html>

<head>

<!--AdSense-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5179328788140758"
     crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--SITE META-->

    <!--If the current page doesn't have a title, the file name is used-->
    <title>Various Accidents</title>
    <meta title=”description” content="A curated selection of future nostalgia Est. 2022">
    
    <meta property="og:image" content="<?php echo catch_that_image() ?>"/>

    <!--
        Favicons and code below have been generated from: 
        https://favicon.io/
    -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!--/SITE META-->

    <link rel="stylesheet" href="../style.css">
</head>

<body>
<div id="site-container">

    <div id="nav-container" class="container">
                <div class="left-major">
                <a href="../index.html" id="title">Various Accidents</a>
                </div>
<!--                <div class="right-minor">-->
<!--                    <a class="header-link" href="twitter.com/variousaccidents">TW</a> -->
<!--                    <a class="header-link" href="instagram.com/variousaccidents">IG</a>-->
<!--                </div>-->

    </div>

    <div id="content-container" class="container">

                {{ content }}
    </div>

    <div id="footer-container">
        <div id="description" class="left-major">
            <!--<div id="section-header">
            </div>-->
            <ul>
                <li>
                    A curated selection of future nostalgia Est. 2022
                </li>
                <li>
                    <ul>
                        <li><a href="https://twitter.com/variacci">Twitter</a></li>
                        <li><a href="https://www.instagram.com/variousaccidents">Instagram</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>

</html>