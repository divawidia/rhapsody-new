@extends('layouts.admin.master')

@section('title')
    Pengaturan Website & Profile LPK
@endsection
@section('page-title')
    @yield('title')
@endsection

@section('body')
<body>
@endsection

@section('content')
    <x-cards.form :route="route('setting.update')" :editForm="true" title="Pengaturan Website & Profile LPK" :backBtn="route('admin-dashboard')">
        @if($setting != null)
            <x-forms.input type="text" name="site_name" label="Nama Situs :" placeholder="Isikan nama situs untuk website ..." :value="$setting->site_name"/>

            <x-section-title title="Logo LPK" />
            <div class="row">
                <div class="col-md-6">
                    <x-forms.image-input name="logo_navbar" label="Logo LPK untuk Navbar :" :value="$setting->logo_navbar"/>
                </div>
                <div class="col-md-6">
                    <x-forms.image-input name="logo_footer" label="Logo LPK untuk Footer :" :value="$setting->logo_footer"/>
                </div>
                <div class="col-md-6">
                    <x-forms.image-input name="logo_sidebar_lg" label="Logo LPK untuk Sidebar Dashboard Admin :" :value="$setting->logo_sidebar_lg"/>
                </div>
                <div class="col-md-6">
                    <x-forms.image-input name="logo_sidebar_sm" label="Logo LPK untuk Sidebar Dashboard Admin (Minimize) :" :value="$setting->logo_sidebar_sm"/>
                </div>
            </div>

            <x-section-title title="Kontak LPK" />
            <div class="row">
                <div class="col-md-6">
                    <x-forms.input type="text" name="kontak_admin" label="Kontak (WA) Admin :" placeholder="Isikan nomor kontak (WA) admin (format : 62xxxxx) ..." :value="$setting->kontak_admin"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="email" label="Alamat Email Admin :" placeholder="Isikan alamat email admin (format : xxxx@xxx.com)..." :value="$setting->email"/>
                </div>
            </div>

            <x-section-title title="Lokasi LPK" />
            <div class="row">
                <div class="col-md-6">
                    <x-forms.input type="text" name="alamat" label="Alamat LPK :" placeholder="Isikan alamat lengkap dari LPK ..." :value="$setting->alamat"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="google_maps" label="Link Google Maps :" placeholder="Isikan link google maps dari lokasi LPK ..." :value="$setting->google_maps"/>
                </div>
                <div class="col-md-6">
                    <x-forms.image-input name="foto_lpk" label="Foto Lokasi Kampus LPK (untuk di bagian footer) :" :value="$setting->foto_lpk"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="location_title" label="Judul Lokasi Kampus LPK (untuk di bagian footer) :" placeholder="Isikan judul lokasi kampus untuk di footer ..." :value="$setting->location_title"/>
                </div>
            </div>

            <x-section-title title="Brosur LPK" />
            <x-forms.input type="text" name="brosur" label="Link Brosur LPK :" placeholder="Isikan link brosur dari LPK ..." :value="$setting->brosur"/>

            <x-section-title title="Sosial Media LPK" />
            <div class="row">
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_facebook" label="Link Facebook :" placeholder="Isikan link akun facebook dari LPK ..." :required="false" :value="$setting->url_facebook"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_instagram" label="Link Instagram :" placeholder="Isikan link akun instagram dari LPK ..." :required="false" :value="$setting->url_instagram"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_tiktok" label="Link Tiktok :" placeholder="Isikan link akun tiktok dari LPK ..." :required="false" :value="$setting->url_tiktok"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_youtube" label="Link Youtube :" placeholder="Isikan link channel youtube dari LPK ..." :required="false" :value="$setting->url_youtube"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_linkedin" label="Link Linkedin :" placeholder="Isikan link akun linkedin dari LPK ..." :required="false" :value="$setting->url_linkedin"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_twitter" label="Link Twitter :" placeholder="Isikan link akun twitter dari LPK ..." :required="false" :value="$setting->url_twitter"/>
                </div>
            </div>
        @else
            <x-forms.input type="text" name="site_name" label="Nama Situs :" placeholder="Isikan nama situs untuk website ..."/>

            <x-section-title title="Logo LPK" />
            <div class="row">
                <div class="col-md-6">
                    <x-forms.image-input name="logo_navbar" label="Logo LPK untuk Navbar :"/>
                </div>
                <div class="col-md-6">
                    <x-forms.image-input name="logo_footer" label="Logo LPK untuk Footer :"/>
                </div>
                <div class="col-md-6">
                    <x-forms.image-input name="logo_sidebar_lg" label="Logo LPK untuk Sidebar Dashboard Admin :"/>
                </div>
                <div class="col-md-6">
                    <x-forms.image-input name="logo_sidebar_sm" label="Logo LPK untuk Sidebar Dashboard Admin (Minimize) :"/>
                </div>
            </div>

            <x-section-title title="Kontak LPK" />
            <div class="row">
                <div class="col-md-6">
                    <x-forms.input type="text" name="kontak_admin" label="Kontak (WA) Admin :" placeholder="Isikan nomor kontak (WA) admin (format : 62xxxxx) ..."/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="email" label="Alamat Email Admin :" placeholder="Isikan alamat email admin (format : xxxx@xxx.com)..."/>
                </div>
            </div>

            <x-section-title title="Lokasi LPK" />
            <div class="row">
                <div class="col-md-6">
                    <x-forms.input type="text" name="alamat" label="Alamat LPK :" placeholder="Isikan alamat lengkap dari LPK ..."/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="google_maps" label="Link Google Maps :" placeholder="Isikan link google maps dari lokasi LPK ..."/>
                </div>
                <div class="col-md-6">
                    <x-forms.image-input name="foto_lpk" label="Foto Lokasi Kampus LPK (untuk di bagian footer) :"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="location_title" label="Judul Lokasi Kampus LPK (untuk di bagian footer) :" placeholder="Isikan judul lokasi kampus untuk di footer ..."/>
                </div>
            </div>

            <x-section-title title="Brosur LPK" />
            <x-forms.input type="text" name="brosur" label="Link Brosur LPK :" placeholder="Isikan link brosur dari LPK ..."/>

            <x-section-title title="Sosial Media LPK" />
            <div class="row">
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_facebook" label="Link Facebook :" placeholder="Isikan link akun facebook dari LPK ..." :required="false"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_instagram" label="Link Instagram :" placeholder="Isikan link akun instagram dari LPK ..." :required="false"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_tiktok" label="Link Tiktok :" placeholder="Isikan link akun tiktok dari LPK ..." :required="false"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_youtube" label="Link Youtube :" placeholder="Isikan link channel youtube dari LPK ..." :required="false"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_linkedin" label="Link Linkedin :" placeholder="Isikan link akun linkedin dari LPK ..." :required="false"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="url_twitter" label="Link Twitter :" placeholder="Isikan link akun twitter dari LPK ..." :required="false"/>
                </div>
            </div>
        @endif
    </x-cards.form>
@endsection
