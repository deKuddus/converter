@extends('layout')

@section('title', 'base64 decode online')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
            $("#encode").click(function(){
                var normal_string_to_encode  = $("#normal_string_to_encode").val();
                $.ajax({
                   type:'GET',
                   url:'/base64-encode-encode',
                   data: {'_token': "{{ csrf_token() }}",'normal_string_to_encode': normal_string_to_encode},
                   success:function(response) {
                    console.log(response);
                     $("#base64_output").html(response);
                     
                   }
                });
            });
        });
        
      </script>
	@stop
                <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Base 64 Encoding</a></h2>
                <div class="user-input-area">	
                <div class="form-group">
                    <textarea  id="normal_string_to_encode" cols="30" rows="5" class="form-control" placeholder="Input your text here"></textarea>
                </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control mx-auto col-md-3 btn-info" id="encode">
                         ENCODE 
                  </button>
                 </div>
                <div class="output-area mb-2">
                    <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button"><i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
                    </button>
                    <br>
                    <div class="output mt-4">
                            <textarea id="base64_output" class="form-control" cols="30" rows="5" disabled="disabled" ></textarea>
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