<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::all();
        return view('testeo', [
            'accounts' => $accounts,
            'isOk' => false,
        ]);

        // return view('testeo', [
        //     'nombre' => 'Juan',
        //     'apellido' => 'Perez',
        //     'edad' => 12,
        //     'tarjetas' => [
        //         'Visa',
        //         'Mastercard',
        //         'American Express'
        //     ],
        //     'mascotas' => [
        //         [
        //             'nombre' => 'Firulais',
        //             'raza' => 'Pastor Aleman',
        //             'edad' => 5,
        //         ],
        //         [
        //             'nombre' => 'Toby',
        //             'raza' => 'Bulldog',
        //             'edad' => 13,

        //         ],
        //     ]
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //
    }
}
