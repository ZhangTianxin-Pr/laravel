<?php


//print_r(shell_exec("ls"));


//print_r(shell_exec("ls /var/www/html/bootstrap/app/Http/Controllers/*"));

?>


<form class="form-inline" method="post" name="test" action="{{ route('test') }}">
    {{ csrf_field() }}
    <label class="sr-only input-research" for="test1">test1</label>
    <input type="text"  style="width:20%; height:35px;" class="form-control input-research-text" id="test1" placeholder="input1" name="test1">
    <label class="sr-only input-research" for="test2">test2</label>
    <input type="text"  style="width:20%; height:35px;" class="form-control input-research-text" id="test2" placeholder="input2" name="test2">
    <label class="sr-only input-research" for="test3">test3</label>
    <input type="text"  style="width:20%; height:35px;" class="form-control input-research-text" id="test3" placeholder="input3" name="test3">
    <input type="submit"  style="width:20%; height:35px;" class="btn btn-default input-research-button" value="Search" >
</form>

<h3>add result:{{$result}}</h3>
