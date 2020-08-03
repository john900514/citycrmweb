<?php

namespace CityCRM\Http\Controllers\API\Widgets\Reporting;

use Illuminate\Http\Request;
use CityCRM\Http\Controllers\Controller;
use CityCRM\Actions\Widgets\GetWidgetsForUser;

class ReportingWidgetsAPIController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get_dashboard_widgets(GetWidgetsForUser $action)
    {
        $results = ['success' => false, 'reason' => 'No Widgets Assigned'];

        if(count($widgets = $action->execute('dashboard')) > 0)
        {
            $results = ['success' => true, 'widgets' => $widgets];
        }

        return response($results);
    }
}
