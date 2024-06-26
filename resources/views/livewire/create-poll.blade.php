<div>
    <form wire:submit.prevent="createPoll">
    @csrf

      <label>Poll Title</label>
  
      <input style="color: #000000;" type="text" wire:model="title" />
  
      @error('title')
        <div class="text-red-500">{{ $message }}</div>
      @enderror
  
      <div class="mb-4 mt-4">
        <x-secondary-button type="button" wire:click="addOption">Add Option</x-secondary-button>
      </div>
  
      <div>
        @foreach ($options as $index => $option)
          <div class="mb-4">
            <label>Option {{ $index + 1 }}</label>
            <div class="flex gap-2">
              <input style="color: #000000;" type="text" wire:model="options.{{ $index }}" />
                <x-danger-button type="button" wire:click.prevent="removeOption({{ $index }})">Remove</x-danger-button>
            </div>
            @error("options.{$index}")
              <div class="text-red-500">{{ $message }}</div>
            @enderror
          </div>
        @endforeach
      </div>
      <x-primary-button type="submit" wire:click="createPoll">Create Poll</x-primary-button>
    </form>
  </div>
  