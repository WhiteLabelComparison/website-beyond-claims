<?php namespace ChoiceClaims\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Stripe\Charge;
use Stripe\Error\Card;
use Stripe\Stripe;

class StripeController extends Controller
{

    /**
     * Process a card payment with  strip
     *
     * @param Request $request
     * @return Response
     */
    public function process(Request $request)
    {

        Stripe::setApiKey(Config::get('services.stripe.secret'));


        $fee = intval($request->get('fee')) * 100;


        try {
            $change = Charge::create([
                'amount' => $fee,
                'currency' => 'gbp',
                'source' => $request->get('stripeToken'),
                'description' => 'Payment From "' . $request->get('first-name') . ' ' . $request->get('last-name') . '"',
            ]);

            //@todo add some sort of logging or notification system

            return response()->json($change);

        } catch (Card $e) {
            return response([
                'error' => [
                    'message' => $e->getMessage(),
                    'type' => 'Card'
                ]
            ], 400);

        } catch (\Exception $e) {
            return response([
                'error' => [
                    'message' => $e->getMessage(),
                    'type' => 'General'
                ]
            ], 400);
        }
    }

}