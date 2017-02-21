

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <title>Anhel Kids</title>-->
    <link rel="shortcut icon" href="http://anhel-kids.com/favicon_anhel_kids_32x32.png" type="image/x-icon">
<!--    <link rel="stylesheet" href="css/fonts.css">-->
<!--    <link rel="stylesheet" href="css/bootstrap-grid-3.3.1.min.css">-->
<!--    <link rel="stylesheet" href="css/main.css">-->
<!--    <link rel="stylesheet" href="css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" href="css/slick-theme.css">-->
<!--    <link rel="stylesheet" href="css/slick.css">-->
    <?php
    wp_head();
    ?>
</head>

<body>

<?php
    if (is_page_template('templates/construct.php')) { ?>
    <div class="internal-pages constructor">
        <?php }
        if(!is_page_template('templates/construct.php') && !is_page_template('templates/main.php')){ ?>
            <div class="internal-pages">
      <?php  }
        ?>
<!--START HEADER-->
<header>
    <?php
    if ( is_page_template('templates/main.php')) {

    ?>
    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%"  version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
         viewBox="0 0 16256 7823"
         xmlns:xlink="http://www.w3.org/1999/xlink">
 <defs>
     <style type="text/css">
         <![CDATA[
    .str14 {stroke:#584834;stroke-width:28.12;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:608.080000 608.080000;stroke-opacity:0.301961}
         .str11 {stroke:#03817C;stroke-width:105.83}
         .str52 {stroke:#E58F81;stroke-width:30.01}
         .str12 {stroke:#03817C;stroke-width:35.28}
         .str13 {stroke:#818181;stroke-width:48.12}
         .str16 {stroke:#090909;stroke-width:20}
         .str49 {stroke:#2B2A29;stroke-width:10}
         .str47 {stroke:#1A1A17;stroke-width:10}
         .str1 {stroke:#CB1362;stroke-width:10}
         .str9 {stroke:#D5887E;stroke-width:10}
         .str38 {stroke:#1A1A17;stroke-width:7.62}
         .str35 {stroke:#1A1A17;stroke-width:7.62}
         .str39 {stroke:#777D81;stroke-width:7.62}
         .str36 {stroke:#777D81;stroke-width:7.62}
         .str43 {stroke:#937D74;stroke-width:7.62}
         .str41 {stroke:#937D74;stroke-width:7.62}
         .str40 {stroke:#A9A89B;stroke-width:7.62}
         .str48 {stroke:#AC0065;stroke-width:7.62}
         .str42 {stroke:#AC0065;stroke-width:7.62}
         .str44 {stroke:#BD177D;stroke-width:7.62}
         .str51 {stroke:#C3C2B6;stroke-width:7.62}
         .str37 {stroke:#C3C2B6;stroke-width:7.62}
         .str17 {stroke:#D90068;stroke-width:25;stroke-linejoin:round}
         .str5 {stroke:#E17F75;stroke-width:25;stroke-linejoin:round}
         .str53 {stroke:#3784B3;stroke-width:10;stroke-linejoin:round}
         .str10 {stroke:#BE2F86;stroke-width:10;stroke-linejoin:round}
         .str0 {stroke:#D90068;stroke-width:10;stroke-linejoin:round}
         .str4 {stroke:#DF8B81;stroke-width:10;stroke-linejoin:round}
         .str6 {stroke:#E17F75;stroke-width:10;stroke-linejoin:round}
         .str21 {stroke:#E3867C;stroke-width:10;stroke-linejoin:round}
         .str7 {stroke:#E38871;stroke-width:10;stroke-linejoin:round}
         .str22 {stroke:#EF8F76;stroke-width:10;stroke-linejoin:round}
         .str26 {stroke:#F9AAAA;stroke-width:20;stroke-linecap:round}
         .str28 {stroke:#F9AAAA;stroke-width:10;stroke-linecap:round}
         .str50 {stroke:#D90068;stroke-width:25;stroke-linecap:round;stroke-linejoin:round}
         .str34 {stroke:#DF8B81;stroke-width:25;stroke-linecap:round;stroke-linejoin:round}
         .str18 {stroke:#3784B3;stroke-width:10;stroke-linecap:round;stroke-linejoin:round}
         .str45 {stroke:#AC0065;stroke-width:10;stroke-linecap:round;stroke-linejoin:round}
         .str46 {stroke:#BD177D;stroke-width:10;stroke-linecap:round;stroke-linejoin:round}
         .str2 {stroke:#D90068;stroke-width:10;stroke-linecap:round;stroke-linejoin:round}
         .str20 {stroke:#DD8E82;stroke-width:10;stroke-linecap:round;stroke-linejoin:round}
         .str3 {stroke:#DF8B81;stroke-width:10;stroke-linecap:round;stroke-linejoin:round}
         .str19 {stroke:#E3867C;stroke-width:10;stroke-linecap:round;stroke-linejoin:round}
         .str8 {stroke:#E38871;stroke-width:10;stroke-linecap:round;stroke-linejoin:round}
         .str24 {stroke:#F9AAAA;stroke-width:20;stroke-dasharray:458.510000 352.700000}
         .str25 {stroke:#F9AAAA;stroke-width:10;stroke-dasharray:458.510000 352.700000}
         .str23 {stroke:#F9AAAA;stroke-width:70.56;stroke-linecap:round;stroke-dasharray:457.200000 350.520000}
         .str27 {stroke:#F9AAAA;stroke-width:20;stroke-linecap:round;stroke-dasharray:441.960000 342.900000}
         .str30 {stroke:#F9AAAA;stroke-width:20;stroke-linecap:round;stroke-dasharray:480.060000 365.760000}
         .str31 {stroke:#F9AAAA;stroke-width:20;stroke-linecap:round;stroke-dasharray:487.680000 373.380000}
         .str33 {stroke:#F9AAAA;stroke-width:10;stroke-linecap:round;stroke-dasharray:441.960000 342.900000}
         .str29 {stroke:#F9AAAA;stroke-width:10;stroke-linecap:round;stroke-dasharray:457.200000 350.520000}
         .str32 {stroke:#F9AAAA;stroke-width:10;stroke-linecap:round;stroke-dasharray:472.440000 365.760000}
         .str15 {stroke:#584834;stroke-width:28.12;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:674.890000 674.890000}
         .fil99 {fill:none}
         .fil36 {fill:none;fill-rule:nonzero}
         .fil71 {fill:none;fill-rule:nonzero}
         .fil110 {fill:#00B5D2}
         .fil154 {fill:#090613}
         .fil105 {fill:#111111}
         .fil149 {fill:#13736D}
         .fil4 {fill:#1A1A17}
         .fil96 {fill:#4C4C4C}
         .fil168 {fill:#75B6D7}
         .fil125 {fill:#777D81}
         .fil98 {fill:#78B7D7}
         .fil94 {fill:#818181}
         .fil111 {fill:#86511A}
         .fil112 {fill:#8ADBEF}
         .fil147 {fill:#937D74}
         .fil95 {fill:#979797}
         .fil137 {fill:#A20665}
         .fil143 {fill:#A54C95}
         .fil115 {fill:#A9692C}
         .fil142 {fill:#A9A89B}
         .fil148 {fill:#AC0065}
         .fil6 {fill:#B6B9A4}
         .fil126 {fill:#B8B8AE}
         .fil134 {fill:#B8BFB7}
         .fil145 {fill:#BB006F}
         .fil138 {fill:#BD177D}
         .fil133 {fill:#BEBEB6}
         .fil131 {fill:#C3C2B6}
         .fil135 {fill:#C5C7BB}
         .fil139 {fill:#C5CEC5}
         .fil146 {fill:#CF1484}
         .fil155 {fill:#D0971D}
         .fil118 {fill:#D0D2CA}
         .fil121 {fill:#D1D3CA}
         .fil161 {fill:#D2D1C2}
         .fil122 {fill:#D2D2C6}
         .fil5 {fill:#D2D5CE}
         .fil141 {fill:#D6D7CA}
         .fil127 {fill:#D6D7CC}
         .fil136 {fill:#D9DAD1}
         .fil169 {fill:#DBEDF8}
         .fil129 {fill:#DDDAD0}
         .fil107 {fill:#DF8971}
         .fil144 {fill:#E36BCD}
         .fil164 {fill:#E58F81}
         .fil44 {fill:#E967A0}
         .fil150 {fill:#E9E7DC}
         .fil2 {fill:#EB66A1}
         .fil97 {fill:#EBEBEB}
         .fil1 {fill:#EDEEE9}
         .fil165 {fill:#EF8FBA}
         .fil45 {fill:#F090B9}
         .fil166 {fill:#F095BD}
         .fil3 {fill:#F191BA}
         .fil113 {fill:#F592B6}
         .fil158 {fill:#F5CDE2}
         .fil156 {fill:#F6B59F}
         .fil167 {fill:#F6CDE2}
         .fil159 {fill:#F7DAEA}
         .fil152 {fill:#F9DBCC}
         .fil157 {fill:#FBE1D1}
         .fil106 {fill:#FBF29D}
         .fil103 {fill:#FCAC50}
         .fil153 {fill:#FCF1EB}
         .fil109 {fill:#FF5C58}
         .fil116 {fill:#FFC800}
         .fil100 {fill:#FFE0D0}
         .fil114 {fill:#FFE0EA}
         .fil102 {fill:#FFF4EE}
         .fil162 {fill:#FFFF9D}
         .fil101 {fill:white}
         .fil46 {fill:#03817C;fill-rule:nonzero}
         .fil21 {fill:#09A3AE;fill-rule:nonzero}
         .fil23 {fill:#09A3B1;fill-rule:nonzero}
         .fil19 {fill:#09B1BE;fill-rule:nonzero}
         .fil15 {fill:#13736D;fill-rule:nonzero}
         .fil41 {fill:#1A1A17;fill-rule:nonzero}
         .fil26 {fill:#1A1A19;fill-rule:nonzero}
         .fil29 {fill:#1A414A;fill-rule:nonzero}
         .fil32 {fill:#1AA9B7;fill-rule:nonzero}
         .fil28 {fill:#1F474D;fill-rule:nonzero}
         .fil51 {fill:#2D2D2D;fill-rule:nonzero}
         .fil25 {fill:#2F323F;fill-rule:nonzero}
         .fil53 {fill:#323232;fill-rule:nonzero}
         .fil62 {fill:#3F3F3F;fill-rule:nonzero}
         .fil93 {fill:#424141;fill-rule:nonzero}
         .fil82 {fill:#4BC37C;fill-rule:nonzero}
         .fil70 {fill:#584834;fill-rule:nonzero}
         .fil76 {fill:#606060;fill-rule:nonzero}
         .fil73 {fill:dimgray;fill-rule:nonzero}
         .fil81 {fill:#6EC1E6;fill-rule:nonzero}
         .fil72 {fill:#7A7A7A;fill-rule:nonzero}
         .fil14 {fill:#80A3A2;fill-rule:nonzero}
         .fil61 {fill:#818181;fill-rule:nonzero}
         .fil75 {fill:#82C7E5;fill-rule:nonzero}
         .fil10 {fill:#83ADAF;fill-rule:nonzero}
         .fil8 {fill:#92C0C5;fill-rule:nonzero}
         .fil57 {fill:#93C0D5;fill-rule:nonzero}
         .fil7 {fill:#94C8CB;fill-rule:nonzero}
         .fil0 {fill:#95DBDE;fill-rule:nonzero}
         .fil63 {fill:#978169;fill-rule:nonzero}
         .fil56 {fill:#9E9E9E;fill-rule:nonzero}
         .fil85 {fill:#A1A1A1;fill-rule:nonzero}
         .fil86 {fill:#A5A5A5;fill-rule:nonzero}
         .fil108 {fill:#A83C3C;fill-rule:nonzero}
         .fil74 {fill:#AAAAAA;fill-rule:nonzero}
         .fil64 {fill:#AD9277;fill-rule:nonzero}
         .fil78 {fill:#B24447;fill-rule:nonzero}
         .fil52 {fill:#B2B2B2;fill-rule:nonzero}
         .fil84 {fill:#B2DDC4;fill-rule:nonzero}
         .fil68 {fill:#BC9463;fill-rule:nonzero}
         .fil55 {fill:#C16D6F;fill-rule:nonzero}
         .fil60 {fill:#C3C3C3;fill-rule:nonzero}
         .fil92 {fill:#CA451D;fill-rule:nonzero}
         .fil65 {fill:#CDA476;fill-rule:nonzero}
         .fil39 {fill:#D0971D;fill-rule:nonzero}
         .fil77 {fill:#D25054;fill-rule:nonzero}
         .fil34 {fill:#D8DADA;fill-rule:nonzero}
         .fil11 {fill:gainsboro;fill-rule:nonzero}
         .fil163 {fill:#E58F81;fill-rule:nonzero}
         .fil48 {fill:#E75024;fill-rule:nonzero}
         .fil35 {fill:#E967A0;fill-rule:nonzero}
         .fil27 {fill:#EA554F;fill-rule:nonzero}
         .fil66 {fill:#EAD5BD;fill-rule:nonzero}
         .fil18 {fill:#ED7268;fill-rule:nonzero}
         .fil30 {fill:#EE7A7D;fill-rule:nonzero}
         .fil20 {fill:#EEDBB4;fill-rule:nonzero}
         .fil170 {fill:#EF8FBA;fill-rule:nonzero}
         .fil47 {fill:#EFA71D;fill-rule:nonzero}
         .fil172 {fill:#F095BD;fill-rule:nonzero}
         .fil9 {fill:#F0F1CA;fill-rule:nonzero}
         .fil40 {fill:#F6B59F;fill-rule:nonzero}
         .fil171 {fill:#F6CDE2;fill-rule:nonzero}
         .fil42 {fill:#F8F098;fill-rule:nonzero}
         .fil31 {fill:#F9B425;fill-rule:nonzero}
         .fil37 {fill:#F9DBCC;fill-rule:nonzero}
         .fil80 {fill:#FAA12B;fill-rule:nonzero}
         .fil33 {fill:#FAB51C;fill-rule:nonzero}
         .fil24 {fill:#FABB1A;fill-rule:nonzero}
         .fil83 {fill:#FAD15C;fill-rule:nonzero}
         .fil59 {fill:#FAD56B;fill-rule:nonzero}
         .fil22 {fill:#FBBC17;fill-rule:nonzero}
         .fil43 {fill:#FBE1D1;fill-rule:nonzero}
         .fil38 {fill:#FCF1EB;fill-rule:nonzero}
         .fil49 {fill:#FFAE5A;fill-rule:nonzero}
         .fil12 {fill:#FFC18B;fill-rule:nonzero}
         .fil17 {fill:#FFFF9D;fill-rule:nonzero}
         .fil13 {fill:white;fill-rule:nonzero}
         .fil54 {fill:black;fill-rule:nonzero;fill-opacity:0.050980}
         .fil69 {fill:black;fill-rule:nonzero;fill-opacity:0.101961}
         .fil58 {fill:white;fill-rule:nonzero;fill-opacity:0.101961}
         .fil79 {fill:white;fill-rule:nonzero;fill-opacity:0.149020}
         .fil67 {fill:white;fill-rule:nonzero;fill-opacity:0.200000}
         .fil117 {fill:#FFA7C9;fill-rule:nonzero;fill-opacity:0.600000}
         .fil104 {fill:#FFAAAE;fill-opacity:0.670588}
         .fil16 {fill:#2EA8A8;fill-rule:nonzero;fill-opacity:0.800000}
         .fil151 {fill:#FAD5C0}
         .fil128 {fill:url(#id0)}
         .fil123 {fill:url(#id1)}
         .fil130 {fill:url(#id2)}
         .fil132 {fill:url(#id3)}
         .fil140 {fill:url(#id4)}
         .fil120 {fill:url(#id5)}
         .fil119 {fill:url(#id6)}
         .fil160 {fill:url(#id7)}
         .fil124 {fill:url(#id8)}
         .fil91 {fill:url(#id9);fill-rule:nonzero}
         .fil88 {fill:url(#id10);fill-rule:nonzero}
         .fil50 {fill:url(#id11);fill-rule:nonzero}
         .fil87 {fill:url(#id12);fill-rule:nonzero}
         .fil89 {fill:url(#id13);fill-rule:nonzero}
         .fil90 {fill:url(#id14);fill-rule:nonzero}
         ]]>
     </style>
     <linearGradient id="id0" gradientUnits="userSpaceOnUse" x1="12372.1" y1="7711.31" x2="12835.2" y2="7084.82">
         <stop offset="0" style="stop-opacity:1; stop-color:#D6D7CC"/>
         <stop offset="1" style="stop-opacity:1; stop-color:white"/>
     </linearGradient>
     <linearGradient id="id1" gradientUnits="userSpaceOnUse" x1="13275.5" y1="7437.54" x2="13834.8" y2="7437.54">
         <stop offset="0" style="stop-opacity:1; stop-color:#D2D2C6"/>
         <stop offset="1" style="stop-opacity:1; stop-color:white"/>
     </linearGradient>
     <linearGradient id="id2" gradientUnits="userSpaceOnUse" x1="11511" y1="7163.97" x2="12035.4" y2="7163.97">
         <stop offset="0" style="stop-opacity:1; stop-color:#DDDAD0"/>
         <stop offset="1" style="stop-opacity:1; stop-color:white"/>
     </linearGradient>
     <linearGradient id="id3" gradientUnits="userSpaceOnUse" x1="13846.4" y1="5723.9" x2="14179.1" y2="5867.75">
         <stop offset="0" style="stop-opacity:1; stop-color:#C3C2B6"/>
         <stop offset="0.588235" style="stop-opacity:1; stop-color:#C3C2B6"/>
         <stop offset="0.490196" style="stop-opacity:1; stop-color:#EBEBEB"/>
         <stop offset="1" style="stop-opacity:1; stop-color:#C3C2B6"/>
     </linearGradient>
     <linearGradient id="id4" gradientUnits="userSpaceOnUse" x1="11809.3" y1="6402.96" x2="12224.8" y2="6402.96">
         <stop offset="0" style="stop-opacity:1; stop-color:#C5CEC5"/>
         <stop offset="1" style="stop-opacity:1; stop-color:white"/>
     </linearGradient>
     <linearGradient id="id5" gradientUnits="userSpaceOnUse" x1="13594" y1="6630.77" x2="14019.6" y2="6630.77">
         <stop offset="0" style="stop-opacity:1; stop-color:#D2D5CE"/>
         <stop offset="1" style="stop-opacity:1; stop-color:white"/>
     </linearGradient>
     <linearGradient id="id6" gradientUnits="userSpaceOnUse" x1="14653.1" y1="6748.26" x2="14912.6" y2="6916.73">
         <stop offset="0" style="stop-opacity:1; stop-color:#D0D2CA"/>
         <stop offset="1" style="stop-opacity:1; stop-color:white"/>
     </linearGradient>
     <linearGradient id="id7" gradientUnits="userSpaceOnUse" x1="12507.3" y1="5515.91" x2="13122.5" y2="4403.93">
         <stop offset="0" style="stop-opacity:1; stop-color:#EDEEE9"/>
         <stop offset="1" style="stop-opacity:1; stop-color:white"/>
     </linearGradient>
     <linearGradient id="id8" gradientUnits="userSpaceOnUse" xlink:href="#id5" x1="13776.8" y1="6725.74" x2="14531.1" y2="7122.07">
     </linearGradient>
     <linearGradient id="id9" gradientUnits="objectBoundingBox" x1="50.0002%" y1="9.9994%" x2="50.0002%" y2="90.0006%">
         <stop offset="0" style="stop-opacity:1; stop-color:#7A5841"/>
         <stop offset="1" style="stop-opacity:1; stop-color:#705541"/>
     </linearGradient>
     <linearGradient id="id10" gradientUnits="objectBoundingBox" x1="49.9998%" y1="83%" x2="49.9998%" y2="17%">
         <stop offset="0" style="stop-opacity:1; stop-color:#B49074"/>
         <stop offset="1" style="stop-opacity:1; stop-color:#B49074"/>
     </linearGradient>
     <linearGradient id="id11" gradientUnits="objectBoundingBox" x1="50.0002%" y1="12.9999%" x2="50.0002%" y2="87.0001%">
         <stop offset="0" style="stop-opacity:1; stop-color:#694E3B"/>
         <stop offset="1" style="stop-opacity:1; stop-color:#C29976"/>
     </linearGradient>
     <linearGradient id="id12" gradientUnits="objectBoundingBox" x1="50%" y1="92%" x2="50%" y2="7.99996%">
         <stop offset="0" style="stop-opacity:1; stop-color:#8D6F56"/>
         <stop offset="1" style="stop-opacity:1; stop-color:#8D6F56"/>
     </linearGradient>
     <linearGradient id="id13" gradientUnits="objectBoundingBox" x1="32.6582%" y1="0%" x2="67.3421%" y2="112.25%">
         <stop offset="0" style="stop-opacity:1; stop-color:#C8A687"/>
         <stop offset="1" style="stop-opacity:1; stop-color:#C8A687"/>
     </linearGradient>
     <linearGradient id="id14" gradientUnits="objectBoundingBox" x1="76.461%" y1="92.6351%" x2="23.5398%" y2="7.36486%">
         <stop offset="0" style="stop-opacity:1; stop-color:#8C684A"/>
         <stop offset="1" style="stop-opacity:1; stop-color:#8C684A"/>
     </linearGradient>
 </defs>
        <g id="Слой_x0020_1">
            <metadata id="CorelCorpID_0Corel-Layer"/>
            <g id="_1699616512128">
                <path class="fil0" d="M0 1l0 5859 14452 0 0 -5859 -14452 0zm2595 4630l0 0c17,-31 -7,-69 1,-99 -8,30 16,68 -1,99zm299 -102l0 0c-26,38 -17,91 -76,106 59,-15 50,-68 76,-106 8,-8 8,0 8,8 0,-8 0,-16 -8,-8z"/>
                <path class="fil0" d="M0 1l0 5859 14452 0 0 -5859 -14452 0zm2595 4630l0 0c17,-31 -7,-69 1,-99 -8,30 16,68 -1,99zm299 -102l0 0c-26,38 -17,91 -76,106 59,-15 50,-68 76,-106 8,-8 8,0 8,8 0,-8 0,-16 -8,-8z"/>
                <path class="fil1" d="M1944 283l697 167 22 5c128,32 808,220 1153,690l-531 2356 -1954 -467 613 -2751z"/>
                <path class="fil1" d="M1944 283l697 167 22 5c128,32 808,220 1153,690l-531 2356 -1954 -467 613 -2751z"/>
                <g>
                    <path class="fil2" d="M2369 509c16,-18 21,-39 11,-49 -4,-5 -12,-5 -21,-2l2 2c1,0 2,1 3,2 6,6 3,21 -8,33 -11,12 -24,17 -31,11 -1,-1 -1,-2 -2,-3l-1 -2c-3,9 -2,18 3,23 9,9 29,2 44,-15z"/>
                    <g>
                        <path class="fil2" d="M2369 509c16,-18 21,-39 11,-49 -4,-5 -12,-5 -21,-2l2 2c1,0 2,1 3,2 6,6 3,21 -8,33 -11,12 -24,17 -31,11 -1,-1 -1,-2 -2,-3l-1 -2c-3,9 -2,18 3,23 9,9 29,2 44,-15z"/>
                        <path class="fil3" d="M2297 464l28 42c7,6 20,1 31,-11 11,-12 14,-27 8,-33l-40 -28c-1,6 -5,12 -10,18 -5,6 -12,11 -17,12z"/>
                        <path class="fil3" d="M2297 464l28 42c7,6 20,1 31,-11 11,-12 14,-27 8,-33l-40 -28c-1,6 -5,12 -10,18 -5,6 -12,11 -17,12z"/>
                        <path class="fil2" d="M2314 452c10,-11 14,-26 7,-32 -6,-7 -19,-2 -30,10 -10,12 -13,26 -7,33 6,6 19,1 30,-11z"/>
                        <path class="fil2" d="M2314 452c10,-11 14,-26 7,-32 -6,-7 -19,-2 -30,10 -10,12 -13,26 -7,33 6,6 19,1 30,-11z"/>
                        <path class="fil4" d="M2406 546l-40 -34c1,-1 2,-2 3,-3 1,-2 2,-3 3,-4l34 41z"/>
                        <path class="fil4" d="M2406 546l-40 -34c1,-1 2,-2 3,-3 1,-2 2,-3 3,-4l34 41z"/>
                    </g>
                </g>
                <path class="fil5" d="M2525 422c174,62 556,217 680,414 163,258 185,300 199,355 13,47 193,-148 405,-14l6 -29c-350,-392 -881,-605 -1170,-697l-4 -1 -116 -28z"/>
                <path class="fil5" d="M2525 422c174,62 556,217 680,414 163,258 185,300 199,355 13,47 193,-148 405,-14l6 -29c-350,-392 -881,-605 -1170,-697l-4 -1 -116 -28z"/>
                <path class="fil6" d="M2641 450c0,0 483,148 613,354 130,205 147,239 159,282 11,44 201,-171 403,59 -345,-470 -1025,-658 -1153,-690l-22 -5z"/>
                <path class="fil6" d="M2641 450c0,0 483,148 613,354 130,205 147,239 159,282 11,44 201,-171 403,59 -345,-470 -1025,-658 -1153,-690l-22 -5z"/>
                <polygon class="fil7" points="14452,5860 0,5860 0,5682 14452,5682 "/>
                <polygon class="fil7" points="14452,5860 0,5860 0,5682 14452,5682 "/>
                <polygon class="fil8" points="14452,1 14452,5860 16232,7822 16256,1 "/>
                <polygon class="fil8" points="14452,1 14452,5860 16232,7822 16256,1 "/>
                <polygon class="fil9" points="8,7822 16240,7822 14461,5819 8,5819 "/>
                <polygon class="fil9" points="8,7822 16240,7822 14461,5819 8,5819 "/>
                <polygon class="fil10" points="14452,5819 14452,5682 16232,7629 16232,7822 "/>
                <polygon class="fil10" points="14452,5819 14452,5682 16232,7629 16232,7822 "/>
                <path class="fil11" d="M7124 4007c0,16 -13,30 -28,30 -16,0 -29,-14 -29,-30 0,-17 13,-30 29,-30 15,0 28,13 28,30z"/>
                <path class="fil11" d="M7124 4007c0,16 -13,30 -28,30 -16,0 -29,-14 -29,-30 0,-17 13,-30 29,-30 15,0 28,13 28,30z"/>
                <polygon class="fil12" points="5125,5861 0,5860 0,7109 5937,7109 "/>
                <polygon class="fil12" points="5125,5861 0,5860 0,7109 5937,7109 "/>
                <g>
                    <g>
                        <polygon class="fil13" points="14302,6461 11008,6461 11008,1496 14302,1496 "/>
                        <g>
                            <g>
                                <polygon class="fil13" points="14302,6461 11008,6461 11008,1496 14302,1496 "/>
                                <g>
                                    <g>
                                        <polygon class="fil14" points="12048,2480 11120,2480 11120,1628 12048,1628 "/>
                                        <g>
                                            <g>
                                                <polygon class="fil14" points="12048,2480 11120,2480 11120,1628 12048,1628 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="13120,2480 12191,2480 12191,1628 13120,1628 "/>
                                            <g>
                                                <polygon class="fil14" points="13120,2480 12191,2480 12191,1628 13120,1628 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="14154,2480 13225,2480 13225,1628 14154,1628 "/>
                                            <g>
                                                <polygon class="fil14" points="14154,2480 13225,2480 13225,1628 14154,1628 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="12048,3453 11120,3453 11120,2570 12048,2570 "/>
                                            <g>
                                                <polygon class="fil14" points="12048,3453 11120,3453 11120,2570 12048,2570 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="13120,3453 12191,3453 12191,2570 13120,2570 "/>
                                            <g>
                                                <polygon class="fil14" points="13120,3453 12191,3453 12191,2570 13120,2570 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="14154,3453 13225,3453 13225,2570 14154,2570 "/>
                                            <g>
                                                <polygon class="fil14" points="14154,3453 13225,3453 13225,2570 14154,2570 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="12067,4436 11138,4436 11138,3548 12067,3548 "/>
                                            <g>
                                                <polygon class="fil14" points="12067,4436 11138,4436 11138,3548 12067,3548 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="13138,4436 12210,4436 12210,3548 13138,3548 "/>
                                            <g>
                                                <polygon class="fil14" points="13138,4436 12210,4436 12210,3548 13138,3548 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="14172,4436 13244,4436 13244,3548 14172,3548 "/>
                                            <g>
                                                <polygon class="fil14" points="14172,4436 13244,4436 13244,3548 14172,3548 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="12067,5409 11138,5409 11138,4537 12067,4537 "/>
                                            <g>
                                                <polygon class="fil14" points="12067,5409 11138,5409 11138,4537 12067,4537 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="13138,5409 12210,5409 12210,4537 13138,4537 "/>
                                            <g>
                                                <polygon class="fil14" points="13138,5409 12210,5409 12210,4537 13138,4537 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="14172,5409 13244,5409 13244,4537 14172,4537 "/>
                                            <g>
                                                <polygon class="fil14" points="14172,5409 13244,5409 13244,4537 14172,4537 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="12048,6377 11120,6377 11120,5504 12048,5504 "/>
                                            <g>
                                                <polygon class="fil14" points="12048,6377 11120,6377 11120,5504 12048,5504 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="13120,6377 12191,6377 12191,5504 13120,5504 "/>
                                            <g>
                                                <polygon class="fil14" points="13120,6377 12191,6377 12191,5504 13120,5504 "/>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon class="fil14" points="14154,6377 13225,6377 13225,5504 14154,5504 "/>
                                            <g>
                                                <polygon class="fil14" points="14154,6377 13225,6377 13225,5504 14154,5504 "/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil15" points="11931,6377 11239,6377 11161,5755 12006,5755 "/>
                            <g>
                                <polygon class="fil15" points="11931,6377 11239,6377 11161,5755 12006,5755 "/>
                                <g>
                                    <path class="fil16" d="M11739 5890l-310 0c-4,0 -6,-2 -6,-6l0 -33c0,-3 2,-6 6,-6l310 0c3,0 6,3 6,6l0 33c0,4 -3,6 -6,6z"/>
                                    <g>
                                        <path class="fil16" d="M11739 5890l-310 0c-4,0 -6,-2 -6,-6l0 -33c0,-3 2,-6 6,-6l310 0c3,0 6,3 6,6l0 33c0,4 -3,6 -6,6z"/>
                                    </g>
                                </g>
                                <polygon class="fil15" points="13003,6377 12311,6377 12233,5755 13078,5755 "/>
                                <polygon class="fil15" points="13003,6377 12311,6377 12233,5755 13078,5755 "/>
                                <g>
                                    <path class="fil16" d="M12811 5890l-311 0c-3,0 -6,-2 -6,-6l0 -33c0,-3 3,-6 6,-6l311 0c3,0 6,3 6,6l0 33c0,4 -3,6 -6,6z"/>
                                    <g>
                                        <path class="fil16" d="M12811 5890l-311 0c-3,0 -6,-2 -6,-6l0 -33c0,-3 3,-6 6,-6l311 0c3,0 6,3 6,6l0 33c0,4 -3,6 -6,6z"/>
                                    </g>
                                </g>
                                <polygon class="fil15" points="14037,6377 13345,6377 13267,5755 14112,5755 "/>
                                <polygon class="fil15" points="14037,6377 13345,6377 13267,5755 14112,5755 "/>
                                <g>
                                    <path class="fil16" d="M13845 5890l-311 0c-3,0 -6,-2 -6,-6l0 -33c0,-3 3,-6 6,-6l311 0c3,0 6,3 6,6l0 33c0,4 -3,6 -6,6z"/>
                                    <g>
                                        <path class="fil16" d="M13845 5890l-311 0c-3,0 -6,-2 -6,-6l0 -33c0,-3 3,-6 6,-6l311 0c3,0 6,3 6,6l0 33c0,4 -3,6 -6,6z"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="fil17" d="M13826 4427c0,2 -2,4 -4,4l-258 0c-2,0 -4,-2 -4,-4l0 -245c0,-2 2,-4 4,-4l258 0c2,0 4,2 4,4l0 245z"/>
                                <g>
                                    <g>
                                        <path class="fil17" d="M13826 4427c0,2 -2,4 -4,4l-258 0c-2,0 -4,-2 -4,-4l0 -245c0,-2 2,-4 4,-4l258 0c2,0 4,2 4,4l0 245z"/>
                                        <g>
                                            <g>
                                                <path class="fil18" d="M13797 4412l-208 0c-5,0 -9,-4 -9,-8l0 -199c0,-4 4,-8 9,-8l208 0c5,0 9,4 9,8l0 199c0,4 -4,8 -9,8zm-206 -10l0 0 204 0 0 -195 -204 0 0 195z"/>
                                                <g>
                                                    <g>
                                                        <path class="fil18" d="M13797 4412l-208 0c-5,0 -9,-4 -9,-8l0 -199c0,-4 4,-8 9,-8l208 0c5,0 9,4 9,8l0 199c0,4 -4,8 -9,8zm-206 -10l0 0 204 0 0 -195 -204 0 0 195z"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <path class="fil15" d="M13738 4358c-11,2 -24,5 -39,5 -37,0 -56,-25 -56,-62 0,-37 19,-63 56,-63 15,0 26,3 37,6l-2 25 -10 0 0 -8c0,-2 -1,-5 -2,-9 -7,-2 -16,-4 -23,-4 -25,0 -38,23 -38,53 0,29 13,52 38,52 7,0 17,-1 24,-3 2,-4 3,-8 3,-10 0,-1 0,-8 0,-8l11 0 1 26z"/>
                                            <g>
                                                <path class="fil15" d="M13738 4358c-11,2 -24,5 -39,5 -37,0 -56,-25 -56,-62 0,-37 19,-63 56,-63 15,0 26,3 37,6l-2 25 -10 0 0 -8c0,-2 -1,-5 -2,-9 -7,-2 -16,-4 -23,-4 -25,0 -38,23 -38,53 0,29 13,52 38,52 7,0 17,-1 24,-3 2,-4 3,-8 3,-10 0,-1 0,-8 0,-8l11 0 1 26z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil15" d="M13875 4171c0,3 -2,4 -4,4l-257 0c-3,0 -5,-1 -5,-4l0 -244c0,-3 2,-5 5,-5l257 0c2,0 4,2 4,5l0 244z"/>
                                    <g>
                                        <path class="fil15" d="M13875 4171c0,3 -2,4 -4,4l-257 0c-3,0 -5,-1 -5,-4l0 -244c0,-3 2,-5 5,-5l257 0c2,0 4,2 4,5l0 244z"/>
                                        <path class="fil19" d="M13847 4157l-209 0c-5,0 -9,-4 -9,-9l0 -198c0,-5 4,-9 9,-9l209 0c5,0 9,4 9,9l0 198c0,5 -4,9 -9,9zm-207 -11l0 0 205 0 0 -194 -205 0 0 194z"/>
                                        <path class="fil19" d="M13847 4157l-209 0c-5,0 -9,-4 -9,-9l0 -198c0,-5 4,-9 9,-9l209 0c5,0 9,4 9,9l0 198c0,5 -4,9 -9,9zm-207 -11l0 0 205 0 0 -194 -205 0 0 194z"/>
                                        <g>
                                            <path class="fil17" d="M13776 4013c0,15 -10,26 -24,29l0 1c17,3 30,13 30,31 0,20 -16,32 -37,32 -8,0 -20,-1 -34,-1 -5,0 -18,1 -18,1l-1 -8 13 -3c0,-2 1,-10 1,-13l0 -73c0,-3 -1,-11 -1,-13l-13 -2 1 -10c0,0 13,1 18,1 11,0 21,-1 31,-1 19,0 34,10 34,29zm-53 1l0 0 0 63c0,7 0,16 1,18 4,1 10,1 16,1 14,0 24,-8 24,-23 0,-17 -14,-25 -30,-25l-2 0 1 -10 1 0c15,0 26,-8 26,-23 0,-14 -9,-22 -21,-22 -5,0 -11,0 -15,1 -1,2 -1,12 -1,20z"/>
                                            <g>
                                                <path class="fil17" d="M13776 4013c0,15 -10,26 -24,29l0 1c17,3 30,13 30,31 0,20 -16,32 -37,32 -8,0 -20,-1 -34,-1 -5,0 -18,1 -18,1l-1 -8 13 -3c0,-2 1,-10 1,-13l0 -73c0,-3 -1,-11 -1,-13l-13 -2 1 -10c0,0 13,1 18,1 11,0 21,-1 31,-1 19,0 34,10 34,29zm-53 1l0 0 0 63c0,7 0,16 1,18 4,1 10,1 16,1 14,0 24,-8 24,-23 0,-17 -14,-25 -30,-25l-2 0 1 -10 1 0c15,0 26,-8 26,-23 0,-14 -9,-22 -21,-22 -5,0 -11,0 -15,1 -1,2 -1,12 -1,20z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path class="fil18" d="M13807 3918c0,3 -2,4 -4,4l-258 0c-2,0 -4,-1 -4,-4l0 -244c0,-3 2,-5 4,-5l258 0c2,0 4,2 4,5l0 244z"/>
                                        <g>
                                            <g>
                                                <path class="fil18" d="M13807 3918c0,3 -2,4 -4,4l-258 0c-2,0 -4,-1 -4,-4l0 -244c0,-3 2,-5 4,-5l258 0c2,0 4,2 4,5l0 244z"/>
                                            </g>
                                        </g>
                                        <path class="fil17" d="M13778 3904l-208 0c-5,0 -9,-4 -9,-9l0 -198c0,-5 4,-9 9,-9l208 0c5,0 9,4 9,9l0 198c0,5 -4,9 -9,9zm-206 -11l0 0 204 0 0 -194 -204 0 0 194z"/>
                                        <path class="fil17" d="M13778 3904l-208 0c-5,0 -9,-4 -9,-9l0 -198c0,-5 4,-9 9,-9l208 0c5,0 9,4 9,9l0 198c0,5 -4,9 -9,9zm-206 -11l0 0 204 0 0 -194 -204 0 0 194z"/>
                                        <g>
                                            <path class="fil13" d="M13732 3852l-18 0c-6,0 -26,1 -26,1l-1 -8 14 -4 -5 -18 -4 -10 -39 0 -6 18 -2 10 13 2 -1 9 -16 0c-6,0 -24,1 -24,1l-1 -8 12 -3 7 -17 32 -93 11 -1 37 96 7 14 11 2 -1 9zm-76 -48l0 0 32 0 -16 -46 -16 46z"/>
                                            <g>
                                                <path class="fil13" d="M13732 3852l-18 0c-6,0 -26,1 -26,1l-1 -8 14 -4 -5 -18 -4 -10 -39 0 -6 18 -2 10 13 2 -1 9 -16 0c-6,0 -24,1 -24,1l-1 -8 12 -3 7 -17 32 -93 11 -1 37 96 7 14 11 2 -1 9zm-76 -48l0 0 32 0 -16 -46 -16 46z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="fil20" d="M12387 3402c0,7 -6,12 -12,12 -7,0 -13,-5 -13,-12l0 -442c0,-7 6,-12 13,-12 6,0 12,5 12,12l0 442z"/>
                                    <g>
                                        <g>
                                            <g>
                                                <path class="fil20" d="M12387 3402c0,7 -6,12 -12,12 -7,0 -13,-5 -13,-12l0 -442c0,-7 6,-12 13,-12 6,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12497 3402c0,7 -5,12 -12,12 -6,0 -12,-5 -12,-12l0 -442c0,-7 6,-12 12,-12 7,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12497 3402c0,7 -5,12 -12,12 -6,0 -12,-5 -12,-12l0 -442c0,-7 6,-12 12,-12 7,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12608 3402c0,7 -5,12 -12,12 -7,0 -12,-5 -12,-12l0 -442c0,-7 5,-12 12,-12 7,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12608 3402c0,7 -5,12 -12,12 -7,0 -12,-5 -12,-12l0 -442c0,-7 5,-12 12,-12 7,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12719 3402c0,7 -6,12 -12,12 -7,0 -12,-5 -12,-12l0 -442c0,-7 5,-12 12,-12 6,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12719 3402c0,7 -6,12 -12,12 -7,0 -12,-5 -12,-12l0 -442c0,-7 5,-12 12,-12 6,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12830 3402c0,7 -6,12 -12,12 -7,0 -13,-5 -13,-12l0 -442c0,-7 6,-12 13,-12 6,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12830 3402c0,7 -6,12 -12,12 -7,0 -13,-5 -13,-12l0 -442c0,-7 6,-12 13,-12 6,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12940 3402c0,7 -5,12 -12,12 -6,0 -12,-5 -12,-12l0 -442c0,-7 6,-12 12,-12 7,0 12,5 12,12l0 442z"/>
                                                <path class="fil20" d="M12940 3402c0,7 -5,12 -12,12 -6,0 -12,-5 -12,-12l0 -442c0,-7 6,-12 12,-12 7,0 12,5 12,12l0 442z"/>
                                            </g>
                                        </g>
                                        <path class="fil20" d="M12979 3428c0,14 -11,25 -26,25l-603 0c-15,0 -27,-11 -27,-25 0,-14 12,-26 27,-26l603 0c15,0 26,12 26,26z"/>
                                        <path class="fil20" d="M12979 3428c0,14 -11,25 -26,25l-603 0c-15,0 -27,-11 -27,-25 0,-14 12,-26 27,-26l603 0c15,0 26,12 26,26z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path class="fil18" d="M12407 3387c0,9 -7,15 -15,15l-35 0c-8,0 -15,-6 -15,-15 0,-8 7,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                        <g>
                                            <g>
                                                <path class="fil18" d="M12407 3387c0,9 -7,15 -15,15l-35 0c-8,0 -15,-6 -15,-15 0,-8 7,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                            </g>
                                        </g>
                                        <path class="fil15" d="M12407 3336c0,9 -7,16 -15,16l-35 0c-8,0 -15,-7 -15,-16 0,-8 7,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                        <path class="fil15" d="M12407 3336c0,9 -7,16 -15,16l-35 0c-8,0 -15,-7 -15,-16 0,-8 7,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path class="fil18" d="M12518 3387c0,9 -7,15 -15,15l-35 0c-9,0 -15,-6 -15,-15 0,-8 6,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                        <g>
                                            <g>
                                                <path class="fil18" d="M12518 3387c0,9 -7,15 -15,15l-35 0c-9,0 -15,-6 -15,-15 0,-8 6,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                            </g>
                                        </g>
                                        <path class="fil17" d="M12518 3336c0,8 -7,15 -15,15l-35 0c-9,0 -15,-7 -15,-15 0,-9 6,-16 15,-16l35 0c8,0 15,7 15,16z"/>
                                        <path class="fil17" d="M12518 3336c0,8 -7,15 -15,15l-35 0c-9,0 -15,-7 -15,-15 0,-9 6,-16 15,-16l35 0c8,0 15,7 15,16z"/>
                                        <path class="fil15" d="M12518 3284c0,8 -7,15 -15,15l-35 0c-9,0 -15,-7 -15,-15 0,-8 6,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                        <path class="fil15" d="M12518 3284c0,8 -7,15 -15,15l-35 0c-9,0 -15,-7 -15,-15 0,-8 6,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                        <g>
                                            <path class="fil18" d="M12518 3232c0,8 -7,15 -15,15l-35 0c-9,0 -15,-7 -15,-15 0,-8 6,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                            <g>
                                                <path class="fil18" d="M12518 3232c0,8 -7,15 -15,15l-35 0c-9,0 -15,-7 -15,-15 0,-8 6,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil15" d="M12629 3387c0,9 -7,15 -16,15l-34 0c-9,0 -16,-6 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 16,7 16,15z"/>
                                    <g>
                                        <path class="fil15" d="M12629 3387c0,9 -7,15 -16,15l-34 0c-9,0 -16,-6 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 16,7 16,15z"/>
                                        <g>
                                            <path class="fil18" d="M12629 3336c0,9 -7,16 -16,16l-34 0c-9,0 -16,-7 -16,-16 0,-8 7,-15 16,-15l34 0c9,0 16,7 16,15z"/>
                                            <g>
                                                <path class="fil18" d="M12629 3336c0,9 -7,16 -16,16l-34 0c-9,0 -16,-7 -16,-16 0,-8 7,-15 16,-15l34 0c9,0 16,7 16,15z"/>
                                            </g>
                                        </g>
                                        <path class="fil19" d="M12629 3286c0,8 -7,15 -16,15l-34 0c-9,0 -16,-7 -16,-15 0,-9 7,-15 16,-15l34 0c9,0 16,6 16,15z"/>
                                        <path class="fil19" d="M12629 3286c0,8 -7,15 -16,15l-34 0c-9,0 -16,-7 -16,-15 0,-9 7,-15 16,-15l34 0c9,0 16,6 16,15z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil19" d="M12739 3387c0,9 -6,15 -15,15l-34 0c-9,0 -16,-6 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                    <g>
                                        <path class="fil19" d="M12739 3387c0,9 -6,15 -15,15l-34 0c-9,0 -16,-6 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                        <g>
                                            <path class="fil18" d="M12739 3334c0,8 -6,15 -15,15l-34 0c-9,0 -16,-7 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                            <g>
                                                <path class="fil18" d="M12739 3334c0,8 -6,15 -15,15l-34 0c-9,0 -16,-7 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                            </g>
                                        </g>
                                        <path class="fil15" d="M12739 3281c0,8 -6,15 -15,15l-34 0c-9,0 -16,-7 -16,-15 0,-9 7,-15 16,-15l34 0c9,0 15,6 15,15z"/>
                                        <path class="fil15" d="M12739 3281c0,8 -6,15 -15,15l-34 0c-9,0 -16,-7 -16,-15 0,-9 7,-15 16,-15l34 0c9,0 15,6 15,15z"/>
                                        <g>
                                            <path class="fil18" d="M12739 3227c0,9 -6,16 -15,16l-34 0c-9,0 -16,-7 -16,-16 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                            <g>
                                                <path class="fil18" d="M12739 3227c0,9 -6,16 -15,16l-34 0c-9,0 -16,-7 -16,-16 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                            </g>
                                        </g>
                                        <path class="fil17" d="M12739 3174c0,9 -6,15 -15,15l-34 0c-9,0 -16,-6 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                        <path class="fil17" d="M12739 3174c0,9 -6,15 -15,15l-34 0c-9,0 -16,-6 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil17" d="M12851 3387c0,9 -6,15 -15,15l-34 0c-9,0 -16,-6 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                    <g>
                                        <path class="fil17" d="M12851 3387c0,9 -6,15 -15,15l-34 0c-9,0 -16,-6 -16,-15 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                        <g>
                                            <path class="fil18" d="M12851 3336c0,9 -6,16 -15,16l-34 0c-9,0 -16,-7 -16,-16 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                            <g>
                                                <path class="fil18" d="M12851 3336c0,9 -6,16 -15,16l-34 0c-9,0 -16,-7 -16,-16 0,-8 7,-15 16,-15l34 0c9,0 15,7 15,15z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil15" d="M12961 3387c0,9 -7,15 -15,15l-35 0c-8,0 -15,-6 -15,-15 0,-8 7,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                    <g>
                                        <path class="fil15" d="M12961 3387c0,9 -7,15 -15,15l-35 0c-8,0 -15,-6 -15,-15 0,-8 7,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                        <path class="fil19" d="M12961 3336c0,9 -7,16 -15,16l-35 0c-8,0 -15,-7 -15,-16 0,-8 7,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                        <path class="fil19" d="M12961 3336c0,9 -7,16 -15,16l-35 0c-8,0 -15,-7 -15,-16 0,-8 7,-15 15,-15l35 0c8,0 15,7 15,15z"/>
                                        <path class="fil17" d="M12961 3286c0,8 -7,15 -15,15l-35 0c-8,0 -15,-7 -15,-15 0,-9 7,-15 15,-15l35 0c8,0 15,6 15,15z"/>
                                        <path class="fil17" d="M12961 3286c0,8 -7,15 -15,15l-35 0c-8,0 -15,-7 -15,-15 0,-9 7,-15 15,-15l35 0c8,0 15,6 15,15z"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <path class="fil17" d="M12706 4841c54,0 99,-22 110,-53 -34,-11 -71,-17 -110,-17 -38,0 -75,6 -110,17 12,31 56,53 110,53z"/>
                            <g>
                                <path class="fil17" d="M12706 4841c54,0 99,-22 110,-53 -34,-11 -71,-17 -110,-17 -38,0 -75,6 -110,17 12,31 56,53 110,53z"/>
                                <g>
                                    <path class="fil13" d="M12767 4830c-17,7 -38,11 -61,11 -19,0 -38,-3 -54,-8 -33,55 -176,313 -47,566 32,10 66,15 101,15 40,0 77,-6 113,-18 128,-256 -21,-517 -52,-566z"/>
                                    <g>
                                        <path class="fil13" d="M12767 4830c-17,7 -38,11 -61,11 -19,0 -38,-3 -54,-8 -33,55 -176,313 -47,566 32,10 66,15 101,15 40,0 77,-6 113,-18 128,-256 -21,-517 -52,-566z"/>
                                        <path class="fil19" d="M12652 4833c-28,-9 -49,-25 -56,-45 -133,44 -228,164 -228,304 0,144 100,266 237,307 -129,-253 14,-511 47,-566z"/>
                                        <path class="fil19" d="M12652 4833c-28,-9 -49,-25 -56,-45 -133,44 -228,164 -228,304 0,144 100,266 237,307 -129,-253 14,-511 47,-566z"/>
                                        <g>
                                            <path class="fil18" d="M13044 5092c0,-140 -95,-260 -228,-304 -7,18 -24,33 -49,42 31,49 180,310 52,566 131,-44 225,-163 225,-304z"/>
                                            <g>
                                                <path class="fil18" d="M13044 5092c0,-140 -95,-260 -228,-304 -7,18 -24,33 -49,42 31,49 180,310 52,566 131,-44 225,-163 225,-304z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="fil15" d="M13842 2390l-116 0c0,0 0,-1 0,-2l0 -374c0,-20 -17,-36 -38,-36 -20,0 -37,16 -37,36l0 374c0,1 0,2 0,2l-116 0c-26,0 -47,20 -47,45 0,25 21,45 47,45l307 0c26,0 47,-20 47,-45 0,-25 -21,-45 -47,-45z"/>
                                <g>
                                    <g>
                                        <path class="fil15" d="M13842 2390l-116 0c0,0 0,-1 0,-2l0 -374c0,-20 -17,-36 -38,-36 -20,0 -37,16 -37,36l0 374c0,1 0,2 0,2l-116 0c-26,0 -47,20 -47,45 0,25 21,45 47,45l307 0c26,0 47,-20 47,-45 0,-25 -21,-45 -47,-45z"/>
                                        <g>
                                            <g>
                                                <path class="fil18" d="M13847 2254c0,25 -21,45 -46,45l-225 0c-26,0 -46,-20 -46,-45 0,-25 20,-45 46,-45l225 0c25,0 46,20 46,45z"/>
                                                <g>
                                                    <g>
                                                        <path class="fil18" d="M13847 2254c0,25 -21,45 -46,45l-225 0c-26,0 -46,-20 -46,-45 0,-25 20,-45 46,-45l225 0c25,0 46,20 46,45z"/>
                                                    </g>
                                                </g>
                                                <path class="fil17" d="M13818 2169c0,22 -17,40 -38,40l-184 0c-20,0 -37,-18 -37,-40 0,-21 17,-39 37,-39l184 0c21,0 38,18 38,39z"/>
                                                <path class="fil17" d="M13818 2169c0,22 -17,40 -38,40l-184 0c-20,0 -37,-18 -37,-40 0,-21 17,-39 37,-39l184 0c21,0 38,18 38,39z"/>
                                                <g>
                                                    <path class="fil18" d="M13797 2097c0,19 -14,34 -31,34l-155 0c-17,0 -31,-15 -31,-34 0,-18 14,-33 31,-33l155 0c17,0 31,15 31,33z"/>
                                                    <g>
                                                        <path class="fil18" d="M13797 2097c0,19 -14,34 -31,34l-155 0c-17,0 -31,-15 -31,-34 0,-18 14,-33 31,-33l155 0c17,0 31,15 31,33z"/>
                                                    </g>
                                                </g>
                                                <path class="fil17" d="M13868 2345c0,25 -23,46 -52,46l-256 0c-28,0 -52,-21 -52,-46 0,-25 24,-46 52,-46l256 0c29,0 52,21 52,46z"/>
                                                <path class="fil17" d="M13868 2345c0,25 -23,46 -52,46l-256 0c-28,0 -52,-21 -52,-46 0,-25 24,-46 52,-46l256 0c29,0 52,21 52,46z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil15" points="13928,5412 14118,4798 14172,4821 14172,4918 14016,5412 "/>
                            <g>
                                <polygon class="fil15" points="13928,5412 14118,4798 14172,4821 14172,4918 14016,5412 "/>
                                <polygon class="fil19" points="13924,5412 13839,5412 14040,4771 14118,4793 "/>
                                <polygon class="fil19" points="13924,5412 13839,5412 14040,4771 14118,4793 "/>
                                <polygon class="fil17" points="13839,5412 13754,5412 13929,4854 14004,4875 "/>
                                <polygon class="fil17" points="13839,5412 13754,5412 13929,4854 14004,4875 "/>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil17" points="12492,4436 12380,4436 12380,4040 12492,4040 "/>
                            <g>
                                <polygon class="fil17" points="12492,4436 12380,4436 12380,4040 12492,4040 "/>
                                <polygon class="fil15" points="12602,4436 12492,4436 12492,3693 12602,3693 "/>
                                <polygon class="fil15" points="12602,4436 12492,4436 12492,3693 12602,3693 "/>
                                <g>
                                    <polygon class="fil21" points="12706,4436 12602,4436 12602,3901 12706,3901 "/>
                                    <g>
                                        <polygon class="fil21" points="12706,4436 12602,4436 12602,3901 12706,3901 "/>
                                    </g>
                                </g>
                                <g>
                                    <polygon class="fil18" points="12812,4436 12706,4436 12706,3784 12812,3784 "/>
                                    <g>
                                        <polygon class="fil18" points="12812,4436 12706,4436 12706,3784 12812,3784 "/>
                                    </g>
                                </g>
                                <g>
                                    <polygon class="fil21" points="12812,4436 12918,4436 12918,3784 12812,3784 "/>
                                    <g>
                                        <polygon class="fil21" points="12812,4436 12918,4436 12918,3784 12812,3784 "/>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil13" points="14092,3166 13376,3166 13376,3116 14092,3116 "/>
                            <g>
                                <polygon class="fil13" points="14092,3166 13376,3166 13376,3116 14092,3116 "/>
                                <g>
                                    <polygon class="fil18" points="14042,3267 13339,3267 13339,3166 14042,3166 "/>
                                    <g>
                                        <polygon class="fil18" points="14042,3267 13339,3267 13339,3166 14042,3166 "/>
                                    </g>
                                </g>
                                <polygon class="fil22" points="14099,3362 13318,3362 13318,3267 14099,3267 "/>
                                <polygon class="fil22" points="14099,3362 13318,3362 13318,3267 14099,3267 "/>
                                <polygon class="fil23" points="13278,3362 14099,3362 14099,3453 13278,3453 "/>
                                <polygon class="fil23" points="13278,3362 14099,3362 14099,3453 13278,3453 "/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="fil18" d="M13522 2835c0,0 -30,-10 -34,0 -4,11 0,39 34,36 35,-3 0,-36 0,-36z"/>
                                <g>
                                    <g>
                                        <path class="fil18" d="M13522 2835c0,0 -30,-10 -34,0 -4,11 0,39 34,36 35,-3 0,-36 0,-36z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil18" d="M13502 2863c0,0 -17,31 -6,37 10,6 32,-4 32,-12 0,-8 -11,-21 -11,-21l-15 -4z"/>
                                    <g>
                                        <path class="fil18" d="M13502 2863c0,0 -17,31 -6,37 10,6 32,-4 32,-12 0,-8 -11,-21 -11,-21l-15 -4z"/>
                                    </g>
                                </g>
                                <path class="fil24" d="M13707 2913c-15,-2 -24,-15 -20,-28 11,-39 10,-130 -84,-130 -134,0 -102,168 -55,168 -61,38 -15,121 -15,121 0,0 40,66 87,70 47,4 189,0 189,0 0,0 109,-54 122,-141 14,-87 -20,-115 -51,-115 -31,0 -47,37 -76,50 -28,12 -70,9 -97,5z"/>
                                <path class="fil24" d="M13707 2913c-15,-2 -24,-15 -20,-28 11,-39 10,-130 -84,-130 -134,0 -102,168 -55,168 -61,38 -15,121 -15,121 0,0 40,66 87,70 47,4 189,0 189,0 0,0 109,-54 122,-141 14,-87 -20,-115 -51,-115 -31,0 -47,37 -76,50 -28,12 -70,9 -97,5z"/>
                                <g>
                                    <path class="fil18" d="M13806 3019c0,28 -42,50 -93,50 -51,0 -93,-22 -93,-50 0,-28 42,-51 93,-51 51,0 93,23 93,51z"/>
                                    <g>
                                        <path class="fil18" d="M13806 3019c0,28 -42,50 -93,50 -51,0 -93,-22 -93,-50 0,-28 42,-51 93,-51 51,0 93,23 93,51z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil13" d="M13599 2835c0,17 -15,32 -33,32 -19,0 -34,-15 -34,-32 0,-18 15,-32 34,-32 18,0 33,14 33,32z"/>
                                    <g>
                                        <path class="fil13" d="M13599 2835c0,17 -15,32 -33,32 -19,0 -34,-15 -34,-32 0,-18 15,-32 34,-32 18,0 33,14 33,32z"/>
                                        <path class="fil25" d="M13587 2835c0,11 -9,20 -21,20 -12,0 -22,-9 -22,-20 0,-11 10,-20 22,-20 12,0 21,9 21,20z"/>
                                        <path class="fil25" d="M13587 2835c0,11 -9,20 -21,20 -12,0 -22,-9 -22,-20 0,-11 10,-20 22,-20 12,0 21,9 21,20z"/>
                                        <path class="fil13" d="M13569 2828c0,5 -4,10 -10,10 -6,0 -11,-5 -11,-10 0,-6 5,-10 11,-10 6,0 10,4 10,10z"/>
                                        <path class="fil13" d="M13569 2828c0,5 -4,10 -10,10 -6,0 -11,-5 -11,-10 0,-6 5,-10 11,-10 6,0 10,4 10,10z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil26" d="M13546 2800c0,0 2,-3 7,-6 2,-2 5,-3 9,-5 2,0 3,-1 5,-1 2,0 4,0 6,1 2,0 4,0 6,1 2,1 3,2 5,3 1,1 3,2 4,3 1,1 3,2 4,3 2,2 3,4 4,5 1,1 2,2 2,2 0,0 -1,-1 -2,-2 -1,-1 -3,-3 -5,-5 -1,-1 -2,-2 -3,-3 -2,-1 -3,-2 -5,-3 -1,-1 -3,-1 -5,-2 -1,-1 -3,-1 -5,-1 -2,0 -4,-1 -6,-1 -1,1 -3,1 -5,1 -3,1 -6,3 -9,4 -5,3 -7,6 -7,6z"/>
                                    <g>
                                        <path class="fil26" d="M13546 2800c0,0 2,-3 7,-6 2,-2 5,-3 9,-5 2,0 3,-1 5,-1 2,0 4,0 6,1 2,0 4,0 6,1 2,1 3,2 5,3 1,1 3,2 4,3 1,1 3,2 4,3 2,2 3,4 4,5 1,1 2,2 2,2 0,0 -1,-1 -2,-2 -1,-1 -3,-3 -5,-5 -1,-1 -2,-2 -3,-3 -2,-1 -3,-2 -5,-3 -1,-1 -3,-1 -5,-2 -1,-1 -3,-1 -5,-1 -2,0 -4,-1 -6,-1 -1,1 -3,1 -5,1 -3,1 -6,3 -9,4 -5,3 -7,6 -7,6z"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="fil27" d="M13466 5115c0,28 -23,50 -52,50 -29,0 -53,-22 -53,-50 0,-27 24,-50 53,-50 29,0 52,23 52,50z"/>
                                <g>
                                    <g>
                                        <path class="fil27" d="M13466 5115c0,28 -23,50 -52,50 -29,0 -53,-22 -53,-50 0,-27 24,-50 53,-50 29,0 52,23 52,50z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil27" d="M13707 5115c0,28 -23,50 -52,50 -29,0 -53,-22 -53,-50 0,-27 24,-50 53,-50 29,0 52,23 52,50z"/>
                                    <g>
                                        <path class="fil27" d="M13707 5115c0,28 -23,50 -52,50 -29,0 -53,-22 -53,-50 0,-27 24,-50 53,-50 29,0 52,23 52,50z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil18" d="M13621 5409c61,-29 105,-92 105,-162 0,-98 -83,-177 -186,-177 -103,0 -186,79 -186,177 0,72 45,134 110,162l157 0z"/>
                                    <g>
                                        <path class="fil18" d="M13621 5409c61,-29 105,-92 105,-162 0,-98 -83,-177 -186,-177 -103,0 -186,79 -186,177 0,72 45,134 110,162l157 0z"/>
                                    </g>
                                </g>
                                <path class="fil28" d="M13483 5190c0,12 -11,22 -23,22 -13,0 -23,-10 -23,-22 0,-12 10,-22 23,-22 12,0 23,10 23,22z"/>
                                <path class="fil28" d="M13483 5190c0,12 -11,22 -23,22 -13,0 -23,-10 -23,-22 0,-12 10,-22 23,-22 12,0 23,10 23,22z"/>
                                <path class="fil28" d="M13636 5190c0,12 -11,22 -24,22 -12,0 -23,-10 -23,-22 0,-12 11,-22 23,-22 13,0 24,10 24,22z"/>
                                <path class="fil28" d="M13636 5190c0,12 -11,22 -24,22 -12,0 -23,-10 -23,-22 0,-12 11,-22 23,-22 13,0 24,10 24,22z"/>
                                <path class="fil13" d="M13606 5306c0,37 -32,67 -70,67 -39,0 -70,-30 -70,-67 0,-37 31,-66 70,-66 38,0 70,29 70,66z"/>
                                <path class="fil13" d="M13606 5306c0,37 -32,67 -70,67 -39,0 -70,-30 -70,-67 0,-37 31,-66 70,-66 38,0 70,29 70,66z"/>
                                <path class="fil28" d="M13524 5306c0,8 -7,14 -15,14 -8,0 -14,-6 -14,-14 0,-8 6,-14 14,-14 8,0 15,6 15,14z"/>
                                <path class="fil28" d="M13524 5306c0,8 -7,14 -15,14 -8,0 -14,-6 -14,-14 0,-8 6,-14 14,-14 8,0 15,6 15,14z"/>
                                <path class="fil28" d="M13577 5306c0,8 -7,14 -15,14 -8,0 -14,-6 -14,-14 0,-8 6,-14 14,-14 8,0 15,6 15,14z"/>
                                <path class="fil28" d="M13577 5306c0,8 -7,14 -15,14 -8,0 -14,-6 -14,-14 0,-8 6,-14 14,-14 8,0 15,6 15,14z"/>
                            </g>
                        </g>
                        <g>
                            <path class="fil15" d="M11950 3248c0,109 -94,198 -209,198 -115,0 -208,-89 -208,-198 0,-110 93,-199 208,-199 115,0 209,89 209,199z"/>
                            <g>
                                <path class="fil15" d="M11950 3248c0,109 -94,198 -209,198 -115,0 -208,-89 -208,-198 0,-110 93,-199 208,-199 115,0 209,89 209,199z"/>
                                <path class="fil15" d="M11703 3044c7,20 -2,40 -21,46 -18,6 -38,-5 -45,-25 -7,-19 3,-39 21,-45 18,-6 38,5 45,24z"/>
                                <path class="fil15" d="M11703 3044c7,20 -2,40 -21,46 -18,6 -38,-5 -45,-25 -7,-19 3,-39 21,-45 18,-6 38,5 45,24z"/>
                                <path class="fil15" d="M11863 3069c-9,18 -30,27 -47,19 -18,-7 -25,-28 -16,-47 9,-19 31,-27 48,-20 18,8 24,29 15,48z"/>
                                <path class="fil15" d="M11863 3069c-9,18 -30,27 -47,19 -18,-7 -25,-28 -16,-47 9,-19 31,-27 48,-20 18,8 24,29 15,48z"/>
                                <path class="fil13" d="M11726 3181c0,39 -33,71 -74,71 -41,0 -75,-32 -75,-71 0,-39 34,-71 75,-71 41,0 74,32 74,71z"/>
                                <path class="fil13" d="M11726 3181c0,39 -33,71 -74,71 -41,0 -75,-32 -75,-71 0,-39 34,-71 75,-71 41,0 74,32 74,71z"/>
                                <path class="fil13" d="M11906 3181c0,39 -33,71 -74,71 -41,0 -75,-32 -75,-71 0,-39 34,-71 75,-71 41,0 74,32 74,71z"/>
                                <path class="fil13" d="M11906 3181c0,39 -33,71 -74,71 -41,0 -75,-32 -75,-71 0,-39 34,-71 75,-71 41,0 74,32 74,71z"/>
                                <path class="fil29" d="M11682 3181c0,16 -14,29 -30,29 -17,0 -31,-13 -31,-29 0,-16 14,-29 31,-29 16,0 30,13 30,29z"/>
                                <path class="fil29" d="M11682 3181c0,16 -14,29 -30,29 -17,0 -31,-13 -31,-29 0,-16 14,-29 31,-29 16,0 30,13 30,29z"/>
                                <path class="fil29" d="M11862 3181c0,16 -13,29 -30,29 -17,0 -31,-13 -31,-29 0,-16 14,-29 31,-29 17,0 30,13 30,29z"/>
                                <path class="fil29" d="M11862 3181c0,16 -13,29 -30,29 -17,0 -31,-13 -31,-29 0,-16 14,-29 31,-29 17,0 30,13 30,29z"/>
                                <path class="fil13" d="M11652 3190c-5,0 -9,-4 -9,-9 0,-5 4,-9 9,-9 6,0 10,4 10,9 0,5 -4,9 -10,9z"/>
                                <path class="fil13" d="M11652 3190c-5,0 -9,-4 -9,-9 0,-5 4,-9 9,-9 6,0 10,4 10,9 0,5 -4,9 -10,9z"/>
                                <path class="fil13" d="M11832 3190c-5,0 -9,-4 -9,-9 0,-5 4,-9 9,-9 5,0 9,4 9,9 0,5 -4,9 -9,9z"/>
                                <path class="fil13" d="M11832 3190c-5,0 -9,-4 -9,-9 0,-5 4,-9 9,-9 5,0 9,4 9,9 0,5 -4,9 -9,9z"/>
                                <path class="fil30" d="M11787 3294c0,23 -21,43 -46,43 -25,0 -45,-20 -45,-43 0,-24 20,-44 45,-44 25,0 46,20 46,44z"/>
                                <path class="fil30" d="M11787 3294c0,23 -21,43 -46,43 -25,0 -45,-20 -45,-43 0,-24 20,-44 45,-44 25,0 46,20 46,44z"/>
                                <path class="fil30" d="M11763 3378c0,20 -22,37 -49,37 -27,0 -49,-17 -49,-37l98 0z"/>
                                <path class="fil30" d="M11763 3378c0,20 -22,37 -49,37 -27,0 -49,-17 -49,-37l98 0z"/>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil17" points="11379,2987 11219,2987 11219,2835 11379,2835 "/>
                            <g>
                                <polygon class="fil17" points="11379,2987 11219,2987 11219,2835 11379,2835 "/>
                                <polygon class="fil19" points="11435,3140 11275,3140 11275,2987 11435,2987 "/>
                                <polygon class="fil19" points="11435,3140 11275,3140 11275,2987 11435,2987 "/>
                                <polygon class="fil13" points="11379,3292 11219,3292 11219,3140 11379,3140 "/>
                                <polygon class="fil13" points="11379,3292 11219,3292 11219,3140 11379,3140 "/>
                                <polygon class="fil30" points="11419,3444 11259,3444 11259,3292 11419,3292 "/>
                                <polygon class="fil30" points="11419,3444 11259,3444 11259,3292 11419,3292 "/>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil19" points="12028,2480 11913,2480 11913,1794 12028,1794 "/>
                            <g>
                                <polygon class="fil19" points="12028,2480 11913,2480 11913,1794 12028,1794 "/>
                                <polygon class="fil17" points="11913,2480 11796,2480 11796,1794 11913,1794 "/>
                                <polygon class="fil17" points="11913,2480 11796,2480 11796,1794 11913,1794 "/>
                                <polygon class="fil23" points="11796,2480 11678,2480 11678,1875 11796,1875 "/>
                                <polygon class="fil23" points="11796,2480 11678,2480 11678,1875 11796,1875 "/>
                                <polygon class="fil15" points="11678,2480 11605,2480 11605,1821 11678,1821 "/>
                                <polygon class="fil15" points="11678,2480 11605,2480 11605,1821 11678,1821 "/>
                                <g>
                                    <polygon class="fil18" points="11605,2480 11494,2480 11494,1966 11605,1966 "/>
                                    <g>
                                        <polygon class="fil18" points="11605,2480 11494,2480 11494,1966 11605,1966 "/>
                                    </g>
                                </g>
                                <polygon class="fil13" points="11494,2480 11365,2480 11365,1966 11494,1966 "/>
                                <polygon class="fil13" points="11494,2480 11365,2480 11365,1966 11494,1966 "/>
                                <polygon class="fil15" points="11250,2014 11365,2036 11261,2480 11140,2480 "/>
                                <polygon class="fil15" points="11250,2014 11365,2036 11261,2480 11140,2480 "/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon class="fil18" points="11999,3954 11302,3954 11302,3837 11999,3837 "/>
                                <g>
                                    <g>
                                        <polygon class="fil18" points="11999,3954 11302,3954 11302,3837 11999,3837 "/>
                                    </g>
                                </g>
                                <g>
                                    <polygon class="fil21" points="11873,4065 11170,4065 11170,3954 11873,3954 "/>
                                    <g>
                                        <polygon class="fil21" points="11873,4065 11170,4065 11170,3954 11873,3954 "/>
                                    </g>
                                </g>
                                <polygon class="fil15" points="11183,4065 11938,4065 11938,4193 11183,4193 "/>
                                <polygon class="fil15" points="11183,4065 11938,4065 11938,4193 11183,4193 "/>
                                <polygon class="fil13" points="11240,4193 11930,4193 11930,4301 11240,4301 "/>
                                <polygon class="fil13" points="11240,4193 11930,4193 11930,4301 11240,4301 "/>
                                <polygon class="fil31" points="11207,4301 11999,4301 11999,4436 11207,4436 "/>
                                <polygon class="fil31" points="11207,4301 11999,4301 11999,4436 11207,4436 "/>
                            </g>
                        </g>
                        <g>
                            <path class="fil32" d="M11817 5375c0,0 7,-110 -99,-111 -114,-1 -105,111 -105,111l-89 0c0,0 4,-106 -105,-106 -108,0 -105,106 -105,106l-5 0c-73,0 -119,-55 -96,-131l22 -66c22,-58 52,-134 125,-134l421 0c45,0 60,55 64,70l41 134c13,46 4,127 -69,127z"/>
                            <g>
                                <path class="fil32" d="M11817 5375c0,0 7,-110 -99,-111 -114,-1 -105,111 -105,111l-89 0c0,0 4,-106 -105,-106 -108,0 -105,106 -105,106l-5 0c-73,0 -119,-55 -96,-131l22 -66c22,-58 52,-134 125,-134l421 0c45,0 60,55 64,70l41 134c13,46 4,127 -69,127z"/>
                                <path class="fil33" d="M11236 5172c0,0 10,-26 21,-47 12,-21 25,-45 30,-46 4,-1 141,-9 141,-9l196 -2 109 0 83 5 15 6 6 11 8 25 18 56c0,0 -22,11 -23,10 -1,-1 -176,-2 -176,-2l-200 -2 -228 -5z"/>
                                <path class="fil33" d="M11236 5172c0,0 10,-26 21,-47 12,-21 25,-45 30,-46 4,-1 141,-9 141,-9l196 -2 109 0 83 5 15 6 6 11 8 25 18 56c0,0 -22,11 -23,10 -1,-1 -176,-2 -176,-2l-200 -2 -228 -5z"/>
                                <g>
                                    <path class="fil13" d="M11833 5081c0,1 0,1 0,1 0,0 0,0 0,-1z"/>
                                    <g>
                                        <path class="fil13" d="M11833 5081c0,1 0,1 0,1 0,0 0,0 0,-1z"/>
                                        <path class="fil13" d="M11847 5118c-2,-3 -3,-7 -4,-11 0,-1 -1,-2 -1,-3 2,5 3,10 5,14z"/>
                                        <path class="fil13" d="M11847 5118c-2,-3 -3,-7 -4,-11 0,-1 -1,-2 -1,-3 2,5 3,10 5,14z"/>
                                        <path class="fil13" d="M11838 5093c1,3 3,7 4,11 -1,-4 -3,-8 -4,-11z"/>
                                        <path class="fil13" d="M11838 5093c1,3 3,7 4,11 -1,-4 -3,-8 -4,-11z"/>
                                        <path class="fil13" d="M11851 5131c5,19 12,40 12,40l-53 0c-18,-2 -32,-15 -32,-33l-1 -44c0,-9 8,-15 17,-15l37 0c0,0 0,0 1,0 -12,-22 -29,-37 -65,-35l-401 0c-37,-1 -63,17 -79,35l46 0c9,0 17,7 17,15l-1 41c0,16 -15,33 -34,35l-79 2c-3,8 -4,14 -3,14l634 0c0,0 -8,-27 -16,-55zm-340 8l0 0c0,18 0,32 -19,32l-98 0c-20,0 -23,-17 -20,-37l4 -26c2,-17 16,-29 33,-29l77 0c19,0 23,15 23,33l0 27zm233 2l0 0c0,17 -15,30 -33,30l-129 0c-18,0 -33,-13 -33,-30l0 -31c0,-18 15,-31 33,-31l129 0c18,0 33,13 33,31l0 31z"/>
                                        <path class="fil13" d="M11851 5131c5,19 12,40 12,40l-53 0c-18,-2 -32,-15 -32,-33l-1 -44c0,-9 8,-15 17,-15l37 0c0,0 0,0 1,0 -12,-22 -29,-37 -65,-35l-401 0c-37,-1 -63,17 -79,35l46 0c9,0 17,7 17,15l-1 41c0,16 -15,33 -34,35l-79 2c-3,8 -4,14 -3,14l634 0c0,0 -8,-27 -16,-55zm-340 8l0 0c0,18 0,32 -19,32l-98 0c-20,0 -23,-17 -20,-37l4 -26c2,-17 16,-29 33,-29l77 0c19,0 23,15 23,33l0 27zm233 2l0 0c0,17 -15,30 -33,30l-129 0c-18,0 -33,-13 -33,-30l0 -31c0,-18 15,-31 33,-31l129 0c18,0 33,13 33,31l0 31z"/>
                                    </g>
                                </g>
                                <path class="fil13" d="M11524 5375c0,8 -41,6 -41,0 0,-20 -8,-78 -63,-77 -53,2 -60,51 -66,77 -2,7 -40,7 -40,0 0,-67 49,-112 106,-112 58,0 104,45 104,112z"/>
                                <path class="fil13" d="M11524 5375c0,8 -41,6 -41,0 0,-20 -8,-78 -63,-77 -53,2 -60,51 -66,77 -2,7 -40,7 -40,0 0,-67 49,-112 106,-112 58,0 104,45 104,112z"/>
                                <path class="fil26" d="M11479 5354c0,30 -26,55 -58,55 -32,0 -58,-25 -58,-55 0,-31 26,-56 58,-56 32,0 58,25 58,56z"/>
                                <path class="fil26" d="M11479 5354c0,30 -26,55 -58,55 -32,0 -58,-25 -58,-55 0,-31 26,-56 58,-56 32,0 58,25 58,56z"/>
                                <path class="fil13" d="M11458 5354c0,19 -16,35 -37,35 -20,0 -37,-16 -37,-35 0,-20 17,-36 37,-36 21,0 37,16 37,36z"/>
                                <path class="fil13" d="M11458 5354c0,19 -16,35 -37,35 -20,0 -37,-16 -37,-35 0,-20 17,-36 37,-36 21,0 37,16 37,36z"/>
                                <path class="fil26" d="M11436 5354c0,8 -6,14 -15,14 -8,0 -15,-6 -15,-14 0,-8 7,-15 15,-15 9,0 15,7 15,15z"/>
                                <path class="fil26" d="M11436 5354c0,8 -6,14 -15,14 -8,0 -15,-6 -15,-14 0,-8 7,-15 15,-15 9,0 15,7 15,15z"/>
                                <path class="fil13" d="M11822 5375c0,8 -42,6 -42,0 0,-20 -8,-78 -62,-77 -53,2 -60,51 -66,77 -2,7 -41,7 -41,0 0,-67 49,-112 107,-112 58,0 104,45 104,112z"/>
                                <path class="fil13" d="M11822 5375c0,8 -42,6 -42,0 0,-20 -8,-78 -62,-77 -53,2 -60,51 -66,77 -2,7 -41,7 -41,0 0,-67 49,-112 107,-112 58,0 104,45 104,112z"/>
                                <path class="fil26" d="M11777 5354c0,30 -26,55 -58,55 -32,0 -59,-25 -59,-55 0,-31 27,-56 59,-56 32,0 58,25 58,56z"/>
                                <path class="fil26" d="M11777 5354c0,30 -26,55 -58,55 -32,0 -59,-25 -59,-55 0,-31 27,-56 59,-56 32,0 58,25 58,56z"/>
                                <path class="fil13" d="M11756 5354c0,19 -17,35 -37,35 -21,0 -37,-16 -37,-35 0,-20 16,-36 37,-36 20,0 37,16 37,36z"/>
                                <path class="fil13" d="M11756 5354c0,19 -17,35 -37,35 -21,0 -37,-16 -37,-35 0,-20 16,-36 37,-36 20,0 37,16 37,36z"/>
                                <path class="fil26" d="M11734 5354c0,8 -7,14 -15,14 -9,0 -16,-6 -16,-14 0,-8 7,-15 16,-15 8,0 15,7 15,15z"/>
                                <path class="fil26" d="M11734 5354c0,8 -7,14 -15,14 -9,0 -16,-6 -16,-14 0,-8 7,-15 16,-15 8,0 15,7 15,15z"/>
                                <path class="fil13" d="M11254 5258c0,17 -6,31 -12,31 -7,0 -12,-14 -12,-31 0,-18 5,-32 12,-32 6,0 12,14 12,32z"/>
                                <path class="fil13" d="M11254 5258c0,17 -6,31 -12,31 -7,0 -12,-14 -12,-31 0,-18 5,-32 12,-32 6,0 12,14 12,32z"/>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil13" points="12995,2458 12316,2458 12316,1892 12995,1892 "/>
                            <g>
                                <polygon class="fil13" points="12995,2458 12316,2458 12316,1892 12995,1892 "/>
                                <polygon class="fil34" points="12937,2394 12374,2394 12374,1955 12937,1955 "/>
                                <polygon class="fil34" points="12937,2394 12374,2394 12374,1955 12937,1955 "/>
                                <polygon class="fil15" points="12905,2363 12406,2363 12406,1986 12905,1986 "/>
                                <polygon class="fil15" points="12905,2363 12406,2363 12406,1986 12905,1986 "/>
                                <path class="fil13" d="M12797 2158c0,-18 -13,-33 -30,-39 -3,-11 -6,-18 -6,-18l-2 0c-7,-11 -19,-20 -34,-20 -4,0 -7,1 -11,2 -2,-26 -25,-47 -53,-47 -26,0 -47,17 -52,40 -8,-5 -18,-9 -28,-9 -25,0 -46,20 -46,44 0,3 1,6 1,9 -20,5 -34,22 -34,42 0,24 20,44 46,44 1,0 2,-1 3,-1l0 1c0,0 179,20 220,-10 0,-1 1,-1 1,-1 14,-7 25,-21 25,-37z"/>
                                <path class="fil13" d="M12797 2158c0,-18 -13,-33 -30,-39 -3,-11 -6,-18 -6,-18l-2 0c-7,-11 -19,-20 -34,-20 -4,0 -7,1 -11,2 -2,-26 -25,-47 -53,-47 -26,0 -47,17 -52,40 -8,-5 -18,-9 -28,-9 -25,0 -46,20 -46,44 0,3 1,6 1,9 -20,5 -34,22 -34,42 0,24 20,44 46,44 1,0 2,-1 3,-1l0 1c0,0 179,20 220,-10 0,-1 1,-1 1,-1 14,-7 25,-21 25,-37z"/>
                                <path class="fil17" d="M12614 2260c0,9 -6,17 -13,17 -7,0 -13,-8 -13,-17 0,-10 13,-29 13,-29 0,0 13,19 13,29z"/>
                                <path class="fil17" d="M12614 2260c0,9 -6,17 -13,17 -7,0 -13,-8 -13,-17 0,-10 13,-29 13,-29 0,0 13,19 13,29z"/>
                                <path class="fil17" d="M12661 2260c0,9 -6,17 -13,17 -7,0 -13,-8 -13,-17 0,-10 13,-29 13,-29 0,0 13,19 13,29z"/>
                                <path class="fil17" d="M12661 2260c0,9 -6,17 -13,17 -7,0 -13,-8 -13,-17 0,-10 13,-29 13,-29 0,0 13,19 13,29z"/>
                                <path class="fil17" d="M12710 2258c0,9 -5,17 -13,17 -7,0 -13,-8 -13,-17 0,-10 13,-29 13,-29 0,0 13,19 13,29z"/>
                                <path class="fil17" d="M12710 2258c0,9 -5,17 -13,17 -7,0 -13,-8 -13,-17 0,-10 13,-29 13,-29 0,0 13,19 13,29z"/>
                                <path class="fil17" d="M12641 2304c0,9 -6,17 -13,17 -8,0 -14,-8 -14,-17 0,-10 14,-29 14,-29 0,0 13,19 13,29z"/>
                                <path class="fil17" d="M12641 2304c0,9 -6,17 -13,17 -8,0 -14,-8 -14,-17 0,-10 14,-29 14,-29 0,0 13,19 13,29z"/>
                                <path class="fil17" d="M12688 2304c0,9 -6,17 -13,17 -8,0 -14,-8 -14,-17 0,-10 14,-29 14,-29 0,0 13,19 13,29z"/>
                                <path class="fil17" d="M12688 2304c0,9 -6,17 -13,17 -8,0 -14,-8 -14,-17 0,-10 14,-29 14,-29 0,0 13,19 13,29z"/>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <path class="fil18" d="M1735 5573l-800 0c-53,0 -96,-43 -96,-96 0,-53 43,-96 96,-96l800 0c53,0 96,43 96,96 0,53 -43,96 -96,96z"/>
                    <g>
                        <path class="fil18" d="M1735 5573l-800 0c-53,0 -96,-43 -96,-96 0,-53 43,-96 96,-96l800 0c53,0 96,43 96,96 0,53 -43,96 -96,96z"/>
                    </g>
                </g>
                <path class="fil9" d="M3783 5565l-1376 0c-52,0 -95,-43 -95,-96 0,-52 43,-95 95,-95l1376 0c52,0 96,43 96,95 0,53 -44,96 -96,96z"/>
                <path class="fil9" d="M3783 5565l-1376 0c-52,0 -95,-43 -95,-96 0,-52 43,-95 95,-95l1376 0c52,0 96,43 96,95 0,53 -44,96 -96,96z"/>
                <path class="fil24" d="M3665 5374l-1070 0c-53,0 -96,-44 -96,-96l0 -13c0,-53 43,-96 96,-96l1070 0c53,0 96,43 96,96l0 13c0,52 -43,96 -96,96z"/>
                <path class="fil24" d="M3665 5374l-1070 0c-53,0 -96,-44 -96,-96l0 -13c0,-53 43,-96 96,-96l1070 0c53,0 96,43 96,96l0 13c0,52 -43,96 -96,96z"/>
                <path class="fil19" d="M3940 6075l-3256 0c-56,0 -102,-46 -102,-102l0 -305c0,-56 46,-102 102,-102l3256 0c55,0 101,46 101,102l0 305c0,56 -46,102 -101,102z"/>
                <path class="fil19" d="M3940 6075l-3256 0c-56,0 -102,-46 -102,-102l0 -305c0,-56 46,-102 102,-102l3256 0c55,0 101,46 101,102l0 305c0,56 -46,102 -101,102z"/>
                <path class="fil35 str0" d="M3475 4966c24,34 58,74 25,137 -33,63 -162,40 -179,38 -17,-2 -87,-24 -98,-39 -10,-16 -43,-81 6,-111 55,-35 194,-100 246,-25z"/>
                <path class="fil35 str0" d="M3475 4966c24,34 58,74 25,137 -33,63 -162,40 -179,38 -17,-2 -87,-24 -98,-39 -10,-16 -43,-81 6,-111 55,-35 194,-100 246,-25z"/>
                <path class="fil35 str0" d="M3570 4290c0,0 16,67 7,151 -9,83 -51,178 -80,206 -28,27 -14,64 -14,73 0,9 -8,48 -15,53 -6,6 -3,16 0,23 3,7 8,71 -1,93 -7,16 -20,35 -30,48 -64,-22 -183,31 -227,61 -3,2 35,11 43,59 3,19 1,32 -1,40 -1,8 -5,20 -5,20 -4,12 -48,50 -64,52 -16,3 -165,20 -252,-35 -88,-55 -82,-148 -84,-196 -3,-47 -27,-156 -47,-181 -19,-24 -37,-107 -37,-120 0,-2 -1,-7 -3,-15 7,2 17,4 24,-3 10,-10 45,-43 42,-89 -3,-47 -21,-65 -36,-76 -24,-17 -96,-25 -134,3 -6,-1 -10,-3 -12,-3 -6,-1 -22,-19 -22,-34 0,-15 -1,-38 6,-54 7,-16 38,-94 42,-108 5,-13 31,-41 34,-52 3,-10 0,-43 10,-54 9,-10 57,-73 67,-100 10,-28 61,-66 76,-73 15,-7 42,-32 46,-59 0,-1 0,-1 1,-2 36,13 76,25 121,33 24,5 49,8 74,10 53,36 126,54 212,30 0,0 72,-14 122,-56 22,6 51,15 73,25 45,19 88,85 111,95 24,10 122,85 140,122 19,36 43,89 42,110 -1,21 -63,30 -76,42 -14,12 -28,37 -34,41 -6,4 -61,-17 -82,-42 -22,-25 -37,-38 -37,-38zm-378 621l0 0c0,0 -23,54 -27,57 -4,3 42,18 45,22 2,5 -19,-56 -18,-79z"/>
                <path class="fil35 str0" d="M3570 4290c0,0 16,67 7,151 -9,83 -51,178 -80,206 -28,27 -14,64 -14,73 0,9 -8,48 -15,53 -6,6 -3,16 0,23 3,7 8,71 -1,93 -7,16 -20,35 -30,48 -64,-22 -183,31 -227,61 -3,2 35,11 43,59 3,19 1,32 -1,40 -1,8 -5,20 -5,20 -4,12 -48,50 -64,52 -16,3 -165,20 -252,-35 -88,-55 -82,-148 -84,-196 -3,-47 -27,-156 -47,-181 -19,-24 -37,-107 -37,-120 0,-2 -1,-7 -3,-15 7,2 17,4 24,-3 10,-10 45,-43 42,-89 -3,-47 -21,-65 -36,-76 -24,-17 -96,-25 -134,3 -6,-1 -10,-3 -12,-3 -6,-1 -22,-19 -22,-34 0,-15 -1,-38 6,-54 7,-16 38,-94 42,-108 5,-13 31,-41 34,-52 3,-10 0,-43 10,-54 9,-10 57,-73 67,-100 10,-28 61,-66 76,-73 15,-7 42,-32 46,-59 0,-1 0,-1 1,-2 36,13 76,25 121,33 24,5 49,8 74,10 90,14 132,32 217,8 0,0 47,-5 112,-38 22,6 56,19 78,29 45,19 88,85 111,95 24,10 122,85 140,122 19,36 43,89 42,110 -1,21 -63,30 -76,42 -14,12 -28,37 -34,41 -6,4 -61,-17 -82,-42 -22,-25 -37,-38 -37,-38zm-378 621l0 0c0,0 -23,54 -27,57 -4,3 42,18 45,22 2,5 -19,-56 -18,-79z"/>
                <path class="fil36 str1" d="M3192 4911c0,0 41,-150 -60,-248"/>
                <path class="fil36 str1" d="M3192 4911c0,0 41,-150 -60,-248"/>
                <path class="fil36 str1" d="M2919 4602c0,0 -65,59 -87,102"/>
                <path class="fil36 str1" d="M2919 4602c0,0 -65,59 -87,102"/>
                <path class="fil36 str1" d="M3480 4681c0,0 -142,146 -280,177"/>
                <path class="fil36 str1" d="M3480 4681c0,0 -142,146 -280,177"/>
                <path class="fil36 str1" d="M3282 3997c0,0 323,479 -82,861"/>
                <path class="fil36 str1" d="M3282 3997c0,0 323,479 -82,861"/>
                <path class="fil36 str1" d="M3453 4003c0,0 101,153 117,287"/>
                <path class="fil36 str1" d="M3453 4003c0,0 101,153 117,287"/>
                <path class="fil36 str1" d="M3479 4367c0,0 -58,32 -148,17"/>
                <path class="fil36 str1" d="M3479 4367c0,0 -58,32 -148,17"/>
                <path class="fil36 str1" d="M3475 4397c0,0 -45,34 -136,15"/>
                <path class="fil36 str1" d="M3475 4397c0,0 -45,34 -136,15"/>
                <path class="fil36 str1" d="M3004 4099c0,0 -32,145 -136,196"/>
                <path class="fil36 str1" d="M3004 4099c0,0 -32,145 -136,196"/>
                <path class="fil36 str1" d="M2990 4025c0,0 -69,-96 -158,-30"/>
                <path class="fil36 str1" d="M2990 4025c0,0 -69,-96 -158,-30"/>
                <line class="fil36 str1" x1="2825" y1="4047" x2="2729" y2= "4134" />
                <line class="fil36 str1" x1="2825" y1="4047" x2="2729" y2= "4134" />
                <path class="fil36 str2" d="M2754 4199c0,0 -31,-5 -50,7 0,0 -39,68 -51,98 -12,29 -29,76 -29,76 0,0 -6,46 4,59 11,12 20,16 24,17 4,1 149,7 149,7"/>
                <line class="fil36 str2" x1="2801" y1="4463" x2="2813" y2= "4463" />
                <line class="fil36 str2" x1="2801" y1="4463" x2="2813" y2= "4463" />
                <path class="fil36 str2" d="M2813 4463c0,0 28,-7 41,-29 14,-22 33,-65 33,-74 1,-10 0,-73 15,-86"/>
                <path class="fil36 str1" d="M3030 4145c0,0 -63,86 -108,111 -46,25 -29,89 -36,109 -6,19 -27,84 -66,96 -40,11 -14,-51 -110,-42 -96,10 -75,28 -75,28"/>
                <path class="fil36 str1" d="M3030 4145c0,0 -63,86 -108,111 -46,25 -29,89 -36,109 -6,19 -27,84 -66,96 -40,11 -14,-51 -110,-42 -96,10 -75,28 -75,28"/>
                <path class="fil36 str1" d="M3799 4287c0,0 -82,-23 -128,80"/>
                <path class="fil36 str1" d="M3799 4287c0,0 -82,-23 -128,80"/>
                <path class="fil36 str1" d="M3116 4004c0,0 -125,-20 -215,-74"/>
                <path class="fil36 str1" d="M3116 4004c0,0 -125,-20 -215,-74"/>
                <path class="fil36 str1" d="M3247 5117c0,0 22,-60 -11,-95 -32,-35 -68,-55 -109,-53 -40,2 -98,36 -104,40"/>
                <path class="fil36 str1" d="M3247 5117c0,0 22,-60 -11,-95 -32,-35 -68,-55 -109,-53 -40,2 -98,36 -104,40"/>
                <path class="fil36 str1" d="M3165 4968c0,0 -86,-30 -154,-6"/>
                <path class="fil36 str1" d="M3165 4968c0,0 -86,-30 -154,-6"/>
                <path class="fil36 str1" d="M3465 4778c0,0 -20,28 -70,27"/>
                <path class="fil36 str1" d="M3465 4778c0,0 -20,28 -70,27"/>
                <path class="fil36 str1" d="M3267 4969c-3,6 -5,12 -5,19 0,35 57,63 126,63 52,0 97,-15 116,-38 -8,-18 -19,-33 -29,-47 -42,-61 -142,-29 -208,3"/>
                <path class="fil36 str1" d="M3267 4969c-3,6 -5,12 -5,19 0,35 57,63 126,63 52,0 97,-15 116,-38 -8,-18 -19,-33 -29,-47 -42,-61 -142,-29 -208,3"/>
                <path class="fil36 str1" d="M3460 4004c-5,3 41,75 75,87 33,11 43,19 49,31 6,12 17,49 29,67 13,19 39,54 52,64 13,11 38,42 53,47 15,5 29,-22 66,-20 6,1 10,0 14,0 -3,-25 -24,-70 -41,-103 -18,-37 -116,-112 -140,-122 -23,-10 -66,-76 -111,-95 -19,-8 -43,-16 -64,-22"/>
                <path class="fil36 str1" d="M3460 4004c-5,3 41,75 75,87 33,11 43,19 49,31 6,12 17,49 29,67 13,19 39,54 52,64 13,11 38,42 53,47 15,5 29,-22 66,-20 6,1 10,0 14,0 -3,-25 -24,-70 -41,-103 -18,-37 -116,-112 -140,-122 -23,-10 -66,-76 -111,-95 -19,-8 -43,-16 -64,-22"/>
                <line class="fil36 str1" x1="3442" y1="3938" x2="3412" y2= "3950" />
                <line class="fil36 str1" x1="3442" y1="3938" x2="3412" y2= "3950" />
                <path class="fil36 str1" d="M3412 3950c0,0 48,54 48,54"/>
                <path class="fil36 str1" d="M3412 3950c0,0 48,54 48,54"/>
                <g>
                    <path class="fil36 str1" d="M3426 4302c8,0 15,-6 15,-15 0,-8 -7,-15 -15,-15 -9,0 -16,7 -16,15 0,9 7,15 16,15"/>
                    <g>
                        <path class="fil36 str1" d="M3426 4302c8,0 15,-6 15,-15 0,-8 -7,-15 -15,-15 -9,0 -16,7 -16,15 0,9 7,15 16,15"/>
                        <path class="fil36 str1" d="M3356 4096c8,0 14,-6 14,-14 0,-7 -6,-13 -14,-13 -7,0 -13,6 -13,13 0,8 6,14 13,14"/>
                        <path class="fil36 str1" d="M3356 4096c8,0 14,-6 14,-14 0,-7 -6,-13 -14,-13 -7,0 -13,6 -13,13 0,8 6,14 13,14"/>
                        <path class="fil36 str1" d="M3419 4534c8,0 15,-7 15,-15 0,-8 -7,-14 -15,-14 -8,0 -14,6 -14,14 0,8 6,15 14,15"/>
                        <path class="fil36 str1" d="M3419 4534c8,0 15,-7 15,-15 0,-8 -7,-14 -15,-14 -8,0 -14,6 -14,14 0,8 6,15 14,15"/>
                        <path class="fil36 str1" d="M3328 4758c8,0 15,-7 15,-15 0,-8 -7,-15 -15,-15 -9,0 -16,7 -16,15 0,8 7,15 16,15"/>
                        <path class="fil36 str1" d="M3328 4758c8,0 15,-7 15,-15 0,-8 -7,-15 -15,-15 -9,0 -16,7 -16,15 0,8 7,15 16,15"/>
                    </g>
                </g>
                <path class="fil13" d="M2828 4490l0 3 0 -3zm-207 -110l0 0 -1985 0 0 -496c13,-17 21,-38 21,-61 0,-57 -46,-102 -102,-102 -56,0 -102,45 -102,102 0,23 8,44 21,61l0 2576 162 0 0 -349 3366 0 0 349 161 0 0 -2576c14,-17 21,-38 21,-61 0,-57 -45,-102 -101,-102 -56,0 -102,45 -102,102 0,23 8,44 21,61l0 496 -1119 0c-22,41 -8,88 -55,113l0 1508 -268 0 0 -1511 71 0c0,0 3,-10 6,-15 2,-5 12,-16 12,-16 0,0 -7,-2 -11,-5 -5,-3 -13,-12 -17,-24 -5,-14 0,-50 0,-50zm-1718 1621l0 0 -267 0 0 -1511 267 0 0 1511zm385 0l0 0 -269 0 0 -1511 269 0 0 1511zm385 0l0 0 -268 0 0 -1511 268 0 0 1511zm385 0l0 0 -268 0 0 -1511 268 0 0 1511zm385 0l0 0 -268 0 0 -1511 268 0 0 1511zm770 0l0 0 -268 0 0 -1511 268 0 0 1511zm386 0l0 0 -269 0 0 -1511 269 0 0 1511zm403 0l0 0 -287 0 0 -1511 287 0 0 1511z"/>
                <path class="fil37" d="M3757 3625c0,0 -32,98 -143,194 -39,33 -93,64 -157,89 3,-4 6,-8 8,-12 38,-73 15,-131 1,-150 -14,-20 -56,-52 -119,-32 -62,20 -150,12 -177,3 -26,-8 -113,-16 -138,30 -25,46 -35,106 17,169 14,17 31,32 50,45 -25,-2 -50,-5 -74,-10 -231,-44 -336,-163 -366,-200 -29,-37 -152,-203 -86,-386 67,-183 231,-276 313,-303 83,-27 113,-110 113,-140 0,-29 -13,-160 -11,-176 3,-16 39,-89 108,-95 69,-5 119,36 106,77 -13,41 -49,60 -84,60 -35,-1 -74,-18 -98,-30 -23,-13 -63,-45 -68,-54 -5,-8 65,40 97,49 33,8 108,20 122,-16 14,-36 -18,-52 -40,-52 -23,0 -114,26 -87,116 28,91 94,143 122,163 28,21 31,36 231,77 200,41 321,227 344,268 23,41 66,159 16,316z"/>
                <path class="fil37" d="M3757 3625c0,0 -32,98 -143,194 -39,33 -93,64 -157,89 -105,100 -341,64 -358,53 -25,-2 -50,-5 -74,-10 -231,-44 -336,-163 -366,-200 -29,-37 -152,-203 -86,-386 67,-183 231,-276 313,-303 83,-27 113,-110 113,-140 0,-29 -13,-160 -11,-176 3,-16 39,-89 108,-95 69,-5 119,36 106,77 -13,41 -49,60 -84,60 -35,-1 -74,-18 -98,-30 -23,-13 -63,-45 -68,-54 -5,-8 65,40 97,49 33,8 108,20 122,-16 14,-36 -18,-52 -40,-52 -23,0 -114,26 -87,116 28,91 94,143 122,163 28,21 31,36 231,77 200,41 321,227 344,268 23,41 66,159 16,316z"/>
                <path class="fil38" d="M3159 2959c-77,10 -148,33 -211,66 -16,15 -36,28 -60,37 -120,84 -196,211 -196,352 0,186 132,346 320,419 -3,-32 6,-61 20,-86 25,-46 112,-38 138,-30 27,9 115,17 177,-3 63,-20 105,12 119,32 9,12 22,40 20,79 156,-67 270,-196 294,-348 0,-82 -24,-142 -39,-168 -23,-41 -144,-227 -344,-268 -200,-41 -203,-56 -231,-77 -2,-1 -4,-3 -7,-5z"/>
                <path class="fil38" d="M3159 2959c-77,10 -148,33 -211,66 -16,15 -36,28 -60,37 -120,84 -196,211 -196,352 0,186 132,346 320,419 237,42 282,30 474,-8 156,-67 270,-196 294,-348 0,-82 -24,-142 -39,-168 -23,-41 -144,-227 -344,-268 -200,-41 -203,-56 -231,-77 -2,-1 -4,-3 -7,-5z"/>
                <path class="fil37" d="M2634 3667l-41 -130c-20,-15 -45,-24 -72,-24 -65,0 -118,52 -118,117 0,64 53,117 118,117 53,0 97,-34 113,-80z"/>
                <path class="fil37" d="M2634 3667l-41 -130c-20,-15 -45,-24 -72,-24 -65,0 -118,52 -118,117 0,64 53,117 118,117 53,0 97,-34 113,-80z"/>
                <path class="fil36 str3" d="M2593 3537c-20,-15 -45,-24 -72,-24 -65,0 -118,52 -118,117 0,64 53,117 118,117 53,0 97,-34 113,-80"/>
                <path class="fil37 str4" d="M3832 3418c-20,0 -39,6 -54,17 5,46 3,101 -13,164l0 0c18,17 41,28 67,28 54,0 98,-47 98,-105 0,-57 -44,-104 -98,-104z"/>
                <path class="fil39" d="M3045 3391c1,-41 35,-75 77,-75 15,0 29,4 41,11 -45,11 -85,34 -118,64z"/>
                <path class="fil39" d="M3045 3391c1,-41 35,-75 77,-75 15,0 29,4 41,11 -45,11 -85,34 -118,64z"/>
                <path class="fil39" d="M3375 3315c15,-14 46,-10 73,11 25,19 38,46 31,64 -10,-16 -24,-31 -41,-45 -20,-15 -42,-26 -63,-30z"/>
                <path class="fil39" d="M3375 3315c15,-14 46,-10 73,11 25,19 38,46 31,64 -10,-16 -24,-31 -41,-45 -20,-15 -42,-26 -63,-30z"/>
                <path class="fil40 str5" d="M3255 3644c-34,0 -62,11 -62,26 0,14 28,26 62,26 34,0 62,-12 62,-26 0,-15 -28,-26 -62,-26z"/>
                <path class="fil40 str6" d="M3255 3644c-34,0 -62,11 -62,26 0,14 28,26 62,26 34,0 62,-12 62,-26 0,-15 -28,-26 -62,-26z"/>
                <path class="fil41" d="M3370 3577c0,-34 -11,-62 -26,-62 -15,0 -26,28 -26,62 0,34 11,62 26,62 15,0 26,-28 26,-62z"/>
                <path class="fil41" d="M3370 3577c0,-34 -11,-62 -26,-62 -15,0 -26,28 -26,62 0,34 11,62 26,62 15,0 26,-28 26,-62z"/>
                <path class="fil41" d="M3183 3590c0,-34 -12,-62 -26,-62 -15,0 -27,28 -27,62 0,35 12,62 27,62 14,0 26,-27 26,-62z"/>
                <path class="fil41" d="M3183 3590c0,-34 -12,-62 -26,-62 -15,0 -27,28 -27,62 0,35 12,62 27,62 14,0 26,-27 26,-62z"/>
                <path class="fil13" d="M3336 3542c-6,0 -11,5 -11,11 0,6 5,10 11,10 6,0 11,-4 11,-10 0,-6 -5,-11 -11,-11z"/>
                <path class="fil13" d="M3336 3542c-6,0 -11,5 -11,11 0,6 5,10 11,10 6,0 11,-4 11,-10 0,-6 -5,-11 -11,-11z"/>
                <path class="fil13" d="M3150 3553c-7,0 -12,5 -12,11 0,7 5,12 12,12 6,0 11,-5 11,-12 0,-6 -5,-11 -11,-11z"/>
                <path class="fil13" d="M3150 3553c-7,0 -12,5 -12,11 0,7 5,12 12,12 6,0 11,-5 11,-12 0,-6 -5,-11 -11,-11z"/>
                <path class="fil42 str7" d="M3273 3013c-16,5 -35,10 -46,7 -19,-4 -59,-14 -71,-1 -11,13 -38,8 -58,0 -20,-8 -27,10 -51,8 -24,-1 -13,-13 -29,-6 -16,8 -41,20 -54,17 -11,-3 -14,9 -47,10 59,-34 82,-100 82,-126 0,-29 -13,-160 -11,-176 3,-16 39,-89 108,-95 69,-5 119,36 106,77 -13,41 -49,60 -84,60 -35,-1 -74,-18 -98,-30 -23,-13 -63,-45 -68,-54 -5,-8 65,40 97,49 33,8 108,20 122,-16 14,-36 -18,-52 -40,-52 -23,0 -114,26 -87,116 28,91 94,143 122,163 21,15 28,27 107,49z"/>
                <path class="fil36 str3" d="M2454 3630c0,-42 32,-76 71,-76 40,0 72,34 72,76 0,16 -5,30 -12,42"/>
                <path class="fil36 str3" d="M2581 3673c-23,0 -42,-19 -42,-43 0,-23 19,-42 42,-42 3,0 5,0 7,1 7,11 11,25 11,40 0,16 -5,31 -14,43 -1,1 -2,1 -4,1"/>
                <path class="fil36 str3" d="M3777 3532c7,-35 30,-67 61,-68 37,-1 63,34 62,70"/>
                <path class="fil36 str3" d="M3788 3571c-5,0 -9,-1 -14,-3 0,-2 -1,-4 -1,-7 3,-14 4,-28 6,-42 4,-9 10,-17 18,-24 15,5 26,20 26,37 0,22 -16,39 -35,39"/>
                <path class="fil36 str8" d="M3206 3031c0,0 -105,-21 -177,-234"/>
                <path class="fil36 str8" d="M3128 3035c0,0 -59,-30 -101,-180"/>
                <path class="fil36 str8" d="M3000 3066c0,0 62,-56 27,-211"/>
                <path class="fil36 str8" d="M2945 3065c0,0 77,-72 73,-179 -3,-107 -35,-142 33,-193 69,-52 125,-7 127,-2"/>
                <g>
                    <path class="fil43 str4" d="M3796 4294c0,0 43,-2 66,12 23,13 47,48 48,57 1,10 10,43 -11,56 -22,13 -23,16 -29,24 -5,9 -23,7 -34,0 -12,-6 -13,-9 -23,0 -9,8 -26,6 -39,-6 -14,-12 -22,-30 -35,-15 -14,15 -14,37 -32,36 -18,-2 -36,-13 -39,-21 -2,-8 4,-19 13,-29 9,-11 12,-31 8,-38 6,-4 20,-29 34,-41 11,-11 61,-19 73,-35z"/>
                    <g>
                        <path class="fil43 str4" d="M3796 4294c0,0 43,-2 66,12 23,13 47,48 48,57 1,10 10,43 -11,56 -22,13 -23,16 -29,24 -5,9 -23,7 -34,0 -12,-6 -13,-9 -23,0 -9,8 -26,6 -39,-6 -14,-12 -22,-30 -35,-15 -14,15 -14,37 -32,36 -18,-2 -36,-13 -39,-21 -2,-8 4,-19 13,-29 9,-11 12,-31 8,-38 6,-4 20,-29 34,-41 11,-11 61,-19 73,-35z"/>
                        <path class="fil36 str9" d="M3884 4428c0,0 27,-79 -51,-98"/>
                        <path class="fil36 str9" d="M3884 4428c0,0 27,-79 -51,-98"/>
                        <path class="fil36 str9" d="M3824 4438c0,0 30,-66 -47,-96"/>
                        <path class="fil36 str9" d="M3824 4438c0,0 30,-66 -47,-96"/>
                        <path class="fil36 str9" d="M3761 4423c0,0 -2,-26 -5,-48"/>
                        <path class="fil36 str9" d="M3761 4423c0,0 -2,-26 -5,-48"/>
                        <path class="fil36 str9" d="M3735 4427c0,0 -5,-28 -5,-39"/>
                        <path class="fil36 str9" d="M3735 4427c0,0 -5,-28 -5,-39"/>
                        <path class="fil36 str9" d="M3777 4439c1,-13 9,-23 20,-23 11,0 19,10 20,23 -1,1 -2,2 -4,4 -8,8 -23,6 -36,-4"/>
                        <path class="fil36 str9" d="M3777 4439c1,-13 9,-23 20,-23 11,0 19,10 20,23 -1,1 -2,2 -4,4 -8,8 -23,6 -36,-4"/>
                        <path class="fil36 str9" d="M3840 4446c0,-2 0,-4 0,-5 0,-14 9,-25 20,-25 8,0 16,7 19,17 -4,3 -6,6 -9,10 -5,8 -19,7 -30,3"/>
                        <path class="fil36 str9" d="M3840 4446c0,-2 0,-4 0,-5 0,-14 9,-25 20,-25 8,0 16,7 19,17 -4,3 -6,6 -9,10 -5,8 -19,7 -30,3"/>
                        <path class="fil36 str9" d="M3682 4407c5,5 8,12 8,21 0,9 -3,17 -9,21 -7,-4 -12,-8 -13,-12 -2,-8 4,-19 13,-29 0,-1 0,-1 1,-1"/>
                        <path class="fil36 str9" d="M3682 4407c5,5 8,12 8,21 0,9 -3,17 -9,21 -7,-4 -12,-8 -13,-12 -2,-8 4,-19 13,-29 0,-1 0,-1 1,-1"/>
                    </g>
                </g>
                <g>
                    <path class="fil43 str4" d="M2632 4508c1,37 24,43 31,55 6,12 3,29 -9,26 -13,-3 -24,-2 -7,21 17,24 42,20 48,16 5,-4 13,23 35,11 22,-13 24,-14 25,-16 1,-2 19,8 29,-2 10,-10 45,-43 42,-89 -3,-47 -21,-65 -36,-76 -33,-24 -159,-30 -158,54z"/>
                    <g>
                        <path class="fil43 str4" d="M2632 4508c1,37 24,43 31,55 6,12 3,29 -9,26 -13,-3 -24,-2 -7,21 17,24 42,20 48,16 5,-4 13,23 35,11 22,-13 24,-14 25,-16 1,-2 19,8 29,-2 10,-10 45,-43 42,-89 -3,-47 -21,-65 -36,-76 -33,-24 -159,-30 -158,54z"/>
                        <path class="fil36 str9" d="M2803 4508c0,0 -5,-17 -13,-23"/>
                        <path class="fil36 str9" d="M2803 4508c0,0 -5,-17 -13,-23"/>
                        <path class="fil36 str9" d="M2755 4621c0,0 20,-29 21,-55"/>
                        <path class="fil36 str9" d="M2755 4621c0,0 20,-29 21,-55"/>
                        <path class="fil36 str9" d="M2695 4626c0,0 19,-21 16,-49"/>
                        <path class="fil36 str9" d="M2695 4626c0,0 19,-21 16,-49"/>
                    </g>
                </g>
                <g>
                    <path class="fil44 str10" d="M2662 3182c0,0 57,75 53,100 -4,26 236,-121 288,-238 14,-32 21,-51 25,-63 -13,7 -26,11 -38,10 -45,19 -125,53 -135,61 -14,11 -18,54 -193,130z"/>
                    <g>
                        <path class="fil44 str10" d="M2662 3182c0,0 57,75 53,100 -4,26 236,-121 288,-238 14,-32 21,-51 25,-63 -13,7 -26,11 -38,10 -45,19 -125,53 -135,61 -14,11 -18,54 -193,130z"/>
                        <path class="fil44 str10" d="M3084 2950c0,0 50,2 73,-10 24,-11 162,15 197,61 35,46 93,161 92,180 -1,19 44,-128 -103,-228 -147,-99 -148,-81 -283,-26 2,3 3,6 3,9 6,4 13,9 21,14z"/>
                        <path class="fil44 str10" d="M3084 2950c0,0 50,2 73,-10 24,-11 162,15 197,61 35,46 93,161 92,180 -1,19 44,-128 -103,-228 -147,-99 -148,-81 -283,-26 2,3 3,6 3,9 6,4 13,9 21,14z"/>
                        <path class="fil45 str10" d="M3044 2909c5,-17 27,-91 55,-119 32,-31 96,-59 107,-54 10,6 70,88 68,114 -1,12 -21,26 -47,38 -49,-16 -81,4 -167,39 -2,-4 -4,-8 -6,-10 -2,-3 -5,-6 -10,-8z"/>
                        <path class="fil45 str10" d="M3044 2909c5,-17 27,-91 55,-119 32,-31 96,-59 107,-54 10,6 70,88 68,114 -1,12 -21,26 -47,38 -49,-16 -81,4 -167,39 -2,-4 -4,-8 -6,-10 -2,-3 -5,-6 -10,-8z"/>
                        <path class="fil45 str10" d="M2855 3052c0,0 -70,29 -104,-2 -33,-32 -23,-69 32,-85 55,-16 139,-29 166,-22 1,0 2,0 3,1 -1,4 -1,6 -1,6 7,20 16,32 26,37 -1,4 -2,8 -5,12 -24,10 -52,22 -76,33 -11,4 -22,9 -34,16 -3,2 -5,3 -7,4zm2 -68l0 0c-21,-4 -61,1 -76,14 -14,13 -11,25 11,21 21,-5 65,-35 65,-35z"/>
                        <path class="fil45 str10" d="M2855 3052c0,0 -70,29 -104,-2 -33,-32 -23,-69 32,-85 55,-16 139,-29 166,-22 1,0 2,0 3,1 -1,4 -1,6 -1,6 7,20 16,32 26,37 -1,4 -2,8 -5,12 -24,10 -52,22 -76,33 -11,4 -22,9 -34,16 -3,2 -5,3 -7,4zm2 -68l0 0c-21,-4 -61,1 -76,14 -14,13 -11,25 11,21 21,-5 65,-35 65,-35z"/>
                        <path class="fil44 str10" d="M2951 2950c0,0 -2,-26 33,-42 34,-15 63,-1 70,9 7,10 24,37 -11,56 -35,20 -71,36 -92,-23z"/>
                        <path class="fil44 str10" d="M2951 2950c0,0 -2,-26 33,-42 34,-15 63,-1 70,9 7,10 24,37 -11,56 -35,20 -71,36 -92,-23z"/>
                    </g>
                </g>
                <g>
                    <path class="fil13" d="M2828 4490l0 3 0 -3zm-207 -110l0 0 -1985 0 0 -496c13,-17 21,-38 21,-61 0,-57 -46,-102 -102,-102 -56,0 -102,45 -102,102 0,23 8,44 21,61l0 2576 162 0 0 -349 3366 0 0 349 161 0 0 -2576c14,-17 21,-38 21,-61 0,-57 -45,-102 -101,-102 -56,0 -102,45 -102,102 0,23 8,44 21,61l0 496 -1119 0c-22,41 -8,88 -55,113l0 1508 -268 0 0 -1511 71 0c0,0 3,-10 6,-15 2,-5 12,-16 12,-16 0,0 -7,-2 -11,-5 -5,-3 -13,-12 -17,-24 -5,-14 0,-50 0,-50zm-1718 1621l0 0 -267 0 0 -1511 267 0 0 1511zm385 0l0 0 -269 0 0 -1511 269 0 0 1511zm385 0l0 0 -268 0 0 -1511 268 0 0 1511zm385 0l0 0 -268 0 0 -1511 268 0 0 1511zm385 0l0 0 -268 0 0 -1511 268 0 0 1511zm770 0l0 0 -268 0 0 -1511 268 0 0 1511zm386 0l0 0 -269 0 0 -1511 269 0 0 1511zm403 0l0 0 -287 0 0 -1511 287 0 0 1511z"/>
                    <g>
                        <path class="fil36 str11" d="M839 3759c0,-277 171,-501 447,-501 277,0 451,232 451,454"/>
                        <g>
                            <path class="fil36 str11" d="M839 3759c0,-277 171,-501 447,-501 277,0 451,232 451,454"/>
                            <polygon class="fil46" points="857,4384 820,4384 820,3759 859,3759 "/>
                            <polygon class="fil46" points="857,4384 820,4384 820,3759 859,3759 "/>
                            <path class="fil46" d="M1338 3830l57 0c0,0 146,-118 331,-118 184,0 338,124 338,124l65 0c0,0 -160,-164 -405,-164 -244,0 -386,158 -386,158z"/>
                            <path class="fil46" d="M1338 3830l57 0c0,0 146,-118 331,-118 184,0 338,124 338,124l65 0c0,0 -160,-164 -405,-164 -244,0 -386,158 -386,158z"/>
                            <line class="fil36 str12" x1="1372" y1="3985" x2="1372" y2= "3825" />
                            <line class="fil36 str12" x1="1372" y1="3985" x2="1372" y2= "3825" />
                            <line class="fil36 str12" x1="2093" y1="3991" x2="2093" y2= "3825" />
                            <line class="fil36 str12" x1="2093" y1="3991" x2="2093" y2= "3825" />
                            <line class="fil36 str12" x1="1720" y1="3903" x2="1720" y2= "3705" />
                            <line class="fil36 str12" x1="1720" y1="3903" x2="1720" y2= "3705" />
                            <g>
                                <path class="fil47" d="M1779 4017c-5,0 -9,1 -12,3 -4,-7 -8,-13 -13,-18 15,-11 24,-28 24,-48 0,-9 -2,-18 -6,-25 4,-4 6,-9 6,-15 0,-10 -8,-19 -19,-19 -6,0 -11,3 -15,7 -7,-4 -15,-6 -24,-6 -9,0 -17,2 -24,6 -4,-4 -9,-7 -15,-7 -10,0 -19,9 -19,19 0,6 2,11 6,15 -4,7 -6,16 -6,25 0,20 10,38 26,49 -5,5 -9,11 -13,18 -4,-3 -8,-4 -13,-4 -13,0 -24,10 -24,23 0,13 11,24 24,24 2,0 3,-1 5,-1 1,15 5,28 12,39 -7,3 -12,10 -12,18 0,10 8,19 19,19 9,0 16,-6 18,-14 6,2 11,4 17,4 6,0 12,-2 18,-4 2,8 9,14 18,14 11,0 19,-9 19,-19 0,-8 -5,-15 -12,-18 7,-11 11,-24 12,-39 1,0 2,1 3,1 13,0 23,-11 23,-24 0,-13 -10,-23 -23,-23z"/>
                                <g>
                                    <path class="fil47" d="M1779 4017c-5,0 -9,1 -12,3 -4,-7 -8,-13 -13,-18 15,-11 24,-28 24,-48 0,-9 -2,-18 -6,-25 4,-4 6,-9 6,-15 0,-10 -8,-19 -19,-19 -6,0 -11,3 -15,7 -7,-4 -15,-6 -24,-6 -9,0 -17,2 -24,6 -4,-4 -9,-7 -15,-7 -10,0 -19,9 -19,19 0,6 2,11 6,15 -4,7 -6,16 -6,25 0,20 10,38 26,49 -5,5 -9,11 -13,18 -4,-3 -8,-4 -13,-4 -13,0 -24,10 -24,23 0,13 11,24 24,24 2,0 3,-1 5,-1 1,15 5,28 12,39 -7,3 -12,10 -12,18 0,10 8,19 19,19 9,0 16,-6 18,-14 6,2 11,4 17,4 6,0 12,-2 18,-4 2,8 9,14 18,14 11,0 19,-9 19,-19 0,-8 -5,-15 -12,-18 7,-11 11,-24 12,-39 1,0 2,1 3,1 13,0 23,-11 23,-24 0,-13 -10,-23 -23,-23z"/>
                                    <g>
                                        <path class="fil13" d="M1431 4107c-4,0 -8,1 -12,3 -3,-7 -8,-13 -13,-18 15,-11 24,-28 24,-47 0,-10 -2,-18 -6,-26 4,-4 6,-9 6,-14 0,-11 -8,-20 -19,-20 -6,0 -11,3 -14,7 -8,-3 -16,-5 -25,-5 -8,0 -17,2 -24,5 -4,-4 -9,-7 -14,-7 -11,0 -20,9 -20,20 0,5 3,10 6,14 -3,8 -6,16 -6,26 0,20 11,38 26,48 -5,5 -9,11 -13,18 -3,-2 -8,-4 -13,-4 -13,0 -24,11 -24,24 0,12 11,23 24,23 2,0 4,0 5,-1 1,15 5,29 12,39 -7,3 -12,10 -12,18 0,11 9,19 19,19 9,0 16,-6 18,-14 6,3 12,4 18,4 6,0 11,-1 17,-4 2,8 9,14 18,14 11,0 19,-8 19,-19 0,-8 -5,-15 -12,-18 7,-10 11,-24 12,-38 1,0 2,0 3,0 13,0 23,-11 23,-23 0,-13 -10,-24 -23,-24z"/>
                                        <g>
                                            <path class="fil13" d="M1431 4107c-4,0 -8,1 -12,3 -3,-7 -8,-13 -13,-18 15,-11 24,-28 24,-47 0,-10 -2,-18 -6,-26 4,-4 6,-9 6,-14 0,-11 -8,-20 -19,-20 -6,0 -11,3 -14,7 -8,-3 -16,-5 -25,-5 -8,0 -17,2 -24,5 -4,-4 -9,-7 -14,-7 -11,0 -20,9 -20,20 0,5 3,10 6,14 -3,8 -6,16 -6,26 0,20 11,38 26,48 -5,5 -9,11 -13,18 -3,-2 -8,-4 -13,-4 -13,0 -24,11 -24,24 0,12 11,23 24,23 2,0 4,0 5,-1 1,15 5,29 12,39 -7,3 -12,10 -12,18 0,11 9,19 19,19 9,0 16,-6 18,-14 6,3 12,4 18,4 6,0 11,-1 17,-4 2,8 9,14 18,14 11,0 19,-8 19,-19 0,-8 -5,-15 -12,-18 7,-10 11,-24 12,-38 1,0 2,0 3,0 13,0 23,-11 23,-23 0,-13 -10,-24 -23,-24z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <path class="fil48" d="M2151 4101c-4,0 -8,2 -11,4 -4,-7 -9,-14 -14,-19 15,-10 25,-27 25,-47 0,-9 -3,-18 -6,-26 3,-3 6,-8 6,-14 0,-11 -9,-19 -20,-19 -5,0 -10,2 -14,6 -7,-3 -16,-5 -24,-5 -9,0 -17,2 -25,5 -3,-4 -8,-6 -14,-6 -11,0 -19,8 -19,19 0,6 2,11 6,14 -4,8 -6,17 -6,26 0,20 10,38 26,48 -5,6 -10,12 -13,19 -4,-3 -9,-5 -14,-5 -13,0 -23,11 -23,24 0,13 10,23 23,23 2,0 4,0 6,0 0,14 5,28 11,39 -7,3 -12,10 -12,18 0,10 9,19 19,19 9,0 16,-6 19,-14 5,2 11,3 17,3 6,0 12,-1 17,-3 3,8 10,14 19,14 10,0 19,-9 19,-19 0,-8 -5,-15 -12,-18 6,-11 10,-24 11,-39 1,0 2,0 3,0 13,0 24,-10 24,-23 0,-13 -11,-24 -24,-24z"/>
                                        <g>
                                            <path class="fil48" d="M2151 4101c-4,0 -8,2 -11,4 -4,-7 -9,-14 -14,-19 15,-10 25,-27 25,-47 0,-9 -3,-18 -6,-26 3,-3 6,-8 6,-14 0,-11 -9,-19 -20,-19 -5,0 -10,2 -14,6 -7,-3 -16,-5 -24,-5 -9,0 -17,2 -25,5 -3,-4 -8,-6 -14,-6 -11,0 -19,8 -19,19 0,6 2,11 6,14 -4,8 -6,17 -6,26 0,20 10,38 26,48 -5,6 -10,12 -13,19 -4,-3 -9,-5 -14,-5 -13,0 -23,11 -23,24 0,13 10,23 23,23 2,0 4,0 6,0 0,14 5,28 11,39 -7,3 -12,10 -12,18 0,10 9,19 19,19 9,0 16,-6 19,-14 5,2 11,3 17,3 6,0 12,-1 17,-3 3,8 10,14 19,14 10,0 19,-9 19,-19 0,-8 -5,-15 -12,-18 6,-11 10,-24 11,-39 1,0 2,0 3,0 13,0 24,-10 24,-23 0,-13 -11,-24 -24,-24z"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <path class="fil13" d="M15669 3784c-46,0 -84,-38 -84,-84l0 -335c0,-47 38,-85 84,-85 47,0 85,38 85,85l0 335c0,46 -38,84 -85,84z"/>
                    <path class="fil13" d="M15669 3784c-46,0 -84,-38 -84,-84l0 -335c0,-47 38,-85 84,-85 47,0 85,38 85,85l0 335c0,46 -38,84 -85,84z"/>
                    <polygon class="fil15" points="15500,3267 15469,3267 15469,3943 15500,3943 "/>
                    <polygon class="fil15" points="15500,3267 15469,3267 15469,3943 15500,3943 "/>
                    <polygon class="fil49" points="15266,2731 15736,2731 15754,3426 15067,3426 "/>
                    <polygon class="fil49" points="15266,2731 15736,2731 15754,3426 15067,3426 "/>
                </g>
                <g>
                    <polygon class="fil13" points="8987,4858 8987,6464 10788,6464 10788,4858 "/>
                    <g>
                        <polygon class="fil13" points="8987,4858 8987,6464 10788,6464 10788,4858 "/>
                        <g>
                            <polygon class="fil15" points="10721,5206 9063,5206 9063,4919 10721,4919 "/>
                            <g>
                                <polygon class="fil15" points="10721,5206 9063,5206 9063,4919 10721,4919 "/>
                                <polygon class="fil19" points="10717,5536 9059,5536 9059,5249 10717,5249 "/>
                                <polygon class="fil19" points="10717,5536 9059,5536 9059,5249 10717,5249 "/>
                                <polygon class="fil15" points="10721,5866 9063,5866 9063,5579 10721,5579 "/>
                                <polygon class="fil15" points="10721,5866 9063,5866 9063,5579 10721,5579 "/>
                                <polygon class="fil19" points="10721,6418 9063,6418 9063,5909 10721,5909 "/>
                                <polygon class="fil19" points="10721,6418 9063,6418 9063,5909 10721,5909 "/>
                            </g>
                        </g>
                        <g>
                            <path class="fil13" d="M9350 5089c0,24 -20,44 -45,44 -25,0 -46,-20 -46,-44 0,-24 21,-44 46,-44 25,0 45,20 45,44z"/>
                            <g>
                                <path class="fil13" d="M9350 5089c0,24 -20,44 -45,44 -25,0 -46,-20 -46,-44 0,-24 21,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M10540 5089c0,24 -20,44 -45,44 -26,0 -46,-20 -46,-44 0,-24 20,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M10540 5089c0,24 -20,44 -45,44 -26,0 -46,-20 -46,-44 0,-24 20,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M9350 5390c0,24 -20,44 -45,44 -25,0 -46,-20 -46,-44 0,-24 21,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M9350 5390c0,24 -20,44 -45,44 -25,0 -46,-20 -46,-44 0,-24 21,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M10540 5390c0,24 -20,44 -45,44 -26,0 -46,-20 -46,-44 0,-24 20,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M10540 5390c0,24 -20,44 -45,44 -26,0 -46,-20 -46,-44 0,-24 20,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M9350 5704c0,24 -20,44 -45,44 -25,0 -46,-20 -46,-44 0,-24 21,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M9350 5704c0,24 -20,44 -45,44 -25,0 -46,-20 -46,-44 0,-24 21,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M10540 5704c0,24 -20,44 -45,44 -26,0 -46,-20 -46,-44 0,-24 20,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M10540 5704c0,24 -20,44 -45,44 -26,0 -46,-20 -46,-44 0,-24 20,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M9350 6018c0,24 -20,44 -45,44 -25,0 -46,-20 -46,-44 0,-24 21,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M9350 6018c0,24 -20,44 -45,44 -25,0 -46,-20 -46,-44 0,-24 21,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M10540 6018c0,24 -20,44 -45,44 -26,0 -46,-20 -46,-44 0,-24 20,-44 46,-44 25,0 45,20 45,44z"/>
                                <path class="fil13" d="M10540 6018c0,24 -20,44 -45,44 -26,0 -46,-20 -46,-44 0,-24 20,-44 46,-44 25,0 45,20 45,44z"/>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <polygon class="fil50" points="7483,6263 8097,6109 8097,5551 7483,5705 "/>
                    <g>
                        <polygon class="fil50" points="7483,6263 8097,6109 8097,5551 7483,5705 "/>
                        <g>
                            <g>
                                <path class="fil51" d="M8170 5593c10,34 23,76 48,71 5,-1 25,-9 29,-11 15,-8 22,-30 13,-57 -10,-33 -38,-61 -63,-62 -7,0 -31,8 -36,11 -12,9 1,24 9,48z"/>
                                <g>
                                    <g>
                                        <path class="fil51" d="M8170 5593c10,34 23,76 48,71 5,-1 25,-9 29,-11 15,-8 22,-30 13,-57 -10,-33 -38,-61 -63,-62 -7,0 -31,8 -36,11 -12,9 1,24 9,48z"/>
                                        <path class="fil51" d="M8146 5602c10,34 39,62 64,63 25,0 37,-26 27,-59 -10,-34 -39,-62 -64,-63 -25,-1 -37,26 -27,59z"/>
                                        <path class="fil51" d="M8146 5602c10,34 39,62 64,63 25,0 37,-26 27,-59 -10,-34 -39,-62 -64,-63 -25,-1 -37,26 -27,59z"/>
                                        <path class="fil52" d="M8170 5603c5,16 18,29 30,30 12,0 18,-13 13,-28 -5,-16 -18,-29 -30,-30 -12,0 -18,12 -13,28z"/>
                                        <path class="fil52" d="M8170 5603c5,16 18,29 30,30 12,0 18,-13 13,-28 -5,-16 -18,-29 -30,-30 -12,0 -18,12 -13,28z"/>
                                    </g>
                                </g>
                                <g>
                                    <polygon class="fil18" points="8008,5352 7783,5310 7664,5375 7766,5474 7956,5486 "/>
                                    <g>
                                        <polygon class="fil18" points="8008,5352 7783,5310 7664,5375 7766,5474 7956,5486 "/>
                                    </g>
                                </g>
                                <polygon class="fil53" points="7980,5652 7712,5610 7708,5539 7995,5583 "/>
                                <polygon class="fil53" points="7980,5652 7712,5610 7708,5539 7995,5583 "/>
                                <g>
                                    <path class="fil18" d="M7939 5423l-304 -43c0,0 78,103 65,192l272 38 -33 -187z"/>
                                    <g>
                                        <path class="fil18" d="M7939 5423l-304 -43c0,0 78,103 65,192l272 38 -33 -187z"/>
                                    </g>
                                </g>
                                <path class="fil54" d="M7961 5547l11 63 -272 -38c2,-13 2,-27 0,-40 87,0 175,4 261,15z"/>
                                <path class="fil54" d="M7961 5547l11 63 -272 -38c2,-13 2,-27 0,-40 87,0 175,4 261,15z"/>
                                <polygon class="fil55" points="7936,5409 7685,5371 7635,5380 7939,5423 "/>
                                <polygon class="fil55" points="7936,5409 7685,5371 7635,5380 7939,5423 "/>
                                <polygon class="fil55" points="8011,5359 7782,5320 7779,5304 8028,5349 "/>
                                <polygon class="fil55" points="8011,5359 7782,5320 7779,5304 8028,5349 "/>
                                <polygon class="fil55" points="7779,5304 7635,5380 7685,5371 7782,5320 "/>
                                <polygon class="fil55" points="7779,5304 7635,5380 7685,5371 7782,5320 "/>
                                <polygon class="fil52" points="8282,5606 8239,5336 8087,5416 8137,5689 "/>
                                <polygon class="fil52" points="8282,5606 8239,5336 8087,5416 8137,5689 "/>
                                <polygon class="fil56" points="8252,5487 8231,5360 8101,5429 8127,5558 "/>
                                <polygon class="fil56" points="8252,5487 8231,5360 8101,5429 8127,5558 "/>
                                <polygon class="fil57" points="8248,5485 8228,5366 8106,5431 8130,5553 "/>
                                <polygon class="fil57" points="8248,5485 8228,5366 8106,5431 8130,5553 "/>
                                <path class="fil58" d="M8117 5488l-5 -26c30,18 60,34 92,49l-20 11c-22,-11 -45,-22 -67,-34z"/>
                                <path class="fil58" d="M8117 5488l-5 -26c30,18 60,34 92,49l-20 11c-22,-11 -45,-22 -67,-34z"/>
                                <path class="fil58" d="M8117 5425l43 -23c26,13 53,23 80,34l8 49c-46,-17 -90,-36 -131,-60z"/>
                                <path class="fil58" d="M8117 5425l43 -23c26,13 53,23 80,34l8 49c-46,-17 -90,-36 -131,-60z"/>
                                <path class="fil59" d="M8231 5579c2,10 9,16 16,12 8,-4 12,-16 10,-27 -2,-10 -9,-16 -17,-12 -7,4 -11,16 -9,27z"/>
                                <path class="fil59" d="M8231 5579c2,10 9,16 16,12 8,-4 12,-16 10,-27 -2,-10 -9,-16 -17,-12 -7,4 -11,16 -9,27z"/>
                                <path class="fil59" d="M8159 5612c2,11 10,16 17,12 7,-4 11,-16 9,-26 -2,-11 -9,-16 -16,-12 -7,4 -11,16 -10,26z"/>
                                <path class="fil59" d="M8159 5612c2,11 10,16 17,12 7,-4 11,-16 9,-26 -2,-11 -9,-16 -16,-12 -7,4 -11,16 -10,26z"/>
                                <polygon class="fil60" points="8239,5336 8084,5308 7933,5393 8087,5416 "/>
                                <polygon class="fil60" points="8239,5336 8084,5308 7933,5393 8087,5416 "/>
                                <polygon class="fil56" points="7933,5393 7981,5660 8137,5689 8087,5416 "/>
                                <polygon class="fil56" points="7933,5393 7981,5660 8137,5689 8087,5416 "/>
                                <polygon class="fil61" points="8101,5563 7973,5539 7951,5421 8078,5437 "/>
                                <polygon class="fil61" points="8101,5563 7973,5539 7951,5421 8078,5437 "/>
                                <g>
                                    <path class="fil51" d="M8021 5667c7,35 15,78 40,76 5,-1 26,-6 30,-8 17,-5 25,-27 20,-54 -6,-35 -31,-66 -56,-69 -7,-1 -32,4 -37,7 -13,7 -1,23 3,48z"/>
                                    <g>
                                        <path class="fil51" d="M8021 5667c7,35 15,78 40,76 5,-1 26,-6 30,-8 17,-5 25,-27 20,-54 -6,-35 -31,-66 -56,-69 -7,-1 -32,4 -37,7 -13,7 -1,23 3,48z"/>
                                        <path class="fil62" d="M7997 5674c6,34 31,65 56,69 25,3 40,-21 34,-56 -7,-34 -32,-65 -56,-69 -25,-4 -40,21 -34,56z"/>
                                        <path class="fil62" d="M7997 5674c6,34 31,65 56,69 25,3 40,-21 34,-56 -7,-34 -32,-65 -56,-69 -25,-4 -40,21 -34,56z"/>
                                        <path class="fil52" d="M8021 5677c3,16 14,31 26,33 12,2 19,-10 16,-26 -3,-17 -15,-31 -27,-33 -11,-2 -18,10 -15,26z"/>
                                        <path class="fil52" d="M8021 5677c3,16 14,31 26,33 12,2 19,-10 16,-26 -3,-17 -15,-31 -27,-33 -11,-2 -18,10 -15,26z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil51" d="M7735 5608c7,34 15,78 40,76 5,-1 26,-7 30,-8 17,-6 25,-27 20,-55 -6,-34 -31,-65 -56,-69 -7,-1 -32,4 -37,7 -13,8 -1,24 3,49z"/>
                                    <g>
                                        <path class="fil51" d="M7735 5608c7,34 15,78 40,76 5,-1 26,-7 30,-8 17,-6 25,-27 20,-55 -6,-34 -31,-65 -56,-69 -7,-1 -32,4 -37,7 -13,8 -1,24 3,49z"/>
                                        <path class="fil62" d="M7711 5614c6,35 31,66 56,69 25,4 40,-21 34,-55 -6,-34 -32,-65 -56,-69 -25,-4 -40,21 -34,55z"/>
                                        <path class="fil62" d="M7711 5614c6,35 31,66 56,69 25,4 40,-21 34,-55 -6,-34 -32,-65 -56,-69 -25,-4 -40,21 -34,55z"/>
                                        <path class="fil52" d="M7735 5618c3,16 14,31 26,33 12,1 19,-10 16,-27 -3,-16 -15,-31 -26,-32 -12,-2 -19,10 -16,26z"/>
                                        <path class="fil52" d="M7735 5618c3,16 14,31 26,33 12,1 19,-10 16,-27 -3,-16 -15,-31 -26,-32 -12,-2 -19,10 -16,26z"/>
                                    </g>
                                </g>
                                <line class="fil36 str13" x1="7974" y1="5535" x2="7992" y2= "5634" />
                                <line class="fil36 str13" x1="7974" y1="5535" x2="7992" y2= "5634" />
                                <polygon class="fil57" points="8097,5559 7976,5536 7956,5425 8075,5440 "/>
                                <polygon class="fil57" points="8097,5559 7976,5536 7956,5425 8075,5440 "/>
                                <path class="fil58" d="M8043 5436l32 4 5 29c-12,-11 -24,-22 -37,-33z"/>
                                <path class="fil58" d="M8043 5436l32 4 5 29c-12,-11 -24,-22 -37,-33z"/>
                                <path class="fil58" d="M8065 5553c-32,-33 -66,-64 -103,-93l-6 -35 9 2c35,45 84,78 125,118 2,2 3,3 5,4l2 10 -31 -6c0,0 -1,0 -1,0z"/>
                                <path class="fil58" d="M8065 5553c-32,-33 -66,-64 -103,-93l-6 -35 9 2c35,45 84,78 125,118 2,2 3,3 5,4l2 10 -31 -6c0,0 -1,0 -1,0z"/>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil17" points="8278,5267 8217,5778 8569,5405 8541,5094 "/>
                            <g>
                                <polygon class="fil17" points="8278,5267 8217,5778 8569,5405 8541,5094 "/>
                                <path class="fil54" d="M8566 5368c-20,-6 -42,-9 -60,-21 -25,-16 -37,-46 -29,-75 10,-35 32,-71 53,-99 6,-8 11,-15 16,-23l-5 -56 -21 14c-19,33 -42,64 -61,98 -14,25 -27,76 -60,82 -13,3 -25,-1 -36,-6 -18,-7 -37,-13 -55,-17 -11,-2 -20,0 -30,2l-3 28c25,21 52,44 64,74 19,47 -9,93 -32,132 -17,27 -36,55 -45,87 -7,27 -14,54 -28,79 -1,3 -3,6 -4,8l-13 103 87 -92c2,-7 5,-14 7,-21 9,-29 24,-55 35,-82 10,-28 14,-58 26,-85 11,-24 27,-43 44,-63 12,-14 24,-39 45,-44 19,-4 37,3 53,12 12,7 24,14 36,22l19 -20 -3 -37z"/>
                                <path class="fil54" d="M8566 5368c-20,-6 -42,-9 -60,-21 -25,-16 -37,-46 -29,-75 10,-35 32,-71 53,-99 6,-8 11,-15 16,-23l-5 -56 -21 14c-19,33 -42,64 -61,98 -14,25 -27,76 -60,82 -13,3 -25,-1 -36,-6 -18,-7 -37,-13 -55,-17 -11,-2 -20,0 -30,2l-3 28c25,21 52,44 64,74 19,47 -9,93 -32,132 -17,27 -36,55 -45,87 -7,27 -14,54 -28,79 -1,3 -3,6 -4,8l-13 103 87 -92c2,-7 5,-14 7,-21 9,-29 24,-55 35,-82 10,-28 14,-58 26,-85 11,-24 27,-43 44,-63 12,-14 24,-39 45,-44 19,-4 37,3 53,12 12,7 24,14 36,22l19 -20 -3 -37z"/>
                                <path class="fil54" d="M8567 5385c-15,-10 -32,-19 -51,-25 -14,-5 -63,-14 -59,-38 3,-19 10,-38 15,-56 6,-19 14,-35 23,-52 17,-32 31,-65 48,-96l-2 -24 -1 1c-9,12 -17,24 -25,37 -12,18 -20,37 -31,56 -9,18 -21,35 -30,53 -7,15 -13,31 -23,45 -14,21 -31,18 -52,9 -15,-7 -30,-9 -46,-14 -17,-5 -33,-12 -51,-14 0,0 0,-1 0,-1 -1,1 -2,1 -4,1l-1 14c25,12 51,26 76,39 15,8 41,20 41,41 -1,18 -11,32 -21,46 -18,25 -31,52 -37,82 -5,29 -4,59 -19,86 -14,27 -32,54 -48,80 -13,22 -30,42 -44,63l-8 60 36 -38c6,-13 12,-27 18,-40 29,-59 71,-116 88,-180 10,-38 22,-73 42,-107 14,-22 30,-45 59,-40 25,4 47,16 70,26 7,3 21,7 32,14l7 -8 -2 -20z"/>
                                <path class="fil54" d="M8567 5385c-15,-10 -32,-19 -51,-25 -14,-5 -63,-14 -59,-38 3,-19 10,-38 15,-56 6,-19 14,-35 23,-52 17,-32 31,-65 48,-96l-2 -24 -1 1c-9,12 -17,24 -25,37 -12,18 -20,37 -31,56 -9,18 -21,35 -30,53 -7,15 -13,31 -23,45 -14,21 -31,18 -52,9 -15,-7 -30,-9 -46,-14 -17,-5 -33,-12 -51,-14 0,0 0,-1 0,-1 -1,1 -2,1 -4,1l-1 14c25,12 51,26 76,39 15,8 41,20 41,41 -1,18 -11,32 -21,46 -18,25 -31,52 -37,82 -5,29 -4,59 -19,86 -14,27 -32,54 -48,80 -13,22 -30,42 -44,63l-8 60 36 -38c6,-13 12,-27 18,-40 29,-59 71,-116 88,-180 10,-38 22,-73 42,-107 14,-22 30,-45 59,-40 25,4 47,16 70,26 7,3 21,7 32,14l7 -8 -2 -20z"/>
                                <polygon class="fil63" points="8220,5790 8208,5784 8548,5067 8559,5072 "/>
                                <polygon class="fil63" points="8220,5790 8208,5784 8548,5067 8559,5072 "/>
                                <polygon class="fil64" points="8245,5258 8250,5246 8609,5416 8604,5428 "/>
                                <polygon class="fil64" points="8245,5258 8250,5246 8609,5416 8604,5428 "/>
                            </g>
                        </g>
                        <g>
                            <path class="fil65" d="M8260 5530c0,0 169,110 147,193 -23,83 -145,12 -166,-29 0,0 24,116 -20,196 0,0 84,176 11,213 -68,34 -133,-96 -150,-176 0,0 -57,219 -149,177 -91,-42 -9,-218 -9,-218 0,0 -35,-109 -3,-191 0,0 -117,114 -160,46 -50,-78 110,-182 159,-206 50,-23 340,-5 340,-5z"/>
                            <g>
                                <path class="fil65" d="M8260 5530c0,0 169,110 147,193 -23,83 -145,12 -166,-29 0,0 24,116 -20,196 0,0 84,176 11,213 -68,34 -133,-96 -150,-176 0,0 -57,219 -149,177 -91,-42 -9,-218 -9,-218 0,0 -35,-109 -3,-191 0,0 -117,114 -160,46 -50,-78 110,-182 159,-206 50,-23 340,-5 340,-5z"/>
                                <path class="fil54" d="M8260 5530c0,0 -13,-1 -33,-2 21,21 35,48 57,68 27,25 66,38 88,67 14,19 27,46 10,67 -16,19 -57,7 -74,-1 -26,-11 -49,-48 -79,-47 1,48 11,98 -1,145 -5,22 -17,45 -15,68 1,18 8,35 14,52 12,29 25,60 15,91 -5,16 -21,38 -40,34 -20,-3 -34,-22 -44,-38 -14,-21 -25,-44 -37,-67 -4,-8 -10,-14 -15,-22 -5,-6 -9,-15 -16,-20 -16,-12 -30,8 -36,20 -16,34 -26,74 -50,104 -18,22 -70,41 -87,6 -10,-20 -5,-41 -4,-62 2,-22 7,-42 15,-62 8,-19 18,-38 12,-59 -3,-12 -7,-24 -9,-37 -4,-28 -7,-57 -1,-85 6,-23 30,-55 16,-78 -7,-12 -19,-11 -31,-7 -28,10 -53,29 -79,42 -14,7 -36,20 -49,5 -16,-19 6,-68 17,-86 18,-27 45,-44 74,-59 16,-14 36,-26 57,-36 -6,1 -11,2 -15,4 -49,24 -209,128 -159,206 43,68 160,-46 160,-46 -32,82 3,191 3,191 0,0 -82,176 9,218 92,42 149,-177 149,-177 17,80 82,210 150,176 73,-37 -11,-213 -11,-213 44,-80 20,-196 20,-196 21,41 143,112 166,29 22,-83 -147,-193 -147,-193z"/>
                                <path class="fil54" d="M8260 5530c0,0 -13,-1 -33,-2 21,21 35,48 57,68 27,25 66,38 88,67 14,19 27,46 10,67 -16,19 -57,7 -74,-1 -26,-11 -49,-48 -79,-47 1,48 11,98 -1,145 -5,22 -17,45 -15,68 1,18 8,35 14,52 12,29 25,60 15,91 -5,16 -21,38 -40,34 -20,-3 -34,-22 -44,-38 -14,-21 -25,-44 -37,-67 -4,-8 -10,-14 -15,-22 -5,-6 -9,-15 -16,-20 -16,-12 -30,8 -36,20 -16,34 -26,74 -50,104 -18,22 -70,41 -87,6 -10,-20 -5,-41 -4,-62 2,-22 7,-42 15,-62 8,-19 18,-38 12,-59 -3,-12 -7,-24 -9,-37 -4,-28 -7,-57 -1,-85 6,-23 30,-55 16,-78 -7,-12 -19,-11 -31,-7 -28,10 -53,29 -79,42 -14,7 -36,20 -49,5 -16,-19 6,-68 17,-86 18,-27 45,-44 74,-59 16,-14 36,-26 57,-36 -6,1 -11,2 -15,4 -49,24 -209,128 -159,206 43,68 160,-46 160,-46 -32,82 3,191 3,191 0,0 -82,176 9,218 92,42 149,-177 149,-177 17,80 82,210 150,176 73,-37 -11,-213 -11,-213 44,-80 20,-196 20,-196 21,41 143,112 166,29 22,-83 -147,-193 -147,-193z"/>
                                <path class="fil54" d="M7989 5613c0,0 -44,46 -43,157 1,111 97,134 152,128 55,-5 114,-38 119,-121 5,-83 2,-178 -73,-187 -75,-8 -139,-1 -155,23z"/>
                                <path class="fil54" d="M7989 5613c0,0 -44,46 -43,157 1,111 97,134 152,128 55,-5 114,-38 119,-121 5,-83 2,-178 -73,-187 -75,-8 -139,-1 -155,23z"/>
                                <path class="fil66" d="M7996 5622c0,0 -42,43 -41,146 2,104 91,125 142,120 51,-5 106,-36 111,-113 4,-78 1,-166 -69,-174 -69,-8 -128,-1 -143,21z"/>
                                <path class="fil66" d="M7996 5622c0,0 -42,43 -41,146 2,104 91,125 142,120 51,-5 106,-36 111,-113 4,-78 1,-166 -69,-174 -69,-8 -128,-1 -143,21z"/>
                                <path class="fil67" d="M8008 5619c0,0 -36,36 -35,124 1,89 77,107 121,103 44,-5 91,-31 95,-97 4,-66 1,-141 -58,-148 -60,-8 -110,-1 -123,18z"/>
                                <path class="fil67" d="M8008 5619c0,0 -36,36 -35,124 1,89 77,107 121,103 44,-5 91,-31 95,-97 4,-66 1,-141 -58,-148 -60,-8 -110,-1 -123,18z"/>
                                <path class="fil54" d="M8260 5530c0,0 -290,-18 -340,5 -4,2 -8,4 -13,7 21,60 71,119 190,116 111,-3 155,-64 171,-123 -5,-3 -8,-5 -8,-5z"/>
                                <path class="fil54" d="M8260 5530c0,0 -290,-18 -340,5 -4,2 -8,4 -13,7 21,60 71,119 190,116 111,-3 155,-64 171,-123 -5,-3 -8,-5 -8,-5z"/>
                                <path class="fil68" d="M7980 5306c0,0 84,-61 241,-7 0,0 72,-52 104,12 30,59 -51,92 -51,92 0,0 37,222 -178,227 -240,6 -201,-240 -201,-240 0,0 -61,-55 -12,-99 46,-41 97,15 97,15z"/>
                                <path class="fil68" d="M7980 5306c0,0 84,-61 241,-7 0,0 72,-52 104,12 30,59 -51,92 -51,92 0,0 37,222 -178,227 -240,6 -201,-240 -201,-240 0,0 -61,-55 -12,-99 46,-41 97,15 97,15z"/>
                                <g>
                                    <path class="fil69" d="M8095 5597c-161,4 -197,-106 -202,-179 -2,65 14,217 203,212 184,-5 183,-168 179,-215 -2,65 -27,178 -180,182z"/>
                                    <g>
                                        <path class="fil69" d="M8095 5597c-161,4 -197,-106 -202,-179 -2,65 14,217 203,212 184,-5 183,-168 179,-215 -2,65 -27,178 -180,182z"/>
                                        <path class="fil69" d="M7894 5357c0,0 -20,-18 -27,-41 -10,31 16,62 25,71 0,-18 2,-30 2,-30z"/>
                                        <path class="fil69" d="M7894 5357c0,0 -20,-18 -27,-41 -10,31 16,62 25,71 0,-18 2,-30 2,-30z"/>
                                        <path class="fil69" d="M8273 5370c0,0 2,13 2,32 11,-5 71,-34 54,-83 -12,33 -56,51 -56,51z"/>
                                        <path class="fil69" d="M8273 5370c0,0 2,13 2,32 11,-5 71,-34 54,-83 -12,33 -56,51 -56,51z"/>
                                    </g>
                                </g>
                                <path class="fil70" d="M8133 5465c0,6 -14,24 -31,24 -18,0 -33,-17 -33,-23 0,-6 14,-11 32,-11 17,-1 31,4 32,10z"/>
                                <path class="fil70" d="M8133 5465c0,6 -14,24 -31,24 -18,0 -33,-17 -33,-23 0,-6 14,-11 32,-11 17,-1 31,4 32,10z"/>
                                <g>
                                    <path class="fil70" d="M8182 5409c0,6 -5,12 -11,12 -7,0 -12,-5 -12,-11 0,-7 5,-12 11,-12 7,0 12,5 12,11z"/>
                                    <g>
                                        <path class="fil70" d="M8182 5409c0,6 -5,12 -11,12 -7,0 -12,-5 -12,-11 0,-7 5,-12 11,-12 7,0 12,5 12,11z"/>
                                        <path class="fil67" d="M8174 5407c0,3 -3,5 -5,5 -3,0 -5,-2 -5,-5 0,-2 2,-5 4,-5 3,0 5,2 6,5z"/>
                                        <path class="fil67" d="M8174 5407c0,3 -3,5 -5,5 -3,0 -5,-2 -5,-5 0,-2 2,-5 4,-5 3,0 5,2 6,5z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil70" d="M8102 5489c0,0 3,9 1,23 0,4 -1,7 -3,11 -2,4 -4,9 -8,12 -3,4 -8,8 -13,10 -6,2 -12,3 -17,3 -3,0 -5,0 -8,0 -3,-1 -4,-1 -7,-2 -2,0 -5,-1 -7,-2 -2,-1 -5,-2 -7,-3 -4,-3 -8,-6 -11,-9 -3,-3 -5,-6 -7,-10 -3,-6 -4,-12 -4,-16 -1,-5 0,-7 0,-7 0,0 2,2 5,5 1,1 3,2 4,4 2,1 5,3 7,4 2,2 5,3 7,4 3,1 6,2 9,3 2,0 3,0 5,1 1,0 2,0 4,1 2,0 4,0 6,0 1,0 2,0 4,0 1,1 2,0 4,0 1,0 2,0 3,-1 3,0 5,-1 7,-2 3,-2 5,-4 7,-6 2,-2 4,-4 6,-6 4,-4 7,-9 9,-12 2,-3 4,-5 4,-5z"/>
                                    <g>
                                        <path class="fil70" d="M8102 5489c0,0 3,9 1,23 0,4 -1,7 -3,11 -2,4 -4,9 -8,12 -3,4 -8,8 -13,10 -6,2 -12,3 -17,3 -3,0 -5,0 -8,0 -3,-1 -4,-1 -7,-2 -2,0 -5,-1 -7,-2 -2,-1 -5,-2 -7,-3 -4,-3 -8,-6 -11,-9 -3,-3 -5,-6 -7,-10 -3,-6 -4,-12 -4,-16 -1,-5 0,-7 0,-7 0,0 2,2 5,5 1,1 3,2 4,4 2,1 5,3 7,4 2,2 5,3 7,4 3,1 6,2 9,3 2,0 3,0 5,1 1,0 2,0 4,1 2,0 4,0 6,0 1,0 2,0 4,0 1,1 2,0 4,0 1,0 2,0 3,-1 3,0 5,-1 7,-2 3,-2 5,-4 7,-6 2,-2 4,-4 6,-6 4,-4 7,-9 9,-12 2,-3 4,-5 4,-5z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil70" d="M8102 5489c0,0 1,2 3,5 1,3 4,7 7,12 3,5 6,10 10,14 1,2 3,3 5,4 2,1 3,2 5,2 0,0 0,0 1,0 0,0 1,0 1,0l5 0c2,0 5,0 7,-1 3,-1 5,-1 7,-2 2,-1 4,-3 6,-4 4,-3 7,-7 10,-10 2,-2 4,-4 4,-4 0,0 0,3 1,6 0,4 1,9 -1,16 -2,4 -3,7 -6,11 -3,3 -6,7 -11,9 -4,3 -9,4 -14,5 -2,1 -4,1 -6,1 -2,0 -3,0 -5,0 -1,0 -3,0 -4,-1 -6,-1 -12,-4 -16,-7 -4,-4 -7,-8 -9,-13 -4,-8 -5,-16 -5,-22 0,-7 1,-12 2,-15 1,-4 3,-6 3,-6z"/>
                                    <g>
                                        <path class="fil70" d="M8102 5489c0,0 1,2 3,5 1,3 4,7 7,12 3,5 6,10 10,14 1,2 3,3 5,4 2,1 3,2 5,2 0,0 0,0 1,0 0,0 1,0 1,0l5 0c2,0 5,0 7,-1 3,-1 5,-1 7,-2 2,-1 4,-3 6,-4 4,-3 7,-7 10,-10 2,-2 4,-4 4,-4 0,0 0,3 1,6 0,4 1,9 -1,16 -2,4 -3,7 -6,11 -3,3 -6,7 -11,9 -4,3 -9,4 -14,5 -2,1 -4,1 -6,1 -2,0 -3,0 -5,0 -1,0 -3,0 -4,-1 -6,-1 -12,-4 -16,-7 -4,-4 -7,-8 -9,-13 -4,-8 -5,-16 -5,-22 0,-7 1,-12 2,-15 1,-4 3,-6 3,-6z"/>
                                    </g>
                                </g>
                                <path class="fil66" d="M8241 5313c0,0 45,-28 61,10 16,36 -37,53 -37,53 0,0 -6,-29 -24,-63z"/>
                                <path class="fil66" d="M8241 5313c0,0 45,-28 61,10 16,36 -37,53 -37,53 0,0 -6,-29 -24,-63z"/>
                                <path class="fil54" d="M8243 5318c0,0 39,-24 53,9 13,31 -32,45 -32,45 0,0 -5,-24 -21,-54z"/>
                                <path class="fil54" d="M8243 5318c0,0 39,-24 53,9 13,31 -32,45 -32,45 0,0 -5,-24 -21,-54z"/>
                                <path class="fil66" d="M7907 5364c0,0 -36,-31 -12,-57 27,-29 54,-3 61,9 0,0 -24,19 -49,48z"/>
                                <path class="fil66" d="M7907 5364c0,0 -36,-31 -12,-57 27,-29 54,-3 61,9 0,0 -24,19 -49,48z"/>
                                <path class="fil54" d="M7911 5360c0,0 -29,-26 -10,-47 22,-24 44,-2 50,7 0,0 -20,16 -40,40z"/>
                                <path class="fil54" d="M7911 5360c0,0 -29,-26 -10,-47 22,-24 44,-2 50,7 0,0 -20,16 -40,40z"/>
                                <g>
                                    <path class="fil71 str14" d="M7908 5545c0,0 39,64 14,141"/>
                                    <g>
                                        <path class="fil71 str14" d="M7908 5545c0,0 39,64 14,141"/>
                                    </g>
                                </g>
                                <path class="fil36 str15" d="M8232 5678c0,0 2,-97 30,-134"/>
                                <path class="fil36 str15" d="M8232 5678c0,0 2,-97 30,-134"/>
                                <path class="fil36 str15" d="M7927 5886c0,0 75,-9 149,36"/>
                                <path class="fil36 str15" d="M7927 5886c0,0 75,-9 149,36"/>
                                <path class="fil36 str15" d="M8090 5922c0,0 40,-39 123,-32"/>
                                <path class="fil36 str15" d="M8090 5922c0,0 40,-39 123,-32"/>
                                <g>
                                    <path class="fil70" d="M8035 5412c0,6 -5,12 -11,12 -7,0 -12,-5 -12,-11 0,-7 5,-12 11,-12 6,0 12,5 12,11z"/>
                                    <g>
                                        <path class="fil70" d="M8035 5412c0,6 -5,12 -11,12 -7,0 -12,-5 -12,-11 0,-7 5,-12 11,-12 6,0 12,5 12,11z"/>
                                        <path class="fil67" d="M8026 5410c0,3 -2,5 -4,5 -3,0 -5,-2 -6,-5 0,-3 3,-5 5,-5 3,0 5,2 5,5z"/>
                                        <path class="fil67" d="M8026 5410c0,3 -2,5 -4,5 -3,0 -5,-2 -6,-5 0,-3 3,-5 5,-5 3,0 5,2 5,5z"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <path class="fil72" d="M8377 5587c0,0 -83,-51 -130,83 -27,79 8,160 8,160 0,0 104,-106 122,-243z"/>
                            <g>
                                <path class="fil72" d="M8377 5587c0,0 -83,-51 -130,83 -27,79 8,160 8,160 0,0 104,-106 122,-243z"/>
                                <path class="fil69" d="M8285 5794c32,-42 80,-118 92,-207 0,0 -6,-4 -16,-7 -24,8 -52,31 -73,90 -16,46 -10,93 -3,124z"/>
                                <path class="fil69" d="M8285 5794c32,-42 80,-118 92,-207 0,0 -6,-4 -16,-7 -24,8 -52,31 -73,90 -16,46 -10,93 -3,124z"/>
                                <path class="fil73" d="M8568 5733c0,0 71,66 -46,147 -68,47 -156,34 -156,34 0,0 75,-128 202,-181z"/>
                                <path class="fil73" d="M8568 5733c0,0 71,66 -46,147 -68,47 -156,34 -156,34 0,0 75,-128 202,-181z"/>
                                <path class="fil69" d="M8516 5818c37,-26 56,-50 63,-72 -5,-8 -11,-13 -11,-13 -69,29 -123,80 -157,121 30,-3 70,-12 105,-36z"/>
                                <path class="fil69" d="M8516 5818c37,-26 56,-50 63,-72 -5,-8 -11,-13 -11,-13 -69,29 -123,80 -157,121 30,-3 70,-12 105,-36z"/>
                                <path class="fil74" d="M8321 5714c12,24 32,49 58,69 27,20 56,33 82,37l0 0c44,-24 88,-60 124,-107 73,-96 94,-208 61,-281 -78,-13 -181,38 -254,134 -36,48 -59,99 -70,147l-1 1z"/>
                                <path class="fil74" d="M8321 5714c12,24 32,49 58,69 27,20 56,33 82,37l0 0c44,-24 88,-60 124,-107 73,-96 94,-208 61,-281 -78,-13 -181,38 -254,134 -36,48 -59,99 -70,147l-1 1z"/>
                                <path class="fil73" d="M8540 5666c-19,25 -55,30 -80,11 -25,-19 -30,-55 -11,-81 19,-25 55,-30 80,-10 26,19 30,55 11,80z"/>
                                <path class="fil73" d="M8540 5666c-19,25 -55,30 -80,11 -25,-19 -30,-55 -11,-81 19,-25 55,-30 80,-10 26,19 30,55 11,80z"/>
                                <path class="fil72" d="M8538 5664c-18,24 -52,29 -76,10 -24,-18 -29,-52 -11,-76 19,-24 53,-28 77,-10 24,18 28,52 10,76z"/>
                                <path class="fil72" d="M8538 5664c-18,24 -52,29 -76,10 -24,-18 -29,-52 -11,-76 19,-24 53,-28 77,-10 24,18 28,52 10,76z"/>
                                <path class="fil73" d="M8527 5656c-13,18 -39,21 -57,8 -18,-14 -21,-40 -8,-57 14,-18 40,-22 57,-8 18,13 22,39 8,57z"/>
                                <path class="fil73" d="M8527 5656c-13,18 -39,21 -57,8 -18,-14 -21,-40 -8,-57 14,-18 40,-22 57,-8 18,13 22,39 8,57z"/>
                                <path class="fil75" d="M8523 5653c-12,16 -34,19 -50,7 -16,-12 -19,-35 -7,-51 12,-15 35,-19 51,-6 15,12 18,34 6,50z"/>
                                <path class="fil75" d="M8523 5653c-12,16 -34,19 -50,7 -16,-12 -19,-35 -7,-51 12,-15 35,-19 51,-6 15,12 18,34 6,50z"/>
                                <g>
                                    <path class="fil18" d="M8657 5555c8,-46 5,-89 -11,-123 -36,-6 -77,2 -119,21 1,1 20,80 130,102z"/>
                                    <g>
                                        <path class="fil18" d="M8657 5555c8,-46 5,-89 -11,-123 -36,-6 -77,2 -119,21 1,1 20,80 130,102z"/>
                                    </g>
                                </g>
                                <path class="fil76" d="M8684 5391c2,-2 1,-5 -1,-7 -2,-2 -5,-1 -7,1l-35 46c-2,2 -1,5 1,7 2,2 5,1 7,-1l35 -46z"/>
                                <path class="fil76" d="M8684 5391c2,-2 1,-5 -1,-7 -2,-2 -5,-1 -7,1l-35 46c-2,2 -1,5 1,7 2,2 5,1 7,-1l35 -46z"/>
                                <path class="fil77" d="M8697 5395c-6,7 -17,9 -25,3 -7,-6 -9,-17 -3,-25 6,-8 17,-9 25,-3 7,6 9,17 3,25z"/>
                                <path class="fil77" d="M8697 5395c-6,7 -17,9 -25,3 -7,-6 -9,-17 -3,-25 6,-8 17,-9 25,-3 7,6 9,17 3,25z"/>
                                <path class="fil58" d="M8689 5382c-3,4 -8,4 -12,1 -3,-2 -4,-8 -1,-11 3,-4 8,-5 12,-2 3,3 4,8 1,12z"/>
                                <path class="fil58" d="M8689 5382c-3,4 -8,4 -12,1 -3,-2 -4,-8 -1,-11 3,-4 8,-5 12,-2 3,3 4,8 1,12z"/>
                                <g>
                                    <path class="fil18" d="M8379 5783c27,20 56,33 82,37l0 0c25,-13 49,-30 71,-51 -127,-15 -180,-137 -180,-137 -14,27 -24,55 -30,81l-1 1c12,24 32,49 58,69z"/>
                                    <g>
                                        <path class="fil18" d="M8379 5783c27,20 56,33 82,37l0 0c25,-13 49,-30 71,-51 -127,-15 -180,-137 -180,-137 -14,27 -24,55 -30,81l-1 1c12,24 32,49 58,69z"/>
                                    </g>
                                </g>
                                <path class="fil78" d="M8496 5798c-31,-8 -63,-24 -93,-47 -30,-22 -53,-49 -70,-76 -4,13 -8,26 -11,38l-1 1c12,24 32,49 58,69 27,20 56,33 82,37l0 0c12,-7 24,-14 35,-22z"/>
                                <path class="fil78" d="M8496 5798c-31,-8 -63,-24 -93,-47 -30,-22 -53,-49 -70,-76 -4,13 -8,26 -11,38l-1 1c12,24 32,49 58,69 27,20 56,33 82,37l0 0c12,-7 24,-14 35,-22z"/>
                                <path class="fil58" d="M8461 5618c-1,2 -1,5 -2,7l68 -9c-1,-2 -2,-5 -4,-7 -20,3 -41,6 -62,9z"/>
                                <path class="fil58" d="M8461 5618c-1,2 -1,5 -2,7l68 -9c-1,-2 -2,-5 -4,-7 -20,3 -41,6 -62,9z"/>
                                <path class="fil58" d="M8517 5603c0,0 0,0 0,0 -16,-13 -39,-9 -51,6 0,1 0,1 0,1l51 -7z"/>
                                <path class="fil58" d="M8517 5603c0,0 0,0 0,0 -16,-13 -39,-9 -51,6 0,1 0,1 0,1l51 -7z"/>
                                <path class="fil58" d="M8527 5648c4,-8 5,-17 3,-25l-71 9c0,9 3,17 9,24 20,-3 39,-6 59,-8z"/>
                                <path class="fil58" d="M8527 5648c4,-8 5,-17 3,-25l-71 9c0,9 3,17 9,24 20,-3 39,-6 59,-8z"/>
                                <path class="fil69" d="M8585 5713c73,-96 94,-208 61,-281 -1,0 -2,0 -3,0 -7,71 -39,150 -93,222 -45,58 -98,103 -152,132l0 0c-7,-1 -14,-2 -20,-4 0,0 1,1 1,1 27,20 56,33 82,37l0 0c44,-24 88,-60 124,-107z"/>
                                <path class="fil69" d="M8585 5713c73,-96 94,-208 61,-281 -1,0 -2,0 -3,0 -7,71 -39,150 -93,222 -45,58 -98,103 -152,132l0 0c-7,-1 -14,-2 -20,-4 0,0 1,1 1,1 27,20 56,33 82,37l0 0c44,-24 88,-60 124,-107z"/>
                                <path class="fil58" d="M8651 5456c3,8 7,17 9,27 -2,-19 -7,-36 -14,-51 -78,-13 -181,38 -254,134 -33,43 -55,90 -67,135 0,0 0,0 0,1l0 0c0,0 0,0 0,1 2,4 4,9 7,13 12,-42 34,-86 65,-126 73,-96 175,-147 254,-134z"/>
                                <path class="fil58" d="M8651 5456c3,8 7,17 9,27 -2,-19 -7,-36 -14,-51 -78,-13 -181,38 -254,134 -33,43 -55,90 -67,135 0,0 0,0 0,1l0 0c0,0 0,0 0,1 2,4 4,9 7,13 12,-42 34,-86 65,-126 73,-96 175,-147 254,-134z"/>
                            </g>
                        </g>
                        <g>
                            <path class="fil17" d="M7910 5444c-2,91 -73,71 -111,51 -39,-20 -62,4 -75,-1 -14,-6 -1,-22 23,-77 25,-55 -16,-100 -16,-100 0,0 52,-19 47,-23 -6,-4 -55,13 -55,13 0,0 24,-68 17,-68 -6,0 -31,59 -31,59 -140,-20 -148,91 -148,91 0,0 -5,34 14,67 0,0 7,22 -29,39 -35,18 -53,142 86,191 139,49 231,-28 262,-82 31,-53 27,-141 16,-160z"/>
                            <g>
                                <path class="fil17" d="M7910 5444c-2,91 -73,71 -111,51 -39,-20 -62,4 -75,-1 -14,-6 -1,-22 23,-77 25,-55 -16,-100 -16,-100 0,0 52,-19 47,-23 -6,-4 -55,13 -55,13 0,0 24,-68 17,-68 -6,0 -31,59 -31,59 -140,-20 -148,91 -148,91 0,0 -5,34 14,67 0,0 7,22 -29,39 -35,18 -53,142 86,191 139,49 231,-28 262,-82 31,-53 27,-141 16,-160z"/>
                                <path class="fil54" d="M7560 5492c17,-3 36,-3 51,-12 17,-11 25,-27 32,-45 1,-4 3,-9 3,-13 0,-7 -11,-3 -14,-2 -5,2 -11,4 -17,5 -16,4 -33,7 -49,10 2,7 5,14 9,21 0,0 7,22 -29,39 -2,2 -5,4 -7,6 6,-4 13,-7 21,-9z"/>
                                <path class="fil54" d="M7560 5492c17,-3 36,-3 51,-12 17,-11 25,-27 32,-45 1,-4 3,-9 3,-13 0,-7 -11,-3 -14,-2 -5,2 -11,4 -17,5 -16,4 -33,7 -49,10 2,7 5,14 9,21 0,0 7,22 -29,39 -2,2 -5,4 -7,6 6,-4 13,-7 21,-9z"/>
                                <g>
                                    <path class="fil69" d="M7719 5301c0,0 3,-1 7,-1 2,-8 6,-20 9,-31 -8,16 -16,32 -16,32z"/>
                                    <g>
                                        <path class="fil69" d="M7719 5301c0,0 3,-1 7,-1 2,-8 6,-20 9,-31 -8,16 -16,32 -16,32z"/>
                                        <path class="fil54" d="M7724 5494c-14,-6 -1,-22 23,-77 25,-55 -16,-100 -16,-100 0,0 15,-5 28,-11 -15,4 -33,8 -33,8 0,0 37,56 0,111 -36,56 -52,71 -39,80 13,8 43,-14 82,14 38,28 108,61 129,-26 -23,32 -70,17 -99,2 -39,-20 -62,4 -75,-1z"/>
                                        <path class="fil54" d="M7724 5494c-14,-6 -1,-22 23,-77 25,-55 -16,-100 -16,-100 0,0 15,-5 28,-11 -15,4 -33,8 -33,8 0,0 37,56 0,111 -36,56 -52,71 -39,80 13,8 43,-14 82,14 38,28 108,61 129,-26 -23,32 -70,17 -99,2 -39,-20 -62,4 -75,-1z"/>
                                        <path class="fil69" d="M7778 5296c0,-1 0,-1 0,-2 -2,-1 -8,0 -15,1 6,0 12,0 15,1z"/>
                                        <path class="fil69" d="M7778 5296c0,-1 0,-1 0,-2 -2,-1 -8,0 -15,1 6,0 12,0 15,1z"/>
                                        <path class="fil69" d="M7738 5240c0,1 -1,2 -2,3 1,-1 2,-2 2,-3z"/>
                                        <path class="fil69" d="M7738 5240c0,1 -1,2 -2,3 1,-1 2,-2 2,-3z"/>
                                    </g>
                                </g>
                                <path class="fil54" d="M7917 5520c-3,10 -7,19 -12,27 -34,58 -134,142 -285,89 -49,-17 -80,-43 -98,-70 4,43 33,93 110,120 139,49 231,-28 262,-82 14,-24 21,-55 23,-84z"/>
                                <path class="fil54" d="M7917 5520c-3,10 -7,19 -12,27 -34,58 -134,142 -285,89 -49,-17 -80,-43 -98,-70 4,43 33,93 110,120 139,49 231,-28 262,-82 14,-24 21,-55 23,-84z"/>
                                <path class="fil54" d="M7671 5623c0,0 114,27 146,-76 0,0 -21,142 -146,76z"/>
                                <path class="fil54" d="M7671 5623c0,0 114,27 146,-76 0,0 -21,142 -146,76z"/>
                                <path class="fil70" d="M7638 5373c-2,5 -6,8 -11,7 -5,-2 -8,-6 -7,-11 2,-5 6,-8 11,-7 5,2 8,6 7,11z"/>
                                <path class="fil70" d="M7638 5373c-2,5 -6,8 -11,7 -5,-2 -8,-6 -7,-11 2,-5 6,-8 11,-7 5,2 8,6 7,11z"/>
                                <path class="fil79" d="M7630 5369c0,2 -2,3 -4,3 -2,-1 -3,-3 -2,-4 0,-2 2,-3 4,-3 1,1 3,3 2,4z"/>
                                <path class="fil79" d="M7630 5369c0,2 -2,3 -4,3 -2,-1 -3,-3 -2,-4 0,-2 2,-3 4,-3 1,1 3,3 2,4z"/>
                                <path class="fil80" d="M7507 5393c0,0 43,6 55,-10 0,0 27,25 41,26 13,0 35,-9 44,-1 8,7 -9,33 -35,31 -27,-1 -71,6 -84,12 -12,5 -30,2 -24,-11 6,-12 23,-17 38,-18 0,0 -28,-6 -43,-20 0,0 -8,-10 8,-9z"/>
                                <path class="fil80" d="M7507 5393c0,0 43,6 55,-10 0,0 27,25 41,26 13,0 35,-9 44,-1 8,7 -9,33 -35,31 -27,-1 -71,6 -84,12 -12,5 -30,2 -24,-11 6,-12 23,-17 38,-18 0,0 -28,-6 -43,-20 0,0 -8,-10 8,-9z"/>
                                <path class="fil69" d="M7647 5408c-6,13 -22,22 -36,24 -16,2 -31,0 -47,3 -15,3 -28,8 -42,12 -7,1 -16,-1 -19,-6 -4,12 13,15 25,10 13,-6 57,-13 84,-12 26,2 43,-24 35,-31z"/>
                                <path class="fil69" d="M7647 5408c-6,13 -22,22 -36,24 -16,2 -31,0 -47,3 -15,3 -28,8 -42,12 -7,1 -16,-1 -19,-6 -4,12 13,15 25,10 13,-6 57,-13 84,-12 26,2 43,-24 35,-31z"/>
                                <g>
                                    <path class="fil70" d="M7542 5422c0,0 4,0 10,0 6,0 15,-1 23,-1 4,0 8,-1 12,-1 4,0 8,-1 11,-1 3,0 5,-1 7,-1 2,0 3,0 3,0 0,0 -4,2 -10,3 -3,1 -7,2 -10,3 -4,1 -9,1 -13,1 -4,1 -8,1 -12,0 -4,0 -8,0 -11,-1 -6,-1 -10,-2 -10,-2z"/>
                                    <g>
                                        <path class="fil70" d="M7542 5422c0,0 4,0 10,0 6,0 15,-1 23,-1 4,0 8,-1 12,-1 4,0 8,-1 11,-1 3,0 5,-1 7,-1 2,0 3,0 3,0 0,0 -4,2 -10,3 -3,1 -7,2 -10,3 -4,1 -9,1 -13,1 -4,1 -8,1 -12,0 -4,0 -8,0 -11,-1 -6,-1 -10,-2 -10,-2z"/>
                                    </g>
                                </g>
                                <path class="fil70" d="M7567 5404c0,1 1,2 2,3 2,0 4,0 4,-2 0,-1 -1,-2 -3,-2 -1,-1 -3,0 -3,1z"/>
                                <path class="fil70" d="M7567 5404c0,1 1,2 2,3 2,0 4,0 4,-2 0,-1 -1,-2 -3,-2 -1,-1 -3,0 -3,1z"/>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil81" points="7981,5760 8031,5721 8120,5723 8073,5769 "/>
                            <g>
                                <polygon class="fil81" points="7981,5760 8031,5721 8120,5723 8073,5769 "/>
                                <polygon class="fil82" points="8073,5769 8093,5857 8001,5848 7981,5760 "/>
                                <polygon class="fil82" points="8073,5769 8093,5857 8001,5848 7981,5760 "/>
                                <polygon class="fil83" points="8073,5769 8120,5723 8136,5805 8093,5857 "/>
                                <polygon class="fil83" points="8073,5769 8120,5723 8136,5805 8093,5857 "/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="fil82" d="M8317 5668c64,42 81,127 40,190 -42,64 -127,81 -191,39 -63,-41 -81,-127 -39,-190 42,-63 127,-81 190,-39z"/>
                                <g>
                                    <g>
                                        <path class="fil82" d="M8317 5668c64,42 81,127 40,190 -42,64 -127,81 -191,39 -63,-41 -81,-127 -39,-190 42,-63 127,-81 190,-39z"/>
                                        <path class="fil84" d="M8182 5862c41,27 85,40 127,41 18,-11 35,-26 48,-45 2,-4 5,-8 7,-13 -47,14 -100,-1 -149,-33 -43,-29 -76,-64 -86,-108 -1,1 -1,2 -2,3 -15,23 -22,48 -23,74 18,30 44,59 78,81z"/>
                                        <path class="fil84" d="M8182 5862c41,27 85,40 127,41 18,-11 35,-26 48,-45 2,-4 5,-8 7,-13 -47,14 -100,-1 -149,-33 -43,-29 -76,-64 -86,-108 -1,1 -1,2 -2,3 -15,23 -22,48 -23,74 18,30 44,59 78,81z"/>
                                        <path class="fil69" d="M8319 5669c19,42 18,93 -10,134 -42,64 -127,81 -190,39 -1,0 -1,0 -1,0 10,22 26,41 48,55 64,42 149,25 191,-39 41,-63 24,-147 -38,-189z"/>
                                        <path class="fil69" d="M8319 5669c19,42 18,93 -10,134 -42,64 -127,81 -190,39 -1,0 -1,0 -1,0 10,22 26,41 48,55 64,42 149,25 191,-39 41,-63 24,-147 -38,-189z"/>
                                    </g>
                                </g>
                                <path class="fil79" d="M8288 5667c24,15 33,42 22,60 -12,18 -41,20 -64,4 -23,-15 -33,-42 -21,-60 11,-18 40,-19 63,-4z"/>
                                <path class="fil79" d="M8288 5667c24,15 33,42 22,60 -12,18 -41,20 -64,4 -23,-15 -33,-42 -21,-60 11,-18 40,-19 63,-4z"/>
                                <path class="fil69" d="M8193 5844c-37,-25 -67,-56 -86,-89 -11,53 11,110 59,142 52,34 117,29 163,-8 -43,-1 -91,-16 -136,-45z"/>
                                <path class="fil69" d="M8193 5844c-37,-25 -67,-56 -86,-89 -11,53 11,110 59,142 52,34 117,29 163,-8 -43,-1 -91,-16 -136,-45z"/>
                            </g>
                        </g>
                        <g>
                            <path class="fil85" d="M8102 5839c-23,53 -207,26 -412,-60 -205,-86 -354,-198 -332,-251 22,-53 207,-26 412,59 205,86 354,199 332,252z"/>
                            <g>
                                <path class="fil85" d="M8102 5839c-23,53 -207,26 -412,-60 -205,-86 -354,-198 -332,-251 22,-53 207,-26 412,59 205,86 354,199 332,252z"/>
                                <path class="fil69" d="M7885 5709c-9,22 -80,14 -158,-19 -78,-32 -134,-77 -124,-99 9,-22 80,-14 158,19 78,32 134,77 124,99z"/>
                                <path class="fil69" d="M7885 5709c-9,22 -80,14 -158,-19 -78,-32 -134,-77 -124,-99 9,-22 80,-14 158,19 78,32 134,77 124,99z"/>
                                <path class="fil69" d="M7709 5733c-174,-73 -307,-165 -330,-224 -10,5 -17,11 -21,19 -22,53 127,165 332,251 205,86 389,113 412,60 3,-8 2,-18 -2,-28 -57,25 -216,-5 -391,-78z"/>
                                <path class="fil69" d="M7709 5733c-174,-73 -307,-165 -330,-224 -10,5 -17,11 -21,19 -22,53 127,165 332,251 205,86 389,113 412,60 3,-8 2,-18 -2,-28 -57,25 -216,-5 -391,-78z"/>
                                <g>
                                    <path class="fil69" d="M7380 5511c-1,-1 -1,-1 -1,-2 0,0 -1,1 -1,1 1,0 1,0 2,1z"/>
                                    <g>
                                        <path class="fil69" d="M7380 5511c-1,-1 -1,-1 -1,-2 0,0 -1,1 -1,1 1,0 1,0 2,1z"/>
                                        <path class="fil69" d="M7666 5740c-129,-54 -237,-118 -301,-173 34,58 161,144 325,212 205,86 389,113 412,60 2,-6 2,-13 0,-21 -49,38 -233,7 -436,-78z"/>
                                        <path class="fil69" d="M7666 5740c-129,-54 -237,-118 -301,-173 34,58 161,144 325,212 205,86 389,113 412,60 2,-6 2,-13 0,-21 -49,38 -233,7 -436,-78z"/>
                                    </g>
                                </g>
                                <path class="fil81" d="M7730 5682c49,20 99,28 143,23 12,-87 -3,-192 -62,-216 -58,-25 -144,38 -198,108 29,34 69,65 117,85z"/>
                                <path class="fil81" d="M7730 5682c49,20 99,28 143,23 12,-87 -3,-192 -62,-216 -58,-25 -144,38 -198,108 29,34 69,65 117,85z"/>
                                <path class="fil69" d="M7795 5701c27,5 53,7 78,4 10,-67 3,-144 -28,-188 9,53 -14,122 -50,184z"/>
                                <path class="fil69" d="M7795 5701c27,5 53,7 78,4 10,-67 3,-144 -28,-188 9,53 -14,122 -50,184z"/>
                                <path class="fil58" d="M7806 5487c-58,-19 -140,42 -193,110 20,24 45,45 74,63 24,-75 67,-149 119,-173z"/>
                                <path class="fil58" d="M7806 5487c-58,-19 -140,42 -193,110 20,24 45,45 74,63 24,-75 67,-149 119,-173z"/>
                                <g>
                                    <path class="fil72" d="M7613 5597c0,0 -14,-3 -35,-6 -21,-4 -50,-9 -78,-11 -7,-1 -14,-1 -21,-1 -7,0 -14,0 -20,0 -7,1 -13,1 -19,3 -5,1 -11,3 -15,5 -5,2 -8,5 -11,8 -2,4 -4,7 -5,10 -2,2 -2,5 -3,6 0,2 0,3 0,3 0,0 0,-1 0,-3 0,-1 -1,-4 0,-7 1,-3 2,-7 4,-11 3,-4 6,-9 11,-12 5,-3 11,-6 17,-8 6,-2 13,-4 20,-4 7,-1 14,-2 21,-2 7,0 15,1 22,1 15,1 29,4 42,7 14,2 26,6 36,9 21,7 34,13 34,13z"/>
                                    <g>
                                        <path class="fil72" d="M7613 5597c0,0 -14,-3 -35,-6 -21,-4 -50,-9 -78,-11 -7,-1 -14,-1 -21,-1 -7,0 -14,0 -20,0 -7,1 -13,1 -19,3 -5,1 -11,3 -15,5 -5,2 -8,5 -11,8 -2,4 -4,7 -5,10 -2,2 -2,5 -3,6 0,2 0,3 0,3 0,0 0,-1 0,-3 0,-1 -1,-4 0,-7 1,-3 2,-7 4,-11 3,-4 6,-9 11,-12 5,-3 11,-6 17,-8 6,-2 13,-4 20,-4 7,-1 14,-2 21,-2 7,0 15,1 22,1 15,1 29,4 42,7 14,2 26,6 36,9 21,7 34,13 34,13z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil72" d="M7873 5705c0,0 14,5 33,16 10,5 21,11 32,19 12,7 24,16 35,25 5,5 11,10 16,15 5,5 10,11 14,16 4,6 8,12 11,18 2,6 5,11 5,17 1,6 1,12 0,16 -1,5 -3,8 -5,11 -2,3 -4,4 -5,6 -1,1 -2,1 -2,1 0,0 0,0 1,-2 1,-1 3,-3 4,-6 1,-3 2,-7 2,-11 1,-4 0,-8 -1,-13 -2,-5 -4,-10 -7,-15 -3,-5 -7,-10 -11,-15 -5,-5 -9,-10 -14,-15 -5,-4 -11,-9 -16,-14 -22,-18 -45,-35 -62,-47 -18,-13 -30,-22 -30,-22z"/>
                                    <g>
                                        <path class="fil72" d="M7873 5705c0,0 14,5 33,16 10,5 21,11 32,19 12,7 24,16 35,25 5,5 11,10 16,15 5,5 10,11 14,16 4,6 8,12 11,18 2,6 5,11 5,17 1,6 1,12 0,16 -1,5 -3,8 -5,11 -2,3 -4,4 -5,6 -1,1 -2,1 -2,1 0,0 0,0 1,-2 1,-1 3,-3 4,-6 1,-3 2,-7 2,-11 1,-4 0,-8 -1,-13 -2,-5 -4,-10 -7,-15 -3,-5 -7,-10 -11,-15 -5,-5 -9,-10 -14,-15 -5,-4 -11,-9 -16,-14 -22,-18 -45,-35 -62,-47 -18,-13 -30,-22 -30,-22z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil72" d="M7675 5652c0,0 -9,3 -23,6 -13,4 -31,8 -48,14 -9,3 -17,7 -25,11 -3,2 -6,4 -9,7 -3,2 -5,5 -6,7 -1,3 -2,6 -3,8 0,3 0,5 0,7 1,4 1,7 1,7 0,0 0,-1 -1,-2 0,-1 -1,-2 -2,-4 -1,-2 -2,-4 -2,-8 -1,-3 -1,-6 0,-10 2,-4 4,-8 7,-11 2,-4 6,-7 10,-10 4,-3 8,-5 12,-7 4,-2 9,-4 14,-6 9,-3 18,-5 27,-7 9,-1 17,-2 24,-2 15,-1 24,0 24,0z"/>
                                    <g>
                                        <path class="fil72" d="M7675 5652c0,0 -9,3 -23,6 -13,4 -31,8 -48,14 -9,3 -17,7 -25,11 -3,2 -6,4 -9,7 -3,2 -5,5 -6,7 -1,3 -2,6 -3,8 0,3 0,5 0,7 1,4 1,7 1,7 0,0 0,-1 -1,-2 0,-1 -1,-2 -2,-4 -1,-2 -2,-4 -2,-8 -1,-3 -1,-6 0,-10 2,-4 4,-8 7,-11 2,-4 6,-7 10,-10 4,-3 8,-5 12,-7 4,-2 9,-4 14,-6 9,-3 18,-5 27,-7 9,-1 17,-2 24,-2 15,-1 24,0 24,0z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil72" d="M7781 5698c0,0 9,6 21,16 6,6 12,12 19,19 7,8 13,16 19,25 2,5 5,10 7,14 3,5 4,11 5,16 1,5 2,10 1,15 -1,5 -3,10 -6,13 -3,4 -6,6 -9,7 -3,2 -6,3 -8,3 -5,1 -8,1 -8,1 0,0 3,-1 7,-3 1,-1 4,-2 6,-4 2,-2 5,-5 6,-8 2,-2 3,-6 3,-10 0,-4 -1,-8 -2,-12 -3,-8 -7,-17 -12,-26 -6,-8 -12,-16 -17,-24 -6,-8 -11,-15 -16,-21 -10,-12 -16,-21 -16,-21z"/>
                                    <g>
                                        <path class="fil72" d="M7781 5698c0,0 9,6 21,16 6,6 12,12 19,19 7,8 13,16 19,25 2,5 5,10 7,14 3,5 4,11 5,16 1,5 2,10 1,15 -1,5 -3,10 -6,13 -3,4 -6,6 -9,7 -3,2 -6,3 -8,3 -5,1 -8,1 -8,1 0,0 3,-1 7,-3 1,-1 4,-2 6,-4 2,-2 5,-5 6,-8 2,-2 3,-6 3,-10 0,-4 -1,-8 -2,-12 -3,-8 -7,-17 -12,-26 -6,-8 -12,-16 -17,-24 -6,-8 -11,-15 -16,-21 -10,-12 -16,-21 -16,-21z"/>
                                    </g>
                                </g>
                                <path class="fil72" d="M7581 5555c-2,6 -8,8 -14,6 -5,-2 -8,-8 -5,-14 2,-5 8,-8 14,-6 5,3 8,9 5,14z"/>
                                <path class="fil72" d="M7581 5555c-2,6 -8,8 -14,6 -5,-2 -8,-8 -5,-14 2,-5 8,-8 14,-6 5,3 8,9 5,14z"/>
                                <path class="fil72" d="M7601 5623c-2,6 -8,8 -14,6 -5,-2 -8,-9 -5,-14 2,-5 8,-8 14,-6 5,3 8,9 5,14z"/>
                                <path class="fil72" d="M7601 5623c-2,6 -8,8 -14,6 -5,-2 -8,-9 -5,-14 2,-5 8,-8 14,-6 5,3 8,9 5,14z"/>
                                <path class="fil72" d="M7730 5710c-2,5 -8,8 -14,6 -5,-3 -8,-9 -5,-14 2,-6 8,-8 14,-6 5,2 7,9 5,14z"/>
                                <path class="fil72" d="M7730 5710c-2,5 -8,8 -14,6 -5,-3 -8,-9 -5,-14 2,-6 8,-8 14,-6 5,2 7,9 5,14z"/>
                                <path class="fil72" d="M7875 5742c-2,6 -9,8 -14,6 -5,-2 -8,-8 -6,-14 3,-5 9,-8 14,-6 6,3 8,9 6,14z"/>
                                <path class="fil72" d="M7875 5742c-2,6 -9,8 -14,6 -5,-2 -8,-8 -6,-14 3,-5 9,-8 14,-6 6,3 8,9 6,14z"/>
                                <path class="fil72" d="M7927 5700c-2,5 -8,8 -13,6 -6,-3 -8,-9 -6,-14 2,-6 8,-8 14,-6 5,2 8,9 5,14z"/>
                                <path class="fil72" d="M7927 5700c-2,5 -8,8 -13,6 -6,-3 -8,-9 -6,-14 2,-6 8,-8 14,-6 5,2 8,9 5,14z"/>
                                <g>
                                    <path class="fil72" d="M7631 5576c0,0 0,-1 -1,-3 0,-2 -2,-5 -3,-7 -1,-2 -2,-3 -3,-5 -1,-1 -3,-2 -4,-4 -3,-3 -6,-5 -9,-8 -4,-3 -7,-6 -10,-9 -4,-3 -7,-5 -9,-8 -6,-4 -9,-8 -9,-8 0,0 5,0 12,2 3,2 7,3 11,5 2,2 5,3 7,4 2,1 3,3 5,5 4,3 8,7 10,11 3,4 5,8 5,12 1,4 0,8 -1,10 0,2 -1,3 -1,3z"/>
                                    <g>
                                        <path class="fil72" d="M7631 5576c0,0 0,-1 -1,-3 0,-2 -2,-5 -3,-7 -1,-2 -2,-3 -3,-5 -1,-1 -3,-2 -4,-4 -3,-3 -6,-5 -9,-8 -4,-3 -7,-6 -10,-9 -4,-3 -7,-5 -9,-8 -6,-4 -9,-8 -9,-8 0,0 5,0 12,2 3,2 7,3 11,5 2,2 5,3 7,4 2,1 3,3 5,5 4,3 8,7 10,11 3,4 5,8 5,12 1,4 0,8 -1,10 0,2 -1,3 -1,3z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="fil72" d="M7877 5667c0,0 1,-1 2,-2 2,-1 5,-3 8,-5 4,-1 8,-2 13,-2 5,-1 10,0 15,1 2,0 5,1 7,2 2,1 5,2 7,3 4,2 7,4 10,7 3,2 5,4 6,6 2,2 3,3 3,3 0,0 -2,0 -4,-1 -2,0 -5,-1 -8,-2 -2,-1 -4,-1 -6,-2 -1,0 -3,-1 -5,-2 -2,0 -4,0 -7,-1 -2,-1 -4,-1 -6,-2 -4,-1 -8,-1 -12,-2 -2,0 -4,0 -6,-1 -2,0 -4,0 -5,0 -7,0 -12,0 -12,0z"/>
                                    <g>
                                        <path class="fil72" d="M7877 5667c0,0 1,-1 2,-2 2,-1 5,-3 8,-5 4,-1 8,-2 13,-2 5,-1 10,0 15,1 2,0 5,1 7,2 2,1 5,2 7,3 4,2 7,4 10,7 3,2 5,4 6,6 2,2 3,3 3,3 0,0 -2,0 -4,-1 -2,0 -5,-1 -8,-2 -2,-1 -4,-1 -6,-2 -1,0 -3,-1 -5,-2 -2,0 -4,0 -7,-1 -2,-1 -4,-1 -6,-2 -4,-1 -8,-1 -12,-2 -2,0 -4,0 -6,-1 -2,0 -4,0 -5,0 -7,0 -12,0 -12,0z"/>
                                    </g>
                                </g>
                                <path class="fil86" d="M7846 5429c1,-4 -1,-9 -5,-11 -5,-2 -10,0 -12,5l-26 63c-2,4 0,9 5,11 4,2 9,0 11,-5l27 -63z"/>
                                <path class="fil86" d="M7846 5429c1,-4 -1,-9 -5,-11 -5,-2 -10,0 -12,5l-26 63c-2,4 0,9 5,11 4,2 9,0 11,-5l27 -63z"/>
                                <path class="fil72" d="M7871 5430c-7,17 -26,25 -43,18 -16,-7 -24,-26 -17,-42 7,-17 26,-25 42,-18 17,7 24,26 18,42z"/>
                                <path class="fil72" d="M7871 5430c-7,17 -26,25 -43,18 -16,-7 -24,-26 -17,-42 7,-17 26,-25 42,-18 17,7 24,26 18,42z"/>
                                <path class="fil58" d="M7849 5415c-3,8 -12,11 -20,8 -8,-3 -11,-12 -8,-20 3,-8 12,-11 20,-8 8,3 11,12 8,20z"/>
                                <path class="fil58" d="M7849 5415c-3,8 -12,11 -20,8 -8,-3 -11,-12 -8,-20 3,-8 12,-11 20,-8 8,3 11,12 8,20z"/>
                                <path class="fil69" d="M7877 5668c-43,3 -90,-5 -137,-24 -42,-18 -78,-43 -105,-73 -8,9 -15,17 -22,26 29,34 69,65 117,85 49,20 99,28 143,23 2,-12 3,-24 4,-37z"/>
                                <path class="fil69" d="M7877 5668c-43,3 -90,-5 -137,-24 -42,-18 -78,-43 -105,-73 -8,9 -15,17 -22,26 29,34 69,65 117,85 49,20 99,28 143,23 2,-12 3,-24 4,-37z"/>
                                <path class="fil58" d="M7613 5568c0,0 -167,-86 -197,-43 -14,20 197,43 197,43z"/>
                                <path class="fil58" d="M7613 5568c0,0 -167,-86 -197,-43 -14,20 197,43 197,43z"/>
                                <path class="fil58" d="M7495 5599c-24,-31 132,22 132,22 0,0 -76,50 -132,-22z"/>
                                <path class="fil58" d="M7495 5599c-24,-31 132,22 132,22 0,0 -76,50 -132,-22z"/>
                                <path class="fil58" d="M7728 5688c0,0 -101,-25 -90,-5 11,19 166,85 163,60 -3,-26 -73,-55 -73,-55z"/>
                                <path class="fil58" d="M7728 5688c0,0 -101,-25 -90,-5 11,19 166,85 163,60 -3,-26 -73,-55 -73,-55z"/>
                                <path class="fil58" d="M7895 5686c0,0 118,27 148,80 30,52 -131,-51 -148,-80z"/>
                                <path class="fil58" d="M7895 5686c0,0 118,27 148,80 30,52 -131,-51 -148,-80z"/>
                                <path class="fil58" d="M7856 5718c0,0 -17,46 38,63 54,18 85,7 41,-20 -44,-28 -79,-43 -79,-43z"/>
                                <path class="fil58" d="M7856 5718c0,0 -17,46 38,63 54,18 85,7 41,-20 -44,-28 -79,-43 -79,-43z"/>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil87" points="7982,6418 7483,6263 7483,5705 7982,5860 "/>
                            <g>
                                <polygon class="fil87" points="7982,6418 7483,6263 7483,5705 7982,5860 "/>
                                <polygon class="fil88" points="7982,6418 8595,6263 8595,5705 7982,5860 "/>
                                <polygon class="fil88" points="7982,6418 8595,6263 8595,5705 7982,5860 "/>
                            </g>
                        </g>
                        <g>
                            <polygon class="fil89" points="7647,6489 6991,6401 7223,5802 7879,5890 "/>
                            <g>
                                <polygon class="fil89" points="7647,6489 6991,6401 7223,5802 7879,5890 "/>
                                <polygon class="fil90" points="7647,6489 7700,6560 7932,5961 7879,5890 "/>
                                <polygon class="fil90" points="7647,6489 7700,6560 7932,5961 7879,5890 "/>
                                <polygon class="fil91" points="7647,6489 7700,6560 7045,6471 6991,6400 "/>
                                <polygon class="fil91" points="7647,6489 7700,6560 7045,6471 6991,6400 "/>
                            </g>
                        </g>
                    </g>
                </g>
                <path class="fil13" d="M2828 4493l-6 0c0,0 -4,-11 -6,-13 -1,-3 -10,-15 -10,-15 0,0 8,0 12,-2 4,-1 18,-5 23,-11 6,-5 20,-21 27,-35 6,-14 15,-37 15,-37 0,0 -17,75 -26,92 -5,12 -29,21 -29,21z"/>
                <path class="fil13" d="M2828 4493l-6 0c0,0 -4,-11 -6,-13 -1,-3 -10,-15 -10,-15 0,0 8,0 12,-2 4,-1 18,-5 23,-11 6,-5 20,-21 27,-35 6,-14 15,-37 15,-37 0,0 -17,75 -26,92 -5,12 -29,21 -29,21z"/>
                <g>
                    <polygon class="fil92" points="1932,5324 1554,5324 1554,5615 1932,5615 "/>
                    <g>
                        <polygon class="fil92" points="1932,5324 1554,5324 1554,5615 1932,5615 "/>
                    </g>
                </g>
                <line class="fil36 str16" x1="1692" y1="5343" x2="1825" y2= "5520" />
                <line class="fil36 str16" x1="1692" y1="5343" x2="1825" y2= "5520" />
                <path class="fil36 str16" d="M1825 5520c-109,5 -258,9 -411,7"/>
                <path class="fil36 str16" d="M1825 5520c-109,5 -258,9 -411,7"/>
                <path class="fil35 str17" d="M1826 5518l-133 -178 133 -95 185 257c-15,2 -29,4 -40,5 -28,4 -79,7 -145,11z"/>
                <path class="fil35 str17" d="M1826 5518l-133 -178 133 -95 185 257c-15,2 -29,4 -40,5 -28,4 -79,7 -145,11z"/>
                <path class="fil11" d="M10668 4614l-5378 0c-9,0 -17,-7 -17,-17l0 -3010c0,-9 8,-17 17,-17l5378 0c9,0 17,8 17,17l0 3010c0,10 -8,17 -17,17z"/>
                <path class="fil93" d="M10771 4712l-5588 0c-10,0 -17,-8 -17,-17l0 -3206c0,-9 7,-16 17,-16l5588 0c10,0 17,7 17,16l0 3206c0,9 -7,17 -17,17z"/>
                <path class="fil13" d="M8009 4659c0,-18 -14,-32 -32,-32 -18,0 -32,14 -32,32 0,18 14,32 32,32 18,0 32,-14 32,-32z"/>
                <path class="fil94" d="M6413 6616c474,90 777,217 773,348 -7,228 -922,384 -2044,350 -173,-5 -340,-14 -500,-27l-2 -6 1773 -665z"/>
                <path class="fil94" d="M6413 6616c474,90 777,217 773,348 -7,228 -922,384 -2044,350 -173,-5 -340,-14 -500,-27l-2 -6 1773 -665z"/>
                <path class="fil95" d="M5036 7295c26,0 63,0 89,0 998,0 1869,-168 1945,-375 41,-110 -152,-209 -491,-278 -136,-313 -410,-530 -721,-536 -1,0 -62,5 -152,14 -389,79 -687,491 -687,987 0,67 6,125 17,188z"/>
                <path class="fil95" d="M5036 7295c26,0 63,0 89,0 998,0 1869,-168 1945,-375 41,-110 -152,-209 -491,-278 -136,-313 -410,-530 -721,-536 -1,0 -62,5 -152,14 -389,79 -687,491 -687,987 0,67 6,125 17,188z"/>
                <path class="fil96" d="M5867 7263c588,-61 1054,-170 1054,-322 0,-151 -472,-275 -1054,-275 -582,0 -1054,124 -1054,275 0,73 46,354 229,354 214,-1 523,0 825,-32z"/>
                <path class="fil96" d="M5867 7263c588,-61 1054,-170 1054,-322 0,-151 -472,-275 -1054,-275 -582,0 -1054,124 -1054,275 0,73 46,354 229,354 214,-1 523,0 825,-32z"/>
                <path class="fil97" d="M5036 7295c0,0 196,-26 314,-98 118,-71 141,-23 202,31 62,54 154,-3 205,-42 51,-38 91,13 114,29 23,16 328,21 402,-103 74,-124 70,-75 139,-25 70,50 122,-6 122,-80 0,-75 49,-25 124,16 76,42 355,-77 281,-162 -74,-86 6,-98 67,-71 58,40 81,84 64,130 -76,207 -947,375 -1945,375 -26,0 -63,0 -89,0 0,-1 0,-1 0,0zm1786 -591l0 0c-2,28 -50,8 -89,-26 31,8 61,17 89,26zm-246 -69l0 0 -50 46 37 -73c5,9 9,18 13,27z"/>
                <path class="fil97" d="M5036 7295c0,0 196,-26 314,-98 118,-71 141,-23 202,31 62,54 154,-3 205,-42 51,-38 91,13 114,29 23,16 328,21 402,-103 74,-124 70,-75 139,-25 70,50 122,-6 122,-80 0,-75 49,-25 124,16 76,42 355,-77 281,-162 -74,-86 6,-98 67,-71 58,40 81,84 64,130 -76,207 -947,375 -1945,375 -26,0 -63,0 -89,0 0,-1 0,-1 0,0zm1786 -591l0 0c-2,28 -50,8 -89,-26 31,8 61,17 89,26zm-246 -69l0 0 -50 46 37 -73c5,9 9,18 13,27z"/>
                <path class="fil95" d="M4669 7283c-334,598 -1940,93 -747,-90l0 0c201,42 456,74 747,90l0 0z"/>
                <path class="fil95" d="M4669 7283c-334,598 -1940,93 -747,-90l0 0c201,42 456,74 747,90l0 0z"/>
                <path class="fil95" d="M3469 7001c0,0 -54,68 -328,73 -275,6 -597,-132 -174,-215 422,-83 322,77 592,-132 125,-98 200,-106 252,-82 -181,115 -292,201 -292,201 -32,24 -53,49 -62,74 -11,28 -6,55 12,81l0 0z"/>
                <path class="fil95" d="M3469 7001c0,0 -54,68 -328,73 -275,6 -597,-132 -174,-215 422,-83 322,77 592,-132 125,-98 200,-106 252,-82 -181,115 -292,201 -292,201 -32,24 -53,49 -62,74 -11,28 -6,55 12,81l0 0z"/>
                <path class="fil94" d="M3469 7001c0,0 -13,17 -61,35 -46,8 -106,15 -185,16 -246,5 -532,-106 -279,-188 7,-2 15,-3 23,-5 327,-64 340,17 455,-40 52,-1 99,-21 219,-114 44,-34 81,-57 113,-71 22,-1 41,3 57,11 -181,115 -292,201 -292,201 -32,24 -53,49 -62,74 -11,28 -6,55 12,81l0 0z"/>
                <path class="fil94" d="M3469 7001c0,0 -13,17 -61,35 -46,8 -106,15 -185,16 -246,5 -532,-106 -279,-188 7,-2 15,-3 23,-5 327,-64 340,17 455,-40 52,-1 99,-21 219,-114 44,-34 81,-57 113,-71 22,-1 41,3 57,11 -181,115 -292,201 -292,201 -32,24 -53,49 -62,74 -11,28 -6,55 12,81l0 0z"/>
                <path class="fil95" d="M5157 6085c-201,-187 -564,-88 -771,51 -148,99 20,137 93,154l0 0c212,-90 443,-166 678,-204l0 -1z"/>
                <path class="fil95" d="M5157 6085c-201,-187 -564,-88 -771,51 -148,99 20,137 93,154l0 0c212,-90 443,-166 678,-204l0 -1z"/>
                <path class="fil98" d="M5843 6446c0,0 -399,-51 -429,195 -12,-38 18,-112 -56,-120 -73,-8 -421,188 -250,321 43,-67 108,-195 158,-168 -17,21 -194,204 -99,263 96,59 345,27 375,1 31,-25 118,36 165,38 46,2 82,-3 82,-3 -28,-51 -93,-341 54,-527z"/>
                <path class="fil98" d="M5843 6446c0,0 -399,-51 -429,195 -12,-38 18,-112 -56,-120 -73,-8 -421,188 -250,321 43,-67 108,-195 158,-168 -17,21 -194,204 -99,263 96,59 345,27 375,1 31,-25 118,36 165,38 46,2 82,-3 82,-3 -28,-51 -93,-341 54,-527z"/>
                <path class="fil99 str18" d="M5843 6446c0,0 -399,-51 -429,195 -12,-38 18,-112 -56,-120 -73,-8 -421,188 -250,321 43,-67 108,-195 158,-168 -17,21 -194,204 -99,263 96,59 345,27 375,1 31,-25 118,36 165,38 46,2 82,-3 82,-3 -28,-51 -93,-341 54,-527"/>
                <path class="fil100" d="M5823 6191l-42 -118c-18,-13 -42,-20 -67,-20 -60,3 -107,52 -105,112 2,59 52,105 113,103 48,-1 87,-33 101,-77z"/>
                <path class="fil100" d="M5823 6191l-42 -118c-18,-13 -42,-20 -67,-20 -60,3 -107,52 -105,112 2,59 52,105 113,103 48,-1 87,-33 101,-77z"/>
                <path class="fil99 str19" d="M5781 6073c-18,-13 -42,-20 -67,-20 -60,3 -107,52 -105,112 2,59 52,105 113,103 48,-1 87,-33 101,-77"/>
                <path class="fil99 str20" d="M5656 6162c-2,-38 26,-70 63,-71 36,-1 67,29 68,67 1,14 -3,28 -9,39"/>
                <path class="fil99 str20" d="M5774 6198c-21,1 -39,-16 -40,-38 -1,-21 16,-39 38,-40 2,0 3,0 5,1 7,10 11,23 12,36 0,15 -4,29 -12,41 -1,0 -1,0 -3,0"/>
                <path class="fil100 str21" d="M7120 6879c0,0 224,-96 306,68 15,22 -15,21 -20,14 -5,-6 -41,-45 -57,-34 -15,9 68,66 55,80 -32,35 -103,-67 -116,-59 -18,12 138,113 80,125 -44,9 -114,-106 -128,-86 -13,19 60,116 16,116 -43,1 -80,-63 -114,-83 -33,-20 -53,32 -86,43 -31,10 -114,26 -116,-20 -1,-47 34,-23 89,-35 56,-11 89,-101 91,-129z"/>
                <path class="fil100 str21" d="M6199 7266c-42,6 -56,-122 -81,-115 -16,5 3,100 -14,109 -4,3 -10,4 -10,4 -51,1 -22,-89 -38,-89 -35,1 7,106 -40,90 -46,-17 -64,-162 -11,-205 40,-16 61,-39 173,-49 0,0 101,50 135,49 33,-2 64,0 52,23 -12,22 -81,31 -139,-1 -11,11 53,54 75,64 19,8 48,30 43,45 -2,5 -6,8 -8,9 -36,19 -122,-75 -147,-59 -9,8 39,114 10,125z"/>
                <path class="fil98" d="M7188 6833c0,0 -87,192 -206,176 -89,-58 -387,-249 -390,-336 -3,-87 12,-57 -2,-59 -14,-2 -53,280 -202,342 -9,-2 -114,0 -137,17 -22,17 -22,14 -36,3 -15,-11 -152,-122 -151,-146 1,-24 23,-138 53,-164 -18,-18 -28,1 -28,1 0,0 -39,98 -37,129 3,31 -20,25 2,40 21,14 136,134 146,149 9,15 -273,9 -238,177 -22,-17 -127,-89 -165,-170 -37,-81 -83,-249 -40,-398 44,-149 251,-331 383,-343 -17,15 -53,75 10,121 62,47 139,96 206,80 67,-16 76,-132 71,-175 25,9 131,4 262,177 131,174 421,336 499,379z"/>
                <path class="fil98" d="M7188 6833c0,0 -87,192 -206,176 -89,-58 -387,-249 -390,-336 -3,-87 12,-57 -2,-59 -14,-2 -53,280 -202,342 -9,-2 -114,0 -137,17 -22,17 -22,14 -36,3 -15,-11 -152,-122 -151,-146 1,-24 23,-138 53,-164 -18,-18 -28,1 -28,1 0,0 -39,98 -37,129 3,31 -20,25 2,40 21,14 136,134 146,149 9,15 -273,9 -238,177 -22,-17 -127,-89 -165,-170 -37,-81 -83,-249 -40,-398 44,-149 251,-331 383,-343 -17,15 -53,75 10,121 62,47 139,96 206,80 67,-16 76,-132 71,-175 25,9 131,4 262,177 131,174 421,336 499,379z"/>
                <path class="fil99 str18" d="M7188 6833c0,0 -87,192 -206,176 -89,-58 -387,-249 -390,-336 -3,-87 12,-57 -2,-59 -14,-2 -53,280 -202,342 -9,-2 -114,0 -137,17 -22,17 -22,14 -36,3 -15,-11 -152,-122 -151,-146 1,-24 23,-138 53,-164 -18,-18 -28,1 -28,1 0,0 -39,98 -37,129 3,31 -20,25 2,40 21,14 136,134 146,149 9,15 -273,9 -238,177 -22,-17 -127,-89 -165,-170 -37,-81 -83,-249 -40,-398 44,-149 251,-331 383,-343 -17,15 -53,75 10,121 62,47 139,96 206,80 67,-16 76,-132 71,-175 25,9 131,4 262,177 131,174 421,336 499,379"/>
                <path class="fil101" d="M6392 6632c0,0 1,4 0,12 0,7 0,19 -2,31 -1,13 -2,28 -5,44 -1,8 -3,16 -5,24 -2,9 -3,17 -6,25 -2,8 -4,16 -7,24 -2,5 -3,8 -5,12 -1,4 -3,8 -4,12 -1,3 -3,7 -4,11 -1,3 -3,7 -4,10 -2,8 -4,14 -7,19 -2,6 -4,12 -6,17 -2,5 -4,9 -5,12 -3,7 -5,12 -5,12l2 1c0,0 3,-3 8,-9 3,-3 6,-6 10,-10 3,-5 6,-10 10,-15 2,-3 4,-6 6,-9 2,-3 4,-6 6,-10 1,-3 3,-7 5,-10 1,-4 3,-8 4,-12 1,-4 3,-7 4,-12 1,-4 2,-8 3,-12 2,-9 4,-18 5,-26 2,-8 3,-18 4,-26 1,-8 2,-17 3,-26 0,-8 1,-16 0,-23 0,-8 1,-15 0,-22 0,-6 0,-12 -1,-18 0,-5 -1,-9 -1,-14 -1,-7 -2,-11 -2,-11l-1 -1z"/>
                <path class="fil101" d="M6392 6632c0,0 1,4 0,12 0,7 0,19 -2,31 -1,13 -2,28 -5,44 -1,8 -3,16 -5,24 -2,9 -3,17 -6,25 -2,8 -4,16 -7,24 -2,5 -3,8 -5,12 -1,4 -3,8 -4,12 -1,3 -3,7 -4,11 -1,3 -3,7 -4,10 -2,8 -4,14 -7,19 -2,6 -4,12 -6,17 -2,5 -4,9 -5,12 -3,7 -5,12 -5,12l2 1c0,0 3,-3 8,-9 3,-3 6,-6 10,-10 3,-5 6,-10 10,-15 2,-3 4,-6 6,-9 2,-3 4,-6 6,-10 1,-3 3,-7 5,-10 1,-4 3,-8 4,-12 1,-4 3,-7 4,-12 1,-4 2,-8 3,-12 2,-9 4,-18 5,-26 2,-8 3,-18 4,-26 1,-8 2,-17 3,-26 0,-8 1,-16 0,-23 0,-8 1,-15 0,-22 0,-6 0,-12 -1,-18 0,-5 -1,-9 -1,-14 -1,-7 -2,-11 -2,-11l-1 -1z"/>
                <path class="fil101" d="M6330 6576c-16,0 -29,14 -29,31 1,16 15,29 31,28 17,0 29,-14 29,-30 -1,-17 -14,-30 -31,-29z"/>
                <path class="fil101" d="M6330 6576c-16,0 -29,14 -29,31 1,16 15,29 31,28 17,0 29,-14 29,-30 -1,-17 -14,-30 -31,-29z"/>
                <path class="fil101" d="M6301 6752c-16,1 -29,15 -28,31 0,17 14,30 31,29 16,-1 29,-14 28,-31 0,-16 -14,-29 -31,-29z"/>
                <path class="fil101" d="M6301 6752c-16,1 -29,15 -28,31 0,17 14,30 31,29 16,-1 29,-14 28,-31 0,-16 -14,-29 -31,-29z"/>
                <path class="fil100 str21" d="M6853 6117c0,0 -26,90 -126,183 -34,31 -92,62 -150,86 -116,52 -124,57 -298,60 -22,-2 -65,-4 -88,-7 -214,-33 -314,-139 -342,-172 -12,-14 -38,-46 -62,-91 2,-6 3,-13 2,-20 0,-13 -5,-26 -11,-36 -2,0 -4,-1 -6,-1 -3,1 -5,1 -8,1 -21,-59 -31,-130 -6,-206 55,-170 204,-260 278,-287 75,-28 101,-105 100,-132 -1,-27 -18,-147 -15,-162 1,-15 33,-84 96,-91 63,-7 110,29 99,67 -10,38 -43,57 -75,58 -32,0 -68,-14 -90,-25 -22,-11 -60,-39 -65,-47 -5,-7 61,35 91,41 30,7 100,16 111,-17 12,-34 -18,-48 -39,-48 -21,1 -104,28 -76,111 29,82 91,128 117,146 26,17 29,32 214,63 185,31 303,198 325,235 21,38 65,144 24,291z"/>
                <path class="fil100 str21" d="M6915 5925c-18,0 -35,6 -49,17 6,42 6,93 -6,150 16,16 38,25 62,24 50,-2 88,-46 86,-99 -1,-52 -43,-94 -93,-92z"/>
                <path class="fil102" d="M6063 5614c0,0 -5,3 -13,7 -6,3 -10,5 -14,6 -106,82 -173,200 -168,330 6,171 132,314 307,375 -4,-29 4,-56 16,-80 21,-43 102,-38 126,-31 25,7 105,11 163,-9 57,-20 97,8 110,26 9,11 21,37 20,72 142,-67 242,-188 260,-329 -4,-76 -27,-130 -42,-153 -96,-157 -264,-217 -324,-235 -48,-14 -89,-21 -116,-22 -179,-6 -127,-20 -325,43z"/>
                <path class="fil102" d="M6063 5614c0,0 -5,3 -13,7 -6,3 -10,5 -14,6 -106,82 -173,200 -168,330 6,171 132,314 307,375 192,36 231,31 435,-22 142,-67 242,-188 260,-329 -4,-76 -27,-130 -42,-153 -96,-157 -264,-217 -324,-235 -48,-14 -89,-21 -116,-22 -179,-6 -127,-20 -325,43z"/>
                <path class="fil103" d="M6191 5925c-1,-39 30,-71 68,-72 14,-1 27,2 37,9 -39,12 -76,34 -105,63z"/>
                <path class="fil103" d="M6191 5925c-1,-39 30,-71 68,-72 14,-1 27,2 37,9 -39,12 -76,34 -105,63z"/>
                <path class="fil103" d="M6492 5844c13,-14 42,-10 67,7 24,18 36,42 31,58 -10,-14 -23,-27 -40,-39 -18,-13 -39,-22 -58,-26z"/>
                <path class="fil103" d="M6492 5844c13,-14 42,-10 67,7 24,18 36,42 31,58 -10,-14 -23,-27 -40,-39 -18,-13 -39,-22 -58,-26z"/>
                <path class="fil104" d="M6392 6150c-32,1 -57,13 -56,26 0,14 26,24 57,23 32,-1 57,-13 56,-26 0,-14 -26,-24 -57,-23z"/>
                <path class="fil104" d="M6392 6150c-32,1 -57,13 -56,26 0,14 26,24 57,23 32,-1 57,-13 56,-26 0,-14 -26,-24 -57,-23z"/>
                <path class="fil105" d="M6470 6029c-14,0 -24,26 -23,58 1,31 13,56 26,56 14,-1 24,-27 23,-58 -1,-32 -13,-57 -26,-56z"/>
                <path class="fil105" d="M6470 6029c-14,0 -24,26 -23,58 1,31 13,56 26,56 14,-1 24,-27 23,-58 -1,-32 -13,-57 -26,-56z"/>
                <path class="fil105" d="M6298 6047c-13,1 -23,27 -22,58 1,31 13,56 26,56 13,-1 23,-26 22,-58 -1,-31 -13,-56 -26,-56z"/>
                <path class="fil105" d="M6298 6047c-13,1 -23,27 -22,58 1,31 13,56 26,56 13,-1 23,-26 22,-58 -1,-31 -13,-56 -26,-56z"/>
                <path class="fil101" d="M6475 6039c-6,0 -10,4 -10,10 0,5 5,9 10,9 6,0 10,-5 10,-10 -1,-5 -5,-9 -10,-9z"/>
                <path class="fil101" d="M6475 6039c-6,0 -10,4 -10,10 0,5 5,9 10,9 6,0 10,-5 10,-10 -1,-5 -5,-9 -10,-9z"/>
                <path class="fil101" d="M6304 6055c-5,0 -10,5 -10,11 1,5 5,10 11,10 6,0 10,-5 10,-11 0,-6 -5,-10 -11,-10z"/>
                <path class="fil101" d="M6304 6055c-5,0 -10,5 -10,11 1,5 5,10 11,10 6,0 10,-5 10,-11 0,-6 -5,-10 -11,-10z"/>
                <path class="fil106 str22" d="M6388 5570c-14,5 -32,10 -41,8 -17,-3 -55,-11 -65,1 -10,12 -35,9 -53,2 -18,-7 -24,10 -47,9 -22,0 -13,-12 -27,-4 -14,7 -37,19 -49,16 -9,-3 -12,9 -42,11 53,-34 72,-95 71,-118 -1,-27 -17,-147 -15,-162 2,-15 33,-84 96,-91 63,-7 110,29 100,67 -11,38 -44,57 -75,58 -32,0 -69,-14 -91,-25 -22,-11 -60,-39 -65,-47 -5,-7 61,35 91,41 30,7 100,16 111,-17 12,-34 -18,-48 -39,-48 -20,1 -104,28 -76,111 29,82 91,128 117,146 19,14 26,24 99,42z"/>
                <path class="fil99 str20" d="M6869 6030c4,-32 25,-62 54,-63 34,-3 58,29 59,62"/>
                <path class="fil99 str20" d="M6879 6066c-4,0 -8,0 -13,-2 0,-2 0,-4 -1,-6 1,-14 3,-27 3,-39 4,-10 9,-17 16,-23 14,3 24,17 25,33 2,20 -12,36 -30,37"/>
                <path class="fil99 str20" d="M6879 6066c-4,0 -8,0 -13,-2 0,-2 0,-4 -1,-6 1,-14 3,-27 3,-39 4,-10 9,-17 16,-23 14,3 24,17 25,33 2,20 -12,36 -30,37"/>
                <path class="fil107" d="M6328 5588c0,0 -4,-1 -11,-4 -4,-1 -8,-3 -13,-6 -4,-2 -10,-5 -15,-9 -6,-3 -11,-8 -16,-12 -6,-5 -12,-10 -17,-16 -6,-7 -12,-13 -17,-19 -3,-4 -5,-7 -8,-10l-7 -11c-3,-4 -5,-7 -8,-11 -2,-4 -4,-8 -6,-11 -3,-3 -5,-8 -7,-11 -2,-3 -4,-7 -6,-11 -4,-7 -8,-13 -11,-20 -3,-7 -7,-13 -10,-19 -3,-5 -5,-11 -7,-15 -2,-5 -5,-9 -6,-13 -4,-6 -5,-11 -5,-11l-1 0c0,0 2,5 4,12 1,4 2,8 4,13 2,5 4,11 7,17 2,6 5,12 8,19 3,7 7,13 10,21 3,3 4,7 6,11 2,3 5,7 8,11 2,3 4,7 7,10 2,4 5,7 8,11l8 11c3,4 6,7 9,10 5,7 11,13 17,18 3,3 6,6 8,8 3,3 6,6 9,8 6,4 11,8 17,12 6,4 11,6 16,8 5,2 9,4 12,5 9,4 13,5 13,4z"/>
                <path class="fil107" d="M6328 5588c0,0 -4,-1 -11,-4 -4,-1 -8,-3 -13,-6 -4,-2 -10,-5 -15,-9 -6,-3 -11,-8 -16,-12 -6,-5 -12,-10 -17,-16 -6,-7 -12,-13 -17,-19 -3,-4 -5,-7 -8,-10l-7 -11c-3,-4 -5,-7 -8,-11 -2,-4 -4,-8 -6,-11 -3,-3 -5,-8 -7,-11 -2,-3 -4,-7 -6,-11 -4,-7 -8,-13 -11,-20 -3,-7 -7,-13 -10,-19 -3,-5 -5,-11 -7,-15 -2,-5 -5,-9 -6,-13 -4,-6 -5,-11 -5,-11l-1 0c0,0 2,5 4,12 1,4 2,8 4,13 2,5 4,11 7,17 2,6 5,12 8,19 3,7 7,13 10,21 3,3 4,7 6,11 2,3 5,7 8,11 2,3 4,7 7,10 2,4 5,7 8,11l8 11c3,4 6,7 9,10 5,7 11,13 17,18 3,3 6,6 8,8 3,3 6,6 9,8 6,4 11,8 17,12 6,4 11,6 16,8 5,2 9,4 12,5 9,4 13,5 13,4z"/>
                <path class="fil107" d="M6257 5594c0,0 -3,-1 -7,-5 -5,-3 -10,-8 -16,-14 -3,-4 -6,-8 -10,-11 -3,-4 -6,-8 -9,-13 -3,-5 -7,-10 -9,-15 -3,-5 -6,-10 -9,-16 -3,-5 -5,-11 -7,-16 -3,-6 -5,-11 -7,-16 -5,-10 -9,-20 -12,-28 -4,-8 -6,-15 -8,-20 -3,-4 -4,-7 -4,-7l-1 0c0,0 1,3 2,8 1,3 1,6 2,9 1,3 2,8 3,12 2,4 3,9 5,13 2,5 4,11 6,16 2,5 5,10 8,15 3,6 5,11 8,16 3,5 6,10 10,16 3,4 7,10 10,14 3,5 7,9 10,13 4,4 7,7 10,10 7,7 13,12 18,14 3,4 6,6 7,5z"/>
                <path class="fil107" d="M6257 5594c0,0 -3,-1 -7,-5 -5,-3 -10,-8 -16,-14 -3,-4 -6,-8 -10,-11 -3,-4 -6,-8 -9,-13 -3,-5 -7,-10 -9,-15 -3,-5 -6,-10 -9,-16 -3,-5 -5,-11 -7,-16 -3,-6 -5,-11 -7,-16 -5,-10 -9,-20 -12,-28 -4,-8 -6,-15 -8,-20 -3,-4 -4,-7 -4,-7l-1 0c0,0 1,3 2,8 1,3 1,6 2,9 1,3 2,8 3,12 2,4 3,9 5,13 2,5 4,11 6,16 2,5 5,10 8,15 3,6 5,11 8,16 3,5 6,10 10,16 3,4 7,10 10,14 3,5 7,9 10,13 4,4 7,7 10,10 7,7 13,12 18,14 3,4 6,6 7,5z"/>
                <path class="fil107" d="M6140 5628c0,0 2,-2 6,-7 2,-2 3,-5 5,-8 2,-4 4,-7 6,-11 1,-3 2,-5 3,-7 1,-3 2,-5 3,-8 2,-5 3,-11 5,-17 1,-6 3,-12 3,-18 1,-6 2,-13 2,-19l1 -10c0,-3 0,-6 -1,-9 0,-7 0,-13 0,-19 -1,-6 -1,-12 -2,-17 -1,-6 -3,-11 -4,-16 0,-4 -2,-9 -3,-12 -1,-3 -2,-7 -3,-10 -1,-5 -3,-8 -3,-8l-1 0c0,0 1,4 1,9 1,6 3,13 4,23 1,10 3,20 3,32 1,5 1,12 1,18 1,3 1,6 1,9l-1 10c1,6 0,12 0,18 -1,7 -2,12 -3,18 -1,6 -3,12 -4,17 -1,2 0,-3 0,0 -1,2 -5,12 -6,14 -1,5 -3,9 -5,12 -2,4 -3,7 -5,9 -2,4 -4,6 -3,7z"/>
                <path class="fil107" d="M6140 5628c0,0 2,-2 6,-7 2,-2 3,-5 5,-8 2,-4 4,-7 6,-11 1,-3 2,-5 3,-7 1,-3 2,-5 3,-8 2,-5 3,-11 5,-17 1,-6 3,-12 3,-18 1,-6 2,-13 2,-19l1 -10c0,-3 0,-6 -1,-9 0,-7 0,-13 0,-19 -1,-6 -1,-12 -2,-17 -1,-6 -3,-11 -4,-16 0,-4 -2,-9 -3,-12 -1,-3 -2,-7 -3,-10 -1,-5 -3,-8 -3,-8l-1 0c0,0 1,4 1,9 1,6 3,13 4,23 1,10 3,20 3,32 1,5 1,12 1,18 1,3 1,6 1,9l-1 10c1,6 0,12 0,18 -1,7 -2,12 -3,18 -1,6 -3,12 -4,17 -1,2 0,-3 0,0 -1,2 -5,12 -6,14 -1,5 -3,9 -5,12 -2,4 -3,7 -5,9 -2,4 -4,6 -3,7z"/>
                <path class="fil107" d="M6089 5628c0,0 6,-6 14,-16 4,-6 9,-12 15,-20 5,-9 10,-18 15,-29 6,-10 10,-22 14,-35 2,-7 4,-14 4,-21 1,-3 1,-7 2,-10 0,-4 0,-8 1,-11l0 -6 0 -5c0,-4 0,-8 0,-11 -1,-8 -2,-16 -3,-23 -1,-16 -3,-31 -6,-47 -3,-15 -5,-31 -4,-45 0,-16 6,-29 14,-40l4 -5 3 -3c3,-3 5,-5 7,-7 3,-3 6,-5 8,-7 2,-2 5,-4 8,-6 11,-7 22,-13 33,-15 11,-3 21,-4 31,-3 9,1 17,3 24,6 6,2 11,5 14,7 3,2 4,3 4,3l1 0c0,0 -2,-2 -5,-4 -3,-3 -7,-5 -13,-9 -6,-3 -14,-5 -24,-7 -10,-2 -21,-1 -33,1 -11,3 -24,8 -35,16 -3,2 -6,3 -8,6 -3,2 -6,4 -8,7 -3,2 -6,5 -8,8l-4 4 -4 4c-9,13 -15,28 -15,45 0,16 3,31 5,47 3,15 5,31 7,46 1,8 2,15 3,23 0,3 0,7 0,11l0 5 0 6c0,3 -1,7 -1,11 0,4 -1,7 -1,11 -1,7 -3,14 -5,20 -3,12 -7,25 -12,36 -4,10 -9,20 -15,28 -5,8 -9,15 -13,21 -9,7 -15,13 -14,13z"/>
                <path class="fil107" d="M6089 5628c0,0 6,-6 14,-16 4,-6 9,-12 15,-20 5,-9 10,-18 15,-29 6,-10 10,-22 14,-35 2,-7 4,-14 4,-21 1,-3 1,-7 2,-10 0,-4 0,-8 1,-11l0 -6 0 -5c0,-4 0,-8 0,-11 -1,-8 -2,-16 -3,-23 -1,-16 -3,-31 -6,-47 -3,-15 -5,-31 -4,-45 0,-16 6,-29 14,-40l4 -5 3 -3c3,-3 5,-5 7,-7 3,-3 6,-5 8,-7 2,-2 5,-4 8,-6 11,-7 22,-13 33,-15 11,-3 21,-4 31,-3 9,1 17,3 24,6 6,2 11,5 14,7 3,2 4,3 4,3l1 0c0,0 -2,-2 -5,-4 -3,-3 -7,-5 -13,-9 -6,-3 -14,-5 -24,-7 -10,-2 -21,-1 -33,1 -11,3 -24,8 -35,16 -3,2 -6,3 -8,6 -3,2 -6,4 -8,7 -3,2 -6,5 -8,8l-4 4 -4 4c-9,13 -15,28 -15,45 0,16 3,31 5,47 3,15 5,31 7,46 1,8 2,15 3,23 0,3 0,7 0,11l0 5 0 6c0,3 -1,7 -1,11 0,4 -1,7 -1,11 -1,7 -3,14 -5,20 -3,12 -7,25 -12,36 -4,10 -9,20 -15,28 -5,8 -9,15 -13,21 -9,7 -15,13 -14,13z"/>
                <path class="fil97" d="M5036 7295c0,0 146,-77 232,-152 86,-75 -119,-105 -168,-135 -49,-31 150,-166 230,-172 80,-6 -64,-144 -81,-237 -17,-92 52,-156 197,-156 145,0 30,-79 46,-160 8,-47 56,-59 106,-50 -6,-23 -9,-49 -9,-75l0 -3c-331,130 -570,507 -570,952 0,67 6,125 17,188z"/>
                <path class="fil97" d="M5036 7295c0,0 146,-77 232,-152 86,-75 -119,-105 -168,-135 -49,-31 150,-166 230,-172 80,-6 -64,-144 -81,-237 -17,-92 52,-156 197,-156 145,0 30,-79 46,-160 8,-47 56,-59 106,-50 -6,-23 -9,-49 -9,-75l0 -3c-331,130 -570,507 -570,952 0,67 6,125 17,188z"/>
                <path class="fil95" d="M3519 6846c0,0 1144,-893 2134,-777 -25,19 -41,47 -44,78 -341,123 -590,506 -590,960 0,67 6,125 17,188 -953,-10 -1653,-174 -1579,-375 9,-25 30,-50 62,-74zm2316 -743l0 0c3,1 6,2 10,3 -3,0 -6,0 -9,0 0,-1 -1,-2 -1,-3z"/>
                <path class="fil95" d="M3519 6846c0,0 1144,-893 2134,-777 -25,19 -41,47 -44,78 -341,123 -590,506 -590,960 0,67 6,125 17,188 -953,-10 -1653,-174 -1579,-375 9,-25 30,-50 62,-74zm2316 -743l0 0c3,1 6,2 10,3 -3,0 -6,0 -9,0 0,-1 -1,-2 -1,-3z"/>
                <path class="fil97" d="M4937 6487c69,-31 108,-94 87,-141 -20,-47 -93,-60 -163,-29 -69,31 -108,94 -88,141 21,46 94,59 164,29z"/>
                <path class="fil97" d="M4937 6487c69,-31 108,-94 87,-141 -20,-47 -93,-60 -163,-29 -69,31 -108,94 -88,141 21,46 94,59 164,29z"/>
                <path class="fil96" d="M4915 6427c22,-13 32,-38 22,-55 -10,-17 -36,-21 -58,-8 -22,13 -33,38 -23,55 10,17 36,20 59,8z"/>
                <path class="fil96" d="M4915 6427c22,-13 32,-38 22,-55 -10,-17 -36,-21 -58,-8 -22,13 -33,38 -23,55 10,17 36,20 59,8z"/>
                <path class="fil94" d="M5319 6335c-486,415 -748,653 -1421,653 -166,0 -371,-26 -388,-89 -4,-13 1,-32 10,-53l-1 0c-32,24 -53,49 -62,74 -74,201 626,365 1579,375 -11,-63 -17,-121 -17,-188 0,-310 117,-588 300,-772z"/>
                <path class="fil94" d="M5319 6335c-486,415 -748,653 -1421,653 -166,0 -371,-26 -388,-89 -4,-13 1,-32 10,-53l-1 0c-32,24 -53,49 -62,74 -74,201 626,365 1579,375 -11,-63 -17,-121 -17,-188 0,-310 117,-588 300,-772z"/>
                <path class="fil94" d="M5092 6097c-147,-125 -372,-109 -562,-39 -53,23 -102,50 -144,78 -147,99 19,137 92,154 16,-7 33,-13 50,-20 178,-73 369,-135 564,-173z"/>
                <path class="fil94" d="M5092 6097c-147,-125 -372,-109 -562,-39 -53,23 -102,50 -144,78 -147,99 19,137 92,154 16,-7 33,-13 50,-20 178,-73 369,-135 564,-173z"/>
                <path class="fil94" d="M4645 7322c-327,336 -1169,166 -1111,-14 60,-43 183,-84 388,-115l0 0c201,42 456,74 747,90l0 0c-7,13 -15,26 -24,39z"/>
                <path class="fil94" d="M4645 7322c-327,336 -1169,166 -1111,-14 60,-43 183,-84 388,-115l0 0c201,42 456,74 747,90l0 0c-7,13 -15,26 -24,39z"/>
                <path class="fil108" d="M966 4765c0,0 -33,5 -99,24 -112,33 -134,59 -144,78 -8,14 -8,29 -8,50 0,0 14,106 169,142 156,36 585,84 892,78 306,-5 614,-20 745,-58 92,-26 166,-68 173,-125 5,-36 -19,-67 -31,-83 -67,-85 -188,-100 -234,-105 0,0 -850,-89 -1463,-1z"/>
                <g>
                    <g>
                        <path class="fil108" d="M966 4765c0,0 -33,5 -99,24 -112,33 -134,59 -144,78 -8,14 -8,29 -8,50 0,0 14,106 169,142 156,36 585,84 892,78 306,-5 614,-20 745,-58 92,-26 166,-68 173,-125 5,-36 -19,-67 -31,-83 -67,-85 -188,-100 -234,-105 0,0 -850,-89 -1463,-1z"/>
                        <g>
                            <path class="fil36 str23" d="M966 4765c0,0 -33,5 -99,24 -112,33 -134,59 -144,78 -8,14 -8,29 -8,50 0,0 14,106 169,142 156,36 585,84 892,78 306,-5 614,-20 745,-58 92,-26 166,-68 173,-125 5,-36 -19,-67 -31,-83 -67,-85 -188,-100 -234,-105 0,0 -850,-89 -1463,-1"/>
                            <g>
                                <path class="fil36 str23" d="M966 4765c0,0 -33,5 -99,24 -112,33 -134,59 -144,78 -8,14 -8,29 -8,50 0,0 14,106 169,142 156,36 585,84 892,78 306,-5 614,-20 745,-58 92,-26 166,-68 173,-125 5,-36 -19,-67 -31,-83 -67,-85 -188,-100 -234,-105 0,0 -850,-89 -1463,-1"/>
                            </g>
                        </g>
                    </g>
                </g>
                <path class="fil109" d="M1942 4556l-58 113 119 27 -107 40 38 96 174 -96 -18 -136c0,0 -145,-44 -148,-44z"/>
                <g>
                    <g>
                        <path class="fil109" d="M1942 4556l-58 113 119 27 -107 40 38 96 174 -96 -18 -136c0,0 -145,-44 -148,-44z"/>
                        <path class="fil110" d="M2091 4759c-118,-87 -462,253 -344,341 118,88 461,-253 344,-341z"/>
                        <path class="fil110" d="M2091 4759c-118,-87 -462,253 -344,341 118,88 461,-253 344,-341z"/>
                        <path class="fil110" d="M2392 4817c47,-139 523,-51 475,88 -47,138 -523,51 -475,-88z"/>
                        <path class="fil110" d="M2392 4817c47,-139 523,-51 475,88 -47,138 -523,51 -475,-88z"/>
                        <path class="fil110" d="M2274 5318c746,0 323,-701 0,-701 -323,0 -746,701 0,701z"/>
                        <path class="fil110" d="M2274 5318c746,0 323,-701 0,-701 -323,0 -746,701 0,701z"/>
                        <path class="fil110" d="M2034 4154c60,8 103,63 95,123 -8,61 -64,103 -124,95 -60,-8 -102,-63 -94,-124 8,-60 63,-102 123,-94z"/>
                        <path class="fil110" d="M2034 4154c60,8 103,63 95,123 -8,61 -64,103 -124,95 -60,-8 -102,-63 -94,-124 8,-60 63,-102 123,-94z"/>
                        <path class="fil110" d="M2639 4234c60,8 102,63 94,124 -8,60 -63,102 -123,94 -61,-8 -103,-63 -95,-123 8,-61 63,-103 124,-95z"/>
                        <path class="fil110" d="M2639 4234c60,8 102,63 94,124 -8,60 -63,102 -123,94 -61,-8 -103,-63 -95,-123 8,-61 63,-103 124,-95z"/>
                        <path class="fil111" d="M2033 4229c31,4 53,32 49,63 -4,31 -33,53 -64,49 -31,-4 -52,-33 -48,-64 4,-31 32,-53 63,-48z"/>
                        <path class="fil111" d="M2033 4229c31,4 53,32 49,63 -4,31 -33,53 -64,49 -31,-4 -52,-33 -48,-64 4,-31 32,-53 63,-48z"/>
                        <path class="fil111" d="M2638 4309c31,4 52,32 48,63 -4,31 -32,53 -63,49 -31,-4 -53,-33 -49,-64 4,-30 33,-52 64,-48z"/>
                        <path class="fil111" d="M2638 4309c31,4 52,32 48,63 -4,31 -32,53 -63,49 -31,-4 -53,-33 -49,-64 4,-30 33,-52 64,-48z"/>
                        <path class="fil109" d="M1998 4673c180,44 365,42 554,0 0,26 0,51 0,76 -185,88 -369,90 -554,0 0,-25 0,-50 0,-76z"/>
                        <path class="fil109" d="M1998 4673c180,44 365,42 554,0 0,26 0,51 0,76 -185,88 -369,90 -554,0 0,-25 0,-50 0,-76z"/>
                        <path class="fil110" d="M2336 4200c203,27 352,173 331,327 -20,154 -202,257 -405,230 -204,-27 -352,-174 -332,-328 20,-153 202,-256 406,-229z"/>
                        <path class="fil110" d="M2336 4200c203,27 352,173 331,327 -20,154 -202,257 -405,230 -204,-27 -352,-174 -332,-328 20,-153 202,-256 406,-229z"/>
                        <path class="fil112" d="M2304 4438c103,14 178,93 167,178 -12,84 -104,141 -208,128 -103,-14 -178,-94 -166,-178 11,-85 104,-142 207,-128z"/>
                        <path class="fil112" d="M2304 4438c103,14 178,93 167,178 -12,84 -104,141 -208,128 -103,-14 -178,-94 -166,-178 11,-85 104,-142 207,-128z"/>
                        <path class="fil111" d="M2431 4406c14,2 23,21 20,42 -3,22 -16,38 -30,36 -14,-2 -23,-21 -20,-42 3,-22 16,-37 30,-36z"/>
                        <path class="fil111" d="M2431 4406c14,2 23,21 20,42 -3,22 -16,38 -30,36 -14,-2 -23,-21 -20,-42 3,-22 16,-37 30,-36z"/>
                        <path class="fil111" d="M2182 4379c14,1 23,20 20,42 -3,21 -16,37 -30,35 -14,-2 -23,-21 -20,-42 3,-21 16,-37 30,-35z"/>
                        <path class="fil111" d="M2182 4379c14,1 23,20 20,42 -3,21 -16,37 -30,35 -14,-2 -23,-21 -20,-42 3,-21 16,-37 30,-35z"/>
                        <path class="fil111" d="M2292 4526c68,9 117,57 111,108 -7,50 -67,84 -135,75 -68,-9 -117,-57 -110,-108 6,-50 67,-84 134,-75z"/>
                        <path class="fil111" d="M2292 4526c68,9 117,57 111,108 -7,50 -67,84 -135,75 -68,-9 -117,-57 -110,-108 6,-50 67,-84 134,-75z"/>
                        <path class="fil112" d="M2296 4497c68,9 117,58 110,108 -6,51 -67,85 -134,76 -68,-9 -117,-58 -111,-108 7,-51 67,-85 135,-76z"/>
                        <path class="fil112" d="M2296 4497c68,9 117,58 110,108 -6,51 -67,85 -134,76 -68,-9 -117,-58 -111,-108 7,-51 67,-85 135,-76z"/>
                        <path class="fil111" d="M2301 4462c41,5 71,37 67,71 -5,34 -42,57 -84,51 -41,-5 -71,-37 -66,-71 4,-34 41,-57 83,-51z"/>
                        <path class="fil111" d="M2301 4462c41,5 71,37 67,71 -5,34 -42,57 -84,51 -41,-5 -71,-37 -66,-71 4,-34 41,-57 83,-51z"/>
                        <polygon class="fil111" points="2290,4489 2304,4491 2276,4705 2261,4703 "/>
                        <polygon class="fil111" points="2290,4489 2304,4491 2276,4705 2261,4703 "/>
                        <path class="fil112" d="M2440 4415c4,1 8,7 7,15 -1,7 -6,13 -11,12 -5,0 -8,-7 -7,-15 1,-7 6,-13 11,-12z"/>
                        <path class="fil112" d="M2440 4415c4,1 8,7 7,15 -1,7 -6,13 -11,12 -5,0 -8,-7 -7,-15 1,-7 6,-13 11,-12z"/>
                        <path class="fil112" d="M2188 4386c5,1 8,7 7,15 -1,7 -6,13 -11,12 -5,0 -8,-7 -7,-15 1,-7 6,-13 11,-12z"/>
                        <path class="fil112" d="M2188 4386c5,1 8,7 7,15 -1,7 -6,13 -11,12 -5,0 -8,-7 -7,-15 1,-7 6,-13 11,-12z"/>
                    </g>
                </g>
                <g>
                    <path class="fil113" d="M1398 4838c-95,-34 -182,-27 -195,15 -13,42 53,104 148,138 94,33 182,27 195,-15 13,-42 -53,-104 -148,-138z"/>
                    <g>
                        <path class="fil113" d="M1398 4838c-95,-34 -182,-27 -195,15 -13,42 53,104 148,138 94,33 182,27 195,-15 13,-42 -53,-104 -148,-138z"/>
                        <path class="fil114" d="M1404 4864c-71,-25 -137,-20 -147,11 -9,32 40,78 112,104 71,25 137,20 146,-12 10,-31 -40,-77 -111,-103z"/>
                        <path class="fil114" d="M1404 4864c-71,-25 -137,-20 -147,11 -9,32 40,78 112,104 71,25 137,20 146,-12 10,-31 -40,-77 -111,-103z"/>
                        <path class="fil113" d="M902 4886c101,3 180,40 177,84 -3,44 -87,78 -188,75 -100,-3 -179,-40 -176,-84 3,-44 87,-78 187,-75z"/>
                        <path class="fil113" d="M902 4886c101,3 180,40 177,84 -3,44 -87,78 -188,75 -100,-3 -179,-40 -176,-84 3,-44 87,-78 187,-75z"/>
                        <path class="fil114" d="M901 4909c72,1 128,29 126,60 -2,31 -62,55 -134,53 -72,-1 -129,-29 -126,-60 2,-31 62,-55 134,-53z"/>
                        <path class="fil114" d="M901 4909c72,1 128,29 126,60 -2,31 -62,55 -134,53 -72,-1 -129,-29 -126,-60 2,-31 62,-55 134,-53z"/>
                        <path class="fil113" d="M1100 4821c-275,79 -306,498 109,379 414,-119 166,-458 -109,-379z"/>
                        <path class="fil113" d="M1100 4821c-275,79 -306,498 109,379 414,-119 166,-458 -109,-379z"/>
                        <path class="fil114" d="M1108 4848c-169,48 -163,393 91,320 254,-73 77,-369 -91,-320z"/>
                        <path class="fil114" d="M1108 4848c-169,48 -163,393 91,320 254,-73 77,-369 -91,-320z"/>
                        <path class="fil113" d="M1027 4566c-115,33 -189,131 -164,219 26,87 139,131 255,98 115,-33 188,-131 163,-218 -25,-88 -139,-132 -254,-99z"/>
                        <path class="fil113" d="M1027 4566c-115,33 -189,131 -164,219 26,87 139,131 255,98 115,-33 188,-131 163,-218 -25,-88 -139,-132 -254,-99z"/>
                        <path class="fil113" d="M1160 4152c-201,6 -90,521 17,517 107,-3 184,-524 -17,-517z"/>
                        <path class="fil113" d="M1160 4152c-201,6 -90,521 17,517 107,-3 184,-524 -17,-517z"/>
                        <path class="fil111" d="M1172 4533c53,-86 89,-230 -11,-297 -91,78 -56,190 11,297z"/>
                        <path class="fil111" d="M1172 4533c53,-86 89,-230 -11,-297 -91,78 -56,190 11,297z"/>
                        <path class="fil113" d="M573 4440c97,-176 505,157 454,251 -52,93 -551,-75 -454,-251z"/>
                        <path class="fil113" d="M573 4440c97,-176 505,157 454,251 -52,93 -551,-75 -454,-251z"/>
                        <path class="fil111" d="M908 4624c-101,8 -246,-25 -260,-145 111,-46 195,36 260,145z"/>
                        <path class="fil111" d="M908 4624c-101,8 -246,-25 -260,-145 111,-46 195,36 260,145z"/>
                        <g>
                            <path class="fil111" d="M1018 4704c-8,3 -11,14 -8,26 4,11 14,19 22,16 8,-3 12,-14 8,-26 -4,-11 -13,-18 -22,-16z"/>
                            <g>
                                <path class="fil111" d="M1018 4704c-8,3 -11,14 -8,26 4,11 14,19 22,16 8,-3 12,-14 8,-26 -4,-11 -13,-18 -22,-16z"/>
                                <path class="fil111" d="M1105 4675c-9,3 -12,14 -9,26 4,11 14,18 22,16 8,-3 12,-14 8,-26 -3,-11 -13,-19 -21,-16z"/>
                                <path class="fil111" d="M1105 4675c-9,3 -12,14 -9,26 4,11 14,18 22,16 8,-3 12,-14 8,-26 -3,-11 -13,-19 -21,-16z"/>
                            </g>
                        </g>
                        <path class="fil114" d="M1080 4733c-51,14 -83,57 -72,96 11,38 61,58 112,43 51,-14 83,-57 72,-96 -11,-38 -61,-58 -112,-43z"/>
                        <path class="fil114" d="M1080 4733c-51,14 -83,57 -72,96 11,38 61,58 112,43 51,-14 83,-57 72,-96 -11,-38 -61,-58 -112,-43z"/>
                        <path class="fil111" d="M1079 4735c-24,7 -39,27 -34,45 5,18 28,28 52,21 24,-7 39,-27 34,-45 -5,-19 -29,-28 -52,-21z"/>
                        <path class="fil111" d="M1079 4735c-24,7 -39,27 -34,45 5,18 28,28 52,21 24,-7 39,-27 34,-45 -5,-19 -29,-28 -52,-21z"/>
                        <path class="fil114" d="M1015 4713c-3,1 -5,6 -3,10 1,5 5,8 9,7 3,-1 4,-6 3,-11 -2,-4 -6,-7 -9,-6z"/>
                        <path class="fil114" d="M1015 4713c-3,1 -5,6 -3,10 1,5 5,8 9,7 3,-1 4,-6 3,-11 -2,-4 -6,-7 -9,-6z"/>
                        <path class="fil114" d="M1102 4682c-4,2 -5,6 -4,11 2,5 6,7 9,6 3,-1 5,-5 3,-10 -1,-5 -5,-8 -8,-7z"/>
                        <path class="fil114" d="M1102 4682c-4,2 -5,6 -4,11 2,5 6,7 9,6 3,-1 5,-5 3,-10 -1,-5 -5,-8 -8,-7z"/>
                    </g>
                </g>
                <g>
                    <path class="fil115" d="M1823 4735c11,-35 17,-64 -22,-51 -38,14 -18,-33 -42,-15 -25,19 -29,-30 -49,-6 -20,25 -115,55 -101,87 13,32 -28,31 -11,55 17,25 -37,13 -15,40 21,28 -54,46 -14,49 40,3 -29,40 4,54 34,14 -43,20 -3,67 40,48 186,-158 253,-280z"/>
                    <g>
                        <path class="fil115" d="M1823 4735c11,-35 17,-64 -22,-51 -38,14 -18,-33 -42,-15 -25,19 -29,-30 -49,-6 -20,25 -115,55 -101,87 13,32 -28,31 -11,55 17,25 -37,13 -15,40 21,28 -54,46 -14,49 40,3 -29,40 4,54 34,14 -43,20 -3,67 40,48 186,-158 253,-280z"/>
                        <path class="fil116" d="M2062 4922c-26,100 -129,118 -173,96 -45,-21 -100,-82 -130,-52 -31,31 0,101 -17,172 -17,70 40,148 -48,154 -87,6 -62,-58 -55,-82 8,-25 -20,-5 -56,-3 -37,1 -89,-37 -77,-4 12,34 31,89 -40,94 -70,4 -64,-55 -56,-106 7,-50 -48,-119 -5,-161 43,-41 150,0 191,-75 42,-75 8,-165 103,-229 95,-64 151,3 200,7 49,5 193,73 163,189z"/>
                        <path class="fil116" d="M2062 4922c-26,100 -129,118 -173,96 -45,-21 -100,-82 -130,-52 -31,31 0,101 -17,172 -17,70 40,148 -48,154 -87,6 -62,-58 -55,-82 8,-25 -20,-5 -56,-3 -37,1 -89,-37 -77,-4 12,34 31,89 -40,94 -70,4 -64,-55 -56,-106 7,-50 -48,-119 -5,-161 43,-41 150,0 191,-75 42,-75 8,-165 103,-229 95,-64 151,3 200,7 49,5 193,73 163,189z"/>
                        <path class="fil116" d="M1719 4755c56,-44 -60,-166 -103,-130 -49,41 42,178 103,130z"/>
                        <path class="fil116" d="M1719 4755c56,-44 -60,-166 -103,-130 -49,41 42,178 103,130z"/>
                        <path class="fil115" d="M1690 4712c28,-23 -34,-79 -56,-61 -26,21 25,85 56,61z"/>
                        <path class="fil115" d="M1690 4712c28,-23 -34,-79 -56,-61 -26,21 25,85 56,61z"/>
                        <path class="fil115" d="M1862 4787c12,0 22,-10 22,-22 0,-12 -10,-22 -22,-22 -12,0 -22,10 -22,22 0,12 10,22 22,22z"/>
                        <path class="fil115" d="M1862 4787c12,0 22,-10 22,-22 0,-12 -10,-22 -22,-22 -12,0 -22,10 -22,22 0,12 10,22 22,22z"/>
                        <path class="fil115" d="M2062 4922c-18,69 -72,98 -118,104 -4,-26 -3,-54 3,-82 13,-61 48,-110 89,-132 24,29 37,66 26,110z"/>
                        <path class="fil115" d="M2062 4922c-18,69 -72,98 -118,104 -4,-26 -3,-54 3,-82 13,-61 48,-110 89,-132 24,29 37,66 26,110z"/>
                        <path class="fil116" d="M1426 5027c-29,-3 -59,16 -90,51 -31,35 30,-16 79,-19 49,-3 54,-32 11,-32z"/>
                        <path class="fil116" d="M1426 5027c-29,-3 -59,16 -90,51 -31,35 30,-16 79,-19 49,-3 54,-32 11,-32z"/>
                        <path class="fil115" d="M1351 5076c-26,-36 -61,33 -61,52 0,20 72,-18 61,-52z"/>
                        <path class="fil115" d="M1351 5076c-26,-36 -61,33 -61,52 0,20 72,-18 61,-52z"/>
                    </g>
                </g>
                <path class="fil18 str24" d="M2601 6663c0,49 -14,413 -14,469 0,56 -14,259 -203,342 -188,84 -535,133 -689,140 -153,7 -587,-49 -692,-132 -105,-84 -234,-179 -185,-357l-43 -1374c-4,-161 -6,-289 -3,-319 8,-77 -20,-346 -35,-460 23,31 63,66 141,84 156,37 588,90 894,85 306,-5 606,-29 737,-68 73,-21 143,-53 169,-94 1,7 0,42 0,49 0,0 -2,119 -5,161 -1,29 -16,914 -40,977l-32 497z"/>
                <path class="fil18 str25" d="M2601 6663c0,49 -14,413 -14,469 0,56 -14,259 -203,342 -188,84 -535,133 -689,140 -153,7 -587,-49 -692,-132 -105,-84 -234,-179 -185,-357l-43 -1374c-4,-161 -6,-289 -3,-319 8,-77 -20,-346 -35,-460 23,31 63,66 141,84 156,37 588,90 894,85 306,-5 606,-29 737,-68 73,-21 143,-53 169,-94 1,7 0,42 0,49 0,0 -2,119 -5,161 -1,29 -16,914 -40,977l-32 497z"/>
                <g>
                    <g>
                        <line class="fil36 str26" x1="865" y1="5087" x2="865" y2= "5142" />
                        <g>
                            <g>
                                <line class="fil36 str26" x1="865" y1="5087" x2="865" y2= "5142" />
                                <polyline class="fil36 str27" points="865,5224 865,6408 865,7259 "/>
                                <polyline class="fil36 str27" points="865,5224 865,6408 865,7259 "/>
                                <line class="fil36 str26" x1="865" y1="7300" x2="865" y2= "7355" />
                                <line class="fil36 str26" x1="865" y1="7300" x2="865" y2= "7355" />
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <line class="fil36 str26" x1="1401" y1="5126" x2="1401" y2= "5181" />
                        <g>
                            <g>
                                <line class="fil36 str26" x1="1401" y1="5126" x2="1401" y2= "5181" />
                                <polyline class="fil36 str27" points="1401,5262 1401,6447 1401,7469 "/>
                                <polyline class="fil36 str27" points="1401,5262 1401,6447 1401,7469 "/>
                                <line class="fil36 str26" x1="1401" y1="7510" x2="1401" y2= "7565" />
                                <line class="fil36 str26" x1="1401" y1="7510" x2="1401" y2= "7565" />
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="fil36 str28" d="M774 5401c0,0 18,7 52,17"/>
                        <g>
                            <g>
                                <path class="fil36 str28" d="M774 5401c0,0 18,7 52,17"/>
                                <path class="fil36 str29" d="M906 5440c165,44 471,107 847,107 435,0 701,-59 828,-97"/>
                                <path class="fil36 str29" d="M906 5440c165,44 471,107 847,107 435,0 701,-59 828,-97"/>
                                <path class="fil36 str28" d="M2621 5437c34,-12 51,-20 51,-20"/>
                                <path class="fil36 str28" d="M2621 5437c34,-12 51,-20 51,-20"/>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="fil36 str26" d="M783 6029c0,0 18,7 53,17"/>
                        <g>
                            <g>
                                <path class="fil36 str26" d="M783 6029c0,0 18,7 53,17"/>
                                <path class="fil36 str27" d="M914 6068c154,40 436,97 804,97 436,0 702,-59 829,-98"/>
                                <path class="fil36 str27" d="M914 6068c154,40 436,97 804,97 436,0 702,-59 829,-98"/>
                                <path class="fil36 str26" d="M2586 6055c35,-12 51,-20 51,-20"/>
                                <path class="fil36 str26" d="M2586 6055c35,-12 51,-20 51,-20"/>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="fil36 str26" d="M804 6678c0,0 17,7 52,17"/>
                        <g>
                            <g>
                                <path class="fil36 str26" d="M804 6678c0,0 17,7 52,17"/>
                                <path class="fil36 str30" d="M941 6720c149,39 415,91 772,91 424,0 674,-57 796,-97"/>
                                <path class="fil36 str30" d="M941 6720c149,39 415,91 772,91 424,0 674,-57 796,-97"/>
                                <path class="fil36 str26" d="M2551 6699c34,-13 50,-21 50,-21"/>
                                <path class="fil36 str26" d="M2551 6699c34,-13 50,-21 50,-21"/>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="fil36 str26" d="M808 7181c0,0 16,11 47,27"/>
                        <g>
                            <g>
                                <path class="fil36 str26" d="M808 7181c0,0 16,11 47,27"/>
                                <path class="fil36 str31" d="M937 7245c139,59 391,136 746,136 436,0 693,-91 815,-150"/>
                                <path class="fil36 str31" d="M937 7245c139,59 391,136 746,136 436,0 693,-91 815,-150"/>
                                <path class="fil36 str26" d="M2538 7210c31,-17 46,-29 46,-29"/>
                                <path class="fil36 str26" d="M2538 7210c31,-17 46,-29 46,-29"/>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <line class="fil36 str28" x1="1937" y1="5174" x2="1937" y2= "5228" />
                        <g>
                            <g>
                                <line class="fil36 str28" x1="1937" y1="5174" x2="1937" y2= "5228" />
                                <polyline class="fil36 str32" points="1937,5316 1937,6495 1937,7491 "/>
                                <polyline class="fil36 str32" points="1937,5316 1937,6495 1937,7491 "/>
                                <line class="fil36 str28" x1="1937" y1="7535" x2="1937" y2= "7590" />
                                <line class="fil36 str28" x1="1937" y1="7535" x2="1937" y2= "7590" />
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <line class="fil36 str28" x1="2473" y1="5160" x2="2473" y2= "5215" />
                        <g>
                            <g>
                                <line class="fil36 str28" x1="2473" y1="5160" x2="2473" y2= "5215" />
                                <polyline class="fil36 str33" points="2473,5296 2473,6481 2473,7313 "/>
                                <polyline class="fil36 str33" points="2473,5296 2473,6481 2473,7313 "/>
                                <line class="fil36 str28" x1="2473" y1="7354" x2="2473" y2= "7409" />
                                <line class="fil36 str28" x1="2473" y1="7354" x2="2473" y2= "7409" />
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="fil117" d="M1627 5704c-20,-27 -54,-34 -86,-36 90,-106 105,-300 -16,-390 -64,-48 -158,-30 -221,11 -53,35 -92,87 -106,147 -16,-38 -57,-64 -98,-54 -2,0 -3,1 -3,2 -2,-2 -5,-3 -8,-3 -4,1 -9,2 -13,3 -37,-38 -72,-112 -16,-152 23,-16 60,-14 74,12 15,28 -3,49 -27,61 -7,3 -3,13 3,13 31,1 50,-34 48,-61 -3,-35 -36,-55 -69,-53 -39,1 -67,33 -73,70 -8,46 15,86 48,116 -17,10 -31,26 -39,45 -38,-48 -123,-79 -169,-24 -16,18 -20,47 -2,66 22,24 54,10 72,-9 5,-6 -1,-15 -8,-11 -7,4 -20,14 -27,14l-29 -16c1,-9 2,-17 3,-26 10,-20 41,-28 62,-28 36,-1 68,18 93,43 0,0 1,1 1,1 -4,14 -5,28 -3,42 4,29 25,54 51,68 -140,8 -257,152 -194,291 28,64 97,110 168,107 75,-3 134,-57 184,-109 4,42 2,105 55,110 56,4 73,-60 76,-103 28,20 56,31 76,13 17,-16 12,-50 6,-70 -2,-5 -4,-10 -6,-15 57,29 150,52 194,-3 18,-21 16,-50 -1,-72zm-361 33l0 0c-7,-8 -14,-16 -21,-24 -12,-14 -23,-28 -34,-43 0,-1 0,-1 1,-2 3,-37 34,-57 69,-54 2,1 4,-1 5,-2 14,15 28,31 42,47 2,3 4,5 6,8 -37,-3 -70,34 -68,70zm75 -56l0 0c2,0 3,0 4,-1 18,22 35,44 51,68 2,1 3,4 5,6 -15,-2 -32,4 -44,12 -10,6 -28,22 -28,37 -5,-6 -10,-11 -14,-15 -14,-14 -27,-28 -41,-42 1,-1 2,-2 2,-3 -1,-37 30,-63 65,-62zm-140 -25l0 0c-14,-19 -28,-39 -42,-60 2,-14 11,-26 23,-35 15,-9 27,-6 43,-7 0,0 0,0 0,0 17,15 34,30 50,47 -33,-8 -71,22 -74,55zm-28 -104l0 0c-11,9 -19,21 -21,34 -5,-8 -10,-16 -16,-24 22,-6 40,-20 52,-38 7,5 13,10 20,15 -13,1 -26,7 -35,13zm-136 -74l0 0c-4,-41 24,-66 58,-82 2,-1 4,-3 4,-4 1,0 1,0 2,0 40,6 83,31 84,76 1,41 -35,79 -77,78 -35,-2 -68,-32 -71,-68zm304 371l0 0c-3,21 -4,45 -16,63 -19,28 -61,29 -73,-6 -10,-26 -5,-56 -10,-84 -2,-6 -11,-8 -15,-4 -46,48 -96,102 -164,115 -68,12 -137,-26 -169,-86 -31,-61 -21,-138 19,-193 42,-58 112,-84 182,-90 10,2 19,2 28,1 39,76 95,146 153,207 12,13 40,45 70,70 -3,1 -5,3 -5,7zm49 -1l0 0c-17,-3 -35,-19 -51,-35 3,-1 6,-4 5,-8 -2,-13 21,-27 31,-31 12,-5 23,-2 35,-4 18,35 38,90 -20,78zm177 -60l0 0c-49,8 -101,-7 -143,-32 -1,0 -2,-1 -2,-1 -13,-20 -28,-39 -42,-57 -53,-69 -111,-140 -184,-188 8,-16 11,-33 9,-51 0,-1 -1,-2 -1,-3 16,-60 51,-115 103,-150 63,-43 161,-62 221,-4 100,98 80,275 -13,368 -6,6 -2,15 6,15 29,1 64,1 86,23 37,36 -2,74 -40,80z"/>
                        <g>
                            <g>
                                <path class="fil117" d="M1627 5704c-20,-27 -54,-34 -86,-36 90,-106 105,-300 -16,-390 -64,-48 -158,-30 -221,11 -53,35 -92,87 -106,147 -16,-38 -57,-64 -98,-54 -2,0 -3,1 -3,2 -2,-2 -5,-3 -8,-3 -4,1 -9,2 -13,3 -37,-38 -72,-112 -16,-152 23,-16 60,-14 74,12 15,28 -3,49 -27,61 -7,3 -3,13 3,13 31,1 50,-34 48,-61 -3,-35 -36,-55 -69,-53 -39,1 -67,33 -73,70 -8,46 15,86 48,116 -17,10 -31,26 -39,45 -38,-48 -123,-79 -169,-24 -16,18 -20,47 -2,66 22,24 54,10 72,-9 5,-6 -1,-15 -8,-11 -7,4 -20,14 -27,14l-29 -16c1,-9 2,-17 3,-26 10,-20 41,-28 62,-28 36,-1 68,18 93,43 0,0 1,1 1,1 -4,14 -5,28 -3,42 4,29 25,54 51,68 -140,8 -257,152 -194,291 28,64 97,110 168,107 75,-3 134,-57 184,-109 4,42 2,105 55,110 56,4 73,-60 76,-103 28,20 56,31 76,13 17,-16 12,-50 6,-70 -2,-5 -4,-10 -6,-15 57,29 150,52 194,-3 18,-21 16,-50 -1,-72zm-361 33l0 0c-7,-8 -14,-16 -21,-24 -12,-14 -23,-28 -34,-43 0,-1 0,-1 1,-2 3,-37 34,-57 69,-54 2,1 4,-1 5,-2 14,15 28,31 42,47 2,3 4,5 6,8 -37,-3 -70,34 -68,70zm75 -56l0 0c2,0 3,0 4,-1 18,22 35,44 51,68 2,1 3,4 5,6 -15,-2 -32,4 -44,12 -10,6 -28,22 -28,37 -5,-6 -10,-11 -14,-15 -14,-14 -27,-28 -41,-42 1,-1 2,-2 2,-3 -1,-37 30,-63 65,-62zm-140 -25l0 0c-14,-19 -28,-39 -42,-60 2,-14 11,-26 23,-35 15,-9 27,-6 43,-7 0,0 0,0 0,0 17,15 34,30 50,47 -33,-8 -71,22 -74,55zm-28 -104l0 0c-11,9 -19,21 -21,34 -5,-8 -10,-16 -16,-24 22,-6 40,-20 52,-38 7,5 13,10 20,15 -13,1 -26,7 -35,13zm-136 -74l0 0c-4,-41 24,-66 58,-82 2,-1 4,-3 4,-4 1,0 1,0 2,0 40,6 83,31 84,76 1,41 -35,79 -77,78 -35,-2 -68,-32 -71,-68zm304 371l0 0c-3,21 -4,45 -16,63 -19,28 -61,29 -73,-6 -10,-26 -5,-56 -10,-84 -2,-6 -11,-8 -15,-4 -46,48 -96,102 -164,115 -68,12 -137,-26 -169,-86 -31,-61 -21,-138 19,-193 42,-58 112,-84 182,-90 10,2 19,2 28,1 39,76 95,146 153,207 12,13 40,45 70,70 -3,1 -5,3 -5,7zm49 -1l0 0c-17,-3 -35,-19 -51,-35 3,-1 6,-4 5,-8 -2,-13 21,-27 31,-31 12,-5 23,-2 35,-4 18,35 38,90 -20,78zm177 -60l0 0c-49,8 -101,-7 -143,-32 -1,0 -2,-1 -2,-1 -13,-20 -28,-39 -42,-57 -53,-69 -111,-140 -184,-188 8,-16 11,-33 9,-51 0,-1 -1,-2 -1,-3 16,-60 51,-115 103,-150 63,-43 161,-62 221,-4 100,98 80,275 -13,368 -6,6 -2,15 6,15 29,1 64,1 86,23 37,36 -2,74 -40,80z"/>
                                <path class="fil117" d="M1078 5463c-9,-1 -18,3 -22,11 -8,16 14,31 23,16 2,-4 -2,-7 -5,-5 -2,2 -5,1 -6,-1 -2,-3 2,-6 4,-7 10,-4 15,8 24,8 2,0 5,-3 5,-5 -1,-10 -14,-16 -23,-17z"/>
                                <path class="fil117" d="M1078 5463c-9,-1 -18,3 -22,11 -8,16 14,31 23,16 2,-4 -2,-7 -5,-5 -2,2 -5,1 -6,-1 -2,-3 2,-6 4,-7 10,-4 15,8 24,8 2,0 5,-3 5,-5 -1,-10 -14,-16 -23,-17z"/>
                                <path class="fil117" d="M1103 5435c-13,13 -6,38 13,38 5,0 5,-6 1,-8 -7,-3 -11,-19 -1,-21 4,-1 10,3 11,7 2,5 0,12 8,12 3,0 5,-2 6,-5 6,-20 -23,-37 -38,-23z"/>
                                <path class="fil117" d="M1103 5435c-13,13 -6,38 13,38 5,0 5,-6 1,-8 -7,-3 -11,-19 -1,-21 4,-1 10,3 11,7 2,5 0,12 8,12 3,0 5,-2 6,-5 6,-20 -23,-37 -38,-23z"/>
                                <path class="fil117" d="M1045 5699c-24,-23 -72,-24 -91,5 -2,2 -2,4 -1,5 -16,20 -18,51 -2,73 21,28 66,32 92,9 26,-23 27,-67 2,-92zm-13 78l0 0c-19,18 -53,15 -69,-6 -13,-17 -11,-41 0,-59 20,-13 44,-22 66,-6 22,16 23,53 3,71z"/>
                                <path class="fil117" d="M1045 5699c-24,-23 -72,-24 -91,5 -2,2 -2,4 -1,5 -16,20 -18,51 -2,73 21,28 66,32 92,9 26,-23 27,-67 2,-92zm-13 78l0 0c-19,18 -53,15 -69,-6 -13,-17 -11,-41 0,-59 20,-13 44,-22 66,-6 22,16 23,53 3,71z"/>
                                <path class="fil117" d="M1429 5365c-76,-18 -104,123 -26,131 38,3 77,-30 81,-67 4,-34 -22,-65 -55,-64zm33 78l0 0c-12,22 -44,45 -70,31 -40,-22 -16,-86 21,-99 1,3 5,7 10,6 35,-6 53,34 39,62z"/>
                                <path class="fil117" d="M1429 5365c-76,-18 -104,123 -26,131 38,3 77,-30 81,-67 4,-34 -22,-65 -55,-64zm33 78l0 0c-12,22 -44,45 -70,31 -40,-22 -16,-86 21,-99 1,3 5,7 10,6 35,-6 53,34 39,62z"/>
                                <path class="fil117" d="M1566 5730c-4,-11 -22,-24 -34,-18 -1,-1 -2,-1 -3,0 -14,5 -22,21 -18,35 4,17 21,24 36,19 16,-5 26,-20 19,-36zm-24 22l0 0c-18,5 -23,-17 -15,-28 1,0 2,1 3,1 9,0 19,0 23,11 3,8 -4,14 -11,16z"/>
                                <path class="fil117" d="M1566 5730c-4,-11 -22,-24 -34,-18 -1,-1 -2,-1 -3,0 -14,5 -22,21 -18,35 4,17 21,24 36,19 16,-5 26,-20 19,-36zm-24 22l0 0c-18,5 -23,-17 -15,-28 1,0 2,1 3,1 9,0 19,0 23,11 3,8 -4,14 -11,16z"/>
                                <path class="fil117" d="M1307 5862c-5,-10 -24,-22 -34,-11 0,1 -1,1 -1,2 -10,6 -15,19 -10,31 6,13 21,16 33,10 12,-5 18,-19 12,-32zm-18 19l0 0c-13,7 -22,-12 -13,-20 7,0 13,-1 18,5 4,6 1,12 -5,15z"/>
                                <path class="fil117" d="M1307 5862c-5,-10 -24,-22 -34,-11 0,1 -1,1 -1,2 -10,6 -15,19 -10,31 6,13 21,16 33,10 12,-5 18,-19 12,-32zm-18 19l0 0c-13,7 -22,-12 -13,-20 7,0 13,-1 18,5 4,6 1,12 -5,15z"/>
                            </g>
                        </g>
                        <g>
                            <path class="fil117" d="M2323 6323c-24,-23 -72,-24 -92,5 -1,2 -1,4 0,6 -17,20 -18,50 -2,72 20,28 65,32 91,9 26,-23 27,-67 3,-92zm-13 79l0 0c-20,18 -54,14 -70,-6 -13,-18 -11,-42 0,-59 20,-14 44,-23 66,-7 22,16 23,53 4,72z"/>
                            <g>
                                <path class="fil117" d="M2323 6323c-24,-23 -72,-24 -92,5 -1,2 -1,4 0,6 -17,20 -18,50 -2,72 20,28 65,32 91,9 26,-23 27,-67 3,-92zm-13 79l0 0c-20,18 -54,14 -70,-6 -13,-18 -11,-42 0,-59 20,-14 44,-23 66,-7 22,16 23,53 4,72z"/>
                                <path class="fil117" d="M2326 6668c-5,-10 -25,-23 -34,-11 -1,0 -1,1 -1,1 -11,6 -15,20 -10,31 6,13 21,17 33,11 12,-6 18,-20 12,-32zm-18 19l0 0c-13,7 -22,-12 -13,-21 7,1 13,0 17,6 4,6 2,12 -4,15z"/>
                                <path class="fil117" d="M2326 6668c-5,-10 -25,-23 -34,-11 -1,0 -1,1 -1,1 -11,6 -15,20 -10,31 6,13 21,17 33,11 12,-6 18,-20 12,-32zm-18 19l0 0c-13,7 -22,-12 -13,-21 7,1 13,0 17,6 4,6 2,12 -4,15z"/>
                                <path class="fil117" d="M2589 6233c27,-56 17,-148 -54,-167 -24,-6 -53,4 -63,29 -11,30 16,53 42,62 7,2 13,-8 6,-13 -6,-4 -22,-11 -25,-18l2 -34c8,-3 16,-6 25,-9 23,1 44,25 54,44 17,33 14,71 2,105 0,1 0,2 0,2 -15,2 -29,8 -40,16 -25,17 -39,47 -40,77 -70,-124 -256,-168 -356,-47 -46,55 -57,139 -23,203 37,68 113,98 184,120 -38,23 -96,49 -77,101 21,53 88,40 129,24 -6,34 -3,65 22,75 23,9 52,-12 67,-26 4,-4 8,-8 12,-12 0,0 234,-397 133,-532zm-231 479l0 0c-2,-2 -5,-3 -8,-1 -21,7 -44,16 -66,13 -34,-5 -54,-42 -28,-70 20,-20 50,-30 73,-47 6,-4 3,-13 -3,-15 -64,-21 -137,-43 -179,-100 -42,-57 -38,-138 3,-194 42,-56 118,-81 186,-69 73,12 129,65 165,127 3,9 7,18 12,26 -53,70 -92,153 -122,234 -6,17 -24,57 -33,96zm14 43l0 0c-5,-17 2,-40 9,-62 3,3 6,3 10,1 11,-8 35,7 42,14 10,9 13,21 20,31 -24,32 -66,75 -81,16zm96 -39l0 0c-1,2 -3,5 -5,7 -4,-14 -18,-28 -29,-35 -11,-6 -34,-16 -47,-9 2,-7 5,-14 7,-20 6,-19 13,-37 20,-56 1,1 3,1 4,0 33,-18 72,0 86,32 1,2 2,3 3,3 -12,27 -25,53 -39,78zm50 -103l0 0c-1,3 -2,7 -4,10 -14,-36 -63,-50 -95,-31 4,-11 8,-21 12,-31 8,-17 16,-34 25,-51 0,0 1,0 2,0 35,-13 68,6 80,39 1,3 3,4 5,4 -7,20 -15,40 -25,60zm31 -75l0 0c-8,-34 -53,-55 -85,-43 11,-22 24,-44 36,-66 14,-4 30,-2 43,6 15,9 18,22 26,36 0,0 0,0 0,0 -6,23 -13,45 -20,67zm26 -89l0 0c-6,-12 -18,-22 -28,-27 -13,-6 -27,-7 -41,-3 5,-9 10,-17 15,-26 16,17 37,27 59,31 -1,8 -3,16 -5,25zm-13 -48l0 0c-15,0 -44,-27 -44,-63 0,-37 29,-79 43,-79 6,0 20,6 24,14 4,3 14,16 16,21 2,5 2,28 0,35 1,6 -6,35 -6,42 0,36 -18,30 -33,30z"/>
                                <path class="fil117" d="M2589 6233c27,-56 17,-148 -54,-167 -24,-6 -53,4 -63,29 -11,30 16,53 42,62 7,2 13,-8 6,-13 -6,-4 -22,-11 -25,-18l2 -34c8,-3 16,-6 25,-9 23,1 44,25 54,44 17,33 14,71 2,105 0,1 0,2 0,2 -15,2 -29,8 -40,16 -25,17 -39,47 -40,77 -70,-124 -256,-168 -356,-47 -46,55 -57,139 -23,203 37,68 113,98 184,120 -38,23 -96,49 -77,101 21,53 88,40 129,24 -6,34 -3,65 22,75 23,9 52,-12 67,-26 4,-4 8,-8 12,-12 0,0 234,-397 133,-532zm-231 479l0 0c-2,-2 -5,-3 -8,-1 -21,7 -44,16 -66,13 -34,-5 -54,-42 -28,-70 20,-20 50,-30 73,-47 6,-4 3,-13 -3,-15 -64,-21 -137,-43 -179,-100 -42,-57 -38,-138 3,-194 42,-56 118,-81 186,-69 73,12 129,65 165,127 3,9 7,18 12,26 -53,70 -92,153 -122,234 -6,17 -24,57 -33,96zm14 43l0 0c-5,-17 2,-40 9,-62 3,3 6,3 10,1 11,-8 35,7 42,14 10,9 13,21 20,31 -24,32 -66,75 -81,16zm96 -39l0 0c-1,2 -3,5 -5,7 -4,-14 -18,-28 -29,-35 -11,-6 -34,-16 -47,-9 2,-7 5,-14 7,-20 6,-19 13,-37 20,-56 1,1 3,1 4,0 33,-18 72,0 86,32 1,2 2,3 3,3 -12,27 -25,53 -39,78zm50 -103l0 0c-1,3 -2,7 -4,10 -14,-36 -63,-50 -95,-31 4,-11 8,-21 12,-31 8,-17 16,-34 25,-51 0,0 1,0 2,0 35,-13 68,6 80,39 1,3 3,4 5,4 -7,20 -15,40 -25,60zm31 -75l0 0c-8,-34 -53,-55 -85,-43 11,-22 24,-44 36,-66 14,-4 30,-2 43,6 15,9 18,22 26,36 0,0 0,0 0,0 -6,23 -13,45 -20,67zm26 -89l0 0c-6,-12 -18,-22 -28,-27 -13,-6 -27,-7 -41,-3 5,-9 10,-17 15,-26 16,17 37,27 59,31 -1,8 -3,16 -5,25zm-13 -48l0 0c-15,0 -44,-27 -44,-63 0,-37 29,-79 43,-79 6,0 20,6 24,14 4,3 14,16 16,21 2,5 2,28 0,35 1,6 -6,35 -6,42 0,36 -18,30 -33,30z"/>
                            </g>
                        </g>
                        <g>
                            <path class="fil117" d="M1135 7048c29,25 79,20 102,-11 18,-24 16,-58 -2,-81 0,-2 1,-4 -1,-6 -22,-33 -76,-32 -102,-5 -28,27 -27,77 3,103zm15 -96l0 0c25,-18 52,-8 74,7 12,20 14,47 0,67 -18,23 -56,26 -78,6 -22,-20 -21,-62 4,-80z"/>
                            <g>
                                <path class="fil117" d="M1135 7048c29,25 79,20 102,-11 18,-24 16,-58 -2,-81 0,-2 1,-4 -1,-6 -22,-33 -76,-32 -102,-5 -28,27 -27,77 3,103zm15 -96l0 0c25,-18 52,-8 74,7 12,20 14,47 0,67 -18,23 -56,26 -78,6 -22,-20 -21,-62 4,-80z"/>
                                <path class="fil117" d="M1142 7366c13,7 30,3 36,-12 6,-12 1,-28 -11,-35 0,0 0,-1 -1,-1 -11,-13 -32,1 -38,12 -7,14 0,30 14,36zm1 -31l0 0c5,-7 12,-6 19,-7 11,10 1,31 -14,24 -6,-4 -9,-11 -5,-17z"/>
                                <path class="fil117" d="M1142 7366c13,7 30,3 36,-12 6,-12 1,-28 -11,-35 0,0 0,-1 -1,-1 -11,-13 -32,1 -38,12 -7,14 0,30 14,36zm1 -31l0 0c5,-7 12,-6 19,-7 11,10 1,31 -14,24 -6,-4 -9,-11 -5,-17z"/>
                                <path class="fil117" d="M983 7439c4,4 8,9 12,13 18,16 50,40 76,29 28,-11 31,-46 24,-84 47,18 121,33 144,-27 22,-57 -43,-87 -85,-112 79,-25 164,-59 205,-135 39,-71 26,-165 -25,-227 -112,-135 -320,-86 -398,53 -1,-34 -17,-67 -45,-87 -13,-9 -28,-15 -45,-17 0,-1 0,-1 0,-2 -13,-39 -16,-81 2,-118 11,-21 35,-49 61,-49 9,3 18,6 28,9l2 39c-4,8 -21,16 -28,20 -8,5 -2,17 7,14 29,-9 59,-35 46,-69 -11,-28 -43,-39 -70,-32 -79,21 -90,124 -60,187 -114,151 149,595 149,595zm72 -166l0 0c-33,-92 -77,-184 -136,-262 6,-9 10,-19 13,-30 41,-69 103,-128 185,-142 76,-13 161,14 208,78 46,62 50,153 3,216 -47,64 -128,89 -200,112 -7,2 -10,13 -4,17 26,19 60,30 82,53 29,30 7,73 -31,78 -25,4 -51,-7 -73,-15 -4,-1 -8,-1 -10,1 -10,-43 -30,-88 -37,-106zm-69 137l0 0c8,-12 11,-25 22,-35 8,-8 35,-25 47,-16 4,3 8,2 11,0 9,24 16,50 11,69 -18,66 -64,18 -91,-18zm-61 -113l0 0c2,-1 3,-2 4,-3 16,-37 59,-57 96,-36 1,1 3,0 4,0 8,20 16,41 23,62 2,7 5,15 8,23 -14,-8 -41,3 -52,10 -13,8 -29,23 -34,39 -2,-3 -3,-6 -5,-8 -16,-28 -30,-57 -44,-87zm-40 -96l0 0c2,1 4,0 5,-3 15,-38 51,-59 90,-45 1,1 2,1 3,1 9,18 19,37 27,56 5,12 10,23 14,35 -36,-21 -91,-6 -107,35 -1,-4 -3,-7 -4,-11 -11,-22 -20,-45 -28,-68zm-29 -91l0 0c0,0 0,0 0,0 9,-16 12,-30 29,-40 15,-9 32,-12 48,-7 14,25 28,49 41,74 -36,-14 -86,9 -95,48 -9,-25 -16,-50 -23,-75zm-13 -53l0 0c25,-4 49,-16 66,-34 6,9 12,19 17,28 -15,-4 -31,-3 -45,5 -12,5 -25,16 -31,29 -2,-9 -5,-19 -7,-28zm-16 -59l0 0c0,-8 -8,-40 -7,-47 -2,-7 -2,-33 0,-39 2,-6 14,-21 18,-24 5,-9 20,-15 27,-15 16,0 49,47 49,88 0,40 -33,71 -50,71 -16,0 -37,7 -37,-34z"/>
                                <path class="fil117" d="M983 7439c4,4 8,9 12,13 18,16 50,40 76,29 28,-11 31,-46 24,-84 47,18 121,33 144,-27 22,-57 -43,-87 -85,-112 79,-25 164,-59 205,-135 39,-71 26,-165 -25,-227 -112,-135 -320,-86 -398,53 -1,-34 -17,-67 -45,-87 -13,-9 -28,-15 -45,-17 0,-1 0,-1 0,-2 -13,-39 -16,-81 2,-118 11,-21 35,-49 61,-49 9,3 18,6 28,9l2 39c-4,8 -21,16 -28,20 -8,5 -2,17 7,14 29,-9 59,-35 46,-69 -11,-28 -43,-39 -70,-32 -79,21 -90,124 -60,187 -114,151 149,595 149,595zm72 -166l0 0c-33,-92 -77,-184 -136,-262 6,-9 10,-19 13,-30 41,-69 103,-128 185,-142 76,-13 161,14 208,78 46,62 50,153 3,216 -47,64 -128,89 -200,112 -7,2 -10,13 -4,17 26,19 60,30 82,53 29,30 7,73 -31,78 -25,4 -51,-7 -73,-15 -4,-1 -8,-1 -10,1 -10,-43 -30,-88 -37,-106zm-69 137l0 0c8,-12 11,-25 22,-35 8,-8 35,-25 47,-16 4,3 8,2 11,0 9,24 16,50 11,69 -18,66 -64,18 -91,-18zm-61 -113l0 0c2,-1 3,-2 4,-3 16,-37 59,-57 96,-36 1,1 3,0 4,0 8,20 16,41 23,62 2,7 5,15 8,23 -14,-8 -41,3 -52,10 -13,8 -29,23 -34,39 -2,-3 -3,-6 -5,-8 -16,-28 -30,-57 -44,-87zm-40 -96l0 0c2,1 4,0 5,-3 15,-38 51,-59 90,-45 1,1 2,1 3,1 9,18 19,37 27,56 5,12 10,23 14,35 -36,-21 -91,-6 -107,35 -1,-4 -3,-7 -4,-11 -11,-22 -20,-45 -28,-68zm-29 -91l0 0c0,0 0,0 0,0 9,-16 12,-30 29,-40 15,-9 32,-12 48,-7 14,25 28,49 41,74 -36,-14 -86,9 -95,48 -9,-25 -16,-50 -23,-75zm-13 -53l0 0c25,-4 49,-16 66,-34 6,9 12,19 17,28 -15,-4 -31,-3 -45,5 -12,5 -25,16 -31,29 -2,-9 -5,-19 -7,-28zm-16 -59l0 0c0,-8 -8,-40 -7,-47 -2,-7 -2,-33 0,-39 2,-6 14,-21 18,-24 5,-9 20,-15 27,-15 16,0 49,47 49,88 0,40 -33,71 -50,71 -16,0 -37,7 -37,-34z"/>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <path class="fil93" d="M10771 4712l-5588 0c-10,0 -17,-8 -17,-17l0 -3206c0,-9 7,-16 17,-16l5588 0c10,0 17,7 17,16l0 3206c0,9 -7,17 -17,17z"/>
                    <path class="fil13" d="M8009 4659c0,-18 -14,-32 -32,-32 -18,0 -32,14 -32,32 0,18 14,32 32,32 18,0 32,-14 32,-32z"/>
                    <path class="fil11" d="M10668 4614l-5378 0c-9,0 -17,-7 -17,-17l0 -3010c0,-9 8,-17 17,-17l5378 0c9,0 17,8 17,17l0 3010c0,10 -8,17 -17,17z"/>
                </g>
                <path class="fil99 str34" d="M13390 4528c7,-34 -3,-72 -31,-84 -34,-15 -71,8 -83,41"/>
                <path class="fil99 str34" d="M13390 4528c7,-34 -3,-72 -31,-84 -34,-15 -71,8 -83,41"/>
                <path class="fil99 str34" d="M13366 4560c4,2 8,3 13,3 1,-2 2,-4 4,-6 3,-14 6,-28 10,-41 0,-10 -3,-20 -8,-28 -15,-2 -31,8 -38,24 -7,20 1,41 19,48"/>
                <path class="fil99 str34" d="M13366 4560c4,2 8,3 13,3 1,-2 2,-4 4,-6 3,-14 6,-28 10,-41 0,-10 -3,-20 -8,-28 -15,-2 -31,8 -38,24 -7,20 1,41 19,48"/>
                <path class="fil118 str35" d="M14650 6715c0,0 -22,41 -28,71 -5,30 -7,117 -2,133 5,17 33,40 97,49 63,9 148,-3 166,-7 18,-4 64,-24 66,-30 2,-6 -25,-73 -45,-101 -21,-29 -87,-105 -98,-112 -5,-3 -15,-17 -35,-24 0,9 -22,37 -61,39 -39,3 -60,-18 -60,-18z"/>
                <path class="fil119 str36" d="M14650 6715c0,0 -22,41 -28,71 -5,30 -7,117 -2,133 5,17 33,40 97,49 63,9 148,-3 166,-7 18,-4 64,-24 66,-30 2,-6 -25,-73 -45,-101 -21,-29 -87,-105 -98,-112 -5,-3 -15,-17 -35,-24 0,9 -22,37 -61,39 -39,3 -60,-18 -60,-18z"/>
                <path class="fil5 str35" d="M13889 6042c0,0 53,1 81,5 28,4 43,9 49,12 6,4 -44,179 -44,179l-259 982c-42,-11 -66,-56 -121,-22 -19,-11 294,-1156 294,-1156z"/>
                <path class="fil120 str37" d="M13889 6042c0,0 53,1 81,5 28,4 43,9 49,12 6,4 -44,179 -44,179l-259 982c-42,-11 -66,-56 -121,-22 -19,-11 294,-1156 294,-1156z"/>
                <path class="fil5 str35" d="M14273 5484l292 953c0,0 19,25 58,20 39,-6 69,-23 64,-40l0 0c-117,-381 -315,-1022 -315,-1022 -23,29 -61,61 -99,89zm333 1087l0 0 44 144c0,0 21,21 60,18 39,-2 61,-30 61,-39 0,-2 -16,-53 -40,-133 -4,9 -9,15 -16,18 -14,8 -74,18 -109,-8z"/>
                <path class="fil5 str36" d="M14273 5484l292 953c0,0 19,25 58,20 39,-6 69,-23 64,-40l0 0c-117,-381 -315,-1022 -315,-1022 -23,29 -61,61 -99,89zm333 1087l0 0 44 144c0,0 21,21 60,18 39,-2 61,-30 61,-39 0,-2 -16,-53 -40,-133 -4,9 -9,15 -16,18 -14,8 -74,18 -109,-8z"/>
                <path class="fil121 str35" d="M14565 6437c0,0 19,25 58,20 39,-6 69,-23 64,-40 -5,-16 36,35 47,74 10,39 0,79 -19,88 -18,10 -104,23 -129,-32 -24,-55 -24,-87 -21,-110z"/>
                <path class="fil121 str36" d="M14565 6437c0,0 19,25 58,20 39,-6 69,-23 64,-40 -5,-16 36,35 47,74 10,39 0,79 -19,88 -18,10 -104,23 -129,-32 -24,-55 -24,-87 -21,-110z"/>
                <path class="fil122 str35" d="M13595 7198c0,0 -92,83 -120,137 -28,53 -56,75 -82,85 -26,11 -127,22 -117,114 10,92 85,129 133,145 49,16 180,21 263,-44 84,-66 92,-98 109,-108 17,-10 48,-3 53,4 4,8 -4,-29 -46,-46 -41,-16 -18,-36 -19,-43 -1,-7 -11,-211 -53,-222 -42,-11 -66,-56 -121,-22z"/>
                <path class="fil123 str36" d="M13595 7198c0,0 -92,83 -120,137 -28,53 -56,75 -82,85 -26,11 -127,22 -117,114 10,92 85,129 133,145 49,16 180,21 263,-44 84,-66 92,-98 109,-108 17,-10 48,-3 53,4 4,8 -4,-29 -46,-46 -41,-16 -18,-36 -19,-43 -1,-7 -11,-211 -53,-222 -42,-11 -66,-56 -121,-22z"/>
                <path class="fil5 str35" d="M13752 7298c0,0 209,-292 269,-357 60,-65 303,-330 346,-366 43,-37 136,-118 148,-123 12,-6 39,21 41,28 2,6 -358,343 -459,473 -101,130 -318,417 -332,444l0 0c-2,-28 -6,-66 -13,-99l0 0z"/>
                <path class="fil124 str36" d="M13752 7298c0,0 209,-292 269,-357 60,-65 303,-330 346,-366 43,-37 136,-118 148,-123 12,-6 39,21 41,28 2,6 -358,343 -459,473 -101,130 -318,417 -332,444l0 0c-2,-28 -6,-66 -13,-99l0 0z"/>
                <path class="fil125 str35" d="M14559 6417c-18,9 -46,25 -44,35 12,-6 39,21 41,28 0,0 0,0 -1,1 4,-1 7,-1 10,-1 -2,-18 -2,-32 0,-43l0 0 -6 -20z"/>
                <path class="fil125 str36" d="M14559 6417c-18,9 -46,25 -44,35 12,-6 39,21 41,28 0,0 0,0 -1,1 4,-1 7,-1 10,-1 -2,-18 -2,-32 0,-43l0 0 -6 -20z"/>
                <path class="fil126 str35" d="M13835 7532c7,2 43,15 49,72 7,63 -32,142 -113,146 -82,5 -174,-10 -182,-55 -1,-6 -1,-12 -2,-19 31,-8 60,-22 85,-41 84,-66 92,-98 109,-108 14,-8 36,-5 47,0 2,2 4,3 6,4 0,2 1,2 1,1z"/>
                <path class="fil126 str36" d="M13835 7532c7,2 43,15 49,72 7,63 -32,142 -113,146 -82,5 -174,-10 -182,-55 -1,-6 -1,-12 -2,-19 31,-8 60,-22 85,-41 84,-66 92,-98 109,-108 14,-8 36,-5 47,0 2,2 4,3 6,4 0,2 1,2 1,1z"/>
                <path class="fil127 str35" d="M13302 7461l0 0 0 0 0 0zm-1 0l0 0c-4,2 -37,6 -320,-40 -324,-53 -814,-127 -814,-127 0,0 -149,-22 -158,-42 -1,-4 -4,-8 -7,-11 -12,2 -25,7 -31,12 -7,6 -32,26 -65,48 14,9 30,17 51,26 65,26 169,53 463,99 293,46 686,113 718,118 17,2 75,10 142,11 -2,-7 -3,-14 -4,-21 -3,-34 8,-57 25,-73z"/>
                <path class="fil128 str36" d="M13302 7461l0 0 0 0 0 0zm-1 0l0 0c-4,2 -37,6 -320,-40 -324,-53 -814,-127 -814,-127 0,0 -149,-22 -158,-42 -1,-4 -4,-8 -7,-11 -12,2 -25,7 -31,12 -7,6 -32,26 -65,48 14,9 30,17 51,26 65,26 169,53 463,99 293,46 686,113 718,118 17,2 75,10 142,11 -2,-7 -3,-14 -4,-21 -3,-34 8,-57 25,-73z"/>
                <path class="fil129 str35" d="M11922 6953c-9,-1 -108,-16 -122,-12 -14,4 -60,70 -80,94 -19,24 -72,113 -83,120 -12,6 -58,4 -92,31 -33,26 -63,135 16,170 80,35 145,41 219,15 73,-26 177,-106 191,-118 14,-12 53,-18 62,-7 9,11 -6,-22 -40,-50 -34,-27 -27,-52 -33,-88 -5,-36 -8,-144 -38,-155z"/>
                <path class="fil130 str36" d="M11922 6953c-9,-1 -108,-16 -122,-12 -14,4 -60,70 -80,94 -19,24 -72,113 -83,120 -12,6 -58,4 -92,31 -33,26 -63,135 16,170 80,35 145,41 219,15 73,-26 177,-106 191,-118 14,-12 53,-18 62,-7 9,11 -6,-22 -40,-50 -34,-27 -27,-52 -33,-88 -5,-36 -8,-144 -38,-155z"/>
                <path class="fil126 str35" d="M11873 7323c0,15 -1,36 -6,41 -5,5 -42,5 -74,2 26,-11 54,-27 80,-43z"/>
                <path class="fil126 str36" d="M11873 7323c0,15 -1,36 -6,41 -5,5 -42,5 -74,2 26,-11 54,-27 80,-43z"/>
                <path class="fil99 str38" d="M13772 7476c0,0 -33,-11 -74,14 -41,26 -124,92 -167,99"/>
                <path class="fil99 str39" d="M13772 7476c0,0 -33,-11 -74,14 -41,26 -124,92 -167,99"/>
                <path class="fil126 str35" d="M11545 7186c0,0 -74,42 -74,99 0,57 3,82 62,94 59,11 119,25 144,22 8,0 16,-6 22,-14 -44,2 -88,-9 -138,-31 -79,-35 -49,-144 -16,-170z"/>
                <path class="fil126 str36" d="M11545 7186c0,0 -74,42 -74,99 0,57 3,82 62,94 59,11 119,25 144,22 8,0 16,-6 22,-14 -44,2 -88,-9 -138,-31 -79,-35 -49,-144 -16,-170z"/>
                <path class="fil131 str35" d="M14019 6059c0,0 61,-64 82,-115 21,-51 53,-155 56,-201 2,-36 2,-136 -2,-188 -7,-3 -20,-8 -46,-13 -32,-7 -64,-7 -81,-10 -14,9 -26,22 -35,38 -41,73 -105,179 -119,263 -12,73 -10,153 14,212l1 -3c0,0 53,1 81,5 28,4 43,9 49,12z"/>
                <path class="fil132 str40" d="M14019 6059c0,0 61,-64 82,-115 21,-51 53,-155 56,-201 2,-36 2,-136 -2,-188 -7,-3 -20,-8 -46,-13 -32,-7 -64,-7 -81,-10 -14,9 -26,22 -35,38 -41,73 -105,179 -119,263 -12,73 -10,153 14,212l1 -3c0,0 53,1 81,5 28,4 43,9 49,12z"/>
                <path class="fil133 str35" d="M11958 7082c0,0 297,-261 423,-349 126,-88 277,-192 323,-221 46,-30 250,-148 300,-174 49,-27 184,-96 242,-108 58,-13 153,-10 224,-2 41,5 110,12 161,18 -17,5 -38,26 -10,44 -68,-9 -176,-22 -229,-23 -82,-3 -128,-17 -270,64 -142,82 -332,185 -408,236 -76,51 -308,210 -465,341 -157,131 -195,165 -283,246 -3,-14 -3,-28 -6,-46 0,-7 -1,-16 -2,-26z"/>
                <path class="fil133 str36" d="M11958 7082c0,0 297,-261 423,-349 126,-88 277,-192 323,-221 46,-30 250,-148 300,-174 49,-27 184,-96 242,-108 58,-13 153,-10 224,-2 41,5 110,12 161,18 -17,5 -38,26 -10,44 -68,-9 -176,-22 -229,-23 -82,-3 -128,-17 -270,64 -142,82 -332,185 -408,236 -76,51 -308,210 -465,341 -157,131 -195,165 -283,246 -3,-14 -3,-28 -6,-46 0,-7 -1,-16 -2,-26z"/>
                <path class="fil133 str35" d="M14538 6348c-68,-9 -183,-23 -273,-31 13,19 1,31 -27,37 100,11 234,26 312,35l-12 -41z"/>
                <path class="fil133 str36" d="M14538 6348c-68,-9 -183,-23 -273,-31 13,19 1,31 -27,37 100,11 234,26 312,35l-12 -41z"/>
                <path class="fil134 str35" d="M13658 6304c0,0 80,13 131,20 5,1 13,2 23,3 7,-26 14,-51 20,-75 -23,-3 -42,-5 -54,-6 -51,-4 -126,-8 -147,0 -21,7 -51,39 27,58zm289 41l0 0c155,18 358,32 318,-28 -12,-20 -109,-30 -166,-36 -24,-3 -76,-8 -131,-15l-21 79z"/>
                <path class="fil134 str36" d="M13658 6304c0,0 80,13 131,20 5,1 13,2 23,3 7,-26 14,-51 20,-75 -23,-3 -42,-5 -54,-6 -51,-4 -126,-8 -147,0 -21,7 -51,39 27,58zm289 41l0 0c155,18 358,32 318,-28 -12,-20 -109,-30 -166,-36 -24,-3 -76,-8 -131,-15l-21 79z"/>
                <path class="fil126 str35" d="M13071 6521c0,0 -18,106 -7,162 11,57 21,64 66,71 44,7 168,9 207,-7 38,-16 49,-26 23,-69 -25,-43 -121,-141 -157,-165 -37,-24 -92,-31 -132,8z"/>
                <path class="fil126 str36" d="M13071 6521c0,0 -18,106 -7,162 11,57 21,64 66,71 44,7 168,9 207,-7 38,-16 49,-26 23,-69 -25,-43 -121,-141 -157,-165 -37,-24 -92,-31 -132,8z"/>
                <path class="fil135 str35" d="M13019 6171c0,0 13,26 31,64 -12,0 -8,1 2,3l3 8c-8,19 -55,54 -99,19 -18,-39 -32,-67 -32,-67l-7 -34c32,2 66,4 101,5 0,1 1,2 1,2zm-20 169l0 0c2,-1 3,-2 5,-2 -2,0 -3,1 -5,2zm116 30l0 0c33,72 63,136 62,142 -2,14 -26,27 -54,27 -28,0 -36,8 -70,-66 -8,-19 -20,-45 -34,-74 18,5 74,-1 96,-29z"/>
                <path class="fil135 str36" d="M13052 6238l3 8c-8,19 -55,54 -99,19 -18,-39 -32,-67 -32,-67l-7 -34c32,2 66,4 101,5 0,1 1,2 1,2 0,0 14,30 33,67zm-53 102l0 0c2,-1 3,-2 5,-2 -2,0 -3,1 -5,2zm116 30l0 0c33,72 63,136 62,142 -2,14 -26,27 -54,27 -28,0 -36,8 -70,-66 -8,-19 -20,-45 -34,-74 18,5 74,-1 96,-29z"/>
                <path class="fil6 str36" d="M13054 6243c-1,19 -57,67 -108,13 5,-2 -14,16 12,60 7,13 14,25 20,36 11,-6 20,-11 26,-14 30,-17 94,-49 151,-75l0 0c0,0 -16,-6 -44,-12 -14,-3 -42,-5 -57,-8zm-44 152l0 0c39,-22 77,-43 112,-64l2 -1c-1,5 -1,10 -1,15 0,49 -82,61 -104,54 -3,-1 -6,-2 -9,-4z"/>
                <path class="fil136 str41" d="M14293 5187l37 -214c-22,17 -53,37 -82,61 -52,42 -106,73 -159,63 -31,-6 -47,-29 -55,-47 -12,5 -25,10 -38,15 -138,46 -305,107 -617,101 -243,-5 -707,-25 -977,-39l-1 0c0,0 -133,423 -116,489 17,66 37,252 41,275 1,5 3,14 6,26 56,0 129,-2 139,-3 16,-2 184,59 302,76 118,17 316,33 355,33l-5 0c110,-2 233,-4 259,-7 42,-5 103,36 17,46 -86,11 -664,23 -934,-40 -39,-9 -71,-18 -98,-26 17,27 40,52 71,64 79,30 262,74 313,86 52,12 299,31 456,25 156,-6 275,-27 388,-148 114,-120 257,-319 285,-367 26,-44 68,-155 109,-80l4 -6c9,-16 21,-29 35,-38l0 0c-8,-1 -13,-3 -13,-7 0,-12 12,-77 28,-129 21,-68 132,-202 250,-209l0 0zm-1853 787l0 0 5 1c-2,0 -3,0 -5,-1zm6 2l0 0c2,0 4,1 6,1 -2,0 -4,-1 -6,-1zm13 3l0 0c1,0 3,1 5,1 -2,0 -4,-1 -5,-1zm6 1l0 0c2,1 4,1 6,1 -2,0 -4,0 -6,-1zm7 2l0 0c2,0 3,0 5,1 -2,-1 -3,-1 -5,-1zm6 1l0 0c4,1 8,2 12,2 -4,0 -8,-1 -12,-2zm13 3l0 0c2,0 4,0 6,1 -2,-1 -4,-1 -6,-1zm6 1l0 0c2,0 4,1 6,1 -2,0 -4,-1 -6,-1zm7 1l0 0c4,1 8,2 12,2 -4,0 -8,-1 -12,-2zm13 2l0 0c2,1 4,1 6,1 -2,0 -4,0 -6,-1zm7 1l0 0c2,1 4,1 6,1 -2,0 -4,0 -6,-1zm6 1l0 0c2,1 5,1 7,1 -2,0 -5,0 -7,-1zm7 1l0 0c2,1 4,1 6,1 -2,0 -4,0 -6,-1zm7 1l0 0c2,0 3,1 5,1 -2,0 -3,-1 -5,-1zm7 1l0 0c1,0 3,0 5,1 -2,-1 -4,-1 -5,-1zm6 1l0 0c2,0 4,0 6,0 -2,0 -4,0 -6,0zm409 30l0 0c3,0 6,0 9,0 -3,0 -6,0 -9,0zm9 0l0 0c3,0 6,0 10,0 -4,0 -7,0 -10,0zm58 -2l0 0c7,0 16,0 24,0 -8,0 -17,0 -24,0zm25 0l0 0c16,0 33,-1 50,-1 -17,0 -34,1 -50,1z"/>
                <path class="fil137 str35" d="M13784 5131c0,0 -194,288 -228,349 -35,60 -65,173 -69,206 -4,33 -17,201 -65,243 -47,42 -154,91 -476,60 -323,-30 -469,-77 -509,-147 -41,-71 12,-334 2,-441 -11,-107 30,-228 45,-243 2,-2 23,-11 54,-24 271,13 636,28 841,32 172,3 300,-14 404,-38l1 3z"/>
                <path class="fil138 str42" d="M13784 5131c0,0 -194,288 -228,349 -35,60 -65,173 -69,206 -4,33 -17,201 -65,243 -47,42 -154,91 -476,60 -323,-30 -469,-77 -509,-147 -41,-71 12,-334 2,-441 -11,-107 30,-228 45,-243 2,-2 23,-11 54,-24 271,13 636,28 841,32 172,3 300,-14 404,-38l1 3z"/>
                <path class="fil139 str35" d="M11922 6953c0,0 237,-843 256,-924 16,-71 41,-156 47,-176l0 0c-32,30 -116,43 -127,14 -19,72 -177,664 -205,754 -21,68 -61,223 -84,320 29,0 105,11 113,12z"/>
                <path class="fil140 str36" d="M11922 6953c0,0 237,-843 256,-924 16,-71 41,-156 47,-176l0 0c-32,30 -116,43 -127,14 -19,72 -177,664 -205,754 -21,68 -61,223 -84,320 29,0 105,11 113,12z"/>
                <path class="fil131 str35" d="M12317 5421c0,0 -95,-15 -104,-4 -10,12 -105,166 -117,231 -12,65 -18,165 2,219 11,29 95,16 127,-14 27,-26 8,-45 20,-79 15,-46 34,-85 48,-121 -3,-14 -5,-27 -8,-37 -7,-26 10,-107 32,-195l0 0z"/>
                <path class="fil131 str36" d="M12317 5421c0,0 -95,-15 -104,-4 -10,12 -105,166 -117,231 -12,65 -18,165 2,219 11,29 95,16 127,-14 27,-26 8,-45 20,-79 15,-46 34,-85 48,-121 -3,-14 -5,-27 -8,-37 -7,-26 10,-107 32,-195l0 0z"/>
                <path class="fil99 str43" d="M12323 5871c-6,-46 -18,-156 -31,-223 0,2 1,3 1,5 -14,36 -33,75 -48,121 -12,34 7,53 -20,79 -1,1 -3,2 -4,3"/>
                <path class="fil139 str35" d="M12213 5417c0,0 -4,-25 5,-63 9,-37 60,-156 98,-185 21,-17 50,-32 72,-43l15 1 -1 0 -1 0c0,0 -49,156 -84,294l0 0c0,0 -95,-15 -104,-4zm97 31l0 0 0 0 1 -3 -1 3z"/>
                <path class="fil139 str36" d="M12213 5417c0,0 -4,-25 5,-63 9,-37 60,-156 98,-185 21,-17 50,-32 72,-43l15 1 -1 0 -1 0c0,0 -49,156 -84,294l0 0c0,0 -95,-15 -104,-4zm97 31l0 0 0 0 1 -3 -1 3z"/>
                <path class="fil141 str35" d="M12446 5273l-51 222c-21,6 -53,15 -86,25l37 -206c25,-89 49,-167 54,-183l4 -4c41,2 86,4 134,7 -31,13 -52,22 -54,24 -9,9 -27,56 -38,115l0 0zm-60 262l0 0 -4 19 -78 -7 2 -10c27,-2 56,-3 80,-2z"/>
                <path class="fil141 str36" d="M12446 5273l-51 222c-21,6 -53,15 -86,25l37 -206c25,-89 49,-167 54,-183l4 -4c41,2 86,4 134,7 -31,13 -52,22 -54,24 -9,9 -27,56 -38,115l0 0zm-60 262l0 0 -4 19 -78 -7 2 -10c27,-2 56,-3 80,-2z"/>
                <path class="fil142 str35" d="M13722 5874c0,0 -38,120 -30,130 7,9 128,23 188,16 -16,-55 -16,-123 -6,-187 9,-54 39,-117 70,-175 -6,-16 -13,-28 -22,-37 -6,-5 -11,-10 -15,-15 -10,18 -19,37 -27,50 -18,31 -83,124 -158,218l0 0z"/>
                <path class="fil142 str40" d="M13722 5874c0,0 -38,120 -30,130 7,9 128,23 188,16 -16,-55 -16,-123 -6,-187 9,-54 39,-117 70,-175 -6,-16 -13,-28 -22,-37 -6,-5 -11,-10 -15,-15 -10,18 -19,37 -27,50 -18,31 -83,124 -158,218l0 0z"/>
                <path class="fil141 str35" d="M13734 6014c0,0 -12,72 -34,88 -21,16 -54,52 -146,45 -39,-3 -84,-7 -122,-12 -46,17 -96,26 -150,32 27,4 54,9 73,11 47,7 242,22 278,16 36,-5 130,-47 154,-110 9,-23 14,-44 18,-63 -25,-1 -51,-4 -71,-7l0 0z"/>
                <path class="fil141 str40" d="M13734 6014c0,0 -12,72 -34,88 -21,16 -54,52 -146,45 -39,-3 -84,-7 -122,-12 -46,17 -96,26 -150,32 27,4 54,9 73,11 47,7 242,22 278,16 36,-5 130,-47 154,-110 9,-23 14,-44 18,-63 -25,-1 -51,-4 -71,-7l0 0z"/>
                <path class="fil143 str35" d="M14034 5050c8,18 24,41 55,47 53,10 107,-21 159,-63 52,-43 111,-74 115,-97 4,-24 -36,-58 -37,-73 -2,-15 33,-22 45,-39 12,-17 18,-96 19,-109 2,-13 -1,-53 4,-64 6,-11 6,-29 6,-41 0,-11 -15,-27 -6,-41 10,-14 10,-34 14,-47 4,-14 31,-125 31,-131 0,-7 2,-36 17,-57 15,-21 16,-43 19,-51 2,-7 40,-135 -30,-188 -70,-52 -198,-106 -262,-115 -63,-10 -565,-25 -805,-15 -240,11 -322,22 -391,89 -68,67 -189,249 -185,348 3,84 -21,283 -45,366 11,1 22,2 35,2 91,5 826,27 826,27 0,0 336,37 379,44 43,7 117,-1 155,7 37,8 87,40 52,82 0,0 -57,71 -170,119z"/>
                <path class="fil144 str44" d="M14034 5050c8,18 24,41 55,47 53,10 107,-21 159,-63 52,-43 111,-74 115,-97 4,-24 -36,-58 -37,-73 -2,-15 33,-22 45,-39 12,-17 18,-96 19,-109 2,-13 -1,-53 4,-64 6,-11 6,-29 6,-41 0,-11 -15,-27 -6,-41 10,-14 10,-34 14,-47 4,-14 31,-125 31,-131 0,-7 2,-36 17,-57 15,-21 16,-43 19,-51 2,-7 40,-135 -30,-188 -70,-52 -198,-106 -262,-115 -63,-10 -565,-25 -805,-15 -240,11 -322,22 -391,89 -68,67 -189,249 -185,348 3,84 -21,283 -45,366 11,1 22,2 35,2 91,5 826,27 826,27 0,0 336,37 379,44 43,7 117,-1 155,7 37,8 87,40 52,82 0,0 -57,71 -170,119z"/>
                <path class="fil145 str35" d="M12840 4773c0,0 24,-235 16,-280 -8,-44 20,-198 27,-219 6,-22 71,-214 157,-246 42,-16 98,-34 157,-50 48,-5 107,-8 181,-12 195,-8 563,0 728,9 63,12 117,28 154,48 179,97 36,258 25,296 -10,38 -67,207 -67,239 0,31 -27,167 -27,184 0,15 -10,82 -27,110 -2,0 -4,-1 -6,-1l-1 -1 0 0c-1,0 -1,0 -2,0l0 0c0,0 -1,0 -2,-1l0 0c0,0 -1,0 -1,0 -38,-8 -112,0 -155,-7 -43,-7 -379,-44 -379,-44l-9 0 -4 0 -5 0 -14 -1 -1 0 -28 0 -27 -1 -75 -3 -39 -1 -15 0 -9 -1 -26 0 -7 -1 -36 -1 -24 -1 -84 -2 -19 -1c-40,-1 -80,-2 -119,-4l-8 0c-56,-2 -109,-4 -154,-5l-3 0c-14,-1 -27,-1 -40,-2l-5 0 -17 0 -2 0 -8 -1 0 0z"/>
                <path class="fil146 str44" d="M12840 4773c0,0 24,-235 16,-280 -8,-44 20,-198 27,-219 6,-22 71,-214 157,-246 42,-16 98,-34 157,-50 48,-5 107,-8 181,-12 195,-8 563,0 728,9 63,12 117,28 154,48 179,97 36,258 25,296 -10,38 -67,207 -67,239 0,31 -27,167 -27,184 0,15 -10,82 -27,110 -2,0 -4,-1 -6,-1l-1 -1 0 0c-1,0 -1,0 -2,0l0 0c0,0 -1,0 -2,-1l0 0c0,0 -1,0 -1,0 -38,-8 -112,0 -155,-7 -43,-7 -379,-44 -379,-44l-9 0 -4 0 -5 0 -14 -1 -1 0 -28 0 -27 -1 -75 -3 -39 -1 -15 0 -9 -1 -26 0 -7 -1 -36 -1 -24 -1 -84 -2 -19 -1c-40,-1 -80,-2 -119,-4l-8 0c-56,-2 -109,-4 -154,-5l-3 0c-14,-1 -27,-1 -40,-2l-5 0 -17 0 -2 0 -8 -1 0 0z"/>
                <path class="fil141 str35" d="M12269 5918c0,0 154,65 294,78 140,14 311,34 399,31 87,-4 378,-6 420,-11 42,-5 103,36 17,46 -86,11 -664,23 -934,-40 -270,-63 -228,-102 -196,-104z"/>
                <path class="fil141 str36" d="M12269 5918c0,0 154,65 294,78 140,14 311,34 399,31 87,-4 378,-6 420,-11 42,-5 103,36 17,46 -86,11 -664,23 -934,-40 -270,-63 -228,-102 -196,-104z"/>
                <path class="fil147 str35" d="M12269 5918c0,0 186,-2 202,-4 16,-2 184,59 302,76 118,17 316,33 355,33 -69,1 -133,2 -166,4 -88,3 -259,-17 -399,-31 -140,-13 -294,-78 -294,-78z"/>
                <path class="fil147 str36" d="M12269 5918c0,0 186,-2 202,-4 16,-2 184,59 302,76 118,17 316,33 355,33 -69,1 -133,2 -166,4 -88,3 -259,-17 -399,-31 -140,-13 -294,-78 -294,-78z"/>
                <path class="fil99 str38" d="M12467 5777c0,0 227,85 330,98"/>
                <path class="fil99 str45" d="M12467 5777c0,0 227,85 330,98"/>
                <path class="fil99 str38" d="M13454 5693c0,0 -26,151 -42,171 -16,20 -370,43 -472,30"/>
                <path class="fil99 str45" d="M13454 5693c0,0 -26,151 -42,171 -16,20 -370,43 -472,30"/>
                <path class="fil99 str38" d="M12451 5790c0,0 12,69 119,106 108,37 230,55 298,61"/>
                <path class="fil99 str45" d="M12451 5790c0,0 12,69 119,106 108,37 230,55 298,61"/>
                <path class="fil148 str35" d="M13196 4785c0,0 3,-319 16,-363 14,-43 11,-183 263,-207 253,-25 325,7 398,34 72,26 120,171 102,222 -19,51 -73,364 -94,393 -22,28 -685,-79 -685,-79z"/>
                <path class="fil148 str42" d="M13196 4785c0,0 3,-319 16,-363 14,-43 11,-183 263,-207 253,-25 325,7 398,34 72,26 120,171 102,222 -19,51 -73,364 -94,393 -22,28 -685,-79 -685,-79z"/>
                <path class="fil99 str38" d="M12919 5344c0,0 -159,14 -241,31"/>
                <path class="fil99 str38" d="M12919 5344c0,0 -159,14 -241,31"/>
                <path class="fil99 str38" d="M12958 5217c0,0 -204,53 -241,57 -38,3 -176,21 -210,39"/>
                <path class="fil99 str38" d="M12958 5217c0,0 -204,53 -241,57 -38,3 -176,21 -210,39"/>
                <path class="fil99 str38" d="M12506 5160c0,0 -38,194 -35,223 3,29 8,116 7,146 -2,30 -15,150 -15,177"/>
                <path class="fil99 str45" d="M12506 5160c0,0 -38,194 -35,223 3,29 8,116 7,146 -2,30 -15,150 -15,177"/>
                <path class="fil99 str38" d="M13232 5365c11,-6 73,-50 160,-61 87,-11 152,-58 185,-83"/>
                <path class="fil99 str38" d="M13232 5365c11,-6 73,-50 160,-61 87,-11 152,-58 185,-83"/>
                <path class="fil99 str38" d="M14337 4928c-7,3 -178,147 -231,149"/>
                <path class="fil99 str46" d="M14337 4928c-7,3 -178,147 -231,149"/>
                <path class="fil99 str47" d="M14232 4768c0,0 81,15 92,42"/>
                <path class="fil99 str46" d="M14232 4768c0,0 81,15 92,42"/>
                <path class="fil99 str47" d="M14199 4814c0,0 121,43 117,94"/>
                <path class="fil99 str46" d="M14199 4814c0,0 121,43 117,94"/>
                <path class="fil99 str47" d="M14214 4860c0,0 49,35 52,59"/>
                <path class="fil99 str46" d="M14214 4860c0,0 49,35 52,59"/>
                <path class="fil99 str47" d="M14171 4761c0,0 -95,0 -143,39"/>
                <path class="fil99 str45" d="M14171 4761c0,0 -95,0 -143,39"/>
                <path class="fil99 str47" d="M14161 4820c0,0 -40,13 -59,15"/>
                <path class="fil99 str45" d="M14161 4820c0,0 -40,13 -59,15"/>
                <path class="fil99 str38" d="M13184 5440c0,0 38,90 80,111"/>
                <path class="fil99 str38" d="M13184 5440c0,0 38,90 80,111"/>
                <path class="fil99 str38" d="M12531 5759c0,0 76,-68 140,-93 65,-24 91,-58 116,-84"/>
                <path class="fil99 str45" d="M12531 5759c0,0 76,-68 140,-93 65,-24 91,-58 116,-84"/>
                <path class="fil99 str38" d="M13409 5648c0,0 -72,50 -185,79 -113,28 -123,47 -145,68"/>
                <path class="fil99 str45" d="M13409 5648c0,0 -72,50 -185,79 -113,28 -123,47 -145,68"/>
                <path class="fil99 str38" d="M12945 5461c0,0 -54,15 -54,43"/>
                <path class="fil99 str45" d="M12945 5461c0,0 -54,15 -54,43"/>
                <path class="fil99 str38" d="M12840 5416c0,0 -43,28 -102,67"/>
                <path class="fil99 str45" d="M12840 5416c0,0 -43,28 -102,67"/>
                <path class="fil99 str38" d="M12599 5451c0,0 110,-43 153,-56"/>
                <path class="fil99 str48" d="M12599 5451c0,0 110,-43 153,-56"/>
                <path class="fil99 str38" d="M13106 5448c0,0 -35,-14 -35,56"/>
                <path class="fil99 str45" d="M13106 5448c0,0 -35,-14 -35,56"/>
                <path class="fil99 str47" d="M14226 4661c0,0 91,52 121,58"/>
                <path class="fil99 str46" d="M14226 4661c0,0 91,52 121,58"/>
                <path class="fil99 str47" d="M14231 4717c0,0 95,19 112,47"/>
                <path class="fil99 str46" d="M14231 4717c0,0 95,19 112,47"/>
                <path class="fil99 str47" d="M14236 4633c0,0 104,44 129,45"/>
                <path class="fil99 str46" d="M14236 4633c0,0 104,44 129,45"/>
                <path class="fil148" d="M13828 4220c0,0 -29,-52 -16,-108 0,0 48,-12 44,-10 -22,9 -30,99 -28,118z"/>
                <path class="fil148" d="M13828 4220c0,0 -29,-52 -16,-108 0,0 48,-12 44,-10 -22,9 -30,99 -28,118z"/>
                <path class="fil148" d="M13912 4256c0,0 60,-63 106,-115 0,0 -18,29 -18,49 0,20 -88,66 -88,66z"/>
                <path class="fil148" d="M13912 4256c0,0 60,-63 106,-115 0,0 -18,29 -18,49 0,20 -88,66 -88,66z"/>
                <path class="fil148" d="M13891 4233c0,0 2,-102 18,-135 0,0 3,28 14,42 11,13 -30,68 -32,93z"/>
                <path class="fil148" d="M13891 4233c0,0 2,-102 18,-135 0,0 3,28 14,42 11,13 -30,68 -32,93z"/>
                <path class="fil148" d="M13509 4195c0,0 -82,-50 -89,-134 -7,-84 89,134 89,134z"/>
                <path class="fil148" d="M13509 4195c0,0 -82,-50 -89,-134 -7,-84 89,134 89,134z"/>
                <path class="fil148" d="M13404 4212c0,0 -125,-105 -153,-171 0,0 141,134 177,149 36,15 -24,22 -24,22z"/>
                <path class="fil148" d="M13404 4212c0,0 -125,-105 -153,-171 0,0 141,134 177,149 36,15 -24,22 -24,22z"/>
                <path class="fil148" d="M13256 4288c0,0 -146,-10 -186,-68 0,0 16,-17 25,0 9,18 161,68 161,68z"/>
                <path class="fil148" d="M13256 4288c0,0 -146,-10 -186,-68 0,0 16,-17 25,0 9,18 161,68 161,68z"/>
                <path class="fil148" d="M13320 4240c0,0 -125,-49 -135,-89 0,0 110,66 139,72 30,5 8,23 -4,17z"/>
                <path class="fil148" d="M13320 4240c0,0 -125,-49 -135,-89 0,0 110,66 139,72 30,5 8,23 -4,17z"/>
                <line class="fil99 str38" x1="13335" y1="4333" x2="13457" y2= "4315" />
                <line class="fil99 str38" x1="13335" y1="4333" x2="13457" y2= "4315" />
                <line class="fil99 str38" x1="13785" y1="4326" x2="13905" y2= "4359" />
                <line class="fil99 str38" x1="13785" y1="4326" x2="13905" y2= "4359" />
                <path class="fil99 str38" d="M13184 4652c0,0 -103,-38 -121,-59"/>
                <path class="fil99 str38" d="M13184 4652c0,0 -103,-38 -121,-59"/>
                <path class="fil99 str38" d="M12890 4636c0,0 166,8 236,62"/>
                <path class="fil99 str38" d="M12890 4636c0,0 166,8 236,62"/>
                <path class="fil99 str38" d="M12894 4677c0,0 122,74 174,82"/>
                <path class="fil99 str45" d="M12894 4677c0,0 122,74 174,82"/>
                <line class="fil99 str38" x1="12875" y1="4732" x2="12962" y2= "4778" />
                <line class="fil99 str45" x1="12875" y1="4732" x2="12962" y2= "4778" />
                <path class="fil149" d="M13879 7599c-11,0 -40,-1 -56,33 -15,34 -9,56 -2,65 7,8 43,3 57,-25 14,-29 16,-64 1,-73z"/>
                <path class="fil150 str35" d="M14372 5395c0,0 54,-71 43,-135 -12,-63 -76,-69 -91,-71 -128,-20 -258,133 -281,207 -16,52 -28,117 -28,129 0,12 47,7 94,17 46,9 53,17 53,17 0,0 153,-92 210,-164z"/>
                <path class="fil150 str40" d="M14372 5395c0,0 54,-71 43,-135 -12,-63 -76,-69 -91,-71 -128,-20 -258,133 -281,207 -16,52 -28,117 -28,129 0,12 47,7 94,17 46,9 53,17 53,17 0,0 153,-92 210,-164z"/>
                <ellipse class="fil44" cx="13233" cy="4618" rx="195" ry="139"/>
                <path class="fil99 str38" d="M13251 5442c0,0 99,60 145,66"/>
                <path class="fil99 str38" d="M13251 5442c0,0 99,60 145,66"/>
                <path class="fil149" d="M14367 5243c0,0 -95,16 -145,120 -49,104 -29,143 -1,138 28,-5 112,-51 152,-143 39,-92 13,-114 -6,-115z"/>
                <path class="fil151" d="M13665 5150c-5,2 -11,3 -17,2 6,0 12,-1 17,-2zm-302 15l0 0c-6,4 -13,8 -19,13 2,-4 5,-9 8,-13l11 0z"/>
                <path class="fil151" d="M13665 5150c-5,2 -11,3 -17,2 6,0 12,-1 17,-2zm-302 15l0 0c-6,4 -13,8 -19,13 2,-4 5,-9 8,-13l11 0z"/>
                <path class="fil152" d="M14035 4420c11,1 23,4 34,8 60,24 90,92 66,151 -24,60 -92,88 -152,64 -38,-15 -64,-48 -72,-85 12,-9 25,-20 39,-32 0,-7 2,-13 5,-20 5,-14 14,-25 25,-33 2,1 4,1 6,2 3,1 6,3 8,4 15,-17 29,-37 41,-59z"/>
                <path class="fil152" d="M14035 4420c11,1 23,4 34,8 60,24 90,92 66,151 -24,60 -92,88 -152,64 -38,-15 -64,-48 -72,-85 12,-9 25,-20 39,-32 0,-7 2,-13 5,-20 5,-14 14,-25 25,-33 2,1 4,1 6,2 3,1 6,3 8,4 15,-17 29,-37 41,-59z"/>
                <path class="fil152" d="M12890 4075c0,0 -7,101 60,231 23,45 62,93 111,140 -1,-5 -1,-10 -2,-14 -8,-82 34,-127 54,-139 21,-13 71,-27 121,15 51,41 135,66 162,68 27,2 111,27 117,79 6,51 -8,110 -79,149 -19,10 -40,18 -62,23 23,7 47,13 72,18 228,45 369,-26 410,-49 17,-9 55,-33 96,-70 0,-7 2,-13 5,-20 5,-14 14,-25 25,-33 2,1 4,1 6,2 3,1 6,3 8,4 43,-52 79,-121 82,-207 6,-193 -111,-339 -176,-394 -66,-55 -64,-143 -53,-170 11,-28 72,-143 76,-159 3,-15 -3,-97 -65,-127 -61,-30 -122,-11 -125,32 -4,42 22,73 55,86 33,12 74,11 101,8 26,-3 75,-18 83,-24 7,-5 -75,13 -108,9 -33,-5 -107,-21 -106,-59 0,-39 36,-42 56,-34 21,8 96,66 37,139 -59,74 -139,97 -173,105 -33,9 -41,22 -241,-14 -199,-36 -379,90 -415,119 -37,29 -119,122 -132,286z"/>
                <path class="fil152" d="M12890 4075c0,0 -7,101 60,231 23,45 62,93 111,140 56,54 139,120 311,181 23,7 47,13 72,18 228,45 369,-26 410,-49 17,-9 55,-33 96,-70 0,-7 2,-13 5,-20 5,-14 14,-25 25,-33 2,1 4,1 6,2 3,1 6,3 8,4 43,-52 79,-121 82,-207 6,-193 -111,-339 -176,-394 -66,-55 -64,-143 -53,-170 11,-28 72,-143 76,-159 3,-15 -3,-97 -65,-127 -61,-30 -122,-11 -125,32 -4,42 22,73 55,86 33,12 74,11 101,8 26,-3 75,-18 83,-24 7,-5 -75,13 -108,9 -33,-5 -107,-21 -106,-59 0,-39 36,-42 56,-34 21,8 96,66 37,139 -59,74 -139,97 -173,105 -33,9 -41,22 -241,-14 -199,-36 -379,90 -415,119 -37,29 -119,122 -132,286z"/>
                <path class="fil153" d="M13876 3854c7,8 14,16 22,23 79,122 102,266 50,397 -69,171 -248,270 -449,267 14,-28 17,-58 14,-86 -6,-52 -90,-77 -117,-79 -27,-2 -111,-27 -162,-68 -50,-42 -100,-28 -121,-15 -13,8 -35,29 -47,65 -119,-119 -176,-279 -143,-429 31,-75 75,-121 99,-140 36,-29 216,-155 415,-119 47,8 83,14 112,18 3,0 100,13 148,20 15,2 178,146 179,146z"/>
                <path class="fil153" d="M13876 3854c7,8 14,16 22,23 79,122 102,266 50,397 -69,171 -248,270 -449,267 -130,-16 -342,-70 -433,-183 -119,-119 -176,-279 -143,-429 31,-75 75,-121 99,-140 36,-29 216,-155 415,-119 47,8 83,14 112,18 3,0 100,13 148,20 15,2 178,146 179,146z"/>
                <path class="fil99 str3" d="M13994 4424c24,-7 50,-6 75,4 60,24 90,92 66,151 -24,60 -92,88 -152,64 -48,-19 -77,-67 -74,-115"/>
                <path class="fil154" d="M13250 4142c12,-32 33,-53 47,-48 13,6 14,36 1,67 -13,31 -34,53 -47,47 -13,-5 -14,-35 -1,-66z"/>
                <path class="fil154" d="M13472 4234c13,-31 34,-52 47,-47 13,5 14,35 1,67 -12,31 -33,52 -47,47 -13,-5 -14,-35 -1,-67z"/>
                <path class="fil152 str4" d="M12898 3856c18,8 33,20 43,36 -21,41 -40,92 -48,155l-1 1c-22,9 -48,10 -71,0 -50,-20 -74,-79 -52,-132 21,-53 79,-80 129,-60z"/>
                <path class="fil155" d="M13673 4064c15,-39 -5,-83 -44,-98 -13,-6 -27,-7 -41,-5 37,27 66,62 85,103z"/>
                <path class="fil155" d="M13673 4064c15,-39 -5,-83 -44,-98 -13,-6 -27,-7 -41,-5 37,27 66,62 85,103z"/>
                <path class="fil156 str6" d="M13346 4277c31,13 52,34 47,47 -6,14 -35,14 -67,2 -31,-13 -53,-34 -47,-47 5,-14 35,-14 67,-2z"/>
                <path class="fil101" d="M13266 4127c5,3 8,9 6,15 -2,5 -9,8 -14,6 -6,-3 -8,-9 -6,-15 2,-5 8,-8 14,-6z"/>
                <g>
                    <path class="fil154" d="M13250 4142c12,-32 33,-53 47,-48 13,6 14,36 1,67 -13,31 -34,53 -47,47 -13,-5 -14,-35 -1,-66z"/>
                    <path class="fil101" d="M13266 4127c5,3 8,9 6,15 -2,5 -9,8 -14,6 -6,-3 -8,-9 -6,-15 2,-5 8,-8 14,-6z"/>
                </g>
                <path class="fil101" d="M13494 4214c6,3 9,9 7,15 -3,6 -9,8 -15,6 -6,-2 -9,-9 -6,-15 2,-5 8,-8 14,-6z"/>
                <g>
                    <path class="fil154" d="M13472 4234c13,-31 34,-52 47,-47 13,5 14,35 1,67 -12,31 -33,52 -47,47 -13,-5 -14,-35 -1,-67z"/>
                    <path class="fil101" d="M13494 4214c6,3 9,9 7,15 -3,6 -9,8 -15,6 -6,-2 -9,-9 -6,-15 2,-5 8,-8 14,-6z"/>
                </g>
                <path class="fil99 str3" d="M14088 4560c16,-38 -1,-81 -38,-96 -36,-14 -78,5 -94,44 -5,14 -7,29 -4,43"/>
                <path class="fil99 str3" d="M13955 4553c21,8 45,-2 54,-24 9,-21 -2,-45 -23,-54 -2,-1 -4,-1 -6,-2 -11,8 -20,19 -25,33 -6,15 -7,31 -4,45 1,1 3,1 4,2"/>

                <g >
                    <g>
                        <g class="ruka">
                            <path class="fil157 str4" d="M12730 4186c0,0 -18,33 -15,64 3,31 30,72 15,102 -15,29 -48,48 -88,48 -40,0 -60,-20 -85,-43 -26,-22 -30,-27 -62,-27 -31,0 -67,7 -77,-23 -9,-31 14,-41 32,-47 19,-6 30,13 38,16 7,3 39,3 34,-19 -5,-22 -21,-35 -31,-41 -11,-6 -44,-6 -53,-29 -8,-23 7,-45 23,-52 16,-8 34,-18 51,19 16,37 31,47 41,47 11,0 21,-7 21,-25 0,-18 -25,-44 -27,-58 -3,-14 -4,-41 22,-45 26,-5 46,1 46,30 0,24 4,64 33,72 8,2 4,-23 19,-39 31,-32 75,-32 79,11 2,17 -6,28 -16,39z"/>
                            <path class="fil99 str3" d="M12635 4338c-40,-103 25,-131 20,-139 -4,-8 -7,-24 -7,-24 0,0 -133,11 -130,134"/>
                        </g>
                    </g>
                    <g>
                        <path class="fil44 str49" d="M13079 4489c0,0 -131,-28 -208,-77 -77,-48 -85,-57 -92,-64 -7,-7 1,-28 -10,-43 -7,-10 -25,-19 -46,-23 8,24 17,50 7,70 -15,29 -48,48 -88,48 -15,0 -27,-3 -38,-8 0,6 2,12 5,17 26,41 57,32 69,32 11,0 82,101 115,131 34,29 155,130 218,146 1,1 2,1 4,1 8,-12 15,-22 20,-27 9,-9 23,-39 39,-76 -6,-19 -6,-38 1,-55 6,-15 17,-28 31,-37 -9,-10 -19,-22 -27,-35l0 0zm49 25l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm-1 0l0 0 0 0 0 0zm0 1l0 0 -1 0 1 0zm-1 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0z"/>
                        <g>
                            <path class="fil44 str49" d="M13079 4489c0,0 -131,-28 -208,-77 -77,-48 -85,-57 -92,-64 -7,-7 1,-28 -10,-43 -7,-10 -25,-19 -46,-23 8,24 17,50 7,70 -15,29 -48,48 -88,48 -15,0 -27,-3 -38,-8 0,6 2,12 5,17 26,41 57,32 69,32 11,0 82,101 115,131 34,29 155,130 218,146 1,1 2,1 4,1 8,-12 15,-22 20,-27 9,-9 23,-39 39,-76 -6,-19 -6,-38 1,-55 6,-15 17,-28 31,-37 -9,-10 -19,-22 -27,-35l0 0zm49 25l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm-1 0l0 0 0 0 0 0zm0 1l0 0 -1 0 1 0zm-1 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0z"/>
                            <path class="fil99 str2" d="M13079 4489c0,0 -131,-28 -208,-77 -77,-48 -85,-57 -92,-64 -7,-7 1,-28 -10,-43 -7,-10 -25,-19 -46,-23 8,24 17,50 7,70 -15,29 -48,48 -88,48 -15,0 -27,-3 -38,-8 0,6 2,12 5,17 26,41 57,32 69,32 11,0 82,101 115,131 34,29 155,130 218,146 1,1 2,1 4,1 8,-12 15,-22 20,-27 9,-9 23,-39 39,-76 -6,-19 -6,-38 1,-55 6,-15 17,-28 31,-37 -9,-10 -19,-22 -27,-35"/>
                            <path class="fil99 str2" d="M13079 4489c0,0 -131,-28 -208,-77 -77,-48 -85,-57 -92,-64 -7,-7 1,-28 -10,-43 -7,-10 -25,-19 -46,-23 8,24 17,50 7,70 -15,29 -48,48 -88,48 -15,0 -27,-3 -38,-8 0,6 2,12 5,17 26,41 57,32 69,32 11,0 82,101 115,131 34,29 155,130 218,146 1,1 2,1 4,1 8,-12 15,-22 20,-27 9,-9 23,-39 39,-76 -6,-19 -6,-38 1,-55 6,-15 17,-28 31,-37 -9,-10 -19,-22 -27,-35"/>
                            <line class="fil99 str2" x1="13079" y1="4489" x2="13079" y2= "4489" />
                            <line class="fil99 str2" x1="13079" y1="4489" x2="13079" y2= "4489" />
                            <line class="fil99 str2" x1="13128" y1="4514" x2="13128" y2= "4514" />
                            <line class="fil99 str2" x1="13128" y1="4514" x2="13128" y2= "4514" />
                            <line class="fil99 str2" x1="13128" y1="4514" x2="13128" y2= "4514" />
                            <line class="fil99 str2" x1="13128" y1="4514" x2="13128" y2= "4514" />
                            <line class="fil99 str2" x1="13127" y1="4514" x2="13127" y2= "4514" />
                            <line class="fil99 str2" x1="13127" y1="4514" x2="13127" y2= "4514" />
                            <polygon class="fil99 str2" points="13127,4515 13126,4515 "/>
                            <polygon class="fil99 str2" points="13127,4515 13126,4515 "/>
                            <line class="fil99 str2" x1="13126" y1="4515" x2="13126" y2= "4515" />
                            <line class="fil99 str2" x1="13126" y1="4515" x2="13126" y2= "4515" />
                            <line class="fil99 str2" x1="13126" y1="4515" x2="13126" y2= "4515" />
                            <line class="fil99 str2" x1="13126" y1="4515" x2="13126" y2= "4515" />
                            <line class="fil99 str2" x1="13126" y1="4515" x2="13126" y2= "4515" />
                            <line class="fil99 str2" x1="13126" y1="4515" x2="13126" y2= "4515" />
                        </g>
                    </g>
                </g>




                <path class="fil44" d="M13682 4653c0,0 159,144 188,187 28,44 64,113 77,133 13,21 41,60 62,62 21,2 -5,42 -35,62 -29,20 -95,33 -119,21 -23,-13 -15,-29 -25,-46 -10,-17 -106,-94 -140,-118 -34,-23 -44,-29 -52,-32 -8,-4 1,58 17,94 53,120 127,227 19,358 -67,82 -142,118 -203,153 -61,35 -78,57 -118,92 -41,36 -107,40 -146,11 -38,-30 -26,-91 -26,-108 0,-17 4,-33 -18,-37 -23,-4 -206,-27 -255,-50 -87,-38 -244,-15 -333,21 -25,10 -65,-25 -81,-48 -16,-23 -60,-152 -80,-185 -21,-33 -50,-74 -60,-97 -11,-22 -26,-112 25,-136 90,-41 217,14 249,107 8,23 24,68 25,78 1,8 71,-91 136,-83 17,2 42,10 42,10 0,0 14,-105 47,-158 34,-52 129,-223 157,-252 9,-9 23,-39 39,-76 12,36 47,72 95,91 73,29 149,11 169,-40 5,-11 6,-23 5,-36l0 0c10,0 20,-2 29,-4 24,7 47,13 72,18 94,19 174,18 238,8l0 0zm-541 -96l0 0c-1,2 -2,4 -3,6 -14,36 8,79 50,96 40,16 84,3 100,-29 -40,-6 -82,-23 -122,-54 0,0 -11,-7 -25,-19z"/>
                <path class="fil99 str50" d="M13638 4922c0,0 -59,-32 -75,-40"/>
                <path class="fil99 str50" d="M13638 4922c0,0 -59,-32 -75,-40"/>
                <path class="fil99 str2" d="M13437 5431c0,0 17,-174 -67,-259 -84,-84 -152,-46 -172,-36 -19,10 -80,55 -69,134 11,79 41,90 48,133 7,43 4,87 4,103"/>
                <path class="fil99 str2" d="M13172 5265c0,0 37,-84 117,-55 79,30 86,95 88,137 2,43 -6,144 -21,190"/>
                <path class="fil99 str2" d="M12831 5102c-9,8 -16,248 219,366"/>
                <path class="fil99 str2" d="M12662 5304c3,-33 -9,-129 -9,-129 0,0 40,78 42,99"/>
                <path class="fil99 str2" d="M12368 5109c0,0 -5,-77 75,-62 80,16 154,136 148,302"/>
                <path class="fil99 str2" d="M12660 5189c0,0 15,31 17,35 1,3 63,-48 88,-50 24,-1 66,-5 66,-5 0,0 -7,-52 -2,-62 5,-10 -82,-12 -114,24 -32,35 -55,58 -55,58"/>
                <path class="fil45 str0" d="M12646 5257c0,0 -51,-128 -86,-162 -34,-34 -80,-68 -116,-76 -35,-7 -74,14 -79,46 -5,32 -8,34 -8,38 0,3 -22,-68 17,-94 38,-26 76,-47 172,3 96,49 108,195 100,245z"/>
                <path class="fil99 str2" d="M12845 5031c0,1 -7,67 26,92 34,26 101,52 186,46 32,-2 72,-5 113,-12 16,-15 58,-49 116,-36 28,-14 53,-33 71,-58 65,-88 82,-221 85,-257 1,-6 0,-14 -2,-23 -8,3 -16,6 -24,9 -90,30 -182,-1 -204,-69 -1,-1 -1,-3 -2,-4 15,2 -34,-9 -41,-12 4,1 7,3 11,4 -10,3 -21,4 -33,4 -40,0 -75,-19 -94,-48 -2,3 -4,5 -6,7 -5,9 -9,15 -12,18 -28,29 -123,200 -157,252 -15,24 -26,57 -33,87"/>
                <path class="fil99 str2" d="M12845 5031c0,1 -7,67 26,92 34,26 101,52 186,46 32,-2 72,-5 113,-12 16,-15 58,-49 116,-36 28,-14 53,-33 71,-58 65,-88 82,-221 85,-257 1,-6 0,-14 -2,-23 -8,3 -16,6 -24,9 -90,30 -182,-1 -204,-69 -1,-1 -1,-3 -2,-4 15,2 -34,-9 -41,-12 4,1 7,3 11,4 -10,3 -21,4 -33,4 -40,0 -75,-19 -94,-48 -2,3 -4,5 -6,7 -5,9 -9,15 -12,18 -28,29 -123,200 -157,252 -15,24 -26,57 -33,87"/>
                <path class="fil99 str2" d="M13146 4696c-1,-1 -2,-1 -3,-2"/>
                <path class="fil99 str2" d="M13146 4696c-1,-1 -2,-1 -3,-2"/>
                <path class="fil99 str2" d="M13103 4663c-1,-1 -1,-2 -2,-2 1,0 1,1 2,2"/>
                <path class="fil99 str2" d="M13103 4663c-1,-1 -1,-2 -2,-2 1,0 1,1 2,2"/>
                <path class="fil99 str2" d="M13101 4660c-1,0 -2,-1 -2,-2 0,1 1,2 2,2"/>
                <path class="fil99 str2" d="M13101 4660c-1,0 -2,-1 -2,-2 0,1 1,2 2,2"/>
                <path class="fil99 str2" d="M13099 4658c-1,-1 -2,-1 -2,-2 0,1 1,1 2,2"/>
                <path class="fil99 str2" d="M13099 4658c-1,-1 -2,-1 -2,-2 0,1 1,1 2,2"/>
                <path class="fil99 str2" d="M13096 4655c0,0 -1,-1 -1,-2 0,1 1,2 1,2"/>
                <path class="fil99 str2" d="M13096 4655c0,0 -1,-1 -1,-2 0,1 1,2 1,2"/>
                <path class="fil99 str2" d="M13095 4653c-1,-1 -2,-2 -2,-2 0,0 1,1 2,2"/>
                <path class="fil99 str2" d="M13095 4653c-1,-1 -2,-2 -2,-2 0,0 1,1 2,2"/>
                <path class="fil99 str2" d="M13093 4651c-4,-5 -7,-9 -9,-14"/>
                <path class="fil99 str2" d="M13093 4651c-4,-5 -7,-9 -9,-14"/>
                <line class="fil99 str2" x1="13084" y1="4637" x2="13084" y2= "4637" />
                <line class="fil99 str2" x1="13084" y1="4637" x2="13084" y2= "4637" />
                <path class="fil99 str2" d="M13084 4637c2,5 5,9 9,14"/>
                <path class="fil99 str2" d="M13084 4637c2,5 5,9 9,14"/>
                <path class="fil158 str17" d="M12936 5073c11,0 20,-9 20,-20 0,-11 -9,-21 -20,-21 -11,0 -21,10 -21,21 0,11 10,20 21,20z"/>
                <path class="fil158 str17" d="M12936 5073c11,0 20,-9 20,-20 0,-11 -9,-21 -20,-21 -11,0 -21,10 -21,21 0,11 10,20 21,20z"/>
                <path class="fil158 str0" d="M12918 5241c9,0 16,-7 16,-16 0,-9 -7,-16 -16,-16 -9,0 -16,7 -16,16 0,9 7,16 16,16z"/>
                <path class="fil158 str17" d="M12968 5387c7,0 13,-6 13,-14 0,-7 -6,-13 -13,-13 -8,0 -14,6 -14,13 0,8 6,14 14,14z"/>
                <path class="fil158 str17" d="M12968 5387c7,0 13,-6 13,-14 0,-7 -6,-13 -13,-13 -8,0 -14,6 -14,13 0,8 6,14 14,14z"/>
                <path class="fil158 str17" d="M13006 4913c10,0 19,-8 19,-19 0,-10 -9,-19 -19,-19 -10,0 -19,9 -19,19 0,11 9,19 19,19z"/>
                <path class="fil158 str17" d="M13006 4913c10,0 19,-8 19,-19 0,-10 -9,-19 -19,-19 -10,0 -19,9 -19,19 0,11 9,19 19,19z"/>
                <path class="fil158 str0" d="M13098 4766c11,0 21,-10 21,-21 0,-11 -10,-20 -21,-20 -11,0 -20,9 -20,20 0,11 9,21 20,21z"/>
                <path class="fil159 str0" d="M13180 4711c-10,3 -21,4 -33,4 -60,0 -108,-43 -108,-96 0,-34 20,-64 50,-81 -6,7 -11,15 -14,23 -21,51 21,117 94,146 4,1 7,3 11,4z"/>
                <path class="fil159 str0" d="M13479 4651c4,1 7,1 11,2 -4,-1 -7,-1 -11,-2zm11 2l0 0c18,2 35,4 52,5 -6,56 -55,110 -126,134 -90,30 -182,-1 -204,-69 -1,-1 -1,-3 -2,-4 9,1 17,2 25,2 8,16 19,28 34,32 52,17 116,31 267,-95 -15,-1 -30,-3 -46,-5z"/>
                <path class="fil99 str50" d="M13829 5069c0,0 39,48 117,9"/>
                <path class="fil99 str50" d="M13829 5069c0,0 39,48 117,9"/>
                <path class="fil99 str2" d="M12681 4442c0,0 33,-12 39,-23"/>
                <path class="fil45 str0" d="M12779 4348c0,0 63,123 166,177 104,54 110,43 110,43l0 0c9,-12 21,-22 34,-30 -1,1 -1,2 -2,3 7,-8 16,-15 26,-21 -2,2 26,-12 24,-11 -13,-9 -9,-6 -23,-17 -5,-1 -44,-6 -47,-6 -11,-3 -171,-35 -288,-138zm336 172l0 0c1,-1 2,-1 4,-2 -2,1 -3,1 -4,2zm4 -2l0 0c1,-1 2,-1 3,-2 -1,1 -2,1 -3,2zm4 -2l0 0 2 -1c-1,1 -1,1 -2,1zm-48 45l0 0c3,-8 7,-14 12,-20 -5,6 -9,12 -12,20l0 0z"/>
                <path class="fil45 str0" d="M13738 4705c0,0 114,158 139,222 24,64 49,169 46,190 20,-5 39,-12 51,-20 30,-20 56,-60 35,-62 -21,-2 -49,-41 -62,-62 -13,-20 -49,-89 -77,-133 -18,-26 -83,-89 -132,-135z"/>
                <path class="fil157 str0" d="M14010 5060c0,0 66,35 77,51 10,15 47,58 32,111 -15,54 -111,94 -138,100 -28,7 -91,-30 -128,-102 -17,-35 4,-70 32,-98 12,0 26,-2 39,-5l1 0 0 0 2 -1 0 0 2 0 0 0 1 -1 0 0 1 0 1 0c1,0 2,-1 3,-1l1 0 0 0 1 -1 0 0 1 0 0 0 1 0 0 0 1 -1 1 0 0 0 1 0 0 0 1 -1 1 0 1 0 1 0 0 -1 1 0 1 0 1 -1 1 0 1 0 0 0 0 0 1 -1 1 0 1 -1 1 0 1 0 1 -1 1 0 0 0 2 -1 0 0 2 -1 0 0 0 0c0,0 1,-1 1,-1l1 0c0,0 1,0 1,-1l0 0 0 0 2 0 0 -1 0 0c0,0 1,0 1,0l0 0c1,-1 1,-1 2,-1l0 0c1,-1 1,-1 1,-1l1 0c0,-1 0,-1 1,-1l0 0c0,0 1,-1 1,-1 1,0 1,-1 2,-1l0 0c0,0 1,-1 1,-1l0 0 0 0 0 0 1 -1 0 0c1,0 1,-1 2,-1l0 0 0 0c0,0 1,-1 1,-1l0 0 0 0c1,-1 2,-1 3,-2l0 0 0 0c1,-1 2,-2 2,-2l0 0 1 0 1 -1 0 0 0 -1 1 -1 0 0 0 0 1 -1 0 0 0 0 1 -1 1 0 1 -1 0 0 0 0 1 -1 0 -1 1 0 0 -1 0 0 1 -1 0 0 0 0 1 -1 1 0 0 -1 0 0 0 0 1 -1 0 0 1 -1 0 0 0 -1 0 0 1 0 0 0 0 -1 1 0 0 -1 0 0 1 0 0 -1 0 0 1 -1 0 0 0 -1 1 0 0 0 0 -1 1 0 0 -1 0 0 1 -1 0 0 0 0 0 0 0 -1 1 0 0 -1 0 0 0 0 0 0 1 -1 0 0 0 0 0 0 0 -1 0 0 1 -1 0 0 0 0 0 0z"/>
                <path class="fil99 str2" d="M13908 5199c0,0 59,4 45,73"/>
                <path class="fil99 str2" d="M14011 5312c0,0 19,-43 15,-74"/>
                <path class="fil99 str2" d="M14082 5271c0,0 13,-30 11,-56"/>
                <path class="fil45 str0" d="M13571 5168c0,0 -76,-1 -105,43 -29,44 -28,65 -32,78 -3,14 -5,-34 -12,-51 -8,-17 -22,-41 -26,-46 -4,-5 83,-104 175,-24z"/>
                <path class="fil1 str37" d="M14204 4931c0,0 -71,88 -208,134 -138,46 -305,107 -617,101 -311,-6 -985,-37 -1150,-49 -164,-12 -590,-43 -682,-59 -91,-17 -122,-67 -123,-74 -1,-7 -30,-122 17,-148 47,-26 382,-69 451,-76 69,-8 375,2 427,2 53,0 216,-6 284,-8 68,-2 98,13 189,17 91,5 826,27 826,27 0,0 336,37 379,44 43,7 117,-1 155,7 37,8 87,40 52,82z"/>
                <path class="fil160" d="M14204 4931c0,0 -71,88 -208,134 -138,46 -305,107 -617,101 -311,-6 -985,-37 -1150,-49 -164,-12 -590,-43 -682,-59 -91,-17 -122,-67 -123,-74 -1,-7 -30,-122 17,-148 47,-26 382,-69 451,-76 69,-8 375,2 427,2 53,0 216,-6 284,-8 68,-2 98,13 189,17 91,5 826,27 826,27 0,0 336,37 379,44 43,7 117,-1 155,7 37,8 87,40 52,82z"/>
                <path class="fil99 str38" d="M11419 4962c0,0 96,41 279,51 182,11 703,63 762,64 60,1 769,43 896,42 127,-2 423,-19 621,-72"/>
                <path class="fil99 str51" d="M11419 4962c0,0 96,41 279,51 182,11 703,63 762,64 60,1 769,43 896,42 127,-2 423,-19 621,-72"/>
                <path class="fil99 str38" d="M14074 4845c0,0 -132,66 -323,79 -191,14 -683,26 -1005,11 -322,-15 -900,-39 -1072,-62"/>
                <path class="fil99 str51" d="M14074 4845c0,0 -132,66 -323,79 -191,14 -683,26 -1005,11 -322,-15 -900,-39 -1072,-62"/>
                <path class="fil99 str38" d="M11730 4829c0,0 71,-31 283,-31 213,0 288,9 359,3"/>
                <path class="fil99 str51" d="M11730 4829c0,0 71,-31 283,-31 213,0 288,9 359,3"/>
                <path class="fil161 str37" d="M12989 5153c-14,27 -41,79 -54,130 -19,71 -49,193 -10,204 25,7 246,11 251,4 16,-25 -6,-98 -4,-102 4,-6 -43,-76 -42,-139 0,-18 8,-43 16,-58 10,-18 22,-25 21,-32 -66,-2 -104,-4 -178,-7z"/>
                <path class="fil162 str7" d="M13563 3689c12,11 29,22 39,24 19,3 60,9 66,25 6,16 32,22 53,21 21,0 21,19 44,27 23,8 18,-8 30,5 11,13 29,34 43,35 11,1 9,14 39,27 -42,-54 -38,-123 -29,-146 11,-27 72,-143 75,-158 4,-16 -3,-97 -64,-127 -61,-31 -122,-11 -126,31 -3,43 23,74 55,86 33,13 75,11 101,8 27,-3 75,-17 83,-23 8,-6 -74,12 -107,8 -34,-4 -107,-21 -107,-59 0,-38 36,-42 57,-34 20,9 95,67 36,140 -58,73 -138,96 -172,105 -24,6 -35,15 -116,5z"/>
                <path class="fil99 str8" d="M13846 3858c0,0 -45,-94 -2,-191 43,-97 85,-118 41,-191 -44,-72 -112,-52 -116,-48"/>
                <path class="fil99 str8" d="M13621 3749c0,0 105,20 249,-150"/>
                <path class="fil99 str8" d="M13621 3749c0,0 105,20 249,-150"/>
                <path class="fil99 str8" d="M13691 3781c0,0 65,-5 159,-128"/>
                <path class="fil99 str8" d="M13798 3858c0,0 -37,-75 52,-205"/>
                <g>
                    <path class="fil44 str10" d="M13434 3489c0,0 -38,85 -62,94 -24,9 220,148 348,136 35,-3 55,-5 67,-8 -12,-8 -23,-17 -27,-28 -39,-30 -107,-83 -119,-89 -16,-7 -56,10 -207,-105z"/>
                    <g>
                        <path class="fil44 str10" d="M13434 3489c0,0 -38,85 -62,94 -24,9 220,148 348,136 35,-3 55,-5 67,-8 -12,-8 -23,-17 -27,-28 -39,-30 -107,-83 -119,-89 -16,-7 -56,10 -207,-105z"/>
                        <path class="fil44 str10" d="M13841 3745c1,0 23,45 44,60 22,15 65,148 42,201 -23,53 -96,160 -113,168 -17,8 133,-24 150,-200 16,-177 -1,-169 -114,-261 -2,3 -4,5 -6,7 -2,7 -2,16 -3,25z"/>
                        <path class="fil44 str10" d="M13841 3745c1,0 23,45 44,60 22,15 65,148 42,201 -23,53 -96,160 -113,168 -17,8 133,-24 150,-200 16,-177 -1,-169 -114,-261 -2,3 -4,5 -6,7 -2,7 -2,16 -3,25z"/>
                        <path class="fil45 str10" d="M13858 3690c17,-4 93,-20 131,-9 42,14 98,55 98,67 0,13 -43,104 -66,115 -11,6 -33,-6 -56,-23 -10,-50 -43,-68 -115,-127 3,-3 5,-7 6,-10 1,-3 2,-7 2,-13z"/>
                        <path class="fil45 str10" d="M13858 3690c17,-4 93,-20 131,-9 42,14 98,55 98,67 0,13 -43,104 -66,115 -11,6 -33,-6 -56,-23 -10,-50 -43,-68 -115,-127 3,-3 5,-7 6,-10 1,-3 2,-7 2,-13z"/>
                        <path class="fil45 str10" d="M13641 3594c0,0 -59,-47 -48,-92 11,-44 49,-53 90,-13 40,41 92,108 99,134 0,1 1,2 1,3 -4,2 -6,3 -6,3 -14,16 -20,29 -20,40 -4,2 -8,2 -12,2 -21,-16 -46,-35 -66,-50 -9,-8 -19,-16 -31,-22 -3,-2 -5,-4 -7,-5zm60 -31l0 0c-6,-20 -30,-53 -48,-60 -18,-6 -27,3 -13,20 14,17 61,40 61,40z"/>
                        <path class="fil45 str10" d="M13641 3594c0,0 -59,-47 -48,-92 11,-44 49,-53 90,-13 40,41 92,108 99,134 0,1 1,2 1,3 -4,2 -6,3 -6,3 -14,16 -20,29 -20,40 -4,2 -8,2 -12,2 -21,-16 -46,-35 -66,-50 -9,-8 -19,-16 -31,-22 -3,-2 -5,-4 -7,-5zm60 -31l0 0c-6,-20 -30,-53 -48,-60 -18,-6 -27,3 -13,20 14,17 61,40 61,40z"/>
                        <path class="fil44 str10" d="M13777 3629c0,0 22,-15 52,8 31,23 32,56 27,66 -5,11 -21,39 -55,18 -34,-22 -66,-45 -24,-92z"/>
                        <path class="fil44 str10" d="M13777 3629c0,0 22,-15 52,8 31,23 32,56 27,66 -5,11 -21,39 -55,18 -34,-22 -66,-45 -24,-92z"/>
                    </g>
                </g>
                <path class="fil155" d="M13348 3906c-8,-18 -39,-25 -71,-16 -31,8 -52,28 -53,47 15,-10 34,-20 55,-25 24,-7 48,-9 69,-6z"/>
                <path class="fil155" d="M13348 3906c-8,-18 -39,-25 -71,-16 -31,8 -52,28 -53,47 15,-10 34,-20 55,-25 24,-7 48,-9 69,-6z"/>
                <path class="fil139 str40" d="M13739 5121l-125 537 157 6 120 -590c-44,15 -93,30 -150,43l-2 4z"/>
                <g>
                    <g id="_1705993532000">
                        <path class="fil99 str52" d="M2595 1225c392,0 710,318 710,711 0,392 -318,710 -710,710 -393,0 -711,-318 -711,-710 0,-393 318,-711 711,-711z"/>
                        <path class="fil163" d="M2584 1946c1,2 3,3 5,3 2,1 4,2 6,2 2,0 4,-1 5,-2 2,0 4,-1 5,-3 2,-1 3,-3 4,-5 0,-1 1,-3 1,-5 0,-4 -2,-8 -5,-11 0,-1 -1,-1 -2,-2 -1,0 -2,-1 -3,-1 -1,-1 -1,-1 -2,-1 -5,-1 -10,1 -14,4 -3,3 -4,7 -4,11 0,2 0,4 1,5 1,2 2,4 3,5z"/>
                        <path class="fil163" d="M2584 1946c1,2 3,3 5,3 2,1 4,2 6,2 2,0 4,-1 5,-2 2,0 4,-1 5,-3 2,-1 3,-3 4,-5 0,-1 1,-3 1,-5 0,-4 -2,-8 -5,-11 0,-1 -1,-1 -2,-2 -1,0 -2,-1 -3,-1 -1,-1 -1,-1 -2,-1 -5,-1 -10,1 -14,4 -3,3 -4,7 -4,11 0,2 0,4 1,5 1,2 2,4 3,5z"/>
                        <g>
                            <path class="fil163" d="M2186 2045c2,22 13,42 30,54 66,47 203,127 380,127 177,0 313,-80 379,-127 17,-12 29,-32 30,-54 2,-22 -5,-43 -21,-59 -20,-21 -51,-27 -78,-18 -2,-9 -6,-22 -12,-36 2,0 3,1 5,1 6,0 11,-1 17,-3 38,-10 60,-54 61,-56 2,-5 2,-11 -1,-15 -3,-5 -8,-7 -14,-7 -40,3 -55,-19 -78,-54 -16,-24 -34,-51 -65,-73 -51,-34 -97,-23 -125,-5 -8,-14 -23,-22 -40,-22l-78 0c22,-52 34,-164 -9,-242 -4,-7 -8,-14 -13,-20 0,0 0,-1 -1,-1 0,0 0,0 0,0 -29,-37 -70,-57 -122,-57 -192,0 -209,165 -209,167 -1,4 1,8 4,11 2,3 6,5 11,5l40 0c-6,36 -5,76 3,122 9,52 45,72 76,73 1,0 3,0 4,0 9,0 18,-1 27,-4 -5,10 -12,20 -19,30 -62,90 -81,153 -86,185 -26,-8 -55,-1 -75,19 -15,16 -23,37 -21,59l0 0zm358 -349l0 0c-1,0 -1,1 -1,2l-8 0c-26,0 -47,21 -47,46 0,25 19,45 43,47l12 104c-93,22 -149,96 -168,126 -26,-14 -48,-27 -65,-39 2,-20 14,-83 83,-183 94,-135 31,-218 28,-222 -5,-6 -14,-7 -21,-2 -6,5 -8,14 -2,21 1,2 25,35 13,94 0,0 0,0 -1,1 -5,21 -28,37 -53,35 -12,0 -40,-6 -48,-48 -5,-32 -11,-79 1,-129 1,-4 0,-9 -3,-12 -3,-4 -7,-6 -12,-6l-41 0c9,-35 42,-116 162,-123l0 37c0,8 7,15 15,15 8,0 15,-7 15,-15l0 -36c30,3 55,14 75,34l-36 29c-6,5 -7,15 -2,21 3,4 8,6 12,6 3,0 7,-2 9,-4l35 -28c0,1 1,2 2,3 11,21 18,44 22,68l-45 0c-8,0 -15,7 -15,15 0,9 7,15 15,15l48 0c3,54 -9,106 -22,128zm240 340l0 0c-52,22 -116,40 -188,40 -75,0 -141,-19 -194,-42 22,-33 89,-115 194,-115 108,0 169,87 188,117zm-172 -146l0 0c-5,-1 -11,-1 -16,-1 -8,0 -16,0 -24,1l-11 -99 65 0 -14 99 0 0zm59 -146l0 0c0,10 -7,17 -17,17l-119 0c-10,0 -17,-7 -17,-17 0,-9 7,-17 17,-17l119 0c10,0 17,8 17,17zm26 19l0 0c127,39 172,183 182,221 -17,12 -40,26 -68,40 -16,-29 -71,-110 -169,-130l15 -103c18,-1 33,-12 40,-28zm182 134l0 0c-3,-8 -7,-15 -11,-22 -37,-67 -88,-113 -147,-136 18,-8 47,-12 81,11 27,18 42,42 57,65 20,29 39,58 77,66 -7,9 -17,17 -28,20 -9,3 -19,1 -29,-4l0 0zm-663 146l0 0c-2,-13 3,-26 12,-36 16,-16 41,-18 58,-5 21,15 50,33 87,51 0,0 0,0 0,0 1,1 1,1 1,1 59,28 134,52 222,52 143,0 255,-65 309,-104 8,-5 17,-8 26,-8 11,0 23,4 32,13 9,10 14,23 13,36 -2,13 -8,24 -19,32 -62,45 -193,121 -361,121 -169,0 -299,-76 -362,-121 -11,-8 -17,-19 -18,-32z"/>
                            <g>
                                <path class="fil163" d="M2277 2269c8,-5 17,-6 24,0 7,5 9,14 6,23l-31 96c-1,3 -2,5 -3,6 -4,6 -12,6 -17,2 -6,-4 -6,-10 -4,-15l6 -16 -39 -30 -14 10c-5,3 -10,4 -16,-1 -6,-4 -7,-12 -3,-18 2,-2 4,-3 5,-3l86 -54zm-37 51l0 0 26 21 18 -51 0 0 -44 30 0 0z"/>
                                <path class="fil163" d="M2277 2269c8,-5 17,-6 24,0 7,5 9,14 6,23l-31 96c-1,3 -2,5 -3,6 -4,6 -12,6 -17,2 -6,-4 -6,-10 -4,-15l6 -16 -39 -30 -14 10c-5,3 -10,4 -16,-1 -6,-4 -7,-12 -3,-18 2,-2 4,-3 5,-3l86 -54zm-37 51l0 0 26 21 18 -51 0 0 -44 30 0 0z"/>
                                <path class="fil163" d="M2323 2342c3,-8 11,-11 17,-7 6,3 8,8 7,13 7,-4 15,-4 26,2 18,8 26,26 16,46l-21 43c-4,8 -11,10 -18,7 -6,-3 -9,-10 -5,-18l19 -40c6,-10 1,-19 -7,-23 -9,-4 -18,0 -22,9l-19 40c-4,7 -11,10 -18,7 -7,-4 -9,-11 -5,-19l30 -60 0 0z"/>
                                <path class="fil163" d="M2323 2342c3,-8 11,-11 17,-7 6,3 8,8 7,13 7,-4 15,-4 26,2 18,8 26,26 16,46l-21 43c-4,8 -11,10 -18,7 -6,-3 -9,-10 -5,-18l19 -40c6,-10 1,-19 -7,-23 -9,-4 -18,0 -22,9l-19 40c-4,7 -11,10 -18,7 -7,-4 -9,-11 -5,-19l30 -60 0 0z"/>
                                <path class="fil163" d="M2421 2344c3,-8 9,-12 16,-10 7,2 11,8 9,17l-9 33 0 0c7,-5 17,-5 25,-2 19,5 30,21 24,42l-12 46c-3,9 -9,13 -16,11 -7,-2 -11,-9 -9,-17l12 -43c3,-11 -3,-19 -12,-21 -10,-3 -17,3 -20,13l-11 42c-3,8 -9,12 -16,11 -7,-2 -11,-9 -9,-17l28 -105 0 0z"/>
                                <path class="fil163" d="M2421 2344c3,-8 9,-12 16,-10 7,2 11,8 9,17l-9 33 0 0c7,-5 17,-5 25,-2 19,5 30,21 24,42l-12 46c-3,9 -9,13 -16,11 -7,-2 -11,-9 -9,-17l12 -43c3,-11 -3,-19 -12,-21 -10,-3 -17,3 -20,13l-11 42c-3,8 -9,12 -16,11 -7,-2 -11,-9 -9,-17l28 -105 0 0z"/>
                                <path class="fil163" d="M2522 2451c1,13 11,19 23,20 13,1 23,-8 29,-8 6,1 10,6 10,12 -1,11 -24,19 -43,18 -29,-2 -46,-24 -44,-52 2,-26 23,-48 49,-46 28,2 44,29 42,50 0,7 -4,11 -12,10l-54 -4 0 0zm41 -14l0 0c0,-11 -7,-20 -18,-21 -12,0 -20,8 -22,18l40 3 0 0z"/>
                                <path class="fil163" d="M2522 2451c1,13 11,19 23,20 13,1 23,-8 29,-8 6,1 10,6 10,12 -1,11 -24,19 -43,18 -29,-2 -46,-24 -44,-52 2,-26 23,-48 49,-46 28,2 44,29 42,50 0,7 -4,11 -12,10l-54 -4 0 0zm41 -14l0 0c0,-11 -7,-20 -18,-21 -12,0 -20,8 -22,18l40 3 0 0z"/>
                                <path class="fil163" d="M2597 2371c-1,-8 4,-14 12,-15 7,0 13,5 13,14l6 108c0,9 -5,14 -12,15 -8,0 -13,-5 -14,-14l-5 -108z"/>
                                <path class="fil163" d="M2597 2371c-1,-8 4,-14 12,-15 7,0 13,5 13,14l6 108c0,9 -5,14 -12,15 -8,0 -13,-5 -14,-14l-5 -108z"/>
                                <path class="fil163" d="M2676 2373c-2,-7 1,-14 9,-16 7,-3 14,1 16,8l11 37 29 -57c1,-2 3,-6 8,-7 6,-2 14,1 16,8 1,5 0,9 -4,16l-23 41 51 29c5,3 9,6 11,11 2,8 -3,13 -10,15 -5,2 -9,0 -15,-4l-58 -34 13 43c2,6 -1,14 -9,16 -7,2 -14,-1 -16,-9l-29 -97z"/>
                                <path class="fil163" d="M2676 2373c-2,-7 1,-14 9,-16 7,-3 14,1 16,8l11 37 29 -57c1,-2 3,-6 8,-7 6,-2 14,1 16,8 1,5 0,9 -4,16l-23 41 51 29c5,3 9,6 11,11 2,8 -3,13 -10,15 -5,2 -9,0 -15,-4l-58 -34 13 43c2,6 -1,14 -9,16 -7,2 -14,-1 -16,-9l-29 -97z"/>
                                <path class="fil163" d="M2794 2325c4,7 1,16 -6,19 -7,3 -16,0 -19,-7 -3,-7 0,-15 7,-19 7,-3 15,0 18,7zm-8 46l0 0c-4,-8 -1,-15 6,-18 6,-3 13,0 17,7l28 62c4,8 1,15 -6,18 -6,3 -13,0 -17,-8l-28 -61z"/>
                                <path class="fil163" d="M2794 2325c4,7 1,16 -6,19 -7,3 -16,0 -19,-7 -3,-7 0,-15 7,-19 7,-3 15,0 18,7zm-8 46l0 0c-4,-8 -1,-15 6,-18 6,-3 13,0 17,7l28 62c4,8 1,15 -6,18 -6,3 -13,0 -17,-8l-28 -61z"/>
                                <path class="fil163" d="M2931 2366c5,7 3,15 -3,19 -6,4 -11,3 -16,-2 0,9 -6,17 -14,22 -21,14 -47,2 -60,-18 -14,-21 -16,-49 7,-64 8,-5 17,-7 25,-6l-18 -29c-5,-7 -3,-14 3,-18 6,-4 14,-2 18,5l58 91zm-70 -26l0 0c-11,7 -9,23 -2,33 6,10 19,18 30,11 12,-8 9,-23 2,-33 -6,-11 -18,-18 -30,-11z"/>
                                <path class="fil163" d="M2931 2366c5,7 3,15 -3,19 -6,4 -11,3 -16,-2 0,9 -6,17 -14,22 -21,14 -47,2 -60,-18 -14,-21 -16,-49 7,-64 8,-5 17,-7 25,-6l-18 -29c-5,-7 -3,-14 3,-18 6,-4 14,-2 18,5l58 91zm-70 -26l0 0c-11,7 -9,23 -2,33 6,10 19,18 30,11 12,-8 9,-23 2,-33 -6,-11 -18,-18 -30,-11z"/>
                                <path class="fil163" d="M2955 2275c-4,3 -16,4 -22,9 -3,4 -5,8 -2,11 8,9 40,-22 59,0 11,12 9,31 -7,46 -10,10 -31,18 -39,9 -3,-3 -5,-11 1,-15 7,-7 16,-4 25,-12 5,-5 6,-8 2,-12 -7,-8 -39,23 -58,1 -12,-13 -10,-31 5,-45 9,-8 28,-17 36,-8 4,5 4,12 0,16z"/>
                                <path class="fil163" d="M2955 2275c-4,3 -16,4 -22,9 -3,4 -5,8 -2,11 8,9 40,-22 59,0 11,12 9,31 -7,46 -10,10 -31,18 -39,9 -3,-3 -5,-11 1,-15 7,-7 16,-4 25,-12 5,-5 6,-8 2,-12 -7,-8 -39,23 -58,1 -12,-13 -10,-31 5,-45 9,-8 28,-17 36,-8 4,5 4,12 0,16z"/>
                            </g>
                        </g>
                        <path class="fil164" d="M2137 1254l65 -38c7,-3 9,-12 5,-18l0 0c-4,-7 -12,-9 -19,-5l-65 37c-6,4 -9,12 -5,19l0 0c4,7 12,9 19,5z"/>
                        <path class="fil164" d="M1976 1396l53 -53c6,-6 6,-15 0,-20l0 0c-5,-5 -14,-5 -19,0l-53 53c-6,6 -6,14 0,20l0 0c5,5 14,5 19,0z"/>
                        <path class="fil164" d="M1857 1574l38 -65c4,-6 2,-15 -5,-19l0 0c-7,-3 -15,-1 -19,5l-37 66c-4,6 -2,14 5,18l0 0c6,4 15,2 18,-5z"/>
                        <path class="fil164" d="M1789 1777l19 -72c2,-8 -2,-15 -9,-17l0 0c-8,-2 -15,2 -17,10l-20 72c-2,8 3,15 10,17l0 0c7,2 15,-2 17,-10z"/>
                        <path class="fil164" d="M1775 1991l0 -75c0,-7 -6,-14 -13,-14l0 0c-8,0 -14,7 -14,14l0 75c0,8 6,14 14,14l0 0c7,0 13,-6 13,-14z"/>
                        <path class="fil164" d="M1818 2201l-20 -72c-2,-8 -9,-12 -17,-10l0 0c-7,2 -11,10 -9,17l19 73c2,7 10,11 17,9l0 0c7,-2 12,-9 10,-17z"/>
                        <path class="fil164" d="M1913 2393l-38 -65c-3,-6 -12,-9 -18,-5l0 0c-7,4 -9,12 -5,19l37 65c4,7 12,9 19,5l0 0c7,-4 9,-12 5,-19z"/>
                        <path class="fil164" d="M2055 2554l-53 -53c-6,-5 -15,-5 -20,0l0 0c-5,5 -5,14 0,19l53 54c6,5 14,5 20,0l0 0c5,-6 5,-14 0,-20z"/>
                        <path class="fil164" d="M2233 2673l-65 -38c-6,-3 -15,-1 -19,5l0 0c-3,7 -1,15 5,19l66 38c6,4 14,1 18,-5l0 0c4,-7 2,-15 -5,-19z"/>
                        <path class="fil164" d="M2436 2741l-72 -19c-8,-2 -15,2 -17,10l0 0c-2,7 2,14 10,16l72 20c8,2 15,-3 17,-10l0 0c2,-7 -2,-15 -10,-17z"/>
                        <path class="fil164" d="M2650 2755l-75 0c-7,0 -14,6 -14,14l0 0c0,7 7,13 14,13l75 0c8,0 14,-6 14,-13l0 0c0,-8 -6,-14 -14,-14z"/>
                        <path class="fil164" d="M2860 2713l-72 19c-8,2 -12,10 -10,17l0 0c2,7 10,12 17,10l73 -20c7,-2 11,-9 9,-17l0 0c-2,-7 -9,-11 -17,-9z"/>
                        <path class="fil164" d="M3052 2617l-65 38c-6,4 -9,12 -5,19l0 0c4,6 12,8 19,5l65 -38c7,-4 9,-12 5,-19l0 0c-4,-6 -12,-8 -19,-5z"/>
                        <path class="fil164" d="M3213 2476l-53 53c-5,5 -5,14 0,19l0 0c5,6 14,6 19,0l54 -53c5,-5 5,-14 0,-19l0 0c-6,-6 -14,-6 -20,0z"/>
                        <path class="fil164" d="M3332 2297l-38 65c-3,7 -1,15 5,19l0 0c7,4 15,2 19,-5l38 -65c4,-7 1,-15 -5,-19l0 0c-7,-4 -15,-1 -19,5z"/>
                        <path class="fil164" d="M3400 2094l-19 73c-2,7 2,14 10,16l0 0c7,2 14,-2 16,-9l20 -73c2,-7 -3,-15 -10,-17l0 0c-7,-2 -15,3 -17,10z"/>
                        <path class="fil164" d="M3414 1880l0 75c0,8 6,14 14,14l0 0c7,0 13,-6 13,-14l0 -75c0,-8 -6,-14 -13,-14l0 0c-8,0 -14,6 -14,14z"/>
                        <path class="fil164" d="M3372 1670l19 73c2,7 10,11 17,9l0 0c7,-2 12,-9 10,-17l-20 -72c-2,-8 -9,-12 -17,-10l0 0c-7,2 -11,10 -9,17z"/>
                        <path class="fil164" d="M3276 1478l38 65c4,7 12,9 19,5l0 0c6,-4 8,-12 5,-19l-38 -65c-4,-6 -12,-9 -19,-5l0 0c-6,4 -8,12 -5,19z"/>
                        <path class="fil164" d="M3135 1317l53 53c5,6 14,6 19,0l0 0c6,-5 6,-14 0,-19l-53 -53c-5,-6 -14,-6 -19,0l0 0c-6,5 -6,14 0,19z"/>
                        <path class="fil164" d="M2956 1198l65 38c7,4 15,2 19,-5l0 0c4,-7 2,-15 -5,-19l-65 -37c-7,-4 -15,-2 -19,5l0 0c-4,6 -1,15 5,18z"/>
                        <path class="fil164" d="M2329 1159l73 -20c7,-2 11,-9 9,-17l0 0c-2,-7 -9,-11 -17,-9l-72 19c-8,2 -12,10 -10,17l0 0c2,7 10,12 17,10z"/>
                        <path class="fil164" d="M2753 1130l73 19c7,2 14,-2 16,-9l0 0c2,-8 -2,-15 -9,-17l-73 -20c-7,-2 -15,3 -17,10l0 0c-2,7 3,15 10,17z"/>
                        <path class="fil164" d="M2539 1116l75 0c8,0 14,-6 14,-13l0 0c0,-8 -6,-14 -14,-14l-75 0c-8,0 -14,6 -14,14l0 0c0,7 6,13 14,13z"/>
                    </g>
                </g>
                <g>
                    <path class="fil165 str17" d="M13165 4577c0,0 -11,-7 -25,-19 7,-12 18,-22 31,-28 -2,-8 -3,-15 -2,-22 -24,1 -46,7 -64,18 -22,-25 -43,-57 -47,-93 -8,-82 34,-126 55,-139 20,-12 70,-27 120,15 51,42 135,66 162,68 27,2 111,27 117,79 6,51 -8,110 -79,149 -26,15 -57,25 -91,27 -2,-23 -15,-47 -36,-68 -4,6 -9,10 -16,13 6,16 6,33 0,48 -1,2 -2,4 -2,6 -41,-6 -83,-23 -123,-54z"/>
                    <path class="fil166 str0" d="M13259 4484c38,15 61,48 51,73 -10,26 -50,34 -88,18 -39,-15 -61,-48 -51,-73 10,-26 49,-34 88,-18z"/>
                    <path class="fil167 str0" d="M13282 4439c56,22 90,71 75,108 -6,15 -20,26 -37,32 -4,-5 -9,-10 -14,-15 2,-2 3,-4 4,-7 10,-25 -13,-58 -51,-73 -39,-16 -78,-8 -88,18 -1,2 -2,4 -2,6 -5,0 -9,1 -14,1 -6,-15 -7,-30 -2,-44 15,-37 73,-49 129,-26zm10 145l0 0c-1,-2 -2,-4 -2,-7 -8,4 -16,6 -25,6 9,1 18,2 27,1zm-122 -57l0 0c1,1 1,2 1,3 -1,0 -1,0 -2,1 2,3 4,5 7,8 -3,-4 -4,-8 -6,-12z"/>
                    <path class="fil165 str0" d="M13306 4564c31,31 45,71 31,104 -20,51 -96,69 -169,40 -73,-29 -115,-94 -94,-146 13,-33 50,-53 95,-54 -1,7 0,14 2,22 -15,7 -27,18 -34,34 -14,36 8,79 50,96 43,17 88,2 103,-35 6,-15 6,-32 0,-48 7,-3 12,-7 16,-13z"/>
                </g>
                <g class="soska">
                    <path class="fil168" d="M6201 6236c-56,37 -32,111 -4,149 91,122 226,85 258,77 145,-37 159,-111 157,-169 -2,-59 -35,-90 -108,-88 -25,1 -66,23 -120,24 -71,2 -123,-33 -183,7z"/>
                    <path class="fil99 str18" d="M6201 6236c-56,37 -32,111 -4,149 91,122 226,85 258,77 145,-37 159,-111 157,-169 -2,-59 -35,-90 -108,-88 -25,1 -66,23 -120,24 -71,2 -123,-33 -183,7"/>
                    <path class="fil99 str18" d="M6339 6421c-37,18 -61,48 -60,81 2,52 63,91 135,89 73,-3 131,-46 129,-98 -1,-33 -27,-62 -66,-77 -1,7 -4,13 -9,18 11,11 18,25 19,41 1,36 -32,66 -74,68 -43,1 -78,-27 -79,-63 0,-15 5,-30 15,-41 -5,-6 -8,-12 -10,-18"/>
                    <path class="fil169 str53" d="M6400 6319c-57,2 -101,34 -100,71 0,15 9,29 22,40 6,-3 11,-6 16,-9 0,-2 0,-4 0,-7 -1,-25 29,-46 67,-48 38,-1 70,19 71,44 0,2 0,4 0,6 4,1 7,3 11,5 11,-11 17,-24 16,-38 -1,-37 -47,-66 -103,-64zm-55 124l0 0c7,3 15,5 24,7 -8,-3 -15,-8 -20,-12 -2,1 -3,3 -4,5zm124 -12l0 0c-2,3 -5,6 -8,9 3,-1 6,-3 8,-5 0,-1 -1,-1 -2,-2 1,-1 2,-2 2,-2z"/>
                    <path class="fil101" d="M6406 6366c-39,2 -69,24 -68,51 1,26 33,46 71,45 38,-1 69,-24 68,-50 -1,-27 -33,-47 -71,-46z"/>
                    <path class="fil168" d="M6339 6421c-37,18 -61,48 -60,81 2,51 63,91 135,88 73,-2 131,-46 129,-97 -1,-34 -27,-62 -66,-77 -1,6 -4,13 -9,18 11,10 18,25 19,41 1,36 -32,66 -74,67 -43,2 -78,-26 -79,-62 0,-15 5,-30 15,-42 -5,-6 -8,-11 -10,-17z"/>
                </g>
                <g class="soska">
                    <g>
                        <path class="fil170 str0" d="M3031 3731c-63,39 -40,121 -12,164 95,140 246,105 282,97 162,-34 181,-115 181,-179 1,-65 -35,-101 -115,-102 -28,0 -74,22 -134,21 -79,-1 -134,-42 -202,-1z"/>
                        <g>
                            <g>
                                <path class="fil170 str0" d="M3031 3731c-63,39 -40,121 -12,164 95,140 246,105 282,97 162,-34 181,-115 181,-179 1,-65 -35,-101 -115,-102 -28,0 -74,22 -134,21 -79,-1 -134,-42 -202,-1z"/>
                                <path class="fil170 str0" d="M3175 3942c-42,18 -70,50 -70,86 0,57 65,104 145,104 80,1 146,-45 146,-101 1,-37 -27,-70 -69,-88 -1,7 -5,13 -11,19 13,12 19,28 19,46 0,40 -38,72 -85,71 -46,0 -84,-32 -83,-72 0,-17 7,-33 18,-45 -5,-7 -9,-13 -10,-20z"/>
                                <path class="fil170 str0" d="M3175 3942c-42,18 -70,50 -70,86 0,57 65,104 145,104 80,1 146,-45 146,-101 1,-37 -27,-70 -69,-88 -1,7 -5,13 -11,19 13,12 19,28 19,46 0,40 -38,72 -85,71 -46,0 -84,-32 -83,-72 0,-17 7,-33 18,-45 -5,-7 -9,-13 -10,-20z"/>
                                <path class="fil171 str0" d="M3246 3833c-62,-1 -113,32 -113,73 0,17 8,32 22,45 7,-3 13,-6 19,-9 -1,-2 -1,-4 -1,-7 0,-29 35,-51 77,-50 42,0 77,23 77,51 0,2 -1,4 -1,7 4,1 8,4 12,6 12,-11 19,-26 19,-41 1,-42 -49,-75 -111,-75zm-66 133l0 0c8,4 17,7 26,10 -9,-4 -15,-10 -21,-15 -2,1 -4,4 -5,5zm138 -7l0 0c-3,4 -6,7 -10,10 4,-2 7,-3 10,-6 -1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2z"/>
                                <path class="fil171 str0" d="M3246 3833c-62,-1 -113,32 -113,73 0,17 8,32 22,45 7,-3 13,-6 19,-9 -1,-2 -1,-4 -1,-7 0,-29 35,-51 77,-50 42,0 77,23 77,51 0,2 -1,4 -1,7 4,1 8,4 12,6 12,-11 19,-26 19,-41 1,-42 -49,-75 -111,-75zm-66 133l0 0c8,4 17,7 26,10 -9,-4 -15,-10 -21,-15 -2,1 -4,4 -5,5zm138 -7l0 0c-3,4 -6,7 -10,10 4,-2 7,-3 10,-6 -1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2z"/>
                            </g>
                        </g>
                        <path class="fil172 str0" d="M3251 3885c-43,0 -77,23 -77,52 -1,29 33,52 76,53 42,0 77,-23 77,-52 0,-29 -34,-53 -76,-53z"/>
                        <path class="fil172 str0" d="M3251 3885c-43,0 -77,23 -77,52 -1,29 33,52 76,53 42,0 77,-23 77,-52 0,-29 -34,-53 -76,-53z"/>
                    </g>
                </g>
            </g>
        </g>
</svg>
    <?php } ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!--                --><?php
//                wp_nav_menu(array(
                        //'container' => 'false',
//                    //The location that we want to bring
//                    'theme_location'=>'menu_1',
//                    //Location displays the HTML markup menu
//                    'items_wrap'=>'<ul id="%1$s" class="%2$s">%3$s</ul>',
//                    //Specify the class for the menu
//                    'menu_class'=>'menu',//changing styles called class="nav-in" to class='sub-menu'
//                    'menu_id'=>'',
//                    //'depth'=>'3',
//                    //'walker'=> new Sublevel_Walker
//                ));
//                ?>
                <?php
                $header = get_fields(27);
                ?>
                <ul class="menu">
                    <?php
                        if(!is_page_template('templates/main.php')){
                        ?>
                    <li class="logo"><a href="/"><img src="<?php bloginfo("template_directory");?>/images/logotype.svg" alt=""></a></li>
                    <?php } ?>
                    <?php if($header['menu_1'] != null){ ?>
                    <li class="constructor"><a href="<?php echo $header['menu_1_url'];?>"><p><?php echo $header['menu_1'];?></p></a></li>
                        <?php }?>
                    <?php if($header['menu_2'] != null){ ?>
                    <li class="catalog"><a href="<?php echo $header['menu_2_url'];?>"><p><?php echo $header['menu_2'];?></p></a></li>
                    <?php }?>
                    <?php if($header['menu_3'] != null){ ?>
                    <li class="gallery"><a href="<?php echo $header['menu_3_url'];?>"><p><?php echo $header['menu_3'];?></p></a></li>
                    <?php }?>
                    <?php if($header['menu_4'] != null){ ?>
                    <li class="about-us"><a href="<?php echo $header['menu_4_url'];?>"><p><?php echo $header['menu_4'];?></p></a></li>
                    <?php }?>
                    <?php if($header['vk_url'] != null){ ?>
                    <li class="vk"><a href="<?php echo $header['vk_url'];?>" target="_blank"><img src="<?php bloginfo("template_directory");?>/images/vk.svg" alt=""></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>


    <?php
    if ( is_page_template('templates/main.php')) {
    ?>
    <?php if($header['video'] != null){ ?>
    <div class="video">
        <video autoplay="autoplay" loop>
            <source src="<?php echo $header['video'];?>">
        </video>
    </div>
        <?php }?>
    <?php if($header['sozdat_chekol'] != null){ ?>
    <a href="<?php echo $header['sozdat_chekol_url'];?>" class="button"><?php echo $header['sozdat_chekol'];?></a>
        <?php } ?>
    <?php } ?>
</header>
