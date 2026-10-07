// Comentario de uma linha

/* Comentario em multiplas linas */

// O var e o let se distinguem pelo escopo e declaração
let nome="Lucas";   //global no escopo (if{})
var sobreNome;      // global
const e=2.78;

if (nome =="Lucas"){
    sobreNome="Rech";
    let idade=18;
    var per="dog";
    console.log("nome: "+nome+" sobreNome: "+sobreNome+" idade: "+idade+" pet: "+pet);
}
let idade = 18;
//console.log("nome:"+nome+"sobreNome:"+sobreNome+"idade:"+idade+"pet:"+pet);
// Estruturas de seleção no JS
if(idade==18){
    console.log("nome"+nome)
} else {
    console.log("nome"+Joao)
}
 
// Seleção nova

if(idade=="18"){
    console.log("A")
} 
if(idade ==="18") {
    console.log("B")
}

// Cálculo de IMC
peso=97;
altura=1.87,
imc=peso/(altura*altura);

if(imc<18.5){
    console.log("Abaixo do peso")
} else if (imc>=18.5 && imc<25){
    console.log("Normal")
} else if (imc>=25 && imc<30){
    console.log("Acima do peso")
} else if (imc>=30 && imc<35){
    console.log("Obesidade I")
} else if (imc>=35 && imc<40){
    console.log("Obesidade II")
} else {
    console.log("Obesidade III")
}