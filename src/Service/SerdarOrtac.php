<?php


namespace App\Services;


class SerdarOrtac
{
    function generate(){
        $output = '';
        $a[] = array("AŞK", "YARALI", "BAK", "OFF", "HEY", "DELİYİM", "KIZIL","YARALI");
        $a[] = array("BU", "MÜZESİ", "YÜREĞİM", "BU YAZ", "DÖRT YANIM", "RÜYALAR", "ÖTESİ","MÜZESİ");
        $a[] = array("KIZILÖTESİ", "ÖZLER SENİ", "ALEV ALEV", "TOZ DUMAN", "KAVRULDU", "DELİK DEŞİK","YARALI","BEDENİ");
        $a_string = "";
        for ($i = 0; $i < 4; $i++ ){
            foreach($a as $sutun)
                $a_string .= " " . $sutun[array_rand($sutun)];
            $a_string .= "\n\r";
        }
        $a_string .= "\n\r";
        $output .= $a_string;

        $b[] = array("BİTTİM", "GİTTİN", "SENSİZ", "ŞİMDİ", "YALNIZ", "SONUNDA");
        $b[] = array("OLDUM", "GÖNÜL", "CANIM", "DÜNYAM", "RUHUM", "AKLIM");
        $b[] = array("DİVANE", "AVARE", "VİRANE", "BİÇARE", "AMADE", "PERVANE");
        $b_string = "";
        for ($i = 0; $i < 4; $i++ ){
            foreach($b as $sutun)
                $b_string .= " " . $sutun[array_rand($sutun)];
            $b_string .= "\n\r";
        }
        $b_string .= "\n\r";
        $output .= $b_string;

        $c[] = array("E HADİ", "KIZ SEN", "BU GECE", "A CANIM", "DELİ YAR", "SEBEBİM");
        $c[] = array("FİKRİMİ", "TENİMİ", "AŞKIMI", "KALBİMİ", "ÖMRÜMÜ", "SEVDAMI");
        $c[] = array("BENDEN ÇAL", "SÜRGÜNE SAL", "YOLLARA VUR", "DAĞIT, SAVUR", "ATEŞE AT", "RUHUNA KAT");
        $c_string = "";
        for ($i = 0; $i < 4; $i++ ){
            foreach($c as $sutun)
                $c_string .= " " . $sutun[array_rand($sutun)];
            $c_string .= "\n\r";
        }
        $c_string .= "\n\r";
        $output .= $c_string;
        return $output;

    }
}