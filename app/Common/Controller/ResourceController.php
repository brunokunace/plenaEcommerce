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
        $domain = $this->domain;
        return view("{$this->domain}.create", compact('domain'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->repository->validates($request->all());
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
        $domain = $this->domain;
        $data = $this->repository->read($id);
        return view("{$this->domain}.show", compact('data', 'domain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $domain = $this->domain;
        $data = $this->repository->read($id);
        return view("{$this->domain}.create", compact('data', 'domain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->repository->validates($request->all());

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
            ->with('success', $this->repository->message(['destroy.success']));
    }
    public function destroyMultiple(Request $request)
    {
        $this->repository->destroyMultiple($request->items);
        return redirect()->route("{$this->domain}.index")
            ->with('success', $this->repository->message(['destroy.success']));
    }
}
