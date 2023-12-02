@extends('layouts.app')

@section('title')
    Registrasi Diploma 1
@endsection

@section('content')
    @include('includes.modal_testi')

    <div class="breadcumb-wrapper d-flex align-items-center" style="background: url('/img/bg/top-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title" data-aos="fade-up" data-aos-duration="1000">Registrasi Program Diploma 1<FONT COLOR="#CE5423">.</FONT></h1>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
        <form action="{{ route('registrasi-program-d1.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="left-border form-title text-uppercase">Form Registrasi</h1>
            <div class="row">
                    <p class="landing-text2"></p>
                    <div class="col-12 col-md-6">
                        <div class="feature-style1 form-style4 login">
                            <p class="landing-text2">Pilihan Jurusan Diploma 1</p>
                            <div class="de_form de_radio row mh-75 g-3 mb-3">
                                @foreach($jurusan_diplomas as $jurusan_diploma)
                                    <div class="radio-img col-6" >
                                        <input id="{{ $jurusan_diploma->id }}" name="program_id" type="radio" value="{{ $jurusan_diploma->id }}">
                                        <label for="{{ $jurusan_diploma->id }}">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <img class="radio-icon" src="{{ Storage::url($jurusan_diploma->program_icon) }}" alt="">
                                                </div>
                                                <div class="col-12 col-xl-8 align-items-center">
                                                    {{ $jurusan_diploma->name }}
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            @error('program_id')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror

                            <x-forms.input type="text" name="nama_lengkap" label="Nama Lengkap :" placeholder="Isikan nama lengkapmu ..."/>
                            <x-forms.input type="text" name="nama_panggilan" label="Nama Panggilan :" placeholder="Isikan nama panggilanmu ..."/>
                            <x-forms.input type="email" name="email" label="Alamat Email :" placeholder="Isikan alamat emailmu ..."/>
                            <x-forms.input type="date" name="tanggal_lahir" label="Tanggal Lahir :" placeholder="Isikan tanggal lahirmu ..."/>
                            <x-forms.input type="number" name="umur" label="Umur :" placeholder="Isikan umurmu (minimal 18 tahun) ..."/>
                            <x-forms.input type="text" name="alamat" label="Alamat Tempat Tinggal :" placeholder="Isikan alamat tempat tinggalmu ..."/>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="feature-style1 form-style4 login">
                            <x-forms.input type="text" name="no_hp" label="No. HP/Whatsapp :" placeholder="Isikan No. HP/Whatsappmu (format : 628xxxxx) ..."/>
                            <x-forms.input type="text" name="no_hp_ortu" label="No. HP/Whatsapp Orang Tua/Wali :" placeholder="Isikan No. HP/Whatsapp Orang Tua/Walimu (format : 628xxxxx) ..."/>

                            <x-forms.select name="jenis_kelamin" label="Jenis Kelamin :">
                                <option disabled selected>Pilih jenis kelaminmu</option>
                                @foreach (['Laki-laki', 'Perempuan'] as $jk)
                                    <option value="{{ $jk }}" @selected(old('jenis_kelamin') == $jk)>{{ $jk }}</option>
                                @endforeach
                            </x-forms.select>

                            <x-forms.input type="text" name="asal_sekolah" label="Asal Sekolah :" placeholder="Isikan nama sekolah terakhirmu ..."/>
                            <x-forms.input type="text" name="jurusan_sekolah" label="Jurusan Sekolah :" placeholder="Isikan jurusan di sekolah terakhirmu ..."/>
                            <x-forms.input type="number" name="tahun_lulus" label="Tahun Lulus :" placeholder="Isikan tahun lulus sekolah terakhirmu ..."/>

                            <p class="landing-text2 mt-3">Darimana kamu mengetahui Rhapsody? :</p>
                            <div class="row">
                                @foreach($references as $reference)
                                    <div class="col-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="references[]" id="reference{{ $reference->id }}" value="{{ $reference->id }}">
                                            <label class="form-check-label" for="reference{{ $reference->id }}">{{ $reference->jenis }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @error('references')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror

                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="vs-btn">Daftar Sekarang</button>
                            </div>
                        </div>
                    </div>
            </div>
        </form>
        </div>
    </section>
@endsection

@push('addon-script')
    <script>
        $(document).ready(function(){
            $("#modalTesti").modal('show');
        });
    </script>
@endpush
