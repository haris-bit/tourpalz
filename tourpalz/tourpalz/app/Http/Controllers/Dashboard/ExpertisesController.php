<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expertise;

use App\Helpers\SlimImage;
use App\Libraries\Slim;

class ExpertisesController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $expertises =  Expertise::all();
        return view('dashboard.pages.expertises.list',compact('expertises'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('dashboard.pages.expertises.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
    
        $image_name = 'image';
        $if_not_set_image = 'placeholder-512x512.png';
        $image_upload_path = './public/expertise_image/';
        $image_upload = SlimImage::slim_image_upload($image_name, $image_upload_path, $if_not_set_image);
       
        $expertise = Expertise::create([
            'name' => $request->get('name'),
            'image' => $image_upload['file'] ?? ''
        ]);

    
        return redirect()->route('admin.expertises.index')
                        ->with('success','Expertises add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Expertise $expertise)
    {
       
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Expertise $expertise)
    {
        $expertise = $expertise;
        
    
        return view('dashboard.pages.expertises.edit', compact('expertise'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Expertise $expertise, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        

        
        $image_name = 'image';
        $if_not_set_image = 'placeholder-512x512.png';
        $image_upload_path = './public/expertise_image/';
        $image_upload = SlimImage::slim_image_upload($image_name, $image_upload_path, $if_not_set_image);
       
        


        $expertise->update($request->only('name'));

       
        if($image_upload['file']!="placeholder-512x512.png"){
            $expertise->update([
            'image' => $image_upload['file'] ?? ''
        ]);
        }
        

      
    
      
        return redirect()->route('admin.expertises.index')
                        ->with('success','Expertises updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expertise $expertise)
    {
        $expertise->delete();

        return redirect()->route('admin.expertises.index')
                        ->with('success','Expertise deleted successfully');
    }
}
