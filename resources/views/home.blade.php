<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <header class='shadow-lg py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px]'>
        <div class='flex flex-wrap items-center lg:gap-y-4 gap-y-6 gap-x-4'>
            <a href=""><img src="/images/logo.png" alt="logo" class='w-24' />
            </a>
            <div class='flex items-center ml-auto lg:order-1'>

                <ul class="flex space-x-4">
                    <li
                        class="relative px-1 after:absolute after:bg-pink-500 after:w-full after:h-[3px] after:block after:-bottom-2 after:left-0 after:transition-all after:duration-300">
                        <div class="flex flex-col justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" viewBox="0 0 511 511.999">
                                <path
                                    d="M498.7 222.695c-.016-.011-.028-.027-.04-.039L289.805 13.81C280.902 4.902 269.066 0 256.477 0c-12.59 0-24.426 4.902-33.332 13.809L14.398 222.55c-.07.07-.144.144-.21.215-18.282 18.386-18.25 48.218.09 66.558 8.378 8.383 19.44 13.235 31.273 13.746.484.047.969.07 1.457.07h8.32v153.696c0 30.418 24.75 55.164 55.168 55.164h81.711c8.285 0 15-6.719 15-15V376.5c0-13.879 11.293-25.168 25.172-25.168h48.195c13.88 0 25.168 11.29 25.168 25.168V497c0 8.281 6.715 15 15 15h81.711c30.422 0 55.168-24.746 55.168-55.164V303.14h7.719c12.586 0 24.422-4.903 33.332-13.813 18.36-18.367 18.367-48.254.027-66.633zm-21.243 45.422a17.03 17.03 0 0 1-12.117 5.024h-22.72c-8.285 0-15 6.714-15 15v168.695c0 13.875-11.289 25.164-25.168 25.164h-66.71V376.5c0-30.418-24.747-55.168-55.169-55.168H232.38c-30.422 0-55.172 24.75-55.172 55.168V482h-66.71c-13.876 0-25.169-11.29-25.169-25.164V288.14c0-8.286-6.715-15-15-15H48a13.9 13.9 0 0 0-.703-.032c-4.469-.078-8.66-1.851-11.8-4.996-6.68-6.68-6.68-17.55 0-24.234.003 0 .003-.004.007-.008l.012-.012L244.363 35.02A17.003 17.003 0 0 1 256.477 30c4.574 0 8.875 1.781 12.113 5.02l208.8 208.796.098.094c6.645 6.692 6.633 17.54-.031 24.207zm0 0"
                                    data-original="#000000" />
                            </svg>
                            <span class="text-xs font-semibold mt-[2px] ">Home</span>
                        </div>
                    </li>
                    <li
                        class="relative px-1 after:absolute after:bg-pink-500 after:w-0 hover:after:w-full hover:after:h-[3px] after:block after:-bottom-2 after:left-0 after:transition-all after:duration-300">

                        <a href="/profile">
                            <div class="flex flex-col justify-center items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M337.711 241.3a16 16 0 0 0-11.461 3.988c-18.739 16.561-43.688 25.682-70.25 25.682s-51.511-9.121-70.25-25.683a16.007 16.007 0 0 0-11.461-3.988c-78.926 4.274-140.752 63.672-140.752 135.224v107.152C33.537 499.293 46.9 512 63.332 512h385.336c16.429 0 29.8-12.707 29.8-28.325V376.523c-.005-71.552-61.831-130.95-140.757-135.223zM446.463 480H65.537V376.523c0-52.739 45.359-96.888 104.351-102.8C193.75 292.63 224.055 302.97 256 302.97s62.25-10.34 86.112-29.245c58.992 5.91 104.351 50.059 104.351 102.8zM256 234.375a117.188 117.188 0 1 0-117.188-117.187A117.32 117.32 0 0 0 256 234.375zM256 32a85.188 85.188 0 1 1-85.188 85.188A85.284 85.284 0 0 1 256 32z"
                                        data-original="#000000" />
                                </svg>
                                <span class="text-xs font-semibold mt-1">Profile</span>
                            </div>
                        </a>

                    </li>

                    <li
                        class="relative px-1 after:absolute after:bg-pink-500 after:w-0 hover:after:w-full hover:after:h-[3px] after:block after:-bottom-2 after:left-0 after:transition-all after:duration-300">
                        <form action="/logout" method="POST">
                            @csrf
                            <button>
                                <div class="flex flex-col justify-center items-center cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960"
                                        width="20">
                                        <path
                                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
                                    </svg>
                                    <span class="text-xs font-semibold mt-1">logout</span>
                                </div>
                            </button>
                        </form>
                    </li>

                </ul>

            </div>
            <div id="collapseMenu" class="lg:!flex lg:items-center lg:flex-1 max-lg:w-full max-lg:hidden">


            </div>
        </div>
    </header>


    <div class="font-sans text-[#333] max-w-6xl max-md:max-w-md mx-auto">
        <div class="grid md:grid-cols-2 items-center md:gap-8 gap-6">
            <div class="max-md:order-1 max-md:text-center z-50 relative">
                <h2 class="lg:text-6xl md:text-5xl text-3xl font-extrabold mb-4 md:!leading-[56px]"><span
                        class="text-blue-600">Discover</span> the world &<span class="text-blue-600"> Wander </span>
                    with us</h2>
                <p class="mt-6 text-base leading-relaxed">Our passion for travel inspires an online sharing captivating
                    adventures. Explore the world seamlessly with our modern, immersive experience.</p>
                <button type='button'
                    class="bg-blue-600 hover:bg-transparent hover:text-blue-600 border-2 border-blue-600 mt-10 transition-all text-white font-bold text-sm rounded-md px-6 py-2.5">Get
                    Started</button>
                <div class="mt-10">
                    <div class="grid sm:grid-cols-3 gap-4 items-center">
                        <div class="flex flex-col items-center text-center">
                            <h5 class="font-bold text-xl mb-1">{{ $countUser }}</h5>
                            <p>active users</p>
                        </div>
                        <div class="flex flex-col items-center text-center">
                            <h5 class="font-bold text-xl mb-1">{{ $countAdventure }}</h5>
                            <p>adventures</p>
                        </div>
                        <div class="flex flex-col items-center text-center">
                            <h5 class="font-bold text-xl mb-1">{{ $uniqueDestinationsCount }}</h5>
                            <p>destinations</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div
                class="lg:h-[550px] md:h-[550px] flex items-center relative max-md:before:hidden before:absolute before:bg-[#d2e7f7] before:h-[80%] before:w-[120%] before:right-0 before:z-0 ">
                <img src="https://media.licdn.com/dms/image/D4E12AQFGIi0gOrTcYw/article-cover_image-shrink_720_1280/0/1687428785866?e=1712188800&v=beta&t=40VTxjm0WbzJ9fuFDd0aZJzAi0fRzr5wqDuvbzbMxJE"
                    class="rounded-md lg:w-4/5 z-50 relative" alt="Dining Experience" />
            </div>
        </div>
    </div>

    <div class="bg-white font-[sans-serif] my-4">
        <div class="max-w-7xl w-[85%] mx-auto">
            <div class="text-left">
                <h2
                    class="text-2xl font-extrabold text-[#333] inline-block relative after:absolute after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-pink-300 after:rounded-full">
                    POPULAR ADVENTURES</h2>
            </div>
            <div class="flex justify-between">
                <div class="flex gap-2"><button type="button"
                        class="px-3  mt-10 rounded  text-sm tracking-wider font-medium outline-none border-[1px] border-[#333] text-black  hover:bg-[#222] bg-transparent hover:text-white  transition-all duration-300 h-[2rem]">the
                        most recent</button>
                    <button type="button"
                        class="px-3 mt-10 rounded text-sm tracking-wider font-medium outline-none border-[1px] border-[#333] text-black hover:bg-[#222] bg-transparent hover:text-white  transition-all duration-300 h-[2rem]">the
                        most old</button>
                </div>
                <div><form action="/home" method="get"><button><u>Show All</u></button></form></div>

                <form action="/home" method="post" class="mt-10 px-4 py-2 w-[24rem] border-[1px] border-black rounded-[5px]">
                    @csrf
                    <label>Select your destination:</label>
                    <select id="destination" name="destinationId" class="outline-none">
                        @foreach ($destinations as $destination)
                            <option value="{{ $destination['id'] }}">{{ $destination['name'] }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="ml-[1rem] bg-blue-100 px-2 py-1 rounded-[4px]">Search</button>
                </form>
                
            </div>
            <div class="grid grid-cols-1 w-[85%] gap-10 mt-16 max-md:max-w-lg mx-auto">
                @foreach ($aventures as $aventure)
                <div class="bg-white cursor-pointer rounded shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative top-0 hover:-top-2 transition-all duration-300">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-2">
                        @foreach ($aventure->images as $image)
                            <img src="/storage/{{$image->name}} " alt="Blog Post 1" class="w- h-60 object-cover" />
                        @endforeach
                    </div>
            
                    <div class="p-6">
                        <div class="flex justify-between">
                            <span class="text-sm block text-gray-500 mb-2">{{ $aventure->destination->name }}</span>
                            <span class="text-sm block text-gray-400 mb-2">{{ $aventure->created_at }} | BY {{ $aventure->user->name }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#333]">{{ $aventure->title }}</h3>
                        <hr class="my-6" />
                        <p class="text-gray-500 text-sm">{{ $aventure->description }}</p>
                    </div>
                </div>
            @endforeach
            

            </div>

        </div>
    </div>
    <footer class="bg-blue-50 font-[sans-serif] mt-8">
        <div class="py-8 px-4 sm:px-12">
            <div class="flex flex-wrap items-center justify-between">
                <div class="w-full md:w-auto  mb-6 md:mb-0">
                    <a href="" class=" w-full flex justify-center md:justify-start"><img
                            class="mr-2 md:ml-10 w-[150px] h-[70px] md:w-[120px] " src="/images/logo.png"
                            alt="discoverWorld logo" /></a>
                </div>
                <div class="w-full md:w-auto text-center">
                    <ul class="flex items-center justify-center flex-wrap gap-y-2 md:justify-end space-x-6">
                        <li><a href="/home" class="text-gray-800 hover:text-gray-black ">Home</a></li>
                        <li><a href="/profile" class="text-gray-800 hover:text-gray-black text-base">Profile</a>
                        </li>
                        <li><a href="/posts" class="text-gray-800 hover:text-gray-black text-base">new post</a>
                        </li>
                        <li><a href="/" class="text-gray-800 hover:text-gray-black text-base">log out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-6 border-gray-800" />
            <p class='text-center text-gray-500 text-base'>Copyright © 2024 <a href=''
                    class="underline mx-1">discoverWorld</a>All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
