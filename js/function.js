function scrollDiv(str) {
    var elmnt = document.getElementById(str);
    elmnt.scrollIntoView();
    console.log('tes');
}

function insert() {
    $("#button").click(function() {
        $("#holder").load("function.php");
    });
}

function video() {
    window.location = 'https://www.youtube.com/watch?v=0yxWfBgBNVk';
}

function nilai() {
    var ele = document.getElementsByTagName('input');
    var nilai = 0;

    for (var i = 0; i < ele.length; i++) {
        if (ele[i].type = "radio") {
            if (ele[i].checked) {
                if (ele[i].value == 'e' &&
                    ele[i].name == 'NO1') {
                    nilai += 1;
                }
                if (ele[i].value == 'b' &&
                    ele[i].name == 'NO2') {
                    nilai += 1;
                }
                if (ele[i].value == 'a' &&
                    ele[i].name == 'NO3') {
                    nilai += 1;
                }
                if (ele[i].value == 'd' &&
                    ele[i].name == 'NO4') {
                    nilai += 1;
                }
                if (ele[i].value == 'b' &&
                    ele[i].name == 'NO5') {
                    nilai += 1;
                }
            }
        }

    }
    document.getElementById("result").innerHTML = "Nilai Akhir Kamu Adalah: " + (nilai * 20);
    console.log(i)
}

function time() {
    const monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    var span = document.getElementById('waktu');
    var d = new Date();
    var hari = d.getDate();
    var bulan = monthNames[d.getMonth()];
    var tahun = d.getFullYear();
    var h = parseInt(d.getHours());
    span.innerHTML = hari + " " + bulan + " " + tahun;
}

function munculSoal() {
    sapa()
    time()
    var x = document.getElementById('soal');
    if (x.style.display == 'none') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }

    console.log("tes");
}

function sapa() {

    var retVal = "";
    var ulang = true;
    if (ulang == true) {
        retVal = prompt("Masukkan nama untuk melanjutkan : ", "your name here");
        document.getElementById('nama').innerHTML = retVal;
        ulang = false;
    }
}