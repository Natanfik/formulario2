<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClienteControladora extends Controller
{

     /* Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clientes = Clientes::all(); // Use o modelo Clientes
        $search = $request->input('search');
    
        if ($search !== null) {
            $filteredClientes = Clientes::where('nome', 'like', '%'.$search.'%')->get();
    
            return view('index', ['clientes' => $filteredClientes, 'search' => $search]);
        } else {
            return view('index', ['clientes' => $clientes, 'search' => null]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastro');
    }
    /**
 * Search for clients by name.
 */
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'nullable|email',
            'cpf' => 'required',
        ]);

        Clientes::create($request->all());

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('mostrar', compact('cliente'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
    
}