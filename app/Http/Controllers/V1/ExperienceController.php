<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Services\ExperienceService;
use Knuckles\Scribe\Attributes\Group;

#[Group('Experience')]
class ExperienceController extends Controller
{
    public function __construct(private ExperienceService $experienceService)
    {
    }

    public function index()
    {
        return $this->experienceService->filter(request()->get('filter'));
    }
}
