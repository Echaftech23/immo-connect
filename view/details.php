<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immobilier Details</title>
    <style>
        .images {
            display: flex;
            flex-direction: column;
        }

        .img2 {
            width: 100px; /* Adjust the size as needed */
            height: auto;
            margin-bottom: 8px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>

    <div class="flex gap-4">
        <div class="images flex-shrink-0">
            <img src="../public/Img/annoucement1.jpg" alt="Image Description" class="w-full h-auto">

            <div class="image2">
                <img src="../public/Img/annoucement1.jpg" class="img2">
                <img src="../public/Img/homeImage.png" class="img2">
                <img src="../public/Img/Horizontal.png" class="img2">
                <img src="../public/Img/annoucement1.jpg" class="img2">
                <img src="../public/Img/annoucement1.jpg" class="img2">
            </div>
        </div>
        <div class="">
        </div>

        <div class="flex-1">
            <h2 class="text-2xl font-bold">Image Description</h2>
            <div class="flex items-center">
                <div class="flex items-center">
                    <span class="text-yellow-500">★★★★★</span>
                    <span class="ml-2">(Current Rate)</span>
                </div>

                <div class="ml-4">
                    <p>Status: <?= $immobilier->getStatus() ?></p>
                </div>
            </div>

            <div class="mt-4">
                <p>Number of Rooms:<?= $immobilier->getRooms() ?></p>
                <p>Floor type : <?= $immobilier->getFlooringType() ?></p>
                <p>Bathroom: <?= $immobilier->getBathrooms() ?></p>
            </div>

            <div class=" items-center mt-4">
                <p class="text-2xl font-bold">$<?= $immobilier->getPrice() ?></p>
                <button class="ml-4 bg-green-500 text-white px-4 py-2 rounded-3xl">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="mt-8 flex">
        <div class="flex-1">
            <h2 class="text-xl font-bold">Opinions (18)</h2>
            <h3 class="text-lg font-bold mt-4">Overall Rating</h3>
            <div class="flex items-center mt-2">
                <span class="text-yellow-500">★★★★★</span>
            </div>

            <div class="mt-8 space-y-4">
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h4 class="text-lg font-bold">User 1</h4>
                    <div class="flex items-center mt-2">
                        <span class="text-yellow-500">★★★★★</span>
                    </div>
                    <p class="text-gray-600 mt-2">Date: January 1, 2024</p>
                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo vitae mauris laoreet.</p>
                </div>


            </div>
        </div>

        <div class="flex-1 ml-8">
            <h3 class="text-xl font-bold">Rate Us</h3>
            <div class="flex items-center mt-2">
                <span class="text-yellow-500">★★★★★</span>
            </div>

            <form class="mt-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">

                <label for="opinion" class="block mt-4 text-sm font-medium text-gray-700">Tell us about the property in a few words</label>
                <textarea id="opinion" name="opinion" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>

                <label for="file" class="block mt-4 text-sm font-medium text-gray-700">Attach an image</label>
                <input type="file" id="file" name="file" class="mt-1 p-2 w-full border rounded-md">

                <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-3xl">Save Opinion</button>
            </form>
        </div>
    </div>

</body>

</html>