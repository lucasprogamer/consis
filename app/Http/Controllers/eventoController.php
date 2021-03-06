<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateeventoRequest;
use App\Http\Requests\UpdateeventoRequest;
use App\Repositories\eventoRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Image;

class eventoController extends AppBaseController
{
    /** @var  eventoRepository */
    private $eventoRepository;

    public function __construct(eventoRepository $eventoRepo)
    {
        $this->eventoRepository = $eventoRepo;
        $this->middleware('auth');
        $this->middleware('needsRole:admin');
    }

    /**
     * Display a listing of the evento.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->eventoRepository->pushCriteria(new RequestCriteria($request));
        $eventos = $this->eventoRepository->all();

        return view('eventos.index')
            ->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new evento.
     *
     * @return Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created evento in storage.
     *
     * @param CreateeventoRequest $request
     *
     * @return Response
     */
    public function store(CreateeventoRequest $request)
    {
      $file = $request->file('Imagem');
      $imagem = $request->Imagem;
      $result =  (object) $this->uploadImage($file);
      $newRequest = $request->all();
      $newRequest['url'] = $result->url;

        $evento = $this->eventoRepository->create($newRequest);



        Flash::success('evento saved successfully.');

        return redirect(route('eventos.index'));
    }

    /**
     * Display the specified evento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evento = $this->eventoRepository->findWithoutFail($id);

        if (empty($evento)) {
            Flash::error('evento not found');

            return redirect(route('eventos.index'));
        }

        return view('eventos.show')->with('evento', $evento);
    }

    /**
     * Show the form for editing the specified evento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evento = $this->eventoRepository->findWithoutFail($id);

        if (empty($evento)) {
            Flash::error('evento not found');

            return redirect(route('eventos.index'));
        }

        return view('eventos.edit')->with('evento', $evento);
    }

    /**
     * Update the specified evento in storage.
     *
     * @param  int              $id
     * @param UpdateeventoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateeventoRequest $request)
    {
        $evento = $this->eventoRepository->findWithoutFail($id);

        if (empty($evento)) {
            Flash::error('evento not found');

            return redirect(route('eventos.index'));
        }


        $file = $request->file('Imagem');
        $imagem = $request->Imagem;
        $result =  (object) $this->uploadImage($file);
        $newRequest = $request->all();
        $newRequest['url'] = $result->url;


        $evento = $this->eventoRepository->update($newRequest, $id);



        Flash::success('evento updated successfully.');

        return redirect(route('eventos.index'));

    }

    /**
     * Remove the specified evento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evento = $this->eventoRepository->findWithoutFail($id);

        if (empty($evento)) {
            Flash::error('evento not found');

            return redirect(route('eventos.index'));
        }

        File::

        $this->eventoRepository->delete($id);

        Flash::success('evento deleted successfully.');

        return redirect(route('eventos.index'));
    }
}
