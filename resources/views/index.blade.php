<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
     <div class=" font-[sans-serif] text-[#333] max-w-7xl mx-auto h-screen rounded-md">
    <div class="grid md:grid-cols-2 items-center gap-8 h-full px-16 py-8 ">
            <form action="/login" method="POST" class="max-w-lg max-md:mx-auto p-6">
                @csrf
            <div class="mb-10">
              <h3 class="text-4xl font-extrabold">Sign in</h3>
            </div>
            <div>
                <label class="text-sm mb-2 block">Email </label>
                <input id="email" name="loginemail" type="text" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md border border-solid outline-none" placeholder="Enter email" />
    
            </div>
            <div>
                <label class="text-sm mt-4 mb-2 block">Password</label>
                <input name="loginpassword" type="password" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md border border-solid outline-none" placeholder="Enter password" />
            </div>
            
            <div class="mt-10">
              <button type="submit" name="login" class="w-full shadow-xl py-3 px-4 text-sm font-semibold rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Log in
              </button>
            </div>
            <p class="text-sm mt-6 text-center">You don't have an account?<a href="/register" class="text-black font-semibold hover:underline ml-1 whitespace-nowrap">register here</a></p>
        </form>
          <div class="h-full md:py-6 flex items-center relative max-md:before:hidden before:absolute before:bg-gradient-to-r before:from-white before:via-[#5abee6] before:to-[#4d5ddb] before:h-full before:w-3/4 before:right-0 before:z-0">
            <img src="https://thumbs.dreamstime.com/b/travel-world-landmarks-background-blue-sky-46083021.jpg" class="rounded-md lg:w-4/5 md:w-11/12 z-50 relative" alt="Dining Experience" />
          </div>
        </div>
      </div>
</body>
</html>


