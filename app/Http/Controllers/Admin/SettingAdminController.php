<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingAdminController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();

        if (!$setting) {
            $setting = Setting::create([
                'site_name' => 'Jewelry Zineb',
            ]);
        }

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
{
    $setting = Setting::first();

    $data = $request->validate([
        'site_name' => 'nullable|string|max:255',
        'whatsapp' => 'nullable|string|max:255',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'email' => 'nullable|email',
        'address' => 'nullable|string',
        'facebook' => 'nullable|string',
        'instagram' => 'nullable|string',
    ]);

    if ($request->hasFile('logo')) {
        $data['logo'] = $request->file('logo')->store('settings', 'public');
    }

    $setting->update($data);

    return back()->with(
        'success',
        'Paramètres enregistrés avec succès.'
    );
}
}