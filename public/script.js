const menuToggle = document.querySelector(".menu-toggle input");
const nav = document.querySelector("nav ul");
const navbar = document.querySelector("nav");
const navLinks = document.querySelectorAll(".nav-link");

menuToggle.addEventListener("click", function () {
  nav.classList.toggle("slide");
});

window.addEventListener("scroll", function () {
  navbar.classList.toggle("sticky", window.scrollY > 0);
});

// navLinks.forEach((navLink) => {
//   navLink.addEventListener("click", function () {
//     navLink.classList.add("clicked");
//   });
// });

const btnItem = document.querySelectorAll("ul.button-filter > li");
const cardItem = document.querySelectorAll(".courses-card-wrapper .course-card");

btnItem.forEach((btn) => {
  btn.addEventListener("click", function () {
    btnItem.forEach((btn) => {
      btn.className = "";
    });
    btn.className = "active";

    // Filtering
    cardItem.forEach((card) => {
      card.style.display = "none";
      if (card.getAttribute("data-filter") == btn.textContent || btn.textContent == "All Courses") {
        card.style.display = "flex";
      }
    });
  });
});

// Reviews Page
const loadMoreReviews = document.querySelector("a.btnMoreReview");
const reviewCards = document.querySelectorAll(".review-card");

if (loadMoreReviews) {
  loadMoreReviews.addEventListener("click", (e) => {
    e.preventDefault();
    reviewCards.forEach((reviewCard, index) => {
      if (index > 5) {
        reviewCard.style.display = "flex";
        setTimeout(() => {
          reviewCard.style.transform = "scale(1)";
        }, 10);
      }
    });
  });
}

// HOME ALERT
const formContact = document.querySelector(".form-contact");

formContact.addEventListener("submit", (e) => {
  e.preventDefault();

  // mailto
  const name = document.querySelector(".contact-name").value;
  const email = document.querySelector(".contact-email").value;
  const message = document.querySelector(".contact-msg").value;

  if (!name.trim() || !email.trim()) {
    Swal.fire({
      title: "Error",
      text: "Mohon isi form dengan benar!",
      icon: "error",
      button: "OK",
      confirmButtonColor: "#2447F9",
    });
    return false;
  }

  Swal.fire({
    title: "Redirect Warning",
    text: "Anda akan dialihkan ke aplikasi email anda!",
    icon: "info",
    button: "OK",
    showCancelButton: true,
    reverseButtons: true,
    confirmButtonColor: "#2447F9",
    cancelButtonColor: "#34364A",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = `mailto:createon@gmail.com?subject=Contact%20from%20${name}&body=${message}`;
    }
  });

  formContact.reset();
});

// private area
// SIDEBAR DROPDOWN
const allDropdown = document.querySelectorAll("#sidebar .side-dropdown");
const sidebar = document.getElementById("sidebar");

allDropdown.forEach((item) => {
  const a = item.parentElement.querySelector("a:first-child");
  a.addEventListener("click", function (e) {
    e.preventDefault();

    if (!this.classList.contains("active")) {
      allDropdown.forEach((i) => {
        const aLink = i.parentElement.querySelector("a:first-child");

        aLink.classList.remove("active");
        i.classList.remove("show");
      });
    }

    this.classList.toggle("active");
    item.classList.toggle("show");
  });
});

// SIDEBAR COLLAPSE
const toggleSidebar = document.querySelector("nav .toggle-sidebar");
const allSideDivider = document.querySelectorAll("#sidebar .divider");

if (sidebar.classList.contains("hide")) {
  allSideDivider.forEach((item) => {
    item.textContent = "-";
  });
  allDropdown.forEach((item) => {
    const a = item.parentElement.querySelector("a:first-child");
    a.classList.remove("active");
    item.classList.remove("show");
  });
} else {
  allSideDivider.forEach((item) => {
    item.textContent = item.dataset.text;
  });
}

toggleSidebar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");

  if (sidebar.classList.contains("hide")) {
    allSideDivider.forEach((item) => {
      item.textContent = "-";
    });

    allDropdown.forEach((item) => {
      const a = item.parentElement.querySelector("a:first-child");
      a.classList.remove("active");
      item.classList.remove("show");
    });
  } else {
    allSideDivider.forEach((item) => {
      item.textContent = item.dataset.text;
    });
  }
});

sidebar.addEventListener("mouseleave", function () {
  if (this.classList.contains("hide")) {
    allDropdown.forEach((item) => {
      const a = item.parentElement.querySelector("a:first-child");
      a.classList.remove("active");
      item.classList.remove("show");
    });
    allSideDivider.forEach((item) => {
      item.textContent = "-";
    });
  }
});

sidebar.addEventListener("mouseenter", function () {
  if (this.classList.contains("hide")) {
    allDropdown.forEach((item) => {
      const a = item.parentElement.querySelector("a:first-child");
      a.classList.remove("active");
      item.classList.remove("show");
    });
    allSideDivider.forEach((item) => {
      item.textContent = item.dataset.text;
    });
  }
});

// PROFILE DROPDOWN
const profile = document.querySelector("nav .profile");
const imgProfile = profile.querySelector("img");
const dropdownProfile = profile.querySelector(".profile-link");

imgProfile.addEventListener("click", function () {
  dropdownProfile.classList.toggle("show");
});

// MENU
const allMenu = document.querySelectorAll("main .content-data .head .menu");

allMenu.forEach((item) => {
  const icon = item.querySelector(".icon");
  const menuLink = item.querySelector(".menu-link");

  icon.addEventListener("click", function () {
    menuLink.classList.toggle("show");
  });
});

window.addEventListener("click", function (e) {
  if (e.target !== imgProfile) {
    if (e.target !== dropdownProfile) {
      if (dropdownProfile.classList.contains("show")) {
        dropdownProfile.classList.remove("show");
      }
    }
  }

  allMenu.forEach((item) => {
    const icon = item.querySelector(".icon");
    const menuLink = item.querySelector(".menu-link");

    if (e.target !== icon) {
      if (e.target !== menuLink) {
        if (menuLink.classList.contains("show")) {
          menuLink.classList.remove("show");
        }
      }
    }
  });
});

// PROGRESSBAR
const allProgress = document.querySelectorAll("main .card .progress");

allProgress.forEach((item) => {
  item.style.setProperty("--value", item.dataset.value);
});

// APEXCHART
var options = {
  series: [
    {
      name: "series1",
      data: [31, 40, 28, 51, 42, 109, 100],
    },
    {
      name: "series2",
      data: [11, 32, 45, 32, 34, 52, 41],
    },
  ],
  chart: {
    height: 350,
    type: "area",
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "smooth",
  },
  xaxis: {
    type: "datetime",
    categories: [
      "2018-09-19T00:00:00.000Z",
      "2018-09-19T01:30:00.000Z",
      "2018-09-19T02:30:00.000Z",
      "2018-09-19T03:30:00.000Z",
      "2018-09-19T04:30:00.000Z",
      "2018-09-19T05:30:00.000Z",
      "2018-09-19T06:30:00.000Z",
    ],
  },
  tooltip: {
    x: {
      format: "dd/MM/yy HH:mm",
    },
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
