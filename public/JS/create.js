Settings();
downArrow();
upArrow();
close();

function SettingsPop() {
}
function Settings() {
var element = document.getElementsByClassName('fa-cog');
for(var i = 0; i < element.length; i++) {
    (function(i) {
        element[i].addEventListener("click", function() {
            SettingsPop();
            $('#overlay').css('opacity', '1')
            $('#overlay').css('visibility', 'visible')
            $('.pop_up').css('display', 'block')
            $('.pop_up').css('position', 'fixed')
        })
    })(i);
    }
}
function downArrow() {
    var element = document.getElementsByClassName('fa-chevron-down');
    for(var i = 0; i < element.length; i++) {
        (function(i) {
            element[i].addEventListener("click", function() {
                alert("Fleche du bas n°" + i);
            })
        })(i);
    }
}
function upArrow() {
    var element = document.getElementsByClassName('fa-chevron-up');
    for(var i = 0; i < element.length; i++) {
        (function(i) {
            element[i].addEventListener("click", function() {
                alert("Fleche du haut n°" + i);
            })
        })(i);
    }
}
function close() {
    var element = document.getElementsByClassName('fa-window-close');
    for(var i = 0; i < element.length; i++) {
        (function(i) {
            element[i].addEventListener("click", function() {
                $('#overlay').css('visibility', 'hidden')
                $('#overlay').css('opacity', '0')
                $('.pop_up').css('display', 'none')
            })
        })(i);
    }
}