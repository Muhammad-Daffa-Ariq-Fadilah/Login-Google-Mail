<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login_btn.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in with google mail</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white py-4">
        <h1 class="text-center text-3xl">Log in with google mail</h1>
        <p class="text-center">Welcome, <?php echo $_SESSION['name']; ?>!</p>
        <form action="logout.php" method="post" class="text-center">
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Logout</button>
        </form>
    </header>
    <main class="container mx-auto mt-6 p-6">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione ut quaerat vitae commodi mollitia sunt repellat eligendi, quae nesciunt dolores quod accusamus facere nulla dolor! Obcaecati voluptas laboriosam praesentium illum quos alias vel, voluptates harum delectus deserunt saepe molestias error ut doloribus labore nobis libero consequuntur? Mollitia sint neque, id est quam similique in beatae quasi, accusantium, inventore dicta asperiores?
        </p>
    </main>
    <footer class="bg-blue-600 text-white text-center py-4 mt-6">
        <p>&copy; M Daffa</p>
    </footer>
</body>
</html>
