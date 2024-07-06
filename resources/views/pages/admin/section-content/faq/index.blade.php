@extends('layouts.admin.master')
@section('title')
    Frequently Asked Question Section
@endsection
@section('page-title')
    Frequently Asked Question Section
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Frequently Asked Question Section</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{  route('faq.create') }}" class="btn btn-primary mb-3">
                            + Tambah Frequently Asked Question
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="faqTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Pertanyaan</th>
                                    <th>Jawaban</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    @endsection
    @push('addon-script')
        <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/datatables.min.js"></script>
        <script>
            // AJAX DataTable
            var datatable = $('#faqTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'question', name: 'question' },
                    { data: 'answer', name: 'answer' },
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
    @endpush
