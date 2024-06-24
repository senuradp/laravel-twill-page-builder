<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PageDisplayController extends Controller
{

    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);

        if(!$page){
            abort(404);
        }

        return view('site.page', ['item' => $page]);

    }

}
