

var modal = document.getElementById('id01');


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var offcanvasElementList = [].slice.call(document.querySelectorAll('.offcanvas'))
var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
  return new bootstrap.Offcanvas(offcanvasEl)
})


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById(".header").style.top = "0";
  } else {
    document.getElementById(".header").style.top = "-50px";
  }
}



document.addEventListener("DOMContentLoaded", function() {
  const modalTriggerElements = document.querySelectorAll('[data-bs-toggle="modal"]');
  modalTriggerElements.forEach(function(element) {
      element.addEventListener("click", function() {
          const targetModalId = element.getAttribute("data-bs-target");
          const modal = new bootstrap.Modal(document.querySelector(targetModalId));
          modal.show();
      });
  });
});


function openNav() {
  
  const sidebar = document.getElementById('mySidenav');
  const filterButton = document.querySelector('.filter');

  
  if (sidebar.style.width === '513px') {
    sidebar.style.width = '0';
    document.getElementById("main").style.marginLeft = "0";
    filterButton.textContent = 'Filter';
   
  } else {
    sidebar.style.width = '513px';
    document.getElementById("main").style.marginLeft = "513px";
    
  }
}





const optionMenu = document.querySelector(".select-menu"),
       selectBtn = optionMenu.querySelector(".select-btn"),
       options = optionMenu.querySelectorAll(".option"),
       sBtn_text = optionMenu.querySelector(".sBtn-text");
selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));       
options.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        optionMenu.classList.remove("active");
    });
});

