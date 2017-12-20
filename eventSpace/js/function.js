
function loginpage() {
    "use strict";
    document.getElementById("login").style.display = 'block';
    document.getElementById("signuppage").style.display = 'none';
}

function signuppage() {
    "use strict";
    document.getElementById("signuppage").style.display = 'block';
    document.getElementById("login").style.display = 'none ';
}

function ongoingopen() {
    "use strict";
    document.getElementById("ongoingtab").style.background = " linear-gradient(to left,rgba(54, 30, 54,.7),rgba(108, 59, 108,.7))";
    document.getElementById("upcomingtab").style.background = "white";
    document.getElementById("ongoing").style.display = "block";
    document.getElementById("upcoming").style.display = "none";
}

function upcomingopen() {
    "use strict";
    document.getElementById("ongoingtab").style.background = "white";
    document.getElementById("upcomingtab").style.background = " linear-gradient(to left,rgba(54, 30, 54,.7),rgba(108, 59, 108,.7))";
    document.getElementById("ongoing").style.display = "none";
    document.getElementById("upcoming").style.display = "block";
}

var cnt = 3;
function nextbanner() {
    "use strict";
    cnt = cnt + 1;
    if ( cnt > 3 )
        cnt = 1;
    if ( cnt == 1 )
    document.getElementById("banner1").style.backgroundImage = "url('images/crickeet.jpg')";
    else if (cnt == 2)
       document.getElementById("banner1").style.backgroundImage = "url('images/footbaall.jpg')"; 
    else if(cnt == 3)
        document.getElementById("banner1").style.backgroundImage = "url('images/nfs.jpg')";
}


function previousbanner() {
    "use strict";
    cnt--;
    if(cnt < 1 )
        cnt = 3;
    if(cnt == 1)
    document.getElementById("banner1").style.backgroundImage = "url('images/crickeet.jpg')";
    else if (cnt == 2)
       document.getElementById("banner1").style.backgroundImage = "url('images/footbaall.jpg')"; 
    else if(cnt == 3)
        document.getElementById("banner1").style.backgroundImage = "url('images/nfs.jpg')";
}

function scrollwin()
{
    "use strict";
    window.scrollBy(0,500);
}
/*
function showevent(){
    "use strict";
    var x=this.name;
    window.location.href= 'eventdetail.php?name=&x';
}*/
