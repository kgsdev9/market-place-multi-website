let img_box = document.querySelector('#img_box');


let list_img = document.querySelectorAll('.other_img');

list_img.forEach(element => {

    element.addEventListener('click',function(){

        event.preventDefault();
        img_box.src = element.src
    })
});
