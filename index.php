<?php
$versiyon['bir'] = rand(0,4);
$versiyon['iki'] = rand(0,9);
$versiyon['uc'] = rand(0,9);
$versiyon = $versiyon['bir'] . "." . $versiyon['iki'] . ".". $versiyon['uc'] . rand(0,9);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Serdarortaçatör v.<?=$versiyon?></title>
    <style>
        p {font-size:13px; line-height: 13px;}
    </style>
</head>
<body>

    <div style="width:100%;max-width:300px;margin:auto;">
        
            <?php if(!empty($_GET['bs'])){ ?><div style="width:100%;max-width:300px;padding:15px;float:left;border:1px solid #ececec;border-radius:10px;box-sizing:border-box;"><?php
                $a[] = array("AŞK", "YARALI", "BAK", "OFF", "HEY", "DELİYİM", "KIZIL","YARALI");
                $a[] = array("BU", "MÜZESİ", "YÜREĞİM", "BU YAZ", "DÖRT YANIM", "RÜYALAR", "ÖTESİ","MÜZESİ");
                $a[] = array("KIZILÖTESİ", "ÖZLER SENİ", "ALEV ALEV", "TOZ DUMAN", "KAVRULDU", "DELİK DEŞİK","YARALI","BEDENİ");
                $a_string = "";
                for ($i = 0; $i < 4; $i++ ){
                    $a_string .= "<p>";
                    foreach($a as $sutun)
                        $a_string .= " " . $sutun[array_rand($sutun)];    
                    $a_string .= "</p>";
                }
                echo $a_string . "<br>";
            
                $b[] = array("BİTTİM", "GİTTİN", "SENSİZ", "ŞİMDİ", "YALNIZ", "SONUNDA");
                $b[] = array("OLDUM", "GÖNÜL", "CANIM", "DÜNYAM", "RUHUM", "AKLIM");
                $b[] = array("DİVANE", "AVARE", "VİRANE", "BİÇARE", "AMADE", "PERVANE");
                $b_string = "";
                for ($i = 0; $i < 4; $i++ ){
                    $b_string .= "<p>";
                    foreach($b as $sutun)
                        $b_string .= " " . $sutun[array_rand($sutun)];    
                    $b_string .= "</p>";
                }
                echo $b_string . "<br>";
                $c[] = array("E HADİ", "KIZ SEN", "BU GECE", "A CANIM", "DELİ YAR", "SEBEBİM");
                $c[] = array("FİKRİMİ", "TENİMİ", "AŞKIMI", "KALBİMİ", "ÖMRÜMÜ", "SEVDAMI");
                $c[] = array("BENDEN ÇAL", "SÜRGÜNE SAL", "YOLLARA VUR", "DAĞIT, SAVUR", "ATEŞE AT", "RUHUNA KAT");
                $c_string = "";
                for ($i = 0; $i < 4; $i++ ){
                    $c_string .= "<p>";
                    foreach($c as $sutun)
                        $c_string .= " " . $sutun[array_rand($sutun)];    
                    $c_string .= "</p>";
                }
                echo $c_string;
            
                ?>

                </div>

            <?php } ?>

        <div style="width:100%;max-width:300px;padding:0 15px;margin:15px 0;float:left;border:1px solid #ececec;border-radius:10px;box-sizing:border-box;">

            <h2>serdarortaçatör v.<?=$versiyon?></h2>
            <p>Warning (!) 18+ Content</p>
            <form action="serdarortacator.php" method="get"><input type="submit" name="bs" style="width:100%;height:35px;background:#2C3E50;color:#fff;text-align:center;border-radius:5px;border:0px;" value="Serdar Ortaç Şarkısı Oluştur" id="biseyolmaz"/></form>

        </div>

    </div>

</body>
</html>