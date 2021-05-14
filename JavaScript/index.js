import "style.css";

const elHtmlFajny = document.getElementById("app");

elHtmlFajny.innerHTML = `
<h1>Hello Vanilla!</h1>
<div>
  We use the same configuration as Parcel to bundle this sandbox, you can find more
  info about Parcel 
  <a href="https://parceljs.org" target="_blank" rel="noopener noreferrer">here</a>.
</div>
`;
const styleFormatConsole =
  "background-color: lightblue; color:#2D3F80; margin-top:20px; padding:5px 0 2px 0";

console.log("%c pierwszy console.log: ", styleFormatConsole);
console.log(elHtmlFajny);

console.log("%c z console.dir: ", styleFormatConsole);
console.dir(elHtmlFajny);

console.log("%c z console.log własciwość 'innerText': ", styleFormatConsole);
console.log(elHtmlFajny.innerText);

console.log("%c z console.dir własciwość 'children': ", styleFormatConsole);
console.log(elHtmlFajny.children);

console.log("%c z console.log tylko pierwsze dziecko: ", styleFormatConsole);
console.dir(elHtmlFajny.children[0]);

const paragraf = document.querySelector("#paragraf_02");
console.log("%c pobrany paragraf: ", styleFormatConsole);
console.dir(paragraf);

console.dir(paragraf.className);

function dodajKlase() {
  paragraf.className = "testowaKlasa";
}

paragraf.addEventListener("click", dodajKlase);