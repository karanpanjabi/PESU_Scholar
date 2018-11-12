if (typeof accountData === 'undefined' || !accountData["editable"]) //the user is not logged in
{
    document.querySelector("#logout_button").style.visibility = "hidden";
}

if (typeof accountData !== 'undefined') {
    document.querySelector("#img_profile").src = accountData["profpicurl"];
    document.querySelector("#prof_name").textContent = accountData["fullname"];
    document.querySelector("#acc_type").textContent = accountData["acctype"];
    document.querySelector("#prof_email").textContent = accountData["email"];
    document.querySelector("#prof_phone").textContent = accountData["phno"];

    if (accountData["projectdata"] != "") {
        //Read project info
        accountData["projectdata"] = JSON.parse(accountData["projectdata"]);
        //for each project initialize the #proj_data_template and add it to #res_proj div
        var projDiv = document.querySelector("#res_proj");
        var projTemplate = document.querySelector("#proj_data_template");
        for (var projinfo of accountData["projectdata"]) {
            var clone = document.importNode(projTemplate.content, true);
            clone.querySelector("h3").textContent = projinfo["title"];
            clone.querySelector("p").textContent = projinfo["desc"];
            projDiv.insertBefore(clone, projDiv.lastElementChild);
        }
    }
}

//disable each editable element if not logged in as the same user
var toBeDisabled = document.querySelectorAll(".editable");
for (var element of toBeDisabled) {
    if (typeof accountData === 'undefined' || !accountData["editable"])
        element.onclick = function () {
            return false;
        }
}


function createform() {
    var projDiv = document.querySelector("#res_proj");
    var formTemplate = document.querySelector("#proj_form_template");
    
    var clone = document.importNode(formTemplate.content, true);
    projDiv.insertBefore(clone, projDiv.lastElementChild);
    
}