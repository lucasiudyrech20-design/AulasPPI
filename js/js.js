// Comentario de uma linha

/* Comentario em multiplas linas */

// O var e o let se distinguem pelo escopo e declaração
let nome="Lucas";   //global no escopo (if{})
var sobreNome;      // global
const e=2.78;

// if else; for; switch

// String, Number, nul, undefined +typeof()

var itensChurrasco=[];
itensChurrasco.push("costela");
itensChurrasco.push("palmito");
itensChurrasco.push("pão de alho");

itensChurrasco.forEach((i, t) =>{
    console.log(i+"-"+t)
});

nome="Lucas Iudy";
console.log(nome.split(" ").reverse().join());

//Funções com arrray
// reverse, join, map
itensChurrasco.map((e)=>{
    console.log(e.length)
});

//filter
console.log(itensChurrasco.filter((e, i)=>{return i!=1}));
//filtrar qualquer palavra que contenha uma letra especifica
console.log(itensChurrasco.filter((e, i)=>{return !e.split("").includes("p")}));

console.log(JSON.stringify(itensChurrasco));

console.log(JSON.parse("[\"bla\", \"blap\"]"));
console.log(array2[1]);