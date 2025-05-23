<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();

        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil ditambahkan',
                'data' => $siswas
            ], 201);
        }
        
        return view('siswa.index', compact('siswas'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:siswas',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        $siswa = Siswa::create($request->all());

    if (request()->wantsJson()) {
        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan',
            'data' => $siswa
        ], 201);
    }

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'data' => $siswa
            ], 200);
        }
        
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:siswas,nim,' . $id,
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);
        if (!$siswa) {
            if (request()->wantsJson()) {
                return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
            }
            return redirect()->route('siswa.index')->with('error', 'Data tidak ditemukan');
        }
        
        $siswa->update($request->all());
        if (request()->wantsJson()) {
            return response()->json(['status' => 'success', 'message' => 'Data berhasil diupdate', 'data' => $siswa]);
        }

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil dihapus'
            ]);
        }

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}