@extends("layout.master")

@section("contant")
    <div style="height:300px;position:absolute;z-index: 9999">
@foreach($obj as $ob)
   <h1> {{
    $ob
}}</h1>


    @endforeach
    </div>
@endsection
