{"filter":false,"title":"welcome.blade.php","tooltip":"/tasklist/resources/views/welcome.blade.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Ally's Page</h1>","        </div>","    </div>","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":9,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Microposts</h1>","            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","        </div>","    </div>","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":9,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Microposts</h1>","            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","        </div>","    </div>","@endsection"],"id":3},{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    @if (Auth::check())","        <?php $user = Auth::user(); ?>","        {{ $user->name }}","    @else","        <div class=\"center jumbotron\">","            <div class=\"text-center\">","                <h1>Welcome to the Microposts</h1>","                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","            </div>","        </div>","    @endif","@endsection"]}],[{"start":{"row":9,"column":35},"end":{"row":9,"column":44},"action":"remove","lines":["Micropost"],"id":4},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["T"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["a"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["s"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["k"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["l"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["i"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["s"]},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["t"]}],[{"start":{"row":3,"column":3},"end":{"row":6,"column":9},"action":"remove","lines":[" @if (Auth::check())","        <?php $user = Auth::user(); ?>","        {{ $user->name }}","    @else"],"id":6}],[{"start":{"row":3,"column":3},"end":{"row":6,"column":9},"action":"insert","lines":[" @if (Auth::check())","        <?php $user = Auth::user(); ?>","        {{ $user->name }}","    @else"],"id":8,"ignore":true},{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["    @endif",""]}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"remove","lines":["f"],"id":13},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":["i"]},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"remove","lines":["d"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["n"]},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"remove","lines":["e"]},{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"remove","lines":["@"]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "]},{"start":{"row":13,"column":10},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":10},"end":{"row":13,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529291074788,"hash":"75b87cb81c07ef5cdbaf5d88f372cf3ba5038022"}