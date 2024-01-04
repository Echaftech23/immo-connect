<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Volkhov:wght@200&family=Poppins:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            font-family: 'Volkhov', serif;
        }

        .border-gradient-green {
            border: 2px solid transparent;
            border-image: linear-gradient(to bottom, #00FF00, #00ff00bf, #00aa0086, #00aa0021);
            border-image-slice: 1;
            width: 200px;
            background-color: #56ff5615;

        }

        .border-gradient-green1 {
            border: 2px solid transparent;
            border-image: linear-gradient(to bottom, rgba(244, 90, 69, 1), rgba(244, 89, 69, 0.591), rgba(244, 89, 69, 0.357), rgba(244, 89, 69, 0.119));
            border-image-slice: 1;
            width: 200px;
            background-color: #56ff5615;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <!--        navbar        -->
    <?php

    include 'includes/navbar.php';
    ?>


    <div class="container mx-auto mt-10 p-4">

        <div class="lg:flex lg:items-center lg:justify-between mx-auto p-8 rounded bg-white">

            <div class="lg:w-1/2 mb-8 lg:mb-0">
                <h1 class="text-6xl font-bold mb-4">Let's go! <br> <span class="text-orange-600">IC</span> has arrived &
                    <br>It's waiting for you
                </h1>
                <p class="text-stone-400 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum
                    dictum nisi, vel malesuada eros commodo nec. Nulla facilisi. </p>
                <div class="flex items-center space-x-4 mb-4">
                    <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Search...">
                    <button class="bg-orange-600 text-white px-4 py-2 rounded">Search</button>
                </div>
            </div>

            <div class="lg:w-1/2">
                <img src="../public/Img/log-light.png" alt="Home Image" class="w-full rounded">
            </div>

        </div>

    </div>
    <div class="container mx-auto mt-10 p-4">

        <h1 class="text-4xl text-orange-600 font-bold mb-6">Our Announcements</h1>

        <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-8">

            <div class="bg-red-500 p-3 rounded ">
                <img src="../public/Img/annoucement1.jpg" alt="image" class="w-full h-32 object-cover rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Single-Family Home</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum
                    nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
            </div>
            <div class="bg-fuchsia-200 p-3 rounded">
                <img src="public/Img/annoucement1.jpg" alt="image" class="w-full h-32 object-cover rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Single-Family Home</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum
                    nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
            </div>
            <div class="bg-green-400 p-3 rounded">
                <img src="public/Img/annoucement1.jpg" alt="image" class="w-full h-32 object-cover rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Single-Family Home</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum
                    nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
            </div>
            <div class="bg-blue-300 p-3 rounded">
                <img src="public/Img/annoucement1.jpg" alt="image" class="w-full h-32 object-cover rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Single-Family Home</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum
                    nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
            </div>
            <div class="bg-pink-400 p-3 rounded">
                <img src="public/Img/annoucement1.jpg" alt="image" class="w-full h-32 object-cover rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Single-Family Home</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum
                    nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
            </div>
            <div class="bg-lime-400 p-3 rounded">
                <img src="public/Img/annoucement1.jpg" alt="image" class="w-full h-32 object-cover rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Single-Family Home</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum
                    nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
            </div>

            <div class="bg-green-200 p-3 rounded ">
                <img src="public/Img/annoucement1.jpg" alt="image" class="w-full h-32 object-cover rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Single-Family Home</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum
                    nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
            </div>
            <div class="bg-fuchsia-200 p-3 rounded">
                <img src="public/Img/annoucement1.jpg" alt="image" class="w-full h-32 object-cover rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Single-Family Home</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum
                    nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
            </div>



            <!--      main     -->

        </div>

    </div>
    <div class="container mx-auto mt-10 p-4">
        <div class="mt-10">
            <h1 class="text-4xl text-orange-600 font-bold mb-4">Who We Are</h1>
            <div class="flex flex-col md:flex-row items-center mb-8">
                <div class="md:w-1/2">
                    <h3 class="text-lg font-semibold mb-2">Short Word About Us</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum
                        dictum nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
                </div>
                <div class="md:w-1/2 mb-4 md:mb-0 md:mr-4">
                    <img src="../public/Img/Horizontal.png" alt="Image 3" class="w-fit object-cover rounded mb-4 md:mb-0 md:mr-4">
                </div>
            </div>

        </div>
    </div>
    <div class="container mx-auto mt-10 p-4">
        <div class="mt-10">
            <h1 class="text-4xl text-orange-600 font-bold mb-4">Our Achievements</h1>
            <div class="flex flex-col md:flex-row items-center mb-8">
                <div class="md:w-1/2">
                    <h3 class="text-lg font-semibold mb-2">Join and Be Part of Our Movement</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum
                        dictum nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
                </div>
                <div class="md:w-1/2 mb-4 md:mb-0 md:mr-4">
                    <div class=" p-3 rounded text-center">
                        <h1 class="text-orange-600 text-7xl  mb-2">1.5M+ </h1>
                        <p class="text-gray-600 text-xl">OF ACTIVE USERS AND THE NUMBER IS KEEP GROWING</p>
                    </div>
                    <div class=" p-3 rounded text-center">
                        <h1 class="text-orange-600 text-7xl   mb-2">2.9M</h1>
                        <p class="text-gray-600 text-xl">OF SUCCESSED DEALS</p>
                    </div>
                    <div class=" p-3 rounded text-center">
                        <h1 class="text-orange-600 text-7xl  mb-2">$20M</h1>
                        <p class="text-gray-600 text-xl">OF TRANSACTION HAS BEEN SUBMITTED SO FAR</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mx-auto mt-10 p-4">
        <div class="mt-10">
            <h1 class="text-4xl text-orange-600 font-bold mb-4">Our Values</h1>
            <div class="flex flex-col md:flex-row items-center mb-8">
                <div class="md:w-1/2">
                    <h3 class="text-lg font-semibold mb-2">What Makes Us Different from Others</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum
                        dictum nisi, vel malesuada eros commodo nec. Nulla facilisi.</p>
                </div>
                <div class="md:w-1/2 mb-4 md:mb-0 md:mr-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">

                        <div class="border-gradient-green1 p-3 rounded text-center">
                            <i class="fas fa-icon-name text-4xl mb-2"></i>
                            <p class="text-lg font-semibold mb-2">First Value</p>
                            <p class="text-gray-600">Lorem ipsum color, intus init gi lorem so larg. int, imp o ipsum.
                            </p>
                            <a href="#" class="text-blue-600">View More</a>
                        </div>

                        <div class="border-gradient-green p-3 rounded text-center">
                            <i class="fas fa-icon-name text-4xl mb-2"></i>
                            <p class="text-lg font-semibold mb-2">Second Value</p>
                            <p class="text-gray-600">Lorem ipsum color, intus init gi lorem so larg. int, imp o ipsum.
                            </p>
                            <a href="#" class="text-blue-600">View More</a>
                        </div>

                        <div class="border-gradient-green p-3 rounded text-center">
                            <i class="fas fa-icon-name text-4xl mb-2"></i>
                            <p class="text-lg font-semibold mb-2">Third Value</p>
                            <p class="text-gray-600">Lorem ipsum color, intus init gi lorem so larg. int, imp o ipsum.
                            </p>
                            <a href="#" class="text-blue-600">View More</a>
                        </div>

                        <div class="border-gradient-green1 p-3 rounded text-center">
                            <i class="fas fa-icon-name text-4xl mb-2"></i>
                            <p class="text-lg font-semibold mb-2">Fourth Value</p>
                            <p class="text-gray-600">Lorem ipsum color, intus init gi lorem so larg. int, imp o ipsum.
                            </p>
                            <a href="#" class="text-blue-600">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10">
            <h1 class="text-4xl text-orange-600 font-bold mb-4">Frequently Asked Questions</h1>

            <div class="bg-orange-500 rounded p-4">

                <div class="faq-item">
                    <div class="question flex items-center cursor-pointer">
                        <span class="font-bold text-white mr-2">1.</span>
                        What is the first question?
                        <span class="ml-auto text-white">+</span>
                    </div>
                    <div class="answer hidden text-white">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum nisi, vel
                            malesuada eros commodo nec. Nulla facilisi.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="question flex items-center cursor-pointer">
                        <span class="font-bold text-white mr-2">2.</span>
                        What is the second question?
                        <span class="ml-auto text-white">+</span>
                    </div>
                    <div class="answer hidden text-white">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dictum nisi, vel
                            malesuada eros commodo nec. Nulla facilisi.</p>
                    </div>
                </div>


            </div>
        </div>

        <div class="mt-10 items-center p-20" style="background-image: url(../public/Img/background_subscribe.png); background-size:cover;">
            <h1 class="text-4xl text-center text-white font-bold mb-4">Subscribe for Exclusive Deals & Offers</h1>


            <form class="max-w-md mx-auto ">
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" placeholder="Your email address" required>
                <button type="submit" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange active:bg-orange-800">Subscribe</button>
            </form>
        </div>

    </div>





    <?php
    include 'includes/footer.php';
    ?>

    <script type="text/javascript" src="../public/js/navbarScript.js"></script>
</body>

</html>