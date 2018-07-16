var get = document.querySelector;

function getStyle(elem, styleName) {
    if (elem.style[nav_title]) {
        return elem.style[nav_title];
    }
    else if (elem.currentStyle) {//IE
        return elem.currentStyle[styleName];
    }
    else if (document.defaultView && document.defaultView.getComputedStyle) {//DOM
        styleName = styleName.replace(/([A-Z])/g, '-$1').toLowerCase();
        var s = document.defaultView.getComputedStyle(elem, '');
        return s && s.getPropertyValue(nav_title);
    }
    else {
        return null;
    }
}




var nine1 = $.ajax({
    id: 8,
    title: '\u5173\u4e8e\u6211\u4eec1',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=9',
    data: {
        thumb: "",
        description: "\u5173\u4e8e\u6211\u4eec1"

    },
    updatetime: "1526373726000",
    cache: false,
    dataType: 'json',

     
});
var nine2 = $.ajax({
    id: 9,
    title: '\u5173\u4e8e\u6211\u4eec1',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=9',
    data: {
        thumb: "",
        description: "\u5173\u4e8e\u6211\u4eec2"
        
    },
    updatetime: "1526373739000",
    cache: false,
    dataType: 'json',

     
});
var eight1 = $.ajax({
    id: 5,
    title: '\u8003\u8bd5\u5927\u7eb21',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=8',
    data: {
        thumb: "",
        description: "\u8003\u8bd5\u5927\u7eb21"
        
    },
    updatetime: "1526373646000",
    cache: false,
    dataType: 'json',

     
});
var eight2 = $.ajax({
    id: 6,
    title: '\u8003\u8bd5\u5927\u7eb21',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=8',
    data: {
        thumb: "",
        description: "\u8003\u8bd5\u5927\u7eb22"
        
    },
       updatetime: "1526373675000",
    cache: false,
    dataType: 'json',

     
});
var eight3 = $.ajax({
    id: 7,
    title: '\u8003\u8bd5\u5927\u7eb21',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=8',
    data: {
        thumb: "",
        description: "\u8003\u8bd5\u5927\u7eb23"
        
    },
       updatetime: "1526373703000",
    cache: false,
    dataType: 'json',

     
});
var seven1 = $.ajax({
    id: 3,
    title: '\u8003\u6838\u65b9\u5f0f1',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=7',
    data: {
        thumb: "",
        description: "\u8003\u6838\u65b9\u5f0f1"
        
    },
       updatetime: "1526373604000",
    cache: false,
    dataType: 'json',

     
});
var seven2 = $.ajax({
    id: 4,
    title: '\u8003\u6838\u65b9\u5f0f2',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=7',
    data: {
        thumb: "",
        description: "\u8003\u6838\u65b9\u5f0f2"
        
    },
     updatetime: "1526373624000",
    cache: false,
    dataType: 'json',
});
var six1 = $.ajax({
    id: 1,
    title: '\u6280\u672f\u6587\u7ae01',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=6',
    data: {
        thumb: "",
        description: "\u6280\u672f\u6587\u7ae01"
        
    },
     updatetime: "1526373492000",
    cache: false,
    dataType: 'json',
});
var six2 = $.ajax({
    id: 2,
    title: '\u6280\u672f\u6587\u7ae02',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=6',
    data: {
        thumb: "",
        description: "\u6280\u672f\u6587\u7ae02"
        
    },
     updatetime: "1526373516000",
    cache: false,
    dataType: 'json',
});
var two1 = $.ajax({
    id: 1,
    title: '\u884c\u4e1a\u52a8\u6001\u6587\u7ae01',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=2',
    data: {
        thumb: "",
        description: "\u884c\u4e1a\u52a8\u6001\u6587\u7ae01"
        
    },
     updatetime: "1526373452000",
    cache: false,
    dataType: 'json',
});
var two2 = $.ajax({
    id: 2,
    title: '\u884c\u4e1a\u52a8\u6001\u6587\u7ae02',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=2',
    data: {
        thumb: "",
        description: "\u884c\u4e1a\u52a8\u6001\u6587\u7ae02"
        
    },
     updatetime: "1526373469000",
    cache: false,
    dataType: 'json',
});
var two3 =$.ajax({
    id: 3,
    title: '\u884c\u4e1a\u52a8\u6001\u6587\u7ae03',
    type: 'get',
    url: 'http://www.csst.com.cn/index.php?m=dbsource&c=call&a=get&id=2',
    data: {
        thumb: "",
        description: "\u884c\u4e1a\u52a8\u6001\u6587\u7ae03"
        
    },
     updatetime: "1526376414000",
    cache: false,
    dataType: 'json',
})

