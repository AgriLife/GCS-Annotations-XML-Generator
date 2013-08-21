<?php

class SitesController extends BaseController {

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
        $sites = $this->user->sites;
        $error = false;

        foreach ( $sites as $site )
        {
            $site->searches = $site->searches;
        }

        if ( empty( $sites ) )
        {
            $error = 'No sites found';
        }

        return Response::json(
            array(
                'error' => $error,
                'sites' => $sites->toArray(),
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
        $site = new Site;
        $site->user_id = $this->user->id;
        $site->name = Request::get('name');
        $site->url = Request::get('url');
        $site->comment = Request::get('comment');

        $site->save();

        if ( Request::get('searches') )
        {
            $search_ids = json_decode( Request::get('searches') );
            $site->searches()->sync($search_ids);
        }

        $site->searches = $site->searches;

        return Response::json(
            array(
                'error' => false,
                'site' => $site->toArray(),
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
        $site = Site::where('user_id', $this->user->id)->find($id);

        $site->searches = $site->searches;

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
        $site = Site::where('user_id', $this->user->id)->find($id);

        if ( Request::get('name') )
        {
            $site->name = Request::get('name');
        }

        if ( Request::get('url') )
        {
            $site->url = Request::get('url');
        }

        if ( Request::get('comment') )
        {
            $site->comment = Request::get('comment');
        }

        $site->save();

        if ( Request::get('searches') )
        {
            $search_ids = json_decode( Request::get('searches') );
            $site->searches()->sync($search_ids);
        }

        return Response::json(
            array(
                'error' => false,
                'message' => 'Site updated',
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
        $site = Site::where('user_id', $this->user->id)->find($id);

        $site->searches()->detach();

        $site->delete();

        return Response::json(
            array(
                'error' => false,
                'message' => 'Site deleted',
            ),
            200
        );
    }

}