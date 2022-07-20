<!-- Header style starts here -->
<?php include("includes/header.php"); ?>
<style>
  .img_section {
  background: url("image/IMG1.jpg") center center;
}
</style> 
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
      <div class="w-full mx-auto px-24 pt-6 flex-col items-center space-y-4">
              <h1 class="text-white font-bold text-2xl font-sans">ALTER Existing Database tables</h1>
              <p class="text-white font-bold text-l mt-1">The simplest and easiest way to alter tables </p>
              <div class="flex justify-center lg:justify-start mt-6">
                  <a href="add-col.php" class="hover:bg-indigo-700 hover:text-white hover:-translate-y-1 transition-all duration-500 bg-white text-indigo-800 mt-4 px-4 py-2 rounded-2xl font-bold mb-2">Get Started</a>
              </div>
            </div>
          </div>
          
  
  

          <div class="flex w-full lg:w-1/2 justify-center items-center bg-black space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">
            <form class="bg-black rounded-md shadow-2xl p-5" method="post" action="success.php">
            <div class="group flex justify-center pt-2 items-center">
              <div class="ltr:ml-3 rtl:mr-3">
            <img class="shrink-0 h-12 w-12 rounded-full" src="image/IMG5.jpg" alt="" />
                <p class="text-l font-medium text-white">Omo Junior</p> 
               <p class="text-m font-medium text-white bg-blue-600 rounded border">Backend Developer</p>
             </div>
            </div>
             <br>
              <h1 class="text-white font-bold text-2xl mb-2">Communicate with your Database</h1>
              <p class="text-sm font-normal text-white mb-2">No coding knowledge needed.</p>
              <div class="flex items-center text-black border-2 mb-8 py-2 px-3 rounded-2xl">
                <input  class="pl-2 w-full  border-none" type="text" name="table_name" placeholder="Table_name" />
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
             <input type="text" name="table_id" placeholder="ID_CoL_name" class="pl-2 w-full outline-none border-none"/>   
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
              <input type="text" name="table_col1" placeholder="Table_col1" class="pl-2 w-full outline-none border-none"/> 
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
              <input type="text" name="table_col2" placeholder="Table_col2" class="pl-2 w-full outline-none border-none"/> 
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
              <input type="text" name="table_col3" placeholder="Table_col3" class="pl-2 w-full outline-none border-none"/> 
              </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
              <input type="text" name="table_date" placeholder="Table_date" class="pl-2 w-full outline-none border-none"/>  
               </div>
              <div class="text-white font-bold mb-2 rounded-2xl">
              <labe>Select an option to initialize the code. </labe>
              </div>
               <select class= "border-2 rounded-2xl border-indigo-600" name="inniate">
                    <option>None</option>
                    <option>on</option>
                    <option>off</option>
               </select>
              <input type="submit" name="create_button" value="Create Table" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2"> 
            </form>
            </div>
          </div>
      </div>   
</body>
</html>