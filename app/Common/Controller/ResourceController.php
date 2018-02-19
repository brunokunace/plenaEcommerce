<?php

namespace App\Common\Controller;

use App\Common\Repository\Repository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

/**
 * Class ResourceController
 * @package App\Http\Content\Controllers
 */
class ResourceController extends Controller
{
    /**
     * @var string
     */
    protected $domain;

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * @var int
     */
    protected $offset;

    /**
     * ResourceController constructor.
     * @param Repository $repository
     * @param $domain
     * @param $offset
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @param  Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $data = $this->repository->latest($this->offset);
        $properties = $this->repository->properties();
        $domain = $this->domain;
        return view("{$domain}.index", compact('data', 'domain', 'properties'))
            ->with('i', ($request->input('page', 1) - 1) * $this->offset);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("{$this->domain}.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
       // $request->validate($this->repository->validates());

        $this->repository->create($request->all());
        return redirect()->route("{$this->domain}.index")
            ->with('success', $this->repository->message(['store.success']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $data = $this->repository->read($id);
        return view("{$this->domain}.show", compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $data = $this->repository->read($id);
        return view("{$this->domain}.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //$request->validate($this->repository->validates());

        $this->repository->update($id, $request->all());
        return redirect()->route("{$this->domain}.index")
            ->with('success', $this->repository->message(['update.success']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->repository->destroy($id);
        return redirect()->route("{$this->domain}.index")
            ->with('success', $this->repository->message('destroy.success'));
    }
}
