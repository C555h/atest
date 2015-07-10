<style type="text/css">
    
    .main {
        width: 200px;
        margin: 0 auto;
    }

    .whitebox, [class^="box"] {
        float:left;
        width:50px;
        height:50px;

        border-style: solid;
        border-color: black;
        text-align: center;
        font-size: 40px;
        line-height: 50px;
    }
    
    .whitebox {
        border-color: transparent;
    }
    
    .bt {
        text-align: center;
        margin-top: 80px;
    }

    .X {
        color: blue
    }

    .O {
        color: red
    }

</style>
<!--<button onclick="reset()">reset</button>-->

<div class="main">
    <div>
        <div class="whitebox X">0</div>
        <div class="whitebox">-</div>
        <div class="whitebox O">0</div>
    </div>
    <div class="row0">
        <div class="box0"></div>
        <div class="box1"></div>
        <div class="box2"></div>
    </div>
    <div class="row1">
        <div class="box0"></div>
        <div class="box1"></div>
        <div class="box2"></div>
    </div>
    <div class="row2">
        <div class="box0"></div>
        <div class="box1"></div>
        <div class="box2"></div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script>
                turn = 0
                totalturn = 0
                map = [[0, 0, 0], [0, 0, 0], [0, 0, 0]]
                $('[class^="box"]').click(markXorO)
//                map.forEach(function (row, i) {
//                    row.forEach(function (cell, j) {
//                        console.log(cell, j)
//                    })
//                })

                
                function markXorO() {
                    if ($(this).html())
                        return
                    XorO = ++turn % 2 === 1 ? 'X' : 'O'
                    
                    r = $(this).parent().attr('class').substr(-1)
                    c = $(this).attr('class').substr(-1)
                    map[r][c] = XorO
                    
                    $(this).html(XorO)
                    $(this).addClass(XorO)
                    
                    checkWin()
                }
                
                function checkWin() {
                    winnerXorO = checkMap()
                    if (!winnerXorO) {
                        if (turn - totalturn == 9) reset('Draw')
                        return
                    }
                    $('.whitebox.'+winnerXorO).html(parseInt($('.whitebox.'+winnerXorO).html())+1)
                    $('[class^="box"]:empty').html(' ')
                    reset(winnerXorO+'\'s Wins')
                }
                
                sequence = ["012", "345", "678", "036", "147", "258", "048", "246"]
                function checkMap() {
                    sMap = map.toString().replace(/,/g, '') //map[0].concat(map[1], map[2])
                    for (i = 0; i < sequence.length; ++i) {
                        if(["XXX", "OOO"].indexOf(sMap[sequence[i][0]]+sMap[sequence[i][1]]+sMap[sequence[i][2]]) > -1)
                            return sMap[sequence[i][0]]
                    }
                }

                function reset(message) {
                    window.alert(message);
                    totalturn += 1
                    turn = totalturn
                    map = [[0, 0, 0], [0, 0, 0], [0, 0, 0]]
                    $('[class^="box"]').html('')
                    $('[class^="box"]').removeClass('X O')
                }
</script>
