<div class="mt-8">
    <div>
        <x-forms.inputs.text-input placeholder="Type something.." wire-model="search" class="w-full rounded-md" />
    </div>

    <div class="mt-8 flex items-center">
        <span wire:click="$emit('openModal', 'experience.some-filter')" class="bg-gray-200 font-medium py-2 px-4">Open modal</span>
    </div>

    <div class="mt-8 space-y-2">
    @foreach($experiences as $experience)
        <div class="bg-gray-100 rounded-md p-6">
            <div>{{ $experience->name }}</div>
            <div>from {{ $experience->getMinimalPackagePrice() }}</div>
            <div class="text-sm text-gray-500">{{ $experience->updated_at->format('Y-m-d') }}</div>
        </div>
    @endforeach
    </div>
</div>
