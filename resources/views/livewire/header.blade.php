<div style="z-index:1;position:relative;">
          <!-- header -->
          <header class="py-4 shadow-sm bg-white">
            <div class="container flex items-center justify-between">
                <a href="/">
                    <img src="{{asset('assets/images/logo.svg')}}" alt="Logo" class="w-32">
                </a>
    
                <div class="w-full max-w-xl relative flex">
                    <span class="absolute left-4 top-3 text-lg text-gray-400">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" name="search" id="search"
                        class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none"
                        placeholder="search">
                    <button
                        class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
                </div>
            </div>
        </header>
        <!-- ./header -->
    
        <!-- navbar -->
        <nav class="bg-gray-800">
            <div class="container flex">

                <?php foreach ($headerMenu  as $key => $val ) { ?>
                <div class="px-8 py-4 flex items-center cursor-pointer relative group">
                    <span class="text-white">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                    
                    <a href="{{ url('/')}}"><span class="capitalize ml-2 text-white">{{$val['title']}}</span></a>
                    <div
                        class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed
                         opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible" style="width:173px;"> 
                        <?php foreach($val['children'] as $ckey=>$cval){ ?>
                        <a href="{{$cval['url']; }}" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <img src="assets/images/icons/sofa.svg" alt="sofa" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">{{$cval['title']; }}</span>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
                
                <div class="flex items-center justify-between flex-grow pl-12">
                    <div class="flex items-center space-x-6 capitalize">
                        {{-- <a href="index.html" class="text-gray-200 hover:text-white transition">Home</a>
                        <a href="pages/shop.html" class="text-gray-200 hover:text-white transition">Shop</a> --}}
                     
                    </div>
              
                </div>
            </div>
        </nav>
 
        <!-- ./navbar -->
</div>
