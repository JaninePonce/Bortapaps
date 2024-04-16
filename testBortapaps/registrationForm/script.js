
const pages = document.querySelectorAll(".details");    
const infos = document.querySelectorAll(".infos");
const buttons = document.querySelectorAll(".buttons");
const backbtn = document.querySelectorAll("#backbtn");
const submitbtn = document.getElementById("submitbtn");


function getInfo(){
let fname = document.getElementById("firstname").value,
    mname = document.getElementById("middlename").value,
    lname = document.getElementById("lastname").value,
    phone = document.getElementById("phonenum").value,
    email = document.getElementById("email").value,
    gender = "",
    bday = document.getElementById("birthday").value,
    address = document.getElementById("address").value,
    country = document.getElementById("country").value,
    pincode = document.getElementById("pincode").value,
    state = document.getElementById("state").value;


    document.getElementsByName("Gender").forEach((elem) => {    
        if(elem.checked){
            if(elem.id == "Male")
                gender = "Male"
            else
                gender = "Female";
        }
    });

    let infos = {fname, mname, lname, phone, email, gender, bday, address, 
        country, state, pincode};
    
    //localStorage.setItem("info", JSON.stringify(infos));

    return infos;
    
}


$("#regform").on("submit", function(event){

    event.preventDefault();
    let infos = getInfo();

    $.ajax({ 
        url: 'register.php', 
        type: 'POST', 
        data: JSON.stringify(infos), 
        contentType: 'application/json', 
        success: function(response) { 
            window.location.href = "../welcome.php";
        }
      }); 

      
})


