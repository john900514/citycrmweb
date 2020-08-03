<?php

namespace CityCRM\Http\Controllers\API\Clients\Ads;

use CityCRM\Clients;
use CityCRM\AdBudgets;
use CityCRM\AdMarkets;
use Illuminate\Http\Request;
use CityCRM\Http\Controllers\Controller;

class ClientAdBudgetAPIController extends Controller
{
    protected $budgets, $client_model, $request;

    public function __construct(Request $request, Clients $clients, AdBudgets $budgets)
    {
        $this->budgets = $budgets;
        $this->request = $request;
        $this->client_model = $clients;
    }

    public function get_all_budget_data($client)
    {
        $results = ['success' => false, 'reason' => 'Invalid Request'];
        $status = 401;

        $client = $this->client_model->find($client);

        if(!is_null($client))
        {
            // get all of the budget data for the client including ths biz math
            $budgets = $this->budgets->where('client_id', '=', $client->id)->get();
            // get all of the budget data and group by market
            $markets = [];

            foreach($budgets->toArray() as $budget)
            {
                // get spends math
                $budget['spend-fb'] = 0;
                $budget['spend-google'] = 0;
                // Get the day of the month (yesterday)
                $day_of_mo = intval(date('d',strtotime('-1 day')));
                // Get the amount of days in the current month
                $days_in_mo = intval(date('t'));

                if(!is_null($budget['google_budget']))
                {
                    // Do the math
                    $budget['spend-google'] = number_format(($budget['google_budget'] / $days_in_mo) * $day_of_mo, 2);
                }

                if(!is_null($budget['facebook_ig_budget']))
                {
                    // Do the math
                    $budget['spend-fb'] = number_format(($budget['facebook_ig_budget'] / $days_in_mo) * $day_of_mo, 2);
                }

                $budget['spend-total'] = $budget['spend-fb'] + $budget['spend-google'];
                $market_name = AdMarkets::find($budget['market_id'])->market_name;

                if(!array_key_exists($market_name, $markets))
                {
                    $markets[$market_name] = [
                        'spend-fb' => 0,
                        'spend-google' => 0,
                        'spend-total' => 0,
                        'budgets' => []
                    ];
                }

                $markets[$market_name]['budgets'][] = $budget;
                $markets[$market_name]['spend-fb'] += $budget['spend-fb'];
                $markets[$market_name]['spend-google'] += $budget['spend-google'];
                $markets[$market_name]['spend-total'] += $budget['spend-total'];
            }

            // response in clubs and markets
            $results = [
                'success' => true,
                'store_budgets' => $budgets->toArray(),
                'markets' => $markets
            ];
            $status = 200;
        }

        return response(json_encode($results), $status);
    }

    public function get_budget_data_for_market($client, $name)
    {
        $results = ['success' => false, 'reason' => 'Invalid Request'];
        $status = 401;

        $client = $this->client_model->find($client);

        if(!is_null($client))
        {
            // @todo - get all of the budget data and group by market specified
            $market_model = AdMarkets::where('market_name', '=', $name)->first();

            if(!is_null($market_model))
            {
                $budgets = $this->budgets->where('client_id', '=', $client->id)
                    ->where('market_id', '=', $market_model->id)
                    ->get();

                $market = [
                    'spend-fb' => 0,
                    'spend-google' => 0,
                    'spend-total' => 0,
                    'budgets' => []
                ];

                foreach($budgets->toArray() as $budget)
                {
                    // get spends math
                    $budget['spend-fb'] = 0;
                    $budget['spend-google'] = 0;
                    // Get the day of the month (yesterday)
                    $day_of_mo = intval(date('d',strtotime('-1 day')));
                    // Get the amount of days in the current month
                    $days_in_mo = intval(date('t'));

                    if(!is_null($budget['google_budget']))
                    {
                        // Do the math
                        $budget['spend-google'] = number_format(($budget['google_budget'] / $days_in_mo) * $day_of_mo, 2);
                    }

                    if(!is_null($budget['facebook_ig_budget']))
                    {
                        // Do the math
                        $budget['spend-fb'] = number_format(($budget['facebook_ig_budget'] / $days_in_mo) * $day_of_mo, 2);
                    }

                    $budget['spend-total'] = $budget['spend-fb'] + $budget['spend-google'];

                    $market['budgets'][] = $budget;
                    $market['spend-fb'] += $budget['spend-fb'];
                    $market['spend-google'] += $budget['spend-google'];
                    $market['spend-total'] += $budget['spend-total'];
                }

                $results = [
                    'success' => true,
                    'market' =>$market
                ];
                $status = 200;
            }
        }

        return response(json_encode($results), $status);
    }

    public function get_budget_data_for_club($client, $club_id)
    {
        $results = ['success' => false, 'reason' => 'Invalid Request'];
        $status = 401;

        $client = $this->client_model->find($client);

        if(!is_null($client))
        {
            $budget = $this->budgets->where('client_id', '=', $client->id)
                ->where('club_id', '=', $club_id)
                ->first();

            if(!is_null($budget))
            {
                $result = $budget->toArray();

                $result['spend-fb'] = 0;
                $result['spend-google'] = 0;
                // Get the day of the month (yesterday)
                $day_of_mo = intval(date('d',strtotime('-1 day')));
                // Get the amount of days in the current month
                $days_in_mo = intval(date('t'));

                if(!is_null($result['google_budget']))
                {
                    // Do the math
                    $result['spend-google'] = number_format(($result['google_budget'] / $days_in_mo) * $day_of_mo, 2);
                }

                if(!is_null($result['facebook_ig_budget']))
                {
                    // Do the math
                    $result['spend-fb'] = number_format(($result['facebook_ig_budget'] / $days_in_mo) * $day_of_mo, 2);
                }

                $result['spend-total'] = $result['spend-fb'] + $result['spend-google'];
            }

            $results = [
                'success' => true,
                'budget' => $result
            ];
            $status = 200;
        }

        return response(json_encode($results), $status);
    }
}
