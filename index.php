<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="script.js"></script>
    <title>CREATE DATABASE TABLE</title>
    <!-- Tailwind Css Script -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
  .img_section {
  background: url("image/IMG1.jpg") center center;
}
</style>   
</head>
<body class="bg-black">

<div class="h-screen flex">
          <div class="hidden lg:flex w-full lg:w-1/2 img_section
          justify-around items-center">
            <div 
                  class=" 
                  bg-black 
                  opacity-20 
                  inset-0 
                  z-0"
                  >
           </div>
      <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
              <h1 class="text-white font-bold text-4xl font-sans">Create MYSQL <br> Database tables </h1>
              <p class="text-white mt-1">The simplest and easiest way to create tables </p>
              <div class="flex justify-center lg:justify-start mt-6">
                  <a href="#" class="hover:bg-indigo-700 hover:text-white hover:-translate-y-1 transition-all duration-500 bg-white text-indigo-800 mt-4 px-4 py-2 rounded-2xl font-bold mb-2">Get Started</a>
              </div>
            </div>
          </div>
          
  
  

          <div class="flex w-full lg:w-1/2 justify-center items-center bg-black space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">
            <form class="bg-black rounded-md shadow-2xl p-5" id="btn" method="post" action="success.php">
            <div class="group flex justify-center pt-2 items-center">
              <div class="ltr:ml-3 rtl:mr-3">
            <img class="shrink-0 h-12 w-12 rounded-full" src="image/IMG5.jpg" alt="" />
                <p class="text-m font-medium text-white">Omo Junior</p> 
               <p class="text-m font-medium text-white">Backend Developer</p>
             </div>
            </div>
             <br>
              <h1 class="text-white font-bold text-2xl mb-2">Communicate with your Database</h1>
              <p class="text-sm font-normal text-white mb-2">No coding knowledge needed.</p>
              <div class="flex items-center text-black border-2 mb-8 py-2 px-3 rounded-2xl">
                <input  class="pl-2 w-full  border-none" id="table_name" type="text" name="table_name" placeholder="Table_name" />
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
             <input type="text" id="table_id" name="table_id" placeholder="ID_CoL_name" class="pl-2 w-full outline-none border-none" />   
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
              <input type="text" id="table_col1" name="table_col1" placeholder="Table_col1" class="pl-2 w-full outline-none border-none"/> 
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
              <input type="text" id="table_col2" name="table_col2" placeholder="Table_col2" class="pl-2 w-full outline-none border-none"/> 
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
              <input type="text" id="table_col3" name="table_col3" placeholder="Table_col3" class="pl-2 w-full outline-none border-none"/> 
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
              <input type="text" id="table_date" name="table_date" placeholder="Table_date" class="pl-2 w-full outline-none border-none"/>  
               </div>
              <div class="text-red-600  mb-2 rounded-2xl">
              <labe>Select an option to initialize the code. </labe>
              </div>
               <select class= "border-2 rounded-2xl border-indigo-600" name="inniate">
                    <option>None</option>
                    <option>on</option>
                    <option>off</option>
               </select>
              <input type="submit" id="create_button" name="create_button" value="Create Table" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2"> 
            </form>
            </div>
          </div>
      </div>   
</body>
</html>
