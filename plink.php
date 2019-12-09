<?php
  $var = $_GET['var'];
  $name = $_GET['name'];
?>

<html>
    <meta charset="utf-8">
    <title>Pokemon</title>
    <!-- CSS files for Pokedex -->
    <link type="text/css" rel="stylesheet" href = "CSS/Poke_stylesheet.css" media = "screen">
    <link type="text/css" rel="stylesheet" href = "CSS/menu.css" media = "screen">
    <link type="text/css" rel="stylesheet" href = "CSS/plink.css" media = "screen">

    <head>
        <script>
            var pokeNum = <?php echo $var?>;
            var pokeName = "<?php echo $name?>";
            var getPokeInfo = function(){
                var request = new XMLHttpRequest();
                request.open("GET", "https://pokeapi.co/api/v2/pokemon/" + pokeNum, true);
                console.log(pokeNum);
                console.log(pokeName);
                request.onload = function(){
                    var data = JSON.parse(this.response);

                    // Base Stats
                    var basestats = data.stats;
                    var baseList = [];
                    var effortList = [];
                    var statname = [];
                    for(var i = 0; i < basestats.length; i++){
                        baseList[i] = basestats[i].base_stat;
                        effortList[i] = basestats[i].effort;
                        statname[i] = basestats[i].stat.name;
                    }
               
                    // Abilities
                    var abilities = data.abilities;
                    var abilitiesList = [];
                    for(var i = 0; i < abilities.length; i++){
                        abilitiesList[i] = abilities[i].ability.name;
                    }
                    // Moves
                    var move = data.moves;
                    var movesList = [];
                    for(var i = 0; i < move.length; i++){
                        movesList[i] = move[i].move.name;
                    }

                    // Images
                    var frontImg = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/" + pokeNum + ".png";
                    var backImg = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/" + pokeNum + ".png";
                    var sFrontImg = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/shiny/" + pokeNum + ".png";
                    var sBackImg = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/shiny/" + pokeNum + ".png";
                

                    print();
                    function print(){
                        document.getElementById("titlename").insertAdjacentHTML("afterend", "<h1 id = 'pname'>" + pokeName + "</h1>");
                        document.getElementById("normalimg").insertAdjacentHTML("afterend", "<td><img src=" + frontImg + " alt = pokemon></td>" + "<td><img src=" + backImg + " alt = pokemon></td>");
                        document.getElementById("shinyimg").insertAdjacentHTML("afterend", "<td><img src=" + sFrontImg + " alt = pokemon></td>" + "<td><img src=" + sBackImg + " alt = pokemon></td>");
                        
                        for(var i = baseList.length - 1; i >= 0; i--){
                            document.getElementById("basestats").insertAdjacentHTML("afterend", "<td id = names>" + statname[i] + "</td><td id = names>" + baseList[i] + "</td><td id = names>" + effortList[i] + "</td>")
                        }
                        for(var i = abilitiesList.length - 1; i >= 0; i--){
                            document.getElementById("abs").insertAdjacentHTML("afterend", "<td id = names>" + abilitiesList[i] + "</td>");
                        }
                        for(var i = movesList.length - 1; i >= 0; i--){
                            document.getElementById("mvs").insertAdjacentHTML("afterend", "<td id = names>" + movesList[i] + "</td>");                            
                        }
                    }
                };
                request.send();

            };        
        </script>
    </head>

    <body onload = "getPokeInfo()">
        <div id="mainPage"></div>
        <div class="header">
        <ul>
            <a href="index.html"><button class="index"><br><br>Home<hr class="hHr"></button></a>
            <span class="gen">
            <a href="pokedex.html"><button class="pokeball"><br><br>Pokédex<hr class="pHr"></button></a>
                    <!-- <div class="dropdown">
                        <a href="all.html">All</a>
                        <a href="gen1.html">Gen I</a>
                        <a href="gen2.html">Gen II</a>
                        <a href="gen3.html">Gen III</a>
                        <a href="gen4.html">Gen IV</a>
                        <a href="gen5.html">Gen V</a>
                        <a href="gen6.html">Gen VI</a>
                        <a href="gen7.html">Gen VII</a>
                        <a href="gen8.html">Gen VIII</a>
                    </div> -->
            </span>
            <a href="moves.html"><button class="move"><br><br>Moves<hr class="mHr"></button></a>
            <span class="item_list">
            <a href="items.html"><button class="items"><br><br>Items<hr class="iHr"></button></a>
                    <div class="dropdown2">
                        <a href="balls.html">Pokeballs</a>
                        <a style="line-height: 40px;" href="battleItems.html">Battle Items</a>
                        <a style="line-height: 40px;" href="generalItems.html">General Items</a>
                        <a href="holdItems.html">Hold Items</a>
                        <a href="medicine.html">Medicine</a>
                        <a href="stones.html">Stones</a>
                        <a href="berries.html">Berries</a>
                        <a href="HM.html">HM</a>
                    </div>
            </span>
            <a href="games.html"><button class="game"><br><br>Games<hr class="gHr"></button></a>
        </ul>  
        <hr class="movingLine">
        </div>
        <hr style="border-color: white;">

        <!-- Main Content -->
        <div class="backButton">
            <a href = "pokedex.html"><button>Back to Pokemon List</button></a>
        </div>

        <div id = "titlename"></div>
        <table id = "pokemoninfo">
        <thread>
            <tr>
                <th id = "names">Normal Front</th>
                <th id = "names">Normal Back</th>
            </tr> 
            <tr id = "normalimg"></tr>  
        </thread>
        </table>
        <table id = "pokemoninfo">
            <thread>
                <tr>
                    <th id = "names">Shiny Front</th>
                    <th id = "names">Shiny Back</th>
                </tr> 
                <tr id = "shinyimg"></tr>  
            </thread>
        </table>

        <table id = "pokemoninfo2">
            <thread>
                <tr>
                    <th id = "names">Main Stat</th>
                    <th id = "names">Base Points</th>
                    <th id = "names">Effort Values</th>
                </tr> 
                <tr id = "basestats"></tr>  
            </thread>
        </table>
        <table id = "pokemoninfo3">
            <thread>
                <tr>
                    <th id = "names">Abilities</th>
                </tr>
                <tr id = "abs"></tr>
            </thread>
        </table>
        <table id = "pokemoninfo3">
            <thread>
                <tr>
                    <th id = "names">Moves</th>
                </tr>
                <tr id = "mvs"></tr>
            </thread>
        </table>
    </body>
</html>
