function searchFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById('wrapper');
    li = ul.getElementsByTagName('li');
    let hides = document.getElementById('visible');

    for(i=0; i< li.length; i++) {
        a = li[i].getElementsByTagName('a')[0];
        if(a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        }
        else{
            li[i].style.display = "none";
            hides.style.display = "inline-block";

        }
    }
    resetBack();
}
function resetBack() {
    let hides = document.getElementById('visible');
    let input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    if(filter.length == 0) {
        hides.style.display = "none";
    }
}

