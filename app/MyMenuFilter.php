<?php

namespace App;


use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use Laratrust;


class MyMenuFilter implements FilterInterface
{
    public function transform($item)
    {
        if (isset($item['permission']) && !Laratrust::isAbleTo($item['permission'])) {
            return false;
        }

        if (isset($item['header'])) {
            $item = $item['header'];
        }

        return $item;
    }
}
