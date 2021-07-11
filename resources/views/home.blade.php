
@extends('layouts.homelayout')
@section('title', 'Home')


@section('content')
    <button class="btn btn-danger">Hello</button>
@stop

        

@section('scripts')
    @parent
    <script>
        $(function(){
            pageHighlighter("", "web_li_dashboard");
        })
    </script>
@stop

