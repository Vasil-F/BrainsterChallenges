class Book {
    constructor(title, author, onPage, maxPages) {
    this.title = title;
    this.author = author;
    this.onPage = onPage;
    this.maxPages = maxPages;  
}

 readPercent(onPage, maxPages) {
    let result = (onPage / maxPages) * 100;
    return Math.trunc(result);
} 

}


// book objects

let book1 = new Book ("The Hobbit", "J.R.R. Tolkien", 120, 310);


let book2 = new Book ("The Silmarillion", "J.R.R. Tolkien", 384, 384);
 
  
let book3 = new Book ("The Fellowship of the ring", "J.R.R. Tolkien", 432, 432);

  
let book4 = new Book ("The Two Towers", "J.R.R. Tolkien", 189, 352)

  
let book5 = new Book ("The return of the king", "J.R.R. Tolkien", 400, 432)

  
const booksArray = [book1, book2, book3, book4, book5];

console.log(booksArray)

  
  // elements
  const bookList = document.getElementById("bookList");
  const tableBody = document.getElementById("tableBody");
  const innerBar = document.getElementById("myBar");
  
  
  // list with books
  
  booksArray.forEach((element) => {
    bookList.innerHTML += `
      <li>"${element.title}" by ${element.author}</li>`;
    if (element.onPage === element.maxPages) {
      bookList.innerHTML += `<p class='text-success'> You have already read "${element.title}" by ${element.author} </p>`;
    } else {
      bookList.innerHTML += `<p class='text-danger'> You still need to read "${element.title}" by ${element.author} </p>`;
    }
  });
  
  
  // table with books
  
//   let innerBarArray = [];
  
  booksArray.forEach((element) => {

    let loading = element.readPercent(element.onPage, element.maxPages);
  
    if (element.onPage === element.maxPages) {
    tableBody.innerHTML += `
        <tr>
        <td class="w-30 h-fit">${element.title}</td>
        <td>${element.author}</td>
        <td class='text-success'> You have already read "${element.title}" </td>
        </tr>`
        } else {
          tableBody.innerHTML += `
        <tr>
        <td class="w-30 h-fit">${element.title}</td>
        <td>${element.author}</td>
        <td class='text-danger'> You still need to read "${element.title}" 
          <div class="bg-dark" id="myProgress">
            <div class="text-light text-center bg-success loading" data-width="${loading}%" id="myBar"></div>
          </div>
        </td>
        </tr>`


        // let innerBar = document.getElementById("myBar");
        // innerBar.style.width = loading + `%`;
        // innerBar.innerHTML = loading + `%`;
           // innerBarArray.push(innerBar);
    }

  
  });

  function changeProgress(booksArray) {
    let progressBar = document.querySelectorAll(".loading")
    progressBar.forEach((bar) => {
      bar.style.width = bar.dataset.width;
      bar.innerHTML = bar.dataset.width;
    });
  }
  changeProgress();
  
  // add new book

  let buttonAdd = document.getElementById('addBook')
  const form = document.getElementById('form')
  
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    let Title = document.getElementById('bookName').value
    let Author = document.getElementById('bookAuthor').value
    let BookPages = document.getElementById('bookPages').value
    let BookPagesRead = document.getElementById('pagesRead').value
    if(!Title || !Author || !BookPages || !BookPagesRead) return;
    booksArray.push(
      {
        title: Title,
        author: Author,
        onPage: BookPagesRead,
        maxPages: BookPages,
      },
    )
  
    const newbook = booksArray.slice(-1) ;
    newbook.forEach((element) => {
      if (element.onPage === element.maxPages) {
      tableBody.innerHTML += `
          <tr>
          <td class="w-30 h-fit">${element.title}</td>
          <td>${element.author}</td>
          <td class='text-success'> You have already read "${element.title}" </td>
          </tr>`
          } else {
            tableBody.innerHTML += `
          <tr>
          <td class="w-30 h-fit">${element.title}</td>
          <td>${element.author}</td>
          <td class='text-danger'> You still need to read "${element.title}" 
            <div class="bg-dark" id="myProgress">
              <div class="text-light text-center bg-success loading" data-width="${Math.trunc((element.onPage / element.maxPages) * 100)}%" id="myBar"></div>
            </div>
          </td>
          </tr>`
          }

    }); 
    changeProgress();
  })