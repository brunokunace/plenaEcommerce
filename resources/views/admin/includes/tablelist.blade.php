<div class="container">
    @include('admin.includes.alerts')
    <div class="row">
        <div class="col-md-10">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    @foreach($properties as $property)
                        <th scope="col">{{ $property['label'] }}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($data as $keyRegistry => $registry)
                    <tr>
                        <td><input type="checkbox" value="{{ $registry->id }}"></td>
                        @foreach($properties as $key => $property)
                            <td scope="row">
                                <{{$property['options']['tagName']}}
                                    @foreach($property['options'] as $keyOption => $option)
                                        @if($option)
                                            @if($option == 'a')
                                            href="{{ route("{$domain}.edit", $registry->id) }}"
                                @endif
                                {{$keyOption}}="{{$option}}"
                                @endif
                                @endforeach
                                >
                                {{ $registry->$key }}
                            </{{$property['options']['tagName']}}>
                            </td>
                        @endforeach
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        @include('admin.includes.menuright')

    </div>
</div>