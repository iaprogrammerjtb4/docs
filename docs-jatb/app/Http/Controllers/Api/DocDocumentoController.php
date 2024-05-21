<?php

namespace App\Http\Controllers\Api;

use App\Models\DocDocumento;
use Illuminate\Http\Request;
use App\Http\Requests\DocDocumentoRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\DocDocumentoResource;

class DocDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $docDocumentos = DocDocumento::paginate();

        return DocDocumentoResource::collection($docDocumentos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocDocumentoRequest $request): DocDocumento
    {
        return DocDocumento::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(DocDocumento $docDocumento): DocDocumento
    {
        return $docDocumento;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocDocumentoRequest $request, DocDocumento $docDocumento): DocDocumento
    {
        $docDocumento->update($request->validated());

        return $docDocumento;
    }

    public function destroy(DocDocumento $docDocumento): Response
    {
        $docDocumento->delete();

        return response()->noContent();
    }
}
