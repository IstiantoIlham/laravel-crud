<div class="flex flex-col gap-2 border rounded-md p-4">
    <div class="text-2xl font-medium">{{ $title }}</div>
    <div class="text-gray-500">{{ $subtitle }}</div>
    <div class="">{{ $body }}</div>
    <div class="flex gap-4">
        {{ $slot }}
    </div>
</div>
