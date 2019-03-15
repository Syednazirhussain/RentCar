<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateGeneralInformationRequest;
use App\Http\Requests\Admin\UpdateGeneralInformationRequest;
use App\Repositories\Admin\GeneralInformationRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Session;
use App\Models\Admin\GeneralInformation;

class GeneralInformationController extends Controller
{
    /** @var  GeneralInformationRepository */
    private $generalInformationRepository;

    public function __construct(GeneralInformationRepository $generalInformationRepo)
    {
        $this->generalInformationRepository = $generalInformationRepo;
    }

    /**
     * Display a listing of the GeneralInformation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->generalInformationRepository->pushCriteria(new RequestCriteria($request));
        $generalInformations = $this->generalInformationRepository->all();
        // dd($generalInformations->toArray()[0]);
        return view('admin.general_informations.index')->with('generalInformations', $generalInformations->toArray()[0]);
    }

    /**
     * Store a newly created GeneralInformation in storage.
     *
     * @param CreateGeneralInformationRequest $request
     *
     * @return Response
     */
    public function store(CreateGeneralInformationRequest $request)
    {
        $generalInformation = GeneralInformation::where('code', 'site-setting')->first();
        $generalInformation->name = $request->input('name');
        $generalInformation->short_name = $request->input('short_name');
        $generalInformation->title = $request->input('title');
        $generalInformation->helpline = $request->input('helpline');
        $generalInformation->contact = $request->input('contact');
        $generalInformation->email = $request->input('email');
        $generalInformation->instagram = $request->input('instagram');
        $generalInformation->pinterest = $request->input('pinterest');
        $generalInformation->twitter = $request->input('twitter');
        $generalInformation->youtube = $request->input('youtube');
        $generalInformation->linkdin = $request->input('linkdin');
        $generalInformation->facebook = $request->input('facebook');
        $generalInformation->about_description = $request->input('about_description');
        $generalInformation->footer_description = $request->input('footer_description');
        if ($request->hasFile('logo')) {
            if ($generalInformation->logo != null) {
                $unlink = str_replace($_SERVER['HTTP_ORIGIN'], $_SERVER['DOCUMENT_ROOT'], asset('storage/'.$request->image));
                if (file_exists($unlink)) {
                    unlink($unlink);
                }
            }
            $path = $request->file('logo')->store('public');
            $path = explode("/", $path);
            $count = count($path)-1;
            $generalInformation->logo = $path[$count];
        }
        if ($generalInformation->save()) {
            Session::Flash('msg.success', 'General Information saved successfully.');
        } else {
            Session::Flash('msg.error', 'General Information were not saved.');            
        }

        return redirect(route('admin.generalInformations.index'));
    }


}
