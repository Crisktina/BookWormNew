<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>Bookworms library</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/main.css">
  </head>
<body>
  
<nav class="box-nav p-5 lg:p-10">
  <div class="flex justify-between items-center mb-4 lg:mb-6">
     <a href="/BookWormnew"><img src="../assets/images/logo.svg" alt="Logo"></a>
    <a href="/BookWormnew"><img src="../assets/images/casita.png" alt="Logo"></a>
  </div>
   
  <form class="flex items-center my-2 justify-items-stretch rounded-md bg-white" method="GET">
    <input class="w-full py-2 px-4 rounded-md placeholder:text-blue-400 placeholder:text-sm placeholder:font-bold placeholder:font-sans text-blue-600" type="search" autocomplete="off" placeholder="Search by Title / Author" aria-label="Search" label="Search" name="keyword" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
    <button class="px-4" type="submit" name="search">
      <img src="../assets/images/lupa.png" alt="Magnifier glass">
    </button>
  </form>
</nav>