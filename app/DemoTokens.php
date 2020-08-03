<?php

namespace CityCRM;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DemoTokens extends Model
{
    use SoftDeletes, Uuid;
}
