<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\UserType;

class UserTypeController extends Controller {

    public function index() {
        $userstypes = UserType::all();
        return view('userstypes.index', compact('userstypes'));
    }

    public function create() {
        return view('userstypes.create');
    }

    public function store(Requests\UserTypeRequest $request) {
        UserType::create($request->all());
        return redirect('userstypes');
    }

    public function edit($id) {
        $usertype = UserType::findOrFail($id);
        return view('userstypes.edit', compact('usertype'));
    }

    public function update($id, Requests\UserTypeRequest $request) {
        $usertype = UserType::findOrFail($id);
        $usertype->update($request->all());
        return redirect('userstypes');
    }

}
