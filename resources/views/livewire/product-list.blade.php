<div class="container mx-auto">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="sm:grid grid-cols-4 gap-4  mt-8">
        @foreach($plans as $plan)
            <x-jet-button wire:click="$set('selectedPlan', '{{$plan->id}}')"
                class="flex flex-col w-full h-36 justify-center items-center {{$plan->id == $selectedPlan ? 'bg-gray-600 transform scale-105 duration-150 ' : 'bg-gray-500'}} rounded p-4 cursor-pointer hover:opacity-75">
                <div class="text-2xl font-bold text-white">{{$plan->title}}</div>
                <div >$ {{$plan->price_monthly}} /mo</div>
            </x-jet-button>
        @endforeach
    </div>

    <div class="mt-8">
        <div class="sm:grid grid-cols-6 gap-6  py-4 container mx-auto mt-6">
        @forelse($products as $product)
                <div class="py-4 px-2 space-y-2 border rounded hover:shadow-xl duration-150 ease-in-out cursor-pointer">
                    <div class="flex flex-col  w-full   justify-center items-center  rounded gap-4">
                        <img class="w-36 rounded"
                             src="{{Storage::url($product->image)}}"
                             alt="Apple Watch">
                        <span class="text-2xl font-semibold">{{$product->title}}</span>
                    </div>
                    <div class="text-center">
                        <a href="{{route('products.show', $product)}}" class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                            Visit Here
                        </a>
                    </div>
                    <div class="text-center">
                        $ {{$product->price}}/m
                    </div>
                </div>
        @empty
            no products in this plan yet
        @endforelse
        </div>
    </div>
</div>
