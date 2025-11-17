<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUrl;
use App\Models\Url;
use Illuminate\Http\Request;
use Str;

class UrlController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('url.create');
    }

    public function store(CreateUrl $request)
    {


        $shorter_url = Str::before(Str::uuid()->toString(), '-');;

        $url = Url::create([
            'original_url' => $request->original_url,
            'short_url' => $shorter_url, //todo: needs to be unique, check before creating
        ]);

        return redirect()->route('url.show', $url);
    }

    public function show($id)
    {

    }

    public function edit(Url $url)
    {
        return view('url.edit')->with(['url' => $url]);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
