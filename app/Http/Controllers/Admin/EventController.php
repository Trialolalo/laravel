<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Http\Requests\Admin\EventRequest;
use Debugbar;

class EventController extends Controller
{
  public function __construct(private Event $Event){}
  
  public function index()
  {
    try{

      $Events = $this->Event
        ->orderBy('created_at', 'desc')
        ->paginate(10);

      $view = View::make('admin.Events.index')
      ->with('Event', $this->Event)
      ->with('Events', $Events);

      if(request()->ajax()) {
          
          $sections = $view->renderSections(); 

          return response()->json([
              'table' => $sections['table'],
              'form' => $sections['form'],
          ], 200); 
      }

      return $view;

    }
    catch(\Exception $e){
      return response()->json([
        'message' => \Lang::get('admin/notification.error'),
      ], 500);
    }
  }

  public function create()
  {
    try {

      $Events = $this->Event
      ->orderBy('created_at', 'desc')
      ->paginate(10);


      $view = View::make('admin.Events.index')
        ->with('Events', $Events)
        ->with('Event', $this->Event)
        ->renderSections();

      return response()->json([
          'form' => $view['form']
      ], 200);

    } catch (\Exception $e) {
      return response()->json([
          'message' =>  \Lang::get('admin/notification.error'),
      ], 500);
    }
  }

  public function store(EventRequest $request)
  {            
    try{

      $data = $request->validated();

      unset($data['password_confirmation']);
      
      if (!$request->filled('password') && $request->filled('id')){
        unset($data['password']);
      }
  
      $this->Event->updateOrCreate([
        'id' => $request->input('id')
      ], $data);

      $Events = $this->Event
      ->orderBy('created_at', 'desc')
      ->paginate(10);

      if ($request->filled('id')){
        $message = \Lang::get('admin/notification.update');
      }else{
        $message = \Lang::get('admin/notification.create');
      }

      $view = View::make('admin.Events.index')
        ->with('Events', $Events)
        ->with('Event', $this->Event)
        ->renderSections();        

      return response()->json([
        'table' => $view['table'],
        'form' => $view['form'],
      ], 200);
    }
    catch(\Exception $e){
      return response()->json([
        'message' => $e->getMessage(),
      ], 500);
    }
  }

  public function edit(Event $Event)
  {
    try{

      $Events = $this->Event
      ->orderBy('created_at', 'desc')
      ->paginate(10);

      $view = View::make('admin.Events.index')
      ->with('Events', $Events)
      ->with('Event', $Event); 

      if(request()->ajax()) {

          $sections = $view->renderSections(); 
  
          return response()->json([
              'form' => $sections['form'],
          ], 200);
      }
              
      return $view;
    }
    catch(\Exception $e){
      return response()->json([
        'message' => \Lang::get('admin/notification.error'),
      ], 500);
    }
  }

  public function destroy(Event $Event)
  {
    try{
      $Event->delete();

      $Events = $this->Event
      ->orderBy('created_at', 'desc')
      ->paginate(10);

      $message = \Lang::get('admin/notification.destroy');
      
      $view = View::make('admin.Events.index')
        ->with('Event', $this->Event)
        ->with('Events', $Events)
        ->with('message', $message)
        ->renderSections();
      
      return response()->json([
          'table' => $view['table'],
          'form' => $view['form']
      ], 200);
    }
    catch(\Exception $e){
      return response()->json([
        'message' => \Lang::get('admin/notification.error'),
      ], 500);
    }
  }
}