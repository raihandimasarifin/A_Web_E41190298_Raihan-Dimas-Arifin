<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $pendidikan = Pendidikan::OrderBy('tingkatan','ASC')->get();
    return view('backend/pendidikan.index', compact('pendidikan'));
  }

  public function create()
  {
    $pendidikan = null;
    $admin_lecturer = "Menambahkan";
    return view('backend/pendidikan.create', compact('pendidikan','admin_lecturer'));
  }

  public function store(Request $request)
  {
    Pendidikan::create($request->all());
    return redirect()->route('pendidikan.index')
                    ->with('success','Data Pendidikan berhasil ditambahkan.');
  }

  public function edit(Pendidikan $pendidikan)
  {
    $admin_lecturer = "Mengubah";
    return view('backend/pendidikan.create', compact('pendidikan','admin_lecturer'));
  }

  public function update(Pendidikan $pendidikan,Request $request)
  {
    $pendidikan->update($request->all());
    return redirect()->route('pendidikan.index')
                    ->with('success','Data Pendidikan berhasil diperbaharui.');
  }

  public function destroy(Pendidikan $pendidikan)
  {
    $pendidikan->delete();
    return redirect()->route('pendidikan.index')
                    ->with('success','Data Pendidikan berhasil dihapus.');
  }
}
