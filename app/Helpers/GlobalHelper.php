<?php

use App\Models\Setting;

function getSettingData()
{
    return Setting::first();
}
