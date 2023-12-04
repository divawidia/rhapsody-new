@extends('layouts.admin.master')
@section('title')
    Edit Program Pelatihan {{ $pelatihan->name }}
@endsection
@section('page-title')
    @yield('title')
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <x-alerts/>
        <x-buttons.link-button size="my-3" color="secondary" icon="arrow-back" text="Kembali" :route="route('programs.index')"/>

        <x-cards.form :route="route('pelatihan.update', ['pelatihan'=>$pelatihan])" :editForm="true" title="Edit Program Pelatihan {{ $pelatihan->name }}">
            <div class="row">
                <div class="col-md-6">
                    <x-forms.input type="text" name="name" label="Nama Program Pelatihan :" placeholder="Isikan nama program pelatihan ..." :value="$pelatihan->name"/>
                </div>
                <div class="col-md-6">
                    <x-forms.select name="program_id" label="Jenis Program Pelatihan :">
                        <option disabled>Pilih jenis program pelatihan</option>
                        @foreach($programs as $program)
                            <option value="{{ $program->id }}" @selected(old('program_id', $pelatihan->program_id) == $program->id)>{{ $program->name }}</option>
                        @endforeach
                    </x-forms.select>
                </div>

                <div class="col-md-6">
                    <x-forms.input type="number" min="0" name="price" label="Harga Program Pelatihan :" placeholder="Isikan harga program pelatihan ..." :value="$pelatihan->price"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="text" name="batch" label="Batch Pelatihan :" placeholder="Isikan batch angkatan pelatihan, contoh : 25-26 ..." :value="$pelatihan->batch"/>
                </div>

                <x-forms.textarea name="price_desc" label="Deskripsi Harga Program Pelatihan:" placeholder="Isikan deskripsi harga ..." :value="$pelatihan->price_desc" />

                <div class="col-md-6">
                    <x-forms.input type="date" name="register_start" label="Tanggal Mulai Pendaftaran :"  :value="$pelatihan->register_start"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="date" name="register_end" label="Tanggal Akhir Pendaftaran :" :value="$pelatihan->register_end"/>
                </div>

                <div class="col-md-4">
                    <x-forms.input type="text" name="btn_text" label="Button Text :"  :value="$pelatihan->btn_text"/>
                </div>
                <div class="col-md-4">
                    <x-forms.input type="text" name="btn_url" label="Button URL :" :value="$pelatihan->btn_url"/>
                </div>
                <div class="col-md-4">
                    <x-forms.image-input name="btn_icon" label="Button Icon<:" :value="$pelatihan->btn_icon" :required="false"/>
                </div>

                <div class="col-md-4">
                    <x-forms.textarea name="overview" label="Overview :" placeholder="Isikan overview program pelatihan ..." :value="$pelatihan->overview"/>
                </div>
                <div class="col-md-4">
                    <x-forms.textarea name="short_overview" label="Short Overview :" placeholder="Isikan overview singkat program pelatihan ..." :value="$pelatihan->short_overview"/>
                </div>
                <div class="col-md-4">
                    <x-forms.textarea name="benefit_content" label="Benefit :" placeholder="Isikan benefit program pelatihan ..." :value="$pelatihan->benefit_content"/>
                </div>

                <div class="col-md-6">
                    <x-forms.input type="number" name="interest_percentage" label="Persentase Peminat :" placeholder="Isikan persentase peminat program pelatihan ..." :value="$pelatihan->interest_percentage"/>
                </div>
                <div class="col-md-6">
                    <x-forms.input type="number" name="alumnies" label="Jumlah Alumni :" placeholder="Isikan jumlah alumni program pelatihan ..." :value="$pelatihan->alumnies"/>
                </div>

                <div class="col-md-6">
                    <x-forms.image-input name="program_icon" label="Program Icon :" :value="$pelatihan->program_icon" :required="false"/>
                </div>
                <div class="col-md-6">
                    <x-forms.select name="status" label="Status Publikasi Program Pelatihan :">
                        <option disabled>Pilih status publikasi program pelatihan</option>
                        @foreach([1 => "Published", 0 => "Private"] AS $status => $status_label)
                            <option value="{{ $status }}" {{ old("status", $pelatihan->status) == $status ? "selected" : "" }}>{{ $status_label }}</option>
                        @endforeach
                    </x-forms.select>
                </div>

                <div class="mb-3">
                    <label class="col-form-label" for="photo-dropzone">Tambah Foto Program Pelatihan</label>
                    <div class="needsclick dropzone" id="photo-dropzone"></div>
                    @error('photo_url')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </x-cards.form>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Foto Halaman Pelatihan {{ $pelatihan->name }}</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    @foreach ($pelatihan->program_photos as $photo)
                        <div class="col-md-4">
                            <div class="gallery-container">
                                <img
                                    src="{{ Storage::url($photo->photos_url ?? '') }}"
                                    alt=""
                                    class="w-100 rounded-3"
                                />
                                <a href="{{ route('delete-programs-photo', $photo->id) }}" class="delete-gallery" data-confirm-delete="true">
                                    <img src="/img/icon/icon-delete.svg" alt="" />
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h4 class="card-title">Prospek Karir Program Pelatihan {{ $pelatihan->name }}</h4>
                <x-buttons.link-button color="success" icon="plus" text="Tambah Prospek Karir" :route="route('prospek-karir.create', $pelatihan->id)"/>
            </div>
            <div class="card-body">
                <x-tables :headers="['ID', 'Posisi', 'Range Gaji', 'Aksi']" tableId="careerSalaryTable"/>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h4 class="card-title">Prospek Lowongan Program Pelatihan {{ $pelatihan->name }}</h4>
                <x-buttons.link-button color="success" icon="plus" text="Tambah Prospek Lowongan" :route="route('career-company.create', $pelatihan->id)"/>
            </div>
            <div class="card-body">
                <x-tables :headers="['ID', 'Perusahaan', 'Logo', 'Status', 'Aksi']" tableId="careerCompanyTable"/>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script>
            $('#careerSalaryTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'position', name: 'position' },
                    { data: 'salary', name: 'salary' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '15%'
                    },
                ]
            });
        </script>
        <script>
            $('#careerCompanyTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->route('career-company.index', $pelatihan->id) !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'company_name', name: 'company_name' },
                    { data: 'company_logo', name: 'company_logo' },
                    { data: 'status', name: 'status' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '15%'
                    },
                ]
            });
        </script>
        <script>
            const allEditor = document.querySelectorAll('.ckeditor');
            for (var i = 1; i < allEditor.length; i++){
                ClassicEditor.create(allEditor[i], {
                    toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList'],
                }).catch(error => {
                    console.log(error);
                });
            }
        </script>
        <script>
            let uploadedDocumentMap = {};
            let myDropzone = new Dropzone("div#photo-dropzone",{
                url: '{{ route('upload-programs-photo') }}',
                autoProcessQueue: true,
                uploadMultiple: true,
                addRemoveLinks: true,
                parallelUploads: 10,
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                successmultiple: function(data, response) {
                    $.each(response['name'], function (key, val) {
                        $('form').append('<input type="hidden" name="photo_url[]" value="' + val + '">');
                        uploadedDocumentMap[data[key].name] = val;
                    });
                },
                removedfile: function (file) {
                    file.previewElement.remove()
                    let name = '';
                    if (typeof file.file_name !== 'undefined') {
                        name = file.file_name;
                    } else {
                        name = uploadedDocumentMap[file.name];
                    }
                    $('form').find('input[name="photo_url[]"][value="' + name + '"]').remove()
                }
            });
        </script>
@endsection
