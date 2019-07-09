<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Repositories\ImageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;

class ImageController extends AppBaseController
{
    /** @var  ImageRepository */
    private $imageRepository;

    public function __construct(ImageRepository $imageRepo)
    {
        $this->imageRepository = $imageRepo;
    }

    /**
     * Display a listing of the Image.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    { 
        $images = $this->imageRepository->all();

        return view('images.index')
            ->with('images', $images);
    }

    /**
     * Show the form for creating a new Image.
     *
     * @return Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created Image in storage.
     *
     * @param CreateImageRequest $request
     *
     * @return Response
     */
    public function store(CreateImageRequest $request)
    {
        $input = $request->all();

        $image = $this->imageRepository->create($input);

        Flash::success('Image saved successfully.');

        return redirect(route('images.index'));
    }

    /**
     * Display the specified Image.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $image = $this->imageRepository->find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        return view('images.show')->with('image', $image);
    }

    /**
     * Show the form for editing the specified Image.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $image = $this->imageRepository->find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        return view('images.edit')->with('image', $image);
    }

    /**
     * Update the specified Image in storage.
     *
     * @param int $id
     * @param UpdateImageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImageRequest $request)
    {
        $image = $this->imageRepository->find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        if ($newImage = $this->imageRepository->update($request->all(), $id)) {

            // borrar imagen anterior 
            $this->delete($image->path);

            Flash::success('Image updated successfully.');

            return redirect(route('images.index'));        
        }

        
    }

    /**
     * Remove the specified Image from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $image = $this->imageRepository->find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        if ($this->imageRepository->delete($id)) {
            // borrar archivo en local
            \File::delete('img/'.$image->path);
        }

        Flash::success('Image deleted successfully.');

        return redirect(route('images.index'));
    }

    /**
     * Delete the specified image from storage after an update.
     *
     * @param string $path
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function delete($path)
    {
        // borrar archivo en local
        \File::delete('img/'.$path);
    }
}
