<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSongsRequest;
use App\Http\Requests\UpdateSongsRequest;
use App\Repositories\SongsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SongsController extends AppBaseController
{
    /** @var  SongsRepository */
    private $songsRepository;

    public function __construct(SongsRepository $songsRepo)
    {
        $this->songsRepository = $songsRepo;
    }

    /**
     * Display a listing of the Songs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $songs = $this->songsRepository->all();

        return view('songs.index')
            ->with('songs', $songs);
    }

    /**
     * Show the form for creating a new Songs.
     *
     * @return Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created Songs in storage.
     *
     * @param CreateSongsRequest $request
     *
     * @return Response
     */
    public function store(CreateSongsRequest $request)
    {
        $input = $request->all();

        $songs = $this->songsRepository->create($input);

        Flash::success('Songs saved successfully.');

        return redirect(route('songs.index'));
    }

    /**
     * Display the specified Songs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $songs = $this->songsRepository->find($id);

        if (empty($songs)) {
            Flash::error('Songs not found');

            return redirect(route('songs.index'));
        }

        return view('songs.show')->with('songs', $songs);
    }

    /**
     * Show the form for editing the specified Songs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $songs = $this->songsRepository->find($id);

        if (empty($songs)) {
            Flash::error('Songs not found');

            return redirect(route('songs.index'));
        }

        return view('songs.edit')->with('songs', $songs);
    }

    /**
     * Update the specified Songs in storage.
     *
     * @param int $id
     * @param UpdateSongsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSongsRequest $request)
    {
        $songs = $this->songsRepository->find($id);

        if (empty($songs)) {
            Flash::error('Songs not found');

            return redirect(route('songs.index'));
        }

        $songs = $this->songsRepository->update($request->all(), $id);

        Flash::success('Songs updated successfully.');

        return redirect(route('songs.index'));
    }

    /**
     * Remove the specified Songs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $songs = $this->songsRepository->find($id);

        if (empty($songs)) {
            Flash::error('Songs not found');

            return redirect(route('songs.index'));
        }

        $this->songsRepository->delete($id);

        Flash::success('Songs deleted successfully.');

        return redirect(route('songs.index'));
    }
}
