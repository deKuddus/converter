@extends('layout')

@section('title', 'base64 decode online')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
            $("#image_encode").click(function(){
                var image_url  = $("#image_url").val();
                $.ajax({
                   type:'GET',
                   url:'/image-base64-endecode',
                   data: {'_token': "{{ csrf_token() }}",'image_url': image_url},
                   success:function(response) {
                    console.log(response);
                     $("#image_base64_output").html(response);
                     
                   }
                });
            });
        });
        
      </script>
	@stop
                <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Base 64 Decoding</a></h2>
                <div class="user-input-area">	
                <div class="form-group">
                    <textarea  id="image_url" cols="30" rows="5" class="form-control" placeholder="Input your text here"></textarea>
                </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control mx-auto col-md-3 btn-info" id="image_encode">
                         ENCODE 
                  </button>
                 </div>
                <div class="output-area mb-2">
                    <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button"><i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
                    </button>
                    <br>
                    <div class="output mt-4">
                            <textarea id="image_base64_output" class="form-control" cols="30" rows="15" disabled="disabled" >
                              
                            </textarea>
                    </div>
                </div>
<!--                 <div class="content-area">
    <h2 class="header-style pt-3 text-center">
        MD5 Generator
    </h2>
    <p class="text-justify">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut tempora maxime asperiores officiis delectus! Nisi fugit eum doloribus nobis quis in tenetur odio distinctio quos.
    </p>
</div> -->
            </div>


@endsection