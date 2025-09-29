<?php

namespace App\Http\Controllers;

use App\kategori;
use App\Exports\ExportCategories;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use PDF;

class kategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin,staff');
    }

    public function index()
    {
        $categories = kategori::all();
        return view('kategori.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|string|min:2'
        ]);

        kategori::create($request->all());

        return response()->json([
           'success' => true,
           'message' => 'Kategori berhasil ditambahkan'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = kategori::find($id);
        return $category;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|min:2'
        ]);

        $category = kategori::findOrFail($id);
        $category->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil diperbarui'
        ]);
    }

    public function destroy($id)
    {
        kategori::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil dihapus'
        ]);
    }

    public function apikategori()
    {
        $kategori = kategori::all();

        return Datatables::of($kategori)
            ->addColumn('action', function($kategori){
                return '<a onclick="editForm('. $kategori->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    '<a onclick="deleteData('. $kategori->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function exportCategoriesAll()
    {
        $categories = kategori::all();
        $pdf = PDF::loadView('categories.CategoriesAllPDF', compact('categories'));
        return $pdf->download('categories.pdf');
    }

    public function exportExcel()
    {
        return (new ExportCategories())->download('categories.xlsx');
    }
}
