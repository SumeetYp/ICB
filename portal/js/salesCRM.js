const sale_tab_1 = document.getElementById("sale-tab-1");
const sale_tab_2 = document.getElementById("sale-tab-2");


sale_tab_1.addEventListener("click", () =>{
    const sale_tab_1 = document.getElementById("sale-tab-1");
    const sale_tab_2 = document.getElementById("sale-tab-2");
    sale_tab_1.classList.add("active-option");
    sale_tab_2.classList.remove("active-option");
    const table1 = document.getElementById("table-1");
    const table2 = document.getElementById("table-2");
    table1.classList.remove("table-hide");
    table2.classList.add("table-hide");
});

sale_tab_2.addEventListener("click", () =>{
    const sale_tab_1 = document.getElementById("sale-tab-1");
    const sale_tab_2 = document.getElementById("sale-tab-2");
    sale_tab_1.classList.remove("active-option");
    sale_tab_2.classList.add("active-option");
    const table1 = document.getElementById("table-1");
    const table2 = document.getElementById("table-2");
    table2.classList.remove("table-hide");
    table1.classList.add("table-hide");
});

    // const addnew = document.getElementsByClassName('add_new')[0];

    //     function getProductList(){
    //         let id = 10000003;
    //         var xmlhttp = new XMLHttpRequest();
    //         xmlhttp.onreadystatechange = () => {
    //             if(this.readyState == 4 && this.status == 200){
    //                 const response = JSON.parse(this.responseText);
    //                 const productsIdElement = document.getElementById("product_id");
    //                 const productsNameElement = document.getElementById("product_name");
    //                 console.log(this.responseText);
    //             }
    //         };
    //         xmlhttp.open("GET", "/database/getProductsList.php?id=", true);
                
    //         // } catch (e){
    //         //     alert("Error in getProducts");
    //         //     console.log("error");
    //         // }
    //     }

    //     getProductList();
    //     console.log("Workingg");


    // Requesting product_details


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let elements = "";
        let products = JSON.parse(this.responseText);
        for(const key in products){
          elements+=`<option value='${key}'>${key}</option>`;
        }
        document.getElementById("product_id").innerHTML = elements;
      }
    };
    xmlhttp.open("GET","database/getProductList.php?id=10000003",true);
    xmlhttp.send();


    // add details form open
    document.getElementsByClassName("add_new")[0].addEventListener('click', () => {
        document.getElementsByClassName("add-details")[0].style.display="block";
    })

    //add details form close
    document.getElementsByClassName("close_add-details")[0].addEventListener('click', () => {
        document.getElementsByClassName("add-details")[0].style.display="none";
    })

    document.getElementsByClassName