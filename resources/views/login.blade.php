<x-firstlayout>

<div class="flex items-center justify-center text-white col-span-8 bg-no-repeat bg-fixed bg-cover row-span-6 ml-1 "
                style="background-image: url('storage/images/office.jpg');"> 
                <div class="bg-gray-300 rounded-xl border border-black ">
                <form method="POST" action="/sessionlogin" class="px-6 py-4 rounded-xl text-black">
                            @csrf
                            <header class="flex items-center justify-center">
                                <h5 class="my-1 text-black"> Login </h5>
                            </header>
                                             
                         <label class="block mb-2 uppercase font-bold text-xs text-black"
		            for="email"
	                >
	                email
	                </label>

	                <input class="border border-gray-400 p-0.5 w-full"
			        type="email"
			        name="email"
			        id="email"
		        	required
			        >
                    <br>
                    
	                <input class="border border-gray-400 p-0.5 w-full"
			        type="password"
			        name="password"
			        id="password"
		        	required
			        >
                
                                       
                        <div class="flex justify-center">
                        <button type="submit" class="bg-black justify-center rounded-full text-xs font-semibold text-white uppercase py-2 px-3"> Login </button>
                        
                        </div>
                        </form>       

                
                        
                       
                </div>


</div>


</x-firstlayout>