<?php

use App\Models\Program;
use App\Models\Setting;
use App\Models\Testimony;

function getSettingData()
{
    return Setting::first();
}

function getProgramData()
{
    return Program::with('program_contents')->get();
}

function getTestimonyData()
{
    return Testimony::all();
}
