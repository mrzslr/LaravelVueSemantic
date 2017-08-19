<?php

namespace App\Http\Controllers;

use App\Model\Movie;
use App\Model\Watchlist;
use Illuminate\Http\Request;
use Response;

class MovieController extends Controller
{
    private $movie;
    private $watchlist;

    public function __construct(Movie $movie,Watchlist $watchlist)
    {
        $this->movie = $movie;
        $this->watchlist=$watchlist;
    }
    public function index()
    {
        $movies = $this->movie->all();
        return Response::json([
            'movies' => $movies,
        ]);
    }

    public function saveBookmark(Request $request,$id)
    {

        $wl=new Watchlist;
        $wl->movie_id=$id;
        $wl->save();

            return Response::json([
                'saved'=>'true'
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    public function search()
    {
        // $search=$request->search;
        // $movies=$this->movie->where('title','LIKE',"%$search%");
        return Response::json([
            'movies' => 'hello',
        ]);
    }
    public function show(Movie $movie)
    {
        return Response::json([
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return Response::json([
            'deleted' => true,
        ]);
    }
}
