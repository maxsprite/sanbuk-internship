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
            foreach ($filterParams as $key => $value) {
                if ($key === 'date_from') {
                    $experiences->with('packages')
                        ->whereHas('packages', function (Builder $query) use ($value) {
                            $query->whereDate('date_from', '>=', $value);
                        });
                }

                if ($key === 'date_to') {
                    $experiences->with('packages')
                        ->whereHas('packages', function (Builder $query) use ($value) {
                            $query->whereDate('date_to', '<=', $value);
                        });
                }

                if ($key === 'type') {
                    $experiences->with('type')
                        ->whereHas('type', function (Builder $query) use ($value) {
                            $query->whereIn('id', $value);
                        });
                }

                if ($key === 'trip_type') {
                    $experiences->with('tripType')
                        ->whereHas('tripType', function (Builder $query) use ($value) {
                            $query->whereIn('id', $value);
                        });
                }
            }
        }

        return $experiences->get();
    }
}
