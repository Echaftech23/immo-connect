<!-- component -->


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script> <!--   modif -->
    <!-- shart scrit -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <style>
        body {
            font-family: 'IBM Plex Mono', sans-serif;
        }

        [x-cloak] {
            display: none;
        }

        .line {
            background: repeating-linear-gradient(to bottom,
                    #eee,
                    #eee 1px,
                    #fff 1px,
                    #fff 8%);
        }

        .tick {
            background: repeating-linear-gradient(to right,
                    #eee,
                    #eee 1px,
                    #fff 1px,
                    #fff 5%);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    <!-- <style>
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style> -->

</head>

<body>


    <div class="min-h-screen bg-gray-50/50">
        <aside class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 lg:translate-x-0">
            <?php

            include '../../view/includes/vendeurSidebar.php';
            ?>
            </ul>
    </div>
    </aside>

    <div class="bg-black fixed w-full z-50 flex flex-wrap items-center  justify-between ...  none uppercase transition-all disabled:shadow-none active:bg-orange-gray-500/30 lg:hidden">
        <a class="ml-1" href="#"><img class="mx-5 my-1" src="public/img/IMMOCONNECT1.png" alt="dash"></a>
        <button class=" mr-7 my-1 relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 grid lg:hidden" type="button">
            <img class="navbar-burger" src="public/img/Group 1000003579.png" alt="dash">
            <img class="hidden navbar-close" src="public/img/Group 1000003606.png" alt="dash">
            <!-- </span> -->
        </button>
    </div>
    <div class="navbar-menu relative  z-50 right-0 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>

        <aside class="bg-gradient-to-br from-gray-800 to-gray-900 absolute w-full max-w-80  right-0">


            <?php

<<<<<<< HEAD
            include '../../view/includes/sidebar.php';
=======
            include '../../view/includes/vendeurSidebar.php';
>>>>>>> e4fd1091c6ed9c1cb3da389e8059cea15fe4287e
            ?>
            <li>
                <a class="" href="#">
                    <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                        <img src="public/img/Bell (2).png" alt="image">
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
                            <label class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-orange-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-orange-gray-400 peer-focus:text-orange-500 before:border-orange-gray-200 peer-focus:before:border-orange-500 after:border-orange-gray-200 peer-focus:after:border-orange-500"> <img class="h-3 pr-2" height="5" src="public/img/MagnifyingGlass.png" alt="img"> Search</label>
                        </div>
                    </div>

                    <!-- <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 grid lg:hidden" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="3" class="h-6 w-6 text-orange-gray-500">
                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </button> -->
                    <a href="#">
                        <button class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 hidden items-center gap-1 px-4 lg:flex" type="button">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-orange-gray-500">
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
              </svg>Sign In -->
                            <img src="public/img/Bell (1).png" alt="nothification">
                        </button>
                        <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 grid lg:hidden" type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-orange-gray-500">
                  <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                </svg> -->
                                <img src="public/img/Bell (1).png" alt="nothification">
                            </span>
                        </button>
                    </a>
                    <!-- <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
            
            </span>
          </button> -->
                    <!-- <img src="public/img/grommet-icons_google.png" alt=""> -->
                    <!-- <div class="dropdown relative inline-block float-right">
           <button class="dropbtn bg-green-600 text-white px-4 py-2 text-sm rounded hover:bg-green-700">Right</button>
              <div class="dropdown-content hidden absolute right-0 bg-gray-100 min-w-48 border border-gray-200 shadow-md mt-2">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">Link 2</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">Link 3</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">Link 1</a>
                </div>
            </div> -->

                    <div class="dropdown float-right relative inline-block ">
                        <button class="dropbtn"><img src="public/img/Ellipse 300.png" alt=""></button>
                        <div class="dropdown-content bg-gray-200 min-w-40 hidden absolute right-0 z-50 shadow-lg shadow-gray-500/50">
                            <a class="block text-black py-3 px-4 hover:bg-gray-300" href="#">Your Profile</a>
                            <a class="block text-black py-3 px-4 hover:bg-gray-300" href="#">Settings</a>
                            <a class="block text-black py-3 px-4 hover:bg-gray-300" href="#">Sign out</a>
                        </div>
                    </div>
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
            <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                            <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                            <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd"></path>
                            <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-right">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-orange-gray-600">Today's Money</p>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-orange-gray-900">$53k</h4>
                    </div>
                    <div class="border-t border-orange-gray-50 p-4">
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-orange-gray-600">
                            <strong class="text-green-500">+55%</strong>&nbsp;than last week
                        </p>
                    </div>
                </div>
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-right">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-orange-gray-600">Today's Users</p>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-orange-gray-900">2,300</h4>
                    </div>
                    <div class="border-t border-orange-gray-50 p-4">
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-orange-gray-600">
                            <strong class="text-green-500">+3%</strong>&nbsp;than last month
                        </p>
                    </div>
                </div>
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                            <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-right">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-orange-gray-600">New Clients</p>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-orange-gray-900">3,462</h4>
                    </div>
                    <div class="border-t border-orange-gray-50 p-4">
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-orange-gray-600">
                            <strong class="text-red-500">-2%</strong>&nbsp;than yesterday
                        </p>
                    </div>
                </div>
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                            <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-right">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-orange-gray-600">Sales</p>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-orange-gray-900">$103,430</h4>
                    </div>
                    <div class="border-t border-orange-gray-50 p-4">
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-orange-gray-600">
                            <strong class="text-green-500">+5%</strong>&nbsp;than yesterday
                        </p>
                    </div>
                </div>
            </div>



            <div class="bg-clip-border rounded-xl bg-blue-950 text-gray-50 shadow-md overflow-hidden w-full hidden md:block py-10 mb-6">
                <div class="flex justify-evenly flex-row relative overflow-hidden">
                    <div class="w-1/3 min-w-20 flex justify-evenly flex-row">
                        <img src="public/img/Ellipse 300.png" alt="">
                        <div>
                            <h3>Vako Shvili</h3>
                            <p class=" text-gray-400 font-poppins font-normal leading-6 break-words">vako.shvili@gmail.com</p>
                        </div>
                    </div>
                    <div class="w-1/3 min-w-20 flex justify-evenly flex-row ">
                        <p class=" text-gray-400 font-poppins font-normal leading-6 break-words">1/4 Steps</p>
                        <div class="flex w-1/2  bg-gray-400 overflow-hidden mt-2 h-4 font-sans">
                            <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-300 to-green-600 text-white" style="width: 70%;"></div>
                        </div>
                        <p class="font-sans mb-1 text-xs font-medium mt-2 text-orange-gray-600">70% Completed</p>

                    </div>
                    <div class="ml-3 w-1/3 min-w-20 flex justify-evenly flex-row relative overflow-hidden">
                        <button class="bg-orange-600 text-white px-4 py-2 text-sm rounded hover:bg-orange-700">Edit Biography</button>
                        <button><img src="public/img/Button.png" alt="button"></button>
                    </div>
                </div>

            </div>

            <div class="my-6 ...">
                <svg width="100%" height="1" viewBox="0 0 1280 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.498047" x2="1280" y2="0.498047" stroke="#999999" stroke-opacity="0.56" />
                </svg>
            </div>



            <!-- <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
                <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <h6>Sales overview</h6>
                        <p class="text-sm leading-normal">
                            <i class="fa fa-arrow-up text-lime-500"></i>
                            <span class="font-semibold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="flex-auto p-4">
                        <div>
                            <canvas id="chart-line" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- component -->
            <!-- <div class="antialiased sans-serif bg-gray-200 w-lg min-h-screen "> -->

            <!-- <div x-data="app()" x-cloak class="px-4 bg-slate-400"> -->

            <!-- </div> -->

            <div class="mb-4 grid grid-cols-1 gap-6 lg:grid-cols-3">
                <!-- document.querySelector("body > main > div.w-full.px-6.py-6.mx-auto > div:nth-child(3) > div.w-full.max-w-full.px-3.mt-0.lg\\:w-7\\/12.lg\\:flex-none") -->
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden lg:col-span-2">
                    <div class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                        <div>
                            <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-orange-gray-900 mb-1">Projects</h6>
                            <p class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-orange-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-orange-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <strong>30 done</strong> this month
                            </p>
                        </div>
                        <button aria-expanded="false" aria-haspopup="menu" id=":r5:" class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-orange-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30" type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                        <table class="w-full min-w-[640px] table-auto">
                            <thead>
                                <tr>
                                    <th class="border-b border-orange-gray-50 py-3 px-6 text-left">
                                        <p class="block antialiased font-sans text-[11px] font-medium uppercase text-orange-gray-400">companies</p>
                                    </th>
                                    <th class="border-b border-orange-gray-50 py-3 px-6 text-left">
                                        <p class="block antialiased font-sans text-[11px] font-medium uppercase text-orange-gray-400">budget</p>
                                    </th>
                                    <th class="border-b border-orange-gray-50 py-3 px-6 text-left">
                                        <p class="block antialiased font-sans text-[11px] font-medium uppercase text-orange-gray-400">completion</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-orange-gray-900 font-bold">Material XD Version</p>
                                        </div>
                                    </td>

                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-orange-gray-600">$14,000</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-orange-gray-600">60%</p>
                                            <div class="flex flex-start bg-orange-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-orange-600 to-orange-400 text-white" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-orange-gray-900 font-bold">Add Progress Track</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-orange-gray-600">$3,000</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-orange-gray-600">10%</p>
                                            <div class="flex flex-start bg-orange-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-orange-600 to-orange-400 text-white" style="width: 10%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-orange-gray-900 font-bold">Fix Platform Errors</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-orange-gray-600">Not set</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-orange-gray-600">100%</p>
                                            <div class="flex flex-start bg-orange-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-orange-gray-900 font-bold">Launch our Mobile App</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-orange-gray-600">$20,500</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-orange-gray-600">100%</p>
                                            <div class="flex flex-start bg-orange-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-orange-gray-900 font-bold">Add the New Pricing Page</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-orange-gray-600">$500</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-orange-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-orange-gray-600">25%</p>
                                            <div class="flex flex-start bg-orange-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-orange-600 to-orange-400 text-white" style="width: 25%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800">
                    <div class="flex justify-between p-4 md:p-6 pb-0 md:pb-0">
                        <div>
                            <h5 class="leading-none text-xl font-medium text-gray-900 dark:text-white pb-2">Revenue</h5>

                        </div>
                        <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-center">

                            <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom" class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white" type="button">
                                Last 7 days
                                <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div id="labels-chart" class="px-2.5"></div>
                    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5 p-4 md:p-6 pt-0 md:pt-0">
                        <div class="flex justify-between items-center pt-5">

                            <!-- Dropdown menu -->
                            <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-data="app()" x-cloak class="max-w-80 mx-auto m-2">
                    <div class="shadow p-6 rounded-lg bg-white">
                        <div class="md:flex md:justify-between md:items-center">
                            <div>
                                <h2 class="text-xl text-gray-800 font-bold leading-tight">Profile View</h2>
                                <p class="mb-2 text-gray-600 text-sm">Monthly Average</p>
                            </div>

                            <!-- Legends -->
                            <div class="mb-4 ml-3">
                                <div class="flex items-center">
                                    <!-- <div class="w-2 h-2 bg-blue-600 mr-2 rounded-full"></div> -->
                                    <div class="text-sm text-gray-700">this year</div>
                                </div>
                            </div>
                        </div>


                        <div class="line my-8 relative">
                            <!-- Tooltip -->
                            <template x-if="tooltipOpen == true">
                                <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block" :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
                                    <div class="shadow-xs rounded-lg bg-white p-2">
                                        <div class="flex items-center justify-between text-sm">
                                            <div>persons:</div>
                                            <div class="font-bold ml-2">
                                                <span x-html="tooltipContent"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>

                            <!-- Bar Chart -->
                            <div class="flex -mx-2 items-end mb-2">
                                <template x-for="data in chartData">

                                    <div class="px-2 w-1/6">
                                        <!-- <div class="h-full bg-slate-400"></div> -->
                                        <div :style="`height: ${data}px`" class="transition ease-in duration-200 bg-green-600 hover:bg-green-400 relative" @mouseenter="showTooltip($event); tooltipOpen = true" @mouseleave="hideTooltip($event)">
                                            <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                                        </div>
                                    </div>

                                </template>
                            </div>

                            <!-- Labels -->
                            <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
                            <div class="flex -mx-2 items-end">
                                <template x-for="data in labels">
                                    <div class="px-2 w-1/6">
                                        <div class="bg-red-600 relative">
                                            <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                                            <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                                        </div>
                                    </div>
                                </template>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-span-12 mt-5">
                    <div class="grid gap-2 grid-cols-1 lg:grid-cols-2">
                        <div class="bg-white shadow-lg p-4" id="chartline"></div>
                        <!-- <div class="bg-white shadow-lg" id="chartpie"></div> -->
                    </div>
                </div>

            </div>
        </div>
        <div class="text-orange-gray-600">
            <footer class="py-2">
                <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
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
    <script type="text/javascript" src="public/js/lineShart2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script type="text/javascript" src="public/js/navbarScript.js"></script>
    <script type="text/javascript" src="public/js/barShart.js"></script>
    <script type="text/javascript" src="public/js/lineShart.js"></script>
</body>

</html>