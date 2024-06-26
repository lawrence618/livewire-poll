<div>
    <div class="grid grid-cols-4 gap-10">

        @forelse ($polls as $poll)
        <div class="border border-gray-300 p-4 rounded">

            <div class="mb-4">
            <h3 class="mb-4 text-xl">
                {{ $poll->title }}
            </h3>
            @foreach ($poll->options as $option)
                <div class="mb-2">
                    <x-secondary-button wire:click="vote({{ $option->id }})">Vote</x-secondary-button>
                {{ $option->name }} ({{ $option->votes->count() }})
                </div>
            @endforeach
            </div>
        </div>
        @empty
            <div class="text-gray-500">
            No polls available
            </div>
        @endforelse
    </div>
</div>
  