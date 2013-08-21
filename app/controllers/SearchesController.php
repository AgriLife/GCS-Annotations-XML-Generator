<?php

class SearchesController extends BaseController {

    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $searches = $this->user->searches;
        $error = false;

        foreach ( $searches as $search )
        {
            $search->sites = $search->sites;
        }

        if ( empty( $searches ) ) {
            $error = 'No searches found';
        }

        return Response::json(
            array(
                'error' => $error,
                'searches' => $searches->toArray(),
            ),
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $search = new Search;
        $search->user_id = $this->user->id;
        $search->name = Request::get('name');
        $search->label = Request::get('label');

        $search->save();

        return Response::json(
            array(
                'error' => false,
                'search' => $search->toArray(),
            ),
            200
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $site = Search::where('user_id', $this->user->id)->find($id);

        $site->sites = $site->sites;

        return Response::json(
            array(
                'error' => false,
                'site' => $site->toArray(),
            ),
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $search = Search::where('user_id', $this->user->id)->find($id);

        if ( Request::get('name') )
        {
            $search->name = Request::get('name');
        }

        if ( Request::get('label') )
        {
            $search->label = Request::get('label');
        }

        $search->save();

        return Response::json(
            array(
                'error' => false,
                'message' => 'Search updated'
            ),
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $search = Search::where('user_id', $this->user->id)->find($id);

        $search->sites()->detach();
        
        $search->delete();

        return Response::json(
            array(
                'error' => false,
                'message' => 'Search deleted',
            ),
            200
        );
    }

}