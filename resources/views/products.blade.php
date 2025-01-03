<x-guest-layout>
    <section class="lg:flex items-center hidden bg-default-400/10 h-14">
        <div class="container">
            <div class="flex items-center">
                <ol aria-label="Breadcrumb" class="flex items-center whitespace-nowrap min-w-0 gap-2">
                    <li class="text-sm">
                        <a class="flex items-center gap-2 align-middle text-default-800 transition-all leading-none hover:text-primary-500" href="javascript:void(0)">
                            <i class="w-4 h-4" data-lucide="home"></i>
                            Home
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>

                    <li class="text-sm">
                        <a class="flex items-center gap-2 align-middle text-default-800 transition-all leading-none hover:text-primary-500" href="javascript:void(0)">
                            Product
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>

                    <li aria-current="page" class="text-sm font-medium text-primary truncate leading-none hover:text-primary-500">
                        Grid
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section class="lg:py-8 py-6">
        <div class="container">
            <div class="lg:flex gap-6">
                <div class="hs-overlay hs-overlay-open:translate-x-0 hidden max-w-xs lg:max-w-full lg:w-1/4 w-full -translate-x-full fixed top-0 start-0 transition-all transform h-full z-60 lg:z-auto bg-white lg:translate-x-0 lg:block lg:static lg:start-auto dark:bg-default-50" id="filter_Offcanvas" tabindex="-1">
                    <div class="flex justify-between items-center py-3 px-4 border-b border-default-200 lg:hidden">
                        <h3 class="font-medium text-default-800">
                            Filter Options
                        </h3>

                        <button class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-default-500 hover:text-default-700 text-sm" data-hs-overlay="#filter_Offcanvas" type="button">
                            <span class="sr-only">Close modal</span>
                            <i class="h-5 w-5" data-lucide="x"></i>
                        </button>
                    </div>

                    <div class="h-[calc(100vh-128px)] overflow-y-auto lg:h-auto" data-simplebar>
                        <div class="p-6 lg:p-0 divide-y divide-default-200">
                            <div>
                                <button class="hs-collapse-toggle py-4 inline-flex justify-between items-center gap-2 transition-all uppercase font-medium text-lg text-default-900 w-full open" data-hs-collapse="#all_categories" id="hs-basic-collapse" type="button">
                                    Category
                                </button>
                                <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 open" id="all_categories">
                                    <div class="relative flex flex-col space-y-4 mb-6">
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="all" name="all" type="checkbox" checked>
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="all">All</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="wraps_roll" type="checkbox">
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="wraps_roll">Wraps</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="noodles_bowl" type="checkbox">
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="noodles_bowl">Noodles</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="burrito_bowls" name="burrito_bowls" type="checkbox">
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="burrito_bowls">Burrito Bowls</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="thalis" name="thalis" type="checkbox">
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="thalis">Thalis</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="smart_meals" name="smart_meals" type="checkbox">
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="smart_meals">Smart Meals</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="salads" name="salads" type="checkbox">
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="salads">Salads</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="beverages_desserts" name="beverages_desserts" type="checkbox">
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="beverages_desserts">Beverages & Desserts</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="appetizers" name="appetizers" type="checkbox">
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="appetizers">Appetizers</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input class="form-checkbox rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent ring-offset-0 cursor-pointer" id="burger_more" name="burger_more" type="checkbox">
                                            <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="burger_more">Burger & More</label>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end category -->

                            <div>
                                <button class="hs-collapse-toggle py-4 inline-flex justify-between items-center gap-2 transition-all uppercase font-medium text-lg text-default-900 w-full open" data-hs-collapse="#price_range" id="hs-basic-collapse" type="button">
                                    Price Range
                                </button>
                                <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 open" id="price_range">
                                    <div class="relative flex flex-col space-y-5 mb-6">
                                        <div class="space-y-2 py-4">
                                            <div id="product-price-range"></div>

                                            <div class="flex flex-wrap xl:flex-nowrap gap-2 items-center !mt-4">
                                                <div class="inline-flex items-center justify-center whitespace-nowrap w-full xl:w-1/2 gap-1 border border-default-200 py-2 px-4 rounded-full">
                                                    Min price :
                                                    <input class="border-none p-0 w-10 bg-transparent focus:ring-0" id="minCost" type="text" value="0" />
                                                </div>
                                                <div class="inline-flex items-center justify-center whitespace-nowrap w-full xl:w-1/2 gap-1 border border-default-200 py-2 px-4 rounded-full">
                                                    Max price :
                                                    <input class="border-none p-0 w-10 bg-transparent focus:ring-0" id="maxCost" type="text" value="1000" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="relative flex flex-col space-y-4 mb-6">
                                            <div class="flex items-center">
                                                <input class="form-radio rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent cursor-pointer" id="all_price" name="radio" type="radio">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="all_price">All
                                                    Price</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input class="form-radio rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent cursor-pointer" id="under_$20" name="radio" type="radio">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="under_$20">Under
                                                    $20</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input class="form-radio rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent cursor-pointer" id="$25_$100" name="radio" type="radio">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="$25_$100">$25
                                                    to $100</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input class="form-radio rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent cursor-pointer" id="$100_$300" name="radio" type="radio">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="$100_$300">$100
                                                    to $300</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input checked class="form-radio rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent cursor-pointer" id="$300_$500" name="radio" type="radio">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="$300_$500">$300
                                                    to $500</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input class="form-radio rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent cursor-pointer" id="$500_$1,000" name="radio" type="radio">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="$500_$1,000">$500
                                                    to $1,000</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input class="form-radio rounded-full text-primary border-default-400 bg-transparent w-5 h-5 focus:ring-0 focus:ring-transparent cursor-pointer" id="$1,000_$10,000" name="radio" type="radio">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="$1,000_$10,000">$1,000
                                                    to $10,000</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end range -->

                            <div>
                                <button class="hs-collapse-toggle py-4 inline-flex justify-between items-center gap-2 transition-all uppercase font-medium text-lg text-default-900 w-full open" data-hs-collapse="#cafe_restaurant" id="hs-basic-collapse" type="button">
                                    Popular Café / Restaurant
                                </button>
                                <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 open" id="cafe_restaurant">
                                    <div class="relative flex flex-col space-y-5 mb-6">
                                        <div class="flex gap-x-6">
                                            <div class="flex items-center w-1/2">
                                                <input checked class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="monginis" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="monginis">Monginis</label>
                                            </div>

                                            <div class="flex items-center w-1/2">
                                                <input checked class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="ferrero" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="ferrero">Ferrero</label>
                                            </div>
                                        </div>
                                        <div class="flex gap-x-6">
                                            <div class="flex items-center w-1/2">
                                                <input checked class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="burger_king" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="burger_king">Burger
                                                    King</label>
                                            </div>

                                            <div class="flex items-center w-1/2">
                                                <input class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="starbucks" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="starbucks">Starbucks</label>
                                            </div>
                                        </div>
                                        <div class="flex gap-x-6">
                                            <div class="flex items-center w-1/2">
                                                <input class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="macDonald" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="macDonald">MacDonald's</label>
                                            </div>

                                            <div class="flex items-center w-1/2">
                                                <input checked class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="tim_hortons" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="tim_hortons">Tim
                                                    Hortons</label>
                                            </div>
                                        </div>
                                        <div class="flex gap-x-6">
                                            <div class="flex items-center w-1/2">
                                                <input class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="coffee_cafe" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="coffee_cafe">Coffee
                                                    Café</label>
                                            </div>

                                            <div class="flex items-center w-1/2">
                                                <input class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="dominos" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="dominos">Dominos</label>
                                            </div>
                                        </div>
                                        <div class="flex gap-x-6">
                                            <div class="flex items-center w-1/2">
                                                <input class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="café_beats" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="café_beats">Café
                                                    Beats</label>
                                            </div>

                                            <div class="flex items-center w-1/2">
                                                <input checked class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="blaze_pizza" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="blaze_pizza">Blaze
                                                    Pizza</label>
                                            </div>
                                        </div>
                                        <div class="flex gap-x-6">
                                            <div class="flex items-center w-1/2">
                                                <input checked class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="tgb" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="tgb">TGB</label>
                                            </div>

                                            <div class="flex items-center w-1/2">
                                                <input class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="red_robbin" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="red_robbin">Red
                                                    Robbin</label>
                                            </div>
                                        </div>
                                        <div class="flex gap-x-6">
                                            <div class="flex items-center w-1/2">
                                                <input class="form-checkbox bg-transparent border-default-200 rounded text-primary focus:ring-transparent checked:bg-primary h-5 w-5 cursor-pointer" id="nestle" type="checkbox">
                                                <label class="ps-3 inline-flex items-center text-default-600 text-sm select-none" for="nestle">Nestle</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end popular-cafe & restaurant -->

                            <div>
                                <button class="hs-collapse-toggle py-4 inline-flex justify-between items-center gap-2 transition-all uppercase font-medium text-lg text-default-900 w-full open" data-hs-collapse="#popular_tags" id="hs-basic-collapse" type="button">
                                    Popular tags
                                </button>
                                <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 open" id="popular_tags">
                                    <div class="relative mb-6">
                                        <div class="flex flex-wrap gap-1.5">
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Pizza
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Burger
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Cake
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Desserts
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Coffee & Tea
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Juices
                                            </div>
                                            <div class="px-3 py-1 rounded-full border bg-primary/10 text-primary border-primary-500/60 transition-all">
                                                Italian Food
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Beverages
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Noodles
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Momos
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Sandwich
                                            </div>
                                            <div class="text-default-950 px-3 py-1 rounded-full border border-default-200 cursor-pointer hover:bg-primary/10 hover:text-primary hover:border-primary-500/60 transition-all">
                                                Frankie
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end cafe & restaurant -->

                            <div class="py-6">
                                <div class="relative rounded-lg bg-[url(../images/other/offer-bg.png)] bg-opacity-5 bg-center bg-cover overflow-hidden">
                                    <div class="absolute inset-0 bg-primary/10 -z-10"></div>
                                    <div class="p-12">
                                        <div class="flex justify-center mb-6">
                                            <img src="assets/filter-offer-dish-1d78b7ee.png">
                                        </div>
                                        <div class="text-center mb-10">
                                            <h3 class="text-2xl font-medium text-default-900 mb-2">
                                                Burger Combo</h3>
                                            <p class="text-sm text-default-500">Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit, sed do.</p>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 w-full font-medium text-default-950 mb-6">
                                            Sort By :
                                            <span class="inline-flex items-center gap-4 text-sm py-2 px-4 xl:px-5 bg-default-50 rounded-full">
                                                $59 USD
                                            </span>
                                        </div>
                                        <button class="inline-flex items-center justify-center gap-2 w-full py-2.5 px-4 rounded-full bg-primary text-white hover:bg-primary-500 transition-all" type="button">
                                            Shop Now <i class="h-5 w-5" data-lucide="move-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="block lg:hidden py-4 px-4 border-t border-default-200">
                        <a class="w-full inline-flex items-center justify-center rounded border border-primary bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-primary-700 hover:bg-primary focus:ring focus:ring-primary/50" href="javascript:void(0)">Reset</a>
                    </div>
                </div>

                <div class="lg:w-3/4">
                    <div class="flex flex-wrap md:flex-nowrap items-center justify-between gap-4 mb-10">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-4">
                            <button class="inline-flex lg:hidden items-center gap-4 text-sm py-2.5 px-4 xl:px-5 rounded-full text-default-950 border border-default-200 transition-all" data-hs-overlay="#filter_Offcanvas" type="button">
                                Filter <i class="h-4 w-4" data-lucide="settings-2"></i>
                            </button>

                            <h6 class="lg:flex hidden text-default-950 text-base">Showing 1–10 of 99
                                results</h6>
                        </div>

                        <div class="flex items-center">
                            <span class="text-base text-default-950 me-3">Sort By :</span>
                            <div class="hs-dropdown relative inline-flex [--placement:bottom-left]">
                                <button class="hs-dropdown-toggle flex items-center gap-2 font-medium text-default-950 text-sm py-2.5 px-4 xl:px-5 rounded-full border border-default-200 transition-all" type="button">
                                    Latest <i class="h-4 w-4" data-lucide="chevron-down"></i>
                                </button><!-- end dropdown button -->

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[200px] transition-[opacity,margin] mt-4 opacity-0 hidden z-20 bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] rounded-lg border border-default-100 p-1.5 dark:bg-default-50">
                                    <ul class="flex flex-col gap-1">
                                        <li>
                                            <a class="flex items-center gap-3 font-normal py-2 px-3 transition-all text-default-700 bg-default-400/20 rounded" href="javascript:void(0)">Latest</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/20 rounded" href="javascript:void(0)">Featured</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/20 rounded" href="javascript:void(0)">Release Date</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/20 rounded" href="javascript:void(0)">Avg. Rating</a>
                                        </li>
                                    </ul><!-- end dropdown items -->
                                </div><!-- end dropdown menu -->
                            </div>
                        </div>
                    </div><!-- end flex -->

                    <div class="grid xl:grid-cols-3 sm:grid-cols-2 gap-5">
                        <div class="xl:order-1 order-2 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/pizza-d046283e.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Italian
                                            Pizza</a>
                                        <i class="h-6 w-6 text-red-500 fill-red-500 cursor-pointer" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1"><i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.5</span>
                                    </span>

                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$8.75</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="5">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">Add
                                        to cart</a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->

                        <div class="sm:col-span-2 xl:order-2 order-1">
                            <div class="relative rounded-lg overflow-hidden bg-cover bg-[url(../images/other/discount.png)] h-full">
                                <div class="absolute inset-0 bg-black/10"></div>
                                <div class="relative p-8 md:p-12">
                                    <h4 class="text-5xl text-yellow-500 font-semibold mb-6">52% Discount</h4>
                                    <p class="text-lg text-default-500 mb-6">on your first order</p>
                                    <a class="md:mb-10 inline-flex items-center justify-center gap-2 rounded-full border border-primary bg-primary px-4 py-2 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:border-primary-700 hover:bg-primary-500" href="javascript:void(0)">
                                        Shop Now
                                        <i class="h-4 w-4" data-lucide="move-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end grid-col -->

                        <div class="order-3 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/burger-dee4db61.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Veg Burger</a>
                                        <i class="h-6 w-6 text-default-200 cursor-pointer hover:text-red-500 hover:fill-red-500 transition-all relative z-10" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1">
                                            <i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.2</span>
                                    </span>
                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$12.78</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="1">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">Add
                                        to cart</a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->

                        <div class="order-3 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/noodles-65d947ec.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Noodles</a>
                                        <i class="h-6 w-6 text-default-200 cursor-pointer hover:text-red-500 hover:fill-red-500 transition-all relative z-10" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1"><i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.9</span>
                                    </span>
                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$12.34</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="2">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">
                                        Add to cart
                                    </a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->

                        <div class="order-3 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/red-velvet-pastry-b09214ba.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Red
                                            Velvet Pastry</a>
                                        <i class="h-6 w-6 text-red-500 fill-red-500 cursor-pointer" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1"><i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.0</span>
                                    </span>
                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$42.25</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="4">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">Add
                                        to cart</a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->

                        <div class="order-3 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/spaghetti-c5ad136f.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Spaghetti</a>
                                        <i class="h-6 w-6 text-default-200 cursor-pointer hover:text-red-500 hover:fill-red-500 transition-all relative z-10" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1"><i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.9</span>
                                    </span>
                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$12.42</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="1">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">Add
                                        to cart</a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->

                        <div class="order-3 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/hot-chocolate-b95843f9.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Hot
                                            Chocolate</a>
                                        <i class="h-6 w-6 text-default-200 cursor-pointer hover:text-red-500 hover:fill-red-500 transition-all relative z-10" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1"><i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">3.9</span>
                                    </span>
                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$15.23</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="0">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">Add
                                        to cart</a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->

                        <div class="order-3 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/steamed-dumpling-8d78cb15.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Steamed
                                            Dumpling</a>
                                        <i class="h-6 w-6 text-default-200 cursor-pointer hover:text-red-500 hover:fill-red-500 transition-all relative z-10" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1"><i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.6</span>
                                    </span>
                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$52.14</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="1">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">Add
                                        to cart</a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->

                        <div class="order-3 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/veg-rice-e40004d1.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Indian
                                            Food</a>
                                        <i class="h-6 w-6 text-red-500 fill-red-500 cursor-pointer" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1"><i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.4</span>
                                    </span>
                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$25.14</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="2">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">Add
                                        to cart</a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->

                        <div class="order-3 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/chickpea-hummus-cb6f1463.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Chickpea
                                            Hummus</a>
                                        <i class="h-6 w-6 text-default-200 cursor-pointer hover:text-red-500 hover:fill-red-500 transition-all relative z-10" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1"><i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.8</span>
                                    </span>
                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$21.41</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="6">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">Add
                                        to cart</a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->

                        <div class="order-3 border border-default-200 rounded-lg p-4 overflow-hidden hover:border-primary hover:shadow-xl transition-all duration-300">
                            <div class="relative rounded-lg overflow-hidden divide-y divide-default-200 group">
                                <div class="mb-4 mx-auto">
                                    <img class="w-full h-full group-hover:scale-105 transition-all" src="assets/butter-cookies-62bc5f5a.png">
                                </div>

                                <div class="pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <a class="text-default-800 text-xl font-semibold line-clamp-1 after:absolute after:inset-0" href="product-detail.html">Butter
                                            Cookies</a>
                                        <i class="h-6 w-6 text-red-500 fill-red-500 cursor-pointer" data-lucide="heart"></i>
                                    </div>
                                    <span class="inline-flex items-center gap-2 mb-4">
                                        <span class="bg-primary rounded-full p-1"><i class="h-3 w-3 text-white fill-white" data-lucide="star"></i></span>
                                        <span class="text-sm text-default-950 from-inherit">4.8</span>
                                    </span>
                                    <div class="flex items-end justify-between mb-4">
                                        <h4 class="font-semibold text-xl text-default-900">$30.25</h4>
                                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full">
                                            <button class="minus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                –
                                            </button>
                                            <input class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" max="100" min="0" readonly="" type="text" value="2">
                                            <button class="plus flex-shrink-0 bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <a class="relative z-10 w-full inline-flex items-center justify-center rounded-full border border-primary bg-primary px-6 py-3 text-center text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-primary-500" href="cart.html">Add
                                        to cart</a><!-- end btn -->
                                </div>
                            </div>
                        </div><!-- end grid-cols -->
                    </div><!-- end grid -->

                    <div class="flex flex-wrap justify-center md:flex-nowrap md:justify-end gap-y-6 gap-x-10 pt-6">
                        <nav>
                            <ul class="inline-flex items-center space-x-2 rounded-md text-sm">
                                <li>
                                    <a aria-current="page" class="inline-flex items-center justify-center h-9 w-9 border border-primary rounded-full text-white bg-primary" href="javascript:void(0)">1 </a>
                                </li>
                                <li>
                                    <a class="inline-flex items-center justify-center h-9 w-9 bg-default-100 rounded-full transition-all duration-500 text-default-800 hover:bg-primary hover:border-primary hover:text-white" href="javascript:void(0)">2 </a>
                                </li>
                                <li>
                                    <a class="inline-flex items-center justify-center h-9 w-9 bg-default-100 rounded-full transition-all duration-500 text-default-800 hover:bg-primary hover:border-primary hover:text-white" href="javascript:void(0)">...</a>
                                </li>
                                <li>
                                    <a class="inline-flex items-center justify-center h-9 w-9 bg-default-100 rounded-full transition-all duration-500 text-default-800 hover:bg-primary hover:border-primary hover:text-white" href="javascript:void(0)">9 </a>
                                </li>
                                <li>
                                    <a class="inline-flex items-center justify-center h-9 w-9 bg-default-100 rounded-full transition-all duration-500 text-default-800 hover:bg-primary hover:border-primary hover:text-white" href="javascript:void(0)">10 </a>
                                </li>
                            </ul><!-- end ul -->
                        </nav><!-- end nav -->

                        <nav>
                            <ul class="inline-flex items-center space-x-2 rounded-md text-sm">
                                <li>
                                    <a class="inline-flex items-center justify-center h-9 w-9 bg-default-100 rounded-full transition-all duration-500 text-default-800 hover:bg-primary hover:border-primary hover:text-white" href="javascript:void(0)">
                                        <i class="h-5 w-5" data-lucide="chevron-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="inline-flex items-center justify-center h-9 w-9 bg-default-100 rounded-full transition-all duration-500 text-default-800 hover:bg-primary hover:border-primary hover:text-white" href="javascript:void(0)">
                                        <i class="h-5 w-5" data-lucide="chevron-right"></i>
                                    </a>
                                </li>
                            </ul><!-- end ul -->
                        </nav><!-- end nav -->
                    </div><!-- end flex -->
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
