<?php
class PrimeNumbers{
    private $start = 0;
    private $end = 0;
    private $last_is_prime = 3;
    private $prime_checker = array();

    public function setRange( $start, $end){
        $this->start = $start;
        $this->end = $end;
    }
    public function showPrimes(){
        $start_loop = ($this->start % 2 == 0) ? $this->start + 1 :$this->start;
        if ($start_loop <= 2){
            echo "2 \n";
        }
        for ($i = $start_loop; $i <= $this->end && !isset($this->not_primes[$i]); $i += 2){
            if ($this->check_prime($i)){
                echo $i."\n";
            }
        }
    }
    public function check_prime( $number){
        if ($number <= 2){
            return false;
        }
        foreach ($this->prime_checker as $k => $c){
            if ($number % $k == 0){
                return false;
            }
            $half_number = $number / 2;
            for ($i = $this->last_is_prime; $i<=$half_number && !isset($this->not_primes[$i]); $i += 2){
                $this->last_is_prime += 1;
                if ($this->modding($number, $i) == 0){
                    return false;
                }else{
                    if (!isset($this->prime_checker[$i])){
                        $this->prime_checker = true;
                    }
                }
            }
            $this->prime_checker[$number] = true;
            return true;
        }


    }
    public function modding($number, $divider){
        $first = true;
        for ($i = $divider; $i <= $number; $i += $divider){
            ($first) ? $first=false : $this->not_primes[$i] = true;
            if ($number - $i < $divider){
                return $number - $i;
            }
        }
    }
}
$pn = new PrimeNumbers();
$pn->setRange(0, 50);
$pn->showPrimes();