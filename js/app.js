var day;
switch (new Date().getDay()) {
    case 0:
        day = "Minggu";
        break;
    case 1:
        day = "Senin";
        break;
    case 2:
        day = "Selasa";
        break;
    case 3:
        day = "Rabu";
        break;
    case 4:
        day = "Kamis";
        break;
    case 5:
        day = "Jumat";
        break;
    case 6:
        day = "Sabtu";
        break;
}
document.getElementById("hari").innerHTML = " " + day;

