<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use DataTables;

class IndexController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
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
