<?php
namespace Grav\Common\GPM\Common;

use Grav\Common\Iterator;

abstract class AbstractPackageCollection extends Iterator
{
    protected $type;

    public function toJson()
    {
        $items = [];

        foreach ($this->items as $name => $package) {
            $items[$name] = $package->toArray();
        }

        return json_encode($items);
    }

    public function toArray()
    {
        $items = [];

        foreach ($this->items as $name => $package) {
            $items[$name] = $package->toArray();
        }

        return $items;
    }
}
