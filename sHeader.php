<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-cn">
    <head>
        <meta name="baidu-site-verification" content="vfVmm1iEDk" />
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta name="description" content="Voyager : Voyager-SFLS FRC">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Voyager</title>
        <link rel="stylesheet" href="/mdl/material.min.css">
        <link rel="stylesheet" href="/mdl/materialICO.css">
        <link rel="stylesheet" href="/css/ind.css" type="text/css" />
        <link rel="shortcut icon" type="image/x-icon" href="/images/v.ico" media="screen" />
        <script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script async src="/mdl/material.min.js"></script>
        <!--<script async type="text/javascript" src="/js/bootstrap.min.js"></script>-->
        <?php
          $agent = $_SERVER['HTTP_USER_AGENT'];
          if(strpos($agent,"comFront") 
          || strpos($agent,"iPhone") 
          || strpos($agent,"MIDP-2.0") 
          || strpos($agent,"Opera Mini") 
          || strpos($agent,"UCWEB") 
          || strpos($agent,"Android")
          || strpos($agent,"Windows CE") 
          || strpos($agent,"SymbianOS")){
            header("Location:https://sfls-frc.com/blog");
          }
        ?>
        <style type="text/css">
        .demo-layout-transparent .mdl-layout__header,
        .demo-layout-transparent .mdl-layout__drawer-button ,
        .cos_header{
          /* This background is dark, so we set text to white. Use 87% black instead if
             your background is light. */
          color: white;
        }
        .toJump{
            cursor:pointer;
        }
        </style>
        <script type="text/javascript">
        	$(document).ready(function() {
              $('.toJump').click(function() {
                  window.location.href='/index.php';
              });
          });
        </script>
    </head>
    <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base" data-gr-c-s-loaded="true">
      <div class="mdl-layout__container">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header has-tabs is-upgraded" data-upgraded=",MaterialLayout">
                <!-- Always shows a header, even in smaller screens. -->
          <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
              <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title toJump">Voyager</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation cos_header" style="font-weight:bold">
                  <a class="mdl-navigation__link" href="/blog">
                      <button id="up-blog-but" class="mdl-button mdl-js-button mdl-js-ripple-effect cos_header">
                          Blog
                      </button>
                      <div class="mdl-tooltip" data-mdl-for="up-blog-but">
                          visit out blog and keep an eye on our new events!
                      </div>
                  </a>
                  <a class="mdl-navigation__link" href="/aboutUs.php">
                      <button id="up-AU-but" class="mdl-button mdl-js-button mdl-js-ripple-effect cos_header">
                          About Us
                      </button>
                      <div class="mdl-tooltip" data-mdl-for="up-AU-but">
                          Learn more about us!
                      </div>
                  </a>
                  <a class="mdl-navigation__link" href="/members.php">
                      <button id="up-members-but" class="mdl-button mdl-js-button mdl-js-ripple-effect cos_header">
                          Members
                      </button>
                      <div class="mdl-tooltip" data-mdl-for="up-members-but">
                          Meet our team members here!
                      </div>
                  </a>
                  <a class="mdl-navigation__link" href="/contact.php">
                      <button id="up-CU-but" class="mdl-button mdl-js-button mdl-js-ripple-effect cos_header">
                          Contact Us
                      </button>
                      <div class="mdl-tooltip" data-mdl-for="up-CU-but">
                          Our member's email here.
                      </div>
                  </a>
                </nav>
              </div>
            </header>
            <div class="mdl-layout__drawer">
              <span class="mdl-layout-title toJump">Voyager</span>
              <nav class="mdl-navigation" style="font-weight:bold">
                  <a class="mdl-navigation__link mdl-js-ripple-effect" href="/blog">
                      Blog
                  </a>
                  <a class="mdl-navigation__link mdl-js-ripple-effect" href="/aboutUs.php">
                      About Us
                  </a>
                  <a class="mdl-navigation__link mdl-js-ripple-effect" href="/members.php">
                      Members
                  </a>
                  <a class="mdl-navigation__link mdl-js-ripple-effect" href="/contact.php">
                      Contact Us
                  </a>
              </nav>
            </div>
            <main class="mdl-layout__content">
              <div class="mdl-layout__tab-panel is-active" id="overview">