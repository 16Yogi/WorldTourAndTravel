function navopen(){
    document.getELementById("#navItem").style.display="block";
    // document.getElementById("#navResponsive").style.display="none";
    document.getElementById("Navclose").style.display="block";
    document.getElementById("#Navopen").style.display="none";
}

function navclose(){
    document.getELementById("#navItem").style.display="none";
    // document.getElementById("#navResponsive").style.display="";
    document.getElementById("Navclose").style.display="none";
    document.getElementById("Navopen").style.display="block";
}