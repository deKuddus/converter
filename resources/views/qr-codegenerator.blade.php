@extends('layout')

@section('title', 'qr code generator')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
            $("#get_qrcode").click(function(){
                var inputText  = $("#inputText").val();
                $.ajax({
                   type:'GET',
                   url:'/get-qrcode',
                   data: {'_token': "{{ csrf_token() }}",'inputText': inputText},
                   success:function(response) {
                    console.log(response);
                     $("#test").html(response);
                     
                   }
                });
            });
        });
        
      </script>
	@stop
                <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Age Calculator</a></h2>
                <div class="user-input-area">	
                <div class="form-group">
                     <textarea  id="inputText" cols="30" rows="5" class="form-control" placeholder="write your text"></textarea>
                </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control mx-auto col-md-3 btn-info" id="get_qrcode">
                         Show QR Image
                  </button>
                 </div>
                <div class="output-area mb-2">
                    <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button"><i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
                    </button>
                    <br>
                    <div class="output mt-4">
                            <span id="test"></span>
                    </div>
                </div>
                <div class="content-area">
                    <h2 class="header-style pt-3 text-center">
                        MD5 Generator
                    </h2>
                    <p class="text-justify">
                    	Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut tempora maxime asperiores officiis delectus! Nisi fugit eum doloribus nobis quis in tenetur odio distinctio quos.
                    </p>
                </div>
            </div>


@endsection