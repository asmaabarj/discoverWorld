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
                        class="relative px-1 after:absolute after:bg-pink-500 after:w-0 hover:after:w-full hover:after:h-[3px] after:block after:-bottom-2 after:left-0 after:transition-all after:duration-300">
                        <a href="/home">
                            <div class="flex flex-col justify-center items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" viewBox="0 0 511 511.999">
                                    <path
                                        d="M498.7 222.695c-.016-.011-.028-.027-.04-.039L289.805 13.81C280.902 4.902 269.066 0 256.477 0c-12.59 0-24.426 4.902-33.332 13.809L14.398 222.55c-.07.07-.144.144-.21.215-18.282 18.386-18.25 48.218.09 66.558 8.378 8.383 19.44 13.235 31.273 13.746.484.047.969.07 1.457.07h8.32v153.696c0 30.418 24.75 55.164 55.168 55.164h81.711c8.285 0 15-6.719 15-15V376.5c0-13.879 11.293-25.168 25.172-25.168h48.195c13.88 0 25.168 11.29 25.168 25.168V497c0 8.281 6.715 15 15 15h81.711c30.422 0 55.168-24.746 55.168-55.164V303.14h7.719c12.586 0 24.422-4.903 33.332-13.813 18.36-18.367 18.367-48.254.027-66.633zm-21.243 45.422a17.03 17.03 0 0 1-12.117 5.024h-22.72c-8.285 0-15 6.714-15 15v168.695c0 13.875-11.289 25.164-25.168 25.164h-66.71V376.5c0-30.418-24.747-55.168-55.169-55.168H232.38c-30.422 0-55.172 24.75-55.172 55.168V482h-66.71c-13.876 0-25.169-11.29-25.169-25.164V288.14c0-8.286-6.715-15-15-15H48a13.9 13.9 0 0 0-.703-.032c-4.469-.078-8.66-1.851-11.8-4.996-6.68-6.68-6.68-17.55 0-24.234.003 0 .003-.004.007-.008l.012-.012L244.363 35.02A17.003 17.003 0 0 1 256.477 30c4.574 0 8.875 1.781 12.113 5.02l208.8 208.796.098.094c6.645 6.692 6.633 17.54-.031 24.207zm0 0"
                                        data-original="#000000" />
                                </svg>
                                <span class="text-xs font-semibold mt-[2px] ">Home</span>
                            </div>
                        </a>
                    </li>
                    <li
                        class="relative px-1 after:absolute after:bg-pink-500 after:w-full after:h-[3px] after:block after:-bottom-2 after:left-0 after:transition-all after:duration-300">
                        <div class="flex flex-col justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 512 512">
                                <path
                                    d="M337.711 241.3a16 16 0 0 0-11.461 3.988c-18.739 16.561-43.688 25.682-70.25 25.682s-51.511-9.121-70.25-25.683a16.007 16.007 0 0 0-11.461-3.988c-78.926 4.274-140.752 63.672-140.752 135.224v107.152C33.537 499.293 46.9 512 63.332 512h385.336c16.429 0 29.8-12.707 29.8-28.325V376.523c-.005-71.552-61.831-130.95-140.757-135.223zM446.463 480H65.537V376.523c0-52.739 45.359-96.888 104.351-102.8C193.75 292.63 224.055 302.97 256 302.97s62.25-10.34 86.112-29.245c58.992 5.91 104.351 50.059 104.351 102.8zM256 234.375a117.188 117.188 0 1 0-117.188-117.187A117.32 117.32 0 0 0 256 234.375zM256 32a85.188 85.188 0 1 1-85.188 85.188A85.284 85.284 0 0 1 256 32z"
                                    data-original="#000000" />
                            </svg>
                            <span class="text-xs font-semibold mt-1">Profile</span>
                        </div>

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
        </div>
    </header>
    <div class="bg-[] px-4 py-10 font-[sans-serif]">

        <div class="max-w-6xl mx-auto">
        </div>
        <div class="relative w-max ">
            <a href="/posts"><button type="button"
                    class="px-6 py-2.5 flex text-sm tracking-wider shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] mb-10 font-semibold outline-none bg-white rounded">
                    add new post from here <h1>&emsp;</h1><svg xmlns="http://www.w3.org/2000/svg" height="24"
                        viewBox="0 -960 960 960" width="20">
                        <path
                            d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z" />
                    </svg>
                </button>
        </div>
        </a>
        <div class="bg-[#e1f2f5] px-4 py-10 font-[sans-serif]">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2 mt-12 max-md:max-w-lg mx-auto">
                    @foreach ($UserAventures  as $aventure)
                        <div class="rounded overflow-hidden p-6 hover:bg-white transition-all duration-300">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                @foreach ($aventure->images as $image)
                                    <img src="/storage/{{ $image->name }} " alt="Blog Post 1"
                                        class="w-full h-64 object-cover rounded" />
                                @endforeach
                            </div>
                            <div class="flex justify-between">
                                <span
                                    class="text-sm block text-[#333] mb-2 mt-4">{{ $aventure->destination->name }}</span>
                                <span class="text-sm block text-[#333] mb-2 mt-4">{{ $aventure->created_at }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-[#333] mb-4">{{ $aventure->title }}</h3>
                            <p class="text-[#333] text-sm">{{ $aventure->description }}
                            </p>
                        </div>
                    @endforeach


                </div>
            </div>
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
                        <li><a href="/profile" class="text-gray-800 hover:text-gray-black text-base">Profile</a></li>
                        <li><a href="/posts" class="text-gray-800 hover:text-gray-black text-base">new post</a></li>
                        <li><a href="/" class="text-gray-800 hover:text-gray-black text-base">log out</a></li>
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
