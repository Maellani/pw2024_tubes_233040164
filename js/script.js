const tombolCari = document.querySelector(".tombol-cari");
const keyword = document.querySelector(".keyword");
const container = document.querySelector(".container2");

// hilangkan tombil cari
tombolCari.style.display = "none";

// event ketika kita menuliskan keyword
keyword.addEventListener("keyup", function () {
  // ajax
  // xmlhttprequest
  //   const xhr = new XMLHttpRequest();
  //   xhr.onreadystatechange = function () {
  //     if (xhr.readyState == 4 && xhr.status == 200) {
  //       container.innerHTML = xhr.responseText;
  //     }
  //   };
  //   xhr.open("get", "ajax/cari.php?keyword=" + keyword.value);
  //   xhr.send();

  // fetch()
  fetch("../ajax/cari.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});
