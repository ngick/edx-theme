<html>
<head>
<title>VideoPlayer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
<?php
     $path="http://www.cup.gr/Files/files/QM_videos/";
        if ($_REQUEST["show"]=="m1_1") $vid='m1_1vh';
        if ($_REQUEST["show"]=="m1_2") $vid='m1_2h';
        if ($_REQUEST["show"]=="m1_3") $vid='m1_3vh';
        if ($_REQUEST["show"]=="m1_4") $vid='m1_4h';
        if ($_REQUEST["show"]=="m1_5") $vid='m1_5vh';

        if ($_REQUEST["show"]=="m2_1") $vid='m2_1h';
        if ($_REQUEST["show"]=="m2_2") $vid='m2_2h';
        if ($_REQUEST["show"]=="m2_3") $vid='m2_3vh';
        if ($_REQUEST["show"]=="m2_4") $vid='m2_4h';
        if ($_REQUEST["show"]=="m2_5") $vid='m2_5h';
        if ($_REQUEST["show"]=="m2_6") $vid='m2_6h';
        if ($_REQUEST["show"]=="m2_7") $vid='m2_7vh';
        if ($_REQUEST["show"]=="m2_8") $vid='m2_8h';
        if ($_REQUEST["show"]=="m2_9") $vid='m2_9h';
        if ($_REQUEST["show"]=="m2_10") $vid='m2_10h';

	if ($_REQUEST["show"]=="m3_1") $vid='m3_1vh';
        if ($_REQUEST["show"]=="m3_2") $vid='m3_2h';
        if ($_REQUEST["show"]=="m3_3") $vid='m3_3h';

        if ($_REQUEST["show"]=="m4_1") $vid='m4_1vh';
        if ($_REQUEST["show"]=="m4_2") $vid='m4_2h';
        if ($_REQUEST["show"]=="m4_3") $vid='m4_3h';
        if ($_REQUEST["show"]=="m4_4") $vid='m4_4vh';
        if ($_REQUEST["show"]=="m4_5") $vid='m4_5h';
        if ($_REQUEST["show"]=="m4_6") $vid='m4_6h';

        if ($_REQUEST["show"]=="m5_1") $vid='m5_1h';
        if ($_REQUEST["show"]=="m5_2") $vid='m5_2h';
        if ($_REQUEST["show"]=="m5_3") $vid='m5_3h';

        if ($_REQUEST["show"]=="m6_1") $vid='m6_1vh';
        if ($_REQUEST["show"]=="m6_2") $vid='m6_2vh';
        if ($_REQUEST["show"]=="m6_3") $vid='m6_3h';
        if ($_REQUEST["show"]=="m6_4") $vid='m6_4h';

        if ($_REQUEST["show"]=="m8_1") $vid='m8_1h';
        if ($_REQUEST["show"]=="m8_2") $vid='m8_2h';
        if ($_REQUEST["show"]=="m8_3") $vid='m8_3vh';
        if ($_REQUEST["show"]=="m8_4") $vid='m8_4h';
        if ($_REQUEST["show"]=="m8_5") $vid='m8_5h';

        if ($_REQUEST["show"]=="m10_1") $vid='m10_1vh';
        if ($_REQUEST["show"]=="m10_2") $vid='m10_2h';
        if ($_REQUEST["show"]=="m10_3") $vid='m10_3h';
        if ($_REQUEST["show"]=="m10_4") $vid='m10_4vh';
        if ($_REQUEST["show"]=="m10_5") $vid='m10_5h';
        if ($_REQUEST["show"]=="m10_6") $vid='m10_6h';

        if ($_REQUEST["show"]=="m11_1") $vid='m11_1h';
        if ($_REQUEST["show"]=="m11_2") $vid='m11_2h';
        if ($_REQUEST["show"]=="m11_3") $vid='m11_3h';
        if ($_REQUEST["show"]=="m11_4") $vid='m11_4h';
        if ($_REQUEST["show"]=="m11_5") $vid='m11_5h';

	if ($_REQUEST["show"]=="m12_1") $vid='m12_1h';
	if ($_REQUEST["show"]=="m12_2") $vid='m12_2h';

        if ($_REQUEST["show"]=="m13_1") $vid='m13_1h';
        if ($_REQUEST["show"]=="m13_2") $vid='m13_2h';
        if ($_REQUEST["show"]=="m13_3") $vid='m13_3h';
        if ($_REQUEST["show"]=="m13_4") $vid='m13_4h';
        if ($_REQUEST["show"]=="m13_5") $vid='m13_5h';

        if ($_REQUEST["show"]=="m14_1") $vid='m14_1vh';
        if ($_REQUEST["show"]=="m14_2") $vid='m14_2h';
        if ($_REQUEST["show"]=="m14_3") $vid='m14_3h';
        if ($_REQUEST["show"]=="m14_4") $vid='m14_4h';
        if ($_REQUEST["show"]=="m14_5") $vid='m14_5h';

        if ($_REQUEST["show"]=="m15_1") $vid='m15_1h';
        if ($_REQUEST["show"]=="m15_2") $vid='m15_2h';
        if ($_REQUEST["show"]=="m15_3") $vid='m15_3h';
        if ($_REQUEST["show"]=="m15_4") $vid='m15_4h';
        if ($_REQUEST["show"]=="m15_5") $vid='m15_5h';

        if ($_REQUEST["show"]=="m16_1") $vid='m16_1h';
        if ($_REQUEST["show"]=="m16_2") $vid='m16_2h';
        if ($_REQUEST["show"]=="m16_3") $vid='m16_3h';
        if ($_REQUEST["show"]=="m16_4") $vid='m16_4h';
        if ($_REQUEST["show"]=="m16_5") $vid='m16_5h';
        if ($_REQUEST["show"]=="m16_6") $vid='m16_6h';

        if ($_REQUEST["show"]=="m17_1") $vid='m17_1vh';
        if ($_REQUEST["show"]=="m17_2") $vid='m17_2h';
        if ($_REQUEST["show"]=="m17_3") $vid='m17_3h';
        if ($_REQUEST["show"]=="m17_4") $vid='m17_4vh';

        if ($_REQUEST["show"]=="m18_1") $vid='m18_1vh';
        if ($_REQUEST["show"]=="m18_2") $vid='m18_2h';
        if ($_REQUEST["show"]=="m18_3") $vid='m18_3h';
        if ($_REQUEST["show"]=="m18_4") $vid='m18_4h';
        if ($_REQUEST["show"]=="m18_5") $vid='m18_5h';

        if ($_REQUEST["show"]=="m19_1") $vid='m19_1h';
        if ($_REQUEST["show"]=="m19_2") $vid='m19_2h';
        if ($_REQUEST["show"]=="m19_3") $vid='m19_3h';
        if ($_REQUEST["show"]=="m19_4") $vid='m19_4h';
        if ($_REQUEST["show"]=="m19_5") $vid='m19_5h';
        if ($_REQUEST["show"]=="m19_6") $vid='m19_6h';

        if ($_REQUEST["show"]=="m20_1") $vid='m20_1h';
        if ($_REQUEST["show"]=="m20_2") $vid='m20_2vh';
        if ($_REQUEST["show"]=="m20_3") $vid='m20_3h';

        if ($_REQUEST["show"]=="m21_1") $vid='m21_1h';
        if ($_REQUEST["show"]=="m21_2") $vid='m21_2h';
        if ($_REQUEST["show"]=="m21_3") $vid='m21_3h';
        if ($_REQUEST["show"]=="m21_4") $vid='m21_4h';
        if ($_REQUEST["show"]=="m21_5") $vid='m21_5h';

        if ($_REQUEST["show"]=="m22_1") $vid='m22_1h';
        if ($_REQUEST["show"]=="m22_2") $vid='m22_2h';
        if ($_REQUEST["show"]=="m22_3") $vid='m22_3h';

        if ($_REQUEST["show"]=="m23_1") $vid='m23_1h';
        if ($_REQUEST["show"]=="m23_2") $vid='m23_2h';
        if ($_REQUEST["show"]=="m23_3") $vid='m23_3h';

        if ($_REQUEST["show"]=="m24_1") $vid='m24_1vh';
        if ($_REQUEST["show"]=="m24_2") $vid='m24_2h';
        if ($_REQUEST["show"]=="m24_3") $vid='m24_3h';

        if ($_REQUEST["show"]=="m25_1") $vid='m25_1h';
        if ($_REQUEST["show"]=="m25_2") $vid='m25_2h';
        if ($_REQUEST["show"]=="m25_3") $vid='m25_3h';
        if ($_REQUEST["show"]=="m25_4") $vid='m25_4h';
        if ($_REQUEST["show"]=="m25_5") $vid='m25_5h';

        if ($_REQUEST["show"]=="m26_1") $vid='m26_1h';
        if ($_REQUEST["show"]=="m26_2") $vid='m26_2h';
        if ($_REQUEST["show"]=="m26_3") $vid='m26_3h';
        if ($_REQUEST["show"]=="m26_4") $vid='m26_4h';
        if ($_REQUEST["show"]=="m26_5") $vid='m26_5h';

        if ($_REQUEST["show"]=="m28_1") $vid='m28-11_3-00h00m00s-00h25m58s';

        if ($_REQUEST["show"]=="m29_1") $vid='m29_1vh';
        if ($_REQUEST["show"]=="m29_2") $vid='m29_2h';
        if ($_REQUEST["show"]=="m29_3") $vid='m29_3h';

        if ($_REQUEST["show"]=="m30_1") $vid='m30_1h';
        if ($_REQUEST["show"]=="m30_2") $vid='m30_2h';
        if ($_REQUEST["show"]=="m30_3") $vid='m30_3h';
        if ($_REQUEST["show"]=="m30_4") $vid='m30_4h';
        if ($_REQUEST["show"]=="m30_5") $vid='m30_5vh';
        if ($_REQUEST["show"]=="m30_6") $vid='m30_6h';

        if ($_REQUEST["show"]=="m32_1") $vid='m32_1h';
        if ($_REQUEST["show"]=="m32_2") $vid='m32_2h';
        if ($_REQUEST["show"]=="m32_3") $vid='m32_3h';
        if ($_REQUEST["show"]=="m32_4") $vid='m32_4h';
        if ($_REQUEST["show"]=="m32_5") $vid='m32_5h';
        if ($_REQUEST["show"]=="m32_6") $vid='m32_6h';
        if ($_REQUEST["show"]=="m32_7") $vid='m32_7h';
        if ($_REQUEST["show"]=="m32_8") $vid='m32_8h';

        if ($_REQUEST["show"]=="m34_1") $vid='m34_1h';
        if ($_REQUEST["show"]=="m34_2") $vid='m34_2vh';
        if ($_REQUEST["show"]=="m34_3") $vid='m34_3h';
        if ($_REQUEST["show"]=="m34_4") $vid='m34_4h';

        if ($_REQUEST["show"]=="m35_1") $vid='m35_1vh';
        if ($_REQUEST["show"]=="m35_2") $vid='m35_2h';
        if ($_REQUEST["show"]=="m35_3") $vid='m35_3h';

        if ($_REQUEST["show"]=="m38_1") $vid='m38_1h';
        if ($_REQUEST["show"]=="m38_2") $vid='m38_2vh';
        if ($_REQUEST["show"]=="m38_3") $vid='m38_3h';
        if ($_REQUEST["show"]=="m38_4") $vid='m38_4h';
        if ($_REQUEST["show"]=="m38_5") $vid='m38_5h';
        if ($_REQUEST["show"]=="m38_6") $vid='m38_6h';
        if ($_REQUEST["show"]=="m38_7") $vid='m38_7h';


        if ($_REQUEST["show"]=="m39_1") $vid='m39_1h';
        if ($_REQUEST["show"]=="m39_2") $vid='m39_2h';
        if ($_REQUEST["show"]=="m39_3") $vid='m39_3h';
        if ($_REQUEST["show"]=="m39_4") $vid='m39_4h';

        if ($_REQUEST["show"]=="m40_1") $vid='m40_1h';
        if ($_REQUEST["show"]=="m40_2") $vid='m40_2h';
        if ($_REQUEST["show"]=="m40_3") $vid='m40_3h';
        if ($_REQUEST["show"]=="m40_4") $vid='m40_4h';
        if ($_REQUEST["show"]=="m40_5") $vid='m40_5h';
        if ($_REQUEST["show"]=="m40_6") $vid='m40_6h';
        if ($_REQUEST["show"]=="m40_7") $vid='m40_7h';
        
        
        if ($_REQUEST["show"]=="k1_1") $vid='140317A';
        if ($_REQUEST["show"]=="k1_2") $vid='140317B';        
        if ($_REQUEST["show"]=="k2_1") $vid='140318A';
        if ($_REQUEST["show"]=="k2_2") $vid='140318B';

?>
 <video controls="controls" height="360" width="640"> <source src="<?php echo $path; echo $vid ?>.mp4" type="video/mp4" /> </video>
</body>
 </html>