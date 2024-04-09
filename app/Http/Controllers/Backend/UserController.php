<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.users.browse');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $data = User::with('group')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('user_group', function ($row) {
                    // 檢查是否存在 user_group 關聯並顯示相應的名稱，否則顯示 "N/A"
                    return $row->group ? $row->group->name : 'N/A';
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i> 編輯</a> 
                                  <a href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i> 刪除</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
     
    }

    public function store()
    {
    }

    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('group')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('user_group', function ($row) {
                    // 檢查是否存在 user_group 關聯並顯示相應的名稱，否則顯示 "N/A"
                    return $row->group ? $row->group->name : 'N/A';
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i> 編輯</a> 
                                  <a href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i> 刪除</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
