<x-app-layout>
    <div class="w-full lg:ps-64">
        <div class="p-6 page-content">

            <div class="flex items-center justify-between w-full mb-6">
                <h4 class="text-xl font-medium">
                    All Products
                </h4>

                <ol aria-label="Breadcrumb" class="hidden md:flex items-center whitespace-nowrap min-w-0 gap-2">
                    <li class="text-sm">
                        <a class="flex items-center gap-2 align-middle text-default-800 transition-all leading-none hover:text-primary-500" href="javascript:void(0)">
                            Product
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>

                    <li aria-current="page" class="text-sm font-medium text-primary truncate leading-none hover:text-primary-500">
                        All Products
                    </li>
                </ol>
            </div>
            <div class="grid grid-cols-1">
                <div class="border rounded-lg border-default-200">
                    <div class="px-6 py-4 overflow-hidden ">
                        <div class="flex flex-wrap md:flex-nowrap items-center justify-between gap-4">
                            <h2 class="text-xl text-default-800 font-semibold">Item List</h2>

                            <div class="flex flex-wrap items-center gap-4">
                                <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                                    <button type="button" class="hs-dropdown-toggle flex items-center gap-2 font-medium text-default-700 text-sm py-2.5 px-4 rounded-md bg-default-100 transition-all">
                                        Save as Draft <i data-lucide="chevron-down" class="h-4 w-4"></i>
                                    </button><!-- end dropdown button -->

                                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[200px] transition-[opacity,margin] mt-4 opacity-0 hidden z-20 bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] rounded-lg border border-default-100 p-1.5 dark:bg-default-50">
                                        <ul class="flex flex-col gap-1">
                                            <li><a class="flex items-center gap-3 font-normal py-2 px-3 transition-all text-default-700 bg-default-100 rounded" href="javascript:void(0)">All</a></li>
                                            <li><a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)">Publish</a></li>
                                            <li><a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)">Save as Draft</a></li>
                                            <li><a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)">Discard</a></li>
                                        </ul><!-- end dropdown items -->
                                    </div><!-- end dropdown menu -->
                                </div>
                                <a href="admin-product-add.html" class="py-2.5 px-4 inline-flex rounded-lg text-sm font-medium bg-primary text-white transition-all hover:bg-primary-500">Add Product</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative overflow-x-auto">
                        <div class="min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-default-200">
                                    <thead class="bg-default-100">
                                        <tr class="text-start">
                                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">Product</th>
                                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">Type</th>
                                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">Price</th>
                                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">Status</th>
                                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">Action</th>
                                        </tr><!-- end table-head-row -->
                                    </thead><!-- end t-head -->
                                    <tbody class="divide-y divide-default-200">
                                        @foreach ($all_products as $product)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                                <a href="admin-product-details.html" class="flex items-center gap-3">
                                                    <div class="shrink">
                                                        <img src="assets/pizza-6722ca13.png" class="h-12 w-12">
                                                    </div>
                                                    <p class="text-base text-default-500 transition-all hover:text-primary">{{ $product->name }}</p>
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-500">{{ $product->category_id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-500">${{ $product->price }}</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1 py-0.5 px-2.5 rounded-full text-xs font-medium bg-green-500/20 text-green-500">Publish</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex gap-3">
                                                    <a href="admin-product-edit.html" class="transition-all hover:text-primary"><i data-lucide="pencil" class="w-5 h-5"></i></a>
                                                    <a href="admin-product-details.html" class="transition-all hover:text-primary"><i data-lucide="eye" class="w-5 h-5"></i></a>
                                                    <a href="javascript:void(0)" class="transition-all hover:text-red-500"><i data-lucide="trash-2" class="w-5 h-5"></i></a>
                                                </div>
                                            </td>
                                        </tr><!-- end table-row -->
                                        @endforeach

                                    </tbody><!-- end t-body -->
                                </table><!-- end table -->
                            </div><!-- end overflo-hidden -->
                        </div><!-- end table-responsive -->
                    </div>
                </div>
            </div><!-- end grid -->
        </div>
    </div>
</x-app-layout>
