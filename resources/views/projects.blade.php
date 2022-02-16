
<x-firstlayout>



<div id="header" class="items-center justify-center col-span-8 flex flex-col ml-12 mt-24 bg-gray-500 mr-96 pl-24 pr-16 py-4" >
    <header class="text-white"> PROJECTS </header>
</div>

   <div id="table" class="items-center justify-center text-center ml-4">
<table class="text-left bg-gray-500 mt-8 mr-12">
  <tr>
    <th class="whitespace-pre px-24 py-4 "> Members </th>
    <th class="whitespace-pre px-36 py-4">Project Status</th>
    <th class="whitespace-pre px-36 py-4"> Project Name </th>
  </tr>

  @foreach ($projects as $project)
  <tr>
  

   <th class="whitespace-pre ml-8 px-24 py-4">  @foreach($project->user as $users) <a href="/users/">{{$users->username}} @endforeach</th>  </a>
   @auth 
      <th class="ml-24 pl-28 py-1"> status  
         
        <a href="/projects/{{$project->id}}/edit"><button class="bg-gray-400 text-white rounded px-2 hover:bg-gray-700"> Edit Project </a>
        <form method="POST" action="/deleteproject/{{$project->id}}"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                       class="bg-red-300 text-white rounded ml-1 pb-4 px-2 hover:bg-red-500">
					   Delete Project
						</button>
						</form>	
</th>      
        @else
        <th class="text-left pl-44 py-1"> status  
      @endauth
    
    </button>
    <form method="POST" action="/projects/{{$project->id}}/update" class="my-2"> 
            @csrf
            @method('patch')
            @auth
            <th> <input class="ml-8 px-2 py-1"
			        type="text"
			        name="project_name"
			        id="project_name"
					value="{{ $project->project_name}}"
		        	required
			        >
          
              <button type="submit"
                        class="bg-gray-400 text-white rounded py-1 px-10 hover:bg-gray-700"
                    >
					
                    Update
                </button> 
					</th>
          @else
          <th class="text-center"> {{$project->project_name}} </th>

          @endauth
       
</form>
  </tr>
 @endforeach
</table>
</div>


 

</x-firstlayout>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

