<x-app-layout>
    <div class="w-full lg:ps-64">
        <div class="p-6 page-content">

            <div class="flex items-center justify-between w-full mb-6">
                <h4 class="text-xl font-medium">
                    Home
                </h4>

                <ol aria-label="Breadcrumb" class="hidden md:flex items-center whitespace-nowrap min-w-0 gap-2">
                    <li class="text-sm">
                        <a class="flex items-center gap-2 align-middle text-default-800 transition-all leading-none hover:text-primary-500"
                            href="javascript:void(0)">
                            Admin
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>

                    <li aria-current="page"
                        class="text-sm font-medium text-primary truncate leading-none hover:text-primary-500">
                        Home
                    </li>
                </ol>
            </div>
            <div class="grid xl:grid-cols-3 grid-cols-1 gap-6">
                <div class="xl:col-span-2">
                    <div class="flex">
                        <div
                            class="relative rounded-lg overflow-hidden bg-no-repeat bg-cover lg:bg-right bg-top bg-[url(../images/other/offer-bg2.png)] w-full">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <div class="relative p-8 md:p-12">
                                <h5 class="text-2xl text-white uppercase mb-2">Up to</h5>
                                <h4 class="text-2xl text-primary font-semibold mb-4">50% OFF</h4>
                                <p class="text-base text-white mb-6 max-w-lg">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt. </p>
                                <a href="javascript:void(0)"
                                    class="inline-flex items-center justify-center gap-2 rounded-full border border-primary bg-primary px-10 py-3 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:border-primary-700 hover:bg-primary-500">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="py-10">
                        <div class="flex items-center mb-10">
                            <h3 class="text-xl font-semibold text-default-950">Analytics Overview</h3>
                        </div>
                        <div class="grid lg:grid-cols-4 grid-cols-2 gap-6">
                            <div
                                class="border border-default-200 rounded-lg p-4 overflow-hidden text-center hover:border-primary transition-all duration-300">
                                <h4 class="text-2xl text-primary font-semibold mb-2">12.56K</h4>
                                <h6 class="text-lg font-medium text-default-950 mb-4">Total Revenue</h6>
                                <p class="text-sm text-default-600">10% Increase</p>
                            </div><!-- end grid-cols -->
                            <div
                                class="border border-default-200 rounded-lg p-4 overflow-hidden text-center hover:border-primary transition-all duration-300">
                                <h4 class="text-2xl text-primary font-semibold mb-2">2.5K</h4>
                                <h6 class="text-lg font-medium text-default-950 mb-4">New Orders</h6>
                                <p class="text-sm text-default-600">05% Increase</p>
                            </div><!-- end grid-cols -->
                            <div
                                class="border border-default-200 rounded-lg p-4 overflow-hidden text-center hover:border-primary transition-all duration-300">
                                <h4 class="text-2xl text-primary font-semibold mb-2">400</h4>
                                <h6 class="text-lg font-medium text-default-950 mb-4">Received Order</h6>
                                <p class="text-sm text-default-600">30% Increase</p>
                            </div><!-- end grid-cols -->
                            <div
                                class="border border-default-200 rounded-lg p-4 overflow-hidden text-center hover:border-primary transition-all duration-300">
                                <h4 class="text-2xl text-primary font-semibold mb-2">476</h4>
                                <h6 class="text-lg font-medium text-default-950 mb-4">Reviews</h6>
                                <p class="text-sm text-default-600">15% Increase</p>
                            </div><!-- end grid-cols -->
                        </div><!-- end grid -->
                    </div>

                    <div class="pb-10">
                        <div class="flex flex-wrap items-center justify-between gap-4 mb-10">
                            <h3 class="text-xl font-semibold text-default-950">Category</h3>
                            <a href="product-grid.html"
                                class="inline-flex items-center gap-1 text-sm text-primary font-medium hover:text-primary-500">View
                                all <i data-lucide="chevron-right" class="h-5 w-5"></i></a>
                        </div>
                        <div class="grid lg:grid-cols-6 grid-cols-3 gap-6">
                            <a href="product-grid.html" class="text-center space-y-4">
                                <div class="">
                                    <img src="/assets/bubble-tea-5a8ac6be.svg" class="mx-auto max-w-full h-full">
                                </div>
                                <h5 class="text-lg text-default-600">Beverage</h5>
                            </a>
                            <a href="product-grid.html" class="text-center space-y-4">
                                <div class="">
                                    <img src="/assets/bakery-72cb9b3e.svg" class="mx-auto max-w-full h-full">
                                </div>
                                <h5 class="text-lg text-default-600">Bakery</h5>
                            </a>
                            <a href="product-grid.html" class="text-center space-y-4">
                                <div class="">
                                    <img src="/assets/pizza-b04aa43d.svg" class="mx-auto max-w-full h-full">
                                </div>
                                <h5 class="text-lg text-default-600">Pizza</h5>
                            </a>
                            <a href="product-grid.html" class="text-center space-y-4">
                                <div class="">
                                    <img src="/assets/burger-ac2b9f02.svg" class="mx-auto max-w-full h-full">
                                </div>
                                <h5 class="text-lg text-default-600">Burger</h5>
                            </a>
                            <a href="product-grid.html" class="text-center space-y-4">
                                <div class="">
                                    <img src="/assets/seafood-74ad4647.svg" class="mx-auto max-w-full h-full">
                                </div>
                                <h5 class="text-lg text-default-600">Seafood</h5>
                            </a>
                            <a href="product-grid.html" class="text-center space-y-4">
                                <div class="">
                                    <img src="/assets/gelato-be97ae84.svg" class="mx-auto max-w-full h-full">
                                </div>
                                <h5 class="text-lg text-default-600">Desserts</h5>
                            </a>
                        </div><!-- end grid -->
                    </div>

                    <div class="pb-10">
                        <div class="flex flex-wrap items-center justify-between gap-4 mb-10">
                            <h3 class="text-xl font-semibold text-default-950">Best Selling Products</h3>
                            <a href="product-grid.html"
                                class="inline-flex items-center gap-1 text-sm text-primary font-medium hover:text-primary-500">View
                                all <i data-lucide="chevron-right" class="h-5 w-5"></i></a>
                        </div>
                        <div class="grid lg:grid-cols-4 grid-cols-2 gap-6">
                            <a href="product-grid.html"
                                class="border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary transition-all duration-300">
                                <div class="relative rounded-lg overflow-hidden divide-y divide-default-200">
                                    <div class="mb-4 mx-auto">
                                        <img src="/assets/veg-rice-e40004d1.png" class="w-full h-full">
                                    </div>

                                    <div class="pt-2">
                                        <h4 class="text-default-800 text-xl font-semibold line-clamp-1 mb-2">Indian
                                            Food</h4>
                                        <h6 class="font-semibold text-lg text-default-500">$25.14</h6>
                                    </div>
                                </div>
                            </a><!-- end grid-cols -->
                            <a href="product-grid.html"
                                class="border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary transition-all duration-300">
                                <div class="relative rounded-lg overflow-hidden divide-y divide-default-200">
                                    <div class="mb-4 mx-auto">
                                        <img src="/assets/noodles-65d947ec.png" class="w-full h-full">
                                    </div>

                                    <div class="pt-2">
                                        <h4 class="text-default-800 text-xl font-semibold line-clamp-1 mb-2">Noodles
                                        </h4>
                                        <h6 class="font-semibold text-lg text-default-500">$15.24</h6>
                                    </div>
                                </div>
                            </a><!-- end grid-cols -->
                            <a href="product-grid.html"
                                class="border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary transition-all duration-300">
                                <div class="relative rounded-lg overflow-hidden divide-y divide-default-200">
                                    <div class="mb-4 mx-auto">
                                        <img src="/assets/red-velvet-pastry-b09214ba.png" class="w-full h-full">
                                    </div>

                                    <div class="pt-2">
                                        <h4 class="text-default-800 text-xl font-semibold line-clamp-1 mb-2">Red Velvet
                                            Pastry</h4>
                                        <h6 class="font-semibold text-lg text-default-500">$25.14</h6>
                                    </div>
                                </div>
                            </a><!-- end grid-cols -->
                            <a href="product-grid.html"
                                class="border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary transition-all duration-300">
                                <div class="relative rounded-lg overflow-hidden divide-y divide-default-200">
                                    <div class="mb-4 mx-auto">
                                        <img src="/assets/garlic-herb-bread-8a00951d.png" class="w-full h-full">
                                    </div>

                                    <div class="pt-2">
                                        <h4 class="text-default-800 text-xl font-semibold line-clamp-1 mb-2">Indian
                                            Food</h4>
                                        <h6 class="font-semibold text-lg text-default-500">$25.14</h6>
                                    </div>
                                </div>
                            </a><!-- end grid-cols -->
                        </div><!-- end grid -->
                    </div>
                </div>
                <!-- end grid-cols -->

                <div class="lg:col-span-1">
                    <div class="border border-default-200 rounded-lg">
                        <div class="p-6">
                            <div class="mb-6">
                                <h2 class="text-xl text-default-800 font-semibold mb-4">Your Balance</h2>

                                <div
                                    class="bg-no-repeat bg-cover bg-[url(../images/other/offer-bg.png)] bg-primary/10 rounded-lg">
                                    <div class="py-6 px-8">
                                        <div class="flex sm:flex-row flex-col items-center gap-6">
                                            <div class="sm:w-1/2 w-full flex items-center gap-6">
                                                <div>
                                                    <span
                                                        class="inline-flex items-center justify-center h-14 w-14 bg-primary-200 text-primary shadow-md rounded-lg">
                                                        <i data-lucide="hard-drive-download" class="h-8 w-8"></i>
                                                    </span>
                                                    <p class="text-default-600 mt-1.5">Top Up</p>
                                                </div>

                                                <div>
                                                    <span
                                                        class="inline-flex items-center justify-center h-14 w-14 bg-primary-200 text-primary shadow-md rounded-lg">
                                                        <i data-lucide="hard-drive-upload" class="h-8 w-8"></i>
                                                    </span>
                                                    <p class="text-default-600 mt-1.5">Transfer</p>
                                                </div>
                                            </div>

                                            <div class="sm:w-1/2 w-full">
                                                <div class="bg-primary rounded-lg">
                                                    <div class="p-4">
                                                        <h6 class="text-lg font-medium text-default-100 mb-1">Balance
                                                        </h6>
                                                        <h1 class="text-2xl font-bold text-white">$12.000</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h2 class="text-xl text-default-800 font-semibold mb-4">Your Address</h2>

                                <div class="flex items-center justify-between gap-4 mb-4">
                                    <h3 class="text-lg text-default-800 font-semibold"><i data-lucide="map-pin"
                                            class="h-5 w-5 inline align-middle text-primary"></i> 47, Victoria Street
                                    </h3>
                                    <button
                                        class="border border-primary text-primary text-xs font-medium rounded-lg py-1.5 px-4 transition-all duration-300 hover:bg-primary hover:text-white">Change</button>
                                </div>
                                <p class="text-base/relaxed text-default-500 mb-4">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <div class="flex items-center justify-start gap-4 mb-4">
                                    <button
                                        class="border border-default-600 text-default-900 text-xs font-medium rounded-lg py-1.5 px-4 transition-all duration-300 hover:bg-default-600 hover:text-white">Add
                                        Details</button>
                                    <button
                                        class="border border-default-600 text-default-900 text-xs font-medium rounded-lg py-1.5 px-4 transition-all duration-300 hover:bg-default-600 hover:text-white">Add
                                        Note</button>
                                </div>
                            </div>

                            <div class="">
                                <h3 class="text-xl font-semibold text-default-800">Order Summery</h3>
                                <div class="">
                                    <div class="my-6 border-b border-default-200">
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="flex items-center gap-4">
                                                <img src="/assets/pizza-2-6f6035dd.png" class="h-16 w-16">
                                                <div class="">
                                                    <a href="product-grid.html"
                                                        class="text-base font-medium text-default-800">Pepperoni
                                                        Pizza</a>
                                                    <p class="text-sm font-medium text-default-800">x1</p>
                                                </div>
                                            </div>
                                            <h3 class="text-base font-medium text-default-800">+$5.59</h3>
                                        </div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="flex items-center gap-4">
                                                <img src="/assets/burger-05c15c9d.png" class="h-16 w-16">
                                                <div class="">
                                                    <a href="product-grid.html"
                                                        class="text-base font-medium text-default-800">Cheese
                                                        Burger</a>
                                                    <p class="text-sm font-medium text-default-800">x2</p>
                                                </div>
                                            </div>
                                            <h3 class="text-base font-medium text-default-800">+$6.49</h3>
                                        </div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="flex items-center gap-4">
                                                <img src="/assets/pizza-2-6f6035dd.png" class="h-16 w-16">
                                                <div class="">
                                                    <a href="product-grid.html"
                                                        class="text-base font-medium text-default-800">Vegan Pizza</a>
                                                    <p class="text-sm font-medium text-default-800">x1</p>
                                                </div>
                                            </div>
                                            <h3 class="text-base font-medium text-default-800">+$5.00</h3>
                                        </div>
                                    </div>

                                    <div class="py-6">
                                        <div class="flex items-center justify-between py-3">
                                            <h6 class="text-base text-default-600 font-medium">Service :</h6>
                                            <h6 class="text-base text-default-600 font-medium">+$1.00</h6>
                                        </div>
                                        <div class="flex items-center justify-between py-3">
                                            <h6 class="text-base text-default-800 font-medium">Total :</h6>
                                            <h4 class="text-xl text-primary font-semibold">$17.08</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-4">
                                    <a href="javascript:void(0)"
                                        class="flex items-center justify-center gap-2 rounded-full border border-primary bg-primary px-10 py-4 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:border-primary-700 hover:bg-primary-500">Checkout</a>
                                    <a href="javascript:void(0)"
                                        class="flex items-center justify-center gap-2 rounded-full border border-primary px-10 py-4 text-center text-sm font-semibold text-primary shadow-sm transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">Have
                                        a coupon code?</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end grid-cols -->
            </div><!-- end grid -->
        </div>
    </div>
</x-app-layout>
