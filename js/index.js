function getCharacters(done) {
  const results = fetch("https://pokeapi.co/api/v2/pokemon/");
  results
    .then((response) => response.json())
    .then((data) => {
      done(data);
    });
}
getCharacters(data => {
  data.results.forEach(pokemones => {
    const article = document.createRange().createContextualFragment(/*html*/`
      <article>
            <div clas="image-container">
                <img src="${pokemones.image}" />
            </div>
            <h2>${pokemones.name}</h2>
            <span>${pokemones.status}</span>
      </article>
      `);
    const main = document.querySelector("main");
    main.append(article);
  });
});
