@props(['submit'])

<div {{ $attributes->merge(['class' => 'flex flex-col mx-48']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0">
        <form wire:submit="{{ $submit }}" method={{$method}} action={{$action}}>
            @csrf
            @if (isset($isEdit))
                @method('PUT')  
            @endif          
            <div class="px-16 py-6 bg-white shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-cols-6 gap-6">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-16 shadow sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
