@extends('layouts.admin.master')
@section('title')
    Dashboard
@endsection
@section('page-title')
    Dashboard
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <x-alerts/>

        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <x-cards.overview-stats title="Calon Peserta Diploma 1" :value="$pesertaDiploma.' Peserta'" icon="bx bx-group" :route="route('calon-peserta-diploma.index')" />
            </div>
            <div class="col-md-6">
                <x-cards.overview-stats title="Calon Peserta Executive" :value="$pesertaExecutive.' Peserta'" icon="bx bx-group" :route="route('calon-peserta-executive.index')" />
            </div>
            <div class="col-md-5">
                <x-cards.overview-stats title="Pertanyaan Diterima" :value="$contact.' Pertanyaan'" icon="bx bx-receipt" :route="route('contact-forms.index')" />
            </div>

            <div class="col-md-5">
                <x-cards.overview-stats title="Artikel Dibuat" :value="$artikel.' Artikel'" icon="bx bx-file" :route="route('posts.index')" />
            </div>
                <div class="col-md-2">
                <x-buttons.link-button size="d-flex align-items-center mb-3" color="primary" icon="chevron-right" text="Ke Google Analytics" route="https://analytics.google.com/analytics/web/#/p416458903/reports/intelligenthome"/>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pertanyaan Form Kontak</h4>
            </div>
            <div class="card-body">
                <x-tables :headers="['#', 'Nama', 'Email', 'No. Telp', 'Pesan','Tgl. Dikirim']" tableId="contactFormTable"/>
            </div>
        </div>

    @endsection
    @push('addon-script')
        <script>
            $(document).ready(function () {
                $('#contactFormTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ordering: true,
                    ajax: {
                        url: '{!! url()->route('contact-forms.index') !!}',
                    },
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'nama', name: 'nama'},
                        {data: 'email', name: 'email'},
                        {data: 'no_telp', name: 'no_telp'},
                        {data: 'pesan', name: 'pesan'},
                        {data: 'created_at', name: 'created_at'},
                    ],
                    pageLength: 5
                });
            });
        </script>
    @endpush
