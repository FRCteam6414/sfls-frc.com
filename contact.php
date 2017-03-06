<?php
    include "sHeader.php";
?>
    <div class="demo-container mdl-grid">
        <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
            <div class="demo-crumbs mdl-color-text--grey-500">
                Main &gt; Contact Us
            </div>
            <h1>Contact Us</h1>
            <?php
                function printInfo($inpArray){
                    echo "<h3>".$inpArray[sizeof($inpArray)-1]."</h3>";
                    for($i=0;$i<sizeof($inpArray)-1;$i++){
                        $output="<div class= \"warp\" style=\"margin-top:5vh;\">".
                            "<h5>"          .$inpArray[$i][0]."</h5>".
                            "<p>AKA: "      .($inpArray[$i][1]=="UNKNOWN"?"<div style=\"color:#f00\">Plz tell Wilson WHAT YOUR ENGLISH NAME IS!</div>":$inpArray[$i][1])."</p>".
                            "<p>Position: " .$inpArray[$i][2]."</p>".
                            "<p>Email: "    .$inpArray[$i][3]."</p>".
                            "</div>";
                        echo $output;
                    }
                }
                $info=array(
                    array(
                        array("YiYao Guo"       ,"Stacey"    ,"Captain"              ,"yiyaoguo@sfls-frc.com"),
                        array("Jie Zhang"       ,"Jack"     ,"Captain"              ,"jack10127@outlook.com"),
                        array("LinYuCong Yang"  ,"UNKNOWN"  ,"Safety captain"       ,"Yanglyc@outlook.com"),
                        array("GengZhi Li"      ,"Wilson"   ,"Programming leader"   ,"Wilsonlgz@outlook.com"),
                        array("ZhiYi Wei"       ,"Eric"     ,"Electronic leader"    ,"wei.eric@foxmail.com"),
                        array("YiXuan Wu"       ,"Florence" ,"Business manager"     ,"florencewu121@hotmail.com"),
                        array("HengYu Cao"      ,"Scott"    ,"Design leader"        ,"hengyucao@gmail.com"),"Leaders"
                        ),
                    array(
                        array("Tao Lin"         ,"UNKNOWN"  ,"Mentor"               ,"tao.lin@leapsglobal.com"),
                        array("ShiXing Song"    ,"UNKNOWN"  ,"Mentor"               ,"szsongshixing@gmail.com"),
                        array("WeiFan Ou"       ,"Andy"     ,"Youth mentor"         ,"ouweifanandy@outlook.com"),
                        array("WenJian Zhao"    ,"Alex"     ,"Youth mentor"         ,"zhaowenjianalex@outlook.com"),
                        array("ZhengHong Huang" ,"Alan"     ,"Youth mentor"         ,"alanmax@me.com"),"Mentors"
                        )
                    );
                
                for($i=0;$i<sizeof($info);$i++){
                    printInfo($info[$i]);
                }
            ?>
        </div>
    </div>
    <?php include 'sFooter.html' ?>