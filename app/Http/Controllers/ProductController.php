<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('products.edit', $product->id)
            ->with('info','producto guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.edit', $product->id)
            ->with('info','producto actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('info','producto eliminado con exito');
    }


    /***PRUEBA PARA ANÁLISIS DE DATOS */
    public function data()
    {



        return view('psicometria/datos');
    }

    public function analisis(Request $request)
    {
        #PRUEBAS DE ANÁLISIS DE DATOS EN PHP
        /*
        $file = $request->file('csv');
        $csvData = str_getcsv(file_get_contents($file));
        //$rows = array_map('str_getcsv', explode("\n", $csvData));
        */
        /*
        $csvData = file_get_contents($request->file('csv'));
        $lines = explode(PHP_EOL, $csvData);
        $array = array();
        foreach ($lines as $line) {
            $array[] = str_getcsv($line);
        }
        */

        // 1 - get the first element of our array
        // 2 - shift it
        // 3 - parse it to an array using str_getcsv

        $csvFile = file($request->file('csv'));
        $keys = str_getcsv(array_shift($csvFile), ';');
        foreach ($csvFile as $csvRecord) {
            // combine our $csvRecord with $keys array
            $csv[] = array_combine($keys, str_getcsv($csvRecord, ';'));
        }
        
        $nombres = array_column($csv, 'i1');
        dd($nombres);






        /*
        $file = $request->file('csv');
        $csvData = file_get_contents($file);

        $rows = array_map('str_getcsv', explode("\n", $csvData));
        $header = array_shift($rows);

        //$file = fopen($request->csv, 'r');
        dd($rows);

        return view('psicometria/datos');
        */
    }
}
