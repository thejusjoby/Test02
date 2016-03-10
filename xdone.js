var dayarr = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
var mS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
d = new Date();
date = d.getDay();
mon = d.getMonth();
year = d.getYear();
toDay = dayarr[date];
currentMonth = mS[mon];
currentyear = 1900 + year;

document.getElementsByClassName("article-date").innerHTML = toDay +","+ currentMonth + " " +currentyear;