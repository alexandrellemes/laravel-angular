<?php

namespace App\Http\Controllers;

//use App\User;
use Doctrine\ORM\Query;
use Models\Entities\Users as User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Models\Repositories\UsersRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManager;

class Users extends Controller
{

    /* @var \LaravelDoctrine\ORM\Facades\EntityManager() $entityManager */
    protected $entityManager;

    /* @var \Models\Repositories\UsersRepository $userRepository */
    protected $userRepository;

    public function __construct()
    {
        $this->entityManager = app('em');
        $this->userRepository = $this->entityManager->getRepository(User::class);
    }

    /**
     * Exibir uma listagem dos registros
     *
     * @return Response
     */
    public function index($id = null) {

//        dd(\App\User::orderBy('id', 'asc')->get());
//        dd($this->userRepository->getAllUsers());

        if ($id == null) {
            return $this->userRepository->getAllUsers(); //User::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }


    /**
     * Salva um registro recém-criado.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $post = new User();


        $post->nome = $request->input('nome');
//        $post->email = $request->input('email');
        $post->telefone = $request->input('telefone');
        $post->posicao = $request->input('posicao');
        $post->save();


        return 'User criado com sucesso com o id ' . $post->getId();
    }


    /**
     * Exibir um registo expecífico.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return $this->userRepository->find($id); // User::find($id);
    }


    /**
     * Editar um registro específico.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $User = User::find($id);


        $User->nome = $request->input('nome');
        $User->email = $request->input('email');
        $User->telefone = $request->input('telefone');
        $User->posicao = $request->input('posicao');
        $User->save();


        return "Usuário #" . $User->id . " editado com sucesso.";
    }


    /**
     * Remover um registro específico.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id) {

        $User = User::find($id);
        $User->delete();


        return "User #" . $id. " excluído com sucesso.";
    }


}