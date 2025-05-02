<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meowks Hideout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-[#FFDC2E] w-full py-4 px-8 flex items-center justify-between">
        <h1 class="text-3xl font-bold">WeCats</h1>
        <div class="flex space-x-4">
            <img src="images/ig.png" alt="Ig Logo" class="w-16 h-16 rounded-full">
            <img src="images/fb.png" alt="Fb Logo" class="w-16 h-16 rounded-full">
        </div>
    </header>

    <main class="flex items-center justify-center min-h-[calc(100vh-4rem)]">
        <div class="bg-[#621D1D] text-white text-center p-8 w-96 border-2 border-black rounded-lg shadow-lg" style="padding: 70px; width: 700px;">
            <h2 class="text-4xl font-semibold mb-4">Login</h2>

            <?php if (isset($_GET['error'])): ?>
                <p class="text-red-500 mb-4"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>
            <form action="login.php" method="POST" class="space-y-5">
                <div>
                    <input type="Email" id="Email" name="Email" required class="w-3/4 p-2 rounded border border-gray-300 text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Enter your email">
                </div>
                <div>
                    <input type="Password" id="Password" name="Password" required class="w-3/4 p-2 rounded border border-gray-300 text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Enter your password">
                </div>
                <button type="submit" class="bg-yellow-500 text-black font-bold py-2 px-4 rounded hover:bg-orange-600">
                    Login
                </button>
            </form>
            <hr class="my-10 border-white">
            <a href="register.html" class="block">
                <button type="button" class="bg-yellow-500 text-black font-bold py-2 px-4 rounded hover:bg-orange-600 w-200">
                    Register Account
                </button>
            </a>
        </div>
    </main>
    <footer class="bg-[#FFDC2E] w-full py-4 text-center">
        <p class="text-gray-700">© 2023 WeCats. All rights reserved.</p>
        <p class="text-gray-700">Made with ❤️ by WeCats Team</p>
</body>
</html>