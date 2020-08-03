<?php

namespace CityCRM;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    public function ability()
    {
        return $this->hasOne('CityCRM\Abilities', 'id', 'ability_id');
    }
}
