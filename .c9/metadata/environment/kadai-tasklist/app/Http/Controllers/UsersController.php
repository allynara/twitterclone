{"filter":false,"title":"UsersController.php","tooltip":"/kadai-tasklist/app/Http/Controllers/UsersController.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":10,"column":0},"end":{"row":17,"column":5},"action":"remove","lines":["    public function index()","    {","        $users = User::all();","        ","        return view('users.index', [","            'users' => $users,","        ]);","    }"],"id":22},{"start":{"row":10,"column":0},"end":{"row":17,"column":5},"action":"insert","lines":["    public function index()","    {","        $users = User::paginate(10);","        ","        return view('users.index', [","            'users' => $users,","        ]);","    }"]}],[{"start":{"row":17,"column":5},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":0},"end":{"row":24,"column":11},"action":"insert","lines":["    public function show($id)","    {","        $user = User::find($id);","","        return view('users.show', [","            'user' => $user,","        ]);"],"id":24}],[{"start":{"row":25,"column":1},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":25},{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["}"]}],[{"start":{"row":26,"column":1},"end":{"row":26,"column":2},"action":"insert","lines":[" "],"id":26},{"start":{"row":26,"column":2},"end":{"row":27,"column":0},"action":"insert","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":18,"column":2},"end":{"row":28,"column":0},"action":"remove","lines":["  public function show($id)","    {","        $user = User::find($id);","","        return view('users.show', [","            'user' => $user,","        ]);    ","}","} ","",""],"id":27},{"start":{"row":18,"column":2},"end":{"row":31,"column":5},"action":"insert","lines":["    public function show($id)","    {","        $user = User::find($id);","        $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);","","        $data = [","            'user' => $user,","            'microposts' => $microposts,","        ];","","        $data += $this->counts($user);","","        return view('users.show', $data);","    }"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":31,"column":5},"end":{"row":31,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":594,"mode":"ace/mode/php"}},"timestamp":1529023176549,"hash":"a53cc4f4658a6fc25f3503b57329fdf84064f7b0"}