// code for navbar
const menuBtn = document.querySelector(".menu-icon span");
const searchBtn = document.querySelector(".search-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");
const form = document.querySelector("form");
menuBtn.onclick = () => {
  items.classList.add("active");
  menuBtn.classList.add("hide");
  searchBtn.classList.add("hide");
  cancelBtn.classList.add("show");
};
cancelBtn.onclick = () => {
  items.classList.remove("active");
  menuBtn.classList.remove("hide");
  searchBtn.classList.remove("hide");
  cancelBtn.classList.remove("show");
  form.classList.remove("active");
  cancelBtn.style.color = "#ff3d00";
};
searchBtn.onclick = () => {
  form.classList.add("active");
  searchBtn.classList.add("hide");
  cancelBtn.classList.add("show");
};

// code for hide and show book description
$(document).ready(function () {
  $(".threeArrow").click(function () {
    $(".bookDescription").show(50000);
  });

  $(".threeArrowHide").click(function () {
    $(".bookDescription").hide(50000);
  });
});

// JS CODE FOR OWL CAROUSLE

// JS CODE owl carousle
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  autoplay: true,
  autoplayHoverPause: true,
  autoplayTimeout: 1500,
  autoHeight: true,
  responsiveClass: true,
  center: false,
  dots: false,
  responsive: {
    0: {
      items: 2,
      center: true,
      margin: 5,
    },
    600: {
      items: 2,
      center: true,
      margin: 5,
    },
    1000: {
      items: 2,
    },
  },
});

// CODE FOR CONTACT FORM JS
$(document).ready(function () {
  $("#myContactForm").submit(function (event) {
    event.preventDefault(); // Prevent default form submission

    var formData = $(this).serialize(); // Serialize form data

    // Display loader
    $("#loader").show();

    $.ajax({
      type: "POST",
      url: "./PHP/contact.php", // PHP script to handle form submission and database insertion
      data: formData,
      success: function (response) {
        // Hide loader
        $("#loader").hide();
        // Display response message
        $("#response").html(response);
        // Reset the form
        $("#myContactForm")[0].reset();
      },
    });
  });
});


// CODE FOR SITE VISIT FORM JS
$(document).ready(function () {
  $("#sitevisitForm").submit(function (event) {
    event.preventDefault(); // Prevent default form submission

    var formData = $(this).serialize(); // Serialize form data
console.log(formData);
    // Display loader
    $("#sitevisitLoader").show();

    $.ajax({
      type: "POST",
      url: "./PHP/sitevisit.php", // PHP script to handle form submission and database insertion
      data: formData,
      success: function (response) {
        // Hide loader
        $("#sitevisitLoader").hide();
        // Display response message
        $("#sitevisitResponse").html(response);
        // Reset the form
        $("#sitevisitForm")[0].reset();
      },
    });
  });
});