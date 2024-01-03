<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script> <!--   modif -->

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <style>
        .dropdown:hover .dropdown-content {
            display: block;
        }

        :root {
            --main-color: #4a76a8;
        }

        .bg-main-color {
            background-color: var(--main-color);
        }

        .text-main-color {
            color: var(--main-color);
        }

        .border-main-color {
            border-color: var(--main-color);
        }
    </style>

</head>

<body>
    <div class="min-h-screen bg-gray-50/50">
        <aside class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 lg:translate-x-0">
            <?php

            include "../includes/sidebar.php";
            ?>
            </ul>
    </div>
    </aside>

    <div class="bg-black fixed w-full z-50 flex flex-wrap items-center  justify-between ...  none uppercase transition-all disabled:shadow-none active:bg-orange-gray-500/30 lg:hidden">
        <a class="ml-1" href="#"><img class="mx-5 my-1" src="../../public/img/IMMOCONNECT1.png" alt="dash"></a>
        <button class=" mr-7 my-1 relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 grid lg:hidden" type="button">
            <img class="navbar-burger" src="../../public/img/Group 1000003579.png" alt="dash">
            <img class="hidden navbar-close" src="../../public/img/Group 1000003606.png" alt="dash">
            <!-- </span> -->
        </button>
    </div>
    <div class="navbar-menu relative  z-50 right-0 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>

        <aside class="bg-gradient-to-br from-gray-800 to-gray-900 absolute w-full max-w-80  right-0">


            <?php

            include "../includes/sidebar.php";
            ?>
            <li>
                <a class="" href="#">
                    <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                        <img src="../../public/img/Bell (2).png" alt="image">
                        <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Notifications</p>
                    </button>
                </a>
            </li>

            </ul>
    </div>
    </aside>
    </div>


    <div class="p-4 lg:ml-80">
        <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1  mt-10">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                <div class="capitalize">
                    <nav aria-label="breadcrumb" class="w-max">
                        <ol class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                            <li class="flex items-center text-orange-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-orange-500">

                                <p class="block antialiased font-sans text-sm leading-normal text-orange-900 font-normal opacity-50 transition-all">Good Morning</p>
                                <!-- user -->
                                <span class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none"></span>
                            </li>

                        </ol>
                    </nav>
                    <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">dashboard</h6>
                </div>
                <div class="flex items-center">
                    <div class="mr-auto md:mr-4 md:w-56">
                        <div class="relative w-full min-w-[200px] h-10">
                            <input class="peer w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-orange-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-orange-gray-200 placeholder-shown:border-t-orange-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-orange-gray-200 focus:border-orange-500" placeholder=" ">
                            <label class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-orange-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-orange-gray-400 peer-focus:text-orange-500 before:border-orange-gray-200 peer-focus:before:border-orange-500 after:border-orange-gray-200 peer-focus:after:border-orange-500"> <img class="h-3 pr-2" height="5" src="../../public/img/MagnifyingGlass.png" alt="img"> Search</label>
                        </div>
                    </div>


                    <a href="#">
                        <button class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 hidden items-center gap-1 px-4 lg:flex" type="button">

                            <img src="../../public/img/Bell (1).png" alt="nothification">
                        </button>
                        <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 grid lg:hidden" type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">

                                <img src="../../public/img/Bell (1).png" alt="nothification">
                            </span>
                        </button>
                    </a>


                    <!-- <div class="dropdown float-right relative inline-block ">
                        <button class="dropbtn"><img src="../../public/img/Ellipse 300.png" alt=""></button>
                        <div class="dropdown-content bg-gray-200 min-w-40 hidden absolute right-0 z-50 shadow-lg shadow-gray-500/50">
                            <a class="block text-black py-3 px-4 hover:bg-gray-300" href="#">Your Profile</a>
                            <a class="block text-black py-3 px-4 hover:bg-gray-300" href="#">Settings</a>
                            <a class="block text-black py-3 px-4 hover:bg-gray-300" href="#">Sign out</a>
                        </div>
                    </div> -->
                    <div aria-expanded="false" aria-haspopup="menu" id=":r2:" class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30">
                        <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-orange-gray-500">
                                <!-- <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"></path> -->
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </nav>



        <div class="mt-12">
            <!-- component -->





            <div class="bg-gray-100">
                <!-- <div class="w-full text-white bg-main-color">
                    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                        <div class="p-4 flex flex-row items-center justify-between">
                            <a href="#" class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">example
                                profile</a>
                            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                <button @click="open = !open" class="flex flex-row items-center space-x-2 w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline">
                                    <span>Jane Doe</span>
                                    <img class="inline h-6 rounded-full" src="https://avatars2.githubusercontent.com/u/24622175?s=60&amp;v=4">
                                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                                    <div class="py-2 bg-white text-blue-800 text-sm rounded-sm border border-main-color shadow-sm">
                                        <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Settings</a>
                                        <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Help</a>
                                        <div class="border-b"></div>
                                        <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div> -->

                <!-- End of Navbar -->

                <div class="container mx-auto my-5 p-5">
                    <div class="md:flex no-wrap md:-mx-2 ">
                        <!-- Left Side -->
                        <div class="w-full md:w-3/12 md:mx-2">
                            <!-- Profile Card -->
                            <div class="bg-white p-3 border-t-4 border-green-400">
                                <div class="image overflow-hidden">
                                    <!-- <img class="h-auto w-full mx-auto" src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg" alt=""> -->
                                    <img src="../../public/img/Ellipse 300.png" alt="#">
                                    <form id="uploadForm">
                                        <label class="block mt-4 text-sm font-semibold text-gray-600">Upload New Image:</label>
                                        <input type="file" accept="image/*" id="imageInput" class="mt-1" />
                                        <button type="button" onclick="updateImage()" class="block mt-4 w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3">
                                            Update Image
                                        </button>
                                    </form>
                                </div>
                                <!-- <div class="container mx-auto mt-8">
                                    <div class="bg-white p-6 rounded-lg shadow-md">
                                        <div class="text-gray-700">
                                            <div class="image overflow-hidden">
                                                <img id="profileImage" src="../../public/img/Ellipse 300.png" alt="#">
                                            </div>


                                        </div>
                                    </div>
                                </div> -->
                                <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Jane Doe</h1>
                                <h3 class="text-gray-600 font-lg text-semibold leading-6">your bioghraphy.</h3>
                                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit.
                                    Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                                <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                    <li class="flex items-center py-3">
                                        <span>Status</span>
                                        <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                                    </li>
                                    <li class="flex items-center py-3">
                                        <span>Member since</span>
                                        <span class="ml-auto">Nov 07, 2016</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- End of profile card -->
                            <div class="my-4"></div>
                            <!-- Friends card -->
                            <!-- <div class="bg-white p-3 hover:shadow">
                                <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                                    <span class="text-green-500">
                                        <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </span>
                                    <span>Similar Profiles</span>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="text-center my-2">
                                        <img class="h-16 w-16 rounded-full mx-auto" src="https://cdn.australianageingagenda.com.au/wp-content/uploads/2015/06/28085920/Phil-Beckett-2-e1435107243361.jpg" alt="">
                                        <a href="#" class="text-main-color">Kojstantin</a>
                                    </div>
                                    <div class="text-center my-2">
                                        <img class="h-16 w-16 rounded-full mx-auto" src="https://avatars2.githubusercontent.com/u/24622175?s=60&amp;v=4" alt="">
                                        <a href="#" class="text-main-color">James</a>
                                    </div>
                                    <div class="text-center my-2">
                                        <img class="h-16 w-16 rounded-full mx-auto" src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg" alt="">
                                        <a href="#" class="text-main-color">Natie</a>
                                    </div>
                                    <div class="text-center my-2">
                                        <img class="h-16 w-16 rounded-full mx-auto" src="https://bucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com/public/images/f04b52da-12f2-449f-b90c-5e4d5e2b1469_361x361.png" alt="">
                                        <a href="#" class="text-main-color">Casey</a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End of friends card -->
                        </div>
                        <!-- Right Side -->
                        <div class="w-full md:w-9/12 mx-2 h-64">
                            <!-- Profile tab -->
                            <!-- About Section -->
                            <div class=" bg-white p-6 rounded-lg shadow-md">
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                    <span clas="text-green-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">About</span>
                                </div>

                                <div class="container mx-auto mt-8">
                                    <div class="">
                                        <div class="text-gray-700">
                                            <div class="grid md:grid-cols-2 text-sm">
                                                <div class="grid grid-cols-2">
                                                    <div class="px-4 py-2 font-semibold">Username</div>
                                                    <div class="px-4 py-2" id="username" contentEditable="false">Jane Doe</div>
                                                </div>

                                                <div class="grid grid-cols-2">
                                                    <div class="px-4 py-2 font-semibold">Your Phone</div>
                                                    <div class="px-4 py-2" id="phone" contentEditable="false">+11 998001001</div>
                                                </div>

                                                <div class="grid grid-cols-2">
                                                    <div class="px-4 py-2 font-semibold">Permanent Address</div>
                                                    <div class="px-4 py-2" id="address" contentEditable="false">Arlington Heights, IL, Illinois</div>
                                                </div>

                                                <div class="grid grid-cols-2">
                                                    <div class="px-4 py-2 font-semibold">Email</div>
                                                    <div class="px-4 py-2" id="email" contentEditable="false">
                                                        <a class="text-blue-800" href="mailto:jane@example.com">jane@example.com</a>
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-2">
                                                    <div class="px-4 py-2 font-semibold">Password</div>
                                                    <div class="px-4 py-2" id="password" contentEditable="false">211zrefe12</div>
                                                </div>
                                            </div>
                                        </div>

                                        <button onclick="editProfile()" class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">
                                            Updat Profile
                                        </button>

                                        <button onclick="saveProfile()" id="saveButton" class="hidden block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End of about section -->

                            <div class="my-4"></div>

                            <!-- Experience and education -->
                            <!-- <div class="bg-white p-3 shadow-sm rounded-sm"> -->

                            <!-- <div class="grid grid-cols-2">
                                    <div>
                                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                            <span clas="text-green-500">
                                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </span>
                                            <span class="tracking-wide">Experience</span>
                                        </div>
                                        <ul class="list-inside space-y-2">
                                            <li>
                                                <div class="text-teal-600">Owner at Her Company Inc.</div>
                                                <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                            </li>
                                            <li>
                                                <div class="text-teal-600">Owner at Her Company Inc.</div>
                                                <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                            </li>
                                            <li>
                                                <div class="text-teal-600">Owner at Her Company Inc.</div>
                                                <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                            </li>
                                            <li>
                                                <div class="text-teal-600">Owner at Her Company Inc.</div>
                                                <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                            <span clas="text-green-500">
                                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                    <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                                </svg>
                                            </span>
                                            <span class="tracking-wide">Education</span>
                                        </div>
                                        <ul class="list-inside space-y-2">
                                            <li>
                                                <div class="text-teal-600">Masters Degree in Oxford</div>
                                                <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                            </li>
                                            <li>
                                                <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                                <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            <!-- End of Experience and education grid -->
                            <!-- </div> -->
                            <!-- End of profile tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="text-orange-gray-600">
            <footer class="py-2">
                <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
                    <!-- <div class="w-96"><span style="text-gray-500 text-sm font-normal font-['Poppins'] leading-snug">© 2023 - KBI. Designed by </span><span style="text-zinc-800 text-sm font-normal font-['Poppins'] leading-snug">TCE. </span><span style="text-gray-500 text-sm font-normal font-['Poppins'] leading-snug">All rights reserved</span></div> -->
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">© 2023, made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="-mt-0.5 inline-block h-3.5 w-3.5">
                            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path>
                        </svg> by <a href="#" target="_blank" class="transition-colors hover:text-orange-500"><strong>IMMOCONNECT</strong></a> for a better web. </p>
                    <ul class="flex items-center gap-4">
                        <li>
                            <a href="#" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-orange-500">FAQ</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-orange-500">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-orange-500">Terms & Condition</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-orange-500">License</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="../../public/js/navbarScript.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <script>
        function editProfile() {
            // Rendre les champs éditables
            document.getElementById('username').contentEditable = true;
            document.getElementById('phone').contentEditable = true;
            document.getElementById('address').contentEditable = true;
            document.getElementById('email').contentEditable = true;
            document.getElementById('password').contentEditable = true;

            // Afficher le bouton de sauvegarde
            document.getElementById('saveButton').classList.remove('hidden');
        }

        function saveProfile() {
            // Récupérer les données modifiées
            var username = document.getElementById('username').innerText;
            var phone = document.getElementById('phone').innerText;
            var address = document.getElementById('address').innerText;
            var email = document.getElementById('email').innerText;
            var password = document.getElementById('password').innerText;

            // Enregistrer les modifications (envoyer les données au serveur)
            fetch('/save_profile', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        username: username,
                        phone: phone,
                        address: address,
                        email: email,
                        password: password,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    // Désactiver l'édition des champs
                    document.getElementById('username').contentEditable = false;
                    document.getElementById('phone').contentEditable = false;
                    document.getElementById('address').contentEditable = false;
                    document.getElementById('email').contentEditable = false;
                    document.getElementById('password').contentEditable = false;

                    // Cacher le bouton de sauvegarde
                    document.getElementById('saveButton').classList.add('hidden');
                })
                .catch((error) => {
                    console.error('Error:', error);
                    // Gérer les erreurs
                });
            // Enregistrer les modifications (vous pouvez envoyer les données au serveur ici)

            // Désactiver l'édition des champs        
            document.getElementById('username').contentEditable = false;
            document.getElementById('phone').contentEditable = false;
            document.getElementById('address').contentEditable = false;
            document.getElementById('email').contentEditable = false;
            document.getElementById('password').contentEditable = false;

            // Cacher le bouton de sauvegarde
            document.getElementById('saveButton').classList.add('hidden');
        }
    </script>



<script>
        function updateImage() {
            var imageInput = document.getElementById('imageInput');
            var profileImage = document.getElementById('profileImage');

            // Vérifier si un fichier a été sélectionné
            if (imageInput.files.length > 0) {
                var newImage = imageInput.files[0];

                // Créer un objet FileReader pour lire le contenu de l'image
                var reader = new FileReader();

                // Mettre à jour l'image source une fois la lecture terminée
                reader.onloadend = function () {
                    profileImage.src = reader.result;
                };

                // Lire le contenu de l'image
                reader.readAsDataURL(newImage);

                // Vous pouvez également envoyer la nouvelle image au serveur ici si nécessaire
                // fetch('/update_image', {
                //     method: 'POST',
                //     body: new FormData(document.getElementById('uploadForm')),
                // })
                //     .then(response => response.json())
                //     .then(data => {
                //         console.log('Success:', data);
                //     })
                //     .catch((error) => {
                //         console.error('Error:', error);
                //     });
            }
        }
    </script>
</body>

</html>