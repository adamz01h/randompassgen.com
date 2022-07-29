
$( document ).ready(function() {
   // console.log( "document loaded" );
    $('#final_pass').val('Your new password will appear here.');
});

function word_list(password) {
	 var list = ["apple", "bestbuy", "coffee", "drip", "egg", "fruit", "golf", "hulu", "iphone", "jack", "korean", "laptop", "music", "nut", "omelet", "park", "queen", "rope", "skype", "tokyo", "usa", "visa", "walmart", "xbox", "yelp", "zip"];


	if (document.getElementById("NATO").checked) {
         list = ["alfa","bravo","charlie","delta","echo","foxtrot","golf","hotel","india","juliett","kilo","lima","mike","november","oscar","papa","quebec","romeo","sierra","tango","uniform","victor","whiskey","x-ray","yankee","zulu"];

    }

    var out = "";
    for (var b = 0; b < password.length; b++) {
        var letter = password.charCodeAt(b);
        if (65 <= letter && letter <= 90) {
            letter -= 65;
            out += list[letter].toUpperCase()
        } else {
            if (97 <= letter && letter <= 122) {
                letter -= 97;
                out += list[letter]
            } else {
                out += password.substring(b, b + 1)
            }
        }
        out += " "
    }
    return out
}

function add_random(input, limit, output) {
    var d = Math.floor(Math.random() * input.length);
    var c = Math.floor(Math.random() * limit);
    var e = output.substring(0, c) + input.substring(d, d + 1) + output.substring(c, limit);
    output = e;
    return output
}
function make_password(pwlen, nosim, inclower, incupper, incnumbers, incsymbol, noamb) {
    var lower_letters = "abcdefghjkmnpqrstuvwxyz";
    var upper_letters = "ABCDEFGHJKLMNPQRSTUVWXYZ";
    var numbers = "23456789";
    var symbols = "!#$%&*+-=?@^_";
    if (!nosim) {
        lower_letters += "ilo";
        upper_letters += "IO";
        numbers += "01";
        symbols += "|"
    }
    var letter_list = "";
    var password_length = 0;
    if (!noamb) {
        symbols += "{}[]()\/'\"`~,;:.<>\\";
    }
    if (inclower == 1) {
        letter_list += lower_letters;
        password_length++
    }
    if (incupper == 1) {
        letter_list += upper_letters;
        password_length++
    }
    if (incnumbers == 1) {
        letter_list += numbers;
        password_length++
    }
    if (incsymbol == 1) {
        letter_list += symbols;
        password_length++
    }
    if (password_length == 0) {
        out = "You must select at least one character set!";
        return out
    }
    var list_len = letter_list.length;
    var limit = pwlen - password_length;
    var out = "";
    for (var e = 0; e < limit; e++) {
        var randomsymbol = Math.floor(Math.random() * list_len);
        out += letter_list.substring(randomsymbol, randomsymbol + 1)
    }
    if (incupper) {
        out = add_random(upper_letters, limit, out);
        limit++
    }
    if (inclower) {
        out = add_random(lower_letters, limit, out);
        limit++
    }
    if (incnumbers) {
        out = add_random(numbers, limit, out);
        limit++
    }
    if (incsymbol) {
        out = add_random(symbols, limit, out)
    }
    return out
}

function roll_password() {
    var pwlen = document.getElementById("pwlen").value;
    var nosim = 0;
    if (document.getElementById("Nosimilar").checked) {
        nosim = 1
    }
    var incsymbol = 0;
    if (document.getElementById("Symbols").checked) {
        incsymbol = 1
    }
    var noamb = 0;
    if (document.getElementById("NoAmb").checked) {
        noamb = 1
    }
    var inclower = 0;
    if (document.getElementById("Lowercase").checked) {
        inclower = 1
    }
    var auto_select = 0;
    if (document.getElementById("AutoSelect").checked) {
        auto_select = 1
    }
    var incupper = 0;
    if (document.getElementById("Uppercase").checked) {
        incupper = 1
    }
    var incnumbers = 0;
    if (document.getElementById("Numbers").checked) {
        incnumbers = 1
    }
    
    var password = make_password(pwlen, nosim, inclower, incupper, incnumbers, incsymbol, noamb);
    var phonetic = word_list(password);
    document.getElementById("final_pass").value = password;
    if (pwlen > 50) phonetic = "";
    document.getElementById("PhoneticPronunciation").innerHTML = phonetic;
    if (auto_select){
        $("#final_pass").select();
     }
}


function check_cookie(element_id) {
    var c, a, e, d = document.cookie.split(";");
    console.log(c);
    console.log(a);
    console.log(e);
    console.log(d);
    for (c = 0; c < d.length; c++) {
        a = d[c].substr(0, d[c].indexOf("="));
        e = d[c].substr(d[c].indexOf("=") + 1);
        a = a.replace(/^\s+|\s+$/g, "");
        if (a == element_id) {
            return unescape(e)
        }
    }
}
function write_cookie(element_id, bool_val, time) {
    var date = new Date();
    date.setDate(date.getDate() + time);
    var cookie_value = escape(bool_val) + ((time == null) ? "" : "; expires=" + date.toUTCString());
    document.cookie = element_id + "=" + cookie_value
   
}

function expire_cookie() {
    var d = document.cookie.split(";");
    for (var c = 0; c < d.length; c++) {
        var b = d[c];
        var e = b.indexOf("=");
        var a = e > -1 ? b.substr(0, e) : b;
        document.cookie = a + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT"
    }
}

function update_cookie(element_id, time) {
    var bool_val = document.getElementById(element_id).checked;
    write_cookie(element_id, bool_val, time);
}

function save_settings(bool) {
    var is_checked = document.getElementById("SaveSettings").checked;
    var time = 60;
    if (is_checked) {
        update_cookie("Symbols", time);
        update_cookie("Lowercase", time);
        update_cookie("Uppercase", time);
        update_cookie("Numbers", time);
        update_cookie("Nosimilar", time);
        update_cookie("NoAmb", time);
        update_cookie("NATO", time);
        update_cookie("AutoSelect", time);
        update_cookie("SaveSettings", time);

        var pwlen = document.getElementById("pwlen").value;
        write_cookie("pwlen", pwlen, time);
    } else {
        if (bool) { //if true
            expire_cookie();
        }
    }
}

function OnCopy(){
	var copyText = $("final_pass");

  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  document.execCommand("copy");
}


function copyText(){ 
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($("#final_pass").val()).select();
    //$("#final_pass").select();
    document.execCommand("copy");
    $temp.remove();
}


