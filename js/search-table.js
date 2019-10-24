


  function firstNameFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("admin_firstName");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[3];
      if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
      }       
    }


    console.log('nonda');
    }



    function genderFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("gender");
      filter = input.value.toUpperCase();
      table = document.getElementById("userTbl");
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


      
  function ageFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("age");
    filter = input.value.toUpperCase();
    table = document.getElementById("userTbl");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[4];
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
    function nationalityFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("nationality");
    filter = input.value.toUpperCase();
    table = document.getElementById("userTbl");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[5];
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
    function jobTypeFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("job_type");
    filter = input.value.toUpperCase();
    table = document.getElementById("userTbl");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[6];
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
    function experienceFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("experience");
    filter = input.value.toUpperCase();
    table = document.getElementById("userTbl");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[7];
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
    function cityFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("city");
    filter = input.value.toUpperCase();
    table = document.getElementById("userTbl");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[8];
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
  
  
  