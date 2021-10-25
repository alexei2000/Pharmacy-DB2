@props(['columns', 'items', 'onclickrow'])

<div class="table-stats order-table ov-h">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="serial">#</th>
                @foreach ($columns as $column)
                    <x-table.th class="{{ $column['class'] ?? '' }}">
                        {{ $column['title'] }}
                    </x-table.th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <x-table.tr onclick="{{ $onclickrow($item) }}">
                    <td>{{ $loop->index + 1 }}</td>
                    @foreach ($columns as $column)
                        <x-table.td type="{{ $column['type'] ?? null }}" :data="$item->{$column['key']}" />
                    @endforeach
                </x-table.tr>
            @endforeach
        </tbody>
    </table>
</div> <!-- /.table-stats -->
