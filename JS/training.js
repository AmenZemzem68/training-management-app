const dropdownIcon = document.getElementById('dropdown-icon');
const dropdownList = document.getElementById('dropdown-list');

dropdownIcon.addEventListener('click', () => {
  if (dropdownList.style.display === 'block') {
    dropdownList.style.display = 'none';
  } else {
    dropdownList.style.display = 'block';
  }
});