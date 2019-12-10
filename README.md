# Project_3
CSC 2053 Project 3

Pokemon, by Nintendo, is a very popular and well-known game that has a strong presence in the market and many diverse fans. 
As avid fans since our youths, we thought it would be fun to make an online pokedex that could give us information about each Pokemon, the items used in the game and information about each game release.

The website we have created connects to an API (https://pokeapi.co/) and requests data about each Pokemon, such as its name, image, base stats, abilities, and moves it can learn. 
There are five directories in our website: Home, Pokedex, Moves, Items, and Games. The Home tab is the index page. The Pokedex tab lists out all of the Pokemon and its respective image. 
They are linked to a php file that takes in two variables- the name and corresponding number of that Pokemon, and returns a page with more information about it- such as images of the shiny version 
of the Pokemon, its base stats, its abilities, and its learnable moves. The Moves tab lists out all the moves in existence in the games, and is linked to an external website with more information 
about that specific move. The Items tab displays 7 icons that correspond to each category. The icons react when hovered over. 
The Items tab also has a dropdown that further separates the items into 7 categories: Pokeballs, Battle Items, Hold Items, Medicine, Stones, Berries, and TM. 
Each category links to another html that displays the items into a table and displays corresponding information, such as the description and the price. 

These tabs all make an HTTP request to the API to obtain the information needed.
The last tab is the Games tab, which displays all the games in the core series. There is a side menu that helps users to easily navigate to a specific game on the same page. 
The images of the games and names are linked to another html page that displays relevant corresponding information about the game, such as the publisher, the release date, and description.

We hope to continue developing this website as we come up with more ideas as more information is released, and to further improve user design and experience.

<--Amy Lam & Kent Na-->
