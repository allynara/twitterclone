{"filter":false,"title":"faving.blade.php","tooltip":"/microposts/resources/views/users/faving.blade.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":9,"column":17},"action":"insert","lines":[" @include('user_favorite.favorite_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/favings') ? 'active' : '' }}\"><a href=\"{{ route('users.favings', ['id' => $user->id]) }}\">Favings <span class=\"badge\">{{ $count_favings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/favers') ? 'active' : '' }}\"><a href=\"{{ route('users.favers', ['id' => $user->id]) }}\">Favers <span class=\"badge\">{{ $count_favers }}</span></a></li>","            </ul>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]},{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""]},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"insert","lines":["",""]},{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""]},{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["",""]},{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["",""]},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]},{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""]},{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":12,"column":18},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>"],"id":5}],[{"start":{"row":13,"column":0},"end":{"row":27,"column":0},"action":"remove","lines":["","","","","","","","","","","","","","",""],"id":6},{"start":{"row":12,"column":18},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":18},"end":{"row":13,"column":0},"action":"remove","lines":["",""],"id":7}],[{"start":{"row":18,"column":14},"end":{"row":19,"column":233},"action":"remove","lines":["  <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>"],"id":8},{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"remove","lines":[" "]},{"start":{"row":18,"column":12},"end":{"row":18,"column":13},"action":"remove","lines":[" "]},{"start":{"row":18,"column":8},"end":{"row":18,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":8},"action":"remove","lines":["    "],"id":9},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"remove","lines":["    "]},{"start":{"row":17,"column":229},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":20,"column":10},"end":{"row":20,"column":17},"action":"remove","lines":["  </ul>"],"id":10},{"start":{"row":20,"column":10},"end":{"row":24,"column":11},"action":"insert","lines":["       </ul>","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":11},"end":{"row":24,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529553323909,"hash":"0ab6a9a81b7239ec4a7618345faa5a5804ba67be"}