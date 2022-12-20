<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<?php require "view/blocks/page_end.php"; ?>
<h1>Welcome to Productive!</h1>

<h2>Our most popular products</h2>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Stock</th>
    </tr>
  </thead>
  <tbody id="products-table">
  </tbody>
</table>

<script>
const updateProductTable = async function (table, productsToInsert) {
  const columns = ['name', 'price', 'stock'];

  // Insert the table rows for the found products
  const newTableRows = productsToInsert.map((product) => {
    let stock = document.createElement('tr');

    const tds = [];

    for (let i = 0; i < columns.length; i++) {
      let column = columns[i];

      //Stock filter
      let td = document.createElement('td');
      if(column === 'stock') {
        if (product[column] <= 3) {
          td.style.color = 'red'
        } else {
          td.style.color = 'black';
        }
      }
      td.innerText = product[column];
      stock.appendChild(td);
    }

    return stock;
  })

  table.replaceChildren(...newTableRows)
}

const init = async function () { // an async wrapper function which allows me to use await instead of .then()
  const result = await fetch('API/V1/Products')
  const productsResult = await result.json()
  const products = productsResult.filter((product) => product.active === "1")

  console.log(products)

  updateProductTable(document.querySelector('#products-table'), products);
}

init();
</script>