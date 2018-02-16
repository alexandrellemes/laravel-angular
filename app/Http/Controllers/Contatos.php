<?php

namespace App\Http\Controllers;

//use App\Contato;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManager;
use Models\Entities\Contatos as Contato;

class Contatos extends Controller
{

    /* @var \LaravelDoctrine\ORM\Facades\EntityManager() $entityManager */
    protected $entityManager;

    /* @var \Models\Repositories\ContatosRepository $contatoRepository */
    protected $contatoRepository;

    public function __construct()
    {
        $this->entityManager = app('em');
        $this->contatoRepository = $this->entityManager->getRepository(Contato::class);
    }

    public function lista() {
        $contatos = $this->index();
        return view('index', [ 'contato' => $contatos]);
    }

    /**
     * Exibir uma listagem dos registros
     *
     * @return Response
     */
    public function index($id = null) {

        if ($id == null) {
            return $this->contatoRepository->getAllContatos();
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
        $post = new Contato();


        $post->setNome($request->input('nome'));
        $post->setEmail($request->input('email'));
        $post->setTelefone($request->input('telefone'));
        $post->setPosicao($request->input('posicao'));

        $this->entityManager->persist($post);
        $this->entityManager->flush();

        return 'Contato criado com sucesso com o id ' . $post->getId();
    }


    /**
     * Exibir um registo expecífico.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return $this->contatoRepository->find($id); // Contato::find($id);
    }


    /**
     * Editar um registro específico.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $contato = Contato::find($id);


        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->posicao = $request->input('posicao');
        $contato->save();


        return "Usuário #" . $contato->id . " editado com sucesso.";
    }


    /**
     * Remover um registro específico.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id) {

        $contato = Contato::find($id);
        $contato->delete();


        return "Contato #" . $id. " excluído com sucesso.";
    }


}