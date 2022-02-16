
<x-firstlayout>

<div class="flex items-center justify-center text-white col-span-8 bg-no-repeat bg-fixed bg-cover row-span-6 ml-1 "
                style="background-image: url({{asset('/storage/images/office.jpg')}});"> 
                <div class="rounded-xl border border-white ">
				
                <form method="POST" action="/projects/store/" class=" p-6 rounded-xl text-black">
                            @csrf

                            <header class ="flex items-center justify-center">
                                <h5 class="my-1 text-white"> Create Project </h5>
                            </header>
                        
                        
                            
                            <input type="text" 
                            class="w-full text-sm focus:outline-none focus:ring my-2 h-10 rounded-xl" cols="30" rows="5" 
                            name="project_name"
						    id="project_name"
                            placeholder="Project Name"
                            required>
                        	

                                                                                                    
                        <button type="submit" class="bg-white rounded-full text-xs font-semibold text-black uppercase py-3 px-4"> Create Project </button>
                    
                        </form>    
                                                               
                </div>


      
</x-firstlayout>