let collapse = document.getElementsByClassName("collapse");

for (i = 0; i < collapse.length; i++){
    collapse[i].addEventListener("click", function(){
        this.classList.toggle("active");
        var text = this.nextElementSibling;
        if(text.style.display === "block"){
            text.style.display = "none";
        } else{
            text.style.display = "block";
        }
    });
}

const config = {
    type: 'carousel',
    perView: 3,
    focusAt: 1
  }

new Glide('.glide', config).mount();

  