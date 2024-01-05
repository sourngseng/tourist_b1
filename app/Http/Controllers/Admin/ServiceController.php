<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * បង្ហាញនូវ Record ទាំងអស់នៅលើ List នៃ View របស់យើងក្នុងទម្រង់ Table
     */
    public function index()
    {
        $data['services']=Service::get();
        return view('admin.services.index',$data);
    }

    /**
     * បង្ហាញ Form ដើម្បីបង្កើត​ Record ថ្មី
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * ធ្វើការរក្សាទុក​ទិន្ន​ន័យថ្មី ទៅកាន់ Storage(Table)
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'status' => 'required',
        ]);

        $file = $request->file('image');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/uploads', $fileName);

		$saveData = ['title' => $request->title, 
                    'description' => $request->description,                     
                    'status'=>$request->status=='on'?1:0,
                    'image' => $fileName
                ];	
        Service::create($saveData);
    

        return redirect()->route('admin.services')->with('success','Service has been created successfully.');
    }

    /**
     * ធ្វើការបង្ហាញ Record តាម ID (Read Data).
     */
    public function show(string $id)
    {
        $service=Service::find($id);
        return view('admin.services.show',compact('service'));
    }

    /**
     * ធ្វើការបង្ហាញ Form ដើម្បីកែប្រែនូវ Recordជាក់លាក់ណាមួយ
     */
    public function edit(string $id)
    {
        //Edit service
        $service=Service::find($id);
        return view('admin.services.edit',compact('service'));
    }

    /**
     * ធ្វើការកែប្រែនូវ Recordជាក់លាក់ណាមួយនៅក្នុង​ storage(table)
     */
    public function update(Request $request, string $id)
    {
        $fileName = '';
		$editData = Service::find($id);
		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$fileName = time() . '.' . $file->getClientOriginalExtension();
			$file->storeAs('public/uploads', $fileName);
			if ($editData->image) {
				Storage::delete('public/uploads/' . $editData->image);
			}
		} else {
			$fileName = $request->old_image;
		}

		$editDataRecord = ['title' => $request->title,
                            'description' => $request->description,
                            'status'=>$request->status=='on'?1:0,
                            'image' => $fileName                          
                            ];

		$editData->update($editDataRecord);
        if($editData){
            return redirect()->route('admin.services')->with('success','Service has been update successfully');
        }
    }

    /**
     * ធ្វើការលុប Record ចេញពី Storage(Table)
     */
    public function destroy(string $id)
    {
        //delete service
        $service=Service::find($id);
        $service->delete();      
        return redirect()->route('admin.services')->with('success','Service has been deleted successfully');
    }
}
