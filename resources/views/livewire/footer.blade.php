<div>
         <!-- footer -->
         <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
            <div class="container grid grid-cols-3">
                <div class="col-span-1 space-y-8">
                    <img src="assets/images/logo.svg" alt="logo" class="w-30">
                    <div class="mr-2">
                        <p class="text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, hic?
                        </p>
                    </div>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                class="fa-brands fa-facebook-square"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                class="fa-brands fa-instagram-square"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                class="fa-brands fa-twitter-square"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fa-brands fa-github-square"></i>
                        </a>
                    </div>
                </div>
                

                <div class="col-span-2 grid grid-cols-2 gap-8">
                    <?php $i=0; foreach($this->footerMenu as $fkey=>$fval){ 
                            
                            if($i%2 ==0){ ?>

                    <div class="grid grid-cols-2 gap-8">
                            <?php } ?>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Solutions</h3>
            
                                <a href="{{ $fval['url']; }}" class="text-base text-gray-500 hover:text-gray-900 block">{{ $fval['title']; }}</a>
          
                        </div>
    
                        <?php if ( $i % 2 != 0 ) { ?>
                    </div>
                        <?php } ?>
                    <?php $i++; }?>
                </div>

            </div>
        </footer>
        <!-- ./footer -->
    
        <!-- copyright -->
        <div class="bg-gray-800 py-4">
            <div class="container flex items-center justify-between">
                <p class="text-white">&copy; TailCommerce - All Right Reserved</p>
            </div>
        </div>
        <!-- ./copyright -->
</div>
