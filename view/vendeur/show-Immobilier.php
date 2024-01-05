<!-- component -->


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/tailwind.css" rel="stylesheet">
    <!-- shart scrit -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
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

            include '../../view/includes/vendeurSidebar.php';
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

                    <a href="#">
                        <button class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 hidden items-center gap-1 px-4 lg:flex" type="button">
                            <img src="public/img/Bell (1).png" alt="nothification">
                        </button>
                        <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-orange-gray-500/10 active:bg-orange-gray-500/30 grid lg:hidden" type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                <img src="public/img/Bell (1).png" alt="nothification">
                            </span>
                        </button>
                    </a>

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

            <table class="min-w-full bg-white border border-gray-300 divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="font-bold p-4">Image</th>
                        <th class="font-bold p-4">Title</th>
                        <th class="font-bold p-4">Rooms</th>
                        <th class="font-bold p-4">Status</th>
                        <th class="font-bold p-4">Price</th>
                        <th class="font-bold p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($immobiliers as $immobilier) : ?>
                        <a href="signin">
                            <tr>
                                <td class="p-4"><img src="public/img/<?= $immobilier->getImage1(); ?>" alt="annoucement" width="60px"></td>
                                <td class="p-4"><?= $immobilier->getTitle(); ?></td>
                                <td class="p-4"><?= $immobilier->getRooms(); ?></td>
                                <td class="p-4"><?= $immobilier->getStatus(); ?></td>
                                <td class="p-4"><?= $immobilier->getPrice(); ?></td>
                                <td class="flex p-4 space-x-2">
                                    <!-- Modal toggle -->
                                    <button data-modal-target="<?php echo $immobilier->getId(); ?>-edit" data-modal-toggle="<?php echo $immobilier->getId(); ?>-edit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Edit</button>
                                    <button data-modal-target="<?php echo $immobilier->getId(); ?>" data-modal-toggle="<?php echo $immobilier->getId(); ?>" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2" type="button">Delete</button>
                                </td>

                                <div id="<?php echo $immobilier->getId(); ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="<?php echo $immobilier->getId(); ?>">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                                <a href="delete?id=<?php echo $immobilier->getId(); ?>" data-modal-hide="<?php echo $immobilier->getId(); ?>" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">Yes, I'm sure</a>
                                                <button data-modal-hide="<?php echo $immobilier->getId(); ?>" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Main modal -->
                                <div id="<?php echo $immobilier->getId(); ?>-edit" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Immoblier Information
                                                </h3>
                                                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="<?php echo $immobilier->getId(); ?>-edit">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5">
                                                <form class="space-y-4" action="#" enctype="multipart/form-data">
                                                    <div class="mb-2">
                                                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title </label>
                                                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Immobilier title" required>
                                                    </div class="mb-2">

                                                    <div class="mb-2">
                                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                                        <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Immobilier description" required>
                                                    </div>

                                                    <div class="mb-2">
                                                        <label for="rooms" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rooms</label>
                                                        <input type="number" name="rooms" id="rooms" placeholder="Immobilier Rooms" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    </div>

                                                    <div class="mb-2">
                                                        <label for="bathrooms" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bathrooms</label>
                                                        <input type="number" name="bathrooms" id="bathrooms" placeholder="Immobilier bathrooms" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    </div>

                                                    <div class="mb-2">
                                                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                        <input type="number" name="price" id="price" placeholder="Immobilier price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Immobilier price" required>
                                                    </div>

                                                    <div class="flex justify-between mb-2">
                                                        <label for="selectOption">Immobilier Location:</label>
                                                        <select name="selectOption" id="selectOption">
                                                            <option value="1">North</option>
                                                            <option value="2">South</option>
                                                            <option value="3">Est</option>
                                                            <option value="4">West</option>
                                                        </select>
                                                    </div>

                                                    <div class="flex justify-between mb-2">
                                                        <label for="selectOption">Immobilier Type:</label>
                                                        <select name="selectOption" id="selectOption">
                                                            <option value="1">Commercial</option>
                                                            <option value="2">Resedentiel</option>
                                                        </select>
                                                    </div>

                                                    <div class="flex justify-between">
                                                        <label for="selectOption">Immobilier Status:</label>
                                                        <select name="selectOption" id="selectOption">
                                                            <option value="1">Active</option>
                                                            <option value="2">Inactive</option>
                                                            <option value="3">Sold</option>
                                                        </select>
                                                    </div>

                                                    <div>
                                                        <label for="image">Choose an image:</label>
                                                        <input type="file" name="image" id="image" accept="image/*" required>
                                                    </div>

                                                    <button data-modal-hide="<?php echo $immobilier->getId(); ?>-edit" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                                    <a href="add-imobilier?id=<?php echo $immobilier->getId(); ?>" data-modal-target="<?php echo $immobilier->getId(); ?>-edit" data-modal-toggle="<?php echo $immobilier->getId(); ?>-edit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-2 ml-0" type="button">submit</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </a>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
    <script type="text/javascript" src="public/js/lineShart2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script type="text/javascript" src="public/js/navbarScript.js"></script>
    <script type="text/javascript" src="public/js/barShart.js"></script>
    <script type="text/javascript" src="public/js/lineShart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <!-- <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script> -->
</body>

</html>