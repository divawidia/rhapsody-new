@extends('layouts.admin.master')
@section('title')
    Edit Data Calon Peserta : {{ $peserta->nama_lengkap }}
@endsection
@section('page-title')
    @yield('title')
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <x-cards.form :route="route('calon-peserta-executive.update', $peserta->id)" :editForm="true" title="Edit Data Calon Peserta : {{ $peserta->nama_lengkap }}">
            <div class="row">
                <div class="col-md-6">
                    <x-forms.input type="text" name="nama_lengkap" label="Nama Lengkap :" placeholder="Isikan nama lengkap calon peserta ..." :value="$peserta->nama_lengkap"/>
                    <x-forms.input type="text" name="nama_panggilan" label="Nama Panggilan :" placeholder="Isikan nama panggolan calon peserta ..." :value="$peserta->nama_panggilan"/>
                    <x-forms.input type="email" name="email" label="Email :" placeholder="Isikan email calon peserta..." :value="$peserta->email"/>
                    <x-forms.input type="date" name="tanggal_lahir" label="Tanggal Lahir :" placeholder="Isikan tanggal lahir calon peserta ..." :value="$peserta->tanggal_lahir"/>
                    <x-forms.input type="number" name="umur" label="Umur :" placeholder="Isikan umur calon peserta ..." :value="$peserta->umur"/>

                    <x-forms.select name="jenis_kelamin" label="Jenis Kelamin :">
                        <option disabled>Pilih jenis kelamin calon peserta</option>
                        @foreach (['Laki-laki', 'Perempuan'] as $jk)
                            <option value="{{ $jk }}" @selected(old('jenis_kelamin', $peserta->jenis_kelamin) == $jk)>{{ $jk }}</option>
                        @endforeach
                    </x-forms.select>

                    <x-forms.select name="program_id" label="Program Dipilih :">
                        <option disabled>Pilih program jurusan yang dipilih calon peserta</option>
                        @foreach ($programs as $program)
                            <option value="{{ $program->id }}" @selected(old('program_id', $peserta->program_id) == $program->id)>{{ $program->name }}</option>
                        @endforeach
                    </x-forms.select>

                    <x-forms.textarea name="pengalaman_kerja" label="Pengalaman Kerja (jika ada) :" placeholder="Isikan pengalaman kerja calon peserta ..." :value="$peserta->pengalaman_kerja" :required="false"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="alamat" label="Alamat lengkap :" placeholder="Isikan alamat lengkap dari calon peserta ..." :value="$peserta->alamat"/>
                    <x-forms.input type="number" name="no_hp" label="No. HP (WA) :" placeholder="Isikan no. hp/wa calon peserta, (format : 62xxxxx)..." :value="$peserta->no_hp"/>
                    <x-forms.input type="number" name="no_hp_ortu" label="No. HP (WA) Orang tua/wali :" placeholder="Isikan no. hp/wa orang tua/wali, (format : 62xxxxx)..." :value="$peserta->no_hp_ortu"/>

                    <x-forms.select name="pendidikan_terakhir" label="Pendidikan Terakhir :">
                        <option disabled>Pilih pendidikan terakhir calon peserta</option>
                        @foreach (['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3'] as $jk)
                            <option value="{{ $jk }}" @selected(old('pendidikan_terakhir', $peserta->pendidikan_terakhir) == $jk)>{{ $jk }}</option>
                        @endforeach
                    </x-forms.select>

                    <x-forms.input type="text" name="asal_sekolah" label="Asal Sekolah :" placeholder="Isikan asal sekolah calon peserta ..." :value="$peserta->asal_sekolah"/>
                    <x-forms.input type="text" name="jurusan" label="Jurusan Sekolah :" placeholder="Isikan jurursan sekolah calon peserta ..." :value="$peserta->jurusan"/>
                    <x-forms.input type="number" name="tahun_lulus" label="Tahun Lulus Sekolah :" placeholder="Isikan tahun lulus sekolah calon peserta ..." :value="$peserta->tahun_lulus"/>

                    <x-forms.select name="references[]" label="Referensi Pendaftar :" :multiple="true">
                        <option disabled>Pilih referensi calon pendaftar</option>
                        @foreach ($references as $reference)
                            <option value="{{ $reference->id }}" {{ in_array($reference->id, $referensiPeserta) ? 'selected' : '' }}>{{ $reference->jenis }}</option>
                        @endforeach
                    </x-forms.select>
                </div>
            </div>
        </x-cards.form>
    @endsection
