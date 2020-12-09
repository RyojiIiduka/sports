let map, infoWindow;

function initMap() {

  //初期位置と設定
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: '', lng: '' },
    zoom: 12,
  });
  
  //現在地の取得
  infoWindow = new google.maps.InfoWindow();
  const locationButton = document.createElement("button");
  locationButton.classList.add("custom-map-control-button");
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  
  //ウィンドウロード時に現在地を取得する
  window.onload = function(){
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };
          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  };
  
  //ピン表示する緯度経度
  const tokyodome = { lat: 35.7056232, lng: 139.751919 };
  const tokyo = { lat: 35.4138, lng: 139.4513 };
  
  //ピンクリック時に表示する文言
  const contentString =
  '<p>応募ペー字へ</p>'
    ;
  
  //情報ウィンドウ定義
  const mongon = new google.maps.InfoWindow({
    content: contentString,
  });

  //ピン情報
  const dome = new google.maps.Marker({
    position: tokyodome,
    map: map,
    title:"dome",
  });
  
  const marker = new google.maps.Marker({
    position: tokyo,
    map: map,
  });
  
  //クリックイベント定義
  dome.addListener("click", () => {
    mongon.open(map, dome);
  });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}