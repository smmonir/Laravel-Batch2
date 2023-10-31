<?php
session_start();

$email = $_POST['email']??'';
$password = $_POST['password'] ??'';

$errorMessage = '';

if(isset($_SESSION['username'])){
    header('Location: index.php');
}

if ($email == 'admin@ostad.com' && $password == '123456') {
    $_SESSION['username'] = 'Admin';
	$_SESSION['role'] = 1;
    header('Location: role_management.php');
} else if ($email == 'user1@ostad.com' && $password == '123455') {
    $_SESSION['username'] = 'User';
    header('Location: user-dashboard.php');
} else if ($email != '' || $password != '') {
    $errorMessage = 'Invalid email or password';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="mx-auto container">
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
               
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" method='POST' action="login.php">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="text-red-500 my-2">
                                <?php echo $errorMessage; ?>
                            </div>
                            
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                              Log in
                            </button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don’t have an account yet? <a href="register.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500 color:blue" style="font-size:20px; font-weight:bold; color:#3333FF;">Sign up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>

</html>