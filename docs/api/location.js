const GEOLOCATION = {
    statusCheck = function() {
        if("geolocation" in navigator) {
            console.log("位置情報サービス利用可能");
            return true;
        } else {
            console.log("位置情報サービス利用不可");
            return false;
        }
    }
    get: function() {
        const pos = navigator.geolocation.getCurrentPosition();
        const pos_info = {
            accuracy: pos.coords.accuracy,
            lat: pos.coords.latitude,
            lon: pos.coords.longitude,
            height: pos.coords.altitude,
            speed: {
                mm: pos.coords.speed,
                kmh: pos.coords.speed * 3.6
            }
        };
        return pos_info;
    }
}