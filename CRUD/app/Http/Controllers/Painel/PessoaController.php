<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\User;

class PessoaController extends Controller {

    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = $this->user->all();

        return view('painel.users.index', compact('users'));
    }

    public function Cadastro() {
        return view('painel.users.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('painel.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $this->validate($request, $this->user->rules);

        $insert = $this->user->create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);
        if ($insert) {
            $sucess = 'Cadastrado com sucesso';
            return view('painel.users.create', compact('sucess'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $user = $this->user->find($id);

        return view('painel.users.create', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $formEdit = $request->all();
        $user = $this->user->find($id);
        $update = $user->update($formEdit);
        if($update) {
            $sucess = 'Editado com sucesso';
            return view('painel.users.create', compact('sucess'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user = $this->user->find($id);
        $delete = $user->delete();
        if ($delete) {
            return redirect()-> route('pessoas.index');
        }
        
    }


}
