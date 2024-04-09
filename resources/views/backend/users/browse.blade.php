@extends('backend.layouts.app')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">使用者管理</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/backend">系統</a></li>
                <li class="breadcrumb-item active">使用者管理</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    使用者管理
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered" style="width: 100%" id="dataTable">
                        <thead>
                            <tr>
                                <th style="width: 30%">名稱</th>
                                <th style="width: 30%">E-mail</th>
                                <th style="width: 30%">等級</th>
                                <th style="width: 150px">管理</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('css')
@endsection

@section('js')
    <script>
        var table = $('#dataTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/2.0.3/i18n/zh-HANT.json',
            },
            processing: true,
            serverSide: true,
            responsive: {
                breakpoints: [{
                        name: 'desktop',
                        width: Infinity
                    },
                    {
                        name: 'tablet-l',
                        width: 1024
                    }, //原本是768~1024不含768
                    {
                        name: 'tablet-p',
                        width: 767
                    }, //
                    {
                        name: 'mobile-l',
                        width: 480
                    },
                    {
                        name: 'mobile-p',
                        width: 320
                    }
                ]
            },
            ajax: "{{ route('backend.users.list') }}",
            columns: [

                {
                    data: 'name',
                    name: 'name'
                    render: function(data, type, row) {
                        return '<a href="" target="_blank">' + data + '</a>'
                    },
                    className: "min-tablet-l"
                },
                {
                    data: 'email',
                    name: 'email',
                    className: "min-tablet-l"
                },
                {
                    data: 'user_group',
                    name: 'user_group',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
    </script>
@endsection
