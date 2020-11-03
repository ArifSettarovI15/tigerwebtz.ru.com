@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>
            Производится загрузка файла
        </h1>
        <h6>{{$fileUrl}}</h6>
    </div>

{{--    <h1>$_GET{{$_GET}}</h1>--}}
{{--    <h1>$_REQUEST{{$_REQUEST}}</h1>--}}
{{--    <h1>$_SESSION{{$_SESSION}}</h1>--}}
{{--    <h1>POST{{$_SERVER}}</h1>--}}

@endsection

@section("dataImportScript")
    <script>
        $(document).ready(function(){
            console.log(1);
            loadFile();
            (function(open) {
                XMLHttpRequest.prototype.open = function(m, u, a, us, p) {
                    this.addEventListener('readystatechange', function() {
                        console.log(this.response);
                    }, false);

                    open.call(this, m, u, a, us, p);
                };
            })(XMLHttpRequest.prototype.open)

        });
        function loadFile(){
            $.ajax({
                url:"{{route("shop.import")}}",
                type:"POST",
                data:{
                    "_token": "{{csrf_token()}}",
                    "fileUrl" : "{{$fileUrl}}"
                },
                headers:{
                    "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content'),
                },
                ajaxComplete: function(data) {
                    console.log(data);// Your code
                },
                success:(data)=>{
                    console.log(data);
                    if (data['error'])
                    {
                        alert(data['error']);
                        window.location.replace(data['redirect']);
                    }

                }
            });
        }
    </script>
@endsection
