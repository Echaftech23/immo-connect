<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Page</title>
    <!-- Include the Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!--        navbar        -->
    <?php
    include 'Includes/navbar.php';
    ?>
    <div class="container mx-auto p-4">
        <div class="flex flex-wrap -mx-4">
        <?php foreach($immobiliers as $immobilier):    ?>

            <div class="w-full md:w-1/3 p-4 relative">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="absolute top-0  bg-green-500 text-white p-2">
                        <p class="font-bold">$ <?= $immobilier->getPrice() ?></p>
                    </div>

                    <img src="public/Img/annoucement1.jpg" alt="Property Image" class="w-full h-48 object-cover">

                    <div class="absolute top-48  bg-green-500 text-white p-2">
                        <p>For Sale</p>
                    </div>
                    <div class="p-7">
                        <p class="text-sm text-gray-600">Seller: <?= $immobilier->getUserId() ?>|| <?= $immobilier->getLocationId()?></p>
                    </div>

                    <h2 class="text-lg font-semibold p-4">
                    <?= $immobilier->getTitle() ?>
                    </h2>

                    <div class="flex justify-center">
                        <div class="bg-green-500 text-white text-center p-2 rounded-3xl w-72">
                            <button class="px-4 py-2 rounded-3xl">Buy Now</button>
                        </div>
                    </div>

                    <div class="flex justify-between p-4">
                        <a href="annoucement/details?id=<?= $immobilier->getId()?>" class="bg-blue-500 text-white px-4 py-2 rounded-full">Explore Details</a>
                        <button class="bg-green-500 text-white px-4 py-2 rounded-full">Message Seller</button>
                    </div>
                </div>
            </div>

            <?php endforeach  ?>

            <!-- Repeat similar structure for other cards -->

        </div>
    </div>

    <!--        footer        -->
    <?php
    include 'Includes/footer.php';
    ?>
    <!--             script pour navbar                                    -->
    <script type="text/javascript" src="../public/Js/navbarScript.js"></script>
</body>

</html>