@extends("layouts.app")

@section("content")
<div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
    <div class="popular-games pb-16 text-sm grid grid-cols-6 gap-12 border-b border-gray-800">
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
    </div>
    <div class="flex my-10">
        <div class="recently-reviewed w-3/4 mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
            <div class="recently-reviewed-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex p-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px;bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                            Final Fantasy 7 Remake
                        </a>
                        <div class="text-gray-400 mt-1">PS4</div>
                        <p class="mt-6 text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusantium explicabo consequatur inventore voluptate eum odio id adipisci. Ut necessitatibus molestiae, deleniti corrupti aliquam eos quod vitae voluptatem inventore labore!</p>
                    </div>
                </div>
                <div class="game bg-gray-800 rounded-lg shadow-md flex p-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px;bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                            Final Fantasy 7 Remake
                        </a>
                        <div class="text-gray-400 mt-1">PS4</div>
                        <p class="mt-6 text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusantium explicabo consequatur inventore voluptate eum odio id adipisci. Ut necessitatibus molestiae, deleniti corrupti aliquam eos quod vitae voluptatem inventore labore!</p>
                    </div>
                </div>
                <div class="game bg-gray-800 rounded-lg shadow-md flex p-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px;bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                            Final Fantasy 7 Remake
                        </a>
                        <div class="text-gray-400 mt-1">PS4</div>
                        <p class="mt-6 text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusantium explicabo consequatur inventore voluptate eum odio id adipisci. Ut necessitatibus molestiae, deleniti corrupti aliquam eos quod vitae voluptatem inventore labore!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="most-anticipated w-1/4">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class=" w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Final Fantasy 7 Remake</a>
                        <p class="text-gray-400 text-sm mt-1">Sept 16, 2020</p>
                    </div>
                </div>
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class=" w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Final Fantasy 7 Remake</a>
                        <p class="text-gray-400 text-sm mt-1">Sept 16, 2020</p>
                    </div>
                </div>
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class=" w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Final Fantasy 7 Remake</a>
                        <p class="text-gray-400 text-sm mt-1">Sept 16, 2020</p>
                    </div>
                </div>
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class=" w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Final Fantasy 7 Remake</a>
                        <p class="text-gray-400 text-sm mt-1">Sept 16, 2020</p>
                    </div>
                </div>
            </div>
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-10">Coming Soon</h2>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class=" w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Final Fantasy 7 Remake</a>
                        <p class="text-gray-400 text-sm mt-1">Sept 16, 2020</p>
                    </div>
                </div>
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class=" w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Final Fantasy 7 Remake</a>
                        <p class="text-gray-400 text-sm mt-1">Sept 16, 2020</p>
                    </div>
                </div>
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class=" w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Final Fantasy 7 Remake</a>
                        <p class="text-gray-400 text-sm mt-1">Sept 16, 2020</p>
                    </div>
                </div>
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class=" w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Final Fantasy 7 Remake</a>
                        <p class="text-gray-400 text-sm mt-1">Sept 16, 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection