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

    // Edit form close
    document.getElementById('edit_form_close').addEventListener('click', () => {
      document.getElementById('edit-form-details').style.display='none';
    })

    // Edit form close
    document.getElementById('show_form_close').addEventListener('click', () => {
      document.getElementById('show-form-details').style.display='none';
    })

    // Prospectus edit and details functionality
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let orders = JSON.parse(this.responseText);
        let order_ids = [];
        // console.log(orders);
        const prospectus = document.getElementById('prospectus');
        for(let key in orders){
          const data = orders[key];
          prospectus.innerHTML+=`
          <div class='tr'>
              <div class='td'>${data['product_name']}</div>
              <div class='td'>${data['quantity']}</div>
              <div class='td'>${data['customer_id']}</div>
              <div class='td'>${data['customer_name']}</div>
              <div class='td customer_contact'><a href="tel:${data['whatsapp']} target="blank"">${data['whatsapp']}</a><a href="http://wa.me/91${data['whatsapp']}" target="_blank"><img src="./images/whatsapp.png" class="whatsapp-image"/></a></div>
              <div class='td'><a href="mailto:${data['email']}">${data['email']}</a></div>
              <div class='td'>${data['status']}</div>
  <div class='td customer_contact'><button class="btn-prospectus btn-prospectus-editing"><img src="./images/editing.png" class="prospectus-icons"/></button><button class="btn-prospectus btn-prospectus-expand"><img src="./images/expand.png" class="prospectus-icons"/></button></div>
            </div>
          `;
          order_ids.push(data['order_id']);
        }
        const edit_buttons =  document.getElementsByClassName('btn-prospectus-editing');
        const details_buttons = document.getElementsByClassName('btn-prospectus-expand');
        for(let i=0;i<edit_buttons.length;i++){
          const btn = edit_buttons.item(i);
          const details = details_buttons.item(i);
          btn.addEventListener('click', () => {
            var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let editForm = document.getElementById('edit-form-details');
        editForm.style.display = "block";
        let data = JSON.parse(this.responseText);
        

        // Product ID
        document.getElementById("ordId").value=data["order_id"];
        document.getElementById("ordId").style.display="none";
        document.getElementById("edit_order_area__details__product_id__details").innerText = data["id"];
        // Product Name
        document.getElementById("edit_order_area__details__product_name").innerText = data["product_name"];
        // Quantity
        // document.getElementById("edit_order_area__details__product_qty") = data["quantity"];
        document.getElementById("edit_order_area__details__product_qty__product_qty").value = Number(data["quantity"]);
        // {"id":"101", "product_name": "itr tax", "quantity": "1", "customer_name": "Temp", "whatsapp": "2147483647" , "email": "temp@gmail.com", "state": "Mahrasthra", "city":"Pune", "address":"Karve Nagar", "pin":"411001"}
        document.getElementById("edit_customer_details__customer_name").value = data["customer_name"];
        document.getElementById("edit_customer_details__whatsapp").value = data["whatsapp"];
        document.getElementById("edit_customer_details__email").value = data["email"];
        document.getElementById("edit_customer_details__state").value = data["state"];
        document.getElementById("edit_customer_details__city").value = data["city"];
        document.getElementById("edit_customer_details__address").value = data["address"];
        document.getElementById("edit_customer_details__pin").value = data["pin"];
        document.getElementById('customer_id').value = data["cust_id"];
        document.getElementById('customer_id').style.display = "none";
      }
    };
    xmlhttp.open("GET",`database/fetcheditDetailsProspectus.php?ordId=${order_ids[i]}`,true);
    xmlhttp.send();
          });

          details.addEventListener('click', () => {
            var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let showForm = document.getElementById('show-form-details');
        showForm.style.display = "block";
        let data = JSON.parse(this.responseText);
        

        // Product ID
        // document.getElementById("ordId").value=data["order_id"];
        // document.getElementById("ordId").style.display="none";
        document.getElementById("show_order_area__details__product_id__details").innerText = data["id"];
        // Product Name
        document.getElementById("show_order_area__details__product_name").innerText = data["product_name"];
        // Quantity
        // document.getElementById("edit_order_area__details__product_qty") = data["quantity"];
        document.getElementById("show_order_area__details__product_qty__product_qty").innerText = Number(data["quantity"]);
        // {"id":"101", "product_name": "itr tax", "quantity": "1", "customer_name": "Temp", "whatsapp": "2147483647" , "email": "temp@gmail.com", "state": "Mahrasthra", "city":"Pune", "address":"Karve Nagar", "pin":"411001"}
        document.getElementById("show_customer_details__customer_name").innerText = data["customer_name"];
        document.getElementById("show_customer_details__whatsapp").innerText = data["whatsapp"];
        document.getElementById("show_customer_details__email").innerText = data["email"];
        document.getElementById("show_customer_details__state").innerText = data["state"];
        document.getElementById("show_customer_details__city").innerText = data["city"];
        document.getElementById("show_customer_details__address").innerText = data["address"];
        document.getElementById("show_customer_details__pin").innerText = data["pin"];
      }
    };
    xmlhttp.open("GET",`database/fetcheditDetailsProspectus.php?ordId=${order_ids[i]}`,true);
    xmlhttp.send();
          });
        }
      }
    };
    xmlhttp.open("GET","database/getProspectusData.php",true);
    xmlhttp.send();


    // console.log(document.getElementsByClassName('.btn-prospectus-editing'));
    // console.log(document.getElementById('order_edit_form').action);


    // Get Details from sold database for products
    // const fetch_sold_data = 

  document.getElementById('sale-tab-2').addEventListener('click', () => {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        const data = JSON.parse(this.responseText);
        const sold_table = document.getElementById("sold_table_data");
        sold_table.innerHTML="";
        // console.log(Object.keys(data).length);
        Object.keys(data).forEach( key => {
          const payment_message = data[key].status==0?"Pay":"Paid";
          const payment_btn_active = data[key].status==0?"":"disabled";
          const status = data[key].status==0?"Pending":"Paid";
          sold_table.innerHTML+=`<div class='tr'>
          <div class='td sold_check_column'><input type='checkbox' value='${data[key].order_id}' name='${data[key].order_id}' for='${data[key].order_id}' ${payment_btn_active}/></div>
          <div class='td sold_product_name'>${data[key].product_name}</div>
          <div class='td sold_quantity'>${data[key].quantity}</div>
          <div class='td sold_customer_id'>${data[key].customer_id}</div>
          <div class='td sold_customer_details'>
            <div class="sold_customer_details_all">
            <div class="sold_customer_details_visible">
              <div class="sold_customer_details__name">${data[key].customer_name}</div>
              <button type="button" class="form_btn customer_details_icon" id="btn_${data[key].order_id}">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-caret-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M6 10l6 6l6 -6h-12"></path>
                </svg>
              </button>
            </div>
            <div class="sold_customer_details_hidden" id="details_id_${data[key].order_id}">
              <div class="customer_email"><a href="mailto:${data[key].email}" link="_blank">${data[key].email}</a></div>
              <div class="customer_email"><a href="tel:${data[key].phone}">${data[key].phone}</a></div>
            </div>
            </div>
          </div>
          <div class='td sold_total_price'>₹ ${data[key].total_price}</div>
          <div class='td sold_pay'><input type="button" class="form_btn" value="${payment_message}" ${payment_btn_active}></div>
          <div class='td sold_status'>${status}</div>
          </div>`;
        });

      
// From here
        // document.getElementById(`btn_${data[key].order_id}`).addEventListener('click', ()=>{
          // document.getElementById(`details_id_${data[key].order_id}`).classList.toggle('detail_display');
        Object.keys(data).forEach(key => {
          document.getElementById(`btn_${data[key].order_id}`).addEventListener('click', ()=>{
          document.getElementById(`details_id_${data[key].order_id}`).classList.toggle('detail_display');
          document.getElementById(`btn_${data[key].order_id}`).classList.toggle('btn_rotate');
          });
        });
      }


    };
    xmlhttp.open("GET",`database/getSoldData.php`,true);
    xmlhttp.send();
  });

