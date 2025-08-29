<?php


namespace Nemerichun\SzamlazzHu\Tests\Fixtures;


use Illuminate\Support\Collection;

class PaymentHolder {

    use \Nemerichun\SzamlazzHu\Internal\Support\PaymentHolder;

    public function __construct()
    {
        $this->payments = Collection::make();
    }


}