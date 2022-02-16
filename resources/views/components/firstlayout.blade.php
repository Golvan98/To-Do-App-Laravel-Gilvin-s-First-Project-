
<HTML>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<header class="bg-black py-2 text-left"> 
    <nav> 
        <button class="bg-gray-300 px-4 rounded-xl"> LOGO </button> 
        @auth
        <button class="float-right bg-gray-300 px-4 rounded-xl mr-2"> Welcome {{ auth()->user()->username }} ! </button> </a>
        <form method="POST" action="/logout" class="float-right bg-gray-300 px-4 rounded-xl mr-2">
        @csrf

        <button type="submit"> Log Out </button>

        </form>

        @else
      <a href="/login"> <button class="float-right bg-gray-300 px-4 rounded-xl mr-2"> Login </button> </a>
      <a href="/register"> <button class="float-right bg-gray-300 px-4 rounded-xl mr-2"> Register/Hello </button> </a>  
        @endauth
    </nav>
</header>
<main>
<div class="grid grid-cols-9 grid-rows-6 w-full h-full border py-2 border-gray-300 ">
<body class="bg-gray-300">

    <div class="col-span-1 bg-gray-500 row-span-6 ml-1"> 
        
        <div class="text-center"> <button class="bg-gray-300 px-4 py-2 rounded-xl my-3 mx-1">  Good Luck, Gilvin   </button> 
            <ul class="text-center space-y-4"> 
    
                 <div> <a href="/home">  <button class="bg-gray-300 px-10 py-2 rounded-xl my-2"> <li> HOME </button> </a> </li> </div>

                 <div> <a href="/todo"> <button class="bg-gray-300 px-10 py-2 rounded-xl my-2"> <li> TO DOs</button> </a> </li> </div>

                <div> <a href="/about"> <button class="bg-gray-300 px-10 py-2 rounded-xl my-2"> <li> ABOUT </button> </a> </li> </div>
            </ul>

        </div>
    

    </div>
        
    {{ $slot }}





        
    

</div>
</main>
</body>









</html>