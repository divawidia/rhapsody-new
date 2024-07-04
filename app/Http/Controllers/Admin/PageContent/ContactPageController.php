<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactPageRequest;
use App\Models\ContactPage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactPageController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $contactData = ContactPage::findOrFail(1);
        return view('pages.contact', ['contactData' => $contactData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $contactData = ContactPage::findOrFail(1);
        return view('pages.admin.pages.contact', ['contactData' => $contactData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactPageRequest $request)
    {
        $data = $request->validated();
        $contactData = ContactPage::findOrFail(1);

        if ($request->header_bg == null and $contactData->header_bg != null){
            $data['header_bg'] = $contactData->header_bg;
        }else{
            $data['header_bg'] = $request->file('header_bg')->store('assets/contact-page', 'public');
        }
        $contactData->update($data);
        Alert::success('Hore!', 'Contact Page Berhasil Diedit!');
        return redirect()->route('contact-page-edit')->with('status', 'Data contact page berhasil diupdate!');
    }
}
