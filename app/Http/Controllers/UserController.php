<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Todos os usuarios paginados
     */
    public function index()
    {
        $users = User::paginate(10);

        return response()->json($users);
    }
    /**
     * Um usuario pelo id
     */
    public function getById($id)
    {
        $user = User::findOrFail($id);

        return response()->json($user);
    }
    /**
     * Criar usuário
     *
     * @param $request Http/Request
     */
    public function create(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($user->save()) {
            return response()->json($user);
        }

        return response()->json(
            [
                'success' => false,
                'message' => 'Não foi possível criar o usuário'
            ]
        );
    }
    /**
     * Atualizar usuário pelo id
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id); // SELECT * FROM users where id = 1215

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($user->save()) {
            return response()->json($user);
        }

        return response()->json(
            [
                'success' => false,
                'message' => 'Não foi possível criar o usuário'
            ]
        );
    }
    /**
     * Apagar usuário pelo id
     */
    public function delete($id)
    {
        $user = User::find($id);

        if ($user->delete()) {
            return response()->json(
                [
                "id" => $id,
                "message" => "Usuário apagado com sucesso!"
                ], 200
            );
        }

        return response()->json(
            [
                "success" => false,
                "message" => "Não foi possível apagar o usuário"
            ], 422
        );
    }
}
