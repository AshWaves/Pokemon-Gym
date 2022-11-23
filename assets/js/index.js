const pokemonContainer = document.querySelector(".pokemon-container");

function fetchPokemon(id) {
  fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
    .then((res) => res.json())
    .then((data) => {
      generatepokemons(data);
    });
}

function numbersPositionPokemons(numbers) {
  
  for (let i = 0; i <=numbers; i++) {
    fetchPokemon(i);
  }
}

function generatepokemons(pokemon) {
  
  const card = document.createElement("div");
  card.classList.add("pokemon-block");
  const name = document.createElement("p");
  name.classList.add("name");
  name.textContent = pokemon.name;
  card.appendChild(name);
  pokemonContainer.appendChild(card);
}

function apiSlectPokemon(){
  fetchPokemon()
}


// for load first html
window.addEventListener("load",numbersPositionPokemons(20));