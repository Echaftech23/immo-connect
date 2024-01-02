<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immobilier Details</title>
    <!-- Include your CSS stylesheets here -->
</head>
<body>

<div class="container mx-auto p-4">
    <!-- Header Section with Image and Title -->
    <div class="flex">
        <img src="../public/Img/annoucement1.jpg" alt="Property Image" class="w-1/2 h-auto object-cover">
        <div class="ml-4">
            <h1 class="text-2xl font-semibold">Property Title</h1>
            <p class="text-gray-600">123 Main St, City</p>
        </div>
    </div>

    <!-- Ratings, Status, Rooms, Kitchen, Bathroom, Price, and Buy Button -->
    <div class="mt-4">
        <div class="flex items-center">
            <!-- Ratings (Assuming you have a star icon for ratings) -->
            <div class="flex items-center">
                <span class="text-yellow-500">★★★★★</span>
                <span class="ml-2">(Current Rate)</span>
            </div>

            <!-- Status -->
            <div class="ml-4">
                <p>Status: For Sale</p>
            </div>
        </div>

        <!-- Room details -->
        <div class="mt-4">
            <p>Number of Rooms: 3</p>
            <p>Kitchen: 1</p>
            <p>Bathroom: 2</p>
            <!-- Add any other information you need -->
        </div>

        <!-- Price and Buy Button -->
        <div class="flex items-center mt-4">
            <p class="text-2xl font-bold">$500,000</p>
            <button class="ml-4 bg-green-500 text-white px-4 py-2 rounded-3xl">Buy Now</button>
        </div>
    </div>

    <!-- Description Section -->
    <div class="mt-8">
        <h2 class="text-xl font-semibold">Description</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...</p>
        <!-- Add more description content as needed -->
    </div>
</div>

<!-- Include your JavaScript files here -->

</body>
</html>
