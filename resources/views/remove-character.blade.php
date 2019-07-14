@extends('layout')

@section('title', 'remove-word-from-text')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
          $("#remove_string").click(function(){
            
            var given_text  = $("#given_text").val();
           	var removal_word  = $("#removal_word").val();
              $.ajax({
                 type:'GET',
                 url:'/remove-word',
                 data: {'_token': "{{ csrf_token() }}",'given_text': given_text,'removal_word':removal_word},
                 success:function(response) {
                 	console.log(response);
                   $("#string_outputdata").html(response);
                   
                 }
              });
          
          });
        });
      </script>
	@stop
                <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Remove Character From String</a></h2>
                <div class="user-input-area">
                    	
                        <div class="form-group">
                            <textarea  id="given_text" cols="30" rows="5" class="form-control" placeholder="Write your full text here"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea id="removal_word" cols="30" rows="3" class="form-control" placeholder="write the word you want to remvoe"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control mx-auto col-md-3 btn-info" id="remove_string">
                                    Remove Character <i class="fa fa-magic" aria-hidden="true" style="font-size:1.3rem; top: 3px; position: relative; left: 10px"></i>
                            </button>
                        </div>
                </div>
                <div class="output-area mb-2">
                    <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button"><i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
                    </button>
                    <br>
                    <div class="output mt-4">
                            <textarea id="string_outputdata" class="form-control" cols="30" rows="5" disabled="disabled" ></textarea>
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