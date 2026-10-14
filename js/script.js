// no navegador o js tem o window

console.log(window.screen)

// entre abertura e fechamento
window.document.body.innerHTML="<p> Olá </p>";
document.body.style.backgroundColor="gray";

document.body.childNodes[0].innerHTML="<h1> Mundo perdido </h1>";

let div=document.createElement("div");
let pnome=document.createElement("p");
let altura=document.createElement("p");
let peso=document.createElement("p");

pnome=document.createElement("label");
pnome.innerHTML="Insira seu nome";
div.appendChild(pnome);
//pnome
document.body.appendChild(div);
let temp=document.createElement("input");
temp.id="inputNome";
div.appendChild(temp);

//altura
div.appendChild(document.createElement("br"))
temp=document.createElement("label");
temp.innerHTML="Altura";
div.appendChild(temp);
temp=document.createElement("input");
temp.id="inputAltura";
div.appendChild(temp);

//peso
div.appendChild(document.createElement("br"))
temp=document.createElement("label");
temp.innerHTML="Peso";
div.appendChild(temp);
temp=document.createElement("input");
temp.id="inputPeso";
div.appendChild(temp);

//add butao
tmp=document.createElement("button");
tmp.id="btnCalc";
tmp.innerHTML="Calcular";
div.append(tmp);

let result=document.createElement("label");
div.appendChild(result);

tmp.addEventListener("click", ()=>{
    inputPeso=document.getElementById("inputPeso")
    inputAltura=document.getElementById("inputAltura")

    peso=Number.parseFloat(inputPeso.value);
    altura=Number.parseFloat(inputAltura.value);
    imc=peso/(altura*altura);
    console.log(imc);
    //exibir em campo
   result.innerHTML="IMC = "+ imc;
})
 