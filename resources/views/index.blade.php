@extends('layouts')

@section('script')
    <script>
        $(document).ready(function(){
            $("p").click(function(){
                $(this).hide();
            });
        });
    </script>
@endsection()

@section('content')

<a href="/create" class="btn btn-link">Create</a>

<a href="/show" class="btn btn-link">Show</a> <br> <br>

<p>Click me too!</p>
<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>


@endsection()