@extends('layouts.app')

@section('title')
    Registrasi Executive Program
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
                <h1 class="breadcumb-title" data-aos="fade-up" data-aos-duration="1000">Registrasi Program Executive<FONT COLOR="#CE5423">.</FONT></h1>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <form action="{{ route('registrasi-program-executive.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="left-border form-title text-uppercase">Form Registrasi</h1>
                <div class="row">
                    <p class="landing-text2">*Kamu harus berusia minimal 20 tahun untuk mengikuti Executive Program</p>
                    <div class="col-12 col-md-6">
                        <div class="feature-style1 form-style4 login">
                            <div class="form-group">
                                <p class="landing-text2">Pilihan Program Excutive Hybrid</p>
                                <div class="de_form de_radio row mh-75 g-3">
                                    @foreach($program_executives as $program_executive)
                                    <div class="radio-img col-12 col-sm-6 col-md-12 col-lg-6" >
                                        <input id="{{ $program_executive->id }}" name="program_id" type="radio" value="{{ $program_executive->id }}">
                                        <label for="{{ $program_executive->id }}">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-6 col-sm-5 col-lg-4">
                                                    <img class="radio-icon" src="{{ Storage::url($program_executive->program_icon) }}" alt="">
                                                </div>
                                                <div class="col-6 col-sm-7 col-lg-8 d-flex align-items-center radio-label">
                                                    {{ $program_executive->name }}
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                @error('program_id')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>
                            <x-forms.input type="text" name="nama_lengkap" label="Nama Lengkap :" placeholder="Isikan nama lengkapmu ..."/>
                            <x-forms.input type="text" name="nama_panggilan" label="Nama Panggilan :" placeholder="Isikan nama panggilanmu ..."/>
                            <x-forms.input type="email" name="email" label="Alamat Email :" placeholder="Isikan alamat emailmu ..."/>
                            <x-forms.input type="date" name="tanggal_lahir" label="Tanggal Lahir :" placeholder="Isikan tanggal lahirmu ..."/>
                            <x-forms.input type="number" name="umur" label="Umur :" placeholder="Isikan umurmu (minimal 20 tahun) ..."/>
                            <x-forms.input type="text" name="alamat" label="Alamat Tempat Tinggal :" placeholder="Isikan alamat tempat tinggalmu ..."/>

                            <x-forms.select name="jenis_kelamin" label="Jenis Kelamin :">
                                <option disabled selected>Pilih jenis kelaminmu</option>
                                @foreach (['Laki-laki', 'Perempuan'] as $jk)
                                    <option value="{{ $jk }}" @selected(old('jenis_kelamin') == $jk)>{{ $jk }}</option>
                                @endforeach
                            </x-forms.select>


                            <x-forms.input type="text" name="no_hp" label="No. HP/Whatsapp :" placeholder="Isikan No. HP/Whatsappmu (format : 628xxxxx) ..."/>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="feature-style1 form-style4 login">
                            <x-forms.input type="text" name="no_hp_ortu" label="No. HP/Whatsapp Orang Tua/Wali :" placeholder="Isikan No. HP/Whatsapp Orang Tua/Walimu (format : 628xxxxx) ..."/>

                            <x-forms.select name="pendidikan_terakhir" label="Pendidikan Terakhir :">
                                <option disabled selected>Pilih pendidikan terakhir calon peserta</option>
                                @foreach (['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3'] as $jk)
                                    <option value="{{ $jk }}" @selected(old('pendidikan_terakhir') == $jk)>{{ $jk }}</option>
                                @endforeach
                            </x-forms.select>

                            <x-forms.input type="text" name="asal_sekolah" label="Asal Sekolah :" placeholder="Isikan asal sekolah calon peserta ..."/>
                            <x-forms.input type="text" name="jurusan" label="Jurusan Sekolah :" placeholder="Isikan jurursan sekolah calon peserta ..."/>
                            <x-forms.input type="number" name="tahun_lulus" label="Tahun Lulus Sekolah :" placeholder="Isikan tahun lulus sekolah calon peserta ..."/>

                            <x-forms.textarea name="pengalaman_kerja" label="Pengalaman Kerja (jika ada) :" placeholder="Isikan pengalaman kerja calon peserta ..." :required="false"/>

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

            function initCKEditor(className) {
                ClassicEditor.create($(className).get(0), {
                    height: 400,
                    toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList'],
                }).catch(error => {
                    alert(error);
                });
            }
            initCKEditor('.ckeditor');
        });
    </script>
@endpush
