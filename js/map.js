// INIT MAP
const map = L.map('map').setView([16.4023, 120.5960], 13); // Baguio default

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data'
}).addTo(map);

let currentLat = 0;
let currentLng = 0;

// GET USER LOCATION
navigator.geolocation.getCurrentPosition(pos => {
    currentLat = pos.coords.latitude;
    currentLng = pos.coords.longitude;

    map.setView([currentLat, currentLng], 15);
});

// POST STATUS
function postStatus() {
    const content = document.getElementById("statusInput").value;

    fetch("api/status.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            content: content,
            lat: currentLat,
            lng: currentLng
        })
    })
    .then(res => res.json())
    .then(data => {
        loadStatuses();
    });
}

// LOAD STATUSES
function loadStatuses() {
    fetch("api/status.php")
    .then(res => res.json())
    .then(data => {

        data.forEach(status => {
            L.marker([status.latitude, status.longitude])
                .addTo(map)
                .bindPopup(status.content);
        });

    });
}

// INITIAL LOAD
loadStatuses();