<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/tailwind.css" rel="stylesheet">
    <!-- Font Awesome Free CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .side-container {
            overflow: scroll;
        }

        .side-container::-webkit-scrollbar {
            width: 0.2em;
        }

        .side-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 14px;
        }
    </style>
</head>

<body class="font-body">
    <div class="flex">
        <div class="w-64">
            <aside class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 inset-0 z-50 h-screen w-64 transition-transform duration-300 lg:translate-x-0">

                <div class="relative border-b border-white/20">
                    <a class="flex items-center gap-4 py-6 px-8" href="#">
                        <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white"><img width="180" src="../../public/Img/IMMOCONNECT1.png" alt="logo"></h6>
                    </a>
                    <button class="navbar-close mr-6 mt-5 middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none lg:hidden" type="button">
                        <span class="absolute top-1/2 h-10 w-10 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <img class="mr-1" src="../../public/img/Group 1000003606.png" alt="dash">
                        </span>
                    </button>
                </div>
                <div class="m-4">
                    <ul class="mb-4 flex flex-col gap-1">
                        <li>
                            <a aria-current="page" class="active" href="#">
                                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-md shadow-orange-500/20 hover:shadow-lg hover:shadow-orange-500/40 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize" type="button">
                                    <img src="../../public/img/ChartBar.png" alt="dash">
                                    <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">dashboard</p>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                    <img src="../../public/img/Stack (1).png" alt="profile">
                                    <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">My saved </p>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                    <img src="../../public/img/CreditCard (1).png" alt="image">
                                    <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">My Payment</p>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                    <img src="../../public/img/ChatCircleDots (1).png" alt="image">
                                    <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Message</p>
                                    <span class="ml-4 bg-orange-500 w-6 rounded-2xl">3</span>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                    <img src="../../public/img/Gear (1).png" alt="image">
                                    <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Settings</p>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                    <img src="../../public/img/Vector (1).png" alt="image">
                                    <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">My Profile</p>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                    <img src="../../public/img/SignOut (1).png" alt="image">
                                    <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Sign-out</p>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="bg-black fixed w-full z-50 flex flex-wrap items-center  justify-between ...  none uppercase transition-all disabled:shadow-none active:bg-orange-gray-500/30 lg:hidden">
                <a class="ml-1" href="#"><img class="mx-5 my-1" src="../../public/img/IMMOCONNECT1.png" alt="dash"></a>
                <button class=" mr-7 my-1 relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 grid lg:hidden" type="button">
                    <img class="navbar-burger" src="../../public/img/Group 1000003579.png" alt="dash">
                    <img class="hidden navbar-close" src="../../public/img/Group 1000003606.png" alt="dash">
                </button>
            </div>
        </div>

        <div class="w-full">
            <!-- Header -->
            <div class=" flex justify-between p-4 border-b pe-5">
            <div class="flex items-center">
                <button><img src="../../public/img/element-3.png" alt="icon" class="max-w-5 max-h-5"></button>
                <div class="flex items-center justify-items-center ms-8 p-3 ps-3 pe-10 rounded-2xl bg-gray-200 w-80">
                    <i class="fa-solid fa-magnifying-glass text-sm pe-2"></i>
                    <input type="text" name="filter-converstion" placeholder="Search in dashboard..." class="bg-transparent outline-none text-sm -mt-1">
                </div>
            </div>

            <div class="flex items-center cursor-pointer">
                <div class="relative">
                    <i class="fa-regular fa-bell text-xl"></i>
                    <span class="bg-red-500 rounded absolute w-4 h-4 text-white text-xs text-center" style="top: -7.2px; right: -6px;">8</span>
                </div>
                <div class="flex items-center justify-items-center ms-8  pe-7 cursor-pointer">
                    <div class="flex">
                        <div class="pe-3">
                            <span class="font-bold text-base ps-6">Abednego</span><br>
                            <div class="flex items-center justify-center">
                                <span class="text-xs text-gray-300 pe-1">Property Owner</span>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_223_80)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.78694 1.93719L7.44835 0.638672L5.10973 1.93719L2.53789 2.67265L1.80242 5.2445L0.503906 7.58312L1.80242 9.92171L2.53789 12.4935L5.10973 13.229L7.44835 14.5275L9.78694 13.229L12.3589 12.4935L13.0943 9.92171L14.3928 7.58312L13.0943 5.2445L12.3589 2.67265L9.78694 1.93719ZM10.8559 6.04556C11.1573 5.69777 11.1197 5.17146 10.7719 4.87004C10.4241 4.56861 9.89777 4.60622 9.59635 4.95401L6.61502 8.39405L5.30031 6.87708C4.99889 6.52929 4.4726 6.4917 4.1248 6.79312C3.777 7.09454 3.7394 7.62084 4.04083 7.96863L5.98528 10.2122C6.14356 10.3949 6.37334 10.4998 6.61502 10.4998C6.8567 10.4998 7.08647 10.3949 7.24476 10.2122L10.8559 6.04556Z" fill="#0CAF60" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_223_80">
                                            <rect width="15" height="15" fill="white" transform="translate(0.0546875 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <img src="../../public/img/Avatar-Image.png" alt="avatar" width="48" height="48">
                    </div>
                </div>
            </div>
        </div>

        <!-- Message container -->
        <div class="flex w-full">
            <!-- messages side bar -->
            <div class="side-container fixed h-screen overflow-hidden" style="width: 320px;">
                <div class="side-header px-4">
                    <div class="flex items-center justify-between pt-4 pb-3 relative">
                        <span class="font-semibold">Messaging</span>
                        <span class="absolute bg-red-500 rounded text-center py-1 px-2 text-white text-xs" style="top: 10px; left: 95px; line-height: 20px;">187</span>
                        <div class=" flex items-center justify-center">
                            <span class="text-sm pe-1">Agents</span> <img src="../../public/img/sort.png" alt="filter-icon" width="24px">
                        </div>
                    </div>
                    <div class="flex items-center justify-items-center p-3 ps-3 pe-10 mb-6 bg-gray-200">
                        <i class="fa-solid fa-magnifying-glass text-sm pe-2"></i>
                        <input type="text" placeholder="Search in dashboard..." class="bg-transparent outline-none text-sm -mt-1">
                    </div>

                    <!-- Message section -->
                    <div class="side-container" style="height: calc(140vh - 400px);">

                        <section class="flex items-center px-4 py-3 rounded-xl bg-gray-200" style="margin-block: 10px !important;">
                            <img src="../../public/img/photo.png" alt="filter-icon" width="52">
                            <div class="w-full ms-2">
                                <div class="flex justify-between text-sm mb-2">
                                    <p class=" font-medium">Eten Hunt</p>
                                    <p>Agents</p>
                                </div>
                                <p class="text-xs">Thank you very much. I'm glad...</p>
                            </div>
                        </section>

                        <section class="flex items-center px-4 py-3 rounded-xl bg-gray-200" style="margin-block: 10px !important;">
                            <img src="../../public/img/photo-1.png" alt="filter-icon" width="52">
                            <div class="w-full ms-2">
                                <div class="flex justify-between text-sm mb-2">
                                    <p class=" font-medium">Eten Hunt</p>
                                    <p>Agents</p>
                                </div>
                                <p class="text-xs">You : Sure! let me tell you about w…</p>
                            </div>
                        </section>

                        <section class="flex items-center px-4 py-3 rounded-xl bg-gray-200" style="margin-block: 10px !important;">
                            <img src="../../public/img/photo-2.png" alt="filter-icon" width="52">
                            <div class="w-full ms-2">
                                <div class="flex justify-between text-sm mb-2">
                                    <p class=" font-medium">Eten Hunt</p>
                                    <p>Agents</p>
                                </div>
                                <p class="text-xs">Thank you very much. I'm glad...</p>
                            </div>
                        </section>

                        <section class="flex items-center px-4 py-3 rounded-xl bg-gray-200" style="margin-block: 10px !important;">
                            <img src="../../public/img/photo-3.png" alt="filter-icon" width="52">
                            <div class="w-full ms-2">
                                <div class="flex justify-between text-sm mb-2">
                                    <p class=" font-medium">Eten Hunt</p>
                                    <p>Agents</p>
                                </div>
                                <p class="text-xs">You : Sure! let me tell you about w…</p>
                            </div>
                        </section>

                        <section class="flex items-center px-4 py-3 rounded-xl bg-gray-200" style="margin-block: 10px !important;">
                            <img src="../../public/img/photo-1.png" alt="filter-icon" width="52">
                            <div class="w-full ms-2">
                                <div class="flex justify-between text-sm mb-2">
                                    <p class=" font-medium">Eten Hunt</p>
                                    <p>Agents</p>
                                </div>
                                <p class="text-xs">Thank you very much. I'm glad...</p>
                            </div>
                        </section>

                        <section class="flex items-center px-4 py-3 rounded-xl bg-gray-200" style="margin-block: 10px !important;">
                            <img src="../../public/img/photo.png" alt="filter-icon" width="52">
                            <div class="w-full ms-2">
                                <div class="flex justify-between text-sm mb-2">
                                    <p class=" font-medium">Eten Hunt</p>
                                    <p>Agents</p>
                                </div>
                                <p class="text-xs">Thank you very much. I'm glad...</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- Message side-container -->
            <main style="width: calc(100% - 320px); margin-left: 320px;">
                <div class="pt-4 pb-3">
                    <div class="message-header">
                        <div class="flex items-center px-4 rounded-xl">
                            <button><img src="../../public/img/photo.png" alt="profile-image" width="40"></button>
                            <div class="w-full ms-2">
                                <p class=" font-medium text-sm">Eten Hunt</p>
                                <span class="bg-green-500" style="display: inline-block; width: 8px; height: 8px; background-color: #33B843; border-radius: 50%; margin-right: 8px;"></span> <span class="text-xs">Online</span>
                            </div>
                            <div class="flex items-center pe-5">
                                <button><img src="../../public/img/video.png" alt="vedio icon" class="w-5 ml-6"></button>
                                <button><img src="../../public/img/call.png" alt="vedio icon" class="w-5 ml-6"></button>
                                <button><img src="../../public/img/element-3.png" alt="vedio icon" class="w-5 ml-6"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-100 pl-4 pe-7 side-container fixed overflow-hidden" style="width: calc(100% - 560px); height: 390px;">
                    <div class="flex justify-between">
                        <div class="receiver mb-10">
                            <div class="flex">
                                <img src="../../public/img/image-1.png" alt="image" width="100px">
                                <img src="../../public/img/image.png" class="block ml-4" alt="image" width="100px">
                            </div>
                            <p class="my-2 py-2 px-3 rounded-r-2xl rounded-b-xl bg-slate-950 w-70 text-white text-sm">Good question. How about just discussing it?</p>
                            <span class="block text-gray-500 text-xs">Today 11:55</span>
                        </div>

                        <div class="sender">
                            <p class="mb-2 py-2 px-3 rounded-l-2xl rounded-b-xl bg-blue-950 w-70 text-white text-sm">Of course. Thank you so much for taking your time.</p>
                            <span class="block text-gray-500 text-xs float-right">Today 11:56</span>
                        </div>
                    </div>

                    <div class="mb-20">
                        <div class="receiver">
                            <p class="my-2 py-2 px-3 rounded-r-2xl rounded-b-xl bg-slate-950 w-70 text-white text-sm">Good question. How about just discussing it?</p>
                            <span class="block text-gray-500 text-xs">Today 11:55</span>
                        </div>

                        <div class="sender float-right">
                            <p class="my-2 py-2 px-3 rounded-l-2xl rounded-b-xl bg-blue-950 w-70 text-white text-sm">Of course. Thank you so much for taking your time.</p>
                            <span class="block text-gray-500 text-xs float-right">Today 11:56</span>
                        </div>
                    </div>

                    <div class="mb-20">
                        <div class="receiver">
                            <div class="flex">
                                <img src="../../public/img/image-2.png" alt="image" width="100px">
                                <img src="../../public/img/image-2.png" class="block ml-4" alt="image" width="100px">
                            </div>
                            <p class="my-2 py-2 px-3 rounded-r-2xl rounded-b-xl bg-slate-950 w-70 text-white text-sm">Good question. How about just discussing it?</p>
                            <span class="block text-gray-500 text-xs">Today 11:55</span>
                        </div>

                        <div class="sender float-right">
                            <p class="my-2 py-2 px-3 rounded-l-2xl rounded-b-xl bg-blue-950 w-70 text-white text-sm">Of course. Thank you so much for taking your time.</p>
                            <span class="block text-gray-500 text-xs float-right">Today 11:56</span>
                        </div>
                    </div>

                    <div class="mb-20">
                        <div class="receiver">
                            <div class="flex">
                                <img src="../../public/img/image-1.png" alt="image" width="100px">
                                <img src="../../public/img/image.png" class="block ml-4" alt="image" width="100px">
                            </div>
                            <p class="my-2 py-2 px-3 rounded-r-2xl rounded-b-xl bg-slate-950 w-70 text-white text-sm">Good question. How about just discussing it?</p>
                            <span class="block text-gray-500 text-xs">Today 11:55</span>
                        </div>

                        <div class="sender float-right">
                            <p class="mb-2 py-2 px-3 rounded-l-2xl rounded-b-xl bg-blue-950 w-70 text-white text-sm">Of course. Thank you so much for taking your time.</p>
                            <span class="block text-gray-500 text-xs float-right">Today 11ssd:56</span>
                        </div>
                    </div>

                    <div class="mb-20">
                        <div class="receiver">
                            <div class="flex">
                                <img src="../../public/img/image-2.png" alt="image" width="100px">
                                <img src="../../public/img/image-2.png" class="block ml-4" alt="image" width="100px">
                            </div>
                            <p class="my-2 py-2 px-3 rounded-r-2xl rounded-b-xl bg-slate-950 w-70 text-white text-sm">Good question. How about just discussing it?</p>
                            <span class="block text-gray-500 text-xs">Today 11:55</span>
                        </div>

                        <div class="sender float-right">
                            <p class="mb-2 py-2 px-3 rounded-l-2xl rounded-b-xl bg-blue-950 w-70 text-white text-sm">Of course. Thank you so much for taking your time.</p>
                            <span class="block text-gray-500 text-xs float-right">Today 11:56</span>
                        </div>
                    </div>
                </div>
                <footer class="fixed flex items-center bg-white w-svw mt-96 p-4">
                    <button><img src="../../public/img/element-3.png" class=" max-w-5 max-h-5" alt="icon"></button>
                    <div class="flex items-center justify-between ms-4 p-1 ps-5 pe-2 rounded-2xl bg-gray-200" style="width: 620px;">
                        <button><input type="text" name="send-message" placeholder="type your message" class="bg-transparent text-xs outline-none"></button>
                        <div class="flex items-center">
                            <button><img src="../../public/img/attach-circle.png" alt="attach-circle" class="w-5 h-5"></button>
                            <button class="p-1 rounded-xl bg-slate-900 ml-3"><img src="../../public/img/send-2.png" alt="send" class="max-w-6 max-h-6"></button>
                        </div>
                    </div>
                </footer>
            </main>
        </div>
    </div>
    </div>

</body>