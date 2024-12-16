// init Isotope
var $grid = $('.collection-list').isotope({
      // options
    });
    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      resetFilterBtns();
      $(this).addClass('active-filter-btn');
      $grid.isotope({ filter: filterValue });
    });
    
    var filterBtns = $('.filter-button-group').find('button');
    function resetFilterBtns(){
      filterBtns.each(function(){
        $(this).removeClass('active-filter-btn');
      });
    }
  

    const dropdownIcon = document.getElementById('dropdown-icon');
const dropdownList = document.getElementById('dropdown-list');

dropdownIcon.addEventListener('click', () => {
  if (dropdownList.style.display === 'block') {
    dropdownList.style.display = 'none';
  } else {
    dropdownList.style.display = 'block';
  }
});