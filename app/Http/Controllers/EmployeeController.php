<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;

class EmployeeController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */

  // public function myAuthentication(){
  //   if(Auth::check()){
  //     $employees = Employee::orderBy('firstName', 'asc')->get();
  //     return view('employee.welcome1')->with(['employees'=>$employees]);
  //   }
  //   if(Auth::guest())
  //   {
  //     return view('auth.login');
  //   }
  // }

//Add method to search for offices
  public function welcome1($search)
  {

    if($search == '' || $search == 'all')
    {
      $employees = Employee::orderBy('firstName', 'asc')->get();
    }
    else{
    $employees = Employee::where('firstName', 'LIKE', '%'.$search.'%')
    ->orWhere('lastName', 'LIKE','%'.$search.'%')
    ->get();
  }

    // return $employees;
    return view('employee.welcome1')->with(['employees'=>$employees]);

  }

  public function index()
  {
    if(Auth::check() && Auth::user()->email == 'admin@jazwares.com'){
      $employees = Employee::orderBy('firstName', 'asc')->get();
      return view('employee.index', compact('employees'));
    }
    // if(Auth::guest())
    else
    {
      return view('auth.login');
    }
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('employee.create');
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
      'firstName' => 'Required',
      'lastName' => 'Required',
      'title' => 'Required',
      'email' => 'Required'
    ]);

    $employee= $request->all();
    $model = Employee::create($employee);

    if ($request->hasFile('picture')) {
      // ensure every image has a different name
      // $filename = $request->file('picture')->getClientOriginalName();
      // $request->file('picture')->move(public_path('images'), $filename);

      $picture = $request->file('picture');
      $filename = $picture->getClientOriginalName();

      $image_resize = Image::make($picture->getRealPath());
      $image_resize->resize(200, 200);
      $image_resize->save(public_path('images/' .$filename));

      // save new image $file_name to database
      $model->update(['picture' => $filename]);
    }
    return redirect('employee');
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
    $employee = Employee::find($id);
    return view('employee.edit', compact('employee'));
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
    $this->validate($request, [
      'firstName' => 'Required',
      'lastName' => 'Required',
      'title' => 'Required',
      'email' => 'Required'
    ]);

    $employee = Employee::find($id);
    $employeeUpdate = $request->all();

    $picture = $request->file('picture');
    if(!empty($picture)){
      $filename = $picture->getClientOriginalName();

      $image_resize = Image::make($picture->getRealPath());
      $image_resize->resize(200, 200);
      $image_resize->save(public_path('images/' .$filename));

      // save new image $file_name to database
      //Delete picture
      $oldPic = public_path().'/images/'.$employee['picture'];
      \File::delete($oldPic);
      $employeeUpdate['picture'] = $filename;
    }

// dd($employeeUpdate);
    $employee->update($employeeUpdate);
    return redirect('employee');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $employee = Employee::find($id);

    //Delete picture
    $filename = public_path().'/images/'.$employee['picture'];
    \File::delete($filename);

    $employee->delete();
    return redirect('employee');
  }

  public function getSearch(Request $request){

    return view('employee.welcome1');
  }
}
