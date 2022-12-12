<div>
       <!-- breadcrumb -->
       <div class="container py-4 flex items-center gap-3">
        <a href="../index.html" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
      
        <h2 class="text-2xl font-medium text-gray-800">Product</h2>
       {{-- {{$pageTitle}}/{{$pageType}} --}}
    </div>
    <!-- ./breadcrumb -->

    <!-- product-detail -->
    <div class="container grid grid-cols-2 gap-6">
        <div>
            <img src="{{ asset('assets/images/not-found.png')}}" alt="product" class="w-full">
            <div class="grid grid-cols-5 gap-4 mt-4">
                <img src="{{ asset('assets/images/not-found.png')}}" alt="product2" class="w-full cursor-pointer border">
                <img src="{{ asset('assets/images/not-found.png')}}" alt="product2" class="w-full cursor-pointer border">
                <img src="{{ asset('assets/images/not-found.png')}}" alt="product2" class="w-full cursor-pointer border">
                <img src="{{ asset('assets/images/not-found.png')}}" alt="product2" class="w-full cursor-pointer border">
                <img src="{{ asset('assets/images/not-found.png')}}" alt="product2" class="w-full cursor-pointer border">
            </div>
        </div>

        <?php //dd($ProductDetail); ?>
        <div>
            <h2 class="text-3xl font-medium uppercase mb-2">{{$ProductDetail['productObject']['title']}}</h2>

            <div class="space-y-2">
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Product Type: </span>
                    <span class="text-gray-600">{{$ProductDetail['productObject']['product_type']}}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Brand: </span>
                    <span class="text-gray-600">{{$ProductDetail['productObject']['vendor']}}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Category: </span>
                    <span class="text-gray-600">{{$ProductDetail['googleProductCategory']}}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">SKU: </span>
                    <span class="text-gray-600">{{$ProductDetail['productSku']}}</span>
                </p>
            </div>
            <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                <p class="text-xl text-primary font-semibold">{{ '$'.$ProductDetail['productVariantObjects'][0]['price']}}</p>
            
            </div>

            <p class="mt-4 text-gray-600">{!! $ProductDetail['mediumDescription']; !!}</p>

            <div class="pt-4">
                <h3 class="text-sm text-gray-800 uppercase mb-1">Tags</h3>
                <div class="flex items-center gap-2">
                    <?php foreach ($ProductDetail['tags'] as $tkey => $tval) { ?>
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-xs<?php echo $tkey ?>" class="hidden">
                        <label for="size-xs<?php echo $tkey ?>"
                            class="text-xs border border-gray-200 rounded-sm h-6  flex items-center
                             justify-center cursor-pointer shadow-sm text-gray-600">{{$tval}}</label>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="pt-4">
                <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Color</h3>
                <div class="flex items-center gap-2">
                    <div class="color-selector">
                        <input type="radio" name="color" id="red" class="hidden">
                        <label for="red"
                            class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                            style="background-color: #fff;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" id="black" class="hidden">
                        <label for="black"
                            class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                            style="background-color: #fff;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" id="white" class="hidden">
                        <label for="white"
                            class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                            style="background-color: #fff;"></label>
                    </div>

                </div>
            </div>



            <div class="mt-6 flex gap-3 border-b border-gray-200 pb-5 pt-5">
                <a href="#"
                    class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-primary transition">
                    <i class="fa-solid fa-bag-shopping"></i> Add to cart
                </a>
            </div>

        </div>
    </div>
    <!-- ./product-detail -->

    <!-- description -->
    <div class="container pb-16">
        <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">Product details</h3>
        <div class="w-3/5 pt-6">
            <div class="text-gray-600">
                {!! $ProductDetail['productObject']['description']; !!} 
            </div>

            <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Tags</th>
                    <th class="py-2 px-4 border border-gray-300 ">  {{ $ProductDetail['productObject']['tags'] ?? 'N\A'; }} </th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Vendor</th>
                    <th class="py-2 px-4 border border-gray-300 ">{{ $ProductDetail['productObject']['vendor'] ?? 'N\A'; }} </th>
                </tr>

                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Twitter Card</th>
                    <th class="py-2 px-4 border border-gray-300 ">{{ $ProductDetail['twitterCard'] ?? 'N\A' }} </th>
                </tr>

                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Category</th>
                    <th class="py-2 px-4 border border-gray-300 ">{{ $ProductDetail['googleProductCategory'] ?? 'N\A' }} </th>
                </tr>   
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Color</th>
                    <th class="py-2 px-4 border border-gray-300 ">{{ $ProductDetail['googleColorCategory'] ?? 'N\A' }} </th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Material Category</th>
                    <th class="py-2 px-4 border border-gray-300 ">{{ $ProductDetail['googleMaterialCategory'] ?? 'N\A'}} </th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Unit Pricing Measure</th>
                    <th class="py-2 px-4 border border-gray-300 ">{{ $ProductDetail['googleUnitPricingMeasure'] ?? 'N\A'}} </th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Manufacturer Part Number (MPN) or Barcode (GTIN)</th>
                    <th class="py-2 px-4 border border-gray-300 ">{{ $ProductDetail['manufacturerPartNumber'] ?? 'N\A'}} </th>
                </tr>

            </table>
        </div>
    </div>
    <!-- ./description -->

    <!-- related product -->
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Media Collection</h2>
        <div class="grid grid-cols-4 gap-6">
            @foreach ($ProductDetail['mediaCollection'] as $mkey=>$mval)


                <?php// dd($mval); ?>
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">

                        @if(file_exists( public_path().'/images/'.$mval['name'] ))
                            <img src="'/images/'.$mval['name']"  alt="product 1" class="w-full">
                        @else
                            <img src="{{ asset('assets/images/not-found.png')}}" alt="Image not available">Collection {{ $mkey+1;}}
                        @endif

                      
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        {{-- <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer
                                Chair</h4>
                        </a> --}}
                    </div>
      
                </div>    
            @endforeach
            

   
        </div>
    </div>
    <!-- ./related product -->
</div>
