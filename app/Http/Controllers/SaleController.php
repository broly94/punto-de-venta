<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use App\Http\Requests\Sale\StoreRequest;

class SaleController extends Controller
{
    public function index()
    {
        $categories = Sale::get();
        return view('sale.index', compact('sales'));
    }

    public function create()
    {
        $clients = Client::get();
        return view('admin.client.create', compact('clients'));
    }

    public function store(StoreRequest $request)
    {
        #Se crea una compra y se guarda la instancia en una variable ($Sale)
        $sale = Sale::create($request->all());
        #Se recorre un array en request, aca vamos a enviar los productos que se quieran ingresar a la compra
        #El id de la compra(Sale) ya viene en la instancia desde $Sale
        foreach ($request->sales as $key => $product) {
            #Se guarda en una variable un array con la infomacion de la compra
            $results[] = array(
                'product_id' => $request->product_id[$key],
                'quantity' => $request->quantity[$key],
                'price' => $request->price[$key],
                'discount' => $request->discount[$key]
            );
        }
        #Se llama al detalle de la compra y se le pasa con createMany el array de resultados con la informacion para guardar
        $sale->SaleDetails()->createMany($results);

        return redirect()->route('sales.index');
    }

    public function show(Sale $sale)
    {
        return view('admin.sale.show', compact('sale'));
    }
}
