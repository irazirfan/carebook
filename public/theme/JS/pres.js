function showDate(){
  var d = new Date();
  document.getElementById('date_val').innerHTML = d;
  $("#date").attr("value",d);
  console.log(d);
}

showDate();

function addNewSymtoms(){
    console.log("in new symtoms");
    var table = document.getElementById("symtom_table");
    var symptom = document.getElementById("s_field").value;
    console.log(symptom);
    var rowLength = table.rows.length + 1;
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    cell1.innerHTML = "<div><input type='text' style='border-color: transparent' name='sfield_"+rowLength+"' id='s_field_"+rowLength+"' value='"+symptom+"' readonly></div>";
    initSymArr();
    
}

function addNewTest(){
    var table = document.getElementById("test_table");
    var test =  document.getElementById("t_field").value;
    var rowLength = table.rows.length + 1;
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    cell1.innerHTML = "<div class='autocomplete'><input type='text' style='border-color: transparent' name='tfield_"+rowLength+"' id='t_field_"+rowLength+"' value='"+test+"' readonly></div>";
    initTesArr();
}

function addNewMedicine(){
    var table = document.getElementById("med_table");
    var rowLength = table.rows.length + 1;
    var medicine = document.getElementById("medicineName").value;
    var days = document.getElementById("days").value;
    var morning = document.getElementById("morning").value;
    var afternoon = document.getElementById("afternoon").value;
    var evening= document.getElementById("evening").value;
    var night= document.getElementById("night").value;
    var comment= document.getElementById("comment").value;
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    cell1.innerHTML = "<div class='even'><input type='text' name='medicineName_"+rowLength+"' id='medicineName_"+rowLength+"' style='border-color: transparent; width:auto' value='"+medicine+"' readonly>(<input type='text' name='morning_"+rowLength+"' style='border-color: transparent; width:20px' value='"+morning+"' readonly>-<input type='text' name='afternoon_"+rowLength+"' style='border-color: transparent; width:20px; text-align:center' value='"+afternoon+"' readonly>-<input type='text' name='evening_"+rowLength+"' style='border-color: transparent; width:20px; text-align:center' value='"+evening+"' readonly>-<input type='text' name='night_"+rowLength+"' style='border-color: transparent; width:20px; text-align:center' value='"+night+"' readonly>)<input type='text' name='days_"+rowLength+"' style='border-color: transparent;width:20px; text-align:center' value='"+days+"' readonly>days<br><input type='text' name='comment_"+rowLength+"' style='border-color: transparent' value='"+comment+"' readonly><br></div>";
    initMedArr();
}

function presSave(){
    //console.log('asce');
    var xhttp = new XMLHttpRequest();
    var flag = true;
    var symTableRow = document.getElementById('symtom_table').rows.length;
    var tesTableRow = document.getElementById('test_table').rows.length;
    var medTableRow = document.getElementById('med_table').rows.length;
    console.log("sym: "+symTableRow+" tes: "+tesTableRow+" med: "+medTableRow);
    var url = "doctor/pressIn?srow="+symTableRow+"&trow="+tesTableRow+"&mrow="+medTableRow;
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // flag = true;
        console.log(this.responseText);
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
    
    var symtoms = [];
    var tests = [];
    var meds = [];
    for(var i=1; i<=symTableRow; i++)
    {
      //console.log("inside of loop");
      var field = document.getElementById('s_field_'+i);
      for(var j=0; j<symtoms.length; j++)
      {
        if(symtoms[j] == field.value && field.value != "")
        {
          field.value = "you have entered same value in symptoms";
          field.style.border = "1px solid red";
          field.style.color = "red";
          console.log("error found");
          flag = false;
          break;
        }
      }
      if(flag)
        symtoms.push(field.value);
    }
    for(var i=1; i<=tesTableRow; i++)
    {
      //console.log("inside of loop");
      var field = document.getElementById('t_field_'+i);
      for(var j=0; j<tests.length; j++)
      {
        if(tests[j] == field.value && field.value != "")
        {
          field.value = "you have entered same value in tests";
          field.style.border = "1px solid red";
          field.style.color = "red";
          console.log("error found");
          flag = false;
          break;
        }
      }
      if(flag)
        tests.push(field.value);
    }
    for(var i=1; i<=medTableRow; i++)
    {
      //console.log("inside of loop");
      var field = document.getElementById('medicineName_'+i);
      for(var j=0; j<meds.length; j++)
      {
        if(meds[j] == field.value && field.value != "")
        {
          field.value = "you have entered same value in medicines";
          field.style.border = "1px solid red";
          field.style.color = "red";
          console.log("error found");
          flag = false;
          break;
        }
      }
      if(flag)
        meds.push(field.value);
    }
    console.log(flag);
    return flag;
    // return true;
}


initSymArr();
initTesArr();
initMedArr();
//setAutoSym();
//autocomplete(document.getElementById('s_field_2'), symArr);

// autocomplete(document.getElementById('s_field_1'), symArr);
// for(var i=0; i<symArr.length; i++)
// {
//   console.log(symArr[i]);
// }
// console.log("array print"+symArr.length);
// for(var i=0; i<symArr.length; i++)
// {
//   console.log(symArr[i]);
// }

function setAutoSym(symArr)
{
  var tableRow = document.getElementById('symtom_table').rows.length;
  console.log(tableRow);
  for(var i = 1; i<= tableRow; i++ )
  {
    var id = 's_field_'+i;
    console.log(id);
    autocomplete(document.getElementById(id), symArr);
  }
}

function initSymArr()
{
    
    var xhttp = new XMLHttpRequest();
    var url = "symtoms.php";
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        var data = this.responseText;
        var symArr = data.split('||');
        //setAutoSym(symArr);
        // for(var i=0; i<symArr.length; i++)
        // {
        //   console.log(symArr[i]);
        // }
        
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

function initTesArr()
{
  var xhttp = new XMLHttpRequest();
    var url = "tests.php";
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       // console.log(this.responseText);
        var data = this.responseText;
        var tesArr = data.split('||');
        setAutoTes(tesArr);
        // for(var i=0; i<symArr.length; i++)
        // {
        //   console.log(symArr[i]);
        // }
        
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

function setAutoTes(arr)
{
  var tableRow = document.getElementById('test_table').rows.length;
  console.log(tableRow);
  for(var i = 1; i<= tableRow; i++ )
  {
    var id = 't_field_'+i;
    console.log(id);
    autocomplete(document.getElementById(id), arr);
  }
}

function initMedArr()
{
  var xhttp = new XMLHttpRequest();
    var url = "medicines.php";
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        var data = this.responseText;
        var medArr = data.split('||');
        setAutoMed(medArr);
        // for(var i=0; i<symArr.length; i++)
        // {
        //   console.log(symArr[i]);
        // }
        
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

function setAutoMed(arr)
{
  var tableRow = document.getElementById('med_table').rows.length;
  console.log(tableRow);
  for(var i = 1; i<= tableRow; i++ )
  {
    var id = 'medicineName_'+i;
    console.log(id);
    autocomplete(document.getElementById(id), arr);
  }
}

//copy from w3school
function autocomplete(inp, arr) {
    console.log('autocomplete');
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
  }

 
