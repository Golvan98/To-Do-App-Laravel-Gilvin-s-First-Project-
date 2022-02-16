<x-firstlayout>

<div class="flex items-center justify-center text-white col-span-8 bg-no-repeat bg-fixed bg-cover row-span-6 ml-1 "
                style="background-image: url({{asset('/storage/images/office.jpg')}});"> 

                <div class="bg-gray-300 rounded-xl border border-black ">
                <form method="POST" action="/project/{{$projects->id}}/task/{{$tasks->id}}/update/confirm" class="px-6 py-4 rounded-xl text-black">
                            @csrf
							@method('patch')	
                            <header class="flex items-center justify-center">
                                <h5 class="my-1 text-black"> Update Task </h5>
                            </header>
                                             
                         <label class="block mb-2 uppercase font-bold text-xs text-black"
		            for="task_description"
	                >
	                task_description
	                </label>

	                <input class="border border-gray-400 p-0.5 w-full"
			        type=" task_description"
			        name=" task_description"
			        id=" task_description"
		        	required
			        >
                                       
                        <div class="flex justify-center">
                        <button type="submit" class="mt-2 bg-black justify-center rounded-full text-xs font-semibold text-white py-2 px-3"> Update Task </button>
                        
                        </div>
                        </form>       

                                                          
                </div>


</div>
</x-firstlayout>
