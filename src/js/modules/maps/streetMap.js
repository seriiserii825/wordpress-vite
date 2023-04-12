import "leaflet";

export default function streetMap() {
    let container = L.DomUtil.get("mymap");
    if (container != null) {
        container._leaflet_id = null;
    }

    let mymap = L.map("mymap").setView(
        [45.094462053341054, 7.691014727194472],
        16
    );
    let myIcon = L.icon({
        iconUrl: "/wp-content/themes/bs-base/assets/i/static/map-icon.png",
        iconSize: [38, 38],
        iconAnchor: [38, 38],
        shadowSize: [68, 95],
        shadowAnchor: [22, 94],
    });

    let marker = L.marker([45.094462053341054, 7.691014727194472], {
        icon: myIcon,
    }).addTo(mymap);

    L.tileLayer(
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}",
        {
            attribution:
                'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 23,
            icon: "/wp-content/themes/bs-micci-giovani/assets/i/static/map-icon.svg",
            id: "mapbox/streets-v11",
            tileSize: 512,
            zoomOffset: -1,
            accessToken:
                "pk.eyJ1IjoiYmx1ZGVsZWdvIiwiYSI6ImNrdjJkM3EwZzBiZzkydXMzbTZ1d3I3YnEifQ.UcO5wDKFiFDPQ6M8U7-byg",
        }
    ).addTo(mymap);
}
