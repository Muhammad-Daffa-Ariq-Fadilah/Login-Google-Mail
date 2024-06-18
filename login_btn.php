<?php
session_start();
if (isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAuth 2.0</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-6 rounded shadow-md text-center">
            <h1 class="text-3xl font-bold mb-4">Login with google mail</h1>
            <p class="mb-4">Please log in to continue</p>
            <a href="login.php" class="bg-blue-600 text-white px-4 py-2 rounded">Login with Google</a>
        </div>
    </div>
</body>
</html>
