{"filter":false,"title":"error_messages.blade.php","tooltip":"/kadai-tasklist/resources/views/commons/error_messages.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":6},"action":"remove","lines":["@if (count($errors) > 0)","    <ul>","        @foreach ($errors->all() as $error)","            <li>{{ $error }}</li>","        @endforeach","    </ul>","@endif"],"id":2},{"start":{"row":0,"column":0},"end":{"row":4,"column":6},"action":"insert","lines":["@if (count($errors) > 0)","    @foreach ($errors->all() as $error)","        <div class=\"alert alert-warning\">{{ $error }}</div>","    @endforeach","@endif"]}],[{"start":{"row":0,"column":0},"end":{"row":4,"column":6},"action":"remove","lines":["@if (count($errors) > 0)","    @foreach ($errors->all() as $error)","        <div class=\"alert alert-warning\">{{ $error }}</div>","    @endforeach","@endif"],"id":3},{"start":{"row":0,"column":0},"end":{"row":4,"column":6},"action":"insert","lines":["@if (count($errors) > 0)","    @foreach ($errors->all() as $error)","        <div class=\"alert alert-warning\">{{ $error }}</div>","    @endforeach","@endif"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":6},"end":{"row":4,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528858090862,"hash":"2f984792442a886b96ed2db16f0eb9c70c6cd753"}