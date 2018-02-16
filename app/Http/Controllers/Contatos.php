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
        $contato = new Contato();


        $contato->setNome($request->input('nome'));
        $contato->setEmail($request->input('email'));
        $contato->setTelefone($request->input('telefone'));
        $contato->setPosicao($request->input('posicao'));

        $this->entityManager->persist($contato);
        $this->entityManager->flush();

        return 'Contato criado com sucesso com o id ' . $contato->getId();
    }

    /**
     * Exibir um registo expecífico.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
//         return \App\Contato::find($id);
//        return $this->entityManager->find(\Models\Entities\Contatos::class, $id);
        return $this->contatoRepository->findById($id);

    }


    /**
     * Editar um registro específico.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
//        $contato = Contato::find($id);
//        $contato = $this->contatoRepository->findById($id);
        $contato = $this->entityManager->find(\Models\Entities\Contatos::class, $id);
        $contato->setNome($request->input('nome'));
        $contato->setEmail($request->input('email'));
        $contato->setTelefone($request->input('telefone'));
        $contato->setPosicao($request->input('posicao'));

//        $contato->save();

        $this->entityManager->persist($contato);
        $this->entityManager->flush();

        return "Usuário #" . $contato->getId() . " editado com sucesso.";
    }


    /**
     * Remover um registro específico.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id) {

//        $contato = Contato::find($id);
//        $contato->delete();

        $contato = $this->entityManager->find(\Models\Entities\Contatos::class, $id);
        $this->entityManager->remove($contato);
        $this->entityManager->flush();

        return "Contato #" . $id. " excluído com sucesso.";
    }


}