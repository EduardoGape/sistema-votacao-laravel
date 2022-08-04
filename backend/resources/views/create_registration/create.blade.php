<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quest registration</title>
</head>
<body>
    <form action="{{route('registration')}}" method="POST" >
        @csrf
        <label for="" class="title_la">Quest Title</label><br/>
        <input type="text" class="title_in" id="title" name="title"><br/>

        <input type="hidden" id="token" name="token" value="true">
        <input type="hidden" id="num_votes" name="num_votes" value=0>

        <label for="" class="title_la">Data start</label><br/>
        <input type="date" class="data_input" id="dt_start" name="dt_start"><br/>

        <label for="" class="title_la">Data end</label><br/>
        <input type="date" class="data_input" id="dt_end" name="dt_end"><br/>

        <button type="submit">save</button>
    </form>
</body>
</html>
