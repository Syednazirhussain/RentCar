<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePagesRequest;
use App\Http\Requests\Admin\UpdatePagesRequest;
use App\Repositories\Admin\PagesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Session;

class PagesController extends Controller
{
    /** @var  PagesRepository */
    private $pagesRepository;

    public function __construct(PagesRepository $pagesRepo)
    {
        $this->pagesRepository = $pagesRepo;
    }

    /**
     * Display a page information.
     *
     * @param Page Code
     * @return Response
     */
    public function index($page_code)
    {
        $page = $this->pagesRepository->getPageByCode($page_code);
        return view('admin.pages.edit')->with('page', $page);
    }

    /**
     * Update the specified Pages in storage.
     *
     * @param  int              $id
     * @param UpdatePagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePagesRequest $request)
    {
        $pages = $this->pagesRepository->findWithoutFail($id);


        if (empty($pages)) {
            Session::Flash('msg.error', 'Pages not found');

            return redirect(route('admin.pages.index'));
        }

        $short_code = $pages->short_code;

        $pages = $this->pagesRepository->update($request->all(), $id);

        Session::Flash('msg.success', 'Pages updated successfully.');

        return redirect(route('admin.page.index', [$short_code]));
    }

}
