// Search by Filters
const service = [];

function searchFilters() {
    if (service.length > 0) {
        document.getElementById("btn-popup-filter").innerHTML = "Filter by : " + service.join(', ');
    } else {
        document.getElementById("btn-popup-filter").innerHTML = "Filters";
    };
}

$(document).ready(function() {
    $(".btn-service").click(function() {
        let position = service.indexOf($(this).text());
        if (position !== -1) {
            var remove = service.splice(position, 1);
        } else {
            service.push($(this).text());
        }
    });
    $(".btn-sort").click(function() {
        $('input.sortby').attr('value', $(this).text());
    })
})

// Sort
function sort() {
    $("#btn-popup-sort").html("Sort by : " + $(".sortby").val());
    //còn lệnh sql
}



// location
$(document).ready(function() {
    $('#province').change(function() {
        provinceId = $('#province').val();
        $.post('../../Booking-Hairdresser/mvc/controllers/popup.php', { province: provinceId }, function(data) {
            $('#district').html(data);
            alert("Data :" + provinceId);
        }, 'text');
    })
    $('#district').change(function() {
        provinceId = $('#district').val();
        $.post("../mvc/controller/popup.php", { district: districtId }, function(data) {
            $('#wards').html(data);
        }, 'text');
    })
})

//Booking

const morning = [8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5]
const morningTime = ["8:00", "8:30", "9:00", "9:30", "10:00", "10:30", "11:00", "11:30"]
const afternoon = [12, 12.5, 13, 13.5, 14, 14.5, 15, 15.5]
const afternoonTime = ["12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:00", "15:30"]
const evening = [16, 16.5, 17, 17.5, 18, 18.5, 19, 19.5]
const eveningTime = ["16:00", "16:30", "17:00", "17:30", "18:00", "18:30", "19:00", "19:30"]
var timeNow;
const now = new Date(); //thay đổi
const nowCheck = new Date(); //không đổi
if (now.getHours > 10) {
    now.setDate(now.getDate() + 1);
}
if (now.getMinutes() > 30) {
    timeNow = now.getHours() + 0.5;
} else {
    timeNow = now.getHours();
}
const day = [, , , , , , , ]
const days = [, , , , , , , ]
for (let z = 0; z < 7; z++) {
    day[now.getDay()] = "Ngày " + now.getDate() + " Tháng " + (now.getMonth() + 1) + " Năm " + now.getFullYear();
    days[now.getDay()] = new Date(now);
    now.setDate((now.getDate() + 1));
}

function createTime(time) {
    if (time.getDate() == nowCheck.getDate()) {
        createButttonTime(timeNow);
    } else {
        createButttonTime(0);
    }
}

function createButttonTime(time) {
    let mor = '';
    let aft = '';
    let eve = '';
    for (var z = 0; z < 8; z++) {
        if (time <= morning[z]) {
            mor = mor + '<label><input type="radio" name="radiotime" class="radiotime" style="display:none;"><span class="btn btn-time">' + morningTime[z] + '</span></label><br>';
        } else {
            mor = mor + '<label><input type="radio" name="radiotime" class="radiotime" style="display:none;" disabled><span class="btn btn-time">' + morningTime[z] + '</span></label><br>';
        }
    }
    for (var z = 0; z < 8; z++) {
        if (time <= afternoon[z]) {
            aft = aft + '<label><input type="radio" name="radiotime" class="radiotime" style="display:none;"><span class="btn btn-time">' + afternoonTime[z] + '</span></label><br>';
        } else {
            aft = aft + '<label><input type="radio" name="radiotime" class="radiotime" style="display:none;" disabled><span class="btn btn-time">' + afternoonTime[z] + '</span></label><br>';
        }
    }
    for (var z = 0; z < 8; z++) {
        if (time <= evening[z]) {
            eve = eve + '<label><input type="radio" name="radiotime" class="radiotime" style="display:none;"><span class="btn btn-time">' + eveningTime[z] + '</span></label><br>';
        } else {
            eve = eve + '<label><input type="radio" name="radiotime" class="radiotime" style="display:none;" disabled><span class="btn btn-time">' + eveningTime[z] + '</span></label><br>';
        }
    }
    document.getElementById("morning").innerHTML = mor;
    document.getElementById("afternoon").innerHTML = aft;
    document.getElementById("evening").innerHTML = eve;
}



$('.btn-day').click(function(e) {
    if ($(this).text() == "Thứ Hai") {
        document.getElementById("full-day").innerHTML = day[1];
        createTime(days[1]);
    } else
    if ($(this).text() == "Thứ Ba") {
        document.getElementById("full-day").innerHTML = day[2];
        createTime(days[2]);
    } else
    if ($(this).text() == "Thứ Tư") {
        document.getElementById("full-day").innerHTML = day[3];
        createTime(days[3]);
    } else
    if ($(this).text() == "Thứ Năm") {
        document.getElementById("full-day").innerHTML = day[4];
        createTime(days[4]);
    } else
    if ($(this).text() == "Thứ Sáu") {
        document.getElementById("full-day").innerHTML = day[5];
        createTime(days[5]);
    } else
    if ($(this).text() == "Thứ Bảy") {
        document.getElementById("full-day").innerHTML = day[6];
        createTime(days[6]);
    } else {
        document.getElementById("full-day").innerHTML = day[0];
        createTime(days[0]);
    }
})

//rate content
function calcRate(r) {
    const f = ~~r, //tương tự math.floor(r)
        id = 'star' + f + (r % f ? 'half' : '')
    id && (document.getelementbyid(id).checked = !0)
} // đưa ra từ sql
$("input[name='rating']").click(function() {
    if (this.value.length == 1) {
        document.getElementById("markrate").value = this.value;
    } else {
        let rate = this.value.slice(0, 1) + '.5';
        document.getElementById("markrate").value = rate;
    }
})

// preview img content
$(document).ready(function() {
    $('#imagecontent').change(function() {
        $("#previewcontent").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            $("#previewcontent").append('<img src="' + window.URL.createObjectURL(this.files[i]) + '" width="100px" height="100px" style="margin:5px; border-radius:10px;"/>');
        }
    });
});


//Report
$("input[name='radio-report']").click(function() {
    document.getElementById('report-value').value = this.value;
})