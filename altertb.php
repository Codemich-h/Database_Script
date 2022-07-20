<?php include('database/alter.php');    ?>
<?php include('database/valid.php');    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table Result Page</title>
     <!-- Tailwind Css Script -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   
    
<div class="flex h-screen flex-col items-center justify-center space-y-6 bg-gray-100 px-4 sm:flex-row sm:space-x-6 sm:space-y-0">
        <div class="w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md duration-500 hover:scale-95 hover:shadow-6xl border-4 border-green-600">
        <h4 class="my-4 text-center text-3xl font-bold bg-green-700 text-white border-4 border-indigo-600"><?= add_column("") ?></h4>
        <h1 class="mt-2 text-center text-2xl font-sm text-red-600"><?= $message ?></h1>
          <img src="image/db-blue.svg"/>
        </div>
      </div> 

  
</body>
</html>

