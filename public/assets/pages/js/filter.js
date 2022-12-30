
let citySelect = document.querySelector('#city_select');

let countrySelect = document.querySelector('#country_select');

let inputs_price = document.querySelectorAll('.input_price');
let search_city_btn = document.querySelector('#search_city_btn');
let search_country_btn = document.querySelector('#search_country_btn');
let search_by_price_btn = document.querySelector('#search_by_price_btn');


if(citySelect!=null){
  citySelect.addEventListener('change',function(){

    event.preventDefault();

      search_city_btn.click();


    })

}



if(countrySelect!=null){
  countrySelect.addEventListener('change',function(){

    event.preventDefault();

      search_country_btn.click();


    })
}




