$(document).ready(function(){
        $('#pageWrap').fadeIn(1000);
    });

function Home() {
    $('#pageWrap').fadeOut(500, function(){
	    window.location.href = "Home.php";
	});
    return false;
}

function Swimming(){
    $('#pageWrap').fadeOut(500, function(){
	    window.location.href = "swimming.php";
        });
    return false;
}

function Contact(){
    $('#pageWrap').fadeOut(500, function(){
	    window.location.href = "Contact.php";
        });
    return false;
}
