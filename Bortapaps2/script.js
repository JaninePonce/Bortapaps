
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
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
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
          }


// select the best selling section and the sidebar
const bestSellingSection = document.querySelector('.section.product');
const sidebar = document.getElementById('mySidenav');

// add a click event listener to the open button
document.querySelector('.openbtn').addEventListener('click', () => {
  // toggle the 'pushed-right' class on the best selling section
  bestSellingSection.classList.toggle('pushed-right');

  // toggle the sidebar
  sidebar.classList.toggle('active');
});

// add a click event listener to the close button
sidebar.querySelector('.closebtn').addEventListener('click', () => {
  // toggle the 'pushed-right' class on the best selling section
  bestSellingSection.classList.toggle('pushed-right');

  // toggle the sidebar
  sidebar.classList.toggle('active');
});