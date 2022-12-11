<x-app-layout>
    <div class="container mx-auto px-4">
        <aside class="capitalize py-6">
            <a href="{{route('products.index')}}" class="text-blue-500 underline">
                all products
            </a>
        </aside>
        <div class="space-y-6">

            <div>
                <div class="flex justify-between">
                    <div class="flex gap-4 items-center">
                        <img class="w-12 rounded"
                             src="{{Storage::url($product->image)}}"
                             alt="Apple Watch">
                        <h1 class="text-4xl font-bold text-center sm:text-left">{{$product->title}}</h1>
                    </div>

                    <a href="" class="text-red-600">Report problem</a>
                </div>

                <p class="text-center py-6 sm:text-left bg-gray-100 sm:bg-white rounded text-xl"> <span
                        class="text-4xl font-bold">{{$product->currency}} {{$product->price}}</span>/mo
                </p>
                <div>
                    <p class="sm:max-w-sm text-xl">
                        {{$product->description}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque, blanditiis cum debitis exercitationem impedit nesciunt nisi non nulla numquam, optio pariatur perspiciatis provident quam, quos suscipit temporibus ullam voluptatibus.
                    </p>


                    <div class="my-12 text-center sm:text-left">
                        <a href="" class="capitalize py-4 px-10 rounded bg-orange-500 font-semibold text-xl text-white">
                            buy now
                        </a>
                    </div>
                    <div class="my-12 text-center sm:text-left">
                        visit here: <a href="{{$product->url}}" target="_blank"  class="text-blue-700 hover:underline">
                            {{$product->url}}
                        </a>
                    </div>

                </div>
            </div>


            <!-- alert -->

            <div id="alert-additional-content-4"
                 class="p-4 mb-4 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-yellow-200" role="alert">
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5 mr-2 text-yellow-700 dark:text-yellow-800"
                         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium text-yellow-700 dark:text-yellow-800">Please Note</h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-yellow-700 dark:text-yellow-800">
                    Also they've separate Pages for Details about each tool & How users can use & They can't share accounts etc warnings & Also limitations on Usage of tools..

                    More info about this info warning goes here. This example text is going to run a bit longer so that
                    you can see how spacing within an alert works with this kind of content.

                    <h1 class="mt-2 font-bold">Currently we have limitations on Just few tools so we need to mention that too:</h1>
                    <ul>
                        <li>Like 30 Reports Per day For Ahrefs</li>
                        <li>20 Downloads Per day in Envato Elements</li>
                        <li>So these informations are necessary for clients</li>
                    </ul>



                </div>
                <div class="flex">
                    <button type="button"
                            class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-yellow-800 dark:hover:bg-yellow-900">
                        <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd"
                                  d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        View more
                    </button>
                    <button type="button"
                            class="text-yellow-700 bg-transparent border border-yellow-700 hover:bg-yellow-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-yellow-800 dark:text-yellow-800 dark:hover:text-white"
                            data-dismiss-target="#alert-additional-content-4" aria-label="Close">
                        Dismiss
                    </button>
                </div>
            </div>


            <!-- alert -->

            <!-- details -->
            <div class="sm:grid grid-cols-2 gap-4">
                <div class="p-4 bg-green-100 rounded">
                    <h2 class="text-2xl mb-2">What is included?</h2>

                    <ul class="capitalize">
                        <li>number of reports per day 20</li>
                        <li>expires in one month</li>
                        <li>allowed users at the same time 2</li>
                        <li>check competitors per day 1</li>
                    </ul>
                </div>
                <!-- features -->
                <div class="p-4 bg-gray-100 rounded">
                    <h2 class="text-xl mb-2">Features</h2>
                    <ul>
                        <li>feature 1</li>
                        <li>feature 2</li>
                        <li>feature 3</li>
                        <li> . . .</li>
                    </ul>
                </div>
            </div>

            <!-- information -->
            <!-- hero   -->
            <div class="container mx-auto py-12 text-center">
                <h1
                    class="mb-4 sm:mb-8 text-3xl font-extrabold tracking-tight leading-none text-gray-900 lg:text-5xl dark:text-white">
                    Some More Info</h1>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, doloribus.</p>
            </div>
            <div class="grid grid-cols-3 gap-8 py-6">
                <div class="col-span-3 sm:col-span-1 text-center space-y-4">
                    <img src="/assets/img/gear.svg" alt="" class="w-20 h-20 mx-auto">
                    <h2 class="font-semibold text-xl text-gray-700">Prioritize your website issues to fix</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi?
                    </p>
                </div>
                <div class="col-span-3 sm:col-span-1 text-center space-y-4">
                    <img src="/assets/img/trend.svg" alt="" class="w-20 h-20 mx-auto">
                    <h2 class="font-semibold text-xl text-gray-700">Increase conversion</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi?
                    </p>
                </div>
                <div class="col-span-3 sm:col-span-1 text-center space-y-4">
                    <img src="/assets/img/paper.svg" alt="" class="w-20 h-20 mx-auto">
                    <h2 class="font-semibold text-xl text-gray-700">See competitors</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi?
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
