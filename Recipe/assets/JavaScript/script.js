// get variables for input
const $runSearch = $('#run-search');
let ingredientsArr = [];

function random_item(items) {
  return items[Math.floor(Math.random()*items.length)];
}

const items = [0,1,2,3,4,5,6,7,8,9,10];

// call function on each focusout event
//clear recipe button
$('#clear-recipe').on('click',function(){
  $('#well-section').empty();
});
//clear input button
$('#clear-all').on('click',function(){
  $('#firstInput').val('');
  $('#secondInput').val('');
  $('#thirdInput').val('');
});


$runSearch.on('click', function(event) {
    event.preventDefault();
    let $firstInput = $('#firstInput').val();
    let $secondInput = $('#secondInput').val();
    let $thirdInput = $('#thirdInput').val();

    let edamamURL = "https://api.edamam.com/search?"
    + "q=" + $firstInput + " " + $secondInput + " " + $thirdInput
    + "&?app_id=1c01fad2&app_key=ffbeaab2531fe96153c73abbf7d533f8";
 
    $.ajax({
      url: edamamURL,
      method: "GET"
    }).then(function(response) {
        let dropDown = $("#num-records-select").val();
        let results = response.hits;
        for (let i = 0; i < dropDown; i++) {
  
        let suggestedRecipes = results[i].recipe.url;
        let label = results[i].recipe.label;
        //create variables for div
      let $topChoice = $('#well-section');
      //create variable for href
      let $link = $('<a>');
      $link.attr("href", suggestedRecipes).text(label);
      $link.attr('target', '_blank');
      $link.addClass('list-item');
        //prepend suggestedRecipes to new
        $topChoice.prepend($link);
        };  
    });
});


$('#firstInput').focusout(function(){
    
  let pixabayURL = "https://pixabay.com/api/?" 
  +"key=15274524-8509ca86589479da97506d85c" + "&category=food" + "&q=" + $('#firstInput').val() + "&image_type=photo";

  $.ajax({
      url: pixabayURL,
      method: "GET"
  }).then(function(response){
      let foodImg = response.hits[random_item(items)].largeImageURL;
      $('#image1').attr('src', foodImg);
  });
});

$('#secondInput').focusout(function(){

let pixabayURL = "https://pixabay.com/api/?" 
+"key=15274524-8509ca86589479da97506d85c" + "&category=food" + "&q=" + $('#secondInput').val() + "&image_type=photo";

$.ajax({
  url: pixabayURL,
  method: "GET"
}).then(function(response){
    let foodImg = response.hits[random_item(items)].largeImageURL;
    $('#image2').attr('src', foodImg);
});

});
$('#thirdInput').focusout(function(){

let pixabayURL = "https://pixabay.com/api/?" 
+"key=15274524-8509ca86589479da97506d85c" + "&category=food" + "&q=" + $('#thirdInput').val() + "&image_type=photo";

$.ajax({
  url: pixabayURL,
  method: "GET"
}).then(function(response){
    let foodImg = response.hits[random_item(items)].largeImageURL;
    $('#image3').attr('src', foodImg);
});

});


// This is the area for the carousel
var slideshows = document.querySelectorAll('[data-component="slideshow"]');
  
  // Apply to all slideshows that you define with the markup wrote
  slideshows.forEach(initSlideShow);

  function initSlideShow(slideshow) {

    var slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`); // Get an array of slides

    var index = 0, time = 5000;
    slides[index].classList.add('active');  
    
    setInterval( () => {
      slides[index].classList.remove('active');
      
      //Go over each slide incrementing the index
      index++;
      
      // If you go over all slides, restart the index to show the first slide and start again
      if (index === slides.length) index = 0; 
      
      slides[index].classList.add('active');

    }, time);
  };