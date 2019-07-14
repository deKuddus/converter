@extends('layout')

@section('title', 'text-case-change')

@section('content')


<div class="col-md-8">
	@section('ajax')
      <script>
        $(document).ready(function(){
            $("#upper_conversion").click(function(){
                var normal_text  = $("#normal_text").val();
                $.ajax({
                   type:'GET',
                   url:'/upper-case-conversion',
                   data: {'_token': "{{ csrf_token() }}",'normal_text': normal_text},
                   success:function(response) {
                    console.log(response);
                     $("#change_case_output").html(response);
                     
                   }
                });
            });

            $("#lower_conversion").click(function(){
                var normal_text  = $("#normal_text").val();
            
                $.ajax({
                   type:'GET',
                   url:'/lower-case-conversion',
                   data: {'_token': "{{ csrf_token() }}",'normal_text': normal_text},
                   success:function(response) {
                    console.log(response);
                     $("#change_case_output").html(response);
                     
                   }
                });
            });

            $("#sentencecase_conversion").click(function(){
                var normal_text  = $("#normal_text").val();
                $.ajax({
                   type:'GET',
                   url:'/sentance-case-conversion',
                   data: {'_token': "{{ csrf_token() }}",'normal_text': normal_text},
                   success:function(response) {
                    console.log(response);
                     $("#change_case_output").html(response);
                     
                   }
                });
            });

            $("#capitalized_conversion").click(function(){
                var normal_text  = $("#normal_text").val();
                $.ajax({
                   type:'GET',
                   url:'/capitalizes-case-conversion',
                   data: {'_token': "{{ csrf_token() }}",'normal_text': normal_text},
                   success:function(response) {
                    console.log(response);
                     $("#change_case_output").html(response);
                     
                   }
                });
            });




        });
        
      </script>
	@stop
    <h2 class="text-center header-style br-bt"><a href="#" class="resource-link">Text Case Change </a></h2>
    <div class="user-input-area">
        <div class="form-group">
            <textarea name="user-input" id="normal_text" cols="30" rows="5" class="form-control" placeholder="Input your text here"></textarea>
        </div>
    </div>
    <div class="output-area mb-2">
        <div class="form-group">
            <button style="float: left; margin-right: 5px;" id="upper_conversion" class="btn-info">
                    Upper Case 
            </button>
            <button style="float: left;margin-right: 5px;" id="lower_conversion" class="btn-info">
                    Lower Case 
            </button>

            <button style="float: left;margin-right: 5px;" id="sentencecase_conversion" class="btn-info">
                    Sentence Case 
            </button>

            <button style="float: left;margin-right: 5px;" id="capitalized_conversion" class="btn-info">
                    Capitalized
            </button>
        </div>
        <button href="" class="copybutton btn btn-info btn-sm" title="Click to copy" id="copy-button">
            <i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
        </button>
        <br>
        <div class="output mt-4">
             <textarea id="change_case_output" class="form-control" cols="30" rows="5" disabled="disabled" ></textarea>
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