@props(['type' => '', 'data'=>''])

<td>
    @switch($type)
    @case("gender")

    @switch($data)
    @case("male")
    <span class="badge bg-primary">Masculino</span>
    @break

    @case("female")
    <span class="badge bg-danger">Femenino</span>
    @break
    @endswitch
    @break

    @case("age")
    <span>{{ \Carbon\Carbon::createFromDate($data)->age }}</span>
    @break

    @case("avatar")
    <div class="round-img">
        <img class="rounded-circle" src="{{$data}}" alt="">
    </div>
    @break

    @default
    {{ $data }}
    @endswitch
</td>