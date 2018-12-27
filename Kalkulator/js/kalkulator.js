var btnClear = document.getElementById('btnClear');
btnClear.addEventListener('click', function(){
     operasi.value = '';
})

var btn1 = document.getElementById('btn1');
btn1.addEventListener('click', function(){var no1 = document.getElementById('no1');operasi.value += no1.value;})
var btn2 = document.getElementById('btn2');
btn2.addEventListener('click', function(){var no2 = document.getElementById('no2');operasi.value += no2.value;})
var btn3 = document.getElementById('btn3');
btn3.addEventListener('click', function(){var no3 = document.getElementById('no3');operasi.value += no3.value;})
var btn4 = document.getElementById('btn4');
btn4.addEventListener('click', function(){var no4 = document.getElementById('no4');operasi.value += no4.value;})
var btn5 = document.getElementById('btn5');
btn5.addEventListener('click', function(){var no5 = document.getElementById('no5');operasi.value += no5.value;})
var btn6 = document.getElementById('btn6');
btn6.addEventListener('click', function(){var no6 = document.getElementById('no6');operasi.value += no6.value;})
var btn7 = document.getElementById('btn7');
btn7.addEventListener('click', function(){var no7 = document.getElementById('no7');operasi.value += no7.value;})
var btn8 = document.getElementById('btn8');
btn8.addEventListener('click', function(){var no8 = document.getElementById('no8');operasi.value += no8.value;})
var btn9 = document.getElementById('btn9');
btn9.addEventListener('click', function(){var no9 = document.getElementById('no9');operasi.value += no9.value;})
var btn0 = document.getElementById('btn0');
btn0.addEventListener('click', function(){var no0 = document.getElementById('no0');operasi.value += no0.value;})
var btnTambah = document.getElementById('btnTambah');
btnTambah.addEventListener('click', function(){var tambah = document.getElementById('tambah');operasi.value += tambah.value;})
var btnKurang = document.getElementById('btnKurang');
btnKurang.addEventListener('click', function(){var kurang = document.getElementById('kurang');operasi.value += kurang.value;})
var btnKali = document.getElementById('btnKali');
btnKali.addEventListener('click', function(){var kali = document.getElementById('kali');operasi.value += kali.value;})
var btnBagi = document.getElementById('btnBagi');
btnBagi.addEventListener('click', function(){var bagi = document.getElementById('bagi');operasi.value += bagi.value;})


document.getElementById("btnHasil").addEventListener('click', function(){
     var operasi = document.getElementById('operasi');
     try {
          if (operasi.value == "") {
               window.alert("Isi Operasi");
          }else{
               var hasil = eval(operasi.value);
               operasi.value = hasil;
          }
     } catch (e) {
          alert("Masukan operasi angka");
     }
});
