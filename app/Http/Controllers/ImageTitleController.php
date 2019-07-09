<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageTitleRequest;
use App\Http\Requests\UpdateImageTitleRequest;
use App\Repositories\ImageTitleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\ImageTitle; use App\Models\Image;
use Flash;
use Response;

class ImageTitleController extends AppBaseController
{
    /** @var  ImageTitleRepository */
    private $imageTitleRepository;

    public function __construct(ImageTitleRepository $imageTitleRepo)
    {
        $this->imageTitleRepository = $imageTitleRepo;
    }

    /**
     * Display a listing of the ImageTitle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    { 
        $imageTitles = ImageTitle::orderBy("row_num","asc")->get();
        return view('image_titles.index')
            ->with('imageTitles', $imageTitles);
    }

    /**
     * Show the form for creating a new ImageTitle.
     *
     * @return Response
     */
    public function create()
    {
        return view('image_titles.create');
    }

    /**
     * Store a newly created ImageTitle in storage.
     *
     * @param CreateImageTitleRequest $request
     *
     * @return Response
     */
    public function store(CreateImageTitleRequest $request)
    {
        $input = $request->all();

        $imageTitle = $this->imageTitleRepository->create($input);

        Flash::success('Image Title saved successfully.');

        return redirect(route('imageTitles.index'));
    }

    /**
     * Display the specified ImageTitle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $imageTitle = $this->imageTitleRepository->find($id);

        if (empty($imageTitle)) {
            Flash::error('Image Title not found');

            return redirect(route('imageTitles.index'));
        }

        return view('image_titles.show')->with('imageTitle', $imageTitle);
    }

    /**
     * Show the form for editing the specified ImageTitle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $imageTitle = $this->imageTitleRepository->find($id);

        if (empty($imageTitle)) {
            Flash::error('Image Title not found');

            return redirect(route('imageTitles.index'));
        }

        return view('image_titles.edit')->with('imageTitle', $imageTitle);
    }

    /**
     * Update the specified ImageTitle in storage.
     *
     * @param int $id
     * @param UpdateImageTitleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImageTitleRequest $request)
    {
        $imageTitle = $this->imageTitleRepository->find($id);

        if (empty($imageTitle)) {
            Flash::error('Image Title not found');

            return redirect(route('imageTitles.index'));
        }

        $imageTitle = $this->imageTitleRepository->update($request->all(), $id);

        Flash::success('Image Title updated successfully.');

        return redirect(route('imageTitles.index'));
    }

    /**
     * Remove the specified ImageTitle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $imageTitle = $this->imageTitleRepository->find($id);

        if (empty($imageTitle)) {
            Flash::error('Image Title not found');

            return redirect(route('imageTitles.index'));
        }

        $this->imageTitleRepository->delete($id);

        Flash::success('Image Title deleted successfully.');

        return redirect(route('imageTitles.index'));
    }
}
