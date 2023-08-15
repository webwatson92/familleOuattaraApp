<div>
    <div class="p-2">

        <div class="">
            <ul>
                <li><a href=""><img src="" alt=""><span>Child</span></a>
                    <ul>
                        
                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <script>
        var tree = new FamilyTree(document.getElementById("tree"), {
            nodeBinding: {
                field_0: "name"
            },
            nodes: [
                { id: 1, pids: [2] , name: $personnes->nom },
                { id: 2, pids: [1] , name: "Amber McKenzie" },
                { id: 3, mid: 1, fid: 2 , name: "Amber McKenzie" },
            ]
        });
    </script>
</div>
