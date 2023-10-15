// Array produk
const products = [
  {
    imgSrc: "/Assets/Images/big burger.webp",
    alt: "Big Burger",
    title: "Big Burger",
    description: "Enak dan Lezat",
    price: "Rp. 100.000",
  },

  {
    imgSrc: "/Assets/Images/big burger.webp",
    alt: "Big Burger",
    title: "Big Burger",
    description: "Enak dan Lezat",
    price: "Rp. 100.000",
  },

  {
    imgSrc: "/Assets/Images/big burger.webp",
    alt: "Big Burger",
    title: "Big Burger",
    description: "Enak dan Lezat",
    price: "Rp. 100.000",
  },

  {
    imgSrc: "/Assets/Images/big burger.webp",
    alt: "Big Burger",
    title: "Big Burger",
    description: "Enak dan Lezat",
    price: "Rp. 100.000",
  },

  {
    imgSrc: "/Assets/Images/big burger.webp",
    alt: "Big Burger",
    title: "Big Burger",
    description: "Enak dan Lezat",
    price: "Rp. 100.000",
  },

  {
    imgSrc: "/Assets/Images/big burger.webp",
    alt: "Big Burger",
    title: "Big Burger",
    description: "Enak dan Lezat",
    price: "Rp. 100.000",
  },




];

// Fungsi untuk membuat kartu produk
function createProductCard(product) {
  const card = document.createElement("div");
  card.className = "card mx-auto mr-2";
  card.style.width = "18rem";

  const cardBody = document.createElement("div");
  cardBody.className = "card-body text-center";

  const img = document.createElement("img");
  img.src = product.imgSrc;
  img.className = "card-img-top";
  img.alt = product.alt;

  const title = document.createElement("h5");
  title.className = "card-title";
  title.textContent = product.title;

  const description = document.createElement("p");
  description.className = "card-text";
  description.textContent = product.description;

  const price = document.createElement("a");
  price.href = "#";
  price.className = "btn btn-primary";
  price.textContent = product.price;

  cardBody.appendChild(title);
  cardBody.appendChild(description);
  cardBody.appendChild(price);

  card.appendChild(img);
  card.appendChild(cardBody);

  return card;
}

// Tambahkan produk ke dalam container
const productContainer = document.getElementById("product-container");
products.forEach((product) => {
  const productCard = createProductCard(product);
  productContainer.appendChild(productCard);
});
