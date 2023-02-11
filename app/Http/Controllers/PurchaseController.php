<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Provider;
use App\Http\Requests\Purchase\StoreRequest;
#use App\Http\Requests\Purchase\UpdateRequest;


class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::get();
        return view('purchase.index', compact('purchases'));
    }

    public function create()
    {
        $providers = Provider::get();
        return view('admin.provider.create', compact('providers'));
    }

    public function store(StoreRequest $request)
    {
        #Se crea una compra y se guarda la instancia en una variable ($purchase)
        $purchase = Purchase::create($request->all());
        #Se recorre un array en request, aca vamos a enviar los productos que se quieran ingresar a la compra
        #El id de la compra(purchase) ya viene en la instancia desde $purchase
        foreach ($request->products as $key => $product) {
            #Se guarda en una variable un array con la infomacion de la compra
            $results[] = array(
                'product_id' => $request->product_id[$key],
                'quantity' => $request->quantity[$key],
                'price' => $request->price[$key]
            );
        }
        #Se llama al detalle de la compra y se le pasa con createMany el array de resultados con la informacion para guardar
        $purchase->PurchaseDetails()->createMany($results);

        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show', compact('purchase'));
    }

    #public function edit(Purchase $purchase)
    #{
    #    $providers = Provider::get();
    #    return view('admin.purchase.show', compact('purchase'));
    #}
}
