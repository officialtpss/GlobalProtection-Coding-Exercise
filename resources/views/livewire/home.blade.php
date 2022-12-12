<div>
    <body>
        <!-- features -->
        <div class="container py-16">
            <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Hero Section</h2>
            <div class="w-10/12 grid grid-cols-3 gap-6 mx-auto justify-center">

                        
            <?php foreach ($homeData['hero']['values'] as $key => $value) { 
                ?>
                <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                         <?php echo $value['content']['value']; ?>
                
                </div>
           <?php } ?>
            </div>
        </div>
        <!-- ./features -->
    
        <!-- categories -->
        <div class="container py-16">
            <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Content Block Section</h2>
            <div class="grid grid-cols-3 gap-3">

                <?php foreach ($homeData['blocks']['values'] as $key => $value) { 
                    ?>
       <div class="relative rounded-sm overflow-hidden group">
        <a href="#"
            class="absolute inset-0  flex items-center justify-center text-xl text-white font-roboto font-medium
     "></a>
            <?php echo $value['content']['value']; ?>
        </div>
                <?php } ?>

            </div>
        </div>
        <!-- ./categories -->
     

    </body>
</div>