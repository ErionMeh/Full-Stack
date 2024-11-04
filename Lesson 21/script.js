function showMessage(){
    alert('This is inside the function')
}
function shuma(nr1,nr2){
    return nr1+nr2;
}
console.log(shuma(4,5));

function toCelsius(f){
    return (5/9)*(f-32)
}
console.log( toCelsius(100));

var arrowFunction=()=>alert ("Hello world");
// arrowFunction();

var pershendetje = emri =>alert(`Miredita ${emri}`);
// pershendetje("Erion")

function dsFunction(){
    var localVar="Digital School"
    console.log(localVar)
}
// dsFunction();
// alert(localVar)   localVar bon veq mrena funksionit se jasht eshte e padefinuar

function SyprinaTrekendeshi(baza,lartesia){
    return 0.5*baza*lartesia
}
console.log(SyprinaTrekendeshi(2,5))

var makina={
    emri:"BMW",
    color:"Red",
    year:2020,
    startEngine: function(){
        alert("Vroom!!!")
    },
    get GetColor(){
        return this.color;
    },
    set SetColor(newCOLOR){
        this.color=newCOLOR
    }
}
console.log(makina['emri'])
console.log(makina.emri)
// makina.startEngine()

var computer = new Object();
computer.name="Lenovo"
computer.CPU="Intel core i7"
computer.RAM="16GB"

computer.type=()=>{
    console.log("Start PC")
}
computer.type()
makina.SetColor="Blue"
console.log(makina.GetColor)