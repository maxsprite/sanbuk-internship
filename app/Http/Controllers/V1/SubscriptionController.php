<?php

namespace App\Http\Controllers\V1;

use App\Actions\User\Subscription\CreateSubscriptionAction;
use App\Actions\User\Subscription\UpdateSubscriptionAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\User\Subscription\CreateSubscriptionRequest;
use App\Http\Requests\V1\User\Subscription\UpdateSubscriptionRequest;
use Knuckles\Scribe\Attributes\Authenticated;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Header;
use Knuckles\Scribe\Attributes\Subgroup;


#[Group('User')]
#[Subgroup('Subscription')]
#[Authenticated]
class SubscriptionController extends Controller
{
    // Create user subscription when we don't have it
    #[Endpoint('Create Subscription')]
    #[Header('Authorization', 'Bearer ')]
    public function create(CreateSubscriptionRequest $request)
    {
        $result = CreateSubscriptionAction::run(auth()->user(), $request->input('stripe_price_id'));
        return response()->json([
            'result' => $result,
        ]);
    }

    // Update user subscription when we have it
    #[Endpoint('Update Subscription')]
    #[Header('Authorization', 'Bearer ')]
    public function update(UpdateSubscriptionRequest $request)
    {
        $result = UpdateSubscriptionAction::run(auth()->user(), $request->input('stripe_price_id'));
        return response()->json([
            'result' => $result,
        ]);
    }

    // Cancel user subscription when we have it
    public function cancel()
    {

    }
}
