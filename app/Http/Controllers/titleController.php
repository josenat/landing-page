<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetitleRequest;
use App\Http\Requests\UpdatetitleRequest;
use App\Repositories\titleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Title;
use Flash;
use Response;

class titleController extends AppBaseController
{
    /** @var  titleRepository */
    private $titleRepository;

    public function __construct(titleRepository $titleRepo)
    {
        $this->titleRepository = $titleRepo;
    }

    /**
     * Display a listing of the title.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $exito = false;
        if ($titles = $this->titleRepository->all()) {
            $exito = true;
        }

        // si la solicitud es a través de ajax     
        if ($request->ajax()) {
            // si ocurrió un error
            if ($exito == false) {
                // retornar mensaje en formato json
                return response()->json("Error de operacion");
            }
            // retornar data en formato json
            return response()->json($titles);
        
        } else {  
            return view('titles.index')->with('titles', $titles);
        } 

        
    }

    /**
     * Show the form for creating a new title.
     *
     * @return Response
     */
    public function create()
    {
        return view('titles.create');
    }

    /**
     * Store a newly created title in storage.
     *
     * @param CreatetitleRequest $request
     *
     * @return Response
     */
    public function store(CreatetitleRequest $request)
    {
        $input = $request->all();

        $title = $this->titleRepository->create($input);

        Flash::success('Title saved successfully.');

        return redirect(route('titles.index'));
    }

    /**
     * Display the specified title.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $title = $this->titleRepository->find($id);

        if (empty($title)) {
            Flash::error('Title not found');

            return redirect(route('titles.index'));
        }

        return view('titles.show')->with('title', $title);
    }

    /**
     * Show the form for editing the specified title.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $title = $this->titleRepository->find($id);

        if (empty($title)) {
            Flash::error('Title not found');

            return redirect(route('titles.index'));
        }

        return view('titles.edit')->with('title', $title);
    }

    /**
     * Update the specified title in storage.
     *
     * @param int $id
     * @param UpdatetitleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetitleRequest $request)
    {
        $title = $this->titleRepository->find($id);

        if (empty($title)) {
            Flash::error('Title not found');

            return redirect(route('titles.index'));
        }

        $title = $this->titleRepository->update($request->all(), $id);

        Flash::success('Title updated successfully.');

        return redirect(route('titles.index'));
    }

    /**
     * Remove the specified title from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $title = $this->titleRepository->find($id);

        if (empty($title)) {
            Flash::error('Title not found');

            return redirect(route('titles.index'));
        }

        $this->titleRepository->delete($id);

        Flash::success('Title deleted successfully.');

        return redirect(route('titles.index'));
    }
}
