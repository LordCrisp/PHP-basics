//Test om den har fat i mit JavaScript
//console.log("g'da")
//---------------------------------------------------

//$(fuction) er jQuery's document.ready funktion
//$(function () {});
//---------------------------------------------------


//Betyder at hvis variablen result KAN være 1 (hvilket den ALTID kan)
//if (result = 1) {}

//Betyder at hvis variablen result er 1 ligefyldigt type (både som Strings, Integers, Float og MÅSKE en true Boolean)
//if (result == 1) {}

//Betyder at hvis variablen result er 1, i SAMME type
//if (result === 1) {}
//---------------------------------------------------

//Hvis du sætter ! foran noget i JavaScript, ser den automatisk om der IKKE er noget i feltet

//Stop scriptet ved fejl... skriv return false; inde i dit "fejl script"
//if (!$("#form-email").val()) { result = 0; alert("Indtast email"); return false;}

//Form Validation

function validate(formObj) {
    var result = 1;

    if (!$("#form-email").val()) {
        showError("form-email", "Du skal indtaste en email!");
       
        $("#form-email").bind("keydown", function () {
        hideError($(this));
        });
    

    result = 0;
        return false;
    }


    //Hvis du skriver if(result) uden at definere et tal som if(result === 1) måler den automatisk efter om den har indhold eller er true som boolean
    if (result) {
        formObj.submit();
    }
}  



//Ny funktion, for ikke at skulle skrive script til at tjekke og skrive "beskeden" 100 gange
function showError(inputId, strMsg) {
    $("#" + inputId).select();
    if (!$("#" + inputId).next().hasClass("alert-text")) {
        $("#" + inputId).after("<span class=\"alert-text\">" + strMsg + "<span>");

    }
}

function hideError(inputObject) {
    if (inputObject.next().hasClass("alert-text")) {
        inputObject.next().remove();
    }
}

//HVOR SKAL DET HER LORT VÆRE??!?!?!
//$("#" + inputId).bind("keydown", function(hideError));