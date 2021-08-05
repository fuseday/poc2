@props(['name'])

<{{ $name }}>
    <template slot-scope="scope">
        <div>
            {{ $slot }}
        </div>
    </template>
</{{ $name }}>

