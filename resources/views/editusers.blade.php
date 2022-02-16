<x-firstlayout>

<div class="ml-4 mt-10">
<table class="bg-gray-500 ml-48 border border-red-500 px-64">
    <tr class="px-48"> 
        <th class="text-black underline ml-12 px-48 items-center justify-center whitespace-pre "> All Users </th>   
    </tr>
    @foreach ($users as $user)    
    <tr>
<form method="POST" action="/deleteuser/{{$user->id}}">
    @csrf
    @method('DELETE')
        <th class="whitespace-pre text-white rounded mt-2"> {{$user->username}} </th>

        <th class="flex"> 
        <button type="submit" class="ml-2 bg-red-500 text-white hover:bg-white hover:text-black whitespace-pre rounded mt-2"> Delete User </button> 
        </form>  
        <a href="/members/{{$user->id}}/editusers"> <button class="bg-black text-white hover:bg-white hover:text-black whitespace-pre rounded mt-2 mr-0.5"> Edit User </button> </a>
            
                              
    </th>
    
    </tr>
    @endforeach
</table>
</div>
        
</x-firstlayout>