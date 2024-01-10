let menutoggle = document.querySelector(".menutoggle");
let closemenu = document.querySelector(".close");
let sidebar = document.querySelector(".bg-sidebar");
let barhamburger = document.querySelector(".fa-bars");


// function for login and sign up

// function for login and sign up
menutoggle.addEventListener("click", function () {
    sidebar.classList.toggle("hidden-sidebar");
    menutoggle.classList.toggle("fa-rotate-270");
    sidebar.classList.remove("hidden-sidebar-mobile");
});

barhamburger.addEventListener("click", function () {
    sidebar.classList.remove("hidden-sidebar-mobile");
});

closemenu.addEventListener("click", function () {
    sidebar.classList.add("hidden-sidebar-mobile");
});

function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function updateTable() {
    var entriesPerPage = parseInt(document.getElementById("entriesPerPage").value, 10);
    var table = document.getElementById("myTable");
    var tr = table.getElementsByTagName("tr");

    for (var i = 1; i < tr.length; i++) {
        if (i <= entriesPerPage) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}

