@extends('layouts.app')

@section('content')
 <link href="css/comment.css" rel="stylesheet" type="text/css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Blog Post</div>

                <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod urna vitae ligula elementum, vitae commodo turpis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec lectus velit, congue efficitur quam at, consequat sodales mi. Pellentesque neque neque, tincidunt eget urna non, finibus cursus nisi. Aenean sagittis ante nec dolor faucibus, semper tincidunt dui maximus. Cras tristique ultricies ex, id laoreet risus commodo ut. Mauris venenatis porttitor semper. Mauris cursus mattis turpis non porttitor. Sed eget elementum neque, non porta dolor. Nulla vel felis sed elit maximus hendrerit. Integer fringilla felis at finibus egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc luctus, dolor eget congue efficitur, diam ipsum bibendum ex, a rhoncus sapien enim sed libero.
                <p>
Pellentesque et tincidunt elit. Curabitur interdum tellus vitae imperdiet mattis. Integer interdum turpis ac tellus lobortis rutrum. Cras semper risus eleifend mauris mattis accumsan. Sed eget nunc sagittis augue pellentesque posuere. Vestibulum eu ipsum risus. Pellentesque vestibulum tincidunt sem, sit amet congue ligula consectetur vel. Aliquam bibendum orci a mi interdum, in commodo purus maximus. Nulla facilisi. Donec volutpat felis mauris, nec facilisis tellus sollicitudin eget.
                </p> 
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
                <div class="panel-heading">Comments</div>

                <div class="panel-body">
                    <comment comment-url="1235"></comment>
                </div>
            </div>            
        </div>      
    </div>
</div>
@endsection
