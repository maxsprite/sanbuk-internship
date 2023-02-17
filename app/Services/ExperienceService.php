<?php

namespace App\Services;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Builder;

class ExperienceService
{
    public function filter(array|null $filterParams)
    {
        $experiences = Experience::query();

        if ($filterParams !== null) {
            foreach ($filterParams as $key => $values) {
                if ($key === 'type') {
                    $experiences->with('type')
                        ->whereHas('type', function (Builder $query) use ($values) {
                            $query->whereIn('id', $values);
                        });
                }

                if ($key === 'trip_type') {
                    $experiences->with('tripType')
                        ->whereHas('tripType', function (Builder $query) use ($values) {
                            $query->whereIn('id', $values);
                        });
                }
            }
        }

        return $experiences->get();
    }
}
