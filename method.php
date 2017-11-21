<?php
/**
 * Created by Salman Zafar.
 * User: sam
 * Date: 11/21/17
 * Time: 12:19 PM
 */

class Restraunt{

    protected $dinner=30;
    protected $desert=20;
    protected $colddrink=10;
    public $bill;

    public function Dinner_cost($persons)
    {
        $this->bill += $this->dinner * $persons;
        return $this;
    }

    public function desert_cost($persons)
    {
        $this->bill += $this->desert * $persons;
        return $this;
    }

    public function colddrink_cost($persons)
    {
        $this->bill += $this->colddrink * $persons;
        return $this;
    }
}


$bill = new Restraunt();
echo $bill->Dinner_cost(2)->desert_cost(1)->colddrink_cost(2)->bill;