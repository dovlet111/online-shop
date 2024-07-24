<?php

namespace App\Traits\Models;

use Illuminate\Database\Eloquent\Model;

trait HasSlug
{
    protected static function bootHasSlug()
    {
        static::creating(function (Model $item) {
            $item->slug = $product->slug
                ?? str($item->{self::slugFrom()})
                ->append(time())
                ->slug();
        });
    }

    public static function slugFrom(): string
    {
        return 'title';
    }

}
