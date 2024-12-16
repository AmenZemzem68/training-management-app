var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
  if(!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if(sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}

function confirmDelete(id) {
  var modal = document.getElementById("deleteModal");
  var button = modal.querySelector("#deleteUserBtn");
  button.addEventListener("click", function() {
      window.location.href = "delete.php?id=" + id;
  });
  var deleteModal = new bootstrap.Modal(modal);
  deleteModal.show();
}
function confirmDelete2(id) {
  var modal = document.getElementById("deleteModal2");
  var button = modal.querySelector("#deleteUserBtn2");
  button.addEventListener("click", function() {
      window.location.href = "delete_app.php?id=" + id;
  });
  var deleteModal = new bootstrap.Modal(modal);
  deleteModal.show();
}
function confirmDelete3(id) {
  var modal = document.getElementById("deleteModal3");
  var button = modal.querySelector("#deleteUserBtn3");
  button.addEventListener("click", function() {
      window.location.href = "delete_msg.php?id=" + id;
  });
  var deleteModal = new bootstrap.Modal(modal);
  deleteModal.show();
}
