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
                                <th style="width: 5%">No</th>
                                <th style="width: 40%">名稱</th>
                                <th style="width: 35%">E-mail</th>
                                <th style="width: 25%">管理</th>
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
            ajax: "{{ route('backend.users.list') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
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
