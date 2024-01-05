<?php
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/tailwind.css" rel="stylesheet">
</head>

<body>
    <!-- Container -->
    <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">

        <!-- Login component -->
        <div class="flex shadow-md">
            <!-- Login form -->
            <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
                <div class="w-72">
                    <!-- Heading -->
                    <h1 class="text-xl font-semibold">Welcome to ImmoConnect</h1>
                    <small class="text-gray-400">Please enter your details</small>

                    <!-- Form -->
                    <form action="signup" method="post" class="mt-4">
                        <div class="mb-3">
                            <label class="mb-2 block text-xs font-semibold">Username</label>
                            <input type="text" name="username" placeholder="Enter your username" class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" required />
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 block text-xs font-semibold">Email</label>
                            <input type="email" name="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" required />
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 block text-xs font-semibold">Password</label>
                            <input type="password" name="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" required />
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 block text-xs font-semibold">Confirm Password</label>
                            <input type="password" name="cpassword" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" required />
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="signup" class="mb-1.5 block w-full text-center text-white bg-orange-500 hover:bg-orange-600  px-2 py-1.5 rounded-md font-semibold">Signup</button>
                            <button class="flex flex-wrap justify-center w-full border border-gray-300 hover:border-gray-500 px-2 py-1.5 rounded-md">
                                <img class="w-5 mr-2" src="https://lh3.googleusercontent.com/COxitqgJr1sJnIDe8-jiKhxDx1FrYbtRHKJ9z_hELisAlapwE9LUPh6fcXIfb5vwpbMl4xl9H9TRFPc5NOO8Sb3VSgIBrfRYvW6cUA">
                                Sign up with Google
                            </button>
                        </div>
                    </form>

                    <!-- Footer -->
                    <div class="text-center">
                        <span class="text-xs text-gray-400 font-semibold">Already have account?</span>
                        <a href="signin" class="text-xs font-semibold text-orange-500">Login</a>
                    </div>
                </div>
            </div>
            <!-- Login banner -->
            <div class="flex flex-wrap content-center justify-center rounded-r-md relative" style="width: 24rem; height: 32rem;">
                <img class="w-full h-full bg-center bg-no-repeat bg-cover rounded-r-md" src="public/img/Rectangle 2206.png">
                <img class="w-full h-full absolute top-1/2" src="public/img/log-light.png" style="width: 150px; height: 15px;">
            </div>
        </div>
    </div>
    <!--        footer        -->
<?php include '../../view/includes/footer.php';?>
    <!--             script pour navbar                                    -->
    <script type="text/javascript" src="public/js/navbarScript.js"></script>
</body>

</html>