<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    // Muestra todos los registros
    public function index()
    {
        $registros = Registro::all(); // Obtiene todos los registros de la base de datos
        return view('registros.index', compact('registros')); // Retorna la vista con los registros
    }

    // Muestra el formulario de creación de registro
    public function create()
    {
        return view('formulario.create'); // Retorna la vista del formulario
    }

    // Almacena un nuevo registro en la base de datos
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'dni' => 'required|string|max:255|unique:registros',
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registros',
        ]);

        // Crea un nuevo registro con los datos validados
        Registro::create($request->all());

        // Redirige a la lista de registros con un mensaje de éxito
        return redirect()->route('registros.index')->with('success', 'Registro creado exitosamente.');
    }

    // Muestra el formulario para editar un registro
    public function edit($id)
    {
        $registro = Registro::findOrFail($id); // Encuentra el registro por ID
        return view('formulario.edit', compact('registro')); // Retorna la vista de edición
    }

    // Actualiza un registro existente
    public function update(Request $request, $id)
    {
        // Valida los datos del formulario
        $request->validate([
            'dni' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $registro = Registro::findOrFail($id); // Encuentra el registro por ID
        $registro->update($request->all()); // Actualiza el registro con los datos validados

        return redirect()->route('registros.index')->with('success', 'Registro actualizado exitosamente.'); // Redirige con un mensaje de éxito
    }

    // Elimina un registro
    public function destroy($id)
    {
        $registro = Registro::findOrFail($id); // Encuentra el registro por ID
        $registro->delete(); // Elimina el registro

        return redirect()->route('registros.index')->with('success', 'Registro eliminado exitosamente.'); // Redirige con un mensaje de éxito
    }
}
