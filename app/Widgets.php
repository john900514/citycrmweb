<?php

namespace CityCRM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Support\Facades\DB;

class Widgets extends Model
{
    use Uuid, SoftDeletes;

    protected $casts = [
        'id' => 'uuid'
    ];

    public function client()
    {
        return $this->belongsTo('CityCRM\Clients', 'id', 'client_id');
    }

    public function user_preferred()
    {
        return $this->hasMany('CityCRM\UserPreferredWidgets', 'widget_id', 'id');
    }

    public function specific_user_preferred($user_id, $page, $client_id = null)
    {
        $results = false;

        $records = $this->select(DB::raw('widgets.*'))
            ->join('user_preferred_widgets', 'user_preferred_widgets.widget_id', '=', 'widgets.id')
            ->where('user_preferred_widgets.user_id', '=', $user_id);

        if(!is_null($client_id))
        {
            $records = $records->where('widgets.client_id', '=', $client_id);
        }

        $records = $records->get();

        if(count($records) > 0)
        {
            $results = $records;
        }

        return $results;
    }
}
