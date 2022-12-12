<div>
    <div class="container py-16">
    <div>
        <!-- breadcrumb -->
        <div class="container py-4 flex items-center gap-3">
         <a href="../index.html" class="text-primary text-base">
             <i class="fa-solid fa-house"></i>
         </a>
         <span class="text-sm text-gray-400">
             <i class="fa-solid fa-chevron-right"></i>
         </span>
       
         <h2 class="text-2xl font-medium text-gray-800">Product Catalog</h2>
        {{-- {{$pageTitle}}/{{$pageType}} --}}
     </div>
     
    <div class="container pb-16">
     
        <div class="grid grid-cols-4 gap-6">

            @foreach ($ProductCatalog['productPages'] as $ckey=>$cval)

           
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                   <a href="{{url('/product')}}"> <img src="{{asset('assets/images/not-found.png')}}" alt="product 1" class="w-full"> </a>
               
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="{{url('/product')}}">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            <a href="{{url('/product')}}">{{$cval['contentElement']['values']['productObject']['title']}}</a>
                            </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-semibold">${{$cval['contentElement']['values']['productVariantObjects'][0]['price']}}</p>
                 
                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
                    to cart</a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- ./product -->
    <div class="container pb-16">
         <!-- info -->
         <div class="col-span-9 grid grid-cols-3 gap-4">

            <div class="shadow rounded bg-white px-4 pt-6 pb-8">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-medium text-gray-800 text-lg">Display Excerpt</h3>
            
                </div>
                <div class="space-y-1">
                    <p class="text-gray-800">{{$ProductCatalog['contentElement']['excerpt'][0]['value'] ?? 'N/A'; }}</p>  
                </div>
            </div>

            <div class="shadow rounded bg-white px-4 pt-6 pb-8">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-medium text-gray-800 text-lg">Form</h3>
               
                </div>
                <div class="space-y-1">
                    <p class="text-gray-800">{{$ProductCatalog['contentElement']['values']['form'] ?? 'N/A'; }}</p>
                </div>
            </div>

            <div class="shadow rounded bg-white px-4 pt-6 pb-8">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-medium text-gray-800 text-lg">Cross Sell</h3>
                </div>
                <div class="space-y-1">
                    <p class="text-gray-800">{{$ProductCatalog['contentElement']['values']['crossSell'] ?? 'N/A'; }}</p>
                </div>
            </div>

        </div>
        <!-- ./info -->
    </div> 
</div>
</div>
