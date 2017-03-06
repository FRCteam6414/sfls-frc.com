<?php
    include 'sHeader.php'
?>
           <style>
            #view-source {
              position: fixed;
              display: block;
              right: 0;
              bottom: 0;
              margin-right: 40px;
              margin-bottom: 40px;
              z-index: 900;
            }
            .mdl-demo .mdl-card {
              height: auto;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-flex-direction: column;
                  -ms-flex-direction: column;
                      flex-direction: column;
            }
            .mdl-demo .mdl-card > * {
              height: auto;
            }
            .mdl-demo .mdl-card .mdl-card__supporting-text {
              margin: 40px;
              -webkit-flex-grow: 1;
                  -ms-flex-positive: 1;
                      flex-grow: 1;
              padding: 0;
              color: inherit;
              width: calc(100% - 80px);
            }
            .mdl-demo.mdl-demo .mdl-card__supporting-text h4 {
              margin-top: 0;
              margin-bottom: 20px;
            }
            .mdl-demo .mdl-card__actions {
              margin: 0;
              padding: 4px 40px;
              color: inherit;
            }
            .mdl-demo .mdl-card__actions a {
              color: #00BCD4;
              margin: 0;
            }
            .mdl-demo .mdl-card__actions a:hover,
            .mdl-demo .mdl-card__actions a:active {
              color: inherit;
              background-color: transparent;
            }
            .mdl-demo .mdl-card__supporting-text + .mdl-card__actions {
              border-top: 1px solid rgba(0, 0, 0, 0.12);
            }
            .mdl-demo #add {
              position: absolute;
              right: 40px;
              top: 36px;
              z-index: 999;
            }
            
            .mdl-demo .mdl-layout__content section:not(:last-of-type) {
              position: relative;
              margin-bottom: 48px;
            }
            .mdl-demo section.section--center {
              max-width: 860px;
            }
            .mdl-demo #features section.section--center {
              max-width: 620px;
            }
            .mdl-demo section > header{
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-align-items: center;
                  -ms-flex-align: center;
                      align-items: center;
              -webkit-justify-content: center;
                  -ms-flex-pack: center;
                      justify-content: center;
            }
            .mdl-demo section > .section__play-btn {
              min-height: 200px;
            }
            .mdl-demo section > header > .material-icons {
              font-size: 3rem;
            }
            .mdl-demo section > button {
              position: absolute;
              z-index: 99;
              top: 8px;
              right: 8px;
            }
            .mdl-demo section .section__circle {
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-align-items: center;
                  -ms-flex-align: center;
                      align-items: center;
              -webkit-justify-content: flex-start;
                  -ms-flex-pack: start;
                      justify-content: flex-start;
              -webkit-flex-grow: 0;
                  -ms-flex-positive: 0;
                      flex-grow: 0;
              -webkit-flex-shrink: 1;
                  -ms-flex-negative: 1;
                      flex-shrink: 1;
            }
            .mdl-demo section .section__text {
              -webkit-flex-grow: 1;
                  -ms-flex-positive: 1;
                      flex-grow: 1;
              -webkit-flex-shrink: 0;
                  -ms-flex-negative: 0;
                      flex-shrink: 0;
              padding-top: 8px;
            }
            .mdl-demo section .section__text h5 {
              font-size: inherit;
              margin: 0;
              margin-bottom: 0.5em;
            }
            .mdl-demo section .section__text a {
              text-decoration: none;
            }
            .mdl-demo section .section__circle-container > .section__circle-container__circle {
              width: 64px;
              height: 64px;
              border-radius: 32px;
              margin: 8px 0;
            }
            .mdl-demo section.section--center .section__text:not(:last-child) {
              border-bottom: 1px solid rgba(0,0,0,.13);
            }
            .mdl-demo .mdl-card .mdl-card__supporting-text > h3:first-child {
              margin-bottom: 24px;
            }
            .mdl-demo .mdl-layout__tab-panel:not(#overview) {
              background-color: white;
            }
            .mdl-demo #features section {
              margin-bottom: 72px;
            }
            .mdl-demo #features h4, #features h5 {
              margin-bottom: 16px;
            }
            .mdl-demo .toc {
              border-left: 4px solid #C1EEF4;
              margin: 24px;
              padding: 0;
              padding-left: 8px;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-flex-direction: column;
                  -ms-flex-direction: column;
                      flex-direction: column;
            }
            .mdl-demo .toc h4 {
              font-size: 0.9rem;
              margin-top: 0;
            }
            .mdl-demo .toc a {
              color: #4DD0E1;
              text-decoration: none;
              font-size: 16px;
              line-height: 28px;
              display: block;
            }
            .mdl-demo .mdl-menu__container {
              z-index: 99;
            }
        </style>
        <div class="mdl-layout__tab-panel is-active" id="overview">
          
          <?php
            $intro=array(
              array("YiYao Guo"     ,"Stacey"   ,"Captain"),
              array("HengYu Cao"    ,"Scott"    ,"Design leader"),
              array("WeiJia Fang"   ,"UNKNOWN"  ,"Design member"),
              array("JunQing He"    ,"UNKNOWN"  ,"Design member"),
              array("LuZhang Shi"   ,"UNKNOWN"  ,"Design member"),
              array("HuiDan Zheng"  ,"UNKNOWN"  ,"Design member"),
              array("JingHai Lin"   ,"UNKNOWN"  ,"Mechanical leader"),
              array("RuFei Li"      ,"UNKNOWN"  ,"Mechanical member"),
              array("JiaHao Wei"    ,"UNKNOWN"  ,"Mechanical member"),
              array("You Wu"        ,"UNKNOWN"  ,"Mechanical member"),
              array("LingZhi Zhang" ,"UNKNOWN"  ,"Mechanical member"),
              array("ZhiYi Wei"     ,"Eric"     ,"Electronic Leader"),
              array("XueFei Chen"   ,"UNKNOWN"  ,"Electronic member"),
              array("MengNing Wu"   ,"UNKNOWN"  ,"Programming member")
              );
              
              for($i=0;$i<sizeof($intro);$i++){
                $flatName=substr(strtolower(strstr($intro[$i][0],' ',false).strstr($intro[$i][0],' ',true)),1);
                // echo $flatName;
                $output= "<section class=\"section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp\" style=\"margin-top:5vh\">\r\n"
                        ."  <header class=\"section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white\">"
                        ."    <img src=\"/images/intro/".$flatName.".png\" style=\"width:500px\"></img>"
                        ."  </header>"
                        ."  <div class=\"mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone\">"
                        ."    <div class=\"mdl-card__supporting-text\">"
                        ."      <h4>".$intro[$i][0].", aka ".$intro[$i][1]."</h4>"
                        .       file_get_contents("/etc/project/images/intro/".$flatName.".txt")
                        ."    </div>"
                        ."    <div class=\"mdl-card__actions\">"
                        ."      <p>position: ".$intro[$i][2]."</p>"
                        ."    </div>"
                        ."  </div>"
                        ."</section>";
                echo $output;
              }
          ?>
          
          <?php include 'sFooter.html' ?>