{"filter":false,"title":"index.blade.php","tooltip":"/kadai-tasklist/resources/views/tasks/index.blade.php","undoManager":{"mark":50,"position":50,"stack":[[{"start":{"row":0,"column":0},"end":{"row":19,"column":10},"action":"insert","lines":[" @if (count($messages) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>タイトル</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                    <tr>","                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>","                        <td>{{ $message->title }}</td>","                        <td>{{ $message->content }}</td>","                    </tr>","                @endforeach","            </tbody>","        </table>","    @endif"],"id":1}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["@"],"id":2},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["x"],"id":3},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["t"]},{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"insert","lines":["e"]},{"start":{"row":0,"column":6},"end":{"row":0,"column":7},"action":"insert","lines":["n"]},{"start":{"row":0,"column":7},"end":{"row":0,"column":8},"action":"insert","lines":["d"]},{"start":{"row":0,"column":8},"end":{"row":0,"column":9},"action":"insert","lines":["s"]}],[{"start":{"row":0,"column":9},"end":{"row":0,"column":10},"action":"insert","lines":[")"],"id":4},{"start":{"row":0,"column":10},"end":{"row":0,"column":11},"action":"insert","lines":["("]},{"start":{"row":0,"column":11},"end":{"row":0,"column":12},"action":"insert","lines":["'"]},{"start":{"row":0,"column":12},"end":{"row":0,"column":13},"action":"insert","lines":["l"]},{"start":{"row":0,"column":13},"end":{"row":0,"column":14},"action":"insert","lines":["a"]},{"start":{"row":0,"column":14},"end":{"row":0,"column":15},"action":"insert","lines":["y"]},{"start":{"row":0,"column":15},"end":{"row":0,"column":16},"action":"insert","lines":["o"]},{"start":{"row":0,"column":16},"end":{"row":0,"column":17},"action":"insert","lines":["u"]}],[{"start":{"row":0,"column":17},"end":{"row":0,"column":18},"action":"insert","lines":["r"],"id":5},{"start":{"row":0,"column":18},"end":{"row":0,"column":19},"action":"insert","lines":["s"]},{"start":{"row":0,"column":19},"end":{"row":0,"column":20},"action":"insert","lines":["."]}],[{"start":{"row":0,"column":19},"end":{"row":0,"column":20},"action":"remove","lines":["."],"id":6},{"start":{"row":0,"column":18},"end":{"row":0,"column":19},"action":"remove","lines":["s"]},{"start":{"row":0,"column":17},"end":{"row":0,"column":18},"action":"remove","lines":["r"]}],[{"start":{"row":0,"column":17},"end":{"row":0,"column":18},"action":"insert","lines":["t"],"id":7},{"start":{"row":0,"column":18},"end":{"row":0,"column":19},"action":"insert","lines":["s"]},{"start":{"row":0,"column":19},"end":{"row":0,"column":20},"action":"insert","lines":["."]},{"start":{"row":0,"column":20},"end":{"row":0,"column":21},"action":"insert","lines":["a"]}],[{"start":{"row":0,"column":21},"end":{"row":0,"column":22},"action":"insert","lines":["p"],"id":8},{"start":{"row":0,"column":22},"end":{"row":0,"column":23},"action":"insert","lines":["p"]},{"start":{"row":0,"column":23},"end":{"row":0,"column":24},"action":"insert","lines":["'"]},{"start":{"row":0,"column":24},"end":{"row":0,"column":25},"action":"insert","lines":[")"]}],[{"start":{"row":0,"column":25},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":[" "]},{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["@"]}],[{"start":{"row":1,"column":2},"end":{"row":1,"column":3},"action":"insert","lines":["s"],"id":10},{"start":{"row":1,"column":3},"end":{"row":1,"column":4},"action":"insert","lines":["e"]},{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["c"]},{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"insert","lines":["t"]},{"start":{"row":1,"column":6},"end":{"row":1,"column":7},"action":"insert","lines":["i"]},{"start":{"row":1,"column":7},"end":{"row":1,"column":8},"action":"insert","lines":["o"]},{"start":{"row":1,"column":8},"end":{"row":1,"column":9},"action":"insert","lines":["n"]}],[{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":["("],"id":11},{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["'"]}],[{"start":{"row":1,"column":11},"end":{"row":1,"column":12},"action":"insert","lines":["c"],"id":12},{"start":{"row":1,"column":12},"end":{"row":1,"column":13},"action":"insert","lines":["o"]},{"start":{"row":1,"column":13},"end":{"row":1,"column":14},"action":"insert","lines":["n"]},{"start":{"row":1,"column":14},"end":{"row":1,"column":15},"action":"insert","lines":["t"]},{"start":{"row":1,"column":15},"end":{"row":1,"column":16},"action":"insert","lines":["e"]},{"start":{"row":1,"column":16},"end":{"row":1,"column":17},"action":"insert","lines":["n"]},{"start":{"row":1,"column":17},"end":{"row":1,"column":18},"action":"insert","lines":["t"]}],[{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"insert","lines":["'"],"id":13},{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"insert","lines":[")"]}],[{"start":{"row":1,"column":20},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":[" "]},{"start":{"row":2,"column":1},"end":{"row":3,"column":0},"action":"insert","lines":["",""]},{"start":{"row":3,"column":0},"end":{"row":3,"column":1},"action":"insert","lines":[" "]},{"start":{"row":3,"column":1},"end":{"row":4,"column":0},"action":"insert","lines":["",""]},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":[" "]},{"start":{"row":4,"column":1},"end":{"row":5,"column":0},"action":"insert","lines":["",""]},{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"insert","lines":["<"],"id":15},{"start":{"row":3,"column":2},"end":{"row":3,"column":3},"action":"insert","lines":["h"]},{"start":{"row":3,"column":3},"end":{"row":3,"column":4},"action":"insert","lines":["1"]}],[{"start":{"row":3,"column":4},"end":{"row":3,"column":10},"action":"insert","lines":["></h1>"],"id":16}],[{"start":{"row":3,"column":5},"end":{"row":3,"column":8},"action":"insert","lines":["タスク"],"id":23}],[{"start":{"row":3,"column":8},"end":{"row":3,"column":10},"action":"insert","lines":["一覧"],"id":32}],[{"start":{"row":5,"column":0},"end":{"row":19,"column":56},"action":"remove","lines":[" @if (count($messages) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>タイトル</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                    <tr>","                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>","                        <td>{{ $message->title }}</td>","                        <td>{{ $message->content }}</td>"],"id":33},{"start":{"row":5,"column":0},"end":{"row":25,"column":96},"action":"insert","lines":[" @if (count($messages) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>タイトル</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                    <tr>","                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>","                        <td>{{ $message->title }}</td>","                        <td>{{ $message->content }}</td>","                    </tr>","                @endforeach","            </tbody>","        </table>","    @endif","    {!! link_to_route('messages.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}"]}],[{"start":{"row":26,"column":4},"end":{"row":30,"column":10},"action":"remove","lines":["                </tr>","                @endforeach","            </tbody>","        </table>","    @endif"],"id":34}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "],"id":36}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":27,"column":0},"end":{"row":27,"column":1},"action":"insert","lines":["@"]}],[{"start":{"row":27,"column":1},"end":{"row":27,"column":2},"action":"insert","lines":["e"],"id":38},{"start":{"row":27,"column":2},"end":{"row":27,"column":3},"action":"insert","lines":["n"]},{"start":{"row":27,"column":3},"end":{"row":27,"column":4},"action":"insert","lines":["d"]},{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"insert","lines":["s"]},{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"insert","lines":["e"]}],[{"start":{"row":27,"column":1},"end":{"row":27,"column":6},"action":"remove","lines":["endse"],"id":39},{"start":{"row":27,"column":1},"end":{"row":27,"column":11},"action":"insert","lines":["endsection"]}],[{"start":{"row":0,"column":9},"end":{"row":0,"column":10},"action":"remove","lines":[")"],"id":40}],[{"start":{"row":5,"column":19},"end":{"row":5,"column":20},"action":"remove","lines":["e"],"id":41},{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"remove","lines":["g"]},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"remove","lines":["a"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["s"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"remove","lines":["s"]},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"remove","lines":["e"]},{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"remove","lines":["m"]}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["t"],"id":42},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["a"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["s"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["k"]}],[{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"remove","lines":["e"],"id":43},{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"remove","lines":["g"]},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"remove","lines":["a"]},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"remove","lines":["s"]},{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"remove","lines":["s"]},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":["e"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["m"]}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["t"],"id":44},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":["a"]},{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"insert","lines":["s"]},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":["k"]}],[{"start":{"row":15,"column":43},"end":{"row":15,"column":44},"action":"remove","lines":["e"],"id":45},{"start":{"row":15,"column":42},"end":{"row":15,"column":43},"action":"remove","lines":["g"]},{"start":{"row":15,"column":41},"end":{"row":15,"column":42},"action":"remove","lines":["a"]},{"start":{"row":15,"column":40},"end":{"row":15,"column":41},"action":"remove","lines":["s"]},{"start":{"row":15,"column":39},"end":{"row":15,"column":40},"action":"remove","lines":["s"]},{"start":{"row":15,"column":38},"end":{"row":15,"column":39},"action":"remove","lines":["e"]},{"start":{"row":15,"column":37},"end":{"row":15,"column":38},"action":"remove","lines":["m"]}],[{"start":{"row":15,"column":37},"end":{"row":15,"column":38},"action":"insert","lines":["t"],"id":46},{"start":{"row":15,"column":38},"end":{"row":15,"column":39},"action":"insert","lines":["a"]},{"start":{"row":15,"column":39},"end":{"row":15,"column":40},"action":"insert","lines":["s"]},{"start":{"row":15,"column":40},"end":{"row":15,"column":41},"action":"insert","lines":["k"]}],[{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"remove","lines":["e"],"id":47},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":["g"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"remove","lines":["a"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"remove","lines":["s"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"remove","lines":["s"]},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"remove","lines":["e"]},{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"remove","lines":["m"]}],[{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"insert","lines":["t"],"id":48},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"insert","lines":["a"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"insert","lines":["s"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"insert","lines":["k"]}],[{"start":{"row":17,"column":67},"end":{"row":17,"column":68},"action":"remove","lines":["e"],"id":49},{"start":{"row":17,"column":66},"end":{"row":17,"column":67},"action":"remove","lines":["g"]},{"start":{"row":17,"column":65},"end":{"row":17,"column":66},"action":"remove","lines":["a"]},{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"remove","lines":["s"]},{"start":{"row":17,"column":63},"end":{"row":17,"column":64},"action":"remove","lines":["s"]},{"start":{"row":17,"column":62},"end":{"row":17,"column":63},"action":"remove","lines":["e"]},{"start":{"row":17,"column":61},"end":{"row":17,"column":62},"action":"remove","lines":["m"]}],[{"start":{"row":17,"column":61},"end":{"row":17,"column":62},"action":"insert","lines":["t"],"id":50},{"start":{"row":17,"column":62},"end":{"row":17,"column":63},"action":"insert","lines":["a"]},{"start":{"row":17,"column":63},"end":{"row":17,"column":64},"action":"insert","lines":["s"]},{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"insert","lines":["k"]}],[{"start":{"row":17,"column":87},"end":{"row":17,"column":88},"action":"remove","lines":["e"],"id":51},{"start":{"row":17,"column":86},"end":{"row":17,"column":87},"action":"remove","lines":["g"]},{"start":{"row":17,"column":85},"end":{"row":17,"column":86},"action":"remove","lines":["a"]},{"start":{"row":17,"column":84},"end":{"row":17,"column":85},"action":"remove","lines":["s"]},{"start":{"row":17,"column":83},"end":{"row":17,"column":84},"action":"remove","lines":["s"]},{"start":{"row":17,"column":82},"end":{"row":17,"column":83},"action":"remove","lines":["e"]},{"start":{"row":17,"column":81},"end":{"row":17,"column":82},"action":"remove","lines":["m"]}],[{"start":{"row":17,"column":81},"end":{"row":17,"column":82},"action":"insert","lines":["t"],"id":52},{"start":{"row":17,"column":82},"end":{"row":17,"column":83},"action":"insert","lines":["a"]},{"start":{"row":17,"column":83},"end":{"row":17,"column":84},"action":"insert","lines":["s"]},{"start":{"row":17,"column":84},"end":{"row":17,"column":85},"action":"insert","lines":["k"]}],[{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"remove","lines":["e"],"id":53},{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"remove","lines":["g"]},{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"remove","lines":["a"]},{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"remove","lines":["s"]},{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"remove","lines":["s"]},{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"remove","lines":["e"]},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"remove","lines":["m"]}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["t"],"id":54},{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["a"]},{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["s"]},{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":["k"]}],[{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"remove","lines":["e"],"id":55},{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"remove","lines":["g"]},{"start":{"row":19,"column":36},"end":{"row":19,"column":37},"action":"remove","lines":["a"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"remove","lines":["s"]},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"remove","lines":["s"]},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"remove","lines":["e"]},{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"remove","lines":["m"]}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["t"],"id":56},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"insert","lines":["a"]},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"insert","lines":["s"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"insert","lines":["k"]}],[{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"remove","lines":["e"],"id":57},{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"remove","lines":["g"]},{"start":{"row":25,"column":27},"end":{"row":25,"column":28},"action":"remove","lines":["a"]},{"start":{"row":25,"column":26},"end":{"row":25,"column":27},"action":"remove","lines":["s"]},{"start":{"row":25,"column":25},"end":{"row":25,"column":26},"action":"remove","lines":["s"]},{"start":{"row":25,"column":24},"end":{"row":25,"column":25},"action":"remove","lines":["e"]},{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"remove","lines":["m"]}],[{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"insert","lines":["t"],"id":58},{"start":{"row":25,"column":24},"end":{"row":25,"column":25},"action":"insert","lines":["a"]},{"start":{"row":25,"column":25},"end":{"row":25,"column":26},"action":"insert","lines":["s"]},{"start":{"row":25,"column":26},"end":{"row":25,"column":27},"action":"insert","lines":["k"]}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"remove","lines":["ル"],"id":59},{"start":{"row":10,"column":26},"end":{"row":10,"column":27},"action":"remove","lines":["ト"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":26},"action":"remove","lines":["イ"]},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"remove","lines":["タ"]}],[{"start":{"row":10,"column":24},"end":{"row":10,"column":29},"action":"insert","lines":["ステータス"],"id":62}],[{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"remove","lines":["ジ"],"id":63},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"remove","lines":["ー"]},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"remove","lines":["セ"]},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"remove","lines":["ッ"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"remove","lines":["メ"]}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":27},"action":"insert","lines":["タスク"],"id":73}],[{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"remove","lines":["e"],"id":74},{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"remove","lines":["l"]},{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"remove","lines":["t"]},{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"remove","lines":["i"]},{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"remove","lines":["t"]}],[{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"insert","lines":["s"],"id":75},{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"insert","lines":["t"]},{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"insert","lines":["a"]},{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"insert","lines":["u"]},{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"insert","lines":["t"]},{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"insert","lines":["s"]}],[{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"remove","lines":["s"],"id":76},{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"remove","lines":["t"]},{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"remove","lines":["u"]}],[{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"insert","lines":["t"],"id":77},{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"insert","lines":["u"]},{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"insert","lines":["s"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":44},"end":{"row":18,"column":44},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528261126892,"hash":"3e64ee1812e4042adf24c15d268707b607ddce3e"}