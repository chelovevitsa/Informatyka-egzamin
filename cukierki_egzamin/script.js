document.getElementById('zamowienie').onclick = function() {
    var number = document.getElementById('nk').value;
    console.log(number);
    if (number == "1") {
        document.getElementById('zm').textContent = 'Twoje zamówienie to cukierek cytryna';
    }
    else if (number == "2") {
        document.getElementById('zm').textContent = 'Twoje zamówienie to cukierek liść';
    }
    else if (number == "3") {
        document.getElementById('zm').textContent = 'Twoje zamówienie to cukierek banan';
    }
    else {
        document.getElementById('zm').textContent = 'Nie ma takiego numeru';
    }
}

document.getElementById('kolor').onclick = function() {
var r = document.getElementById('r');
var g = document.getElementById('g');
var b = document.getElementById('b');

document.getElementById('kolor').style.backgroundColor = 'rgb(' + r.value + ',' + g.value + ',' + b.value + ')';
}