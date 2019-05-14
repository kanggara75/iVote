// Menetapkan Tanggal Deadline :D
var hariH = new Date("Apr 20, 2019 10:00:00").getTime();

var x = setInterval(function () {
    // Get todays date and time
    var now = new Date().getTime();
    // Find the sisa between now and the count down date
    var sisa = hariH - now;
    // Time calculations for days, hours, minutes and seconds
    var hari = Math.floor(sisa / (1000 * 60 * 60 * 24));
    var jam = Math.floor((sisa % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var menit = Math.floor((sisa % (1000 * 60 * 60)) / (1000 * 60));
    var detik = Math.floor((sisa % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("h").innerHTML = hari + " Hari ";
    document.getElementById("j").innerHTML = jam + " Jam ";
    document.getElementById("m").innerHTML = menit + " Menit ";
    document.getElementById("d").innerHTML = detik + " Detik ";
    // If the count down is over, write some text 
    if (sisa < 0) {
        clearInterval(x);
        document.getElementById("clockdiv").innerHTML = "DeadLine Telah Berlalu";
    }
}, 1000);