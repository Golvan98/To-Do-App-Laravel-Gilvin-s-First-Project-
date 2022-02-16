<x-firstlayout>



<div class="text-white col-span-8 bg-no-repeat bg-fixed bg-cover row-span-6 ml-1 "

flex items-center justify-center text-white col-span-8 bg-no-repeat bg-fixed bg-cover row-span-6 ml-1 
                style="background-image: url('storage/images/office.jpg');"> 


                <div class="ml-24 mt-24 space-y-4">
                @auth	            
                <a href="/projects/create"> <button class="bg-gray-500 px-3 py-1"> Add Projects  </button> </a> <br> <br>
                <a href="/projects"><button class="bg-gray-500 px-3 py-1"> Projects </button> </a> <br> <br>
                <a href="/userslist"><button class="bg-gray-500 px-3 py-1"> Users </button> </a> <br> <br>
                @else 
	            <a href="/projects"><button class="bg-gray-500 px-3 py-1"> Projects </button> </a> <br> <br>
                @endauth	
                </div>


</div>



</x-firstlayout>