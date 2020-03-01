<title>{{$customer}}</title>
@if (count($customers)>0)
@foreach ($customers as $name)
    {{$name}}
@endforeach
@else
    empty
@endif
