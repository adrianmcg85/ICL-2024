<x-app-layout>
    <x-form-section submit="Submit">
        <x-slot name="title">
            {{ __('Create Cat Profile') }}
        </x-slot>
    
        <x-slot name="description">
            {{ __('Please provide details for that cat you are going') }}
        </x-slot>
        <x-slot name="method">POST</x-slot>
        <x-slot name="action">{{route('product.store')}}</x-slot>
        <x-slot name="form" >
            <div class="col-span-6 sm:col-span-4">
                <x-label for="product_name" value="{{ __('Name') }}" />
                <x-input name="name" id="product_name" type="text" class="mt-1 block w-full" />
                <x-input-error for="product_name" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-label for="gender" value="{{ __('Gender') }}" />
                <x-input name="gender" id="gender" type="text" class="mt-1 block w-full" />
                <x-input-error for="gender" class="mt-2" />
            </div> 
            <div class="col-span-6 sm:col-span-4">
                <x-label for="status" value="{{ __('Status') }}" />
                <x-input name="gender" id="status" type="text" class="mt-1 block w-full" />
                <x-input-error for="status" class="mt-2" />
            </div>      
            <div class="col-span-6 sm:col-span-4">
                <x-label for="dob" value="{{ __('Date of birth') }}" />
                <x-input name="date" data-provide="datepicker" id="event_date" type="date" name="event_date" value="<?php echo date('Y-m-d'); ?>" />                
                <x-input-error for="sob" class="mt-2" />
            </div>  
            <div class="col-span-6 sm:col-span-4">
                <x-label for="description" value="{{ __('description') }}" />
                <x-text-area name="description" id="description" class="mt-1 block w-full" :value="$value" />
                <x-input-error for="description" class="mt-2" />
            </div>  

        </x-slot>
    
        <x-slot name="actions">
    
            <x-button>
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-form-section>    
</x-app-layout>
