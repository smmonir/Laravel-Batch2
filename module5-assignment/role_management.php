<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['role']==1){
    //
}
else{
   die("You dont have access permission");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Management</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="mx-auto container">
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">                
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">               
                            <div class="text-red-500 my-2">
                                <?php //echo $errorMessage; ?>
                            </div>
                            <a href="add_user.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500 color:blue">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                              Add User
                            </button>
                            </a>
                    </div>
                </div>
            </div> 
            <table width="100%" border="1">
 <tr>
  <th scope="row">Username</th>
  <th>Email</th>
  <th>Actions</th>
 </tr>
 <tr>
  <td scope="row">Admin</td>
  <td>admin@ostad.com</td>
  <td> <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500 color:blue">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                              Edit | Delete
                            </button>
                            </a>
                            
                            </td>
 </tr>
 <tr>
  <td scope="row">User</td>
  <td>User@ostad.com</td>
  <td><a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500 color:blue">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                              Edit | Delete
                            </button>
                            </a></td>
 </tr>
</table>          
        </section>
        
    </section>
    
     
</body>

</html>