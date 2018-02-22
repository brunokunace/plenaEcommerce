<div class="container">
    @include('admin.includes.alerts')
    <div class="row">
        <div class="col-md-10">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    @foreach($properties as $property)
                        @if($property['showTable'])
                        <th scope="col">{{ $property['label'] }}</th>
                        @endif
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($data as $keyRegistry => $registry)
                    <tr>
                        <td><input type="checkbox" value="{{ $registry->id }}"></td>
                        @foreach($properties as $key => $property)
                            @if($property['showTable'])
                                <td scope="row">
                                    <{{$property['options']['tagName']}}
                                        @foreach($property['options'] as $keyOption => $option)
                                            @if($option)
                                                @if($option == 'a')
                                                href="{{ route("{$domain}.edit", $registry->id) }}"
                                    @endif

                                    {{$keyOption}}="{{$option}}"
                                    @if($option == 'boolean')
                                        @if($registry->$key != 0)
                                            class="badge badge-success"
                                        @else
                                            class="badge badge-secondary"
                                        @endif
                                    @endif
                                    @endif
                                    @endforeach
                                    >
                                    @if($property['options']['type'] == 'boolean')
                                        @if($registry->$key != 0)
                                            Sim
                                        @else
                                            Não
                                        @endif

                                    @else
                                        {{ $registry->$key }}
                                    @endif
                                </{{$property['options']['tagName']}}>
                                </td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        @include('admin.includes.menuright')

    </div>
</div>