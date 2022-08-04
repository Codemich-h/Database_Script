const form = document.getElementById('btn');
const tableName = document.getElementById("table_name")
const tableId = document.getElementById("table_id");
const tableCol1 = document.getElementById("table_col1");
const tableCol2 = document.getElementById("table_col2");
const tableCol3 = document.getElementById("table_col3");
const tableDate = document.getElementById("table_date");
const createButton = document.getElementById("create_button");

let error = {};

form.addEventListener("submit", function (e) {
    e.preventDefault ()
checkEmpty();
});


function checkEmpty () {
    for(let key in error) {
        delete error [key];
    }
} 

tableNameError.style.display = "none";
tableIdError.style.display = "none";
tableCol1Error.style.display = "none";
tableCol2Error.style.display = "none";
tableCol3Error.style.display = "none";
tableDateError.style.display = "none";

tableName.classList.remove("border-red-500");
tableId.classList.remove("border-red-500");
tableCol1.classList.remove("border-red-500");
tableCol2.classList.remove("border-red-500");
tableCol3.classList.remove("border-red-500");
tableDate.classList.remove("border-red-500");


const tableNameValue = tableName.value.trim();
const tableIdValue = tableId.value.trim();
const tableCol1Value = tableCol1.value.trim();
const tableCol2Value = tableCol2.value.trim();
const tableCol3Value = tableCol3.value.trim();
const tableDateValue = tableDate.value.trim();


if (tableNameValue === "") {
    error.table_name = "Table name is required";
}  
if (tableIdValue === "") {
    error.table_id = "Table Id is required";
}
if (tableCol1 === "") {
    error.table_col1 = "The table colunm is empty";
}
if (tableCol2 === "") {
    error.table_col2 = "The table coulmn is empty";
}
if(tableCol3 === "") {
    error.table_col3 = "The column is empty"
}
if (tableDate === "") {
    error.table_date = "The olumn is empty"
}

if (tableNameValue !== "") {
    if(!tableNameValue.match(/^[a-zA-Z0-9]+$/) ) {
        error.table_name = "Table name must be letters";
    }
}

if (tableIdValue !== "") {
    if(!tableIdValue.match(/0-255/) ) {
        error.table_id.match = "Table id must be only number";
    }
}

if (tableCol1Value !== "" || tableCol1Value > 20) {
    if(!tableCol1Value.match(/^[a-zA-Z0-9]+$/)) {
        error.table_col1.match = "This colunm is required";
    }
}

if (tableCol2Value !== "" || tableCol2Value > 225) {
    if(!tableCol2Value.match(/^[a-zA-Z0-9]+$/) ) {
        error.table_col2.match = "This column is required";
    }
}

if (tableCol3Value !== "") {
    if(!tableCol3Value.match(/^[a-zA-Z0-9]+$/) ) {
        error.table_col3.match = "This column is required";
    }
}

if (tableDateValue !== "") {
    if(!tableDate.match(/^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[1-9]|2[1-9])$/) ) {
        error.table_date.match = "This is required";
    }
}

if (Object.keys(error).length > 0) {
    displayError();
}

function displayError() {

    if (error.table_name) {
        tableName.classList.add("border-red-500");
        tableNameError.style.display = "block";
        tableNameError.innerHTML = error.tableName;
    }
    if (error.table_id) {
        tableId.classList.add("border-red-500");
        tableIdError.style.display = "block";
        tableIdError.innerHTML = error.tableId;
    }
    if (error.table_col1) {
        tableCol1.classList.add("border-red-500");
        tableCol1Error.style.display = "block";
        tableCol1Error.innerHTML = error.tableCol1;
    }
    if (error.table_col2) {
        tableCol2.classList.add("border-red-500");
        tableCol2Error.style.display = "block";
        tableCol2Error.innerHTML = error.tableCol2;
    }
    if (error.table_col3) {
        tableCol3.classList.add("border-red-500");
        tableCol3Error.style.display = "block";
        tableCol3Error.innerHTML =error.tableCol3;
    }
    if (error.table_date) {
        tableDate.classList.add("border-red-500");
        tableDateError.style.display = "block";
        tableDateError.innerHTML = error.tableDate;
    }

}


