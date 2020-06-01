// var
// konsepnya Hoisting = mengangkat sebuah barang ke atas.
// var i = 10;
// console.log(i);
// ----------------------------------------------------------
// Looping Var
// for (var i = 0; i < 10; i++)
// {
//     console.log(i);
// }
// {} block scope
// console.log(i);
// ----------------------------------------------------------
// IIFE (Immediately Invoked Function Expression) = sebuah function expresion yang dipanggil langsung, ketika dibuat
// SIAF (Self Invoking Anonymous Function) = menjaga agar variable yg ada tidak bisa di akses dari luar
// Anonimous function = function tidak bernama
// (function (){
//     for(var i = 0; i < 10; i++){
//         console.log(i);
//     }
// }());

// console.log(i);
// diatas ini function expression cara lama
// for (let i = 0; i < 10; i++)
// {
//     console.log(i);
// }
// console.log(i);
// variable let ini merupakan block scope.

// const fungsinya supaya meminimalisir perubahan state
const i = 1;
console.log(i);

// untuk let nilai yang berubah ubah gunakan let
// untuk nilai yang tidak berubah gunakan const