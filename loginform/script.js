var sidebarOpen = false;

var sidebarCloseIcon = document.getElementById("sidebarIcon");

function toggleSidebar() {
  if (!sidebarOpen) {
    document.getElementById("sidebar").classList.add("sidebar_responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    document.getElementById("sidebar").classList.remove("sidebar_responsive");
    sidebarOpen = false;
  }
}

