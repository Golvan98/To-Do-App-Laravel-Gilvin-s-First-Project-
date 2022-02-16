<x-firstlayout>

<div>
<table class="bg-gray-500 ml-24 mt-10 border border-red-500 px-64">
    <tr class="px-48"> 
        <th class="ml-12 px-48 items-center justify-center text-white"> Nonmembers </th>         
    </tr>
     @foreach ($nonmembers as $users)
     <tr class="px-48"> 
 <form method="POST" action="/newproject/{{$projects->id}}/getandstore/newuser/{{$users->id}}">
    @csrf 
    <th class="text-white mt-2"> {{ $users->username}} </th>  
     <th> <button type="submit" class="whitespace-pre text-white bg-black hover:bg-white hover:text-black rounded mt-2"> Add Member </button>
    </form>
@endforeach    
    </tr>
</table>
</div>

<div class="ml-96 mt-10 ml-24">
<table class="bg-gray-500 ml-48 border border-red-500 px-64">
    <tr class="px-48"> 
        <th class="text-white ml-12 px-48 items-center justify-center whitespace-pre "> Project Members </th>   
    </tr>
    @foreach ($projects->user as $users)    
    <tr>
<form method="POST" action="/removemember/{{$users->id}}/deletethemember/{{$projects->id}}">
    @csrf
    @method('DELETE')
        <th class="whitespace-pre text-white rounded mt-2"> {{$users->username}} </th>
        <th> <button class="bg-black text-white hover:bg-white hover:text-black whitespace-pre rounded mt-2"> Delete Member </button>  </th>
     </form>
    </tr>
    @endforeach
</table>
</div>
</x-firstlayout>

