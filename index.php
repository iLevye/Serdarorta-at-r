<?

$versiyon['bir'] = rand(0,4);
$versiyon['iki'] = rand(0,9);
$versiyon['uc'] = rand(0,9);
$versiyon = $versiyon['bir'] . "." . $versiyon['iki'] . ".". $versiyon['uc'] . rand(0,9);

?>
<html>
<head>
    <meta charset="utf-8">
    <title>serdarortaçatör v.<?=$versiyon?></title>
    <style>
        p {font-size:13px; line-height: 13px;}
    </style>
</head>
<body>

    <h2>serdarortaçatör v.<?=$versiyon?></h2>
    <p>doktor biz bu serdarortaçatörü yaptık ama ortalğa salsak nolur bilemiyorum</p>
    <form action="." method="get"><input type="submit" name="bs" value="bişey olmaz" id="biseyolmaz"/></form>
    
    <?
    //$sayac = fopen("sayac.txt", "w");
    if(!empty($_GET['bs'])){

        $a[] = array("YAR", "AH", "BAK", "OFF", "HEY", "DELİYİM");
        $a[] = array("BU BEDEN", "YATAĞIM", "YÜREĞİM", "BU YAZ", "DÖRT YANIM", "RÜYALAR");
        $a[] = array("BUZ KESTİ", "ÖZLER SENİ", "ALEV ALEV", "TOZ DUMAN", "KAVRULDU", "DELİK DEŞİK");

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

        <br><br><p style="color:red;">çok yakında nota ve gamlarıyla...</p>

    <?}?>


</body>
</html>
