<?php


namespace Nemerichun\SzamlazzHu\Tests\Fixtures;


use Illuminate\Support\Collection;

class ItemHolder {
    use \Nemerichun\SzamlazzHu\Internal\Support\ItemHolder;

    public function __construct()
    {
        $this->items = $this->items ?: Collection::make();
    }


}