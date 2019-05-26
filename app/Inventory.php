<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Inventory extends Model
{
    protected $collection = 'inventory';
    protected $primaryKey = 'id';
}