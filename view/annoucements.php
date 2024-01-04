<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Page</title>
    <link href="../public/css/tailwind.css" rel="stylesheet">


</head>

<body class="bg-gray-100">

    <!--        navbar        -->
    <?php
    include 'Includes/navbar.php';
    ?>


    <div class="container mx-auto p-4">
        <div class="mb-4">
            <label for="priceFilter" class="text-gray-700">Filter by Price:</label>
            <select id="priceFilter" class="p-2 border rounded">
                <option value="asc">Cheapest first</option>
                <option value="desc">Most expensive first</option>
            </select>

            <label for="searchInput" class="text-gray-700">Search:</label>
            <input type="text" id="searchInput" class="p-2 border rounded">

        </div>

        <div class="flex flex-wrap -mx-4">
            <?php foreach ($immobiliers as $immobilier) :    ?>

                <div class="w-full md:w-1/3 p-4 relative" data-price="<?= $immobilier->getPrice() ?>">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <div class="absolute top-0  bg-orange-500 text-white p-2">
                            <p class="font-bold">$ <?= $immobilier->getPrice() ?></p>
                        </div>

                        <img src="public/Img/annoucement1.jpg" alt="Property Image" class="w-full h-48 object-cover">

                        <div class="absolute top-48  bg-orange-500 text-white p-2">
                            <p>For Sale</p>
                        </div>
                        <div class="p-7">
                            <p class="text-sm text-gray-600">Seller: <?= $immobilier->getUserId() ?>|| <?= $immobilier->getLocationId() ?></p>
                        </div>

                        <h2 class="text-lg font-semibold p-4">
                            <?= $immobilier->getTitle() ?>
                        </h2>

                        <div class="flex justify-center">
                            <div class="bg-orange-500 text-white text-center p-2 rounded-3xl w-72">
                                <button class="px-4 py-2 rounded-3xl">Buy Now</button>
                            </div>
                        </div>

                        <div class="flex justify-between p-4">
                            <a href="annoucement/details?id=<?= $immobilier->getId() ?>" class="bg-blue-500 text-white px-4 py-2 rounded-full">Explore Details</a>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded-full">Message Seller</button>
                        </div>
                    </div>
                </div>

            <?php endforeach  ?>



        </div>
    </div>

    <!--        footer        -->
    <?php
    include 'Includes/footer.php';
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.querySelector(".flex-wrap");
            const priceFilter = document.getElementById("priceFilter");
            const searchInput = document.getElementById("searchInput");

            const announcements = Array.from(container.children);

            priceFilter.addEventListener("change", filterAnnouncements);
            searchInput.addEventListener("input", filterAnnouncements);

            function filterAnnouncements() {
                const order = priceFilter.value;
                const search = searchInput.value.toLowerCase();

                const filteredAnnouncements = announcements.filter(function(announcement) {
                    const price = parseFloat(announcement.getAttribute("data-price"));
                    const title = announcement.querySelector(".text-lg").textContent.toLowerCase();

                    const matchesPrice = isNaN(price) || price.toString().includes(search);
                    const matchesTitle = title.includes(search);

                    return matchesPrice || matchesTitle; // Use '||' for OR condition
                });

                filteredAnnouncements.sort(function(a, b) {
                    const priceA = parseFloat(a.getAttribute("data-price"));
                    const priceB = parseFloat(b.getAttribute("data-price"));

                    if (order === "asc") {
                        return priceA - priceB;
                    } else {
                        return priceB - priceA;
                    }
                });

                container.innerHTML = "";
                filteredAnnouncements.forEach(function(announcement) {
                    container.appendChild(announcement);
                });
            }
        });
    </script>



    <!--             script pour navbar                                    -->
    <script type="text/javascript" src="../public/Js/navbarScript.js"></script>
</body>

</html>