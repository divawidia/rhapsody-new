<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Http\Requests\VictorySectionRequest;
use App\Models\Setting;
use App\Models\VictorySection;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $setting = Setting::find(1);
        return view('pages.admin.setting' ,[
            'setting' => $setting
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $request)
    {
        $data = $request->validated();

        $setting = Setting::find(1);
        if ($setting == null) {
            $data['logo_navbar'] = $this->storeFile($data, 'logo_navbar', 'assets/setting', '');
            $data['logo_footer'] = $this->storeFile($data, 'logo_footer', 'assets/setting', '');
            $data['logo_sidebar_lg'] = $this->storeFile($data, 'logo_sidebar_lg', 'assets/setting', '');
            $data['logo_sidebar_sm'] = $this->storeFile($data, 'logo_sidebar_sm', 'assets/setting', '');
            $data['foto_lpk'] = $this->storeFile($data, 'foto_lpk', 'assets/setting', '');
        } else {
            $data['logo_navbar'] = $this->updateFile($data, 'logo_navbar', 'assets/setting', $setting->logo_navbar);
            $data['logo_footer'] = $this->updateFile($data, 'logo_footer', 'assets/setting', $setting->logo_footer);
            $data['logo_sidebar_lg'] = $this->updateFile($data, 'logo_sidebar_lg', 'assets/setting', $setting->logo_sidebar_lg);
            $data['logo_sidebar_sm'] = $this->updateFile($data, 'logo_sidebar_sm', 'assets/setting', $setting->logo_sidebar_sm);
            $data['foto_lpk'] = $this->updateFile($data, 'foto_lpk', 'assets/setting', $setting->foto_lpk);
        }
        Setting::updateOrCreate(['id' => 1], $data);

        $message = 'Pengaturan website & LPK berhasil diperbarui!';
        Alert::success('Hore!', $message);
        return redirect()->route('setting.edit')->with('status', $message);
    }
}
