<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immobilier Details</title>
    
    <style>
        .images{
    display: flex;
    gap: 2rem;

}

.img1{
    width: 750px;
    height: 441px;
    border-radius: 48px;
    object-fit: cover;
}
.image2{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.img2{
    width: 112px;
    height: 67px;
    border-radius: 15px;
    cursor: pointer;
    object-fit: cover;
}
        .comments-container {
            max-height: 450px;
            overflow-y: auto;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <?php include 'includes/navbar.php' ?>

    <div class="flex gap-4">
        <div class="images flex-shrink-0">
        <div class="image2">
                <img src="../public/Img/annoucement1.jpg" class="img2">
                <img src="../public/Img/annoucement1.jpg" class="img2">
                <img src="../public/Img/Horizontal.png" class="img2">
                <img src="../public/Img/annoucement1.jpg" class="img2">
                <img src="../public/Img/annoucement1.jpg" class="img2">
            </div>
            <img src="../public/Img/annoucement1.jpg" alt="Image Description" class="img1 w-full h-auto">
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
                <a href="make-transaction" class="ml-4 bg-green-500 text-white px-4 py-2 rounded-3xl">Buy Now</a>
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

            <div class="comments-container mt-8 space-y-4">
                <?php foreach ($comments as $comment) : ?>
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h4 class="text-lg font-bold"><?= $comment->getUserId() ?></h4>
                        <div class="flex items-center mt-2">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <p class="text-gray-600 mt-2">Date: <?= $comment->getDatePublication() ?></p>
                        <p class="mt-2"><?= $comment->getContent() ?></p>
                    </div>
                <?php endforeach ?>

            </div>
        </div>

        <div class="flex-1 ml-8">
            <h3 class="text-xl font-bold">Rate Us</h3>
            <div class="flex items-center mt-2">
                <span class="text-yellow-500">★★★★★</span>
            </div>

            <form class="mt-4" action="comment/add" method="Post">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">

                <label for="opinion" class="block mt-4 text-sm font-medium text-gray-700">Tell us about the property in a few words</label>
                <textarea id="opinion" name="opinion" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>

                <label for="file" class="block mt-4 text-sm font-medium text-gray-700">Attach an image</label>
                <input type="file" id="file" name="file" class="mt-1 p-2 w-full border rounded-md">
                <input type="hidden" id="immobilier_id" name="immobilier_id" value="<?= $immobilier->getId() ?>">

                <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-3xl">Save Opinion</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var img1 = document.querySelector(".img1");
            var img2Elements = document.querySelectorAll(".img2");

            img2Elements.forEach(function(img2) {
                img2.addEventListener("click", function() {
                    img1.src = img2.src;
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const handleCommentFormSubmit = async (event) => {
                event.preventDefault();

                const form = event.target;
                const formData = new FormData(form);

                try {
                    const response = await fetch('path/to/save-comment-endpoint.php', {
                        method: 'POST',
                        body: formData,
                    });

                    if (!response.ok) {
                        throw new Error('Comment not saved.');
                    }

                    const newCommentData = await response.json();

                    updateComments(newCommentData);

                    form.reset();
                } catch (error) {
                    console.error(error);
                }
            };

            const updateComments = (commentData) => {
                const newCommentElement = document.createElement('div');
                newCommentElement.className = 'bg-gray-100 p-4 rounded-lg';
                newCommentElement.innerHTML = `
                <h4 class="text-lg font-bold">${commentData.username}</h4>
                <div class="flex items-center mt-2">
                    <span class="text-yellow-500">★★★★★</span>
                </div>
                <p class="text-gray-600 mt-2">Date: ${commentData.datePublication}</p>
                <p class="mt-2">${commentData.content}</p>
            `;

                const commentsSection = document.querySelector('.comments-section');
                commentsSection.appendChild(newCommentElement);
            };

            const commentForms = document.querySelectorAll('.comment-form');
            commentForms.forEach((form) => {
                form.addEventListener('submit', handleCommentFormSubmit);
            });
        });
    </script>


</body>

</html>