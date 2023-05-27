<?php
class Currency{
    const BDT_USD = 107.20;
    const BDT_JPY = 0.76;
    public function convertBDT_to_USD(int $amount_bdt):float{
        if ($amount_bdt > 0){
            return $amount_bdt / self::BDT_USD;
        }else{
            return 0;
        }
    }

    public function convertBDT_to_JPY(int $amount_bdt):float{
        if ($amount_bdt > 0){
            return $amount_bdt / self::BDT_JPY;
        }else{
            return 0;
        }
    }
}

$cur = new Currency();
echo "BDT 800 = USD " .$cur->convertBDT_to_USD(800) ."\n";
echo "BDT 800 = JPY " .$cur->convertBDT_to_JPY(800) ."\n";
