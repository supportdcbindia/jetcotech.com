
$(document).ready(function () {
    $(".click1").click(function () {
        if (parseInt($('#ispopupopen').val())) {
            $('#onload').modal('show');
            $('#ispopupopen').val(0);
        }
    });
    $(".click2").click(function () {
        if (parseInt($('#ispopupopen').val())) {
            $('#onload1').modal('show');
            $('#ispopupopen').val(0);
        }
    });
    $("#onload").on('hide.bs.modal', function () {
        $('#ispopupopen').val(1);
        onClick();
    });

    $("#onload1").on('hide.bs.modal', function () {
        $('#ispopupopen').val(1);
        onClick();
    });
    
    $("#onload5").on('hide.bs.modal', function () {
        $('#ispopupopen').val(1);
        onClick();
    });
    
    // setTimeout(function() {
    //     $('#onload5').modal('show');
    //     $("#ispopupopen").val(0);
    //     //console.log("here");
    // }, 5000);

    $(".stick_close").click(function () {
        if (parseInt($('#ispopupopen').val())) {
            $('#onload').modal('hide');
            $('#onload5').modal('hide');
            $('#ispopupopen').val(1);
        }
    });

});




    $(document).ready(function() {
        $(".click2").click(function(event) {
            var hreff = $(this).attr('pdf');
            document.getElementById('pt').value = hreff;
            $("#contactdiv").css("display", "block");
            event.preventDefault();
        });
    });
    
g_timer = null;

$(document).ready(function () {
    startTimer();
});

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


function buzzbtn() {
    $('.sticklist').addClass('vibrate-3');
    //$('#sideService').addClass('open');
    setTimeout(function () {
        //$('#sideService').removeClass('open');
        $('.sticklist').removeClass('vibrate-3');

    }, 10000);
}

$(".sticklist ").mouseover(function () {
    $(this).removeClass('vibrate-3');
});



function startTimer() {
    g_timer = window.setInterval(function () {
        // var today = new Date();
        var cookiesisset = getCookie('isloadopenmodel');
        console.log(parseInt($('#ispopupopen').val()) + "---" + cookiesisset);
        if (parseInt($('#ispopupopen').val()) && $('#inquiery-model').val() != 'inquiryset' && parseInt(cookiesisset) != '1') {
            if($("#ismobile").val() == 0){
            $('#onload').modal('show');
            $('#ispopupopen').val(0);
            document.cookie = "isloadopenmodel=1";
        }
            //buzzbtn();
        } else if (parseInt($('#ispopupopen').val()) && cookiesisset == '1') {
            // $('#onload').modal('show');
            // $('#ispopupopen').val(0);
            buzzbtn();
        }
    }, 20000);
}

function onClick() {
    if($("#ismobile").val() == 0){
        clearTimeout(g_timer);
        // var today = new Date();
        // console.log("cancle model" + today)
        startTimer();
    }
}


// phone number validation 
$(".number21").keypress(function (e) {
    //if the letter is not digit then display error and don't type anything
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
        return false;
    }
});


$(document).ready(function () {
    $(".open-close-arrow").click(function () {
        $(".open-close-arrow").toggleClass("open");
        $(".sticklist ul").toggleClass("open");
    });
});



