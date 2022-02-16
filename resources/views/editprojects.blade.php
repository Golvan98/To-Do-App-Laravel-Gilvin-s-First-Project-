<x-firstlayout>

<div id="header" class="items-center justify-center col-span-8 flex flex-col ml-16 mt-24 bg-gray-500 mr-96 pl-24 pr-16 py-4" >
<header class="flex whitespace-pre text-white mt-2"> {{$projects->project_name}}
<button class="text-center bg-black px-0.5 hover:bg-gray-300 hover:text-black py-1 rounded ml-1 mb-2"> <a href ="/projects/{{$projects->id}}/create">  Add Task </button>    </header>
</div>


<div class="items-center justify-center text-center ml-4 pr-48">
<table class="text-left bg-gray-500 mt-8 mr-12 ">

  <tr>
	  
  <th class="whitespace-pre px-36 py-4 "> Task Name </th>
	<th class="whitespace-pre px-36 py-4"> Task Status </th>
  <th class="whitespace-pre px-36 py-4"> Action </th>

  </tr>

	 
  @foreach ($tasks as $task) 
  <tr> 
	  <th class="border border-red-300 pl-36 py-1">   {{ $task->task_description}}  
    <a href="/project/{{$projects->id}}/task/{{$task->id}}/edit">
      <button class="bg-gray-400 text-white rounded px-2 hover:bg-gray-700"> Edit Task </a> </button>
      <form method="POST" action="/deletetask/{{$task->id}}"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                       class="ml-24 bg-red-500 text-white rounded mt-2 pb-4 px-2 hover:bg-white hover:text-black">
					   Delete Task
						</button>
						</form>	

  </th>
    
    
    
    
    
    
    @if($task->completed =='1')
    <th class="flex text-left ml-9 border border-red-300 pl-28 py-1">  Completed 
    <form method="POST" action="/projects/{{$projects->id}}/updatestatus/{{$task->id}}">
                    @csrf
                    @method('patch')                  
                    <button type="submit" 
                       class="bg-black text-white rounded ml-1 pb-4 px-2 hover:bg-white hover:text-black">
					           Mark Incomplete
                     </button>              
                     </form>	  
    </th>
   
    @else
      <th class="flex text-left ml-9 border border-red-300 pl-28 py-1"> In Progress 
  
    <form method="POST" action="/projects/{{$projects->id}}/{{$task->id}}/completestatus">
                    @csrf
                    @method('patch')                  
                    <button type="submit" 
                       class="bg-black text-white rounded ml-1 pb-4 px-2 hover:bg-white hover:text-black">
					           Mark Complete
                     </button>               
                     </form>	  
  
      </th>
    @endif
    <th class="text-center"> <form method="POST" action="/addmember/{{$projects->id}}">
                    @csrf
                    @method('POST')
                    
                    <button type="submit" 
                       class="border border-red-500-solid bg-black text-white rounded ml-8 py-4 px-4 mr-1  hover:bg-blue-500">
					           Manage Members 
                     </button>  
                                
						</form>	  
 
	</tr>
   @endforeach 
	 </table>

				
</div>
</x-firstlayout>