@extends('layouts.homelayout')
@section('title', 'Home')


@section('content')
    <table id="example" class="display">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
            </tr>
        </tbody>
    </table>
@stop

        

@section('scripts')
    @parent
    <script>
        $(function(){
            pageHighlighter("", "web_li_uploadfile");
        })
    </script>
@stop

