function parkTudorWebsite() {
    location.href = 'https://www.parktudor.org';
}
function schoolDropDown() {
    var classToggleSchool = document.getElementById("schoolToggle").className;
    var classToggleMajor = document.getElementById("majorToggle").className;
    var classToggleState = document.getElementById("stateToggle").className;
    var classToggleYear = document.getElementById("yearToggle").className;
    if (classToggleSchool === "fa fa-plus") {
        document.getElementById("schoolToggle").className = "fa fa-minus";
        document.getElementById("myDropdown").classList.toggle("show");
        if (classToggleMajor === "fa fa-minus") {
            document.getElementById("majorToggle").className = "fa fa-plus";
            document.getElementById("myDropdownA").classList.toggle("show");
        }
        if (classToggleState === "fa fa-minus") {
            document.getElementById("stateToggle").className = "fa fa-plus";
            document.getElementById("myDropdownB").classList.toggle("show");
        }
        if (classToggleYear === "fa fa-minus") {
            document.getElementById("yearToggle").className = "fa fa-plus";
            document.getElementById("myDropdownC").classList.toggle("show");
        }

        
    }
    else if (classToggleSchool === "fa fa-minus") {
        document.getElementById("schoolToggle").className = "fa fa-plus";
        document.getElementById("myDropdown").classList.toggle("show");

    }
}




function majorDropDown() {
    var classToggleSchool = document.getElementById("schoolToggle").className;
    var classToggleMajor = document.getElementById("majorToggle").className;
    var classToggleState = document.getElementById("stateToggle").className;
    var classToggleYear = document.getElementById("yearToggle").className;
    if (classToggleMajor === "fa fa-plus") {
        document.getElementById("majorToggle").className = "fa fa-minus";
        document.getElementById("myDropdownA").classList.toggle("show");
        if (classToggleSchool === "fa fa-minus") {
            document.getElementById("schoolToggle").className = "fa fa-plus";
            document.getElementById("myDropdown").classList.toggle("show");
        }
        if (classToggleState === "fa fa-minus") {
            document.getElementById("stateToggle").className = "fa fa-plus";
            document.getElementById("myDropdownB").classList.toggle("show");
        }
        if (classToggleYear === "fa fa-minus") {
            document.getElementById("yearToggle").className = "fa fa-plus";
            document.getElementById("myDropdownC").classList.toggle("show");
        }


    }
    else if (classToggleMajor === "fa fa-minus") {
        document.getElementById("majorToggle").className = "fa fa-plus";
        document.getElementById("myDropdownA").classList.toggle("show");

    }
} 

function stateDropDown() {
    var classToggleSchool = document.getElementById("schoolToggle").className;
    var classToggleMajor = document.getElementById("majorToggle").className;
    var classToggleState = document.getElementById("stateToggle").className;
    var classToggleYear = document.getElementById("yearToggle").className;
    if (classToggleState === "fa fa-plus") {
        document.getElementById("stateToggle").className = "fa fa-minus";
        document.getElementById("myDropdownB").classList.toggle("show");
        if (classToggleSchool === "fa fa-minus") {
            document.getElementById("schoolToggle").className = "fa fa-plus";
            document.getElementById("myDropdown").classList.toggle("show");
        }
        if (classToggleMajor === "fa fa-minus") {
            document.getElementById("majorToggle").className = "fa fa-plus";
            document.getElementById("myDropdownA").classList.toggle("show");
        }
        if (classToggleYear === "fa fa-minus") {
            document.getElementById("yearToggle").className = "fa fa-plus";
            document.getElementById("myDropdownC").classList.toggle("show");
        }


    }
    else if (classToggleState === "fa fa-minus") {
        document.getElementById("stateToggle").className = "fa fa-plus";
        document.getElementById("myDropdownB").classList.toggle("show");

    }
} 


function yearDropDown() {
    var classToggleSchool = document.getElementById("schoolToggle").className;
    var classToggleMajor = document.getElementById("majorToggle").className;
    var classToggleState = document.getElementById("stateToggle").className;
    var classToggleYear = document.getElementById("yearToggle").className;
    if (classToggleYear === "fa fa-plus") {
        document.getElementById("yearToggle").className = "fa fa-minus";
        document.getElementById("myDropdownC").classList.toggle("show");
        if (classToggleSchool === "fa fa-minus") {
            document.getElementById("schoolToggle").className = "fa fa-plus";
            document.getElementById("myDropdown").classList.toggle("show");
        }
        if (classToggleState === "fa fa-minus") {
            document.getElementById("stateToggle").className = "fa fa-plus";
            document.getElementById("myDropdownB").classList.toggle("show");
        }
        if (classToggleMajor === "fa fa-minus") {
            document.getElementById("majorToggle").className = "fa fa-plus";
            document.getElementById("myDropdownA").classList.toggle("show");
        }


    }
    else if (classToggleYear === "fa fa-minus") {
        document.getElementById("yearToggle").className = "fa fa-plus";
        document.getElementById("myDropdownC").classList.toggle("show");

    }
} 



