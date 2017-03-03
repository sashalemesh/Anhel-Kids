

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
 <svg class="header-bg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="auto" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 1920 924"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 <defs>
  <style type="text/css">
   <![CDATA[
    .str14 {stroke:#584834;stroke-width:3.32126;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:71.819380 71.819380;stroke-opacity:0.301961}
    .str11 {stroke:#03817C;stroke-width:12.4996}
    .str45 {stroke:#E58F81;stroke-width:3.54449}
    .str12 {stroke:#03817C;stroke-width:4.16693}
    .str13 {stroke:#818181;stroke-width:5.68347}
    .str16 {stroke:#090909;stroke-width:2.36221}
    .str42 {stroke:#1A1A17;stroke-width:1.1811}
    .str43 {stroke:#2B2A29;stroke-width:1.1811}
    .str1 {stroke:#CB1362;stroke-width:1.1811}
    .str9 {stroke:#D5887E;stroke-width:1.1811}
    .str33 {stroke:#1A1A17;stroke-width:0.900001}
    .str34 {stroke:#777D81;stroke-width:0.900001}
    .str37 {stroke:#937D74;stroke-width:0.900001}
    .str36 {stroke:#A9A89B;stroke-width:0.900001}
    .str38 {stroke:#AC0065;stroke-width:0.900001}
    .str39 {stroke:#BD177D;stroke-width:0.900001}
    .str35 {stroke:#C3C2B6;stroke-width:0.900001}
    .str17 {stroke:#D90068;stroke-width:2.95276;stroke-linejoin:round}
    .str5 {stroke:#E17F75;stroke-width:2.95276;stroke-linejoin:round}
    .str46 {stroke:#3784B3;stroke-width:1.1811;stroke-linejoin:round}
    .str10 {stroke:#BE2F86;stroke-width:1.1811;stroke-linejoin:round}
    .str0 {stroke:#D90068;stroke-width:1.1811;stroke-linejoin:round}
    .str4 {stroke:#DF8B81;stroke-width:1.1811;stroke-linejoin:round}
    .str6 {stroke:#E17F75;stroke-width:1.1811;stroke-linejoin:round}
    .str21 {stroke:#E3867C;stroke-width:1.1811;stroke-linejoin:round}
    .str7 {stroke:#E38871;stroke-width:1.1811;stroke-linejoin:round}
    .str22 {stroke:#EF8F76;stroke-width:1.1811;stroke-linejoin:round}
    .str26 {stroke:#F9AAAA;stroke-width:2.36221;stroke-linecap:round}
    .str28 {stroke:#F9AAAA;stroke-width:1.1811;stroke-linecap:round}
    .str44 {stroke:#D90068;stroke-width:2.95276;stroke-linecap:round;stroke-linejoin:round}
    .str32 {stroke:#DF8B81;stroke-width:2.95276;stroke-linecap:round;stroke-linejoin:round}
    .str18 {stroke:#3784B3;stroke-width:1.1811;stroke-linecap:round;stroke-linejoin:round}
    .str40 {stroke:#AC0065;stroke-width:1.1811;stroke-linecap:round;stroke-linejoin:round}
    .str41 {stroke:#BD177D;stroke-width:1.1811;stroke-linecap:round;stroke-linejoin:round}
    .str2 {stroke:#D90068;stroke-width:1.1811;stroke-linecap:round;stroke-linejoin:round}
    .str20 {stroke:#DD8E82;stroke-width:1.1811;stroke-linecap:round;stroke-linejoin:round}
    .str3 {stroke:#DF8B81;stroke-width:1.1811;stroke-linecap:round;stroke-linejoin:round}
    .str19 {stroke:#E3867C;stroke-width:1.1811;stroke-linecap:round;stroke-linejoin:round}
    .str8 {stroke:#E38871;stroke-width:1.1811;stroke-linecap:round;stroke-linejoin:round}
    .str24 {stroke:#F9AAAA;stroke-width:2.36221;stroke-dasharray:49.984313 37.488235}
    .str25 {stroke:#F9AAAA;stroke-width:1.1811;stroke-dasharray:49.984313 37.488235}
    .str23 {stroke:#F9AAAA;stroke-width:8.33387;stroke-linecap:round;stroke-dasharray:50.395338 37.796503}
    .str30 {stroke:#F9AAAA;stroke-width:2.36221;stroke-linecap:round;stroke-dasharray:53.995342 40.496507}
    .str27 {stroke:#F9AAAA;stroke-width:2.36221;stroke-linecap:round;stroke-dasharray:46.795333 35.096500}
    .str29 {stroke:#F9AAAA;stroke-width:1.1811;stroke-linecap:round;stroke-dasharray:50.395338 37.796503}
    .str31 {stroke:#F9AAAA;stroke-width:1.1811;stroke-linecap:round;stroke-dasharray:46.795333 35.096500}
    .str15 {stroke:#584834;stroke-width:3.32126;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:79.710334 79.710334}
    .fil97 {fill:none}
    .fil35 {fill:none;fill-rule:nonzero}
    .fil70 {fill:none;fill-rule:nonzero}
    .fil108 {fill:#00B5D2}
    .fil152 {fill:#090613}
    .fil103 {fill:#111111}
    .fil147 {fill:#13736D}
    .fil4 {fill:#1A1A17}
    .fil94 {fill:#4C4C4C}
    .fil166 {fill:#75B6D7}
    .fil123 {fill:#777D81}
    .fil96 {fill:#78B7D7}
    .fil92 {fill:#818181}
    .fil109 {fill:#86511A}
    .fil110 {fill:#8ADBEF}
    .fil145 {fill:#937D74}
    .fil93 {fill:#979797}
    .fil135 {fill:#A20665}
    .fil141 {fill:#A54C95}
    .fil113 {fill:#A9692C}
    .fil140 {fill:#A9A89B}
    .fil146 {fill:#AC0065}
    .fil6 {fill:#B6B9A4}
    .fil124 {fill:#B8B8AE}
    .fil132 {fill:#B8BFB7}
    .fil143 {fill:#BB006F}
    .fil136 {fill:#BD177D}
    .fil131 {fill:#BEBEB6}
    .fil129 {fill:#C3C2B6}
    .fil133 {fill:#C5C7BB}
    .fil137 {fill:#C5CEC5}
    .fil144 {fill:#CF1484}
    .fil153 {fill:#D0971D}
    .fil116 {fill:#D0D2CA}
    .fil119 {fill:#D1D3CA}
    .fil159 {fill:#D2D1C2}
    .fil120 {fill:#D2D2C6}
    .fil5 {fill:#D2D5CE}
    .fil139 {fill:#D6D7CA}
    .fil125 {fill:#D6D7CC}
    .fil134 {fill:#D9DAD1}
    .fil167 {fill:#DBEDF8}
    .fil127 {fill:#DDDAD0}
    .fil105 {fill:#DF8971}
    .fil142 {fill:#E36BCD}
    .fil162 {fill:#E58F81}
    .fil43 {fill:#E967A0}
    .fil148 {fill:#E9E7DC}
    .fil2 {fill:#EB66A1}
    .fil95 {fill:#EBEBEB}
    .fil1 {fill:#EDEEE9}
    .fil163 {fill:#EF8FBA}
    .fil44 {fill:#F090B9}
    .fil164 {fill:#F095BD}
    .fil3 {fill:#F191BA}
    .fil111 {fill:#F592B6}
    .fil156 {fill:#F5CDE2}
    .fil154 {fill:#F6B59F}
    .fil165 {fill:#F6CDE2}
    .fil157 {fill:#F7DAEA}
    .fil150 {fill:#F9DBCC}
    .fil149 {fill:#FAD5C0}
    .fil155 {fill:#FBE1D1}
    .fil104 {fill:#FBF29D}
    .fil101 {fill:#FCAC50}
    .fil151 {fill:#FCF1EB}
    .fil107 {fill:#FF5C58}
    .fil114 {fill:#FFC800}
    .fil98 {fill:#FFE0D0}
    .fil112 {fill:#FFE0EA}
    .fil100 {fill:#FFF4EE}
    .fil160 {fill:#FFFF9D}
    .fil99 {fill:white}
    .fil45 {fill:#03817C;fill-rule:nonzero}
    .fil20 {fill:#09A3AE;fill-rule:nonzero}
    .fil22 {fill:#09A3B1;fill-rule:nonzero}
    .fil18 {fill:#09B1BE;fill-rule:nonzero}
    .fil14 {fill:#13736D;fill-rule:nonzero}
    .fil40 {fill:#1A1A17;fill-rule:nonzero}
    .fil25 {fill:#1A1A19;fill-rule:nonzero}
    .fil28 {fill:#1A414A;fill-rule:nonzero}
    .fil31 {fill:#1AA9B7;fill-rule:nonzero}
    .fil27 {fill:#1F474D;fill-rule:nonzero}
    .fil50 {fill:#2D2D2D;fill-rule:nonzero}
    .fil24 {fill:#2F323F;fill-rule:nonzero}
    .fil52 {fill:#323232;fill-rule:nonzero}
    .fil61 {fill:#3F3F3F;fill-rule:nonzero}
    .fil81 {fill:#4BC37C;fill-rule:nonzero}
    .fil69 {fill:#584834;fill-rule:nonzero}
    .fil75 {fill:#606060;fill-rule:nonzero}
    .fil72 {fill:dimgray;fill-rule:nonzero}
    .fil80 {fill:#6EC1E6;fill-rule:nonzero}
    .fil71 {fill:#7A7A7A;fill-rule:nonzero}
    .fil13 {fill:#80A3A2;fill-rule:nonzero}
    .fil60 {fill:#818181;fill-rule:nonzero}
    .fil74 {fill:#82C7E5;fill-rule:nonzero}
    .fil10 {fill:#83ADAF;fill-rule:nonzero}
    .fil8 {fill:#92C0C5;fill-rule:nonzero}
    .fil56 {fill:#93C0D5;fill-rule:nonzero}
    .fil7 {fill:#94C8CB;fill-rule:nonzero}
    .fil0 {fill:#95DBDE;fill-rule:nonzero}
    .fil62 {fill:#978169;fill-rule:nonzero}
    .fil55 {fill:#9E9E9E;fill-rule:nonzero}
    .fil84 {fill:#A1A1A1;fill-rule:nonzero}
    .fil85 {fill:#A5A5A5;fill-rule:nonzero}
    .fil106 {fill:#A83C3C;fill-rule:nonzero}
    .fil73 {fill:#AAAAAA;fill-rule:nonzero}
    .fil63 {fill:#AD9277;fill-rule:nonzero}
    .fil77 {fill:#B24447;fill-rule:nonzero}
    .fil51 {fill:#B2B2B2;fill-rule:nonzero}
    .fil83 {fill:#B2DDC4;fill-rule:nonzero}
    .fil67 {fill:#BC9463;fill-rule:nonzero}
    .fil54 {fill:#C16D6F;fill-rule:nonzero}
    .fil59 {fill:#C3C3C3;fill-rule:nonzero}
    .fil91 {fill:#CA451D;fill-rule:nonzero}
    .fil64 {fill:#CDA476;fill-rule:nonzero}
    .fil38 {fill:#D0971D;fill-rule:nonzero}
    .fil76 {fill:#D25054;fill-rule:nonzero}
    .fil33 {fill:#D8DADA;fill-rule:nonzero}
    .fil161 {fill:#E58F81;fill-rule:nonzero}
    .fil47 {fill:#E75024;fill-rule:nonzero}
    .fil34 {fill:#E967A0;fill-rule:nonzero}
    .fil26 {fill:#EA554F;fill-rule:nonzero}
    .fil65 {fill:#EAD5BD;fill-rule:nonzero}
    .fil17 {fill:#ED7268;fill-rule:nonzero}
    .fil29 {fill:#EE7A7D;fill-rule:nonzero}
    .fil19 {fill:#EEDBB4;fill-rule:nonzero}
    .fil168 {fill:#EF8FBA;fill-rule:nonzero}
    .fil46 {fill:#EFA71D;fill-rule:nonzero}
    .fil170 {fill:#F095BD;fill-rule:nonzero}
    .fil9 {fill:#F0F1CA;fill-rule:nonzero}
    .fil39 {fill:#F6B59F;fill-rule:nonzero}
    .fil169 {fill:#F6CDE2;fill-rule:nonzero}
    .fil41 {fill:#F8F098;fill-rule:nonzero}
    .fil30 {fill:#F9B425;fill-rule:nonzero}
    .fil36 {fill:#F9DBCC;fill-rule:nonzero}
    .fil79 {fill:#FAA12B;fill-rule:nonzero}
    .fil32 {fill:#FAB51C;fill-rule:nonzero}
    .fil23 {fill:#FABB1A;fill-rule:nonzero}
    .fil82 {fill:#FAD15C;fill-rule:nonzero}
    .fil58 {fill:#FAD56B;fill-rule:nonzero}
    .fil21 {fill:#FBBC17;fill-rule:nonzero}
    .fil42 {fill:#FBE1D1;fill-rule:nonzero}
    .fil37 {fill:#FCF1EB;fill-rule:nonzero}
    .fil48 {fill:#FFAE5A;fill-rule:nonzero}
    .fil11 {fill:#FFC18B;fill-rule:nonzero}
    .fil16 {fill:#FFFF9D;fill-rule:nonzero}
    .fil12 {fill:white;fill-rule:nonzero}
    .fil53 {fill:black;fill-rule:nonzero;fill-opacity:0.050980}
    .fil68 {fill:black;fill-rule:nonzero;fill-opacity:0.101961}
    .fil57 {fill:white;fill-rule:nonzero;fill-opacity:0.101961}
    .fil78 {fill:white;fill-rule:nonzero;fill-opacity:0.149020}
    .fil66 {fill:white;fill-rule:nonzero;fill-opacity:0.200000}
    .fil115 {fill:#FFA7C9;fill-rule:nonzero;fill-opacity:0.600000}
    .fil102 {fill:#FFAAAE;fill-opacity:0.670588}
    .fil15 {fill:#2EA8A8;fill-rule:nonzero;fill-opacity:0.800000}
    .fil138 {fill:url(#id0)}
    .fil126 {fill:url(#id1)}
    .fil158 {fill:url(#id2)}
    .fil128 {fill:url(#id3)}
    .fil122 {fill:url(#id4)}
    .fil118 {fill:url(#id5)}
    .fil130 {fill:url(#id6)}
    .fil117 {fill:url(#id7)}
    .fil121 {fill:url(#id8)}
    .fil87 {fill:url(#id9);fill-rule:nonzero}
    .fil90 {fill:url(#id10);fill-rule:nonzero}
    .fil86 {fill:url(#id11);fill-rule:nonzero}
    .fil49 {fill:url(#id12);fill-rule:nonzero}
    .fil88 {fill:url(#id13);fill-rule:nonzero}
    .fil89 {fill:url(#id14);fill-rule:nonzero}
   ]]>
  </style>
  <linearGradient id="id0" gradientUnits="userSpaceOnUse" x1="1394.76" y1="756.271" x2="1443.9" y2="756.271">
   <stop offset="0" style="stop-opacity:1; stop-color:#C5CEC5"/>
   <stop offset="0.490196" style="stop-opacity:1; stop-color:#E2E6E2"/>
   <stop offset="1" style="stop-opacity:1; stop-color:white"/>
  </linearGradient>
  <linearGradient id="id1" gradientUnits="userSpaceOnUse" x1="1461.34" y1="910.796" x2="1515.99" y2="836.786">
   <stop offset="0" style="stop-opacity:1; stop-color:#D6D7CC"/>
   <stop offset="1.38039" style="stop-opacity:1; stop-color:#EAEBE5"/>
   <stop offset="1" style="stop-opacity:1; stop-color:white"/>
  </linearGradient>
  <linearGradient id="id2" gradientUnits="userSpaceOnUse" x1="1477.28" y1="651.511" x2="1549.9" y2="520.191">
   <stop offset="0" style="stop-opacity:1; stop-color:#EDEEE9"/>
   <stop offset="1.81961" style="stop-opacity:1; stop-color:#F6F6F4"/>
   <stop offset="1" style="stop-opacity:1; stop-color:white"/>
  </linearGradient>
  <linearGradient id="id3" gradientUnits="userSpaceOnUse" x1="1359.55" y1="846.117" x2="1421.52" y2="846.117">
   <stop offset="0" style="stop-opacity:1; stop-color:#DDDAD0"/>
   <stop offset="0.509804" style="stop-opacity:1; stop-color:#EEECE7"/>
   <stop offset="1" style="stop-opacity:1; stop-color:white"/>
  </linearGradient>
  <linearGradient id="id4" gradientUnits="userSpaceOnUse" x1="1627.18" y1="794.387" x2="1716.29" y2="841.241">
   <stop offset="0" style="stop-opacity:1; stop-color:#D2D5CE"/>
   <stop offset="1" style="stop-opacity:1; stop-color:white"/>
  </linearGradient>
  <linearGradient id="id5" gradientUnits="userSpaceOnUse" x1="1605.61" y1="783.201" x2="1655.85" y2="783.201">
   <stop offset="0" style="stop-opacity:1; stop-color:#D2D5CE"/>
   <stop offset="0.509804" style="stop-opacity:1; stop-color:#E8EAE6"/>
   <stop offset="1" style="stop-opacity:1; stop-color:white"/>
  </linearGradient>
  <linearGradient id="id6" gradientUnits="userSpaceOnUse" x1="1635.39" y1="676.027" x2="1674.67" y2="693.011">
   <stop offset="0" style="stop-opacity:1; stop-color:#C3C2B6"/>
   <stop offset="0.490196" style="stop-opacity:1; stop-color:#EBEBEB"/>
   <stop offset="0.588235" style="stop-opacity:1; stop-color:#C3C2B6"/>
   <stop offset="1" style="stop-opacity:1; stop-color:#C3C2B6"/>
  </linearGradient>
  <linearGradient id="id7" gradientUnits="userSpaceOnUse" x1="1730.72" y1="797.08" x2="1761.36" y2="816.953">
   <stop offset="0" style="stop-opacity:1; stop-color:#D0D2CA"/>
   <stop offset="1" style="stop-opacity:1; stop-color:white"/>
  </linearGradient>
  <linearGradient id="id8" gradientUnits="userSpaceOnUse" x1="1567.95" y1="878.442" x2="1634.05" y2="878.442">
   <stop offset="0" style="stop-opacity:1; stop-color:#D2D2C6"/>
   <stop offset="1" style="stop-opacity:1; stop-color:white"/>
  </linearGradient>
  <linearGradient id="id9" gradientUnits="objectBoundingBox" x1="50%" y1="100%" x2="50%" y2="0%">
   <stop offset="0" style="stop-opacity:1; stop-color:#B49074"/>
   <stop offset="1" style="stop-opacity:1; stop-color:#B49074"/>
  </linearGradient>
  <linearGradient id="id10" gradientUnits="objectBoundingBox" x1="50%" y1="0%" x2="50%" y2="100%">
   <stop offset="0" style="stop-opacity:1; stop-color:#7A5841"/>
   <stop offset="1" style="stop-opacity:1; stop-color:#705541"/>
  </linearGradient>
  <linearGradient id="id11" gradientUnits="objectBoundingBox" x1="50%" y1="100%" x2="50%" y2="0%">
   <stop offset="0" style="stop-opacity:1; stop-color:#8D6F56"/>
   <stop offset="1" style="stop-opacity:1; stop-color:#8D6F56"/>
  </linearGradient>
  <linearGradient id="id12" gradientUnits="objectBoundingBox" x1="50%" y1="0%" x2="50%" y2="100%">
   <stop offset="0" style="stop-opacity:1; stop-color:#694E3B"/>
   <stop offset="1" style="stop-opacity:1; stop-color:#C29976"/>
  </linearGradient>
  <linearGradient id="id13" gradientUnits="objectBoundingBox" x1="37.7827%" y1="0%" x2="62.2173%" y2="101.098%">
   <stop offset="0" style="stop-opacity:1; stop-color:#C8A687"/>
   <stop offset="1" style="stop-opacity:1; stop-color:#C8A687"/>
  </linearGradient>
  <linearGradient id="id14" gradientUnits="objectBoundingBox" x1="97.9368%" y1="82.8493%" x2="2.06316%" y2="17.1507%">
   <stop offset="0" style="stop-opacity:1; stop-color:#8C684A"/>
   <stop offset="1" style="stop-opacity:1; stop-color:#8C684A"/>
  </linearGradient>
 </defs>
 <g id="Слой_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <g id="_2685564188720">
   <path class="fil0" d="M0 0l0 692 1707 0 0 -692 -1707 0zm306 547l0 0c3,-4 0,-8 1,-12 -1,4 2,8 -1,12zm36 -12l0 0c-3,4 -2,11 -9,12 7,-1 6,-8 9,-12 1,-1 1,0 1,1 0,-1 0,-2 -1,-1z"/>
   <path class="fil0" d="M0 0l0 692 1707 0 0 -692 -1707 0zm306 547l0 0c3,-4 0,-8 1,-12 -1,4 2,8 -1,12zm36 -12l0 0c-3,4 -2,11 -9,12 7,-1 6,-8 9,-12 1,-1 1,0 1,1 0,-1 0,-2 -1,-1z"/>
   <path class="fil1" d="M230 33l82 20 3 1c15,4 95,26 136,81l-63 279 -231 -56 73 -325z"/>
   <path class="fil1" d="M230 33l82 20 3 1c15,4 95,26 136,81l-63 279 -231 -56 73 -325z"/>
   <g>
    <path class="fil2" d="M280 60c2,-2 2,-4 1,-6 0,0 -1,0 -2,0l0 0c0,0 0,0 0,1 1,0 1,2 -1,3 -1,2 -3,2 -3,2 -1,0 -1,0 -1,-1l0 0c0,1 0,2 1,3 1,1 3,0 5,-2z"/>
    <g>
     <path class="fil2" d="M280 60c2,-2 2,-4 1,-6 0,0 -1,0 -2,0l0 0c0,0 0,0 0,1 1,0 1,2 -1,3 -1,2 -3,2 -3,2 -1,0 -1,0 -1,-1l0 0c0,1 0,2 1,3 1,1 3,0 5,-2z"/>
     <path class="fil3" d="M271 55l4 5c0,0 2,0 3,-2 2,-1 2,-3 1,-3l-5 -4c0,1 0,2 -1,2 0,1 -1,2 -2,2z"/>
     <path class="fil3" d="M271 55l4 5c0,0 2,0 3,-2 2,-1 2,-3 1,-3l-5 -4c0,1 0,2 -1,2 0,1 -1,2 -2,2z"/>
     <path class="fil2" d="M273 53c1,-1 2,-3 1,-3 -1,-1 -2,-1 -3,1 -2,1 -2,3 -1,4 0,0 2,0 3,-2z"/>
     <path class="fil2" d="M273 53c1,-1 2,-3 1,-3 -1,-1 -2,-1 -3,1 -2,1 -2,3 -1,4 0,0 2,0 3,-2z"/>
     <path class="fil4" d="M284 64l-5 -4c1,0 1,0 1,0 0,0 0,0 0,0l4 4z"/>
     <path class="fil4" d="M284 64l-5 -4c1,0 1,0 1,0 0,0 0,0 0,0l4 4z"/>
    </g>
   </g>
   <path class="fil5" d="M298 50c21,7 66,25 81,49 19,30 21,35 23,42 2,5 23,-18 48,-2l1 -3c-42,-47 -104,-72 -139,-83l0 0 -14 -3z"/>
   <path class="fil5" d="M298 50c21,7 66,25 81,49 19,30 21,35 23,42 2,5 23,-18 48,-2l1 -3c-42,-47 -104,-72 -139,-83l0 0 -14 -3z"/>
   <path class="fil6" d="M312 53c0,0 57,18 72,42 16,24 18,28 19,33 1,5 24,-20 48,7 -41,-55 -121,-77 -136,-81l-3 -1z"/>
   <path class="fil6" d="M312 53c0,0 57,18 72,42 16,24 18,28 19,33 1,5 24,-20 48,7 -41,-55 -121,-77 -136,-81l-3 -1z"/>
   <polygon class="fil7" points="1707,692 0,692 0,671 1707,671 "/>
   <polygon class="fil7" points="1707,692 0,692 0,671 1707,671 "/>
   <polygon class="fil8" points="1707,0 1707,692 1917,924 1920,0 "/>
   <polygon class="fil8" points="1707,0 1707,692 1917,924 1920,0 "/>
   <polygon class="fil9" points="1,924 1918,924 1708,687 1,687 "/>
   <polygon class="fil9" points="1,924 1918,924 1708,687 1,687 "/>
   <polygon class="fil10" points="1707,687 1707,671 1917,901 1917,924 "/>
   <polygon class="fil10" points="1707,687 1707,671 1917,901 1917,924 "/>
   <polygon class="fil11" points="605,692 0,692 0,840 701,840 "/>
   <polygon class="fil11" points="605,692 0,692 0,840 701,840 "/>
   <g>
    <g>
     <polygon class="fil12" points="1689,763 1300,763 1300,177 1689,177 "/>
     <g>
      <g>
       <polygon class="fil12" points="1689,763 1300,763 1300,177 1689,177 "/>
       <g>
        <g>
         <polygon class="fil13" points="1423,293 1313,293 1313,192 1423,192 "/>
         <g>
          <g>
           <polygon class="fil13" points="1423,293 1313,293 1313,192 1423,192 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1550,293 1440,293 1440,192 1550,192 "/>
          <g>
           <polygon class="fil13" points="1550,293 1440,293 1440,192 1550,192 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1672,293 1562,293 1562,192 1672,192 "/>
          <g>
           <polygon class="fil13" points="1672,293 1562,293 1562,192 1672,192 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1423,408 1313,408 1313,304 1423,304 "/>
          <g>
           <polygon class="fil13" points="1423,408 1313,408 1313,304 1423,304 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1550,408 1440,408 1440,304 1550,304 "/>
          <g>
           <polygon class="fil13" points="1550,408 1440,408 1440,304 1550,304 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1672,408 1562,408 1562,304 1672,304 "/>
          <g>
           <polygon class="fil13" points="1672,408 1562,408 1562,304 1672,304 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1425,524 1316,524 1316,419 1425,419 "/>
          <g>
           <polygon class="fil13" points="1425,524 1316,524 1316,419 1425,419 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1552,524 1442,524 1442,419 1552,419 "/>
          <g>
           <polygon class="fil13" points="1552,524 1442,524 1442,419 1552,419 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1674,524 1564,524 1564,419 1674,419 "/>
          <g>
           <polygon class="fil13" points="1674,524 1564,524 1564,419 1674,419 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1425,639 1316,639 1316,536 1425,536 "/>
          <g>
           <polygon class="fil13" points="1425,639 1316,639 1316,536 1425,536 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1552,639 1442,639 1442,536 1552,536 "/>
          <g>
           <polygon class="fil13" points="1552,639 1442,639 1442,536 1552,536 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1674,639 1564,639 1564,536 1674,536 "/>
          <g>
           <polygon class="fil13" points="1674,639 1564,639 1564,536 1674,536 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1423,753 1313,753 1313,650 1423,650 "/>
          <g>
           <polygon class="fil13" points="1423,753 1313,753 1313,650 1423,650 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1550,753 1440,753 1440,650 1550,650 "/>
          <g>
           <polygon class="fil13" points="1550,753 1440,753 1440,650 1550,650 "/>
          </g>
         </g>
         <g>
          <polygon class="fil13" points="1672,753 1562,753 1562,650 1672,650 "/>
          <g>
           <polygon class="fil13" points="1672,753 1562,753 1562,650 1672,650 "/>
          </g>
         </g>
        </g>
       </g>
      </g>
     </g>
     <g>
      <polygon class="fil14" points="1409,753 1327,753 1318,680 1418,680 "/>
      <g>
       <polygon class="fil14" points="1409,753 1327,753 1318,680 1418,680 "/>
       <g>
        <path class="fil15" d="M1386 696l-36 0c-1,0 -1,-1 -1,-1l0 -4c0,0 0,-1 1,-1l36 0c1,0 1,1 1,1l0 4c0,0 0,1 -1,1z"/>
        <g>
         <path class="fil15" d="M1386 696l-36 0c-1,0 -1,-1 -1,-1l0 -4c0,0 0,-1 1,-1l36 0c1,0 1,1 1,1l0 4c0,0 0,1 -1,1z"/>
        </g>
       </g>
       <polygon class="fil14" points="1536,753 1454,753 1445,680 1545,680 "/>
       <polygon class="fil14" points="1536,753 1454,753 1445,680 1545,680 "/>
       <g>
        <path class="fil15" d="M1513 696l-37 0c0,0 0,-1 0,-1l0 -4c0,0 0,-1 0,-1l37 0c0,0 1,1 1,1l0 4c0,0 -1,1 -1,1z"/>
        <g>
         <path class="fil15" d="M1513 696l-37 0c0,0 0,-1 0,-1l0 -4c0,0 0,-1 0,-1l37 0c0,0 1,1 1,1l0 4c0,0 -1,1 -1,1z"/>
        </g>
       </g>
       <polygon class="fil14" points="1658,753 1576,753 1567,680 1667,680 "/>
       <polygon class="fil14" points="1658,753 1576,753 1567,680 1667,680 "/>
       <g>
        <path class="fil15" d="M1635 696l-36 0c-1,0 -1,-1 -1,-1l0 -4c0,0 0,-1 1,-1l36 0c1,0 1,1 1,1l0 4c0,0 0,1 -1,1z"/>
        <g>
         <path class="fil15" d="M1635 696l-36 0c-1,0 -1,-1 -1,-1l0 -4c0,0 0,-1 1,-1l36 0c1,0 1,1 1,1l0 4c0,0 0,1 -1,1z"/>
        </g>
       </g>
      </g>
     </g>
     <g>
      <g>
       <path class="fil16" d="M1633 523c0,0 0,0 0,0l-31 0c0,0 0,0 0,0l0 -29c0,0 0,-1 0,-1l31 0c0,0 0,1 0,1l0 29z"/>
       <g>
        <g>
         <path class="fil16" d="M1633 523c0,0 0,0 0,0l-31 0c0,0 0,0 0,0l0 -29c0,0 0,-1 0,-1l31 0c0,0 0,1 0,1l0 29z"/>
         <g>
          <g>
           <path class="fil17" d="M1630 521l-25 0c-1,0 -1,0 -1,-1l0 -23c0,-1 0,-1 1,-1l25 0c0,0 1,0 1,1l0 23c0,1 -1,1 -1,1zm-25 -1l0 0 24 0 0 -23 -24 0 0 23z"/>
           <g>
            <g>
             <path class="fil17" d="M1630 521l-25 0c-1,0 -1,0 -1,-1l0 -23c0,-1 0,-1 1,-1l25 0c0,0 1,0 1,1l0 23c0,1 -1,1 -1,1zm-25 -1l0 0 24 0 0 -23 -24 0 0 23z"/>
            </g>
           </g>
          </g>
         </g>
         <g>
          <path class="fil14" d="M1623 515c-2,0 -3,0 -5,0 -4,0 -7,-3 -7,-7 0,-4 3,-7 7,-7 2,0 3,0 4,0l0 3 -1 0 0 -1c0,0 0,0 0,-1 -1,0 -2,0 -3,0 -3,0 -4,2 -4,6 0,3 1,6 4,6 1,0 2,0 3,0 0,-1 0,-1 0,-1 0,-1 0,-1 0,-1l1 0 1 3z"/>
          <g>
           <path class="fil14" d="M1623 515c-2,0 -3,0 -5,0 -4,0 -7,-3 -7,-7 0,-4 3,-7 7,-7 2,0 3,0 4,0l0 3 -1 0 0 -1c0,0 0,0 0,-1 -1,0 -2,0 -3,0 -3,0 -4,2 -4,6 0,3 1,6 4,6 1,0 2,0 3,0 0,-1 0,-1 0,-1 0,-1 0,-1 0,-1l1 0 1 3z"/>
          </g>
         </g>
        </g>
       </g>
       <g>
        <path class="fil14" d="M1639 493c0,0 0,0 -1,0l-30 0c0,0 -1,0 -1,0l0 -29c0,-1 1,-1 1,-1l30 0c1,0 1,0 1,1l0 29z"/>
        <g>
         <path class="fil14" d="M1639 493c0,0 0,0 -1,0l-30 0c0,0 -1,0 -1,0l0 -29c0,-1 1,-1 1,-1l30 0c1,0 1,0 1,1l0 29z"/>
         <path class="fil18" d="M1635 491l-24 0c-1,0 -1,0 -1,-1l0 -23c0,-1 0,-2 1,-2l24 0c1,0 2,1 2,2l0 23c0,1 -1,1 -2,1zm-24 -1l0 0 24 0 0 -23 -24 0 0 23z"/>
         <path class="fil18" d="M1635 491l-24 0c-1,0 -1,0 -1,-1l0 -23c0,-1 0,-2 1,-2l24 0c1,0 2,1 2,2l0 23c0,1 -1,1 -2,1zm-24 -1l0 0 24 0 0 -23 -24 0 0 23z"/>
         <g>
          <path class="fil16" d="M1627 474c0,2 -1,3 -3,3l0 1c2,0 4,1 4,3 0,3 -2,4 -5,4 -1,0 -2,0 -4,0 0,0 -2,0 -2,0l0 -1 2 0c0,-1 0,-2 0,-2l0 -8c0,-1 0,-2 0,-2l-2 0 0 -1c0,0 2,0 2,0 2,0 3,0 4,0 2,0 4,1 4,3zm-6 0l0 0 0 8c0,0 0,1 0,2 0,0 1,0 2,0 1,0 3,-1 3,-3 0,-2 -2,-3 -4,-3l0 0 0 -1 0 0c2,0 3,-1 3,-3 0,-1 -1,-2 -2,-2 -1,0 -2,0 -2,0 0,0 0,1 0,2z"/>
          <g>
           <path class="fil16" d="M1627 474c0,2 -1,3 -3,3l0 1c2,0 4,1 4,3 0,3 -2,4 -5,4 -1,0 -2,0 -4,0 0,0 -2,0 -2,0l0 -1 2 0c0,-1 0,-2 0,-2l0 -8c0,-1 0,-2 0,-2l-2 0 0 -1c0,0 2,0 2,0 2,0 3,0 4,0 2,0 4,1 4,3zm-6 0l0 0 0 8c0,0 0,1 0,2 0,0 1,0 2,0 1,0 3,-1 3,-3 0,-2 -2,-3 -4,-3l0 0 0 -1 0 0c2,0 3,-1 3,-3 0,-1 -1,-2 -2,-2 -1,0 -2,0 -2,0 0,0 0,1 0,2z"/>
          </g>
         </g>
        </g>
       </g>
       <g>
        <g>
         <path class="fil17" d="M1631 463c0,0 0,0 -1,0l-30 0c0,0 -1,0 -1,0l0 -29c0,0 1,-1 1,-1l30 0c1,0 1,1 1,1l0 29z"/>
         <g>
          <g>
           <path class="fil17" d="M1631 463c0,0 0,0 -1,0l-30 0c0,0 -1,0 -1,0l0 -29c0,0 1,-1 1,-1l30 0c1,0 1,1 1,1l0 29z"/>
          </g>
         </g>
         <path class="fil16" d="M1627 461l-24 0c-1,0 -1,0 -1,-1l0 -23c0,-1 0,-1 1,-1l24 0c1,0 1,0 1,1l0 23c0,1 0,1 -1,1zm-24 -1l0 0 24 0 0 -23 -24 0 0 23z"/>
         <path class="fil16" d="M1627 461l-24 0c-1,0 -1,0 -1,-1l0 -23c0,-1 0,-1 1,-1l24 0c1,0 1,0 1,1l0 23c0,1 0,1 -1,1zm-24 -1l0 0 24 0 0 -23 -24 0 0 23z"/>
         <g>
          <path class="fil12" d="M1622 455l-2 0c-1,0 -3,0 -3,0l0 -1 1 0 0 -2 -1 -2 -4 0 -1 2 0 2 1 0 0 1 -2 0c-1,0 -3,0 -3,0l0 -1 2 0 0 -2 4 -11 2 0 4 11 1 2 1 0 0 1zm-9 -6l0 0 4 0 -2 -5 -2 5z"/>
          <g>
           <path class="fil12" d="M1622 455l-2 0c-1,0 -3,0 -3,0l0 -1 1 0 0 -2 -1 -2 -4 0 -1 2 0 2 1 0 0 1 -2 0c-1,0 -3,0 -3,0l0 -1 2 0 0 -2 4 -11 2 0 4 11 1 2 1 0 0 1zm-9 -6l0 0 4 0 -2 -5 -2 5z"/>
          </g>
         </g>
        </g>
       </g>
      </g>
     </g>
     <g>
      <g>
       <g>
        <path class="fil19" d="M1463 402c0,1 -1,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 0,0 1,1 1,2l0 52z"/>
        <g>
         <g>
          <g>
           <path class="fil19" d="M1463 402c0,1 -1,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 0,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1476 402c0,1 -1,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 0,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1476 402c0,1 -1,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 0,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1489 402c0,1 0,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 1,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1489 402c0,1 0,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 1,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1502 402c0,1 0,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 1,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1502 402c0,1 0,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 1,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1515 402c0,1 0,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 1,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1515 402c0,1 0,1 -1,1 -1,0 -2,0 -2,-1l0 -52c0,-1 1,-2 2,-2 1,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1528 402c0,1 0,1 -1,1 -1,0 -1,0 -1,-1l0 -52c0,-1 0,-2 1,-2 1,0 1,1 1,2l0 52z"/>
           <path class="fil19" d="M1528 402c0,1 0,1 -1,1 -1,0 -1,0 -1,-1l0 -52c0,-1 0,-2 1,-2 1,0 1,1 1,2l0 52z"/>
          </g>
         </g>
         <path class="fil19" d="M1533 405c0,2 -1,3 -3,3l-71 0c-2,0 -4,-1 -4,-3 0,-2 2,-3 4,-3l71 0c2,0 3,1 3,3z"/>
         <path class="fil19" d="M1533 405c0,2 -1,3 -3,3l-71 0c-2,0 -4,-1 -4,-3 0,-2 2,-3 4,-3l71 0c2,0 3,1 3,3z"/>
        </g>
       </g>
       <g>
        <g>
         <path class="fil17" d="M1465 400c0,1 0,2 -1,2l-5 0c0,0 -1,-1 -1,-2 0,-1 1,-2 1,-2l5 0c1,0 1,1 1,2z"/>
         <g>
          <g>
           <path class="fil17" d="M1465 400c0,1 0,2 -1,2l-5 0c0,0 -1,-1 -1,-2 0,-1 1,-2 1,-2l5 0c1,0 1,1 1,2z"/>
          </g>
         </g>
         <path class="fil14" d="M1465 394c0,1 0,2 -1,2l-5 0c0,0 -1,-1 -1,-2 0,-1 1,-2 1,-2l5 0c1,0 1,1 1,2z"/>
         <path class="fil14" d="M1465 394c0,1 0,2 -1,2l-5 0c0,0 -1,-1 -1,-2 0,-1 1,-2 1,-2l5 0c1,0 1,1 1,2z"/>
        </g>
       </g>
       <g>
        <g>
         <path class="fil17" d="M1479 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <g>
          <g>
           <path class="fil17" d="M1479 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          </g>
         </g>
         <path class="fil16" d="M1479 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <path class="fil16" d="M1479 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <path class="fil14" d="M1479 388c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <path class="fil14" d="M1479 388c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <g>
          <path class="fil17" d="M1479 382c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          <g>
           <path class="fil17" d="M1479 382c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          </g>
         </g>
        </g>
       </g>
       <g>
        <path class="fil14" d="M1492 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
        <g>
         <path class="fil14" d="M1492 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <g>
          <path class="fil17" d="M1492 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          <g>
           <path class="fil17" d="M1492 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          </g>
         </g>
         <path class="fil18" d="M1492 388c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <path class="fil18" d="M1492 388c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
        </g>
       </g>
       <g>
        <path class="fil18" d="M1505 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
        <g>
         <path class="fil18" d="M1505 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <g>
          <path class="fil17" d="M1505 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          <g>
           <path class="fil17" d="M1505 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          </g>
         </g>
         <path class="fil14" d="M1505 388c0,0 -1,1 -2,1l-4 0c-1,0 -2,-1 -2,-1 0,-2 1,-2 2,-2l4 0c1,0 2,0 2,2z"/>
         <path class="fil14" d="M1505 388c0,0 -1,1 -2,1l-4 0c-1,0 -2,-1 -2,-1 0,-2 1,-2 2,-2l4 0c1,0 2,0 2,2z"/>
         <g>
          <path class="fil17" d="M1505 381c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          <g>
           <path class="fil17" d="M1505 381c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          </g>
         </g>
         <path class="fil16" d="M1505 375c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <path class="fil16" d="M1505 375c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
        </g>
       </g>
       <g>
        <path class="fil16" d="M1518 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
        <g>
         <path class="fil16" d="M1518 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <g>
          <path class="fil17" d="M1518 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          <g>
           <path class="fil17" d="M1518 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
          </g>
         </g>
        </g>
       </g>
       <g>
        <path class="fil14" d="M1531 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
        <g>
         <path class="fil14" d="M1531 400c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <path class="fil18" d="M1531 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <path class="fil18" d="M1531 394c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <path class="fil16" d="M1531 388c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
         <path class="fil16" d="M1531 388c0,1 -1,2 -2,2l-4 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l4 0c1,0 2,1 2,2z"/>
        </g>
       </g>
      </g>
     </g>
     <g>
      <path class="fil16" d="M1501 572c6,0 11,-3 13,-6 -4,-2 -9,-2 -13,-2 -5,0 -9,0 -13,2 1,3 6,6 13,6z"/>
      <g>
       <path class="fil16" d="M1501 572c6,0 11,-3 13,-6 -4,-2 -9,-2 -13,-2 -5,0 -9,0 -13,2 1,3 6,6 13,6z"/>
       <g>
        <path class="fil12" d="M1508 570c-2,1 -5,2 -7,2 -3,0 -5,-1 -7,-1 -4,6 -20,37 -5,67 4,1 8,1 12,1 4,0 9,0 13,-2 15,-30 -2,-61 -6,-67z"/>
        <g>
         <path class="fil12" d="M1508 570c-2,1 -5,2 -7,2 -3,0 -5,-1 -7,-1 -4,6 -20,37 -5,67 4,1 8,1 12,1 4,0 9,0 13,-2 15,-30 -2,-61 -6,-67z"/>
         <path class="fil18" d="M1494 571c-3,-1 -5,-3 -6,-5 -16,5 -27,19 -27,35 0,17 12,32 28,37 -15,-30 1,-61 5,-67z"/>
         <path class="fil18" d="M1494 571c-3,-1 -5,-3 -6,-5 -16,5 -27,19 -27,35 0,17 12,32 28,37 -15,-30 1,-61 5,-67z"/>
         <g>
          <path class="fil17" d="M1541 601c0,-16 -12,-30 -27,-35 -1,2 -3,3 -6,4 4,6 21,37 6,67 16,-5 27,-19 27,-36z"/>
          <g>
           <path class="fil17" d="M1541 601c0,-16 -12,-30 -27,-35 -1,2 -3,3 -6,4 4,6 21,37 6,67 16,-5 27,-19 27,-36z"/>
          </g>
         </g>
        </g>
       </g>
      </g>
     </g>
     <g>
      <g>
       <path class="fil14" d="M1635 282l-14 0c0,0 0,0 0,0l0 -44c0,-2 -2,-4 -4,-4 -3,0 -5,2 -5,4l0 44c0,0 0,0 0,0l-13 0c-3,0 -6,3 -6,6 0,3 3,5 6,5l36 0c3,0 5,-2 5,-5 0,-3 -2,-6 -5,-6z"/>
       <g>
        <g>
         <path class="fil14" d="M1635 282l-14 0c0,0 0,0 0,0l0 -44c0,-2 -2,-4 -4,-4 -3,0 -5,2 -5,4l0 44c0,0 0,0 0,0l-13 0c-3,0 -6,3 -6,6 0,3 3,5 6,5l36 0c3,0 5,-2 5,-5 0,-3 -2,-6 -5,-6z"/>
         <g>
          <g>
           <path class="fil17" d="M1635 266c0,3 -2,6 -5,6l-27 0c-3,0 -5,-3 -5,-6 0,-3 2,-5 5,-5l27 0c3,0 5,2 5,5z"/>
           <g>
            <g>
             <path class="fil17" d="M1635 266c0,3 -2,6 -5,6l-27 0c-3,0 -5,-3 -5,-6 0,-3 2,-5 5,-5l27 0c3,0 5,2 5,5z"/>
            </g>
           </g>
           <path class="fil16" d="M1632 256c0,3 -2,5 -4,5l-22 0c-3,0 -5,-2 -5,-5 0,-2 2,-4 5,-4l22 0c2,0 4,2 4,4z"/>
           <path class="fil16" d="M1632 256c0,3 -2,5 -4,5l-22 0c-3,0 -5,-2 -5,-5 0,-2 2,-4 5,-4l22 0c2,0 4,2 4,4z"/>
           <g>
            <path class="fil17" d="M1630 248c0,2 -2,4 -4,4l-18 0c-2,0 -4,-2 -4,-4 0,-2 2,-4 4,-4l18 0c2,0 4,2 4,4z"/>
            <g>
             <path class="fil17" d="M1630 248c0,2 -2,4 -4,4l-18 0c-2,0 -4,-2 -4,-4 0,-2 2,-4 4,-4l18 0c2,0 4,2 4,4z"/>
            </g>
           </g>
           <path class="fil16" d="M1638 277c0,3 -3,5 -6,5l-30 0c-4,0 -7,-2 -7,-5 0,-3 3,-5 7,-5l30 0c3,0 6,2 6,5z"/>
           <path class="fil16" d="M1638 277c0,3 -3,5 -6,5l-30 0c-4,0 -7,-2 -7,-5 0,-3 3,-5 7,-5l30 0c3,0 6,2 6,5z"/>
          </g>
         </g>
        </g>
       </g>
      </g>
     </g>
     <g>
      <polygon class="fil14" points="1645,639 1667,567 1674,569 1674,581 1655,639 "/>
      <g>
       <polygon class="fil14" points="1645,639 1667,567 1674,569 1674,581 1655,639 "/>
       <polygon class="fil18" points="1645,639 1635,639 1658,564 1667,566 "/>
       <polygon class="fil18" points="1645,639 1635,639 1658,564 1667,566 "/>
       <polygon class="fil16" points="1635,639 1624,639 1645,573 1654,576 "/>
       <polygon class="fil16" points="1635,639 1624,639 1645,573 1654,576 "/>
      </g>
     </g>
     <g>
      <polygon class="fil16" points="1475,524 1462,524 1462,477 1475,477 "/>
      <g>
       <polygon class="fil16" points="1475,524 1462,524 1462,477 1475,477 "/>
       <polygon class="fil14" points="1488,524 1475,524 1475,436 1488,436 "/>
       <polygon class="fil14" points="1488,524 1475,524 1475,436 1488,436 "/>
       <g>
        <polygon class="fil20" points="1501,524 1488,524 1488,461 1501,461 "/>
        <g>
         <polygon class="fil20" points="1501,524 1488,524 1488,461 1501,461 "/>
        </g>
       </g>
       <g>
        <polygon class="fil17" points="1513,524 1501,524 1501,447 1513,447 "/>
        <g>
         <polygon class="fil17" points="1513,524 1501,524 1501,447 1513,447 "/>
        </g>
       </g>
       <g>
        <polygon class="fil20" points="1513,524 1526,524 1526,447 1513,447 "/>
        <g>
         <polygon class="fil20" points="1513,524 1526,524 1526,447 1513,447 "/>
        </g>
       </g>
      </g>
     </g>
     <g>
      <polygon class="fil12" points="1664,374 1580,374 1580,368 1664,368 "/>
      <g>
       <polygon class="fil12" points="1664,374 1580,374 1580,368 1664,368 "/>
       <g>
        <polygon class="fil17" points="1659,386 1575,386 1575,374 1659,374 "/>
        <g>
         <polygon class="fil17" points="1659,386 1575,386 1575,374 1659,374 "/>
        </g>
       </g>
       <polygon class="fil21" points="1665,397 1573,397 1573,386 1665,386 "/>
       <polygon class="fil21" points="1665,397 1573,397 1573,386 1665,386 "/>
       <polygon class="fil22" points="1568,397 1665,397 1665,408 1568,408 "/>
       <polygon class="fil22" points="1568,397 1665,397 1665,408 1568,408 "/>
      </g>
     </g>
     <g>
      <g>
       <path class="fil17" d="M1597 335c0,0 -3,-1 -4,0 0,1 0,4 4,4 4,0 0,-4 0,-4z"/>
       <g>
        <g>
         <path class="fil17" d="M1597 335c0,0 -3,-1 -4,0 0,1 0,4 4,4 4,0 0,-4 0,-4z"/>
        </g>
       </g>
       <g>
        <path class="fil17" d="M1595 338c0,0 -2,4 -1,5 1,0 4,-1 4,-2 0,-1 -2,-2 -2,-2l-1 -1z"/>
        <g>
         <path class="fil17" d="M1595 338c0,0 -2,4 -1,5 1,0 4,-1 4,-2 0,-1 -2,-2 -2,-2l-1 -1z"/>
        </g>
       </g>
       <path class="fil23" d="M1619 344c-2,0 -3,-2 -2,-3 1,-5 1,-16 -10,-16 -16,0 -12,20 -7,20 -7,5 -2,15 -2,15 0,0 5,7 11,8 5,0 22,0 22,0 0,0 13,-7 14,-17 2,-10 -2,-13 -6,-13 -3,0 -5,4 -9,5 -3,2 -8,2 -11,1z"/>
       <path class="fil23" d="M1619 344c-2,0 -3,-2 -2,-3 1,-5 1,-16 -10,-16 -16,0 -12,20 -7,20 -7,5 -2,15 -2,15 0,0 5,7 11,8 5,0 22,0 22,0 0,0 13,-7 14,-17 2,-10 -2,-13 -6,-13 -3,0 -5,4 -9,5 -3,2 -8,2 -11,1z"/>
       <g>
        <path class="fil17" d="M1631 357c0,3 -5,5 -11,5 -6,0 -11,-2 -11,-5 0,-4 5,-6 11,-6 6,0 11,2 11,6z"/>
        <g>
         <path class="fil17" d="M1631 357c0,3 -5,5 -11,5 -6,0 -11,-2 -11,-5 0,-4 5,-6 11,-6 6,0 11,2 11,6z"/>
        </g>
       </g>
       <g>
        <path class="fil12" d="M1606 335c0,2 -2,4 -4,4 -2,0 -4,-2 -4,-4 0,-2 2,-4 4,-4 2,0 4,2 4,4z"/>
        <g>
         <path class="fil12" d="M1606 335c0,2 -2,4 -4,4 -2,0 -4,-2 -4,-4 0,-2 2,-4 4,-4 2,0 4,2 4,4z"/>
         <path class="fil24" d="M1605 335c0,1 -1,2 -3,2 -1,0 -2,-1 -2,-2 0,-1 1,-3 2,-3 2,0 3,2 3,3z"/>
         <path class="fil24" d="M1605 335c0,1 -1,2 -3,2 -1,0 -2,-1 -2,-2 0,-1 1,-3 2,-3 2,0 3,2 3,3z"/>
         <path class="fil12" d="M1603 334c0,1 -1,1 -2,1 0,0 -1,0 -1,-1 0,-1 1,-1 1,-1 1,0 2,0 2,1z"/>
         <path class="fil12" d="M1603 334c0,1 -1,1 -2,1 0,0 -1,0 -1,-1 0,-1 1,-1 1,-1 1,0 2,0 2,1z"/>
        </g>
       </g>
       <g>
        <path class="fil25" d="M1600 331c0,0 0,-1 1,-1 0,0 0,0 1,-1 0,0 0,0 0,0 1,0 1,0 1,0 0,0 1,0 1,1 0,0 0,0 0,0 1,0 1,0 1,0 0,0 0,0 0,1 1,0 1,0 1,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 -1,0 -1,0 0,-1 0,-1 0,-1 0,0 0,0 -1,0 0,0 0,0 0,0 0,0 -1,0 -1,0 0,0 0,-1 -1,-1 0,1 0,1 0,1 -1,0 -1,0 -1,0 -1,0 -1,1 -1,1z"/>
        <g>
         <path class="fil25" d="M1600 331c0,0 0,-1 1,-1 0,0 0,0 1,-1 0,0 0,0 0,0 1,0 1,0 1,0 0,0 1,0 1,1 0,0 0,0 0,0 1,0 1,0 1,0 0,0 0,0 0,1 1,0 1,0 1,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 -1,0 -1,0 0,-1 0,-1 0,-1 0,0 0,0 -1,0 0,0 0,0 0,0 0,0 -1,0 -1,0 0,0 0,-1 -1,-1 0,1 0,1 0,1 -1,0 -1,0 -1,0 -1,0 -1,1 -1,1z"/>
        </g>
       </g>
      </g>
     </g>
     <g>
      <g>
       <path class="fil26" d="M1590 604c0,3 -2,6 -6,6 -3,0 -6,-3 -6,-6 0,-3 3,-6 6,-6 4,0 6,3 6,6z"/>
       <g>
        <g>
         <path class="fil26" d="M1590 604c0,3 -2,6 -6,6 -3,0 -6,-3 -6,-6 0,-3 3,-6 6,-6 4,0 6,3 6,6z"/>
        </g>
       </g>
       <g>
        <path class="fil26" d="M1619 604c0,3 -3,6 -6,6 -4,0 -6,-3 -6,-6 0,-3 2,-6 6,-6 3,0 6,3 6,6z"/>
        <g>
         <path class="fil26" d="M1619 604c0,3 -3,6 -6,6 -4,0 -6,-3 -6,-6 0,-3 2,-6 6,-6 3,0 6,3 6,6z"/>
        </g>
       </g>
       <g>
        <path class="fil17" d="M1609 639c7,-4 12,-11 12,-19 0,-12 -10,-21 -22,-21 -12,0 -22,9 -22,21 0,8 6,16 13,19l19 0z"/>
        <g>
         <path class="fil17" d="M1609 639c7,-4 12,-11 12,-19 0,-12 -10,-21 -22,-21 -12,0 -22,9 -22,21 0,8 6,16 13,19l19 0z"/>
        </g>
       </g>
       <path class="fil27" d="M1592 613c0,1 -1,3 -2,3 -2,0 -3,-2 -3,-3 0,-1 1,-3 3,-3 1,0 2,2 2,3z"/>
       <path class="fil27" d="M1592 613c0,1 -1,3 -2,3 -2,0 -3,-2 -3,-3 0,-1 1,-3 3,-3 1,0 2,2 2,3z"/>
       <path class="fil27" d="M1611 613c0,1 -2,3 -3,3 -2,0 -3,-2 -3,-3 0,-1 1,-3 3,-3 1,0 3,2 3,3z"/>
       <path class="fil27" d="M1611 613c0,1 -2,3 -3,3 -2,0 -3,-2 -3,-3 0,-1 1,-3 3,-3 1,0 3,2 3,3z"/>
       <path class="fil12" d="M1607 627c0,4 -4,8 -8,8 -5,0 -9,-4 -9,-8 0,-5 4,-8 9,-8 4,0 8,3 8,8z"/>
       <path class="fil12" d="M1607 627c0,4 -4,8 -8,8 -5,0 -9,-4 -9,-8 0,-5 4,-8 9,-8 4,0 8,3 8,8z"/>
       <path class="fil27" d="M1597 627c0,1 -1,1 -1,1 -1,0 -2,0 -2,-1 0,-1 1,-2 2,-2 0,0 1,1 1,2z"/>
       <path class="fil27" d="M1597 627c0,1 -1,1 -1,1 -1,0 -2,0 -2,-1 0,-1 1,-2 2,-2 0,0 1,1 1,2z"/>
       <path class="fil27" d="M1604 627c0,1 -1,1 -2,1 -1,0 -2,0 -2,-1 0,-1 1,-2 2,-2 1,0 2,1 2,2z"/>
       <path class="fil27" d="M1604 627c0,1 -1,1 -2,1 -1,0 -2,0 -2,-1 0,-1 1,-2 2,-2 1,0 2,1 2,2z"/>
      </g>
     </g>
     <g>
      <path class="fil14" d="M1411 384c0,13 -11,23 -24,23 -14,0 -25,-10 -25,-23 0,-13 11,-24 25,-24 13,0 24,11 24,24z"/>
      <g>
       <path class="fil14" d="M1411 384c0,13 -11,23 -24,23 -14,0 -25,-10 -25,-23 0,-13 11,-24 25,-24 13,0 24,11 24,24z"/>
       <path class="fil14" d="M1382 360c1,2 0,4 -2,5 -2,1 -5,-1 -6,-3 0,-2 1,-5 3,-5 2,-1 4,0 5,3z"/>
       <path class="fil14" d="M1382 360c1,2 0,4 -2,5 -2,1 -5,-1 -6,-3 0,-2 1,-5 3,-5 2,-1 4,0 5,3z"/>
       <path class="fil14" d="M1401 362c-1,3 -3,4 -5,3 -3,-1 -3,-4 -2,-6 1,-2 3,-3 5,-2 2,1 3,3 2,5z"/>
       <path class="fil14" d="M1401 362c-1,3 -3,4 -5,3 -3,-1 -3,-4 -2,-6 1,-2 3,-3 5,-2 2,1 3,3 2,5z"/>
       <path class="fil12" d="M1385 376c0,4 -4,8 -9,8 -5,0 -9,-4 -9,-8 0,-5 4,-9 9,-9 5,0 9,4 9,9z"/>
       <path class="fil12" d="M1385 376c0,4 -4,8 -9,8 -5,0 -9,-4 -9,-8 0,-5 4,-9 9,-9 5,0 9,4 9,9z"/>
       <path class="fil12" d="M1406 376c0,4 -4,8 -9,8 -4,0 -8,-4 -8,-8 0,-5 4,-9 8,-9 5,0 9,4 9,9z"/>
       <path class="fil12" d="M1406 376c0,4 -4,8 -9,8 -4,0 -8,-4 -8,-8 0,-5 4,-9 8,-9 5,0 9,4 9,9z"/>
       <path class="fil28" d="M1380 376c0,2 -2,3 -4,3 -2,0 -3,-1 -3,-3 0,-2 1,-4 3,-4 2,0 4,2 4,4z"/>
       <path class="fil28" d="M1380 376c0,2 -2,3 -4,3 -2,0 -3,-1 -3,-3 0,-2 1,-4 3,-4 2,0 4,2 4,4z"/>
       <path class="fil28" d="M1401 376c0,2 -2,3 -4,3 -2,0 -3,-1 -3,-3 0,-2 1,-4 3,-4 2,0 4,2 4,4z"/>
       <path class="fil28" d="M1401 376c0,2 -2,3 -4,3 -2,0 -3,-1 -3,-3 0,-2 1,-4 3,-4 2,0 4,2 4,4z"/>
       <path class="fil12" d="M1376 377c0,0 -1,-1 -1,-1 0,-1 1,-1 1,-1 1,0 1,0 1,1 0,0 0,1 -1,1z"/>
       <path class="fil12" d="M1376 377c0,0 -1,-1 -1,-1 0,-1 1,-1 1,-1 1,0 1,0 1,1 0,0 0,1 -1,1z"/>
       <path class="fil12" d="M1397 377c0,0 -1,-1 -1,-1 0,-1 1,-1 1,-1 1,0 2,0 2,1 0,0 -1,1 -2,1z"/>
       <path class="fil12" d="M1397 377c0,0 -1,-1 -1,-1 0,-1 1,-1 1,-1 1,0 2,0 2,1 0,0 -1,1 -2,1z"/>
       <path class="fil29" d="M1392 389c0,3 -2,5 -5,5 -3,0 -6,-2 -6,-5 0,-3 3,-5 6,-5 3,0 5,2 5,5z"/>
       <path class="fil29" d="M1392 389c0,3 -2,5 -5,5 -3,0 -6,-2 -6,-5 0,-3 3,-5 6,-5 3,0 5,2 5,5z"/>
       <path class="fil29" d="M1389 399c0,2 -2,4 -5,4 -4,0 -6,-2 -6,-4l11 0z"/>
       <path class="fil29" d="M1389 399c0,2 -2,4 -5,4 -4,0 -6,-2 -6,-4l11 0z"/>
      </g>
     </g>
     <g>
      <polygon class="fil16" points="1344,353 1325,353 1325,335 1344,335 "/>
      <g>
       <polygon class="fil16" points="1344,353 1325,353 1325,335 1344,335 "/>
       <polygon class="fil18" points="1351,371 1332,371 1332,353 1351,353 "/>
       <polygon class="fil18" points="1351,371 1332,371 1332,353 1351,353 "/>
       <polygon class="fil12" points="1344,389 1325,389 1325,371 1344,371 "/>
       <polygon class="fil12" points="1344,389 1325,389 1325,371 1344,371 "/>
       <polygon class="fil29" points="1349,407 1330,407 1330,389 1349,389 "/>
       <polygon class="fil29" points="1349,407 1330,407 1330,389 1349,389 "/>
      </g>
     </g>
     <g>
      <polygon class="fil18" points="1421,293 1407,293 1407,212 1421,212 "/>
      <g>
       <polygon class="fil18" points="1421,293 1407,293 1407,212 1421,212 "/>
       <polygon class="fil16" points="1407,293 1393,293 1393,212 1407,212 "/>
       <polygon class="fil16" points="1407,293 1393,293 1393,212 1407,212 "/>
       <polygon class="fil22" points="1393,293 1379,293 1379,221 1393,221 "/>
       <polygon class="fil22" points="1393,293 1379,293 1379,221 1393,221 "/>
       <polygon class="fil14" points="1379,293 1371,293 1371,215 1379,215 "/>
       <polygon class="fil14" points="1379,293 1371,293 1371,215 1379,215 "/>
       <g>
        <polygon class="fil17" points="1371,293 1358,293 1358,232 1371,232 "/>
        <g>
         <polygon class="fil17" points="1371,293 1358,293 1358,232 1371,232 "/>
        </g>
       </g>
       <polygon class="fil12" points="1358,293 1342,293 1342,232 1358,232 "/>
       <polygon class="fil12" points="1358,293 1342,293 1342,232 1358,232 "/>
       <polygon class="fil14" points="1329,238 1342,240 1330,293 1316,293 "/>
       <polygon class="fil14" points="1329,238 1342,240 1330,293 1316,293 "/>
      </g>
     </g>
     <g>
      <g>
       <polygon class="fil17" points="1417,467 1335,467 1335,453 1417,453 "/>
       <g>
        <g>
         <polygon class="fil17" points="1417,467 1335,467 1335,453 1417,453 "/>
        </g>
       </g>
       <g>
        <polygon class="fil20" points="1402,480 1319,480 1319,467 1402,467 "/>
        <g>
         <polygon class="fil20" points="1402,480 1319,480 1319,467 1402,467 "/>
        </g>
       </g>
       <polygon class="fil14" points="1321,480 1410,480 1410,495 1321,495 "/>
       <polygon class="fil14" points="1321,480 1410,480 1410,495 1321,495 "/>
       <polygon class="fil12" points="1328,495 1409,495 1409,508 1328,508 "/>
       <polygon class="fil12" points="1328,495 1409,495 1409,508 1328,508 "/>
       <polygon class="fil30" points="1324,508 1417,508 1417,524 1324,524 "/>
       <polygon class="fil30" points="1324,508 1417,508 1417,524 1324,524 "/>
      </g>
     </g>
     <g>
      <path class="fil31" d="M1396 635c0,0 1,-13 -12,-13 -13,0 -12,13 -12,13l-11 0c0,0 1,-13 -12,-13 -13,0 -13,13 -13,13l0 0c-9,0 -14,-7 -12,-16l3 -7c3,-7 6,-16 15,-16l49 0c6,0 8,6 8,8l5 16c1,5 0,15 -8,15z"/>
      <g>
       <path class="fil31" d="M1396 635c0,0 1,-13 -12,-13 -13,0 -12,13 -12,13l-11 0c0,0 1,-13 -12,-13 -13,0 -13,13 -13,13l0 0c-9,0 -14,-7 -12,-16l3 -7c3,-7 6,-16 15,-16l49 0c6,0 8,6 8,8l5 16c1,5 0,15 -8,15z"/>
       <path class="fil32" d="M1327 611c0,0 1,-3 3,-6 1,-2 3,-5 3,-5 1,0 17,-1 17,-1l23 0 13 0 10 0 1 1 1 1 1 3 2 7c0,0 -2,1 -3,1 0,0 -20,0 -20,0l-24 -1 -27 0z"/>
       <path class="fil32" d="M1327 611c0,0 1,-3 3,-6 1,-2 3,-5 3,-5 1,0 17,-1 17,-1l23 0 13 0 10 0 1 1 1 1 1 3 2 7c0,0 -2,1 -3,1 0,0 -20,0 -20,0l-24 -1 -27 0z"/>
       <g>
        <path class="fil12" d="M1398 600c0,0 0,0 0,0 0,0 0,0 0,0z"/>
        <g>
         <path class="fil12" d="M1398 600c0,0 0,0 0,0 0,0 0,0 0,0z"/>
         <path class="fil12" d="M1399 604c0,0 0,0 0,-1 0,0 0,0 0,0 0,0 0,1 0,1z"/>
         <path class="fil12" d="M1399 604c0,0 0,0 0,-1 0,0 0,0 0,0 0,0 0,1 0,1z"/>
         <path class="fil12" d="M1398 602c0,0 1,0 1,1 0,-1 -1,-1 -1,-1z"/>
         <path class="fil12" d="M1398 602c0,0 1,0 1,1 0,-1 -1,-1 -1,-1z"/>
         <path class="fil12" d="M1400 606c0,2 1,5 1,5l-6 0c-2,0 -4,-2 -4,-4l0 -5c0,-1 1,-2 2,-2l4 0c0,0 0,0 0,0 -1,-3 -3,-4 -7,-4l-48 0c-4,0 -7,2 -9,4l6 0c1,0 2,1 2,2l-1 5c0,1 -1,3 -4,4l-9 0c0,1 0,2 0,2l75 0c0,0 -1,-4 -2,-7zm-40 1l0 0c0,2 0,4 -3,4l-11 0c-3,0 -3,-2 -3,-5l1 -3c0,-2 2,-3 4,-3l9 0c2,0 3,2 3,4l0 3zm27 0l0 0c0,2 -2,4 -4,4l-15 0c-2,0 -4,-2 -4,-4l0 -3c0,-3 2,-4 4,-4l15 0c2,0 4,1 4,4l0 3z"/>
         <path class="fil12" d="M1400 606c0,2 1,5 1,5l-6 0c-2,0 -4,-2 -4,-4l0 -5c0,-1 1,-2 2,-2l4 0c0,0 0,0 0,0 -1,-3 -3,-4 -7,-4l-48 0c-4,0 -7,2 -9,4l6 0c1,0 2,1 2,2l-1 5c0,1 -1,3 -4,4l-9 0c0,1 0,2 0,2l75 0c0,0 -1,-4 -2,-7zm-40 1l0 0c0,2 0,4 -3,4l-11 0c-3,0 -3,-2 -3,-5l1 -3c0,-2 2,-3 4,-3l9 0c2,0 3,2 3,4l0 3zm27 0l0 0c0,2 -2,4 -4,4l-15 0c-2,0 -4,-2 -4,-4l0 -3c0,-3 2,-4 4,-4l15 0c2,0 4,1 4,4l0 3z"/>
        </g>
       </g>
       <path class="fil12" d="M1361 635c0,1 -5,1 -5,0 0,-3 -1,-9 -7,-9 -6,0 -7,6 -8,9 0,1 -5,1 -5,0 0,-8 6,-13 13,-13 7,0 12,5 12,13z"/>
       <path class="fil12" d="M1361 635c0,1 -5,1 -5,0 0,-3 -1,-9 -7,-9 -6,0 -7,6 -8,9 0,1 -5,1 -5,0 0,-8 6,-13 13,-13 7,0 12,5 12,13z"/>
       <path class="fil25" d="M1356 632c0,4 -3,7 -7,7 -4,0 -7,-3 -7,-7 0,-3 3,-6 7,-6 4,0 7,3 7,6z"/>
       <path class="fil25" d="M1356 632c0,4 -3,7 -7,7 -4,0 -7,-3 -7,-7 0,-3 3,-6 7,-6 4,0 7,3 7,6z"/>
       <path class="fil12" d="M1353 632c0,3 -2,5 -4,5 -2,0 -4,-2 -4,-5 0,-2 2,-4 4,-4 2,0 4,2 4,4z"/>
       <path class="fil12" d="M1353 632c0,3 -2,5 -4,5 -2,0 -4,-2 -4,-5 0,-2 2,-4 4,-4 2,0 4,2 4,4z"/>
       <path class="fil25" d="M1351 632c0,1 -1,2 -2,2 -1,0 -2,-1 -2,-2 0,-1 1,-1 2,-1 1,0 2,0 2,1z"/>
       <path class="fil25" d="M1351 632c0,1 -1,2 -2,2 -1,0 -2,-1 -2,-2 0,-1 1,-1 2,-1 1,0 2,0 2,1z"/>
       <path class="fil12" d="M1396 635c0,1 -5,1 -5,0 0,-3 -1,-9 -7,-9 -6,0 -7,6 -8,9 0,1 -5,1 -5,0 0,-8 6,-13 13,-13 7,0 12,5 12,13z"/>
       <path class="fil12" d="M1396 635c0,1 -5,1 -5,0 0,-3 -1,-9 -7,-9 -6,0 -7,6 -8,9 0,1 -5,1 -5,0 0,-8 6,-13 13,-13 7,0 12,5 12,13z"/>
       <path class="fil25" d="M1391 632c0,4 -3,7 -7,7 -4,0 -7,-3 -7,-7 0,-3 3,-6 7,-6 4,0 7,3 7,6z"/>
       <path class="fil25" d="M1391 632c0,4 -3,7 -7,7 -4,0 -7,-3 -7,-7 0,-3 3,-6 7,-6 4,0 7,3 7,6z"/>
       <path class="fil12" d="M1389 632c0,3 -3,5 -5,5 -2,0 -4,-2 -4,-5 0,-2 2,-4 4,-4 2,0 5,2 5,4z"/>
       <path class="fil12" d="M1389 632c0,3 -3,5 -5,5 -2,0 -4,-2 -4,-5 0,-2 2,-4 4,-4 2,0 5,2 5,4z"/>
       <path class="fil25" d="M1386 632c0,1 -1,2 -2,2 -1,0 -2,-1 -2,-2 0,-1 1,-1 2,-1 1,0 2,0 2,1z"/>
       <path class="fil25" d="M1386 632c0,1 -1,2 -2,2 -1,0 -2,-1 -2,-2 0,-1 1,-1 2,-1 1,0 2,0 2,1z"/>
       <path class="fil12" d="M1329 621c0,2 0,4 -1,4 -1,0 -2,-2 -2,-4 0,-2 1,-4 2,-4 1,0 1,2 1,4z"/>
       <path class="fil12" d="M1329 621c0,2 0,4 -1,4 -1,0 -2,-2 -2,-4 0,-2 1,-4 2,-4 1,0 1,2 1,4z"/>
      </g>
     </g>
     <g>
      <polygon class="fil12" points="1535,290 1455,290 1455,223 1535,223 "/>
      <g>
       <polygon class="fil12" points="1535,290 1455,290 1455,223 1535,223 "/>
       <polygon class="fil33" points="1528,283 1461,283 1461,231 1528,231 "/>
       <polygon class="fil33" points="1528,283 1461,283 1461,231 1528,231 "/>
       <polygon class="fil14" points="1524,279 1465,279 1465,235 1524,235 "/>
       <polygon class="fil14" points="1524,279 1465,279 1465,235 1524,235 "/>
       <path class="fil12" d="M1511 255c0,-2 -1,-4 -3,-5 0,-1 -1,-2 -1,-2l0 0c-1,-1 -2,-2 -4,-2 -1,0 -1,0 -1,0 -1,-3 -3,-6 -7,-6 -3,0 -5,2 -6,5 -1,0 -2,-1 -3,-1 -3,0 -5,3 -5,5 0,1 0,1 0,1 -3,1 -4,3 -4,5 0,3 2,6 5,6 0,0 0,-1 0,-1l0 1c0,0 22,2 26,-2 0,0 1,0 1,0 1,-1 2,-2 2,-4z"/>
       <path class="fil12" d="M1511 255c0,-2 -1,-4 -3,-5 0,-1 -1,-2 -1,-2l0 0c-1,-1 -2,-2 -4,-2 -1,0 -1,0 -1,0 -1,-3 -3,-6 -7,-6 -3,0 -5,2 -6,5 -1,0 -2,-1 -3,-1 -3,0 -5,3 -5,5 0,1 0,1 0,1 -3,1 -4,3 -4,5 0,3 2,6 5,6 0,0 0,-1 0,-1l0 1c0,0 22,2 26,-2 0,0 1,0 1,0 1,-1 2,-2 2,-4z"/>
       <path class="fil16" d="M1490 267c0,1 -1,2 -2,2 -1,0 -1,-1 -1,-2 0,-1 1,-3 1,-3 0,0 2,2 2,3z"/>
       <path class="fil16" d="M1490 267c0,1 -1,2 -2,2 -1,0 -1,-1 -1,-2 0,-1 1,-3 1,-3 0,0 2,2 2,3z"/>
       <path class="fil16" d="M1495 267c0,1 0,2 -1,2 -1,0 -2,-1 -2,-2 0,-1 2,-3 2,-3 0,0 1,2 1,3z"/>
       <path class="fil16" d="M1495 267c0,1 0,2 -1,2 -1,0 -2,-1 -2,-2 0,-1 2,-3 2,-3 0,0 1,2 1,3z"/>
       <path class="fil16" d="M1501 267c0,1 0,2 -1,2 -1,0 -2,-1 -2,-2 0,-1 2,-4 2,-4 0,0 1,3 1,4z"/>
       <path class="fil16" d="M1501 267c0,1 0,2 -1,2 -1,0 -2,-1 -2,-2 0,-1 2,-4 2,-4 0,0 1,3 1,4z"/>
       <path class="fil16" d="M1493 272c0,1 -1,2 -2,2 0,0 -1,-1 -1,-2 0,-1 1,-3 1,-3 0,0 2,2 2,3z"/>
       <path class="fil16" d="M1493 272c0,1 -1,2 -2,2 0,0 -1,-1 -1,-2 0,-1 1,-3 1,-3 0,0 2,2 2,3z"/>
       <path class="fil16" d="M1499 272c0,1 -1,2 -2,2 -1,0 -2,-1 -2,-2 0,-1 2,-3 2,-3 0,0 2,2 2,3z"/>
       <path class="fil16" d="M1499 272c0,1 -1,2 -2,2 -1,0 -2,-1 -2,-2 0,-1 2,-3 2,-3 0,0 2,2 2,3z"/>
      </g>
     </g>
    </g>
   </g>
   <g>
    <path class="fil17" d="M205 658l-95 0c-6,0 -11,-5 -11,-11 0,-6 5,-11 11,-11l95 0c6,0 11,5 11,11 0,6 -5,11 -11,11z"/>
    <g>
     <path class="fil17" d="M205 658l-95 0c-6,0 -11,-5 -11,-11 0,-6 5,-11 11,-11l95 0c6,0 11,5 11,11 0,6 -5,11 -11,11z"/>
    </g>
   </g>
   <path class="fil9" d="M447 657l-163 0c-6,0 -11,-5 -11,-11 0,-6 5,-11 11,-11l163 0c6,0 11,5 11,11 0,6 -5,11 -11,11z"/>
   <path class="fil9" d="M447 657l-163 0c-6,0 -11,-5 -11,-11 0,-6 5,-11 11,-11l163 0c6,0 11,5 11,11 0,6 -5,11 -11,11z"/>
   <path class="fil23" d="M433 635l-127 0c-6,0 -11,-5 -11,-12l0 -1c0,-6 5,-11 11,-11l127 0c6,0 11,5 11,11l0 1c0,7 -5,12 -11,12z"/>
   <path class="fil23" d="M433 635l-127 0c-6,0 -11,-5 -11,-12l0 -1c0,-6 5,-11 11,-11l127 0c6,0 11,5 11,11l0 1c0,7 -5,12 -11,12z"/>
   <path class="fil18" d="M465 718l-384 0c-7,0 -12,-6 -12,-13l0 -36c0,-6 5,-12 12,-12l384 0c7,0 12,6 12,12l0 36c0,7 -5,13 -12,13z"/>
   <path class="fil18" d="M465 718l-384 0c-7,0 -12,-6 -12,-13l0 -36c0,-6 5,-12 12,-12l384 0c7,0 12,6 12,12l0 36c0,7 -5,13 -12,13z"/>
   <path class="fil34 str0" d="M410 587c3,4 7,8 3,16 -4,7 -19,4 -21,4 -2,0 -10,-3 -11,-4 -2,-2 -5,-10 0,-14 7,-4 23,-11 29,-2z"/>
   <path class="fil34 str0" d="M410 587c3,4 7,8 3,16 -4,7 -19,4 -21,4 -2,0 -10,-3 -11,-4 -2,-2 -5,-10 0,-14 7,-4 23,-11 29,-2z"/>
   <path class="fil34 str0" d="M422 507c0,0 2,8 0,18 -1,9 -6,21 -9,24 -3,3 -2,7 -2,8 0,2 -1,6 -1,7 -1,0 -1,2 0,2 0,1 1,9 -1,11 0,2 -2,5 -3,6 -8,-2 -22,4 -27,7 0,1 4,2 5,7 1,3 0,4 0,5 0,1 0,2 0,2 -1,2 -6,6 -8,7 -2,0 -20,2 -30,-5 -10,-6 -10,-17 -10,-23 0,-5 -3,-18 -5,-21 -3,-3 -5,-13 -5,-14 0,-1 0,-1 0,-2 1,0 2,0 3,0 1,-2 5,-6 5,-11 -1,-6 -3,-8 -4,-9 -3,-2 -12,-3 -16,0 -1,0 -1,0 -2,0 0,0 -2,-2 -2,-4 0,-2 0,-4 0,-6 1,-2 5,-11 5,-13 1,-2 4,-5 4,-6 1,-1 0,-5 2,-7 1,-1 6,-8 7,-11 2,-4 8,-8 9,-9 2,-1 5,-4 6,-7 0,0 0,0 0,0 4,1 9,3 14,4 3,0 6,1 9,1 6,4 15,6 25,3 0,0 9,-1 14,-6 3,0 6,2 9,3 5,2 10,10 13,11 3,1 15,10 17,14 2,5 5,11 5,13 0,3 -8,4 -9,5 -2,2 -4,5 -4,5 -1,1 -7,-2 -10,-5 -3,-3 -4,-4 -4,-4zm-45 73l0 0c0,0 -3,6 -3,7 -1,0 5,2 5,2 0,1 -2,-6 -2,-9z"/>
   <path class="fil34 str0" d="M422 507c0,0 2,8 0,18 -1,9 -6,21 -9,24 -3,3 -2,7 -2,8 0,2 -1,6 -1,7 -1,0 -1,2 0,2 0,1 1,9 -1,11 0,2 -2,5 -3,6 -8,-2 -22,4 -27,7 0,1 4,2 5,7 1,3 0,4 0,5 0,1 0,2 0,2 -1,2 -6,6 -8,7 -2,0 -20,2 -30,-5 -10,-6 -10,-17 -10,-23 0,-5 -3,-18 -5,-21 -3,-3 -5,-13 -5,-14 0,-1 0,-1 0,-2 1,0 2,0 3,0 1,-2 5,-6 5,-11 -1,-6 -3,-8 -4,-9 -3,-2 -12,-3 -16,0 -1,0 -1,0 -2,0 0,0 -2,-2 -2,-4 0,-2 0,-4 0,-6 1,-2 5,-11 5,-13 1,-2 4,-5 4,-6 1,-1 0,-5 2,-7 1,-1 6,-8 7,-11 2,-4 8,-8 9,-9 2,-1 5,-4 6,-7 0,0 0,0 0,0 4,1 9,3 14,4 3,0 6,1 9,1 11,1 16,4 26,1 0,0 5,-1 13,-5 2,1 6,3 9,4 5,2 10,10 13,11 3,1 15,10 17,14 2,5 5,11 5,13 0,3 -8,4 -9,5 -2,2 -4,5 -4,5 -1,1 -7,-2 -10,-5 -3,-3 -4,-4 -4,-4zm-45 73l0 0c0,0 -3,6 -3,7 -1,0 5,2 5,2 0,1 -2,-6 -2,-9z"/>
   <path class="fil35 str1" d="M377 580c0,0 5,-18 -7,-29"/>
   <path class="fil35 str1" d="M377 580c0,0 5,-18 -7,-29"/>
   <path class="fil35 str1" d="M345 544c0,0 -8,7 -11,12"/>
   <path class="fil35 str1" d="M345 544c0,0 -8,7 -11,12"/>
   <path class="fil35 str1" d="M411 553c0,0 -17,17 -33,21"/>
   <path class="fil35 str1" d="M411 553c0,0 -17,17 -33,21"/>
   <path class="fil35 str1" d="M388 472c0,0 38,57 -10,102"/>
   <path class="fil35 str1" d="M388 472c0,0 38,57 -10,102"/>
   <path class="fil35 str1" d="M408 473c0,0 12,18 14,34"/>
   <path class="fil35 str1" d="M408 473c0,0 12,18 14,34"/>
   <path class="fil35 str1" d="M411 516c0,0 -7,4 -18,2"/>
   <path class="fil35 str1" d="M411 516c0,0 -7,4 -18,2"/>
   <path class="fil35 str1" d="M410 519c0,0 -5,4 -16,2"/>
   <path class="fil35 str1" d="M410 519c0,0 -5,4 -16,2"/>
   <path class="fil35 str1" d="M355 484c0,0 -4,17 -16,23"/>
   <path class="fil35 str1" d="M355 484c0,0 -4,17 -16,23"/>
   <path class="fil35 str1" d="M353 475c0,0 -8,-11 -19,-3"/>
   <path class="fil35 str1" d="M353 475c0,0 -8,-11 -19,-3"/>
   <line class="fil35 str1" x1="334" y1="478" x2="322" y2= "488" />
   <line class="fil35 str1" x1="334" y1="478" x2="322" y2= "488" />
   <path class="fil35 str2" d="M325 496c0,0 -3,-1 -6,1 0,0 -4,8 -6,11 -1,4 -3,9 -3,9 0,0 -1,6 0,7 2,2 3,2 3,2 1,0 18,1 18,1"/>
   <line class="fil35 str2" x1="331" y1="527" x2="332" y2= "527" />
   <line class="fil35 str2" x1="331" y1="527" x2="332" y2= "527" />
   <path class="fil35 str2" d="M332 527c0,0 4,-1 5,-3 2,-3 4,-8 4,-9 0,-1 0,-9 2,-10"/>
   <path class="fil35 str1" d="M358 490c0,0 -8,10 -13,13 -5,3 -3,10 -4,13 -1,2 -3,9 -8,11 -5,1 -2,-6 -13,-5 -11,1 -9,3 -9,3"/>
   <path class="fil35 str1" d="M358 490c0,0 -8,10 -13,13 -5,3 -3,10 -4,13 -1,2 -3,9 -8,11 -5,1 -2,-6 -13,-5 -11,1 -9,3 -9,3"/>
   <path class="fil35 str1" d="M449 506c0,0 -10,-2 -15,10"/>
   <path class="fil35 str1" d="M449 506c0,0 -10,-2 -15,10"/>
   <path class="fil35 str1" d="M368 473c0,0 -15,-2 -25,-9"/>
   <path class="fil35 str1" d="M368 473c0,0 -15,-2 -25,-9"/>
   <path class="fil35 str1" d="M384 604c0,0 2,-7 -2,-11 -4,-4 -8,-6 -13,-6 -4,0 -11,4 -12,5"/>
   <path class="fil35 str1" d="M384 604c0,0 2,-7 -2,-11 -4,-4 -8,-6 -13,-6 -4,0 -11,4 -12,5"/>
   <path class="fil35 str1" d="M374 587c0,0 -10,-4 -18,-1"/>
   <path class="fil35 str1" d="M374 587c0,0 -10,-4 -18,-1"/>
   <path class="fil35 str1" d="M409 564c0,0 -2,4 -8,4"/>
   <path class="fil35 str1" d="M409 564c0,0 -2,4 -8,4"/>
   <path class="fil35 str1" d="M386 587c0,1 -1,1 -1,2 0,4 7,8 15,8 6,0 12,-2 14,-5 -1,-2 -2,-4 -4,-5 -5,-8 -16,-4 -24,0"/>
   <path class="fil35 str1" d="M386 587c0,1 -1,1 -1,2 0,4 7,8 15,8 6,0 12,-2 14,-5 -1,-2 -2,-4 -4,-5 -5,-8 -16,-4 -24,0"/>
   <path class="fil35 str1" d="M409 473c-1,0 5,9 9,10 3,1 5,2 5,4 1,1 2,6 4,8 1,2 4,6 6,7 1,2 4,5 6,6 2,0 4,-3 8,-2 1,0 1,0 2,0 -1,-3 -3,-9 -5,-13 -2,-4 -14,-13 -17,-14 -3,-1 -8,-9 -13,-11 -2,-1 -5,-2 -7,-3"/>
   <path class="fil35 str1" d="M409 473c-1,0 5,9 9,10 3,1 5,2 5,4 1,1 2,6 4,8 1,2 4,6 6,7 1,2 4,5 6,6 2,0 4,-3 8,-2 1,0 1,0 2,0 -1,-3 -3,-9 -5,-13 -2,-4 -14,-13 -17,-14 -3,-1 -8,-9 -13,-11 -2,-1 -5,-2 -7,-3"/>
   <line class="fil35 str1" x1="407" y1="465" x2="403" y2= "467" />
   <line class="fil35 str1" x1="407" y1="465" x2="403" y2= "467" />
   <path class="fil35 str1" d="M403 467c0,0 6,6 6,6"/>
   <path class="fil35 str1" d="M403 467c0,0 6,6 6,6"/>
   <g>
    <path class="fil35 str1" d="M405 508c1,0 1,-1 1,-2 0,-1 0,-1 -1,-1 -1,0 -2,0 -2,1 0,1 1,2 2,2"/>
    <g>
     <path class="fil35 str1" d="M405 508c1,0 1,-1 1,-2 0,-1 0,-1 -1,-1 -1,0 -2,0 -2,1 0,1 1,2 2,2"/>
     <path class="fil35 str1" d="M396 484c1,0 2,-1 2,-2 0,-1 -1,-1 -2,-1 0,0 -1,0 -1,1 0,1 1,2 1,2"/>
     <path class="fil35 str1" d="M396 484c1,0 2,-1 2,-2 0,-1 -1,-1 -2,-1 0,0 -1,0 -1,1 0,1 1,2 1,2"/>
     <path class="fil35 str1" d="M404 536c1,0 2,-1 2,-2 0,-1 -1,-2 -2,-2 -1,0 -2,1 -2,2 0,1 1,2 2,2"/>
     <path class="fil35 str1" d="M404 536c1,0 2,-1 2,-2 0,-1 -1,-2 -2,-2 -1,0 -2,1 -2,2 0,1 1,2 2,2"/>
     <path class="fil35 str1" d="M393 562c1,0 2,-1 2,-2 0,-1 -1,-2 -2,-2 -1,0 -2,1 -2,2 0,1 1,2 2,2"/>
     <path class="fil35 str1" d="M393 562c1,0 2,-1 2,-2 0,-1 -1,-2 -2,-2 -1,0 -2,1 -2,2 0,1 1,2 2,2"/>
    </g>
   </g>
   <path class="fil12" d="M334 530l0 1 0 -1zm-24 -13l0 0 -235 0 0 -58c2,-2 3,-5 3,-7 0,-7 -6,-13 -12,-13 -7,0 -12,6 -12,13 0,2 0,5 2,7l0 304 19 0 0 -41 398 0 0 41 19 0 0 -304c1,-2 2,-5 2,-7 0,-7 -5,-13 -12,-13 -6,0 -12,6 -12,13 0,2 1,5 3,7l0 58 -132 0c-3,5 -1,11 -7,14l0 178 -32 0 0 -179 9 0c0,0 0,-1 0,-1 1,-1 2,-2 2,-2 0,0 -1,-1 -1,-1 -1,0 -2,-1 -2,-3 -1,-1 0,-6 0,-6zm-203 192l0 0 -32 0 0 -179 32 0 0 179zm45 0l0 0 -32 0 0 -179 32 0 0 179zm46 0l0 0 -32 0 0 -179 32 0 0 179zm45 0l0 0 -32 0 0 -179 32 0 0 179zm46 0l0 0 -32 0 0 -179 32 0 0 179zm90 0l0 0 -31 0 0 -179 31 0 0 179zm46 0l0 0 -32 0 0 -179 32 0 0 179zm48 0l0 0 -34 0 0 -179 34 0 0 179z"/>
   <path class="fil36" d="M444 428c0,0 -4,12 -17,23 -5,4 -11,8 -19,11 1,-1 1,-1 1,-2 5,-8 2,-15 0,-18 -1,-2 -6,-6 -14,-3 -7,2 -17,1 -21,0 -3,-1 -13,-2 -16,4 -3,5 -4,12 2,20 2,2 4,3 6,5 -3,0 -6,-1 -9,-1 -27,-6 -39,-20 -43,-24 -3,-4 -18,-24 -10,-46 8,-21 27,-32 37,-35 10,-4 13,-13 13,-17 0,-3 -1,-19 -1,-21 0,-2 5,-10 13,-11 8,0 14,4 12,9 -1,5 -6,7 -10,7 -4,0 -8,-2 -11,-3 -3,-2 -8,-6 -8,-7 -1,-1 7,5 11,6 4,1 13,3 15,-2 1,-4 -3,-6 -5,-6 -3,0 -14,3 -10,14 3,11 11,17 14,19 3,3 4,4 27,9 24,5 38,27 41,32 3,5 8,19 2,37z"/>
   <path class="fil36" d="M444 428c0,0 -4,12 -17,23 -5,4 -11,8 -19,11 -12,11 -40,7 -42,6 -3,0 -6,-1 -9,-1 -27,-6 -39,-20 -43,-24 -3,-4 -18,-24 -10,-46 8,-21 27,-32 37,-35 10,-4 13,-13 13,-17 0,-3 -1,-19 -1,-21 0,-2 5,-10 13,-11 8,0 14,4 12,9 -1,5 -6,7 -10,7 -4,0 -8,-2 -11,-3 -3,-2 -8,-6 -8,-7 -1,-1 7,5 11,6 4,1 13,3 15,-2 1,-4 -3,-6 -5,-6 -3,0 -14,3 -10,14 3,11 11,17 14,19 3,3 4,4 27,9 24,5 38,27 41,32 3,5 8,19 2,37z"/>
   <path class="fil37" d="M373 349c-9,2 -17,4 -25,8 -2,2 -4,4 -7,5 -14,10 -23,25 -23,41 0,22 16,41 38,50 -1,-4 0,-7 2,-10 3,-6 13,-5 16,-4 4,1 14,2 21,0 8,-3 13,1 14,3 1,2 3,5 3,10 18,-8 32,-23 34,-41 0,-10 -2,-17 -4,-20 -3,-5 -17,-27 -41,-32 -23,-5 -24,-6 -27,-9 0,0 -1,0 -1,-1z"/>
   <path class="fil37" d="M373 349c-9,2 -17,4 -25,8 -2,2 -4,4 -7,5 -14,10 -23,25 -23,41 0,22 16,41 38,50 28,5 33,3 56,-1 18,-8 32,-23 34,-41 0,-10 -2,-17 -4,-20 -3,-5 -17,-27 -41,-32 -23,-5 -24,-6 -27,-9 0,0 -1,0 -1,-1z"/>
   <path class="fil36" d="M311 433l-5 -15c-2,-2 -5,-3 -8,-3 -8,0 -14,6 -14,14 0,7 6,14 14,14 6,0 11,-4 13,-10z"/>
   <path class="fil36" d="M311 433l-5 -15c-2,-2 -5,-3 -8,-3 -8,0 -14,6 -14,14 0,7 6,14 14,14 6,0 11,-4 13,-10z"/>
   <path class="fil35 str3" d="M306 418c-2,-2 -5,-3 -8,-3 -8,0 -14,6 -14,14 0,7 6,14 14,14 6,0 11,-4 13,-10"/>
   <path class="fil36 str4" d="M453 404c-3,0 -5,0 -7,2 1,5 1,12 -1,19l0 0c2,2 5,3 8,3 6,0 11,-5 11,-12 0,-7 -5,-12 -11,-12z"/>
   <path class="fil38" d="M360 401c0,-5 4,-9 9,-9 2,0 3,0 5,1 -6,1 -10,4 -14,8z"/>
   <path class="fil38" d="M360 401c0,-5 4,-9 9,-9 2,0 3,0 5,1 -6,1 -10,4 -14,8z"/>
   <path class="fil38" d="M399 392c1,-2 5,-2 8,1 3,2 5,5 4,7 -1,-1 -3,-3 -5,-5 -2,-2 -5,-3 -7,-3z"/>
   <path class="fil38" d="M399 392c1,-2 5,-2 8,1 3,2 5,5 4,7 -1,-1 -3,-3 -5,-5 -2,-2 -5,-3 -7,-3z"/>
   <path class="fil39 str5" d="M384 430c-4,0 -7,2 -7,3 0,2 3,4 7,4 4,0 8,-2 8,-4 0,-1 -4,-3 -8,-3z"/>
   <path class="fil39 str6" d="M384 430c-4,0 -7,2 -7,3 0,2 3,4 7,4 4,0 8,-2 8,-4 0,-1 -4,-3 -8,-3z"/>
   <path class="fil40" d="M398 422c0,-4 -1,-7 -3,-7 -2,0 -3,3 -3,7 0,5 1,8 3,8 2,0 3,-3 3,-8z"/>
   <path class="fil40" d="M398 422c0,-4 -1,-7 -3,-7 -2,0 -3,3 -3,7 0,5 1,8 3,8 2,0 3,-3 3,-8z"/>
   <path class="fil40" d="M376 424c0,-4 -1,-7 -3,-7 -2,0 -3,3 -3,7 0,4 1,7 3,7 2,0 3,-3 3,-7z"/>
   <path class="fil40" d="M376 424c0,-4 -1,-7 -3,-7 -2,0 -3,3 -3,7 0,4 1,7 3,7 2,0 3,-3 3,-7z"/>
   <path class="fil12" d="M394 418c-1,0 -1,1 -1,2 0,0 0,1 1,1 1,0 1,-1 1,-1 0,-1 0,-2 -1,-2z"/>
   <path class="fil12" d="M394 418c-1,0 -1,1 -1,2 0,0 0,1 1,1 1,0 1,-1 1,-1 0,-1 0,-2 -1,-2z"/>
   <path class="fil12" d="M372 420c-1,0 -1,0 -1,1 0,1 0,1 1,1 1,0 1,0 1,-1 0,-1 0,-1 -1,-1z"/>
   <path class="fil12" d="M372 420c-1,0 -1,0 -1,1 0,1 0,1 1,1 1,0 1,0 1,-1 0,-1 0,-1 -1,-1z"/>
   <path class="fil41 str7" d="M387 356c-2,0 -5,1 -6,1 -2,-1 -7,-2 -8,0 -2,1 -5,1 -7,0 -2,-1 -3,1 -6,1 -3,-1 -2,-2 -4,-1 -1,1 -4,2 -6,2 -1,-1 -2,1 -5,1 6,-4 9,-12 9,-15 0,-3 -1,-19 -1,-21 0,-2 5,-10 13,-11 8,0 14,4 12,9 -1,5 -6,7 -10,7 -4,0 -8,-2 -11,-3 -3,-2 -8,-6 -8,-7 -1,-1 7,5 11,6 4,1 13,3 15,-2 1,-4 -3,-6 -5,-6 -3,0 -14,3 -10,14 3,11 11,17 14,19 2,2 3,3 13,6z"/>
   <path class="fil35 str3" d="M290 429c0,-5 4,-9 8,-9 5,0 9,4 9,9 0,2 -1,3 -2,5"/>
   <path class="fil35 str3" d="M305 434c-3,0 -5,-2 -5,-5 0,-3 2,-5 5,-5 0,0 0,0 1,0 0,1 1,3 1,5 0,2 -1,3 -2,5 0,0 0,0 0,0"/>
   <path class="fil35 str3" d="M446 417c1,-4 4,-8 7,-8 5,0 8,4 8,8"/>
   <path class="fil35 str3" d="M447 422c0,0 -1,0 -1,-1 0,0 0,0 0,0 0,-2 0,-4 0,-5 1,-1 2,-2 2,-3 2,0 4,2 4,4 0,3 -2,5 -5,5"/>
   <path class="fil35 str8" d="M379 358c0,0 -13,-2 -21,-28"/>
   <path class="fil35 str8" d="M369 358c0,0 -7,-3 -11,-21"/>
   <path class="fil35 str8" d="M354 362c0,0 8,-6 4,-25"/>
   <path class="fil35 str8" d="M348 362c0,0 9,-8 8,-21 0,-13 -4,-17 4,-23 9,-6 15,-1 15,0"/>
   <g>
    <path class="fil42 str4" d="M448 507c0,0 5,0 8,2 3,1 6,5 6,6 0,2 1,5 -1,7 -3,1 -3,2 -4,3 -1,1 -3,1 -4,0 -1,-1 -1,-1 -3,0 -1,1 -3,0 -4,-1 -2,-1 -3,-3 -4,-2 -2,2 -2,5 -4,5 -2,-1 -4,-2 -5,-3 0,-1 1,-2 2,-3 1,-2 1,-4 1,-5 0,0 2,-3 4,-5 1,-1 7,-2 8,-4z"/>
    <g>
     <path class="fil42 str4" d="M448 507c0,0 5,0 8,2 3,1 6,5 6,6 0,2 1,5 -1,7 -3,1 -3,2 -4,3 -1,1 -3,1 -4,0 -1,-1 -1,-1 -3,0 -1,1 -3,0 -4,-1 -2,-1 -3,-3 -4,-2 -2,2 -2,5 -4,5 -2,-1 -4,-2 -5,-3 0,-1 1,-2 2,-3 1,-2 1,-4 1,-5 0,0 2,-3 4,-5 1,-1 7,-2 8,-4z"/>
     <path class="fil35 str9" d="M459 523c0,0 3,-9 -6,-12"/>
     <path class="fil35 str9" d="M459 523c0,0 3,-9 -6,-12"/>
     <path class="fil35 str9" d="M452 524c0,0 3,-8 -6,-11"/>
     <path class="fil35 str9" d="M452 524c0,0 3,-8 -6,-11"/>
     <path class="fil35 str9" d="M444 522c0,0 0,-3 0,-5"/>
     <path class="fil35 str9" d="M444 522c0,0 0,-3 0,-5"/>
     <path class="fil35 str9" d="M441 523c0,0 0,-3 0,-5"/>
     <path class="fil35 str9" d="M441 523c0,0 0,-3 0,-5"/>
     <path class="fil35 str9" d="M446 524c0,-1 1,-2 2,-2 2,0 3,1 3,2 0,0 0,1 -1,1 -1,1 -2,0 -4,-1"/>
     <path class="fil35 str9" d="M446 524c0,-1 1,-2 2,-2 2,0 3,1 3,2 0,0 0,1 -1,1 -1,1 -2,0 -4,-1"/>
     <path class="fil35 str9" d="M454 525c0,0 0,0 0,0 0,-2 1,-3 2,-3 1,0 2,0 2,2 0,0 -1,0 -1,1 -1,1 -2,1 -3,0"/>
     <path class="fil35 str9" d="M454 525c0,0 0,0 0,0 0,-2 1,-3 2,-3 1,0 2,0 2,2 0,0 -1,0 -1,1 -1,1 -2,1 -3,0"/>
     <path class="fil35 str9" d="M435 521c0,0 1,1 1,2 0,1 -1,2 -1,2 -1,0 -2,0 -2,-1 0,-1 1,-2 2,-3 0,0 0,0 0,0"/>
     <path class="fil35 str9" d="M435 521c0,0 1,1 1,2 0,1 -1,2 -1,2 -1,0 -2,0 -2,-1 0,-1 1,-2 2,-3 0,0 0,0 0,0"/>
    </g>
   </g>
   <g>
    <path class="fil42 str4" d="M311 532c0,5 3,6 4,7 0,1 0,3 -2,3 -1,0 -2,0 0,2 2,3 5,3 5,2 1,0 2,3 4,2 3,-2 3,-2 3,-2 1,0 3,1 4,0 1,-2 5,-6 5,-11 -1,-6 -3,-8 -4,-9 -4,-3 -19,-3 -19,6z"/>
    <g>
     <path class="fil42 str4" d="M311 532c0,5 3,6 4,7 0,1 0,3 -2,3 -1,0 -2,0 0,2 2,3 5,3 5,2 1,0 2,3 4,2 3,-2 3,-2 3,-2 1,0 3,1 4,0 1,-2 5,-6 5,-11 -1,-6 -3,-8 -4,-9 -4,-3 -19,-3 -19,6z"/>
     <path class="fil35 str9" d="M331 532c0,0 -1,-2 -1,-2"/>
     <path class="fil35 str9" d="M331 532c0,0 -1,-2 -1,-2"/>
     <path class="fil35 str9" d="M325 546c0,0 3,-4 3,-7"/>
     <path class="fil35 str9" d="M325 546c0,0 3,-4 3,-7"/>
     <path class="fil35 str9" d="M318 546c0,0 3,-2 2,-5"/>
     <path class="fil35 str9" d="M318 546c0,0 3,-2 2,-5"/>
    </g>
   </g>
   <g>
    <path class="fil43 str10" d="M314 376c0,0 7,9 7,12 -1,3 28,-15 34,-28 1,-4 2,-6 3,-8 -2,1 -3,1 -5,1 -5,3 -15,7 -16,7 -1,2 -2,7 -23,16z"/>
    <g>
     <path class="fil43 str10" d="M314 376c0,0 7,9 7,12 -1,3 28,-15 34,-28 1,-4 2,-6 3,-8 -2,1 -3,1 -5,1 -5,3 -15,7 -16,7 -1,2 -2,7 -23,16z"/>
     <path class="fil43 str10" d="M364 348c0,0 6,1 9,-1 3,-1 19,2 23,7 4,6 11,19 11,22 0,2 5,-15 -12,-27 -18,-12 -18,-10 -34,-3 1,0 1,0 1,1 0,0 1,1 2,1z"/>
     <path class="fil43 str10" d="M364 348c0,0 6,1 9,-1 3,-1 19,2 23,7 4,6 11,19 11,22 0,2 5,-15 -12,-27 -18,-12 -18,-10 -34,-3 1,0 1,0 1,1 0,0 1,1 2,1z"/>
     <path class="fil44 str10" d="M360 344c0,-2 3,-11 6,-14 4,-4 11,-7 13,-7 1,1 8,11 8,14 0,1 -3,3 -6,4 -6,-2 -9,1 -20,5 0,-1 0,-1 0,-1 -1,-1 -1,-1 -1,-1z"/>
     <path class="fil44 str10" d="M360 344c0,-2 3,-11 6,-14 4,-4 11,-7 13,-7 1,1 8,11 8,14 0,1 -3,3 -6,4 -6,-2 -9,1 -20,5 0,-1 0,-1 0,-1 -1,-1 -1,-1 -1,-1z"/>
     <path class="fil44 str10" d="M337 360c0,0 -8,4 -12,0 -4,-4 -3,-8 4,-10 6,-2 16,-3 19,-2 0,0 1,0 1,0 0,0 0,0 0,0 0,3 1,4 3,5 -1,0 -1,1 -1,1 -3,1 -6,3 -9,4 -1,1 -3,1 -4,2 0,0 -1,0 -1,0zm0 -8l0 0c-2,0 -7,1 -9,2 -1,2 -1,3 2,3 2,-1 7,-5 7,-5z"/>
     <path class="fil44 str10" d="M337 360c0,0 -8,4 -12,0 -4,-4 -3,-8 4,-10 6,-2 16,-3 19,-2 0,0 1,0 1,0 0,0 0,0 0,0 0,3 1,4 3,5 -1,0 -1,1 -1,1 -3,1 -6,3 -9,4 -1,1 -3,1 -4,2 0,0 -1,0 -1,0zm0 -8l0 0c-2,0 -7,1 -9,2 -1,2 -1,3 2,3 2,-1 7,-5 7,-5z"/>
     <path class="fil43 str10" d="M349 348c0,0 -1,-3 3,-5 4,-1 8,0 9,2 1,1 3,4 -2,6 -4,3 -8,4 -10,-3z"/>
     <path class="fil43 str10" d="M349 348c0,0 -1,-3 3,-5 4,-1 8,0 9,2 1,1 3,4 -2,6 -4,3 -8,4 -10,-3z"/>
    </g>
   </g>
   <g>
    <path class="fil12" d="M334 530l0 1 0 -1zm-24 -13l0 0 -235 0 0 -58c2,-2 3,-5 3,-7 0,-7 -6,-13 -12,-13 -7,0 -12,6 -12,13 0,2 0,5 2,7l0 304 19 0 0 -41 398 0 0 41 19 0 0 -304c1,-2 2,-5 2,-7 0,-7 -5,-13 -12,-13 -6,0 -12,6 -12,13 0,2 1,5 3,7l0 58 -132 0c-3,5 -1,11 -7,14l0 178 -32 0 0 -179 9 0c0,0 0,-1 0,-1 1,-1 2,-2 2,-2 0,0 -1,-1 -1,-1 -1,0 -2,-1 -2,-3 -1,-1 0,-6 0,-6zm-203 192l0 0 -32 0 0 -179 32 0 0 179zm45 0l0 0 -32 0 0 -179 32 0 0 179zm46 0l0 0 -32 0 0 -179 32 0 0 179zm45 0l0 0 -32 0 0 -179 32 0 0 179zm46 0l0 0 -32 0 0 -179 32 0 0 179zm90 0l0 0 -31 0 0 -179 31 0 0 179zm46 0l0 0 -32 0 0 -179 32 0 0 179zm48 0l0 0 -34 0 0 -179 34 0 0 179z"/>
    <g>
     <path class="fil35 str11" d="M99 444c0,-33 20,-59 53,-59 33,0 53,27 53,53"/>
     <g>
      <path class="fil35 str11" d="M99 444c0,-33 20,-59 53,-59 33,0 53,27 53,53"/>
      <polygon class="fil45" points="101,518 97,518 97,444 101,444 "/>
      <polygon class="fil45" points="101,518 97,518 97,444 101,444 "/>
      <path class="fil45" d="M158 452l7 0c0,0 17,-14 39,-14 22,0 40,15 40,15l7 0c0,0 -18,-19 -47,-19 -29,0 -46,18 -46,18z"/>
      <path class="fil45" d="M158 452l7 0c0,0 17,-14 39,-14 22,0 40,15 40,15l7 0c0,0 -18,-19 -47,-19 -29,0 -46,18 -46,18z"/>
      <line class="fil35 str12" x1="162" y1="471" x2="162" y2= "452" />
      <line class="fil35 str12" x1="162" y1="471" x2="162" y2= "452" />
      <line class="fil35 str12" x1="247" y1="471" x2="247" y2= "452" />
      <line class="fil35 str12" x1="247" y1="471" x2="247" y2= "452" />
      <line class="fil35 str12" x1="203" y1="461" x2="203" y2= "438" />
      <line class="fil35 str12" x1="203" y1="461" x2="203" y2= "438" />
      <g>
       <path class="fil46" d="M210 474c0,0 -1,1 -1,1 -1,-1 -1,-2 -2,-2 2,-2 3,-4 3,-6 0,-1 0,-2 -1,-3 1,0 1,-1 1,-2 0,-1 -1,-2 -2,-2 -1,0 -2,0 -2,1 -1,-1 -2,-1 -3,-1 -1,0 -2,0 -3,1 0,-1 -1,-1 -1,-1 -2,0 -3,1 -3,2 0,1 1,2 1,2 0,1 -1,2 -1,3 0,2 1,5 3,6 0,0 -1,1 -1,2 -1,0 -1,-1 -2,-1 -1,0 -3,2 -3,3 0,2 2,3 3,3 1,0 1,0 1,0 0,2 0,3 1,4 -1,1 -1,2 -1,3 0,1 1,2 2,2 1,0 2,-1 2,-2 1,0 2,1 2,1 1,0 2,-1 2,-1 1,1 1,2 3,2 1,0 2,-1 2,-2 0,-1 -1,-2 -2,-3 1,-1 2,-2 2,-4 0,0 0,0 0,0 2,0 3,-1 3,-3 0,-1 -1,-3 -3,-3z"/>
       <g>
        <path class="fil46" d="M210 474c0,0 -1,1 -1,1 -1,-1 -1,-2 -2,-2 2,-2 3,-4 3,-6 0,-1 0,-2 -1,-3 1,0 1,-1 1,-2 0,-1 -1,-2 -2,-2 -1,0 -2,0 -2,1 -1,-1 -2,-1 -3,-1 -1,0 -2,0 -3,1 0,-1 -1,-1 -1,-1 -2,0 -3,1 -3,2 0,1 1,2 1,2 0,1 -1,2 -1,3 0,2 1,5 3,6 0,0 -1,1 -1,2 -1,0 -1,-1 -2,-1 -1,0 -3,2 -3,3 0,2 2,3 3,3 1,0 1,0 1,0 0,2 0,3 1,4 -1,1 -1,2 -1,3 0,1 1,2 2,2 1,0 2,-1 2,-2 1,0 2,1 2,1 1,0 2,-1 2,-1 1,1 1,2 3,2 1,0 2,-1 2,-2 0,-1 -1,-2 -2,-3 1,-1 2,-2 2,-4 0,0 0,0 0,0 2,0 3,-1 3,-3 0,-1 -1,-3 -3,-3z"/>
        <g>
         <path class="fil12" d="M169 485c0,0 -1,0 -1,0 -1,0 -1,-1 -2,-2 2,-1 3,-3 3,-5 0,-1 0,-2 -1,-3 1,-1 1,-1 1,-2 0,-1 -1,-2 -2,-2 -1,0 -2,0 -2,1 -1,-1 -2,-1 -3,-1 -1,0 -2,0 -3,1 0,-1 -1,-1 -1,-1 -2,0 -3,1 -3,2 0,1 1,1 1,2 0,1 -1,2 -1,3 0,2 1,4 3,5 0,1 -1,2 -1,3 -1,-1 -1,-1 -2,-1 -1,0 -3,1 -3,3 0,1 2,3 3,3 0,0 1,0 1,0 0,1 0,3 1,4 -1,0 -1,1 -1,2 0,2 1,2 2,2 1,0 2,0 2,-1 1,0 2,0 2,0 1,0 2,0 2,0 1,1 1,1 2,1 2,0 3,0 3,-2 0,-1 -1,-2 -2,-2 1,-1 2,-3 2,-4 0,0 0,0 0,0 2,0 3,-2 3,-3 0,-2 -1,-3 -3,-3z"/>
         <g>
          <path class="fil12" d="M169 485c0,0 -1,0 -1,0 -1,0 -1,-1 -2,-2 2,-1 3,-3 3,-5 0,-1 0,-2 -1,-3 1,-1 1,-1 1,-2 0,-1 -1,-2 -2,-2 -1,0 -2,0 -2,1 -1,-1 -2,-1 -3,-1 -1,0 -2,0 -3,1 0,-1 -1,-1 -1,-1 -2,0 -3,1 -3,2 0,1 1,1 1,2 0,1 -1,2 -1,3 0,2 1,4 3,5 0,1 -1,2 -1,3 -1,-1 -1,-1 -2,-1 -1,0 -3,1 -3,3 0,1 2,3 3,3 0,0 1,0 1,0 0,1 0,3 1,4 -1,0 -1,1 -1,2 0,2 1,2 2,2 1,0 2,0 2,-1 1,0 2,0 2,0 1,0 2,0 2,0 1,1 1,1 2,1 2,0 3,0 3,-2 0,-1 -1,-2 -2,-2 1,-1 2,-3 2,-4 0,0 0,0 0,0 2,0 3,-2 3,-3 0,-2 -1,-3 -3,-3z"/>
         </g>
        </g>
        <g>
         <path class="fil47" d="M254 484c0,0 -1,1 -1,1 -1,-1 -1,-2 -2,-2 2,-2 3,-4 3,-6 0,-1 0,-2 -1,-3 1,0 1,-1 1,-2 0,-1 -1,-2 -2,-2 -1,0 -1,0 -2,1 -1,-1 -2,-1 -3,-1 -1,0 -2,0 -3,1 0,-1 -1,-1 -1,-1 -2,0 -3,1 -3,2 0,1 1,2 1,2 0,1 -1,2 -1,3 0,2 2,5 3,6 0,0 -1,1 -1,2 -1,0 -1,-1 -2,-1 -1,0 -2,2 -2,3 0,2 1,3 2,3 0,0 1,0 1,0 0,2 1,3 1,5 -1,0 -1,1 -1,2 0,1 1,2 2,2 1,0 2,-1 2,-2 1,0 2,1 2,1 1,0 2,-1 2,-1 1,1 2,2 3,2 1,0 2,-1 2,-2 0,-1 -1,-2 -2,-2 1,-2 2,-3 2,-5 0,0 0,0 0,0 2,0 3,-1 3,-3 0,-1 -1,-3 -3,-3z"/>
         <g>
          <path class="fil47" d="M254 484c0,0 -1,1 -1,1 -1,-1 -1,-2 -2,-2 2,-2 3,-4 3,-6 0,-1 0,-2 -1,-3 1,0 1,-1 1,-2 0,-1 -1,-2 -2,-2 -1,0 -1,0 -2,1 -1,-1 -2,-1 -3,-1 -1,0 -2,0 -3,1 0,-1 -1,-1 -1,-1 -2,0 -3,1 -3,2 0,1 1,2 1,2 0,1 -1,2 -1,3 0,2 2,5 3,6 0,0 -1,1 -1,2 -1,0 -1,-1 -2,-1 -1,0 -2,2 -2,3 0,2 1,3 2,3 0,0 1,0 1,0 0,2 1,3 1,5 -1,0 -1,1 -1,2 0,1 1,2 2,2 1,0 2,-1 2,-2 1,0 2,1 2,1 1,0 2,-1 2,-1 1,1 2,2 3,2 1,0 2,-1 2,-2 0,-1 -1,-2 -2,-2 1,-2 2,-3 2,-5 0,0 0,0 0,0 2,0 3,-1 3,-3 0,-1 -1,-3 -3,-3z"/>
         </g>
        </g>
       </g>
      </g>
     </g>
    </g>
   </g>
   <g>
    <path class="fil12" d="M1851 447c-6,0 -10,-5 -10,-10l0 -40c0,-5 4,-10 10,-10 5,0 10,5 10,10l0 40c0,5 -5,10 -10,10z"/>
    <path class="fil12" d="M1851 447c-6,0 -10,-5 -10,-10l0 -40c0,-5 4,-10 10,-10 5,0 10,5 10,10l0 40c0,5 -5,10 -10,10z"/>
    <polygon class="fil14" points="1831,386 1827,386 1827,466 1831,466 "/>
    <polygon class="fil14" points="1831,386 1827,386 1827,466 1831,466 "/>
    <polygon class="fil48" points="1803,323 1859,323 1861,405 1780,405 "/>
    <polygon class="fil48" points="1803,323 1859,323 1861,405 1780,405 "/>
   </g>
   <g>
    <polygon class="fil12" points="1061,574 1061,763 1274,763 1274,574 "/>
    <g>
     <polygon class="fil12" points="1061,574 1061,763 1274,763 1274,574 "/>
     <g>
      <polygon class="fil14" points="1266,615 1070,615 1070,581 1266,581 "/>
      <g>
       <polygon class="fil14" points="1266,615 1070,615 1070,581 1266,581 "/>
       <polygon class="fil18" points="1266,654 1070,654 1070,620 1266,620 "/>
       <polygon class="fil18" points="1266,654 1070,654 1070,620 1266,620 "/>
       <polygon class="fil14" points="1266,693 1070,693 1070,659 1266,659 "/>
       <polygon class="fil14" points="1266,693 1070,693 1070,659 1266,659 "/>
       <polygon class="fil18" points="1266,758 1070,758 1070,698 1266,698 "/>
       <polygon class="fil18" points="1266,758 1070,758 1070,698 1266,698 "/>
      </g>
     </g>
     <g>
      <path class="fil12" d="M1104 601c0,3 -2,5 -5,5 -3,0 -5,-2 -5,-5 0,-3 2,-5 5,-5 3,0 5,2 5,5z"/>
      <g>
       <path class="fil12" d="M1104 601c0,3 -2,5 -5,5 -3,0 -5,-2 -5,-5 0,-3 2,-5 5,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1245 601c0,3 -2,5 -5,5 -4,0 -6,-2 -6,-5 0,-3 2,-5 6,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1245 601c0,3 -2,5 -5,5 -4,0 -6,-2 -6,-5 0,-3 2,-5 6,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1104 637c0,2 -2,5 -5,5 -3,0 -5,-3 -5,-5 0,-3 2,-6 5,-6 3,0 5,3 5,6z"/>
       <path class="fil12" d="M1104 637c0,2 -2,5 -5,5 -3,0 -5,-3 -5,-5 0,-3 2,-6 5,-6 3,0 5,3 5,6z"/>
       <path class="fil12" d="M1245 637c0,2 -2,5 -5,5 -4,0 -6,-3 -6,-5 0,-3 2,-6 6,-6 3,0 5,3 5,6z"/>
       <path class="fil12" d="M1245 637c0,2 -2,5 -5,5 -4,0 -6,-3 -6,-5 0,-3 2,-6 6,-6 3,0 5,3 5,6z"/>
       <path class="fil12" d="M1104 674c0,3 -2,5 -5,5 -3,0 -5,-2 -5,-5 0,-3 2,-5 5,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1104 674c0,3 -2,5 -5,5 -3,0 -5,-2 -5,-5 0,-3 2,-5 5,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1245 674c0,3 -2,5 -5,5 -4,0 -6,-2 -6,-5 0,-3 2,-5 6,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1245 674c0,3 -2,5 -5,5 -4,0 -6,-2 -6,-5 0,-3 2,-5 6,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1104 711c0,3 -2,5 -5,5 -3,0 -5,-2 -5,-5 0,-3 2,-5 5,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1104 711c0,3 -2,5 -5,5 -3,0 -5,-2 -5,-5 0,-3 2,-5 5,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1245 711c0,3 -2,5 -5,5 -4,0 -6,-2 -6,-5 0,-3 2,-5 6,-5 3,0 5,2 5,5z"/>
       <path class="fil12" d="M1245 711c0,3 -2,5 -5,5 -4,0 -6,-2 -6,-5 0,-3 2,-5 6,-5 3,0 5,2 5,5z"/>
      </g>
     </g>
    </g>
   </g>
   <g>
    <polygon class="fil49" points="884,740 956,722 956,656 884,674 "/>
    <g>
     <polygon class="fil49" points="884,740 956,722 956,656 884,674 "/>
     <g>
      <g>
       <path class="fil50" d="M965 661c1,4 3,9 6,8 0,0 3,-1 3,-1 2,-1 3,-4 2,-7 -2,-4 -5,-7 -8,-7 -1,0 -4,1 -4,1 -2,1 0,3 1,6z"/>
       <g>
        <g>
         <path class="fil50" d="M965 661c1,4 3,9 6,8 0,0 3,-1 3,-1 2,-1 3,-4 2,-7 -2,-4 -5,-7 -8,-7 -1,0 -4,1 -4,1 -2,1 0,3 1,6z"/>
         <path class="fil50" d="M962 662c1,4 5,7 8,7 3,0 4,-3 3,-7 -1,-4 -5,-7 -8,-7 -3,0 -4,3 -3,7z"/>
         <path class="fil50" d="M962 662c1,4 5,7 8,7 3,0 4,-3 3,-7 -1,-4 -5,-7 -8,-7 -3,0 -4,3 -3,7z"/>
         <path class="fil51" d="M965 662c1,2 2,3 4,3 1,0 2,-1 1,-3 -1,-2 -2,-3 -4,-4 -1,0 -2,2 -1,4z"/>
         <path class="fil51" d="M965 662c1,2 2,3 4,3 1,0 2,-1 1,-3 -1,-2 -2,-3 -4,-4 -1,0 -2,2 -1,4z"/>
        </g>
       </g>
       <g>
        <polygon class="fil17" points="946,632 919,627 905,635 917,647 940,648 "/>
        <g>
         <polygon class="fil17" points="946,632 919,627 905,635 917,647 940,648 "/>
        </g>
       </g>
       <polygon class="fil52" points="943,668 911,663 910,654 944,659 "/>
       <polygon class="fil52" points="943,668 911,663 910,654 944,659 "/>
       <g>
        <path class="fil17" d="M938 641l-36 -6c0,0 9,13 7,23l33 5 -4 -22z"/>
        <g>
         <path class="fil17" d="M938 641l-36 -6c0,0 9,13 7,23l33 5 -4 -22z"/>
        </g>
       </g>
       <path class="fil53" d="M940 655l2 8 -33 -5c1,-1 1,-3 0,-5 11,0 21,1 31,2z"/>
       <path class="fil53" d="M940 655l2 8 -33 -5c1,-1 1,-3 0,-5 11,0 21,1 31,2z"/>
       <polygon class="fil54" points="937,639 908,634 902,635 938,641 "/>
       <polygon class="fil54" points="937,639 908,634 902,635 938,641 "/>
       <polygon class="fil54" points="946,633 919,628 919,626 948,632 "/>
       <polygon class="fil54" points="946,633 919,628 919,626 948,632 "/>
       <polygon class="fil54" points="919,626 902,635 908,634 919,628 "/>
       <polygon class="fil54" points="919,626 902,635 908,634 919,628 "/>
       <polygon class="fil51" points="978,662 973,630 955,640 961,672 "/>
       <polygon class="fil51" points="978,662 973,630 955,640 961,672 "/>
       <polygon class="fil55" points="975,648 972,633 957,641 960,656 "/>
       <polygon class="fil55" points="975,648 972,633 957,641 960,656 "/>
       <polygon class="fil56" points="974,648 972,634 957,641 960,656 "/>
       <polygon class="fil56" points="974,648 972,634 957,641 960,656 "/>
       <path class="fil57" d="M959 648l-1 -3c4,2 7,4 11,6l-2 1c-3,-1 -6,-2 -8,-4z"/>
       <path class="fil57" d="M959 648l-1 -3c4,2 7,4 11,6l-2 1c-3,-1 -6,-2 -8,-4z"/>
       <path class="fil57" d="M959 641l5 -3c3,2 6,3 9,4l1 6c-5,-2 -10,-4 -15,-7z"/>
       <path class="fil57" d="M959 641l5 -3c3,2 6,3 9,4l1 6c-5,-2 -10,-4 -15,-7z"/>
       <path class="fil58" d="M972 659c0,1 1,2 2,1 1,0 1,-2 1,-3 0,-1 -1,-2 -2,-1 -1,0 -1,2 -1,3z"/>
       <path class="fil58" d="M972 659c0,1 1,2 2,1 1,0 1,-2 1,-3 0,-1 -1,-2 -2,-1 -1,0 -1,2 -1,3z"/>
       <path class="fil58" d="M964 663c0,1 1,2 2,1 0,0 1,-2 1,-3 -1,-1 -1,-2 -2,-1 -1,0 -1,2 -1,3z"/>
       <path class="fil58" d="M964 663c0,1 1,2 2,1 0,0 1,-2 1,-3 -1,-1 -1,-2 -2,-1 -1,0 -1,2 -1,3z"/>
       <polygon class="fil59" points="973,630 955,627 937,637 955,640 "/>
       <polygon class="fil59" points="973,630 955,627 937,637 955,640 "/>
       <polygon class="fil55" points="937,637 943,669 961,672 955,640 "/>
       <polygon class="fil55" points="937,637 943,669 961,672 955,640 "/>
       <polygon class="fil60" points="957,657 942,654 939,640 954,642 "/>
       <polygon class="fil60" points="957,657 942,654 939,640 954,642 "/>
       <g>
        <path class="fil50" d="M947 669c1,4 2,10 5,9 1,0 3,0 4,-1 2,0 3,-3 2,-6 -1,-4 -4,-8 -7,-8 0,0 -3,0 -4,1 -2,0 0,2 0,5z"/>
        <g>
         <path class="fil50" d="M947 669c1,4 2,10 5,9 1,0 3,0 4,-1 2,0 3,-3 2,-6 -1,-4 -4,-8 -7,-8 0,0 -3,0 -4,1 -2,0 0,2 0,5z"/>
         <path class="fil61" d="M945 670c0,4 3,8 6,8 3,1 5,-2 4,-6 -1,-4 -4,-8 -6,-8 -3,-1 -5,2 -4,6z"/>
         <path class="fil61" d="M945 670c0,4 3,8 6,8 3,1 5,-2 4,-6 -1,-4 -4,-8 -6,-8 -3,-1 -5,2 -4,6z"/>
         <path class="fil51" d="M947 671c1,1 2,3 3,3 2,1 3,-1 2,-3 0,-2 -1,-3 -3,-4 -1,0 -2,2 -2,4z"/>
         <path class="fil51" d="M947 671c1,1 2,3 3,3 2,1 3,-1 2,-3 0,-2 -1,-3 -3,-4 -1,0 -2,2 -2,4z"/>
        </g>
       </g>
       <g>
        <path class="fil50" d="M914 662c0,4 1,10 4,9 1,0 3,0 4,-1 2,0 3,-3 2,-6 0,-4 -3,-8 -6,-8 -1,0 -4,0 -5,1 -1,1 0,2 1,5z"/>
        <g>
         <path class="fil50" d="M914 662c0,4 1,10 4,9 1,0 3,0 4,-1 2,0 3,-3 2,-6 0,-4 -3,-8 -6,-8 -1,0 -4,0 -5,1 -1,1 0,2 1,5z"/>
         <path class="fil61" d="M911 663c0,4 3,8 6,8 3,1 5,-2 4,-6 0,-4 -3,-8 -6,-8 -3,-1 -5,2 -4,6z"/>
         <path class="fil61" d="M911 663c0,4 3,8 6,8 3,1 5,-2 4,-6 0,-4 -3,-8 -6,-8 -3,-1 -5,2 -4,6z"/>
         <path class="fil51" d="M914 664c0,1 1,3 3,3 1,1 2,-1 2,-3 -1,-2 -2,-3 -4,-4 -1,0 -2,2 -1,4z"/>
         <path class="fil51" d="M914 664c0,1 1,3 3,3 1,1 2,-1 2,-3 -1,-2 -2,-3 -4,-4 -1,0 -2,2 -1,4z"/>
        </g>
       </g>
       <line class="fil35 str13" x1="942" y1="654" x2="944" y2= "665" />
       <line class="fil35 str13" x1="942" y1="654" x2="944" y2= "665" />
       <polygon class="fil56" points="956,657 942,654 940,641 954,643 "/>
       <polygon class="fil56" points="956,657 942,654 940,641 954,643 "/>
       <path class="fil57" d="M950 642l4 1 0 3c-1,-1 -3,-3 -4,-4z"/>
       <path class="fil57" d="M950 642l4 1 0 3c-1,-1 -3,-3 -4,-4z"/>
       <path class="fil57" d="M953 656c-4,-4 -8,-8 -13,-11l0 -4 1 0c4,5 10,9 15,14 0,0 0,0 0,0l0 2 -3 -1c0,0 0,0 0,0z"/>
       <path class="fil57" d="M953 656c-4,-4 -8,-8 -13,-11l0 -4 1 0c4,5 10,9 15,14 0,0 0,0 0,0l0 2 -3 -1c0,0 0,0 0,0z"/>
      </g>
     </g>
     <g>
      <polygon class="fil16" points="978,622 971,682 1012,638 1009,602 "/>
      <g>
       <polygon class="fil16" points="978,622 971,682 1012,638 1009,602 "/>
       <path class="fil53" d="M1012 634c-3,-1 -5,-1 -7,-2 -3,-2 -5,-6 -4,-9 1,-4 4,-9 6,-12 1,-1 2,-2 2,-3l0 -6 -3 1c-2,4 -5,8 -7,12 -2,3 -3,9 -7,10 -2,0 -3,-1 -4,-1 -2,-1 -5,-2 -7,-2 -1,0 -2,0 -3,0l-1 3c3,3 7,6 8,9 2,6 -1,11 -4,16 -2,3 -4,6 -5,10 -1,3 -2,6 -3,9 -1,1 -1,1 -1,1l-1 12 10 -10c0,-1 0,-2 1,-3 1,-3 2,-6 4,-10 1,-3 1,-6 3,-10 1,-2 3,-5 5,-7 1,-2 3,-5 5,-5 3,-1 5,0 7,1 1,1 2,2 4,3l2 -3 0 -4z"/>
       <path class="fil53" d="M1012 634c-3,-1 -5,-1 -7,-2 -3,-2 -5,-6 -4,-9 1,-4 4,-9 6,-12 1,-1 2,-2 2,-3l0 -6 -3 1c-2,4 -5,8 -7,12 -2,3 -3,9 -7,10 -2,0 -3,-1 -4,-1 -2,-1 -5,-2 -7,-2 -1,0 -2,0 -3,0l-1 3c3,3 7,6 8,9 2,6 -1,11 -4,16 -2,3 -4,6 -5,10 -1,3 -2,6 -3,9 -1,1 -1,1 -1,1l-1 12 10 -10c0,-1 0,-2 1,-3 1,-3 2,-6 4,-10 1,-3 1,-6 3,-10 1,-2 3,-5 5,-7 1,-2 3,-5 5,-5 3,-1 5,0 7,1 1,1 2,2 4,3l2 -3 0 -4z"/>
       <path class="fil53" d="M1012 636c-2,-1 -4,-2 -6,-3 -2,-1 -8,-2 -7,-4 0,-3 1,-5 2,-7 0,-2 1,-4 2,-6 2,-4 4,-8 6,-12l0 -2 0 0c-1,1 -2,3 -3,4 -2,2 -3,5 -4,7 -1,2 -2,4 -3,6 -1,2 -2,4 -3,5 -2,3 -4,2 -6,1 -2,0 -4,-1 -6,-1 -2,-1 -4,-2 -6,-2 0,0 0,0 0,0 0,0 0,0 0,0l0 2c3,1 6,3 9,4 1,1 4,3 4,5 0,2 -1,4 -2,6 -2,3 -4,6 -4,9 -1,4 -1,7 -3,10 -1,4 -3,7 -5,10 -2,3 -4,5 -6,7l0 7 4 -4c0,-2 1,-3 2,-5 3,-7 8,-13 10,-21 1,-5 3,-9 5,-13 2,-2 4,-5 7,-4 3,0 6,2 8,3 1,0 3,1 4,1l1 -1 0 -2z"/>
       <path class="fil53" d="M1012 636c-2,-1 -4,-2 -6,-3 -2,-1 -8,-2 -7,-4 0,-3 1,-5 2,-7 0,-2 1,-4 2,-6 2,-4 4,-8 6,-12l0 -2 0 0c-1,1 -2,3 -3,4 -2,2 -3,5 -4,7 -1,2 -2,4 -3,6 -1,2 -2,4 -3,5 -2,3 -4,2 -6,1 -2,0 -4,-1 -6,-1 -2,-1 -4,-2 -6,-2 0,0 0,0 0,0 0,0 0,0 0,0l0 2c3,1 6,3 9,4 1,1 4,3 4,5 0,2 -1,4 -2,6 -2,3 -4,6 -4,9 -1,4 -1,7 -3,10 -1,4 -3,7 -5,10 -2,3 -4,5 -6,7l0 7 4 -4c0,-2 1,-3 2,-5 3,-7 8,-13 10,-21 1,-5 3,-9 5,-13 2,-2 4,-5 7,-4 3,0 6,2 8,3 1,0 3,1 4,1l1 -1 0 -2z"/>
       <polygon class="fil62" points="971,684 969,683 1010,598 1011,599 "/>
       <polygon class="fil62" points="971,684 969,683 1010,598 1011,599 "/>
       <polygon class="fil63" points="974,621 974,620 1017,640 1016,641 "/>
       <polygon class="fil63" points="974,621 974,620 1017,640 1016,641 "/>
      </g>
     </g>
     <g>
      <path class="fil64" d="M976 653c0,0 20,13 17,23 -3,10 -17,1 -20,-3 0,0 3,13 -2,23 0,0 10,20 1,25 -8,4 -15,-12 -17,-21 0,0 -7,26 -18,21 -11,-5 -1,-26 -1,-26 0,0 -4,-13 0,-22 0,0 -14,13 -19,5 -6,-9 13,-21 18,-24 6,-3 41,-1 41,-1z"/>
      <g>
       <path class="fil64" d="M976 653c0,0 20,13 17,23 -3,10 -17,1 -20,-3 0,0 3,13 -2,23 0,0 10,20 1,25 -8,4 -15,-12 -17,-21 0,0 -7,26 -18,21 -11,-5 -1,-26 -1,-26 0,0 -4,-13 0,-22 0,0 -14,13 -19,5 -6,-9 13,-21 18,-24 6,-3 41,-1 41,-1z"/>
       <path class="fil53" d="M976 653c0,0 -2,0 -4,0 2,2 4,6 6,8 4,3 8,4 11,8 1,2 3,5 1,8 -2,2 -7,1 -9,0 -3,-2 -6,-6 -9,-6 0,6 1,12 0,17 -1,3 -2,6 -2,8 0,2 1,4 2,6 1,4 3,7 1,11 0,2 -2,5 -4,4 -3,0 -4,-2 -5,-4 -2,-3 -3,-6 -5,-8 0,-1 -1,-2 -2,-3 0,-1 -1,-2 -1,-2 -2,-2 -4,1 -5,2 -2,4 -3,9 -6,12 -2,3 -8,5 -10,1 -1,-2 -1,-5 0,-7 0,-3 0,-5 1,-7 1,-3 3,-5 2,-7 -1,-2 -1,-3 -1,-5 -1,-3 -1,-7 0,-10 0,-3 3,-6 2,-9 -1,-1 -3,-1 -4,-1 -3,1 -6,4 -9,5 -2,1 -5,2 -6,1 -2,-3 0,-8 2,-11 2,-3 5,-5 8,-6 2,-2 5,-4 7,-5 -1,0 -1,1 -2,1 -5,3 -24,15 -18,24 5,8 19,-5 19,-5 -4,9 0,22 0,22 0,0 -10,21 1,26 11,5 18,-21 18,-21 2,9 9,25 17,21 9,-5 -1,-25 -1,-25 5,-10 2,-23 2,-23 3,4 17,13 20,3 3,-10 -17,-23 -17,-23z"/>
       <path class="fil53" d="M976 653c0,0 -2,0 -4,0 2,2 4,6 6,8 4,3 8,4 11,8 1,2 3,5 1,8 -2,2 -7,1 -9,0 -3,-2 -6,-6 -9,-6 0,6 1,12 0,17 -1,3 -2,6 -2,8 0,2 1,4 2,6 1,4 3,7 1,11 0,2 -2,5 -4,4 -3,0 -4,-2 -5,-4 -2,-3 -3,-6 -5,-8 0,-1 -1,-2 -2,-3 0,-1 -1,-2 -1,-2 -2,-2 -4,1 -5,2 -2,4 -3,9 -6,12 -2,3 -8,5 -10,1 -1,-2 -1,-5 0,-7 0,-3 0,-5 1,-7 1,-3 3,-5 2,-7 -1,-2 -1,-3 -1,-5 -1,-3 -1,-7 0,-10 0,-3 3,-6 2,-9 -1,-1 -3,-1 -4,-1 -3,1 -6,4 -9,5 -2,1 -5,2 -6,1 -2,-3 0,-8 2,-11 2,-3 5,-5 8,-6 2,-2 5,-4 7,-5 -1,0 -1,1 -2,1 -5,3 -24,15 -18,24 5,8 19,-5 19,-5 -4,9 0,22 0,22 0,0 -10,21 1,26 11,5 18,-21 18,-21 2,9 9,25 17,21 9,-5 -1,-25 -1,-25 5,-10 2,-23 2,-23 3,4 17,13 20,3 3,-10 -17,-23 -17,-23z"/>
       <path class="fil53" d="M944 663c0,0 -6,5 -5,19 0,13 11,15 17,15 7,-1 14,-5 15,-15 0,-9 0,-21 -9,-22 -9,-1 -17,0 -18,3z"/>
       <path class="fil53" d="M944 663c0,0 -6,5 -5,19 0,13 11,15 17,15 7,-1 14,-5 15,-15 0,-9 0,-21 -9,-22 -9,-1 -17,0 -18,3z"/>
       <path class="fil65" d="M944 664c0,0 -5,5 -4,17 0,13 10,15 16,14 6,0 13,-4 13,-13 1,-9 1,-20 -8,-20 -8,-1 -15,-1 -17,2z"/>
       <path class="fil65" d="M944 664c0,0 -5,5 -4,17 0,13 10,15 16,14 6,0 13,-4 13,-13 1,-9 1,-20 -8,-20 -8,-1 -15,-1 -17,2z"/>
       <path class="fil66" d="M946 664c0,0 -4,4 -4,14 0,11 9,13 14,12 5,0 11,-3 11,-11 1,-8 0,-17 -7,-17 -7,-1 -13,-1 -14,2z"/>
       <path class="fil66" d="M946 664c0,0 -4,4 -4,14 0,11 9,13 14,12 5,0 11,-3 11,-11 1,-8 0,-17 -7,-17 -7,-1 -13,-1 -14,2z"/>
       <path class="fil53" d="M976 653c0,0 -35,-2 -41,1 0,0 -1,0 -1,1 2,7 8,14 22,13 13,0 19,-7 21,-14 -1,-1 -1,-1 -1,-1z"/>
       <path class="fil53" d="M976 653c0,0 -35,-2 -41,1 0,0 -1,0 -1,1 2,7 8,14 22,13 13,0 19,-7 21,-14 -1,-1 -1,-1 -1,-1z"/>
       <path class="fil67" d="M943 627c0,0 9,-8 28,-1 0,0 8,-6 12,1 4,7 -6,11 -6,11 0,0 5,26 -21,27 -28,1 -24,-28 -24,-28 0,0 -7,-7 -1,-12 5,-5 12,2 12,2z"/>
       <path class="fil67" d="M943 627c0,0 9,-8 28,-1 0,0 8,-6 12,1 4,7 -6,11 -6,11 0,0 5,26 -21,27 -28,1 -24,-28 -24,-28 0,0 -7,-7 -1,-12 5,-5 12,2 12,2z"/>
       <g>
        <path class="fil68" d="M956 661c-19,1 -23,-12 -24,-21 0,8 2,26 24,25 22,-1 22,-20 21,-25 0,7 -3,21 -21,21z"/>
        <g>
         <path class="fil68" d="M956 661c-19,1 -23,-12 -24,-21 0,8 2,26 24,25 22,-1 22,-20 21,-25 0,7 -3,21 -21,21z"/>
         <path class="fil68" d="M932 633c0,0 -2,-2 -3,-5 -1,4 2,7 3,8 0,-2 0,-3 0,-3z"/>
         <path class="fil68" d="M932 633c0,0 -2,-2 -3,-5 -1,4 2,7 3,8 0,-2 0,-3 0,-3z"/>
         <path class="fil68" d="M977 634c0,0 0,2 0,4 2,-1 9,-4 7,-10 -2,4 -7,6 -7,6z"/>
         <path class="fil68" d="M977 634c0,0 0,2 0,4 2,-1 9,-4 7,-10 -2,4 -7,6 -7,6z"/>
        </g>
       </g>
       <path class="fil69" d="M961 645c0,1 -2,3 -4,3 -2,0 -4,-2 -4,-2 0,-1 2,-2 4,-2 2,0 3,1 4,1z"/>
       <path class="fil69" d="M961 645c0,1 -2,3 -4,3 -2,0 -4,-2 -4,-2 0,-1 2,-2 4,-2 2,0 3,1 4,1z"/>
       <g>
        <path class="fil69" d="M966 639c0,1 0,1 -1,1 -1,0 -1,0 -1,-1 0,-1 0,-1 1,-1 1,0 1,0 1,1z"/>
        <g>
         <path class="fil69" d="M966 639c0,1 0,1 -1,1 -1,0 -1,0 -1,-1 0,-1 0,-1 1,-1 1,0 1,0 1,1z"/>
         <path class="fil66" d="M965 639c0,0 0,0 0,0 -1,0 -1,0 -1,0 0,-1 0,-1 1,-1 0,0 0,0 0,1z"/>
         <path class="fil66" d="M965 639c0,0 0,0 0,0 -1,0 -1,0 -1,0 0,-1 0,-1 1,-1 0,0 0,0 0,1z"/>
        </g>
       </g>
       <g>
        <path class="fil69" d="M957 648c0,0 0,1 0,3 0,1 0,1 0,1 -1,1 -1,1 -1,2 -1,0 -1,1 -2,1 0,0 -1,0 -2,0 0,0 0,0 -1,0 0,0 0,0 -1,0 0,0 0,0 0,0 -1,0 -1,0 -1,-1 -1,0 -1,0 -2,-1 0,0 0,0 0,-1 -1,0 -1,-1 -1,-2 0,0 0,-1 0,-1 0,0 0,1 1,1 0,0 0,0 0,1 0,0 1,0 1,0 0,0 1,0 1,1 0,0 1,0 1,0 0,0 0,0 1,0 0,0 0,0 0,0 0,0 0,0 1,0 0,0 0,0 0,0 0,0 0,0 1,0 0,0 0,0 0,0 0,0 1,0 1,0 0,0 0,-1 1,-1 0,0 0,0 0,-1 1,0 1,-1 1,-1 1,0 1,-1 1,-1z"/>
        <g>
         <path class="fil69" d="M957 648c0,0 0,1 0,3 0,1 0,1 0,1 -1,1 -1,1 -1,2 -1,0 -1,1 -2,1 0,0 -1,0 -2,0 0,0 0,0 -1,0 0,0 0,0 -1,0 0,0 0,0 0,0 -1,0 -1,0 -1,-1 -1,0 -1,0 -2,-1 0,0 0,0 0,-1 -1,0 -1,-1 -1,-2 0,0 0,-1 0,-1 0,0 0,1 1,1 0,0 0,0 0,1 0,0 1,0 1,0 0,0 1,0 1,1 0,0 1,0 1,0 0,0 0,0 1,0 0,0 0,0 0,0 0,0 0,0 1,0 0,0 0,0 0,0 0,0 0,0 1,0 0,0 0,0 0,0 0,0 1,0 1,0 0,0 0,-1 1,-1 0,0 0,0 0,-1 1,0 1,-1 1,-1 1,0 1,-1 1,-1z"/>
        </g>
       </g>
       <g>
        <path class="fil69" d="M957 648c0,0 0,1 0,1 0,0 1,1 1,1 0,1 1,2 1,2 0,0 1,0 1,0 0,1 0,1 0,1 0,0 0,0 1,0 0,0 0,0 0,0l0 0c1,0 1,0 1,0 0,-1 1,-1 1,-1 0,0 0,0 1,0 0,0 0,-1 1,-1 0,-1 0,-1 0,-1 0,0 0,1 0,1 0,0 1,1 0,2 0,0 0,1 0,1 -1,0 -1,1 -2,1 0,1 -1,1 -1,1 -1,0 -1,0 -1,0 0,0 0,0 -1,0 0,0 0,0 0,0 -1,0 -2,-1 -2,-1 0,-1 -1,-1 -1,-2 -1,-1 -1,-1 -1,-2 0,-1 0,-2 1,-2 0,0 0,-1 0,-1z"/>
        <g>
         <path class="fil69" d="M957 648c0,0 0,1 0,1 0,0 1,1 1,1 0,1 1,2 1,2 0,0 1,0 1,0 0,1 0,1 0,1 0,0 0,0 1,0 0,0 0,0 0,0l0 0c1,0 1,0 1,0 0,-1 1,-1 1,-1 0,0 0,0 1,0 0,0 0,-1 1,-1 0,-1 0,-1 0,-1 0,0 0,1 0,1 0,0 1,1 0,2 0,0 0,1 0,1 -1,0 -1,1 -2,1 0,1 -1,1 -1,1 -1,0 -1,0 -1,0 0,0 0,0 -1,0 0,0 0,0 0,0 -1,0 -2,-1 -2,-1 0,-1 -1,-1 -1,-2 -1,-1 -1,-1 -1,-2 0,-1 0,-2 1,-2 0,0 0,-1 0,-1z"/>
        </g>
       </g>
       <path class="fil65" d="M973 628c0,0 6,-4 8,1 1,4 -5,6 -5,6 0,0 -1,-3 -3,-7z"/>
       <path class="fil65" d="M973 628c0,0 6,-4 8,1 1,4 -5,6 -5,6 0,0 -1,-3 -3,-7z"/>
       <path class="fil53" d="M974 628c0,0 4,-3 6,1 1,4 -4,5 -4,5 0,0 -1,-2 -2,-6z"/>
       <path class="fil53" d="M974 628c0,0 4,-3 6,1 1,4 -4,5 -4,5 0,0 -1,-2 -2,-6z"/>
       <path class="fil65" d="M934 634c0,0 -4,-4 -2,-7 4,-4 7,-1 8,1 0,0 -3,2 -6,6z"/>
       <path class="fil65" d="M934 634c0,0 -4,-4 -2,-7 4,-4 7,-1 8,1 0,0 -3,2 -6,6z"/>
       <path class="fil53" d="M934 633c0,0 -3,-3 -1,-5 3,-3 5,-1 6,0 0,0 -2,2 -5,5z"/>
       <path class="fil53" d="M934 633c0,0 -3,-3 -1,-5 3,-3 5,-1 6,0 0,0 -2,2 -5,5z"/>
       <g>
        <path class="fil70 str14" d="M934 655c0,0 5,7 2,17"/>
        <g>
         <path class="fil70 str14" d="M934 655c0,0 5,7 2,17"/>
        </g>
       </g>
       <path class="fil35 str15" d="M972 671c0,0 1,-12 4,-16"/>
       <path class="fil35 str15" d="M972 671c0,0 1,-12 4,-16"/>
       <path class="fil35 str15" d="M936 695c0,0 9,-1 18,4"/>
       <path class="fil35 str15" d="M936 695c0,0 9,-1 18,4"/>
       <path class="fil35 str15" d="M956 699c0,0 4,-4 14,-3"/>
       <path class="fil35 str15" d="M956 699c0,0 4,-4 14,-3"/>
       <g>
        <path class="fil69" d="M949 639c0,1 -1,2 -1,2 -1,0 -2,-1 -2,-2 0,0 1,-1 2,-1 0,0 1,1 1,1z"/>
        <g>
         <path class="fil69" d="M949 639c0,1 -1,2 -1,2 -1,0 -2,-1 -2,-2 0,0 1,-1 2,-1 0,0 1,1 1,1z"/>
         <path class="fil66" d="M948 639c0,0 0,1 -1,1 0,0 0,-1 0,-1 0,0 0,-1 0,-1 1,0 1,1 1,1z"/>
         <path class="fil66" d="M948 639c0,0 0,1 -1,1 0,0 0,-1 0,-1 0,0 0,-1 0,-1 1,0 1,1 1,1z"/>
        </g>
       </g>
      </g>
     </g>
     <g>
      <path class="fil71" d="M989 660c0,0 -9,-6 -15,10 -3,9 1,19 1,19 0,0 12,-13 14,-29z"/>
      <g>
       <path class="fil71" d="M989 660c0,0 -9,-6 -15,10 -3,9 1,19 1,19 0,0 12,-13 14,-29z"/>
       <path class="fil68" d="M979 684c3,-5 9,-14 10,-24 0,0 0,-1 -1,-1 -3,1 -7,4 -9,11 -2,5 -1,11 0,14z"/>
       <path class="fil68" d="M979 684c3,-5 9,-14 10,-24 0,0 0,-1 -1,-1 -3,1 -7,4 -9,11 -2,5 -1,11 0,14z"/>
       <path class="fil72" d="M1012 677c0,0 8,8 -5,17 -8,6 -19,5 -19,5 0,0 9,-16 24,-22z"/>
       <path class="fil72" d="M1012 677c0,0 8,8 -5,17 -8,6 -19,5 -19,5 0,0 9,-16 24,-22z"/>
       <path class="fil68" d="M1006 687c4,-3 6,-6 7,-8 0,-1 -1,-2 -1,-2 -8,4 -15,10 -19,14 4,0 9,-1 13,-4z"/>
       <path class="fil68" d="M1006 687c4,-3 6,-6 7,-8 0,-1 -1,-2 -1,-2 -8,4 -15,10 -19,14 4,0 9,-1 13,-4z"/>
       <path class="fil73" d="M983 675c1,3 4,6 7,8 3,2 6,4 9,4l0 0c6,-2 11,-7 15,-12 9,-12 11,-25 7,-33 -9,-2 -21,4 -30,15 -4,6 -7,12 -8,18l0 0z"/>
       <path class="fil73" d="M983 675c1,3 4,6 7,8 3,2 6,4 9,4l0 0c6,-2 11,-7 15,-12 9,-12 11,-25 7,-33 -9,-2 -21,4 -30,15 -4,6 -7,12 -8,18l0 0z"/>
       <path class="fil72" d="M1009 669c-3,3 -7,4 -10,2 -3,-3 -3,-7 -1,-10 2,-3 6,-4 9,-1 3,2 4,6 2,9z"/>
       <path class="fil72" d="M1009 669c-3,3 -7,4 -10,2 -3,-3 -3,-7 -1,-10 2,-3 6,-4 9,-1 3,2 4,6 2,9z"/>
       <path class="fil71" d="M1008 669c-2,3 -6,3 -9,1 -2,-2 -3,-6 -1,-9 2,-3 6,-3 9,-1 3,2 4,6 1,9z"/>
       <path class="fil71" d="M1008 669c-2,3 -6,3 -9,1 -2,-2 -3,-6 -1,-9 2,-3 6,-3 9,-1 3,2 4,6 1,9z"/>
       <path class="fil72" d="M1007 668c-1,2 -4,3 -7,1 -2,-2 -2,-5 -1,-7 2,-2 5,-2 7,-1 2,2 3,5 1,7z"/>
       <path class="fil72" d="M1007 668c-1,2 -4,3 -7,1 -2,-2 -2,-5 -1,-7 2,-2 5,-2 7,-1 2,2 3,5 1,7z"/>
       <path class="fil74" d="M1007 668c-2,2 -4,2 -6,1 -2,-2 -2,-5 -1,-7 1,-1 4,-2 6,0 2,1 2,4 1,6z"/>
       <path class="fil74" d="M1007 668c-2,2 -4,2 -6,1 -2,-2 -2,-5 -1,-7 1,-1 4,-2 6,0 2,1 2,4 1,6z"/>
       <g>
        <path class="fil17" d="M1022 656c1,-5 1,-10 -1,-14 -4,-1 -9,0 -14,2 0,0 2,10 15,12z"/>
        <g>
         <path class="fil17" d="M1022 656c1,-5 1,-10 -1,-14 -4,-1 -9,0 -14,2 0,0 2,10 15,12z"/>
        </g>
       </g>
       <path class="fil75" d="M1026 637c0,0 0,-1 0,-1 -1,0 -1,0 -1,0l-4 5c-1,1 -1,1 0,1 0,1 0,0 1,0l4 -5z"/>
       <path class="fil75" d="M1026 637c0,0 0,-1 0,-1 -1,0 -1,0 -1,0l-4 5c-1,1 -1,1 0,1 0,1 0,0 1,0l4 -5z"/>
       <path class="fil76" d="M1027 637c-1,1 -2,1 -3,1 -1,-1 -1,-2 0,-3 1,-1 2,-1 3,-1 1,1 1,2 0,3z"/>
       <path class="fil76" d="M1027 637c-1,1 -2,1 -3,1 -1,-1 -1,-2 0,-3 1,-1 2,-1 3,-1 1,1 1,2 0,3z"/>
       <path class="fil57" d="M1026 636c0,0 -1,0 -1,0 -1,0 -1,-1 0,-2 0,0 1,0 1,0 0,1 1,1 0,2z"/>
       <path class="fil57" d="M1026 636c0,0 -1,0 -1,0 -1,0 -1,-1 0,-2 0,0 1,0 1,0 0,1 1,1 0,2z"/>
       <g>
        <path class="fil17" d="M990 683c3,2 6,4 9,4l0 0c3,-1 6,-3 9,-6 -15,-1 -22,-16 -22,-16 -1,3 -2,7 -3,10l0 0c1,3 4,6 7,8z"/>
        <g>
         <path class="fil17" d="M990 683c3,2 6,4 9,4l0 0c3,-1 6,-3 9,-6 -15,-1 -22,-16 -22,-16 -1,3 -2,7 -3,10l0 0c1,3 4,6 7,8z"/>
        </g>
       </g>
       <path class="fil77" d="M1003 685c-3,-1 -7,-3 -11,-6 -3,-2 -6,-6 -8,-9 0,2 -1,3 -1,5l0 0c1,3 4,6 7,8 3,2 6,4 9,4l0 0c2,0 3,-1 4,-2z"/>
       <path class="fil77" d="M1003 685c-3,-1 -7,-3 -11,-6 -3,-2 -6,-6 -8,-9 0,2 -1,3 -1,5l0 0c1,3 4,6 7,8 3,2 6,4 9,4l0 0c2,0 3,-1 4,-2z"/>
       <path class="fil57" d="M999 664c0,0 0,0 0,0l8 -1c0,0 0,0 0,-1 -3,1 -5,1 -8,2z"/>
       <path class="fil57" d="M999 664c0,0 0,0 0,0l8 -1c0,0 0,0 0,-1 -3,1 -5,1 -8,2z"/>
       <path class="fil57" d="M1006 662c0,0 0,0 0,0 -2,-2 -5,-1 -6,0 0,1 0,1 0,1l6 -1z"/>
       <path class="fil57" d="M1006 662c0,0 0,0 0,0 -2,-2 -5,-1 -6,0 0,1 0,1 0,1l6 -1z"/>
       <path class="fil57" d="M1007 667c1,-1 1,-2 0,-3l-8 1c0,1 0,2 1,3 3,0 5,-1 7,-1z"/>
       <path class="fil57" d="M1007 667c1,-1 1,-2 0,-3l-8 1c0,1 0,2 1,3 3,0 5,-1 7,-1z"/>
       <path class="fil68" d="M1014 675c9,-12 11,-25 7,-33 0,0 0,0 0,0 -1,8 -5,17 -11,26 -5,7 -12,12 -18,15l0 0c-1,0 -2,0 -2,0 0,0 0,0 0,0 3,2 6,4 9,4l0 0c6,-2 11,-7 15,-12z"/>
       <path class="fil68" d="M1014 675c9,-12 11,-25 7,-33 0,0 0,0 0,0 -1,8 -5,17 -11,26 -5,7 -12,12 -18,15l0 0c-1,0 -2,0 -2,0 0,0 0,0 0,0 3,2 6,4 9,4l0 0c6,-2 11,-7 15,-12z"/>
       <path class="fil57" d="M1022 644c0,1 1,2 1,4 0,-3 -1,-5 -2,-6 -9,-2 -21,4 -30,15 -4,5 -6,11 -8,16 0,0 0,0 0,0l0 0c0,0 0,0 0,1 1,0 1,1 1,1 2,-5 4,-10 8,-15 8,-11 20,-17 30,-16z"/>
       <path class="fil57" d="M1022 644c0,1 1,2 1,4 0,-3 -1,-5 -2,-6 -9,-2 -21,4 -30,15 -4,5 -6,11 -8,16 0,0 0,0 0,0l0 0c0,0 0,0 0,1 1,0 1,1 1,1 2,-5 4,-10 8,-15 8,-11 20,-17 30,-16z"/>
      </g>
     </g>
     <g>
      <path class="fil16" d="M934 643c0,11 -8,8 -13,6 -4,-2 -7,0 -9,0 -1,-1 0,-3 3,-9 3,-7 -2,-12 -2,-12 0,0 6,-2 6,-3 -1,0 -7,2 -7,2 0,0 3,-8 2,-8 -1,0 -3,7 -3,7 -17,-3 -18,11 -18,11 0,0 -1,4 2,7 0,0 1,3 -4,5 -4,2 -6,17 10,23 17,5 28,-4 31,-10 4,-6 4,-17 2,-19z"/>
      <g>
       <path class="fil16" d="M934 643c0,11 -8,8 -13,6 -4,-2 -7,0 -9,0 -1,-1 0,-3 3,-9 3,-7 -2,-12 -2,-12 0,0 6,-2 6,-3 -1,0 -7,2 -7,2 0,0 3,-8 2,-8 -1,0 -3,7 -3,7 -17,-3 -18,11 -18,11 0,0 -1,4 2,7 0,0 1,3 -4,5 -4,2 -6,17 10,23 17,5 28,-4 31,-10 4,-6 4,-17 2,-19z"/>
       <path class="fil53" d="M893 649c2,-1 4,-1 6,-2 2,-1 3,-3 4,-5 0,-1 0,-1 0,-2 0,0 -1,0 -2,0 0,0 -1,1 -2,1 -1,0 -3,1 -5,1 0,1 0,2 1,2 0,0 1,3 -4,5 0,0 0,0 -1,1 1,-1 2,-1 3,-1z"/>
       <path class="fil53" d="M893 649c2,-1 4,-1 6,-2 2,-1 3,-3 4,-5 0,-1 0,-1 0,-2 0,0 -1,0 -2,0 0,0 -1,1 -2,1 -1,0 -3,1 -5,1 0,1 0,2 1,2 0,0 1,3 -4,5 0,0 0,0 -1,1 1,-1 2,-1 3,-1z"/>
       <g>
        <path class="fil68" d="M912 626c0,0 0,0 1,0 0,-1 0,-2 1,-4 -1,2 -2,4 -2,4z"/>
        <g>
         <path class="fil68" d="M912 626c0,0 0,0 1,0 0,-1 0,-2 1,-4 -1,2 -2,4 -2,4z"/>
         <path class="fil53" d="M912 649c-1,-1 0,-3 3,-9 3,-7 -2,-12 -2,-12 0,0 2,-1 3,-1 -1,0 -3,1 -3,1 0,0 4,6 0,13 -5,6 -7,8 -5,9 1,1 5,-1 10,2 4,3 12,7 15,-3 -3,4 -8,2 -12,0 -4,-2 -7,0 -9,0z"/>
         <path class="fil53" d="M912 649c-1,-1 0,-3 3,-9 3,-7 -2,-12 -2,-12 0,0 2,-1 3,-1 -1,0 -3,1 -3,1 0,0 4,6 0,13 -5,6 -7,8 -5,9 1,1 5,-1 10,2 4,3 12,7 15,-3 -3,4 -8,2 -12,0 -4,-2 -7,0 -9,0z"/>
         <path class="fil68" d="M919 626c0,-1 0,-1 0,-1 -1,0 -1,0 -2,0 1,0 1,0 2,1z"/>
         <path class="fil68" d="M919 626c0,-1 0,-1 0,-1 -1,0 -1,0 -2,0 1,0 1,0 2,1z"/>
         <path class="fil68" d="M914 619c0,0 0,0 0,0 0,0 0,0 0,0z"/>
         <path class="fil68" d="M914 619c0,0 0,0 0,0 0,0 0,0 0,0z"/>
        </g>
       </g>
       <path class="fil53" d="M935 652c0,1 -1,2 -1,3 -4,7 -16,17 -34,11 -6,-2 -9,-5 -12,-9 1,5 4,11 13,15 17,5 28,-4 31,-10 2,-3 3,-7 3,-10z"/>
       <path class="fil53" d="M935 652c0,1 -1,2 -1,3 -4,7 -16,17 -34,11 -6,-2 -9,-5 -12,-9 1,5 4,11 13,15 17,5 28,-4 31,-10 2,-3 3,-7 3,-10z"/>
       <path class="fil53" d="M906 664c0,0 13,3 17,-9 0,0 -2,17 -17,9z"/>
       <path class="fil53" d="M906 664c0,0 13,3 17,-9 0,0 -2,17 -17,9z"/>
       <path class="fil69" d="M902 635c0,0 -1,1 -1,0 -1,0 -1,0 -1,-1 0,0 1,-1 1,-1 1,1 1,1 1,2z"/>
       <path class="fil69" d="M902 635c0,0 -1,1 -1,0 -1,0 -1,0 -1,-1 0,0 1,-1 1,-1 1,1 1,1 1,2z"/>
       <path class="fil78" d="M901 634c0,0 0,0 0,0 -1,0 -1,0 -1,0 0,0 1,0 1,0 0,0 0,0 0,0z"/>
       <path class="fil78" d="M901 634c0,0 0,0 0,0 -1,0 -1,0 -1,0 0,0 1,0 1,0 0,0 0,0 0,0z"/>
       <path class="fil79" d="M887 637c0,0 5,1 6,-1 0,0 3,3 5,3 2,0 4,-1 5,0 1,1 -1,4 -4,3 -3,0 -8,1 -10,2 -1,0 -3,0 -3,-1 1,-2 3,-2 5,-3 0,0 -4,0 -5,-2 0,0 -1,-1 1,-1z"/>
       <path class="fil79" d="M887 637c0,0 5,1 6,-1 0,0 3,3 5,3 2,0 4,-1 5,0 1,1 -1,4 -4,3 -3,0 -8,1 -10,2 -1,0 -3,0 -3,-1 1,-2 3,-2 5,-3 0,0 -4,0 -5,-2 0,0 -1,-1 1,-1z"/>
       <path class="fil68" d="M903 639c-1,1 -2,2 -4,3 -2,0 -4,0 -6,0 -1,0 -3,1 -5,1 0,0 -1,0 -2,0 0,1 2,1 3,1 2,-1 7,-2 10,-2 3,1 5,-2 4,-3z"/>
       <path class="fil68" d="M903 639c-1,1 -2,2 -4,3 -2,0 -4,0 -6,0 -1,0 -3,1 -5,1 0,0 -1,0 -2,0 0,1 2,1 3,1 2,-1 7,-2 10,-2 3,1 5,-2 4,-3z"/>
       <g>
        <path class="fil69" d="M891 640c0,0 0,0 1,0 1,0 2,0 3,0 0,0 1,0 1,0 1,0 1,0 1,0 1,0 1,0 1,0 0,0 1,0 1,0 0,0 -1,0 -2,0 0,0 0,1 -1,1 0,0 -1,0 -1,0 -1,0 -1,0 -2,0 0,0 -1,0 -1,0 -1,0 -1,-1 -1,-1z"/>
        <g>
         <path class="fil69" d="M891 640c0,0 0,0 1,0 1,0 2,0 3,0 0,0 1,0 1,0 1,0 1,0 1,0 1,0 1,0 1,0 0,0 1,0 1,0 0,0 -1,0 -2,0 0,0 0,1 -1,1 0,0 -1,0 -1,0 -1,0 -1,0 -2,0 0,0 -1,0 -1,0 -1,0 -1,-1 -1,-1z"/>
        </g>
       </g>
       <path class="fil69" d="M894 638c0,0 0,1 0,1 0,0 0,0 0,-1 0,0 0,0 0,0 0,0 0,0 0,0z"/>
       <path class="fil69" d="M894 638c0,0 0,1 0,1 0,0 0,0 0,-1 0,0 0,0 0,0 0,0 0,0 0,0z"/>
      </g>
     </g>
     <g>
      <polygon class="fil80" points="943,680 949,676 959,676 954,681 "/>
      <g>
       <polygon class="fil80" points="943,680 949,676 959,676 954,681 "/>
       <polygon class="fil81" points="954,681 956,692 945,691 943,680 "/>
       <polygon class="fil81" points="954,681 956,692 945,691 943,680 "/>
       <polygon class="fil82" points="954,681 959,676 961,686 956,692 "/>
       <polygon class="fil82" points="954,681 959,676 961,686 956,692 "/>
      </g>
     </g>
     <g>
      <g>
       <path class="fil81" d="M982 669c8,5 10,15 5,23 -5,7 -15,9 -23,5 -7,-5 -9,-15 -4,-23 5,-7 15,-10 22,-5z"/>
       <g>
        <g>
         <path class="fil81" d="M982 669c8,5 10,15 5,23 -5,7 -15,9 -23,5 -7,-5 -9,-15 -4,-23 5,-7 15,-10 22,-5z"/>
         <path class="fil83" d="M966 692c5,4 10,5 15,5 3,-1 5,-3 6,-5 0,-1 1,-1 1,-2 -6,2 -12,0 -18,-4 -5,-3 -9,-7 -10,-12 0,0 0,0 0,0 -2,3 -3,6 -3,9 2,3 5,7 9,9z"/>
         <path class="fil83" d="M966 692c5,4 10,5 15,5 3,-1 5,-3 6,-5 0,-1 1,-1 1,-2 -6,2 -12,0 -18,-4 -5,-3 -9,-7 -10,-12 0,0 0,0 0,0 -2,3 -3,6 -3,9 2,3 5,7 9,9z"/>
         <path class="fil68" d="M983 670c2,5 2,11 -2,15 -5,8 -15,10 -22,5 0,0 0,0 0,0 1,3 3,5 5,7 8,4 18,2 23,-5 5,-8 3,-17 -4,-22z"/>
         <path class="fil68" d="M983 670c2,5 2,11 -2,15 -5,8 -15,10 -22,5 0,0 0,0 0,0 1,3 3,5 5,7 8,4 18,2 23,-5 5,-8 3,-17 -4,-22z"/>
        </g>
       </g>
       <path class="fil78" d="M979 669c3,2 4,5 2,7 -1,3 -4,3 -7,1 -3,-2 -4,-5 -3,-7 2,-2 5,-2 8,-1z"/>
       <path class="fil78" d="M979 669c3,2 4,5 2,7 -1,3 -4,3 -7,1 -3,-2 -4,-5 -3,-7 2,-2 5,-2 8,-1z"/>
       <path class="fil68" d="M968 690c-5,-3 -8,-6 -10,-10 -2,6 1,13 6,17 7,4 14,3 20,-1 -5,-1 -11,-2 -16,-6z"/>
       <path class="fil68" d="M968 690c-5,-3 -8,-6 -10,-10 -2,6 1,13 6,17 7,4 14,3 20,-1 -5,-1 -11,-2 -16,-6z"/>
      </g>
     </g>
     <g>
      <path class="fil84" d="M957 690c-3,6 -25,3 -49,-7 -24,-11 -42,-24 -39,-30 3,-6 25,-3 49,7 24,10 42,23 39,30z"/>
      <g>
       <path class="fil84" d="M957 690c-3,6 -25,3 -49,-7 -24,-11 -42,-24 -39,-30 3,-6 25,-3 49,7 24,10 42,23 39,30z"/>
       <path class="fil68" d="M931 674c-1,3 -9,2 -18,-2 -10,-4 -16,-9 -15,-12 1,-2 9,-1 19,3 9,3 15,9 14,11z"/>
       <path class="fil68" d="M931 674c-1,3 -9,2 -18,-2 -10,-4 -16,-9 -15,-12 1,-2 9,-1 19,3 9,3 15,9 14,11z"/>
       <path class="fil68" d="M911 677c-21,-8 -37,-19 -39,-26 -2,0 -2,1 -3,2 -3,6 15,19 39,30 24,10 46,13 49,7 0,-1 0,-2 0,-4 -7,3 -26,0 -46,-9z"/>
       <path class="fil68" d="M911 677c-21,-8 -37,-19 -39,-26 -2,0 -2,1 -3,2 -3,6 15,19 39,30 24,10 46,13 49,7 0,-1 0,-2 0,-4 -7,3 -26,0 -46,-9z"/>
       <g>
        <path class="fil68" d="M872 651c0,0 0,0 0,0 0,0 -1,0 -1,0 1,0 1,0 1,0z"/>
        <g>
         <path class="fil68" d="M872 651c0,0 0,0 0,0 0,0 -1,0 -1,0 1,0 1,0 1,0z"/>
         <path class="fil68" d="M905 678c-15,-6 -28,-14 -35,-20 4,6 19,17 38,25 24,10 46,13 49,7 0,-1 0,-2 0,-3 -6,5 -28,1 -52,-9z"/>
         <path class="fil68" d="M905 678c-15,-6 -28,-14 -35,-20 4,6 19,17 38,25 24,10 46,13 49,7 0,-1 0,-2 0,-3 -6,5 -28,1 -52,-9z"/>
        </g>
       </g>
       <path class="fil80" d="M913 671c6,2 12,3 17,3 1,-10 0,-23 -7,-26 -7,-3 -17,5 -24,13 4,4 8,8 14,10z"/>
       <path class="fil80" d="M913 671c6,2 12,3 17,3 1,-10 0,-23 -7,-26 -7,-3 -17,5 -24,13 4,4 8,8 14,10z"/>
       <path class="fil68" d="M921 673c3,1 6,1 9,1 1,-8 0,-17 -3,-22 1,6 -2,14 -6,21z"/>
       <path class="fil68" d="M921 673c3,1 6,1 9,1 1,-8 0,-17 -3,-22 1,6 -2,14 -6,21z"/>
       <path class="fil57" d="M922 648c-7,-2 -17,5 -23,13 3,3 5,5 9,8 3,-9 8,-18 14,-21z"/>
       <path class="fil57" d="M922 648c-7,-2 -17,5 -23,13 3,3 5,5 9,8 3,-9 8,-18 14,-21z"/>
       <g>
        <path class="fil71" d="M899 661c0,0 -1,0 -4,-1 -2,0 -6,-1 -9,-1 -1,0 -2,0 -3,0 0,0 -1,0 -2,0 -1,0 -2,0 -2,0 -1,0 -2,1 -2,1 -1,0 -1,0 -1,1 -1,0 -1,1 -1,1 0,0 0,1 0,1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,-1 0,-1 0,0 0,-1 0,-1 1,-1 1,-1 1,-2 1,0 2,-1 3,-1 0,0 1,0 2,0 1,0 2,0 2,0 1,0 2,0 3,0 2,0 3,0 5,0 2,1 3,1 4,2 3,0 4,1 4,1z"/>
        <g>
         <path class="fil71" d="M899 661c0,0 -1,0 -4,-1 -2,0 -6,-1 -9,-1 -1,0 -2,0 -3,0 0,0 -1,0 -2,0 -1,0 -2,0 -2,0 -1,0 -2,1 -2,1 -1,0 -1,0 -1,1 -1,0 -1,1 -1,1 0,0 0,1 0,1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,-1 0,-1 0,0 0,-1 0,-1 1,-1 1,-1 1,-2 1,0 2,-1 3,-1 0,0 1,0 2,0 1,0 2,0 2,0 1,0 2,0 3,0 2,0 3,0 5,0 2,1 3,1 4,2 3,0 4,1 4,1z"/>
        </g>
       </g>
       <g>
        <path class="fil71" d="M930 674c0,0 2,0 4,2 1,0 2,1 4,2 1,1 2,2 4,3 0,1 1,1 2,2 0,0 1,1 1,2 1,0 1,1 2,2 0,0 0,1 0,2 0,0 0,1 0,2 0,0 0,1 0,1 -1,0 -1,0 -1,1 0,0 0,0 0,0 0,0 0,0 0,-1 0,0 0,0 0,0 0,-1 1,-1 1,-2 0,0 0,0 -1,-1 0,-1 0,-1 0,-2 -1,0 -1,-1 -2,-2 0,0 -1,-1 -1,-1 -1,-1 -2,-1 -2,-2 -3,-2 -6,-4 -8,-6 -2,-1 -3,-2 -3,-2z"/>
        <g>
         <path class="fil71" d="M930 674c0,0 2,0 4,2 1,0 2,1 4,2 1,1 2,2 4,3 0,1 1,1 2,2 0,0 1,1 1,2 1,0 1,1 2,2 0,0 0,1 0,2 0,0 0,1 0,2 0,0 0,1 0,1 -1,0 -1,0 -1,1 0,0 0,0 0,0 0,0 0,0 0,-1 0,0 0,0 0,0 0,-1 1,-1 1,-2 0,0 0,0 -1,-1 0,-1 0,-1 0,-2 -1,0 -1,-1 -2,-2 0,0 -1,-1 -1,-1 -1,-1 -2,-1 -2,-2 -3,-2 -6,-4 -8,-6 -2,-1 -3,-2 -3,-2z"/>
        </g>
       </g>
       <g>
        <path class="fil71" d="M906 668c0,0 -1,0 -2,0 -2,1 -4,1 -6,2 -1,0 -2,1 -3,1 0,0 -1,1 -1,1 0,0 0,1 -1,1 0,0 0,1 0,1 0,0 0,0 0,1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,-1 0,-1 -1,-1 -1,-1 0,-1 0,-1 0,-1 0,-2 1,0 1,0 2,-1 0,0 1,0 1,-1 0,0 1,0 2,0 1,-1 2,-1 3,-1 1,0 2,0 3,0 1,-1 2,0 2,0z"/>
        <g>
         <path class="fil71" d="M906 668c0,0 -1,0 -2,0 -2,1 -4,1 -6,2 -1,0 -2,1 -3,1 0,0 -1,1 -1,1 0,0 0,1 -1,1 0,0 0,1 0,1 0,0 0,0 0,1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,-1 0,-1 -1,-1 -1,-1 0,-1 0,-1 0,-1 0,-2 1,0 1,0 2,-1 0,0 1,0 1,-1 0,0 1,0 2,0 1,-1 2,-1 3,-1 1,0 2,0 3,0 1,-1 2,0 2,0z"/>
        </g>
       </g>
       <g>
        <path class="fil71" d="M919 673c0,0 1,1 2,2 1,1 2,1 3,2 1,1 1,2 2,3 0,1 1,1 1,2 0,0 0,1 0,2 1,0 1,1 1,1 -1,1 -1,2 -1,2 -1,0 -1,1 -1,1 -1,0 -1,0 -1,0 -1,0 -1,0 -1,0 0,0 0,0 1,0 0,0 0,0 0,-1 1,0 1,0 1,-1 0,0 0,0 0,-1 0,0 0,-1 0,-1 0,-1 -1,-2 -1,-3 -1,-1 -2,-2 -2,-3 -1,-1 -2,-2 -2,-3 -1,-1 -2,-2 -2,-2z"/>
        <g>
         <path class="fil71" d="M919 673c0,0 1,1 2,2 1,1 2,1 3,2 1,1 1,2 2,3 0,1 1,1 1,2 0,0 0,1 0,2 1,0 1,1 1,1 -1,1 -1,2 -1,2 -1,0 -1,1 -1,1 -1,0 -1,0 -1,0 -1,0 -1,0 -1,0 0,0 0,0 1,0 0,0 0,0 0,-1 1,0 1,0 1,-1 0,0 0,0 0,-1 0,0 0,-1 0,-1 0,-1 -1,-2 -1,-3 -1,-1 -2,-2 -2,-3 -1,-1 -2,-2 -2,-3 -1,-1 -2,-2 -2,-2z"/>
        </g>
       </g>
       <path class="fil71" d="M895 656c0,1 -1,1 -1,1 -1,0 -1,-1 -1,-2 0,0 1,-1 2,-1 0,1 1,2 0,2z"/>
       <path class="fil71" d="M895 656c0,1 -1,1 -1,1 -1,0 -1,-1 -1,-2 0,0 1,-1 2,-1 0,1 1,2 0,2z"/>
       <path class="fil71" d="M898 664c0,1 -1,1 -2,1 0,0 -1,-1 0,-2 0,0 0,-1 1,-1 1,1 1,2 1,2z"/>
       <path class="fil71" d="M898 664c0,1 -1,1 -2,1 0,0 -1,-1 0,-2 0,0 0,-1 1,-1 1,1 1,2 1,2z"/>
       <path class="fil71" d="M913 674c0,1 -1,1 -2,1 0,0 -1,-1 0,-2 0,0 1,0 1,0 1,0 1,1 1,1z"/>
       <path class="fil71" d="M913 674c0,1 -1,1 -2,1 0,0 -1,-1 0,-2 0,0 1,0 1,0 1,0 1,1 1,1z"/>
       <path class="fil71" d="M930 678c0,1 -1,1 -2,1 0,0 0,-1 0,-2 0,0 1,-1 1,0 1,0 1,1 1,1z"/>
       <path class="fil71" d="M930 678c0,1 -1,1 -2,1 0,0 0,-1 0,-2 0,0 1,-1 1,0 1,0 1,1 1,1z"/>
       <path class="fil71" d="M936 673c0,1 -1,1 -1,1 -1,0 -1,-1 -1,-2 0,0 1,-1 2,0 0,0 1,1 0,1z"/>
       <path class="fil71" d="M936 673c0,1 -1,1 -1,1 -1,0 -1,-1 -1,-2 0,0 1,-1 2,0 0,0 1,1 0,1z"/>
       <g>
        <path class="fil71" d="M901 659c0,0 0,-1 0,-1 0,0 0,0 0,-1 0,0 0,0 -1,0 0,0 0,0 0,-1 0,0 -1,0 -1,-1 -1,0 -1,0 -1,-1 -1,0 -1,0 -1,-1 -1,0 -1,-1 -1,-1 0,0 0,0 1,1 0,0 1,0 1,0 1,1 1,1 1,1 0,0 1,0 1,0 0,1 1,1 1,2 0,0 1,1 1,1 0,1 0,1 -1,1 0,0 0,1 0,1z"/>
        <g>
         <path class="fil71" d="M901 659c0,0 0,-1 0,-1 0,0 0,0 0,-1 0,0 0,0 -1,0 0,0 0,0 0,-1 0,0 -1,0 -1,-1 -1,0 -1,0 -1,-1 -1,0 -1,0 -1,-1 -1,0 -1,-1 -1,-1 0,0 0,0 1,1 0,0 1,0 1,0 1,1 1,1 1,1 0,0 1,0 1,0 0,1 1,1 1,2 0,0 1,1 1,1 0,1 0,1 -1,1 0,0 0,1 0,1z"/>
        </g>
       </g>
       <g>
        <path class="fil71" d="M930 669c0,0 0,0 1,0 0,0 0,0 1,0 0,-1 0,-1 1,-1 1,0 1,0 2,0 0,0 0,1 1,1 0,0 0,0 0,0 1,0 1,0 2,1 0,0 0,0 0,1 1,0 1,0 1,0 0,0 0,0 -1,0 0,0 0,0 -1,0 0,-1 0,-1 0,-1 -1,0 -1,0 -1,0 0,0 0,0 -1,0 0,0 0,0 -1,0 0,0 0,0 -1,-1 0,0 0,0 -1,0 0,0 0,0 0,0 -1,0 -2,0 -2,0z"/>
        <g>
         <path class="fil71" d="M930 669c0,0 0,0 1,0 0,0 0,0 1,0 0,-1 0,-1 1,-1 1,0 1,0 2,0 0,0 0,1 1,1 0,0 0,0 0,0 1,0 1,0 2,1 0,0 0,0 0,1 1,0 1,0 1,0 0,0 0,0 -1,0 0,0 0,0 -1,0 0,-1 0,-1 0,-1 -1,0 -1,0 -1,0 0,0 0,0 -1,0 0,0 0,0 -1,0 0,0 0,0 -1,-1 0,0 0,0 -1,0 0,0 0,0 0,0 -1,0 -2,0 -2,0z"/>
        </g>
       </g>
       <path class="fil85" d="M927 641c0,0 0,-1 -1,-1 0,0 -1,0 -1,1l-3 7c-1,0 0,1 0,1 1,0 1,0 2,0l3 -8z"/>
       <path class="fil85" d="M927 641c0,0 0,-1 -1,-1 0,0 -1,0 -1,1l-3 7c-1,0 0,1 0,1 1,0 1,0 2,0l3 -8z"/>
       <path class="fil71" d="M930 641c-1,2 -3,3 -5,2 -2,0 -3,-3 -2,-4 0,-2 3,-3 5,-3 2,1 2,3 2,5z"/>
       <path class="fil71" d="M930 641c-1,2 -3,3 -5,2 -2,0 -3,-3 -2,-4 0,-2 3,-3 5,-3 2,1 2,3 2,5z"/>
       <path class="fil57" d="M927 640c0,1 -1,1 -2,1 -1,-1 -2,-2 -1,-3 0,-1 1,-1 2,-1 1,1 1,2 1,3z"/>
       <path class="fil57" d="M927 640c0,1 -1,1 -2,1 -1,-1 -2,-2 -1,-3 0,-1 1,-1 2,-1 1,1 1,2 1,3z"/>
       <path class="fil68" d="M930 669c-5,1 -10,0 -16,-2 -5,-3 -9,-5 -12,-9 -1,1 -2,2 -3,3 4,4 8,8 14,10 6,2 12,3 17,3 0,-2 0,-3 0,-5z"/>
       <path class="fil68" d="M930 669c-5,1 -10,0 -16,-2 -5,-3 -9,-5 -12,-9 -1,1 -2,2 -3,3 4,4 8,8 14,10 6,2 12,3 17,3 0,-2 0,-3 0,-5z"/>
       <path class="fil57" d="M899 658c0,0 -20,-11 -23,-5 -2,2 23,5 23,5z"/>
       <path class="fil57" d="M899 658c0,0 -20,-11 -23,-5 -2,2 23,5 23,5z"/>
       <path class="fil57" d="M885 661c-3,-3 16,3 16,3 0,0 -9,6 -16,-3z"/>
       <path class="fil57" d="M885 661c-3,-3 16,3 16,3 0,0 -9,6 -16,-3z"/>
       <path class="fil57" d="M913 672c0,0 -12,-3 -11,-1 1,2 20,10 19,7 0,-3 -8,-6 -8,-6z"/>
       <path class="fil57" d="M913 672c0,0 -12,-3 -11,-1 1,2 20,10 19,7 0,-3 -8,-6 -8,-6z"/>
       <path class="fil57" d="M932 672c0,0 14,3 18,9 4,6 -16,-6 -18,-9z"/>
       <path class="fil57" d="M932 672c0,0 14,3 18,9 4,6 -16,-6 -18,-9z"/>
       <path class="fil57" d="M928 675c0,0 -2,6 4,8 7,2 10,1 5,-3 -5,-3 -9,-5 -9,-5z"/>
       <path class="fil57" d="M928 675c0,0 -2,6 4,8 7,2 10,1 5,-3 -5,-3 -9,-5 -9,-5z"/>
      </g>
     </g>
     <g>
      <polygon class="fil86" points="943,758 884,740 884,674 943,692 "/>
      <g>
       <polygon class="fil86" points="943,758 884,740 884,674 943,692 "/>
       <polygon class="fil87" points="943,758 1015,740 1015,674 943,692 "/>
       <polygon class="fil87" points="943,758 1015,740 1015,674 943,692 "/>
      </g>
     </g>
     <g>
      <polygon class="fil88" points="903,766 826,756 853,685 931,696 "/>
      <g>
       <polygon class="fil88" points="903,766 826,756 853,685 931,696 "/>
       <polygon class="fil89" points="903,766 909,775 937,704 931,696 "/>
       <polygon class="fil89" points="903,766 909,775 937,704 931,696 "/>
       <polygon class="fil90" points="903,766 909,775 832,764 826,756 "/>
       <polygon class="fil90" points="903,766 909,775 832,764 826,756 "/>
      </g>
     </g>
    </g>
   </g>
   <path class="fil12" d="M334 531l-1 0c0,0 0,-2 0,-2 -1,0 -2,-2 -2,-2 0,0 1,0 2,0 0,0 2,0 3,-1 0,-1 2,-3 3,-4 0,-2 2,-5 2,-5 0,0 -2,9 -4,11 0,2 -3,3 -3,3z"/>
   <path class="fil12" d="M334 531l-1 0c0,0 0,-2 0,-2 -1,0 -2,-2 -2,-2 0,0 1,0 2,0 0,0 2,0 3,-1 0,-1 2,-3 3,-4 0,-2 2,-5 2,-5 0,0 -2,9 -4,11 0,2 -3,3 -3,3z"/>
   <g>
    <polygon class="fil91" points="228,629 184,629 184,663 228,663 "/>
    <g>
     <polygon class="fil91" points="228,629 184,629 184,663 228,663 "/>
    </g>
   </g>
   <line class="fil35 str16" x1="200" y1="631" x2="216" y2= "652" />
   <line class="fil35 str16" x1="200" y1="631" x2="216" y2= "652" />
   <path class="fil35 str16" d="M216 652c-13,1 -31,1 -49,1"/>
   <path class="fil35 str16" d="M216 652c-13,1 -31,1 -49,1"/>
   <path class="fil34 str17" d="M216 652l-16 -21 16 -12 22 31c-2,0 -4,0 -5,0 -4,1 -10,1 -17,2z"/>
   <path class="fil34 str17" d="M216 652l-16 -21 16 -12 22 31c-2,0 -4,0 -5,0 -4,1 -10,1 -17,2z"/>
   <path class="fil92" d="M757 781c56,11 92,26 92,42 -1,26 -109,45 -242,41 -20,-1 -40,-2 -59,-3l0 -1 209 -79z"/>
   <path class="fil92" d="M757 781c56,11 92,26 92,42 -1,26 -109,45 -242,41 -20,-1 -40,-2 -59,-3l0 -1 209 -79z"/>
   <path class="fil93" d="M595 862c3,0 7,0 10,0 118,0 221,-20 230,-45 5,-13 -18,-24 -58,-33 -16,-36 -48,-62 -85,-63 0,0 -7,1 -18,2 -46,9 -81,58 -81,116 0,8 1,15 2,23z"/>
   <path class="fil93" d="M595 862c3,0 7,0 10,0 118,0 221,-20 230,-45 5,-13 -18,-24 -58,-33 -16,-36 -48,-62 -85,-63 0,0 -7,1 -18,2 -46,9 -81,58 -81,116 0,8 1,15 2,23z"/>
   <path class="fil94" d="M693 858c69,-7 124,-20 124,-38 0,-18 -55,-33 -124,-33 -69,0 -125,15 -125,33 0,8 6,42 28,42 25,0 61,0 97,-4z"/>
   <path class="fil94" d="M693 858c69,-7 124,-20 124,-38 0,-18 -55,-33 -124,-33 -69,0 -125,15 -125,33 0,8 6,42 28,42 25,0 61,0 97,-4z"/>
   <path class="fil95" d="M595 862c0,0 23,-3 37,-12 14,-8 17,-3 24,4 7,6 18,-1 24,-5 6,-5 11,1 13,3 3,2 39,3 48,-12 9,-15 8,-9 16,-3 9,6 15,-1 15,-9 0,-9 6,-3 14,1 9,5 42,-9 34,-19 -9,-10 0,-11 7,-8 7,5 10,10 8,15 -9,25 -112,45 -230,45 -3,0 -7,0 -10,0 0,0 0,0 0,0zm211 -70l0 0c0,3 -6,1 -11,-3 4,1 7,2 11,3zm-29 -8l0 0 -6 5 4 -9c1,2 1,3 2,4z"/>
   <path class="fil95" d="M595 862c0,0 23,-3 37,-12 14,-8 17,-3 24,4 7,6 18,-1 24,-5 6,-5 11,1 13,3 3,2 39,3 48,-12 9,-15 8,-9 16,-3 9,6 15,-1 15,-9 0,-9 6,-3 14,1 9,5 42,-9 34,-19 -9,-10 0,-11 7,-8 7,5 10,10 8,15 -9,25 -112,45 -230,45 -3,0 -7,0 -10,0 0,0 0,0 0,0zm211 -70l0 0c0,3 -6,1 -11,-3 4,1 7,2 11,3zm-29 -8l0 0 -6 5 4 -9c1,2 1,3 2,4z"/>
   <path class="fil93" d="M551 860c-39,71 -229,11 -88,-10l0 0c24,5 54,8 88,10l0 0z"/>
   <path class="fil93" d="M551 860c-39,71 -229,11 -88,-10l0 0c24,5 54,8 88,10l0 0z"/>
   <path class="fil93" d="M410 827c0,0 -7,8 -39,9 -32,0 -71,-16 -21,-26 50,-10 38,9 70,-15 15,-12 24,-13 30,-10 -21,13 -34,24 -34,24 -4,2 -7,5 -8,8 -1,4 0,7 2,10l0 0z"/>
   <path class="fil93" d="M410 827c0,0 -7,8 -39,9 -32,0 -71,-16 -21,-26 50,-10 38,9 70,-15 15,-12 24,-13 30,-10 -21,13 -34,24 -34,24 -4,2 -7,5 -8,8 -1,4 0,7 2,10l0 0z"/>
   <path class="fil92" d="M410 827c0,0 -2,2 -7,4 -6,1 -13,2 -22,2 -29,1 -63,-13 -33,-22 1,-1 1,-1 2,-1 39,-7 41,2 54,-5 6,0 12,-2 26,-13 5,-4 10,-7 13,-8 3,-1 5,0 7,1 -21,13 -34,24 -34,24 -4,2 -7,5 -8,8 -1,4 0,7 2,10l0 0z"/>
   <path class="fil92" d="M410 827c0,0 -2,2 -7,4 -6,1 -13,2 -22,2 -29,1 -63,-13 -33,-22 1,-1 1,-1 2,-1 39,-7 41,2 54,-5 6,0 12,-2 26,-13 5,-4 10,-7 13,-8 3,-1 5,0 7,1 -21,13 -34,24 -34,24 -4,2 -7,5 -8,8 -1,4 0,7 2,10l0 0z"/>
   <path class="fil93" d="M609 719c-24,-22 -67,-11 -91,6 -17,11 2,16 11,18l0 0c25,-11 52,-20 80,-24l0 0z"/>
   <path class="fil93" d="M609 719c-24,-22 -67,-11 -91,6 -17,11 2,16 11,18l0 0c25,-11 52,-20 80,-24l0 0z"/>
   <path class="fil96" d="M690 761c0,0 -47,-6 -51,23 -1,-4 3,-13 -6,-14 -9,-1 -50,22 -30,38 5,-8 13,-23 19,-20 -2,3 -23,24 -12,31 12,7 41,4 45,0 3,-2 14,5 19,5 5,0 10,0 10,0 -4,-6 -11,-41 6,-63z"/>
   <path class="fil96" d="M690 761c0,0 -47,-6 -51,23 -1,-4 3,-13 -6,-14 -9,-1 -50,22 -30,38 5,-8 13,-23 19,-20 -2,3 -23,24 -12,31 12,7 41,4 45,0 3,-2 14,5 19,5 5,0 10,0 10,0 -4,-6 -11,-41 6,-63z"/>
   <path class="fil97 str18" d="M690 761c0,0 -47,-6 -51,23 -1,-4 3,-13 -6,-14 -9,-1 -50,22 -30,38 5,-8 13,-23 19,-20 -2,3 -23,24 -12,31 12,7 41,4 45,0 3,-2 14,5 19,5 5,0 10,0 10,0 -4,-6 -11,-41 6,-63"/>
   <path class="fil98" d="M688 731l-5 -14c-2,-1 -5,-2 -8,-2 -7,0 -13,6 -13,13 1,7 7,13 14,12 5,0 10,-4 12,-9z"/>
   <path class="fil98" d="M688 731l-5 -14c-2,-1 -5,-2 -8,-2 -7,0 -13,6 -13,13 1,7 7,13 14,12 5,0 10,-4 12,-9z"/>
   <path class="fil97 str19" d="M683 717c-2,-1 -5,-2 -8,-2 -7,0 -13,6 -13,13 1,7 7,13 14,12 5,0 10,-4 12,-9"/>
   <path class="fil97 str20" d="M668 728c0,-5 3,-8 7,-9 5,0 8,4 9,8 0,2 -1,4 -2,5"/>
   <path class="fil97 str20" d="M682 732c-3,0 -5,-2 -5,-4 0,-3 2,-5 5,-5 0,0 0,0 0,0 1,1 2,3 2,4 0,2 -1,4 -2,5 0,0 0,0 0,0"/>
   <path class="fil98 str21" d="M841 812c0,0 26,-11 36,9 2,2 -2,2 -2,1 -1,-1 -5,-5 -7,-4 -2,1 8,8 6,10 -3,4 -12,-8 -13,-7 -2,1 16,13 9,14 -5,1 -13,-12 -15,-10 -1,2 7,14 2,14 -5,0 -9,-7 -13,-10 -4,-2 -7,4 -11,5 -3,1 -13,3 -13,-2 0,-6 4,-3 10,-4 7,-2 11,-12 11,-16z"/>
   <path class="fil98 str21" d="M732 858c-5,1 -6,-14 -9,-13 -2,0 0,11 -2,12 -1,1 -1,1 -1,1 -6,0 -3,-11 -5,-11 -4,1 1,13 -4,11 -6,-2 -8,-19 -2,-24 5,-2 7,-5 21,-6 0,0 12,6 16,6 4,0 7,0 6,3 -2,2 -10,3 -17,-1 -1,2 7,7 9,8 2,1 6,4 5,5 0,1 0,1 -1,1 -4,3 -14,-8 -17,-7 -1,1 5,14 1,15z"/>
   <path class="fil96" d="M849 807c0,0 -10,23 -24,21 -11,-7 -46,-30 -46,-40 -1,-10 1,-7 -1,-7 -1,0 -6,33 -24,41 -1,-1 -13,0 -16,2 -2,2 -2,1 -4,0 -2,-1 -18,-14 -18,-17 0,-3 3,-17 6,-20 -2,-2 -3,0 -3,0 0,0 -4,12 -4,16 0,3 -3,3 0,4 3,2 16,16 17,18 1,2 -32,1 -28,21 -2,-2 -15,-11 -19,-20 -5,-10 -10,-30 -5,-47 5,-18 30,-39 45,-41 -2,2 -6,9 1,15 8,5 17,11 25,9 8,-2 9,-16 8,-21 3,1 16,1 31,21 16,21 50,40 59,45z"/>
   <path class="fil96" d="M849 807c0,0 -10,23 -24,21 -11,-7 -46,-30 -46,-40 -1,-10 1,-7 -1,-7 -1,0 -6,33 -24,41 -1,-1 -13,0 -16,2 -2,2 -2,1 -4,0 -2,-1 -18,-14 -18,-17 0,-3 3,-17 6,-20 -2,-2 -3,0 -3,0 0,0 -4,12 -4,16 0,3 -3,3 0,4 3,2 16,16 17,18 1,2 -32,1 -28,21 -2,-2 -15,-11 -19,-20 -5,-10 -10,-30 -5,-47 5,-18 30,-39 45,-41 -2,2 -6,9 1,15 8,5 17,11 25,9 8,-2 9,-16 8,-21 3,1 16,1 31,21 16,21 50,40 59,45z"/>
   <path class="fil97 str18" d="M849 807c0,0 -10,23 -24,21 -11,-7 -46,-30 -46,-40 -1,-10 1,-7 -1,-7 -1,0 -6,33 -24,41 -1,-1 -13,0 -16,2 -2,2 -2,1 -4,0 -2,-1 -18,-14 -18,-17 0,-3 3,-17 6,-20 -2,-2 -3,0 -3,0 0,0 -4,12 -4,16 0,3 -3,3 0,4 3,2 16,16 17,18 1,2 -32,1 -28,21 -2,-2 -15,-11 -19,-20 -5,-10 -10,-30 -5,-47 5,-18 30,-39 45,-41 -2,2 -6,9 1,15 8,5 17,11 25,9 8,-2 9,-16 8,-21 3,1 16,1 31,21 16,21 50,40 59,45"/>
   <path class="fil99" d="M755 783c0,0 0,1 0,2 0,1 0,2 0,3 0,2 -1,4 -1,6 0,1 0,1 0,2 -1,1 -1,2 -1,3 0,1 -1,2 -1,3 0,1 0,1 -1,2 0,0 0,1 0,1 0,0 0,1 -1,1 0,1 0,1 0,2 0,0 0,1 -1,2 0,0 0,1 -1,2 0,0 0,1 0,1 0,1 -1,2 -1,2l1 0c0,0 0,-1 0,-1 1,-1 1,-1 2,-2 0,0 0,-1 1,-1 0,-1 0,-1 1,-1 0,-1 0,-1 0,-2 0,0 1,0 1,-1 0,0 0,-1 0,-1 0,-1 1,-1 1,-2 0,0 0,0 0,-1 0,-1 1,-2 1,-3 0,-1 0,-2 0,-3 0,-1 0,-2 1,-3 0,-1 0,-2 0,-3 0,-1 0,-2 0,-2 0,-1 0,-2 -1,-3 0,0 0,-1 0,-1 0,-1 0,-2 0,-2l0 0z"/>
   <path class="fil99" d="M755 783c0,0 0,1 0,2 0,1 0,2 0,3 0,2 -1,4 -1,6 0,1 0,1 0,2 -1,1 -1,2 -1,3 0,1 -1,2 -1,3 0,1 0,1 -1,2 0,0 0,1 0,1 0,0 0,1 -1,1 0,1 0,1 0,2 0,0 0,1 -1,2 0,0 0,1 -1,2 0,0 0,1 0,1 0,1 -1,2 -1,2l1 0c0,0 0,-1 0,-1 1,-1 1,-1 2,-2 0,0 0,-1 1,-1 0,-1 0,-1 1,-1 0,-1 0,-1 0,-2 0,0 1,0 1,-1 0,0 0,-1 0,-1 0,-1 1,-1 1,-2 0,0 0,0 0,-1 0,-1 1,-2 1,-3 0,-1 0,-2 0,-3 0,-1 0,-2 1,-3 0,-1 0,-2 0,-3 0,-1 0,-2 0,-2 0,-1 0,-2 -1,-3 0,0 0,-1 0,-1 0,-1 0,-2 0,-2l0 0z"/>
   <path class="fil99" d="M748 777c-2,0 -4,1 -4,3 0,2 2,4 4,4 2,0 3,-2 3,-4 0,-2 -1,-3 -3,-3z"/>
   <path class="fil99" d="M748 777c-2,0 -4,1 -4,3 0,2 2,4 4,4 2,0 3,-2 3,-4 0,-2 -1,-3 -3,-3z"/>
   <path class="fil99" d="M744 797c-2,1 -3,2 -3,4 0,2 2,4 4,4 1,-1 3,-2 3,-4 0,-2 -2,-4 -4,-4z"/>
   <path class="fil99" d="M744 797c-2,1 -3,2 -3,4 0,2 2,4 4,4 1,-1 3,-2 3,-4 0,-2 -2,-4 -4,-4z"/>
   <path class="fil98 str21" d="M809 722c0,0 -3,11 -14,22 -4,4 -11,7 -18,10 -14,6 -15,7 -35,7 -3,0 -8,0 -11,0 -25,-4 -37,-17 -40,-21 -2,-1 -5,-5 -7,-11 0,0 0,-1 0,-2 0,-1 -1,-3 -2,-4 0,0 0,0 0,0 -1,0 -1,0 -1,0 -3,-7 -4,-16 -1,-24 7,-21 24,-31 33,-34 9,-4 12,-13 12,-16 0,-3 -2,-17 -2,-19 0,-2 4,-10 11,-11 8,-1 13,4 12,8 -1,5 -5,7 -9,7 -4,0 -8,-2 -11,-3 -2,-1 -7,-5 -7,-6 -1,0 7,5 11,5 3,1 11,2 13,-2 1,-4 -2,-5 -5,-5 -2,0 -12,3 -9,13 4,9 11,15 14,17 3,2 3,4 25,7 22,4 36,24 39,28 2,5 7,17 2,34z"/>
   <path class="fil98 str21" d="M817 700c-2,0 -4,1 -6,2 1,5 1,11 -1,18 2,1 5,2 8,2 5,0 10,-5 10,-11 0,-6 -5,-11 -11,-11z"/>
   <path class="fil100" d="M716 663c0,0 0,0 -1,1 -1,0 -2,0 -2,1 -13,9 -21,23 -20,39 1,20 16,37 36,44 0,-4 1,-7 2,-10 3,-5 12,-4 15,-3 3,1 13,1 19,-1 7,-3 12,1 13,3 1,1 3,4 3,8 16,-8 28,-22 30,-39 0,-9 -3,-15 -5,-18 -11,-18 -31,-25 -38,-27 -5,-2 -10,-3 -14,-3 -21,-1 -15,-2 -38,5z"/>
   <path class="fil100" d="M716 663c0,0 0,0 -1,1 -1,0 -2,0 -2,1 -13,9 -21,23 -20,39 1,20 16,37 36,44 23,4 28,4 52,-3 16,-8 28,-22 30,-39 0,-9 -3,-15 -5,-18 -11,-18 -31,-25 -38,-27 -5,-2 -10,-3 -14,-3 -21,-1 -15,-2 -38,5z"/>
   <path class="fil101" d="M731 700c0,-5 4,-9 8,-9 2,0 3,1 5,1 -5,2 -9,4 -13,8z"/>
   <path class="fil101" d="M731 700c0,-5 4,-9 8,-9 2,0 3,1 5,1 -5,2 -9,4 -13,8z"/>
   <path class="fil101" d="M767 690c1,-1 5,-1 8,1 3,2 4,5 3,7 -1,-2 -2,-3 -4,-5 -3,-1 -5,-2 -7,-3z"/>
   <path class="fil101" d="M767 690c1,-1 5,-1 8,1 3,2 4,5 3,7 -1,-2 -2,-3 -4,-5 -3,-1 -5,-2 -7,-3z"/>
   <path class="fil102" d="M755 726c-4,1 -7,2 -7,3 0,2 3,3 7,3 4,0 7,-1 7,-3 0,-2 -3,-3 -7,-3z"/>
   <path class="fil102" d="M755 726c-4,1 -7,2 -7,3 0,2 3,3 7,3 4,0 7,-1 7,-3 0,-2 -3,-3 -7,-3z"/>
   <path class="fil103" d="M764 712c-1,0 -3,3 -3,7 1,4 2,7 4,7 1,-1 2,-4 2,-7 0,-4 -1,-7 -3,-7z"/>
   <path class="fil103" d="M764 712c-1,0 -3,3 -3,7 1,4 2,7 4,7 1,-1 2,-4 2,-7 0,-4 -1,-7 -3,-7z"/>
   <path class="fil103" d="M744 714c-2,0 -3,3 -3,7 0,4 2,7 3,7 2,0 3,-3 3,-7 0,-4 -2,-7 -3,-7z"/>
   <path class="fil103" d="M744 714c-2,0 -3,3 -3,7 0,4 2,7 3,7 2,0 3,-3 3,-7 0,-4 -2,-7 -3,-7z"/>
   <path class="fil99" d="M765 713c-1,0 -1,1 -1,1 0,1 0,2 1,2 0,0 1,-1 1,-2 0,0 -1,-1 -1,-1z"/>
   <path class="fil99" d="M765 713c-1,0 -1,1 -1,1 0,1 0,2 1,2 0,0 1,-1 1,-2 0,0 -1,-1 -1,-1z"/>
   <path class="fil99" d="M745 715c-1,0 -2,1 -2,1 1,1 1,2 2,2 0,0 1,-1 1,-2 0,0 -1,-1 -1,-1z"/>
   <path class="fil99" d="M745 715c-1,0 -2,1 -2,1 1,1 1,2 2,2 0,0 1,-1 1,-2 0,0 -1,-1 -1,-1z"/>
   <path class="fil104 str22" d="M754 658c-1,0 -3,1 -4,1 -2,-1 -7,-1 -8,0 -1,1 -4,1 -6,0 -2,-1 -3,1 -6,1 -2,0 -1,-1 -3,0 -2,1 -4,2 -6,2 -1,-1 -1,1 -5,1 6,-4 9,-11 9,-14 -1,-3 -2,-17 -2,-19 0,-2 4,-10 11,-11 8,-1 13,4 12,8 -1,5 -5,7 -9,7 -4,0 -8,-2 -11,-3 -2,-1 -7,-5 -7,-6 -1,0 7,5 10,5 4,1 12,2 14,-2 1,-4 -3,-5 -5,-5 -2,0 -12,3 -9,13 3,9 11,15 14,17 2,2 3,3 11,5z"/>
   <path class="fil97 str20" d="M811 712c1,-4 3,-7 7,-7 4,-1 7,3 7,7"/>
   <path class="fil97 str20" d="M812 716c0,0 0,0 -1,0 0,0 0,0 0,0 0,-2 0,-4 0,-5 1,-1 1,-2 2,-3 2,1 3,2 3,4 0,2 -1,4 -4,4"/>
   <path class="fil97 str20" d="M812 716c0,0 0,0 -1,0 0,0 0,0 0,0 0,-2 0,-4 0,-5 1,-1 1,-2 2,-3 2,1 3,2 3,4 0,2 -1,4 -4,4"/>
   <path class="fil105" d="M747 660c0,0 0,0 -1,0 0,-1 -1,-1 -1,-1 -1,0 -2,-1 -2,-1 -1,-1 -2,-1 -2,-2 -1,0 -2,-1 -2,-2 -1,0 -2,-1 -2,-2 0,0 -1,-1 -1,-1l-1 -1c0,-1 0,-1 -1,-2 0,0 0,-1 -1,-1 0,0 0,-1 0,-1 -1,-1 -1,-1 -1,-1 -1,-1 -1,-2 -1,-3 -1,-1 -1,-1 -2,-2 0,-1 0,-1 0,-2 -1,0 -1,-1 -1,-1 -1,-1 -1,-2 -1,-2l0 0c0,0 0,1 1,2 0,0 0,1 0,1 0,1 1,2 1,2 0,1 1,2 1,3 0,0 1,1 1,2 0,0 1,1 1,1 0,1 0,1 1,2 0,0 0,0 1,1 0,0 0,1 1,1l0 1c1,1 1,1 2,2 0,0 1,1 2,2 0,0 0,0 0,1 1,0 1,0 2,1 0,0 1,1 2,1 0,0 1,1 1,1 1,0 2,0 2,1 1,0 1,0 1,0z"/>
   <path class="fil105" d="M747 660c0,0 0,0 -1,0 0,-1 -1,-1 -1,-1 -1,0 -2,-1 -2,-1 -1,-1 -2,-1 -2,-2 -1,0 -2,-1 -2,-2 -1,0 -2,-1 -2,-2 0,0 -1,-1 -1,-1l-1 -1c0,-1 0,-1 -1,-2 0,0 0,-1 -1,-1 0,0 0,-1 0,-1 -1,-1 -1,-1 -1,-1 -1,-1 -1,-2 -1,-3 -1,-1 -1,-1 -2,-2 0,-1 0,-1 0,-2 -1,0 -1,-1 -1,-1 -1,-1 -1,-2 -1,-2l0 0c0,0 0,1 1,2 0,0 0,1 0,1 0,1 1,2 1,2 0,1 1,2 1,3 0,0 1,1 1,2 0,0 1,1 1,1 0,1 0,1 1,2 0,0 0,0 1,1 0,0 0,1 1,1l0 1c1,1 1,1 2,2 0,0 1,1 2,2 0,0 0,0 0,1 1,0 1,0 2,1 0,0 1,1 2,1 0,0 1,1 1,1 1,0 2,0 2,1 1,0 1,0 1,0z"/>
   <path class="fil105" d="M739 661c0,0 0,0 -1,-1 0,0 -1,-1 -2,-2 0,0 0,0 -1,-1 0,0 -1,-1 -1,-1 0,-1 -1,-2 -1,-2 0,-1 -1,-1 -1,-2 0,-1 -1,-1 -1,-2 0,-1 0,-1 -1,-2 0,-1 -1,-2 -1,-3 -1,-1 -1,-2 -1,-2 0,-1 -1,-1 -1,-1l0 0c0,0 0,0 1,1 0,0 0,0 0,1 0,0 0,1 0,1 0,1 1,1 1,2 0,0 0,1 0,2 1,0 1,1 1,1 1,1 1,2 1,2 1,1 1,1 2,2 0,1 0,1 1,2 0,0 1,1 1,1 0,1 1,1 1,1 1,1 2,2 2,2 1,1 1,1 1,1z"/>
   <path class="fil105" d="M739 661c0,0 0,0 -1,-1 0,0 -1,-1 -2,-2 0,0 0,0 -1,-1 0,0 -1,-1 -1,-1 0,-1 -1,-2 -1,-2 0,-1 -1,-1 -1,-2 0,-1 -1,-1 -1,-2 0,-1 0,-1 -1,-2 0,-1 -1,-2 -1,-3 -1,-1 -1,-2 -1,-2 0,-1 -1,-1 -1,-1l0 0c0,0 0,0 1,1 0,0 0,0 0,1 0,0 0,1 0,1 0,1 1,1 1,2 0,0 0,1 0,2 1,0 1,1 1,1 1,1 1,2 1,2 1,1 1,1 2,2 0,1 0,1 1,2 0,0 1,1 1,1 0,1 1,1 1,1 1,1 2,2 2,2 1,1 1,1 1,1z"/>
   <path class="fil105" d="M725 665c0,0 0,-1 1,-1 0,0 0,-1 0,-1 1,-1 1,-1 1,-1 0,-1 0,-1 1,-1 0,-1 0,-1 0,-1 0,-1 0,-1 1,-2 0,-1 0,-2 0,-2 0,-1 0,-2 0,-2l0 -2c0,0 0,0 0,-1 0,-1 0,-1 0,-2 0,-1 0,-1 0,-2 0,-1 0,-1 -1,-2 0,0 0,-1 0,-1 0,-1 0,-1 0,-1 0,-1 -1,-1 -1,-1l0 0c0,0 0,0 0,1 0,0 1,1 1,2 0,2 0,3 0,4 0,1 0,2 0,2 0,1 0,1 0,1l0 2c0,0 0,1 0,2 0,0 0,1 0,2 0,0 0,1 -1,2 0,0 0,-1 0,0 0,0 0,1 0,1 0,1 -1,1 -1,2 0,0 0,1 0,1 -1,0 -1,1 -1,1z"/>
   <path class="fil105" d="M725 665c0,0 0,-1 1,-1 0,0 0,-1 0,-1 1,-1 1,-1 1,-1 0,-1 0,-1 1,-1 0,-1 0,-1 0,-1 0,-1 0,-1 1,-2 0,-1 0,-2 0,-2 0,-1 0,-2 0,-2l0 -2c0,0 0,0 0,-1 0,-1 0,-1 0,-2 0,-1 0,-1 0,-2 0,-1 0,-1 -1,-2 0,0 0,-1 0,-1 0,-1 0,-1 0,-1 0,-1 -1,-1 -1,-1l0 0c0,0 0,0 0,1 0,0 1,1 1,2 0,2 0,3 0,4 0,1 0,2 0,2 0,1 0,1 0,1l0 2c0,0 0,1 0,2 0,0 0,1 0,2 0,0 0,1 -1,2 0,0 0,-1 0,0 0,0 0,1 0,1 0,1 -1,1 -1,2 0,0 0,1 0,1 -1,0 -1,1 -1,1z"/>
   <path class="fil105" d="M719 665c0,0 1,-1 2,-2 0,-1 1,-2 2,-3 0,-1 1,-2 1,-3 1,-1 2,-3 2,-4 0,-1 0,-2 0,-3 1,0 1,0 1,-1 0,0 0,-1 0,-1l0 -1 0 0c0,-1 0,-1 0,-2 0,-1 0,-2 -1,-2 0,-2 0,-4 0,-6 -1,-2 -1,-4 -1,-5 0,-2 1,-4 2,-5l0 -1 1 0c0,0 0,0 1,-1 0,0 0,0 1,-1 0,0 0,0 1,0 1,-1 2,-2 3,-2 2,0 3,0 4,0 1,0 2,0 3,0 1,1 1,1 2,1 0,0 0,1 0,1l0 0c0,0 0,-1 0,-1 -1,0 -1,-1 -2,-1 -1,0 -2,-1 -3,-1 -1,0 -2,0 -4,0 -1,1 -3,1 -4,2 0,0 -1,1 -1,1 0,0 0,0 -1,1 0,0 0,0 -1,1l0 0 -1 1c-1,1 -1,3 -1,5 0,2 0,4 0,5 1,2 1,4 1,6 0,1 0,2 0,3 0,0 0,0 0,1l0 0 0 1c0,1 0,1 0,1 0,1 0,1 0,2 0,1 0,1 0,2 -1,2 -1,3 -2,4 0,2 -1,3 -2,4 0,1 -1,1 -1,2 -1,1 -2,2 -2,2z"/>
   <path class="fil105" d="M719 665c0,0 1,-1 2,-2 0,-1 1,-2 2,-3 0,-1 1,-2 1,-3 1,-1 2,-3 2,-4 0,-1 0,-2 0,-3 1,0 1,0 1,-1 0,0 0,-1 0,-1l0 -1 0 0c0,-1 0,-1 0,-2 0,-1 0,-2 -1,-2 0,-2 0,-4 0,-6 -1,-2 -1,-4 -1,-5 0,-2 1,-4 2,-5l0 -1 1 0c0,0 0,0 1,-1 0,0 0,0 1,-1 0,0 0,0 1,0 1,-1 2,-2 3,-2 2,0 3,0 4,0 1,0 2,0 3,0 1,1 1,1 2,1 0,0 0,1 0,1l0 0c0,0 0,-1 0,-1 -1,0 -1,-1 -2,-1 -1,0 -2,-1 -3,-1 -1,0 -2,0 -4,0 -1,1 -3,1 -4,2 0,0 -1,1 -1,1 0,0 0,0 -1,1 0,0 0,0 -1,1l0 0 -1 1c-1,1 -1,3 -1,5 0,2 0,4 0,5 1,2 1,4 1,6 0,1 0,2 0,3 0,0 0,0 0,1l0 0 0 1c0,1 0,1 0,1 0,1 0,1 0,2 0,1 0,1 0,2 -1,2 -1,3 -2,4 0,2 -1,3 -2,4 0,1 -1,1 -1,2 -1,1 -2,2 -2,2z"/>
   <path class="fil95" d="M595 862c0,0 17,-9 27,-18 10,-9 -14,-13 -20,-16 -5,-4 18,-20 28,-21 9,0 -8,-17 -10,-28 -2,-10 6,-18 23,-18 17,0 4,-9 6,-19 1,-5 6,-7 12,-6 -1,-3 -1,-6 -1,-9l0 0c-39,15 -67,60 -67,112 0,8 1,15 2,23z"/>
   <path class="fil95" d="M595 862c0,0 17,-9 27,-18 10,-9 -14,-13 -20,-16 -5,-4 18,-20 28,-21 9,0 -8,-17 -10,-28 -2,-10 6,-18 23,-18 17,0 4,-9 6,-19 1,-5 6,-7 12,-6 -1,-3 -1,-6 -1,-9l0 0c-39,15 -67,60 -67,112 0,8 1,15 2,23z"/>
   <path class="fil93" d="M416 809c0,0 135,-106 252,-92 -3,2 -5,5 -6,9 -40,15 -69,60 -69,113 0,8 1,15 2,23 -113,-2 -195,-21 -187,-45 1,-3 4,-6 8,-8zm273 -88l0 0c1,0 1,0 1,0 0,0 0,0 -1,0 0,0 0,0 0,0z"/>
   <path class="fil93" d="M416 809c0,0 135,-106 252,-92 -3,2 -5,5 -6,9 -40,15 -69,60 -69,113 0,8 1,15 2,23 -113,-2 -195,-21 -187,-45 1,-3 4,-6 8,-8zm273 -88l0 0c1,0 1,0 1,0 0,0 0,0 -1,0 0,0 0,0 0,0z"/>
   <path class="fil95" d="M583 766c8,-3 13,-11 10,-16 -2,-6 -11,-8 -19,-4 -8,4 -13,11 -10,17 2,5 11,7 19,3z"/>
   <path class="fil95" d="M583 766c8,-3 13,-11 10,-16 -2,-6 -11,-8 -19,-4 -8,4 -13,11 -10,17 2,5 11,7 19,3z"/>
   <path class="fil94" d="M581 759c2,-1 3,-4 2,-6 -1,-2 -4,-3 -7,-1 -2,1 -4,4 -2,6 1,2 4,3 7,1z"/>
   <path class="fil94" d="M581 759c2,-1 3,-4 2,-6 -1,-2 -4,-3 -7,-1 -2,1 -4,4 -2,6 1,2 4,3 7,1z"/>
   <path class="fil92" d="M628 748c-57,49 -88,77 -168,77 -19,0 -43,-3 -45,-10 -1,-2 0,-4 1,-6l0 0c-4,2 -7,5 -8,8 -8,24 74,43 187,45 -1,-8 -2,-15 -2,-23 0,-36 14,-69 35,-91z"/>
   <path class="fil92" d="M628 748c-57,49 -88,77 -168,77 -19,0 -43,-3 -45,-10 -1,-2 0,-4 1,-6l0 0c-4,2 -7,5 -8,8 -8,24 74,43 187,45 -1,-8 -2,-15 -2,-23 0,-36 14,-69 35,-91z"/>
   <path class="fil92" d="M601 720c-17,-15 -44,-13 -66,-4 -6,2 -12,5 -17,9 -17,11 2,16 11,18 2,-1 4,-2 6,-2 21,-9 43,-16 66,-21z"/>
   <path class="fil92" d="M601 720c-17,-15 -44,-13 -66,-4 -6,2 -12,5 -17,9 -17,11 2,16 11,18 2,-1 4,-2 6,-2 21,-9 43,-16 66,-21z"/>
   <path class="fil92" d="M549 865c-39,39 -138,19 -132,-2 7,-5 22,-10 46,-13l0 0c24,5 54,8 88,10l0 0c0,2 -1,3 -2,5z"/>
   <path class="fil92" d="M549 865c-39,39 -138,19 -132,-2 7,-5 22,-10 46,-13l0 0c24,5 54,8 88,10l0 0c0,2 -1,3 -2,5z"/>
   <path class="fil106" d="M114 563c0,0 -4,0 -12,3 -13,4 -15,7 -17,9 -1,2 -1,3 -1,6 0,0 2,12 20,17 19,4 70,9 106,9 36,-1 72,-3 88,-7 11,-3 19,-8 20,-15 1,-4 -2,-8 -3,-10 -8,-10 -23,-11 -28,-12 0,0 -101,-11 -173,0z"/>
   <g>
    <g>
     <path class="fil106" d="M114 563c0,0 -4,0 -12,3 -13,4 -15,7 -17,9 -1,2 -1,3 -1,6 0,0 2,12 20,17 19,4 70,9 106,9 36,-1 72,-3 88,-7 11,-3 19,-8 20,-15 1,-4 -2,-8 -3,-10 -8,-10 -23,-11 -28,-12 0,0 -101,-11 -173,0z"/>
     <g>
      <path class="fil35 str23" d="M114 563c0,0 -4,0 -12,3 -13,4 -15,7 -17,9 -1,2 -1,3 -1,6 0,0 2,12 20,17 19,4 70,9 106,9 36,-1 72,-3 88,-7 11,-3 19,-8 20,-15 1,-4 -2,-8 -3,-10 -8,-10 -23,-11 -28,-12 0,0 -101,-11 -173,0"/>
      <g>
       <path class="fil35 str23" d="M114 563c0,0 -4,0 -12,3 -13,4 -15,7 -17,9 -1,2 -1,3 -1,6 0,0 2,12 20,17 19,4 70,9 106,9 36,-1 72,-3 88,-7 11,-3 19,-8 20,-15 1,-4 -2,-8 -3,-10 -8,-10 -23,-11 -28,-12 0,0 -101,-11 -173,0"/>
      </g>
     </g>
    </g>
   </g>
   <path class="fil107" d="M229 538l-6 13 14 4 -13 4 4 12 21 -12 -2 -16c0,0 -17,-5 -18,-5z"/>
   <g>
    <g>
     <path class="fil107" d="M229 538l-6 13 14 4 -13 4 4 12 21 -12 -2 -16c0,0 -17,-5 -18,-5z"/>
     <path class="fil108" d="M247 562c-14,-10 -55,30 -41,40 14,11 55,-30 41,-40z"/>
     <path class="fil108" d="M247 562c-14,-10 -55,30 -41,40 14,11 55,-30 41,-40z"/>
     <path class="fil108" d="M283 569c5,-16 61,-6 56,10 -6,17 -62,6 -56,-10z"/>
     <path class="fil108" d="M283 569c5,-16 61,-6 56,10 -6,17 -62,6 -56,-10z"/>
     <path class="fil108" d="M269 628c88,0 38,-83 0,-83 -39,0 -89,83 0,83z"/>
     <path class="fil108" d="M269 628c88,0 38,-83 0,-83 -39,0 -89,83 0,83z"/>
     <path class="fil108" d="M240 491c7,1 12,7 11,14 0,7 -7,12 -14,11 -7,-1 -12,-7 -11,-14 1,-7 7,-12 14,-11z"/>
     <path class="fil108" d="M240 491c7,1 12,7 11,14 0,7 -7,12 -14,11 -7,-1 -12,-7 -11,-14 1,-7 7,-12 14,-11z"/>
     <path class="fil108" d="M312 500c7,1 12,8 11,15 -1,7 -8,12 -15,11 -7,-1 -12,-8 -11,-15 1,-7 7,-12 15,-11z"/>
     <path class="fil108" d="M312 500c7,1 12,8 11,15 -1,7 -8,12 -15,11 -7,-1 -12,-8 -11,-15 1,-7 7,-12 15,-11z"/>
     <path class="fil109" d="M240 499c4,1 6,4 6,8 -1,4 -4,6 -8,6 -3,-1 -6,-4 -5,-8 0,-3 3,-6 7,-6z"/>
     <path class="fil109" d="M240 499c4,1 6,4 6,8 -1,4 -4,6 -8,6 -3,-1 -6,-4 -5,-8 0,-3 3,-6 7,-6z"/>
     <path class="fil109" d="M312 509c3,0 6,4 5,7 0,4 -4,7 -7,6 -4,0 -6,-4 -6,-7 0,-4 4,-7 8,-6z"/>
     <path class="fil109" d="M312 509c3,0 6,4 5,7 0,4 -4,7 -7,6 -4,0 -6,-4 -6,-7 0,-4 4,-7 8,-6z"/>
     <path class="fil107" d="M236 552c21,5 43,5 65,0 0,3 0,6 0,9 -21,10 -43,11 -65,0 0,-3 0,-6 0,-9z"/>
     <path class="fil107" d="M236 552c21,5 43,5 65,0 0,3 0,6 0,9 -21,10 -43,11 -65,0 0,-3 0,-6 0,-9z"/>
     <path class="fil108" d="M276 496c24,3 41,21 39,39 -2,18 -24,30 -48,27 -24,-3 -41,-21 -39,-39 2,-18 24,-30 48,-27z"/>
     <path class="fil108" d="M276 496c24,3 41,21 39,39 -2,18 -24,30 -48,27 -24,-3 -41,-21 -39,-39 2,-18 24,-30 48,-27z"/>
     <path class="fil110" d="M272 524c12,2 21,11 20,21 -2,10 -12,17 -25,15 -12,-1 -21,-11 -19,-21 1,-10 12,-16 24,-15z"/>
     <path class="fil110" d="M272 524c12,2 21,11 20,21 -2,10 -12,17 -25,15 -12,-1 -21,-11 -19,-21 1,-10 12,-16 24,-15z"/>
     <path class="fil109" d="M287 520c2,1 3,3 2,5 0,3 -1,5 -3,5 -2,-1 -3,-3 -2,-5 0,-3 1,-5 3,-5z"/>
     <path class="fil109" d="M287 520c2,1 3,3 2,5 0,3 -1,5 -3,5 -2,-1 -3,-3 -2,-5 0,-3 1,-5 3,-5z"/>
     <path class="fil109" d="M258 517c1,0 2,3 2,5 0,3 -2,5 -3,4 -2,0 -3,-2 -3,-5 1,-2 2,-4 4,-4z"/>
     <path class="fil109" d="M258 517c1,0 2,3 2,5 0,3 -2,5 -3,4 -2,0 -3,-2 -3,-5 1,-2 2,-4 4,-4z"/>
     <path class="fil109" d="M271 535c8,1 14,6 13,12 -1,6 -8,10 -16,9 -8,-1 -14,-7 -13,-13 1,-5 8,-9 16,-8z"/>
     <path class="fil109" d="M271 535c8,1 14,6 13,12 -1,6 -8,10 -16,9 -8,-1 -14,-7 -13,-13 1,-5 8,-9 16,-8z"/>
     <path class="fil110" d="M271 531c8,1 14,7 13,13 -1,6 -8,10 -16,9 -8,-1 -13,-7 -13,-13 1,-6 8,-10 16,-9z"/>
     <path class="fil110" d="M271 531c8,1 14,7 13,13 -1,6 -8,10 -16,9 -8,-1 -13,-7 -13,-13 1,-6 8,-10 16,-9z"/>
     <path class="fil109" d="M272 527c5,1 8,4 8,8 -1,4 -5,7 -10,6 -5,0 -9,-4 -8,-8 0,-4 5,-7 10,-6z"/>
     <path class="fil109" d="M272 527c5,1 8,4 8,8 -1,4 -5,7 -10,6 -5,0 -9,-4 -8,-8 0,-4 5,-7 10,-6z"/>
     <polygon class="fil109" points="270,530 272,530 269,556 267,555 "/>
     <polygon class="fil109" points="270,530 272,530 269,556 267,555 "/>
     <path class="fil110" d="M288 521c1,1 1,1 1,2 0,1 -1,2 -1,2 -1,0 -1,-1 -1,-2 0,-1 1,-2 1,-2z"/>
     <path class="fil110" d="M288 521c1,1 1,1 1,2 0,1 -1,2 -1,2 -1,0 -1,-1 -1,-2 0,-1 1,-2 1,-2z"/>
     <path class="fil110" d="M258 518c1,0 1,1 1,2 0,1 0,1 -1,1 -1,0 -1,-1 -1,-2 0,0 1,-1 1,-1z"/>
     <path class="fil110" d="M258 518c1,0 1,1 1,2 0,1 0,1 -1,1 -1,0 -1,-1 -1,-2 0,0 1,-1 1,-1z"/>
    </g>
   </g>
   <g>
    <path class="fil111" d="M165 571c-11,-4 -21,-3 -23,2 -1,5 6,12 18,16 11,4 21,4 23,-1 1,-5 -7,-13 -18,-17z"/>
    <g>
     <path class="fil111" d="M165 571c-11,-4 -21,-3 -23,2 -1,5 6,12 18,16 11,4 21,4 23,-1 1,-5 -7,-13 -18,-17z"/>
     <path class="fil112" d="M166 574c-9,-2 -16,-2 -18,2 -1,4 5,9 14,12 8,3 16,2 17,-1 1,-4 -5,-9 -13,-13z"/>
     <path class="fil112" d="M166 574c-9,-2 -16,-2 -18,2 -1,4 5,9 14,12 8,3 16,2 17,-1 1,-4 -5,-9 -13,-13z"/>
     <path class="fil111" d="M107 577c11,0 21,5 20,10 0,5 -10,9 -22,9 -12,0 -21,-5 -21,-10 1,-5 11,-9 23,-9z"/>
     <path class="fil111" d="M107 577c11,0 21,5 20,10 0,5 -10,9 -22,9 -12,0 -21,-5 -21,-10 1,-5 11,-9 23,-9z"/>
     <path class="fil112" d="M106 580c9,0 16,3 15,7 0,4 -7,6 -16,6 -8,0 -15,-3 -14,-7 0,-4 7,-6 15,-6z"/>
     <path class="fil112" d="M106 580c9,0 16,3 15,7 0,4 -7,6 -16,6 -8,0 -15,-3 -14,-7 0,-4 7,-6 15,-6z"/>
     <path class="fil111" d="M130 569c-33,10 -36,59 13,45 49,-14 19,-54 -13,-45z"/>
     <path class="fil111" d="M130 569c-33,10 -36,59 13,45 49,-14 19,-54 -13,-45z"/>
     <path class="fil112" d="M131 573c-20,5 -19,46 11,37 30,-8 9,-43 -11,-37z"/>
     <path class="fil112" d="M131 573c-20,5 -19,46 11,37 30,-8 9,-43 -11,-37z"/>
     <path class="fil111" d="M121 539c-13,4 -22,16 -19,26 3,10 16,16 30,12 14,-4 22,-16 19,-26 -3,-10 -16,-16 -30,-12z"/>
     <path class="fil111" d="M121 539c-13,4 -22,16 -19,26 3,10 16,16 30,12 14,-4 22,-16 19,-26 -3,-10 -16,-16 -30,-12z"/>
     <path class="fil111" d="M137 490c-24,1 -11,62 2,61 13,0 22,-61 -2,-61z"/>
     <path class="fil111" d="M137 490c-24,1 -11,62 2,61 13,0 22,-61 -2,-61z"/>
     <path class="fil109" d="M138 535c7,-10 11,-27 -1,-35 -11,10 -6,23 1,35z"/>
     <path class="fil109" d="M138 535c7,-10 11,-27 -1,-35 -11,10 -6,23 1,35z"/>
     <path class="fil111" d="M68 524c11,-20 59,19 53,30 -6,11 -65,-9 -53,-30z"/>
     <path class="fil111" d="M68 524c11,-20 59,19 53,30 -6,11 -65,-9 -53,-30z"/>
     <path class="fil109" d="M107 546c-12,1 -29,-3 -30,-17 13,-5 23,4 30,17z"/>
     <path class="fil109" d="M107 546c-12,1 -29,-3 -30,-17 13,-5 23,4 30,17z"/>
     <g>
      <path class="fil109" d="M120 556c-1,0 -1,1 -1,3 1,1 2,2 3,2 1,-1 1,-2 1,-4 -1,-1 -2,-2 -3,-1z"/>
      <g>
       <path class="fil109" d="M120 556c-1,0 -1,1 -1,3 1,1 2,2 3,2 1,-1 1,-2 1,-4 -1,-1 -2,-2 -3,-1z"/>
       <path class="fil109" d="M131 552c-2,1 -2,2 -2,3 1,2 2,2 3,2 1,0 1,-2 1,-3 0,-1 -2,-2 -2,-2z"/>
       <path class="fil109" d="M131 552c-2,1 -2,2 -2,3 1,2 2,2 3,2 1,0 1,-2 1,-3 0,-1 -2,-2 -2,-2z"/>
      </g>
     </g>
     <path class="fil112" d="M128 559c-6,2 -10,7 -9,11 1,5 7,7 13,5 6,-1 10,-6 9,-11 -2,-4 -7,-7 -13,-5z"/>
     <path class="fil112" d="M128 559c-6,2 -10,7 -9,11 1,5 7,7 13,5 6,-1 10,-6 9,-11 -2,-4 -7,-7 -13,-5z"/>
     <path class="fil109" d="M127 559c-2,1 -4,3 -4,6 1,2 4,3 7,2 2,-1 4,-3 4,-5 -1,-3 -4,-4 -7,-3z"/>
     <path class="fil109" d="M127 559c-2,1 -4,3 -4,6 1,2 4,3 7,2 2,-1 4,-3 4,-5 -1,-3 -4,-4 -7,-3z"/>
     <path class="fil112" d="M120 557c0,0 -1,0 0,1 0,0 0,1 1,1 0,0 0,-1 0,-2 0,0 -1,0 -1,0z"/>
     <path class="fil112" d="M120 557c0,0 -1,0 0,1 0,0 0,1 1,1 0,0 0,-1 0,-2 0,0 -1,0 -1,0z"/>
     <path class="fil112" d="M130 553c0,0 0,1 0,1 0,1 0,1 1,1 0,0 0,-1 0,-1 0,-1 0,-1 -1,-1z"/>
     <path class="fil112" d="M130 553c0,0 0,1 0,1 0,1 0,1 1,1 0,0 0,-1 0,-1 0,-1 0,-1 -1,-1z"/>
    </g>
   </g>
   <g>
    <path class="fil113" d="M215 559c2,-4 2,-7 -2,-6 -5,2 -2,-4 -5,-2 -3,3 -4,-3 -6,0 -2,3 -14,6 -12,10 2,4 -3,4 -1,7 2,2 -5,1 -2,4 2,4 -6,6 -2,6 5,0 -3,5 1,6 4,2 -5,3 -1,8 5,6 22,-18 30,-33z"/>
    <g>
     <path class="fil113" d="M215 559c2,-4 2,-7 -2,-6 -5,2 -2,-4 -5,-2 -3,3 -4,-3 -6,0 -2,3 -14,6 -12,10 2,4 -3,4 -1,7 2,2 -5,1 -2,4 2,4 -6,6 -2,6 5,0 -3,5 1,6 4,2 -5,3 -1,8 5,6 22,-18 30,-33z"/>
     <path class="fil114" d="M244 581c-4,12 -16,14 -21,12 -5,-3 -12,-10 -15,-6 -4,3 0,11 -2,20 -2,8 4,17 -6,18 -10,1 -7,-7 -6,-10 1,-3 -3,0 -7,0 -4,0 -11,-4 -9,0 1,4 4,10 -5,11 -8,0 -7,-7 -6,-13 0,-6 -6,-14 -1,-19 5,-5 18,0 23,-9 4,-9 0,-19 12,-27 11,-7 18,1 23,1 6,1 23,9 20,22z"/>
     <path class="fil114" d="M244 581c-4,12 -16,14 -21,12 -5,-3 -12,-10 -15,-6 -4,3 0,11 -2,20 -2,8 4,17 -6,18 -10,1 -7,-7 -6,-10 1,-3 -3,0 -7,0 -4,0 -11,-4 -9,0 1,4 4,10 -5,11 -8,0 -7,-7 -6,-13 0,-6 -6,-14 -1,-19 5,-5 18,0 23,-9 4,-9 0,-19 12,-27 11,-7 18,1 23,1 6,1 23,9 20,22z"/>
     <path class="fil114" d="M203 562c7,-6 -7,-20 -12,-16 -6,5 5,21 12,16z"/>
     <path class="fil114" d="M203 562c7,-6 -7,-20 -12,-16 -6,5 5,21 12,16z"/>
     <path class="fil113" d="M200 557c3,-3 -4,-10 -7,-8 -3,3 3,10 7,8z"/>
     <path class="fil113" d="M200 557c3,-3 -4,-10 -7,-8 -3,3 3,10 7,8z"/>
     <path class="fil113" d="M220 565c1,0 3,-1 3,-2 0,-2 -2,-3 -3,-3 -1,0 -3,1 -3,3 0,1 2,2 3,2z"/>
     <path class="fil113" d="M220 565c1,0 3,-1 3,-2 0,-2 -2,-3 -3,-3 -1,0 -3,1 -3,3 0,1 2,2 3,2z"/>
     <path class="fil113" d="M244 581c-3,8 -9,12 -14,13 -1,-3 -1,-7 0,-10 1,-7 6,-13 10,-16 3,4 5,8 4,13z"/>
     <path class="fil113" d="M244 581c-3,8 -9,12 -14,13 -1,-3 -1,-7 0,-10 1,-7 6,-13 10,-16 3,4 5,8 4,13z"/>
     <path class="fil114" d="M168 594c-3,-1 -7,2 -10,6 -4,4 3,-2 9,-2 6,-1 7,-4 1,-4z"/>
     <path class="fil114" d="M168 594c-3,-1 -7,2 -10,6 -4,4 3,-2 9,-2 6,-1 7,-4 1,-4z"/>
     <path class="fil113" d="M160 600c-4,-5 -8,3 -8,6 0,2 9,-2 8,-6z"/>
     <path class="fil113" d="M160 600c-4,-5 -8,3 -8,6 0,2 9,-2 8,-6z"/>
    </g>
   </g>
   <path class="fil17 str24" d="M307 787c0,6 -1,49 -1,55 0,7 -2,31 -24,41 -23,10 -64,15 -82,16 -18,1 -69,-5 -82,-15 -12,-10 -27,-21 -21,-42l-5 -163c-1,-19 -1,-34 -1,-37 1,-10 -2,-41 -4,-55 3,4 7,8 17,10 18,5 69,11 105,10 36,0 72,-3 87,-8 9,-2 17,-6 20,-11 0,1 0,5 0,6 0,0 0,14 0,19 0,3 -2,108 -5,115l-4 59z"/>
   <path class="fil17 str25" d="M307 787c0,6 -1,49 -1,55 0,7 -2,31 -24,41 -23,10 -64,15 -82,16 -18,1 -69,-5 -82,-15 -12,-10 -27,-21 -21,-42l-5 -163c-1,-19 -1,-34 -1,-37 1,-10 -2,-41 -4,-55 3,4 7,8 17,10 18,5 69,11 105,10 36,0 72,-3 87,-8 9,-2 17,-6 20,-11 0,1 0,5 0,6 0,0 0,14 0,19 0,3 -2,108 -5,115l-4 59z"/>
   <g>
    <g>
     <line class="fil35 str26" x1="102" y1="601" x2="102" y2= "607" />
     <g>
      <g>
       <line class="fil35 str26" x1="102" y1="601" x2="102" y2= "607" />
       <polyline class="fil35 str27" points="102,617 102,757 102,857 "/>
       <polyline class="fil35 str27" points="102,617 102,757 102,857 "/>
       <line class="fil35 str26" x1="102" y1="862" x2="102" y2= "869" />
       <line class="fil35 str26" x1="102" y1="862" x2="102" y2= "869" />
      </g>
     </g>
    </g>
   </g>
   <g>
    <g>
     <line class="fil35 str26" x1="165" y1="605" x2="165" y2= "612" />
     <g>
      <g>
       <line class="fil35 str26" x1="165" y1="605" x2="165" y2= "612" />
       <polyline class="fil35 str27" points="165,622 165,761 165,882 "/>
       <polyline class="fil35 str27" points="165,622 165,761 165,882 "/>
       <line class="fil35 str26" x1="165" y1="887" x2="165" y2= "894" />
       <line class="fil35 str26" x1="165" y1="887" x2="165" y2= "894" />
      </g>
     </g>
    </g>
   </g>
   <g>
    <g>
     <path class="fil35 str28" d="M91 638c0,0 3,1 7,2"/>
     <g>
      <g>
       <path class="fil35 str28" d="M91 638c0,0 3,1 7,2"/>
       <path class="fil35 str29" d="M107 643c19,5 56,12 100,12 51,0 83,-7 98,-11"/>
       <path class="fil35 str29" d="M107 643c19,5 56,12 100,12 51,0 83,-7 98,-11"/>
       <path class="fil35 str28" d="M310 642c4,-1 6,-2 6,-2"/>
       <path class="fil35 str28" d="M310 642c4,-1 6,-2 6,-2"/>
      </g>
     </g>
    </g>
   </g>
   <g>
    <g>
     <path class="fil35 str26" d="M92 712c0,0 3,1 7,2"/>
     <g>
      <g>
       <path class="fil35 str26" d="M92 712c0,0 3,1 7,2"/>
       <path class="fil35 str27" d="M108 717c18,4 51,11 95,11 51,0 83,-7 98,-11"/>
       <path class="fil35 str27" d="M108 717c18,4 51,11 95,11 51,0 83,-7 98,-11"/>
       <path class="fil35 str26" d="M305 715c5,-1 6,-2 6,-2"/>
       <path class="fil35 str26" d="M305 715c5,-1 6,-2 6,-2"/>
      </g>
     </g>
    </g>
   </g>
   <g>
    <g>
     <path class="fil35 str26" d="M95 789c0,0 2,1 6,2"/>
     <g>
      <g>
       <path class="fil35 str26" d="M95 789c0,0 2,1 6,2"/>
       <path class="fil35 str30" d="M111 794c18,4 49,10 91,10 50,0 80,-6 94,-11"/>
       <path class="fil35 str30" d="M111 794c18,4 49,10 91,10 50,0 80,-6 94,-11"/>
       <path class="fil35 str26" d="M301 791c4,-1 6,-2 6,-2"/>
       <path class="fil35 str26" d="M301 791c4,-1 6,-2 6,-2"/>
      </g>
     </g>
    </g>
   </g>
   <g>
    <g>
     <path class="fil35 str26" d="M95 848c0,0 2,1 6,3"/>
     <g>
      <g>
       <path class="fil35 str26" d="M95 848c0,0 2,1 6,3"/>
       <path class="fil35 str30" d="M111 856c16,7 46,16 88,16 51,0 82,-11 96,-18"/>
       <path class="fil35 str30" d="M111 856c16,7 46,16 88,16 51,0 82,-11 96,-18"/>
       <path class="fil35 str26" d="M300 852c3,-2 5,-4 5,-4"/>
       <path class="fil35 str26" d="M300 852c3,-2 5,-4 5,-4"/>
      </g>
     </g>
    </g>
   </g>
   <g>
    <g>
     <line class="fil35 str28" x1="229" y1="611" x2="229" y2= "617" />
     <g>
      <g>
       <line class="fil35 str28" x1="229" y1="611" x2="229" y2= "617" />
       <polyline class="fil35 str29" points="229,628 229,767 229,885 "/>
       <polyline class="fil35 str29" points="229,628 229,767 229,885 "/>
       <line class="fil35 str28" x1="229" y1="890" x2="229" y2= "896" />
       <line class="fil35 str28" x1="229" y1="890" x2="229" y2= "896" />
      </g>
     </g>
    </g>
   </g>
   <g>
    <g>
     <line class="fil35 str28" x1="292" y1="609" x2="292" y2= "616" />
     <g>
      <g>
       <line class="fil35 str28" x1="292" y1="609" x2="292" y2= "616" />
       <polyline class="fil35 str31" points="292,626 292,765 292,864 "/>
       <polyline class="fil35 str31" points="292,626 292,765 292,864 "/>
       <line class="fil35 str28" x1="292" y1="869" x2="292" y2= "875" />
       <line class="fil35 str28" x1="292" y1="869" x2="292" y2= "875" />
      </g>
     </g>
    </g>
   </g>
   <g>
    <g>
     <path class="fil115" d="M192 674c-2,-3 -6,-4 -10,-5 11,-12 12,-35 -2,-46 -7,-5 -19,-3 -26,2 -6,4 -11,10 -13,17 -1,-4 -6,-8 -11,-6 0,0 0,0 0,0 -1,0 -1,0 -1,0 -1,0 -1,0 -2,0 -4,-5 -8,-13 -2,-18 3,-2 7,-2 9,1 2,4 0,6 -3,8 -1,0 -1,1 0,1 4,0 6,-4 6,-7 -1,-4 -4,-7 -8,-6 -5,0 -8,4 -9,8 -1,5 2,10 6,14 -2,1 -4,3 -5,5 -4,-6 -14,-9 -20,-3 -2,2 -2,6 0,8 2,3 6,1 8,-1 1,-1 0,-2 -1,-1 0,0 -2,1 -3,1l-3 -2c0,-1 0,-2 0,-3 1,-2 5,-3 7,-3 5,0 9,2 11,5 0,0 1,0 1,0 -1,2 -1,3 -1,5 1,4 3,6 6,8 -16,1 -30,18 -23,34 4,8 12,13 20,13 9,0 16,-7 22,-13 0,5 0,13 6,13 7,1 9,-7 9,-12 4,2 7,4 9,2 2,-2 2,-6 1,-9 0,0 0,-1 -1,-1 7,3 18,6 23,-1 2,-2 2,-6 0,-8zm-42 4l0 0c-1,-1 -2,-2 -3,-3 -1,-2 -3,-4 -4,-5 0,0 0,0 0,-1 1,-4 4,-6 8,-6 1,0 1,0 1,0 2,2 3,4 5,5 0,1 0,1 1,1 -5,0 -9,4 -8,9zm8 -7l0 0c1,0 1,0 1,0 2,2 4,5 6,8 0,0 0,0 0,1 -1,-1 -3,0 -5,1 -1,1 -3,3 -3,4 -1,0 -1,-1 -2,-1 -1,-2 -3,-4 -5,-5 1,0 1,-1 1,-1 0,-4 3,-7 7,-7zm-16 -3l0 0c-2,-2 -3,-5 -5,-7 0,-2 1,-3 3,-4 1,-1 3,-1 5,-1 0,0 0,0 0,0 2,2 4,4 6,6 -4,-1 -9,2 -9,6zm-3 -12l0 0c-2,1 -3,2 -3,4 -1,-1 -1,-2 -2,-3 3,-1 5,-2 6,-5 1,1 2,2 3,2 -2,0 -3,1 -4,2zm-17 -9l0 0c0,-5 3,-8 7,-10 1,0 1,0 1,0 0,0 0,0 0,0 5,1 10,4 10,9 0,5 -4,9 -9,9 -4,0 -8,-4 -9,-8zm36 44l0 0c0,2 0,5 -2,7 -2,4 -7,4 -8,0 -1,-4 -1,-7 -1,-10 -1,-1 -2,-1 -2,-1 -6,6 -11,12 -19,14 -8,1 -17,-3 -20,-10 -4,-8 -3,-17 2,-23 5,-7 13,-10 21,-11 2,0 3,0 4,0 4,9 11,18 18,25 1,1 4,5 8,8 0,0 -1,0 -1,1zm6 0l0 0c-2,-1 -4,-3 -6,-4 1,-1 1,-1 1,-1 0,-2 2,-4 3,-4 2,-1 3,0 5,0 2,4 4,10 -3,9zm21 -7l0 0c-6,1 -12,-1 -17,-4 0,0 0,0 0,0 -2,-3 -3,-5 -5,-7 -6,-8 -13,-17 -22,-22 1,-2 2,-4 1,-6 0,0 0,0 0,-1 2,-7 6,-13 12,-17 8,-5 19,-8 26,-1 12,12 10,33 -1,44 -1,0 0,1 1,1 3,1 7,1 10,3 4,4 0,9 -5,10z"/>
     <g>
      <g>
       <path class="fil115" d="M192 674c-2,-3 -6,-4 -10,-5 11,-12 12,-35 -2,-46 -7,-5 -19,-3 -26,2 -6,4 -11,10 -13,17 -1,-4 -6,-8 -11,-6 0,0 0,0 0,0 -1,0 -1,0 -1,0 -1,0 -1,0 -2,0 -4,-5 -8,-13 -2,-18 3,-2 7,-2 9,1 2,4 0,6 -3,8 -1,0 -1,1 0,1 4,0 6,-4 6,-7 -1,-4 -4,-7 -8,-6 -5,0 -8,4 -9,8 -1,5 2,10 6,14 -2,1 -4,3 -5,5 -4,-6 -14,-9 -20,-3 -2,2 -2,6 0,8 2,3 6,1 8,-1 1,-1 0,-2 -1,-1 0,0 -2,1 -3,1l-3 -2c0,-1 0,-2 0,-3 1,-2 5,-3 7,-3 5,0 9,2 11,5 0,0 1,0 1,0 -1,2 -1,3 -1,5 1,4 3,6 6,8 -16,1 -30,18 -23,34 4,8 12,13 20,13 9,0 16,-7 22,-13 0,5 0,13 6,13 7,1 9,-7 9,-12 4,2 7,4 9,2 2,-2 2,-6 1,-9 0,0 0,-1 -1,-1 7,3 18,6 23,-1 2,-2 2,-6 0,-8zm-42 4l0 0c-1,-1 -2,-2 -3,-3 -1,-2 -3,-4 -4,-5 0,0 0,0 0,-1 1,-4 4,-6 8,-6 1,0 1,0 1,0 2,2 3,4 5,5 0,1 0,1 1,1 -5,0 -9,4 -8,9zm8 -7l0 0c1,0 1,0 1,0 2,2 4,5 6,8 0,0 0,0 0,1 -1,-1 -3,0 -5,1 -1,1 -3,3 -3,4 -1,0 -1,-1 -2,-1 -1,-2 -3,-4 -5,-5 1,0 1,-1 1,-1 0,-4 3,-7 7,-7zm-16 -3l0 0c-2,-2 -3,-5 -5,-7 0,-2 1,-3 3,-4 1,-1 3,-1 5,-1 0,0 0,0 0,0 2,2 4,4 6,6 -4,-1 -9,2 -9,6zm-3 -12l0 0c-2,1 -3,2 -3,4 -1,-1 -1,-2 -2,-3 3,-1 5,-2 6,-5 1,1 2,2 3,2 -2,0 -3,1 -4,2zm-17 -9l0 0c0,-5 3,-8 7,-10 1,0 1,0 1,0 0,0 0,0 0,0 5,1 10,4 10,9 0,5 -4,9 -9,9 -4,0 -8,-4 -9,-8zm36 44l0 0c0,2 0,5 -2,7 -2,4 -7,4 -8,0 -1,-4 -1,-7 -1,-10 -1,-1 -2,-1 -2,-1 -6,6 -11,12 -19,14 -8,1 -17,-3 -20,-10 -4,-8 -3,-17 2,-23 5,-7 13,-10 21,-11 2,0 3,0 4,0 4,9 11,18 18,25 1,1 4,5 8,8 0,0 -1,0 -1,1zm6 0l0 0c-2,-1 -4,-3 -6,-4 1,-1 1,-1 1,-1 0,-2 2,-4 3,-4 2,-1 3,0 5,0 2,4 4,10 -3,9zm21 -7l0 0c-6,1 -12,-1 -17,-4 0,0 0,0 0,0 -2,-3 -3,-5 -5,-7 -6,-8 -13,-17 -22,-22 1,-2 2,-4 1,-6 0,0 0,0 0,-1 2,-7 6,-13 12,-17 8,-5 19,-8 26,-1 12,12 10,33 -1,44 -1,0 0,1 1,1 3,1 7,1 10,3 4,4 0,9 -5,10z"/>
       <path class="fil115" d="M127 645c-1,0 -2,1 -2,2 -1,1 1,3 2,1 1,0 0,0 0,0 0,0 -1,0 -1,0 0,-1 0,-1 1,-1 1,-1 1,1 2,1 1,0 1,-1 1,-1 0,-1 -2,-2 -3,-2z"/>
       <path class="fil115" d="M127 645c-1,0 -2,1 -2,2 -1,1 1,3 2,1 1,0 0,0 0,0 0,0 -1,0 -1,0 0,-1 0,-1 1,-1 1,-1 1,1 2,1 1,0 1,-1 1,-1 0,-1 -2,-2 -3,-2z"/>
       <path class="fil115" d="M130 642c-1,1 0,4 2,4 0,0 0,0 0,-1 -1,0 -1,-2 0,-2 0,0 1,0 1,1 0,0 0,1 1,1 0,0 1,0 1,0 0,-3 -3,-5 -5,-3z"/>
       <path class="fil115" d="M130 642c-1,1 0,4 2,4 0,0 0,0 0,-1 -1,0 -1,-2 0,-2 0,0 1,0 1,1 0,0 0,1 1,1 0,0 1,0 1,0 0,-3 -3,-5 -5,-3z"/>
       <path class="fil115" d="M123 673c-2,-3 -8,-3 -10,1 -1,0 -1,0 0,0 -2,3 -3,6 -1,9 3,3 8,4 11,1 3,-3 3,-8 0,-11zm-1 9l0 0c-2,2 -6,2 -8,0 -2,-2 -2,-5 0,-7 2,-2 5,-3 8,-1 2,2 2,6 0,8z"/>
       <path class="fil115" d="M123 673c-2,-3 -8,-3 -10,1 -1,0 -1,0 0,0 -2,3 -3,6 -1,9 3,3 8,4 11,1 3,-3 3,-8 0,-11zm-1 9l0 0c-2,2 -6,2 -8,0 -2,-2 -2,-5 0,-7 2,-2 5,-3 8,-1 2,2 2,6 0,8z"/>
       <path class="fil115" d="M169 634c-9,-2 -13,14 -3,15 4,0 9,-3 9,-8 1,-4 -2,-7 -6,-7zm4 9l0 0c-2,2 -6,5 -9,4 -4,-3 -1,-11 3,-12 0,0 0,1 1,1 4,-1 6,4 5,7z"/>
       <path class="fil115" d="M169 634c-9,-2 -13,14 -3,15 4,0 9,-3 9,-8 1,-4 -2,-7 -6,-7zm4 9l0 0c-2,2 -6,5 -9,4 -4,-3 -1,-11 3,-12 0,0 0,1 1,1 4,-1 6,4 5,7z"/>
       <path class="fil115" d="M185 677c-1,-2 -3,-3 -4,-2 0,0 0,0 0,0 -2,0 -3,2 -3,4 1,2 3,3 5,2 2,-1 3,-2 2,-4zm-3 2l0 0c-2,1 -3,-2 -2,-3 0,0 1,0 1,0 1,0 2,0 2,1 1,1 0,2 -1,2z"/>
       <path class="fil115" d="M185 677c-1,-2 -3,-3 -4,-2 0,0 0,0 0,0 -2,0 -3,2 -3,4 1,2 3,3 5,2 2,-1 3,-2 2,-4zm-3 2l0 0c-2,1 -3,-2 -2,-3 0,0 1,0 1,0 1,0 2,0 2,1 1,1 0,2 -1,2z"/>
       <path class="fil115" d="M154 692c0,-1 -2,-2 -4,-1 0,0 0,0 0,0 -1,1 -2,3 -1,4 1,2 3,2 4,1 1,0 2,-2 1,-4zm-2 3l0 0c-1,0 -2,-2 -1,-3 1,0 1,0 2,1 0,1 0,1 -1,2z"/>
       <path class="fil115" d="M154 692c0,-1 -2,-2 -4,-1 0,0 0,0 0,0 -1,1 -2,3 -1,4 1,2 3,2 4,1 1,0 2,-2 1,-4zm-2 3l0 0c-1,0 -2,-2 -1,-3 1,0 1,0 2,1 0,1 0,1 -1,2z"/>
      </g>
     </g>
     <g>
      <path class="fil115" d="M274 747c-2,-3 -8,-3 -10,0 -1,1 -1,1 0,1 -3,2 -3,6 -1,9 3,3 8,3 11,1 3,-3 3,-8 0,-11zm-1 9l0 0c-3,2 -7,2 -8,-1 -2,-2 -2,-5 0,-7 2,-1 5,-2 7,0 3,2 3,6 1,8z"/>
      <g>
       <path class="fil115" d="M274 747c-2,-3 -8,-3 -10,0 -1,1 -1,1 0,1 -3,2 -3,6 -1,9 3,3 8,3 11,1 3,-3 3,-8 0,-11zm-1 9l0 0c-3,2 -7,2 -8,-1 -2,-2 -2,-5 0,-7 2,-1 5,-2 7,0 3,2 3,6 1,8z"/>
       <path class="fil115" d="M275 788c-1,-2 -3,-3 -4,-2 0,0 0,0 0,0 -2,1 -2,3 -2,4 1,2 3,2 4,1 2,0 2,-2 2,-3zm-2 2l0 0c-2,1 -3,-2 -2,-3 1,0 2,0 2,1 1,1 0,1 0,2z"/>
       <path class="fil115" d="M275 788c-1,-2 -3,-3 -4,-2 0,0 0,0 0,0 -2,1 -2,3 -2,4 1,2 3,2 4,1 2,0 2,-2 2,-3zm-2 2l0 0c-2,1 -3,-2 -2,-3 1,0 2,0 2,1 1,1 0,1 0,2z"/>
       <path class="fil115" d="M306 736c3,-6 2,-17 -7,-20 -2,0 -6,1 -7,4 -1,3 2,6 5,7 1,0 1,-1 1,-1 -1,-1 -3,-2 -3,-2l0 -4c1,-1 2,-1 3,-2 3,1 5,3 6,6 2,4 2,8 0,12 0,0 0,0 0,0 -1,1 -3,1 -4,2 -3,2 -5,6 -5,9 -8,-14 -30,-20 -42,-5 -5,6 -7,16 -3,24 5,8 14,11 22,14 -4,3 -11,6 -9,12 2,6 10,5 15,3 -1,4 0,7 3,9 2,1 6,-2 8,-4 0,0 1,-1 1,-1 0,0 28,-47 16,-63zm-27 57l0 0c-1,0 -1,-1 -1,0 -3,0 -6,2 -8,1 -4,0 -7,-5 -4,-8 3,-2 6,-4 9,-6 1,0 0,-1 0,-1 -8,-3 -16,-5 -21,-12 -5,-7 -5,-17 0,-23 5,-7 14,-10 22,-8 9,1 15,7 19,15 1,1 1,2 2,3 -6,8 -11,18 -15,27 0,2 -2,7 -3,12zm1 5l0 0c0,-2 0,-5 1,-7 1,0 1,0 1,0 2,-1 5,0 5,1 2,1 2,3 3,4 -3,4 -8,9 -10,2zm11 -5l0 0c0,0 0,1 0,1 -1,-2 -2,-3 -4,-4 -1,-1 -4,-2 -5,-1 0,-1 1,-2 1,-2 0,-3 1,-5 2,-7 0,0 0,0 1,0 3,-2 8,0 10,4 0,0 0,0 0,0 -1,3 -3,6 -5,9zm6 -12l0 0c0,0 0,1 0,1 -2,-4 -8,-6 -11,-3 0,-2 1,-3 1,-4 1,-2 2,-4 3,-6 0,0 0,0 0,0 4,-2 8,1 10,5 0,0 0,0 0,0 0,2 -1,5 -3,7zm4 -9l0 0c-1,-4 -6,-6 -10,-5 1,-2 3,-5 4,-8 2,0 4,0 5,1 2,1 2,3 3,4 0,0 0,0 0,0 0,3 -1,6 -2,8zm3 -10l0 0c-1,-2 -2,-3 -3,-3 -2,-1 -3,-1 -5,-1 1,-1 1,-2 2,-3 2,2 4,3 7,4 0,1 -1,2 -1,3zm-1 -6l0 0c-2,0 -6,-3 -6,-7 0,-5 4,-10 5,-10 1,0 3,1 3,2 1,0 2,2 2,2 0,1 0,4 0,5 0,0 -1,4 -1,4 0,5 -2,4 -3,4z"/>
       <path class="fil115" d="M306 736c3,-6 2,-17 -7,-20 -2,0 -6,1 -7,4 -1,3 2,6 5,7 1,0 1,-1 1,-1 -1,-1 -3,-2 -3,-2l0 -4c1,-1 2,-1 3,-2 3,1 5,3 6,6 2,4 2,8 0,12 0,0 0,0 0,0 -1,1 -3,1 -4,2 -3,2 -5,6 -5,9 -8,-14 -30,-20 -42,-5 -5,6 -7,16 -3,24 5,8 14,11 22,14 -4,3 -11,6 -9,12 2,6 10,5 15,3 -1,4 0,7 3,9 2,1 6,-2 8,-4 0,0 1,-1 1,-1 0,0 28,-47 16,-63zm-27 57l0 0c-1,0 -1,-1 -1,0 -3,0 -6,2 -8,1 -4,0 -7,-5 -4,-8 3,-2 6,-4 9,-6 1,0 0,-1 0,-1 -8,-3 -16,-5 -21,-12 -5,-7 -5,-17 0,-23 5,-7 14,-10 22,-8 9,1 15,7 19,15 1,1 1,2 2,3 -6,8 -11,18 -15,27 0,2 -2,7 -3,12zm1 5l0 0c0,-2 0,-5 1,-7 1,0 1,0 1,0 2,-1 5,0 5,1 2,1 2,3 3,4 -3,4 -8,9 -10,2zm11 -5l0 0c0,0 0,1 0,1 -1,-2 -2,-3 -4,-4 -1,-1 -4,-2 -5,-1 0,-1 1,-2 1,-2 0,-3 1,-5 2,-7 0,0 0,0 1,0 3,-2 8,0 10,4 0,0 0,0 0,0 -1,3 -3,6 -5,9zm6 -12l0 0c0,0 0,1 0,1 -2,-4 -8,-6 -11,-3 0,-2 1,-3 1,-4 1,-2 2,-4 3,-6 0,0 0,0 0,0 4,-2 8,1 10,5 0,0 0,0 0,0 0,2 -1,5 -3,7zm4 -9l0 0c-1,-4 -6,-6 -10,-5 1,-2 3,-5 4,-8 2,0 4,0 5,1 2,1 2,3 3,4 0,0 0,0 0,0 0,3 -1,6 -2,8zm3 -10l0 0c-1,-2 -2,-3 -3,-3 -2,-1 -3,-1 -5,-1 1,-1 1,-2 2,-3 2,2 4,3 7,4 0,1 -1,2 -1,3zm-1 -6l0 0c-2,0 -6,-3 -6,-7 0,-5 4,-10 5,-10 1,0 3,1 3,2 1,0 2,2 2,2 0,1 0,4 0,5 0,0 -1,4 -1,4 0,5 -2,4 -3,4z"/>
      </g>
     </g>
     <g>
      <path class="fil115" d="M134 832c3,3 9,3 12,-1 2,-3 2,-7 0,-9 0,-1 0,-1 0,-1 -3,-4 -9,-4 -12,-1 -4,3 -3,9 0,12zm2 -11l0 0c3,-2 6,-1 9,1 1,2 1,5 0,8 -3,3 -7,3 -10,1 -2,-3 -2,-8 1,-10z"/>
      <g>
       <path class="fil115" d="M134 832c3,3 9,3 12,-1 2,-3 2,-7 0,-9 0,-1 0,-1 0,-1 -3,-4 -9,-4 -12,-1 -4,3 -3,9 0,12zm2 -11l0 0c3,-2 6,-1 9,1 1,2 1,5 0,8 -3,3 -7,3 -10,1 -2,-3 -2,-8 1,-10z"/>
       <path class="fil115" d="M135 870c1,1 3,0 4,-1 1,-2 0,-4 -1,-5 0,0 0,0 0,0 -2,-1 -4,0 -5,2 -1,1 0,3 2,4zm0 -4l0 0c1,0 1,0 2,0 2,1 0,3 -1,2 -1,0 -1,-1 -1,-2z"/>
       <path class="fil115" d="M135 870c1,1 3,0 4,-1 1,-2 0,-4 -1,-5 0,0 0,0 0,0 -2,-1 -4,0 -5,2 -1,1 0,3 2,4zm0 -4l0 0c1,0 1,0 2,0 2,1 0,3 -1,2 -1,0 -1,-1 -1,-2z"/>
       <path class="fil115" d="M116 879c1,0 1,1 2,1 2,2 5,5 8,4 4,-2 4,-6 3,-10 6,2 15,4 17,-4 3,-6 -5,-10 -10,-13 10,-3 20,-7 25,-16 4,-8 3,-19 -3,-27 -14,-15 -38,-10 -47,7 -1,-4 -2,-8 -6,-11 -1,-1 -3,-1 -5,-2 0,0 0,0 0,0 -2,-4 -2,-9 0,-14 1,-2 4,-5 7,-5 1,0 2,0 4,1l0 4c-1,1 -3,2 -3,3 -1,0 -1,2 0,1 4,-1 7,-4 6,-8 -1,-3 -5,-5 -8,-4 -10,3 -11,15 -7,22 -14,18 17,71 17,71zm9 -20l0 0c-4,-11 -9,-22 -16,-31 0,-1 1,-2 1,-3 5,-9 12,-16 22,-17 9,-2 19,1 24,9 6,7 6,18 1,25 -6,8 -15,11 -24,14 -1,0 -1,1 0,2 3,2 7,3 9,6 4,4 1,9 -3,9 -3,1 -6,-1 -9,-2 0,0 -1,0 -1,1 -1,-6 -4,-11 -4,-13zm-9 16l0 0c1,-1 2,-3 3,-4 1,-1 4,-3 6,-2 0,1 1,0 1,0 1,3 2,6 1,8 -2,8 -7,2 -11,-2zm-7 -13l0 0c0,0 1,0 1,0 2,-5 7,-7 11,-5 0,0 0,0 1,0 0,3 1,5 2,8 0,0 1,1 1,2 -1,-1 -5,1 -6,1 -1,1 -3,3 -4,5 0,0 0,-1 -1,-1 -1,-3 -3,-7 -5,-10zm-4 -11l0 0c0,0 0,0 0,-1 2,-4 6,-7 11,-5 0,0 0,0 0,0 1,2 2,4 3,7 1,1 1,2 2,4 -4,-3 -11,-1 -13,4 0,-1 0,-1 0,-1 -1,-3 -3,-6 -3,-8zm-4 -11l0 0c0,0 0,0 0,0 1,-2 2,-4 4,-5 1,-1 3,-1 5,-1 2,3 4,6 5,9 -4,-2 -10,1 -11,6 -1,-3 -2,-6 -3,-9zm-1 -6l0 0c3,-1 5,-2 7,-5 1,2 2,3 2,4 -1,-1 -3,-1 -5,0 -1,1 -3,2 -4,4 0,-1 0,-2 0,-3zm-2 -7l0 0c0,-1 -1,-5 -1,-6 0,-1 0,-4 0,-5 0,0 2,-2 2,-2 1,-2 2,-2 3,-2 2,0 6,5 6,10 0,5 -4,9 -6,9 -2,0 -4,0 -4,-4z"/>
       <path class="fil115" d="M116 879c1,0 1,1 2,1 2,2 5,5 8,4 4,-2 4,-6 3,-10 6,2 15,4 17,-4 3,-6 -5,-10 -10,-13 10,-3 20,-7 25,-16 4,-8 3,-19 -3,-27 -14,-15 -38,-10 -47,7 -1,-4 -2,-8 -6,-11 -1,-1 -3,-1 -5,-2 0,0 0,0 0,0 -2,-4 -2,-9 0,-14 1,-2 4,-5 7,-5 1,0 2,0 4,1l0 4c-1,1 -3,2 -3,3 -1,0 -1,2 0,1 4,-1 7,-4 6,-8 -1,-3 -5,-5 -8,-4 -10,3 -11,15 -7,22 -14,18 17,71 17,71zm9 -20l0 0c-4,-11 -9,-22 -16,-31 0,-1 1,-2 1,-3 5,-9 12,-16 22,-17 9,-2 19,1 24,9 6,7 6,18 1,25 -6,8 -15,11 -24,14 -1,0 -1,1 0,2 3,2 7,3 9,6 4,4 1,9 -3,9 -3,1 -6,-1 -9,-2 0,0 -1,0 -1,1 -1,-6 -4,-11 -4,-13zm-9 16l0 0c1,-1 2,-3 3,-4 1,-1 4,-3 6,-2 0,1 1,0 1,0 1,3 2,6 1,8 -2,8 -7,2 -11,-2zm-7 -13l0 0c0,0 1,0 1,0 2,-5 7,-7 11,-5 0,0 0,0 1,0 0,3 1,5 2,8 0,0 1,1 1,2 -1,-1 -5,1 -6,1 -1,1 -3,3 -4,5 0,0 0,-1 -1,-1 -1,-3 -3,-7 -5,-10zm-4 -11l0 0c0,0 0,0 0,-1 2,-4 6,-7 11,-5 0,0 0,0 0,0 1,2 2,4 3,7 1,1 1,2 2,4 -4,-3 -11,-1 -13,4 0,-1 0,-1 0,-1 -1,-3 -3,-6 -3,-8zm-4 -11l0 0c0,0 0,0 0,0 1,-2 2,-4 4,-5 1,-1 3,-1 5,-1 2,3 4,6 5,9 -4,-2 -10,1 -11,6 -1,-3 -2,-6 -3,-9zm-1 -6l0 0c3,-1 5,-2 7,-5 1,2 2,3 2,4 -1,-1 -3,-1 -5,0 -1,1 -3,2 -4,4 0,-1 0,-2 0,-3zm-2 -7l0 0c0,-1 -1,-5 -1,-6 0,-1 0,-4 0,-5 0,0 2,-2 2,-2 1,-2 2,-2 3,-2 2,0 6,5 6,10 0,5 -4,9 -6,9 -2,0 -4,0 -4,-4z"/>
      </g>
     </g>
    </g>
   </g>
   <path class="fil35 str32" d="M1581 535c1,-4 0,-9 -3,-10 -4,-2 -9,1 -10,5"/>
   <path class="fil35 str32" d="M1581 535c1,-4 0,-9 -3,-10 -4,-2 -9,1 -10,5"/>
   <path class="fil35 str32" d="M1579 539c0,0 1,0 1,0 0,0 0,-1 1,-1 0,-1 0,-3 1,-5 0,-1 -1,-2 -1,-3 -2,0 -4,1 -5,3 0,2 1,5 3,6"/>
   <path class="fil35 str32" d="M1579 539c0,0 1,0 1,0 0,0 0,-1 1,-1 0,-1 0,-3 1,-5 0,-1 -1,-2 -1,-3 -2,0 -4,1 -5,3 0,2 1,5 3,6"/>
   <path class="fil116 str33" d="M1730 793c0,0 -2,5 -3,9 -1,3 -1,13 0,15 0,2 4,5 11,6 8,1 18,0 20,-1 2,0 7,-3 8,-3 0,-1 -3,-9 -6,-12 -2,-4 -10,-13 -11,-14 -1,0 -2,-2 -4,-2 0,1 -3,4 -8,4 -4,1 -7,-2 -7,-2z"/>
   <path class="fil117 str34" d="M1730 793c0,0 -2,5 -3,9 -1,3 -1,13 0,15 0,2 4,5 11,6 8,1 18,0 20,-1 2,0 7,-3 8,-3 0,-1 -3,-9 -6,-12 -2,-4 -10,-13 -11,-14 -1,0 -2,-2 -4,-2 0,1 -3,4 -8,4 -4,1 -7,-2 -7,-2z"/>
   <path class="fil5 str33" d="M1640 714c0,0 7,0 10,0 3,1 5,1 6,2 0,0 -5,21 -5,21l-31 116c-5,-2 -8,-7 -14,-3 -3,-1 34,-136 34,-136z"/>
   <path class="fil118 str35" d="M1640 714c0,0 7,0 10,0 3,1 5,1 6,2 0,0 -5,21 -5,21l-31 116c-5,-2 -8,-7 -14,-3 -3,-1 34,-136 34,-136z"/>
   <path class="fil5 str33" d="M1686 648l34 112c0,0 3,3 7,3 5,-1 8,-3 8,-5l0 0c-14,-45 -38,-121 -38,-121 -2,4 -7,7 -11,11zm39 128l0 0 5 17c0,0 3,3 7,2 5,0 8,-3 8,-4 0,-1 -2,-7 -5,-16 -1,1 -1,2 -2,2 -2,1 -9,2 -13,-1z"/>
   <path class="fil5 str34" d="M1686 648l34 112c0,0 3,3 7,3 5,-1 8,-3 8,-5l0 0c-14,-45 -38,-121 -38,-121 -2,4 -7,7 -11,11zm39 128l0 0 5 17c0,0 3,3 7,2 5,0 8,-3 8,-4 0,-1 -2,-7 -5,-16 -1,1 -1,2 -2,2 -2,1 -9,2 -13,-1z"/>
   <path class="fil119 str33" d="M1720 760c0,0 3,3 7,3 5,-1 8,-3 8,-5 -1,-2 4,4 5,9 1,4 0,9 -2,10 -2,1 -12,3 -15,-4 -3,-6 -3,-10 -3,-13z"/>
   <path class="fil119 str34" d="M1720 760c0,0 3,3 7,3 5,-1 8,-3 8,-5 -1,-2 4,4 5,9 1,4 0,9 -2,10 -2,1 -12,3 -15,-4 -3,-6 -3,-10 -3,-13z"/>
   <path class="fil120 str33" d="M1606 850c0,0 -11,10 -14,16 -4,7 -7,9 -10,10 -3,2 -15,3 -14,14 1,11 10,15 16,17 6,2 21,2 31,-5 10,-8 11,-12 13,-13 2,-1 5,0 6,0 0,1 -1,-3 -5,-5 -5,-2 -3,-4 -3,-5 0,-1 -1,-25 -6,-26 -5,-2 -8,-7 -14,-3z"/>
   <path class="fil121 str34" d="M1606 850c0,0 -11,10 -14,16 -4,7 -7,9 -10,10 -3,2 -15,3 -14,14 1,11 10,15 16,17 6,2 21,2 31,-5 10,-8 11,-12 13,-13 2,-1 5,0 6,0 0,1 -1,-3 -5,-5 -5,-2 -3,-4 -3,-5 0,-1 -1,-25 -6,-26 -5,-2 -8,-7 -14,-3z"/>
   <path class="fil5 str33" d="M1624 862c0,0 25,-35 32,-42 7,-8 36,-39 41,-43 5,-5 16,-14 17,-15 2,-1 5,3 5,3 0,1 -42,41 -54,56 -12,16 -38,49 -39,53l0 0c0,-4 -1,-8 -2,-12l0 0z"/>
   <path class="fil122 str34" d="M1624 862c0,0 25,-35 32,-42 7,-8 36,-39 41,-43 5,-5 16,-14 17,-15 2,-1 5,3 5,3 0,1 -42,41 -54,56 -12,16 -38,49 -39,53l0 0c0,-4 -1,-8 -2,-12l0 0z"/>
   <path class="fil123 str33" d="M1720 758c-3,1 -6,3 -6,4 2,-1 5,3 5,3 0,0 0,0 0,0 1,0 1,0 1,0 0,-2 0,-3 0,-5l0 0 0 -2z"/>
   <path class="fil123 str34" d="M1720 758c-3,1 -6,3 -6,4 2,-1 5,3 5,3 0,0 0,0 0,0 1,0 1,0 1,0 0,-2 0,-3 0,-5l0 0 0 -2z"/>
   <path class="fil124 str33" d="M1634 890c1,0 5,1 6,8 1,8 -4,17 -14,17 -9,1 -20,-1 -21,-6 0,-1 0,-2 0,-2 3,-1 7,-3 10,-5 10,-8 11,-12 13,-13 1,-1 4,-1 5,0 0,0 1,0 1,0 0,1 0,1 0,1z"/>
   <path class="fil124 str34" d="M1634 890c1,0 5,1 6,8 1,8 -4,17 -14,17 -9,1 -20,-1 -21,-6 0,-1 0,-2 0,-2 3,-1 7,-3 10,-5 10,-8 11,-12 13,-13 1,-1 4,-1 5,0 0,0 1,0 1,0 0,1 0,1 0,1z"/>
   <path class="fil125 str33" d="M1571 881l0 0 0 0 0 0zm0 0l0 0c0,0 -4,1 -38,-4 -38,-7 -96,-15 -96,-15 0,0 -18,-3 -19,-5 0,-1 0,-1 0,-2 -2,0 -3,1 -4,2 -1,0 -4,3 -8,5 2,1 4,2 6,3 8,3 20,7 55,12 35,6 81,13 85,14 2,0 9,1 17,1 -1,0 -1,-1 -1,-2 0,-4 1,-7 3,-9z"/>
   <path class="fil126 str34" d="M1571 881l0 0 0 0 0 0zm0 0l0 0c0,0 -4,1 -38,-4 -38,-7 -96,-15 -96,-15 0,0 -18,-3 -19,-5 0,-1 0,-1 0,-2 -2,0 -3,1 -4,2 -1,0 -4,3 -8,5 2,1 4,2 6,3 8,3 20,7 55,12 35,6 81,13 85,14 2,0 9,1 17,1 -1,0 -1,-1 -1,-2 0,-4 1,-7 3,-9z"/>
   <path class="fil127 str33" d="M1408 821c-1,0 -13,-2 -14,-1 -2,0 -7,8 -10,11 -2,3 -8,13 -10,14 -1,1 -6,1 -10,4 -4,3 -8,16 1,20 10,4 18,5 26,2 9,-3 21,-13 23,-14 2,-2 6,-2 7,-1 1,1 0,-3 -5,-6 -4,-3 -3,-6 -3,-10 -1,-5 -1,-17 -5,-19z"/>
   <path class="fil128 str34" d="M1408 821c-1,0 -13,-2 -14,-1 -2,0 -7,8 -10,11 -2,3 -8,13 -10,14 -1,1 -6,1 -10,4 -4,3 -8,16 1,20 10,4 18,5 26,2 9,-3 21,-13 23,-14 2,-2 6,-2 7,-1 1,1 0,-3 -5,-6 -4,-3 -3,-6 -3,-10 -1,-5 -1,-17 -5,-19z"/>
   <path class="fil124 str33" d="M1402 865c0,2 0,4 0,5 -1,0 -5,0 -9,0 3,-1 6,-3 9,-5z"/>
   <path class="fil124 str34" d="M1402 865c0,2 0,4 0,5 -1,0 -5,0 -9,0 3,-1 6,-3 9,-5z"/>
   <path class="fil97 str33" d="M1627 883c0,0 -4,-1 -9,2 -5,3 -15,11 -20,11"/>
   <path class="fil97 str34" d="M1627 883c0,0 -4,-1 -9,2 -5,3 -15,11 -20,11"/>
   <path class="fil124 str33" d="M1364 849c0,0 -9,5 -9,11 0,7 0,10 7,12 7,1 14,2 17,2 1,0 2,-1 3,-2 -5,1 -11,-1 -17,-3 -9,-4 -5,-17 -1,-20z"/>
   <path class="fil124 str34" d="M1364 849c0,0 -9,5 -9,11 0,7 0,10 7,12 7,1 14,2 17,2 1,0 2,-1 3,-2 -5,1 -11,-1 -17,-3 -9,-4 -5,-17 -1,-20z"/>
   <path class="fil129 str33" d="M1656 716c0,0 7,-8 9,-14 3,-6 7,-18 7,-24 0,-4 0,-16 0,-22 -1,0 -3,-1 -6,-1 -3,-1 -7,-1 -9,-2 -2,1 -3,3 -4,5 -5,9 -13,21 -14,31 -2,9 -2,18 1,25l0 0c0,0 7,0 10,0 3,1 5,1 6,2z"/>
   <path class="fil130 str36" d="M1656 716c0,0 7,-8 9,-14 3,-6 7,-18 7,-24 0,-4 0,-16 0,-22 -1,0 -3,-1 -6,-1 -3,-1 -7,-1 -9,-2 -2,1 -3,3 -4,5 -5,9 -13,21 -14,31 -2,9 -2,18 1,25l0 0c0,0 7,0 10,0 3,1 5,1 6,2z"/>
   <path class="fil131 str33" d="M1412 836c0,0 35,-30 50,-41 15,-10 33,-22 38,-26 6,-3 30,-17 36,-20 6,-4 22,-12 28,-13 7,-2 19,-1 27,0 5,0 13,1 19,2 -2,0 -5,3 -1,5 -8,-1 -21,-3 -27,-3 -10,0 -15,-2 -32,8 -17,9 -39,22 -48,28 -9,6 -37,24 -55,40 -19,15 -23,19 -34,29 0,-2 0,-3 0,-5 0,-1 -1,-2 -1,-4z"/>
   <path class="fil131 str34" d="M1412 836c0,0 35,-30 50,-41 15,-10 33,-22 38,-26 6,-3 30,-17 36,-20 6,-4 22,-12 28,-13 7,-2 19,-1 27,0 5,0 13,1 19,2 -2,0 -5,3 -1,5 -8,-1 -21,-3 -27,-3 -10,0 -15,-2 -32,8 -17,9 -39,22 -48,28 -9,6 -37,24 -55,40 -19,15 -23,19 -34,29 0,-2 0,-3 0,-5 0,-1 -1,-2 -1,-4z"/>
   <path class="fil131 str33" d="M1717 750c-8,-1 -22,-3 -32,-4 1,2 0,4 -3,4 11,2 27,4 37,5l-2 -5z"/>
   <path class="fil131 str34" d="M1717 750c-8,-1 -22,-3 -32,-4 1,2 0,4 -3,4 11,2 27,4 37,5l-2 -5z"/>
   <path class="fil132 str33" d="M1613 745c0,0 10,1 16,2 0,0 1,0 2,0 1,-3 2,-6 3,-9 -3,0 -5,0 -7,0 -6,-1 -15,-1 -17,0 -3,1 -6,4 3,7zm34 4l0 0c19,3 43,4 38,-3 -2,-2 -13,-3 -20,-4 -3,0 -9,-1 -15,-2l-3 9z"/>
   <path class="fil132 str34" d="M1613 745c0,0 10,1 16,2 0,0 1,0 2,0 1,-3 2,-6 3,-9 -3,0 -5,0 -7,0 -6,-1 -15,-1 -17,0 -3,1 -6,4 3,7zm34 4l0 0c19,3 43,4 38,-3 -2,-2 -13,-3 -20,-4 -3,0 -9,-1 -15,-2l-3 9z"/>
   <path class="fil124 str33" d="M1544 770c0,0 -2,13 -1,19 1,7 2,8 8,9 5,1 20,1 24,-1 5,-2 6,-3 3,-8 -3,-5 -14,-17 -19,-20 -4,-3 -10,-3 -15,1z"/>
   <path class="fil124 str34" d="M1544 770c0,0 -2,13 -1,19 1,7 2,8 8,9 5,1 20,1 24,-1 5,-2 6,-3 3,-8 -3,-5 -14,-17 -19,-20 -4,-3 -10,-3 -15,1z"/>
   <path class="fil133 str33" d="M1538 729c0,0 1,3 3,7 -1,0 -1,1 1,1l0 1c-1,2 -7,6 -12,2 -2,-5 -4,-8 -4,-8l0 -4c3,0 7,1 12,1 0,0 0,0 0,0zm-3 20l0 0c1,0 1,0 1,0 0,0 0,0 -1,0zm14 3l0 0c4,9 7,16 7,17 0,2 -3,3 -6,3 -3,0 -4,1 -8,-7 -1,-3 -3,-6 -4,-9 2,0 8,0 11,-4z"/>
   <path class="fil133 str34" d="M1542 737l0 1c-1,2 -7,6 -12,2 -2,-5 -4,-8 -4,-8l0 -4c3,0 7,1 12,1 0,0 0,0 0,0 0,0 1,3 4,8zm-7 12l0 0c1,0 1,0 1,0 0,0 0,0 -1,0zm14 3l0 0c4,9 7,16 7,17 0,2 -3,3 -6,3 -3,0 -4,1 -8,-7 -1,-3 -3,-6 -4,-9 2,0 8,0 11,-4z"/>
   <path class="fil6 str34" d="M1542 737c0,3 -7,8 -13,2 1,0 -2,2 1,7 1,2 2,3 3,4 1,0 2,-1 3,-1 3,-2 11,-6 18,-9l0 0c0,0 -2,-1 -5,-2 -2,0 -5,0 -7,-1zm-5 18l0 0c4,-2 9,-5 13,-7l0 0c0,0 0,1 0,1 0,6 -10,8 -12,7 -1,0 -1,0 -1,-1z"/>
   <path class="fil134 str37" d="M1688 613l5 -26c-3,2 -7,5 -10,8 -6,5 -13,8 -19,7 -4,-1 -5,-3 -6,-6 -2,1 -3,2 -5,2 -16,6 -36,13 -73,12 -29,0 -83,-3 -115,-4l0 0c0,0 -16,50 -14,57 2,8 4,30 5,33 0,0 0,1 1,3 6,0 15,0 16,0 2,-1 22,6 36,8 14,2 37,4 42,4l-1 0c13,0 27,0 31,0 5,-1 12,4 2,5 -11,1 -79,3 -111,-5 -4,-1 -8,-2 -11,-3 2,3 4,6 8,8 9,3 31,8 37,10 6,1 35,4 54,3 18,-1 32,-3 46,-18 13,-14 30,-37 33,-43 3,-5 8,-18 13,-9l1 -1c1,-2 2,-4 4,-5l0 0c-1,0 -2,0 -2,0 0,-2 2,-10 4,-16 2,-8 15,-24 29,-24l0 0zm-219 93l0 0 1 0c0,0 0,0 -1,0zm1 0l0 0c0,0 0,0 1,0 -1,0 -1,0 -1,0zm2 0l0 0c0,0 0,0 0,0 0,0 0,0 0,0zm0 0l0 0c0,0 1,0 1,0 0,0 -1,0 -1,0zm1 1l0 0c0,0 0,0 1,0 -1,0 -1,0 -1,0zm1 0l0 0c0,0 1,0 1,0 0,0 -1,0 -1,0zm1 0l0 0c1,0 1,0 1,0 0,0 0,0 -1,0zm1 0l0 0c0,0 0,0 1,0 -1,0 -1,0 -1,0zm1 0l0 0c0,0 1,0 1,0 0,0 -1,0 -1,0zm1 0l0 0c1,1 1,1 1,1 0,0 0,0 -1,-1zm1 1l0 0c0,0 1,0 1,0 0,0 -1,0 -1,0zm1 0l0 0c0,0 1,0 1,0 0,0 -1,0 -1,0zm1 0l0 0c0,0 0,0 0,0 0,0 0,0 0,0zm1 0l0 0c0,0 0,0 0,0 0,0 0,0 0,0zm0 0l0 0c1,0 1,0 1,0 0,0 0,0 -1,0zm1 0l0 0c0,0 1,0 1,0 0,0 -1,0 -1,0zm48 4l0 0c1,0 1,0 1,0 0,0 0,0 -1,0zm1 0l0 0c1,0 1,0 2,0 -1,0 -1,0 -2,0zm7 0l0 0c1,0 2,0 3,0 -1,0 -2,0 -3,0zm3 0l0 0c2,0 4,-1 6,-1 -2,0 -4,1 -6,1z"/>
   <path class="fil135 str33" d="M1628 606c0,0 -23,34 -27,41 -4,7 -8,21 -8,25 -1,3 -2,23 -8,28 -5,5 -18,11 -56,7 -38,-3 -55,-9 -60,-17 -5,-8 1,-39 0,-52 -1,-13 4,-27 5,-29 1,0 3,-1 7,-3 32,2 75,4 99,4 21,1 36,-1 48,-4l0 0z"/>
   <path class="fil136 str38" d="M1628 606c0,0 -23,34 -27,41 -4,7 -8,21 -8,25 -1,3 -2,23 -8,28 -5,5 -18,11 -56,7 -38,-3 -55,-9 -60,-17 -5,-8 1,-39 0,-52 -1,-13 4,-27 5,-29 1,0 3,-1 7,-3 32,2 75,4 99,4 21,1 36,-1 48,-4l0 0z"/>
   <path class="fil137 str33" d="M1408 821c0,0 28,-99 30,-109 2,-8 5,-18 6,-21l0 0c-4,4 -14,5 -15,2 -2,8 -21,78 -24,89 -3,8 -8,26 -10,38 3,0 12,1 13,1z"/>
   <path class="fil138 str34" d="M1408 821c0,0 28,-99 30,-109 2,-8 5,-18 6,-21l0 0c-4,4 -14,5 -15,2 -2,8 -21,78 -24,89 -3,8 -8,26 -10,38 3,0 12,1 13,1z"/>
   <path class="fil129 str33" d="M1455 640c0,0 -11,-1 -13,0 -1,1 -12,19 -13,27 -2,8 -2,20 0,26 1,3 11,2 15,-2 3,-3 1,-5 2,-9 2,-5 4,-10 6,-14 0,-2 -1,-4 -1,-5 -1,-3 1,-12 4,-23l0 0z"/>
   <path class="fil129 str34" d="M1455 640c0,0 -11,-1 -13,0 -1,1 -12,19 -13,27 -2,8 -2,20 0,26 1,3 11,2 15,-2 3,-3 1,-5 2,-9 2,-5 4,-10 6,-14 0,-2 -1,-4 -1,-5 -1,-3 1,-12 4,-23l0 0z"/>
   <path class="fil97 str37" d="M1455 693c0,-5 -2,-18 -3,-26 0,0 0,0 0,1 -2,4 -4,9 -6,14 -1,4 1,6 -2,9 0,0 0,1 -1,1"/>
   <path class="fil137 str33" d="M1442 640c0,0 0,-3 1,-8 1,-4 7,-18 12,-21 2,-2 6,-4 8,-6l2 1 0 0 0 0c0,0 -6,18 -10,34l0 0c0,0 -11,-1 -13,0zm12 3l0 0 0 0 0 0 0 0z"/>
   <path class="fil137 str34" d="M1442 640c0,0 0,-3 1,-8 1,-4 7,-18 12,-21 2,-2 6,-4 8,-6l2 1 0 0 0 0c0,0 -6,18 -10,34l0 0c0,0 -11,-1 -13,0zm12 3l0 0 0 0 0 0 0 0z"/>
   <path class="fil139 str33" d="M1470 623l-6 26c-3,1 -6,2 -10,3l4 -24c3,-11 6,-20 7,-22l0 0c5,0 10,0 16,0 -4,2 -6,3 -7,3 -1,1 -3,7 -4,14l0 0zm-7 31l0 0 -1 2 -9 -1 0 -1c4,0 7,0 10,0z"/>
   <path class="fil139 str34" d="M1470 623l-6 26c-3,1 -6,2 -10,3l4 -24c3,-11 6,-20 7,-22l0 0c5,0 10,0 16,0 -4,2 -6,3 -7,3 -1,1 -3,7 -4,14l0 0zm-7 31l0 0 -1 2 -9 -1 0 -1c4,0 7,0 10,0z"/>
   <path class="fil140 str33" d="M1621 694c0,0 -5,14 -4,15 1,1 15,3 22,2 -2,-6 -2,-14 0,-22 1,-6 4,-14 8,-21 -1,-2 -2,-3 -3,-4 0,-1 -1,-1 -1,-2 -2,2 -3,5 -4,6 -2,4 -9,15 -18,26l0 0z"/>
   <path class="fil140 str36" d="M1621 694c0,0 -5,14 -4,15 1,1 15,3 22,2 -2,-6 -2,-14 0,-22 1,-6 4,-14 8,-21 -1,-2 -2,-3 -3,-4 0,-1 -1,-1 -1,-2 -2,2 -3,5 -4,6 -2,4 -9,15 -18,26l0 0z"/>
   <path class="fil139 str33" d="M1622 710c0,0 -1,9 -4,11 -2,2 -6,6 -17,5 -5,0 -10,-1 -15,-1 -5,2 -11,3 -17,3 3,1 6,1 8,2 6,1 29,2 33,2 4,-1 16,-6 18,-13 1,-3 2,-6 3,-8 -3,0 -7,0 -9,-1l0 0z"/>
   <path class="fil139 str36" d="M1622 710c0,0 -1,9 -4,11 -2,2 -6,6 -17,5 -5,0 -10,-1 -15,-1 -5,2 -11,3 -17,3 3,1 6,1 8,2 6,1 29,2 33,2 4,-1 16,-6 18,-13 1,-3 2,-6 3,-8 -3,0 -7,0 -9,-1l0 0z"/>
   <path class="fil141 str33" d="M1658 596c1,3 2,5 6,6 6,1 13,-2 19,-7 6,-6 13,-9 13,-12 1,-3 -4,-7 -4,-9 0,-1 4,-2 5,-4 2,-2 2,-11 3,-13 0,-2 -1,-6 0,-8 1,-1 1,-3 1,-4 0,-2 -2,-4 -1,-5 1,-2 1,-4 2,-6 0,-1 3,-15 3,-15 0,-1 1,-5 2,-7 2,-2 2,-5 3,-6 0,-1 4,-16 -4,-22 -8,-6 -23,-13 -31,-14 -7,-1 -67,-3 -95,-2 -28,2 -38,3 -46,11 -8,8 -22,29 -22,41 0,10 -2,33 -5,43 1,0 2,1 4,1 11,0 97,3 97,3 0,0 40,4 45,5 5,1 14,0 18,1 5,1 11,4 7,9 0,0 -7,9 -20,14z"/>
   <path class="fil142 str39" d="M1658 596c1,3 2,5 6,6 6,1 13,-2 19,-7 6,-6 13,-9 13,-12 1,-3 -4,-7 -4,-9 0,-1 4,-2 5,-4 2,-2 2,-11 3,-13 0,-2 -1,-6 0,-8 1,-1 1,-3 1,-4 0,-2 -2,-4 -1,-5 1,-2 1,-4 2,-6 0,-1 3,-15 3,-15 0,-1 1,-5 2,-7 2,-2 2,-5 3,-6 0,-1 4,-16 -4,-22 -8,-6 -23,-13 -31,-14 -7,-1 -67,-3 -95,-2 -28,2 -38,3 -46,11 -8,8 -22,29 -22,41 0,10 -2,33 -5,43 1,0 2,1 4,1 11,0 97,3 97,3 0,0 40,4 45,5 5,1 14,0 18,1 5,1 11,4 7,9 0,0 -7,9 -20,14z"/>
   <path class="fil143 str33" d="M1517 564c0,0 2,-28 1,-33 -1,-6 3,-24 4,-26 0,-3 8,-25 18,-29 5,-2 12,-4 19,-6 5,-1 12,-1 21,-2 23,-1 67,0 86,1 8,2 14,4 18,6 21,12 5,31 3,35 -1,5 -8,25 -8,28 0,4 -3,20 -3,22 0,2 -1,10 -3,13 0,0 -1,0 -1,0l0 0 0 0c0,0 0,0 0,0l0 0c0,0 0,0 0,0l0 0c0,0 -1,0 -1,0 -4,-1 -13,0 -18,-1 -5,-1 -45,-5 -45,-5l-1 0 0 0 -1 0 -1 0 0 0 -4 0 -3 -1 -9 0 -4 0 -2 0 -1 0 -3 0 -1 0 -4 0 -3 0 -10 -1 -2 0c-5,0 -10,0 -14,0l-1 0c-7,-1 -13,-1 -19,-1l0 0c-2,0 -3,0 -5,0l0 0 -2 0 -1 0 0 0 0 0z"/>
   <path class="fil144 str39" d="M1517 564c0,0 2,-28 1,-33 -1,-6 3,-24 4,-26 0,-3 8,-25 18,-29 5,-2 12,-4 19,-6 5,-1 12,-1 21,-2 23,-1 67,0 86,1 8,2 14,4 18,6 21,12 5,31 3,35 -1,5 -8,25 -8,28 0,4 -3,20 -3,22 0,2 -1,10 -3,13 0,0 -1,0 -1,0l0 0 0 0c0,0 0,0 0,0l0 0c0,0 0,0 0,0l0 0c0,0 -1,0 -1,0 -4,-1 -13,0 -18,-1 -5,-1 -45,-5 -45,-5l-1 0 0 0 -1 0 -1 0 0 0 -4 0 -3 -1 -9 0 -4 0 -2 0 -1 0 -3 0 -1 0 -4 0 -3 0 -10 -1 -2 0c-5,0 -10,0 -14,0l-1 0c-7,-1 -13,-1 -19,-1l0 0c-2,0 -3,0 -5,0l0 0 -2 0 -1 0 0 0 0 0z"/>
   <path class="fil139 str33" d="M1449 699c0,0 18,8 35,9 16,2 37,4 47,4 10,-1 45,-1 50,-1 5,-1 12,4 2,5 -11,1 -79,3 -111,-5 -32,-7 -27,-12 -23,-12z"/>
   <path class="fil139 str34" d="M1449 699c0,0 18,8 35,9 16,2 37,4 47,4 10,-1 45,-1 50,-1 5,-1 12,4 2,5 -11,1 -79,3 -111,-5 -32,-7 -27,-12 -23,-12z"/>
   <path class="fil145 str33" d="M1449 699c0,0 22,0 24,0 2,-1 22,6 36,8 14,2 37,4 42,4 -9,1 -16,1 -20,1 -10,0 -31,-2 -47,-4 -17,-1 -35,-9 -35,-9z"/>
   <path class="fil145 str34" d="M1449 699c0,0 22,0 24,0 2,-1 22,6 36,8 14,2 37,4 42,4 -9,1 -16,1 -20,1 -10,0 -31,-2 -47,-4 -17,-1 -35,-9 -35,-9z"/>
   <path class="fil97 str33" d="M1472 682c0,0 27,10 39,12"/>
   <path class="fil97 str40" d="M1472 682c0,0 27,10 39,12"/>
   <path class="fil97 str33" d="M1589 672c0,0 -3,18 -5,21 -2,2 -44,5 -56,3"/>
   <path class="fil97 str40" d="M1589 672c0,0 -3,18 -5,21 -2,2 -44,5 -56,3"/>
   <path class="fil97 str33" d="M1471 684c0,0 1,8 14,12 12,5 27,7 35,8"/>
   <path class="fil97 str40" d="M1471 684c0,0 1,8 14,12 12,5 27,7 35,8"/>
   <path class="fil146 str33" d="M1559 565c0,0 0,-38 1,-43 2,-5 2,-21 32,-24 29,-3 38,1 47,4 8,3 14,20 12,26 -3,6 -9,43 -12,46 -2,4 -80,-9 -80,-9z"/>
   <path class="fil146 str38" d="M1559 565c0,0 0,-38 1,-43 2,-5 2,-21 32,-24 29,-3 38,1 47,4 8,3 14,20 12,26 -3,6 -9,43 -12,46 -2,4 -80,-9 -80,-9z"/>
   <path class="fil97 str33" d="M1526 631c0,0 -19,2 -29,4"/>
   <path class="fil97 str33" d="M1526 631c0,0 -19,2 -29,4"/>
   <path class="fil97 str33" d="M1530 616c0,0 -24,6 -28,7 -4,0 -21,2 -25,5"/>
   <path class="fil97 str33" d="M1530 616c0,0 -24,6 -28,7 -4,0 -21,2 -25,5"/>
   <path class="fil97 str33" d="M1477 609c0,0 -4,23 -4,27 0,3 1,13 1,17 0,4 -2,18 -2,21"/>
   <path class="fil97 str40" d="M1477 609c0,0 -4,23 -4,27 0,3 1,13 1,17 0,4 -2,18 -2,21"/>
   <path class="fil97 str33" d="M1563 634c1,-1 8,-6 19,-8 10,-1 18,-6 22,-9"/>
   <path class="fil97 str33" d="M1563 634c1,-1 8,-6 19,-8 10,-1 18,-6 22,-9"/>
   <path class="fil97 str33" d="M1693 582c0,0 -21,17 -27,18"/>
   <path class="fil97 str41" d="M1693 582c0,0 -21,17 -27,18"/>
   <path class="fil97 str42" d="M1681 563c0,0 10,2 11,5"/>
   <path class="fil97 str41" d="M1681 563c0,0 10,2 11,5"/>
   <path class="fil97 str42" d="M1677 569c0,0 14,5 14,11"/>
   <path class="fil97 str41" d="M1677 569c0,0 14,5 14,11"/>
   <path class="fil97 str42" d="M1679 574c0,0 6,4 6,7"/>
   <path class="fil97 str41" d="M1679 574c0,0 6,4 6,7"/>
   <path class="fil97 str42" d="M1674 562c0,0 -11,0 -17,5"/>
   <path class="fil97 str40" d="M1674 562c0,0 -11,0 -17,5"/>
   <path class="fil97 str42" d="M1673 569c0,0 -5,2 -7,2"/>
   <path class="fil97 str40" d="M1673 569c0,0 -5,2 -7,2"/>
   <path class="fil97 str33" d="M1557 643c0,0 5,10 10,13"/>
   <path class="fil97 str33" d="M1557 643c0,0 5,10 10,13"/>
   <path class="fil97 str33" d="M1480 680c0,0 9,-8 17,-11 7,-3 10,-7 13,-10"/>
   <path class="fil97 str40" d="M1480 680c0,0 9,-8 17,-11 7,-3 10,-7 13,-10"/>
   <path class="fil97 str33" d="M1584 667c0,0 -9,6 -22,9 -13,4 -15,6 -17,8"/>
   <path class="fil97 str40" d="M1584 667c0,0 -9,6 -22,9 -13,4 -15,6 -17,8"/>
   <path class="fil97 str33" d="M1529 645c0,0 -6,2 -6,5"/>
   <path class="fil97 str40" d="M1529 645c0,0 -6,2 -6,5"/>
   <path class="fil97 str33" d="M1517 640c0,0 -6,3 -13,8"/>
   <path class="fil97 str40" d="M1517 640c0,0 -6,3 -13,8"/>
   <path class="fil97 str33" d="M1488 644c0,0 13,-5 18,-7"/>
   <path class="fil97 str38" d="M1488 644c0,0 13,-5 18,-7"/>
   <path class="fil97 str33" d="M1548 643c0,0 -4,-1 -4,7"/>
   <path class="fil97 str40" d="M1548 643c0,0 -4,-1 -4,7"/>
   <path class="fil97 str42" d="M1680 551c0,0 11,6 15,6"/>
   <path class="fil97 str41" d="M1680 551c0,0 11,6 15,6"/>
   <path class="fil97 str42" d="M1681 557c0,0 11,2 13,6"/>
   <path class="fil97 str41" d="M1681 557c0,0 11,2 13,6"/>
   <path class="fil97 str42" d="M1681 547c0,0 13,5 16,6"/>
   <path class="fil97 str41" d="M1681 547c0,0 13,5 16,6"/>
   <path class="fil146" d="M1633 498c0,0 -3,-6 -2,-12 0,0 6,-2 6,-2 -3,2 -4,12 -4,14z"/>
   <path class="fil146" d="M1633 498c0,0 -3,-6 -2,-12 0,0 6,-2 6,-2 -3,2 -4,12 -4,14z"/>
   <path class="fil146" d="M1643 503c0,0 7,-8 13,-14 0,0 -2,4 -2,6 0,2 -11,8 -11,8z"/>
   <path class="fil146" d="M1643 503c0,0 7,-8 13,-14 0,0 -2,4 -2,6 0,2 -11,8 -11,8z"/>
   <path class="fil146" d="M1641 500c0,0 0,-12 2,-16 0,0 0,3 1,5 2,2 -3,8 -3,11z"/>
   <path class="fil146" d="M1641 500c0,0 0,-12 2,-16 0,0 0,3 1,5 2,2 -3,8 -3,11z"/>
   <path class="fil146" d="M1596 495c0,0 -10,-5 -11,-15 -1,-10 11,15 11,15z"/>
   <path class="fil146" d="M1596 495c0,0 -10,-5 -11,-15 -1,-10 11,15 11,15z"/>
   <path class="fil146" d="M1583 497c0,0 -15,-12 -18,-20 0,0 17,16 21,18 4,2 -3,2 -3,2z"/>
   <path class="fil146" d="M1583 497c0,0 -15,-12 -18,-20 0,0 17,16 21,18 4,2 -3,2 -3,2z"/>
   <path class="fil146" d="M1566 506c0,0 -18,-1 -22,-8 0,0 2,-2 3,0 1,3 19,8 19,8z"/>
   <path class="fil146" d="M1566 506c0,0 -18,-1 -22,-8 0,0 2,-2 3,0 1,3 19,8 19,8z"/>
   <path class="fil146" d="M1573 501c0,0 -15,-6 -16,-11 0,0 13,8 17,9 3,0 1,3 -1,2z"/>
   <path class="fil146" d="M1573 501c0,0 -15,-6 -16,-11 0,0 13,8 17,9 3,0 1,3 -1,2z"/>
   <line class="fil97 str33" x1="1575" y1="512" x2="1589" y2= "510" />
   <line class="fil97 str33" x1="1575" y1="512" x2="1589" y2= "510" />
   <line class="fil97 str33" x1="1628" y1="511" x2="1642" y2= "515" />
   <line class="fil97 str33" x1="1628" y1="511" x2="1642" y2= "515" />
   <path class="fil97 str33" d="M1557 549c0,0 -12,-4 -14,-7"/>
   <path class="fil97 str33" d="M1557 549c0,0 -12,-4 -14,-7"/>
   <path class="fil97 str33" d="M1522 548c0,0 20,1 28,7"/>
   <path class="fil97 str33" d="M1522 548c0,0 20,1 28,7"/>
   <path class="fil97 str33" d="M1523 552c0,0 14,9 20,10"/>
   <path class="fil97 str40" d="M1523 552c0,0 14,9 20,10"/>
   <line class="fil97 str33" x1="1521" y1="559" x2="1531" y2= "564" />
   <line class="fil97 str40" x1="1521" y1="559" x2="1531" y2= "564" />
   <path class="fil147" d="M1639 898c-1,0 -4,-1 -6,3 -2,4 -1,7 -1,8 1,1 5,0 7,-3 2,-3 2,-7 0,-8z"/>
   <path class="fil148 str33" d="M1697 637c0,0 7,-8 6,-16 -2,-7 -9,-8 -11,-8 -15,-2 -31,16 -33,24 -2,6 -4,14 -4,16 0,1 6,0 11,2 6,1 7,2 7,2 0,0 18,-11 24,-20z"/>
   <path class="fil148 str36" d="M1697 637c0,0 7,-8 6,-16 -2,-7 -9,-8 -11,-8 -15,-2 -31,16 -33,24 -2,6 -4,14 -4,16 0,1 6,0 11,2 6,1 7,2 7,2 0,0 18,-11 24,-20z"/>
   <ellipse class="fil43" cx="1563" cy="545" rx="23" ry="16"/>
   <path class="fil97 str33" d="M1565 643c0,0 12,7 17,8"/>
   <path class="fil97 str33" d="M1565 643c0,0 12,7 17,8"/>
   <path class="fil147" d="M1697 619c0,0 -11,2 -17,14 -6,13 -4,17 0,17 3,-1 13,-6 18,-17 4,-11 1,-14 -1,-14z"/>
   <path class="fil149" d="M1614 608c-1,1 -1,1 -2,1 1,0 1,-1 2,-1zm-36 2l0 0c0,1 -1,1 -2,2 0,-1 1,-1 1,-2l1 0z"/>
   <path class="fil149" d="M1614 608c-1,1 -1,1 -2,1 1,0 1,-1 2,-1zm-36 2l0 0c0,1 -1,1 -2,2 0,-1 1,-1 1,-2l1 0z"/>
   <path class="fil150" d="M1658 522c1,0 2,1 4,1 7,3 10,11 7,18 -2,7 -10,10 -17,7 -5,-1 -8,-5 -9,-10 1,-1 3,-2 5,-3 0,-1 0,-2 0,-3 1,-1 2,-3 3,-4 0,0 1,0 1,1 0,0 1,0 1,0 2,-2 3,-4 5,-7z"/>
   <path class="fil150" d="M1658 522c1,0 2,1 4,1 7,3 10,11 7,18 -2,7 -10,10 -17,7 -5,-1 -8,-5 -9,-10 1,-1 3,-2 5,-3 0,-1 0,-2 0,-3 1,-1 2,-3 3,-4 0,0 1,0 1,1 0,0 1,0 1,0 2,-2 3,-4 5,-7z"/>
   <path class="fil150" d="M1522 481c0,0 0,12 8,28 2,5 7,11 13,16 0,0 0,-1 -1,-2 -1,-9 4,-15 7,-16 2,-1 8,-3 14,2 6,5 16,8 19,8 3,0 13,3 14,9 1,6 -1,13 -9,18 -3,1 -5,2 -8,3 3,0 6,1 9,2 27,5 43,-3 48,-6 2,-1 7,-4 12,-8 0,-1 0,-2 0,-3 1,-1 2,-3 3,-4 0,0 1,0 1,1 0,0 1,0 1,0 5,-6 9,-14 10,-24 0,-23 -14,-40 -21,-47 -8,-6 -8,-17 -7,-20 2,-3 9,-17 9,-19 1,-2 0,-11 -7,-15 -7,-3 -15,-1 -15,4 0,5 3,9 7,10 3,2 8,1 11,1 4,0 9,-2 10,-3 1,0 -9,2 -13,1 -3,0 -12,-2 -12,-7 0,-4 4,-5 7,-4 2,1 11,8 4,17 -7,8 -16,11 -20,12 -4,1 -5,3 -29,-2 -23,-4 -45,11 -49,15 -4,3 -14,14 -16,33z"/>
   <path class="fil150" d="M1522 481c0,0 0,12 8,28 2,5 7,11 13,16 6,7 16,14 36,22 3,0 6,1 9,2 27,5 43,-3 48,-6 2,-1 7,-4 12,-8 0,-1 0,-2 0,-3 1,-1 2,-3 3,-4 0,0 1,0 1,1 0,0 1,0 1,0 5,-6 9,-14 10,-24 0,-23 -14,-40 -21,-47 -8,-6 -8,-17 -7,-20 2,-3 9,-17 9,-19 1,-2 0,-11 -7,-15 -7,-3 -15,-1 -15,4 0,5 3,9 7,10 3,2 8,1 11,1 4,0 9,-2 10,-3 1,0 -9,2 -13,1 -3,0 -12,-2 -12,-7 0,-4 4,-5 7,-4 2,1 11,8 4,17 -7,8 -16,11 -20,12 -4,1 -5,3 -29,-2 -23,-4 -45,11 -49,15 -4,3 -14,14 -16,33z"/>
   <path class="fil151" d="M1639 455c1,1 2,2 2,3 10,14 13,31 6,47 -8,20 -29,32 -53,31 2,-3 2,-7 2,-10 -1,-6 -11,-9 -14,-9 -3,0 -13,-3 -19,-8 -6,-5 -12,-3 -14,-2 -2,1 -4,3 -6,8 -14,-14 -21,-33 -17,-51 4,-9 9,-14 12,-16 4,-4 26,-19 49,-15 6,1 10,2 13,3 1,0 12,1 18,2 2,0 21,17 21,17z"/>
   <path class="fil151" d="M1639 455c1,1 2,2 2,3 10,14 13,31 6,47 -8,20 -29,32 -53,31 -15,-2 -40,-8 -51,-21 -14,-14 -21,-33 -17,-51 4,-9 9,-14 12,-16 4,-4 26,-19 49,-15 6,1 10,2 13,3 1,0 12,1 18,2 2,0 21,17 21,17z"/>
   <path class="fil97 str3" d="M1653 523c3,-1 6,-1 9,0 7,3 10,11 7,18 -2,7 -10,10 -17,7 -6,-2 -10,-8 -9,-13"/>
   <path class="fil152" d="M1565 489c1,-4 4,-6 6,-5 1,0 1,4 0,7 -2,4 -4,7 -6,6 -1,-1 -2,-4 0,-8z"/>
   <path class="fil152" d="M1591 500c2,-4 4,-6 6,-5 1,0 1,4 0,7 -2,4 -4,7 -6,6 -1,-1 -1,-4 0,-8z"/>
   <path class="fil150 str4" d="M1523 455c3,1 4,3 5,5 -2,5 -4,11 -5,18l0 0c-3,1 -6,1 -9,0 -6,-2 -8,-9 -6,-15 3,-7 9,-10 15,-8z"/>
   <path class="fil153" d="M1615 480c2,-5 -1,-10 -5,-12 -2,0 -3,0 -5,0 4,3 8,7 10,12z"/>
   <path class="fil153" d="M1615 480c2,-5 -1,-10 -5,-12 -2,0 -3,0 -5,0 4,3 8,7 10,12z"/>
   <path class="fil154 str6" d="M1576 505c4,2 6,4 6,6 -1,1 -4,1 -8,0 -4,-2 -6,-4 -6,-6 1,-1 5,-1 8,0z"/>
   <path class="fil99" d="M1567 487c0,1 1,2 1,2 -1,1 -2,1 -2,1 -1,0 -1,-1 -1,-2 0,0 1,-1 2,-1z"/>
   <g>
    <path class="fil152" d="M1565 489c1,-4 4,-6 6,-5 1,0 1,4 0,7 -2,4 -4,7 -6,6 -1,-1 -2,-4 0,-8z"/>
    <path class="fil99" d="M1567 487c0,1 1,2 1,2 -1,1 -2,1 -2,1 -1,0 -1,-1 -1,-2 0,0 1,-1 2,-1z"/>
   </g>
   <path class="fil99" d="M1594 498c0,0 1,1 1,1 -1,1 -1,1 -2,1 -1,0 -1,-1 -1,-2 0,0 1,-1 2,0z"/>
   <g>
    <path class="fil152" d="M1591 500c2,-4 4,-6 6,-5 1,0 1,4 0,7 -2,4 -4,7 -6,6 -1,-1 -1,-4 0,-8z"/>
    <path class="fil99" d="M1594 498c0,0 1,1 1,1 -1,1 -1,1 -2,1 -1,0 -1,-1 -1,-2 0,0 1,-1 2,0z"/>
   </g>
   <path class="fil97 str3" d="M1664 539c2,-5 0,-10 -5,-12 -4,-1 -9,1 -11,5 0,2 0,4 0,6"/>
   <path class="fil97 str3" d="M1648 538c3,1 6,0 7,-3 1,-3 -1,-5 -3,-6 0,-1 -1,-1 -1,-1 -1,1 -2,3 -3,4 0,2 -1,4 0,6 0,0 0,0 0,0"/>
   <g>
    <path class="fil43 str43" d="M1545 530c0,0 -16,-3 -25,-9 -9,-6 -10,-7 -11,-7 0,-1 0,-4 -1,-6 -1,-1 -3,-2 -5,-2 1,3 2,6 1,8 -2,3 -6,6 -11,6 -2,0 -3,-1 -4,-1 0,0 0,1 0,2 3,5 7,4 8,4 2,0 10,11 14,15 4,3 18,15 26,17 0,0 0,0 0,0 1,-1 2,-2 3,-3 1,-1 2,-4 4,-9 -1,-2 -1,-4 0,-6 1,-2 2,-4 4,-5 -1,-1 -2,-2 -3,-4l0 0zm6 3l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm-1 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0z"/>
    <g>
     <path class="fil43 str43" d="M1545 530c0,0 -16,-3 -25,-9 -9,-6 -10,-7 -11,-7 0,-1 0,-4 -1,-6 -1,-1 -3,-2 -5,-2 1,3 2,6 1,8 -2,3 -6,6 -11,6 -2,0 -3,-1 -4,-1 0,0 0,1 0,2 3,5 7,4 8,4 2,0 10,11 14,15 4,3 18,15 26,17 0,0 0,0 0,0 1,-1 2,-2 3,-3 1,-1 2,-4 4,-9 -1,-2 -1,-4 0,-6 1,-2 2,-4 4,-5 -1,-1 -2,-2 -3,-4l0 0zm6 3l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm-1 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0zm0 0l0 0 0 0 0 0z"/>
     <path class="fil97 str2" d="M1545 530c0,0 -16,-3 -25,-9 -9,-6 -10,-7 -11,-7 0,-1 0,-4 -1,-6 -1,-1 -3,-2 -5,-2 1,3 2,6 1,8 -2,3 -6,6 -11,6 -2,0 -3,-1 -4,-1 0,0 0,1 0,2 3,5 7,4 8,4 2,0 10,11 14,15 4,3 18,15 26,17 0,0 0,0 0,0 1,-1 2,-2 3,-3 1,-1 2,-4 4,-9 -1,-2 -1,-4 0,-6 1,-2 2,-4 4,-5 -1,-1 -2,-2 -3,-4"/>
     <path class="fil97 str2" d="M1545 530c0,0 -16,-3 -25,-9 -9,-6 -10,-7 -11,-7 0,-1 0,-4 -1,-6 -1,-1 -3,-2 -5,-2 1,3 2,6 1,8 -2,3 -6,6 -11,6 -2,0 -3,-1 -4,-1 0,0 0,1 0,2 3,5 7,4 8,4 2,0 10,11 14,15 4,3 18,15 26,17 0,0 0,0 0,0 1,-1 2,-2 3,-3 1,-1 2,-4 4,-9 -1,-2 -1,-4 0,-6 1,-2 2,-4 4,-5 -1,-1 -2,-2 -3,-4"/>
     <line class="fil97 str2" x1="1545" y1="530" x2="1545" y2= "530" />
     <line class="fil97 str2" x1="1545" y1="530" x2="1545" y2= "530" />
     <line class="fil97 str2" x1="1551" y1="533" x2="1551" y2= "533" />
     <line class="fil97 str2" x1="1551" y1="533" x2="1551" y2= "533" />
     <line class="fil97 str2" x1="1551" y1="533" x2="1551" y2= "533" />
     <line class="fil97 str2" x1="1551" y1="533" x2="1551" y2= "533" />
     <line class="fil97 str2" x1="1550" y1="533" x2="1550" y2= "533" />
     <line class="fil97 str2" x1="1550" y1="533" x2="1550" y2= "533" />
     <polygon class="fil97 str2" points="1550,533 1550,533 "/>
     <polygon class="fil97 str2" points="1550,533 1550,533 "/>
     <line class="fil97 str2" x1="1550" y1="533" x2="1550" y2= "533" />
     <line class="fil97 str2" x1="1550" y1="533" x2="1550" y2= "533" />
     <line class="fil97 str2" x1="1550" y1="533" x2="1550" y2= "533" />
     <line class="fil97 str2" x1="1550" y1="533" x2="1550" y2= "533" />
     <line class="fil97 str2" x1="1550" y1="533" x2="1550" y2= "533" />
     <line class="fil97 str2" x1="1550" y1="533" x2="1550" y2= "533" />
    </g>
   </g>
   <g>
    <g>
     <path class="fil155 str4" d="M1504 494c0,0 -3,4 -2,8 0,4 3,8 2,12 -2,3 -6,6 -11,6 -5,0 -7,-3 -10,-5 -3,-3 -3,-4 -7,-4 -4,0 -8,1 -9,-2 -1,-4 1,-5 3,-6 3,-1 4,2 5,2 1,0 5,0 4,-2 -1,-3 -3,-4 -4,-5 -1,-1 -5,-1 -6,-3 -1,-3 1,-6 3,-7 2,-1 4,-2 6,3 2,4 3,5 5,5 1,0 2,-1 2,-3 0,-2 -3,-5 -3,-7 0,-1 -1,-4 3,-5 3,-1 5,0 5,4 0,2 0,7 4,8 1,0 0,-3 2,-4 4,-4 9,-4 9,1 1,2 0,3 -1,4z"/>
     <path class="fil97 str3" d="M1492 512c-4,-12 3,-15 3,-16 -1,-1 -1,-3 -1,-3 0,0 -16,1 -15,16"/>
    </g>
   </g>
   <path class="fil43" d="M1616 550c0,0 19,17 22,22 3,5 8,13 9,15 2,3 5,7 8,8 2,0 -1,5 -5,7 -3,2 -11,4 -14,2 -2,-1 -1,-3 -3,-5 -1,-2 -12,-11 -16,-14 -4,-3 -5,-3 -6,-4 -1,0 0,7 2,11 6,15 15,27 2,43 -8,9 -17,14 -24,18 -7,4 -9,7 -14,11 -5,4 -13,4 -17,1 -5,-4 -3,-11 -3,-13 0,-2 0,-4 -2,-4 -3,-1 -25,-3 -30,-6 -11,-5 -29,-2 -40,2 -3,2 -7,-3 -9,-5 -2,-3 -7,-18 -10,-22 -2,-4 -6,-9 -7,-12 -1,-2 -3,-13 3,-16 11,-4 26,2 29,13 1,3 3,8 3,9 1,1 9,-11 17,-10 2,1 4,2 4,2 0,0 2,-13 6,-19 4,-6 15,-26 19,-30 1,-1 2,-4 4,-9 2,4 6,9 11,11 9,3 18,1 20,-5 1,-1 1,-2 1,-4l0 0c1,0 2,0 3,0 3,0 6,1 9,2 11,2 20,2 28,1l0 0zm-64 -12l0 0c0,0 0,1 0,1 -2,4 1,9 6,11 4,2 10,1 11,-3 -4,-1 -9,-3 -14,-7 0,0 -1,0 -3,-2z"/>
   <path class="fil97 str44" d="M1611 581c0,0 -7,-3 -9,-4"/>
   <path class="fil97 str44" d="M1611 581c0,0 -7,-3 -9,-4"/>
   <path class="fil97 str2" d="M1587 641c0,0 2,-20 -8,-30 -10,-10 -18,-6 -20,-4 -2,1 -10,6 -8,15 1,10 5,11 5,16 1,5 1,10 1,12"/>
   <path class="fil97 str2" d="M1556 622c0,0 4,-10 14,-7 9,4 10,12 10,17 0,5 -1,17 -3,22"/>
   <path class="fil97 str2" d="M1515 603c-1,1 -1,29 26,43"/>
   <path class="fil97 str2" d="M1496 626c0,-3 -2,-15 -2,-15 0,0 5,9 5,12"/>
   <path class="fil97 str2" d="M1461 603c0,0 -1,-9 9,-7 9,2 18,16 17,36"/>
   <path class="fil97 str2" d="M1495 613c0,0 2,4 2,4 0,0 8,-6 11,-6 3,0 7,0 7,0 0,0 0,-7 0,-8 1,-1 -9,-1 -13,3 -4,4 -7,7 -7,7"/>
   <path class="fil44 str0" d="M1494 621c0,0 -6,-15 -11,-19 -4,-4 -9,-8 -13,-9 -4,-1 -9,1 -10,5 0,4 -1,4 -1,5 0,0 -2,-8 2,-11 5,-3 9,-6 21,0 11,6 13,23 12,29z"/>
   <path class="fil97 str2" d="M1517 594c0,0 -1,8 3,11 4,3 12,6 22,6 4,-1 9,-1 14,-2 1,-2 6,-6 13,-4 4,-2 6,-4 9,-7 7,-10 9,-26 10,-30 0,-1 0,-2 -1,-3 -1,0 -1,1 -2,1 -11,4 -22,0 -25,-8 0,0 0,-1 0,-1 2,1 -4,-1 -5,-1 1,0 1,0 2,0 -1,1 -3,1 -4,1 -5,0 -9,-2 -11,-6 -1,1 -1,1 -1,1 -1,1 -1,2 -1,2 -4,4 -15,24 -19,30 -2,3 -3,7 -4,10"/>
   <path class="fil97 str2" d="M1517 594c0,0 -1,8 3,11 4,3 12,6 22,6 4,-1 9,-1 14,-2 1,-2 6,-6 13,-4 4,-2 6,-4 9,-7 7,-10 9,-26 10,-30 0,-1 0,-2 -1,-3 -1,0 -1,1 -2,1 -11,4 -22,0 -25,-8 0,0 0,-1 0,-1 2,1 -4,-1 -5,-1 1,0 1,0 2,0 -1,1 -3,1 -4,1 -5,0 -9,-2 -11,-6 -1,1 -1,1 -1,1 -1,1 -1,2 -1,2 -4,4 -15,24 -19,30 -2,3 -3,7 -4,10"/>
   <path class="fil97 str2" d="M1553 555c0,0 -1,0 -1,-1"/>
   <path class="fil97 str2" d="M1553 555c0,0 -1,0 -1,-1"/>
   <path class="fil97 str2" d="M1548 551c-1,0 -1,0 -1,0 0,0 0,0 1,0"/>
   <path class="fil97 str2" d="M1548 551c-1,0 -1,0 -1,0 0,0 0,0 1,0"/>
   <path class="fil97 str2" d="M1547 550c0,0 0,0 0,0 0,0 0,0 0,0"/>
   <path class="fil97 str2" d="M1547 550c0,0 0,0 0,0 0,0 0,0 0,0"/>
   <path class="fil97 str2" d="M1547 550c0,0 0,0 0,0 0,0 0,0 0,0"/>
   <path class="fil97 str2" d="M1547 550c0,0 0,0 0,0 0,0 0,0 0,0"/>
   <path class="fil97 str2" d="M1547 550c0,0 0,0 0,0 0,0 0,0 0,0"/>
   <path class="fil97 str2" d="M1547 550c0,0 0,0 0,0 0,0 0,0 0,0"/>
   <path class="fil97 str2" d="M1547 550c0,-1 -1,-1 -1,-1 0,0 1,0 1,1"/>
   <path class="fil97 str2" d="M1547 550c0,-1 -1,-1 -1,-1 0,0 1,0 1,1"/>
   <path class="fil97 str2" d="M1546 549c0,0 0,-1 -1,-1"/>
   <path class="fil97 str2" d="M1546 549c0,0 0,-1 -1,-1"/>
   <line class="fil97 str2" x1="1545" y1="548" x2="1545" y2= "548" />
   <line class="fil97 str2" x1="1545" y1="548" x2="1545" y2= "548" />
   <path class="fil97 str2" d="M1545 548c1,0 1,1 1,1"/>
   <path class="fil97 str2" d="M1545 548c1,0 1,1 1,1"/>
   <path class="fil156 str17" d="M1528 599c1,0 2,-1 2,-2 0,-1 -1,-3 -2,-3 -1,0 -3,2 -3,3 0,1 2,2 3,2z"/>
   <path class="fil156 str17" d="M1528 599c1,0 2,-1 2,-2 0,-1 -1,-3 -2,-3 -1,0 -3,2 -3,3 0,1 2,2 3,2z"/>
   <path class="fil156 str0" d="M1526 619c1,0 2,-1 2,-2 0,-1 -1,-2 -2,-2 -1,0 -2,1 -2,2 0,1 1,2 2,2z"/>
   <path class="fil156 str17" d="M1532 636c0,0 1,0 1,-1 0,-1 -1,-2 -1,-2 -1,0 -2,1 -2,2 0,1 1,1 2,1z"/>
   <path class="fil156 str17" d="M1532 636c0,0 1,0 1,-1 0,-1 -1,-2 -1,-2 -1,0 -2,1 -2,2 0,1 1,1 2,1z"/>
   <path class="fil156 str17" d="M1536 580c1,0 2,-1 2,-2 0,-1 -1,-2 -2,-2 -1,0 -2,1 -2,2 0,1 1,2 2,2z"/>
   <path class="fil156 str17" d="M1536 580c1,0 2,-1 2,-2 0,-1 -1,-2 -2,-2 -1,0 -2,1 -2,2 0,1 1,2 2,2z"/>
   <path class="fil156 str0" d="M1547 563c1,0 2,-1 2,-3 0,-1 -1,-2 -2,-2 -1,0 -2,1 -2,2 0,2 1,3 2,3z"/>
   <path class="fil157 str0" d="M1557 556c-1,1 -3,1 -4,1 -7,0 -13,-5 -13,-11 0,-4 2,-8 6,-10 -1,1 -1,2 -2,3 -2,6 3,14 11,17 1,0 1,0 2,0z"/>
   <path class="fil157 str0" d="M1592 549c0,0 1,0 1,1 0,-1 -1,-1 -1,-1zm1 1l0 0c2,0 4,0 6,0 0,7 -6,13 -14,16 -11,4 -22,0 -25,-8 0,0 0,-1 0,-1 1,0 2,1 3,1 1,1 2,3 4,3 6,2 14,4 32,-11 -2,0 -4,0 -6,0z"/>
   <path class="fil97 str44" d="M1633 599c0,0 5,5 14,1"/>
   <path class="fil97 str44" d="M1633 599c0,0 5,5 14,1"/>
   <path class="fil97 str2" d="M1498 525c0,0 4,-2 4,-3"/>
   <path class="fil44 str0" d="M1509 514c0,0 8,14 20,20 12,7 13,6 13,6l0 0c1,-2 2,-3 4,-4 0,0 0,0 0,0 1,-1 2,-1 3,-2 0,0 3,-2 3,-1 -2,-1 -1,-1 -3,-2 -1,-1 -5,-1 -6,-1 -1,-1 -20,-4 -34,-16zm40 20l0 0c0,0 0,0 0,0 0,0 0,0 0,0zm0 0l0 0c1,0 1,0 1,-1 0,1 0,1 -1,1zm1 -1l0 0 0 0c0,0 0,0 0,0zm-6 6l0 0c1,-1 1,-2 2,-3 -1,1 -1,2 -2,3l0 0z"/>
   <path class="fil44 str0" d="M1623 556c0,0 13,18 16,26 3,7 6,20 5,22 3,0 5,-1 6,-2 4,-2 7,-7 5,-7 -3,-1 -6,-5 -8,-8 -1,-2 -6,-10 -9,-15 -2,-3 -10,-11 -15,-16z"/>
   <path class="fil155 str0" d="M1655 598c0,0 8,4 9,6 1,1 5,7 4,13 -2,6 -14,11 -17,12 -3,0 -10,-4 -15,-12 -2,-5 1,-9 4,-12 1,0 3,0 5,-1l0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0c0,0 0,0 0,0l0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 -1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 0 0 0 0 0c0,0 0,0 0,0l0 0c0,0 0,0 0,0l0 0 0 0 1 0 0 -1 0 0c0,0 0,0 0,0l0 0c0,0 0,0 0,0l0 0c0,0 0,0 0,0l0 0c0,0 0,0 0,0l0 0c0,0 0,0 0,0 1,0 1,0 1,0l0 0c0,0 0,0 0,0l0 0 0 0 0 0 0 0 0 0c0,0 0,0 0,0l0 0 0 0c0,0 0,-1 0,-1l0 0 0 0c0,0 1,0 1,0l0 0 0 0c0,0 0,0 0,0l0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 -1 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 -1 0 0 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 -1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0z"/>
   <path class="fil97 str2" d="M1643 614c0,0 7,1 5,9"/>
   <path class="fil97 str2" d="M1655 627c0,0 2,-5 2,-8"/>
   <path class="fil97 str2" d="M1663 623c0,0 2,-4 2,-7"/>
   <path class="fil44 str0" d="M1603 610c0,0 -9,0 -13,5 -3,6 -3,8 -3,10 -1,1 -1,-4 -2,-6 -1,-2 -2,-5 -3,-6 0,0 10,-12 21,-3z"/>
   <path class="fil1 str35" d="M1678 582c0,0 -9,11 -25,16 -16,6 -36,13 -73,12 -37,-1 -116,-4 -136,-6 -19,-1 -69,-5 -80,-7 -11,-2 -15,-8 -15,-8 0,-1 -3,-15 2,-18 6,-3 45,-8 54,-9 8,-1 44,0 50,0 6,0 26,0 34,0 8,-1 11,1 22,2 11,0 97,3 97,3 0,0 40,4 45,5 5,1 14,0 18,1 5,1 11,4 7,9z"/>
   <path class="fil158" d="M1678 582c0,0 -9,11 -25,16 -16,6 -36,13 -73,12 -37,-1 -116,-4 -136,-6 -19,-1 -69,-5 -80,-7 -11,-2 -15,-8 -15,-8 0,-1 -3,-15 2,-18 6,-3 45,-8 54,-9 8,-1 44,0 50,0 6,0 26,0 34,0 8,-1 11,1 22,2 11,0 97,3 97,3 0,0 40,4 45,5 5,1 14,0 18,1 5,1 11,4 7,9z"/>
   <path class="fil97 str33" d="M1349 586c0,0 11,5 33,6 21,1 83,8 90,8 7,0 90,5 105,5 15,-1 50,-3 74,-9"/>
   <path class="fil97 str35" d="M1349 586c0,0 11,5 33,6 21,1 83,8 90,8 7,0 90,5 105,5 15,-1 50,-3 74,-9"/>
   <path class="fil97 str33" d="M1662 572c0,0 -15,8 -38,10 -22,1 -81,3 -119,1 -38,-2 -106,-5 -126,-7"/>
   <path class="fil97 str35" d="M1662 572c0,0 -15,8 -38,10 -22,1 -81,3 -119,1 -38,-2 -106,-5 -126,-7"/>
   <path class="fil97 str33" d="M1385 570c0,0 9,-3 34,-3 25,0 34,1 42,0"/>
   <path class="fil97 str35" d="M1385 570c0,0 9,-3 34,-3 25,0 34,1 42,0"/>
   <path class="fil159 str35" d="M1534 609c-2,3 -5,9 -6,15 -2,8 -6,23 -1,24 3,1 29,1 29,1 2,-3 0,-12 0,-12 0,-1 -5,-9 -5,-17 0,-2 1,-5 2,-7 1,-2 2,-3 2,-4 -8,0 -12,0 -21,0z"/>
   <path class="fil160 str7" d="M1602 436c1,1 3,2 5,3 2,0 7,1 7,3 1,1 4,2 7,2 2,0 2,2 5,3 3,1 2,-1 3,1 2,1 4,4 5,4 2,0 1,2 5,3 -5,-6 -4,-14 -3,-17 1,-3 8,-17 8,-19 1,-2 0,-11 -7,-15 -7,-3 -15,-1 -15,4 0,5 3,9 7,10 3,2 8,1 11,1 4,0 9,-2 10,-3 1,0 -9,2 -12,1 -4,0 -13,-2 -13,-7 0,-4 4,-5 7,-4 2,1 11,8 4,17 -7,8 -16,11 -20,12 -3,1 -5,2 -14,1z"/>
   <path class="fil97 str8" d="M1635 456c0,0 -5,-11 0,-23 5,-11 10,-14 5,-22 -5,-9 -13,-7 -14,-6"/>
   <path class="fil97 str8" d="M1609 443c0,0 12,2 29,-18"/>
   <path class="fil97 str8" d="M1609 443c0,0 12,2 29,-18"/>
   <path class="fil97 str8" d="M1617 447c0,0 8,-1 19,-16"/>
   <path class="fil97 str8" d="M1630 456c0,0 -5,-9 6,-25"/>
   <g>
    <path class="fil43 str10" d="M1587 412c0,0 -5,10 -8,11 -2,1 26,18 41,16 5,0 7,0 8,-1 -1,-1 -2,-2 -3,-3 -4,-4 -12,-10 -14,-11 -2,0 -6,2 -24,-12z"/>
    <g>
     <path class="fil43 str10" d="M1587 412c0,0 -5,10 -8,11 -2,1 26,18 41,16 5,0 7,0 8,-1 -1,-1 -2,-2 -3,-3 -4,-4 -12,-10 -14,-11 -2,0 -6,2 -24,-12z"/>
     <path class="fil43 str10" d="M1635 442c0,0 2,6 5,7 3,2 8,18 5,24 -3,6 -11,19 -13,20 -2,1 15,-3 17,-24 2,-21 0,-20 -13,-30 0,0 -1,0 -1,0 0,1 0,2 0,3z"/>
     <path class="fil43 str10" d="M1635 442c0,0 2,6 5,7 3,2 8,18 5,24 -3,6 -11,19 -13,20 -2,1 15,-3 17,-24 2,-21 0,-20 -13,-30 0,0 -1,0 -1,0 0,1 0,2 0,3z"/>
     <path class="fil44 str10" d="M1637 436c2,-1 11,-3 15,-1 5,1 12,6 12,8 0,1 -5,12 -8,13 -1,1 -4,0 -7,-2 -1,-6 -5,-8 -13,-15 0,-1 0,-1 1,-2 0,0 0,0 0,-1z"/>
     <path class="fil44 str10" d="M1637 436c2,-1 11,-3 15,-1 5,1 12,6 12,8 0,1 -5,12 -8,13 -1,1 -4,0 -7,-2 -1,-6 -5,-8 -13,-15 0,-1 0,-1 1,-2 0,0 0,0 0,-1z"/>
     <path class="fil44 str10" d="M1611 424c0,0 -7,-5 -6,-10 2,-6 6,-7 11,-2 5,5 11,13 12,16 0,0 0,0 0,0 -1,1 -1,1 -1,1 -1,2 -2,3 -2,4 -1,1 -1,1 -2,1 -2,-2 -5,-5 -7,-6 -1,-1 -3,-2 -4,-3 0,0 -1,0 -1,-1zm7 -3l0 0c0,-3 -3,-6 -5,-7 -3,-1 -4,0 -2,2 2,2 7,5 7,5z"/>
     <path class="fil44 str10" d="M1611 424c0,0 -7,-5 -6,-10 2,-6 6,-7 11,-2 5,5 11,13 12,16 0,0 0,0 0,0 -1,1 -1,1 -1,1 -1,2 -2,3 -2,4 -1,1 -1,1 -2,1 -2,-2 -5,-5 -7,-6 -1,-1 -3,-2 -4,-3 0,0 -1,0 -1,-1zm7 -3l0 0c0,-3 -3,-6 -5,-7 -3,-1 -4,0 -2,2 2,2 7,5 7,5z"/>
     <path class="fil43 str10" d="M1627 429c0,0 3,-2 6,1 4,2 4,6 4,7 -1,2 -3,5 -7,2 -4,-2 -8,-5 -3,-10z"/>
     <path class="fil43 str10" d="M1627 429c0,0 3,-2 6,1 4,2 4,6 4,7 -1,2 -3,5 -7,2 -4,-2 -8,-5 -3,-10z"/>
    </g>
   </g>
   <path class="fil153" d="M1577 461c-1,-2 -5,-3 -9,-2 -4,1 -6,4 -6,6 2,-1 4,-2 6,-3 3,-1 6,-1 9,-1z"/>
   <path class="fil153" d="M1577 461c-1,-2 -5,-3 -9,-2 -4,1 -6,4 -6,6 2,-1 4,-2 6,-3 3,-1 6,-1 9,-1z"/>
   <path class="fil137 str36" d="M1623 605l-15 63 18 1 15 -70c-6,2 -11,4 -18,5l0 1z"/>
   <g>
    <g id="_1705993532000">
     <path class="fil97 str45" d="M306 145c47,0 84,37 84,84 0,46 -37,84 -84,84 -46,0 -83,-38 -83,-84 0,-47 37,-84 83,-84z"/>
     <path class="fil161" d="M305 230c0,0 1,0 1,0 0,0 0,0 0,0 1,0 1,0 1,0 0,0 1,0 1,0 0,0 0,-1 0,-1 0,0 0,0 0,0 0,-1 0,-1 0,-2 0,0 0,0 -1,0 0,0 0,0 0,0 0,0 0,0 0,0 -1,0 -1,0 -2,0 0,1 0,1 0,2 0,0 0,0 0,0 0,0 0,1 0,1z"/>
     <path class="fil161" d="M305 230c0,0 1,0 1,0 0,0 0,0 0,0 1,0 1,0 1,0 0,0 1,0 1,0 0,0 0,-1 0,-1 0,0 0,0 0,0 0,-1 0,-1 0,-2 0,0 0,0 -1,0 0,0 0,0 0,0 0,0 0,0 0,0 -1,0 -1,0 -2,0 0,1 0,1 0,2 0,0 0,0 0,0 0,0 0,1 0,1z"/>
     <g>
      <path class="fil161" d="M258 242c0,2 2,5 4,6 8,5 24,15 45,15 21,0 37,-10 44,-15 2,-1 4,-4 4,-6 0,-3 -1,-6 -3,-7 -2,-3 -6,-4 -9,-3 0,-1 0,-2 -1,-4 0,0 0,0 0,0 1,0 2,0 2,0 5,-1 7,-6 8,-7 0,0 0,-1 -1,-1 0,-1 0,-1 -1,-1 -5,0 -7,-2 -9,-7 -2,-2 -4,-6 -8,-8 -6,-4 -12,-3 -15,-1 -1,-1 -3,-2 -5,-2l-9 0c3,-7 4,-20 -1,-29 0,-1 -1,-2 -1,-2 0,0 0,-1 0,-1 0,0 0,0 0,0 -4,-4 -9,-6 -15,-6 -23,0 -25,19 -25,19 0,1 1,1 1,2 0,0 1,0 1,0l5 0c-1,5 -1,9 0,15 1,6 6,8 9,8 0,0 1,0 1,0 1,0 2,0 3,0 -1,1 -1,2 -2,3 -8,11 -10,19 -10,22 -4,-1 -7,0 -9,3 -2,1 -3,4 -3,7l0 0zm42 -42l0 0c0,0 0,0 0,1l-1 0c-3,0 -5,2 -5,5 0,3 2,5 5,6l1 12c-11,2 -17,11 -19,15 -4,-2 -6,-3 -8,-5 0,-2 1,-10 10,-22 11,-15 3,-25 3,-26 -1,0 -2,-1 -3,0 0,1 0,2 0,3 0,0 3,4 2,11 0,0 0,0 0,0 -1,2 -4,4 -7,4 -1,0 -4,-1 -5,-6 -1,-4 -2,-9 0,-15 0,-1 0,-1 -1,-1 0,-1 0,-1 -1,-1l-5 0c1,-4 5,-14 19,-15l0 5c0,1 1,1 2,1 1,0 2,0 2,-1l0 -5c3,1 6,2 9,4l-4 4c-1,0 -1,2 -1,2 1,1 1,1 2,1 0,0 1,0 1,0l4 -4c0,0 0,1 0,1 1,2 2,5 3,8l-6 0c-1,0 -1,0 -1,1 0,1 0,2 1,2l6 0c0,7 -1,13 -3,15zm29 40l0 0c-6,3 -14,5 -22,5 -9,0 -17,-2 -23,-5 2,-4 10,-13 23,-13 12,0 20,10 22,13zm-20 -17l0 0c-1,0 -2,0 -2,0 -1,0 -2,0 -3,0l-2 -11 8 0 -1 11 0 0zm6 -17l0 0c0,1 0,2 -2,2l-14 0c-1,0 -2,-1 -2,-2 0,-1 1,-2 2,-2l14 0c2,0 2,1 2,2zm4 2l0 0c15,5 20,22 21,26 -2,2 -5,3 -8,5 -2,-3 -8,-13 -20,-15l2 -12c2,-1 4,-2 5,-4zm21 16l0 0c0,-1 -1,-2 -1,-3 -5,-7 -11,-13 -18,-16 3,-1 6,-1 10,2 3,2 5,5 7,7 2,4 4,7 9,8 -1,1 -2,2 -4,3 -1,0 -2,0 -3,-1l0 0zm-78 17l0 0c-1,-1 0,-3 1,-4 2,-2 5,-2 7,-1 2,2 6,4 10,6 0,0 0,0 0,0 0,1 0,1 0,1 7,3 16,6 27,6 17,0 30,-8 36,-13 1,0 2,0 3,0 1,0 3,0 4,1 1,1 2,3 1,4 0,2 0,3 -2,4 -7,5 -23,14 -42,14 -20,0 -36,-9 -43,-14 -1,-1 -2,-2 -2,-4z"/>
      <g>
       <path class="fil161" d="M269 268c1,-1 2,-1 3,0 1,1 1,2 0,3l-3 11c0,0 0,1 -1,1 0,0 -1,0 -2,0 0,0 0,-1 0,-2l1 -2 -5 -3 -2 1c0,0 -1,0 -1,0 -1,-1 -1,-2 -1,-2 0,-1 1,-1 1,-1l10 -6zm-4 6l0 0 3 3 2 -7 0 0 -5 4 0 0z"/>
       <path class="fil161" d="M269 268c1,-1 2,-1 3,0 1,1 1,2 0,3l-3 11c0,0 0,1 -1,1 0,0 -1,0 -2,0 0,0 0,-1 0,-2l1 -2 -5 -3 -2 1c0,0 -1,0 -1,0 -1,-1 -1,-2 -1,-2 0,-1 1,-1 1,-1l10 -6zm-4 6l0 0 3 3 2 -7 0 0 -5 4 0 0z"/>
       <path class="fil161" d="M274 277c1,-1 2,-2 2,-1 1,0 1,1 1,1 1,0 2,0 3,1 2,1 3,3 2,5l-2 5c-1,1 -2,1 -2,1 -1,0 -2,-1 -1,-2l2 -5c1,-1 0,-2 -1,-3 -1,0 -2,0 -2,1l-2 5c-1,1 -2,1 -3,1 0,-1 -1,-1 0,-2l3 -7 0 0z"/>
       <path class="fil161" d="M274 277c1,-1 2,-2 2,-1 1,0 1,1 1,1 1,0 2,0 3,1 2,1 3,3 2,5l-2 5c-1,1 -2,1 -2,1 -1,0 -2,-1 -1,-2l2 -5c1,-1 0,-2 -1,-3 -1,0 -2,0 -2,1l-2 5c-1,1 -2,1 -3,1 0,-1 -1,-1 0,-2l3 -7 0 0z"/>
       <path class="fil161" d="M286 277c0,-1 1,-2 2,-1 1,0 1,1 1,2l-1 4 0 0c1,-1 2,-1 3,-1 2,1 3,3 3,5l-2 6c0,1 -1,1 -2,1 -1,0 -1,-1 -1,-2l2 -5c0,-1 -1,-2 -2,-3 -1,0 -2,1 -2,2l-1 5c-1,1 -1,1 -2,1 -1,0 -2,-1 -1,-2l3 -12 0 0z"/>
       <path class="fil161" d="M286 277c0,-1 1,-2 2,-1 1,0 1,1 1,2l-1 4 0 0c1,-1 2,-1 3,-1 2,1 3,3 3,5l-2 6c0,1 -1,1 -2,1 -1,0 -1,-1 -1,-2l2 -5c0,-1 -1,-2 -2,-3 -1,0 -2,1 -2,2l-1 5c-1,1 -1,1 -2,1 -1,0 -2,-1 -1,-2l3 -12 0 0z"/>
       <path class="fil161" d="M298 289c0,2 1,3 3,3 1,0 2,-1 3,-1 1,0 1,1 1,1 0,2 -3,3 -5,2 -3,0 -5,-2 -5,-6 0,-3 3,-5 6,-5 3,0 5,3 5,6 0,1 -1,1 -2,1l-6 -1 0 0zm5 -1l0 0c0,-1 -1,-3 -2,-3 -2,0 -3,1 -3,2l5 1 0 0z"/>
       <path class="fil161" d="M298 289c0,2 1,3 3,3 1,0 2,-1 3,-1 1,0 1,1 1,1 0,2 -3,3 -5,2 -3,0 -5,-2 -5,-6 0,-3 3,-5 6,-5 3,0 5,3 5,6 0,1 -1,1 -2,1l-6 -1 0 0zm5 -1l0 0c0,-1 -1,-3 -2,-3 -2,0 -3,1 -3,2l5 1 0 0z"/>
       <path class="fil161" d="M307 280c0,-1 0,-2 1,-2 1,0 2,1 2,2l0 13c0,1 0,1 -1,1 -1,0 -2,0 -2,-1l0 -13z"/>
       <path class="fil161" d="M307 280c0,-1 0,-2 1,-2 1,0 2,1 2,2l0 13c0,1 0,1 -1,1 -1,0 -2,0 -2,-1l0 -13z"/>
       <path class="fil161" d="M316 280c0,-1 0,-1 1,-2 1,0 2,1 2,1l1 5 4 -7c0,0 0,-1 1,-1 0,0 1,0 2,1 0,1 0,1 -1,2l-3 5 6 3c1,1 1,1 2,2 0,0 -1,1 -1,1 -1,1 -2,0 -2,0l-7 -4 1 5c1,1 0,2 -1,2 0,0 -1,0 -2,-1l-3 -12z"/>
       <path class="fil161" d="M316 280c0,-1 0,-1 1,-2 1,0 2,1 2,1l1 5 4 -7c0,0 0,-1 1,-1 0,0 1,0 2,1 0,1 0,1 -1,2l-3 5 6 3c1,1 1,1 2,2 0,0 -1,1 -1,1 -1,1 -2,0 -2,0l-7 -4 1 5c1,1 0,2 -1,2 0,0 -1,0 -2,-1l-3 -12z"/>
       <path class="fil161" d="M330 275c0,0 0,2 -1,2 -1,0 -2,0 -2,-1 0,-1 0,-2 1,-2 1,-1 2,0 2,1zm-1 5l0 0c0,-1 0,-2 1,-2 0,0 1,0 2,1l3 7c1,1 0,2 -1,2 0,1 -1,0 -2,-1l-3 -7z"/>
       <path class="fil161" d="M330 275c0,0 0,2 -1,2 -1,0 -2,0 -2,-1 0,-1 0,-2 1,-2 1,-1 2,0 2,1zm-1 5l0 0c0,-1 0,-2 1,-2 0,0 1,0 2,1l3 7c1,1 0,2 -1,2 0,1 -1,0 -2,-1l-3 -7z"/>
       <path class="fil161" d="M346 279c1,1 1,2 0,3 -1,0 -1,0 -2,-1 0,2 -1,2 -2,3 -2,2 -5,0 -7,-2 -1,-3 -2,-6 1,-8 1,0 2,0 3,0l-2 -4c-1,-1 -1,-1 0,-2 1,0 2,0 2,1l7 10zm-8 -3l0 0c-1,1 -1,3 0,4 0,1 2,2 3,2 2,-1 1,-3 0,-4 0,-2 -2,-2 -3,-2z"/>
       <path class="fil161" d="M346 279c1,1 1,2 0,3 -1,0 -1,0 -2,-1 0,2 -1,2 -2,3 -2,2 -5,0 -7,-2 -1,-3 -2,-6 1,-8 1,0 2,0 3,0l-2 -4c-1,-1 -1,-1 0,-2 1,0 2,0 2,1l7 10zm-8 -3l0 0c-1,1 -1,3 0,4 0,1 2,2 3,2 2,-1 1,-3 0,-4 0,-2 -2,-2 -3,-2z"/>
       <path class="fil161" d="M349 269c0,0 -2,0 -3,1 0,0 0,1 0,1 1,1 5,-3 7,0 1,1 1,4 -1,6 -1,1 -3,2 -4,1 -1,-1 -1,-2 0,-2 1,-1 2,-1 3,-2 0,0 0,-1 0,-1 -1,-1 -5,3 -7,0 -1,-1 -1,-4 1,-5 1,-1 3,-2 4,-1 0,0 0,1 0,2z"/>
       <path class="fil161" d="M349 269c0,0 -2,0 -3,1 0,0 0,1 0,1 1,1 5,-3 7,0 1,1 1,4 -1,6 -1,1 -3,2 -4,1 -1,-1 -1,-2 0,-2 1,-1 2,-1 3,-2 0,0 0,-1 0,-1 -1,-1 -5,3 -7,0 -1,-1 -1,-4 1,-5 1,-1 3,-2 4,-1 0,0 0,1 0,2z"/>
      </g>
     </g>
     <path class="fil162" d="M252 148l8 -4c1,-1 1,-2 1,-2l0 0c-1,-1 -2,-2 -3,-1l-7 4c-1,1 -1,2 -1,3l0 0c1,0 2,1 2,0z"/>
     <path class="fil162" d="M233 165l7 -6c0,-1 0,-2 0,-3l0 0c-1,0 -2,0 -3,0l-6 7c-1,0 -1,1 0,2l0 0c1,0 2,0 2,0z"/>
     <path class="fil162" d="M219 186l5 -8c0,0 0,-2 -1,-2l0 0c-1,0 -2,0 -2,1l-4 7c-1,1 -1,2 0,3l0 0c1,0 2,0 2,-1z"/>
     <path class="fil162" d="M211 210l3 -9c0,-1 -1,-1 -2,-2l0 0c0,0 -1,1 -2,2l-2 8c0,1 0,2 1,2l0 0c1,0 2,0 2,-1z"/>
     <path class="fil162" d="M210 235l0 -9c0,-1 -1,-1 -2,-1l0 0c-1,0 -2,0 -2,1l0 9c0,1 1,2 2,2l0 0c1,0 2,-1 2,-2z"/>
     <path class="fil162" d="M215 260l-3 -9c0,0 -1,-1 -2,-1l0 0c0,1 -1,1 -1,2l3 9c0,1 1,1 2,1l0 0c0,0 1,-1 1,-2z"/>
     <path class="fil162" d="M226 283l-5 -8c0,-1 -1,-1 -2,-1l0 0c0,1 -1,2 0,3l4 7c1,1 2,1 2,1l0 0c1,-1 1,-2 1,-2z"/>
     <path class="fil162" d="M243 302l-7 -7c0,0 -1,0 -2,0l0 0c0,1 0,2 0,3l6 6c1,1 2,1 3,0l0 0c0,-1 0,-2 0,-2z"/>
     <path class="fil162" d="M264 316l-8 -5c-1,0 -2,0 -2,1l0 0c-1,1 0,2 0,2l8 5c1,0 2,0 2,-1l0 0c1,-1 1,-2 0,-2z"/>
     <path class="fil162" d="M288 324l-9 -2c-1,-1 -2,0 -2,1l0 0c0,1 0,1 1,2l9 2c1,0 2,0 2,-1l0 0c0,-1 0,-2 -1,-2z"/>
     <path class="fil162" d="M313 325l-9 0c-1,0 -2,1 -2,2l0 0c0,1 1,2 2,2l9 0c1,0 2,-1 2,-2l0 0c0,-1 -1,-2 -2,-2z"/>
     <path class="fil162" d="M338 320l-9 3c-1,0 -1,1 -1,2l0 0c0,1 1,1 2,1l9 -2c1,-1 1,-2 1,-2l0 0c0,-1 -1,-2 -2,-2z"/>
     <path class="fil162" d="M360 309l-7 5c-1,0 -1,1 -1,2l0 0c1,1 2,1 2,0l8 -4c1,-1 1,-1 1,-2l0 0c-1,-1 -2,-1 -3,-1z"/>
     <path class="fil162" d="M379 292l-6 7c0,0 0,1 0,2l0 0c1,1 2,1 2,0l7 -6c0,-1 0,-2 0,-3l0 0c-1,0 -2,0 -3,0z"/>
     <path class="fil162" d="M394 271l-5 8c0,1 0,2 1,2l0 0c0,1 1,0 2,0l4 -8c1,-1 0,-2 0,-2l0 0c-1,-1 -2,0 -2,0z"/>
     <path class="fil162" d="M402 247l-3 9c0,1 1,2 2,2l0 0c0,0 1,0 1,-1l3 -9c0,-1 -1,-2 -1,-2l0 0c-1,0 -2,1 -2,1z"/>
     <path class="fil162" d="M403 222l0 9c0,1 1,2 2,2l0 0c1,0 1,-1 1,-2l0 -9c0,-1 0,-2 -1,-2l0 0c-1,0 -2,1 -2,2z"/>
     <path class="fil162" d="M398 197l3 9c0,1 1,1 2,1l0 0c0,0 1,-1 1,-2l-3 -9c0,-1 -1,-1 -2,-1l0 0c0,0 -1,1 -1,2z"/>
     <path class="fil162" d="M387 175l4 7c1,1 2,1 3,1l0 0c0,-1 1,-2 0,-2l-4 -8c-1,-1 -2,-1 -2,-1l0 0c-1,1 -1,2 -1,3z"/>
     <path class="fil162" d="M370 156l7 6c0,1 1,1 2,0l0 0c0,-1 0,-2 0,-2l-6 -7c-1,0 -2,0 -3,0l0 0c0,1 0,2 0,3z"/>
     <path class="fil162" d="M349 142l8 4c1,0 2,0 2,-1l0 0c1,0 0,-1 -1,-2l-7 -4c-1,-1 -2,0 -2,0l0 0c-1,1 -1,2 0,3z"/>
     <path class="fil162" d="M275 137l9 -2c1,-1 1,-2 1,-2l0 0c0,-1 -1,-2 -2,-2l-9 3c-1,0 -1,1 -1,2l0 0c0,1 1,1 2,1z"/>
     <path class="fil162" d="M325 133l9 3c1,0 1,-1 2,-1l0 0c0,-1 -1,-2 -1,-2l-9 -3c-1,0 -2,1 -2,1l0 0c0,1 0,2 1,2z"/>
     <path class="fil162" d="M300 132l9 0c1,0 1,-1 1,-2l0 0c0,-1 0,-1 -1,-1l-9 0c-1,0 -2,0 -2,1l0 0c0,1 1,2 2,2z"/>
    </g>
   </g>
   <g class="soska2">
    <path class="fil163 str17" d="M1555 541c0,0 -1,-1 -3,-3 1,-1 2,-2 4,-3 -1,-1 -1,-2 -1,-3 -2,1 -5,1 -7,3 -3,-3 -5,-7 -6,-11 -1,-10 4,-15 7,-17 2,-1 8,-3 14,2 6,5 16,8 19,8 3,0 13,3 14,9 1,6 -1,13 -9,18 -3,2 -7,3 -11,3 0,-3 -2,-5 -4,-8 -1,1 -1,1 -2,2 0,1 0,3 0,5 0,1 -1,1 -1,1 -4,-1 -9,-3 -14,-6z"/>
    <path class="fil164 str0" d="M1566 530c5,1 7,5 6,8 -1,3 -6,4 -10,2 -5,-1 -8,-5 -6,-8 1,-3 5,-4 10,-2z"/>
    <path class="fil165 str0" d="M1569 524c6,3 10,9 9,13 -1,2 -3,3 -5,4 0,-1 -1,-1 -1,-2 0,0 0,0 0,-1 1,-3 -1,-7 -6,-8 -5,-2 -9,-1 -10,2 0,0 -1,0 -1,0 0,0 -1,1 -1,1 -1,-2 -1,-4 0,-6 1,-4 8,-5 15,-3zm1 17l0 0c0,0 0,0 0,0 -1,0 -2,0 -3,0 1,0 2,1 3,0zm-14 -6l0 0c0,0 0,0 0,0 0,0 0,0 -1,0 1,1 1,1 1,1 0,0 0,-1 0,-1z"/>
    <path class="fil163 str0" d="M1572 539c3,4 5,8 3,12 -2,6 -11,8 -20,5 -8,-3 -13,-11 -11,-17 2,-4 6,-6 11,-7 0,1 0,2 1,3 -2,1 -4,2 -4,4 -2,4 1,9 6,11 5,2 10,1 12,-4 0,-2 0,-4 0,-5 1,-1 1,-1 2,-2z"/>
   </g>
   <g class="soska">
    <path class="fil166" d="M732 737c-6,4 -3,13 0,17 11,15 27,10 30,9 18,-4 19,-13 19,-20 0,-7 -4,-10 -13,-10 -3,0 -8,3 -14,3 -8,0 -15,-4 -22,1z"/>
    <path class="fil97 str18" d="M732 737c-6,4 -3,13 0,17 11,15 27,10 30,9 18,-4 19,-13 19,-20 0,-7 -4,-10 -13,-10 -3,0 -8,3 -14,3 -8,0 -15,-4 -22,1"/>
    <path class="fil97 str18" d="M749 758c-5,3 -8,6 -7,10 0,6 7,11 16,10 8,0 15,-5 15,-11 0,-4 -3,-7 -8,-9 0,1 0,1 -1,2 1,1 2,3 2,5 0,4 -4,8 -9,8 -5,0 -9,-3 -9,-8 0,-1 1,-3 2,-4 -1,-1 -1,-2 -1,-3"/>
    <path class="fil167 str46" d="M756 746c-7,1 -12,4 -12,9 0,2 1,3 3,4 0,0 1,0 2,-1 0,0 0,0 0,0 -1,-3 3,-6 7,-6 5,0 9,2 9,5 0,0 0,1 0,1 0,0 1,0 1,0 1,-1 2,-2 2,-4 0,-4 -5,-8 -12,-8zm-7 15l0 0c1,0 2,1 3,1 -1,-1 -2,-1 -2,-2 0,1 0,1 -1,1zm15 -1l0 0c0,0 -1,0 -1,1 0,0 1,-1 1,-1 0,0 0,0 0,0 0,0 0,0 0,0z"/>
    <path class="fil99" d="M757 752c-5,0 -9,3 -8,6 0,3 3,5 8,5 4,0 8,-3 8,-6 0,-3 -4,-5 -8,-5z"/>
    <path class="fil166" d="M749 758c-5,3 -8,6 -7,10 0,6 7,11 16,10 8,0 15,-5 15,-11 0,-4 -3,-7 -8,-9 0,1 0,1 -1,2 1,1 2,3 2,5 0,4 -4,8 -9,8 -5,0 -9,-3 -9,-8 0,-1 1,-3 2,-5 -1,0 -1,-1 -1,-2z"/>
   </g>
   <g>
    <g class="soska">
     <path class="fil168 str0" d="M358 441c-7,4 -5,14 -1,19 11,17 29,12 33,12 19,-5 21,-14 21,-22 0,-7 -4,-12 -13,-12 -4,0 -9,3 -16,3 -9,0 -16,-5 -24,0z"/>
     <g>
      <g>
       <path class="fil168 str0" d="M358 441c-7,4 -5,14 -1,19 11,17 29,12 33,12 19,-5 21,-14 21,-22 0,-7 -4,-12 -13,-12 -4,0 -9,3 -16,3 -9,0 -16,-5 -24,0z"/>
       <path class="fil168 str0" d="M375 466c-5,2 -8,6 -8,10 0,6 7,12 17,12 9,0 17,-5 17,-12 0,-4 -3,-8 -8,-10 0,1 -1,1 -1,2 1,1 2,3 2,5 0,5 -5,9 -10,9 -6,0 -10,-4 -10,-9 0,-2 1,-4 2,-5 0,-1 -1,-2 -1,-2z"/>
       <path class="fil168 str0" d="M375 466c-5,2 -8,6 -8,10 0,6 7,12 17,12 9,0 17,-5 17,-12 0,-4 -3,-8 -8,-10 0,1 -1,1 -1,2 1,1 2,3 2,5 0,5 -5,9 -10,9 -6,0 -10,-4 -10,-9 0,-2 1,-4 2,-5 0,-1 -1,-2 -1,-2z"/>
       <path class="fil169 str0" d="M383 453c-7,0 -13,4 -13,8 0,2 1,4 3,6 0,-1 1,-1 2,-1 0,-1 0,-1 0,-1 0,-4 4,-6 9,-6 5,0 9,3 9,6 0,0 0,0 0,1 0,0 1,0 1,0 2,-1 2,-3 2,-4 1,-5 -5,-9 -13,-9zm-7 15l0 0c1,1 2,1 3,2 -1,-1 -2,-2 -3,-2 0,0 0,0 0,0zm16 0l0 0c0,0 -1,0 -1,1 0,0 1,-1 1,-1 0,0 0,0 0,0 0,0 0,0 0,0z"/>
       <path class="fil169 str0" d="M383 453c-7,0 -13,4 -13,8 0,2 1,4 3,6 0,-1 1,-1 2,-1 0,-1 0,-1 0,-1 0,-4 4,-6 9,-6 5,0 9,3 9,6 0,0 0,0 0,1 0,0 1,0 1,0 2,-1 2,-3 2,-4 1,-5 -5,-9 -13,-9zm-7 15l0 0c1,1 2,1 3,2 -1,-1 -2,-2 -3,-2 0,0 0,0 0,0zm16 0l0 0c0,0 -1,0 -1,1 0,0 1,-1 1,-1 0,0 0,0 0,0 0,0 0,0 0,0z"/>
      </g>
     </g>
     <path class="fil170 str0" d="M384 459c-5,0 -9,3 -9,6 0,3 4,6 9,6 5,0 9,-2 9,-6 0,-3 -4,-6 -9,-6z"/>
     <path class="fil170 str0" d="M384 459c-5,0 -9,3 -9,6 0,3 4,6 9,6 5,0 9,-2 9,-6 0,-3 -4,-6 -9,-6z"/>
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
    <?php if($header['create_a_case'] != null){ ?>
    <a href="<?php echo $header['create_a_case_url'];?>" class="button"><?php echo $header['create_a_case'];?></a>
        <?php } ?>
    <?php } ?>
</header>
