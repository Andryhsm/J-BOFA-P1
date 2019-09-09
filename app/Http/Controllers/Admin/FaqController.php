<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\FaqRepository;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $faq_repo;

    public function __construct(FaqRepository $faq_repo){
        $this->faq_repo = $faq_repo;
    }

    public function index()
    {
        //
        return view('admin.faq.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $question = false;
        return view('admin.faq.form',compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->faq_repo->createFaq($request->all());
        return redirect('admin/faq/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $question = $this->faq_repo->findFaq($id);
        return view('admin.faq.form',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->faq_repo->updateFaq($id,$request->all());
        return view('admin.faq.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->faq_repo->deleteFaq($id);
        return redirect('admin/faq');
    }

    public function getAll(){
        $faqs = $this->faq_repo->getAll();
        $data_tables = DataTables::collection($faqs);
        $data_tables->EditColumn('name', function ($faq) {
            if(isset($faq->name))
            {
                return $faq->name;
            }
                
        })->EditColumn('question', function ($faq) {
            if(isset($faq->question))    
                return $faq->question;
        })->EditColumn('response', function ($faq) {
            if(isset($faq->respone)) 
                return $faq->respone;
        })->EditColumn('created_at', function ($faq) {
            if(isset($faq->created_at)) 
                return $faq->created_at;
        })->EditColumn('status', function ($faq) {
            switch ($faq->status) {
                 case 0:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$faq->id.'">
                                  <input type="checkbox" class="form-check-input" >
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
                case 1:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$faq->id.'">
                                  <input type="checkbox" class="form-check-input" checked>
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
               
                
             }
        })->EditColumn('action', function ($faq) {
            return view("admin.faq.action", ['faq' => $faq]);
        });
        return $data_tables->rawColumns(['status','action'])->make(true);
    }

    public function updateStatus(Request $request){
        $id = $request->all()['faq_id'];
        $status = $this->faq_repo->changeStatus($id);
        return $status;
    }
}
