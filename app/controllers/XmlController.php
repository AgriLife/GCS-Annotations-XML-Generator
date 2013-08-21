<?php

class XmlController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $search = Search::find($id);

        $search_sites = $search->sites;

        $xml = new SimpleXMLElement('<xml/>');

        $annotations = $xml->addChild('Annotations');

        foreach ($search_sites as $site) {
            $annotation = $annotations->addChild('Annotation');
            $annotation->addAttribute('about', $site->url);
            $label = $annotation->addChild('Label');
            $label->addAttribute('name', $search->label);
            $comment = $annotation->addChild('Comment', $site->comment);
        }

        $response = Response::make($annotations->asXML(), 200);
        $response->header('Content-Type', 'text/xml');

        return $response;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}