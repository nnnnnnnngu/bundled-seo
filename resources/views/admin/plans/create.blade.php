<x-app-layout>

    <x-slot name="header">
        Create Plan
    </x-slot>

    <x-jet-form-section submit="{{ route('admin.plans.store') }}}">
        @csrf
        <x-slot name="title">
            {{ __('Plan Information') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Fill in fields and create new plan.') }}
        </x-slot>

        <x-slot name="form">

            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="title" value="{{ __('title') }}" />
                <x-jet-input id="title" type="text" name="title" class="mt-1 block w-full"   />
                <x-jet-input-error for="title" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="price_monthly" value="{{ __('price_monthly') }}" />
                <x-jet-input id="price_monthly" type="text" name="price_monthly" class="mt-1 block w-full"   />
                <x-jet-input-error for="price_monthly" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="price_annually" value="{{ __('price_annually') }}" />
                <x-jet-input id="price_annually" type="text" name="price_annually" class="mt-1 block w-full"   />
                <x-jet-input-error for="price_annually" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="price_annually" value="{{ __('description') }}" />
                <textarea name="description"  rows="5"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none mt-1 block w-full"></textarea>
                <x-jet-input-error for="price_annually" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="actions">


            <x-jet-button  >
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

</x-app-layout>
