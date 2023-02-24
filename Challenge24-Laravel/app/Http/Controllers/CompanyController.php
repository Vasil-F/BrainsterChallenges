<?php

namespace App\Http\Controllers;

use App\Mail\BasicMail;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\RedirectResponse;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request): RedirectResponse
    {
        
        $company = new Company;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->company = $request->company;

        $company->save();
        
        // Mail::to($request->email)
        // ->cc($request->email)
        // ->bcc($request->email)
        // ->send(new BasicMail);

        if(Auth::user()){
            return to_route('dashboard')->with('success', 'Компанијата е успешно додадена!');
        }
        return to_route('projects.index')->with('success', 'Компанијата е успешно додадена!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        return redirect();
    }
}
