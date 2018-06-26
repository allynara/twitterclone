{"filter":false,"title":"User.php","tooltip":"/microposts/app/User.php","undoManager":{"mark":19,"position":19,"stack":[[{"start":{"row":102,"column":2},"end":{"row":111,"column":1},"action":"insert","lines":["","    if ($exist || $its_me) {","        // do nothing if already following","        return false;","    } else {","        // follow if not following","        $this->followings()->attach($userId);","        return true;","    }","}"],"id":327}],[{"start":{"row":114,"column":0},"end":{"row":114,"column":1},"action":"remove","lines":["}"],"id":328},{"start":{"row":113,"column":0},"end":{"row":114,"column":0},"action":"remove","lines":["",""]},{"start":{"row":112,"column":0},"end":{"row":113,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":103,"column":14},"end":{"row":103,"column":25},"action":"remove","lines":[" || $its_me"],"id":329}],[{"start":{"row":108,"column":15},"end":{"row":108,"column":24},"action":"remove","lines":["following"],"id":330},{"start":{"row":108,"column":15},"end":{"row":108,"column":16},"action":"insert","lines":["f"]},{"start":{"row":108,"column":16},"end":{"row":108,"column":17},"action":"insert","lines":["a"]},{"start":{"row":108,"column":17},"end":{"row":108,"column":18},"action":"insert","lines":["v"]},{"start":{"row":108,"column":18},"end":{"row":108,"column":19},"action":"insert","lines":["i"]},{"start":{"row":108,"column":19},"end":{"row":108,"column":20},"action":"insert","lines":["n"]},{"start":{"row":108,"column":20},"end":{"row":108,"column":21},"action":"insert","lines":["g"]}],[{"start":{"row":131,"column":54},"end":{"row":131,"column":55},"action":"remove","lines":["r"],"id":331},{"start":{"row":131,"column":53},"end":{"row":131,"column":54},"action":"remove","lines":["e"]},{"start":{"row":131,"column":52},"end":{"row":131,"column":53},"action":"remove","lines":["s"]},{"start":{"row":131,"column":51},"end":{"row":131,"column":52},"action":"remove","lines":["u"]}],[{"start":{"row":131,"column":51},"end":{"row":131,"column":52},"action":"insert","lines":["m"],"id":332},{"start":{"row":131,"column":52},"end":{"row":131,"column":53},"action":"insert","lines":["i"]},{"start":{"row":131,"column":53},"end":{"row":131,"column":54},"action":"insert","lines":["c"]},{"start":{"row":131,"column":54},"end":{"row":131,"column":55},"action":"insert","lines":["r"]},{"start":{"row":131,"column":55},"end":{"row":131,"column":56},"action":"insert","lines":["o"]},{"start":{"row":131,"column":56},"end":{"row":131,"column":57},"action":"insert","lines":["p"]},{"start":{"row":131,"column":57},"end":{"row":131,"column":58},"action":"insert","lines":["o"]},{"start":{"row":131,"column":58},"end":{"row":131,"column":59},"action":"insert","lines":["s"]},{"start":{"row":131,"column":59},"end":{"row":131,"column":60},"action":"insert","lines":["t"]}],[{"start":{"row":122,"column":37},"end":{"row":122,"column":38},"action":"remove","lines":["r"],"id":334},{"start":{"row":122,"column":36},"end":{"row":122,"column":37},"action":"remove","lines":["e"]},{"start":{"row":122,"column":35},"end":{"row":122,"column":36},"action":"remove","lines":["s"]},{"start":{"row":122,"column":34},"end":{"row":122,"column":35},"action":"remove","lines":["u"]}],[{"start":{"row":122,"column":34},"end":{"row":122,"column":35},"action":"insert","lines":["m"],"id":335},{"start":{"row":122,"column":35},"end":{"row":122,"column":36},"action":"insert","lines":["i"]},{"start":{"row":122,"column":36},"end":{"row":122,"column":37},"action":"insert","lines":["c"]},{"start":{"row":122,"column":37},"end":{"row":122,"column":38},"action":"insert","lines":["r"]},{"start":{"row":122,"column":38},"end":{"row":122,"column":39},"action":"insert","lines":["o"]},{"start":{"row":122,"column":39},"end":{"row":122,"column":40},"action":"insert","lines":["p"]},{"start":{"row":122,"column":40},"end":{"row":122,"column":41},"action":"insert","lines":["o"]},{"start":{"row":122,"column":41},"end":{"row":122,"column":42},"action":"insert","lines":["s"]},{"start":{"row":122,"column":42},"end":{"row":122,"column":43},"action":"insert","lines":["t"]}],[{"start":{"row":117,"column":34},"end":{"row":117,"column":35},"action":"remove","lines":["r"],"id":336},{"start":{"row":117,"column":33},"end":{"row":117,"column":34},"action":"remove","lines":["e"]},{"start":{"row":117,"column":32},"end":{"row":117,"column":33},"action":"remove","lines":["s"]},{"start":{"row":117,"column":31},"end":{"row":117,"column":32},"action":"remove","lines":["u"]}],[{"start":{"row":117,"column":31},"end":{"row":117,"column":32},"action":"insert","lines":["m"],"id":337},{"start":{"row":117,"column":32},"end":{"row":117,"column":33},"action":"insert","lines":["i"]},{"start":{"row":117,"column":33},"end":{"row":117,"column":34},"action":"insert","lines":["c"]},{"start":{"row":117,"column":34},"end":{"row":117,"column":35},"action":"insert","lines":["r"]},{"start":{"row":117,"column":35},"end":{"row":117,"column":36},"action":"insert","lines":["o"]},{"start":{"row":117,"column":36},"end":{"row":117,"column":37},"action":"insert","lines":["p"]},{"start":{"row":117,"column":37},"end":{"row":117,"column":38},"action":"insert","lines":["o"]},{"start":{"row":117,"column":38},"end":{"row":117,"column":39},"action":"insert","lines":["s"]},{"start":{"row":117,"column":39},"end":{"row":117,"column":40},"action":"insert","lines":["t"]}],[{"start":{"row":108,"column":37},"end":{"row":108,"column":38},"action":"remove","lines":["r"],"id":338},{"start":{"row":108,"column":36},"end":{"row":108,"column":37},"action":"remove","lines":["e"]},{"start":{"row":108,"column":35},"end":{"row":108,"column":36},"action":"remove","lines":["s"]},{"start":{"row":108,"column":34},"end":{"row":108,"column":35},"action":"remove","lines":["u"]}],[{"start":{"row":108,"column":34},"end":{"row":108,"column":35},"action":"insert","lines":["m"],"id":339},{"start":{"row":108,"column":35},"end":{"row":108,"column":36},"action":"insert","lines":["i"]},{"start":{"row":108,"column":36},"end":{"row":108,"column":37},"action":"insert","lines":["c"]},{"start":{"row":108,"column":37},"end":{"row":108,"column":38},"action":"insert","lines":["r"]},{"start":{"row":108,"column":38},"end":{"row":108,"column":39},"action":"insert","lines":["o"]},{"start":{"row":108,"column":39},"end":{"row":108,"column":40},"action":"insert","lines":["p"]},{"start":{"row":108,"column":40},"end":{"row":108,"column":41},"action":"insert","lines":["o"]},{"start":{"row":108,"column":41},"end":{"row":108,"column":42},"action":"insert","lines":["s"]},{"start":{"row":108,"column":42},"end":{"row":108,"column":43},"action":"insert","lines":["t"]}],[{"start":{"row":100,"column":34},"end":{"row":100,"column":35},"action":"remove","lines":["r"],"id":340},{"start":{"row":100,"column":33},"end":{"row":100,"column":34},"action":"remove","lines":["e"]},{"start":{"row":100,"column":32},"end":{"row":100,"column":33},"action":"remove","lines":["s"]},{"start":{"row":100,"column":31},"end":{"row":100,"column":32},"action":"remove","lines":["u"]}],[{"start":{"row":100,"column":31},"end":{"row":100,"column":32},"action":"insert","lines":["m"],"id":341},{"start":{"row":100,"column":32},"end":{"row":100,"column":33},"action":"insert","lines":["i"]},{"start":{"row":100,"column":33},"end":{"row":100,"column":34},"action":"insert","lines":["c"]},{"start":{"row":100,"column":34},"end":{"row":100,"column":35},"action":"insert","lines":["r"]},{"start":{"row":100,"column":35},"end":{"row":100,"column":36},"action":"insert","lines":["o"]},{"start":{"row":100,"column":36},"end":{"row":100,"column":37},"action":"insert","lines":["p"]},{"start":{"row":100,"column":37},"end":{"row":100,"column":38},"action":"insert","lines":["o"]},{"start":{"row":100,"column":38},"end":{"row":100,"column":39},"action":"insert","lines":["s"]},{"start":{"row":100,"column":39},"end":{"row":100,"column":40},"action":"insert","lines":["t"]}],[{"start":{"row":114,"column":31},"end":{"row":114,"column":32},"action":"remove","lines":["r"],"id":342},{"start":{"row":114,"column":30},"end":{"row":114,"column":31},"action":"remove","lines":["e"]},{"start":{"row":114,"column":29},"end":{"row":114,"column":30},"action":"remove","lines":["s"]},{"start":{"row":114,"column":28},"end":{"row":114,"column":29},"action":"remove","lines":["u"]}],[{"start":{"row":114,"column":28},"end":{"row":114,"column":29},"action":"insert","lines":["m"],"id":343},{"start":{"row":114,"column":29},"end":{"row":114,"column":30},"action":"insert","lines":["i"]},{"start":{"row":114,"column":30},"end":{"row":114,"column":31},"action":"insert","lines":["c"]},{"start":{"row":114,"column":31},"end":{"row":114,"column":32},"action":"insert","lines":["r"]},{"start":{"row":114,"column":32},"end":{"row":114,"column":33},"action":"insert","lines":["o"]},{"start":{"row":114,"column":33},"end":{"row":114,"column":34},"action":"insert","lines":["p"]},{"start":{"row":114,"column":34},"end":{"row":114,"column":35},"action":"insert","lines":["o"]},{"start":{"row":114,"column":35},"end":{"row":114,"column":36},"action":"insert","lines":["s"]},{"start":{"row":114,"column":36},"end":{"row":114,"column":37},"action":"insert","lines":["t"]}],[{"start":{"row":97,"column":33},"end":{"row":97,"column":34},"action":"remove","lines":["r"],"id":344},{"start":{"row":97,"column":32},"end":{"row":97,"column":33},"action":"remove","lines":["e"]},{"start":{"row":97,"column":31},"end":{"row":97,"column":32},"action":"remove","lines":["s"]},{"start":{"row":97,"column":30},"end":{"row":97,"column":31},"action":"remove","lines":["u"]}],[{"start":{"row":97,"column":30},"end":{"row":97,"column":31},"action":"insert","lines":["m"],"id":345},{"start":{"row":97,"column":31},"end":{"row":97,"column":32},"action":"insert","lines":["i"]},{"start":{"row":97,"column":32},"end":{"row":97,"column":33},"action":"insert","lines":["c"]},{"start":{"row":97,"column":33},"end":{"row":97,"column":34},"action":"insert","lines":["r"]},{"start":{"row":97,"column":34},"end":{"row":97,"column":35},"action":"insert","lines":["o"]},{"start":{"row":97,"column":35},"end":{"row":97,"column":36},"action":"insert","lines":["p"]},{"start":{"row":97,"column":36},"end":{"row":97,"column":37},"action":"insert","lines":["o"]},{"start":{"row":97,"column":37},"end":{"row":97,"column":38},"action":"insert","lines":["s"]},{"start":{"row":97,"column":38},"end":{"row":97,"column":39},"action":"insert","lines":["t"]}],[{"start":{"row":130,"column":30},"end":{"row":130,"column":31},"action":"remove","lines":["r"],"id":346},{"start":{"row":130,"column":29},"end":{"row":130,"column":30},"action":"remove","lines":["e"]},{"start":{"row":130,"column":28},"end":{"row":130,"column":29},"action":"remove","lines":["s"]},{"start":{"row":130,"column":27},"end":{"row":130,"column":28},"action":"remove","lines":["u"]}],[{"start":{"row":130,"column":27},"end":{"row":130,"column":28},"action":"insert","lines":["m"],"id":347},{"start":{"row":130,"column":28},"end":{"row":130,"column":29},"action":"insert","lines":["i"]},{"start":{"row":130,"column":29},"end":{"row":130,"column":30},"action":"insert","lines":["c"]},{"start":{"row":130,"column":30},"end":{"row":130,"column":31},"action":"insert","lines":["r"]},{"start":{"row":130,"column":31},"end":{"row":130,"column":32},"action":"insert","lines":["o"]},{"start":{"row":130,"column":32},"end":{"row":130,"column":33},"action":"insert","lines":["p"]},{"start":{"row":130,"column":33},"end":{"row":130,"column":34},"action":"insert","lines":["o"]},{"start":{"row":130,"column":34},"end":{"row":130,"column":35},"action":"insert","lines":["s"]},{"start":{"row":130,"column":35},"end":{"row":130,"column":36},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":30,"column":22},"end":{"row":30,"column":29},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529897231205,"hash":"70ed9cf3991bd710beafac07e66f35a9357d2dda"}