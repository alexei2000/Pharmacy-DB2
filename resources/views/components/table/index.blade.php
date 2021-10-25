<div class="table-stats order-table ov-h">
    <table class="table table-hover">
        <thead>
            <tr>
                @foreach ($columns as $column)
                    <x-table.th class="{{ array_key_exists('class', $column) ? $column['class'] : '' }}">
                        {{ $column['title'] }}
                    </x-table.th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <x-table.tr onclick="{{ $onclickrow($item) }}">
                    @foreach ($columns as $column)
                        <x-table.td>
                            {{ $item->{$column['key']} }}
                        </x-table.td>
                    @endforeach
                </x-table.tr>
            @endforeach
        </tbody>
    </table>
</div> <!-- /.table-stats -->
