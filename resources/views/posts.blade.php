<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gradient-to-r from-blue-300 to-blue-50">
    <body class="bg-gradient-to-r from-gray-950 to-gray-50">
        <form  action="/Posts" method="post" class=" my-2  bg-blue-50 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-[10px] py-6 w-[70%] mx-auto" enctype="multipart/form-data">
       @csrf
                <div class="grid md:grid-cols-2 md:gap-6   lg:mx-10">
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-blue-900 dark:text-white"> Title</label>
                        <input type="text" id="name" required name="Title"  class="shadow-sm bg-gray-50 outline-none py-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Title">
                    </div>
                    <div class="mb-5">  
                        <select id="Catgories" required name="destination_id" class="bg-gray-50 mt-8 border outline-none h-[40px] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Chose the destination</option>
                            @foreach ($destinations as $destination)
                            <option value="{{$destination['id']}}">{{$destination['name']}}</option>                                
                            @endforeach       
                        </select>                               
                    </div>
                </div>
                
                <div class="mb-10 mx-10  lg:mx-10 h-[30vh]">
        
                    <label for="message" class="block mb-2 text-sm font-medium text-blue-900 dark:text-white">description</label>
                    <textarea id="message" required name="description" rows="4"  class="block outline-none p-2.5 w-full h-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Share Your content here ..."></textarea>
        
                </div>
                
        
                    <div class="grid mb-10 md:grid-cols-2 md:gap-6 mx-4  lg:mx-10">
        
                        <div id="image-container" class="grid mb-10 md:grid-cols-1 md:gap-6 mx-4 lg:mx-10">
                            <div class="">
                                <label class="block mb-2 text-sm font-medium text-blue-900" for="multiple_files">images</label>
                                <input type="file" name="image[]"  required class="block py-[8px] outline-none w-full bg-white rounded-lg text-sm text-slate-500 file:mr-4 file:py-2 file:ml-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                                <button class="mt-2" type="button" onclick="addImageInput()"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-blue-500" viewBox="0 0 24 24">
                                    <path
                                      d="M12 16a.749.749 0 0 1-.542-.232l-5.25-5.5A.75.75 0 0 1 6.75 9H9.5V3.25c0-.689.561-1.25 1.25-1.25h2.5c.689 0 1.25.561 1.25 1.25V9h2.75a.75.75 0 0 1 .542 1.268l-5.25 5.5A.749.749 0 0 1 12 16zm10.25 6H1.75C.785 22 0 21.215 0 20.25v-.5C0 18.785.785 18 1.75 18h20.5c.965 0 1.75.785 1.75 1.75v.5c0 .965-.785 1.75-1.75 1.75z"
                                      data-original="#000000"></path>
                                  </svg></button>
                            </div>
                        </div>
                        
                        

                        <script>
                            function addImageInput() {
                                var container = document.getElementById('image-container');
                                var newInput = document.createElement('input');
                                newInput.type = 'file';
                                newInput.name = 'image[]';
                                newInput.required = true;
                                newInput.classList.add('block', 'py-[8px]', 'outline-none', 'w-full', 'bg-white', 'rounded-lg', 'text-sm', 'text-slate-500', 'file:mr-4', 'file:py-2', 'file:ml-2', 'file:px-4', 'file:rounded-md', 'file:border-0', 'file:text-sm', 'file:font-semibold', 'file:bg-blue-50', 'file:text-blue-700', 'hover:file:bg-blue-100');
                        
                                container.appendChild(newInput);
                            }
                        </script>
                        
                    </div>
                    
                </div>                     
                    <div class="mx-4  lg:mx-10 ">
                        <button type="submit" name="addWiki" class="text-white bg-blue-900 outline-none hover:bg-black py-2 px-6 rounded-[5px] ">Add your adventure</button>
                    </div>
            </form>
        </body>   
</html>