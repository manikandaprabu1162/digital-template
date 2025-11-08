<div>
    <p><strong>ID:</strong> {{ $record->id }}</p>
    <p><strong>Name:</strong> {{ $record->name }}</p>
    <p><strong>Email:</strong> {{ $record->email }}</p>
    <p><strong>Roles:</strong> {{ $record->roles->pluck('name')->join(', ') }}</p>
    <p><strong>Created At:</strong> {{ $record->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $record->updated_at }}</p>
    @if($record->deleted_at)
        <p><strong>Deleted At:</strong> {{ $record->deleted_at }}</p>
    @endif
</div>
