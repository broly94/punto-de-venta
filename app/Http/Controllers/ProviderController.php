<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Http\Requests\Provider\StoreRequest;
use App\Http\Requests\Provider\UpdateRequest;

class ProviderController extends Controller
{

    public function index()
    {
        $providers = Provider::get();
        return view('admin.providers.index', compact('providers'));
    }

    public function create()
    {
        return view('admin.providers.create');
    }

    public function store(StoreRequest $request)
    {
        Provider::create($request->all());
        return redirect()->route('providers.index');
    }

    public function edit(Provider $provider)
    {
        return view('admin.providers.edit', compact('provider'));
    }

    public function update(UpdateRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect()->route('providers.index');
    }

    public function show(Provider $provider) 
    {
        return view('admin.providers.show', compact('provider'));
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('providers.index');
    }
}
