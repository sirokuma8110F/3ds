// 事前変数定義スクリプト
const SYS_DEFINE = {
    screen: {
        doc: document.getElementById('container'),
        SCREEN_WIDTH: window.innerWidth,
        SCREEN_HEIGHT: window.innerHeight,
    },
    timestamp: function() {
        const now = new Date();
        const year = now.getFullYear();
        const month = now.getMonth();
        const date = now.getDate();
        const day = now.getDay();
        var EN_DAY = null;
        var JA_DAY = null;
        if (day === 0) {
            EN_DAY = "Sun";
            JA_DAY = "日曜";
        } else if (day === 1) {
            EN_DAY = "Mon";
            JA_DAY = "月曜";
        } else if (day === 2) {
            EN_DAY = "Tue";
            JA_DAY = "火曜";
        } else if (day === 3) {
            EN_DAY = "Wed";
            JA_DAY = "水曜";
        } else if (day === 4) {
            EN_DAY = "Thu";
            JA_DAY = "木曜";
        } else if (day === 5) {
            EN_DAY = "Fri";
            JA_DAY = "金曜";
        } else if (day === 6) {
            EN_DAY = "Sat";
            JA_DAY = "土曜";
        } else {
            EN_DAY = "Undefined";
            JA_DAY = "不明";
        };
        const hours = now.getHours();
        const minute = now.getMinutes();
        const seconds = now.getSeconds();

        const results = {
            date: {
                year: year,
                month: month,
                date: date;
                day: {
                    ja: JA_DAY,
                    en: EN_DAY,
                    num: day
                }
            },
            time: {
                hour: hours,
                min: minute,
                sec: seconds
            },
        }
    },
    api_dir = "/api/"
}